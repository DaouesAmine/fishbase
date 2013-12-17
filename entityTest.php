<?php
// Include the main Propel script
require_once 'vendor/propel/propel1/runtime/lib/Propel.php';
require_once 'classes/fbapp/util/tools.php';

// Initialize Propel with the runtime configuration
Propel::init("conf/fbapp-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("classes" . PATH_SEPARATOR . get_include_path());

$res = AlgalspeciesQuery::create()->findPK(1);

echo $res->toJSON(false);
//$tools = new Tools();
//echo $tools->prettyPrint(json_encode($res->toJSON(false)));

echo "<br/><br/>";

$resGenus = AlgalspeciesQuery::create()
    ->filterByGenus('Closterium')
    ->find();

echo $resGenus->toJSON(false);