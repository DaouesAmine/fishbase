<?php


/**
 * Base class that represents a query for the 'rmcaphotos' table.
 *
 *
 *
 * @method RmcaphotosQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method RmcaphotosQuery orderBySpeccode($order = Criteria::ASC) Order by the speccode column
 * @method RmcaphotosQuery orderByPicgenus($order = Criteria::ASC) Order by the picgenus column
 * @method RmcaphotosQuery orderByPicspecies($order = Criteria::ASC) Order by the picspecies column
 * @method RmcaphotosQuery orderByPicname($order = Criteria::ASC) Order by the picname column
 * @method RmcaphotosQuery orderByAuthname($order = Criteria::ASC) Order by the authname column
 * @method RmcaphotosQuery orderByCatalognumber($order = Criteria::ASC) Order by the catalognumber column
 * @method RmcaphotosQuery orderByCredit($order = Criteria::ASC) Order by the credit column
 * @method RmcaphotosQuery orderByTypestatus($order = Criteria::ASC) Order by the typestatus column
 * @method RmcaphotosQuery orderByDatecollected($order = Criteria::ASC) Order by the datecollected column
 * @method RmcaphotosQuery orderByCCode($order = Criteria::ASC) Order by the c_code column
 * @method RmcaphotosQuery orderByLocality($order = Criteria::ASC) Order by the locality column
 * @method RmcaphotosQuery orderByCollector($order = Criteria::ASC) Order by the collector column
 *
 * @method RmcaphotosQuery groupByAutoctr() Group by the autoctr column
 * @method RmcaphotosQuery groupBySpeccode() Group by the speccode column
 * @method RmcaphotosQuery groupByPicgenus() Group by the picgenus column
 * @method RmcaphotosQuery groupByPicspecies() Group by the picspecies column
 * @method RmcaphotosQuery groupByPicname() Group by the picname column
 * @method RmcaphotosQuery groupByAuthname() Group by the authname column
 * @method RmcaphotosQuery groupByCatalognumber() Group by the catalognumber column
 * @method RmcaphotosQuery groupByCredit() Group by the credit column
 * @method RmcaphotosQuery groupByTypestatus() Group by the typestatus column
 * @method RmcaphotosQuery groupByDatecollected() Group by the datecollected column
 * @method RmcaphotosQuery groupByCCode() Group by the c_code column
 * @method RmcaphotosQuery groupByLocality() Group by the locality column
 * @method RmcaphotosQuery groupByCollector() Group by the collector column
 *
 * @method RmcaphotosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RmcaphotosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RmcaphotosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Rmcaphotos findOne(PropelPDO $con = null) Return the first Rmcaphotos matching the query
 * @method Rmcaphotos findOneOrCreate(PropelPDO $con = null) Return the first Rmcaphotos matching the query, or a new Rmcaphotos object populated from the query conditions when no match is found
 *
 * @method Rmcaphotos findOneBySpeccode(int $speccode) Return the first Rmcaphotos filtered by the speccode column
 * @method Rmcaphotos findOneByPicgenus(string $picgenus) Return the first Rmcaphotos filtered by the picgenus column
 * @method Rmcaphotos findOneByPicspecies(string $picspecies) Return the first Rmcaphotos filtered by the picspecies column
 * @method Rmcaphotos findOneByPicname(string $picname) Return the first Rmcaphotos filtered by the picname column
 * @method Rmcaphotos findOneByAuthname(string $authname) Return the first Rmcaphotos filtered by the authname column
 * @method Rmcaphotos findOneByCatalognumber(string $catalognumber) Return the first Rmcaphotos filtered by the catalognumber column
 * @method Rmcaphotos findOneByCredit(string $credit) Return the first Rmcaphotos filtered by the credit column
 * @method Rmcaphotos findOneByTypestatus(string $typestatus) Return the first Rmcaphotos filtered by the typestatus column
 * @method Rmcaphotos findOneByDatecollected(string $datecollected) Return the first Rmcaphotos filtered by the datecollected column
 * @method Rmcaphotos findOneByCCode(string $c_code) Return the first Rmcaphotos filtered by the c_code column
 * @method Rmcaphotos findOneByLocality(string $locality) Return the first Rmcaphotos filtered by the locality column
 * @method Rmcaphotos findOneByCollector(string $collector) Return the first Rmcaphotos filtered by the collector column
 *
 * @method array findByAutoctr(int $autoctr) Return Rmcaphotos objects filtered by the autoctr column
 * @method array findBySpeccode(int $speccode) Return Rmcaphotos objects filtered by the speccode column
 * @method array findByPicgenus(string $picgenus) Return Rmcaphotos objects filtered by the picgenus column
 * @method array findByPicspecies(string $picspecies) Return Rmcaphotos objects filtered by the picspecies column
 * @method array findByPicname(string $picname) Return Rmcaphotos objects filtered by the picname column
 * @method array findByAuthname(string $authname) Return Rmcaphotos objects filtered by the authname column
 * @method array findByCatalognumber(string $catalognumber) Return Rmcaphotos objects filtered by the catalognumber column
 * @method array findByCredit(string $credit) Return Rmcaphotos objects filtered by the credit column
 * @method array findByTypestatus(string $typestatus) Return Rmcaphotos objects filtered by the typestatus column
 * @method array findByDatecollected(string $datecollected) Return Rmcaphotos objects filtered by the datecollected column
 * @method array findByCCode(string $c_code) Return Rmcaphotos objects filtered by the c_code column
 * @method array findByLocality(string $locality) Return Rmcaphotos objects filtered by the locality column
 * @method array findByCollector(string $collector) Return Rmcaphotos objects filtered by the collector column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRmcaphotosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRmcaphotosQuery object.
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
            $modelName = 'Rmcaphotos';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RmcaphotosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RmcaphotosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RmcaphotosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RmcaphotosQuery) {
            return $criteria;
        }
        $query = new RmcaphotosQuery(null, null, $modelAlias);

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
     * @return   Rmcaphotos|Rmcaphotos[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RmcaphotosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RmcaphotosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Rmcaphotos A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Rmcaphotos A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `speccode`, `picgenus`, `picspecies`, `picname`, `authname`, `catalognumber`, `credit`, `typestatus`, `datecollected`, `c_code`, `locality`, `collector` FROM `rmcaphotos` WHERE `autoctr` = :p0';
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
            $obj = new Rmcaphotos();
            $obj->hydrate($row);
            RmcaphotosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Rmcaphotos|Rmcaphotos[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Rmcaphotos[]|mixed the list of results, formatted by the current formatter
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
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(RmcaphotosPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(RmcaphotosPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the picgenus column
     *
     * Example usage:
     * <code>
     * $query->filterByPicgenus('fooValue');   // WHERE picgenus = 'fooValue'
     * $query->filterByPicgenus('%fooValue%'); // WHERE picgenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByPicgenus($picgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picgenus)) {
                $picgenus = str_replace('*', '%', $picgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::PICGENUS, $picgenus, $comparison);
    }

    /**
     * Filter the query on the picspecies column
     *
     * Example usage:
     * <code>
     * $query->filterByPicspecies('fooValue');   // WHERE picspecies = 'fooValue'
     * $query->filterByPicspecies('%fooValue%'); // WHERE picspecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByPicspecies($picspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picspecies)) {
                $picspecies = str_replace('*', '%', $picspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::PICSPECIES, $picspecies, $comparison);
    }

    /**
     * Filter the query on the picname column
     *
     * Example usage:
     * <code>
     * $query->filterByPicname('fooValue');   // WHERE picname = 'fooValue'
     * $query->filterByPicname('%fooValue%'); // WHERE picname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RmcaphotosPeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the authname column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthname('fooValue');   // WHERE authname = 'fooValue'
     * $query->filterByAuthname('%fooValue%'); // WHERE authname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RmcaphotosPeer::AUTHNAME, $authname, $comparison);
    }

    /**
     * Filter the query on the catalognumber column
     *
     * Example usage:
     * <code>
     * $query->filterByCatalognumber('fooValue');   // WHERE catalognumber = 'fooValue'
     * $query->filterByCatalognumber('%fooValue%'); // WHERE catalognumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catalognumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByCatalognumber($catalognumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catalognumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catalognumber)) {
                $catalognumber = str_replace('*', '%', $catalognumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::CATALOGNUMBER, $catalognumber, $comparison);
    }

    /**
     * Filter the query on the credit column
     *
     * Example usage:
     * <code>
     * $query->filterByCredit('fooValue');   // WHERE credit = 'fooValue'
     * $query->filterByCredit('%fooValue%'); // WHERE credit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $credit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByCredit($credit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($credit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $credit)) {
                $credit = str_replace('*', '%', $credit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::CREDIT, $credit, $comparison);
    }

    /**
     * Filter the query on the typestatus column
     *
     * Example usage:
     * <code>
     * $query->filterByTypestatus('fooValue');   // WHERE typestatus = 'fooValue'
     * $query->filterByTypestatus('%fooValue%'); // WHERE typestatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typestatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByTypestatus($typestatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typestatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typestatus)) {
                $typestatus = str_replace('*', '%', $typestatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::TYPESTATUS, $typestatus, $comparison);
    }

    /**
     * Filter the query on the datecollected column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecollected('fooValue');   // WHERE datecollected = 'fooValue'
     * $query->filterByDatecollected('%fooValue%'); // WHERE datecollected LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datecollected The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByDatecollected($datecollected = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datecollected)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datecollected)) {
                $datecollected = str_replace('*', '%', $datecollected);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::DATECOLLECTED, $datecollected, $comparison);
    }

    /**
     * Filter the query on the c_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE c_code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE c_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RmcaphotosPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RmcaphotosPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the collector column
     *
     * Example usage:
     * <code>
     * $query->filterByCollector('fooValue');   // WHERE collector = 'fooValue'
     * $query->filterByCollector('%fooValue%'); // WHERE collector LIKE '%fooValue%'
     * </code>
     *
     * @param     string $collector The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function filterByCollector($collector = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collector)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collector)) {
                $collector = str_replace('*', '%', $collector);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RmcaphotosPeer::COLLECTOR, $collector, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Rmcaphotos $rmcaphotos Object to remove from the list of results
     *
     * @return RmcaphotosQuery The current query, for fluid interface
     */
    public function prune($rmcaphotos = null)
    {
        if ($rmcaphotos) {
            $this->addUsingAlias(RmcaphotosPeer::AUTOCTR, $rmcaphotos->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
