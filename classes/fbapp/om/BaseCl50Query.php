<?php


/**
 * Base class that represents a query for the 'cl50' table.
 *
 *
 *
 * @method Cl50Query orderByCl50code($order = Criteria::ASC) Order by the CL50Code column
 * @method Cl50Query orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method Cl50Query orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method Cl50Query orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method Cl50Query orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method Cl50Query orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method Cl50Query orderByFamcode($order = Criteria::ASC) Order by the famcode column
 * @method Cl50Query orderByNumber2($order = Criteria::ASC) Order by the Number2 column
 * @method Cl50Query orderBySex2($order = Criteria::ASC) Order by the Sex2 column
 * @method Cl50Query orderByCl50refno($order = Criteria::ASC) Order by the CL50RefNo column
 * @method Cl50Query orderByMinimumweight($order = Criteria::ASC) Order by the MinimumWeight column
 * @method Cl50Query orderByModalweight($order = Criteria::ASC) Order by the ModalWeight column
 * @method Cl50Query orderByMaximumweight($order = Criteria::ASC) Order by the MaximumWeight column
 * @method Cl50Query orderByLifestage($order = Criteria::ASC) Order by the LifeStage column
 * @method Cl50Query orderByLength($order = Criteria::ASC) Order by the Length column
 * @method Cl50Query orderByAppliedstress($order = Criteria::ASC) Order by the AppliedStress column
 * @method Cl50Query orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method Cl50Query orderByTemp($order = Criteria::ASC) Order by the Temp column
 * @method Cl50Query orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method Cl50Query orderByOxygen($order = Criteria::ASC) Order by the Oxygen column
 * @method Cl50Query orderByOxygenmgl($order = Criteria::ASC) Order by the Oxygenmgl column
 * @method Cl50Query orderByPh($order = Criteria::ASC) Order by the pH column
 * @method Cl50Query orderByAlkalinity($order = Criteria::ASC) Order by the Alkalinity column
 * @method Cl50Query orderByChemicalgroup($order = Criteria::ASC) Order by the ChemicalGroup column
 * @method Cl50Query orderByChemicalgroup2($order = Criteria::ASC) Order by the ChemicalGroup2 column
 * @method Cl50Query orderByChemicalname($order = Criteria::ASC) Order by the ChemicalName column
 * @method Cl50Query orderByPurity($order = Criteria::ASC) Order by the Purity column
 * @method Cl50Query orderByVehicle($order = Criteria::ASC) Order by the Vehicle column
 * @method Cl50Query orderByPurity2($order = Criteria::ASC) Order by the Purity2 column
 * @method Cl50Query orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method Cl50Query orderByChemicaluse($order = Criteria::ASC) Order by the ChemicalUse column
 * @method Cl50Query orderByCl50($order = Criteria::ASC) Order by the CL50 column
 * @method Cl50Query orderByExposition($order = Criteria::ASC) Order by the Exposition column
 * @method Cl50Query orderByFlow($order = Criteria::ASC) Order by the Flow column
 * @method Cl50Query orderByFlowrate($order = Criteria::ASC) Order by the FlowRate column
 * @method Cl50Query orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method Cl50Query orderByCl50refnofb($order = Criteria::ASC) Order by the CL50RefNoFB column
 * @method Cl50Query orderByDatareffb($order = Criteria::ASC) Order by the DataRefFb column
 * @method Cl50Query orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method Cl50Query orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method Cl50Query orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method Cl50Query orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method Cl50Query orderByChecked($order = Criteria::ASC) Order by the Checked column
 * @method Cl50Query orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method Cl50Query orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method Cl50Query groupByCl50code() Group by the CL50Code column
 * @method Cl50Query groupByGenus() Group by the Genus column
 * @method Cl50Query groupBySpecies() Group by the Species column
 * @method Cl50Query groupBySpeccode() Group by the SpecCode column
 * @method Cl50Query groupByStockcode() Group by the StockCode column
 * @method Cl50Query groupByFamily() Group by the Family column
 * @method Cl50Query groupByFamcode() Group by the famcode column
 * @method Cl50Query groupByNumber2() Group by the Number2 column
 * @method Cl50Query groupBySex2() Group by the Sex2 column
 * @method Cl50Query groupByCl50refno() Group by the CL50RefNo column
 * @method Cl50Query groupByMinimumweight() Group by the MinimumWeight column
 * @method Cl50Query groupByModalweight() Group by the ModalWeight column
 * @method Cl50Query groupByMaximumweight() Group by the MaximumWeight column
 * @method Cl50Query groupByLifestage() Group by the LifeStage column
 * @method Cl50Query groupByLength() Group by the Length column
 * @method Cl50Query groupByAppliedstress() Group by the AppliedStress column
 * @method Cl50Query groupByDataref() Group by the DataRef column
 * @method Cl50Query groupByTemp() Group by the Temp column
 * @method Cl50Query groupBySalinity() Group by the Salinity column
 * @method Cl50Query groupByOxygen() Group by the Oxygen column
 * @method Cl50Query groupByOxygenmgl() Group by the Oxygenmgl column
 * @method Cl50Query groupByPh() Group by the pH column
 * @method Cl50Query groupByAlkalinity() Group by the Alkalinity column
 * @method Cl50Query groupByChemicalgroup() Group by the ChemicalGroup column
 * @method Cl50Query groupByChemicalgroup2() Group by the ChemicalGroup2 column
 * @method Cl50Query groupByChemicalname() Group by the ChemicalName column
 * @method Cl50Query groupByPurity() Group by the Purity column
 * @method Cl50Query groupByVehicle() Group by the Vehicle column
 * @method Cl50Query groupByPurity2() Group by the Purity2 column
 * @method Cl50Query groupByCommonname() Group by the CommonName column
 * @method Cl50Query groupByChemicaluse() Group by the ChemicalUse column
 * @method Cl50Query groupByCl50() Group by the CL50 column
 * @method Cl50Query groupByExposition() Group by the Exposition column
 * @method Cl50Query groupByFlow() Group by the Flow column
 * @method Cl50Query groupByFlowrate() Group by the FlowRate column
 * @method Cl50Query groupByComments() Group by the Comments column
 * @method Cl50Query groupByCl50refnofb() Group by the CL50RefNoFB column
 * @method Cl50Query groupByDatareffb() Group by the DataRefFb column
 * @method Cl50Query groupByEntered() Group by the Entered column
 * @method Cl50Query groupByDateentered() Group by the DateEntered column
 * @method Cl50Query groupByModified() Group by the Modified column
 * @method Cl50Query groupByDatemodified() Group by the DateModified column
 * @method Cl50Query groupByChecked() Group by the Checked column
 * @method Cl50Query groupByDatechecked() Group by the DateChecked column
 * @method Cl50Query groupByTs() Group by the TS column
 *
 * @method Cl50Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Cl50Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Cl50Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cl50 findOne(PropelPDO $con = null) Return the first Cl50 matching the query
 * @method Cl50 findOneOrCreate(PropelPDO $con = null) Return the first Cl50 matching the query, or a new Cl50 object populated from the query conditions when no match is found
 *
 * @method Cl50 findOneByGenus(string $Genus) Return the first Cl50 filtered by the Genus column
 * @method Cl50 findOneBySpecies(string $Species) Return the first Cl50 filtered by the Species column
 * @method Cl50 findOneBySpeccode(int $SpecCode) Return the first Cl50 filtered by the SpecCode column
 * @method Cl50 findOneByStockcode(int $StockCode) Return the first Cl50 filtered by the StockCode column
 * @method Cl50 findOneByFamily(string $Family) Return the first Cl50 filtered by the Family column
 * @method Cl50 findOneByFamcode(int $famcode) Return the first Cl50 filtered by the famcode column
 * @method Cl50 findOneByNumber2(int $Number2) Return the first Cl50 filtered by the Number2 column
 * @method Cl50 findOneBySex2(string $Sex2) Return the first Cl50 filtered by the Sex2 column
 * @method Cl50 findOneByCl50refno(int $CL50RefNo) Return the first Cl50 filtered by the CL50RefNo column
 * @method Cl50 findOneByMinimumweight(double $MinimumWeight) Return the first Cl50 filtered by the MinimumWeight column
 * @method Cl50 findOneByModalweight(double $ModalWeight) Return the first Cl50 filtered by the ModalWeight column
 * @method Cl50 findOneByMaximumweight(double $MaximumWeight) Return the first Cl50 filtered by the MaximumWeight column
 * @method Cl50 findOneByLifestage(string $LifeStage) Return the first Cl50 filtered by the LifeStage column
 * @method Cl50 findOneByLength(double $Length) Return the first Cl50 filtered by the Length column
 * @method Cl50 findOneByAppliedstress(string $AppliedStress) Return the first Cl50 filtered by the AppliedStress column
 * @method Cl50 findOneByDataref(int $DataRef) Return the first Cl50 filtered by the DataRef column
 * @method Cl50 findOneByTemp(double $Temp) Return the first Cl50 filtered by the Temp column
 * @method Cl50 findOneBySalinity(int $Salinity) Return the first Cl50 filtered by the Salinity column
 * @method Cl50 findOneByOxygen(int $Oxygen) Return the first Cl50 filtered by the Oxygen column
 * @method Cl50 findOneByOxygenmgl(double $Oxygenmgl) Return the first Cl50 filtered by the Oxygenmgl column
 * @method Cl50 findOneByPh(double $pH) Return the first Cl50 filtered by the pH column
 * @method Cl50 findOneByAlkalinity(double $Alkalinity) Return the first Cl50 filtered by the Alkalinity column
 * @method Cl50 findOneByChemicalgroup(string $ChemicalGroup) Return the first Cl50 filtered by the ChemicalGroup column
 * @method Cl50 findOneByChemicalgroup2(string $ChemicalGroup2) Return the first Cl50 filtered by the ChemicalGroup2 column
 * @method Cl50 findOneByChemicalname(string $ChemicalName) Return the first Cl50 filtered by the ChemicalName column
 * @method Cl50 findOneByPurity(double $Purity) Return the first Cl50 filtered by the Purity column
 * @method Cl50 findOneByVehicle(string $Vehicle) Return the first Cl50 filtered by the Vehicle column
 * @method Cl50 findOneByPurity2(string $Purity2) Return the first Cl50 filtered by the Purity2 column
 * @method Cl50 findOneByCommonname(string $CommonName) Return the first Cl50 filtered by the CommonName column
 * @method Cl50 findOneByChemicaluse(string $ChemicalUse) Return the first Cl50 filtered by the ChemicalUse column
 * @method Cl50 findOneByCl50(double $CL50) Return the first Cl50 filtered by the CL50 column
 * @method Cl50 findOneByExposition(int $Exposition) Return the first Cl50 filtered by the Exposition column
 * @method Cl50 findOneByFlow(int $Flow) Return the first Cl50 filtered by the Flow column
 * @method Cl50 findOneByFlowrate(double $FlowRate) Return the first Cl50 filtered by the FlowRate column
 * @method Cl50 findOneByComments(string $Comments) Return the first Cl50 filtered by the Comments column
 * @method Cl50 findOneByCl50refnofb(int $CL50RefNoFB) Return the first Cl50 filtered by the CL50RefNoFB column
 * @method Cl50 findOneByDatareffb(int $DataRefFb) Return the first Cl50 filtered by the DataRefFb column
 * @method Cl50 findOneByEntered(int $Entered) Return the first Cl50 filtered by the Entered column
 * @method Cl50 findOneByDateentered(string $DateEntered) Return the first Cl50 filtered by the DateEntered column
 * @method Cl50 findOneByModified(int $Modified) Return the first Cl50 filtered by the Modified column
 * @method Cl50 findOneByDatemodified(string $DateModified) Return the first Cl50 filtered by the DateModified column
 * @method Cl50 findOneByChecked(int $Checked) Return the first Cl50 filtered by the Checked column
 * @method Cl50 findOneByDatechecked(string $DateChecked) Return the first Cl50 filtered by the DateChecked column
 * @method Cl50 findOneByTs(string $TS) Return the first Cl50 filtered by the TS column
 *
 * @method array findByCl50code(int $CL50Code) Return Cl50 objects filtered by the CL50Code column
 * @method array findByGenus(string $Genus) Return Cl50 objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Cl50 objects filtered by the Species column
 * @method array findBySpeccode(int $SpecCode) Return Cl50 objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Cl50 objects filtered by the StockCode column
 * @method array findByFamily(string $Family) Return Cl50 objects filtered by the Family column
 * @method array findByFamcode(int $famcode) Return Cl50 objects filtered by the famcode column
 * @method array findByNumber2(int $Number2) Return Cl50 objects filtered by the Number2 column
 * @method array findBySex2(string $Sex2) Return Cl50 objects filtered by the Sex2 column
 * @method array findByCl50refno(int $CL50RefNo) Return Cl50 objects filtered by the CL50RefNo column
 * @method array findByMinimumweight(double $MinimumWeight) Return Cl50 objects filtered by the MinimumWeight column
 * @method array findByModalweight(double $ModalWeight) Return Cl50 objects filtered by the ModalWeight column
 * @method array findByMaximumweight(double $MaximumWeight) Return Cl50 objects filtered by the MaximumWeight column
 * @method array findByLifestage(string $LifeStage) Return Cl50 objects filtered by the LifeStage column
 * @method array findByLength(double $Length) Return Cl50 objects filtered by the Length column
 * @method array findByAppliedstress(string $AppliedStress) Return Cl50 objects filtered by the AppliedStress column
 * @method array findByDataref(int $DataRef) Return Cl50 objects filtered by the DataRef column
 * @method array findByTemp(double $Temp) Return Cl50 objects filtered by the Temp column
 * @method array findBySalinity(int $Salinity) Return Cl50 objects filtered by the Salinity column
 * @method array findByOxygen(int $Oxygen) Return Cl50 objects filtered by the Oxygen column
 * @method array findByOxygenmgl(double $Oxygenmgl) Return Cl50 objects filtered by the Oxygenmgl column
 * @method array findByPh(double $pH) Return Cl50 objects filtered by the pH column
 * @method array findByAlkalinity(double $Alkalinity) Return Cl50 objects filtered by the Alkalinity column
 * @method array findByChemicalgroup(string $ChemicalGroup) Return Cl50 objects filtered by the ChemicalGroup column
 * @method array findByChemicalgroup2(string $ChemicalGroup2) Return Cl50 objects filtered by the ChemicalGroup2 column
 * @method array findByChemicalname(string $ChemicalName) Return Cl50 objects filtered by the ChemicalName column
 * @method array findByPurity(double $Purity) Return Cl50 objects filtered by the Purity column
 * @method array findByVehicle(string $Vehicle) Return Cl50 objects filtered by the Vehicle column
 * @method array findByPurity2(string $Purity2) Return Cl50 objects filtered by the Purity2 column
 * @method array findByCommonname(string $CommonName) Return Cl50 objects filtered by the CommonName column
 * @method array findByChemicaluse(string $ChemicalUse) Return Cl50 objects filtered by the ChemicalUse column
 * @method array findByCl50(double $CL50) Return Cl50 objects filtered by the CL50 column
 * @method array findByExposition(int $Exposition) Return Cl50 objects filtered by the Exposition column
 * @method array findByFlow(int $Flow) Return Cl50 objects filtered by the Flow column
 * @method array findByFlowrate(double $FlowRate) Return Cl50 objects filtered by the FlowRate column
 * @method array findByComments(string $Comments) Return Cl50 objects filtered by the Comments column
 * @method array findByCl50refnofb(int $CL50RefNoFB) Return Cl50 objects filtered by the CL50RefNoFB column
 * @method array findByDatareffb(int $DataRefFb) Return Cl50 objects filtered by the DataRefFb column
 * @method array findByEntered(int $Entered) Return Cl50 objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Cl50 objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Cl50 objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Cl50 objects filtered by the DateModified column
 * @method array findByChecked(int $Checked) Return Cl50 objects filtered by the Checked column
 * @method array findByDatechecked(string $DateChecked) Return Cl50 objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Cl50 objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCl50Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCl50Query object.
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
            $modelName = 'Cl50';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Cl50Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Cl50Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Cl50Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Cl50Query) {
            return $criteria;
        }
        $query = new Cl50Query(null, null, $modelAlias);

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
     * @return   Cl50|Cl50[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Cl50Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cl50 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCl50code($key, $con = null)
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
     * @return                 Cl50 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CL50Code`, `Genus`, `Species`, `SpecCode`, `StockCode`, `Family`, `famcode`, `Number2`, `Sex2`, `CL50RefNo`, `MinimumWeight`, `ModalWeight`, `MaximumWeight`, `LifeStage`, `Length`, `AppliedStress`, `DataRef`, `Temp`, `Salinity`, `Oxygen`, `Oxygenmgl`, `pH`, `Alkalinity`, `ChemicalGroup`, `ChemicalGroup2`, `ChemicalName`, `Purity`, `Vehicle`, `Purity2`, `CommonName`, `ChemicalUse`, `CL50`, `Exposition`, `Flow`, `FlowRate`, `Comments`, `CL50RefNoFB`, `DataRefFb`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Checked`, `DateChecked`, `TS` FROM `cl50` WHERE `CL50Code` = :p0';
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
            $obj = new Cl50();
            $obj->hydrate($row);
            Cl50Peer::addInstanceToPool($obj, (string) $key);
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
     * @return Cl50|Cl50[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cl50[]|mixed the list of results, formatted by the current formatter
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Cl50Peer::CL50CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Cl50Peer::CL50CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CL50Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCl50code(1234); // WHERE CL50Code = 1234
     * $query->filterByCl50code(array(12, 34)); // WHERE CL50Code IN (12, 34)
     * $query->filterByCl50code(array('min' => 12)); // WHERE CL50Code >= 12
     * $query->filterByCl50code(array('max' => 12)); // WHERE CL50Code <= 12
     * </code>
     *
     * @param     mixed $cl50code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByCl50code($cl50code = null, $comparison = null)
    {
        if (is_array($cl50code)) {
            $useMinMax = false;
            if (isset($cl50code['min'])) {
                $this->addUsingAlias(Cl50Peer::CL50CODE, $cl50code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cl50code['max'])) {
                $this->addUsingAlias(Cl50Peer::CL50CODE, $cl50code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CL50CODE, $cl50code, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
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

        return $this->addUsingAlias(Cl50Peer::GENUS, $genus, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
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

        return $this->addUsingAlias(Cl50Peer::SPECIES, $species, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(Cl50Peer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(Cl50Peer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::SPECCODE, $speccode, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(Cl50Peer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(Cl50Peer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the Family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE Family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE Family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the famcode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE famcode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE famcode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE famcode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE famcode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(Cl50Peer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(Cl50Peer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Number2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber2(1234); // WHERE Number2 = 1234
     * $query->filterByNumber2(array(12, 34)); // WHERE Number2 IN (12, 34)
     * $query->filterByNumber2(array('min' => 12)); // WHERE Number2 >= 12
     * $query->filterByNumber2(array('max' => 12)); // WHERE Number2 <= 12
     * </code>
     *
     * @param     mixed $number2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByNumber2($number2 = null, $comparison = null)
    {
        if (is_array($number2)) {
            $useMinMax = false;
            if (isset($number2['min'])) {
                $this->addUsingAlias(Cl50Peer::NUMBER2, $number2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number2['max'])) {
                $this->addUsingAlias(Cl50Peer::NUMBER2, $number2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::NUMBER2, $number2, $comparison);
    }

    /**
     * Filter the query on the Sex2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySex2('fooValue');   // WHERE Sex2 = 'fooValue'
     * $query->filterBySex2('%fooValue%'); // WHERE Sex2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterBySex2($sex2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex2)) {
                $sex2 = str_replace('*', '%', $sex2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::SEX2, $sex2, $comparison);
    }

    /**
     * Filter the query on the CL50RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCl50refno(1234); // WHERE CL50RefNo = 1234
     * $query->filterByCl50refno(array(12, 34)); // WHERE CL50RefNo IN (12, 34)
     * $query->filterByCl50refno(array('min' => 12)); // WHERE CL50RefNo >= 12
     * $query->filterByCl50refno(array('max' => 12)); // WHERE CL50RefNo <= 12
     * </code>
     *
     * @param     mixed $cl50refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByCl50refno($cl50refno = null, $comparison = null)
    {
        if (is_array($cl50refno)) {
            $useMinMax = false;
            if (isset($cl50refno['min'])) {
                $this->addUsingAlias(Cl50Peer::CL50REFNO, $cl50refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cl50refno['max'])) {
                $this->addUsingAlias(Cl50Peer::CL50REFNO, $cl50refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CL50REFNO, $cl50refno, $comparison);
    }

    /**
     * Filter the query on the MinimumWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByMinimumweight(1234); // WHERE MinimumWeight = 1234
     * $query->filterByMinimumweight(array(12, 34)); // WHERE MinimumWeight IN (12, 34)
     * $query->filterByMinimumweight(array('min' => 12)); // WHERE MinimumWeight >= 12
     * $query->filterByMinimumweight(array('max' => 12)); // WHERE MinimumWeight <= 12
     * </code>
     *
     * @param     mixed $minimumweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByMinimumweight($minimumweight = null, $comparison = null)
    {
        if (is_array($minimumweight)) {
            $useMinMax = false;
            if (isset($minimumweight['min'])) {
                $this->addUsingAlias(Cl50Peer::MINIMUMWEIGHT, $minimumweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minimumweight['max'])) {
                $this->addUsingAlias(Cl50Peer::MINIMUMWEIGHT, $minimumweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::MINIMUMWEIGHT, $minimumweight, $comparison);
    }

    /**
     * Filter the query on the ModalWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByModalweight(1234); // WHERE ModalWeight = 1234
     * $query->filterByModalweight(array(12, 34)); // WHERE ModalWeight IN (12, 34)
     * $query->filterByModalweight(array('min' => 12)); // WHERE ModalWeight >= 12
     * $query->filterByModalweight(array('max' => 12)); // WHERE ModalWeight <= 12
     * </code>
     *
     * @param     mixed $modalweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByModalweight($modalweight = null, $comparison = null)
    {
        if (is_array($modalweight)) {
            $useMinMax = false;
            if (isset($modalweight['min'])) {
                $this->addUsingAlias(Cl50Peer::MODALWEIGHT, $modalweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modalweight['max'])) {
                $this->addUsingAlias(Cl50Peer::MODALWEIGHT, $modalweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::MODALWEIGHT, $modalweight, $comparison);
    }

    /**
     * Filter the query on the MaximumWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumweight(1234); // WHERE MaximumWeight = 1234
     * $query->filterByMaximumweight(array(12, 34)); // WHERE MaximumWeight IN (12, 34)
     * $query->filterByMaximumweight(array('min' => 12)); // WHERE MaximumWeight >= 12
     * $query->filterByMaximumweight(array('max' => 12)); // WHERE MaximumWeight <= 12
     * </code>
     *
     * @param     mixed $maximumweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByMaximumweight($maximumweight = null, $comparison = null)
    {
        if (is_array($maximumweight)) {
            $useMinMax = false;
            if (isset($maximumweight['min'])) {
                $this->addUsingAlias(Cl50Peer::MAXIMUMWEIGHT, $maximumweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumweight['max'])) {
                $this->addUsingAlias(Cl50Peer::MAXIMUMWEIGHT, $maximumweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::MAXIMUMWEIGHT, $maximumweight, $comparison);
    }

    /**
     * Filter the query on the LifeStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage('fooValue');   // WHERE LifeStage = 'fooValue'
     * $query->filterByLifestage('%fooValue%'); // WHERE LifeStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByLifestage($lifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage)) {
                $lifestage = str_replace('*', '%', $lifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::LIFESTAGE, $lifestage, $comparison);
    }

    /**
     * Filter the query on the Length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE Length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE Length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE Length >= 12
     * $query->filterByLength(array('max' => 12)); // WHERE Length <= 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(Cl50Peer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(Cl50Peer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the AppliedStress column
     *
     * Example usage:
     * <code>
     * $query->filterByAppliedstress('fooValue');   // WHERE AppliedStress = 'fooValue'
     * $query->filterByAppliedstress('%fooValue%'); // WHERE AppliedStress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appliedstress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByAppliedstress($appliedstress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appliedstress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appliedstress)) {
                $appliedstress = str_replace('*', '%', $appliedstress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::APPLIEDSTRESS, $appliedstress, $comparison);
    }

    /**
     * Filter the query on the DataRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref(1234); // WHERE DataRef = 1234
     * $query->filterByDataref(array(12, 34)); // WHERE DataRef IN (12, 34)
     * $query->filterByDataref(array('min' => 12)); // WHERE DataRef >= 12
     * $query->filterByDataref(array('max' => 12)); // WHERE DataRef <= 12
     * </code>
     *
     * @param     mixed $dataref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(Cl50Peer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(Cl50Peer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the Temp column
     *
     * Example usage:
     * <code>
     * $query->filterByTemp(1234); // WHERE Temp = 1234
     * $query->filterByTemp(array(12, 34)); // WHERE Temp IN (12, 34)
     * $query->filterByTemp(array('min' => 12)); // WHERE Temp >= 12
     * $query->filterByTemp(array('max' => 12)); // WHERE Temp <= 12
     * </code>
     *
     * @param     mixed $temp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByTemp($temp = null, $comparison = null)
    {
        if (is_array($temp)) {
            $useMinMax = false;
            if (isset($temp['min'])) {
                $this->addUsingAlias(Cl50Peer::TEMP, $temp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temp['max'])) {
                $this->addUsingAlias(Cl50Peer::TEMP, $temp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::TEMP, $temp, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity(1234); // WHERE Salinity = 1234
     * $query->filterBySalinity(array(12, 34)); // WHERE Salinity IN (12, 34)
     * $query->filterBySalinity(array('min' => 12)); // WHERE Salinity >= 12
     * $query->filterBySalinity(array('max' => 12)); // WHERE Salinity <= 12
     * </code>
     *
     * @param     mixed $salinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (is_array($salinity)) {
            $useMinMax = false;
            if (isset($salinity['min'])) {
                $this->addUsingAlias(Cl50Peer::SALINITY, $salinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinity['max'])) {
                $this->addUsingAlias(Cl50Peer::SALINITY, $salinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the Oxygen column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygen(1234); // WHERE Oxygen = 1234
     * $query->filterByOxygen(array(12, 34)); // WHERE Oxygen IN (12, 34)
     * $query->filterByOxygen(array('min' => 12)); // WHERE Oxygen >= 12
     * $query->filterByOxygen(array('max' => 12)); // WHERE Oxygen <= 12
     * </code>
     *
     * @param     mixed $oxygen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByOxygen($oxygen = null, $comparison = null)
    {
        if (is_array($oxygen)) {
            $useMinMax = false;
            if (isset($oxygen['min'])) {
                $this->addUsingAlias(Cl50Peer::OXYGEN, $oxygen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygen['max'])) {
                $this->addUsingAlias(Cl50Peer::OXYGEN, $oxygen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::OXYGEN, $oxygen, $comparison);
    }

    /**
     * Filter the query on the Oxygenmgl column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmgl(1234); // WHERE Oxygenmgl = 1234
     * $query->filterByOxygenmgl(array(12, 34)); // WHERE Oxygenmgl IN (12, 34)
     * $query->filterByOxygenmgl(array('min' => 12)); // WHERE Oxygenmgl >= 12
     * $query->filterByOxygenmgl(array('max' => 12)); // WHERE Oxygenmgl <= 12
     * </code>
     *
     * @param     mixed $oxygenmgl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByOxygenmgl($oxygenmgl = null, $comparison = null)
    {
        if (is_array($oxygenmgl)) {
            $useMinMax = false;
            if (isset($oxygenmgl['min'])) {
                $this->addUsingAlias(Cl50Peer::OXYGENMGL, $oxygenmgl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmgl['max'])) {
                $this->addUsingAlias(Cl50Peer::OXYGENMGL, $oxygenmgl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::OXYGENMGL, $oxygenmgl, $comparison);
    }

    /**
     * Filter the query on the pH column
     *
     * Example usage:
     * <code>
     * $query->filterByPh(1234); // WHERE pH = 1234
     * $query->filterByPh(array(12, 34)); // WHERE pH IN (12, 34)
     * $query->filterByPh(array('min' => 12)); // WHERE pH >= 12
     * $query->filterByPh(array('max' => 12)); // WHERE pH <= 12
     * </code>
     *
     * @param     mixed $ph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByPh($ph = null, $comparison = null)
    {
        if (is_array($ph)) {
            $useMinMax = false;
            if (isset($ph['min'])) {
                $this->addUsingAlias(Cl50Peer::PH, $ph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ph['max'])) {
                $this->addUsingAlias(Cl50Peer::PH, $ph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::PH, $ph, $comparison);
    }

    /**
     * Filter the query on the Alkalinity column
     *
     * Example usage:
     * <code>
     * $query->filterByAlkalinity(1234); // WHERE Alkalinity = 1234
     * $query->filterByAlkalinity(array(12, 34)); // WHERE Alkalinity IN (12, 34)
     * $query->filterByAlkalinity(array('min' => 12)); // WHERE Alkalinity >= 12
     * $query->filterByAlkalinity(array('max' => 12)); // WHERE Alkalinity <= 12
     * </code>
     *
     * @param     mixed $alkalinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByAlkalinity($alkalinity = null, $comparison = null)
    {
        if (is_array($alkalinity)) {
            $useMinMax = false;
            if (isset($alkalinity['min'])) {
                $this->addUsingAlias(Cl50Peer::ALKALINITY, $alkalinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alkalinity['max'])) {
                $this->addUsingAlias(Cl50Peer::ALKALINITY, $alkalinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::ALKALINITY, $alkalinity, $comparison);
    }

    /**
     * Filter the query on the ChemicalGroup column
     *
     * Example usage:
     * <code>
     * $query->filterByChemicalgroup('fooValue');   // WHERE ChemicalGroup = 'fooValue'
     * $query->filterByChemicalgroup('%fooValue%'); // WHERE ChemicalGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemicalgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByChemicalgroup($chemicalgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemicalgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemicalgroup)) {
                $chemicalgroup = str_replace('*', '%', $chemicalgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CHEMICALGROUP, $chemicalgroup, $comparison);
    }

    /**
     * Filter the query on the ChemicalGroup2 column
     *
     * Example usage:
     * <code>
     * $query->filterByChemicalgroup2('fooValue');   // WHERE ChemicalGroup2 = 'fooValue'
     * $query->filterByChemicalgroup2('%fooValue%'); // WHERE ChemicalGroup2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemicalgroup2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByChemicalgroup2($chemicalgroup2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemicalgroup2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemicalgroup2)) {
                $chemicalgroup2 = str_replace('*', '%', $chemicalgroup2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CHEMICALGROUP2, $chemicalgroup2, $comparison);
    }

    /**
     * Filter the query on the ChemicalName column
     *
     * Example usage:
     * <code>
     * $query->filterByChemicalname('fooValue');   // WHERE ChemicalName = 'fooValue'
     * $query->filterByChemicalname('%fooValue%'); // WHERE ChemicalName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemicalname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByChemicalname($chemicalname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemicalname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemicalname)) {
                $chemicalname = str_replace('*', '%', $chemicalname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CHEMICALNAME, $chemicalname, $comparison);
    }

    /**
     * Filter the query on the Purity column
     *
     * Example usage:
     * <code>
     * $query->filterByPurity(1234); // WHERE Purity = 1234
     * $query->filterByPurity(array(12, 34)); // WHERE Purity IN (12, 34)
     * $query->filterByPurity(array('min' => 12)); // WHERE Purity >= 12
     * $query->filterByPurity(array('max' => 12)); // WHERE Purity <= 12
     * </code>
     *
     * @param     mixed $purity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByPurity($purity = null, $comparison = null)
    {
        if (is_array($purity)) {
            $useMinMax = false;
            if (isset($purity['min'])) {
                $this->addUsingAlias(Cl50Peer::PURITY, $purity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($purity['max'])) {
                $this->addUsingAlias(Cl50Peer::PURITY, $purity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::PURITY, $purity, $comparison);
    }

    /**
     * Filter the query on the Vehicle column
     *
     * Example usage:
     * <code>
     * $query->filterByVehicle('fooValue');   // WHERE Vehicle = 'fooValue'
     * $query->filterByVehicle('%fooValue%'); // WHERE Vehicle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vehicle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByVehicle($vehicle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vehicle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vehicle)) {
                $vehicle = str_replace('*', '%', $vehicle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::VEHICLE, $vehicle, $comparison);
    }

    /**
     * Filter the query on the Purity2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPurity2('fooValue');   // WHERE Purity2 = 'fooValue'
     * $query->filterByPurity2('%fooValue%'); // WHERE Purity2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $purity2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByPurity2($purity2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($purity2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $purity2)) {
                $purity2 = str_replace('*', '%', $purity2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::PURITY2, $purity2, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
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

        return $this->addUsingAlias(Cl50Peer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the ChemicalUse column
     *
     * Example usage:
     * <code>
     * $query->filterByChemicaluse('fooValue');   // WHERE ChemicalUse = 'fooValue'
     * $query->filterByChemicaluse('%fooValue%'); // WHERE ChemicalUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemicaluse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByChemicaluse($chemicaluse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemicaluse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemicaluse)) {
                $chemicaluse = str_replace('*', '%', $chemicaluse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CHEMICALUSE, $chemicaluse, $comparison);
    }

    /**
     * Filter the query on the CL50 column
     *
     * Example usage:
     * <code>
     * $query->filterByCl50(1234); // WHERE CL50 = 1234
     * $query->filterByCl50(array(12, 34)); // WHERE CL50 IN (12, 34)
     * $query->filterByCl50(array('min' => 12)); // WHERE CL50 >= 12
     * $query->filterByCl50(array('max' => 12)); // WHERE CL50 <= 12
     * </code>
     *
     * @param     mixed $cl50 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByCl50($cl50 = null, $comparison = null)
    {
        if (is_array($cl50)) {
            $useMinMax = false;
            if (isset($cl50['min'])) {
                $this->addUsingAlias(Cl50Peer::CL50, $cl50['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cl50['max'])) {
                $this->addUsingAlias(Cl50Peer::CL50, $cl50['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CL50, $cl50, $comparison);
    }

    /**
     * Filter the query on the Exposition column
     *
     * Example usage:
     * <code>
     * $query->filterByExposition(1234); // WHERE Exposition = 1234
     * $query->filterByExposition(array(12, 34)); // WHERE Exposition IN (12, 34)
     * $query->filterByExposition(array('min' => 12)); // WHERE Exposition >= 12
     * $query->filterByExposition(array('max' => 12)); // WHERE Exposition <= 12
     * </code>
     *
     * @param     mixed $exposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByExposition($exposition = null, $comparison = null)
    {
        if (is_array($exposition)) {
            $useMinMax = false;
            if (isset($exposition['min'])) {
                $this->addUsingAlias(Cl50Peer::EXPOSITION, $exposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($exposition['max'])) {
                $this->addUsingAlias(Cl50Peer::EXPOSITION, $exposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::EXPOSITION, $exposition, $comparison);
    }

    /**
     * Filter the query on the Flow column
     *
     * Example usage:
     * <code>
     * $query->filterByFlow(1234); // WHERE Flow = 1234
     * $query->filterByFlow(array(12, 34)); // WHERE Flow IN (12, 34)
     * $query->filterByFlow(array('min' => 12)); // WHERE Flow >= 12
     * $query->filterByFlow(array('max' => 12)); // WHERE Flow <= 12
     * </code>
     *
     * @param     mixed $flow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByFlow($flow = null, $comparison = null)
    {
        if (is_array($flow)) {
            $useMinMax = false;
            if (isset($flow['min'])) {
                $this->addUsingAlias(Cl50Peer::FLOW, $flow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flow['max'])) {
                $this->addUsingAlias(Cl50Peer::FLOW, $flow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::FLOW, $flow, $comparison);
    }

    /**
     * Filter the query on the FlowRate column
     *
     * Example usage:
     * <code>
     * $query->filterByFlowrate(1234); // WHERE FlowRate = 1234
     * $query->filterByFlowrate(array(12, 34)); // WHERE FlowRate IN (12, 34)
     * $query->filterByFlowrate(array('min' => 12)); // WHERE FlowRate >= 12
     * $query->filterByFlowrate(array('max' => 12)); // WHERE FlowRate <= 12
     * </code>
     *
     * @param     mixed $flowrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByFlowrate($flowrate = null, $comparison = null)
    {
        if (is_array($flowrate)) {
            $useMinMax = false;
            if (isset($flowrate['min'])) {
                $this->addUsingAlias(Cl50Peer::FLOWRATE, $flowrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flowrate['max'])) {
                $this->addUsingAlias(Cl50Peer::FLOWRATE, $flowrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::FLOWRATE, $flowrate, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
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

        return $this->addUsingAlias(Cl50Peer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the CL50RefNoFB column
     *
     * Example usage:
     * <code>
     * $query->filterByCl50refnofb(1234); // WHERE CL50RefNoFB = 1234
     * $query->filterByCl50refnofb(array(12, 34)); // WHERE CL50RefNoFB IN (12, 34)
     * $query->filterByCl50refnofb(array('min' => 12)); // WHERE CL50RefNoFB >= 12
     * $query->filterByCl50refnofb(array('max' => 12)); // WHERE CL50RefNoFB <= 12
     * </code>
     *
     * @param     mixed $cl50refnofb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByCl50refnofb($cl50refnofb = null, $comparison = null)
    {
        if (is_array($cl50refnofb)) {
            $useMinMax = false;
            if (isset($cl50refnofb['min'])) {
                $this->addUsingAlias(Cl50Peer::CL50REFNOFB, $cl50refnofb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cl50refnofb['max'])) {
                $this->addUsingAlias(Cl50Peer::CL50REFNOFB, $cl50refnofb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CL50REFNOFB, $cl50refnofb, $comparison);
    }

    /**
     * Filter the query on the DataRefFb column
     *
     * Example usage:
     * <code>
     * $query->filterByDatareffb(1234); // WHERE DataRefFb = 1234
     * $query->filterByDatareffb(array(12, 34)); // WHERE DataRefFb IN (12, 34)
     * $query->filterByDatareffb(array('min' => 12)); // WHERE DataRefFb >= 12
     * $query->filterByDatareffb(array('max' => 12)); // WHERE DataRefFb <= 12
     * </code>
     *
     * @param     mixed $datareffb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByDatareffb($datareffb = null, $comparison = null)
    {
        if (is_array($datareffb)) {
            $useMinMax = false;
            if (isset($datareffb['min'])) {
                $this->addUsingAlias(Cl50Peer::DATAREFFB, $datareffb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datareffb['max'])) {
                $this->addUsingAlias(Cl50Peer::DATAREFFB, $datareffb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::DATAREFFB, $datareffb, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(Cl50Peer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(Cl50Peer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::ENTERED, $entered, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(Cl50Peer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(Cl50Peer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::DATEENTERED, $dateentered, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(Cl50Peer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(Cl50Peer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::MODIFIED, $modified, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(Cl50Peer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(Cl50Peer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Checked column
     *
     * Example usage:
     * <code>
     * $query->filterByChecked(1234); // WHERE Checked = 1234
     * $query->filterByChecked(array(12, 34)); // WHERE Checked IN (12, 34)
     * $query->filterByChecked(array('min' => 12)); // WHERE Checked >= 12
     * $query->filterByChecked(array('max' => 12)); // WHERE Checked <= 12
     * </code>
     *
     * @param     mixed $checked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByChecked($checked = null, $comparison = null)
    {
        if (is_array($checked)) {
            $useMinMax = false;
            if (isset($checked['min'])) {
                $this->addUsingAlias(Cl50Peer::CHECKED, $checked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checked['max'])) {
                $this->addUsingAlias(Cl50Peer::CHECKED, $checked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::CHECKED, $checked, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(Cl50Peer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(Cl50Peer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::DATECHECKED, $datechecked, $comparison);
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
     * @return Cl50Query The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(Cl50Peer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(Cl50Peer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Cl50Peer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cl50 $cl50 Object to remove from the list of results
     *
     * @return Cl50Query The current query, for fluid interface
     */
    public function prune($cl50 = null)
    {
        if ($cl50) {
            $this->addUsingAlias(Cl50Peer::CL50CODE, $cl50->getCl50code(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
