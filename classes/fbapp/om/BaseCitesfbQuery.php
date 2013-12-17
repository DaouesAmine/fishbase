<?php


/**
 * Base class that represents a query for the 'citesfb' table.
 *
 *
 *
 * @method CitesfbQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method CitesfbQuery orderByPageno($order = Criteria::ASC) Order by the PageNo column
 * @method CitesfbQuery orderByTopic($order = Criteria::ASC) Order by the Topic column
 * @method CitesfbQuery orderByReferred($order = Criteria::ASC) Order by the Referred column
 * @method CitesfbQuery orderByImpact($order = Criteria::ASC) Order by the Impact column
 * @method CitesfbQuery orderByData($order = Criteria::ASC) Order by the Data column
 * @method CitesfbQuery orderBySubject($order = Criteria::ASC) Order by the Subject column
 * @method CitesfbQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method CitesfbQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CitesfbQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CitesfbQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CitesfbQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CitesfbQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CitesfbQuery groupByRefno() Group by the RefNo column
 * @method CitesfbQuery groupByPageno() Group by the PageNo column
 * @method CitesfbQuery groupByTopic() Group by the Topic column
 * @method CitesfbQuery groupByReferred() Group by the Referred column
 * @method CitesfbQuery groupByImpact() Group by the Impact column
 * @method CitesfbQuery groupByData() Group by the Data column
 * @method CitesfbQuery groupBySubject() Group by the Subject column
 * @method CitesfbQuery groupByRemarks() Group by the Remarks column
 * @method CitesfbQuery groupByEntered() Group by the Entered column
 * @method CitesfbQuery groupByDateentered() Group by the DateEntered column
 * @method CitesfbQuery groupByModified() Group by the Modified column
 * @method CitesfbQuery groupByDatemodified() Group by the DateModified column
 * @method CitesfbQuery groupByTs() Group by the TS column
 *
 * @method CitesfbQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CitesfbQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CitesfbQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Citesfb findOne(PropelPDO $con = null) Return the first Citesfb matching the query
 * @method Citesfb findOneOrCreate(PropelPDO $con = null) Return the first Citesfb matching the query, or a new Citesfb object populated from the query conditions when no match is found
 *
 * @method Citesfb findOneByPageno(string $PageNo) Return the first Citesfb filtered by the PageNo column
 * @method Citesfb findOneByTopic(string $Topic) Return the first Citesfb filtered by the Topic column
 * @method Citesfb findOneByReferred(string $Referred) Return the first Citesfb filtered by the Referred column
 * @method Citesfb findOneByImpact(string $Impact) Return the first Citesfb filtered by the Impact column
 * @method Citesfb findOneByData(string $Data) Return the first Citesfb filtered by the Data column
 * @method Citesfb findOneBySubject(string $Subject) Return the first Citesfb filtered by the Subject column
 * @method Citesfb findOneByRemarks(string $Remarks) Return the first Citesfb filtered by the Remarks column
 * @method Citesfb findOneByEntered(int $Entered) Return the first Citesfb filtered by the Entered column
 * @method Citesfb findOneByDateentered(string $DateEntered) Return the first Citesfb filtered by the DateEntered column
 * @method Citesfb findOneByModified(int $Modified) Return the first Citesfb filtered by the Modified column
 * @method Citesfb findOneByDatemodified(string $DateModified) Return the first Citesfb filtered by the DateModified column
 * @method Citesfb findOneByTs(string $TS) Return the first Citesfb filtered by the TS column
 *
 * @method array findByRefno(int $RefNo) Return Citesfb objects filtered by the RefNo column
 * @method array findByPageno(string $PageNo) Return Citesfb objects filtered by the PageNo column
 * @method array findByTopic(string $Topic) Return Citesfb objects filtered by the Topic column
 * @method array findByReferred(string $Referred) Return Citesfb objects filtered by the Referred column
 * @method array findByImpact(string $Impact) Return Citesfb objects filtered by the Impact column
 * @method array findByData(string $Data) Return Citesfb objects filtered by the Data column
 * @method array findBySubject(string $Subject) Return Citesfb objects filtered by the Subject column
 * @method array findByRemarks(string $Remarks) Return Citesfb objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Citesfb objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Citesfb objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Citesfb objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Citesfb objects filtered by the DateModified column
 * @method array findByTs(string $TS) Return Citesfb objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCitesfbQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCitesfbQuery object.
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
            $modelName = 'Citesfb';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CitesfbQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CitesfbQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CitesfbQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CitesfbQuery) {
            return $criteria;
        }
        $query = new CitesfbQuery(null, null, $modelAlias);

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
     * @return   Citesfb|Citesfb[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CitesfbPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CitesfbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Citesfb A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRefno($key, $con = null)
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
     * @return                 Citesfb A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `RefNo`, `PageNo`, `Topic`, `Referred`, `Impact`, `Data`, `Subject`, `Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `TS` FROM `citesfb` WHERE `RefNo` = :p0';
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
            $obj = new Citesfb();
            $obj->hydrate($row);
            CitesfbPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Citesfb|Citesfb[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Citesfb[]|mixed the list of results, formatted by the current formatter
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CitesfbPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CitesfbPeer::REFNO, $keys, Criteria::IN);
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(CitesfbPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(CitesfbPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the PageNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPageno('fooValue');   // WHERE PageNo = 'fooValue'
     * $query->filterByPageno('%fooValue%'); // WHERE PageNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pageno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByPageno($pageno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pageno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pageno)) {
                $pageno = str_replace('*', '%', $pageno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::PAGENO, $pageno, $comparison);
    }

    /**
     * Filter the query on the Topic column
     *
     * Example usage:
     * <code>
     * $query->filterByTopic('fooValue');   // WHERE Topic = 'fooValue'
     * $query->filterByTopic('%fooValue%'); // WHERE Topic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $topic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByTopic($topic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($topic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $topic)) {
                $topic = str_replace('*', '%', $topic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::TOPIC, $topic, $comparison);
    }

    /**
     * Filter the query on the Referred column
     *
     * Example usage:
     * <code>
     * $query->filterByReferred('fooValue');   // WHERE Referred = 'fooValue'
     * $query->filterByReferred('%fooValue%'); // WHERE Referred LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referred The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByReferred($referred = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referred)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referred)) {
                $referred = str_replace('*', '%', $referred);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::REFERRED, $referred, $comparison);
    }

    /**
     * Filter the query on the Impact column
     *
     * Example usage:
     * <code>
     * $query->filterByImpact('fooValue');   // WHERE Impact = 'fooValue'
     * $query->filterByImpact('%fooValue%'); // WHERE Impact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $impact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByImpact($impact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($impact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $impact)) {
                $impact = str_replace('*', '%', $impact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::IMPACT, $impact, $comparison);
    }

    /**
     * Filter the query on the Data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE Data = 'fooValue'
     * $query->filterByData('%fooValue%'); // WHERE Data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data)) {
                $data = str_replace('*', '%', $data);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the Subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE Subject = 'fooValue'
     * $query->filterBySubject('%fooValue%'); // WHERE Subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subject)) {
                $subject = str_replace('*', '%', $subject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::SUBJECT, $subject, $comparison);
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
     * @return CitesfbQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CitesfbPeer::REMARKS, $remarks, $comparison);
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CitesfbPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CitesfbPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::ENTERED, $entered, $comparison);
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CitesfbPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CitesfbPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CitesfbPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CitesfbPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('fooValue');   // WHERE DateModified = 'fooValue'
     * $query->filterByDatemodified('%fooValue%'); // WHERE DateModified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datemodified The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datemodified)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datemodified)) {
                $datemodified = str_replace('*', '%', $datemodified);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CitesfbPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CitesfbPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitesfbPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Citesfb $citesfb Object to remove from the list of results
     *
     * @return CitesfbQuery The current query, for fluid interface
     */
    public function prune($citesfb = null)
    {
        if ($citesfb) {
            $this->addUsingAlias(CitesfbPeer::REFNO, $citesfb->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
