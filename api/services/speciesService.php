<?php

Propel::init(ROOT_DIR . '/conf/fbapp-conf.php');
set_include_path(ROOT_DIR . '/classes' . PATH_SEPARATOR . get_include_path());

/**
 * @package
 * @category
 * @subpackage
 *
 * @SWG\Resource(
 *   resourcePath="/species",
 *   description="Operations about Species",
 *   produces="['application/json','application/xml']"
 * )
 */
class SpeciesService
{
    /**
     * @SWG\Api(
     *   path="/species/{id}",
     * @SWG\Operation(
     *     method="GET",
     *     summary="Find Species by ID",
     *     notes="Returns an Species based on ID",
     *     type="Species",
     *     nickname="getOneSpecies",
     * @SWG\Parameter(
     *       name="id",
     *       description="ID of Species that needs to be fetched",
     *       required=true,
     *       type="integer",
     *       format="int64",
     *       paramType="path",
     *       minimum="1.0",
     *       maximum="100000.0"
     *     ),
     * @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     * @SWG\ResponseMessage(code=404, message="Species not found")
     *   )
     * )
     */
    public static function getOneSpecies($id)
    {
        return SpeciesQuery::create()->findPK($id);
    }

    /**
     * @SWG\Api(
     *   path="/species/{name}",
     * @SWG\Operation(
     *     method="GET",
     *     summary="Find Species by Name",
     *     notes="Returns an Species based on Name",
     *     type="Species",
     *     nickname="getOneSpecies",
     * @SWG\Parameter(
     *       name="$speciesName",
     *       description="Name of Species that needs to be fetched",
     *       required=true,
     *       type="string",
     *       paramType="path"
     *     ),
     * @SWG\ResponseMessage(code=400, message="Invalid Name supplied"),
     * @SWG\ResponseMessage(code=404, message="Species not found")
     *   )
     * )
     */
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