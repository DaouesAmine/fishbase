<?php


/**
 * Base class that represents a query for the 'uploaded_references' table.
 *
 *
 *
 * @method UploadedReferencesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UploadedReferencesQuery orderBySpeccode($order = Criteria::ASC) Order by the speccode column
 * @method UploadedReferencesQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method UploadedReferencesQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method UploadedReferencesQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method UploadedReferencesQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method UploadedReferencesQuery orderByNameused($order = Criteria::ASC) Order by the nameused column
 * @method UploadedReferencesQuery orderByFile($order = Criteria::ASC) Order by the file column
 * @method UploadedReferencesQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method UploadedReferencesQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method UploadedReferencesQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method UploadedReferencesQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method UploadedReferencesQuery groupById() Group by the id column
 * @method UploadedReferencesQuery groupBySpeccode() Group by the speccode column
 * @method UploadedReferencesQuery groupByAuthor() Group by the author column
 * @method UploadedReferencesQuery groupByYear() Group by the year column
 * @method UploadedReferencesQuery groupByTitle() Group by the title column
 * @method UploadedReferencesQuery groupBySource() Group by the source column
 * @method UploadedReferencesQuery groupByNameused() Group by the nameused column
 * @method UploadedReferencesQuery groupByFile() Group by the file column
 * @method UploadedReferencesQuery groupByKeywords() Group by the keywords column
 * @method UploadedReferencesQuery groupByName() Group by the name column
 * @method UploadedReferencesQuery groupByCountry() Group by the country column
 * @method UploadedReferencesQuery groupByEmail() Group by the email column
 *
 * @method UploadedReferencesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UploadedReferencesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UploadedReferencesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UploadedReferences findOne(PropelPDO $con = null) Return the first UploadedReferences matching the query
 * @method UploadedReferences findOneOrCreate(PropelPDO $con = null) Return the first UploadedReferences matching the query, or a new UploadedReferences object populated from the query conditions when no match is found
 *
 * @method UploadedReferences findOneBySpeccode(int $speccode) Return the first UploadedReferences filtered by the speccode column
 * @method UploadedReferences findOneByAuthor(string $author) Return the first UploadedReferences filtered by the author column
 * @method UploadedReferences findOneByYear(int $year) Return the first UploadedReferences filtered by the year column
 * @method UploadedReferences findOneByTitle(string $title) Return the first UploadedReferences filtered by the title column
 * @method UploadedReferences findOneBySource(string $source) Return the first UploadedReferences filtered by the source column
 * @method UploadedReferences findOneByNameused(string $nameused) Return the first UploadedReferences filtered by the nameused column
 * @method UploadedReferences findOneByFile(string $file) Return the first UploadedReferences filtered by the file column
 * @method UploadedReferences findOneByKeywords(string $keywords) Return the first UploadedReferences filtered by the keywords column
 * @method UploadedReferences findOneByName(string $name) Return the first UploadedReferences filtered by the name column
 * @method UploadedReferences findOneByCountry(string $country) Return the first UploadedReferences filtered by the country column
 * @method UploadedReferences findOneByEmail(string $email) Return the first UploadedReferences filtered by the email column
 *
 * @method array findById(int $id) Return UploadedReferences objects filtered by the id column
 * @method array findBySpeccode(int $speccode) Return UploadedReferences objects filtered by the speccode column
 * @method array findByAuthor(string $author) Return UploadedReferences objects filtered by the author column
 * @method array findByYear(int $year) Return UploadedReferences objects filtered by the year column
 * @method array findByTitle(string $title) Return UploadedReferences objects filtered by the title column
 * @method array findBySource(string $source) Return UploadedReferences objects filtered by the source column
 * @method array findByNameused(string $nameused) Return UploadedReferences objects filtered by the nameused column
 * @method array findByFile(string $file) Return UploadedReferences objects filtered by the file column
 * @method array findByKeywords(string $keywords) Return UploadedReferences objects filtered by the keywords column
 * @method array findByName(string $name) Return UploadedReferences objects filtered by the name column
 * @method array findByCountry(string $country) Return UploadedReferences objects filtered by the country column
 * @method array findByEmail(string $email) Return UploadedReferences objects filtered by the email column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseUploadedReferencesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUploadedReferencesQuery object.
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
            $modelName = 'UploadedReferences';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UploadedReferencesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UploadedReferencesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UploadedReferencesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UploadedReferencesQuery) {
            return $criteria;
        }
        $query = new UploadedReferencesQuery(null, null, $modelAlias);

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
     * @return   UploadedReferences|UploadedReferences[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UploadedReferencesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UploadedReferencesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 UploadedReferences A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 UploadedReferences A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `speccode`, `author`, `year`, `title`, `source`, `nameused`, `file`, `keywords`, `name`, `country`, `email` FROM `uploaded_references` WHERE `id` = :p0';
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
            $obj = new UploadedReferences();
            $obj->hydrate($row);
            UploadedReferencesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UploadedReferences|UploadedReferences[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UploadedReferences[]|mixed the list of results, formatted by the current formatter
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
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UploadedReferencesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UploadedReferencesPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UploadedReferencesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UploadedReferencesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::ID, $id, $comparison);
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
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(UploadedReferencesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(UploadedReferencesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UploadedReferencesPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(UploadedReferencesPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(UploadedReferencesPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UploadedReferencesPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UploadedReferencesPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the nameused column
     *
     * Example usage:
     * <code>
     * $query->filterByNameused('fooValue');   // WHERE nameused = 'fooValue'
     * $query->filterByNameused('%fooValue%'); // WHERE nameused LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByNameused($nameused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameused)) {
                $nameused = str_replace('*', '%', $nameused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::NAMEUSED, $nameused, $comparison);
    }

    /**
     * Filter the query on the file column
     *
     * Example usage:
     * <code>
     * $query->filterByFile('fooValue');   // WHERE file = 'fooValue'
     * $query->filterByFile('%fooValue%'); // WHERE file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $file The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByFile($file = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($file)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $file)) {
                $file = str_replace('*', '%', $file);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::FILE, $file, $comparison);
    }

    /**
     * Filter the query on the keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByKeywords('fooValue');   // WHERE keywords = 'fooValue'
     * $query->filterByKeywords('%fooValue%'); // WHERE keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByKeywords($keywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keywords)) {
                $keywords = str_replace('*', '%', $keywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UploadedReferencesPeer::EMAIL, $email, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   UploadedReferences $uploadedReferences Object to remove from the list of results
     *
     * @return UploadedReferencesQuery The current query, for fluid interface
     */
    public function prune($uploadedReferences = null)
    {
        if ($uploadedReferences) {
            $this->addUsingAlias(UploadedReferencesPeer::ID, $uploadedReferences->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
