<?php


/**
 * Base class that represents a query for the 'fecundity' table.
 *
 *
 *
 * @method FecundityQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method FecundityQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method FecundityQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method FecundityQuery orderByMainrefno($order = Criteria::ASC) Order by the MainRefNo column
 * @method FecundityQuery orderBySourceref($order = Criteria::ASC) Order by the SourceRef column
 * @method FecundityQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method FecundityQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method FecundityQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method FecundityQuery orderByFecunditymin($order = Criteria::ASC) Order by the FecundityMin column
 * @method FecundityQuery orderByWeightmin($order = Criteria::ASC) Order by the WeightMin column
 * @method FecundityQuery orderByLengthfecunmin($order = Criteria::ASC) Order by the LengthFecunMin column
 * @method FecundityQuery orderByLengthtypefecmin($order = Criteria::ASC) Order by the LengthTypeFecMin column
 * @method FecundityQuery orderByFecunditymax($order = Criteria::ASC) Order by the FecundityMax column
 * @method FecundityQuery orderByWeightmax($order = Criteria::ASC) Order by the WeightMax column
 * @method FecundityQuery orderByLengthfecunmax($order = Criteria::ASC) Order by the LengthFecunMax column
 * @method FecundityQuery orderByLengthtypefecmax($order = Criteria::ASC) Order by the LengthTypeFecMax column
 * @method FecundityQuery orderByFeccomment($order = Criteria::ASC) Order by the FecComment column
 * @method FecundityQuery orderByFecundityref($order = Criteria::ASC) Order by the FecundityRef column
 * @method FecundityQuery orderByRelfecunditymin($order = Criteria::ASC) Order by the RelFecundityMin column
 * @method FecundityQuery orderByFecunminref($order = Criteria::ASC) Order by the FecunMinRef column
 * @method FecundityQuery orderByRelfecunditymean($order = Criteria::ASC) Order by the RelFecundityMean column
 * @method FecundityQuery orderByFecunmeanref($order = Criteria::ASC) Order by the FecunMeanRef column
 * @method FecundityQuery orderByRelfecunditymax($order = Criteria::ASC) Order by the RelFecundityMax column
 * @method FecundityQuery orderByFecunmaxref($order = Criteria::ASC) Order by the FecunMaxRef column
 * @method FecundityQuery orderByLengthmin($order = Criteria::ASC) Order by the LengthMin column
 * @method FecundityQuery orderByLengthmax($order = Criteria::ASC) Order by the LengthMax column
 * @method FecundityQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method FecundityQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method FecundityQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method FecundityQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method FecundityQuery orderByR2($order = Criteria::ASC) Order by the r2 column
 * @method FecundityQuery orderBySea($order = Criteria::ASC) Order by the SEa column
 * @method FecundityQuery orderBySeb($order = Criteria::ASC) Order by the SEb column
 * @method FecundityQuery orderBySda($order = Criteria::ASC) Order by the SDa column
 * @method FecundityQuery orderBySdb($order = Criteria::ASC) Order by the SDb column
 * @method FecundityQuery orderByLcla($order = Criteria::ASC) Order by the LCLa column
 * @method FecundityQuery orderByUcla($order = Criteria::ASC) Order by the UCLa column
 * @method FecundityQuery orderByLclb($order = Criteria::ASC) Order by the LCLb column
 * @method FecundityQuery orderByUclb($order = Criteria::ASC) Order by the UCLb column
 * @method FecundityQuery orderBySpawningcycles($order = Criteria::ASC) Order by the SpawningCycles column
 * @method FecundityQuery orderBySpcycleref($order = Criteria::ASC) Order by the SpCycleRef column
 * @method FecundityQuery orderByAddinfos($order = Criteria::ASC) Order by the AddInfos column
 * @method FecundityQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method FecundityQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method FecundityQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FecundityQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method FecundityQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method FecundityQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method FecundityQuery orderByAutoctrSpawn($order = Criteria::ASC) Order by the autoctr_spawn column
 *
 * @method FecundityQuery groupByAutoctr() Group by the autoctr column
 * @method FecundityQuery groupByStockcode() Group by the StockCode column
 * @method FecundityQuery groupBySpeccode() Group by the SpecCode column
 * @method FecundityQuery groupByMainrefno() Group by the MainRefNo column
 * @method FecundityQuery groupBySourceref() Group by the SourceRef column
 * @method FecundityQuery groupByCCode() Group by the C_Code column
 * @method FecundityQuery groupByECode() Group by the E_CODE column
 * @method FecundityQuery groupByLocality() Group by the Locality column
 * @method FecundityQuery groupByFecunditymin() Group by the FecundityMin column
 * @method FecundityQuery groupByWeightmin() Group by the WeightMin column
 * @method FecundityQuery groupByLengthfecunmin() Group by the LengthFecunMin column
 * @method FecundityQuery groupByLengthtypefecmin() Group by the LengthTypeFecMin column
 * @method FecundityQuery groupByFecunditymax() Group by the FecundityMax column
 * @method FecundityQuery groupByWeightmax() Group by the WeightMax column
 * @method FecundityQuery groupByLengthfecunmax() Group by the LengthFecunMax column
 * @method FecundityQuery groupByLengthtypefecmax() Group by the LengthTypeFecMax column
 * @method FecundityQuery groupByFeccomment() Group by the FecComment column
 * @method FecundityQuery groupByFecundityref() Group by the FecundityRef column
 * @method FecundityQuery groupByRelfecunditymin() Group by the RelFecundityMin column
 * @method FecundityQuery groupByFecunminref() Group by the FecunMinRef column
 * @method FecundityQuery groupByRelfecunditymean() Group by the RelFecundityMean column
 * @method FecundityQuery groupByFecunmeanref() Group by the FecunMeanRef column
 * @method FecundityQuery groupByRelfecunditymax() Group by the RelFecundityMax column
 * @method FecundityQuery groupByFecunmaxref() Group by the FecunMaxRef column
 * @method FecundityQuery groupByLengthmin() Group by the LengthMin column
 * @method FecundityQuery groupByLengthmax() Group by the LengthMax column
 * @method FecundityQuery groupByLengthtype() Group by the LengthType column
 * @method FecundityQuery groupByNumber() Group by the Number column
 * @method FecundityQuery groupByA() Group by the a column
 * @method FecundityQuery groupByB() Group by the b column
 * @method FecundityQuery groupByR2() Group by the r2 column
 * @method FecundityQuery groupBySea() Group by the SEa column
 * @method FecundityQuery groupBySeb() Group by the SEb column
 * @method FecundityQuery groupBySda() Group by the SDa column
 * @method FecundityQuery groupBySdb() Group by the SDb column
 * @method FecundityQuery groupByLcla() Group by the LCLa column
 * @method FecundityQuery groupByUcla() Group by the UCLa column
 * @method FecundityQuery groupByLclb() Group by the LCLb column
 * @method FecundityQuery groupByUclb() Group by the UCLb column
 * @method FecundityQuery groupBySpawningcycles() Group by the SpawningCycles column
 * @method FecundityQuery groupBySpcycleref() Group by the SpCycleRef column
 * @method FecundityQuery groupByAddinfos() Group by the AddInfos column
 * @method FecundityQuery groupByEntered() Group by the Entered column
 * @method FecundityQuery groupByDateentered() Group by the Dateentered column
 * @method FecundityQuery groupByModified() Group by the Modified column
 * @method FecundityQuery groupByDatemodified() Group by the Datemodified column
 * @method FecundityQuery groupByExpert() Group by the Expert column
 * @method FecundityQuery groupByDatechecked() Group by the Datechecked column
 * @method FecundityQuery groupByAutoctrSpawn() Group by the autoctr_spawn column
 *
 * @method FecundityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FecundityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FecundityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Fecundity findOne(PropelPDO $con = null) Return the first Fecundity matching the query
 * @method Fecundity findOneOrCreate(PropelPDO $con = null) Return the first Fecundity matching the query, or a new Fecundity object populated from the query conditions when no match is found
 *
 * @method Fecundity findOneByStockcode(int $StockCode) Return the first Fecundity filtered by the StockCode column
 * @method Fecundity findOneBySpeccode(int $SpecCode) Return the first Fecundity filtered by the SpecCode column
 * @method Fecundity findOneByMainrefno(int $MainRefNo) Return the first Fecundity filtered by the MainRefNo column
 * @method Fecundity findOneBySourceref(int $SourceRef) Return the first Fecundity filtered by the SourceRef column
 * @method Fecundity findOneByCCode(string $C_Code) Return the first Fecundity filtered by the C_Code column
 * @method Fecundity findOneByECode(int $E_CODE) Return the first Fecundity filtered by the E_CODE column
 * @method Fecundity findOneByLocality(string $Locality) Return the first Fecundity filtered by the Locality column
 * @method Fecundity findOneByFecunditymin(int $FecundityMin) Return the first Fecundity filtered by the FecundityMin column
 * @method Fecundity findOneByWeightmin(double $WeightMin) Return the first Fecundity filtered by the WeightMin column
 * @method Fecundity findOneByLengthfecunmin(double $LengthFecunMin) Return the first Fecundity filtered by the LengthFecunMin column
 * @method Fecundity findOneByLengthtypefecmin(string $LengthTypeFecMin) Return the first Fecundity filtered by the LengthTypeFecMin column
 * @method Fecundity findOneByFecunditymax(int $FecundityMax) Return the first Fecundity filtered by the FecundityMax column
 * @method Fecundity findOneByWeightmax(double $WeightMax) Return the first Fecundity filtered by the WeightMax column
 * @method Fecundity findOneByLengthfecunmax(double $LengthFecunMax) Return the first Fecundity filtered by the LengthFecunMax column
 * @method Fecundity findOneByLengthtypefecmax(string $LengthTypeFecMax) Return the first Fecundity filtered by the LengthTypeFecMax column
 * @method Fecundity findOneByFeccomment(string $FecComment) Return the first Fecundity filtered by the FecComment column
 * @method Fecundity findOneByFecundityref(int $FecundityRef) Return the first Fecundity filtered by the FecundityRef column
 * @method Fecundity findOneByRelfecunditymin(int $RelFecundityMin) Return the first Fecundity filtered by the RelFecundityMin column
 * @method Fecundity findOneByFecunminref(int $FecunMinRef) Return the first Fecundity filtered by the FecunMinRef column
 * @method Fecundity findOneByRelfecunditymean(int $RelFecundityMean) Return the first Fecundity filtered by the RelFecundityMean column
 * @method Fecundity findOneByFecunmeanref(int $FecunMeanRef) Return the first Fecundity filtered by the FecunMeanRef column
 * @method Fecundity findOneByRelfecunditymax(int $RelFecundityMax) Return the first Fecundity filtered by the RelFecundityMax column
 * @method Fecundity findOneByFecunmaxref(int $FecunMaxRef) Return the first Fecundity filtered by the FecunMaxRef column
 * @method Fecundity findOneByLengthmin(double $LengthMin) Return the first Fecundity filtered by the LengthMin column
 * @method Fecundity findOneByLengthmax(double $LengthMax) Return the first Fecundity filtered by the LengthMax column
 * @method Fecundity findOneByLengthtype(string $LengthType) Return the first Fecundity filtered by the LengthType column
 * @method Fecundity findOneByNumber(int $Number) Return the first Fecundity filtered by the Number column
 * @method Fecundity findOneByA(double $a) Return the first Fecundity filtered by the a column
 * @method Fecundity findOneByB(double $b) Return the first Fecundity filtered by the b column
 * @method Fecundity findOneByR2(double $r2) Return the first Fecundity filtered by the r2 column
 * @method Fecundity findOneBySea(double $SEa) Return the first Fecundity filtered by the SEa column
 * @method Fecundity findOneBySeb(double $SEb) Return the first Fecundity filtered by the SEb column
 * @method Fecundity findOneBySda(double $SDa) Return the first Fecundity filtered by the SDa column
 * @method Fecundity findOneBySdb(double $SDb) Return the first Fecundity filtered by the SDb column
 * @method Fecundity findOneByLcla(double $LCLa) Return the first Fecundity filtered by the LCLa column
 * @method Fecundity findOneByUcla(double $UCLa) Return the first Fecundity filtered by the UCLa column
 * @method Fecundity findOneByLclb(double $LCLb) Return the first Fecundity filtered by the LCLb column
 * @method Fecundity findOneByUclb(double $UCLb) Return the first Fecundity filtered by the UCLb column
 * @method Fecundity findOneBySpawningcycles(double $SpawningCycles) Return the first Fecundity filtered by the SpawningCycles column
 * @method Fecundity findOneBySpcycleref(int $SpCycleRef) Return the first Fecundity filtered by the SpCycleRef column
 * @method Fecundity findOneByAddinfos(string $AddInfos) Return the first Fecundity filtered by the AddInfos column
 * @method Fecundity findOneByEntered(int $Entered) Return the first Fecundity filtered by the Entered column
 * @method Fecundity findOneByDateentered(string $Dateentered) Return the first Fecundity filtered by the Dateentered column
 * @method Fecundity findOneByModified(int $Modified) Return the first Fecundity filtered by the Modified column
 * @method Fecundity findOneByDatemodified(string $Datemodified) Return the first Fecundity filtered by the Datemodified column
 * @method Fecundity findOneByExpert(int $Expert) Return the first Fecundity filtered by the Expert column
 * @method Fecundity findOneByDatechecked(string $Datechecked) Return the first Fecundity filtered by the Datechecked column
 * @method Fecundity findOneByAutoctrSpawn(int $autoctr_spawn) Return the first Fecundity filtered by the autoctr_spawn column
 *
 * @method array findByAutoctr(int $autoctr) Return Fecundity objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Fecundity objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Fecundity objects filtered by the SpecCode column
 * @method array findByMainrefno(int $MainRefNo) Return Fecundity objects filtered by the MainRefNo column
 * @method array findBySourceref(int $SourceRef) Return Fecundity objects filtered by the SourceRef column
 * @method array findByCCode(string $C_Code) Return Fecundity objects filtered by the C_Code column
 * @method array findByECode(int $E_CODE) Return Fecundity objects filtered by the E_CODE column
 * @method array findByLocality(string $Locality) Return Fecundity objects filtered by the Locality column
 * @method array findByFecunditymin(int $FecundityMin) Return Fecundity objects filtered by the FecundityMin column
 * @method array findByWeightmin(double $WeightMin) Return Fecundity objects filtered by the WeightMin column
 * @method array findByLengthfecunmin(double $LengthFecunMin) Return Fecundity objects filtered by the LengthFecunMin column
 * @method array findByLengthtypefecmin(string $LengthTypeFecMin) Return Fecundity objects filtered by the LengthTypeFecMin column
 * @method array findByFecunditymax(int $FecundityMax) Return Fecundity objects filtered by the FecundityMax column
 * @method array findByWeightmax(double $WeightMax) Return Fecundity objects filtered by the WeightMax column
 * @method array findByLengthfecunmax(double $LengthFecunMax) Return Fecundity objects filtered by the LengthFecunMax column
 * @method array findByLengthtypefecmax(string $LengthTypeFecMax) Return Fecundity objects filtered by the LengthTypeFecMax column
 * @method array findByFeccomment(string $FecComment) Return Fecundity objects filtered by the FecComment column
 * @method array findByFecundityref(int $FecundityRef) Return Fecundity objects filtered by the FecundityRef column
 * @method array findByRelfecunditymin(int $RelFecundityMin) Return Fecundity objects filtered by the RelFecundityMin column
 * @method array findByFecunminref(int $FecunMinRef) Return Fecundity objects filtered by the FecunMinRef column
 * @method array findByRelfecunditymean(int $RelFecundityMean) Return Fecundity objects filtered by the RelFecundityMean column
 * @method array findByFecunmeanref(int $FecunMeanRef) Return Fecundity objects filtered by the FecunMeanRef column
 * @method array findByRelfecunditymax(int $RelFecundityMax) Return Fecundity objects filtered by the RelFecundityMax column
 * @method array findByFecunmaxref(int $FecunMaxRef) Return Fecundity objects filtered by the FecunMaxRef column
 * @method array findByLengthmin(double $LengthMin) Return Fecundity objects filtered by the LengthMin column
 * @method array findByLengthmax(double $LengthMax) Return Fecundity objects filtered by the LengthMax column
 * @method array findByLengthtype(string $LengthType) Return Fecundity objects filtered by the LengthType column
 * @method array findByNumber(int $Number) Return Fecundity objects filtered by the Number column
 * @method array findByA(double $a) Return Fecundity objects filtered by the a column
 * @method array findByB(double $b) Return Fecundity objects filtered by the b column
 * @method array findByR2(double $r2) Return Fecundity objects filtered by the r2 column
 * @method array findBySea(double $SEa) Return Fecundity objects filtered by the SEa column
 * @method array findBySeb(double $SEb) Return Fecundity objects filtered by the SEb column
 * @method array findBySda(double $SDa) Return Fecundity objects filtered by the SDa column
 * @method array findBySdb(double $SDb) Return Fecundity objects filtered by the SDb column
 * @method array findByLcla(double $LCLa) Return Fecundity objects filtered by the LCLa column
 * @method array findByUcla(double $UCLa) Return Fecundity objects filtered by the UCLa column
 * @method array findByLclb(double $LCLb) Return Fecundity objects filtered by the LCLb column
 * @method array findByUclb(double $UCLb) Return Fecundity objects filtered by the UCLb column
 * @method array findBySpawningcycles(double $SpawningCycles) Return Fecundity objects filtered by the SpawningCycles column
 * @method array findBySpcycleref(int $SpCycleRef) Return Fecundity objects filtered by the SpCycleRef column
 * @method array findByAddinfos(string $AddInfos) Return Fecundity objects filtered by the AddInfos column
 * @method array findByEntered(int $Entered) Return Fecundity objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Fecundity objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Fecundity objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Fecundity objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Fecundity objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Fecundity objects filtered by the Datechecked column
 * @method array findByAutoctrSpawn(int $autoctr_spawn) Return Fecundity objects filtered by the autoctr_spawn column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFecundityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFecundityQuery object.
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
            $modelName = 'Fecundity';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FecundityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FecundityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FecundityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FecundityQuery) {
            return $criteria;
        }
        $query = new FecundityQuery(null, null, $modelAlias);

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
     * @return   Fecundity|Fecundity[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FecundityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Fecundity A model object, or null if the key is not found
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
     * @return                 Fecundity A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `MainRefNo`, `SourceRef`, `C_Code`, `E_CODE`, `Locality`, `FecundityMin`, `WeightMin`, `LengthFecunMin`, `LengthTypeFecMin`, `FecundityMax`, `WeightMax`, `LengthFecunMax`, `LengthTypeFecMax`, `FecComment`, `FecundityRef`, `RelFecundityMin`, `FecunMinRef`, `RelFecundityMean`, `FecunMeanRef`, `RelFecundityMax`, `FecunMaxRef`, `LengthMin`, `LengthMax`, `LengthType`, `Number`, `a`, `b`, `r2`, `SEa`, `SEb`, `SDa`, `SDb`, `LCLa`, `UCLa`, `LCLb`, `UCLb`, `SpawningCycles`, `SpCycleRef`, `AddInfos`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `autoctr_spawn` FROM `fecundity` WHERE `autoctr` = :p0';
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
            $obj = new Fecundity();
            $obj->hydrate($row);
            FecundityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Fecundity|Fecundity[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Fecundity[]|mixed the list of results, formatted by the current formatter
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FecundityPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FecundityPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(FecundityPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(FecundityPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(FecundityPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(FecundityPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(FecundityPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(FecundityPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the MainRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByMainrefno(1234); // WHERE MainRefNo = 1234
     * $query->filterByMainrefno(array(12, 34)); // WHERE MainRefNo IN (12, 34)
     * $query->filterByMainrefno(array('min' => 12)); // WHERE MainRefNo >= 12
     * $query->filterByMainrefno(array('max' => 12)); // WHERE MainRefNo <= 12
     * </code>
     *
     * @param     mixed $mainrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByMainrefno($mainrefno = null, $comparison = null)
    {
        if (is_array($mainrefno)) {
            $useMinMax = false;
            if (isset($mainrefno['min'])) {
                $this->addUsingAlias(FecundityPeer::MAINREFNO, $mainrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainrefno['max'])) {
                $this->addUsingAlias(FecundityPeer::MAINREFNO, $mainrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::MAINREFNO, $mainrefno, $comparison);
    }

    /**
     * Filter the query on the SourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceref(1234); // WHERE SourceRef = 1234
     * $query->filterBySourceref(array(12, 34)); // WHERE SourceRef IN (12, 34)
     * $query->filterBySourceref(array('min' => 12)); // WHERE SourceRef >= 12
     * $query->filterBySourceref(array('max' => 12)); // WHERE SourceRef <= 12
     * </code>
     *
     * @param     mixed $sourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySourceref($sourceref = null, $comparison = null)
    {
        if (is_array($sourceref)) {
            $useMinMax = false;
            if (isset($sourceref['min'])) {
                $this->addUsingAlias(FecundityPeer::SOURCEREF, $sourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sourceref['max'])) {
                $this->addUsingAlias(FecundityPeer::SOURCEREF, $sourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SOURCEREF, $sourceref, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FecundityPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(FecundityPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(FecundityPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::E_CODE, $eCode, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FecundityPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the FecundityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunditymin(1234); // WHERE FecundityMin = 1234
     * $query->filterByFecunditymin(array(12, 34)); // WHERE FecundityMin IN (12, 34)
     * $query->filterByFecunditymin(array('min' => 12)); // WHERE FecundityMin >= 12
     * $query->filterByFecunditymin(array('max' => 12)); // WHERE FecundityMin <= 12
     * </code>
     *
     * @param     mixed $fecunditymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecunditymin($fecunditymin = null, $comparison = null)
    {
        if (is_array($fecunditymin)) {
            $useMinMax = false;
            if (isset($fecunditymin['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYMIN, $fecunditymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunditymin['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYMIN, $fecunditymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNDITYMIN, $fecunditymin, $comparison);
    }

    /**
     * Filter the query on the WeightMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightmin(1234); // WHERE WeightMin = 1234
     * $query->filterByWeightmin(array(12, 34)); // WHERE WeightMin IN (12, 34)
     * $query->filterByWeightmin(array('min' => 12)); // WHERE WeightMin >= 12
     * $query->filterByWeightmin(array('max' => 12)); // WHERE WeightMin <= 12
     * </code>
     *
     * @param     mixed $weightmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByWeightmin($weightmin = null, $comparison = null)
    {
        if (is_array($weightmin)) {
            $useMinMax = false;
            if (isset($weightmin['min'])) {
                $this->addUsingAlias(FecundityPeer::WEIGHTMIN, $weightmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightmin['max'])) {
                $this->addUsingAlias(FecundityPeer::WEIGHTMIN, $weightmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::WEIGHTMIN, $weightmin, $comparison);
    }

    /**
     * Filter the query on the LengthFecunMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfecunmin(1234); // WHERE LengthFecunMin = 1234
     * $query->filterByLengthfecunmin(array(12, 34)); // WHERE LengthFecunMin IN (12, 34)
     * $query->filterByLengthfecunmin(array('min' => 12)); // WHERE LengthFecunMin >= 12
     * $query->filterByLengthfecunmin(array('max' => 12)); // WHERE LengthFecunMin <= 12
     * </code>
     *
     * @param     mixed $lengthfecunmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthfecunmin($lengthfecunmin = null, $comparison = null)
    {
        if (is_array($lengthfecunmin)) {
            $useMinMax = false;
            if (isset($lengthfecunmin['min'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHFECUNMIN, $lengthfecunmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfecunmin['max'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHFECUNMIN, $lengthfecunmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHFECUNMIN, $lengthfecunmin, $comparison);
    }

    /**
     * Filter the query on the LengthTypeFecMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtypefecmin('fooValue');   // WHERE LengthTypeFecMin = 'fooValue'
     * $query->filterByLengthtypefecmin('%fooValue%'); // WHERE LengthTypeFecMin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtypefecmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthtypefecmin($lengthtypefecmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtypefecmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtypefecmin)) {
                $lengthtypefecmin = str_replace('*', '%', $lengthtypefecmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHTYPEFECMIN, $lengthtypefecmin, $comparison);
    }

    /**
     * Filter the query on the FecundityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunditymax(1234); // WHERE FecundityMax = 1234
     * $query->filterByFecunditymax(array(12, 34)); // WHERE FecundityMax IN (12, 34)
     * $query->filterByFecunditymax(array('min' => 12)); // WHERE FecundityMax >= 12
     * $query->filterByFecunditymax(array('max' => 12)); // WHERE FecundityMax <= 12
     * </code>
     *
     * @param     mixed $fecunditymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecunditymax($fecunditymax = null, $comparison = null)
    {
        if (is_array($fecunditymax)) {
            $useMinMax = false;
            if (isset($fecunditymax['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYMAX, $fecunditymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunditymax['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYMAX, $fecunditymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNDITYMAX, $fecunditymax, $comparison);
    }

    /**
     * Filter the query on the WeightMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightmax(1234); // WHERE WeightMax = 1234
     * $query->filterByWeightmax(array(12, 34)); // WHERE WeightMax IN (12, 34)
     * $query->filterByWeightmax(array('min' => 12)); // WHERE WeightMax >= 12
     * $query->filterByWeightmax(array('max' => 12)); // WHERE WeightMax <= 12
     * </code>
     *
     * @param     mixed $weightmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByWeightmax($weightmax = null, $comparison = null)
    {
        if (is_array($weightmax)) {
            $useMinMax = false;
            if (isset($weightmax['min'])) {
                $this->addUsingAlias(FecundityPeer::WEIGHTMAX, $weightmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightmax['max'])) {
                $this->addUsingAlias(FecundityPeer::WEIGHTMAX, $weightmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::WEIGHTMAX, $weightmax, $comparison);
    }

    /**
     * Filter the query on the LengthFecunMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfecunmax(1234); // WHERE LengthFecunMax = 1234
     * $query->filterByLengthfecunmax(array(12, 34)); // WHERE LengthFecunMax IN (12, 34)
     * $query->filterByLengthfecunmax(array('min' => 12)); // WHERE LengthFecunMax >= 12
     * $query->filterByLengthfecunmax(array('max' => 12)); // WHERE LengthFecunMax <= 12
     * </code>
     *
     * @param     mixed $lengthfecunmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthfecunmax($lengthfecunmax = null, $comparison = null)
    {
        if (is_array($lengthfecunmax)) {
            $useMinMax = false;
            if (isset($lengthfecunmax['min'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHFECUNMAX, $lengthfecunmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfecunmax['max'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHFECUNMAX, $lengthfecunmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHFECUNMAX, $lengthfecunmax, $comparison);
    }

    /**
     * Filter the query on the LengthTypeFecMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtypefecmax('fooValue');   // WHERE LengthTypeFecMax = 'fooValue'
     * $query->filterByLengthtypefecmax('%fooValue%'); // WHERE LengthTypeFecMax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtypefecmax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthtypefecmax($lengthtypefecmax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtypefecmax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtypefecmax)) {
                $lengthtypefecmax = str_replace('*', '%', $lengthtypefecmax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHTYPEFECMAX, $lengthtypefecmax, $comparison);
    }

    /**
     * Filter the query on the FecComment column
     *
     * Example usage:
     * <code>
     * $query->filterByFeccomment('fooValue');   // WHERE FecComment = 'fooValue'
     * $query->filterByFeccomment('%fooValue%'); // WHERE FecComment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feccomment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFeccomment($feccomment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feccomment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feccomment)) {
                $feccomment = str_replace('*', '%', $feccomment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECCOMMENT, $feccomment, $comparison);
    }

    /**
     * Filter the query on the FecundityRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundityref(1234); // WHERE FecundityRef = 1234
     * $query->filterByFecundityref(array(12, 34)); // WHERE FecundityRef IN (12, 34)
     * $query->filterByFecundityref(array('min' => 12)); // WHERE FecundityRef >= 12
     * $query->filterByFecundityref(array('max' => 12)); // WHERE FecundityRef <= 12
     * </code>
     *
     * @param     mixed $fecundityref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecundityref($fecundityref = null, $comparison = null)
    {
        if (is_array($fecundityref)) {
            $useMinMax = false;
            if (isset($fecundityref['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYREF, $fecundityref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecundityref['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNDITYREF, $fecundityref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNDITYREF, $fecundityref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymin(1234); // WHERE RelFecundityMin = 1234
     * $query->filterByRelfecunditymin(array(12, 34)); // WHERE RelFecundityMin IN (12, 34)
     * $query->filterByRelfecunditymin(array('min' => 12)); // WHERE RelFecundityMin >= 12
     * $query->filterByRelfecunditymin(array('max' => 12)); // WHERE RelFecundityMin <= 12
     * </code>
     *
     * @param     mixed $relfecunditymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymin($relfecunditymin = null, $comparison = null)
    {
        if (is_array($relfecunditymin)) {
            $useMinMax = false;
            if (isset($relfecunditymin['min'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMIN, $relfecunditymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymin['max'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMIN, $relfecunditymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::RELFECUNDITYMIN, $relfecunditymin, $comparison);
    }

    /**
     * Filter the query on the FecunMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunminref(1234); // WHERE FecunMinRef = 1234
     * $query->filterByFecunminref(array(12, 34)); // WHERE FecunMinRef IN (12, 34)
     * $query->filterByFecunminref(array('min' => 12)); // WHERE FecunMinRef >= 12
     * $query->filterByFecunminref(array('max' => 12)); // WHERE FecunMinRef <= 12
     * </code>
     *
     * @param     mixed $fecunminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecunminref($fecunminref = null, $comparison = null)
    {
        if (is_array($fecunminref)) {
            $useMinMax = false;
            if (isset($fecunminref['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMINREF, $fecunminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunminref['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMINREF, $fecunminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNMINREF, $fecunminref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMean column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymean(1234); // WHERE RelFecundityMean = 1234
     * $query->filterByRelfecunditymean(array(12, 34)); // WHERE RelFecundityMean IN (12, 34)
     * $query->filterByRelfecunditymean(array('min' => 12)); // WHERE RelFecundityMean >= 12
     * $query->filterByRelfecunditymean(array('max' => 12)); // WHERE RelFecundityMean <= 12
     * </code>
     *
     * @param     mixed $relfecunditymean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymean($relfecunditymean = null, $comparison = null)
    {
        if (is_array($relfecunditymean)) {
            $useMinMax = false;
            if (isset($relfecunditymean['min'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMEAN, $relfecunditymean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymean['max'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMEAN, $relfecunditymean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::RELFECUNDITYMEAN, $relfecunditymean, $comparison);
    }

    /**
     * Filter the query on the FecunMeanRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunmeanref(1234); // WHERE FecunMeanRef = 1234
     * $query->filterByFecunmeanref(array(12, 34)); // WHERE FecunMeanRef IN (12, 34)
     * $query->filterByFecunmeanref(array('min' => 12)); // WHERE FecunMeanRef >= 12
     * $query->filterByFecunmeanref(array('max' => 12)); // WHERE FecunMeanRef <= 12
     * </code>
     *
     * @param     mixed $fecunmeanref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecunmeanref($fecunmeanref = null, $comparison = null)
    {
        if (is_array($fecunmeanref)) {
            $useMinMax = false;
            if (isset($fecunmeanref['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMEANREF, $fecunmeanref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunmeanref['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMEANREF, $fecunmeanref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNMEANREF, $fecunmeanref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymax(1234); // WHERE RelFecundityMax = 1234
     * $query->filterByRelfecunditymax(array(12, 34)); // WHERE RelFecundityMax IN (12, 34)
     * $query->filterByRelfecunditymax(array('min' => 12)); // WHERE RelFecundityMax >= 12
     * $query->filterByRelfecunditymax(array('max' => 12)); // WHERE RelFecundityMax <= 12
     * </code>
     *
     * @param     mixed $relfecunditymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymax($relfecunditymax = null, $comparison = null)
    {
        if (is_array($relfecunditymax)) {
            $useMinMax = false;
            if (isset($relfecunditymax['min'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMAX, $relfecunditymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymax['max'])) {
                $this->addUsingAlias(FecundityPeer::RELFECUNDITYMAX, $relfecunditymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::RELFECUNDITYMAX, $relfecunditymax, $comparison);
    }

    /**
     * Filter the query on the FecunMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunmaxref(1234); // WHERE FecunMaxRef = 1234
     * $query->filterByFecunmaxref(array(12, 34)); // WHERE FecunMaxRef IN (12, 34)
     * $query->filterByFecunmaxref(array('min' => 12)); // WHERE FecunMaxRef >= 12
     * $query->filterByFecunmaxref(array('max' => 12)); // WHERE FecunMaxRef <= 12
     * </code>
     *
     * @param     mixed $fecunmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByFecunmaxref($fecunmaxref = null, $comparison = null)
    {
        if (is_array($fecunmaxref)) {
            $useMinMax = false;
            if (isset($fecunmaxref['min'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMAXREF, $fecunmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunmaxref['max'])) {
                $this->addUsingAlias(FecundityPeer::FECUNMAXREF, $fecunmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::FECUNMAXREF, $fecunmaxref, $comparison);
    }

    /**
     * Filter the query on the LengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmin(1234); // WHERE LengthMin = 1234
     * $query->filterByLengthmin(array(12, 34)); // WHERE LengthMin IN (12, 34)
     * $query->filterByLengthmin(array('min' => 12)); // WHERE LengthMin >= 12
     * $query->filterByLengthmin(array('max' => 12)); // WHERE LengthMin <= 12
     * </code>
     *
     * @param     mixed $lengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthmin($lengthmin = null, $comparison = null)
    {
        if (is_array($lengthmin)) {
            $useMinMax = false;
            if (isset($lengthmin['min'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHMIN, $lengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmin['max'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHMIN, $lengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHMIN, $lengthmin, $comparison);
    }

    /**
     * Filter the query on the LengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmax(1234); // WHERE LengthMax = 1234
     * $query->filterByLengthmax(array(12, 34)); // WHERE LengthMax IN (12, 34)
     * $query->filterByLengthmax(array('min' => 12)); // WHERE LengthMax >= 12
     * $query->filterByLengthmax(array('max' => 12)); // WHERE LengthMax <= 12
     * </code>
     *
     * @param     mixed $lengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthmax($lengthmax = null, $comparison = null)
    {
        if (is_array($lengthmax)) {
            $useMinMax = false;
            if (isset($lengthmax['min'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHMAX, $lengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmax['max'])) {
                $this->addUsingAlias(FecundityPeer::LENGTHMAX, $lengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHMAX, $lengthmax, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber(1234); // WHERE Number = 1234
     * $query->filterByNumber(array(12, 34)); // WHERE Number IN (12, 34)
     * $query->filterByNumber(array('min' => 12)); // WHERE Number >= 12
     * $query->filterByNumber(array('max' => 12)); // WHERE Number <= 12
     * </code>
     *
     * @param     mixed $number The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(FecundityPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(FecundityPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the a column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE a = 1234
     * $query->filterByA(array(12, 34)); // WHERE a IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE a >= 12
     * $query->filterByA(array('max' => 12)); // WHERE a <= 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(FecundityPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(FecundityPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::A, $a, $comparison);
    }

    /**
     * Filter the query on the b column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE b = 1234
     * $query->filterByB(array(12, 34)); // WHERE b IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE b >= 12
     * $query->filterByB(array('max' => 12)); // WHERE b <= 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(FecundityPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(FecundityPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the r2 column
     *
     * Example usage:
     * <code>
     * $query->filterByR2(1234); // WHERE r2 = 1234
     * $query->filterByR2(array(12, 34)); // WHERE r2 IN (12, 34)
     * $query->filterByR2(array('min' => 12)); // WHERE r2 >= 12
     * $query->filterByR2(array('max' => 12)); // WHERE r2 <= 12
     * </code>
     *
     * @param     mixed $r2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByR2($r2 = null, $comparison = null)
    {
        if (is_array($r2)) {
            $useMinMax = false;
            if (isset($r2['min'])) {
                $this->addUsingAlias(FecundityPeer::R2, $r2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r2['max'])) {
                $this->addUsingAlias(FecundityPeer::R2, $r2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::R2, $r2, $comparison);
    }

    /**
     * Filter the query on the SEa column
     *
     * Example usage:
     * <code>
     * $query->filterBySea(1234); // WHERE SEa = 1234
     * $query->filterBySea(array(12, 34)); // WHERE SEa IN (12, 34)
     * $query->filterBySea(array('min' => 12)); // WHERE SEa >= 12
     * $query->filterBySea(array('max' => 12)); // WHERE SEa <= 12
     * </code>
     *
     * @param     mixed $sea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySea($sea = null, $comparison = null)
    {
        if (is_array($sea)) {
            $useMinMax = false;
            if (isset($sea['min'])) {
                $this->addUsingAlias(FecundityPeer::SEA, $sea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sea['max'])) {
                $this->addUsingAlias(FecundityPeer::SEA, $sea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SEA, $sea, $comparison);
    }

    /**
     * Filter the query on the SEb column
     *
     * Example usage:
     * <code>
     * $query->filterBySeb(1234); // WHERE SEb = 1234
     * $query->filterBySeb(array(12, 34)); // WHERE SEb IN (12, 34)
     * $query->filterBySeb(array('min' => 12)); // WHERE SEb >= 12
     * $query->filterBySeb(array('max' => 12)); // WHERE SEb <= 12
     * </code>
     *
     * @param     mixed $seb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySeb($seb = null, $comparison = null)
    {
        if (is_array($seb)) {
            $useMinMax = false;
            if (isset($seb['min'])) {
                $this->addUsingAlias(FecundityPeer::SEB, $seb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seb['max'])) {
                $this->addUsingAlias(FecundityPeer::SEB, $seb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SEB, $seb, $comparison);
    }

    /**
     * Filter the query on the SDa column
     *
     * Example usage:
     * <code>
     * $query->filterBySda(1234); // WHERE SDa = 1234
     * $query->filterBySda(array(12, 34)); // WHERE SDa IN (12, 34)
     * $query->filterBySda(array('min' => 12)); // WHERE SDa >= 12
     * $query->filterBySda(array('max' => 12)); // WHERE SDa <= 12
     * </code>
     *
     * @param     mixed $sda The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySda($sda = null, $comparison = null)
    {
        if (is_array($sda)) {
            $useMinMax = false;
            if (isset($sda['min'])) {
                $this->addUsingAlias(FecundityPeer::SDA, $sda['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sda['max'])) {
                $this->addUsingAlias(FecundityPeer::SDA, $sda['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SDA, $sda, $comparison);
    }

    /**
     * Filter the query on the SDb column
     *
     * Example usage:
     * <code>
     * $query->filterBySdb(1234); // WHERE SDb = 1234
     * $query->filterBySdb(array(12, 34)); // WHERE SDb IN (12, 34)
     * $query->filterBySdb(array('min' => 12)); // WHERE SDb >= 12
     * $query->filterBySdb(array('max' => 12)); // WHERE SDb <= 12
     * </code>
     *
     * @param     mixed $sdb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySdb($sdb = null, $comparison = null)
    {
        if (is_array($sdb)) {
            $useMinMax = false;
            if (isset($sdb['min'])) {
                $this->addUsingAlias(FecundityPeer::SDB, $sdb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdb['max'])) {
                $this->addUsingAlias(FecundityPeer::SDB, $sdb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SDB, $sdb, $comparison);
    }

    /**
     * Filter the query on the LCLa column
     *
     * Example usage:
     * <code>
     * $query->filterByLcla(1234); // WHERE LCLa = 1234
     * $query->filterByLcla(array(12, 34)); // WHERE LCLa IN (12, 34)
     * $query->filterByLcla(array('min' => 12)); // WHERE LCLa >= 12
     * $query->filterByLcla(array('max' => 12)); // WHERE LCLa <= 12
     * </code>
     *
     * @param     mixed $lcla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLcla($lcla = null, $comparison = null)
    {
        if (is_array($lcla)) {
            $useMinMax = false;
            if (isset($lcla['min'])) {
                $this->addUsingAlias(FecundityPeer::LCLA, $lcla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcla['max'])) {
                $this->addUsingAlias(FecundityPeer::LCLA, $lcla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LCLA, $lcla, $comparison);
    }

    /**
     * Filter the query on the UCLa column
     *
     * Example usage:
     * <code>
     * $query->filterByUcla(1234); // WHERE UCLa = 1234
     * $query->filterByUcla(array(12, 34)); // WHERE UCLa IN (12, 34)
     * $query->filterByUcla(array('min' => 12)); // WHERE UCLa >= 12
     * $query->filterByUcla(array('max' => 12)); // WHERE UCLa <= 12
     * </code>
     *
     * @param     mixed $ucla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByUcla($ucla = null, $comparison = null)
    {
        if (is_array($ucla)) {
            $useMinMax = false;
            if (isset($ucla['min'])) {
                $this->addUsingAlias(FecundityPeer::UCLA, $ucla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ucla['max'])) {
                $this->addUsingAlias(FecundityPeer::UCLA, $ucla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::UCLA, $ucla, $comparison);
    }

    /**
     * Filter the query on the LCLb column
     *
     * Example usage:
     * <code>
     * $query->filterByLclb(1234); // WHERE LCLb = 1234
     * $query->filterByLclb(array(12, 34)); // WHERE LCLb IN (12, 34)
     * $query->filterByLclb(array('min' => 12)); // WHERE LCLb >= 12
     * $query->filterByLclb(array('max' => 12)); // WHERE LCLb <= 12
     * </code>
     *
     * @param     mixed $lclb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByLclb($lclb = null, $comparison = null)
    {
        if (is_array($lclb)) {
            $useMinMax = false;
            if (isset($lclb['min'])) {
                $this->addUsingAlias(FecundityPeer::LCLB, $lclb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclb['max'])) {
                $this->addUsingAlias(FecundityPeer::LCLB, $lclb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::LCLB, $lclb, $comparison);
    }

    /**
     * Filter the query on the UCLb column
     *
     * Example usage:
     * <code>
     * $query->filterByUclb(1234); // WHERE UCLb = 1234
     * $query->filterByUclb(array(12, 34)); // WHERE UCLb IN (12, 34)
     * $query->filterByUclb(array('min' => 12)); // WHERE UCLb >= 12
     * $query->filterByUclb(array('max' => 12)); // WHERE UCLb <= 12
     * </code>
     *
     * @param     mixed $uclb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByUclb($uclb = null, $comparison = null)
    {
        if (is_array($uclb)) {
            $useMinMax = false;
            if (isset($uclb['min'])) {
                $this->addUsingAlias(FecundityPeer::UCLB, $uclb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclb['max'])) {
                $this->addUsingAlias(FecundityPeer::UCLB, $uclb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::UCLB, $uclb, $comparison);
    }

    /**
     * Filter the query on the SpawningCycles column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningcycles(1234); // WHERE SpawningCycles = 1234
     * $query->filterBySpawningcycles(array(12, 34)); // WHERE SpawningCycles IN (12, 34)
     * $query->filterBySpawningcycles(array('min' => 12)); // WHERE SpawningCycles >= 12
     * $query->filterBySpawningcycles(array('max' => 12)); // WHERE SpawningCycles <= 12
     * </code>
     *
     * @param     mixed $spawningcycles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySpawningcycles($spawningcycles = null, $comparison = null)
    {
        if (is_array($spawningcycles)) {
            $useMinMax = false;
            if (isset($spawningcycles['min'])) {
                $this->addUsingAlias(FecundityPeer::SPAWNINGCYCLES, $spawningcycles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningcycles['max'])) {
                $this->addUsingAlias(FecundityPeer::SPAWNINGCYCLES, $spawningcycles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SPAWNINGCYCLES, $spawningcycles, $comparison);
    }

    /**
     * Filter the query on the SpCycleRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpcycleref(1234); // WHERE SpCycleRef = 1234
     * $query->filterBySpcycleref(array(12, 34)); // WHERE SpCycleRef IN (12, 34)
     * $query->filterBySpcycleref(array('min' => 12)); // WHERE SpCycleRef >= 12
     * $query->filterBySpcycleref(array('max' => 12)); // WHERE SpCycleRef <= 12
     * </code>
     *
     * @param     mixed $spcycleref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterBySpcycleref($spcycleref = null, $comparison = null)
    {
        if (is_array($spcycleref)) {
            $useMinMax = false;
            if (isset($spcycleref['min'])) {
                $this->addUsingAlias(FecundityPeer::SPCYCLEREF, $spcycleref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spcycleref['max'])) {
                $this->addUsingAlias(FecundityPeer::SPCYCLEREF, $spcycleref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::SPCYCLEREF, $spcycleref, $comparison);
    }

    /**
     * Filter the query on the AddInfos column
     *
     * Example usage:
     * <code>
     * $query->filterByAddinfos('fooValue');   // WHERE AddInfos = 'fooValue'
     * $query->filterByAddinfos('%fooValue%'); // WHERE AddInfos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addinfos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByAddinfos($addinfos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addinfos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addinfos)) {
                $addinfos = str_replace('*', '%', $addinfos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FecundityPeer::ADDINFOS, $addinfos, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(FecundityPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(FecundityPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the Dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE Dateentered < '2011-03-13'
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(FecundityPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(FecundityPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FecundityPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FecundityPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the Datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE Datemodified < '2011-03-13'
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(FecundityPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(FecundityPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(FecundityPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(FecundityPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE Datechecked < '2011-03-13'
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
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(FecundityPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(FecundityPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the autoctr_spawn column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctrSpawn(1234); // WHERE autoctr_spawn = 1234
     * $query->filterByAutoctrSpawn(array(12, 34)); // WHERE autoctr_spawn IN (12, 34)
     * $query->filterByAutoctrSpawn(array('min' => 12)); // WHERE autoctr_spawn >= 12
     * $query->filterByAutoctrSpawn(array('max' => 12)); // WHERE autoctr_spawn <= 12
     * </code>
     *
     * @param     mixed $autoctrSpawn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function filterByAutoctrSpawn($autoctrSpawn = null, $comparison = null)
    {
        if (is_array($autoctrSpawn)) {
            $useMinMax = false;
            if (isset($autoctrSpawn['min'])) {
                $this->addUsingAlias(FecundityPeer::AUTOCTR_SPAWN, $autoctrSpawn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctrSpawn['max'])) {
                $this->addUsingAlias(FecundityPeer::AUTOCTR_SPAWN, $autoctrSpawn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FecundityPeer::AUTOCTR_SPAWN, $autoctrSpawn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Fecundity $fecundity Object to remove from the list of results
     *
     * @return FecundityQuery The current query, for fluid interface
     */
    public function prune($fecundity = null)
    {
        if ($fecundity) {
            $this->addUsingAlias(FecundityPeer::AUTOCTR, $fecundity->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
