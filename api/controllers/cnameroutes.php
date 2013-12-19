<?php

require ROOT_DIR . '/api/services/cnameService.php';

// http://local.dev/fishbase/api/algal

$app->get('/cname/letter/:letter', function ($letter) use ($app) {
    $res = CnameService::getLetterList($letter);
    FBResponse::doResponse($app, $res, true);
});
