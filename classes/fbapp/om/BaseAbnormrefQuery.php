<?php


/**
 * Base class that represents a query for the 'abnormref' table.
 *
 *
 *
 * @method AbnormrefQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method AbnormrefQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method AbnormrefQuery orderByReferences($order = Criteria::ASC) Order by the References column
 * @method AbnormrefQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method AbnormrefQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method AbnormrefQuery orderByTitle($order = Criteria::ASC) Order by the Title column
 * @method AbnormrefQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method AbnormrefQuery orderByFirstauthor($order = Criteria::ASC) Order by the FirstAuthor column
 * @method AbnormrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AbnormrefQuery groupByAutoctr() Group by the AutoCtr column
 * @method AbnormrefQuery groupByRefno() Group by the RefNo column
 * @method AbnormrefQuery groupByReferences() Group by the References column
 * @method AbnormrefQuery groupByAuthor() Group by the Author column
 * @method AbnormrefQuery groupByYear() Group by the Year column
 * @method AbnormrefQuery groupByTitle() Group by the Title column
 * @method AbnormrefQuery groupBySource() Group by the Source column
 * @method AbnormrefQuery groupByFirstauthor() Group by the FirstAuthor column
 * @method AbnormrefQuery groupByTs() Group by the TS column
 *
 * @method AbnormrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbnormrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbnormrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Abnormref findOne(PropelPDO $con = null) Return the first Abnormref matching the query
 * @method Abnormref findOneOrCreate(PropelPDO $con = null) Return the first Abnormref matching the query, or a new Abnormref object populated from the query conditions when no match is found
 *
 * @method Abnormref findOneByRefno(double $RefNo) Return the first Abnormref filtered by the RefNo column
 * @method Abnormref findOneByReferences(string $References) Return the first Abnormref filtered by the References column
 * @method Abnormref findOneByAuthor(string $Author) Return the first Abnormref filtered by the Author column
 * @method Abnormref findOneByYear(int $Year) Return the first Abnormref filtered by the Year column
 * @method Abnormref findOneByTitle(string $Title) Return the first Abnormref filtered by the Title column
 * @method Abnormref findOneBySource(string $Source) Return the first Abnormref filtered by the Source column
 * @method Abnormref findOneByFirstauthor(string $FirstAuthor) Return the first Abnormref filtered by the FirstAuthor column
 * @method Abnormref findOneByTs(string $TS) Return the first Abnormref filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Abnormref objects filtered by the AutoCtr column
 * @method array findByRefno(double $RefNo) Return Abnormref objects filtered by the RefNo column
 * @method array findByReferences(string $References) Return Abnormref objects filtered by the References column
 * @method array findByAuthor(string $Author) Return Abnormref objects filtered by the Author column
 * @method array findByYear(int $Year) Return Abnormref objects filtered by the Year column
 * @method array findByTitle(string $Title) Return Abnormref objects filtered by the Title column
 * @method array findBySource(string $Source) Return Abnormref objects filtered by the Source column
 * @method array findByFirstauthor(string $FirstAuthor) Return Abnormref objects filtered by the FirstAuthor column
 * @method array findByTs(string $TS) Return Abnormref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbnormrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbnormrefQuery object.
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
            $modelName = 'Abnormref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbnormrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbnormrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbnormrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbnormrefQuery) {
            return $criteria;
        }
        $query = new AbnormrefQuery(null, null, $modelAlias);

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
     * @return   Abnormref|Abnormref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbnormrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbnormrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abnormref A model object, or null if the key is not found
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
     * @return                 Abnormref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `RefNo`, `References`, `Author`, `Year`, `Title`, `Source`, `FirstAuthor`, `TS` FROM `abnormref` WHERE `AutoCtr` = :p0';
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
            $obj = new Abnormref();
            $obj->hydrate($row);
            AbnormrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Abnormref|Abnormref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abnormref[]|mixed the list of results, formatted by the current formatter
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
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(AbnormrefPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(AbnormrefPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the References column
     *
     * Example usage:
     * <code>
     * $query->filterByReferences('fooValue');   // WHERE References = 'fooValue'
     * $query->filterByReferences('%fooValue%'); // WHERE References LIKE '%fooValue%'
     * </code>
     *
     * @param     string $references The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByReferences($references = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($references)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $references)) {
                $references = str_replace('*', '%', $references);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::REFERENCES, $references, $comparison);
    }

    /**
     * Filter the query on the Author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE Author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE Author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $author)) {
                $author = str_replace('*', '%', $author);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::AUTHOR, $author, $comparison);
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
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(AbnormrefPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(AbnormrefPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE Title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE Title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::TITLE, $title, $comparison);
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
     * @return AbnormrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbnormrefPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the FirstAuthor column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstauthor('fooValue');   // WHERE FirstAuthor = 'fooValue'
     * $query->filterByFirstauthor('%fooValue%'); // WHERE FirstAuthor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstauthor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByFirstauthor($firstauthor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstauthor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstauthor)) {
                $firstauthor = str_replace('*', '%', $firstauthor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::FIRSTAUTHOR, $firstauthor, $comparison);
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
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AbnormrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AbnormrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Abnormref $abnormref Object to remove from the list of results
     *
     * @return AbnormrefQuery The current query, for fluid interface
     */
    public function prune($abnormref = null)
    {
        if ($abnormref) {
            $this->addUsingAlias(AbnormrefPeer::AUTOCTR, $abnormref->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
