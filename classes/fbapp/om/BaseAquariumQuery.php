<?php


/**
 * Base class that represents a query for the 'aquarium' table.
 *
 *
 *
 * @method AquariumQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method AquariumQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method AquariumQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method AquariumQuery orderByAqcode($order = Criteria::ASC) Order by the AqCode column
 * @method AquariumQuery orderByGenusused($order = Criteria::ASC) Order by the GenusUsed column
 * @method AquariumQuery orderBySpeciesused($order = Criteria::ASC) Order by the SpeciesUsed column
 * @method AquariumQuery orderByForm($order = Criteria::ASC) Order by the Form column
 * @method AquariumQuery orderByMales($order = Criteria::ASC) Order by the Males column
 * @method AquariumQuery orderByFemales($order = Criteria::ASC) Order by the Females column
 * @method AquariumQuery orderByUnknown($order = Criteria::ASC) Order by the Unknown column
 * @method AquariumQuery orderBySupplier($order = Criteria::ASC) Order by the Supplier column
 * @method AquariumQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method AquariumQuery orderByProvenance($order = Criteria::ASC) Order by the Provenance column
 * @method AquariumQuery orderByBreeding($order = Criteria::ASC) Order by the Breeding column
 * @method AquariumQuery orderByHusbandry($order = Criteria::ASC) Order by the Husbandry column
 * @method AquariumQuery orderByResearch($order = Criteria::ASC) Order by the Research column
 * @method AquariumQuery orderByMonth($order = Criteria::ASC) Order by the Month column
 * @method AquariumQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method AquariumQuery orderByQueries($order = Criteria::ASC) Order by the Queries column
 * @method AquariumQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AquariumQuery groupByAutoctr() Group by the AutoCtr column
 * @method AquariumQuery groupByStockcode() Group by the Stockcode column
 * @method AquariumQuery groupBySpeccode() Group by the SpecCode column
 * @method AquariumQuery groupByAqcode() Group by the AqCode column
 * @method AquariumQuery groupByGenusused() Group by the GenusUsed column
 * @method AquariumQuery groupBySpeciesused() Group by the SpeciesUsed column
 * @method AquariumQuery groupByForm() Group by the Form column
 * @method AquariumQuery groupByMales() Group by the Males column
 * @method AquariumQuery groupByFemales() Group by the Females column
 * @method AquariumQuery groupByUnknown() Group by the Unknown column
 * @method AquariumQuery groupBySupplier() Group by the Supplier column
 * @method AquariumQuery groupBySource() Group by the Source column
 * @method AquariumQuery groupByProvenance() Group by the Provenance column
 * @method AquariumQuery groupByBreeding() Group by the Breeding column
 * @method AquariumQuery groupByHusbandry() Group by the Husbandry column
 * @method AquariumQuery groupByResearch() Group by the Research column
 * @method AquariumQuery groupByMonth() Group by the Month column
 * @method AquariumQuery groupByYear() Group by the Year column
 * @method AquariumQuery groupByQueries() Group by the Queries column
 * @method AquariumQuery groupByTs() Group by the TS column
 *
 * @method AquariumQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AquariumQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AquariumQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Aquarium findOne(PropelPDO $con = null) Return the first Aquarium matching the query
 * @method Aquarium findOneOrCreate(PropelPDO $con = null) Return the first Aquarium matching the query, or a new Aquarium object populated from the query conditions when no match is found
 *
 * @method Aquarium findOneByStockcode(int $Stockcode) Return the first Aquarium filtered by the Stockcode column
 * @method Aquarium findOneBySpeccode(int $SpecCode) Return the first Aquarium filtered by the SpecCode column
 * @method Aquarium findOneByAqcode(int $AqCode) Return the first Aquarium filtered by the AqCode column
 * @method Aquarium findOneByGenusused(string $GenusUsed) Return the first Aquarium filtered by the GenusUsed column
 * @method Aquarium findOneBySpeciesused(string $SpeciesUsed) Return the first Aquarium filtered by the SpeciesUsed column
 * @method Aquarium findOneByForm(string $Form) Return the first Aquarium filtered by the Form column
 * @method Aquarium findOneByMales(int $Males) Return the first Aquarium filtered by the Males column
 * @method Aquarium findOneByFemales(int $Females) Return the first Aquarium filtered by the Females column
 * @method Aquarium findOneByUnknown(int $Unknown) Return the first Aquarium filtered by the Unknown column
 * @method Aquarium findOneBySupplier(string $Supplier) Return the first Aquarium filtered by the Supplier column
 * @method Aquarium findOneBySource(string $Source) Return the first Aquarium filtered by the Source column
 * @method Aquarium findOneByProvenance(string $Provenance) Return the first Aquarium filtered by the Provenance column
 * @method Aquarium findOneByBreeding(string $Breeding) Return the first Aquarium filtered by the Breeding column
 * @method Aquarium findOneByHusbandry(string $Husbandry) Return the first Aquarium filtered by the Husbandry column
 * @method Aquarium findOneByResearch(string $Research) Return the first Aquarium filtered by the Research column
 * @method Aquarium findOneByMonth(int $Month) Return the first Aquarium filtered by the Month column
 * @method Aquarium findOneByYear(int $Year) Return the first Aquarium filtered by the Year column
 * @method Aquarium findOneByQueries(string $Queries) Return the first Aquarium filtered by the Queries column
 * @method Aquarium findOneByTs(string $TS) Return the first Aquarium filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Aquarium objects filtered by the AutoCtr column
 * @method array findByStockcode(int $Stockcode) Return Aquarium objects filtered by the Stockcode column
 * @method array findBySpeccode(int $SpecCode) Return Aquarium objects filtered by the SpecCode column
 * @method array findByAqcode(int $AqCode) Return Aquarium objects filtered by the AqCode column
 * @method array findByGenusused(string $GenusUsed) Return Aquarium objects filtered by the GenusUsed column
 * @method array findBySpeciesused(string $SpeciesUsed) Return Aquarium objects filtered by the SpeciesUsed column
 * @method array findByForm(string $Form) Return Aquarium objects filtered by the Form column
 * @method array findByMales(int $Males) Return Aquarium objects filtered by the Males column
 * @method array findByFemales(int $Females) Return Aquarium objects filtered by the Females column
 * @method array findByUnknown(int $Unknown) Return Aquarium objects filtered by the Unknown column
 * @method array findBySupplier(string $Supplier) Return Aquarium objects filtered by the Supplier column
 * @method array findBySource(string $Source) Return Aquarium objects filtered by the Source column
 * @method array findByProvenance(string $Provenance) Return Aquarium objects filtered by the Provenance column
 * @method array findByBreeding(string $Breeding) Return Aquarium objects filtered by the Breeding column
 * @method array findByHusbandry(string $Husbandry) Return Aquarium objects filtered by the Husbandry column
 * @method array findByResearch(string $Research) Return Aquarium objects filtered by the Research column
 * @method array findByMonth(int $Month) Return Aquarium objects filtered by the Month column
 * @method array findByYear(int $Year) Return Aquarium objects filtered by the Year column
 * @method array findByQueries(string $Queries) Return Aquarium objects filtered by the Queries column
 * @method array findByTs(string $TS) Return Aquarium objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAquariumQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAquariumQuery object.
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
            $modelName = 'Aquarium';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AquariumQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AquariumQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AquariumQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AquariumQuery) {
            return $criteria;
        }
        $query = new AquariumQuery(null, null, $modelAlias);

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
     * @return   Aquarium|Aquarium[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AquariumPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AquariumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Aquarium A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Aquarium A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Stockcode`, `SpecCode`, `AqCode`, `GenusUsed`, `SpeciesUsed`, `Form`, `Males`, `Females`, `Unknown`, `Supplier`, `Source`, `Provenance`, `Breeding`, `Husbandry`, `Research`, `Month`, `Year`, `Queries`, `TS` FROM `aquarium` WHERE `AutoCtr` = :p0';
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
            $obj = new Aquarium();
            $obj->hydrate($row);
            AquariumPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aquarium|Aquarium[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aquarium[]|mixed the list of results, formatted by the current formatter
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
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AquariumPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AquariumPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(AquariumPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(AquariumPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(AquariumPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(AquariumPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(AquariumPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(AquariumPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the AqCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAqcode(1234); // WHERE AqCode = 1234
     * $query->filterByAqcode(array(12, 34)); // WHERE AqCode IN (12, 34)
     * $query->filterByAqcode(array('min' => 12)); // WHERE AqCode >= 12
     * $query->filterByAqcode(array('max' => 12)); // WHERE AqCode <= 12
     * </code>
     *
     * @param     mixed $aqcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByAqcode($aqcode = null, $comparison = null)
    {
        if (is_array($aqcode)) {
            $useMinMax = false;
            if (isset($aqcode['min'])) {
                $this->addUsingAlias(AquariumPeer::AQCODE, $aqcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aqcode['max'])) {
                $this->addUsingAlias(AquariumPeer::AQCODE, $aqcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::AQCODE, $aqcode, $comparison);
    }

    /**
     * Filter the query on the GenusUsed column
     *
     * Example usage:
     * <code>
     * $query->filterByGenusused('fooValue');   // WHERE GenusUsed = 'fooValue'
     * $query->filterByGenusused('%fooValue%'); // WHERE GenusUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genusused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByGenusused($genusused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genusused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genusused)) {
                $genusused = str_replace('*', '%', $genusused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::GENUSUSED, $genusused, $comparison);
    }

    /**
     * Filter the query on the SpeciesUsed column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesused('fooValue');   // WHERE SpeciesUsed = 'fooValue'
     * $query->filterBySpeciesused('%fooValue%'); // WHERE SpeciesUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterBySpeciesused($speciesused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciesused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciesused)) {
                $speciesused = str_replace('*', '%', $speciesused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::SPECIESUSED, $speciesused, $comparison);
    }

    /**
     * Filter the query on the Form column
     *
     * Example usage:
     * <code>
     * $query->filterByForm('fooValue');   // WHERE Form = 'fooValue'
     * $query->filterByForm('%fooValue%'); // WHERE Form LIKE '%fooValue%'
     * </code>
     *
     * @param     string $form The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByForm($form = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($form)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $form)) {
                $form = str_replace('*', '%', $form);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::FORM, $form, $comparison);
    }

    /**
     * Filter the query on the Males column
     *
     * Example usage:
     * <code>
     * $query->filterByMales(1234); // WHERE Males = 1234
     * $query->filterByMales(array(12, 34)); // WHERE Males IN (12, 34)
     * $query->filterByMales(array('min' => 12)); // WHERE Males >= 12
     * $query->filterByMales(array('max' => 12)); // WHERE Males <= 12
     * </code>
     *
     * @param     mixed $males The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByMales($males = null, $comparison = null)
    {
        if (is_array($males)) {
            $useMinMax = false;
            if (isset($males['min'])) {
                $this->addUsingAlias(AquariumPeer::MALES, $males['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($males['max'])) {
                $this->addUsingAlias(AquariumPeer::MALES, $males['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::MALES, $males, $comparison);
    }

    /**
     * Filter the query on the Females column
     *
     * Example usage:
     * <code>
     * $query->filterByFemales(1234); // WHERE Females = 1234
     * $query->filterByFemales(array(12, 34)); // WHERE Females IN (12, 34)
     * $query->filterByFemales(array('min' => 12)); // WHERE Females >= 12
     * $query->filterByFemales(array('max' => 12)); // WHERE Females <= 12
     * </code>
     *
     * @param     mixed $females The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByFemales($females = null, $comparison = null)
    {
        if (is_array($females)) {
            $useMinMax = false;
            if (isset($females['min'])) {
                $this->addUsingAlias(AquariumPeer::FEMALES, $females['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($females['max'])) {
                $this->addUsingAlias(AquariumPeer::FEMALES, $females['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::FEMALES, $females, $comparison);
    }

    /**
     * Filter the query on the Unknown column
     *
     * Example usage:
     * <code>
     * $query->filterByUnknown(1234); // WHERE Unknown = 1234
     * $query->filterByUnknown(array(12, 34)); // WHERE Unknown IN (12, 34)
     * $query->filterByUnknown(array('min' => 12)); // WHERE Unknown >= 12
     * $query->filterByUnknown(array('max' => 12)); // WHERE Unknown <= 12
     * </code>
     *
     * @param     mixed $unknown The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByUnknown($unknown = null, $comparison = null)
    {
        if (is_array($unknown)) {
            $useMinMax = false;
            if (isset($unknown['min'])) {
                $this->addUsingAlias(AquariumPeer::UNKNOWN, $unknown['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unknown['max'])) {
                $this->addUsingAlias(AquariumPeer::UNKNOWN, $unknown['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::UNKNOWN, $unknown, $comparison);
    }

    /**
     * Filter the query on the Supplier column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplier('fooValue');   // WHERE Supplier = 'fooValue'
     * $query->filterBySupplier('%fooValue%'); // WHERE Supplier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterBySupplier($supplier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supplier)) {
                $supplier = str_replace('*', '%', $supplier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::SUPPLIER, $supplier, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the Provenance column
     *
     * Example usage:
     * <code>
     * $query->filterByProvenance('fooValue');   // WHERE Provenance = 'fooValue'
     * $query->filterByProvenance('%fooValue%'); // WHERE Provenance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $provenance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByProvenance($provenance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($provenance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $provenance)) {
                $provenance = str_replace('*', '%', $provenance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::PROVENANCE, $provenance, $comparison);
    }

    /**
     * Filter the query on the Breeding column
     *
     * Example usage:
     * <code>
     * $query->filterByBreeding('fooValue');   // WHERE Breeding = 'fooValue'
     * $query->filterByBreeding('%fooValue%'); // WHERE Breeding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breeding The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByBreeding($breeding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breeding)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breeding)) {
                $breeding = str_replace('*', '%', $breeding);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::BREEDING, $breeding, $comparison);
    }

    /**
     * Filter the query on the Husbandry column
     *
     * Example usage:
     * <code>
     * $query->filterByHusbandry('fooValue');   // WHERE Husbandry = 'fooValue'
     * $query->filterByHusbandry('%fooValue%'); // WHERE Husbandry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $husbandry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByHusbandry($husbandry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($husbandry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $husbandry)) {
                $husbandry = str_replace('*', '%', $husbandry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::HUSBANDRY, $husbandry, $comparison);
    }

    /**
     * Filter the query on the Research column
     *
     * Example usage:
     * <code>
     * $query->filterByResearch('fooValue');   // WHERE Research = 'fooValue'
     * $query->filterByResearch('%fooValue%'); // WHERE Research LIKE '%fooValue%'
     * </code>
     *
     * @param     string $research The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByResearch($research = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($research)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $research)) {
                $research = str_replace('*', '%', $research);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::RESEARCH, $research, $comparison);
    }

    /**
     * Filter the query on the Month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth(1234); // WHERE Month = 1234
     * $query->filterByMonth(array(12, 34)); // WHERE Month IN (12, 34)
     * $query->filterByMonth(array('min' => 12)); // WHERE Month >= 12
     * $query->filterByMonth(array('max' => 12)); // WHERE Month <= 12
     * </code>
     *
     * @param     mixed $month The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(AquariumPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(AquariumPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(AquariumPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(AquariumPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Queries column
     *
     * Example usage:
     * <code>
     * $query->filterByQueries('fooValue');   // WHERE Queries = 'fooValue'
     * $query->filterByQueries('%fooValue%'); // WHERE Queries LIKE '%fooValue%'
     * </code>
     *
     * @param     string $queries The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByQueries($queries = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($queries)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $queries)) {
                $queries = str_replace('*', '%', $queries);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AquariumPeer::QUERIES, $queries, $comparison);
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
     * @return AquariumQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AquariumPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AquariumPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AquariumPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Aquarium $aquarium Object to remove from the list of results
     *
     * @return AquariumQuery The current query, for fluid interface
     */
    public function prune($aquarium = null)
    {
        if ($aquarium) {
            $this->addUsingAlias(AquariumPeer::AUTOCTR, $aquarium->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
