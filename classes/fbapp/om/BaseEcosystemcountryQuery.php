<?php


/**
 * Base class that represents a query for the 'ecosystemcountry' table.
 *
 *
 *
 * @method EcosystemcountryQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method EcosystemcountryQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method EcosystemcountryQuery orderByEcosystemrefno($order = Criteria::ASC) Order by the EcosystemRefNo column
 * @method EcosystemcountryQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method EcosystemcountryQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method EcosystemcountryQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method EcosystemcountryQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method EcosystemcountryQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method EcosystemcountryQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method EcosystemcountryQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EcosystemcountryQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method EcosystemcountryQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EcosystemcountryQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method EcosystemcountryQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EcosystemcountryQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method EcosystemcountryQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EcosystemcountryQuery groupByAutoctr() Group by the autoctr column
 * @method EcosystemcountryQuery groupByECode() Group by the E_CODE column
 * @method EcosystemcountryQuery groupByEcosystemrefno() Group by the EcosystemRefNo column
 * @method EcosystemcountryQuery groupByCCode() Group by the C_Code column
 * @method EcosystemcountryQuery groupBySpeccode() Group by the Speccode column
 * @method EcosystemcountryQuery groupByStockcode() Group by the Stockcode column
 * @method EcosystemcountryQuery groupByStatus() Group by the Status column
 * @method EcosystemcountryQuery groupByAbundance() Group by the Abundance column
 * @method EcosystemcountryQuery groupByRemarks() Group by the Remarks column
 * @method EcosystemcountryQuery groupByEntered() Group by the Entered column
 * @method EcosystemcountryQuery groupByDateentered() Group by the Dateentered column
 * @method EcosystemcountryQuery groupByModified() Group by the Modified column
 * @method EcosystemcountryQuery groupByDatemodified() Group by the Datemodified column
 * @method EcosystemcountryQuery groupByExpert() Group by the Expert column
 * @method EcosystemcountryQuery groupByDatechecked() Group by the Datechecked column
 * @method EcosystemcountryQuery groupByTs() Group by the TS column
 *
 * @method EcosystemcountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EcosystemcountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EcosystemcountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ecosystemcountry findOne(PropelPDO $con = null) Return the first Ecosystemcountry matching the query
 * @method Ecosystemcountry findOneOrCreate(PropelPDO $con = null) Return the first Ecosystemcountry matching the query, or a new Ecosystemcountry object populated from the query conditions when no match is found
 *
 * @method Ecosystemcountry findOneByAutoctr(int $autoctr) Return the first Ecosystemcountry filtered by the autoctr column
 * @method Ecosystemcountry findOneByECode(int $E_CODE) Return the first Ecosystemcountry filtered by the E_CODE column
 * @method Ecosystemcountry findOneByEcosystemrefno(int $EcosystemRefNo) Return the first Ecosystemcountry filtered by the EcosystemRefNo column
 * @method Ecosystemcountry findOneByCCode(string $C_Code) Return the first Ecosystemcountry filtered by the C_Code column
 * @method Ecosystemcountry findOneBySpeccode(int $Speccode) Return the first Ecosystemcountry filtered by the Speccode column
 * @method Ecosystemcountry findOneByStockcode(int $Stockcode) Return the first Ecosystemcountry filtered by the Stockcode column
 * @method Ecosystemcountry findOneByStatus(string $Status) Return the first Ecosystemcountry filtered by the Status column
 * @method Ecosystemcountry findOneByAbundance(string $Abundance) Return the first Ecosystemcountry filtered by the Abundance column
 * @method Ecosystemcountry findOneByRemarks(string $Remarks) Return the first Ecosystemcountry filtered by the Remarks column
 * @method Ecosystemcountry findOneByEntered(int $Entered) Return the first Ecosystemcountry filtered by the Entered column
 * @method Ecosystemcountry findOneByDateentered(string $Dateentered) Return the first Ecosystemcountry filtered by the Dateentered column
 * @method Ecosystemcountry findOneByModified(int $Modified) Return the first Ecosystemcountry filtered by the Modified column
 * @method Ecosystemcountry findOneByDatemodified(string $Datemodified) Return the first Ecosystemcountry filtered by the Datemodified column
 * @method Ecosystemcountry findOneByExpert(int $Expert) Return the first Ecosystemcountry filtered by the Expert column
 * @method Ecosystemcountry findOneByDatechecked(string $Datechecked) Return the first Ecosystemcountry filtered by the Datechecked column
 * @method Ecosystemcountry findOneByTs(string $TS) Return the first Ecosystemcountry filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Ecosystemcountry objects filtered by the autoctr column
 * @method array findByECode(int $E_CODE) Return Ecosystemcountry objects filtered by the E_CODE column
 * @method array findByEcosystemrefno(int $EcosystemRefNo) Return Ecosystemcountry objects filtered by the EcosystemRefNo column
 * @method array findByCCode(string $C_Code) Return Ecosystemcountry objects filtered by the C_Code column
 * @method array findBySpeccode(int $Speccode) Return Ecosystemcountry objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Ecosystemcountry objects filtered by the Stockcode column
 * @method array findByStatus(string $Status) Return Ecosystemcountry objects filtered by the Status column
 * @method array findByAbundance(string $Abundance) Return Ecosystemcountry objects filtered by the Abundance column
 * @method array findByRemarks(string $Remarks) Return Ecosystemcountry objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Ecosystemcountry objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Ecosystemcountry objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Ecosystemcountry objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Ecosystemcountry objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Ecosystemcountry objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Ecosystemcountry objects filtered by the Datechecked column
 * @method array findByTs(string $TS) Return Ecosystemcountry objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcosystemcountryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEcosystemcountryQuery object.
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
            $modelName = 'Ecosystemcountry';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EcosystemcountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EcosystemcountryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EcosystemcountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EcosystemcountryQuery) {
            return $criteria;
        }
        $query = new EcosystemcountryQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$E_CODE, $C_Code, $Stockcode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Ecosystemcountry|Ecosystemcountry[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EcosystemcountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ecosystemcountry A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `E_CODE`, `EcosystemRefNo`, `C_Code`, `Speccode`, `Stockcode`, `Status`, `Abundance`, `Remarks`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `TS` FROM `ecosystemcountry` WHERE `E_CODE` = :p0 AND `C_Code` = :p1 AND `Stockcode` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Ecosystemcountry();
            $obj->hydrate($row);
            EcosystemcountryPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Ecosystemcountry|Ecosystemcountry[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ecosystemcountry[]|mixed the list of results, formatted by the current formatter
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(EcosystemcountryPeer::E_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(EcosystemcountryPeer::C_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(EcosystemcountryPeer::STOCKCODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(EcosystemcountryPeer::E_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(EcosystemcountryPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(EcosystemcountryPeer::STOCKCODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the EcosystemRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemrefno(1234); // WHERE EcosystemRefNo = 1234
     * $query->filterByEcosystemrefno(array(12, 34)); // WHERE EcosystemRefNo IN (12, 34)
     * $query->filterByEcosystemrefno(array('min' => 12)); // WHERE EcosystemRefNo >= 12
     * $query->filterByEcosystemrefno(array('max' => 12)); // WHERE EcosystemRefNo <= 12
     * </code>
     *
     * @param     mixed $ecosystemrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByEcosystemrefno($ecosystemrefno = null, $comparison = null)
    {
        if (is_array($ecosystemrefno)) {
            $useMinMax = false;
            if (isset($ecosystemrefno['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::ECOSYSTEMREFNO, $ecosystemrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecosystemrefno['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::ECOSYSTEMREFNO, $ecosystemrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::ECOSYSTEMREFNO, $ecosystemrefno, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EcosystemcountryPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance('fooValue');   // WHERE Abundance = 'fooValue'
     * $query->filterByAbundance('%fooValue%'); // WHERE Abundance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundance)) {
                $abundance = str_replace('*', '%', $abundance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::ABUNDANCE, $abundance, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EcosystemcountryPeer::REMARKS, $remarks, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::ENTERED, $entered, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::MODIFIED, $modified, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::EXPERT, $expert, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EcosystemcountryPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EcosystemcountryPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemcountryPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ecosystemcountry $ecosystemcountry Object to remove from the list of results
     *
     * @return EcosystemcountryQuery The current query, for fluid interface
     */
    public function prune($ecosystemcountry = null)
    {
        if ($ecosystemcountry) {
            $this->addCond('pruneCond0', $this->getAliasedColName(EcosystemcountryPeer::E_CODE), $ecosystemcountry->getECode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(EcosystemcountryPeer::C_CODE), $ecosystemcountry->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(EcosystemcountryPeer::STOCKCODE), $ecosystemcountry->getStockcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
