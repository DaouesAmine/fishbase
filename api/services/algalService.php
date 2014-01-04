<?php

Propel::init(ROOT_DIR . '/conf/fbapp-conf.php');
set_include_path(ROOT_DIR . '/classes' . PATH_SEPARATOR . get_include_path());

use Swagger\Annotations as SWG;

/**
 * @package
 * @category
 * @subpackage
 *
 * @SWG\Resource(
 *   resourcePath="/algal",
 *   description="Operations about Algae",
 *   produces="['application/json','application/xml']"
 * )
 */
class AlgalService
{
    /**
     * @SWG\Api(
     *   path="/algal/{id}",
     * @SWG\Operation(
     *     method="GET",
     *     summary="Find Algae by ID",
     *     notes="Returns an Algae based on ID",
     *     type="Algal",
     *     nickname="getOneAlgal",
     * @SWG\Parameter(
     *       name="id",
     *       description="ID of algae that needs to be fetched",
     *       required=true,
     *       type="integer",
     *       format="int64",
     *       paramType="path",
     *       minimum="1.0",
     *       maximum="100000.0"
     *     ),
     * @SWG\ResponseMessage(code=400, message="Invalid ID supplied"),
     * @SWG\ResponseMessage(code=404, message="Algae not found")
     *   )
     * )
     */
    public static function getOneAlgal($id)
    {
        return AlgalspeciesQuery::create()->findPK($id);
    }
}