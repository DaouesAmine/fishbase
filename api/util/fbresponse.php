<?php

require_once ROOT_DIR . '/api/util/tools.php';

class FBResponse
{
    public static function doResponse($app, $data, $success = true)
    {
        if (!$success) {
            $app->response->setStatus(404);
            $response = array(
                'type' => 'not_found',
                'message' => 'The requested resource does not exist.'
            );
            $app->halt(404, json_encode($response));
        }

        if (empty($data)) {
            $app->halt(404, json_encode($response));
        } else {
            $app->response->setStatus(200);
        }

        $prettyprint = $app->request->params('pretty');
        $type = $app->request->params('type');

        if ($type == 'json' || $type == null) {
            header('Content-type: application/json');
            if ($prettyprint == '1' || $prettyprint == 'true') {
                $tools = new Tools();
                echo '<pre>' . $tools->prettyPrint($data->toJSON(false)) . '</pre>';
            } else {
                echo $data->toJSON(false);
            }
        } else if ($type == 'xml') {
            header('Content-Type: application/xml;');
            if ($prettyprint == '1' || $prettyprint == 'true') {
                echo htmlentities($data->toXML(false, false));
            } else {
                echo $data->toXML(false, false);
            }
        }
    }
}
