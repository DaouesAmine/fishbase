<?php


/**
 * Base class that represents a query for the 'diet_items' table.
 *
 *
 *
 * @method DietItemsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method DietItemsQuery orderByDietcode($order = Criteria::ASC) Order by the DietCode column
 * @method DietItemsQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method DietItemsQuery orderByFoodii($order = Criteria::ASC) Order by the FoodII column
 * @method DietItemsQuery orderByFoodiii($order = Criteria::ASC) Order by the FoodIII column
 * @method DietItemsQuery orderByStage($order = Criteria::ASC) Order by the Stage column
 * @method DietItemsQuery orderByDietpercent($order = Criteria::ASC) Order by the DietPercent column
 * @method DietItemsQuery orderByItemname($order = Criteria::ASC) Order by the ItemName column
 * @method DietItemsQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method DietItemsQuery orderByDietspeccode($order = Criteria::ASC) Order by the DietSpeccode column
 * @method DietItemsQuery orderByDietspeccodeslb($order = Criteria::ASC) Order by the DietSpeccodeSLB column
 * @method DietItemsQuery orderByAlphacode($order = Criteria::ASC) Order by the AlphaCode column
 * @method DietItemsQuery orderByPreytroph($order = Criteria::ASC) Order by the PreyTroph column
 * @method DietItemsQuery orderByPreysetroph($order = Criteria::ASC) Order by the PreySeTroph column
 * @method DietItemsQuery orderByPreyremark($order = Criteria::ASC) Order by the PreyRemark column
 *
 * @method DietItemsQuery groupByAutoctr() Group by the autoctr column
 * @method DietItemsQuery groupByDietcode() Group by the DietCode column
 * @method DietItemsQuery groupByFoodi() Group by the FoodI column
 * @method DietItemsQuery groupByFoodii() Group by the FoodII column
 * @method DietItemsQuery groupByFoodiii() Group by the FoodIII column
 * @method DietItemsQuery groupByStage() Group by the Stage column
 * @method DietItemsQuery groupByDietpercent() Group by the DietPercent column
 * @method DietItemsQuery groupByItemname() Group by the ItemName column
 * @method DietItemsQuery groupByComment() Group by the Comment column
 * @method DietItemsQuery groupByDietspeccode() Group by the DietSpeccode column
 * @method DietItemsQuery groupByDietspeccodeslb() Group by the DietSpeccodeSLB column
 * @method DietItemsQuery groupByAlphacode() Group by the AlphaCode column
 * @method DietItemsQuery groupByPreytroph() Group by the PreyTroph column
 * @method DietItemsQuery groupByPreysetroph() Group by the PreySeTroph column
 * @method DietItemsQuery groupByPreyremark() Group by the PreyRemark column
 *
 * @method DietItemsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DietItemsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DietItemsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DietItems findOne(PropelPDO $con = null) Return the first DietItems matching the query
 * @method DietItems findOneOrCreate(PropelPDO $con = null) Return the first DietItems matching the query, or a new DietItems object populated from the query conditions when no match is found
 *
 * @method DietItems findOneByAutoctr(int $autoctr) Return the first DietItems filtered by the autoctr column
 * @method DietItems findOneByDietcode(int $DietCode) Return the first DietItems filtered by the DietCode column
 * @method DietItems findOneByFoodi(string $FoodI) Return the first DietItems filtered by the FoodI column
 * @method DietItems findOneByFoodii(string $FoodII) Return the first DietItems filtered by the FoodII column
 * @method DietItems findOneByFoodiii(string $FoodIII) Return the first DietItems filtered by the FoodIII column
 * @method DietItems findOneByStage(string $Stage) Return the first DietItems filtered by the Stage column
 * @method DietItems findOneByDietpercent(double $DietPercent) Return the first DietItems filtered by the DietPercent column
 * @method DietItems findOneByItemname(string $ItemName) Return the first DietItems filtered by the ItemName column
 * @method DietItems findOneByComment(string $Comment) Return the first DietItems filtered by the Comment column
 * @method DietItems findOneByDietspeccode(int $DietSpeccode) Return the first DietItems filtered by the DietSpeccode column
 * @method DietItems findOneByDietspeccodeslb(int $DietSpeccodeSLB) Return the first DietItems filtered by the DietSpeccodeSLB column
 * @method DietItems findOneByAlphacode(string $AlphaCode) Return the first DietItems filtered by the AlphaCode column
 * @method DietItems findOneByPreytroph(double $PreyTroph) Return the first DietItems filtered by the PreyTroph column
 * @method DietItems findOneByPreysetroph(double $PreySeTroph) Return the first DietItems filtered by the PreySeTroph column
 * @method DietItems findOneByPreyremark(string $PreyRemark) Return the first DietItems filtered by the PreyRemark column
 *
 * @method array findByAutoctr(int $autoctr) Return DietItems objects filtered by the autoctr column
 * @method array findByDietcode(int $DietCode) Return DietItems objects filtered by the DietCode column
 * @method array findByFoodi(string $FoodI) Return DietItems objects filtered by the FoodI column
 * @method array findByFoodii(string $FoodII) Return DietItems objects filtered by the FoodII column
 * @method array findByFoodiii(string $FoodIII) Return DietItems objects filtered by the FoodIII column
 * @method array findByStage(string $Stage) Return DietItems objects filtered by the Stage column
 * @method array findByDietpercent(double $DietPercent) Return DietItems objects filtered by the DietPercent column
 * @method array findByItemname(string $ItemName) Return DietItems objects filtered by the ItemName column
 * @method array findByComment(string $Comment) Return DietItems objects filtered by the Comment column
 * @method array findByDietspeccode(int $DietSpeccode) Return DietItems objects filtered by the DietSpeccode column
 * @method array findByDietspeccodeslb(int $DietSpeccodeSLB) Return DietItems objects filtered by the DietSpeccodeSLB column
 * @method array findByAlphacode(string $AlphaCode) Return DietItems objects filtered by the AlphaCode column
 * @method array findByPreytroph(double $PreyTroph) Return DietItems objects filtered by the PreyTroph column
 * @method array findByPreysetroph(double $PreySeTroph) Return DietItems objects filtered by the PreySeTroph column
 * @method array findByPreyremark(string $PreyRemark) Return DietItems objects filtered by the PreyRemark column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDietItemsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDietItemsQuery object.
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
            $modelName = 'DietItems';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DietItemsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DietItemsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DietItemsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DietItemsQuery) {
            return $criteria;
        }
        $query = new DietItemsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$DietCode, $FoodIII, $Stage, $DietPercent, $ItemName]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   DietItems|DietItems[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DietItemsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DietItems A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `DietCode`, `FoodI`, `FoodII`, `FoodIII`, `Stage`, `DietPercent`, `ItemName`, `Comment`, `DietSpeccode`, `DietSpeccodeSLB`, `AlphaCode`, `PreyTroph`, `PreySeTroph`, `PreyRemark` FROM `diet_items` WHERE `DietCode` = :p0 AND `FoodIII` = :p1 AND `Stage` = :p2 AND `DietPercent` = :p3 AND `ItemName` = :p4';
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
            $obj = new DietItems();
            $obj->hydrate($row);
            DietItemsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return DietItems|DietItems[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DietItems[]|mixed the list of results, formatted by the current formatter
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
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DietItemsPeer::DIETCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DietItemsPeer::FOODIII, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DietItemsPeer::STAGE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(DietItemsPeer::DIETPERCENT, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(DietItemsPeer::ITEMNAME, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DietItemsPeer::DIETCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DietItemsPeer::FOODIII, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DietItemsPeer::STAGE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(DietItemsPeer::DIETPERCENT, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(DietItemsPeer::ITEMNAME, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(DietItemsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(DietItemsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the DietCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDietcode(1234); // WHERE DietCode = 1234
     * $query->filterByDietcode(array(12, 34)); // WHERE DietCode IN (12, 34)
     * $query->filterByDietcode(array('min' => 12)); // WHERE DietCode >= 12
     * $query->filterByDietcode(array('max' => 12)); // WHERE DietCode <= 12
     * </code>
     *
     * @param     mixed $dietcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByDietcode($dietcode = null, $comparison = null)
    {
        if (is_array($dietcode)) {
            $useMinMax = false;
            if (isset($dietcode['min'])) {
                $this->addUsingAlias(DietItemsPeer::DIETCODE, $dietcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietcode['max'])) {
                $this->addUsingAlias(DietItemsPeer::DIETCODE, $dietcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::DIETCODE, $dietcode, $comparison);
    }

    /**
     * Filter the query on the FoodI column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodi('fooValue');   // WHERE FoodI = 'fooValue'
     * $query->filterByFoodi('%fooValue%'); // WHERE FoodI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByFoodi($foodi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodi)) {
                $foodi = str_replace('*', '%', $foodi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the FoodII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodii('fooValue');   // WHERE FoodII = 'fooValue'
     * $query->filterByFoodii('%fooValue%'); // WHERE FoodII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByFoodii($foodii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodii)) {
                $foodii = str_replace('*', '%', $foodii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::FOODII, $foodii, $comparison);
    }

    /**
     * Filter the query on the FoodIII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodiii('fooValue');   // WHERE FoodIII = 'fooValue'
     * $query->filterByFoodiii('%fooValue%'); // WHERE FoodIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByFoodiii($foodiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodiii)) {
                $foodiii = str_replace('*', '%', $foodiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::FOODIII, $foodiii, $comparison);
    }

    /**
     * Filter the query on the Stage column
     *
     * Example usage:
     * <code>
     * $query->filterByStage('fooValue');   // WHERE Stage = 'fooValue'
     * $query->filterByStage('%fooValue%'); // WHERE Stage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByStage($stage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stage)) {
                $stage = str_replace('*', '%', $stage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::STAGE, $stage, $comparison);
    }

    /**
     * Filter the query on the DietPercent column
     *
     * Example usage:
     * <code>
     * $query->filterByDietpercent(1234); // WHERE DietPercent = 1234
     * $query->filterByDietpercent(array(12, 34)); // WHERE DietPercent IN (12, 34)
     * $query->filterByDietpercent(array('min' => 12)); // WHERE DietPercent >= 12
     * $query->filterByDietpercent(array('max' => 12)); // WHERE DietPercent <= 12
     * </code>
     *
     * @param     mixed $dietpercent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByDietpercent($dietpercent = null, $comparison = null)
    {
        if (is_array($dietpercent)) {
            $useMinMax = false;
            if (isset($dietpercent['min'])) {
                $this->addUsingAlias(DietItemsPeer::DIETPERCENT, $dietpercent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietpercent['max'])) {
                $this->addUsingAlias(DietItemsPeer::DIETPERCENT, $dietpercent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::DIETPERCENT, $dietpercent, $comparison);
    }

    /**
     * Filter the query on the ItemName column
     *
     * Example usage:
     * <code>
     * $query->filterByItemname('fooValue');   // WHERE ItemName = 'fooValue'
     * $query->filterByItemname('%fooValue%'); // WHERE ItemName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByItemname($itemname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $itemname)) {
                $itemname = str_replace('*', '%', $itemname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::ITEMNAME, $itemname, $comparison);
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
     * @return DietItemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DietItemsPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the DietSpeccode column
     *
     * Example usage:
     * <code>
     * $query->filterByDietspeccode(1234); // WHERE DietSpeccode = 1234
     * $query->filterByDietspeccode(array(12, 34)); // WHERE DietSpeccode IN (12, 34)
     * $query->filterByDietspeccode(array('min' => 12)); // WHERE DietSpeccode >= 12
     * $query->filterByDietspeccode(array('max' => 12)); // WHERE DietSpeccode <= 12
     * </code>
     *
     * @param     mixed $dietspeccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByDietspeccode($dietspeccode = null, $comparison = null)
    {
        if (is_array($dietspeccode)) {
            $useMinMax = false;
            if (isset($dietspeccode['min'])) {
                $this->addUsingAlias(DietItemsPeer::DIETSPECCODE, $dietspeccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietspeccode['max'])) {
                $this->addUsingAlias(DietItemsPeer::DIETSPECCODE, $dietspeccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::DIETSPECCODE, $dietspeccode, $comparison);
    }

    /**
     * Filter the query on the DietSpeccodeSLB column
     *
     * Example usage:
     * <code>
     * $query->filterByDietspeccodeslb(1234); // WHERE DietSpeccodeSLB = 1234
     * $query->filterByDietspeccodeslb(array(12, 34)); // WHERE DietSpeccodeSLB IN (12, 34)
     * $query->filterByDietspeccodeslb(array('min' => 12)); // WHERE DietSpeccodeSLB >= 12
     * $query->filterByDietspeccodeslb(array('max' => 12)); // WHERE DietSpeccodeSLB <= 12
     * </code>
     *
     * @param     mixed $dietspeccodeslb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByDietspeccodeslb($dietspeccodeslb = null, $comparison = null)
    {
        if (is_array($dietspeccodeslb)) {
            $useMinMax = false;
            if (isset($dietspeccodeslb['min'])) {
                $this->addUsingAlias(DietItemsPeer::DIETSPECCODESLB, $dietspeccodeslb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietspeccodeslb['max'])) {
                $this->addUsingAlias(DietItemsPeer::DIETSPECCODESLB, $dietspeccodeslb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::DIETSPECCODESLB, $dietspeccodeslb, $comparison);
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
     * @return DietItemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DietItemsPeer::ALPHACODE, $alphacode, $comparison);
    }

    /**
     * Filter the query on the PreyTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPreytroph(1234); // WHERE PreyTroph = 1234
     * $query->filterByPreytroph(array(12, 34)); // WHERE PreyTroph IN (12, 34)
     * $query->filterByPreytroph(array('min' => 12)); // WHERE PreyTroph >= 12
     * $query->filterByPreytroph(array('max' => 12)); // WHERE PreyTroph <= 12
     * </code>
     *
     * @param     mixed $preytroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByPreytroph($preytroph = null, $comparison = null)
    {
        if (is_array($preytroph)) {
            $useMinMax = false;
            if (isset($preytroph['min'])) {
                $this->addUsingAlias(DietItemsPeer::PREYTROPH, $preytroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preytroph['max'])) {
                $this->addUsingAlias(DietItemsPeer::PREYTROPH, $preytroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::PREYTROPH, $preytroph, $comparison);
    }

    /**
     * Filter the query on the PreySeTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPreysetroph(1234); // WHERE PreySeTroph = 1234
     * $query->filterByPreysetroph(array(12, 34)); // WHERE PreySeTroph IN (12, 34)
     * $query->filterByPreysetroph(array('min' => 12)); // WHERE PreySeTroph >= 12
     * $query->filterByPreysetroph(array('max' => 12)); // WHERE PreySeTroph <= 12
     * </code>
     *
     * @param     mixed $preysetroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByPreysetroph($preysetroph = null, $comparison = null)
    {
        if (is_array($preysetroph)) {
            $useMinMax = false;
            if (isset($preysetroph['min'])) {
                $this->addUsingAlias(DietItemsPeer::PREYSETROPH, $preysetroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preysetroph['max'])) {
                $this->addUsingAlias(DietItemsPeer::PREYSETROPH, $preysetroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::PREYSETROPH, $preysetroph, $comparison);
    }

    /**
     * Filter the query on the PreyRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByPreyremark('fooValue');   // WHERE PreyRemark = 'fooValue'
     * $query->filterByPreyremark('%fooValue%'); // WHERE PreyRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $preyremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function filterByPreyremark($preyremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($preyremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $preyremark)) {
                $preyremark = str_replace('*', '%', $preyremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietItemsPeer::PREYREMARK, $preyremark, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   DietItems $dietItems Object to remove from the list of results
     *
     * @return DietItemsQuery The current query, for fluid interface
     */
    public function prune($dietItems = null)
    {
        if ($dietItems) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DietItemsPeer::DIETCODE), $dietItems->getDietcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DietItemsPeer::FOODIII), $dietItems->getFoodiii(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DietItemsPeer::STAGE), $dietItems->getStage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(DietItemsPeer::DIETPERCENT), $dietItems->getDietpercent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(DietItemsPeer::ITEMNAME), $dietItems->getItemname(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
