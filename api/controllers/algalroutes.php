<?php

require ROOT_DIR . '/api/services/algalService.php';

// http://local.dev/fishbase/api/algal

$app->get('/algal/:id', function ($id) use ($app) {
    $res = AlgalService::getOneAlgal($id);
    FBResponse::doResponse($app, $res, true);
});
