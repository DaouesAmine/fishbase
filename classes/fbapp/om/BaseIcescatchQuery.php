<?php


/**
 * Base class that represents a query for the 'icescatch' table.
 *
 *
 *
 * @method IcescatchQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method IcescatchQuery orderBySpecode($order = Criteria::ASC) Order by the Specode column
 * @method IcescatchQuery orderByAreacode($order = Criteria::ASC) Order by the Areacode column
 * @method IcescatchQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method IcescatchQuery orderByCountrycode($order = Criteria::ASC) Order by the CountryCode column
 * @method IcescatchQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method IcescatchQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method IcescatchQuery orderByAlphacode($order = Criteria::ASC) Order by the AlphaCode column
 * @method IcescatchQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method IcescatchQuery orderByArea2($order = Criteria::ASC) Order by the Area2 column
 * @method IcescatchQuery orderBy1973($order = Criteria::ASC) Order by the 1973 column
 * @method IcescatchQuery orderBy1974($order = Criteria::ASC) Order by the 1974 column
 * @method IcescatchQuery orderBy1975($order = Criteria::ASC) Order by the 1975 column
 * @method IcescatchQuery orderBy1976($order = Criteria::ASC) Order by the 1976 column
 * @method IcescatchQuery orderBy1977($order = Criteria::ASC) Order by the 1977 column
 * @method IcescatchQuery orderBy1978($order = Criteria::ASC) Order by the 1978 column
 * @method IcescatchQuery orderBy1979($order = Criteria::ASC) Order by the 1979 column
 * @method IcescatchQuery orderBy1980($order = Criteria::ASC) Order by the 1980 column
 * @method IcescatchQuery orderBy1981($order = Criteria::ASC) Order by the 1981 column
 * @method IcescatchQuery orderBy1982($order = Criteria::ASC) Order by the 1982 column
 * @method IcescatchQuery orderBy1983($order = Criteria::ASC) Order by the 1983 column
 * @method IcescatchQuery orderBy1984($order = Criteria::ASC) Order by the 1984 column
 * @method IcescatchQuery orderBy1985($order = Criteria::ASC) Order by the 1985 column
 * @method IcescatchQuery orderBy1986($order = Criteria::ASC) Order by the 1986 column
 * @method IcescatchQuery orderBy1987($order = Criteria::ASC) Order by the 1987 column
 * @method IcescatchQuery orderBy1988($order = Criteria::ASC) Order by the 1988 column
 * @method IcescatchQuery orderBy1989($order = Criteria::ASC) Order by the 1989 column
 * @method IcescatchQuery orderBy1990($order = Criteria::ASC) Order by the 1990 column
 * @method IcescatchQuery orderBy1991($order = Criteria::ASC) Order by the 1991 column
 * @method IcescatchQuery orderBy1992($order = Criteria::ASC) Order by the 1992 column
 * @method IcescatchQuery orderBy1993($order = Criteria::ASC) Order by the 1993 column
 * @method IcescatchQuery orderBy1994($order = Criteria::ASC) Order by the 1994 column
 * @method IcescatchQuery orderBy1995($order = Criteria::ASC) Order by the 1995 column
 * @method IcescatchQuery orderBy1996($order = Criteria::ASC) Order by the 1996 column
 * @method IcescatchQuery orderBy1997($order = Criteria::ASC) Order by the 1997 column
 * @method IcescatchQuery orderBy1998($order = Criteria::ASC) Order by the 1998 column
 * @method IcescatchQuery orderBy1999($order = Criteria::ASC) Order by the 1999 column
 * @method IcescatchQuery orderBy2000($order = Criteria::ASC) Order by the 2000 column
 * @method IcescatchQuery orderBy2001($order = Criteria::ASC) Order by the 2001 column
 * @method IcescatchQuery orderBy2002($order = Criteria::ASC) Order by the 2002 column
 * @method IcescatchQuery orderBy2003($order = Criteria::ASC) Order by the 2003 column
 * @method IcescatchQuery orderBy2004($order = Criteria::ASC) Order by the 2004 column
 * @method IcescatchQuery orderBy2005($order = Criteria::ASC) Order by the 2005 column
 * @method IcescatchQuery orderBy2006($order = Criteria::ASC) Order by the 2006 column
 * @method IcescatchQuery orderBy2007($order = Criteria::ASC) Order by the 2007 column
 * @method IcescatchQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method IcescatchQuery groupByAutoctr() Group by the AutoCtr column
 * @method IcescatchQuery groupBySpecode() Group by the Specode column
 * @method IcescatchQuery groupByAreacode() Group by the Areacode column
 * @method IcescatchQuery groupByCountry() Group by the Country column
 * @method IcescatchQuery groupByCountrycode() Group by the CountryCode column
 * @method IcescatchQuery groupByCCode() Group by the C_Code column
 * @method IcescatchQuery groupBySpecies() Group by the Species column
 * @method IcescatchQuery groupByAlphacode() Group by the AlphaCode column
 * @method IcescatchQuery groupByArea() Group by the Area column
 * @method IcescatchQuery groupByArea2() Group by the Area2 column
 * @method IcescatchQuery groupBy1973() Group by the 1973 column
 * @method IcescatchQuery groupBy1974() Group by the 1974 column
 * @method IcescatchQuery groupBy1975() Group by the 1975 column
 * @method IcescatchQuery groupBy1976() Group by the 1976 column
 * @method IcescatchQuery groupBy1977() Group by the 1977 column
 * @method IcescatchQuery groupBy1978() Group by the 1978 column
 * @method IcescatchQuery groupBy1979() Group by the 1979 column
 * @method IcescatchQuery groupBy1980() Group by the 1980 column
 * @method IcescatchQuery groupBy1981() Group by the 1981 column
 * @method IcescatchQuery groupBy1982() Group by the 1982 column
 * @method IcescatchQuery groupBy1983() Group by the 1983 column
 * @method IcescatchQuery groupBy1984() Group by the 1984 column
 * @method IcescatchQuery groupBy1985() Group by the 1985 column
 * @method IcescatchQuery groupBy1986() Group by the 1986 column
 * @method IcescatchQuery groupBy1987() Group by the 1987 column
 * @method IcescatchQuery groupBy1988() Group by the 1988 column
 * @method IcescatchQuery groupBy1989() Group by the 1989 column
 * @method IcescatchQuery groupBy1990() Group by the 1990 column
 * @method IcescatchQuery groupBy1991() Group by the 1991 column
 * @method IcescatchQuery groupBy1992() Group by the 1992 column
 * @method IcescatchQuery groupBy1993() Group by the 1993 column
 * @method IcescatchQuery groupBy1994() Group by the 1994 column
 * @method IcescatchQuery groupBy1995() Group by the 1995 column
 * @method IcescatchQuery groupBy1996() Group by the 1996 column
 * @method IcescatchQuery groupBy1997() Group by the 1997 column
 * @method IcescatchQuery groupBy1998() Group by the 1998 column
 * @method IcescatchQuery groupBy1999() Group by the 1999 column
 * @method IcescatchQuery groupBy2000() Group by the 2000 column
 * @method IcescatchQuery groupBy2001() Group by the 2001 column
 * @method IcescatchQuery groupBy2002() Group by the 2002 column
 * @method IcescatchQuery groupBy2003() Group by the 2003 column
 * @method IcescatchQuery groupBy2004() Group by the 2004 column
 * @method IcescatchQuery groupBy2005() Group by the 2005 column
 * @method IcescatchQuery groupBy2006() Group by the 2006 column
 * @method IcescatchQuery groupBy2007() Group by the 2007 column
 * @method IcescatchQuery groupByTs() Group by the TS column
 *
 * @method IcescatchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IcescatchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IcescatchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Icescatch findOne(PropelPDO $con = null) Return the first Icescatch matching the query
 * @method Icescatch findOneOrCreate(PropelPDO $con = null) Return the first Icescatch matching the query, or a new Icescatch object populated from the query conditions when no match is found
 *
 * @method Icescatch findOneBySpecode(string $Specode) Return the first Icescatch filtered by the Specode column
 * @method Icescatch findOneByAreacode(int $Areacode) Return the first Icescatch filtered by the Areacode column
 * @method Icescatch findOneByCountry(string $Country) Return the first Icescatch filtered by the Country column
 * @method Icescatch findOneByCountrycode(string $CountryCode) Return the first Icescatch filtered by the CountryCode column
 * @method Icescatch findOneByCCode(string $C_Code) Return the first Icescatch filtered by the C_Code column
 * @method Icescatch findOneBySpecies(string $Species) Return the first Icescatch filtered by the Species column
 * @method Icescatch findOneByAlphacode(string $AlphaCode) Return the first Icescatch filtered by the AlphaCode column
 * @method Icescatch findOneByArea(string $Area) Return the first Icescatch filtered by the Area column
 * @method Icescatch findOneByArea2(string $Area2) Return the first Icescatch filtered by the Area2 column
 * @method Icescatch findOneBy1973(double $1973) Return the first Icescatch filtered by the 1973 column
 * @method Icescatch findOneBy1974(double $1974) Return the first Icescatch filtered by the 1974 column
 * @method Icescatch findOneBy1975(double $1975) Return the first Icescatch filtered by the 1975 column
 * @method Icescatch findOneBy1976(double $1976) Return the first Icescatch filtered by the 1976 column
 * @method Icescatch findOneBy1977(double $1977) Return the first Icescatch filtered by the 1977 column
 * @method Icescatch findOneBy1978(double $1978) Return the first Icescatch filtered by the 1978 column
 * @method Icescatch findOneBy1979(double $1979) Return the first Icescatch filtered by the 1979 column
 * @method Icescatch findOneBy1980(double $1980) Return the first Icescatch filtered by the 1980 column
 * @method Icescatch findOneBy1981(double $1981) Return the first Icescatch filtered by the 1981 column
 * @method Icescatch findOneBy1982(double $1982) Return the first Icescatch filtered by the 1982 column
 * @method Icescatch findOneBy1983(double $1983) Return the first Icescatch filtered by the 1983 column
 * @method Icescatch findOneBy1984(double $1984) Return the first Icescatch filtered by the 1984 column
 * @method Icescatch findOneBy1985(double $1985) Return the first Icescatch filtered by the 1985 column
 * @method Icescatch findOneBy1986(double $1986) Return the first Icescatch filtered by the 1986 column
 * @method Icescatch findOneBy1987(double $1987) Return the first Icescatch filtered by the 1987 column
 * @method Icescatch findOneBy1988(double $1988) Return the first Icescatch filtered by the 1988 column
 * @method Icescatch findOneBy1989(double $1989) Return the first Icescatch filtered by the 1989 column
 * @method Icescatch findOneBy1990(double $1990) Return the first Icescatch filtered by the 1990 column
 * @method Icescatch findOneBy1991(double $1991) Return the first Icescatch filtered by the 1991 column
 * @method Icescatch findOneBy1992(double $1992) Return the first Icescatch filtered by the 1992 column
 * @method Icescatch findOneBy1993(double $1993) Return the first Icescatch filtered by the 1993 column
 * @method Icescatch findOneBy1994(double $1994) Return the first Icescatch filtered by the 1994 column
 * @method Icescatch findOneBy1995(double $1995) Return the first Icescatch filtered by the 1995 column
 * @method Icescatch findOneBy1996(double $1996) Return the first Icescatch filtered by the 1996 column
 * @method Icescatch findOneBy1997(double $1997) Return the first Icescatch filtered by the 1997 column
 * @method Icescatch findOneBy1998(double $1998) Return the first Icescatch filtered by the 1998 column
 * @method Icescatch findOneBy1999(double $1999) Return the first Icescatch filtered by the 1999 column
 * @method Icescatch findOneBy2000(double $2000) Return the first Icescatch filtered by the 2000 column
 * @method Icescatch findOneBy2001(double $2001) Return the first Icescatch filtered by the 2001 column
 * @method Icescatch findOneBy2002(double $2002) Return the first Icescatch filtered by the 2002 column
 * @method Icescatch findOneBy2003(double $2003) Return the first Icescatch filtered by the 2003 column
 * @method Icescatch findOneBy2004(double $2004) Return the first Icescatch filtered by the 2004 column
 * @method Icescatch findOneBy2005(double $2005) Return the first Icescatch filtered by the 2005 column
 * @method Icescatch findOneBy2006(double $2006) Return the first Icescatch filtered by the 2006 column
 * @method Icescatch findOneBy2007(double $2007) Return the first Icescatch filtered by the 2007 column
 * @method Icescatch findOneByTs(string $TS) Return the first Icescatch filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Icescatch objects filtered by the AutoCtr column
 * @method array findBySpecode(string $Specode) Return Icescatch objects filtered by the Specode column
 * @method array findByAreacode(int $Areacode) Return Icescatch objects filtered by the Areacode column
 * @method array findByCountry(string $Country) Return Icescatch objects filtered by the Country column
 * @method array findByCountrycode(string $CountryCode) Return Icescatch objects filtered by the CountryCode column
 * @method array findByCCode(string $C_Code) Return Icescatch objects filtered by the C_Code column
 * @method array findBySpecies(string $Species) Return Icescatch objects filtered by the Species column
 * @method array findByAlphacode(string $AlphaCode) Return Icescatch objects filtered by the AlphaCode column
 * @method array findByArea(string $Area) Return Icescatch objects filtered by the Area column
 * @method array findByArea2(string $Area2) Return Icescatch objects filtered by the Area2 column
 * @method array findBy1973(double $1973) Return Icescatch objects filtered by the 1973 column
 * @method array findBy1974(double $1974) Return Icescatch objects filtered by the 1974 column
 * @method array findBy1975(double $1975) Return Icescatch objects filtered by the 1975 column
 * @method array findBy1976(double $1976) Return Icescatch objects filtered by the 1976 column
 * @method array findBy1977(double $1977) Return Icescatch objects filtered by the 1977 column
 * @method array findBy1978(double $1978) Return Icescatch objects filtered by the 1978 column
 * @method array findBy1979(double $1979) Return Icescatch objects filtered by the 1979 column
 * @method array findBy1980(double $1980) Return Icescatch objects filtered by the 1980 column
 * @method array findBy1981(double $1981) Return Icescatch objects filtered by the 1981 column
 * @method array findBy1982(double $1982) Return Icescatch objects filtered by the 1982 column
 * @method array findBy1983(double $1983) Return Icescatch objects filtered by the 1983 column
 * @method array findBy1984(double $1984) Return Icescatch objects filtered by the 1984 column
 * @method array findBy1985(double $1985) Return Icescatch objects filtered by the 1985 column
 * @method array findBy1986(double $1986) Return Icescatch objects filtered by the 1986 column
 * @method array findBy1987(double $1987) Return Icescatch objects filtered by the 1987 column
 * @method array findBy1988(double $1988) Return Icescatch objects filtered by the 1988 column
 * @method array findBy1989(double $1989) Return Icescatch objects filtered by the 1989 column
 * @method array findBy1990(double $1990) Return Icescatch objects filtered by the 1990 column
 * @method array findBy1991(double $1991) Return Icescatch objects filtered by the 1991 column
 * @method array findBy1992(double $1992) Return Icescatch objects filtered by the 1992 column
 * @method array findBy1993(double $1993) Return Icescatch objects filtered by the 1993 column
 * @method array findBy1994(double $1994) Return Icescatch objects filtered by the 1994 column
 * @method array findBy1995(double $1995) Return Icescatch objects filtered by the 1995 column
 * @method array findBy1996(double $1996) Return Icescatch objects filtered by the 1996 column
 * @method array findBy1997(double $1997) Return Icescatch objects filtered by the 1997 column
 * @method array findBy1998(double $1998) Return Icescatch objects filtered by the 1998 column
 * @method array findBy1999(double $1999) Return Icescatch objects filtered by the 1999 column
 * @method array findBy2000(double $2000) Return Icescatch objects filtered by the 2000 column
 * @method array findBy2001(double $2001) Return Icescatch objects filtered by the 2001 column
 * @method array findBy2002(double $2002) Return Icescatch objects filtered by the 2002 column
 * @method array findBy2003(double $2003) Return Icescatch objects filtered by the 2003 column
 * @method array findBy2004(double $2004) Return Icescatch objects filtered by the 2004 column
 * @method array findBy2005(double $2005) Return Icescatch objects filtered by the 2005 column
 * @method array findBy2006(double $2006) Return Icescatch objects filtered by the 2006 column
 * @method array findBy2007(double $2007) Return Icescatch objects filtered by the 2007 column
 * @method array findByTs(string $TS) Return Icescatch objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIcescatchQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIcescatchQuery object.
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
            $modelName = 'Icescatch';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IcescatchQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IcescatchQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IcescatchQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IcescatchQuery) {
            return $criteria;
        }
        $query = new IcescatchQuery(null, null, $modelAlias);

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
     * @return   Icescatch|Icescatch[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IcescatchPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Icescatch A model object, or null if the key is not found
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
     * @return                 Icescatch A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Specode`, `Areacode`, `Country`, `CountryCode`, `C_Code`, `Species`, `AlphaCode`, `Area`, `Area2`, `1973`, `1974`, `1975`, `1976`, `1977`, `1978`, `1979`, `1980`, `1981`, `1982`, `1983`, `1984`, `1985`, `1986`, `1987`, `1988`, `1989`, `1990`, `1991`, `1992`, `1993`, `1994`, `1995`, `1996`, `1997`, `1998`, `1999`, `2000`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `TS` FROM `icescatch` WHERE `AutoCtr` = :p0';
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
            $obj = new Icescatch();
            $obj->hydrate($row);
            IcescatchPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Icescatch|Icescatch[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Icescatch[]|mixed the list of results, formatted by the current formatter
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
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(IcescatchPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(IcescatchPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(IcescatchPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(IcescatchPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Specode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecode('fooValue');   // WHERE Specode = 'fooValue'
     * $query->filterBySpecode('%fooValue%'); // WHERE Specode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBySpecode($specode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $specode)) {
                $specode = str_replace('*', '%', $specode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::SPECODE, $specode, $comparison);
    }

    /**
     * Filter the query on the Areacode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE Areacode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE Areacode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE Areacode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE Areacode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(IcescatchPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(IcescatchPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::AREACODE, $areacode, $comparison);
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
     * @return IcescatchQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IcescatchPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the CountryCode column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrycode('fooValue');   // WHERE CountryCode = 'fooValue'
     * $query->filterByCountrycode('%fooValue%'); // WHERE CountryCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countrycode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByCountrycode($countrycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countrycode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countrycode)) {
                $countrycode = str_replace('*', '%', $countrycode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::COUNTRYCODE, $countrycode, $comparison);
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
     * @return IcescatchQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IcescatchPeer::C_CODE, $cCode, $comparison);
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
     * @return IcescatchQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IcescatchPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the AlphaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAlphacode('fooValue');   // WHERE AlphaCode = 'fooValue'
     * $query->filterByAlphacode('%fooValue%'); // WHERE AlphaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alphacode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByAlphacode($alphacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alphacode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alphacode)) {
                $alphacode = str_replace('*', '%', $alphacode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::ALPHACODE, $alphacode, $comparison);
    }

    /**
     * Filter the query on the Area column
     *
     * Example usage:
     * <code>
     * $query->filterByArea('fooValue');   // WHERE Area = 'fooValue'
     * $query->filterByArea('%fooValue%'); // WHERE Area LIKE '%fooValue%'
     * </code>
     *
     * @param     string $area The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($area)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $area)) {
                $area = str_replace('*', '%', $area);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the Area2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArea2('fooValue');   // WHERE Area2 = 'fooValue'
     * $query->filterByArea2('%fooValue%'); // WHERE Area2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $area2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByArea2($area2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($area2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $area2)) {
                $area2 = str_replace('*', '%', $area2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::AREA2, $area2, $comparison);
    }

    /**
     * Filter the query on the 1973 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1973(1234); // WHERE 1973 = 1234
     * $query->filterBy1973(array(12, 34)); // WHERE 1973 IN (12, 34)
     * $query->filterBy1973(array('min' => 12)); // WHERE 1973 >= 12
     * $query->filterBy1973(array('max' => 12)); // WHERE 1973 <= 12
     * </code>
     *
     * @param     mixed $1973 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1973($1973 = null, $comparison = null)
    {
        if (is_array($1973)) {
            $useMinMax = false;
            if (isset($1973['min'])) {
                $this->addUsingAlias(IcescatchPeer::1973, $1973['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1973['max'])) {
                $this->addUsingAlias(IcescatchPeer::1973, $1973['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1973, $1973, $comparison);
    }

    /**
     * Filter the query on the 1974 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1974(1234); // WHERE 1974 = 1234
     * $query->filterBy1974(array(12, 34)); // WHERE 1974 IN (12, 34)
     * $query->filterBy1974(array('min' => 12)); // WHERE 1974 >= 12
     * $query->filterBy1974(array('max' => 12)); // WHERE 1974 <= 12
     * </code>
     *
     * @param     mixed $1974 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1974($1974 = null, $comparison = null)
    {
        if (is_array($1974)) {
            $useMinMax = false;
            if (isset($1974['min'])) {
                $this->addUsingAlias(IcescatchPeer::1974, $1974['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1974['max'])) {
                $this->addUsingAlias(IcescatchPeer::1974, $1974['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1974, $1974, $comparison);
    }

    /**
     * Filter the query on the 1975 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1975(1234); // WHERE 1975 = 1234
     * $query->filterBy1975(array(12, 34)); // WHERE 1975 IN (12, 34)
     * $query->filterBy1975(array('min' => 12)); // WHERE 1975 >= 12
     * $query->filterBy1975(array('max' => 12)); // WHERE 1975 <= 12
     * </code>
     *
     * @param     mixed $1975 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1975($1975 = null, $comparison = null)
    {
        if (is_array($1975)) {
            $useMinMax = false;
            if (isset($1975['min'])) {
                $this->addUsingAlias(IcescatchPeer::1975, $1975['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1975['max'])) {
                $this->addUsingAlias(IcescatchPeer::1975, $1975['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1975, $1975, $comparison);
    }

    /**
     * Filter the query on the 1976 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1976(1234); // WHERE 1976 = 1234
     * $query->filterBy1976(array(12, 34)); // WHERE 1976 IN (12, 34)
     * $query->filterBy1976(array('min' => 12)); // WHERE 1976 >= 12
     * $query->filterBy1976(array('max' => 12)); // WHERE 1976 <= 12
     * </code>
     *
     * @param     mixed $1976 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1976($1976 = null, $comparison = null)
    {
        if (is_array($1976)) {
            $useMinMax = false;
            if (isset($1976['min'])) {
                $this->addUsingAlias(IcescatchPeer::1976, $1976['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1976['max'])) {
                $this->addUsingAlias(IcescatchPeer::1976, $1976['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1976, $1976, $comparison);
    }

    /**
     * Filter the query on the 1977 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1977(1234); // WHERE 1977 = 1234
     * $query->filterBy1977(array(12, 34)); // WHERE 1977 IN (12, 34)
     * $query->filterBy1977(array('min' => 12)); // WHERE 1977 >= 12
     * $query->filterBy1977(array('max' => 12)); // WHERE 1977 <= 12
     * </code>
     *
     * @param     mixed $1977 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1977($1977 = null, $comparison = null)
    {
        if (is_array($1977)) {
            $useMinMax = false;
            if (isset($1977['min'])) {
                $this->addUsingAlias(IcescatchPeer::1977, $1977['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1977['max'])) {
                $this->addUsingAlias(IcescatchPeer::1977, $1977['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1977, $1977, $comparison);
    }

    /**
     * Filter the query on the 1978 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1978(1234); // WHERE 1978 = 1234
     * $query->filterBy1978(array(12, 34)); // WHERE 1978 IN (12, 34)
     * $query->filterBy1978(array('min' => 12)); // WHERE 1978 >= 12
     * $query->filterBy1978(array('max' => 12)); // WHERE 1978 <= 12
     * </code>
     *
     * @param     mixed $1978 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1978($1978 = null, $comparison = null)
    {
        if (is_array($1978)) {
            $useMinMax = false;
            if (isset($1978['min'])) {
                $this->addUsingAlias(IcescatchPeer::1978, $1978['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1978['max'])) {
                $this->addUsingAlias(IcescatchPeer::1978, $1978['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1978, $1978, $comparison);
    }

    /**
     * Filter the query on the 1979 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1979(1234); // WHERE 1979 = 1234
     * $query->filterBy1979(array(12, 34)); // WHERE 1979 IN (12, 34)
     * $query->filterBy1979(array('min' => 12)); // WHERE 1979 >= 12
     * $query->filterBy1979(array('max' => 12)); // WHERE 1979 <= 12
     * </code>
     *
     * @param     mixed $1979 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1979($1979 = null, $comparison = null)
    {
        if (is_array($1979)) {
            $useMinMax = false;
            if (isset($1979['min'])) {
                $this->addUsingAlias(IcescatchPeer::1979, $1979['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1979['max'])) {
                $this->addUsingAlias(IcescatchPeer::1979, $1979['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1979, $1979, $comparison);
    }

    /**
     * Filter the query on the 1980 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1980(1234); // WHERE 1980 = 1234
     * $query->filterBy1980(array(12, 34)); // WHERE 1980 IN (12, 34)
     * $query->filterBy1980(array('min' => 12)); // WHERE 1980 >= 12
     * $query->filterBy1980(array('max' => 12)); // WHERE 1980 <= 12
     * </code>
     *
     * @param     mixed $1980 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1980($1980 = null, $comparison = null)
    {
        if (is_array($1980)) {
            $useMinMax = false;
            if (isset($1980['min'])) {
                $this->addUsingAlias(IcescatchPeer::1980, $1980['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1980['max'])) {
                $this->addUsingAlias(IcescatchPeer::1980, $1980['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1980, $1980, $comparison);
    }

    /**
     * Filter the query on the 1981 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1981(1234); // WHERE 1981 = 1234
     * $query->filterBy1981(array(12, 34)); // WHERE 1981 IN (12, 34)
     * $query->filterBy1981(array('min' => 12)); // WHERE 1981 >= 12
     * $query->filterBy1981(array('max' => 12)); // WHERE 1981 <= 12
     * </code>
     *
     * @param     mixed $1981 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1981($1981 = null, $comparison = null)
    {
        if (is_array($1981)) {
            $useMinMax = false;
            if (isset($1981['min'])) {
                $this->addUsingAlias(IcescatchPeer::1981, $1981['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1981['max'])) {
                $this->addUsingAlias(IcescatchPeer::1981, $1981['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1981, $1981, $comparison);
    }

    /**
     * Filter the query on the 1982 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1982(1234); // WHERE 1982 = 1234
     * $query->filterBy1982(array(12, 34)); // WHERE 1982 IN (12, 34)
     * $query->filterBy1982(array('min' => 12)); // WHERE 1982 >= 12
     * $query->filterBy1982(array('max' => 12)); // WHERE 1982 <= 12
     * </code>
     *
     * @param     mixed $1982 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1982($1982 = null, $comparison = null)
    {
        if (is_array($1982)) {
            $useMinMax = false;
            if (isset($1982['min'])) {
                $this->addUsingAlias(IcescatchPeer::1982, $1982['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1982['max'])) {
                $this->addUsingAlias(IcescatchPeer::1982, $1982['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1982, $1982, $comparison);
    }

    /**
     * Filter the query on the 1983 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1983(1234); // WHERE 1983 = 1234
     * $query->filterBy1983(array(12, 34)); // WHERE 1983 IN (12, 34)
     * $query->filterBy1983(array('min' => 12)); // WHERE 1983 >= 12
     * $query->filterBy1983(array('max' => 12)); // WHERE 1983 <= 12
     * </code>
     *
     * @param     mixed $1983 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1983($1983 = null, $comparison = null)
    {
        if (is_array($1983)) {
            $useMinMax = false;
            if (isset($1983['min'])) {
                $this->addUsingAlias(IcescatchPeer::1983, $1983['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1983['max'])) {
                $this->addUsingAlias(IcescatchPeer::1983, $1983['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1983, $1983, $comparison);
    }

    /**
     * Filter the query on the 1984 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1984(1234); // WHERE 1984 = 1234
     * $query->filterBy1984(array(12, 34)); // WHERE 1984 IN (12, 34)
     * $query->filterBy1984(array('min' => 12)); // WHERE 1984 >= 12
     * $query->filterBy1984(array('max' => 12)); // WHERE 1984 <= 12
     * </code>
     *
     * @param     mixed $1984 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1984($1984 = null, $comparison = null)
    {
        if (is_array($1984)) {
            $useMinMax = false;
            if (isset($1984['min'])) {
                $this->addUsingAlias(IcescatchPeer::1984, $1984['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1984['max'])) {
                $this->addUsingAlias(IcescatchPeer::1984, $1984['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1984, $1984, $comparison);
    }

    /**
     * Filter the query on the 1985 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1985(1234); // WHERE 1985 = 1234
     * $query->filterBy1985(array(12, 34)); // WHERE 1985 IN (12, 34)
     * $query->filterBy1985(array('min' => 12)); // WHERE 1985 >= 12
     * $query->filterBy1985(array('max' => 12)); // WHERE 1985 <= 12
     * </code>
     *
     * @param     mixed $1985 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1985($1985 = null, $comparison = null)
    {
        if (is_array($1985)) {
            $useMinMax = false;
            if (isset($1985['min'])) {
                $this->addUsingAlias(IcescatchPeer::1985, $1985['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1985['max'])) {
                $this->addUsingAlias(IcescatchPeer::1985, $1985['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1985, $1985, $comparison);
    }

    /**
     * Filter the query on the 1986 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1986(1234); // WHERE 1986 = 1234
     * $query->filterBy1986(array(12, 34)); // WHERE 1986 IN (12, 34)
     * $query->filterBy1986(array('min' => 12)); // WHERE 1986 >= 12
     * $query->filterBy1986(array('max' => 12)); // WHERE 1986 <= 12
     * </code>
     *
     * @param     mixed $1986 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1986($1986 = null, $comparison = null)
    {
        if (is_array($1986)) {
            $useMinMax = false;
            if (isset($1986['min'])) {
                $this->addUsingAlias(IcescatchPeer::1986, $1986['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1986['max'])) {
                $this->addUsingAlias(IcescatchPeer::1986, $1986['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1986, $1986, $comparison);
    }

    /**
     * Filter the query on the 1987 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1987(1234); // WHERE 1987 = 1234
     * $query->filterBy1987(array(12, 34)); // WHERE 1987 IN (12, 34)
     * $query->filterBy1987(array('min' => 12)); // WHERE 1987 >= 12
     * $query->filterBy1987(array('max' => 12)); // WHERE 1987 <= 12
     * </code>
     *
     * @param     mixed $1987 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1987($1987 = null, $comparison = null)
    {
        if (is_array($1987)) {
            $useMinMax = false;
            if (isset($1987['min'])) {
                $this->addUsingAlias(IcescatchPeer::1987, $1987['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1987['max'])) {
                $this->addUsingAlias(IcescatchPeer::1987, $1987['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1987, $1987, $comparison);
    }

    /**
     * Filter the query on the 1988 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1988(1234); // WHERE 1988 = 1234
     * $query->filterBy1988(array(12, 34)); // WHERE 1988 IN (12, 34)
     * $query->filterBy1988(array('min' => 12)); // WHERE 1988 >= 12
     * $query->filterBy1988(array('max' => 12)); // WHERE 1988 <= 12
     * </code>
     *
     * @param     mixed $1988 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1988($1988 = null, $comparison = null)
    {
        if (is_array($1988)) {
            $useMinMax = false;
            if (isset($1988['min'])) {
                $this->addUsingAlias(IcescatchPeer::1988, $1988['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1988['max'])) {
                $this->addUsingAlias(IcescatchPeer::1988, $1988['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1988, $1988, $comparison);
    }

    /**
     * Filter the query on the 1989 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1989(1234); // WHERE 1989 = 1234
     * $query->filterBy1989(array(12, 34)); // WHERE 1989 IN (12, 34)
     * $query->filterBy1989(array('min' => 12)); // WHERE 1989 >= 12
     * $query->filterBy1989(array('max' => 12)); // WHERE 1989 <= 12
     * </code>
     *
     * @param     mixed $1989 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1989($1989 = null, $comparison = null)
    {
        if (is_array($1989)) {
            $useMinMax = false;
            if (isset($1989['min'])) {
                $this->addUsingAlias(IcescatchPeer::1989, $1989['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1989['max'])) {
                $this->addUsingAlias(IcescatchPeer::1989, $1989['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1989, $1989, $comparison);
    }

    /**
     * Filter the query on the 1990 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1990(1234); // WHERE 1990 = 1234
     * $query->filterBy1990(array(12, 34)); // WHERE 1990 IN (12, 34)
     * $query->filterBy1990(array('min' => 12)); // WHERE 1990 >= 12
     * $query->filterBy1990(array('max' => 12)); // WHERE 1990 <= 12
     * </code>
     *
     * @param     mixed $1990 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1990($1990 = null, $comparison = null)
    {
        if (is_array($1990)) {
            $useMinMax = false;
            if (isset($1990['min'])) {
                $this->addUsingAlias(IcescatchPeer::1990, $1990['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1990['max'])) {
                $this->addUsingAlias(IcescatchPeer::1990, $1990['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1990, $1990, $comparison);
    }

    /**
     * Filter the query on the 1991 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1991(1234); // WHERE 1991 = 1234
     * $query->filterBy1991(array(12, 34)); // WHERE 1991 IN (12, 34)
     * $query->filterBy1991(array('min' => 12)); // WHERE 1991 >= 12
     * $query->filterBy1991(array('max' => 12)); // WHERE 1991 <= 12
     * </code>
     *
     * @param     mixed $1991 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1991($1991 = null, $comparison = null)
    {
        if (is_array($1991)) {
            $useMinMax = false;
            if (isset($1991['min'])) {
                $this->addUsingAlias(IcescatchPeer::1991, $1991['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1991['max'])) {
                $this->addUsingAlias(IcescatchPeer::1991, $1991['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1991, $1991, $comparison);
    }

    /**
     * Filter the query on the 1992 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1992(1234); // WHERE 1992 = 1234
     * $query->filterBy1992(array(12, 34)); // WHERE 1992 IN (12, 34)
     * $query->filterBy1992(array('min' => 12)); // WHERE 1992 >= 12
     * $query->filterBy1992(array('max' => 12)); // WHERE 1992 <= 12
     * </code>
     *
     * @param     mixed $1992 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1992($1992 = null, $comparison = null)
    {
        if (is_array($1992)) {
            $useMinMax = false;
            if (isset($1992['min'])) {
                $this->addUsingAlias(IcescatchPeer::1992, $1992['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1992['max'])) {
                $this->addUsingAlias(IcescatchPeer::1992, $1992['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1992, $1992, $comparison);
    }

    /**
     * Filter the query on the 1993 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1993(1234); // WHERE 1993 = 1234
     * $query->filterBy1993(array(12, 34)); // WHERE 1993 IN (12, 34)
     * $query->filterBy1993(array('min' => 12)); // WHERE 1993 >= 12
     * $query->filterBy1993(array('max' => 12)); // WHERE 1993 <= 12
     * </code>
     *
     * @param     mixed $1993 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1993($1993 = null, $comparison = null)
    {
        if (is_array($1993)) {
            $useMinMax = false;
            if (isset($1993['min'])) {
                $this->addUsingAlias(IcescatchPeer::1993, $1993['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1993['max'])) {
                $this->addUsingAlias(IcescatchPeer::1993, $1993['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1993, $1993, $comparison);
    }

    /**
     * Filter the query on the 1994 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1994(1234); // WHERE 1994 = 1234
     * $query->filterBy1994(array(12, 34)); // WHERE 1994 IN (12, 34)
     * $query->filterBy1994(array('min' => 12)); // WHERE 1994 >= 12
     * $query->filterBy1994(array('max' => 12)); // WHERE 1994 <= 12
     * </code>
     *
     * @param     mixed $1994 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1994($1994 = null, $comparison = null)
    {
        if (is_array($1994)) {
            $useMinMax = false;
            if (isset($1994['min'])) {
                $this->addUsingAlias(IcescatchPeer::1994, $1994['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1994['max'])) {
                $this->addUsingAlias(IcescatchPeer::1994, $1994['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1994, $1994, $comparison);
    }

    /**
     * Filter the query on the 1995 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1995(1234); // WHERE 1995 = 1234
     * $query->filterBy1995(array(12, 34)); // WHERE 1995 IN (12, 34)
     * $query->filterBy1995(array('min' => 12)); // WHERE 1995 >= 12
     * $query->filterBy1995(array('max' => 12)); // WHERE 1995 <= 12
     * </code>
     *
     * @param     mixed $1995 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1995($1995 = null, $comparison = null)
    {
        if (is_array($1995)) {
            $useMinMax = false;
            if (isset($1995['min'])) {
                $this->addUsingAlias(IcescatchPeer::1995, $1995['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1995['max'])) {
                $this->addUsingAlias(IcescatchPeer::1995, $1995['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1995, $1995, $comparison);
    }

    /**
     * Filter the query on the 1996 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1996(1234); // WHERE 1996 = 1234
     * $query->filterBy1996(array(12, 34)); // WHERE 1996 IN (12, 34)
     * $query->filterBy1996(array('min' => 12)); // WHERE 1996 >= 12
     * $query->filterBy1996(array('max' => 12)); // WHERE 1996 <= 12
     * </code>
     *
     * @param     mixed $1996 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1996($1996 = null, $comparison = null)
    {
        if (is_array($1996)) {
            $useMinMax = false;
            if (isset($1996['min'])) {
                $this->addUsingAlias(IcescatchPeer::1996, $1996['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1996['max'])) {
                $this->addUsingAlias(IcescatchPeer::1996, $1996['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1996, $1996, $comparison);
    }

    /**
     * Filter the query on the 1997 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1997(1234); // WHERE 1997 = 1234
     * $query->filterBy1997(array(12, 34)); // WHERE 1997 IN (12, 34)
     * $query->filterBy1997(array('min' => 12)); // WHERE 1997 >= 12
     * $query->filterBy1997(array('max' => 12)); // WHERE 1997 <= 12
     * </code>
     *
     * @param     mixed $1997 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1997($1997 = null, $comparison = null)
    {
        if (is_array($1997)) {
            $useMinMax = false;
            if (isset($1997['min'])) {
                $this->addUsingAlias(IcescatchPeer::1997, $1997['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1997['max'])) {
                $this->addUsingAlias(IcescatchPeer::1997, $1997['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1997, $1997, $comparison);
    }

    /**
     * Filter the query on the 1998 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1998(1234); // WHERE 1998 = 1234
     * $query->filterBy1998(array(12, 34)); // WHERE 1998 IN (12, 34)
     * $query->filterBy1998(array('min' => 12)); // WHERE 1998 >= 12
     * $query->filterBy1998(array('max' => 12)); // WHERE 1998 <= 12
     * </code>
     *
     * @param     mixed $1998 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1998($1998 = null, $comparison = null)
    {
        if (is_array($1998)) {
            $useMinMax = false;
            if (isset($1998['min'])) {
                $this->addUsingAlias(IcescatchPeer::1998, $1998['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1998['max'])) {
                $this->addUsingAlias(IcescatchPeer::1998, $1998['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1998, $1998, $comparison);
    }

    /**
     * Filter the query on the 1999 column
     *
     * Example usage:
     * <code>
     * $query->filterBy1999(1234); // WHERE 1999 = 1234
     * $query->filterBy1999(array(12, 34)); // WHERE 1999 IN (12, 34)
     * $query->filterBy1999(array('min' => 12)); // WHERE 1999 >= 12
     * $query->filterBy1999(array('max' => 12)); // WHERE 1999 <= 12
     * </code>
     *
     * @param     mixed $1999 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy1999($1999 = null, $comparison = null)
    {
        if (is_array($1999)) {
            $useMinMax = false;
            if (isset($1999['min'])) {
                $this->addUsingAlias(IcescatchPeer::1999, $1999['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($1999['max'])) {
                $this->addUsingAlias(IcescatchPeer::1999, $1999['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::1999, $1999, $comparison);
    }

    /**
     * Filter the query on the 2000 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2000(1234); // WHERE 2000 = 1234
     * $query->filterBy2000(array(12, 34)); // WHERE 2000 IN (12, 34)
     * $query->filterBy2000(array('min' => 12)); // WHERE 2000 >= 12
     * $query->filterBy2000(array('max' => 12)); // WHERE 2000 <= 12
     * </code>
     *
     * @param     mixed $2000 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2000($2000 = null, $comparison = null)
    {
        if (is_array($2000)) {
            $useMinMax = false;
            if (isset($2000['min'])) {
                $this->addUsingAlias(IcescatchPeer::2000, $2000['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2000['max'])) {
                $this->addUsingAlias(IcescatchPeer::2000, $2000['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2000, $2000, $comparison);
    }

    /**
     * Filter the query on the 2001 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2001(1234); // WHERE 2001 = 1234
     * $query->filterBy2001(array(12, 34)); // WHERE 2001 IN (12, 34)
     * $query->filterBy2001(array('min' => 12)); // WHERE 2001 >= 12
     * $query->filterBy2001(array('max' => 12)); // WHERE 2001 <= 12
     * </code>
     *
     * @param     mixed $2001 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2001($2001 = null, $comparison = null)
    {
        if (is_array($2001)) {
            $useMinMax = false;
            if (isset($2001['min'])) {
                $this->addUsingAlias(IcescatchPeer::2001, $2001['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2001['max'])) {
                $this->addUsingAlias(IcescatchPeer::2001, $2001['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2001, $2001, $comparison);
    }

    /**
     * Filter the query on the 2002 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2002(1234); // WHERE 2002 = 1234
     * $query->filterBy2002(array(12, 34)); // WHERE 2002 IN (12, 34)
     * $query->filterBy2002(array('min' => 12)); // WHERE 2002 >= 12
     * $query->filterBy2002(array('max' => 12)); // WHERE 2002 <= 12
     * </code>
     *
     * @param     mixed $2002 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2002($2002 = null, $comparison = null)
    {
        if (is_array($2002)) {
            $useMinMax = false;
            if (isset($2002['min'])) {
                $this->addUsingAlias(IcescatchPeer::2002, $2002['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2002['max'])) {
                $this->addUsingAlias(IcescatchPeer::2002, $2002['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2002, $2002, $comparison);
    }

    /**
     * Filter the query on the 2003 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2003(1234); // WHERE 2003 = 1234
     * $query->filterBy2003(array(12, 34)); // WHERE 2003 IN (12, 34)
     * $query->filterBy2003(array('min' => 12)); // WHERE 2003 >= 12
     * $query->filterBy2003(array('max' => 12)); // WHERE 2003 <= 12
     * </code>
     *
     * @param     mixed $2003 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2003($2003 = null, $comparison = null)
    {
        if (is_array($2003)) {
            $useMinMax = false;
            if (isset($2003['min'])) {
                $this->addUsingAlias(IcescatchPeer::2003, $2003['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2003['max'])) {
                $this->addUsingAlias(IcescatchPeer::2003, $2003['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2003, $2003, $comparison);
    }

    /**
     * Filter the query on the 2004 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2004(1234); // WHERE 2004 = 1234
     * $query->filterBy2004(array(12, 34)); // WHERE 2004 IN (12, 34)
     * $query->filterBy2004(array('min' => 12)); // WHERE 2004 >= 12
     * $query->filterBy2004(array('max' => 12)); // WHERE 2004 <= 12
     * </code>
     *
     * @param     mixed $2004 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2004($2004 = null, $comparison = null)
    {
        if (is_array($2004)) {
            $useMinMax = false;
            if (isset($2004['min'])) {
                $this->addUsingAlias(IcescatchPeer::2004, $2004['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2004['max'])) {
                $this->addUsingAlias(IcescatchPeer::2004, $2004['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2004, $2004, $comparison);
    }

    /**
     * Filter the query on the 2005 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2005(1234); // WHERE 2005 = 1234
     * $query->filterBy2005(array(12, 34)); // WHERE 2005 IN (12, 34)
     * $query->filterBy2005(array('min' => 12)); // WHERE 2005 >= 12
     * $query->filterBy2005(array('max' => 12)); // WHERE 2005 <= 12
     * </code>
     *
     * @param     mixed $2005 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2005($2005 = null, $comparison = null)
    {
        if (is_array($2005)) {
            $useMinMax = false;
            if (isset($2005['min'])) {
                $this->addUsingAlias(IcescatchPeer::2005, $2005['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2005['max'])) {
                $this->addUsingAlias(IcescatchPeer::2005, $2005['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2005, $2005, $comparison);
    }

    /**
     * Filter the query on the 2006 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2006(1234); // WHERE 2006 = 1234
     * $query->filterBy2006(array(12, 34)); // WHERE 2006 IN (12, 34)
     * $query->filterBy2006(array('min' => 12)); // WHERE 2006 >= 12
     * $query->filterBy2006(array('max' => 12)); // WHERE 2006 <= 12
     * </code>
     *
     * @param     mixed $2006 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2006($2006 = null, $comparison = null)
    {
        if (is_array($2006)) {
            $useMinMax = false;
            if (isset($2006['min'])) {
                $this->addUsingAlias(IcescatchPeer::2006, $2006['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2006['max'])) {
                $this->addUsingAlias(IcescatchPeer::2006, $2006['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2006, $2006, $comparison);
    }

    /**
     * Filter the query on the 2007 column
     *
     * Example usage:
     * <code>
     * $query->filterBy2007(1234); // WHERE 2007 = 1234
     * $query->filterBy2007(array(12, 34)); // WHERE 2007 IN (12, 34)
     * $query->filterBy2007(array('min' => 12)); // WHERE 2007 >= 12
     * $query->filterBy2007(array('max' => 12)); // WHERE 2007 <= 12
     * </code>
     *
     * @param     mixed $2007 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterBy2007($2007 = null, $comparison = null)
    {
        if (is_array($2007)) {
            $useMinMax = false;
            if (isset($2007['min'])) {
                $this->addUsingAlias(IcescatchPeer::2007, $2007['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($2007['max'])) {
                $this->addUsingAlias(IcescatchPeer::2007, $2007['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::2007, $2007, $comparison);
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
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(IcescatchPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(IcescatchPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IcescatchPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Icescatch $icescatch Object to remove from the list of results
     *
     * @return IcescatchQuery The current query, for fluid interface
     */
    public function prune($icescatch = null)
    {
        if ($icescatch) {
            $this->addUsingAlias(IcescatchPeer::AUTOCTR, $icescatch->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
