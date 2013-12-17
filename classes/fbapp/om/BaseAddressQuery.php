<?php


/**
 * Base class that represents a query for the 'address' table.
 *
 *
 *
 * @method AddressQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method AddressQuery orderByAddress($order = Criteria::ASC) Order by the Address column
 * @method AddressQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method AddressQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method AddressQuery orderByTelephone($order = Criteria::ASC) Order by the Telephone column
 * @method AddressQuery orderByFax($order = Criteria::ASC) Order by the Fax column
 * @method AddressQuery orderByEmail($order = Criteria::ASC) Order by the EMail column
 * @method AddressQuery orderByInternet($order = Criteria::ASC) Order by the Internet column
 * @method AddressQuery orderByAddress1($order = Criteria::ASC) Order by the Address1 column
 * @method AddressQuery orderByAddress2($order = Criteria::ASC) Order by the Address2 column
 * @method AddressQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method AddressQuery orderByProvince($order = Criteria::ASC) Order by the Province column
 * @method AddressQuery orderByEmail1($order = Criteria::ASC) Order by the Email1 column
 * @method AddressQuery orderByEmail2($order = Criteria::ASC) Order by the Email2 column
 * @method AddressQuery orderByInternet1($order = Criteria::ASC) Order by the Internet1 column
 * @method AddressQuery orderByInternet2($order = Criteria::ASC) Order by the Internet2 column
 * @method AddressQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AddressQuery groupById() Group by the ID column
 * @method AddressQuery groupByAddress() Group by the Address column
 * @method AddressQuery groupByName() Group by the Name column
 * @method AddressQuery groupByCountry() Group by the Country column
 * @method AddressQuery groupByTelephone() Group by the Telephone column
 * @method AddressQuery groupByFax() Group by the Fax column
 * @method AddressQuery groupByEmail() Group by the EMail column
 * @method AddressQuery groupByInternet() Group by the Internet column
 * @method AddressQuery groupByAddress1() Group by the Address1 column
 * @method AddressQuery groupByAddress2() Group by the Address2 column
 * @method AddressQuery groupByCity() Group by the City column
 * @method AddressQuery groupByProvince() Group by the Province column
 * @method AddressQuery groupByEmail1() Group by the Email1 column
 * @method AddressQuery groupByEmail2() Group by the Email2 column
 * @method AddressQuery groupByInternet1() Group by the Internet1 column
 * @method AddressQuery groupByInternet2() Group by the Internet2 column
 * @method AddressQuery groupByTs() Group by the TS column
 *
 * @method AddressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AddressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AddressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Address findOne(PropelPDO $con = null) Return the first Address matching the query
 * @method Address findOneOrCreate(PropelPDO $con = null) Return the first Address matching the query, or a new Address object populated from the query conditions when no match is found
 *
 * @method Address findOneByAddress(string $Address) Return the first Address filtered by the Address column
 * @method Address findOneByName(string $Name) Return the first Address filtered by the Name column
 * @method Address findOneByCountry(string $Country) Return the first Address filtered by the Country column
 * @method Address findOneByTelephone(string $Telephone) Return the first Address filtered by the Telephone column
 * @method Address findOneByFax(string $Fax) Return the first Address filtered by the Fax column
 * @method Address findOneByEmail(string $EMail) Return the first Address filtered by the EMail column
 * @method Address findOneByInternet(string $Internet) Return the first Address filtered by the Internet column
 * @method Address findOneByAddress1(string $Address1) Return the first Address filtered by the Address1 column
 * @method Address findOneByAddress2(string $Address2) Return the first Address filtered by the Address2 column
 * @method Address findOneByCity(string $City) Return the first Address filtered by the City column
 * @method Address findOneByProvince(string $Province) Return the first Address filtered by the Province column
 * @method Address findOneByEmail1(string $Email1) Return the first Address filtered by the Email1 column
 * @method Address findOneByEmail2(string $Email2) Return the first Address filtered by the Email2 column
 * @method Address findOneByInternet1(string $Internet1) Return the first Address filtered by the Internet1 column
 * @method Address findOneByInternet2(string $Internet2) Return the first Address filtered by the Internet2 column
 * @method Address findOneByTs(string $TS) Return the first Address filtered by the TS column
 *
 * @method array findById(int $ID) Return Address objects filtered by the ID column
 * @method array findByAddress(string $Address) Return Address objects filtered by the Address column
 * @method array findByName(string $Name) Return Address objects filtered by the Name column
 * @method array findByCountry(string $Country) Return Address objects filtered by the Country column
 * @method array findByTelephone(string $Telephone) Return Address objects filtered by the Telephone column
 * @method array findByFax(string $Fax) Return Address objects filtered by the Fax column
 * @method array findByEmail(string $EMail) Return Address objects filtered by the EMail column
 * @method array findByInternet(string $Internet) Return Address objects filtered by the Internet column
 * @method array findByAddress1(string $Address1) Return Address objects filtered by the Address1 column
 * @method array findByAddress2(string $Address2) Return Address objects filtered by the Address2 column
 * @method array findByCity(string $City) Return Address objects filtered by the City column
 * @method array findByProvince(string $Province) Return Address objects filtered by the Province column
 * @method array findByEmail1(string $Email1) Return Address objects filtered by the Email1 column
 * @method array findByEmail2(string $Email2) Return Address objects filtered by the Email2 column
 * @method array findByInternet1(string $Internet1) Return Address objects filtered by the Internet1 column
 * @method array findByInternet2(string $Internet2) Return Address objects filtered by the Internet2 column
 * @method array findByTs(string $TS) Return Address objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAddressQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAddressQuery object.
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
            $modelName = 'Address';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AddressQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AddressQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AddressQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AddressQuery) {
            return $criteria;
        }
        $query = new AddressQuery(null, null, $modelAlias);

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
     * @return   Address|Address[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AddressPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Address A model object, or null if the key is not found
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
     * @return                 Address A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `Address`, `Name`, `Country`, `Telephone`, `Fax`, `EMail`, `Internet`, `Address1`, `Address2`, `City`, `Province`, `Email1`, `Email2`, `Internet1`, `Internet2`, `TS` FROM `address` WHERE `ID` = :p0';
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
            $obj = new Address();
            $obj->hydrate($row);
            AddressPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Address|Address[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Address[]|mixed the list of results, formatted by the current formatter
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
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AddressPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AddressPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AddressPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AddressPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE Address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE Address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the Name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE Name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AddressPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the Country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE Country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE Country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AddressPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the Telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE Telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE Telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the Fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE Fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE Fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the EMail column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMail = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AddressPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Internet column
     *
     * Example usage:
     * <code>
     * $query->filterByInternet('fooValue');   // WHERE Internet = 'fooValue'
     * $query->filterByInternet('%fooValue%'); // WHERE Internet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByInternet($internet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internet)) {
                $internet = str_replace('*', '%', $internet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::INTERNET, $internet, $comparison);
    }

    /**
     * Filter the query on the Address1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress1('fooValue');   // WHERE Address1 = 'fooValue'
     * $query->filterByAddress1('%fooValue%'); // WHERE Address1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByAddress1($address1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address1)) {
                $address1 = str_replace('*', '%', $address1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::ADDRESS1, $address1, $comparison);
    }

    /**
     * Filter the query on the Address2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress2('fooValue');   // WHERE Address2 = 'fooValue'
     * $query->filterByAddress2('%fooValue%'); // WHERE Address2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByAddress2($address2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address2)) {
                $address2 = str_replace('*', '%', $address2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::ADDRESS2, $address2, $comparison);
    }

    /**
     * Filter the query on the City column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE City = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE City LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the Province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE Province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE Province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the Email1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail1('fooValue');   // WHERE Email1 = 'fooValue'
     * $query->filterByEmail1('%fooValue%'); // WHERE Email1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByEmail1($email1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email1)) {
                $email1 = str_replace('*', '%', $email1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::EMAIL1, $email1, $comparison);
    }

    /**
     * Filter the query on the Email2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail2('fooValue');   // WHERE Email2 = 'fooValue'
     * $query->filterByEmail2('%fooValue%'); // WHERE Email2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByEmail2($email2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email2)) {
                $email2 = str_replace('*', '%', $email2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::EMAIL2, $email2, $comparison);
    }

    /**
     * Filter the query on the Internet1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInternet1('fooValue');   // WHERE Internet1 = 'fooValue'
     * $query->filterByInternet1('%fooValue%'); // WHERE Internet1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internet1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByInternet1($internet1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internet1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internet1)) {
                $internet1 = str_replace('*', '%', $internet1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::INTERNET1, $internet1, $comparison);
    }

    /**
     * Filter the query on the Internet2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInternet2('fooValue');   // WHERE Internet2 = 'fooValue'
     * $query->filterByInternet2('%fooValue%'); // WHERE Internet2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internet2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByInternet2($internet2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internet2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internet2)) {
                $internet2 = str_replace('*', '%', $internet2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AddressPeer::INTERNET2, $internet2, $comparison);
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
     * @return AddressQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AddressPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AddressPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Address $address Object to remove from the list of results
     *
     * @return AddressQuery The current query, for fluid interface
     */
    public function prune($address = null)
    {
        if ($address) {
            $this->addUsingAlias(AddressPeer::ID, $address->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
