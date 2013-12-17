<?php


/**
 * Base class that represents a query for the 'languagescript' table.
 *
 *
 *
 * @method LanguagescriptQuery orderByScriptcode($order = Criteria::ASC) Order by the ScriptCode column
 * @method LanguagescriptQuery orderByScriptname($order = Criteria::ASC) Order by the ScriptName column
 * @method LanguagescriptQuery orderByActualscript($order = Criteria::ASC) Order by the ActualScript column
 * @method LanguagescriptQuery orderByUnicodetext($order = Criteria::ASC) Order by the UnicodeText column
 * @method LanguagescriptQuery orderByLangcode($order = Criteria::ASC) Order by the LangCode column
 * @method LanguagescriptQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LanguagescriptQuery orderByScriptref($order = Criteria::ASC) Order by the ScriptRef column
 * @method LanguagescriptQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method LanguagescriptQuery orderByUsed($order = Criteria::ASC) Order by the Used column
 * @method LanguagescriptQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LanguagescriptQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LanguagescriptQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LanguagescriptQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LanguagescriptQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LanguagescriptQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LanguagescriptQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LanguagescriptQuery groupByScriptcode() Group by the ScriptCode column
 * @method LanguagescriptQuery groupByScriptname() Group by the ScriptName column
 * @method LanguagescriptQuery groupByActualscript() Group by the ActualScript column
 * @method LanguagescriptQuery groupByUnicodetext() Group by the UnicodeText column
 * @method LanguagescriptQuery groupByLangcode() Group by the LangCode column
 * @method LanguagescriptQuery groupByCCode() Group by the C_Code column
 * @method LanguagescriptQuery groupByScriptref() Group by the ScriptRef column
 * @method LanguagescriptQuery groupByRemarks() Group by the Remarks column
 * @method LanguagescriptQuery groupByUsed() Group by the Used column
 * @method LanguagescriptQuery groupByEntered() Group by the Entered column
 * @method LanguagescriptQuery groupByDateentered() Group by the DateEntered column
 * @method LanguagescriptQuery groupByModified() Group by the Modified column
 * @method LanguagescriptQuery groupByDatemodified() Group by the DateModified column
 * @method LanguagescriptQuery groupByExpert() Group by the Expert column
 * @method LanguagescriptQuery groupByDatechecked() Group by the DateChecked column
 * @method LanguagescriptQuery groupByTs() Group by the TS column
 *
 * @method LanguagescriptQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LanguagescriptQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LanguagescriptQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Languagescript findOne(PropelPDO $con = null) Return the first Languagescript matching the query
 * @method Languagescript findOneOrCreate(PropelPDO $con = null) Return the first Languagescript matching the query, or a new Languagescript object populated from the query conditions when no match is found
 *
 * @method Languagescript findOneByScriptcode(int $ScriptCode) Return the first Languagescript filtered by the ScriptCode column
 * @method Languagescript findOneByActualscript(resource $ActualScript) Return the first Languagescript filtered by the ActualScript column
 * @method Languagescript findOneByUnicodetext(string $UnicodeText) Return the first Languagescript filtered by the UnicodeText column
 * @method Languagescript findOneByLangcode(int $LangCode) Return the first Languagescript filtered by the LangCode column
 * @method Languagescript findOneByCCode(string $C_Code) Return the first Languagescript filtered by the C_Code column
 * @method Languagescript findOneByScriptref(int $ScriptRef) Return the first Languagescript filtered by the ScriptRef column
 * @method Languagescript findOneByRemarks(string $Remarks) Return the first Languagescript filtered by the Remarks column
 * @method Languagescript findOneByUsed(int $Used) Return the first Languagescript filtered by the Used column
 * @method Languagescript findOneByEntered(int $Entered) Return the first Languagescript filtered by the Entered column
 * @method Languagescript findOneByDateentered(string $DateEntered) Return the first Languagescript filtered by the DateEntered column
 * @method Languagescript findOneByModified(int $Modified) Return the first Languagescript filtered by the Modified column
 * @method Languagescript findOneByDatemodified(string $DateModified) Return the first Languagescript filtered by the DateModified column
 * @method Languagescript findOneByExpert(int $Expert) Return the first Languagescript filtered by the Expert column
 * @method Languagescript findOneByDatechecked(string $DateChecked) Return the first Languagescript filtered by the DateChecked column
 * @method Languagescript findOneByTs(string $TS) Return the first Languagescript filtered by the TS column
 *
 * @method array findByScriptcode(int $ScriptCode) Return Languagescript objects filtered by the ScriptCode column
 * @method array findByScriptname(string $ScriptName) Return Languagescript objects filtered by the ScriptName column
 * @method array findByActualscript(resource $ActualScript) Return Languagescript objects filtered by the ActualScript column
 * @method array findByUnicodetext(string $UnicodeText) Return Languagescript objects filtered by the UnicodeText column
 * @method array findByLangcode(int $LangCode) Return Languagescript objects filtered by the LangCode column
 * @method array findByCCode(string $C_Code) Return Languagescript objects filtered by the C_Code column
 * @method array findByScriptref(int $ScriptRef) Return Languagescript objects filtered by the ScriptRef column
 * @method array findByRemarks(string $Remarks) Return Languagescript objects filtered by the Remarks column
 * @method array findByUsed(int $Used) Return Languagescript objects filtered by the Used column
 * @method array findByEntered(int $Entered) Return Languagescript objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Languagescript objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Languagescript objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Languagescript objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Languagescript objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Languagescript objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Languagescript objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguagescriptQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLanguagescriptQuery object.
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
            $modelName = 'Languagescript';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguagescriptQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LanguagescriptQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LanguagescriptQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguagescriptQuery) {
            return $criteria;
        }
        $query = new LanguagescriptQuery(null, null, $modelAlias);

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
     * @return   Languagescript|Languagescript[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LanguagescriptPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Languagescript A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByScriptname($key, $con = null)
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
     * @return                 Languagescript A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ScriptCode`, `ScriptName`, `ActualScript`, `UnicodeText`, `LangCode`, `C_Code`, `ScriptRef`, `Remarks`, `Used`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `languagescript` WHERE `ScriptName` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Languagescript();
            $obj->hydrate($row);
            LanguagescriptPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Languagescript|Languagescript[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Languagescript[]|mixed the list of results, formatted by the current formatter
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LanguagescriptPeer::SCRIPTNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LanguagescriptPeer::SCRIPTNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ScriptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByScriptcode(1234); // WHERE ScriptCode = 1234
     * $query->filterByScriptcode(array(12, 34)); // WHERE ScriptCode IN (12, 34)
     * $query->filterByScriptcode(array('min' => 12)); // WHERE ScriptCode >= 12
     * $query->filterByScriptcode(array('max' => 12)); // WHERE ScriptCode <= 12
     * </code>
     *
     * @param     mixed $scriptcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByScriptcode($scriptcode = null, $comparison = null)
    {
        if (is_array($scriptcode)) {
            $useMinMax = false;
            if (isset($scriptcode['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::SCRIPTCODE, $scriptcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scriptcode['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::SCRIPTCODE, $scriptcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::SCRIPTCODE, $scriptcode, $comparison);
    }

    /**
     * Filter the query on the ScriptName column
     *
     * Example usage:
     * <code>
     * $query->filterByScriptname('fooValue');   // WHERE ScriptName = 'fooValue'
     * $query->filterByScriptname('%fooValue%'); // WHERE ScriptName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scriptname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByScriptname($scriptname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scriptname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scriptname)) {
                $scriptname = str_replace('*', '%', $scriptname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::SCRIPTNAME, $scriptname, $comparison);
    }

    /**
     * Filter the query on the ActualScript column
     *
     * @param     mixed $actualscript The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByActualscript($actualscript = null, $comparison = null)
    {

        return $this->addUsingAlias(LanguagescriptPeer::ACTUALSCRIPT, $actualscript, $comparison);
    }

    /**
     * Filter the query on the UnicodeText column
     *
     * Example usage:
     * <code>
     * $query->filterByUnicodetext('fooValue');   // WHERE UnicodeText = 'fooValue'
     * $query->filterByUnicodetext('%fooValue%'); // WHERE UnicodeText LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unicodetext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByUnicodetext($unicodetext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unicodetext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unicodetext)) {
                $unicodetext = str_replace('*', '%', $unicodetext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::UNICODETEXT, $unicodetext, $comparison);
    }

    /**
     * Filter the query on the LangCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLangcode(1234); // WHERE LangCode = 1234
     * $query->filterByLangcode(array(12, 34)); // WHERE LangCode IN (12, 34)
     * $query->filterByLangcode(array('min' => 12)); // WHERE LangCode >= 12
     * $query->filterByLangcode(array('max' => 12)); // WHERE LangCode <= 12
     * </code>
     *
     * @param     mixed $langcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByLangcode($langcode = null, $comparison = null)
    {
        if (is_array($langcode)) {
            $useMinMax = false;
            if (isset($langcode['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::LANGCODE, $langcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langcode['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::LANGCODE, $langcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::LANGCODE, $langcode, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagescriptPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the ScriptRef column
     *
     * Example usage:
     * <code>
     * $query->filterByScriptref(1234); // WHERE ScriptRef = 1234
     * $query->filterByScriptref(array(12, 34)); // WHERE ScriptRef IN (12, 34)
     * $query->filterByScriptref(array('min' => 12)); // WHERE ScriptRef >= 12
     * $query->filterByScriptref(array('max' => 12)); // WHERE ScriptRef <= 12
     * </code>
     *
     * @param     mixed $scriptref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByScriptref($scriptref = null, $comparison = null)
    {
        if (is_array($scriptref)) {
            $useMinMax = false;
            if (isset($scriptref['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::SCRIPTREF, $scriptref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scriptref['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::SCRIPTREF, $scriptref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::SCRIPTREF, $scriptref, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagescriptPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the Used column
     *
     * Example usage:
     * <code>
     * $query->filterByUsed(1234); // WHERE Used = 1234
     * $query->filterByUsed(array(12, 34)); // WHERE Used IN (12, 34)
     * $query->filterByUsed(array('min' => 12)); // WHERE Used >= 12
     * $query->filterByUsed(array('max' => 12)); // WHERE Used <= 12
     * </code>
     *
     * @param     mixed $used The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (is_array($used)) {
            $useMinMax = false;
            if (isset($used['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::USED, $used['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($used['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::USED, $used['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::USED, $used, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::ENTERED, $entered, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::MODIFIED, $modified, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::EXPERT, $expert, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LanguagescriptPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LanguagescriptPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Languagescript $languagescript Object to remove from the list of results
     *
     * @return LanguagescriptQuery The current query, for fluid interface
     */
    public function prune($languagescript = null)
    {
        if ($languagescript) {
            $this->addUsingAlias(LanguagescriptPeer::SCRIPTNAME, $languagescript->getScriptname(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
