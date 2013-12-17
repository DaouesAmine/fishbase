<?php


/**
 * Base class that represents a query for the 'dispic' table.
 *
 *
 *
 * @method DispicQuery orderByPicnum($order = Criteria::ASC) Order by the PicNum column
 * @method DispicQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method DispicQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method DispicQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method DispicQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method DispicQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method DispicQuery orderByDiscode($order = Criteria::ASC) Order by the DisCode column
 * @method DispicQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method DispicQuery orderByPhotographer($order = Criteria::ASC) Order by the Photographer column
 * @method DispicQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method DispicQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method DispicQuery orderByPicfile($order = Criteria::ASC) Order by the PicFile column
 * @method DispicQuery orderByCopyright($order = Criteria::ASC) Order by the Copyright column
 * @method DispicQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method DispicQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method DispicQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method DispicQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method DispicQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method DispicQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method DispicQuery orderByScanned($order = Criteria::ASC) Order by the Scanned column
 * @method DispicQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method DispicQuery groupByPicnum() Group by the PicNum column
 * @method DispicQuery groupByRemarks() Group by the Remarks column
 * @method DispicQuery groupByGenus() Group by the Genus column
 * @method DispicQuery groupBySpecies() Group by the Species column
 * @method DispicQuery groupBySpeccode() Group by the SpecCode column
 * @method DispicQuery groupByStockcode() Group by the StockCode column
 * @method DispicQuery groupByDiscode() Group by the DisCode column
 * @method DispicQuery groupByRefno() Group by the RefNo column
 * @method DispicQuery groupByPhotographer() Group by the Photographer column
 * @method DispicQuery groupByYear() Group by the Year column
 * @method DispicQuery groupByLocality() Group by the Locality column
 * @method DispicQuery groupByPicfile() Group by the PicFile column
 * @method DispicQuery groupByCopyright() Group by the Copyright column
 * @method DispicQuery groupByEntered() Group by the Entered column
 * @method DispicQuery groupByDateentered() Group by the DateEntered column
 * @method DispicQuery groupByModified() Group by the Modified column
 * @method DispicQuery groupByDatemodified() Group by the DateModified column
 * @method DispicQuery groupByExpert() Group by the Expert column
 * @method DispicQuery groupByDatechecked() Group by the DateChecked column
 * @method DispicQuery groupByScanned() Group by the Scanned column
 * @method DispicQuery groupByTs() Group by the TS column
 *
 * @method DispicQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DispicQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DispicQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Dispic findOne(PropelPDO $con = null) Return the first Dispic matching the query
 * @method Dispic findOneOrCreate(PropelPDO $con = null) Return the first Dispic matching the query, or a new Dispic object populated from the query conditions when no match is found
 *
 * @method Dispic findOneByPicnum(string $PicNum) Return the first Dispic filtered by the PicNum column
 * @method Dispic findOneByRemarks(string $Remarks) Return the first Dispic filtered by the Remarks column
 * @method Dispic findOneByGenus(string $Genus) Return the first Dispic filtered by the Genus column
 * @method Dispic findOneBySpecies(string $Species) Return the first Dispic filtered by the Species column
 * @method Dispic findOneBySpeccode(int $SpecCode) Return the first Dispic filtered by the SpecCode column
 * @method Dispic findOneByStockcode(int $StockCode) Return the first Dispic filtered by the StockCode column
 * @method Dispic findOneByDiscode(int $DisCode) Return the first Dispic filtered by the DisCode column
 * @method Dispic findOneByRefno(int $RefNo) Return the first Dispic filtered by the RefNo column
 * @method Dispic findOneByPhotographer(string $Photographer) Return the first Dispic filtered by the Photographer column
 * @method Dispic findOneByYear(string $Year) Return the first Dispic filtered by the Year column
 * @method Dispic findOneByLocality(string $Locality) Return the first Dispic filtered by the Locality column
 * @method Dispic findOneByCopyright(string $Copyright) Return the first Dispic filtered by the Copyright column
 * @method Dispic findOneByEntered(int $Entered) Return the first Dispic filtered by the Entered column
 * @method Dispic findOneByDateentered(string $DateEntered) Return the first Dispic filtered by the DateEntered column
 * @method Dispic findOneByModified(int $Modified) Return the first Dispic filtered by the Modified column
 * @method Dispic findOneByDatemodified(string $DateModified) Return the first Dispic filtered by the DateModified column
 * @method Dispic findOneByExpert(int $Expert) Return the first Dispic filtered by the Expert column
 * @method Dispic findOneByDatechecked(string $DateChecked) Return the first Dispic filtered by the DateChecked column
 * @method Dispic findOneByScanned(boolean $Scanned) Return the first Dispic filtered by the Scanned column
 * @method Dispic findOneByTs(string $TS) Return the first Dispic filtered by the TS column
 *
 * @method array findByPicnum(string $PicNum) Return Dispic objects filtered by the PicNum column
 * @method array findByRemarks(string $Remarks) Return Dispic objects filtered by the Remarks column
 * @method array findByGenus(string $Genus) Return Dispic objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Dispic objects filtered by the Species column
 * @method array findBySpeccode(int $SpecCode) Return Dispic objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Dispic objects filtered by the StockCode column
 * @method array findByDiscode(int $DisCode) Return Dispic objects filtered by the DisCode column
 * @method array findByRefno(int $RefNo) Return Dispic objects filtered by the RefNo column
 * @method array findByPhotographer(string $Photographer) Return Dispic objects filtered by the Photographer column
 * @method array findByYear(string $Year) Return Dispic objects filtered by the Year column
 * @method array findByLocality(string $Locality) Return Dispic objects filtered by the Locality column
 * @method array findByPicfile(string $PicFile) Return Dispic objects filtered by the PicFile column
 * @method array findByCopyright(string $Copyright) Return Dispic objects filtered by the Copyright column
 * @method array findByEntered(int $Entered) Return Dispic objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Dispic objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Dispic objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Dispic objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Dispic objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Dispic objects filtered by the DateChecked column
 * @method array findByScanned(boolean $Scanned) Return Dispic objects filtered by the Scanned column
 * @method array findByTs(string $TS) Return Dispic objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDispicQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDispicQuery object.
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
            $modelName = 'Dispic';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DispicQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DispicQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DispicQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DispicQuery) {
            return $criteria;
        }
        $query = new DispicQuery(null, null, $modelAlias);

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
     * @return   Dispic|Dispic[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DispicPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Dispic A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPicfile($key, $con = null)
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
     * @return                 Dispic A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `PicNum`, `Remarks`, `Genus`, `Species`, `SpecCode`, `StockCode`, `DisCode`, `RefNo`, `Photographer`, `Year`, `Locality`, `PicFile`, `Copyright`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Scanned`, `TS` FROM `dispic` WHERE `PicFile` = :p0';
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
            $obj = new Dispic();
            $obj->hydrate($row);
            DispicPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Dispic|Dispic[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Dispic[]|mixed the list of results, formatted by the current formatter
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DispicPeer::PICFILE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DispicPeer::PICFILE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PicNum column
     *
     * Example usage:
     * <code>
     * $query->filterByPicnum('fooValue');   // WHERE PicNum = 'fooValue'
     * $query->filterByPicnum('%fooValue%'); // WHERE PicNum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picnum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByPicnum($picnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picnum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picnum)) {
                $picnum = str_replace('*', '%', $picnum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DispicPeer::PICNUM, $picnum, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DispicPeer::REMARKS, $remarks, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DispicPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DispicPeer::SPECIES, $species, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(DispicPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(DispicPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::SPECCODE, $speccode, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(DispicPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(DispicPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the DisCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscode(1234); // WHERE DisCode = 1234
     * $query->filterByDiscode(array(12, 34)); // WHERE DisCode IN (12, 34)
     * $query->filterByDiscode(array('min' => 12)); // WHERE DisCode >= 12
     * $query->filterByDiscode(array('max' => 12)); // WHERE DisCode <= 12
     * </code>
     *
     * @param     mixed $discode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByDiscode($discode = null, $comparison = null)
    {
        if (is_array($discode)) {
            $useMinMax = false;
            if (isset($discode['min'])) {
                $this->addUsingAlias(DispicPeer::DISCODE, $discode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discode['max'])) {
                $this->addUsingAlias(DispicPeer::DISCODE, $discode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::DISCODE, $discode, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(DispicPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(DispicPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the Photographer column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotographer('fooValue');   // WHERE Photographer = 'fooValue'
     * $query->filterByPhotographer('%fooValue%'); // WHERE Photographer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $photographer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByPhotographer($photographer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($photographer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $photographer)) {
                $photographer = str_replace('*', '%', $photographer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DispicPeer::PHOTOGRAPHER, $photographer, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DispicPeer::YEAR, $year, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DispicPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the PicFile column
     *
     * Example usage:
     * <code>
     * $query->filterByPicfile('fooValue');   // WHERE PicFile = 'fooValue'
     * $query->filterByPicfile('%fooValue%'); // WHERE PicFile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picfile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByPicfile($picfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picfile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picfile)) {
                $picfile = str_replace('*', '%', $picfile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DispicPeer::PICFILE, $picfile, $comparison);
    }

    /**
     * Filter the query on the Copyright column
     *
     * Example usage:
     * <code>
     * $query->filterByCopyright('fooValue');   // WHERE Copyright = 'fooValue'
     * $query->filterByCopyright('%fooValue%'); // WHERE Copyright LIKE '%fooValue%'
     * </code>
     *
     * @param     string $copyright The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByCopyright($copyright = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($copyright)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $copyright)) {
                $copyright = str_replace('*', '%', $copyright);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DispicPeer::COPYRIGHT, $copyright, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(DispicPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(DispicPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::ENTERED, $entered, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(DispicPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(DispicPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(DispicPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(DispicPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::MODIFIED, $modified, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(DispicPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(DispicPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(DispicPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(DispicPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::EXPERT, $expert, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(DispicPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(DispicPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Scanned column
     *
     * Example usage:
     * <code>
     * $query->filterByScanned(true); // WHERE Scanned = true
     * $query->filterByScanned('yes'); // WHERE Scanned = true
     * </code>
     *
     * @param     boolean|string $scanned The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByScanned($scanned = null, $comparison = null)
    {
        if (is_string($scanned)) {
            $scanned = in_array(strtolower($scanned), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DispicPeer::SCANNED, $scanned, $comparison);
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
     * @return DispicQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(DispicPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(DispicPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DispicPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Dispic $dispic Object to remove from the list of results
     *
     * @return DispicQuery The current query, for fluid interface
     */
    public function prune($dispic = null)
    {
        if ($dispic) {
            $this->addUsingAlias(DispicPeer::PICFILE, $dispic->getPicfile(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
