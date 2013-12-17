<?php


/**
 * Base class that represents a query for the 'keys' table.
 *
 *
 *
 * @method KeysQuery orderByKeycode($order = Criteria::ASC) Order by the KeyCode column
 * @method KeysQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method KeysQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method KeysQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method KeysQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method KeysQuery orderByOrdnum($order = Criteria::ASC) Order by the OrdNum column
 * @method KeysQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method KeysQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method KeysQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method KeysQuery orderByCCode($order = Criteria::ASC) Order by the C_code column
 * @method KeysQuery orderByECode($order = Criteria::ASC) Order by the E_code column
 * @method KeysQuery orderByPic1($order = Criteria::ASC) Order by the Pic1 column
 * @method KeysQuery orderByPic2($order = Criteria::ASC) Order by the Pic2 column
 * @method KeysQuery orderByPic3($order = Criteria::ASC) Order by the Pic3 column
 * @method KeysQuery orderByPic4($order = Criteria::ASC) Order by the Pic4 column
 * @method KeysQuery orderByPic5($order = Criteria::ASC) Order by the Pic5 column
 * @method KeysQuery orderByPic6($order = Criteria::ASC) Order by the Pic6 column
 * @method KeysQuery orderByPic7($order = Criteria::ASC) Order by the Pic7 column
 * @method KeysQuery orderByPic8($order = Criteria::ASC) Order by the Pic8 column
 * @method KeysQuery orderByPic9($order = Criteria::ASC) Order by the Pic9 column
 * @method KeysQuery orderByPic10($order = Criteria::ASC) Order by the Pic10 column
 * @method KeysQuery orderByLarvalbase($order = Criteria::ASC) Order by the LarvalBase column
 * @method KeysQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method KeysQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method KeysQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method KeysQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method KeysQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method KeysQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method KeysQuery orderByLucid($order = Criteria::ASC) Order by the Lucid column
 * @method KeysQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method KeysQuery groupByKeycode() Group by the KeyCode column
 * @method KeysQuery groupByDescription() Group by the Description column
 * @method KeysQuery groupByRefno() Group by the RefNo column
 * @method KeysQuery groupByComments() Group by the Comments column
 * @method KeysQuery groupByRemarks() Group by the Remarks column
 * @method KeysQuery groupByOrdnum() Group by the OrdNum column
 * @method KeysQuery groupByFamcode() Group by the FamCode column
 * @method KeysQuery groupByGenus() Group by the Genus column
 * @method KeysQuery groupByAreacode() Group by the AreaCode column
 * @method KeysQuery groupByCCode() Group by the C_code column
 * @method KeysQuery groupByECode() Group by the E_code column
 * @method KeysQuery groupByPic1() Group by the Pic1 column
 * @method KeysQuery groupByPic2() Group by the Pic2 column
 * @method KeysQuery groupByPic3() Group by the Pic3 column
 * @method KeysQuery groupByPic4() Group by the Pic4 column
 * @method KeysQuery groupByPic5() Group by the Pic5 column
 * @method KeysQuery groupByPic6() Group by the Pic6 column
 * @method KeysQuery groupByPic7() Group by the Pic7 column
 * @method KeysQuery groupByPic8() Group by the Pic8 column
 * @method KeysQuery groupByPic9() Group by the Pic9 column
 * @method KeysQuery groupByPic10() Group by the Pic10 column
 * @method KeysQuery groupByLarvalbase() Group by the LarvalBase column
 * @method KeysQuery groupByEntered() Group by the Entered column
 * @method KeysQuery groupByDateentered() Group by the DateEntered column
 * @method KeysQuery groupByModified() Group by the Modified column
 * @method KeysQuery groupByDatemodified() Group by the DateModified column
 * @method KeysQuery groupByExpert() Group by the Expert column
 * @method KeysQuery groupByDatechecked() Group by the DateChecked column
 * @method KeysQuery groupByLucid() Group by the Lucid column
 * @method KeysQuery groupByTs() Group by the TS column
 *
 * @method KeysQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method KeysQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method KeysQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Keys findOne(PropelPDO $con = null) Return the first Keys matching the query
 * @method Keys findOneOrCreate(PropelPDO $con = null) Return the first Keys matching the query, or a new Keys object populated from the query conditions when no match is found
 *
 * @method Keys findOneByDescription(string $Description) Return the first Keys filtered by the Description column
 * @method Keys findOneByRefno(int $RefNo) Return the first Keys filtered by the RefNo column
 * @method Keys findOneByComments(string $Comments) Return the first Keys filtered by the Comments column
 * @method Keys findOneByRemarks(string $Remarks) Return the first Keys filtered by the Remarks column
 * @method Keys findOneByOrdnum(int $OrdNum) Return the first Keys filtered by the OrdNum column
 * @method Keys findOneByFamcode(int $FamCode) Return the first Keys filtered by the FamCode column
 * @method Keys findOneByGenus(string $Genus) Return the first Keys filtered by the Genus column
 * @method Keys findOneByAreacode(int $AreaCode) Return the first Keys filtered by the AreaCode column
 * @method Keys findOneByCCode(string $C_code) Return the first Keys filtered by the C_code column
 * @method Keys findOneByECode(int $E_code) Return the first Keys filtered by the E_code column
 * @method Keys findOneByPic1(string $Pic1) Return the first Keys filtered by the Pic1 column
 * @method Keys findOneByPic2(string $Pic2) Return the first Keys filtered by the Pic2 column
 * @method Keys findOneByPic3(string $Pic3) Return the first Keys filtered by the Pic3 column
 * @method Keys findOneByPic4(string $Pic4) Return the first Keys filtered by the Pic4 column
 * @method Keys findOneByPic5(string $Pic5) Return the first Keys filtered by the Pic5 column
 * @method Keys findOneByPic6(string $Pic6) Return the first Keys filtered by the Pic6 column
 * @method Keys findOneByPic7(string $Pic7) Return the first Keys filtered by the Pic7 column
 * @method Keys findOneByPic8(string $Pic8) Return the first Keys filtered by the Pic8 column
 * @method Keys findOneByPic9(string $Pic9) Return the first Keys filtered by the Pic9 column
 * @method Keys findOneByPic10(string $Pic10) Return the first Keys filtered by the Pic10 column
 * @method Keys findOneByLarvalbase(int $LarvalBase) Return the first Keys filtered by the LarvalBase column
 * @method Keys findOneByEntered(int $Entered) Return the first Keys filtered by the Entered column
 * @method Keys findOneByDateentered(string $DateEntered) Return the first Keys filtered by the DateEntered column
 * @method Keys findOneByModified(int $Modified) Return the first Keys filtered by the Modified column
 * @method Keys findOneByDatemodified(string $DateModified) Return the first Keys filtered by the DateModified column
 * @method Keys findOneByExpert(int $Expert) Return the first Keys filtered by the Expert column
 * @method Keys findOneByDatechecked(string $DateChecked) Return the first Keys filtered by the DateChecked column
 * @method Keys findOneByLucid(int $Lucid) Return the first Keys filtered by the Lucid column
 * @method Keys findOneByTs(string $TS) Return the first Keys filtered by the TS column
 *
 * @method array findByKeycode(int $KeyCode) Return Keys objects filtered by the KeyCode column
 * @method array findByDescription(string $Description) Return Keys objects filtered by the Description column
 * @method array findByRefno(int $RefNo) Return Keys objects filtered by the RefNo column
 * @method array findByComments(string $Comments) Return Keys objects filtered by the Comments column
 * @method array findByRemarks(string $Remarks) Return Keys objects filtered by the Remarks column
 * @method array findByOrdnum(int $OrdNum) Return Keys objects filtered by the OrdNum column
 * @method array findByFamcode(int $FamCode) Return Keys objects filtered by the FamCode column
 * @method array findByGenus(string $Genus) Return Keys objects filtered by the Genus column
 * @method array findByAreacode(int $AreaCode) Return Keys objects filtered by the AreaCode column
 * @method array findByCCode(string $C_code) Return Keys objects filtered by the C_code column
 * @method array findByECode(int $E_code) Return Keys objects filtered by the E_code column
 * @method array findByPic1(string $Pic1) Return Keys objects filtered by the Pic1 column
 * @method array findByPic2(string $Pic2) Return Keys objects filtered by the Pic2 column
 * @method array findByPic3(string $Pic3) Return Keys objects filtered by the Pic3 column
 * @method array findByPic4(string $Pic4) Return Keys objects filtered by the Pic4 column
 * @method array findByPic5(string $Pic5) Return Keys objects filtered by the Pic5 column
 * @method array findByPic6(string $Pic6) Return Keys objects filtered by the Pic6 column
 * @method array findByPic7(string $Pic7) Return Keys objects filtered by the Pic7 column
 * @method array findByPic8(string $Pic8) Return Keys objects filtered by the Pic8 column
 * @method array findByPic9(string $Pic9) Return Keys objects filtered by the Pic9 column
 * @method array findByPic10(string $Pic10) Return Keys objects filtered by the Pic10 column
 * @method array findByLarvalbase(int $LarvalBase) Return Keys objects filtered by the LarvalBase column
 * @method array findByEntered(int $Entered) Return Keys objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Keys objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Keys objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Keys objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Keys objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Keys objects filtered by the DateChecked column
 * @method array findByLucid(int $Lucid) Return Keys objects filtered by the Lucid column
 * @method array findByTs(string $TS) Return Keys objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseKeysQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseKeysQuery object.
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
            $modelName = 'Keys';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new KeysQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   KeysQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return KeysQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof KeysQuery) {
            return $criteria;
        }
        $query = new KeysQuery(null, null, $modelAlias);

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
     * @return   Keys|Keys[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = KeysPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Keys A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByKeycode($key, $con = null)
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
     * @return                 Keys A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `KeyCode`, `Description`, `RefNo`, `Comments`, `Remarks`, `OrdNum`, `FamCode`, `Genus`, `AreaCode`, `C_code`, `E_code`, `Pic1`, `Pic2`, `Pic3`, `Pic4`, `Pic5`, `Pic6`, `Pic7`, `Pic8`, `Pic9`, `Pic10`, `LarvalBase`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Lucid`, `TS` FROM `keys` WHERE `KeyCode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Keys();
            $obj->hydrate($row);
            KeysPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Keys|Keys[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Keys[]|mixed the list of results, formatted by the current formatter
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(KeysPeer::KEYCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(KeysPeer::KEYCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the KeyCode column
     *
     * Example usage:
     * <code>
     * $query->filterByKeycode(1234); // WHERE KeyCode = 1234
     * $query->filterByKeycode(array(12, 34)); // WHERE KeyCode IN (12, 34)
     * $query->filterByKeycode(array('min' => 12)); // WHERE KeyCode >= 12
     * $query->filterByKeycode(array('max' => 12)); // WHERE KeyCode <= 12
     * </code>
     *
     * @param     mixed $keycode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByKeycode($keycode = null, $comparison = null)
    {
        if (is_array($keycode)) {
            $useMinMax = false;
            if (isset($keycode['min'])) {
                $this->addUsingAlias(KeysPeer::KEYCODE, $keycode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($keycode['max'])) {
                $this->addUsingAlias(KeysPeer::KEYCODE, $keycode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::KEYCODE, $keycode, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(KeysPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(KeysPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the OrdNum column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdnum(1234); // WHERE OrdNum = 1234
     * $query->filterByOrdnum(array(12, 34)); // WHERE OrdNum IN (12, 34)
     * $query->filterByOrdnum(array('min' => 12)); // WHERE OrdNum >= 12
     * $query->filterByOrdnum(array('max' => 12)); // WHERE OrdNum <= 12
     * </code>
     *
     * @param     mixed $ordnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(KeysPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(KeysPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::ORDNUM, $ordnum, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(KeysPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(KeysPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(KeysPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(KeysPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the C_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(KeysPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the E_code column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_code = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_code IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_code >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_code <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(KeysPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(KeysPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the Pic1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic1('fooValue');   // WHERE Pic1 = 'fooValue'
     * $query->filterByPic1('%fooValue%'); // WHERE Pic1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic1($pic1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic1)) {
                $pic1 = str_replace('*', '%', $pic1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC1, $pic1, $comparison);
    }

    /**
     * Filter the query on the Pic2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic2('fooValue');   // WHERE Pic2 = 'fooValue'
     * $query->filterByPic2('%fooValue%'); // WHERE Pic2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic2($pic2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic2)) {
                $pic2 = str_replace('*', '%', $pic2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC2, $pic2, $comparison);
    }

    /**
     * Filter the query on the Pic3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic3('fooValue');   // WHERE Pic3 = 'fooValue'
     * $query->filterByPic3('%fooValue%'); // WHERE Pic3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic3($pic3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic3)) {
                $pic3 = str_replace('*', '%', $pic3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC3, $pic3, $comparison);
    }

    /**
     * Filter the query on the Pic4 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic4('fooValue');   // WHERE Pic4 = 'fooValue'
     * $query->filterByPic4('%fooValue%'); // WHERE Pic4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic4($pic4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic4)) {
                $pic4 = str_replace('*', '%', $pic4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC4, $pic4, $comparison);
    }

    /**
     * Filter the query on the Pic5 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic5('fooValue');   // WHERE Pic5 = 'fooValue'
     * $query->filterByPic5('%fooValue%'); // WHERE Pic5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic5($pic5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic5)) {
                $pic5 = str_replace('*', '%', $pic5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC5, $pic5, $comparison);
    }

    /**
     * Filter the query on the Pic6 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic6('fooValue');   // WHERE Pic6 = 'fooValue'
     * $query->filterByPic6('%fooValue%'); // WHERE Pic6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic6 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic6($pic6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic6)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic6)) {
                $pic6 = str_replace('*', '%', $pic6);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC6, $pic6, $comparison);
    }

    /**
     * Filter the query on the Pic7 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic7('fooValue');   // WHERE Pic7 = 'fooValue'
     * $query->filterByPic7('%fooValue%'); // WHERE Pic7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic7 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic7($pic7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic7)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic7)) {
                $pic7 = str_replace('*', '%', $pic7);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC7, $pic7, $comparison);
    }

    /**
     * Filter the query on the Pic8 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic8('fooValue');   // WHERE Pic8 = 'fooValue'
     * $query->filterByPic8('%fooValue%'); // WHERE Pic8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic8 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic8($pic8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic8)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic8)) {
                $pic8 = str_replace('*', '%', $pic8);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC8, $pic8, $comparison);
    }

    /**
     * Filter the query on the Pic9 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic9('fooValue');   // WHERE Pic9 = 'fooValue'
     * $query->filterByPic9('%fooValue%'); // WHERE Pic9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic9 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic9($pic9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic9)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic9)) {
                $pic9 = str_replace('*', '%', $pic9);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC9, $pic9, $comparison);
    }

    /**
     * Filter the query on the Pic10 column
     *
     * Example usage:
     * <code>
     * $query->filterByPic10('fooValue');   // WHERE Pic10 = 'fooValue'
     * $query->filterByPic10('%fooValue%'); // WHERE Pic10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic10 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByPic10($pic10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic10)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic10)) {
                $pic10 = str_replace('*', '%', $pic10);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeysPeer::PIC10, $pic10, $comparison);
    }

    /**
     * Filter the query on the LarvalBase column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalbase(1234); // WHERE LarvalBase = 1234
     * $query->filterByLarvalbase(array(12, 34)); // WHERE LarvalBase IN (12, 34)
     * $query->filterByLarvalbase(array('min' => 12)); // WHERE LarvalBase >= 12
     * $query->filterByLarvalbase(array('max' => 12)); // WHERE LarvalBase <= 12
     * </code>
     *
     * @param     mixed $larvalbase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByLarvalbase($larvalbase = null, $comparison = null)
    {
        if (is_array($larvalbase)) {
            $useMinMax = false;
            if (isset($larvalbase['min'])) {
                $this->addUsingAlias(KeysPeer::LARVALBASE, $larvalbase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalbase['max'])) {
                $this->addUsingAlias(KeysPeer::LARVALBASE, $larvalbase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::LARVALBASE, $larvalbase, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(KeysPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(KeysPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::ENTERED, $entered, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(KeysPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(KeysPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(KeysPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(KeysPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::MODIFIED, $modified, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(KeysPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(KeysPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(KeysPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(KeysPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::EXPERT, $expert, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(KeysPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(KeysPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Lucid column
     *
     * Example usage:
     * <code>
     * $query->filterByLucid(1234); // WHERE Lucid = 1234
     * $query->filterByLucid(array(12, 34)); // WHERE Lucid IN (12, 34)
     * $query->filterByLucid(array('min' => 12)); // WHERE Lucid >= 12
     * $query->filterByLucid(array('max' => 12)); // WHERE Lucid <= 12
     * </code>
     *
     * @param     mixed $lucid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByLucid($lucid = null, $comparison = null)
    {
        if (is_array($lucid)) {
            $useMinMax = false;
            if (isset($lucid['min'])) {
                $this->addUsingAlias(KeysPeer::LUCID, $lucid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lucid['max'])) {
                $this->addUsingAlias(KeysPeer::LUCID, $lucid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::LUCID, $lucid, $comparison);
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
     * @return KeysQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(KeysPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(KeysPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeysPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Keys $keys Object to remove from the list of results
     *
     * @return KeysQuery The current query, for fluid interface
     */
    public function prune($keys = null)
    {
        if ($keys) {
            $this->addUsingAlias(KeysPeer::KEYCODE, $keys->getKeycode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
