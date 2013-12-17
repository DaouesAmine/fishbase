<?php


/**
 * Base class that represents a query for the 'otoliths' table.
 *
 *
 *
 * @method OtolithsQuery orderByOtolithid($order = Criteria::ASC) Order by the OtolithID column
 * @method OtolithsQuery orderByOtolithsrefno($order = Criteria::ASC) Order by the OtolithsRefno column
 * @method OtolithsQuery orderByGenusused($order = Criteria::ASC) Order by the GenusUsed column
 * @method OtolithsQuery orderBySpeciesused($order = Criteria::ASC) Order by the SpeciesUsed column
 * @method OtolithsQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method OtolithsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method OtolithsQuery orderBySyncodevalid($order = Criteria::ASC) Order by the SynCodeValid column
 * @method OtolithsQuery orderByLengthfish($order = Criteria::ASC) Order by the LengthFish column
 * @method OtolithsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method OtolithsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method OtolithsQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method OtolithsQuery orderByPlate($order = Criteria::ASC) Order by the Plate column
 * @method OtolithsQuery orderByFigure($order = Criteria::ASC) Order by the Figure column
 * @method OtolithsQuery orderByPosition($order = Criteria::ASC) Order by the Position column
 * @method OtolithsQuery orderByFace($order = Criteria::ASC) Order by the Face column
 * @method OtolithsQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method OtolithsQuery orderByLengthotolith($order = Criteria::ASC) Order by the LengthOtolith column
 * @method OtolithsQuery orderByHeightotolith($order = Criteria::ASC) Order by the HeightOtolith column
 * @method OtolithsQuery orderByFigfilename($order = Criteria::ASC) Order by the FigFileName column
 * @method OtolithsQuery orderByAuthname($order = Criteria::ASC) Order by the AuthName column
 * @method OtolithsQuery orderByFkpoisson($order = Criteria::ASC) Order by the fkpoisson column
 * @method OtolithsQuery orderByFktaxon($order = Criteria::ASC) Order by the fktaxon column
 *
 * @method OtolithsQuery groupByOtolithid() Group by the OtolithID column
 * @method OtolithsQuery groupByOtolithsrefno() Group by the OtolithsRefno column
 * @method OtolithsQuery groupByGenusused() Group by the GenusUsed column
 * @method OtolithsQuery groupBySpeciesused() Group by the SpeciesUsed column
 * @method OtolithsQuery groupBySyncode() Group by the SynCode column
 * @method OtolithsQuery groupBySpeccode() Group by the SpecCode column
 * @method OtolithsQuery groupBySyncodevalid() Group by the SynCodeValid column
 * @method OtolithsQuery groupByLengthfish() Group by the LengthFish column
 * @method OtolithsQuery groupByLocality() Group by the Locality column
 * @method OtolithsQuery groupByCCode() Group by the C_Code column
 * @method OtolithsQuery groupByECode() Group by the E_CODE column
 * @method OtolithsQuery groupByPlate() Group by the Plate column
 * @method OtolithsQuery groupByFigure() Group by the Figure column
 * @method OtolithsQuery groupByPosition() Group by the Position column
 * @method OtolithsQuery groupByFace() Group by the Face column
 * @method OtolithsQuery groupByType() Group by the Type column
 * @method OtolithsQuery groupByLengthotolith() Group by the LengthOtolith column
 * @method OtolithsQuery groupByHeightotolith() Group by the HeightOtolith column
 * @method OtolithsQuery groupByFigfilename() Group by the FigFileName column
 * @method OtolithsQuery groupByAuthname() Group by the AuthName column
 * @method OtolithsQuery groupByFkpoisson() Group by the fkpoisson column
 * @method OtolithsQuery groupByFktaxon() Group by the fktaxon column
 *
 * @method OtolithsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OtolithsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OtolithsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Otoliths findOne(PropelPDO $con = null) Return the first Otoliths matching the query
 * @method Otoliths findOneOrCreate(PropelPDO $con = null) Return the first Otoliths matching the query, or a new Otoliths object populated from the query conditions when no match is found
 *
 * @method Otoliths findOneByOtolithid(int $OtolithID) Return the first Otoliths filtered by the OtolithID column
 * @method Otoliths findOneByOtolithsrefno(int $OtolithsRefno) Return the first Otoliths filtered by the OtolithsRefno column
 * @method Otoliths findOneByGenusused(string $GenusUsed) Return the first Otoliths filtered by the GenusUsed column
 * @method Otoliths findOneBySpeciesused(string $SpeciesUsed) Return the first Otoliths filtered by the SpeciesUsed column
 * @method Otoliths findOneBySyncode(int $SynCode) Return the first Otoliths filtered by the SynCode column
 * @method Otoliths findOneBySpeccode(int $SpecCode) Return the first Otoliths filtered by the SpecCode column
 * @method Otoliths findOneBySyncodevalid(int $SynCodeValid) Return the first Otoliths filtered by the SynCodeValid column
 * @method Otoliths findOneByLengthfish(double $LengthFish) Return the first Otoliths filtered by the LengthFish column
 * @method Otoliths findOneByLocality(string $Locality) Return the first Otoliths filtered by the Locality column
 * @method Otoliths findOneByCCode(string $C_Code) Return the first Otoliths filtered by the C_Code column
 * @method Otoliths findOneByECode(int $E_CODE) Return the first Otoliths filtered by the E_CODE column
 * @method Otoliths findOneByPlate(string $Plate) Return the first Otoliths filtered by the Plate column
 * @method Otoliths findOneByFigure(string $Figure) Return the first Otoliths filtered by the Figure column
 * @method Otoliths findOneByPosition(string $Position) Return the first Otoliths filtered by the Position column
 * @method Otoliths findOneByFace(string $Face) Return the first Otoliths filtered by the Face column
 * @method Otoliths findOneByType(string $Type) Return the first Otoliths filtered by the Type column
 * @method Otoliths findOneByLengthotolith(double $LengthOtolith) Return the first Otoliths filtered by the LengthOtolith column
 * @method Otoliths findOneByHeightotolith(double $HeightOtolith) Return the first Otoliths filtered by the HeightOtolith column
 * @method Otoliths findOneByFigfilename(string $FigFileName) Return the first Otoliths filtered by the FigFileName column
 * @method Otoliths findOneByAuthname(string $AuthName) Return the first Otoliths filtered by the AuthName column
 * @method Otoliths findOneByFkpoisson(double $fkpoisson) Return the first Otoliths filtered by the fkpoisson column
 * @method Otoliths findOneByFktaxon(int $fktaxon) Return the first Otoliths filtered by the fktaxon column
 *
 * @method array findByOtolithid(int $OtolithID) Return Otoliths objects filtered by the OtolithID column
 * @method array findByOtolithsrefno(int $OtolithsRefno) Return Otoliths objects filtered by the OtolithsRefno column
 * @method array findByGenusused(string $GenusUsed) Return Otoliths objects filtered by the GenusUsed column
 * @method array findBySpeciesused(string $SpeciesUsed) Return Otoliths objects filtered by the SpeciesUsed column
 * @method array findBySyncode(int $SynCode) Return Otoliths objects filtered by the SynCode column
 * @method array findBySpeccode(int $SpecCode) Return Otoliths objects filtered by the SpecCode column
 * @method array findBySyncodevalid(int $SynCodeValid) Return Otoliths objects filtered by the SynCodeValid column
 * @method array findByLengthfish(double $LengthFish) Return Otoliths objects filtered by the LengthFish column
 * @method array findByLocality(string $Locality) Return Otoliths objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Otoliths objects filtered by the C_Code column
 * @method array findByECode(int $E_CODE) Return Otoliths objects filtered by the E_CODE column
 * @method array findByPlate(string $Plate) Return Otoliths objects filtered by the Plate column
 * @method array findByFigure(string $Figure) Return Otoliths objects filtered by the Figure column
 * @method array findByPosition(string $Position) Return Otoliths objects filtered by the Position column
 * @method array findByFace(string $Face) Return Otoliths objects filtered by the Face column
 * @method array findByType(string $Type) Return Otoliths objects filtered by the Type column
 * @method array findByLengthotolith(double $LengthOtolith) Return Otoliths objects filtered by the LengthOtolith column
 * @method array findByHeightotolith(double $HeightOtolith) Return Otoliths objects filtered by the HeightOtolith column
 * @method array findByFigfilename(string $FigFileName) Return Otoliths objects filtered by the FigFileName column
 * @method array findByAuthname(string $AuthName) Return Otoliths objects filtered by the AuthName column
 * @method array findByFkpoisson(double $fkpoisson) Return Otoliths objects filtered by the fkpoisson column
 * @method array findByFktaxon(int $fktaxon) Return Otoliths objects filtered by the fktaxon column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOtolithsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOtolithsQuery object.
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
            $modelName = 'Otoliths';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OtolithsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OtolithsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OtolithsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OtolithsQuery) {
            return $criteria;
        }
        $query = new OtolithsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$OtolithsRefno, $GenusUsed, $SpeciesUsed, $Plate, $Figure]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Otoliths|Otoliths[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OtolithsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Otoliths A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `OtolithID`, `OtolithsRefno`, `GenusUsed`, `SpeciesUsed`, `SynCode`, `SpecCode`, `SynCodeValid`, `LengthFish`, `Locality`, `C_Code`, `E_CODE`, `Plate`, `Figure`, `Position`, `Face`, `Type`, `LengthOtolith`, `HeightOtolith`, `FigFileName`, `AuthName`, `fkpoisson`, `fktaxon` FROM `otoliths` WHERE `OtolithsRefno` = :p0 AND `GenusUsed` = :p1 AND `SpeciesUsed` = :p2 AND `Plate` = :p3 AND `Figure` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Otoliths();
            $obj->hydrate($row);
            OtolithsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return Otoliths|Otoliths[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Otoliths[]|mixed the list of results, formatted by the current formatter
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
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OtolithsPeer::OTOLITHSREFNO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OtolithsPeer::GENUSUSED, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(OtolithsPeer::SPECIESUSED, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(OtolithsPeer::PLATE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(OtolithsPeer::FIGURE, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OtolithsPeer::OTOLITHSREFNO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OtolithsPeer::GENUSUSED, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(OtolithsPeer::SPECIESUSED, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(OtolithsPeer::PLATE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(OtolithsPeer::FIGURE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OtolithID column
     *
     * Example usage:
     * <code>
     * $query->filterByOtolithid(1234); // WHERE OtolithID = 1234
     * $query->filterByOtolithid(array(12, 34)); // WHERE OtolithID IN (12, 34)
     * $query->filterByOtolithid(array('min' => 12)); // WHERE OtolithID >= 12
     * $query->filterByOtolithid(array('max' => 12)); // WHERE OtolithID <= 12
     * </code>
     *
     * @param     mixed $otolithid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByOtolithid($otolithid = null, $comparison = null)
    {
        if (is_array($otolithid)) {
            $useMinMax = false;
            if (isset($otolithid['min'])) {
                $this->addUsingAlias(OtolithsPeer::OTOLITHID, $otolithid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otolithid['max'])) {
                $this->addUsingAlias(OtolithsPeer::OTOLITHID, $otolithid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::OTOLITHID, $otolithid, $comparison);
    }

    /**
     * Filter the query on the OtolithsRefno column
     *
     * Example usage:
     * <code>
     * $query->filterByOtolithsrefno(1234); // WHERE OtolithsRefno = 1234
     * $query->filterByOtolithsrefno(array(12, 34)); // WHERE OtolithsRefno IN (12, 34)
     * $query->filterByOtolithsrefno(array('min' => 12)); // WHERE OtolithsRefno >= 12
     * $query->filterByOtolithsrefno(array('max' => 12)); // WHERE OtolithsRefno <= 12
     * </code>
     *
     * @param     mixed $otolithsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByOtolithsrefno($otolithsrefno = null, $comparison = null)
    {
        if (is_array($otolithsrefno)) {
            $useMinMax = false;
            if (isset($otolithsrefno['min'])) {
                $this->addUsingAlias(OtolithsPeer::OTOLITHSREFNO, $otolithsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otolithsrefno['max'])) {
                $this->addUsingAlias(OtolithsPeer::OTOLITHSREFNO, $otolithsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::OTOLITHSREFNO, $otolithsrefno, $comparison);
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
     * @return OtolithsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OtolithsPeer::GENUSUSED, $genusused, $comparison);
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
     * @return OtolithsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OtolithsPeer::SPECIESUSED, $speciesused, $comparison);
    }

    /**
     * Filter the query on the SynCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE SynCode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE SynCode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE SynCode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE SynCode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(OtolithsPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(OtolithsPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::SYNCODE, $syncode, $comparison);
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
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(OtolithsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(OtolithsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SynCodeValid column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncodevalid(1234); // WHERE SynCodeValid = 1234
     * $query->filterBySyncodevalid(array(12, 34)); // WHERE SynCodeValid IN (12, 34)
     * $query->filterBySyncodevalid(array('min' => 12)); // WHERE SynCodeValid >= 12
     * $query->filterBySyncodevalid(array('max' => 12)); // WHERE SynCodeValid <= 12
     * </code>
     *
     * @param     mixed $syncodevalid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterBySyncodevalid($syncodevalid = null, $comparison = null)
    {
        if (is_array($syncodevalid)) {
            $useMinMax = false;
            if (isset($syncodevalid['min'])) {
                $this->addUsingAlias(OtolithsPeer::SYNCODEVALID, $syncodevalid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncodevalid['max'])) {
                $this->addUsingAlias(OtolithsPeer::SYNCODEVALID, $syncodevalid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::SYNCODEVALID, $syncodevalid, $comparison);
    }

    /**
     * Filter the query on the LengthFish column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfish(1234); // WHERE LengthFish = 1234
     * $query->filterByLengthfish(array(12, 34)); // WHERE LengthFish IN (12, 34)
     * $query->filterByLengthfish(array('min' => 12)); // WHERE LengthFish >= 12
     * $query->filterByLengthfish(array('max' => 12)); // WHERE LengthFish <= 12
     * </code>
     *
     * @param     mixed $lengthfish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByLengthfish($lengthfish = null, $comparison = null)
    {
        if (is_array($lengthfish)) {
            $useMinMax = false;
            if (isset($lengthfish['min'])) {
                $this->addUsingAlias(OtolithsPeer::LENGTHFISH, $lengthfish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfish['max'])) {
                $this->addUsingAlias(OtolithsPeer::LENGTHFISH, $lengthfish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::LENGTHFISH, $lengthfish, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::LOCALITY, $locality, $comparison);
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
     * @return OtolithsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OtolithsPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(OtolithsPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(OtolithsPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the Plate column
     *
     * Example usage:
     * <code>
     * $query->filterByPlate('fooValue');   // WHERE Plate = 'fooValue'
     * $query->filterByPlate('%fooValue%'); // WHERE Plate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByPlate($plate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $plate)) {
                $plate = str_replace('*', '%', $plate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::PLATE, $plate, $comparison);
    }

    /**
     * Filter the query on the Figure column
     *
     * Example usage:
     * <code>
     * $query->filterByFigure('fooValue');   // WHERE Figure = 'fooValue'
     * $query->filterByFigure('%fooValue%'); // WHERE Figure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $figure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByFigure($figure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($figure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $figure)) {
                $figure = str_replace('*', '%', $figure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::FIGURE, $figure, $comparison);
    }

    /**
     * Filter the query on the Position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition('fooValue');   // WHERE Position = 'fooValue'
     * $query->filterByPosition('%fooValue%'); // WHERE Position LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position)) {
                $position = str_replace('*', '%', $position);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the Face column
     *
     * Example usage:
     * <code>
     * $query->filterByFace('fooValue');   // WHERE Face = 'fooValue'
     * $query->filterByFace('%fooValue%'); // WHERE Face LIKE '%fooValue%'
     * </code>
     *
     * @param     string $face The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByFace($face = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($face)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $face)) {
                $face = str_replace('*', '%', $face);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::FACE, $face, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the LengthOtolith column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthotolith(1234); // WHERE LengthOtolith = 1234
     * $query->filterByLengthotolith(array(12, 34)); // WHERE LengthOtolith IN (12, 34)
     * $query->filterByLengthotolith(array('min' => 12)); // WHERE LengthOtolith >= 12
     * $query->filterByLengthotolith(array('max' => 12)); // WHERE LengthOtolith <= 12
     * </code>
     *
     * @param     mixed $lengthotolith The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByLengthotolith($lengthotolith = null, $comparison = null)
    {
        if (is_array($lengthotolith)) {
            $useMinMax = false;
            if (isset($lengthotolith['min'])) {
                $this->addUsingAlias(OtolithsPeer::LENGTHOTOLITH, $lengthotolith['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthotolith['max'])) {
                $this->addUsingAlias(OtolithsPeer::LENGTHOTOLITH, $lengthotolith['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::LENGTHOTOLITH, $lengthotolith, $comparison);
    }

    /**
     * Filter the query on the HeightOtolith column
     *
     * Example usage:
     * <code>
     * $query->filterByHeightotolith(1234); // WHERE HeightOtolith = 1234
     * $query->filterByHeightotolith(array(12, 34)); // WHERE HeightOtolith IN (12, 34)
     * $query->filterByHeightotolith(array('min' => 12)); // WHERE HeightOtolith >= 12
     * $query->filterByHeightotolith(array('max' => 12)); // WHERE HeightOtolith <= 12
     * </code>
     *
     * @param     mixed $heightotolith The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByHeightotolith($heightotolith = null, $comparison = null)
    {
        if (is_array($heightotolith)) {
            $useMinMax = false;
            if (isset($heightotolith['min'])) {
                $this->addUsingAlias(OtolithsPeer::HEIGHTOTOLITH, $heightotolith['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($heightotolith['max'])) {
                $this->addUsingAlias(OtolithsPeer::HEIGHTOTOLITH, $heightotolith['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::HEIGHTOTOLITH, $heightotolith, $comparison);
    }

    /**
     * Filter the query on the FigFileName column
     *
     * Example usage:
     * <code>
     * $query->filterByFigfilename('fooValue');   // WHERE FigFileName = 'fooValue'
     * $query->filterByFigfilename('%fooValue%'); // WHERE FigFileName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $figfilename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByFigfilename($figfilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($figfilename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $figfilename)) {
                $figfilename = str_replace('*', '%', $figfilename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::FIGFILENAME, $figfilename, $comparison);
    }

    /**
     * Filter the query on the AuthName column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthname('fooValue');   // WHERE AuthName = 'fooValue'
     * $query->filterByAuthname('%fooValue%'); // WHERE AuthName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByAuthname($authname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authname)) {
                $authname = str_replace('*', '%', $authname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::AUTHNAME, $authname, $comparison);
    }

    /**
     * Filter the query on the fkpoisson column
     *
     * Example usage:
     * <code>
     * $query->filterByFkpoisson(1234); // WHERE fkpoisson = 1234
     * $query->filterByFkpoisson(array(12, 34)); // WHERE fkpoisson IN (12, 34)
     * $query->filterByFkpoisson(array('min' => 12)); // WHERE fkpoisson >= 12
     * $query->filterByFkpoisson(array('max' => 12)); // WHERE fkpoisson <= 12
     * </code>
     *
     * @param     mixed $fkpoisson The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByFkpoisson($fkpoisson = null, $comparison = null)
    {
        if (is_array($fkpoisson)) {
            $useMinMax = false;
            if (isset($fkpoisson['min'])) {
                $this->addUsingAlias(OtolithsPeer::FKPOISSON, $fkpoisson['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkpoisson['max'])) {
                $this->addUsingAlias(OtolithsPeer::FKPOISSON, $fkpoisson['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::FKPOISSON, $fkpoisson, $comparison);
    }

    /**
     * Filter the query on the fktaxon column
     *
     * Example usage:
     * <code>
     * $query->filterByFktaxon(1234); // WHERE fktaxon = 1234
     * $query->filterByFktaxon(array(12, 34)); // WHERE fktaxon IN (12, 34)
     * $query->filterByFktaxon(array('min' => 12)); // WHERE fktaxon >= 12
     * $query->filterByFktaxon(array('max' => 12)); // WHERE fktaxon <= 12
     * </code>
     *
     * @param     mixed $fktaxon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function filterByFktaxon($fktaxon = null, $comparison = null)
    {
        if (is_array($fktaxon)) {
            $useMinMax = false;
            if (isset($fktaxon['min'])) {
                $this->addUsingAlias(OtolithsPeer::FKTAXON, $fktaxon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fktaxon['max'])) {
                $this->addUsingAlias(OtolithsPeer::FKTAXON, $fktaxon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OtolithsPeer::FKTAXON, $fktaxon, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Otoliths $otoliths Object to remove from the list of results
     *
     * @return OtolithsQuery The current query, for fluid interface
     */
    public function prune($otoliths = null)
    {
        if ($otoliths) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OtolithsPeer::OTOLITHSREFNO), $otoliths->getOtolithsrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OtolithsPeer::GENUSUSED), $otoliths->getGenusused(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(OtolithsPeer::SPECIESUSED), $otoliths->getSpeciesused(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(OtolithsPeer::PLATE), $otoliths->getPlate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(OtolithsPeer::FIGURE), $otoliths->getFigure(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
