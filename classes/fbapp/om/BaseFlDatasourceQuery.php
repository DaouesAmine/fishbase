<?php


/**
 * Base class that represents a query for the 'fl_datasource' table.
 *
 *
 *
 * @method FlDatasourceQuery orderByDatasourcecode($order = Criteria::ASC) Order by the DataSourceCode column
 * @method FlDatasourceQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method FlDatasourceQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method FlDatasourceQuery orderByTitle($order = Criteria::ASC) Order by the Title column
 * @method FlDatasourceQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method FlDatasourceQuery orderByPublisher($order = Criteria::ASC) Order by the Publisher column
 * @method FlDatasourceQuery orderByVolume($order = Criteria::ASC) Order by the Volume column
 * @method FlDatasourceQuery orderByPagination($order = Criteria::ASC) Order by the Pagination column
 * @method FlDatasourceQuery orderByOriginalsourceused($order = Criteria::ASC) Order by the OriginalSourceUsed column
 * @method FlDatasourceQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method FlDatasourceQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlDatasourceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlDatasourceQuery groupByDatasourcecode() Group by the DataSourceCode column
 * @method FlDatasourceQuery groupByAuthor() Group by the Author column
 * @method FlDatasourceQuery groupByYear() Group by the Year column
 * @method FlDatasourceQuery groupByTitle() Group by the Title column
 * @method FlDatasourceQuery groupBySource() Group by the Source column
 * @method FlDatasourceQuery groupByPublisher() Group by the Publisher column
 * @method FlDatasourceQuery groupByVolume() Group by the Volume column
 * @method FlDatasourceQuery groupByPagination() Group by the Pagination column
 * @method FlDatasourceQuery groupByOriginalsourceused() Group by the OriginalSourceUsed column
 * @method FlDatasourceQuery groupByDescription() Group by the Description column
 * @method FlDatasourceQuery groupByEditable() Group by the Editable column
 * @method FlDatasourceQuery groupByTs() Group by the TS column
 *
 * @method FlDatasourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlDatasourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlDatasourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlDatasource findOne(PropelPDO $con = null) Return the first FlDatasource matching the query
 * @method FlDatasource findOneOrCreate(PropelPDO $con = null) Return the first FlDatasource matching the query, or a new FlDatasource object populated from the query conditions when no match is found
 *
 * @method FlDatasource findOneByAuthor(string $Author) Return the first FlDatasource filtered by the Author column
 * @method FlDatasource findOneByYear(int $Year) Return the first FlDatasource filtered by the Year column
 * @method FlDatasource findOneByTitle(string $Title) Return the first FlDatasource filtered by the Title column
 * @method FlDatasource findOneBySource(string $Source) Return the first FlDatasource filtered by the Source column
 * @method FlDatasource findOneByPublisher(string $Publisher) Return the first FlDatasource filtered by the Publisher column
 * @method FlDatasource findOneByVolume(string $Volume) Return the first FlDatasource filtered by the Volume column
 * @method FlDatasource findOneByPagination(string $Pagination) Return the first FlDatasource filtered by the Pagination column
 * @method FlDatasource findOneByOriginalsourceused(string $OriginalSourceUsed) Return the first FlDatasource filtered by the OriginalSourceUsed column
 * @method FlDatasource findOneByDescription(string $Description) Return the first FlDatasource filtered by the Description column
 * @method FlDatasource findOneByEditable(string $Editable) Return the first FlDatasource filtered by the Editable column
 * @method FlDatasource findOneByTs(string $TS) Return the first FlDatasource filtered by the TS column
 *
 * @method array findByDatasourcecode(int $DataSourceCode) Return FlDatasource objects filtered by the DataSourceCode column
 * @method array findByAuthor(string $Author) Return FlDatasource objects filtered by the Author column
 * @method array findByYear(int $Year) Return FlDatasource objects filtered by the Year column
 * @method array findByTitle(string $Title) Return FlDatasource objects filtered by the Title column
 * @method array findBySource(string $Source) Return FlDatasource objects filtered by the Source column
 * @method array findByPublisher(string $Publisher) Return FlDatasource objects filtered by the Publisher column
 * @method array findByVolume(string $Volume) Return FlDatasource objects filtered by the Volume column
 * @method array findByPagination(string $Pagination) Return FlDatasource objects filtered by the Pagination column
 * @method array findByOriginalsourceused(string $OriginalSourceUsed) Return FlDatasource objects filtered by the OriginalSourceUsed column
 * @method array findByDescription(string $Description) Return FlDatasource objects filtered by the Description column
 * @method array findByEditable(string $Editable) Return FlDatasource objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlDatasource objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlDatasourceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlDatasourceQuery object.
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
            $modelName = 'FlDatasource';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlDatasourceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlDatasourceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlDatasourceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlDatasourceQuery) {
            return $criteria;
        }
        $query = new FlDatasourceQuery(null, null, $modelAlias);

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
     * @return   FlDatasource|FlDatasource[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlDatasourcePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlDatasourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlDatasource A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByDatasourcecode($key, $con = null)
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
     * @return                 FlDatasource A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `DataSourceCode`, `Author`, `Year`, `Title`, `Source`, `Publisher`, `Volume`, `Pagination`, `OriginalSourceUsed`, `Description`, `Editable`, `TS` FROM `fl_datasource` WHERE `DataSourceCode` = :p0';
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
            $obj = new FlDatasource();
            $obj->hydrate($row);
            FlDatasourcePeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlDatasource|FlDatasource[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlDatasource[]|mixed the list of results, formatted by the current formatter
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
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DataSourceCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDatasourcecode(1234); // WHERE DataSourceCode = 1234
     * $query->filterByDatasourcecode(array(12, 34)); // WHERE DataSourceCode IN (12, 34)
     * $query->filterByDatasourcecode(array('min' => 12)); // WHERE DataSourceCode >= 12
     * $query->filterByDatasourcecode(array('max' => 12)); // WHERE DataSourceCode <= 12
     * </code>
     *
     * @param     mixed $datasourcecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByDatasourcecode($datasourcecode = null, $comparison = null)
    {
        if (is_array($datasourcecode)) {
            $useMinMax = false;
            if (isset($datasourcecode['min'])) {
                $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $datasourcecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datasourcecode['max'])) {
                $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $datasourcecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $datasourcecode, $comparison);
    }

    /**
     * Filter the query on the Author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE Author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE Author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $author)) {
                $author = str_replace('*', '%', $author);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(FlDatasourcePeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(FlDatasourcePeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE Title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE Title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the Publisher column
     *
     * Example usage:
     * <code>
     * $query->filterByPublisher('fooValue');   // WHERE Publisher = 'fooValue'
     * $query->filterByPublisher('%fooValue%'); // WHERE Publisher LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publisher The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByPublisher($publisher = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publisher)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publisher)) {
                $publisher = str_replace('*', '%', $publisher);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::PUBLISHER, $publisher, $comparison);
    }

    /**
     * Filter the query on the Volume column
     *
     * Example usage:
     * <code>
     * $query->filterByVolume('fooValue');   // WHERE Volume = 'fooValue'
     * $query->filterByVolume('%fooValue%'); // WHERE Volume LIKE '%fooValue%'
     * </code>
     *
     * @param     string $volume The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByVolume($volume = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($volume)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $volume)) {
                $volume = str_replace('*', '%', $volume);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::VOLUME, $volume, $comparison);
    }

    /**
     * Filter the query on the Pagination column
     *
     * Example usage:
     * <code>
     * $query->filterByPagination('fooValue');   // WHERE Pagination = 'fooValue'
     * $query->filterByPagination('%fooValue%'); // WHERE Pagination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pagination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByPagination($pagination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pagination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pagination)) {
                $pagination = str_replace('*', '%', $pagination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::PAGINATION, $pagination, $comparison);
    }

    /**
     * Filter the query on the OriginalSourceUsed column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalsourceused('fooValue');   // WHERE OriginalSourceUsed = 'fooValue'
     * $query->filterByOriginalsourceused('%fooValue%'); // WHERE OriginalSourceUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalsourceused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByOriginalsourceused($originalsourceused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalsourceused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originalsourceused)) {
                $originalsourceused = str_replace('*', '%', $originalsourceused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::ORIGINALSOURCEUSED, $originalsourceused, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::DESCRIPTION, $description, $comparison);
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
     * @return FlDatasourceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlDatasourcePeer::EDITABLE, $editable, $comparison);
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
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlDatasourcePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlDatasourcePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlDatasourcePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlDatasource $flDatasource Object to remove from the list of results
     *
     * @return FlDatasourceQuery The current query, for fluid interface
     */
    public function prune($flDatasource = null)
    {
        if ($flDatasource) {
            $this->addUsingAlias(FlDatasourcePeer::DATASOURCECODE, $flDatasource->getDatasourcecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
