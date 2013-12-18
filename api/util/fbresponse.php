<?php

require_once ROOT_DIR . '/api/util/tools.php';

class FBResponse
{
    public static function doResponse($app, $json, $success = true)
    {
        if (!$success)
        {
            $app->response->setStatus(404);
            $response = array(
                'type' => 'not_found',
                'message' => 'The requested resource does not exist.'
            );
            $app->halt(404, json_encode($response));
        }

        $app->response->setStatus(200);
        $prettyprint = $app->request->params('pretty');
        if ($prettyprint == '1' || $prettyprint == 'true') {
            $tools = new Tools();
            echo '<pre>' . $tools->prettyPrint($json) . '</pre>';
        } else {
            echo $json;
        }
    }
}
