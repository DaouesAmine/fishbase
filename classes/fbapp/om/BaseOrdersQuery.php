<?php


/**
 * Base class that represents a query for the 'orders' table.
 *
 *
 *
 * @method OrdersQuery orderByOrdnum($order = Criteria::ASC) Order by the Ordnum column
 * @method OrdersQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method OrdersQuery orderByOrderrefno($order = Criteria::ASC) Order by the OrderRefNo column
 * @method OrdersQuery orderBySortno($order = Criteria::ASC) Order by the SortNo column
 * @method OrdersQuery orderBySynonym($order = Criteria::ASC) Order by the Synonym column
 * @method OrdersQuery orderByAuthoryear($order = Criteria::ASC) Order by the AuthorYear column
 * @method OrdersQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method OrdersQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method OrdersQuery orderByMarine($order = Criteria::ASC) Order by the Marine column
 * @method OrdersQuery orderByBrackish($order = Criteria::ASC) Order by the Brackish column
 * @method OrdersQuery orderByFreshwater($order = Criteria::ASC) Order by the Freshwater column
 * @method OrdersQuery orderByWatersalinity($order = Criteria::ASC) Order by the WaterSalinity column
 * @method OrdersQuery orderByFamcount($order = Criteria::ASC) Order by the FamCount column
 * @method OrdersQuery orderBySpeciescount($order = Criteria::ASC) Order by the SpeciesCount column
 * @method OrdersQuery orderByEtymologyorder($order = Criteria::ASC) Order by the EtymologyOrder column
 * @method OrdersQuery orderByClassnum($order = Criteria::ASC) Order by the ClassNum column
 * @method OrdersQuery orderByClass($order = Criteria::ASC) Order by the Class column
 * @method OrdersQuery orderByClassificationremark($order = Criteria::ASC) Order by the ClassificationRemark column
 * @method OrdersQuery orderByPhylogenyfamilies($order = Criteria::ASC) Order by the PhylogenyFamilies column
 * @method OrdersQuery orderByPhylfamorderrefno($order = Criteria::ASC) Order by the PhylFamOrderRefNo column
 * @method OrdersQuery orderByPhylogenypostion($order = Criteria::ASC) Order by the PhylogenyPostion column
 * @method OrdersQuery orderByPhylposorderrefno($order = Criteria::ASC) Order by the PhylPosOrderRefNo column
 * @method OrdersQuery orderBySisterorder($order = Criteria::ASC) Order by the SisterOrder column
 * @method OrdersQuery orderByComancestor($order = Criteria::ASC) Order by the ComAncestor column
 * @method OrdersQuery orderByComancref1($order = Criteria::ASC) Order by the ComAncRef1 column
 * @method OrdersQuery orderByComancref2($order = Criteria::ASC) Order by the ComAncRef2 column
 * @method OrdersQuery orderByPeriodrange($order = Criteria::ASC) Order by the PeriodRange column
 * @method OrdersQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method OrdersQuery orderByEpochrange($order = Criteria::ASC) Order by the EpochRange column
 * @method OrdersQuery orderByEpoch($order = Criteria::ASC) Order by the Epoch column
 * @method OrdersQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method OrdersQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method OrdersQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method OrdersQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method OrdersQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method OrdersQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method OrdersQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method OrdersQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method OrdersQuery orderByCommonnameGerman($order = Criteria::ASC) Order by the CommonName_German column
 * @method OrdersQuery orderByCommonnameFrench($order = Criteria::ASC) Order by the CommonName_French column
 * @method OrdersQuery orderByCommonnameItalian($order = Criteria::ASC) Order by the CommonName_Italian column
 * @method OrdersQuery orderByCommonnameSpanish($order = Criteria::ASC) Order by the CommonName_Spanish column
 * @method OrdersQuery orderByCommonnamePortuguese($order = Criteria::ASC) Order by the CommonName_Portuguese column
 * @method OrdersQuery orderByCommonnameDutch($order = Criteria::ASC) Order by the CommonName_Dutch column
 * @method OrdersQuery orderByCommonnameChinese($order = Criteria::ASC) Order by the CommonName_Chinese column
 * @method OrdersQuery orderByCommonnameChineseU($order = Criteria::ASC) Order by the CommonName_Chinese_u column
 * @method OrdersQuery orderByCommonnameGreek($order = Criteria::ASC) Order by the CommonName_Greek column
 * @method OrdersQuery orderByCommonnameGreekU($order = Criteria::ASC) Order by the CommonName_Greek_u column
 * @method OrdersQuery orderByCommonnameRussianU($order = Criteria::ASC) Order by the CommonName_Russian_u column
 * @method OrdersQuery orderByCommonnameRussian($order = Criteria::ASC) Order by the CommonName_Russian column
 * @method OrdersQuery orderByCommonnameSwedish($order = Criteria::ASC) Order by the CommonName_Swedish column
 * @method OrdersQuery orderByClassRussian($order = Criteria::ASC) Order by the Class_Russian column
 * @method OrdersQuery orderByEtymologyclass($order = Criteria::ASC) Order by the EtymologyClass column
 * @method OrdersQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OrdersQuery groupByOrdnum() Group by the Ordnum column
 * @method OrdersQuery groupByOrder() Group by the Order column
 * @method OrdersQuery groupByOrderrefno() Group by the OrderRefNo column
 * @method OrdersQuery groupBySortno() Group by the SortNo column
 * @method OrdersQuery groupBySynonym() Group by the Synonym column
 * @method OrdersQuery groupByAuthoryear() Group by the AuthorYear column
 * @method OrdersQuery groupByCommonname() Group by the CommonName column
 * @method OrdersQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method OrdersQuery groupByMarine() Group by the Marine column
 * @method OrdersQuery groupByBrackish() Group by the Brackish column
 * @method OrdersQuery groupByFreshwater() Group by the Freshwater column
 * @method OrdersQuery groupByWatersalinity() Group by the WaterSalinity column
 * @method OrdersQuery groupByFamcount() Group by the FamCount column
 * @method OrdersQuery groupBySpeciescount() Group by the SpeciesCount column
 * @method OrdersQuery groupByEtymologyorder() Group by the EtymologyOrder column
 * @method OrdersQuery groupByClassnum() Group by the ClassNum column
 * @method OrdersQuery groupByClass() Group by the Class column
 * @method OrdersQuery groupByClassificationremark() Group by the ClassificationRemark column
 * @method OrdersQuery groupByPhylogenyfamilies() Group by the PhylogenyFamilies column
 * @method OrdersQuery groupByPhylfamorderrefno() Group by the PhylFamOrderRefNo column
 * @method OrdersQuery groupByPhylogenypostion() Group by the PhylogenyPostion column
 * @method OrdersQuery groupByPhylposorderrefno() Group by the PhylPosOrderRefNo column
 * @method OrdersQuery groupBySisterorder() Group by the SisterOrder column
 * @method OrdersQuery groupByComancestor() Group by the ComAncestor column
 * @method OrdersQuery groupByComancref1() Group by the ComAncRef1 column
 * @method OrdersQuery groupByComancref2() Group by the ComAncRef2 column
 * @method OrdersQuery groupByPeriodrange() Group by the PeriodRange column
 * @method OrdersQuery groupByPeriod() Group by the Period column
 * @method OrdersQuery groupByEpochrange() Group by the EpochRange column
 * @method OrdersQuery groupByEpoch() Group by the Epoch column
 * @method OrdersQuery groupByComplete() Group by the Complete column
 * @method OrdersQuery groupByRemark() Group by the Remark column
 * @method OrdersQuery groupByEntered() Group by the Entered column
 * @method OrdersQuery groupByDateentered() Group by the DateEntered column
 * @method OrdersQuery groupByModified() Group by the Modified column
 * @method OrdersQuery groupByDatemodified() Group by the DateModified column
 * @method OrdersQuery groupByExpert() Group by the Expert column
 * @method OrdersQuery groupByDatechecked() Group by the DateChecked column
 * @method OrdersQuery groupByCommonnameGerman() Group by the CommonName_German column
 * @method OrdersQuery groupByCommonnameFrench() Group by the CommonName_French column
 * @method OrdersQuery groupByCommonnameItalian() Group by the CommonName_Italian column
 * @method OrdersQuery groupByCommonnameSpanish() Group by the CommonName_Spanish column
 * @method OrdersQuery groupByCommonnamePortuguese() Group by the CommonName_Portuguese column
 * @method OrdersQuery groupByCommonnameDutch() Group by the CommonName_Dutch column
 * @method OrdersQuery groupByCommonnameChinese() Group by the CommonName_Chinese column
 * @method OrdersQuery groupByCommonnameChineseU() Group by the CommonName_Chinese_u column
 * @method OrdersQuery groupByCommonnameGreek() Group by the CommonName_Greek column
 * @method OrdersQuery groupByCommonnameGreekU() Group by the CommonName_Greek_u column
 * @method OrdersQuery groupByCommonnameRussianU() Group by the CommonName_Russian_u column
 * @method OrdersQuery groupByCommonnameRussian() Group by the CommonName_Russian column
 * @method OrdersQuery groupByCommonnameSwedish() Group by the CommonName_Swedish column
 * @method OrdersQuery groupByClassRussian() Group by the Class_Russian column
 * @method OrdersQuery groupByEtymologyclass() Group by the EtymologyClass column
 * @method OrdersQuery groupByTs() Group by the TS column
 *
 * @method OrdersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Orders findOne(PropelPDO $con = null) Return the first Orders matching the query
 * @method Orders findOneOrCreate(PropelPDO $con = null) Return the first Orders matching the query, or a new Orders object populated from the query conditions when no match is found
 *
 * @method Orders findOneByOrdnum(int $Ordnum) Return the first Orders filtered by the Ordnum column
 * @method Orders findOneByOrderrefno(int $OrderRefNo) Return the first Orders filtered by the OrderRefNo column
 * @method Orders findOneBySortno(int $SortNo) Return the first Orders filtered by the SortNo column
 * @method Orders findOneBySynonym(int $Synonym) Return the first Orders filtered by the Synonym column
 * @method Orders findOneByAuthoryear(string $AuthorYear) Return the first Orders filtered by the AuthorYear column
 * @method Orders findOneByCommonname(string $CommonName) Return the first Orders filtered by the CommonName column
 * @method Orders findOneByBodyshapei(string $BodyShapeI) Return the first Orders filtered by the BodyShapeI column
 * @method Orders findOneByMarine(int $Marine) Return the first Orders filtered by the Marine column
 * @method Orders findOneByBrackish(int $Brackish) Return the first Orders filtered by the Brackish column
 * @method Orders findOneByFreshwater(int $Freshwater) Return the first Orders filtered by the Freshwater column
 * @method Orders findOneByWatersalinity(string $WaterSalinity) Return the first Orders filtered by the WaterSalinity column
 * @method Orders findOneByFamcount(int $FamCount) Return the first Orders filtered by the FamCount column
 * @method Orders findOneBySpeciescount(int $SpeciesCount) Return the first Orders filtered by the SpeciesCount column
 * @method Orders findOneByEtymologyorder(string $EtymologyOrder) Return the first Orders filtered by the EtymologyOrder column
 * @method Orders findOneByClassnum(int $ClassNum) Return the first Orders filtered by the ClassNum column
 * @method Orders findOneByClass(string $Class) Return the first Orders filtered by the Class column
 * @method Orders findOneByClassificationremark(string $ClassificationRemark) Return the first Orders filtered by the ClassificationRemark column
 * @method Orders findOneByPhylogenyfamilies(string $PhylogenyFamilies) Return the first Orders filtered by the PhylogenyFamilies column
 * @method Orders findOneByPhylfamorderrefno(int $PhylFamOrderRefNo) Return the first Orders filtered by the PhylFamOrderRefNo column
 * @method Orders findOneByPhylogenypostion(string $PhylogenyPostion) Return the first Orders filtered by the PhylogenyPostion column
 * @method Orders findOneByPhylposorderrefno(int $PhylPosOrderRefNo) Return the first Orders filtered by the PhylPosOrderRefNo column
 * @method Orders findOneBySisterorder(string $SisterOrder) Return the first Orders filtered by the SisterOrder column
 * @method Orders findOneByComancestor(int $ComAncestor) Return the first Orders filtered by the ComAncestor column
 * @method Orders findOneByComancref1(int $ComAncRef1) Return the first Orders filtered by the ComAncRef1 column
 * @method Orders findOneByComancref2(int $ComAncRef2) Return the first Orders filtered by the ComAncRef2 column
 * @method Orders findOneByPeriodrange(string $PeriodRange) Return the first Orders filtered by the PeriodRange column
 * @method Orders findOneByPeriod(string $Period) Return the first Orders filtered by the Period column
 * @method Orders findOneByEpochrange(string $EpochRange) Return the first Orders filtered by the EpochRange column
 * @method Orders findOneByEpoch(string $Epoch) Return the first Orders filtered by the Epoch column
 * @method Orders findOneByComplete(int $Complete) Return the first Orders filtered by the Complete column
 * @method Orders findOneByRemark(string $Remark) Return the first Orders filtered by the Remark column
 * @method Orders findOneByEntered(int $Entered) Return the first Orders filtered by the Entered column
 * @method Orders findOneByDateentered(string $DateEntered) Return the first Orders filtered by the DateEntered column
 * @method Orders findOneByModified(int $Modified) Return the first Orders filtered by the Modified column
 * @method Orders findOneByDatemodified(string $DateModified) Return the first Orders filtered by the DateModified column
 * @method Orders findOneByExpert(int $Expert) Return the first Orders filtered by the Expert column
 * @method Orders findOneByDatechecked(string $DateChecked) Return the first Orders filtered by the DateChecked column
 * @method Orders findOneByCommonnameGerman(string $CommonName_German) Return the first Orders filtered by the CommonName_German column
 * @method Orders findOneByCommonnameFrench(string $CommonName_French) Return the first Orders filtered by the CommonName_French column
 * @method Orders findOneByCommonnameItalian(string $CommonName_Italian) Return the first Orders filtered by the CommonName_Italian column
 * @method Orders findOneByCommonnameSpanish(string $CommonName_Spanish) Return the first Orders filtered by the CommonName_Spanish column
 * @method Orders findOneByCommonnamePortuguese(string $CommonName_Portuguese) Return the first Orders filtered by the CommonName_Portuguese column
 * @method Orders findOneByCommonnameDutch(string $CommonName_Dutch) Return the first Orders filtered by the CommonName_Dutch column
 * @method Orders findOneByCommonnameChinese(string $CommonName_Chinese) Return the first Orders filtered by the CommonName_Chinese column
 * @method Orders findOneByCommonnameChineseU(string $CommonName_Chinese_u) Return the first Orders filtered by the CommonName_Chinese_u column
 * @method Orders findOneByCommonnameGreek(string $CommonName_Greek) Return the first Orders filtered by the CommonName_Greek column
 * @method Orders findOneByCommonnameGreekU(string $CommonName_Greek_u) Return the first Orders filtered by the CommonName_Greek_u column
 * @method Orders findOneByCommonnameRussianU(string $CommonName_Russian_u) Return the first Orders filtered by the CommonName_Russian_u column
 * @method Orders findOneByCommonnameRussian(string $CommonName_Russian) Return the first Orders filtered by the CommonName_Russian column
 * @method Orders findOneByCommonnameSwedish(string $CommonName_Swedish) Return the first Orders filtered by the CommonName_Swedish column
 * @method Orders findOneByClassRussian(string $Class_Russian) Return the first Orders filtered by the Class_Russian column
 * @method Orders findOneByEtymologyclass(string $EtymologyClass) Return the first Orders filtered by the EtymologyClass column
 * @method Orders findOneByTs(string $TS) Return the first Orders filtered by the TS column
 *
 * @method array findByOrdnum(int $Ordnum) Return Orders objects filtered by the Ordnum column
 * @method array findByOrder(string $Order) Return Orders objects filtered by the Order column
 * @method array findByOrderrefno(int $OrderRefNo) Return Orders objects filtered by the OrderRefNo column
 * @method array findBySortno(int $SortNo) Return Orders objects filtered by the SortNo column
 * @method array findBySynonym(int $Synonym) Return Orders objects filtered by the Synonym column
 * @method array findByAuthoryear(string $AuthorYear) Return Orders objects filtered by the AuthorYear column
 * @method array findByCommonname(string $CommonName) Return Orders objects filtered by the CommonName column
 * @method array findByBodyshapei(string $BodyShapeI) Return Orders objects filtered by the BodyShapeI column
 * @method array findByMarine(int $Marine) Return Orders objects filtered by the Marine column
 * @method array findByBrackish(int $Brackish) Return Orders objects filtered by the Brackish column
 * @method array findByFreshwater(int $Freshwater) Return Orders objects filtered by the Freshwater column
 * @method array findByWatersalinity(string $WaterSalinity) Return Orders objects filtered by the WaterSalinity column
 * @method array findByFamcount(int $FamCount) Return Orders objects filtered by the FamCount column
 * @method array findBySpeciescount(int $SpeciesCount) Return Orders objects filtered by the SpeciesCount column
 * @method array findByEtymologyorder(string $EtymologyOrder) Return Orders objects filtered by the EtymologyOrder column
 * @method array findByClassnum(int $ClassNum) Return Orders objects filtered by the ClassNum column
 * @method array findByClass(string $Class) Return Orders objects filtered by the Class column
 * @method array findByClassificationremark(string $ClassificationRemark) Return Orders objects filtered by the ClassificationRemark column
 * @method array findByPhylogenyfamilies(string $PhylogenyFamilies) Return Orders objects filtered by the PhylogenyFamilies column
 * @method array findByPhylfamorderrefno(int $PhylFamOrderRefNo) Return Orders objects filtered by the PhylFamOrderRefNo column
 * @method array findByPhylogenypostion(string $PhylogenyPostion) Return Orders objects filtered by the PhylogenyPostion column
 * @method array findByPhylposorderrefno(int $PhylPosOrderRefNo) Return Orders objects filtered by the PhylPosOrderRefNo column
 * @method array findBySisterorder(string $SisterOrder) Return Orders objects filtered by the SisterOrder column
 * @method array findByComancestor(int $ComAncestor) Return Orders objects filtered by the ComAncestor column
 * @method array findByComancref1(int $ComAncRef1) Return Orders objects filtered by the ComAncRef1 column
 * @method array findByComancref2(int $ComAncRef2) Return Orders objects filtered by the ComAncRef2 column
 * @method array findByPeriodrange(string $PeriodRange) Return Orders objects filtered by the PeriodRange column
 * @method array findByPeriod(string $Period) Return Orders objects filtered by the Period column
 * @method array findByEpochrange(string $EpochRange) Return Orders objects filtered by the EpochRange column
 * @method array findByEpoch(string $Epoch) Return Orders objects filtered by the Epoch column
 * @method array findByComplete(int $Complete) Return Orders objects filtered by the Complete column
 * @method array findByRemark(string $Remark) Return Orders objects filtered by the Remark column
 * @method array findByEntered(int $Entered) Return Orders objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Orders objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Orders objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Orders objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Orders objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Orders objects filtered by the DateChecked column
 * @method array findByCommonnameGerman(string $CommonName_German) Return Orders objects filtered by the CommonName_German column
 * @method array findByCommonnameFrench(string $CommonName_French) Return Orders objects filtered by the CommonName_French column
 * @method array findByCommonnameItalian(string $CommonName_Italian) Return Orders objects filtered by the CommonName_Italian column
 * @method array findByCommonnameSpanish(string $CommonName_Spanish) Return Orders objects filtered by the CommonName_Spanish column
 * @method array findByCommonnamePortuguese(string $CommonName_Portuguese) Return Orders objects filtered by the CommonName_Portuguese column
 * @method array findByCommonnameDutch(string $CommonName_Dutch) Return Orders objects filtered by the CommonName_Dutch column
 * @method array findByCommonnameChinese(string $CommonName_Chinese) Return Orders objects filtered by the CommonName_Chinese column
 * @method array findByCommonnameChineseU(string $CommonName_Chinese_u) Return Orders objects filtered by the CommonName_Chinese_u column
 * @method array findByCommonnameGreek(string $CommonName_Greek) Return Orders objects filtered by the CommonName_Greek column
 * @method array findByCommonnameGreekU(string $CommonName_Greek_u) Return Orders objects filtered by the CommonName_Greek_u column
 * @method array findByCommonnameRussianU(string $CommonName_Russian_u) Return Orders objects filtered by the CommonName_Russian_u column
 * @method array findByCommonnameRussian(string $CommonName_Russian) Return Orders objects filtered by the CommonName_Russian column
 * @method array findByCommonnameSwedish(string $CommonName_Swedish) Return Orders objects filtered by the CommonName_Swedish column
 * @method array findByClassRussian(string $Class_Russian) Return Orders objects filtered by the Class_Russian column
 * @method array findByEtymologyclass(string $EtymologyClass) Return Orders objects filtered by the EtymologyClass column
 * @method array findByTs(string $TS) Return Orders objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOrdersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdersQuery object.
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
            $modelName = 'Orders';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdersQuery) {
            return $criteria;
        }
        $query = new OrdersQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Orders|Orders[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Orders A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOrder($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Orders A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Ordnum`, `Order`, `OrderRefNo`, `SortNo`, `Synonym`, `AuthorYear`, `CommonName`, `BodyShapeI`, `Marine`, `Brackish`, `Freshwater`, `WaterSalinity`, `FamCount`, `SpeciesCount`, `EtymologyOrder`, `ClassNum`, `Class`, `ClassificationRemark`, `PhylogenyFamilies`, `PhylFamOrderRefNo`, `PhylogenyPostion`, `PhylPosOrderRefNo`, `SisterOrder`, `ComAncestor`, `ComAncRef1`, `ComAncRef2`, `PeriodRange`, `Period`, `EpochRange`, `Epoch`, `Complete`, `Remark`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `CommonName_German`, `CommonName_French`, `CommonName_Italian`, `CommonName_Spanish`, `CommonName_Portuguese`, `CommonName_Dutch`, `CommonName_Chinese`, `CommonName_Chinese_u`, `CommonName_Greek`, `CommonName_Greek_u`, `CommonName_Russian_u`, `CommonName_Russian`, `CommonName_Swedish`, `Class_Russian`, `EtymologyClass`, `TS` FROM `orders` WHERE `Order` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Orders();
            $obj->hydrate($row);
            OrdersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Orders|Orders[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Orders[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdersPeer::ORDER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdersPeer::ORDER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Ordnum column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdnum(1234); // WHERE Ordnum = 1234
     * $query->filterByOrdnum(array(12, 34)); // WHERE Ordnum IN (12, 34)
     * $query->filterByOrdnum(array('min' => 12)); // WHERE Ordnum >= 12
     * $query->filterByOrdnum(array('max' => 12)); // WHERE Ordnum <= 12
     * </code>
     *
     * @param     mixed $ordnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(OrdersPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(OrdersPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ORDNUM, $ordnum, $comparison);
    }

    /**
     * Filter the query on the Order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE Order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE Order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($order)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $order)) {
                $order = str_replace('*', '%', $order);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the OrderRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderrefno(1234); // WHERE OrderRefNo = 1234
     * $query->filterByOrderrefno(array(12, 34)); // WHERE OrderRefNo IN (12, 34)
     * $query->filterByOrderrefno(array('min' => 12)); // WHERE OrderRefNo >= 12
     * $query->filterByOrderrefno(array('max' => 12)); // WHERE OrderRefNo <= 12
     * </code>
     *
     * @param     mixed $orderrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByOrderrefno($orderrefno = null, $comparison = null)
    {
        if (is_array($orderrefno)) {
            $useMinMax = false;
            if (isset($orderrefno['min'])) {
                $this->addUsingAlias(OrdersPeer::ORDERREFNO, $orderrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderrefno['max'])) {
                $this->addUsingAlias(OrdersPeer::ORDERREFNO, $orderrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ORDERREFNO, $orderrefno, $comparison);
    }

    /**
     * Filter the query on the SortNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySortno(1234); // WHERE SortNo = 1234
     * $query->filterBySortno(array(12, 34)); // WHERE SortNo IN (12, 34)
     * $query->filterBySortno(array('min' => 12)); // WHERE SortNo >= 12
     * $query->filterBySortno(array('max' => 12)); // WHERE SortNo <= 12
     * </code>
     *
     * @param     mixed $sortno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterBySortno($sortno = null, $comparison = null)
    {
        if (is_array($sortno)) {
            $useMinMax = false;
            if (isset($sortno['min'])) {
                $this->addUsingAlias(OrdersPeer::SORTNO, $sortno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortno['max'])) {
                $this->addUsingAlias(OrdersPeer::SORTNO, $sortno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::SORTNO, $sortno, $comparison);
    }

    /**
     * Filter the query on the Synonym column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonym(1234); // WHERE Synonym = 1234
     * $query->filterBySynonym(array(12, 34)); // WHERE Synonym IN (12, 34)
     * $query->filterBySynonym(array('min' => 12)); // WHERE Synonym >= 12
     * $query->filterBySynonym(array('max' => 12)); // WHERE Synonym <= 12
     * </code>
     *
     * @param     mixed $synonym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterBySynonym($synonym = null, $comparison = null)
    {
        if (is_array($synonym)) {
            $useMinMax = false;
            if (isset($synonym['min'])) {
                $this->addUsingAlias(OrdersPeer::SYNONYM, $synonym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synonym['max'])) {
                $this->addUsingAlias(OrdersPeer::SYNONYM, $synonym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::SYNONYM, $synonym, $comparison);
    }

    /**
     * Filter the query on the AuthorYear column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoryear('fooValue');   // WHERE AuthorYear = 'fooValue'
     * $query->filterByAuthoryear('%fooValue%'); // WHERE AuthorYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoryear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByAuthoryear($authoryear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoryear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoryear)) {
                $authoryear = str_replace('*', '%', $authoryear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::AUTHORYEAR, $authoryear, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME, $commonname, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OrdersPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the Marine column
     *
     * Example usage:
     * <code>
     * $query->filterByMarine(1234); // WHERE Marine = 1234
     * $query->filterByMarine(array(12, 34)); // WHERE Marine IN (12, 34)
     * $query->filterByMarine(array('min' => 12)); // WHERE Marine >= 12
     * $query->filterByMarine(array('max' => 12)); // WHERE Marine <= 12
     * </code>
     *
     * @param     mixed $marine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByMarine($marine = null, $comparison = null)
    {
        if (is_array($marine)) {
            $useMinMax = false;
            if (isset($marine['min'])) {
                $this->addUsingAlias(OrdersPeer::MARINE, $marine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marine['max'])) {
                $this->addUsingAlias(OrdersPeer::MARINE, $marine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::MARINE, $marine, $comparison);
    }

    /**
     * Filter the query on the Brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByBrackish(1234); // WHERE Brackish = 1234
     * $query->filterByBrackish(array(12, 34)); // WHERE Brackish IN (12, 34)
     * $query->filterByBrackish(array('min' => 12)); // WHERE Brackish >= 12
     * $query->filterByBrackish(array('max' => 12)); // WHERE Brackish <= 12
     * </code>
     *
     * @param     mixed $brackish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByBrackish($brackish = null, $comparison = null)
    {
        if (is_array($brackish)) {
            $useMinMax = false;
            if (isset($brackish['min'])) {
                $this->addUsingAlias(OrdersPeer::BRACKISH, $brackish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brackish['max'])) {
                $this->addUsingAlias(OrdersPeer::BRACKISH, $brackish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::BRACKISH, $brackish, $comparison);
    }

    /**
     * Filter the query on the Freshwater column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwater(1234); // WHERE Freshwater = 1234
     * $query->filterByFreshwater(array(12, 34)); // WHERE Freshwater IN (12, 34)
     * $query->filterByFreshwater(array('min' => 12)); // WHERE Freshwater >= 12
     * $query->filterByFreshwater(array('max' => 12)); // WHERE Freshwater <= 12
     * </code>
     *
     * @param     mixed $freshwater The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByFreshwater($freshwater = null, $comparison = null)
    {
        if (is_array($freshwater)) {
            $useMinMax = false;
            if (isset($freshwater['min'])) {
                $this->addUsingAlias(OrdersPeer::FRESHWATER, $freshwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshwater['max'])) {
                $this->addUsingAlias(OrdersPeer::FRESHWATER, $freshwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::FRESHWATER, $freshwater, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OrdersPeer::WATERSALINITY, $watersalinity, $comparison);
    }

    /**
     * Filter the query on the FamCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcount(1234); // WHERE FamCount = 1234
     * $query->filterByFamcount(array(12, 34)); // WHERE FamCount IN (12, 34)
     * $query->filterByFamcount(array('min' => 12)); // WHERE FamCount >= 12
     * $query->filterByFamcount(array('max' => 12)); // WHERE FamCount <= 12
     * </code>
     *
     * @param     mixed $famcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByFamcount($famcount = null, $comparison = null)
    {
        if (is_array($famcount)) {
            $useMinMax = false;
            if (isset($famcount['min'])) {
                $this->addUsingAlias(OrdersPeer::FAMCOUNT, $famcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcount['max'])) {
                $this->addUsingAlias(OrdersPeer::FAMCOUNT, $famcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::FAMCOUNT, $famcount, $comparison);
    }

    /**
     * Filter the query on the SpeciesCount column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescount(1234); // WHERE SpeciesCount = 1234
     * $query->filterBySpeciescount(array(12, 34)); // WHERE SpeciesCount IN (12, 34)
     * $query->filterBySpeciescount(array('min' => 12)); // WHERE SpeciesCount >= 12
     * $query->filterBySpeciescount(array('max' => 12)); // WHERE SpeciesCount <= 12
     * </code>
     *
     * @param     mixed $speciescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterBySpeciescount($speciescount = null, $comparison = null)
    {
        if (is_array($speciescount)) {
            $useMinMax = false;
            if (isset($speciescount['min'])) {
                $this->addUsingAlias(OrdersPeer::SPECIESCOUNT, $speciescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescount['max'])) {
                $this->addUsingAlias(OrdersPeer::SPECIESCOUNT, $speciescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::SPECIESCOUNT, $speciescount, $comparison);
    }

    /**
     * Filter the query on the EtymologyOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByEtymologyorder('fooValue');   // WHERE EtymologyOrder = 'fooValue'
     * $query->filterByEtymologyorder('%fooValue%'); // WHERE EtymologyOrder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etymologyorder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByEtymologyorder($etymologyorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etymologyorder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etymologyorder)) {
                $etymologyorder = str_replace('*', '%', $etymologyorder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ETYMOLOGYORDER, $etymologyorder, $comparison);
    }

    /**
     * Filter the query on the ClassNum column
     *
     * Example usage:
     * <code>
     * $query->filterByClassnum(1234); // WHERE ClassNum = 1234
     * $query->filterByClassnum(array(12, 34)); // WHERE ClassNum IN (12, 34)
     * $query->filterByClassnum(array('min' => 12)); // WHERE ClassNum >= 12
     * $query->filterByClassnum(array('max' => 12)); // WHERE ClassNum <= 12
     * </code>
     *
     * @param     mixed $classnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByClassnum($classnum = null, $comparison = null)
    {
        if (is_array($classnum)) {
            $useMinMax = false;
            if (isset($classnum['min'])) {
                $this->addUsingAlias(OrdersPeer::CLASSNUM, $classnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classnum['max'])) {
                $this->addUsingAlias(OrdersPeer::CLASSNUM, $classnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::CLASSNUM, $classnum, $comparison);
    }

    /**
     * Filter the query on the Class column
     *
     * Example usage:
     * <code>
     * $query->filterByClass('fooValue');   // WHERE Class = 'fooValue'
     * $query->filterByClass('%fooValue%'); // WHERE Class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $class The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByClass($class = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($class)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $class)) {
                $class = str_replace('*', '%', $class);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::CLAZZ, $class, $comparison);
    }

    /**
     * Filter the query on the ClassificationRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByClassificationremark('fooValue');   // WHERE ClassificationRemark = 'fooValue'
     * $query->filterByClassificationremark('%fooValue%'); // WHERE ClassificationRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classificationremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByClassificationremark($classificationremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classificationremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $classificationremark)) {
                $classificationremark = str_replace('*', '%', $classificationremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::CLASSIFICATIONREMARK, $classificationremark, $comparison);
    }

    /**
     * Filter the query on the PhylogenyFamilies column
     *
     * Example usage:
     * <code>
     * $query->filterByPhylogenyfamilies('fooValue');   // WHERE PhylogenyFamilies = 'fooValue'
     * $query->filterByPhylogenyfamilies('%fooValue%'); // WHERE PhylogenyFamilies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phylogenyfamilies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPhylogenyfamilies($phylogenyfamilies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phylogenyfamilies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phylogenyfamilies)) {
                $phylogenyfamilies = str_replace('*', '%', $phylogenyfamilies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PHYLOGENYFAMILIES, $phylogenyfamilies, $comparison);
    }

    /**
     * Filter the query on the PhylFamOrderRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPhylfamorderrefno(1234); // WHERE PhylFamOrderRefNo = 1234
     * $query->filterByPhylfamorderrefno(array(12, 34)); // WHERE PhylFamOrderRefNo IN (12, 34)
     * $query->filterByPhylfamorderrefno(array('min' => 12)); // WHERE PhylFamOrderRefNo >= 12
     * $query->filterByPhylfamorderrefno(array('max' => 12)); // WHERE PhylFamOrderRefNo <= 12
     * </code>
     *
     * @param     mixed $phylfamorderrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPhylfamorderrefno($phylfamorderrefno = null, $comparison = null)
    {
        if (is_array($phylfamorderrefno)) {
            $useMinMax = false;
            if (isset($phylfamorderrefno['min'])) {
                $this->addUsingAlias(OrdersPeer::PHYLFAMORDERREFNO, $phylfamorderrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phylfamorderrefno['max'])) {
                $this->addUsingAlias(OrdersPeer::PHYLFAMORDERREFNO, $phylfamorderrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PHYLFAMORDERREFNO, $phylfamorderrefno, $comparison);
    }

    /**
     * Filter the query on the PhylogenyPostion column
     *
     * Example usage:
     * <code>
     * $query->filterByPhylogenypostion('fooValue');   // WHERE PhylogenyPostion = 'fooValue'
     * $query->filterByPhylogenypostion('%fooValue%'); // WHERE PhylogenyPostion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phylogenypostion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPhylogenypostion($phylogenypostion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phylogenypostion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phylogenypostion)) {
                $phylogenypostion = str_replace('*', '%', $phylogenypostion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PHYLOGENYPOSTION, $phylogenypostion, $comparison);
    }

    /**
     * Filter the query on the PhylPosOrderRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPhylposorderrefno(1234); // WHERE PhylPosOrderRefNo = 1234
     * $query->filterByPhylposorderrefno(array(12, 34)); // WHERE PhylPosOrderRefNo IN (12, 34)
     * $query->filterByPhylposorderrefno(array('min' => 12)); // WHERE PhylPosOrderRefNo >= 12
     * $query->filterByPhylposorderrefno(array('max' => 12)); // WHERE PhylPosOrderRefNo <= 12
     * </code>
     *
     * @param     mixed $phylposorderrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPhylposorderrefno($phylposorderrefno = null, $comparison = null)
    {
        if (is_array($phylposorderrefno)) {
            $useMinMax = false;
            if (isset($phylposorderrefno['min'])) {
                $this->addUsingAlias(OrdersPeer::PHYLPOSORDERREFNO, $phylposorderrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phylposorderrefno['max'])) {
                $this->addUsingAlias(OrdersPeer::PHYLPOSORDERREFNO, $phylposorderrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PHYLPOSORDERREFNO, $phylposorderrefno, $comparison);
    }

    /**
     * Filter the query on the SisterOrder column
     *
     * Example usage:
     * <code>
     * $query->filterBySisterorder('fooValue');   // WHERE SisterOrder = 'fooValue'
     * $query->filterBySisterorder('%fooValue%'); // WHERE SisterOrder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sisterorder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterBySisterorder($sisterorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sisterorder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sisterorder)) {
                $sisterorder = str_replace('*', '%', $sisterorder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::SISTERORDER, $sisterorder, $comparison);
    }

    /**
     * Filter the query on the ComAncestor column
     *
     * Example usage:
     * <code>
     * $query->filterByComancestor(1234); // WHERE ComAncestor = 1234
     * $query->filterByComancestor(array(12, 34)); // WHERE ComAncestor IN (12, 34)
     * $query->filterByComancestor(array('min' => 12)); // WHERE ComAncestor >= 12
     * $query->filterByComancestor(array('max' => 12)); // WHERE ComAncestor <= 12
     * </code>
     *
     * @param     mixed $comancestor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByComancestor($comancestor = null, $comparison = null)
    {
        if (is_array($comancestor)) {
            $useMinMax = false;
            if (isset($comancestor['min'])) {
                $this->addUsingAlias(OrdersPeer::COMANCESTOR, $comancestor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comancestor['max'])) {
                $this->addUsingAlias(OrdersPeer::COMANCESTOR, $comancestor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMANCESTOR, $comancestor, $comparison);
    }

    /**
     * Filter the query on the ComAncRef1 column
     *
     * Example usage:
     * <code>
     * $query->filterByComancref1(1234); // WHERE ComAncRef1 = 1234
     * $query->filterByComancref1(array(12, 34)); // WHERE ComAncRef1 IN (12, 34)
     * $query->filterByComancref1(array('min' => 12)); // WHERE ComAncRef1 >= 12
     * $query->filterByComancref1(array('max' => 12)); // WHERE ComAncRef1 <= 12
     * </code>
     *
     * @param     mixed $comancref1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByComancref1($comancref1 = null, $comparison = null)
    {
        if (is_array($comancref1)) {
            $useMinMax = false;
            if (isset($comancref1['min'])) {
                $this->addUsingAlias(OrdersPeer::COMANCREF1, $comancref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comancref1['max'])) {
                $this->addUsingAlias(OrdersPeer::COMANCREF1, $comancref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMANCREF1, $comancref1, $comparison);
    }

    /**
     * Filter the query on the ComAncRef2 column
     *
     * Example usage:
     * <code>
     * $query->filterByComancref2(1234); // WHERE ComAncRef2 = 1234
     * $query->filterByComancref2(array(12, 34)); // WHERE ComAncRef2 IN (12, 34)
     * $query->filterByComancref2(array('min' => 12)); // WHERE ComAncRef2 >= 12
     * $query->filterByComancref2(array('max' => 12)); // WHERE ComAncRef2 <= 12
     * </code>
     *
     * @param     mixed $comancref2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByComancref2($comancref2 = null, $comparison = null)
    {
        if (is_array($comancref2)) {
            $useMinMax = false;
            if (isset($comancref2['min'])) {
                $this->addUsingAlias(OrdersPeer::COMANCREF2, $comancref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comancref2['max'])) {
                $this->addUsingAlias(OrdersPeer::COMANCREF2, $comancref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMANCREF2, $comancref2, $comparison);
    }

    /**
     * Filter the query on the PeriodRange column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodrange('fooValue');   // WHERE PeriodRange = 'fooValue'
     * $query->filterByPeriodrange('%fooValue%'); // WHERE PeriodRange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodrange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPeriodrange($periodrange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodrange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodrange)) {
                $periodrange = str_replace('*', '%', $periodrange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PERIODRANGE, $periodrange, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('fooValue');   // WHERE Period = 'fooValue'
     * $query->filterByPeriod('%fooValue%'); // WHERE Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $period The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($period)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $period)) {
                $period = str_replace('*', '%', $period);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the EpochRange column
     *
     * Example usage:
     * <code>
     * $query->filterByEpochrange('fooValue');   // WHERE EpochRange = 'fooValue'
     * $query->filterByEpochrange('%fooValue%'); // WHERE EpochRange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $epochrange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByEpochrange($epochrange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($epochrange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $epochrange)) {
                $epochrange = str_replace('*', '%', $epochrange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::EPOCHRANGE, $epochrange, $comparison);
    }

    /**
     * Filter the query on the Epoch column
     *
     * Example usage:
     * <code>
     * $query->filterByEpoch('fooValue');   // WHERE Epoch = 'fooValue'
     * $query->filterByEpoch('%fooValue%'); // WHERE Epoch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $epoch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByEpoch($epoch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($epoch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $epoch)) {
                $epoch = str_replace('*', '%', $epoch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::EPOCH, $epoch, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete(1234); // WHERE Complete = 1234
     * $query->filterByComplete(array(12, 34)); // WHERE Complete IN (12, 34)
     * $query->filterByComplete(array('min' => 12)); // WHERE Complete >= 12
     * $query->filterByComplete(array('max' => 12)); // WHERE Complete <= 12
     * </code>
     *
     * @param     mixed $complete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (is_array($complete)) {
            $useMinMax = false;
            if (isset($complete['min'])) {
                $this->addUsingAlias(OrdersPeer::COMPLETE, $complete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($complete['max'])) {
                $this->addUsingAlias(OrdersPeer::COMPLETE, $complete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMPLETE, $complete, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OrdersPeer::REMARK, $remark, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(OrdersPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(OrdersPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(OrdersPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(OrdersPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(OrdersPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(OrdersPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(OrdersPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(OrdersPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(OrdersPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(OrdersPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
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
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(OrdersPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(OrdersPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the CommonName_German column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGerman('fooValue');   // WHERE CommonName_German = 'fooValue'
     * $query->filterByCommonnameGerman('%fooValue%'); // WHERE CommonName_German LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGerman The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameGerman($commonnameGerman = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGerman)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGerman)) {
                $commonnameGerman = str_replace('*', '%', $commonnameGerman);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_GERMAN, $commonnameGerman, $comparison);
    }

    /**
     * Filter the query on the CommonName_French column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameFrench('fooValue');   // WHERE CommonName_French = 'fooValue'
     * $query->filterByCommonnameFrench('%fooValue%'); // WHERE CommonName_French LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameFrench The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameFrench($commonnameFrench = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameFrench)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameFrench)) {
                $commonnameFrench = str_replace('*', '%', $commonnameFrench);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_FRENCH, $commonnameFrench, $comparison);
    }

    /**
     * Filter the query on the CommonName_Italian column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameItalian('fooValue');   // WHERE CommonName_Italian = 'fooValue'
     * $query->filterByCommonnameItalian('%fooValue%'); // WHERE CommonName_Italian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameItalian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameItalian($commonnameItalian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameItalian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameItalian)) {
                $commonnameItalian = str_replace('*', '%', $commonnameItalian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_ITALIAN, $commonnameItalian, $comparison);
    }

    /**
     * Filter the query on the CommonName_Spanish column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameSpanish('fooValue');   // WHERE CommonName_Spanish = 'fooValue'
     * $query->filterByCommonnameSpanish('%fooValue%'); // WHERE CommonName_Spanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameSpanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameSpanish($commonnameSpanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameSpanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameSpanish)) {
                $commonnameSpanish = str_replace('*', '%', $commonnameSpanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_SPANISH, $commonnameSpanish, $comparison);
    }

    /**
     * Filter the query on the CommonName_Portuguese column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnamePortuguese('fooValue');   // WHERE CommonName_Portuguese = 'fooValue'
     * $query->filterByCommonnamePortuguese('%fooValue%'); // WHERE CommonName_Portuguese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnamePortuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnamePortuguese($commonnamePortuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnamePortuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnamePortuguese)) {
                $commonnamePortuguese = str_replace('*', '%', $commonnamePortuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_PORTUGUESE, $commonnamePortuguese, $comparison);
    }

    /**
     * Filter the query on the CommonName_Dutch column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameDutch('fooValue');   // WHERE CommonName_Dutch = 'fooValue'
     * $query->filterByCommonnameDutch('%fooValue%'); // WHERE CommonName_Dutch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameDutch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameDutch($commonnameDutch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameDutch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameDutch)) {
                $commonnameDutch = str_replace('*', '%', $commonnameDutch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_DUTCH, $commonnameDutch, $comparison);
    }

    /**
     * Filter the query on the CommonName_Chinese column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameChinese('fooValue');   // WHERE CommonName_Chinese = 'fooValue'
     * $query->filterByCommonnameChinese('%fooValue%'); // WHERE CommonName_Chinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameChinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameChinese($commonnameChinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameChinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameChinese)) {
                $commonnameChinese = str_replace('*', '%', $commonnameChinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_CHINESE, $commonnameChinese, $comparison);
    }

    /**
     * Filter the query on the CommonName_Chinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameChineseU('fooValue');   // WHERE CommonName_Chinese_u = 'fooValue'
     * $query->filterByCommonnameChineseU('%fooValue%'); // WHERE CommonName_Chinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameChineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameChineseU($commonnameChineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameChineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameChineseU)) {
                $commonnameChineseU = str_replace('*', '%', $commonnameChineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_CHINESE_U, $commonnameChineseU, $comparison);
    }

    /**
     * Filter the query on the CommonName_Greek column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGreek('fooValue');   // WHERE CommonName_Greek = 'fooValue'
     * $query->filterByCommonnameGreek('%fooValue%'); // WHERE CommonName_Greek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGreek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameGreek($commonnameGreek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGreek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGreek)) {
                $commonnameGreek = str_replace('*', '%', $commonnameGreek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_GREEK, $commonnameGreek, $comparison);
    }

    /**
     * Filter the query on the CommonName_Greek_u column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGreekU('fooValue');   // WHERE CommonName_Greek_u = 'fooValue'
     * $query->filterByCommonnameGreekU('%fooValue%'); // WHERE CommonName_Greek_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGreekU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameGreekU($commonnameGreekU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGreekU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGreekU)) {
                $commonnameGreekU = str_replace('*', '%', $commonnameGreekU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_GREEK_U, $commonnameGreekU, $comparison);
    }

    /**
     * Filter the query on the CommonName_Russian_u column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameRussianU('fooValue');   // WHERE CommonName_Russian_u = 'fooValue'
     * $query->filterByCommonnameRussianU('%fooValue%'); // WHERE CommonName_Russian_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameRussianU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameRussianU($commonnameRussianU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameRussianU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameRussianU)) {
                $commonnameRussianU = str_replace('*', '%', $commonnameRussianU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_RUSSIAN_U, $commonnameRussianU, $comparison);
    }

    /**
     * Filter the query on the CommonName_Russian column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameRussian('fooValue');   // WHERE CommonName_Russian = 'fooValue'
     * $query->filterByCommonnameRussian('%fooValue%'); // WHERE CommonName_Russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameRussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameRussian($commonnameRussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameRussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameRussian)) {
                $commonnameRussian = str_replace('*', '%', $commonnameRussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_RUSSIAN, $commonnameRussian, $comparison);
    }

    /**
     * Filter the query on the CommonName_Swedish column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameSwedish('fooValue');   // WHERE CommonName_Swedish = 'fooValue'
     * $query->filterByCommonnameSwedish('%fooValue%'); // WHERE CommonName_Swedish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameSwedish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByCommonnameSwedish($commonnameSwedish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameSwedish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameSwedish)) {
                $commonnameSwedish = str_replace('*', '%', $commonnameSwedish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::COMMONNAME_SWEDISH, $commonnameSwedish, $comparison);
    }

    /**
     * Filter the query on the Class_Russian column
     *
     * Example usage:
     * <code>
     * $query->filterByClassRussian('fooValue');   // WHERE Class_Russian = 'fooValue'
     * $query->filterByClassRussian('%fooValue%'); // WHERE Class_Russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classRussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByClassRussian($classRussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classRussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $classRussian)) {
                $classRussian = str_replace('*', '%', $classRussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::CLASS_RUSSIAN, $classRussian, $comparison);
    }

    /**
     * Filter the query on the EtymologyClass column
     *
     * Example usage:
     * <code>
     * $query->filterByEtymologyclass('fooValue');   // WHERE EtymologyClass = 'fooValue'
     * $query->filterByEtymologyclass('%fooValue%'); // WHERE EtymologyClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etymologyclass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByEtymologyclass($etymologyclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etymologyclass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etymologyclass)) {
                $etymologyclass = str_replace('*', '%', $etymologyclass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdersPeer::ETYMOLOGYCLASS, $etymologyclass, $comparison);
    }

    /**
     * Filter the query on the TS column
     *
     * Example usage:
     * <code>
     * $query->filterByTs('2011-03-14'); // WHERE TS = '2011-03-14'
     * $query->filterByTs('now'); // WHERE TS = '2011-03-14'
     * $query->filterByTs(array('max' => 'yesterday')); // WHERE TS < '2011-03-13'
     * </code>
     *
     * @param     mixed $ts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OrdersPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OrdersPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Orders $orders Object to remove from the list of results
     *
     * @return OrdersQuery The current query, for fluid interface
     */
    public function prune($orders = null)
    {
        if ($orders) {
            $this->addUsingAlias(OrdersPeer::ORDER, $orders->getOrder(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
