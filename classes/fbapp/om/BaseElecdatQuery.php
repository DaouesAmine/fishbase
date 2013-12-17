<?php


/**
 * Base class that represents a query for the 'elecdat' table.
 *
 *
 *
 * @method ElecdatQuery orderByElecode($order = Criteria::ASC) Order by the EleCode column
 * @method ElecdatQuery orderByStudcode($order = Criteria::ASC) Order by the StudCode column
 * @method ElecdatQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method ElecdatQuery orderByMethodused($order = Criteria::ASC) Order by the MethodUsed column
 * @method ElecdatQuery orderByBuffersystem($order = Criteria::ASC) Order by the BufferSystem column
 * @method ElecdatQuery orderByPh($order = Criteria::ASC) Order by the pH column
 * @method ElecdatQuery orderByTissue($order = Criteria::ASC) Order by the Tissue column
 * @method ElecdatQuery orderBySamples($order = Criteria::ASC) Order by the Samples column
 * @method ElecdatQuery orderByEnzyme($order = Criteria::ASC) Order by the Enzyme column
 * @method ElecdatQuery orderByLocus($order = Criteria::ASC) Order by the Locus column
 * @method ElecdatQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method ElecdatQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method ElecdatQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method ElecdatQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method ElecdatQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method ElecdatQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method ElecdatQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method ElecdatQuery orderByExpheterozygosity($order = Criteria::ASC) Order by the ExpHeterozygosity column
 * @method ElecdatQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ElecdatQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ElecdatQuery groupByElecode() Group by the EleCode column
 * @method ElecdatQuery groupByStudcode() Group by the StudCode column
 * @method ElecdatQuery groupByStockcode() Group by the StockCode column
 * @method ElecdatQuery groupByMethodused() Group by the MethodUsed column
 * @method ElecdatQuery groupByBuffersystem() Group by the BufferSystem column
 * @method ElecdatQuery groupByPh() Group by the pH column
 * @method ElecdatQuery groupByTissue() Group by the Tissue column
 * @method ElecdatQuery groupBySamples() Group by the Samples column
 * @method ElecdatQuery groupByEnzyme() Group by the Enzyme column
 * @method ElecdatQuery groupByLocus() Group by the Locus column
 * @method ElecdatQuery groupByEntered() Group by the Entered column
 * @method ElecdatQuery groupByDateentered() Group by the DateEntered column
 * @method ElecdatQuery groupByModified() Group by the Modified column
 * @method ElecdatQuery groupByDatemodified() Group by the DateModified column
 * @method ElecdatQuery groupByExpert() Group by the Expert column
 * @method ElecdatQuery groupByDatechecked() Group by the DateChecked column
 * @method ElecdatQuery groupByComment() Group by the Comment column
 * @method ElecdatQuery groupByExpheterozygosity() Group by the ExpHeterozygosity column
 * @method ElecdatQuery groupBySpeccode() Group by the SpecCode column
 * @method ElecdatQuery groupByTs() Group by the TS column
 *
 * @method ElecdatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ElecdatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ElecdatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Elecdat findOne(PropelPDO $con = null) Return the first Elecdat matching the query
 * @method Elecdat findOneOrCreate(PropelPDO $con = null) Return the first Elecdat matching the query, or a new Elecdat object populated from the query conditions when no match is found
 *
 * @method Elecdat findOneByElecode(int $EleCode) Return the first Elecdat filtered by the EleCode column
 * @method Elecdat findOneByStudcode(int $StudCode) Return the first Elecdat filtered by the StudCode column
 * @method Elecdat findOneByStockcode(int $StockCode) Return the first Elecdat filtered by the StockCode column
 * @method Elecdat findOneByMethodused(string $MethodUsed) Return the first Elecdat filtered by the MethodUsed column
 * @method Elecdat findOneByBuffersystem(string $BufferSystem) Return the first Elecdat filtered by the BufferSystem column
 * @method Elecdat findOneByPh(double $pH) Return the first Elecdat filtered by the pH column
 * @method Elecdat findOneByTissue(string $Tissue) Return the first Elecdat filtered by the Tissue column
 * @method Elecdat findOneBySamples(int $Samples) Return the first Elecdat filtered by the Samples column
 * @method Elecdat findOneByEnzyme(string $Enzyme) Return the first Elecdat filtered by the Enzyme column
 * @method Elecdat findOneByLocus(string $Locus) Return the first Elecdat filtered by the Locus column
 * @method Elecdat findOneByEntered(int $Entered) Return the first Elecdat filtered by the Entered column
 * @method Elecdat findOneByDateentered(string $DateEntered) Return the first Elecdat filtered by the DateEntered column
 * @method Elecdat findOneByModified(int $Modified) Return the first Elecdat filtered by the Modified column
 * @method Elecdat findOneByDatemodified(string $DateModified) Return the first Elecdat filtered by the DateModified column
 * @method Elecdat findOneByExpert(int $Expert) Return the first Elecdat filtered by the Expert column
 * @method Elecdat findOneByDatechecked(string $DateChecked) Return the first Elecdat filtered by the DateChecked column
 * @method Elecdat findOneByComment(string $Comment) Return the first Elecdat filtered by the Comment column
 * @method Elecdat findOneByExpheterozygosity(double $ExpHeterozygosity) Return the first Elecdat filtered by the ExpHeterozygosity column
 * @method Elecdat findOneBySpeccode(int $SpecCode) Return the first Elecdat filtered by the SpecCode column
 * @method Elecdat findOneByTs(string $TS) Return the first Elecdat filtered by the TS column
 *
 * @method array findByElecode(int $EleCode) Return Elecdat objects filtered by the EleCode column
 * @method array findByStudcode(int $StudCode) Return Elecdat objects filtered by the StudCode column
 * @method array findByStockcode(int $StockCode) Return Elecdat objects filtered by the StockCode column
 * @method array findByMethodused(string $MethodUsed) Return Elecdat objects filtered by the MethodUsed column
 * @method array findByBuffersystem(string $BufferSystem) Return Elecdat objects filtered by the BufferSystem column
 * @method array findByPh(double $pH) Return Elecdat objects filtered by the pH column
 * @method array findByTissue(string $Tissue) Return Elecdat objects filtered by the Tissue column
 * @method array findBySamples(int $Samples) Return Elecdat objects filtered by the Samples column
 * @method array findByEnzyme(string $Enzyme) Return Elecdat objects filtered by the Enzyme column
 * @method array findByLocus(string $Locus) Return Elecdat objects filtered by the Locus column
 * @method array findByEntered(int $Entered) Return Elecdat objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Elecdat objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Elecdat objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Elecdat objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Elecdat objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Elecdat objects filtered by the DateChecked column
 * @method array findByComment(string $Comment) Return Elecdat objects filtered by the Comment column
 * @method array findByExpheterozygosity(double $ExpHeterozygosity) Return Elecdat objects filtered by the ExpHeterozygosity column
 * @method array findBySpeccode(int $SpecCode) Return Elecdat objects filtered by the SpecCode column
 * @method array findByTs(string $TS) Return Elecdat objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseElecdatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseElecdatQuery object.
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
            $modelName = 'Elecdat';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ElecdatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ElecdatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ElecdatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ElecdatQuery) {
            return $criteria;
        }
        $query = new ElecdatQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StudCode, $StockCode, $BufferSystem, $Tissue, $Samples, $Enzyme, $Locus]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Elecdat|Elecdat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ElecdatPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Elecdat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `EleCode`, `StudCode`, `StockCode`, `MethodUsed`, `BufferSystem`, `pH`, `Tissue`, `Samples`, `Enzyme`, `Locus`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Comment`, `ExpHeterozygosity`, `SpecCode`, `TS` FROM `elecdat` WHERE `StudCode` = :p0 AND `StockCode` = :p1 AND `BufferSystem` = :p2 AND `Tissue` = :p3 AND `Samples` = :p4 AND `Enzyme` = :p5 AND `Locus` = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Elecdat();
            $obj->hydrate($row);
            ElecdatPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6])));
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
     * @return Elecdat|Elecdat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Elecdat[]|mixed the list of results, formatted by the current formatter
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ElecdatPeer::STUDCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::BUFFERSYSTEM, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::TISSUE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::SAMPLES, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::ENZYME, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(ElecdatPeer::LOCUS, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ElecdatPeer::STUDCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ElecdatPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ElecdatPeer::BUFFERSYSTEM, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ElecdatPeer::TISSUE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ElecdatPeer::SAMPLES, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ElecdatPeer::ENZYME, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(ElecdatPeer::LOCUS, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the EleCode column
     *
     * Example usage:
     * <code>
     * $query->filterByElecode(1234); // WHERE EleCode = 1234
     * $query->filterByElecode(array(12, 34)); // WHERE EleCode IN (12, 34)
     * $query->filterByElecode(array('min' => 12)); // WHERE EleCode >= 12
     * $query->filterByElecode(array('max' => 12)); // WHERE EleCode <= 12
     * </code>
     *
     * @param     mixed $elecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByElecode($elecode = null, $comparison = null)
    {
        if (is_array($elecode)) {
            $useMinMax = false;
            if (isset($elecode['min'])) {
                $this->addUsingAlias(ElecdatPeer::ELECODE, $elecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($elecode['max'])) {
                $this->addUsingAlias(ElecdatPeer::ELECODE, $elecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::ELECODE, $elecode, $comparison);
    }

    /**
     * Filter the query on the StudCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStudcode(1234); // WHERE StudCode = 1234
     * $query->filterByStudcode(array(12, 34)); // WHERE StudCode IN (12, 34)
     * $query->filterByStudcode(array('min' => 12)); // WHERE StudCode >= 12
     * $query->filterByStudcode(array('max' => 12)); // WHERE StudCode <= 12
     * </code>
     *
     * @param     mixed $studcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByStudcode($studcode = null, $comparison = null)
    {
        if (is_array($studcode)) {
            $useMinMax = false;
            if (isset($studcode['min'])) {
                $this->addUsingAlias(ElecdatPeer::STUDCODE, $studcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($studcode['max'])) {
                $this->addUsingAlias(ElecdatPeer::STUDCODE, $studcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::STUDCODE, $studcode, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(ElecdatPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(ElecdatPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the MethodUsed column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodused('fooValue');   // WHERE MethodUsed = 'fooValue'
     * $query->filterByMethodused('%fooValue%'); // WHERE MethodUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByMethodused($methodused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodused)) {
                $methodused = str_replace('*', '%', $methodused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::METHODUSED, $methodused, $comparison);
    }

    /**
     * Filter the query on the BufferSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByBuffersystem('fooValue');   // WHERE BufferSystem = 'fooValue'
     * $query->filterByBuffersystem('%fooValue%'); // WHERE BufferSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $buffersystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByBuffersystem($buffersystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($buffersystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $buffersystem)) {
                $buffersystem = str_replace('*', '%', $buffersystem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::BUFFERSYSTEM, $buffersystem, $comparison);
    }

    /**
     * Filter the query on the pH column
     *
     * Example usage:
     * <code>
     * $query->filterByPh(1234); // WHERE pH = 1234
     * $query->filterByPh(array(12, 34)); // WHERE pH IN (12, 34)
     * $query->filterByPh(array('min' => 12)); // WHERE pH >= 12
     * $query->filterByPh(array('max' => 12)); // WHERE pH <= 12
     * </code>
     *
     * @param     mixed $ph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByPh($ph = null, $comparison = null)
    {
        if (is_array($ph)) {
            $useMinMax = false;
            if (isset($ph['min'])) {
                $this->addUsingAlias(ElecdatPeer::PH, $ph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ph['max'])) {
                $this->addUsingAlias(ElecdatPeer::PH, $ph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::PH, $ph, $comparison);
    }

    /**
     * Filter the query on the Tissue column
     *
     * Example usage:
     * <code>
     * $query->filterByTissue('fooValue');   // WHERE Tissue = 'fooValue'
     * $query->filterByTissue('%fooValue%'); // WHERE Tissue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tissue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByTissue($tissue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tissue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tissue)) {
                $tissue = str_replace('*', '%', $tissue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::TISSUE, $tissue, $comparison);
    }

    /**
     * Filter the query on the Samples column
     *
     * Example usage:
     * <code>
     * $query->filterBySamples(1234); // WHERE Samples = 1234
     * $query->filterBySamples(array(12, 34)); // WHERE Samples IN (12, 34)
     * $query->filterBySamples(array('min' => 12)); // WHERE Samples >= 12
     * $query->filterBySamples(array('max' => 12)); // WHERE Samples <= 12
     * </code>
     *
     * @param     mixed $samples The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterBySamples($samples = null, $comparison = null)
    {
        if (is_array($samples)) {
            $useMinMax = false;
            if (isset($samples['min'])) {
                $this->addUsingAlias(ElecdatPeer::SAMPLES, $samples['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($samples['max'])) {
                $this->addUsingAlias(ElecdatPeer::SAMPLES, $samples['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::SAMPLES, $samples, $comparison);
    }

    /**
     * Filter the query on the Enzyme column
     *
     * Example usage:
     * <code>
     * $query->filterByEnzyme('fooValue');   // WHERE Enzyme = 'fooValue'
     * $query->filterByEnzyme('%fooValue%'); // WHERE Enzyme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enzyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByEnzyme($enzyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enzyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enzyme)) {
                $enzyme = str_replace('*', '%', $enzyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::ENZYME, $enzyme, $comparison);
    }

    /**
     * Filter the query on the Locus column
     *
     * Example usage:
     * <code>
     * $query->filterByLocus('fooValue');   // WHERE Locus = 'fooValue'
     * $query->filterByLocus('%fooValue%'); // WHERE Locus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByLocus($locus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locus)) {
                $locus = str_replace('*', '%', $locus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::LOCUS, $locus, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ElecdatPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ElecdatPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::ENTERED, $entered, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ElecdatPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ElecdatPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ElecdatPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ElecdatPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::MODIFIED, $modified, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ElecdatPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ElecdatPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(ElecdatPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(ElecdatPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::EXPERT, $expert, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ElecdatPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ElecdatPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ElecdatPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the ExpHeterozygosity column
     *
     * Example usage:
     * <code>
     * $query->filterByExpheterozygosity(1234); // WHERE ExpHeterozygosity = 1234
     * $query->filterByExpheterozygosity(array(12, 34)); // WHERE ExpHeterozygosity IN (12, 34)
     * $query->filterByExpheterozygosity(array('min' => 12)); // WHERE ExpHeterozygosity >= 12
     * $query->filterByExpheterozygosity(array('max' => 12)); // WHERE ExpHeterozygosity <= 12
     * </code>
     *
     * @param     mixed $expheterozygosity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByExpheterozygosity($expheterozygosity = null, $comparison = null)
    {
        if (is_array($expheterozygosity)) {
            $useMinMax = false;
            if (isset($expheterozygosity['min'])) {
                $this->addUsingAlias(ElecdatPeer::EXPHETEROZYGOSITY, $expheterozygosity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expheterozygosity['max'])) {
                $this->addUsingAlias(ElecdatPeer::EXPHETEROZYGOSITY, $expheterozygosity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::EXPHETEROZYGOSITY, $expheterozygosity, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ElecdatPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ElecdatPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::SPECCODE, $speccode, $comparison);
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
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ElecdatPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ElecdatPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecdatPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Elecdat $elecdat Object to remove from the list of results
     *
     * @return ElecdatQuery The current query, for fluid interface
     */
    public function prune($elecdat = null)
    {
        if ($elecdat) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ElecdatPeer::STUDCODE), $elecdat->getStudcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ElecdatPeer::STOCKCODE), $elecdat->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ElecdatPeer::BUFFERSYSTEM), $elecdat->getBuffersystem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ElecdatPeer::TISSUE), $elecdat->getTissue(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ElecdatPeer::SAMPLES), $elecdat->getSamples(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ElecdatPeer::ENZYME), $elecdat->getEnzyme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(ElecdatPeer::LOCUS), $elecdat->getLocus(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
