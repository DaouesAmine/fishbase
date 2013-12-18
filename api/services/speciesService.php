<?php

Propel::init(ROOT_DIR . '/conf/fbapp-conf.php');
set_include_path(ROOT_DIR . '/classes' . PATH_SEPARATOR . get_include_path());

class SpeciesService
{
    public static function getOneAlgal()
    {
        return SpeciesQuery::create()->findPK(1);
    }

    public static function getSpecies($speciesName)
    {
        $species =  SpeciesQuery::create()->findOneBySpecies($speciesName);
        return $species;
    }

    public static function getSpeciesPage($pageArg, $numrows = 50)
    {
        $species =  SpeciesQuery::create()
            ->paginate($page = $pageArg, $rowsPerPage = 30);
        return $species;
    }
}