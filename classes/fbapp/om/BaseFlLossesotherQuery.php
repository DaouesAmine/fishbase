<?php


/**
 * Base class that represents a query for the 'fl_lossesother' table.
 *
 *
 *
 * @method FlLossesotherQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlLossesotherQuery orderByOpreviousprocess($order = Criteria::ASC) Order by the OPreviousProcess column
 * @method FlLossesotherQuery orderByOprevioustreatment($order = Criteria::ASC) Order by the OPreviousTreatment column
 * @method FlLossesotherQuery orderByOendusebestquality($order = Criteria::ASC) Order by the OEndUseBestQuality column
 * @method FlLossesotherQuery orderByOenduselowerquality($order = Criteria::ASC) Order by the OEndUseLowerQuality column
 * @method FlLossesotherQuery orderByOreasonforloss($order = Criteria::ASC) Order by the OReasonForLoss column
 * @method FlLossesotherQuery orderByOinsecttype($order = Criteria::ASC) Order by the OInsectType column
 * @method FlLossesotherQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlLossesotherQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlLossesotherQuery groupByLosscode() Group by the LossCode column
 * @method FlLossesotherQuery groupByOpreviousprocess() Group by the OPreviousProcess column
 * @method FlLossesotherQuery groupByOprevioustreatment() Group by the OPreviousTreatment column
 * @method FlLossesotherQuery groupByOendusebestquality() Group by the OEndUseBestQuality column
 * @method FlLossesotherQuery groupByOenduselowerquality() Group by the OEndUseLowerQuality column
 * @method FlLossesotherQuery groupByOreasonforloss() Group by the OReasonForLoss column
 * @method FlLossesotherQuery groupByOinsecttype() Group by the OInsectType column
 * @method FlLossesotherQuery groupByEditable() Group by the Editable column
 * @method FlLossesotherQuery groupByTs() Group by the TS column
 *
 * @method FlLossesotherQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlLossesotherQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlLossesotherQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlLossesother findOne(PropelPDO $con = null) Return the first FlLossesother matching the query
 * @method FlLossesother findOneOrCreate(PropelPDO $con = null) Return the first FlLossesother matching the query, or a new FlLossesother object populated from the query conditions when no match is found
 *
 * @method FlLossesother findOneByOpreviousprocess(string $OPreviousProcess) Return the first FlLossesother filtered by the OPreviousProcess column
 * @method FlLossesother findOneByOprevioustreatment(string $OPreviousTreatment) Return the first FlLossesother filtered by the OPreviousTreatment column
 * @method FlLossesother findOneByOendusebestquality(string $OEndUseBestQuality) Return the first FlLossesother filtered by the OEndUseBestQuality column
 * @method FlLossesother findOneByOenduselowerquality(string $OEndUseLowerQuality) Return the first FlLossesother filtered by the OEndUseLowerQuality column
 * @method FlLossesother findOneByOreasonforloss(string $OReasonForLoss) Return the first FlLossesother filtered by the OReasonForLoss column
 * @method FlLossesother findOneByOinsecttype(string $OInsectType) Return the first FlLossesother filtered by the OInsectType column
 * @method FlLossesother findOneByEditable(string $Editable) Return the first FlLossesother filtered by the Editable column
 * @method FlLossesother findOneByTs(string $TS) Return the first FlLossesother filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlLossesother objects filtered by the LossCode column
 * @method array findByOpreviousprocess(string $OPreviousProcess) Return FlLossesother objects filtered by the OPreviousProcess column
 * @method array findByOprevioustreatment(string $OPreviousTreatment) Return FlLossesother objects filtered by the OPreviousTreatment column
 * @method array findByOendusebestquality(string $OEndUseBestQuality) Return FlLossesother objects filtered by the OEndUseBestQuality column
 * @method array findByOenduselowerquality(string $OEndUseLowerQuality) Return FlLossesother objects filtered by the OEndUseLowerQuality column
 * @method array findByOreasonforloss(string $OReasonForLoss) Return FlLossesother objects filtered by the OReasonForLoss column
 * @method array findByOinsecttype(string $OInsectType) Return FlLossesother objects filtered by the OInsectType column
 * @method array findByEditable(string $Editable) Return FlLossesother objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlLossesother objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLossesotherQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlLossesotherQuery object.
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
            $modelName = 'FlLossesother';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlLossesotherQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlLossesotherQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlLossesotherQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlLossesotherQuery) {
            return $criteria;
        }
        $query = new FlLossesotherQuery(null, null, $modelAlias);

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
     * @return   FlLossesother|FlLossesother[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlLossesotherPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlLossesotherPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlLossesother A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLosscode($key, $con = null)
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
     * @return                 FlLossesother A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `OPreviousProcess`, `OPreviousTreatment`, `OEndUseBestQuality`, `OEndUseLowerQuality`, `OReasonForLoss`, `OInsectType`, `Editable`, `TS` FROM `fl_lossesother` WHERE `LossCode` = :p0';
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
            $obj = new FlLossesother();
            $obj->hydrate($row);
            FlLossesotherPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlLossesother|FlLossesother[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlLossesother[]|mixed the list of results, formatted by the current formatter
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
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LossCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLosscode(1234); // WHERE LossCode = 1234
     * $query->filterByLosscode(array(12, 34)); // WHERE LossCode IN (12, 34)
     * $query->filterByLosscode(array('min' => 12)); // WHERE LossCode >= 12
     * $query->filterByLosscode(array('max' => 12)); // WHERE LossCode <= 12
     * </code>
     *
     * @param     mixed $losscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the OPreviousProcess column
     *
     * Example usage:
     * <code>
     * $query->filterByOpreviousprocess('fooValue');   // WHERE OPreviousProcess = 'fooValue'
     * $query->filterByOpreviousprocess('%fooValue%'); // WHERE OPreviousProcess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opreviousprocess The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOpreviousprocess($opreviousprocess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opreviousprocess)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opreviousprocess)) {
                $opreviousprocess = str_replace('*', '%', $opreviousprocess);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OPREVIOUSPROCESS, $opreviousprocess, $comparison);
    }

    /**
     * Filter the query on the OPreviousTreatment column
     *
     * Example usage:
     * <code>
     * $query->filterByOprevioustreatment('fooValue');   // WHERE OPreviousTreatment = 'fooValue'
     * $query->filterByOprevioustreatment('%fooValue%'); // WHERE OPreviousTreatment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oprevioustreatment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOprevioustreatment($oprevioustreatment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oprevioustreatment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oprevioustreatment)) {
                $oprevioustreatment = str_replace('*', '%', $oprevioustreatment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OPREVIOUSTREATMENT, $oprevioustreatment, $comparison);
    }

    /**
     * Filter the query on the OEndUseBestQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByOendusebestquality('fooValue');   // WHERE OEndUseBestQuality = 'fooValue'
     * $query->filterByOendusebestquality('%fooValue%'); // WHERE OEndUseBestQuality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oendusebestquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOendusebestquality($oendusebestquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oendusebestquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oendusebestquality)) {
                $oendusebestquality = str_replace('*', '%', $oendusebestquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OENDUSEBESTQUALITY, $oendusebestquality, $comparison);
    }

    /**
     * Filter the query on the OEndUseLowerQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByOenduselowerquality('fooValue');   // WHERE OEndUseLowerQuality = 'fooValue'
     * $query->filterByOenduselowerquality('%fooValue%'); // WHERE OEndUseLowerQuality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oenduselowerquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOenduselowerquality($oenduselowerquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oenduselowerquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oenduselowerquality)) {
                $oenduselowerquality = str_replace('*', '%', $oenduselowerquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OENDUSELOWERQUALITY, $oenduselowerquality, $comparison);
    }

    /**
     * Filter the query on the OReasonForLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByOreasonforloss('fooValue');   // WHERE OReasonForLoss = 'fooValue'
     * $query->filterByOreasonforloss('%fooValue%'); // WHERE OReasonForLoss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oreasonforloss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOreasonforloss($oreasonforloss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oreasonforloss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oreasonforloss)) {
                $oreasonforloss = str_replace('*', '%', $oreasonforloss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OREASONFORLOSS, $oreasonforloss, $comparison);
    }

    /**
     * Filter the query on the OInsectType column
     *
     * Example usage:
     * <code>
     * $query->filterByOinsecttype('fooValue');   // WHERE OInsectType = 'fooValue'
     * $query->filterByOinsecttype('%fooValue%'); // WHERE OInsectType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oinsecttype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByOinsecttype($oinsecttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oinsecttype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oinsecttype)) {
                $oinsecttype = str_replace('*', '%', $oinsecttype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::OINSECTTYPE, $oinsecttype, $comparison);
    }

    /**
     * Filter the query on the Editable column
     *
     * Example usage:
     * <code>
     * $query->filterByEditable('fooValue');   // WHERE Editable = 'fooValue'
     * $query->filterByEditable('%fooValue%'); // WHERE Editable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByEditable($editable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editable)) {
                $editable = str_replace('*', '%', $editable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::EDITABLE, $editable, $comparison);
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
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlLossesotherPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlLossesotherPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesotherPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlLossesother $flLossesother Object to remove from the list of results
     *
     * @return FlLossesotherQuery The current query, for fluid interface
     */
    public function prune($flLossesother = null)
    {
        if ($flLossesother) {
            $this->addUsingAlias(FlLossesotherPeer::LOSSCODE, $flLossesother->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
