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
 *   resourcePath="/cname",
 *   description="Operations about Common Names",
 *   produces="['application/json','application/xml']"
 * )
 */
class commonNameService
{
    /**
     * @SWG\Api(
     *   path="/cname/letter/{letter}",
     * @SWG\Operation(
     *     method="GET",
     *     summary="Find common name list by letter",
     *     notes="Returns an list of common names the start with letter",
     *     type="CommonName",
     *     nickname="getLetterList",
     * @SWG\Parameter(
     *       name="letter",
     *       description="start letter",
     *       required=true,
     *       type="string",
     *       paramType="path"
     *     ),
     * @SWG\ResponseMessage(code=400, message="Invalid Letter supplied"),
     * @SWG\ResponseMessage(code=404, message="Letter not found")
     *   )
     * )
     */

    public static function getCommonNamesList($letter)
    {
        return ComnamesQuery::create()->filterByComname($letter . '%')->select(array('comname', 'autoctr'))->find();
    }

    /**
     * @SWG\Api(
     *   path="/cname/{name}",
     * @SWG\Operation(
     *  method="GET",
     *  type = "CommonName",
     * @SWG\Parameter(
     *  name="name",
     *  required = true,
     *  type = "string",
     *  paramType = "path"
     *      )
     *  )
     * )
     */
    public static function getOneCommonName($name)
    {
        return ComnamesQuery::create()->findOneByComname($name);
    }
}