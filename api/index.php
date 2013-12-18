<?php
header('Access-Control-Allow-Origin: *');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');
session_cache_limiter('nocache');

require_once('../config.php');

require ROOT_DIR . '/vendor/autoload.php';

require ROOT_DIR . '/api/util/fbresponse.php';

Propel::init(ROOT_DIR . '/conf/fbapp-conf.php');
set_include_path(ROOT_DIR . '/classes' . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim();

// delegate to the appropriate route
$app->hook("slim.before.router", function () use ($app) {
    if (strpos($app->request()->getPathInfo(), "/algal") === 0) {
        require_once(ROOT_DIR . '/api/controllers/algalroutes.php');
    } elseif (strpos($app->request()->getPathInfo(), "/species") === 0) {
        require_once(ROOT_DIR . '/api/controllers/speciesroutes.php');
    } elseif (strpos($app->request()->getPathInfo(), "/another") === 0) {
        require_once(ROOT_DIR . '/api/routes.php');
    }
});


$app->run();
