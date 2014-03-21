<?php

require ROOT_DIR . '/api/services/commonNameService.php';

// http://local.dev/fishbase/api/algal

$app->get('/cname/letter/:letter', function ($letter) use ($app) {
    $res = commonNameService::getCommonNamesList($letter);
    FBResponse::doResponse($app, $res, true);
});

$app->get('/cname/:name', function ($name) use ($app) {
    $res = commonNameService::getOneCommonName($name);
    FBResponse::doResponse($app, $res, true);
});
