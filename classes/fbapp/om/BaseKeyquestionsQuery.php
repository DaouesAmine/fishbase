<?php


/**
 * Base class that represents a query for the 'keyquestions' table.
 *
 *
 *
 * @method KeyquestionsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method KeyquestionsQuery orderByKeycode($order = Criteria::ASC) Order by the KeyCode column
 * @method KeyquestionsQuery orderByCouplenum($order = Criteria::ASC) Order by the CoupleNum column
 * @method KeyquestionsQuery orderByCouplepart($order = Criteria::ASC) Order by the CouplePart column
 * @method KeyquestionsQuery orderByQuestion($order = Criteria::ASC) Order by the Question column
 * @method KeyquestionsQuery orderByNextcouple($order = Criteria::ASC) Order by the NextCouple column
 * @method KeyquestionsQuery orderByPrevcouple($order = Criteria::ASC) Order by the PrevCouple column
 * @method KeyquestionsQuery orderByOrdnum($order = Criteria::ASC) Order by the OrdNum column
 * @method KeyquestionsQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method KeyquestionsQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method KeyquestionsQuery orderByGencode($order = Criteria::ASC) Order by the Gencode column
 * @method KeyquestionsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method KeyquestionsQuery orderBySyncode($order = Criteria::ASC) Order by the Syncode column
 * @method KeyquestionsQuery orderByPicname($order = Criteria::ASC) Order by the PicName column
 * @method KeyquestionsQuery orderByNextkey($order = Criteria::ASC) Order by the NextKey column
 * @method KeyquestionsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method KeyquestionsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method KeyquestionsQuery groupByAutoctr() Group by the autoctr column
 * @method KeyquestionsQuery groupByKeycode() Group by the KeyCode column
 * @method KeyquestionsQuery groupByCouplenum() Group by the CoupleNum column
 * @method KeyquestionsQuery groupByCouplepart() Group by the CouplePart column
 * @method KeyquestionsQuery groupByQuestion() Group by the Question column
 * @method KeyquestionsQuery groupByNextcouple() Group by the NextCouple column
 * @method KeyquestionsQuery groupByPrevcouple() Group by the PrevCouple column
 * @method KeyquestionsQuery groupByOrdnum() Group by the OrdNum column
 * @method KeyquestionsQuery groupByFamcode() Group by the FamCode column
 * @method KeyquestionsQuery groupByGenus() Group by the Genus column
 * @method KeyquestionsQuery groupByGencode() Group by the Gencode column
 * @method KeyquestionsQuery groupBySpeccode() Group by the SpecCode column
 * @method KeyquestionsQuery groupBySyncode() Group by the Syncode column
 * @method KeyquestionsQuery groupByPicname() Group by the PicName column
 * @method KeyquestionsQuery groupByNextkey() Group by the NextKey column
 * @method KeyquestionsQuery groupByDateentered() Group by the DateEntered column
 * @method KeyquestionsQuery groupByTs() Group by the TS column
 *
 * @method KeyquestionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method KeyquestionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method KeyquestionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Keyquestions findOne(PropelPDO $con = null) Return the first Keyquestions matching the query
 * @method Keyquestions findOneOrCreate(PropelPDO $con = null) Return the first Keyquestions matching the query, or a new Keyquestions object populated from the query conditions when no match is found
 *
 * @method Keyquestions findOneByAutoctr(int $autoctr) Return the first Keyquestions filtered by the autoctr column
 * @method Keyquestions findOneByKeycode(int $KeyCode) Return the first Keyquestions filtered by the KeyCode column
 * @method Keyquestions findOneByCouplenum(int $CoupleNum) Return the first Keyquestions filtered by the CoupleNum column
 * @method Keyquestions findOneByCouplepart(string $CouplePart) Return the first Keyquestions filtered by the CouplePart column
 * @method Keyquestions findOneByQuestion(string $Question) Return the first Keyquestions filtered by the Question column
 * @method Keyquestions findOneByNextcouple(int $NextCouple) Return the first Keyquestions filtered by the NextCouple column
 * @method Keyquestions findOneByPrevcouple(int $PrevCouple) Return the first Keyquestions filtered by the PrevCouple column
 * @method Keyquestions findOneByOrdnum(int $OrdNum) Return the first Keyquestions filtered by the OrdNum column
 * @method Keyquestions findOneByFamcode(int $FamCode) Return the first Keyquestions filtered by the FamCode column
 * @method Keyquestions findOneByGenus(string $Genus) Return the first Keyquestions filtered by the Genus column
 * @method Keyquestions findOneByGencode(int $Gencode) Return the first Keyquestions filtered by the Gencode column
 * @method Keyquestions findOneBySpeccode(int $SpecCode) Return the first Keyquestions filtered by the SpecCode column
 * @method Keyquestions findOneBySyncode(int $Syncode) Return the first Keyquestions filtered by the Syncode column
 * @method Keyquestions findOneByPicname(string $PicName) Return the first Keyquestions filtered by the PicName column
 * @method Keyquestions findOneByNextkey(int $NextKey) Return the first Keyquestions filtered by the NextKey column
 * @method Keyquestions findOneByDateentered(string $DateEntered) Return the first Keyquestions filtered by the DateEntered column
 * @method Keyquestions findOneByTs(string $TS) Return the first Keyquestions filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Keyquestions objects filtered by the autoctr column
 * @method array findByKeycode(int $KeyCode) Return Keyquestions objects filtered by the KeyCode column
 * @method array findByCouplenum(int $CoupleNum) Return Keyquestions objects filtered by the CoupleNum column
 * @method array findByCouplepart(string $CouplePart) Return Keyquestions objects filtered by the CouplePart column
 * @method array findByQuestion(string $Question) Return Keyquestions objects filtered by the Question column
 * @method array findByNextcouple(int $NextCouple) Return Keyquestions objects filtered by the NextCouple column
 * @method array findByPrevcouple(int $PrevCouple) Return Keyquestions objects filtered by the PrevCouple column
 * @method array findByOrdnum(int $OrdNum) Return Keyquestions objects filtered by the OrdNum column
 * @method array findByFamcode(int $FamCode) Return Keyquestions objects filtered by the FamCode column
 * @method array findByGenus(string $Genus) Return Keyquestions objects filtered by the Genus column
 * @method array findByGencode(int $Gencode) Return Keyquestions objects filtered by the Gencode column
 * @method array findBySpeccode(int $SpecCode) Return Keyquestions objects filtered by the SpecCode column
 * @method array findBySyncode(int $Syncode) Return Keyquestions objects filtered by the Syncode column
 * @method array findByPicname(string $PicName) Return Keyquestions objects filtered by the PicName column
 * @method array findByNextkey(int $NextKey) Return Keyquestions objects filtered by the NextKey column
 * @method array findByDateentered(string $DateEntered) Return Keyquestions objects filtered by the DateEntered column
 * @method array findByTs(string $TS) Return Keyquestions objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseKeyquestionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseKeyquestionsQuery object.
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
            $modelName = 'Keyquestions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new KeyquestionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   KeyquestionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return KeyquestionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof KeyquestionsQuery) {
            return $criteria;
        }
        $query = new KeyquestionsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$KeyCode, $CoupleNum, $CouplePart]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Keyquestions|Keyquestions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = KeyquestionsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Keyquestions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `KeyCode`, `CoupleNum`, `CouplePart`, `Question`, `NextCouple`, `PrevCouple`, `OrdNum`, `FamCode`, `Genus`, `Gencode`, `SpecCode`, `Syncode`, `PicName`, `NextKey`, `DateEntered`, `TS` FROM `keyquestions` WHERE `KeyCode` = :p0 AND `CoupleNum` = :p1 AND `CouplePart` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Keyquestions();
            $obj->hydrate($row);
            KeyquestionsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Keyquestions|Keyquestions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Keyquestions[]|mixed the list of results, formatted by the current formatter
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(KeyquestionsPeer::KEYCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(KeyquestionsPeer::COUPLENUM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(KeyquestionsPeer::COUPLEPART, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(KeyquestionsPeer::KEYCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(KeyquestionsPeer::COUPLENUM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(KeyquestionsPeer::COUPLEPART, $key[2], Criteria::EQUAL);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByKeycode($keycode = null, $comparison = null)
    {
        if (is_array($keycode)) {
            $useMinMax = false;
            if (isset($keycode['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::KEYCODE, $keycode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($keycode['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::KEYCODE, $keycode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::KEYCODE, $keycode, $comparison);
    }

    /**
     * Filter the query on the CoupleNum column
     *
     * Example usage:
     * <code>
     * $query->filterByCouplenum(1234); // WHERE CoupleNum = 1234
     * $query->filterByCouplenum(array(12, 34)); // WHERE CoupleNum IN (12, 34)
     * $query->filterByCouplenum(array('min' => 12)); // WHERE CoupleNum >= 12
     * $query->filterByCouplenum(array('max' => 12)); // WHERE CoupleNum <= 12
     * </code>
     *
     * @param     mixed $couplenum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByCouplenum($couplenum = null, $comparison = null)
    {
        if (is_array($couplenum)) {
            $useMinMax = false;
            if (isset($couplenum['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::COUPLENUM, $couplenum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($couplenum['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::COUPLENUM, $couplenum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::COUPLENUM, $couplenum, $comparison);
    }

    /**
     * Filter the query on the CouplePart column
     *
     * Example usage:
     * <code>
     * $query->filterByCouplepart('fooValue');   // WHERE CouplePart = 'fooValue'
     * $query->filterByCouplepart('%fooValue%'); // WHERE CouplePart LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couplepart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByCouplepart($couplepart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couplepart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couplepart)) {
                $couplepart = str_replace('*', '%', $couplepart);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::COUPLEPART, $couplepart, $comparison);
    }

    /**
     * Filter the query on the Question column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestion('fooValue');   // WHERE Question = 'fooValue'
     * $query->filterByQuestion('%fooValue%'); // WHERE Question LIKE '%fooValue%'
     * </code>
     *
     * @param     string $question The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByQuestion($question = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($question)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $question)) {
                $question = str_replace('*', '%', $question);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::QUESTION, $question, $comparison);
    }

    /**
     * Filter the query on the NextCouple column
     *
     * Example usage:
     * <code>
     * $query->filterByNextcouple(1234); // WHERE NextCouple = 1234
     * $query->filterByNextcouple(array(12, 34)); // WHERE NextCouple IN (12, 34)
     * $query->filterByNextcouple(array('min' => 12)); // WHERE NextCouple >= 12
     * $query->filterByNextcouple(array('max' => 12)); // WHERE NextCouple <= 12
     * </code>
     *
     * @param     mixed $nextcouple The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByNextcouple($nextcouple = null, $comparison = null)
    {
        if (is_array($nextcouple)) {
            $useMinMax = false;
            if (isset($nextcouple['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::NEXTCOUPLE, $nextcouple['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nextcouple['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::NEXTCOUPLE, $nextcouple['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::NEXTCOUPLE, $nextcouple, $comparison);
    }

    /**
     * Filter the query on the PrevCouple column
     *
     * Example usage:
     * <code>
     * $query->filterByPrevcouple(1234); // WHERE PrevCouple = 1234
     * $query->filterByPrevcouple(array(12, 34)); // WHERE PrevCouple IN (12, 34)
     * $query->filterByPrevcouple(array('min' => 12)); // WHERE PrevCouple >= 12
     * $query->filterByPrevcouple(array('max' => 12)); // WHERE PrevCouple <= 12
     * </code>
     *
     * @param     mixed $prevcouple The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByPrevcouple($prevcouple = null, $comparison = null)
    {
        if (is_array($prevcouple)) {
            $useMinMax = false;
            if (isset($prevcouple['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::PREVCOUPLE, $prevcouple['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prevcouple['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::PREVCOUPLE, $prevcouple['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::PREVCOUPLE, $prevcouple, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::ORDNUM, $ordnum, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::FAMCODE, $famcode, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(KeyquestionsPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Gencode column
     *
     * Example usage:
     * <code>
     * $query->filterByGencode(1234); // WHERE Gencode = 1234
     * $query->filterByGencode(array(12, 34)); // WHERE Gencode IN (12, 34)
     * $query->filterByGencode(array('min' => 12)); // WHERE Gencode >= 12
     * $query->filterByGencode(array('max' => 12)); // WHERE Gencode <= 12
     * </code>
     *
     * @param     mixed $gencode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByGencode($gencode = null, $comparison = null)
    {
        if (is_array($gencode)) {
            $useMinMax = false;
            if (isset($gencode['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::GENCODE, $gencode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gencode['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::GENCODE, $gencode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::GENCODE, $gencode, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Syncode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE Syncode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE Syncode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE Syncode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE Syncode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the PicName column
     *
     * Example usage:
     * <code>
     * $query->filterByPicname('fooValue');   // WHERE PicName = 'fooValue'
     * $query->filterByPicname('%fooValue%'); // WHERE PicName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByPicname($picname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picname)) {
                $picname = str_replace('*', '%', $picname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the NextKey column
     *
     * Example usage:
     * <code>
     * $query->filterByNextkey(1234); // WHERE NextKey = 1234
     * $query->filterByNextkey(array(12, 34)); // WHERE NextKey IN (12, 34)
     * $query->filterByNextkey(array('min' => 12)); // WHERE NextKey >= 12
     * $query->filterByNextkey(array('max' => 12)); // WHERE NextKey <= 12
     * </code>
     *
     * @param     mixed $nextkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByNextkey($nextkey = null, $comparison = null)
    {
        if (is_array($nextkey)) {
            $useMinMax = false;
            if (isset($nextkey['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::NEXTKEY, $nextkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nextkey['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::NEXTKEY, $nextkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::NEXTKEY, $nextkey, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(KeyquestionsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(KeyquestionsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeyquestionsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Keyquestions $keyquestions Object to remove from the list of results
     *
     * @return KeyquestionsQuery The current query, for fluid interface
     */
    public function prune($keyquestions = null)
    {
        if ($keyquestions) {
            $this->addCond('pruneCond0', $this->getAliasedColName(KeyquestionsPeer::KEYCODE), $keyquestions->getKeycode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(KeyquestionsPeer::COUPLENUM), $keyquestions->getCouplenum(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(KeyquestionsPeer::COUPLEPART), $keyquestions->getCouplepart(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
