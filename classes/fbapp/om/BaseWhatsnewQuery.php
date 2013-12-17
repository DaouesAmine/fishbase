<?php


/**
 * Base class that represents a query for the 'whatsnew' table.
 *
 *
 *
 * @method WhatsnewQuery orderByFeaturecode($order = Criteria::ASC) Order by the FeatureCode column
 * @method WhatsnewQuery orderByMonth($order = Criteria::ASC) Order by the Month column
 * @method WhatsnewQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method WhatsnewQuery orderByFeature($order = Criteria::ASC) Order by the Feature column
 * @method WhatsnewQuery orderByExample1($order = Criteria::ASC) Order by the Example1 column
 * @method WhatsnewQuery orderByExample2($order = Criteria::ASC) Order by the Example2 column
 * @method WhatsnewQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method WhatsnewQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method WhatsnewQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method WhatsnewQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method WhatsnewQuery orderByChecked($order = Criteria::ASC) Order by the Checked column
 * @method WhatsnewQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method WhatsnewQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method WhatsnewQuery groupByFeaturecode() Group by the FeatureCode column
 * @method WhatsnewQuery groupByMonth() Group by the Month column
 * @method WhatsnewQuery groupByYear() Group by the Year column
 * @method WhatsnewQuery groupByFeature() Group by the Feature column
 * @method WhatsnewQuery groupByExample1() Group by the Example1 column
 * @method WhatsnewQuery groupByExample2() Group by the Example2 column
 * @method WhatsnewQuery groupByEntered() Group by the Entered column
 * @method WhatsnewQuery groupByDateentered() Group by the DateEntered column
 * @method WhatsnewQuery groupByModified() Group by the Modified column
 * @method WhatsnewQuery groupByDatemodified() Group by the DateModified column
 * @method WhatsnewQuery groupByChecked() Group by the Checked column
 * @method WhatsnewQuery groupByDatechecked() Group by the DateChecked column
 * @method WhatsnewQuery groupByTs() Group by the TS column
 *
 * @method WhatsnewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WhatsnewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WhatsnewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Whatsnew findOne(PropelPDO $con = null) Return the first Whatsnew matching the query
 * @method Whatsnew findOneOrCreate(PropelPDO $con = null) Return the first Whatsnew matching the query, or a new Whatsnew object populated from the query conditions when no match is found
 *
 * @method Whatsnew findOneByMonth(string $Month) Return the first Whatsnew filtered by the Month column
 * @method Whatsnew findOneByYear(string $Year) Return the first Whatsnew filtered by the Year column
 * @method Whatsnew findOneByFeature(string $Feature) Return the first Whatsnew filtered by the Feature column
 * @method Whatsnew findOneByExample1(string $Example1) Return the first Whatsnew filtered by the Example1 column
 * @method Whatsnew findOneByExample2(string $Example2) Return the first Whatsnew filtered by the Example2 column
 * @method Whatsnew findOneByEntered(int $Entered) Return the first Whatsnew filtered by the Entered column
 * @method Whatsnew findOneByDateentered(string $DateEntered) Return the first Whatsnew filtered by the DateEntered column
 * @method Whatsnew findOneByModified(int $Modified) Return the first Whatsnew filtered by the Modified column
 * @method Whatsnew findOneByDatemodified(string $DateModified) Return the first Whatsnew filtered by the DateModified column
 * @method Whatsnew findOneByChecked(int $Checked) Return the first Whatsnew filtered by the Checked column
 * @method Whatsnew findOneByDatechecked(string $DateChecked) Return the first Whatsnew filtered by the DateChecked column
 * @method Whatsnew findOneByTs(string $TS) Return the first Whatsnew filtered by the TS column
 *
 * @method array findByFeaturecode(int $FeatureCode) Return Whatsnew objects filtered by the FeatureCode column
 * @method array findByMonth(string $Month) Return Whatsnew objects filtered by the Month column
 * @method array findByYear(string $Year) Return Whatsnew objects filtered by the Year column
 * @method array findByFeature(string $Feature) Return Whatsnew objects filtered by the Feature column
 * @method array findByExample1(string $Example1) Return Whatsnew objects filtered by the Example1 column
 * @method array findByExample2(string $Example2) Return Whatsnew objects filtered by the Example2 column
 * @method array findByEntered(int $Entered) Return Whatsnew objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Whatsnew objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Whatsnew objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Whatsnew objects filtered by the DateModified column
 * @method array findByChecked(int $Checked) Return Whatsnew objects filtered by the Checked column
 * @method array findByDatechecked(string $DateChecked) Return Whatsnew objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Whatsnew objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWhatsnewQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWhatsnewQuery object.
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
            $modelName = 'Whatsnew';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WhatsnewQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WhatsnewQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WhatsnewQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WhatsnewQuery) {
            return $criteria;
        }
        $query = new WhatsnewQuery(null, null, $modelAlias);

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
     * @return   Whatsnew|Whatsnew[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WhatsnewPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WhatsnewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Whatsnew A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFeaturecode($key, $con = null)
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
     * @return                 Whatsnew A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FeatureCode`, `Month`, `Year`, `Feature`, `Example1`, `Example2`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Checked`, `DateChecked`, `TS` FROM `whatsnew` WHERE `FeatureCode` = :p0';
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
            $obj = new Whatsnew();
            $obj->hydrate($row);
            WhatsnewPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Whatsnew|Whatsnew[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Whatsnew[]|mixed the list of results, formatted by the current formatter
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FeatureCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFeaturecode(1234); // WHERE FeatureCode = 1234
     * $query->filterByFeaturecode(array(12, 34)); // WHERE FeatureCode IN (12, 34)
     * $query->filterByFeaturecode(array('min' => 12)); // WHERE FeatureCode >= 12
     * $query->filterByFeaturecode(array('max' => 12)); // WHERE FeatureCode <= 12
     * </code>
     *
     * @param     mixed $featurecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByFeaturecode($featurecode = null, $comparison = null)
    {
        if (is_array($featurecode)) {
            $useMinMax = false;
            if (isset($featurecode['min'])) {
                $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $featurecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($featurecode['max'])) {
                $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $featurecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $featurecode, $comparison);
    }

    /**
     * Filter the query on the Month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth('fooValue');   // WHERE Month = 'fooValue'
     * $query->filterByMonth('%fooValue%'); // WHERE Month LIKE '%fooValue%'
     * </code>
     *
     * @param     string $month The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($month)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $month)) {
                $month = str_replace('*', '%', $month);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear('fooValue');   // WHERE Year = 'fooValue'
     * $query->filterByYear('%fooValue%'); // WHERE Year LIKE '%fooValue%'
     * </code>
     *
     * @param     string $year The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($year)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $year)) {
                $year = str_replace('*', '%', $year);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Feature column
     *
     * Example usage:
     * <code>
     * $query->filterByFeature('fooValue');   // WHERE Feature = 'fooValue'
     * $query->filterByFeature('%fooValue%'); // WHERE Feature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByFeature($feature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feature)) {
                $feature = str_replace('*', '%', $feature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::FEATURE, $feature, $comparison);
    }

    /**
     * Filter the query on the Example1 column
     *
     * Example usage:
     * <code>
     * $query->filterByExample1('fooValue');   // WHERE Example1 = 'fooValue'
     * $query->filterByExample1('%fooValue%'); // WHERE Example1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $example1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByExample1($example1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($example1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $example1)) {
                $example1 = str_replace('*', '%', $example1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::EXAMPLE1, $example1, $comparison);
    }

    /**
     * Filter the query on the Example2 column
     *
     * Example usage:
     * <code>
     * $query->filterByExample2('fooValue');   // WHERE Example2 = 'fooValue'
     * $query->filterByExample2('%fooValue%'); // WHERE Example2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $example2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByExample2($example2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($example2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $example2)) {
                $example2 = str_replace('*', '%', $example2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::EXAMPLE2, $example2, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(WhatsnewPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(WhatsnewPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::ENTERED, $entered, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(WhatsnewPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(WhatsnewPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(WhatsnewPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(WhatsnewPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::MODIFIED, $modified, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(WhatsnewPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(WhatsnewPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Checked column
     *
     * Example usage:
     * <code>
     * $query->filterByChecked(1234); // WHERE Checked = 1234
     * $query->filterByChecked(array(12, 34)); // WHERE Checked IN (12, 34)
     * $query->filterByChecked(array('min' => 12)); // WHERE Checked >= 12
     * $query->filterByChecked(array('max' => 12)); // WHERE Checked <= 12
     * </code>
     *
     * @param     mixed $checked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByChecked($checked = null, $comparison = null)
    {
        if (is_array($checked)) {
            $useMinMax = false;
            if (isset($checked['min'])) {
                $this->addUsingAlias(WhatsnewPeer::CHECKED, $checked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checked['max'])) {
                $this->addUsingAlias(WhatsnewPeer::CHECKED, $checked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::CHECKED, $checked, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(WhatsnewPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(WhatsnewPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(WhatsnewPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(WhatsnewPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhatsnewPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Whatsnew $whatsnew Object to remove from the list of results
     *
     * @return WhatsnewQuery The current query, for fluid interface
     */
    public function prune($whatsnew = null)
    {
        if ($whatsnew) {
            $this->addUsingAlias(WhatsnewPeer::FEATURECODE, $whatsnew->getFeaturecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
