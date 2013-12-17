<?php


/**
 * Base class that represents a query for the 'larvaepresence' table.
 *
 *
 *
 * @method LarvaepresenceQuery orderByAutoctr($order = Criteria::ASC) Order by the Autoctr column
 * @method LarvaepresenceQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method LarvaepresenceQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method LarvaepresenceQuery orderByLarvalrefno($order = Criteria::ASC) Order by the LarvalRefNo column
 * @method LarvaepresenceQuery orderBySourceref($order = Criteria::ASC) Order by the SourceRef column
 * @method LarvaepresenceQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LarvaepresenceQuery orderByLarvalarea($order = Criteria::ASC) Order by the Larvalarea column
 * @method LarvaepresenceQuery orderByLatitudedeg($order = Criteria::ASC) Order by the LatitudeDeg column
 * @method LarvaepresenceQuery orderByLatitudemin($order = Criteria::ASC) Order by the LatitudeMin column
 * @method LarvaepresenceQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method LarvaepresenceQuery orderByLatitudedegto($order = Criteria::ASC) Order by the LatitudeDegTo column
 * @method LarvaepresenceQuery orderByLatitudeminto($order = Criteria::ASC) Order by the LatitudeMinTo column
 * @method LarvaepresenceQuery orderByNorthsouthto($order = Criteria::ASC) Order by the NorthSouthTo column
 * @method LarvaepresenceQuery orderByLongitudedeg($order = Criteria::ASC) Order by the LongitudeDeg column
 * @method LarvaepresenceQuery orderByLongitudemin($order = Criteria::ASC) Order by the LongitudeMin column
 * @method LarvaepresenceQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method LarvaepresenceQuery orderByLongitudedegto($order = Criteria::ASC) Order by the LongitudeDegTo column
 * @method LarvaepresenceQuery orderByLongitudeminto($order = Criteria::ASC) Order by the LongitudeMinTo column
 * @method LarvaepresenceQuery orderByEastwestto($order = Criteria::ASC) Order by the EastWestTo column
 * @method LarvaepresenceQuery orderByJan($order = Criteria::ASC) Order by the Jan column
 * @method LarvaepresenceQuery orderByFeb($order = Criteria::ASC) Order by the Feb column
 * @method LarvaepresenceQuery orderByMar($order = Criteria::ASC) Order by the Mar column
 * @method LarvaepresenceQuery orderByApr($order = Criteria::ASC) Order by the Apr column
 * @method LarvaepresenceQuery orderByMay($order = Criteria::ASC) Order by the May column
 * @method LarvaepresenceQuery orderByJun($order = Criteria::ASC) Order by the Jun column
 * @method LarvaepresenceQuery orderByJul($order = Criteria::ASC) Order by the Jul column
 * @method LarvaepresenceQuery orderByAug($order = Criteria::ASC) Order by the Aug column
 * @method LarvaepresenceQuery orderBySep($order = Criteria::ASC) Order by the Sep column
 * @method LarvaepresenceQuery orderByOct($order = Criteria::ASC) Order by the Oct column
 * @method LarvaepresenceQuery orderByNov($order = Criteria::ASC) Order by the Nov column
 * @method LarvaepresenceQuery orderByDec($order = Criteria::ASC) Order by the Dec column
 * @method LarvaepresenceQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LarvaepresenceQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LarvaepresenceQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LarvaepresenceQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LarvaepresenceQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LarvaepresenceQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LarvaepresenceQuery orderByLarvpresremarks($order = Criteria::ASC) Order by the LarvPresRemarks column
 * @method LarvaepresenceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LarvaepresenceQuery groupByAutoctr() Group by the Autoctr column
 * @method LarvaepresenceQuery groupByStockcode() Group by the StockCode column
 * @method LarvaepresenceQuery groupBySpeccode() Group by the SpecCode column
 * @method LarvaepresenceQuery groupByLarvalrefno() Group by the LarvalRefNo column
 * @method LarvaepresenceQuery groupBySourceref() Group by the SourceRef column
 * @method LarvaepresenceQuery groupByCCode() Group by the C_Code column
 * @method LarvaepresenceQuery groupByLarvalarea() Group by the Larvalarea column
 * @method LarvaepresenceQuery groupByLatitudedeg() Group by the LatitudeDeg column
 * @method LarvaepresenceQuery groupByLatitudemin() Group by the LatitudeMin column
 * @method LarvaepresenceQuery groupByNorthsouth() Group by the NorthSouth column
 * @method LarvaepresenceQuery groupByLatitudedegto() Group by the LatitudeDegTo column
 * @method LarvaepresenceQuery groupByLatitudeminto() Group by the LatitudeMinTo column
 * @method LarvaepresenceQuery groupByNorthsouthto() Group by the NorthSouthTo column
 * @method LarvaepresenceQuery groupByLongitudedeg() Group by the LongitudeDeg column
 * @method LarvaepresenceQuery groupByLongitudemin() Group by the LongitudeMin column
 * @method LarvaepresenceQuery groupByEastwest() Group by the EastWest column
 * @method LarvaepresenceQuery groupByLongitudedegto() Group by the LongitudeDegTo column
 * @method LarvaepresenceQuery groupByLongitudeminto() Group by the LongitudeMinTo column
 * @method LarvaepresenceQuery groupByEastwestto() Group by the EastWestTo column
 * @method LarvaepresenceQuery groupByJan() Group by the Jan column
 * @method LarvaepresenceQuery groupByFeb() Group by the Feb column
 * @method LarvaepresenceQuery groupByMar() Group by the Mar column
 * @method LarvaepresenceQuery groupByApr() Group by the Apr column
 * @method LarvaepresenceQuery groupByMay() Group by the May column
 * @method LarvaepresenceQuery groupByJun() Group by the Jun column
 * @method LarvaepresenceQuery groupByJul() Group by the Jul column
 * @method LarvaepresenceQuery groupByAug() Group by the Aug column
 * @method LarvaepresenceQuery groupBySep() Group by the Sep column
 * @method LarvaepresenceQuery groupByOct() Group by the Oct column
 * @method LarvaepresenceQuery groupByNov() Group by the Nov column
 * @method LarvaepresenceQuery groupByDec() Group by the Dec column
 * @method LarvaepresenceQuery groupByEntered() Group by the Entered column
 * @method LarvaepresenceQuery groupByDateentered() Group by the DateEntered column
 * @method LarvaepresenceQuery groupByModified() Group by the Modified column
 * @method LarvaepresenceQuery groupByDatemodified() Group by the DateModified column
 * @method LarvaepresenceQuery groupByExpert() Group by the Expert column
 * @method LarvaepresenceQuery groupByDatechecked() Group by the DateChecked column
 * @method LarvaepresenceQuery groupByLarvpresremarks() Group by the LarvPresRemarks column
 * @method LarvaepresenceQuery groupByTs() Group by the TS column
 *
 * @method LarvaepresenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LarvaepresenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LarvaepresenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Larvaepresence findOne(PropelPDO $con = null) Return the first Larvaepresence matching the query
 * @method Larvaepresence findOneOrCreate(PropelPDO $con = null) Return the first Larvaepresence matching the query, or a new Larvaepresence object populated from the query conditions when no match is found
 *
 * @method Larvaepresence findOneByAutoctr(int $Autoctr) Return the first Larvaepresence filtered by the Autoctr column
 * @method Larvaepresence findOneByStockcode(int $StockCode) Return the first Larvaepresence filtered by the StockCode column
 * @method Larvaepresence findOneBySpeccode(int $SpecCode) Return the first Larvaepresence filtered by the SpecCode column
 * @method Larvaepresence findOneByLarvalrefno(int $LarvalRefNo) Return the first Larvaepresence filtered by the LarvalRefNo column
 * @method Larvaepresence findOneBySourceref(int $SourceRef) Return the first Larvaepresence filtered by the SourceRef column
 * @method Larvaepresence findOneByCCode(string $C_Code) Return the first Larvaepresence filtered by the C_Code column
 * @method Larvaepresence findOneByLarvalarea(string $Larvalarea) Return the first Larvaepresence filtered by the Larvalarea column
 * @method Larvaepresence findOneByLatitudedeg(int $LatitudeDeg) Return the first Larvaepresence filtered by the LatitudeDeg column
 * @method Larvaepresence findOneByLatitudemin(double $LatitudeMin) Return the first Larvaepresence filtered by the LatitudeMin column
 * @method Larvaepresence findOneByNorthsouth(string $NorthSouth) Return the first Larvaepresence filtered by the NorthSouth column
 * @method Larvaepresence findOneByLatitudedegto(int $LatitudeDegTo) Return the first Larvaepresence filtered by the LatitudeDegTo column
 * @method Larvaepresence findOneByLatitudeminto(double $LatitudeMinTo) Return the first Larvaepresence filtered by the LatitudeMinTo column
 * @method Larvaepresence findOneByNorthsouthto(string $NorthSouthTo) Return the first Larvaepresence filtered by the NorthSouthTo column
 * @method Larvaepresence findOneByLongitudedeg(int $LongitudeDeg) Return the first Larvaepresence filtered by the LongitudeDeg column
 * @method Larvaepresence findOneByLongitudemin(double $LongitudeMin) Return the first Larvaepresence filtered by the LongitudeMin column
 * @method Larvaepresence findOneByEastwest(string $EastWest) Return the first Larvaepresence filtered by the EastWest column
 * @method Larvaepresence findOneByLongitudedegto(int $LongitudeDegTo) Return the first Larvaepresence filtered by the LongitudeDegTo column
 * @method Larvaepresence findOneByLongitudeminto(double $LongitudeMinTo) Return the first Larvaepresence filtered by the LongitudeMinTo column
 * @method Larvaepresence findOneByEastwestto(string $EastWestTo) Return the first Larvaepresence filtered by the EastWestTo column
 * @method Larvaepresence findOneByJan(double $Jan) Return the first Larvaepresence filtered by the Jan column
 * @method Larvaepresence findOneByFeb(double $Feb) Return the first Larvaepresence filtered by the Feb column
 * @method Larvaepresence findOneByMar(double $Mar) Return the first Larvaepresence filtered by the Mar column
 * @method Larvaepresence findOneByApr(double $Apr) Return the first Larvaepresence filtered by the Apr column
 * @method Larvaepresence findOneByMay(double $May) Return the first Larvaepresence filtered by the May column
 * @method Larvaepresence findOneByJun(double $Jun) Return the first Larvaepresence filtered by the Jun column
 * @method Larvaepresence findOneByJul(double $Jul) Return the first Larvaepresence filtered by the Jul column
 * @method Larvaepresence findOneByAug(double $Aug) Return the first Larvaepresence filtered by the Aug column
 * @method Larvaepresence findOneBySep(double $Sep) Return the first Larvaepresence filtered by the Sep column
 * @method Larvaepresence findOneByOct(double $Oct) Return the first Larvaepresence filtered by the Oct column
 * @method Larvaepresence findOneByNov(double $Nov) Return the first Larvaepresence filtered by the Nov column
 * @method Larvaepresence findOneByDec(double $Dec) Return the first Larvaepresence filtered by the Dec column
 * @method Larvaepresence findOneByEntered(int $Entered) Return the first Larvaepresence filtered by the Entered column
 * @method Larvaepresence findOneByDateentered(string $DateEntered) Return the first Larvaepresence filtered by the DateEntered column
 * @method Larvaepresence findOneByModified(int $Modified) Return the first Larvaepresence filtered by the Modified column
 * @method Larvaepresence findOneByDatemodified(string $DateModified) Return the first Larvaepresence filtered by the DateModified column
 * @method Larvaepresence findOneByExpert(int $Expert) Return the first Larvaepresence filtered by the Expert column
 * @method Larvaepresence findOneByDatechecked(string $DateChecked) Return the first Larvaepresence filtered by the DateChecked column
 * @method Larvaepresence findOneByLarvpresremarks(string $LarvPresRemarks) Return the first Larvaepresence filtered by the LarvPresRemarks column
 * @method Larvaepresence findOneByTs(string $TS) Return the first Larvaepresence filtered by the TS column
 *
 * @method array findByAutoctr(int $Autoctr) Return Larvaepresence objects filtered by the Autoctr column
 * @method array findByStockcode(int $StockCode) Return Larvaepresence objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Larvaepresence objects filtered by the SpecCode column
 * @method array findByLarvalrefno(int $LarvalRefNo) Return Larvaepresence objects filtered by the LarvalRefNo column
 * @method array findBySourceref(int $SourceRef) Return Larvaepresence objects filtered by the SourceRef column
 * @method array findByCCode(string $C_Code) Return Larvaepresence objects filtered by the C_Code column
 * @method array findByLarvalarea(string $Larvalarea) Return Larvaepresence objects filtered by the Larvalarea column
 * @method array findByLatitudedeg(int $LatitudeDeg) Return Larvaepresence objects filtered by the LatitudeDeg column
 * @method array findByLatitudemin(double $LatitudeMin) Return Larvaepresence objects filtered by the LatitudeMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Larvaepresence objects filtered by the NorthSouth column
 * @method array findByLatitudedegto(int $LatitudeDegTo) Return Larvaepresence objects filtered by the LatitudeDegTo column
 * @method array findByLatitudeminto(double $LatitudeMinTo) Return Larvaepresence objects filtered by the LatitudeMinTo column
 * @method array findByNorthsouthto(string $NorthSouthTo) Return Larvaepresence objects filtered by the NorthSouthTo column
 * @method array findByLongitudedeg(int $LongitudeDeg) Return Larvaepresence objects filtered by the LongitudeDeg column
 * @method array findByLongitudemin(double $LongitudeMin) Return Larvaepresence objects filtered by the LongitudeMin column
 * @method array findByEastwest(string $EastWest) Return Larvaepresence objects filtered by the EastWest column
 * @method array findByLongitudedegto(int $LongitudeDegTo) Return Larvaepresence objects filtered by the LongitudeDegTo column
 * @method array findByLongitudeminto(double $LongitudeMinTo) Return Larvaepresence objects filtered by the LongitudeMinTo column
 * @method array findByEastwestto(string $EastWestTo) Return Larvaepresence objects filtered by the EastWestTo column
 * @method array findByJan(double $Jan) Return Larvaepresence objects filtered by the Jan column
 * @method array findByFeb(double $Feb) Return Larvaepresence objects filtered by the Feb column
 * @method array findByMar(double $Mar) Return Larvaepresence objects filtered by the Mar column
 * @method array findByApr(double $Apr) Return Larvaepresence objects filtered by the Apr column
 * @method array findByMay(double $May) Return Larvaepresence objects filtered by the May column
 * @method array findByJun(double $Jun) Return Larvaepresence objects filtered by the Jun column
 * @method array findByJul(double $Jul) Return Larvaepresence objects filtered by the Jul column
 * @method array findByAug(double $Aug) Return Larvaepresence objects filtered by the Aug column
 * @method array findBySep(double $Sep) Return Larvaepresence objects filtered by the Sep column
 * @method array findByOct(double $Oct) Return Larvaepresence objects filtered by the Oct column
 * @method array findByNov(double $Nov) Return Larvaepresence objects filtered by the Nov column
 * @method array findByDec(double $Dec) Return Larvaepresence objects filtered by the Dec column
 * @method array findByEntered(int $Entered) Return Larvaepresence objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Larvaepresence objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Larvaepresence objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Larvaepresence objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Larvaepresence objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Larvaepresence objects filtered by the DateChecked column
 * @method array findByLarvpresremarks(string $LarvPresRemarks) Return Larvaepresence objects filtered by the LarvPresRemarks column
 * @method array findByTs(string $TS) Return Larvaepresence objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvaepresenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLarvaepresenceQuery object.
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
            $modelName = 'Larvaepresence';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LarvaepresenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LarvaepresenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LarvaepresenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LarvaepresenceQuery) {
            return $criteria;
        }
        $query = new LarvaepresenceQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$Autoctr, $StockCode, $LarvalRefNo, $Larvalarea]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Larvaepresence|Larvaepresence[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LarvaepresencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LarvaepresencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Larvaepresence A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Autoctr`, `StockCode`, `SpecCode`, `LarvalRefNo`, `SourceRef`, `C_Code`, `Larvalarea`, `LatitudeDeg`, `LatitudeMin`, `NorthSouth`, `LatitudeDegTo`, `LatitudeMinTo`, `NorthSouthTo`, `LongitudeDeg`, `LongitudeMin`, `EastWest`, `LongitudeDegTo`, `LongitudeMinTo`, `EastWestTo`, `Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `LarvPresRemarks`, `TS` FROM `larvaepresence` WHERE `Autoctr` = :p0 AND `StockCode` = :p1 AND `LarvalRefNo` = :p2 AND `Larvalarea` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Larvaepresence();
            $obj->hydrate($row);
            LarvaepresencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return Larvaepresence|Larvaepresence[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Larvaepresence[]|mixed the list of results, formatted by the current formatter
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LarvaepresencePeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LarvaepresencePeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(LarvaepresencePeer::LARVALREFNO, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(LarvaepresencePeer::LARVALAREA, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LarvaepresencePeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LarvaepresencePeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(LarvaepresencePeer::LARVALREFNO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(LarvaepresencePeer::LARVALAREA, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE Autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE Autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE Autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE Autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the LarvalRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalrefno(1234); // WHERE LarvalRefNo = 1234
     * $query->filterByLarvalrefno(array(12, 34)); // WHERE LarvalRefNo IN (12, 34)
     * $query->filterByLarvalrefno(array('min' => 12)); // WHERE LarvalRefNo >= 12
     * $query->filterByLarvalrefno(array('max' => 12)); // WHERE LarvalRefNo <= 12
     * </code>
     *
     * @param     mixed $larvalrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLarvalrefno($larvalrefno = null, $comparison = null)
    {
        if (is_array($larvalrefno)) {
            $useMinMax = false;
            if (isset($larvalrefno['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LARVALREFNO, $larvalrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalrefno['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LARVALREFNO, $larvalrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LARVALREFNO, $larvalrefno, $comparison);
    }

    /**
     * Filter the query on the SourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceref(1234); // WHERE SourceRef = 1234
     * $query->filterBySourceref(array(12, 34)); // WHERE SourceRef IN (12, 34)
     * $query->filterBySourceref(array('min' => 12)); // WHERE SourceRef >= 12
     * $query->filterBySourceref(array('max' => 12)); // WHERE SourceRef <= 12
     * </code>
     *
     * @param     mixed $sourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterBySourceref($sourceref = null, $comparison = null)
    {
        if (is_array($sourceref)) {
            $useMinMax = false;
            if (isset($sourceref['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::SOURCEREF, $sourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sourceref['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::SOURCEREF, $sourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::SOURCEREF, $sourceref, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Larvalarea column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalarea('fooValue');   // WHERE Larvalarea = 'fooValue'
     * $query->filterByLarvalarea('%fooValue%'); // WHERE Larvalarea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvalarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLarvalarea($larvalarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvalarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvalarea)) {
                $larvalarea = str_replace('*', '%', $larvalarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LARVALAREA, $larvalarea, $comparison);
    }

    /**
     * Filter the query on the LatitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedeg(1234); // WHERE LatitudeDeg = 1234
     * $query->filterByLatitudedeg(array(12, 34)); // WHERE LatitudeDeg IN (12, 34)
     * $query->filterByLatitudedeg(array('min' => 12)); // WHERE LatitudeDeg >= 12
     * $query->filterByLatitudedeg(array('max' => 12)); // WHERE LatitudeDeg <= 12
     * </code>
     *
     * @param     mixed $latitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLatitudedeg($latitudedeg = null, $comparison = null)
    {
        if (is_array($latitudedeg)) {
            $useMinMax = false;
            if (isset($latitudedeg['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEG, $latitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedeg['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEG, $latitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEG, $latitudedeg, $comparison);
    }

    /**
     * Filter the query on the LatitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudemin(1234); // WHERE LatitudeMin = 1234
     * $query->filterByLatitudemin(array(12, 34)); // WHERE LatitudeMin IN (12, 34)
     * $query->filterByLatitudemin(array('min' => 12)); // WHERE LatitudeMin >= 12
     * $query->filterByLatitudemin(array('max' => 12)); // WHERE LatitudeMin <= 12
     * </code>
     *
     * @param     mixed $latitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLatitudemin($latitudemin = null, $comparison = null)
    {
        if (is_array($latitudemin)) {
            $useMinMax = false;
            if (isset($latitudemin['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEMIN, $latitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudemin['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEMIN, $latitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LATITUDEMIN, $latitudemin, $comparison);
    }

    /**
     * Filter the query on the NorthSouth column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouth('fooValue');   // WHERE NorthSouth = 'fooValue'
     * $query->filterByNorthsouth('%fooValue%'); // WHERE NorthSouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByNorthsouth($northsouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouth)) {
                $northsouth = str_replace('*', '%', $northsouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LatitudeDegTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedegto(1234); // WHERE LatitudeDegTo = 1234
     * $query->filterByLatitudedegto(array(12, 34)); // WHERE LatitudeDegTo IN (12, 34)
     * $query->filterByLatitudedegto(array('min' => 12)); // WHERE LatitudeDegTo >= 12
     * $query->filterByLatitudedegto(array('max' => 12)); // WHERE LatitudeDegTo <= 12
     * </code>
     *
     * @param     mixed $latitudedegto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLatitudedegto($latitudedegto = null, $comparison = null)
    {
        if (is_array($latitudedegto)) {
            $useMinMax = false;
            if (isset($latitudedegto['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEGTO, $latitudedegto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedegto['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEGTO, $latitudedegto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LATITUDEDEGTO, $latitudedegto, $comparison);
    }

    /**
     * Filter the query on the LatitudeMinTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudeminto(1234); // WHERE LatitudeMinTo = 1234
     * $query->filterByLatitudeminto(array(12, 34)); // WHERE LatitudeMinTo IN (12, 34)
     * $query->filterByLatitudeminto(array('min' => 12)); // WHERE LatitudeMinTo >= 12
     * $query->filterByLatitudeminto(array('max' => 12)); // WHERE LatitudeMinTo <= 12
     * </code>
     *
     * @param     mixed $latitudeminto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLatitudeminto($latitudeminto = null, $comparison = null)
    {
        if (is_array($latitudeminto)) {
            $useMinMax = false;
            if (isset($latitudeminto['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEMINTO, $latitudeminto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudeminto['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LATITUDEMINTO, $latitudeminto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LATITUDEMINTO, $latitudeminto, $comparison);
    }

    /**
     * Filter the query on the NorthSouthTo column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthto('fooValue');   // WHERE NorthSouthTo = 'fooValue'
     * $query->filterByNorthsouthto('%fooValue%'); // WHERE NorthSouthTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByNorthsouthto($northsouthto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthto)) {
                $northsouthto = str_replace('*', '%', $northsouthto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::NORTHSOUTHTO, $northsouthto, $comparison);
    }

    /**
     * Filter the query on the LongitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedeg(1234); // WHERE LongitudeDeg = 1234
     * $query->filterByLongitudedeg(array(12, 34)); // WHERE LongitudeDeg IN (12, 34)
     * $query->filterByLongitudedeg(array('min' => 12)); // WHERE LongitudeDeg >= 12
     * $query->filterByLongitudedeg(array('max' => 12)); // WHERE LongitudeDeg <= 12
     * </code>
     *
     * @param     mixed $longitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLongitudedeg($longitudedeg = null, $comparison = null)
    {
        if (is_array($longitudedeg)) {
            $useMinMax = false;
            if (isset($longitudedeg['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEG, $longitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedeg['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEG, $longitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEG, $longitudedeg, $comparison);
    }

    /**
     * Filter the query on the LongitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudemin(1234); // WHERE LongitudeMin = 1234
     * $query->filterByLongitudemin(array(12, 34)); // WHERE LongitudeMin IN (12, 34)
     * $query->filterByLongitudemin(array('min' => 12)); // WHERE LongitudeMin >= 12
     * $query->filterByLongitudemin(array('max' => 12)); // WHERE LongitudeMin <= 12
     * </code>
     *
     * @param     mixed $longitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLongitudemin($longitudemin = null, $comparison = null)
    {
        if (is_array($longitudemin)) {
            $useMinMax = false;
            if (isset($longitudemin['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMIN, $longitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudemin['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMIN, $longitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMIN, $longitudemin, $comparison);
    }

    /**
     * Filter the query on the EastWest column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwest('fooValue');   // WHERE EastWest = 'fooValue'
     * $query->filterByEastwest('%fooValue%'); // WHERE EastWest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByEastwest($eastwest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwest)) {
                $eastwest = str_replace('*', '%', $eastwest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the LongitudeDegTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedegto(1234); // WHERE LongitudeDegTo = 1234
     * $query->filterByLongitudedegto(array(12, 34)); // WHERE LongitudeDegTo IN (12, 34)
     * $query->filterByLongitudedegto(array('min' => 12)); // WHERE LongitudeDegTo >= 12
     * $query->filterByLongitudedegto(array('max' => 12)); // WHERE LongitudeDegTo <= 12
     * </code>
     *
     * @param     mixed $longitudedegto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLongitudedegto($longitudedegto = null, $comparison = null)
    {
        if (is_array($longitudedegto)) {
            $useMinMax = false;
            if (isset($longitudedegto['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEGTO, $longitudedegto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedegto['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEGTO, $longitudedegto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LONGITUDEDEGTO, $longitudedegto, $comparison);
    }

    /**
     * Filter the query on the LongitudeMinTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudeminto(1234); // WHERE LongitudeMinTo = 1234
     * $query->filterByLongitudeminto(array(12, 34)); // WHERE LongitudeMinTo IN (12, 34)
     * $query->filterByLongitudeminto(array('min' => 12)); // WHERE LongitudeMinTo >= 12
     * $query->filterByLongitudeminto(array('max' => 12)); // WHERE LongitudeMinTo <= 12
     * </code>
     *
     * @param     mixed $longitudeminto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLongitudeminto($longitudeminto = null, $comparison = null)
    {
        if (is_array($longitudeminto)) {
            $useMinMax = false;
            if (isset($longitudeminto['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMINTO, $longitudeminto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudeminto['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMINTO, $longitudeminto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LONGITUDEMINTO, $longitudeminto, $comparison);
    }

    /**
     * Filter the query on the EastWestTo column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwestto('fooValue');   // WHERE EastWestTo = 'fooValue'
     * $query->filterByEastwestto('%fooValue%'); // WHERE EastWestTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwestto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByEastwestto($eastwestto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwestto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwestto)) {
                $eastwestto = str_replace('*', '%', $eastwestto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::EASTWESTTO, $eastwestto, $comparison);
    }

    /**
     * Filter the query on the Jan column
     *
     * Example usage:
     * <code>
     * $query->filterByJan(1234); // WHERE Jan = 1234
     * $query->filterByJan(array(12, 34)); // WHERE Jan IN (12, 34)
     * $query->filterByJan(array('min' => 12)); // WHERE Jan >= 12
     * $query->filterByJan(array('max' => 12)); // WHERE Jan <= 12
     * </code>
     *
     * @param     mixed $jan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByJan($jan = null, $comparison = null)
    {
        if (is_array($jan)) {
            $useMinMax = false;
            if (isset($jan['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::JAN, $jan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jan['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::JAN, $jan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::JAN, $jan, $comparison);
    }

    /**
     * Filter the query on the Feb column
     *
     * Example usage:
     * <code>
     * $query->filterByFeb(1234); // WHERE Feb = 1234
     * $query->filterByFeb(array(12, 34)); // WHERE Feb IN (12, 34)
     * $query->filterByFeb(array('min' => 12)); // WHERE Feb >= 12
     * $query->filterByFeb(array('max' => 12)); // WHERE Feb <= 12
     * </code>
     *
     * @param     mixed $feb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByFeb($feb = null, $comparison = null)
    {
        if (is_array($feb)) {
            $useMinMax = false;
            if (isset($feb['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::FEB, $feb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feb['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::FEB, $feb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::FEB, $feb, $comparison);
    }

    /**
     * Filter the query on the Mar column
     *
     * Example usage:
     * <code>
     * $query->filterByMar(1234); // WHERE Mar = 1234
     * $query->filterByMar(array(12, 34)); // WHERE Mar IN (12, 34)
     * $query->filterByMar(array('min' => 12)); // WHERE Mar >= 12
     * $query->filterByMar(array('max' => 12)); // WHERE Mar <= 12
     * </code>
     *
     * @param     mixed $mar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByMar($mar = null, $comparison = null)
    {
        if (is_array($mar)) {
            $useMinMax = false;
            if (isset($mar['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::MAR, $mar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mar['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::MAR, $mar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::MAR, $mar, $comparison);
    }

    /**
     * Filter the query on the Apr column
     *
     * Example usage:
     * <code>
     * $query->filterByApr(1234); // WHERE Apr = 1234
     * $query->filterByApr(array(12, 34)); // WHERE Apr IN (12, 34)
     * $query->filterByApr(array('min' => 12)); // WHERE Apr >= 12
     * $query->filterByApr(array('max' => 12)); // WHERE Apr <= 12
     * </code>
     *
     * @param     mixed $apr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByApr($apr = null, $comparison = null)
    {
        if (is_array($apr)) {
            $useMinMax = false;
            if (isset($apr['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::APR, $apr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apr['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::APR, $apr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::APR, $apr, $comparison);
    }

    /**
     * Filter the query on the May column
     *
     * Example usage:
     * <code>
     * $query->filterByMay(1234); // WHERE May = 1234
     * $query->filterByMay(array(12, 34)); // WHERE May IN (12, 34)
     * $query->filterByMay(array('min' => 12)); // WHERE May >= 12
     * $query->filterByMay(array('max' => 12)); // WHERE May <= 12
     * </code>
     *
     * @param     mixed $may The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByMay($may = null, $comparison = null)
    {
        if (is_array($may)) {
            $useMinMax = false;
            if (isset($may['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::MAY, $may['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($may['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::MAY, $may['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::MAY, $may, $comparison);
    }

    /**
     * Filter the query on the Jun column
     *
     * Example usage:
     * <code>
     * $query->filterByJun(1234); // WHERE Jun = 1234
     * $query->filterByJun(array(12, 34)); // WHERE Jun IN (12, 34)
     * $query->filterByJun(array('min' => 12)); // WHERE Jun >= 12
     * $query->filterByJun(array('max' => 12)); // WHERE Jun <= 12
     * </code>
     *
     * @param     mixed $jun The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByJun($jun = null, $comparison = null)
    {
        if (is_array($jun)) {
            $useMinMax = false;
            if (isset($jun['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::JUN, $jun['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jun['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::JUN, $jun['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::JUN, $jun, $comparison);
    }

    /**
     * Filter the query on the Jul column
     *
     * Example usage:
     * <code>
     * $query->filterByJul(1234); // WHERE Jul = 1234
     * $query->filterByJul(array(12, 34)); // WHERE Jul IN (12, 34)
     * $query->filterByJul(array('min' => 12)); // WHERE Jul >= 12
     * $query->filterByJul(array('max' => 12)); // WHERE Jul <= 12
     * </code>
     *
     * @param     mixed $jul The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByJul($jul = null, $comparison = null)
    {
        if (is_array($jul)) {
            $useMinMax = false;
            if (isset($jul['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::JUL, $jul['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jul['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::JUL, $jul['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::JUL, $jul, $comparison);
    }

    /**
     * Filter the query on the Aug column
     *
     * Example usage:
     * <code>
     * $query->filterByAug(1234); // WHERE Aug = 1234
     * $query->filterByAug(array(12, 34)); // WHERE Aug IN (12, 34)
     * $query->filterByAug(array('min' => 12)); // WHERE Aug >= 12
     * $query->filterByAug(array('max' => 12)); // WHERE Aug <= 12
     * </code>
     *
     * @param     mixed $aug The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByAug($aug = null, $comparison = null)
    {
        if (is_array($aug)) {
            $useMinMax = false;
            if (isset($aug['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::AUG, $aug['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aug['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::AUG, $aug['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::AUG, $aug, $comparison);
    }

    /**
     * Filter the query on the Sep column
     *
     * Example usage:
     * <code>
     * $query->filterBySep(1234); // WHERE Sep = 1234
     * $query->filterBySep(array(12, 34)); // WHERE Sep IN (12, 34)
     * $query->filterBySep(array('min' => 12)); // WHERE Sep >= 12
     * $query->filterBySep(array('max' => 12)); // WHERE Sep <= 12
     * </code>
     *
     * @param     mixed $sep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterBySep($sep = null, $comparison = null)
    {
        if (is_array($sep)) {
            $useMinMax = false;
            if (isset($sep['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::SEP, $sep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sep['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::SEP, $sep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::SEP, $sep, $comparison);
    }

    /**
     * Filter the query on the Oct column
     *
     * Example usage:
     * <code>
     * $query->filterByOct(1234); // WHERE Oct = 1234
     * $query->filterByOct(array(12, 34)); // WHERE Oct IN (12, 34)
     * $query->filterByOct(array('min' => 12)); // WHERE Oct >= 12
     * $query->filterByOct(array('max' => 12)); // WHERE Oct <= 12
     * </code>
     *
     * @param     mixed $oct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByOct($oct = null, $comparison = null)
    {
        if (is_array($oct)) {
            $useMinMax = false;
            if (isset($oct['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::OCT, $oct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oct['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::OCT, $oct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::OCT, $oct, $comparison);
    }

    /**
     * Filter the query on the Nov column
     *
     * Example usage:
     * <code>
     * $query->filterByNov(1234); // WHERE Nov = 1234
     * $query->filterByNov(array(12, 34)); // WHERE Nov IN (12, 34)
     * $query->filterByNov(array('min' => 12)); // WHERE Nov >= 12
     * $query->filterByNov(array('max' => 12)); // WHERE Nov <= 12
     * </code>
     *
     * @param     mixed $nov The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByNov($nov = null, $comparison = null)
    {
        if (is_array($nov)) {
            $useMinMax = false;
            if (isset($nov['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::NOV, $nov['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nov['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::NOV, $nov['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::NOV, $nov, $comparison);
    }

    /**
     * Filter the query on the Dec column
     *
     * Example usage:
     * <code>
     * $query->filterByDec(1234); // WHERE Dec = 1234
     * $query->filterByDec(array(12, 34)); // WHERE Dec IN (12, 34)
     * $query->filterByDec(array('min' => 12)); // WHERE Dec >= 12
     * $query->filterByDec(array('max' => 12)); // WHERE Dec <= 12
     * </code>
     *
     * @param     mixed $dec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByDec($dec = null, $comparison = null)
    {
        if (is_array($dec)) {
            $useMinMax = false;
            if (isset($dec['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::DEC, $dec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dec['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::DEC, $dec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::DEC, $dec, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::ENTERED, $entered, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::MODIFIED, $modified, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::EXPERT, $expert, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the LarvPresRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvpresremarks('fooValue');   // WHERE LarvPresRemarks = 'fooValue'
     * $query->filterByLarvpresremarks('%fooValue%'); // WHERE LarvPresRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvpresremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByLarvpresremarks($larvpresremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvpresremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvpresremarks)) {
                $larvpresremarks = str_replace('*', '%', $larvpresremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::LARVPRESREMARKS, $larvpresremarks, $comparison);
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
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LarvaepresencePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LarvaepresencePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaepresencePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Larvaepresence $larvaepresence Object to remove from the list of results
     *
     * @return LarvaepresenceQuery The current query, for fluid interface
     */
    public function prune($larvaepresence = null)
    {
        if ($larvaepresence) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LarvaepresencePeer::AUTOCTR), $larvaepresence->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LarvaepresencePeer::STOCKCODE), $larvaepresence->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(LarvaepresencePeer::LARVALREFNO), $larvaepresence->getLarvalrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(LarvaepresencePeer::LARVALAREA), $larvaepresence->getLarvalarea(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
