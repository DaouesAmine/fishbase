<?php


/**
 * Base class that represents a query for the 'language' table.
 *
 *
 *
 * @method LanguageQuery orderByLangcode($order = Criteria::ASC) Order by the LangCode column
 * @method LanguageQuery orderByLanguagename($order = Criteria::ASC) Order by the LanguageName column
 * @method LanguageQuery orderByAlternatename($order = Criteria::ASC) Order by the AlternateName column
 * @method LanguageQuery orderByFirstlanguagespeakers($order = Criteria::ASC) Order by the FirstLanguageSpeakers column
 * @method LanguageQuery orderByLanggroupcode($order = Criteria::ASC) Order by the LangGroupCode column
 * @method LanguageQuery orderByLanguagesubgroup($order = Criteria::ASC) Order by the LanguageSubgroup column
 * @method LanguageQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LanguageQuery orderByLanguageref($order = Criteria::ASC) Order by the LanguageRef column
 * @method LanguageQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method LanguageQuery orderBySecondlanguagespeakers($order = Criteria::ASC) Order by the SecondLanguageSpeakers column
 * @method LanguageQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method LanguageQuery orderByUsed($order = Criteria::ASC) Order by the Used column
 * @method LanguageQuery orderByNamescount($order = Criteria::ASC) Order by the NamesCount column
 * @method LanguageQuery orderBySpeciescount($order = Criteria::ASC) Order by the SpeciesCount column
 * @method LanguageQuery orderByFamiliescount($order = Criteria::ASC) Order by the FamiliesCount column
 * @method LanguageQuery orderByNamescountSlb($order = Criteria::ASC) Order by the NamesCount_SLB column
 * @method LanguageQuery orderBySpeciescountSlb($order = Criteria::ASC) Order by the SpeciesCount_SLB column
 * @method LanguageQuery orderByFamiliescountSlb($order = Criteria::ASC) Order by the FamiliesCount_SLB column
 * @method LanguageQuery orderByLastupdate($order = Criteria::ASC) Order by the LastUpdate column
 * @method LanguageQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LanguageQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LanguageQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LanguageQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LanguageQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LanguageQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LanguageQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LanguageQuery groupByLangcode() Group by the LangCode column
 * @method LanguageQuery groupByLanguagename() Group by the LanguageName column
 * @method LanguageQuery groupByAlternatename() Group by the AlternateName column
 * @method LanguageQuery groupByFirstlanguagespeakers() Group by the FirstLanguageSpeakers column
 * @method LanguageQuery groupByLanggroupcode() Group by the LangGroupCode column
 * @method LanguageQuery groupByLanguagesubgroup() Group by the LanguageSubgroup column
 * @method LanguageQuery groupByCCode() Group by the C_Code column
 * @method LanguageQuery groupByLanguageref() Group by the LanguageRef column
 * @method LanguageQuery groupByRemarks() Group by the Remarks column
 * @method LanguageQuery groupBySecondlanguagespeakers() Group by the SecondLanguageSpeakers column
 * @method LanguageQuery groupByUrl() Group by the URL column
 * @method LanguageQuery groupByUsed() Group by the Used column
 * @method LanguageQuery groupByNamescount() Group by the NamesCount column
 * @method LanguageQuery groupBySpeciescount() Group by the SpeciesCount column
 * @method LanguageQuery groupByFamiliescount() Group by the FamiliesCount column
 * @method LanguageQuery groupByNamescountSlb() Group by the NamesCount_SLB column
 * @method LanguageQuery groupBySpeciescountSlb() Group by the SpeciesCount_SLB column
 * @method LanguageQuery groupByFamiliescountSlb() Group by the FamiliesCount_SLB column
 * @method LanguageQuery groupByLastupdate() Group by the LastUpdate column
 * @method LanguageQuery groupByEntered() Group by the Entered column
 * @method LanguageQuery groupByDateentered() Group by the DateEntered column
 * @method LanguageQuery groupByModified() Group by the Modified column
 * @method LanguageQuery groupByDatemodified() Group by the DateModified column
 * @method LanguageQuery groupByExpert() Group by the Expert column
 * @method LanguageQuery groupByDatechecked() Group by the DateChecked column
 * @method LanguageQuery groupByTs() Group by the TS column
 *
 * @method LanguageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LanguageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LanguageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Language findOne(PropelPDO $con = null) Return the first Language matching the query
 * @method Language findOneOrCreate(PropelPDO $con = null) Return the first Language matching the query, or a new Language object populated from the query conditions when no match is found
 *
 * @method Language findOneByLangcode(int $LangCode) Return the first Language filtered by the LangCode column
 * @method Language findOneByAlternatename(string $AlternateName) Return the first Language filtered by the AlternateName column
 * @method Language findOneByFirstlanguagespeakers(double $FirstLanguageSpeakers) Return the first Language filtered by the FirstLanguageSpeakers column
 * @method Language findOneByLanggroupcode(int $LangGroupCode) Return the first Language filtered by the LangGroupCode column
 * @method Language findOneByLanguagesubgroup(string $LanguageSubgroup) Return the first Language filtered by the LanguageSubgroup column
 * @method Language findOneByCCode(string $C_Code) Return the first Language filtered by the C_Code column
 * @method Language findOneByLanguageref(int $LanguageRef) Return the first Language filtered by the LanguageRef column
 * @method Language findOneByRemarks(string $Remarks) Return the first Language filtered by the Remarks column
 * @method Language findOneBySecondlanguagespeakers(double $SecondLanguageSpeakers) Return the first Language filtered by the SecondLanguageSpeakers column
 * @method Language findOneByUrl(string $URL) Return the first Language filtered by the URL column
 * @method Language findOneByUsed(int $Used) Return the first Language filtered by the Used column
 * @method Language findOneByNamescount(int $NamesCount) Return the first Language filtered by the NamesCount column
 * @method Language findOneBySpeciescount(int $SpeciesCount) Return the first Language filtered by the SpeciesCount column
 * @method Language findOneByFamiliescount(int $FamiliesCount) Return the first Language filtered by the FamiliesCount column
 * @method Language findOneByNamescountSlb(int $NamesCount_SLB) Return the first Language filtered by the NamesCount_SLB column
 * @method Language findOneBySpeciescountSlb(int $SpeciesCount_SLB) Return the first Language filtered by the SpeciesCount_SLB column
 * @method Language findOneByFamiliescountSlb(int $FamiliesCount_SLB) Return the first Language filtered by the FamiliesCount_SLB column
 * @method Language findOneByLastupdate(string $LastUpdate) Return the first Language filtered by the LastUpdate column
 * @method Language findOneByEntered(int $Entered) Return the first Language filtered by the Entered column
 * @method Language findOneByDateentered(string $DateEntered) Return the first Language filtered by the DateEntered column
 * @method Language findOneByModified(int $Modified) Return the first Language filtered by the Modified column
 * @method Language findOneByDatemodified(string $DateModified) Return the first Language filtered by the DateModified column
 * @method Language findOneByExpert(int $Expert) Return the first Language filtered by the Expert column
 * @method Language findOneByDatechecked(string $DateChecked) Return the first Language filtered by the DateChecked column
 * @method Language findOneByTs(string $TS) Return the first Language filtered by the TS column
 *
 * @method array findByLangcode(int $LangCode) Return Language objects filtered by the LangCode column
 * @method array findByLanguagename(string $LanguageName) Return Language objects filtered by the LanguageName column
 * @method array findByAlternatename(string $AlternateName) Return Language objects filtered by the AlternateName column
 * @method array findByFirstlanguagespeakers(double $FirstLanguageSpeakers) Return Language objects filtered by the FirstLanguageSpeakers column
 * @method array findByLanggroupcode(int $LangGroupCode) Return Language objects filtered by the LangGroupCode column
 * @method array findByLanguagesubgroup(string $LanguageSubgroup) Return Language objects filtered by the LanguageSubgroup column
 * @method array findByCCode(string $C_Code) Return Language objects filtered by the C_Code column
 * @method array findByLanguageref(int $LanguageRef) Return Language objects filtered by the LanguageRef column
 * @method array findByRemarks(string $Remarks) Return Language objects filtered by the Remarks column
 * @method array findBySecondlanguagespeakers(double $SecondLanguageSpeakers) Return Language objects filtered by the SecondLanguageSpeakers column
 * @method array findByUrl(string $URL) Return Language objects filtered by the URL column
 * @method array findByUsed(int $Used) Return Language objects filtered by the Used column
 * @method array findByNamescount(int $NamesCount) Return Language objects filtered by the NamesCount column
 * @method array findBySpeciescount(int $SpeciesCount) Return Language objects filtered by the SpeciesCount column
 * @method array findByFamiliescount(int $FamiliesCount) Return Language objects filtered by the FamiliesCount column
 * @method array findByNamescountSlb(int $NamesCount_SLB) Return Language objects filtered by the NamesCount_SLB column
 * @method array findBySpeciescountSlb(int $SpeciesCount_SLB) Return Language objects filtered by the SpeciesCount_SLB column
 * @method array findByFamiliescountSlb(int $FamiliesCount_SLB) Return Language objects filtered by the FamiliesCount_SLB column
 * @method array findByLastupdate(string $LastUpdate) Return Language objects filtered by the LastUpdate column
 * @method array findByEntered(int $Entered) Return Language objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Language objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Language objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Language objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Language objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Language objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Language objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLanguageQuery object.
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
            $modelName = 'Language';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LanguageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LanguageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguageQuery) {
            return $criteria;
        }
        $query = new LanguageQuery(null, null, $modelAlias);

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
     * @return   Language|Language[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LanguagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Language A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLanguagename($key, $con = null)
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
     * @return                 Language A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LangCode`, `LanguageName`, `AlternateName`, `FirstLanguageSpeakers`, `LangGroupCode`, `LanguageSubgroup`, `C_Code`, `LanguageRef`, `Remarks`, `SecondLanguageSpeakers`, `URL`, `Used`, `NamesCount`, `SpeciesCount`, `FamiliesCount`, `NamesCount_SLB`, `SpeciesCount_SLB`, `FamiliesCount_SLB`, `LastUpdate`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `language` WHERE `LanguageName` = :p0';
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
            $obj = new Language();
            $obj->hydrate($row);
            LanguagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Language|Language[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Language[]|mixed the list of results, formatted by the current formatter
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LanguagePeer::LANGUAGENAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LanguagePeer::LANGUAGENAME, $keys, Criteria::IN);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLangcode($langcode = null, $comparison = null)
    {
        if (is_array($langcode)) {
            $useMinMax = false;
            if (isset($langcode['min'])) {
                $this->addUsingAlias(LanguagePeer::LANGCODE, $langcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langcode['max'])) {
                $this->addUsingAlias(LanguagePeer::LANGCODE, $langcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LANGCODE, $langcode, $comparison);
    }

    /**
     * Filter the query on the LanguageName column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagename('fooValue');   // WHERE LanguageName = 'fooValue'
     * $query->filterByLanguagename('%fooValue%'); // WHERE LanguageName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLanguagename($languagename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagename)) {
                $languagename = str_replace('*', '%', $languagename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LANGUAGENAME, $languagename, $comparison);
    }

    /**
     * Filter the query on the AlternateName column
     *
     * Example usage:
     * <code>
     * $query->filterByAlternatename('fooValue');   // WHERE AlternateName = 'fooValue'
     * $query->filterByAlternatename('%fooValue%'); // WHERE AlternateName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alternatename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByAlternatename($alternatename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alternatename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alternatename)) {
                $alternatename = str_replace('*', '%', $alternatename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagePeer::ALTERNATENAME, $alternatename, $comparison);
    }

    /**
     * Filter the query on the FirstLanguageSpeakers column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstlanguagespeakers(1234); // WHERE FirstLanguageSpeakers = 1234
     * $query->filterByFirstlanguagespeakers(array(12, 34)); // WHERE FirstLanguageSpeakers IN (12, 34)
     * $query->filterByFirstlanguagespeakers(array('min' => 12)); // WHERE FirstLanguageSpeakers >= 12
     * $query->filterByFirstlanguagespeakers(array('max' => 12)); // WHERE FirstLanguageSpeakers <= 12
     * </code>
     *
     * @param     mixed $firstlanguagespeakers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByFirstlanguagespeakers($firstlanguagespeakers = null, $comparison = null)
    {
        if (is_array($firstlanguagespeakers)) {
            $useMinMax = false;
            if (isset($firstlanguagespeakers['min'])) {
                $this->addUsingAlias(LanguagePeer::FIRSTLANGUAGESPEAKERS, $firstlanguagespeakers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstlanguagespeakers['max'])) {
                $this->addUsingAlias(LanguagePeer::FIRSTLANGUAGESPEAKERS, $firstlanguagespeakers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::FIRSTLANGUAGESPEAKERS, $firstlanguagespeakers, $comparison);
    }

    /**
     * Filter the query on the LangGroupCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLanggroupcode(1234); // WHERE LangGroupCode = 1234
     * $query->filterByLanggroupcode(array(12, 34)); // WHERE LangGroupCode IN (12, 34)
     * $query->filterByLanggroupcode(array('min' => 12)); // WHERE LangGroupCode >= 12
     * $query->filterByLanggroupcode(array('max' => 12)); // WHERE LangGroupCode <= 12
     * </code>
     *
     * @param     mixed $langgroupcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLanggroupcode($langgroupcode = null, $comparison = null)
    {
        if (is_array($langgroupcode)) {
            $useMinMax = false;
            if (isset($langgroupcode['min'])) {
                $this->addUsingAlias(LanguagePeer::LANGGROUPCODE, $langgroupcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langgroupcode['max'])) {
                $this->addUsingAlias(LanguagePeer::LANGGROUPCODE, $langgroupcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LANGGROUPCODE, $langgroupcode, $comparison);
    }

    /**
     * Filter the query on the LanguageSubgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagesubgroup('fooValue');   // WHERE LanguageSubgroup = 'fooValue'
     * $query->filterByLanguagesubgroup('%fooValue%'); // WHERE LanguageSubgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagesubgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLanguagesubgroup($languagesubgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagesubgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagesubgroup)) {
                $languagesubgroup = str_replace('*', '%', $languagesubgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LANGUAGESUBGROUP, $languagesubgroup, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagePeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the LanguageRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguageref(1234); // WHERE LanguageRef = 1234
     * $query->filterByLanguageref(array(12, 34)); // WHERE LanguageRef IN (12, 34)
     * $query->filterByLanguageref(array('min' => 12)); // WHERE LanguageRef >= 12
     * $query->filterByLanguageref(array('max' => 12)); // WHERE LanguageRef <= 12
     * </code>
     *
     * @param     mixed $languageref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLanguageref($languageref = null, $comparison = null)
    {
        if (is_array($languageref)) {
            $useMinMax = false;
            if (isset($languageref['min'])) {
                $this->addUsingAlias(LanguagePeer::LANGUAGEREF, $languageref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($languageref['max'])) {
                $this->addUsingAlias(LanguagePeer::LANGUAGEREF, $languageref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LANGUAGEREF, $languageref, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagePeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the SecondLanguageSpeakers column
     *
     * Example usage:
     * <code>
     * $query->filterBySecondlanguagespeakers(1234); // WHERE SecondLanguageSpeakers = 1234
     * $query->filterBySecondlanguagespeakers(array(12, 34)); // WHERE SecondLanguageSpeakers IN (12, 34)
     * $query->filterBySecondlanguagespeakers(array('min' => 12)); // WHERE SecondLanguageSpeakers >= 12
     * $query->filterBySecondlanguagespeakers(array('max' => 12)); // WHERE SecondLanguageSpeakers <= 12
     * </code>
     *
     * @param     mixed $secondlanguagespeakers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterBySecondlanguagespeakers($secondlanguagespeakers = null, $comparison = null)
    {
        if (is_array($secondlanguagespeakers)) {
            $useMinMax = false;
            if (isset($secondlanguagespeakers['min'])) {
                $this->addUsingAlias(LanguagePeer::SECONDLANGUAGESPEAKERS, $secondlanguagespeakers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($secondlanguagespeakers['max'])) {
                $this->addUsingAlias(LanguagePeer::SECONDLANGUAGESPEAKERS, $secondlanguagespeakers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::SECONDLANGUAGESPEAKERS, $secondlanguagespeakers, $comparison);
    }

    /**
     * Filter the query on the URL column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE URL = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE URL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagePeer::URL, $url, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (is_array($used)) {
            $useMinMax = false;
            if (isset($used['min'])) {
                $this->addUsingAlias(LanguagePeer::USED, $used['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($used['max'])) {
                $this->addUsingAlias(LanguagePeer::USED, $used['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::USED, $used, $comparison);
    }

    /**
     * Filter the query on the NamesCount column
     *
     * Example usage:
     * <code>
     * $query->filterByNamescount(1234); // WHERE NamesCount = 1234
     * $query->filterByNamescount(array(12, 34)); // WHERE NamesCount IN (12, 34)
     * $query->filterByNamescount(array('min' => 12)); // WHERE NamesCount >= 12
     * $query->filterByNamescount(array('max' => 12)); // WHERE NamesCount <= 12
     * </code>
     *
     * @param     mixed $namescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByNamescount($namescount = null, $comparison = null)
    {
        if (is_array($namescount)) {
            $useMinMax = false;
            if (isset($namescount['min'])) {
                $this->addUsingAlias(LanguagePeer::NAMESCOUNT, $namescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($namescount['max'])) {
                $this->addUsingAlias(LanguagePeer::NAMESCOUNT, $namescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::NAMESCOUNT, $namescount, $comparison);
    }

    /**
     * Filter the query on the SpeciesCount column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescount(1234); // WHERE SpeciesCount = 1234
     * $query->filterBySpeciescount(array(12, 34)); // WHERE SpeciesCount IN (12, 34)
     * $query->filterBySpeciescount(array('min' => 12)); // WHERE SpeciesCount >= 12
     * $query->filterBySpeciescount(array('max' => 12)); // WHERE SpeciesCount <= 12
     * </code>
     *
     * @param     mixed $speciescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterBySpeciescount($speciescount = null, $comparison = null)
    {
        if (is_array($speciescount)) {
            $useMinMax = false;
            if (isset($speciescount['min'])) {
                $this->addUsingAlias(LanguagePeer::SPECIESCOUNT, $speciescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescount['max'])) {
                $this->addUsingAlias(LanguagePeer::SPECIESCOUNT, $speciescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::SPECIESCOUNT, $speciescount, $comparison);
    }

    /**
     * Filter the query on the FamiliesCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliescount(1234); // WHERE FamiliesCount = 1234
     * $query->filterByFamiliescount(array(12, 34)); // WHERE FamiliesCount IN (12, 34)
     * $query->filterByFamiliescount(array('min' => 12)); // WHERE FamiliesCount >= 12
     * $query->filterByFamiliescount(array('max' => 12)); // WHERE FamiliesCount <= 12
     * </code>
     *
     * @param     mixed $familiescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByFamiliescount($familiescount = null, $comparison = null)
    {
        if (is_array($familiescount)) {
            $useMinMax = false;
            if (isset($familiescount['min'])) {
                $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT, $familiescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiescount['max'])) {
                $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT, $familiescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT, $familiescount, $comparison);
    }

    /**
     * Filter the query on the NamesCount_SLB column
     *
     * Example usage:
     * <code>
     * $query->filterByNamescountSlb(1234); // WHERE NamesCount_SLB = 1234
     * $query->filterByNamescountSlb(array(12, 34)); // WHERE NamesCount_SLB IN (12, 34)
     * $query->filterByNamescountSlb(array('min' => 12)); // WHERE NamesCount_SLB >= 12
     * $query->filterByNamescountSlb(array('max' => 12)); // WHERE NamesCount_SLB <= 12
     * </code>
     *
     * @param     mixed $namescountSlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByNamescountSlb($namescountSlb = null, $comparison = null)
    {
        if (is_array($namescountSlb)) {
            $useMinMax = false;
            if (isset($namescountSlb['min'])) {
                $this->addUsingAlias(LanguagePeer::NAMESCOUNT_SLB, $namescountSlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($namescountSlb['max'])) {
                $this->addUsingAlias(LanguagePeer::NAMESCOUNT_SLB, $namescountSlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::NAMESCOUNT_SLB, $namescountSlb, $comparison);
    }

    /**
     * Filter the query on the SpeciesCount_SLB column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescountSlb(1234); // WHERE SpeciesCount_SLB = 1234
     * $query->filterBySpeciescountSlb(array(12, 34)); // WHERE SpeciesCount_SLB IN (12, 34)
     * $query->filterBySpeciescountSlb(array('min' => 12)); // WHERE SpeciesCount_SLB >= 12
     * $query->filterBySpeciescountSlb(array('max' => 12)); // WHERE SpeciesCount_SLB <= 12
     * </code>
     *
     * @param     mixed $speciescountSlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterBySpeciescountSlb($speciescountSlb = null, $comparison = null)
    {
        if (is_array($speciescountSlb)) {
            $useMinMax = false;
            if (isset($speciescountSlb['min'])) {
                $this->addUsingAlias(LanguagePeer::SPECIESCOUNT_SLB, $speciescountSlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescountSlb['max'])) {
                $this->addUsingAlias(LanguagePeer::SPECIESCOUNT_SLB, $speciescountSlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::SPECIESCOUNT_SLB, $speciescountSlb, $comparison);
    }

    /**
     * Filter the query on the FamiliesCount_SLB column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliescountSlb(1234); // WHERE FamiliesCount_SLB = 1234
     * $query->filterByFamiliescountSlb(array(12, 34)); // WHERE FamiliesCount_SLB IN (12, 34)
     * $query->filterByFamiliescountSlb(array('min' => 12)); // WHERE FamiliesCount_SLB >= 12
     * $query->filterByFamiliescountSlb(array('max' => 12)); // WHERE FamiliesCount_SLB <= 12
     * </code>
     *
     * @param     mixed $familiescountSlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByFamiliescountSlb($familiescountSlb = null, $comparison = null)
    {
        if (is_array($familiescountSlb)) {
            $useMinMax = false;
            if (isset($familiescountSlb['min'])) {
                $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT_SLB, $familiescountSlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiescountSlb['max'])) {
                $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT_SLB, $familiescountSlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::FAMILIESCOUNT_SLB, $familiescountSlb, $comparison);
    }

    /**
     * Filter the query on the LastUpdate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastupdate('2011-03-14'); // WHERE LastUpdate = '2011-03-14'
     * $query->filterByLastupdate('now'); // WHERE LastUpdate = '2011-03-14'
     * $query->filterByLastupdate(array('max' => 'yesterday')); // WHERE LastUpdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastupdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByLastupdate($lastupdate = null, $comparison = null)
    {
        if (is_array($lastupdate)) {
            $useMinMax = false;
            if (isset($lastupdate['min'])) {
                $this->addUsingAlias(LanguagePeer::LASTUPDATE, $lastupdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastupdate['max'])) {
                $this->addUsingAlias(LanguagePeer::LASTUPDATE, $lastupdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::LASTUPDATE, $lastupdate, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LanguagePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LanguagePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::ENTERED, $entered, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LanguagePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LanguagePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LanguagePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LanguagePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::MODIFIED, $modified, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LanguagePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LanguagePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LanguagePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LanguagePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('fooValue');   // WHERE DateChecked = 'fooValue'
     * $query->filterByDatechecked('%fooValue%'); // WHERE DateChecked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datechecked The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datechecked)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datechecked)) {
                $datechecked = str_replace('*', '%', $datechecked);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagePeer::DATECHECKED, $datechecked, $comparison);
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
     * @return LanguageQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LanguagePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LanguagePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Language $language Object to remove from the list of results
     *
     * @return LanguageQuery The current query, for fluid interface
     */
    public function prune($language = null)
    {
        if ($language) {
            $this->addUsingAlias(LanguagePeer::LANGUAGENAME, $language->getLanguagename(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
