<?php


/**
 * Base class that represents a query for the 'genera' table.
 *
 *
 *
 * @method GeneraQuery orderByGencode($order = Criteria::ASC) Order by the GenCode column
 * @method GeneraQuery orderByGenname($order = Criteria::ASC) Order by the GenName column
 * @method GeneraQuery orderByGenauthoryear($order = Criteria::ASC) Order by the GenAuthorYear column
 * @method GeneraQuery orderByGenauthor($order = Criteria::ASC) Order by the GenAuthor column
 * @method GeneraQuery orderByGenyear($order = Criteria::ASC) Order by the GenYear column
 * @method GeneraQuery orderByGeninex($order = Criteria::ASC) Order by the GenInEx column
 * @method GeneraQuery orderByGencomname($order = Criteria::ASC) Order by the GenComName column
 * @method GeneraQuery orderByGenrefno($order = Criteria::ASC) Order by the GenRefno column
 * @method GeneraQuery orderByAvailable($order = Criteria::ASC) Order by the Available column
 * @method GeneraQuery orderByGenstatus($order = Criteria::ASC) Order by the GenStatus column
 * @method GeneraQuery orderByGenstatusiczn($order = Criteria::ASC) Order by the GenStatusICZN column
 * @method GeneraQuery orderByGencodevalid($order = Criteria::ASC) Order by the GenCodeValid column
 * @method GeneraQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method GeneraQuery orderByEtymology($order = Criteria::ASC) Order by the Etymology column
 * @method GeneraQuery orderByGender($order = Criteria::ASC) Order by the Gender column
 * @method GeneraQuery orderBySubgenusof($order = Criteria::ASC) Order by the SubgenusOf column
 * @method GeneraQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method GeneraQuery orderBySubfamily($order = Criteria::ASC) Order by the Subfamily column
 * @method GeneraQuery orderByTribe($order = Criteria::ASC) Order by the Tribe column
 * @method GeneraQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method GeneraQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method GeneraQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method GeneraQuery orderByFbSppnb($order = Criteria::ASC) Order by the FB_SppNb column
 * @method GeneraQuery orderByCoffSppnb($order = Criteria::ASC) Order by the CofF_SppNb column
 * @method GeneraQuery orderByFowSppnb($order = Criteria::ASC) Order by the FoW_SppNb column
 * @method GeneraQuery orderByGsdGenusfk($order = Criteria::ASC) Order by the GSD_GenusFk column
 * @method GeneraQuery orderByGsdGenusreffk($order = Criteria::ASC) Order by the GSD_GenusRefFk column
 * @method GeneraQuery orderByDistribution($order = Criteria::ASC) Order by the Distribution column
 * @method GeneraQuery orderByHabitat($order = Criteria::ASC) Order by the Habitat column
 * @method GeneraQuery orderByWatersalinity($order = Criteria::ASC) Order by the WaterSalinity column
 * @method GeneraQuery orderByMarine($order = Criteria::ASC) Order by the Marine column
 * @method GeneraQuery orderByBrackish($order = Criteria::ASC) Order by the Brackish column
 * @method GeneraQuery orderByFreshwater($order = Criteria::ASC) Order by the Freshwater column
 * @method GeneraQuery orderByDiagnosis($order = Criteria::ASC) Order by the Diagnosis column
 * @method GeneraQuery orderByDspinesmin($order = Criteria::ASC) Order by the DspinesMin column
 * @method GeneraQuery orderByDspinesmax($order = Criteria::ASC) Order by the DspinesMax column
 * @method GeneraQuery orderByDsoftraysmin($order = Criteria::ASC) Order by the DsoftRaysMin column
 * @method GeneraQuery orderByDsoftraysmax($order = Criteria::ASC) Order by the DsoftRaysMax column
 * @method GeneraQuery orderByTotaldsoftraysmin($order = Criteria::ASC) Order by the TotalDsoftRaysMin column
 * @method GeneraQuery orderByTotaldsoftraysmax($order = Criteria::ASC) Order by the TotalDsoftRaysMax column
 * @method GeneraQuery orderByDsoftraysbranchmin($order = Criteria::ASC) Order by the DsoftRaysBranchMin column
 * @method GeneraQuery orderByDsoftraysbranchmax($order = Criteria::ASC) Order by the DsoftRaysBranchMax column
 * @method GeneraQuery orderByAspinesmin($order = Criteria::ASC) Order by the AspinesMin column
 * @method GeneraQuery orderByAspinesmax($order = Criteria::ASC) Order by the AspinesMax column
 * @method GeneraQuery orderByAsoftraysmin($order = Criteria::ASC) Order by the AsoftRaysMin column
 * @method GeneraQuery orderByAsoftraysmax($order = Criteria::ASC) Order by the AsoftRaysMax column
 * @method GeneraQuery orderByTotalasoftraysmin($order = Criteria::ASC) Order by the TotalAsoftRaysMin column
 * @method GeneraQuery orderByTotalasoftraysmax($order = Criteria::ASC) Order by the TotalAsoftRaysMax column
 * @method GeneraQuery orderByAsoftraysbranchmin($order = Criteria::ASC) Order by the AsoftRaysBranchMin column
 * @method GeneraQuery orderByAsoftraysbranchmax($order = Criteria::ASC) Order by the AsoftRaysBranchMax column
 * @method GeneraQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GeneraQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method GeneraQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GeneraQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method GeneraQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GeneraQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 *
 * @method GeneraQuery groupByGencode() Group by the GenCode column
 * @method GeneraQuery groupByGenname() Group by the GenName column
 * @method GeneraQuery groupByGenauthoryear() Group by the GenAuthorYear column
 * @method GeneraQuery groupByGenauthor() Group by the GenAuthor column
 * @method GeneraQuery groupByGenyear() Group by the GenYear column
 * @method GeneraQuery groupByGeninex() Group by the GenInEx column
 * @method GeneraQuery groupByGencomname() Group by the GenComName column
 * @method GeneraQuery groupByGenrefno() Group by the GenRefno column
 * @method GeneraQuery groupByAvailable() Group by the Available column
 * @method GeneraQuery groupByGenstatus() Group by the GenStatus column
 * @method GeneraQuery groupByGenstatusiczn() Group by the GenStatusICZN column
 * @method GeneraQuery groupByGencodevalid() Group by the GenCodeValid column
 * @method GeneraQuery groupByRemark() Group by the Remark column
 * @method GeneraQuery groupByEtymology() Group by the Etymology column
 * @method GeneraQuery groupByGender() Group by the Gender column
 * @method GeneraQuery groupBySubgenusof() Group by the SubgenusOf column
 * @method GeneraQuery groupByFamcode() Group by the FamCode column
 * @method GeneraQuery groupBySubfamily() Group by the Subfamily column
 * @method GeneraQuery groupByTribe() Group by the Tribe column
 * @method GeneraQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method GeneraQuery groupByComment() Group by the Comment column
 * @method GeneraQuery groupBySyncode() Group by the SynCode column
 * @method GeneraQuery groupByFbSppnb() Group by the FB_SppNb column
 * @method GeneraQuery groupByCoffSppnb() Group by the CofF_SppNb column
 * @method GeneraQuery groupByFowSppnb() Group by the FoW_SppNb column
 * @method GeneraQuery groupByGsdGenusfk() Group by the GSD_GenusFk column
 * @method GeneraQuery groupByGsdGenusreffk() Group by the GSD_GenusRefFk column
 * @method GeneraQuery groupByDistribution() Group by the Distribution column
 * @method GeneraQuery groupByHabitat() Group by the Habitat column
 * @method GeneraQuery groupByWatersalinity() Group by the WaterSalinity column
 * @method GeneraQuery groupByMarine() Group by the Marine column
 * @method GeneraQuery groupByBrackish() Group by the Brackish column
 * @method GeneraQuery groupByFreshwater() Group by the Freshwater column
 * @method GeneraQuery groupByDiagnosis() Group by the Diagnosis column
 * @method GeneraQuery groupByDspinesmin() Group by the DspinesMin column
 * @method GeneraQuery groupByDspinesmax() Group by the DspinesMax column
 * @method GeneraQuery groupByDsoftraysmin() Group by the DsoftRaysMin column
 * @method GeneraQuery groupByDsoftraysmax() Group by the DsoftRaysMax column
 * @method GeneraQuery groupByTotaldsoftraysmin() Group by the TotalDsoftRaysMin column
 * @method GeneraQuery groupByTotaldsoftraysmax() Group by the TotalDsoftRaysMax column
 * @method GeneraQuery groupByDsoftraysbranchmin() Group by the DsoftRaysBranchMin column
 * @method GeneraQuery groupByDsoftraysbranchmax() Group by the DsoftRaysBranchMax column
 * @method GeneraQuery groupByAspinesmin() Group by the AspinesMin column
 * @method GeneraQuery groupByAspinesmax() Group by the AspinesMax column
 * @method GeneraQuery groupByAsoftraysmin() Group by the AsoftRaysMin column
 * @method GeneraQuery groupByAsoftraysmax() Group by the AsoftRaysMax column
 * @method GeneraQuery groupByTotalasoftraysmin() Group by the TotalAsoftRaysMin column
 * @method GeneraQuery groupByTotalasoftraysmax() Group by the TotalAsoftRaysMax column
 * @method GeneraQuery groupByAsoftraysbranchmin() Group by the AsoftRaysBranchMin column
 * @method GeneraQuery groupByAsoftraysbranchmax() Group by the AsoftRaysBranchMax column
 * @method GeneraQuery groupByEntered() Group by the Entered column
 * @method GeneraQuery groupByDateentered() Group by the Dateentered column
 * @method GeneraQuery groupByModified() Group by the Modified column
 * @method GeneraQuery groupByDatemodified() Group by the Datemodified column
 * @method GeneraQuery groupByExpert() Group by the Expert column
 * @method GeneraQuery groupByDatechecked() Group by the Datechecked column
 *
 * @method GeneraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GeneraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GeneraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Genera findOne(PropelPDO $con = null) Return the first Genera matching the query
 * @method Genera findOneOrCreate(PropelPDO $con = null) Return the first Genera matching the query, or a new Genera object populated from the query conditions when no match is found
 *
 * @method Genera findOneByGencode(int $GenCode) Return the first Genera filtered by the GenCode column
 * @method Genera findOneByGenname(string $GenName) Return the first Genera filtered by the GenName column
 * @method Genera findOneByGenauthoryear(string $GenAuthorYear) Return the first Genera filtered by the GenAuthorYear column
 * @method Genera findOneByGenauthor(string $GenAuthor) Return the first Genera filtered by the GenAuthor column
 * @method Genera findOneByGenyear(int $GenYear) Return the first Genera filtered by the GenYear column
 * @method Genera findOneByGeninex(string $GenInEx) Return the first Genera filtered by the GenInEx column
 * @method Genera findOneByGencomname(string $GenComName) Return the first Genera filtered by the GenComName column
 * @method Genera findOneByGenrefno(int $GenRefno) Return the first Genera filtered by the GenRefno column
 * @method Genera findOneByAvailable(string $Available) Return the first Genera filtered by the Available column
 * @method Genera findOneByGenstatus(string $GenStatus) Return the first Genera filtered by the GenStatus column
 * @method Genera findOneByGenstatusiczn(string $GenStatusICZN) Return the first Genera filtered by the GenStatusICZN column
 * @method Genera findOneByGencodevalid(int $GenCodeValid) Return the first Genera filtered by the GenCodeValid column
 * @method Genera findOneByRemark(string $Remark) Return the first Genera filtered by the Remark column
 * @method Genera findOneByEtymology(string $Etymology) Return the first Genera filtered by the Etymology column
 * @method Genera findOneByGender(string $Gender) Return the first Genera filtered by the Gender column
 * @method Genera findOneBySubgenusof(string $SubgenusOf) Return the first Genera filtered by the SubgenusOf column
 * @method Genera findOneByFamcode(int $FamCode) Return the first Genera filtered by the FamCode column
 * @method Genera findOneBySubfamily(string $Subfamily) Return the first Genera filtered by the Subfamily column
 * @method Genera findOneByTribe(string $Tribe) Return the first Genera filtered by the Tribe column
 * @method Genera findOneByBodyshapei(string $BodyShapeI) Return the first Genera filtered by the BodyShapeI column
 * @method Genera findOneByComment(string $Comment) Return the first Genera filtered by the Comment column
 * @method Genera findOneBySyncode(int $SynCode) Return the first Genera filtered by the SynCode column
 * @method Genera findOneByFbSppnb(int $FB_SppNb) Return the first Genera filtered by the FB_SppNb column
 * @method Genera findOneByCoffSppnb(int $CofF_SppNb) Return the first Genera filtered by the CofF_SppNb column
 * @method Genera findOneByFowSppnb(int $FoW_SppNb) Return the first Genera filtered by the FoW_SppNb column
 * @method Genera findOneByGsdGenusfk(int $GSD_GenusFk) Return the first Genera filtered by the GSD_GenusFk column
 * @method Genera findOneByGsdGenusreffk(int $GSD_GenusRefFk) Return the first Genera filtered by the GSD_GenusRefFk column
 * @method Genera findOneByDistribution(string $Distribution) Return the first Genera filtered by the Distribution column
 * @method Genera findOneByHabitat(string $Habitat) Return the first Genera filtered by the Habitat column
 * @method Genera findOneByWatersalinity(string $WaterSalinity) Return the first Genera filtered by the WaterSalinity column
 * @method Genera findOneByMarine(string $Marine) Return the first Genera filtered by the Marine column
 * @method Genera findOneByBrackish(string $Brackish) Return the first Genera filtered by the Brackish column
 * @method Genera findOneByFreshwater(string $Freshwater) Return the first Genera filtered by the Freshwater column
 * @method Genera findOneByDiagnosis(string $Diagnosis) Return the first Genera filtered by the Diagnosis column
 * @method Genera findOneByDspinesmin(int $DspinesMin) Return the first Genera filtered by the DspinesMin column
 * @method Genera findOneByDspinesmax(int $DspinesMax) Return the first Genera filtered by the DspinesMax column
 * @method Genera findOneByDsoftraysmin(int $DsoftRaysMin) Return the first Genera filtered by the DsoftRaysMin column
 * @method Genera findOneByDsoftraysmax(int $DsoftRaysMax) Return the first Genera filtered by the DsoftRaysMax column
 * @method Genera findOneByTotaldsoftraysmin(int $TotalDsoftRaysMin) Return the first Genera filtered by the TotalDsoftRaysMin column
 * @method Genera findOneByTotaldsoftraysmax(int $TotalDsoftRaysMax) Return the first Genera filtered by the TotalDsoftRaysMax column
 * @method Genera findOneByDsoftraysbranchmin(int $DsoftRaysBranchMin) Return the first Genera filtered by the DsoftRaysBranchMin column
 * @method Genera findOneByDsoftraysbranchmax(int $DsoftRaysBranchMax) Return the first Genera filtered by the DsoftRaysBranchMax column
 * @method Genera findOneByAspinesmin(int $AspinesMin) Return the first Genera filtered by the AspinesMin column
 * @method Genera findOneByAspinesmax(int $AspinesMax) Return the first Genera filtered by the AspinesMax column
 * @method Genera findOneByAsoftraysmin(int $AsoftRaysMin) Return the first Genera filtered by the AsoftRaysMin column
 * @method Genera findOneByAsoftraysmax(int $AsoftRaysMax) Return the first Genera filtered by the AsoftRaysMax column
 * @method Genera findOneByTotalasoftraysmin(int $TotalAsoftRaysMin) Return the first Genera filtered by the TotalAsoftRaysMin column
 * @method Genera findOneByTotalasoftraysmax(int $TotalAsoftRaysMax) Return the first Genera filtered by the TotalAsoftRaysMax column
 * @method Genera findOneByAsoftraysbranchmin(int $AsoftRaysBranchMin) Return the first Genera filtered by the AsoftRaysBranchMin column
 * @method Genera findOneByAsoftraysbranchmax(int $AsoftRaysBranchMax) Return the first Genera filtered by the AsoftRaysBranchMax column
 * @method Genera findOneByEntered(int $Entered) Return the first Genera filtered by the Entered column
 * @method Genera findOneByDateentered(string $Dateentered) Return the first Genera filtered by the Dateentered column
 * @method Genera findOneByModified(int $Modified) Return the first Genera filtered by the Modified column
 * @method Genera findOneByDatemodified(string $Datemodified) Return the first Genera filtered by the Datemodified column
 * @method Genera findOneByExpert(int $Expert) Return the first Genera filtered by the Expert column
 * @method Genera findOneByDatechecked(string $Datechecked) Return the first Genera filtered by the Datechecked column
 *
 * @method array findByGencode(int $GenCode) Return Genera objects filtered by the GenCode column
 * @method array findByGenname(string $GenName) Return Genera objects filtered by the GenName column
 * @method array findByGenauthoryear(string $GenAuthorYear) Return Genera objects filtered by the GenAuthorYear column
 * @method array findByGenauthor(string $GenAuthor) Return Genera objects filtered by the GenAuthor column
 * @method array findByGenyear(int $GenYear) Return Genera objects filtered by the GenYear column
 * @method array findByGeninex(string $GenInEx) Return Genera objects filtered by the GenInEx column
 * @method array findByGencomname(string $GenComName) Return Genera objects filtered by the GenComName column
 * @method array findByGenrefno(int $GenRefno) Return Genera objects filtered by the GenRefno column
 * @method array findByAvailable(string $Available) Return Genera objects filtered by the Available column
 * @method array findByGenstatus(string $GenStatus) Return Genera objects filtered by the GenStatus column
 * @method array findByGenstatusiczn(string $GenStatusICZN) Return Genera objects filtered by the GenStatusICZN column
 * @method array findByGencodevalid(int $GenCodeValid) Return Genera objects filtered by the GenCodeValid column
 * @method array findByRemark(string $Remark) Return Genera objects filtered by the Remark column
 * @method array findByEtymology(string $Etymology) Return Genera objects filtered by the Etymology column
 * @method array findByGender(string $Gender) Return Genera objects filtered by the Gender column
 * @method array findBySubgenusof(string $SubgenusOf) Return Genera objects filtered by the SubgenusOf column
 * @method array findByFamcode(int $FamCode) Return Genera objects filtered by the FamCode column
 * @method array findBySubfamily(string $Subfamily) Return Genera objects filtered by the Subfamily column
 * @method array findByTribe(string $Tribe) Return Genera objects filtered by the Tribe column
 * @method array findByBodyshapei(string $BodyShapeI) Return Genera objects filtered by the BodyShapeI column
 * @method array findByComment(string $Comment) Return Genera objects filtered by the Comment column
 * @method array findBySyncode(int $SynCode) Return Genera objects filtered by the SynCode column
 * @method array findByFbSppnb(int $FB_SppNb) Return Genera objects filtered by the FB_SppNb column
 * @method array findByCoffSppnb(int $CofF_SppNb) Return Genera objects filtered by the CofF_SppNb column
 * @method array findByFowSppnb(int $FoW_SppNb) Return Genera objects filtered by the FoW_SppNb column
 * @method array findByGsdGenusfk(int $GSD_GenusFk) Return Genera objects filtered by the GSD_GenusFk column
 * @method array findByGsdGenusreffk(int $GSD_GenusRefFk) Return Genera objects filtered by the GSD_GenusRefFk column
 * @method array findByDistribution(string $Distribution) Return Genera objects filtered by the Distribution column
 * @method array findByHabitat(string $Habitat) Return Genera objects filtered by the Habitat column
 * @method array findByWatersalinity(string $WaterSalinity) Return Genera objects filtered by the WaterSalinity column
 * @method array findByMarine(string $Marine) Return Genera objects filtered by the Marine column
 * @method array findByBrackish(string $Brackish) Return Genera objects filtered by the Brackish column
 * @method array findByFreshwater(string $Freshwater) Return Genera objects filtered by the Freshwater column
 * @method array findByDiagnosis(string $Diagnosis) Return Genera objects filtered by the Diagnosis column
 * @method array findByDspinesmin(int $DspinesMin) Return Genera objects filtered by the DspinesMin column
 * @method array findByDspinesmax(int $DspinesMax) Return Genera objects filtered by the DspinesMax column
 * @method array findByDsoftraysmin(int $DsoftRaysMin) Return Genera objects filtered by the DsoftRaysMin column
 * @method array findByDsoftraysmax(int $DsoftRaysMax) Return Genera objects filtered by the DsoftRaysMax column
 * @method array findByTotaldsoftraysmin(int $TotalDsoftRaysMin) Return Genera objects filtered by the TotalDsoftRaysMin column
 * @method array findByTotaldsoftraysmax(int $TotalDsoftRaysMax) Return Genera objects filtered by the TotalDsoftRaysMax column
 * @method array findByDsoftraysbranchmin(int $DsoftRaysBranchMin) Return Genera objects filtered by the DsoftRaysBranchMin column
 * @method array findByDsoftraysbranchmax(int $DsoftRaysBranchMax) Return Genera objects filtered by the DsoftRaysBranchMax column
 * @method array findByAspinesmin(int $AspinesMin) Return Genera objects filtered by the AspinesMin column
 * @method array findByAspinesmax(int $AspinesMax) Return Genera objects filtered by the AspinesMax column
 * @method array findByAsoftraysmin(int $AsoftRaysMin) Return Genera objects filtered by the AsoftRaysMin column
 * @method array findByAsoftraysmax(int $AsoftRaysMax) Return Genera objects filtered by the AsoftRaysMax column
 * @method array findByTotalasoftraysmin(int $TotalAsoftRaysMin) Return Genera objects filtered by the TotalAsoftRaysMin column
 * @method array findByTotalasoftraysmax(int $TotalAsoftRaysMax) Return Genera objects filtered by the TotalAsoftRaysMax column
 * @method array findByAsoftraysbranchmin(int $AsoftRaysBranchMin) Return Genera objects filtered by the AsoftRaysBranchMin column
 * @method array findByAsoftraysbranchmax(int $AsoftRaysBranchMax) Return Genera objects filtered by the AsoftRaysBranchMax column
 * @method array findByEntered(int $Entered) Return Genera objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Genera objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Genera objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Genera objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Genera objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Genera objects filtered by the Datechecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGeneraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGeneraQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'fbapp';
        }
        if (null === $modelName) {
            $modelName = 'Genera';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GeneraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GeneraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GeneraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GeneraQuery) {
            return $criteria;
        }
        $query = new GeneraQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$GenName, $GenAuthorYear, $GenStatus]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Genera|Genera[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GeneraPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Genera A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `GenCode`, `GenName`, `GenAuthorYear`, `GenAuthor`, `GenYear`, `GenInEx`, `GenComName`, `GenRefno`, `Available`, `GenStatus`, `GenStatusICZN`, `GenCodeValid`, `Remark`, `Etymology`, `Gender`, `SubgenusOf`, `FamCode`, `Subfamily`, `Tribe`, `BodyShapeI`, `Comment`, `SynCode`, `FB_SppNb`, `CofF_SppNb`, `FoW_SppNb`, `GSD_GenusFk`, `GSD_GenusRefFk`, `Distribution`, `Habitat`, `WaterSalinity`, `Marine`, `Brackish`, `Freshwater`, `Diagnosis`, `DspinesMin`, `DspinesMax`, `DsoftRaysMin`, `DsoftRaysMax`, `TotalDsoftRaysMin`, `TotalDsoftRaysMax`, `DsoftRaysBranchMin`, `DsoftRaysBranchMax`, `AspinesMin`, `AspinesMax`, `AsoftRaysMin`, `AsoftRaysMax`, `TotalAsoftRaysMin`, `TotalAsoftRaysMax`, `AsoftRaysBranchMin`, `AsoftRaysBranchMax`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked` FROM `genera` WHERE `GenName` = :p0 AND `GenAuthorYear` = :p1 AND `GenStatus` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Genera();
            $obj->hydrate($row);
            GeneraPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Genera|Genera[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Genera[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GeneraPeer::GENNAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GeneraPeer::GENAUTHORYEAR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GeneraPeer::GENSTATUS, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GeneraPeer::GENNAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GeneraPeer::GENAUTHORYEAR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GeneraPeer::GENSTATUS, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the GenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGencode(1234); // WHERE GenCode = 1234
     * $query->filterByGencode(array(12, 34)); // WHERE GenCode IN (12, 34)
     * $query->filterByGencode(array('min' => 12)); // WHERE GenCode >= 12
     * $query->filterByGencode(array('max' => 12)); // WHERE GenCode <= 12
     * </code>
     *
     * @param     mixed $gencode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGencode($gencode = null, $comparison = null)
    {
        if (is_array($gencode)) {
            $useMinMax = false;
            if (isset($gencode['min'])) {
                $this->addUsingAlias(GeneraPeer::GENCODE, $gencode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gencode['max'])) {
                $this->addUsingAlias(GeneraPeer::GENCODE, $gencode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENCODE, $gencode, $comparison);
    }

    /**
     * Filter the query on the GenName column
     *
     * Example usage:
     * <code>
     * $query->filterByGenname('fooValue');   // WHERE GenName = 'fooValue'
     * $query->filterByGenname('%fooValue%'); // WHERE GenName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenname($genname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genname)) {
                $genname = str_replace('*', '%', $genname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENNAME, $genname, $comparison);
    }

    /**
     * Filter the query on the GenAuthorYear column
     *
     * Example usage:
     * <code>
     * $query->filterByGenauthoryear('fooValue');   // WHERE GenAuthorYear = 'fooValue'
     * $query->filterByGenauthoryear('%fooValue%'); // WHERE GenAuthorYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genauthoryear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenauthoryear($genauthoryear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genauthoryear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genauthoryear)) {
                $genauthoryear = str_replace('*', '%', $genauthoryear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENAUTHORYEAR, $genauthoryear, $comparison);
    }

    /**
     * Filter the query on the GenAuthor column
     *
     * Example usage:
     * <code>
     * $query->filterByGenauthor('fooValue');   // WHERE GenAuthor = 'fooValue'
     * $query->filterByGenauthor('%fooValue%'); // WHERE GenAuthor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genauthor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenauthor($genauthor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genauthor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genauthor)) {
                $genauthor = str_replace('*', '%', $genauthor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENAUTHOR, $genauthor, $comparison);
    }

    /**
     * Filter the query on the GenYear column
     *
     * Example usage:
     * <code>
     * $query->filterByGenyear(1234); // WHERE GenYear = 1234
     * $query->filterByGenyear(array(12, 34)); // WHERE GenYear IN (12, 34)
     * $query->filterByGenyear(array('min' => 12)); // WHERE GenYear >= 12
     * $query->filterByGenyear(array('max' => 12)); // WHERE GenYear <= 12
     * </code>
     *
     * @param     mixed $genyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenyear($genyear = null, $comparison = null)
    {
        if (is_array($genyear)) {
            $useMinMax = false;
            if (isset($genyear['min'])) {
                $this->addUsingAlias(GeneraPeer::GENYEAR, $genyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genyear['max'])) {
                $this->addUsingAlias(GeneraPeer::GENYEAR, $genyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENYEAR, $genyear, $comparison);
    }

    /**
     * Filter the query on the GenInEx column
     *
     * Example usage:
     * <code>
     * $query->filterByGeninex('fooValue');   // WHERE GenInEx = 'fooValue'
     * $query->filterByGeninex('%fooValue%'); // WHERE GenInEx LIKE '%fooValue%'
     * </code>
     *
     * @param     string $geninex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGeninex($geninex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($geninex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $geninex)) {
                $geninex = str_replace('*', '%', $geninex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENINEX, $geninex, $comparison);
    }

    /**
     * Filter the query on the GenComName column
     *
     * Example usage:
     * <code>
     * $query->filterByGencomname('fooValue');   // WHERE GenComName = 'fooValue'
     * $query->filterByGencomname('%fooValue%'); // WHERE GenComName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gencomname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGencomname($gencomname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gencomname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gencomname)) {
                $gencomname = str_replace('*', '%', $gencomname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENCOMNAME, $gencomname, $comparison);
    }

    /**
     * Filter the query on the GenRefno column
     *
     * Example usage:
     * <code>
     * $query->filterByGenrefno(1234); // WHERE GenRefno = 1234
     * $query->filterByGenrefno(array(12, 34)); // WHERE GenRefno IN (12, 34)
     * $query->filterByGenrefno(array('min' => 12)); // WHERE GenRefno >= 12
     * $query->filterByGenrefno(array('max' => 12)); // WHERE GenRefno <= 12
     * </code>
     *
     * @param     mixed $genrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenrefno($genrefno = null, $comparison = null)
    {
        if (is_array($genrefno)) {
            $useMinMax = false;
            if (isset($genrefno['min'])) {
                $this->addUsingAlias(GeneraPeer::GENREFNO, $genrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genrefno['max'])) {
                $this->addUsingAlias(GeneraPeer::GENREFNO, $genrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENREFNO, $genrefno, $comparison);
    }

    /**
     * Filter the query on the Available column
     *
     * Example usage:
     * <code>
     * $query->filterByAvailable('fooValue');   // WHERE Available = 'fooValue'
     * $query->filterByAvailable('%fooValue%'); // WHERE Available LIKE '%fooValue%'
     * </code>
     *
     * @param     string $available The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAvailable($available = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($available)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $available)) {
                $available = str_replace('*', '%', $available);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::AVAILABLE, $available, $comparison);
    }

    /**
     * Filter the query on the GenStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenstatus('fooValue');   // WHERE GenStatus = 'fooValue'
     * $query->filterByGenstatus('%fooValue%'); // WHERE GenStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenstatus($genstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genstatus)) {
                $genstatus = str_replace('*', '%', $genstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENSTATUS, $genstatus, $comparison);
    }

    /**
     * Filter the query on the GenStatusICZN column
     *
     * Example usage:
     * <code>
     * $query->filterByGenstatusiczn('fooValue');   // WHERE GenStatusICZN = 'fooValue'
     * $query->filterByGenstatusiczn('%fooValue%'); // WHERE GenStatusICZN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genstatusiczn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGenstatusiczn($genstatusiczn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genstatusiczn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genstatusiczn)) {
                $genstatusiczn = str_replace('*', '%', $genstatusiczn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENSTATUSICZN, $genstatusiczn, $comparison);
    }

    /**
     * Filter the query on the GenCodeValid column
     *
     * Example usage:
     * <code>
     * $query->filterByGencodevalid(1234); // WHERE GenCodeValid = 1234
     * $query->filterByGencodevalid(array(12, 34)); // WHERE GenCodeValid IN (12, 34)
     * $query->filterByGencodevalid(array('min' => 12)); // WHERE GenCodeValid >= 12
     * $query->filterByGencodevalid(array('max' => 12)); // WHERE GenCodeValid <= 12
     * </code>
     *
     * @param     mixed $gencodevalid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGencodevalid($gencodevalid = null, $comparison = null)
    {
        if (is_array($gencodevalid)) {
            $useMinMax = false;
            if (isset($gencodevalid['min'])) {
                $this->addUsingAlias(GeneraPeer::GENCODEVALID, $gencodevalid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gencodevalid['max'])) {
                $this->addUsingAlias(GeneraPeer::GENCODEVALID, $gencodevalid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENCODEVALID, $gencodevalid, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Etymology column
     *
     * Example usage:
     * <code>
     * $query->filterByEtymology('fooValue');   // WHERE Etymology = 'fooValue'
     * $query->filterByEtymology('%fooValue%'); // WHERE Etymology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etymology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByEtymology($etymology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etymology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etymology)) {
                $etymology = str_replace('*', '%', $etymology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ETYMOLOGY, $etymology, $comparison);
    }

    /**
     * Filter the query on the Gender column
     *
     * Example usage:
     * <code>
     * $query->filterByGender('fooValue');   // WHERE Gender = 'fooValue'
     * $query->filterByGender('%fooValue%'); // WHERE Gender LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gender The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGender($gender = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gender)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gender)) {
                $gender = str_replace('*', '%', $gender);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GENDER, $gender, $comparison);
    }

    /**
     * Filter the query on the SubgenusOf column
     *
     * Example usage:
     * <code>
     * $query->filterBySubgenusof('fooValue');   // WHERE SubgenusOf = 'fooValue'
     * $query->filterBySubgenusof('%fooValue%'); // WHERE SubgenusOf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subgenusof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterBySubgenusof($subgenusof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subgenusof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subgenusof)) {
                $subgenusof = str_replace('*', '%', $subgenusof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::SUBGENUSOF, $subgenusof, $comparison);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(GeneraPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(GeneraPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Subfamily column
     *
     * Example usage:
     * <code>
     * $query->filterBySubfamily('fooValue');   // WHERE Subfamily = 'fooValue'
     * $query->filterBySubfamily('%fooValue%'); // WHERE Subfamily LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subfamily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterBySubfamily($subfamily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subfamily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subfamily)) {
                $subfamily = str_replace('*', '%', $subfamily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::SUBFAMILY, $subfamily, $comparison);
    }

    /**
     * Filter the query on the Tribe column
     *
     * Example usage:
     * <code>
     * $query->filterByTribe('fooValue');   // WHERE Tribe = 'fooValue'
     * $query->filterByTribe('%fooValue%'); // WHERE Tribe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tribe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByTribe($tribe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tribe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tribe)) {
                $tribe = str_replace('*', '%', $tribe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::TRIBE, $tribe, $comparison);
    }

    /**
     * Filter the query on the BodyShapeI column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyshapei('fooValue');   // WHERE BodyShapeI = 'fooValue'
     * $query->filterByBodyshapei('%fooValue%'); // WHERE BodyShapeI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyshapei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByBodyshapei($bodyshapei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyshapei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyshapei)) {
                $bodyshapei = str_replace('*', '%', $bodyshapei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the SynCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE SynCode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE SynCode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE SynCode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE SynCode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(GeneraPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(GeneraPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the FB_SppNb column
     *
     * Example usage:
     * <code>
     * $query->filterByFbSppnb(1234); // WHERE FB_SppNb = 1234
     * $query->filterByFbSppnb(array(12, 34)); // WHERE FB_SppNb IN (12, 34)
     * $query->filterByFbSppnb(array('min' => 12)); // WHERE FB_SppNb >= 12
     * $query->filterByFbSppnb(array('max' => 12)); // WHERE FB_SppNb <= 12
     * </code>
     *
     * @param     mixed $fbSppnb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByFbSppnb($fbSppnb = null, $comparison = null)
    {
        if (is_array($fbSppnb)) {
            $useMinMax = false;
            if (isset($fbSppnb['min'])) {
                $this->addUsingAlias(GeneraPeer::FB_SPPNB, $fbSppnb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fbSppnb['max'])) {
                $this->addUsingAlias(GeneraPeer::FB_SPPNB, $fbSppnb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::FB_SPPNB, $fbSppnb, $comparison);
    }

    /**
     * Filter the query on the CofF_SppNb column
     *
     * Example usage:
     * <code>
     * $query->filterByCoffSppnb(1234); // WHERE CofF_SppNb = 1234
     * $query->filterByCoffSppnb(array(12, 34)); // WHERE CofF_SppNb IN (12, 34)
     * $query->filterByCoffSppnb(array('min' => 12)); // WHERE CofF_SppNb >= 12
     * $query->filterByCoffSppnb(array('max' => 12)); // WHERE CofF_SppNb <= 12
     * </code>
     *
     * @param     mixed $coffSppnb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByCoffSppnb($coffSppnb = null, $comparison = null)
    {
        if (is_array($coffSppnb)) {
            $useMinMax = false;
            if (isset($coffSppnb['min'])) {
                $this->addUsingAlias(GeneraPeer::COFF_SPPNB, $coffSppnb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coffSppnb['max'])) {
                $this->addUsingAlias(GeneraPeer::COFF_SPPNB, $coffSppnb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::COFF_SPPNB, $coffSppnb, $comparison);
    }

    /**
     * Filter the query on the FoW_SppNb column
     *
     * Example usage:
     * <code>
     * $query->filterByFowSppnb(1234); // WHERE FoW_SppNb = 1234
     * $query->filterByFowSppnb(array(12, 34)); // WHERE FoW_SppNb IN (12, 34)
     * $query->filterByFowSppnb(array('min' => 12)); // WHERE FoW_SppNb >= 12
     * $query->filterByFowSppnb(array('max' => 12)); // WHERE FoW_SppNb <= 12
     * </code>
     *
     * @param     mixed $fowSppnb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByFowSppnb($fowSppnb = null, $comparison = null)
    {
        if (is_array($fowSppnb)) {
            $useMinMax = false;
            if (isset($fowSppnb['min'])) {
                $this->addUsingAlias(GeneraPeer::FOW_SPPNB, $fowSppnb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fowSppnb['max'])) {
                $this->addUsingAlias(GeneraPeer::FOW_SPPNB, $fowSppnb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::FOW_SPPNB, $fowSppnb, $comparison);
    }

    /**
     * Filter the query on the GSD_GenusFk column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdGenusfk(1234); // WHERE GSD_GenusFk = 1234
     * $query->filterByGsdGenusfk(array(12, 34)); // WHERE GSD_GenusFk IN (12, 34)
     * $query->filterByGsdGenusfk(array('min' => 12)); // WHERE GSD_GenusFk >= 12
     * $query->filterByGsdGenusfk(array('max' => 12)); // WHERE GSD_GenusFk <= 12
     * </code>
     *
     * @param     mixed $gsdGenusfk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGsdGenusfk($gsdGenusfk = null, $comparison = null)
    {
        if (is_array($gsdGenusfk)) {
            $useMinMax = false;
            if (isset($gsdGenusfk['min'])) {
                $this->addUsingAlias(GeneraPeer::GSD_GENUSFK, $gsdGenusfk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdGenusfk['max'])) {
                $this->addUsingAlias(GeneraPeer::GSD_GENUSFK, $gsdGenusfk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GSD_GENUSFK, $gsdGenusfk, $comparison);
    }

    /**
     * Filter the query on the GSD_GenusRefFk column
     *
     * Example usage:
     * <code>
     * $query->filterByGsdGenusreffk(1234); // WHERE GSD_GenusRefFk = 1234
     * $query->filterByGsdGenusreffk(array(12, 34)); // WHERE GSD_GenusRefFk IN (12, 34)
     * $query->filterByGsdGenusreffk(array('min' => 12)); // WHERE GSD_GenusRefFk >= 12
     * $query->filterByGsdGenusreffk(array('max' => 12)); // WHERE GSD_GenusRefFk <= 12
     * </code>
     *
     * @param     mixed $gsdGenusreffk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByGsdGenusreffk($gsdGenusreffk = null, $comparison = null)
    {
        if (is_array($gsdGenusreffk)) {
            $useMinMax = false;
            if (isset($gsdGenusreffk['min'])) {
                $this->addUsingAlias(GeneraPeer::GSD_GENUSREFFK, $gsdGenusreffk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsdGenusreffk['max'])) {
                $this->addUsingAlias(GeneraPeer::GSD_GENUSREFFK, $gsdGenusreffk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::GSD_GENUSREFFK, $gsdGenusreffk, $comparison);
    }

    /**
     * Filter the query on the Distribution column
     *
     * Example usage:
     * <code>
     * $query->filterByDistribution('fooValue');   // WHERE Distribution = 'fooValue'
     * $query->filterByDistribution('%fooValue%'); // WHERE Distribution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $distribution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDistribution($distribution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($distribution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $distribution)) {
                $distribution = str_replace('*', '%', $distribution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DISTRIBUTION, $distribution, $comparison);
    }

    /**
     * Filter the query on the Habitat column
     *
     * Example usage:
     * <code>
     * $query->filterByHabitat('fooValue');   // WHERE Habitat = 'fooValue'
     * $query->filterByHabitat('%fooValue%'); // WHERE Habitat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $habitat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByHabitat($habitat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($habitat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $habitat)) {
                $habitat = str_replace('*', '%', $habitat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::HABITAT, $habitat, $comparison);
    }

    /**
     * Filter the query on the WaterSalinity column
     *
     * Example usage:
     * <code>
     * $query->filterByWatersalinity('fooValue');   // WHERE WaterSalinity = 'fooValue'
     * $query->filterByWatersalinity('%fooValue%'); // WHERE WaterSalinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $watersalinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByWatersalinity($watersalinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($watersalinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $watersalinity)) {
                $watersalinity = str_replace('*', '%', $watersalinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::WATERSALINITY, $watersalinity, $comparison);
    }

    /**
     * Filter the query on the Marine column
     *
     * Example usage:
     * <code>
     * $query->filterByMarine('fooValue');   // WHERE Marine = 'fooValue'
     * $query->filterByMarine('%fooValue%'); // WHERE Marine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marine The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByMarine($marine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marine)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marine)) {
                $marine = str_replace('*', '%', $marine);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::MARINE, $marine, $comparison);
    }

    /**
     * Filter the query on the Brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByBrackish('fooValue');   // WHERE Brackish = 'fooValue'
     * $query->filterByBrackish('%fooValue%'); // WHERE Brackish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $brackish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByBrackish($brackish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($brackish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $brackish)) {
                $brackish = str_replace('*', '%', $brackish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::BRACKISH, $brackish, $comparison);
    }

    /**
     * Filter the query on the Freshwater column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwater('fooValue');   // WHERE Freshwater = 'fooValue'
     * $query->filterByFreshwater('%fooValue%'); // WHERE Freshwater LIKE '%fooValue%'
     * </code>
     *
     * @param     string $freshwater The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByFreshwater($freshwater = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($freshwater)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $freshwater)) {
                $freshwater = str_replace('*', '%', $freshwater);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::FRESHWATER, $freshwater, $comparison);
    }

    /**
     * Filter the query on the Diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosis('fooValue');   // WHERE Diagnosis = 'fooValue'
     * $query->filterByDiagnosis('%fooValue%'); // WHERE Diagnosis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diagnosis)) {
                $diagnosis = str_replace('*', '%', $diagnosis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DIAGNOSIS, $diagnosis, $comparison);
    }

    /**
     * Filter the query on the DspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmin(1234); // WHERE DspinesMin = 1234
     * $query->filterByDspinesmin(array(12, 34)); // WHERE DspinesMin IN (12, 34)
     * $query->filterByDspinesmin(array('min' => 12)); // WHERE DspinesMin >= 12
     * $query->filterByDspinesmin(array('max' => 12)); // WHERE DspinesMin <= 12
     * </code>
     *
     * @param     mixed $dspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDspinesmin($dspinesmin = null, $comparison = null)
    {
        if (is_array($dspinesmin)) {
            $useMinMax = false;
            if (isset($dspinesmin['min'])) {
                $this->addUsingAlias(GeneraPeer::DSPINESMIN, $dspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmin['max'])) {
                $this->addUsingAlias(GeneraPeer::DSPINESMIN, $dspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSPINESMIN, $dspinesmin, $comparison);
    }

    /**
     * Filter the query on the DspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmax(1234); // WHERE DspinesMax = 1234
     * $query->filterByDspinesmax(array(12, 34)); // WHERE DspinesMax IN (12, 34)
     * $query->filterByDspinesmax(array('min' => 12)); // WHERE DspinesMax >= 12
     * $query->filterByDspinesmax(array('max' => 12)); // WHERE DspinesMax <= 12
     * </code>
     *
     * @param     mixed $dspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDspinesmax($dspinesmax = null, $comparison = null)
    {
        if (is_array($dspinesmax)) {
            $useMinMax = false;
            if (isset($dspinesmax['min'])) {
                $this->addUsingAlias(GeneraPeer::DSPINESMAX, $dspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmax['max'])) {
                $this->addUsingAlias(GeneraPeer::DSPINESMAX, $dspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSPINESMAX, $dspinesmax, $comparison);
    }

    /**
     * Filter the query on the DsoftRaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDsoftraysmin(1234); // WHERE DsoftRaysMin = 1234
     * $query->filterByDsoftraysmin(array(12, 34)); // WHERE DsoftRaysMin IN (12, 34)
     * $query->filterByDsoftraysmin(array('min' => 12)); // WHERE DsoftRaysMin >= 12
     * $query->filterByDsoftraysmin(array('max' => 12)); // WHERE DsoftRaysMin <= 12
     * </code>
     *
     * @param     mixed $dsoftraysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDsoftraysmin($dsoftraysmin = null, $comparison = null)
    {
        if (is_array($dsoftraysmin)) {
            $useMinMax = false;
            if (isset($dsoftraysmin['min'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSMIN, $dsoftraysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dsoftraysmin['max'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSMIN, $dsoftraysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSOFTRAYSMIN, $dsoftraysmin, $comparison);
    }

    /**
     * Filter the query on the DsoftRaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDsoftraysmax(1234); // WHERE DsoftRaysMax = 1234
     * $query->filterByDsoftraysmax(array(12, 34)); // WHERE DsoftRaysMax IN (12, 34)
     * $query->filterByDsoftraysmax(array('min' => 12)); // WHERE DsoftRaysMax >= 12
     * $query->filterByDsoftraysmax(array('max' => 12)); // WHERE DsoftRaysMax <= 12
     * </code>
     *
     * @param     mixed $dsoftraysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDsoftraysmax($dsoftraysmax = null, $comparison = null)
    {
        if (is_array($dsoftraysmax)) {
            $useMinMax = false;
            if (isset($dsoftraysmax['min'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSMAX, $dsoftraysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dsoftraysmax['max'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSMAX, $dsoftraysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSOFTRAYSMAX, $dsoftraysmax, $comparison);
    }

    /**
     * Filter the query on the TotalDsoftRaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTotaldsoftraysmin(1234); // WHERE TotalDsoftRaysMin = 1234
     * $query->filterByTotaldsoftraysmin(array(12, 34)); // WHERE TotalDsoftRaysMin IN (12, 34)
     * $query->filterByTotaldsoftraysmin(array('min' => 12)); // WHERE TotalDsoftRaysMin >= 12
     * $query->filterByTotaldsoftraysmin(array('max' => 12)); // WHERE TotalDsoftRaysMin <= 12
     * </code>
     *
     * @param     mixed $totaldsoftraysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByTotaldsoftraysmin($totaldsoftraysmin = null, $comparison = null)
    {
        if (is_array($totaldsoftraysmin)) {
            $useMinMax = false;
            if (isset($totaldsoftraysmin['min'])) {
                $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMIN, $totaldsoftraysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totaldsoftraysmin['max'])) {
                $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMIN, $totaldsoftraysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMIN, $totaldsoftraysmin, $comparison);
    }

    /**
     * Filter the query on the TotalDsoftRaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTotaldsoftraysmax(1234); // WHERE TotalDsoftRaysMax = 1234
     * $query->filterByTotaldsoftraysmax(array(12, 34)); // WHERE TotalDsoftRaysMax IN (12, 34)
     * $query->filterByTotaldsoftraysmax(array('min' => 12)); // WHERE TotalDsoftRaysMax >= 12
     * $query->filterByTotaldsoftraysmax(array('max' => 12)); // WHERE TotalDsoftRaysMax <= 12
     * </code>
     *
     * @param     mixed $totaldsoftraysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByTotaldsoftraysmax($totaldsoftraysmax = null, $comparison = null)
    {
        if (is_array($totaldsoftraysmax)) {
            $useMinMax = false;
            if (isset($totaldsoftraysmax['min'])) {
                $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMAX, $totaldsoftraysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totaldsoftraysmax['max'])) {
                $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMAX, $totaldsoftraysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::TOTALDSOFTRAYSMAX, $totaldsoftraysmax, $comparison);
    }

    /**
     * Filter the query on the DsoftRaysBranchMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDsoftraysbranchmin(1234); // WHERE DsoftRaysBranchMin = 1234
     * $query->filterByDsoftraysbranchmin(array(12, 34)); // WHERE DsoftRaysBranchMin IN (12, 34)
     * $query->filterByDsoftraysbranchmin(array('min' => 12)); // WHERE DsoftRaysBranchMin >= 12
     * $query->filterByDsoftraysbranchmin(array('max' => 12)); // WHERE DsoftRaysBranchMin <= 12
     * </code>
     *
     * @param     mixed $dsoftraysbranchmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDsoftraysbranchmin($dsoftraysbranchmin = null, $comparison = null)
    {
        if (is_array($dsoftraysbranchmin)) {
            $useMinMax = false;
            if (isset($dsoftraysbranchmin['min'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMIN, $dsoftraysbranchmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dsoftraysbranchmin['max'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMIN, $dsoftraysbranchmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMIN, $dsoftraysbranchmin, $comparison);
    }

    /**
     * Filter the query on the DsoftRaysBranchMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDsoftraysbranchmax(1234); // WHERE DsoftRaysBranchMax = 1234
     * $query->filterByDsoftraysbranchmax(array(12, 34)); // WHERE DsoftRaysBranchMax IN (12, 34)
     * $query->filterByDsoftraysbranchmax(array('min' => 12)); // WHERE DsoftRaysBranchMax >= 12
     * $query->filterByDsoftraysbranchmax(array('max' => 12)); // WHERE DsoftRaysBranchMax <= 12
     * </code>
     *
     * @param     mixed $dsoftraysbranchmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDsoftraysbranchmax($dsoftraysbranchmax = null, $comparison = null)
    {
        if (is_array($dsoftraysbranchmax)) {
            $useMinMax = false;
            if (isset($dsoftraysbranchmax['min'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMAX, $dsoftraysbranchmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dsoftraysbranchmax['max'])) {
                $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMAX, $dsoftraysbranchmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DSOFTRAYSBRANCHMAX, $dsoftraysbranchmax, $comparison);
    }

    /**
     * Filter the query on the AspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmin(1234); // WHERE AspinesMin = 1234
     * $query->filterByAspinesmin(array(12, 34)); // WHERE AspinesMin IN (12, 34)
     * $query->filterByAspinesmin(array('min' => 12)); // WHERE AspinesMin >= 12
     * $query->filterByAspinesmin(array('max' => 12)); // WHERE AspinesMin <= 12
     * </code>
     *
     * @param     mixed $aspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAspinesmin($aspinesmin = null, $comparison = null)
    {
        if (is_array($aspinesmin)) {
            $useMinMax = false;
            if (isset($aspinesmin['min'])) {
                $this->addUsingAlias(GeneraPeer::ASPINESMIN, $aspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmin['max'])) {
                $this->addUsingAlias(GeneraPeer::ASPINESMIN, $aspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASPINESMIN, $aspinesmin, $comparison);
    }

    /**
     * Filter the query on the AspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmax(1234); // WHERE AspinesMax = 1234
     * $query->filterByAspinesmax(array(12, 34)); // WHERE AspinesMax IN (12, 34)
     * $query->filterByAspinesmax(array('min' => 12)); // WHERE AspinesMax >= 12
     * $query->filterByAspinesmax(array('max' => 12)); // WHERE AspinesMax <= 12
     * </code>
     *
     * @param     mixed $aspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAspinesmax($aspinesmax = null, $comparison = null)
    {
        if (is_array($aspinesmax)) {
            $useMinMax = false;
            if (isset($aspinesmax['min'])) {
                $this->addUsingAlias(GeneraPeer::ASPINESMAX, $aspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmax['max'])) {
                $this->addUsingAlias(GeneraPeer::ASPINESMAX, $aspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASPINESMAX, $aspinesmax, $comparison);
    }

    /**
     * Filter the query on the AsoftRaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAsoftraysmin(1234); // WHERE AsoftRaysMin = 1234
     * $query->filterByAsoftraysmin(array(12, 34)); // WHERE AsoftRaysMin IN (12, 34)
     * $query->filterByAsoftraysmin(array('min' => 12)); // WHERE AsoftRaysMin >= 12
     * $query->filterByAsoftraysmin(array('max' => 12)); // WHERE AsoftRaysMin <= 12
     * </code>
     *
     * @param     mixed $asoftraysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAsoftraysmin($asoftraysmin = null, $comparison = null)
    {
        if (is_array($asoftraysmin)) {
            $useMinMax = false;
            if (isset($asoftraysmin['min'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSMIN, $asoftraysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asoftraysmin['max'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSMIN, $asoftraysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASOFTRAYSMIN, $asoftraysmin, $comparison);
    }

    /**
     * Filter the query on the AsoftRaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAsoftraysmax(1234); // WHERE AsoftRaysMax = 1234
     * $query->filterByAsoftraysmax(array(12, 34)); // WHERE AsoftRaysMax IN (12, 34)
     * $query->filterByAsoftraysmax(array('min' => 12)); // WHERE AsoftRaysMax >= 12
     * $query->filterByAsoftraysmax(array('max' => 12)); // WHERE AsoftRaysMax <= 12
     * </code>
     *
     * @param     mixed $asoftraysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAsoftraysmax($asoftraysmax = null, $comparison = null)
    {
        if (is_array($asoftraysmax)) {
            $useMinMax = false;
            if (isset($asoftraysmax['min'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSMAX, $asoftraysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asoftraysmax['max'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSMAX, $asoftraysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASOFTRAYSMAX, $asoftraysmax, $comparison);
    }

    /**
     * Filter the query on the TotalAsoftRaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalasoftraysmin(1234); // WHERE TotalAsoftRaysMin = 1234
     * $query->filterByTotalasoftraysmin(array(12, 34)); // WHERE TotalAsoftRaysMin IN (12, 34)
     * $query->filterByTotalasoftraysmin(array('min' => 12)); // WHERE TotalAsoftRaysMin >= 12
     * $query->filterByTotalasoftraysmin(array('max' => 12)); // WHERE TotalAsoftRaysMin <= 12
     * </code>
     *
     * @param     mixed $totalasoftraysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByTotalasoftraysmin($totalasoftraysmin = null, $comparison = null)
    {
        if (is_array($totalasoftraysmin)) {
            $useMinMax = false;
            if (isset($totalasoftraysmin['min'])) {
                $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMIN, $totalasoftraysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalasoftraysmin['max'])) {
                $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMIN, $totalasoftraysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMIN, $totalasoftraysmin, $comparison);
    }

    /**
     * Filter the query on the TotalAsoftRaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalasoftraysmax(1234); // WHERE TotalAsoftRaysMax = 1234
     * $query->filterByTotalasoftraysmax(array(12, 34)); // WHERE TotalAsoftRaysMax IN (12, 34)
     * $query->filterByTotalasoftraysmax(array('min' => 12)); // WHERE TotalAsoftRaysMax >= 12
     * $query->filterByTotalasoftraysmax(array('max' => 12)); // WHERE TotalAsoftRaysMax <= 12
     * </code>
     *
     * @param     mixed $totalasoftraysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByTotalasoftraysmax($totalasoftraysmax = null, $comparison = null)
    {
        if (is_array($totalasoftraysmax)) {
            $useMinMax = false;
            if (isset($totalasoftraysmax['min'])) {
                $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMAX, $totalasoftraysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalasoftraysmax['max'])) {
                $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMAX, $totalasoftraysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::TOTALASOFTRAYSMAX, $totalasoftraysmax, $comparison);
    }

    /**
     * Filter the query on the AsoftRaysBranchMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAsoftraysbranchmin(1234); // WHERE AsoftRaysBranchMin = 1234
     * $query->filterByAsoftraysbranchmin(array(12, 34)); // WHERE AsoftRaysBranchMin IN (12, 34)
     * $query->filterByAsoftraysbranchmin(array('min' => 12)); // WHERE AsoftRaysBranchMin >= 12
     * $query->filterByAsoftraysbranchmin(array('max' => 12)); // WHERE AsoftRaysBranchMin <= 12
     * </code>
     *
     * @param     mixed $asoftraysbranchmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAsoftraysbranchmin($asoftraysbranchmin = null, $comparison = null)
    {
        if (is_array($asoftraysbranchmin)) {
            $useMinMax = false;
            if (isset($asoftraysbranchmin['min'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMIN, $asoftraysbranchmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asoftraysbranchmin['max'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMIN, $asoftraysbranchmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMIN, $asoftraysbranchmin, $comparison);
    }

    /**
     * Filter the query on the AsoftRaysBranchMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAsoftraysbranchmax(1234); // WHERE AsoftRaysBranchMax = 1234
     * $query->filterByAsoftraysbranchmax(array(12, 34)); // WHERE AsoftRaysBranchMax IN (12, 34)
     * $query->filterByAsoftraysbranchmax(array('min' => 12)); // WHERE AsoftRaysBranchMax >= 12
     * $query->filterByAsoftraysbranchmax(array('max' => 12)); // WHERE AsoftRaysBranchMax <= 12
     * </code>
     *
     * @param     mixed $asoftraysbranchmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByAsoftraysbranchmax($asoftraysbranchmax = null, $comparison = null)
    {
        if (is_array($asoftraysbranchmax)) {
            $useMinMax = false;
            if (isset($asoftraysbranchmax['min'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMAX, $asoftraysbranchmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asoftraysbranchmax['max'])) {
                $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMAX, $asoftraysbranchmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ASOFTRAYSBRANCHMAX, $asoftraysbranchmax, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GeneraPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GeneraPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the Dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE Dateentered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GeneraPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GeneraPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GeneraPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GeneraPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the Datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE Datemodified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GeneraPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GeneraPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GeneraPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GeneraPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE Datechecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GeneraPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GeneraPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneraPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Genera $genera Object to remove from the list of results
     *
     * @return GeneraQuery The current query, for fluid interface
     */
    public function prune($genera = null)
    {
        if ($genera) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GeneraPeer::GENNAME), $genera->getGenname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GeneraPeer::GENAUTHORYEAR), $genera->getGenauthoryear(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GeneraPeer::GENSTATUS), $genera->getGenstatus(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
