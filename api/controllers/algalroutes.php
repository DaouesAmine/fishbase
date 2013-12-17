<?php

require ROOT_DIR . '/api/services/algalService.php';

// http://local.dev/fishbase/api/algal

$app->get('/algal', function () use ($app) {
    $res = AlgalService::getOneAlgal();
    FBResponse::doResponse($app, $res->toJSON(false), true);
});
