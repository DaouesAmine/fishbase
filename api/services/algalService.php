<?php

Propel::init(ROOT_DIR . '/conf/fbapp-conf.php');
set_include_path(ROOT_DIR . '/classes' . PATH_SEPARATOR . get_include_path());

class AlgalService
{
    public static function getOneAlgal()
    {
        return AlgalspeciesQuery::create()->findPK(1);
    }
}