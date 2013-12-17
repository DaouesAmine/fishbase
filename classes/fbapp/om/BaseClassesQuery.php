<?php


/**
 * Base class that represents a query for the 'classes' table.
 *
 *
 *
 * @method ClassesQuery orderByClassnum($order = Criteria::ASC) Order by the ClassNum column
 * @method ClassesQuery orderByClass($order = Criteria::ASC) Order by the Class column
 * @method ClassesQuery orderByClassrefno($order = Criteria::ASC) Order by the ClassRefNo column
 * @method ClassesQuery orderBySortno($order = Criteria::ASC) Order by the SortNo column
 * @method ClassesQuery orderBySynonym($order = Criteria::ASC) Order by the Synonym column
 * @method ClassesQuery orderByAuthoryear($order = Criteria::ASC) Order by the AuthorYear column
 * @method ClassesQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method ClassesQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method ClassesQuery orderByWatersalinity($order = Criteria::ASC) Order by the WaterSalinity column
 * @method ClassesQuery orderBySpeciescount($order = Criteria::ASC) Order by the SpeciesCount column
 * @method ClassesQuery orderBySuperclass($order = Criteria::ASC) Order by the SuperClass column
 * @method ClassesQuery orderBySubclass($order = Criteria::ASC) Order by the Subclass column
 * @method ClassesQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method ClassesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ClassesQuery groupByClassnum() Group by the ClassNum column
 * @method ClassesQuery groupByClass() Group by the Class column
 * @method ClassesQuery groupByClassrefno() Group by the ClassRefNo column
 * @method ClassesQuery groupBySortno() Group by the SortNo column
 * @method ClassesQuery groupBySynonym() Group by the Synonym column
 * @method ClassesQuery groupByAuthoryear() Group by the AuthorYear column
 * @method ClassesQuery groupByCommonname() Group by the CommonName column
 * @method ClassesQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method ClassesQuery groupByWatersalinity() Group by the WaterSalinity column
 * @method ClassesQuery groupBySpeciescount() Group by the SpeciesCount column
 * @method ClassesQuery groupBySuperclass() Group by the SuperClass column
 * @method ClassesQuery groupBySubclass() Group by the Subclass column
 * @method ClassesQuery groupByRemarks() Group by the Remarks column
 * @method ClassesQuery groupByTs() Group by the TS column
 *
 * @method ClassesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClassesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClassesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Classes findOne(PropelPDO $con = null) Return the first Classes matching the query
 * @method Classes findOneOrCreate(PropelPDO $con = null) Return the first Classes matching the query, or a new Classes object populated from the query conditions when no match is found
 *
 * @method Classes findOneByClassnum(int $ClassNum) Return the first Classes filtered by the ClassNum column
 * @method Classes findOneByClassrefno(int $ClassRefNo) Return the first Classes filtered by the ClassRefNo column
 * @method Classes findOneBySortno(int $SortNo) Return the first Classes filtered by the SortNo column
 * @method Classes findOneBySynonym(int $Synonym) Return the first Classes filtered by the Synonym column
 * @method Classes findOneByAuthoryear(string $AuthorYear) Return the first Classes filtered by the AuthorYear column
 * @method Classes findOneByCommonname(string $CommonName) Return the first Classes filtered by the CommonName column
 * @method Classes findOneByBodyshapei(string $BodyShapeI) Return the first Classes filtered by the BodyShapeI column
 * @method Classes findOneByWatersalinity(string $WaterSalinity) Return the first Classes filtered by the WaterSalinity column
 * @method Classes findOneBySpeciescount(int $SpeciesCount) Return the first Classes filtered by the SpeciesCount column
 * @method Classes findOneBySuperclass(string $SuperClass) Return the first Classes filtered by the SuperClass column
 * @method Classes findOneBySubclass(string $Subclass) Return the first Classes filtered by the Subclass column
 * @method Classes findOneByRemarks(string $Remarks) Return the first Classes filtered by the Remarks column
 * @method Classes findOneByTs(string $TS) Return the first Classes filtered by the TS column
 *
 * @method array findByClassnum(int $ClassNum) Return Classes objects filtered by the ClassNum column
 * @method array findByClass(string $Class) Return Classes objects filtered by the Class column
 * @method array findByClassrefno(int $ClassRefNo) Return Classes objects filtered by the ClassRefNo column
 * @method array findBySortno(int $SortNo) Return Classes objects filtered by the SortNo column
 * @method array findBySynonym(int $Synonym) Return Classes objects filtered by the Synonym column
 * @method array findByAuthoryear(string $AuthorYear) Return Classes objects filtered by the AuthorYear column
 * @method array findByCommonname(string $CommonName) Return Classes objects filtered by the CommonName column
 * @method array findByBodyshapei(string $BodyShapeI) Return Classes objects filtered by the BodyShapeI column
 * @method array findByWatersalinity(string $WaterSalinity) Return Classes objects filtered by the WaterSalinity column
 * @method array findBySpeciescount(int $SpeciesCount) Return Classes objects filtered by the SpeciesCount column
 * @method array findBySuperclass(string $SuperClass) Return Classes objects filtered by the SuperClass column
 * @method array findBySubclass(string $Subclass) Return Classes objects filtered by the Subclass column
 * @method array findByRemarks(string $Remarks) Return Classes objects filtered by the Remarks column
 * @method array findByTs(string $TS) Return Classes objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseClassesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClassesQuery object.
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
            $modelName = 'Classes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClassesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClassesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClassesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClassesQuery) {
            return $criteria;
        }
        $query = new ClassesQuery(null, null, $modelAlias);

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
     * @return   Classes|Classes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClassesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClassesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Classes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClass($key, $con = null)
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
     * @return                 Classes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ClassNum`, `Class`, `ClassRefNo`, `SortNo`, `Synonym`, `AuthorYear`, `CommonName`, `BodyShapeI`, `WaterSalinity`, `SpeciesCount`, `SuperClass`, `Subclass`, `Remarks`, `TS` FROM `classes` WHERE `Class` = :p0';
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
            $obj = new Classes();
            $obj->hydrate($row);
            ClassesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Classes|Classes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Classes[]|mixed the list of results, formatted by the current formatter
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
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClassesPeer::CLAZZ, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClassesPeer::CLAZZ, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ClassNum column
     *
     * Example usage:
     * <code>
     * $query->filterByClassnum(1234); // WHERE ClassNum = 1234
     * $query->filterByClassnum(array(12, 34)); // WHERE ClassNum IN (12, 34)
     * $query->filterByClassnum(array('min' => 12)); // WHERE ClassNum >= 12
     * $query->filterByClassnum(array('max' => 12)); // WHERE ClassNum <= 12
     * </code>
     *
     * @param     mixed $classnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByClassnum($classnum = null, $comparison = null)
    {
        if (is_array($classnum)) {
            $useMinMax = false;
            if (isset($classnum['min'])) {
                $this->addUsingAlias(ClassesPeer::CLASSNUM, $classnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classnum['max'])) {
                $this->addUsingAlias(ClassesPeer::CLASSNUM, $classnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::CLASSNUM, $classnum, $comparison);
    }

    /**
     * Filter the query on the Class column
     *
     * Example usage:
     * <code>
     * $query->filterByClass('fooValue');   // WHERE Class = 'fooValue'
     * $query->filterByClass('%fooValue%'); // WHERE Class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $class The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByClass($class = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($class)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $class)) {
                $class = str_replace('*', '%', $class);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::CLAZZ, $class, $comparison);
    }

    /**
     * Filter the query on the ClassRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByClassrefno(1234); // WHERE ClassRefNo = 1234
     * $query->filterByClassrefno(array(12, 34)); // WHERE ClassRefNo IN (12, 34)
     * $query->filterByClassrefno(array('min' => 12)); // WHERE ClassRefNo >= 12
     * $query->filterByClassrefno(array('max' => 12)); // WHERE ClassRefNo <= 12
     * </code>
     *
     * @param     mixed $classrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByClassrefno($classrefno = null, $comparison = null)
    {
        if (is_array($classrefno)) {
            $useMinMax = false;
            if (isset($classrefno['min'])) {
                $this->addUsingAlias(ClassesPeer::CLASSREFNO, $classrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classrefno['max'])) {
                $this->addUsingAlias(ClassesPeer::CLASSREFNO, $classrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::CLASSREFNO, $classrefno, $comparison);
    }

    /**
     * Filter the query on the SortNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySortno(1234); // WHERE SortNo = 1234
     * $query->filterBySortno(array(12, 34)); // WHERE SortNo IN (12, 34)
     * $query->filterBySortno(array('min' => 12)); // WHERE SortNo >= 12
     * $query->filterBySortno(array('max' => 12)); // WHERE SortNo <= 12
     * </code>
     *
     * @param     mixed $sortno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterBySortno($sortno = null, $comparison = null)
    {
        if (is_array($sortno)) {
            $useMinMax = false;
            if (isset($sortno['min'])) {
                $this->addUsingAlias(ClassesPeer::SORTNO, $sortno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortno['max'])) {
                $this->addUsingAlias(ClassesPeer::SORTNO, $sortno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::SORTNO, $sortno, $comparison);
    }

    /**
     * Filter the query on the Synonym column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonym(1234); // WHERE Synonym = 1234
     * $query->filterBySynonym(array(12, 34)); // WHERE Synonym IN (12, 34)
     * $query->filterBySynonym(array('min' => 12)); // WHERE Synonym >= 12
     * $query->filterBySynonym(array('max' => 12)); // WHERE Synonym <= 12
     * </code>
     *
     * @param     mixed $synonym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterBySynonym($synonym = null, $comparison = null)
    {
        if (is_array($synonym)) {
            $useMinMax = false;
            if (isset($synonym['min'])) {
                $this->addUsingAlias(ClassesPeer::SYNONYM, $synonym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synonym['max'])) {
                $this->addUsingAlias(ClassesPeer::SYNONYM, $synonym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::SYNONYM, $synonym, $comparison);
    }

    /**
     * Filter the query on the AuthorYear column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoryear('fooValue');   // WHERE AuthorYear = 'fooValue'
     * $query->filterByAuthoryear('%fooValue%'); // WHERE AuthorYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoryear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByAuthoryear($authoryear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoryear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoryear)) {
                $authoryear = str_replace('*', '%', $authoryear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::AUTHORYEAR, $authoryear, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the BodyShapeI column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyshapei('fooValue');   // WHERE BodyShapeI = 'fooValue'
     * $query->filterByBodyshapei('%fooValue%'); // WHERE BodyShapeI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyshapei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByBodyshapei($bodyshapei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyshapei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyshapei)) {
                $bodyshapei = str_replace('*', '%', $bodyshapei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the WaterSalinity column
     *
     * Example usage:
     * <code>
     * $query->filterByWatersalinity('fooValue');   // WHERE WaterSalinity = 'fooValue'
     * $query->filterByWatersalinity('%fooValue%'); // WHERE WaterSalinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $watersalinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByWatersalinity($watersalinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($watersalinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $watersalinity)) {
                $watersalinity = str_replace('*', '%', $watersalinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::WATERSALINITY, $watersalinity, $comparison);
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
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterBySpeciescount($speciescount = null, $comparison = null)
    {
        if (is_array($speciescount)) {
            $useMinMax = false;
            if (isset($speciescount['min'])) {
                $this->addUsingAlias(ClassesPeer::SPECIESCOUNT, $speciescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescount['max'])) {
                $this->addUsingAlias(ClassesPeer::SPECIESCOUNT, $speciescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::SPECIESCOUNT, $speciescount, $comparison);
    }

    /**
     * Filter the query on the SuperClass column
     *
     * Example usage:
     * <code>
     * $query->filterBySuperclass('fooValue');   // WHERE SuperClass = 'fooValue'
     * $query->filterBySuperclass('%fooValue%'); // WHERE SuperClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $superclass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterBySuperclass($superclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($superclass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $superclass)) {
                $superclass = str_replace('*', '%', $superclass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::SUPERCLASS, $superclass, $comparison);
    }

    /**
     * Filter the query on the Subclass column
     *
     * Example usage:
     * <code>
     * $query->filterBySubclass('fooValue');   // WHERE Subclass = 'fooValue'
     * $query->filterBySubclass('%fooValue%'); // WHERE Subclass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subclass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterBySubclass($subclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subclass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subclass)) {
                $subclass = str_replace('*', '%', $subclass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClassesPeer::SUBCLASS, $subclass, $comparison);
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
     * @return ClassesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ClassesPeer::REMARKS, $remarks, $comparison);
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
     * @return ClassesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ClassesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ClassesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClassesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Classes $classes Object to remove from the list of results
     *
     * @return ClassesQuery The current query, for fluid interface
     */
    public function prune($classes = null)
    {
        if ($classes) {
            $this->addUsingAlias(ClassesPeer::CLAZZ, $classes->getClass(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
