<?php


/**
 * Base class that represents a query for the 'abundancedelta' table.
 *
 *
 *
 * @method AbundancedeltaQuery orderByADeltacode($order = Criteria::ASC) Order by the A_DeltaCode column
 * @method AbundancedeltaQuery orderByAbundancecode($order = Criteria::ASC) Order by the AbundanceCode column
 * @method AbundancedeltaQuery orderByEcochange1($order = Criteria::ASC) Order by the EcoChange1 column
 * @method AbundancedeltaQuery orderByEcochange2($order = Criteria::ASC) Order by the EcoChange2 column
 * @method AbundancedeltaQuery orderByEcochange3($order = Criteria::ASC) Order by the EcoChange3 column
 * @method AbundancedeltaQuery orderByEcochange4($order = Criteria::ASC) Order by the EcoChange4 column
 * @method AbundancedeltaQuery orderByEcochangeRef($order = Criteria::ASC) Order by the EcoChange_Ref column
 * @method AbundancedeltaQuery orderByAbiochange1($order = Criteria::ASC) Order by the AbioChange1 column
 * @method AbundancedeltaQuery orderByAbiochange2($order = Criteria::ASC) Order by the AbioChange2 column
 * @method AbundancedeltaQuery orderByAbiochange3($order = Criteria::ASC) Order by the AbioChange3 column
 * @method AbundancedeltaQuery orderByAbiochange4($order = Criteria::ASC) Order by the AbioChange4 column
 * @method AbundancedeltaQuery orderByAbiochangeRef($order = Criteria::ASC) Order by the AbioChange_Ref column
 * @method AbundancedeltaQuery orderByEcohealth1($order = Criteria::ASC) Order by the EcoHealth1 column
 * @method AbundancedeltaQuery orderByEcohealth2($order = Criteria::ASC) Order by the EcoHealth2 column
 * @method AbundancedeltaQuery orderByEcohealthRef($order = Criteria::ASC) Order by the EcoHealth_Ref column
 * @method AbundancedeltaQuery orderByHumaninterest1($order = Criteria::ASC) Order by the HumanInterest1 column
 * @method AbundancedeltaQuery orderByHumaninterest2($order = Criteria::ASC) Order by the HumanInterest2 column
 * @method AbundancedeltaQuery orderByHumaninterestRef($order = Criteria::ASC) Order by the HumanInterest_Ref column
 * @method AbundancedeltaQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method AbundancedeltaQuery orderByAffectedtype($order = Criteria::ASC) Order by the AffectedType column
 * @method AbundancedeltaQuery orderByAffectedgenus($order = Criteria::ASC) Order by the AffectedGenus column
 * @method AbundancedeltaQuery orderByAffectedspecies($order = Criteria::ASC) Order by the AffectedSpecies column
 * @method AbundancedeltaQuery orderByAffectedspeccode($order = Criteria::ASC) Order by the AffectedSpecCode column
 * @method AbundancedeltaQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AbundancedeltaQuery groupByADeltacode() Group by the A_DeltaCode column
 * @method AbundancedeltaQuery groupByAbundancecode() Group by the AbundanceCode column
 * @method AbundancedeltaQuery groupByEcochange1() Group by the EcoChange1 column
 * @method AbundancedeltaQuery groupByEcochange2() Group by the EcoChange2 column
 * @method AbundancedeltaQuery groupByEcochange3() Group by the EcoChange3 column
 * @method AbundancedeltaQuery groupByEcochange4() Group by the EcoChange4 column
 * @method AbundancedeltaQuery groupByEcochangeRef() Group by the EcoChange_Ref column
 * @method AbundancedeltaQuery groupByAbiochange1() Group by the AbioChange1 column
 * @method AbundancedeltaQuery groupByAbiochange2() Group by the AbioChange2 column
 * @method AbundancedeltaQuery groupByAbiochange3() Group by the AbioChange3 column
 * @method AbundancedeltaQuery groupByAbiochange4() Group by the AbioChange4 column
 * @method AbundancedeltaQuery groupByAbiochangeRef() Group by the AbioChange_Ref column
 * @method AbundancedeltaQuery groupByEcohealth1() Group by the EcoHealth1 column
 * @method AbundancedeltaQuery groupByEcohealth2() Group by the EcoHealth2 column
 * @method AbundancedeltaQuery groupByEcohealthRef() Group by the EcoHealth_Ref column
 * @method AbundancedeltaQuery groupByHumaninterest1() Group by the HumanInterest1 column
 * @method AbundancedeltaQuery groupByHumaninterest2() Group by the HumanInterest2 column
 * @method AbundancedeltaQuery groupByHumaninterestRef() Group by the HumanInterest_Ref column
 * @method AbundancedeltaQuery groupByRemarks() Group by the Remarks column
 * @method AbundancedeltaQuery groupByAffectedtype() Group by the AffectedType column
 * @method AbundancedeltaQuery groupByAffectedgenus() Group by the AffectedGenus column
 * @method AbundancedeltaQuery groupByAffectedspecies() Group by the AffectedSpecies column
 * @method AbundancedeltaQuery groupByAffectedspeccode() Group by the AffectedSpecCode column
 * @method AbundancedeltaQuery groupByTs() Group by the TS column
 *
 * @method AbundancedeltaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbundancedeltaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbundancedeltaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Abundancedelta findOne(PropelPDO $con = null) Return the first Abundancedelta matching the query
 * @method Abundancedelta findOneOrCreate(PropelPDO $con = null) Return the first Abundancedelta matching the query, or a new Abundancedelta object populated from the query conditions when no match is found
 *
 * @method Abundancedelta findOneByAbundancecode(int $AbundanceCode) Return the first Abundancedelta filtered by the AbundanceCode column
 * @method Abundancedelta findOneByEcochange1(boolean $EcoChange1) Return the first Abundancedelta filtered by the EcoChange1 column
 * @method Abundancedelta findOneByEcochange2(string $EcoChange2) Return the first Abundancedelta filtered by the EcoChange2 column
 * @method Abundancedelta findOneByEcochange3(string $EcoChange3) Return the first Abundancedelta filtered by the EcoChange3 column
 * @method Abundancedelta findOneByEcochange4(string $EcoChange4) Return the first Abundancedelta filtered by the EcoChange4 column
 * @method Abundancedelta findOneByEcochangeRef(int $EcoChange_Ref) Return the first Abundancedelta filtered by the EcoChange_Ref column
 * @method Abundancedelta findOneByAbiochange1(boolean $AbioChange1) Return the first Abundancedelta filtered by the AbioChange1 column
 * @method Abundancedelta findOneByAbiochange2(string $AbioChange2) Return the first Abundancedelta filtered by the AbioChange2 column
 * @method Abundancedelta findOneByAbiochange3(string $AbioChange3) Return the first Abundancedelta filtered by the AbioChange3 column
 * @method Abundancedelta findOneByAbiochange4(string $AbioChange4) Return the first Abundancedelta filtered by the AbioChange4 column
 * @method Abundancedelta findOneByAbiochangeRef(int $AbioChange_Ref) Return the first Abundancedelta filtered by the AbioChange_Ref column
 * @method Abundancedelta findOneByEcohealth1(string $EcoHealth1) Return the first Abundancedelta filtered by the EcoHealth1 column
 * @method Abundancedelta findOneByEcohealth2(string $EcoHealth2) Return the first Abundancedelta filtered by the EcoHealth2 column
 * @method Abundancedelta findOneByEcohealthRef(int $EcoHealth_Ref) Return the first Abundancedelta filtered by the EcoHealth_Ref column
 * @method Abundancedelta findOneByHumaninterest1(string $HumanInterest1) Return the first Abundancedelta filtered by the HumanInterest1 column
 * @method Abundancedelta findOneByHumaninterest2(string $HumanInterest2) Return the first Abundancedelta filtered by the HumanInterest2 column
 * @method Abundancedelta findOneByHumaninterestRef(int $HumanInterest_Ref) Return the first Abundancedelta filtered by the HumanInterest_Ref column
 * @method Abundancedelta findOneByRemarks(string $Remarks) Return the first Abundancedelta filtered by the Remarks column
 * @method Abundancedelta findOneByAffectedtype(string $AffectedType) Return the first Abundancedelta filtered by the AffectedType column
 * @method Abundancedelta findOneByAffectedgenus(string $AffectedGenus) Return the first Abundancedelta filtered by the AffectedGenus column
 * @method Abundancedelta findOneByAffectedspecies(string $AffectedSpecies) Return the first Abundancedelta filtered by the AffectedSpecies column
 * @method Abundancedelta findOneByAffectedspeccode(int $AffectedSpecCode) Return the first Abundancedelta filtered by the AffectedSpecCode column
 * @method Abundancedelta findOneByTs(string $TS) Return the first Abundancedelta filtered by the TS column
 *
 * @method array findByADeltacode(int $A_DeltaCode) Return Abundancedelta objects filtered by the A_DeltaCode column
 * @method array findByAbundancecode(int $AbundanceCode) Return Abundancedelta objects filtered by the AbundanceCode column
 * @method array findByEcochange1(boolean $EcoChange1) Return Abundancedelta objects filtered by the EcoChange1 column
 * @method array findByEcochange2(string $EcoChange2) Return Abundancedelta objects filtered by the EcoChange2 column
 * @method array findByEcochange3(string $EcoChange3) Return Abundancedelta objects filtered by the EcoChange3 column
 * @method array findByEcochange4(string $EcoChange4) Return Abundancedelta objects filtered by the EcoChange4 column
 * @method array findByEcochangeRef(int $EcoChange_Ref) Return Abundancedelta objects filtered by the EcoChange_Ref column
 * @method array findByAbiochange1(boolean $AbioChange1) Return Abundancedelta objects filtered by the AbioChange1 column
 * @method array findByAbiochange2(string $AbioChange2) Return Abundancedelta objects filtered by the AbioChange2 column
 * @method array findByAbiochange3(string $AbioChange3) Return Abundancedelta objects filtered by the AbioChange3 column
 * @method array findByAbiochange4(string $AbioChange4) Return Abundancedelta objects filtered by the AbioChange4 column
 * @method array findByAbiochangeRef(int $AbioChange_Ref) Return Abundancedelta objects filtered by the AbioChange_Ref column
 * @method array findByEcohealth1(string $EcoHealth1) Return Abundancedelta objects filtered by the EcoHealth1 column
 * @method array findByEcohealth2(string $EcoHealth2) Return Abundancedelta objects filtered by the EcoHealth2 column
 * @method array findByEcohealthRef(int $EcoHealth_Ref) Return Abundancedelta objects filtered by the EcoHealth_Ref column
 * @method array findByHumaninterest1(string $HumanInterest1) Return Abundancedelta objects filtered by the HumanInterest1 column
 * @method array findByHumaninterest2(string $HumanInterest2) Return Abundancedelta objects filtered by the HumanInterest2 column
 * @method array findByHumaninterestRef(int $HumanInterest_Ref) Return Abundancedelta objects filtered by the HumanInterest_Ref column
 * @method array findByRemarks(string $Remarks) Return Abundancedelta objects filtered by the Remarks column
 * @method array findByAffectedtype(string $AffectedType) Return Abundancedelta objects filtered by the AffectedType column
 * @method array findByAffectedgenus(string $AffectedGenus) Return Abundancedelta objects filtered by the AffectedGenus column
 * @method array findByAffectedspecies(string $AffectedSpecies) Return Abundancedelta objects filtered by the AffectedSpecies column
 * @method array findByAffectedspeccode(int $AffectedSpecCode) Return Abundancedelta objects filtered by the AffectedSpecCode column
 * @method array findByTs(string $TS) Return Abundancedelta objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbundancedeltaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbundancedeltaQuery object.
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
            $modelName = 'Abundancedelta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbundancedeltaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbundancedeltaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbundancedeltaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbundancedeltaQuery) {
            return $criteria;
        }
        $query = new AbundancedeltaQuery(null, null, $modelAlias);

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
     * @return   Abundancedelta|Abundancedelta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbundancedeltaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abundancedelta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByADeltacode($key, $con = null)
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
     * @return                 Abundancedelta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `A_DeltaCode`, `AbundanceCode`, `EcoChange1`, `EcoChange2`, `EcoChange3`, `EcoChange4`, `EcoChange_Ref`, `AbioChange1`, `AbioChange2`, `AbioChange3`, `AbioChange4`, `AbioChange_Ref`, `EcoHealth1`, `EcoHealth2`, `EcoHealth_Ref`, `HumanInterest1`, `HumanInterest2`, `HumanInterest_Ref`, `Remarks`, `AffectedType`, `AffectedGenus`, `AffectedSpecies`, `AffectedSpecCode`, `TS` FROM `abundancedelta` WHERE `A_DeltaCode` = :p0';
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
            $obj = new Abundancedelta();
            $obj->hydrate($row);
            AbundancedeltaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Abundancedelta|Abundancedelta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abundancedelta[]|mixed the list of results, formatted by the current formatter
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
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the A_DeltaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByADeltacode(1234); // WHERE A_DeltaCode = 1234
     * $query->filterByADeltacode(array(12, 34)); // WHERE A_DeltaCode IN (12, 34)
     * $query->filterByADeltacode(array('min' => 12)); // WHERE A_DeltaCode >= 12
     * $query->filterByADeltacode(array('max' => 12)); // WHERE A_DeltaCode <= 12
     * </code>
     *
     * @param     mixed $aDeltacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByADeltacode($aDeltacode = null, $comparison = null)
    {
        if (is_array($aDeltacode)) {
            $useMinMax = false;
            if (isset($aDeltacode['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $aDeltacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aDeltacode['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $aDeltacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $aDeltacode, $comparison);
    }

    /**
     * Filter the query on the AbundanceCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundancecode(1234); // WHERE AbundanceCode = 1234
     * $query->filterByAbundancecode(array(12, 34)); // WHERE AbundanceCode IN (12, 34)
     * $query->filterByAbundancecode(array('min' => 12)); // WHERE AbundanceCode >= 12
     * $query->filterByAbundancecode(array('max' => 12)); // WHERE AbundanceCode <= 12
     * </code>
     *
     * @param     mixed $abundancecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbundancecode($abundancecode = null, $comparison = null)
    {
        if (is_array($abundancecode)) {
            $useMinMax = false;
            if (isset($abundancecode['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ABUNDANCECODE, $abundancecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundancecode['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ABUNDANCECODE, $abundancecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABUNDANCECODE, $abundancecode, $comparison);
    }

    /**
     * Filter the query on the EcoChange1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcochange1(true); // WHERE EcoChange1 = true
     * $query->filterByEcochange1('yes'); // WHERE EcoChange1 = true
     * </code>
     *
     * @param     boolean|string $ecochange1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcochange1($ecochange1 = null, $comparison = null)
    {
        if (is_string($ecochange1)) {
            $ecochange1 = in_array(strtolower($ecochange1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE1, $ecochange1, $comparison);
    }

    /**
     * Filter the query on the EcoChange2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcochange2('fooValue');   // WHERE EcoChange2 = 'fooValue'
     * $query->filterByEcochange2('%fooValue%'); // WHERE EcoChange2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecochange2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcochange2($ecochange2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecochange2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecochange2)) {
                $ecochange2 = str_replace('*', '%', $ecochange2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE2, $ecochange2, $comparison);
    }

    /**
     * Filter the query on the EcoChange3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcochange3('fooValue');   // WHERE EcoChange3 = 'fooValue'
     * $query->filterByEcochange3('%fooValue%'); // WHERE EcoChange3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecochange3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcochange3($ecochange3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecochange3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecochange3)) {
                $ecochange3 = str_replace('*', '%', $ecochange3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE3, $ecochange3, $comparison);
    }

    /**
     * Filter the query on the EcoChange4 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcochange4('fooValue');   // WHERE EcoChange4 = 'fooValue'
     * $query->filterByEcochange4('%fooValue%'); // WHERE EcoChange4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecochange4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcochange4($ecochange4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecochange4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecochange4)) {
                $ecochange4 = str_replace('*', '%', $ecochange4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE4, $ecochange4, $comparison);
    }

    /**
     * Filter the query on the EcoChange_Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByEcochangeRef(1234); // WHERE EcoChange_Ref = 1234
     * $query->filterByEcochangeRef(array(12, 34)); // WHERE EcoChange_Ref IN (12, 34)
     * $query->filterByEcochangeRef(array('min' => 12)); // WHERE EcoChange_Ref >= 12
     * $query->filterByEcochangeRef(array('max' => 12)); // WHERE EcoChange_Ref <= 12
     * </code>
     *
     * @param     mixed $ecochangeRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcochangeRef($ecochangeRef = null, $comparison = null)
    {
        if (is_array($ecochangeRef)) {
            $useMinMax = false;
            if (isset($ecochangeRef['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE_REF, $ecochangeRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecochangeRef['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE_REF, $ecochangeRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOCHANGE_REF, $ecochangeRef, $comparison);
    }

    /**
     * Filter the query on the AbioChange1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbiochange1(true); // WHERE AbioChange1 = true
     * $query->filterByAbiochange1('yes'); // WHERE AbioChange1 = true
     * </code>
     *
     * @param     boolean|string $abiochange1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbiochange1($abiochange1 = null, $comparison = null)
    {
        if (is_string($abiochange1)) {
            $abiochange1 = in_array(strtolower($abiochange1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE1, $abiochange1, $comparison);
    }

    /**
     * Filter the query on the AbioChange2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbiochange2('fooValue');   // WHERE AbioChange2 = 'fooValue'
     * $query->filterByAbiochange2('%fooValue%'); // WHERE AbioChange2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abiochange2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbiochange2($abiochange2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abiochange2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abiochange2)) {
                $abiochange2 = str_replace('*', '%', $abiochange2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE2, $abiochange2, $comparison);
    }

    /**
     * Filter the query on the AbioChange3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbiochange3('fooValue');   // WHERE AbioChange3 = 'fooValue'
     * $query->filterByAbiochange3('%fooValue%'); // WHERE AbioChange3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abiochange3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbiochange3($abiochange3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abiochange3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abiochange3)) {
                $abiochange3 = str_replace('*', '%', $abiochange3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE3, $abiochange3, $comparison);
    }

    /**
     * Filter the query on the AbioChange4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbiochange4('fooValue');   // WHERE AbioChange4 = 'fooValue'
     * $query->filterByAbiochange4('%fooValue%'); // WHERE AbioChange4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abiochange4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbiochange4($abiochange4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abiochange4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abiochange4)) {
                $abiochange4 = str_replace('*', '%', $abiochange4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE4, $abiochange4, $comparison);
    }

    /**
     * Filter the query on the AbioChange_Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByAbiochangeRef(1234); // WHERE AbioChange_Ref = 1234
     * $query->filterByAbiochangeRef(array(12, 34)); // WHERE AbioChange_Ref IN (12, 34)
     * $query->filterByAbiochangeRef(array('min' => 12)); // WHERE AbioChange_Ref >= 12
     * $query->filterByAbiochangeRef(array('max' => 12)); // WHERE AbioChange_Ref <= 12
     * </code>
     *
     * @param     mixed $abiochangeRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAbiochangeRef($abiochangeRef = null, $comparison = null)
    {
        if (is_array($abiochangeRef)) {
            $useMinMax = false;
            if (isset($abiochangeRef['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE_REF, $abiochangeRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abiochangeRef['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE_REF, $abiochangeRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ABIOCHANGE_REF, $abiochangeRef, $comparison);
    }

    /**
     * Filter the query on the EcoHealth1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcohealth1('fooValue');   // WHERE EcoHealth1 = 'fooValue'
     * $query->filterByEcohealth1('%fooValue%'); // WHERE EcoHealth1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecohealth1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcohealth1($ecohealth1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecohealth1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecohealth1)) {
                $ecohealth1 = str_replace('*', '%', $ecohealth1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOHEALTH1, $ecohealth1, $comparison);
    }

    /**
     * Filter the query on the EcoHealth2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcohealth2('fooValue');   // WHERE EcoHealth2 = 'fooValue'
     * $query->filterByEcohealth2('%fooValue%'); // WHERE EcoHealth2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecohealth2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcohealth2($ecohealth2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecohealth2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecohealth2)) {
                $ecohealth2 = str_replace('*', '%', $ecohealth2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOHEALTH2, $ecohealth2, $comparison);
    }

    /**
     * Filter the query on the EcoHealth_Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByEcohealthRef(1234); // WHERE EcoHealth_Ref = 1234
     * $query->filterByEcohealthRef(array(12, 34)); // WHERE EcoHealth_Ref IN (12, 34)
     * $query->filterByEcohealthRef(array('min' => 12)); // WHERE EcoHealth_Ref >= 12
     * $query->filterByEcohealthRef(array('max' => 12)); // WHERE EcoHealth_Ref <= 12
     * </code>
     *
     * @param     mixed $ecohealthRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByEcohealthRef($ecohealthRef = null, $comparison = null)
    {
        if (is_array($ecohealthRef)) {
            $useMinMax = false;
            if (isset($ecohealthRef['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ECOHEALTH_REF, $ecohealthRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecohealthRef['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::ECOHEALTH_REF, $ecohealthRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::ECOHEALTH_REF, $ecohealthRef, $comparison);
    }

    /**
     * Filter the query on the HumanInterest1 column
     *
     * Example usage:
     * <code>
     * $query->filterByHumaninterest1('fooValue');   // WHERE HumanInterest1 = 'fooValue'
     * $query->filterByHumaninterest1('%fooValue%'); // WHERE HumanInterest1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $humaninterest1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByHumaninterest1($humaninterest1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($humaninterest1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $humaninterest1)) {
                $humaninterest1 = str_replace('*', '%', $humaninterest1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::HUMANINTEREST1, $humaninterest1, $comparison);
    }

    /**
     * Filter the query on the HumanInterest2 column
     *
     * Example usage:
     * <code>
     * $query->filterByHumaninterest2('fooValue');   // WHERE HumanInterest2 = 'fooValue'
     * $query->filterByHumaninterest2('%fooValue%'); // WHERE HumanInterest2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $humaninterest2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByHumaninterest2($humaninterest2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($humaninterest2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $humaninterest2)) {
                $humaninterest2 = str_replace('*', '%', $humaninterest2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::HUMANINTEREST2, $humaninterest2, $comparison);
    }

    /**
     * Filter the query on the HumanInterest_Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByHumaninterestRef(1234); // WHERE HumanInterest_Ref = 1234
     * $query->filterByHumaninterestRef(array(12, 34)); // WHERE HumanInterest_Ref IN (12, 34)
     * $query->filterByHumaninterestRef(array('min' => 12)); // WHERE HumanInterest_Ref >= 12
     * $query->filterByHumaninterestRef(array('max' => 12)); // WHERE HumanInterest_Ref <= 12
     * </code>
     *
     * @param     mixed $humaninterestRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByHumaninterestRef($humaninterestRef = null, $comparison = null)
    {
        if (is_array($humaninterestRef)) {
            $useMinMax = false;
            if (isset($humaninterestRef['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::HUMANINTEREST_REF, $humaninterestRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($humaninterestRef['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::HUMANINTEREST_REF, $humaninterestRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::HUMANINTEREST_REF, $humaninterestRef, $comparison);
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
     * @return AbundancedeltaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbundancedeltaPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the AffectedType column
     *
     * Example usage:
     * <code>
     * $query->filterByAffectedtype('fooValue');   // WHERE AffectedType = 'fooValue'
     * $query->filterByAffectedtype('%fooValue%'); // WHERE AffectedType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affectedtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAffectedtype($affectedtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affectedtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affectedtype)) {
                $affectedtype = str_replace('*', '%', $affectedtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDTYPE, $affectedtype, $comparison);
    }

    /**
     * Filter the query on the AffectedGenus column
     *
     * Example usage:
     * <code>
     * $query->filterByAffectedgenus('fooValue');   // WHERE AffectedGenus = 'fooValue'
     * $query->filterByAffectedgenus('%fooValue%'); // WHERE AffectedGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affectedgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAffectedgenus($affectedgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affectedgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affectedgenus)) {
                $affectedgenus = str_replace('*', '%', $affectedgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDGENUS, $affectedgenus, $comparison);
    }

    /**
     * Filter the query on the AffectedSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterByAffectedspecies('fooValue');   // WHERE AffectedSpecies = 'fooValue'
     * $query->filterByAffectedspecies('%fooValue%'); // WHERE AffectedSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affectedspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAffectedspecies($affectedspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affectedspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affectedspecies)) {
                $affectedspecies = str_replace('*', '%', $affectedspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDSPECIES, $affectedspecies, $comparison);
    }

    /**
     * Filter the query on the AffectedSpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAffectedspeccode(1234); // WHERE AffectedSpecCode = 1234
     * $query->filterByAffectedspeccode(array(12, 34)); // WHERE AffectedSpecCode IN (12, 34)
     * $query->filterByAffectedspeccode(array('min' => 12)); // WHERE AffectedSpecCode >= 12
     * $query->filterByAffectedspeccode(array('max' => 12)); // WHERE AffectedSpecCode <= 12
     * </code>
     *
     * @param     mixed $affectedspeccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByAffectedspeccode($affectedspeccode = null, $comparison = null)
    {
        if (is_array($affectedspeccode)) {
            $useMinMax = false;
            if (isset($affectedspeccode['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDSPECCODE, $affectedspeccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($affectedspeccode['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDSPECCODE, $affectedspeccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::AFFECTEDSPECCODE, $affectedspeccode, $comparison);
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
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AbundancedeltaPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AbundancedeltaPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancedeltaPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Abundancedelta $abundancedelta Object to remove from the list of results
     *
     * @return AbundancedeltaQuery The current query, for fluid interface
     */
    public function prune($abundancedelta = null)
    {
        if ($abundancedelta) {
            $this->addUsingAlias(AbundancedeltaPeer::A_DELTACODE, $abundancedelta->getADeltacode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
