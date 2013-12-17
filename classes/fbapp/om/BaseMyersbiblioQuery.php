<?php


/**
 * Base class that represents a query for the 'myersbiblio' table.
 *
 *
 *
 * @method MyersbiblioQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method MyersbiblioQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method MyersbiblioQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method MyersbiblioQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method MyersbiblioQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method MyersbiblioQuery orderByRefpage($order = Criteria::ASC) Order by the RefPage column
 * @method MyersbiblioQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method MyersbiblioQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method MyersbiblioQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MyersbiblioQuery groupBySpeccode() Group by the SpecCode column
 * @method MyersbiblioQuery groupById() Group by the ID column
 * @method MyersbiblioQuery groupByRefno() Group by the RefNo column
 * @method MyersbiblioQuery groupByGenus() Group by the Genus column
 * @method MyersbiblioQuery groupBySpecies() Group by the Species column
 * @method MyersbiblioQuery groupByRefpage() Group by the RefPage column
 * @method MyersbiblioQuery groupByLocality() Group by the Locality column
 * @method MyersbiblioQuery groupByComment() Group by the Comment column
 * @method MyersbiblioQuery groupByTs() Group by the TS column
 *
 * @method MyersbiblioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MyersbiblioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MyersbiblioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Myersbiblio findOne(PropelPDO $con = null) Return the first Myersbiblio matching the query
 * @method Myersbiblio findOneOrCreate(PropelPDO $con = null) Return the first Myersbiblio matching the query, or a new Myersbiblio object populated from the query conditions when no match is found
 *
 * @method Myersbiblio findOneBySpeccode(int $SpecCode) Return the first Myersbiblio filtered by the SpecCode column
 * @method Myersbiblio findOneById(string $ID) Return the first Myersbiblio filtered by the ID column
 * @method Myersbiblio findOneByRefno(int $RefNo) Return the first Myersbiblio filtered by the RefNo column
 * @method Myersbiblio findOneByGenus(string $Genus) Return the first Myersbiblio filtered by the Genus column
 * @method Myersbiblio findOneBySpecies(string $Species) Return the first Myersbiblio filtered by the Species column
 * @method Myersbiblio findOneByRefpage(string $RefPage) Return the first Myersbiblio filtered by the RefPage column
 * @method Myersbiblio findOneByLocality(string $Locality) Return the first Myersbiblio filtered by the Locality column
 * @method Myersbiblio findOneByComment(string $Comment) Return the first Myersbiblio filtered by the Comment column
 * @method Myersbiblio findOneByTs(string $TS) Return the first Myersbiblio filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Myersbiblio objects filtered by the SpecCode column
 * @method array findById(string $ID) Return Myersbiblio objects filtered by the ID column
 * @method array findByRefno(int $RefNo) Return Myersbiblio objects filtered by the RefNo column
 * @method array findByGenus(string $Genus) Return Myersbiblio objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Myersbiblio objects filtered by the Species column
 * @method array findByRefpage(string $RefPage) Return Myersbiblio objects filtered by the RefPage column
 * @method array findByLocality(string $Locality) Return Myersbiblio objects filtered by the Locality column
 * @method array findByComment(string $Comment) Return Myersbiblio objects filtered by the Comment column
 * @method array findByTs(string $TS) Return Myersbiblio objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMyersbiblioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMyersbiblioQuery object.
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
            $modelName = 'Myersbiblio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MyersbiblioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MyersbiblioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MyersbiblioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MyersbiblioQuery) {
            return $criteria;
        }
        $query = new MyersbiblioQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$SpecCode, $ID, $RefNo]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Myersbiblio|Myersbiblio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MyersbiblioPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Myersbiblio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `ID`, `RefNo`, `Genus`, `Species`, `RefPage`, `Locality`, `Comment`, `TS` FROM `myersbiblio` WHERE `SpecCode` = :p0 AND `ID` = :p1 AND `RefNo` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Myersbiblio();
            $obj->hydrate($row);
            MyersbiblioPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Myersbiblio|Myersbiblio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Myersbiblio[]|mixed the list of results, formatted by the current formatter
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
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(MyersbiblioPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(MyersbiblioPeer::ID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(MyersbiblioPeer::REFNO, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(MyersbiblioPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(MyersbiblioPeer::ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(MyersbiblioPeer::REFNO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MyersbiblioPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MyersbiblioPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersbiblioPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE ID = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersbiblioPeer::ID, $id, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(MyersbiblioPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(MyersbiblioPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersbiblioPeer::REFNO, $refno, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersbiblioPeer::GENUS, $genus, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersbiblioPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the RefPage column
     *
     * Example usage:
     * <code>
     * $query->filterByRefpage('fooValue');   // WHERE RefPage = 'fooValue'
     * $query->filterByRefpage('%fooValue%'); // WHERE RefPage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refpage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterByRefpage($refpage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refpage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refpage)) {
                $refpage = str_replace('*', '%', $refpage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersbiblioPeer::REFPAGE, $refpage, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersbiblioPeer::LOCALITY, $locality, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersbiblioPeer::COMMENT, $comment, $comparison);
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
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MyersbiblioPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MyersbiblioPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersbiblioPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Myersbiblio $myersbiblio Object to remove from the list of results
     *
     * @return MyersbiblioQuery The current query, for fluid interface
     */
    public function prune($myersbiblio = null)
    {
        if ($myersbiblio) {
            $this->addCond('pruneCond0', $this->getAliasedColName(MyersbiblioPeer::SPECCODE), $myersbiblio->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(MyersbiblioPeer::ID), $myersbiblio->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(MyersbiblioPeer::REFNO), $myersbiblio->getRefno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
