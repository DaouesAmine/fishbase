<?php


/**
 * Base class that represents a query for the 'materialsexamined' table.
 *
 *
 *
 * @method MaterialsexaminedQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method MaterialsexaminedQuery orderByMus($order = Criteria::ASC) Order by the Mus column
 * @method MaterialsexaminedQuery orderByAquisitionno($order = Criteria::ASC) Order by the AquisitionNo column
 * @method MaterialsexaminedQuery orderByExaminedrefno($order = Criteria::ASC) Order by the ExaminedRefNo column
 * @method MaterialsexaminedQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method MaterialsexaminedQuery orderByGenuscol($order = Criteria::ASC) Order by the GenusCol column
 * @method MaterialsexaminedQuery orderBySpeciescol($order = Criteria::ASC) Order by the SpeciesCol column
 * @method MaterialsexaminedQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method MaterialsexaminedQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method MaterialsexaminedQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method MaterialsexaminedQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MaterialsexaminedQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MaterialsexaminedQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MaterialsexaminedQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MaterialsexaminedQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MaterialsexaminedQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method MaterialsexaminedQuery groupById() Group by the Id column
 * @method MaterialsexaminedQuery groupByMus() Group by the Mus column
 * @method MaterialsexaminedQuery groupByAquisitionno() Group by the AquisitionNo column
 * @method MaterialsexaminedQuery groupByExaminedrefno() Group by the ExaminedRefNo column
 * @method MaterialsexaminedQuery groupByType() Group by the Type column
 * @method MaterialsexaminedQuery groupByGenuscol() Group by the GenusCol column
 * @method MaterialsexaminedQuery groupBySpeciescol() Group by the SpeciesCol column
 * @method MaterialsexaminedQuery groupBySyncode() Group by the SynCode column
 * @method MaterialsexaminedQuery groupByLocality() Group by the Locality column
 * @method MaterialsexaminedQuery groupByComments() Group by the Comments column
 * @method MaterialsexaminedQuery groupByEntered() Group by the Entered column
 * @method MaterialsexaminedQuery groupByDateentered() Group by the DateEntered column
 * @method MaterialsexaminedQuery groupByModified() Group by the Modified column
 * @method MaterialsexaminedQuery groupByDatemodified() Group by the DateModified column
 * @method MaterialsexaminedQuery groupByExpert() Group by the Expert column
 * @method MaterialsexaminedQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method MaterialsexaminedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MaterialsexaminedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MaterialsexaminedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Materialsexamined findOne(PropelPDO $con = null) Return the first Materialsexamined matching the query
 * @method Materialsexamined findOneOrCreate(PropelPDO $con = null) Return the first Materialsexamined matching the query, or a new Materialsexamined object populated from the query conditions when no match is found
 *
 * @method Materialsexamined findOneById(int $Id) Return the first Materialsexamined filtered by the Id column
 * @method Materialsexamined findOneByMus(string $Mus) Return the first Materialsexamined filtered by the Mus column
 * @method Materialsexamined findOneByExaminedrefno(int $ExaminedRefNo) Return the first Materialsexamined filtered by the ExaminedRefNo column
 * @method Materialsexamined findOneByType(string $Type) Return the first Materialsexamined filtered by the Type column
 * @method Materialsexamined findOneByGenuscol(string $GenusCol) Return the first Materialsexamined filtered by the GenusCol column
 * @method Materialsexamined findOneBySpeciescol(string $SpeciesCol) Return the first Materialsexamined filtered by the SpeciesCol column
 * @method Materialsexamined findOneBySyncode(int $SynCode) Return the first Materialsexamined filtered by the SynCode column
 * @method Materialsexamined findOneByLocality(string $Locality) Return the first Materialsexamined filtered by the Locality column
 * @method Materialsexamined findOneByComments(string $Comments) Return the first Materialsexamined filtered by the Comments column
 * @method Materialsexamined findOneByEntered(int $Entered) Return the first Materialsexamined filtered by the Entered column
 * @method Materialsexamined findOneByDateentered(string $DateEntered) Return the first Materialsexamined filtered by the DateEntered column
 * @method Materialsexamined findOneByModified(int $Modified) Return the first Materialsexamined filtered by the Modified column
 * @method Materialsexamined findOneByDatemodified(string $DateModified) Return the first Materialsexamined filtered by the DateModified column
 * @method Materialsexamined findOneByExpert(int $Expert) Return the first Materialsexamined filtered by the Expert column
 * @method Materialsexamined findOneByDatechecked(string $DateChecked) Return the first Materialsexamined filtered by the DateChecked column
 *
 * @method array findById(int $Id) Return Materialsexamined objects filtered by the Id column
 * @method array findByMus(string $Mus) Return Materialsexamined objects filtered by the Mus column
 * @method array findByAquisitionno(string $AquisitionNo) Return Materialsexamined objects filtered by the AquisitionNo column
 * @method array findByExaminedrefno(int $ExaminedRefNo) Return Materialsexamined objects filtered by the ExaminedRefNo column
 * @method array findByType(string $Type) Return Materialsexamined objects filtered by the Type column
 * @method array findByGenuscol(string $GenusCol) Return Materialsexamined objects filtered by the GenusCol column
 * @method array findBySpeciescol(string $SpeciesCol) Return Materialsexamined objects filtered by the SpeciesCol column
 * @method array findBySyncode(int $SynCode) Return Materialsexamined objects filtered by the SynCode column
 * @method array findByLocality(string $Locality) Return Materialsexamined objects filtered by the Locality column
 * @method array findByComments(string $Comments) Return Materialsexamined objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Materialsexamined objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Materialsexamined objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Materialsexamined objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Materialsexamined objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Materialsexamined objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Materialsexamined objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMaterialsexaminedQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMaterialsexaminedQuery object.
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
            $modelName = 'Materialsexamined';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaterialsexaminedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MaterialsexaminedQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaterialsexaminedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaterialsexaminedQuery) {
            return $criteria;
        }
        $query = new MaterialsexaminedQuery(null, null, $modelAlias);

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
     * @return   Materialsexamined|Materialsexamined[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaterialsexaminedPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaterialsexaminedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Materialsexamined A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAquisitionno($key, $con = null)
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
     * @return                 Materialsexamined A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Id`, `Mus`, `AquisitionNo`, `ExaminedRefNo`, `Type`, `GenusCol`, `SpeciesCol`, `SynCode`, `Locality`, `Comments`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `materialsexamined` WHERE `AquisitionNo` = :p0';
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
            $obj = new Materialsexamined();
            $obj->hydrate($row);
            MaterialsexaminedPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Materialsexamined|Materialsexamined[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Materialsexamined[]|mixed the list of results, formatted by the current formatter
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MaterialsexaminedPeer::AQUISITIONNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MaterialsexaminedPeer::AQUISITIONNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id >= 12
     * $query->filterById(array('max' => 12)); // WHERE Id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Mus column
     *
     * Example usage:
     * <code>
     * $query->filterByMus('fooValue');   // WHERE Mus = 'fooValue'
     * $query->filterByMus('%fooValue%'); // WHERE Mus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByMus($mus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mus)) {
                $mus = str_replace('*', '%', $mus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::MUS, $mus, $comparison);
    }

    /**
     * Filter the query on the AquisitionNo column
     *
     * Example usage:
     * <code>
     * $query->filterByAquisitionno('fooValue');   // WHERE AquisitionNo = 'fooValue'
     * $query->filterByAquisitionno('%fooValue%'); // WHERE AquisitionNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquisitionno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByAquisitionno($aquisitionno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquisitionno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquisitionno)) {
                $aquisitionno = str_replace('*', '%', $aquisitionno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::AQUISITIONNO, $aquisitionno, $comparison);
    }

    /**
     * Filter the query on the ExaminedRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByExaminedrefno(1234); // WHERE ExaminedRefNo = 1234
     * $query->filterByExaminedrefno(array(12, 34)); // WHERE ExaminedRefNo IN (12, 34)
     * $query->filterByExaminedrefno(array('min' => 12)); // WHERE ExaminedRefNo >= 12
     * $query->filterByExaminedrefno(array('max' => 12)); // WHERE ExaminedRefNo <= 12
     * </code>
     *
     * @param     mixed $examinedrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByExaminedrefno($examinedrefno = null, $comparison = null)
    {
        if (is_array($examinedrefno)) {
            $useMinMax = false;
            if (isset($examinedrefno['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::EXAMINEDREFNO, $examinedrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($examinedrefno['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::EXAMINEDREFNO, $examinedrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::EXAMINEDREFNO, $examinedrefno, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaterialsexaminedPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the GenusCol column
     *
     * Example usage:
     * <code>
     * $query->filterByGenuscol('fooValue');   // WHERE GenusCol = 'fooValue'
     * $query->filterByGenuscol('%fooValue%'); // WHERE GenusCol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genuscol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByGenuscol($genuscol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genuscol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genuscol)) {
                $genuscol = str_replace('*', '%', $genuscol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::GENUSCOL, $genuscol, $comparison);
    }

    /**
     * Filter the query on the SpeciesCol column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescol('fooValue');   // WHERE SpeciesCol = 'fooValue'
     * $query->filterBySpeciescol('%fooValue%'); // WHERE SpeciesCol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciescol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterBySpeciescol($speciescol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciescol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciescol)) {
                $speciescol = str_replace('*', '%', $speciescol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::SPECIESCOL, $speciescol, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::SYNCODE, $syncode, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaterialsexaminedPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::COMMENTS, $comments, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::ENTERED, $entered, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::MODIFIED, $modified, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::EXPERT, $expert, $comparison);
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
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MaterialsexaminedPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialsexaminedPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Materialsexamined $materialsexamined Object to remove from the list of results
     *
     * @return MaterialsexaminedQuery The current query, for fluid interface
     */
    public function prune($materialsexamined = null)
    {
        if ($materialsexamined) {
            $this->addUsingAlias(MaterialsexaminedPeer::AQUISITIONNO, $materialsexamined->getAquisitionno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
