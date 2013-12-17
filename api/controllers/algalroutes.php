<?php

require ROOT_DIR . '/api/services/algalService.php';

//$app->get('/algal', 'getOneAlgal'); // http://local.dev/fishbase/api/algal

$app->get('/algal', function () use ($app) {
    echo AlgalService::getOneAlgal();
});