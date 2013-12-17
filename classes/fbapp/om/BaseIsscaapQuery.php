<?php


/**
 * Base class that represents a query for the 'isscaap' table.
 *
 *
 *
 * @method IsscaapQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method IsscaapQuery orderByOrdnum($order = Criteria::ASC) Order by the OrdNum column
 * @method IsscaapQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method IsscaapQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method IsscaapQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method IsscaapQuery orderBySyncode($order = Criteria::ASC) Order by the Syncode column
 * @method IsscaapQuery orderByValid($order = Criteria::ASC) Order by the Valid column
 * @method IsscaapQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method IsscaapQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method IsscaapQuery orderByAgglevel($order = Criteria::ASC) Order by the AggLevel column
 * @method IsscaapQuery orderByIsscaap($order = Criteria::ASC) Order by the ISSCAAP column
 * @method IsscaapQuery orderByTaxcode($order = Criteria::ASC) Order by the TaxCode column
 * @method IsscaapQuery orderByAlphacode($order = Criteria::ASC) Order by the AlphaCode column
 * @method IsscaapQuery orderByScientific($order = Criteria::ASC) Order by the Scientific column
 * @method IsscaapQuery orderByEnglish($order = Criteria::ASC) Order by the English column
 * @method IsscaapQuery orderByFrench($order = Criteria::ASC) Order by the French column
 * @method IsscaapQuery orderBySpanish($order = Criteria::ASC) Order by the Spanish column
 * @method IsscaapQuery orderByArabic($order = Criteria::ASC) Order by the Arabic column
 * @method IsscaapQuery orderByChinese($order = Criteria::ASC) Order by the Chinese column
 * @method IsscaapQuery orderByRussian($order = Criteria::ASC) Order by the Russian column
 * @method IsscaapQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method IsscaapQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method IsscaapQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method IsscaapQuery orderByTroph($order = Criteria::ASC) Order by the Troph column
 * @method IsscaapQuery orderBySetroph($order = Criteria::ASC) Order by the seTroph column
 * @method IsscaapQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method IsscaapQuery orderByRemarktroph($order = Criteria::ASC) Order by the RemarkTroph column
 * @method IsscaapQuery orderBySlmax($order = Criteria::ASC) Order by the SLmax column
 * @method IsscaapQuery orderByRefnosl($order = Criteria::ASC) Order by the RefNoSL column
 * @method IsscaapQuery orderByRemarksl($order = Criteria::ASC) Order by the RemarkSL column
 * @method IsscaapQuery orderByReef($order = Criteria::ASC) Order by the Reef column
 * @method IsscaapQuery orderByPelagic($order = Criteria::ASC) Order by the Pelagic column
 * @method IsscaapQuery orderByDemersal($order = Criteria::ASC) Order by the Demersal column
 * @method IsscaapQuery orderByDeepsea($order = Criteria::ASC) Order by the DeepSea column
 * @method IsscaapQuery orderByResilience($order = Criteria::ASC) Order by the Resilience column
 * @method IsscaapQuery orderByResilienceremark($order = Criteria::ASC) Order by the ResilienceRemark column
 * @method IsscaapQuery orderByResilienceval($order = Criteria::ASC) Order by the ResilienceVal column
 * @method IsscaapQuery orderByStatsData($order = Criteria::ASC) Order by the Stats_data column
 * @method IsscaapQuery orderByStatsCatch($order = Criteria::ASC) Order by the Stats_Catch column
 * @method IsscaapQuery orderByStatsAquaculture($order = Criteria::ASC) Order by the Stats_Aquaculture column
 * @method IsscaapQuery orderByFsAquatic($order = Criteria::ASC) Order by the FS_Aquatic column
 * @method IsscaapQuery orderByFsAquaticsumm($order = Criteria::ASC) Order by the FS_AquaticSumm column
 * @method IsscaapQuery orderByFsCultured($order = Criteria::ASC) Order by the FS_Cultured column
 * @method IsscaapQuery orderByFsCulturedsumm($order = Criteria::ASC) Order by the FS_CulturedSumm column
 * @method IsscaapQuery orderByFirms($order = Criteria::ASC) Order by the FIRMS column
 * @method IsscaapQuery orderByFirmsSumm($order = Criteria::ASC) Order by the FIRMS_Summ column
 * @method IsscaapQuery orderByFigisId($order = Criteria::ASC) Order by the FIGIS_ID column
 * @method IsscaapQuery orderByColId($order = Criteria::ASC) Order by the CoL_ID column
 * @method IsscaapQuery orderByDb($order = Criteria::ASC) Order by the DB column
 * @method IsscaapQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method IsscaapQuery groupByAutoctr() Group by the AutoCtr column
 * @method IsscaapQuery groupByOrdnum() Group by the OrdNum column
 * @method IsscaapQuery groupByFamcode() Group by the FamCode column
 * @method IsscaapQuery groupBySpeccode() Group by the SpecCode column
 * @method IsscaapQuery groupByStockcode() Group by the StockCode column
 * @method IsscaapQuery groupBySyncode() Group by the Syncode column
 * @method IsscaapQuery groupByValid() Group by the Valid column
 * @method IsscaapQuery groupByGenus() Group by the Genus column
 * @method IsscaapQuery groupBySpecies() Group by the Species column
 * @method IsscaapQuery groupByAgglevel() Group by the AggLevel column
 * @method IsscaapQuery groupByIsscaap() Group by the ISSCAAP column
 * @method IsscaapQuery groupByTaxcode() Group by the TaxCode column
 * @method IsscaapQuery groupByAlphacode() Group by the AlphaCode column
 * @method IsscaapQuery groupByScientific() Group by the Scientific column
 * @method IsscaapQuery groupByEnglish() Group by the English column
 * @method IsscaapQuery groupByFrench() Group by the French column
 * @method IsscaapQuery groupBySpanish() Group by the Spanish column
 * @method IsscaapQuery groupByArabic() Group by the Arabic column
 * @method IsscaapQuery groupByChinese() Group by the Chinese column
 * @method IsscaapQuery groupByRussian() Group by the Russian column
 * @method IsscaapQuery groupByAuthor() Group by the Author column
 * @method IsscaapQuery groupByFamily() Group by the Family column
 * @method IsscaapQuery groupByOrder() Group by the Order column
 * @method IsscaapQuery groupByTroph() Group by the Troph column
 * @method IsscaapQuery groupBySetroph() Group by the seTroph column
 * @method IsscaapQuery groupByRefno() Group by the RefNo column
 * @method IsscaapQuery groupByRemarktroph() Group by the RemarkTroph column
 * @method IsscaapQuery groupBySlmax() Group by the SLmax column
 * @method IsscaapQuery groupByRefnosl() Group by the RefNoSL column
 * @method IsscaapQuery groupByRemarksl() Group by the RemarkSL column
 * @method IsscaapQuery groupByReef() Group by the Reef column
 * @method IsscaapQuery groupByPelagic() Group by the Pelagic column
 * @method IsscaapQuery groupByDemersal() Group by the Demersal column
 * @method IsscaapQuery groupByDeepsea() Group by the DeepSea column
 * @method IsscaapQuery groupByResilience() Group by the Resilience column
 * @method IsscaapQuery groupByResilienceremark() Group by the ResilienceRemark column
 * @method IsscaapQuery groupByResilienceval() Group by the ResilienceVal column
 * @method IsscaapQuery groupByStatsData() Group by the Stats_data column
 * @method IsscaapQuery groupByStatsCatch() Group by the Stats_Catch column
 * @method IsscaapQuery groupByStatsAquaculture() Group by the Stats_Aquaculture column
 * @method IsscaapQuery groupByFsAquatic() Group by the FS_Aquatic column
 * @method IsscaapQuery groupByFsAquaticsumm() Group by the FS_AquaticSumm column
 * @method IsscaapQuery groupByFsCultured() Group by the FS_Cultured column
 * @method IsscaapQuery groupByFsCulturedsumm() Group by the FS_CulturedSumm column
 * @method IsscaapQuery groupByFirms() Group by the FIRMS column
 * @method IsscaapQuery groupByFirmsSumm() Group by the FIRMS_Summ column
 * @method IsscaapQuery groupByFigisId() Group by the FIGIS_ID column
 * @method IsscaapQuery groupByColId() Group by the CoL_ID column
 * @method IsscaapQuery groupByDb() Group by the DB column
 * @method IsscaapQuery groupByTs() Group by the TS column
 *
 * @method IsscaapQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IsscaapQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IsscaapQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Isscaap findOne(PropelPDO $con = null) Return the first Isscaap matching the query
 * @method Isscaap findOneOrCreate(PropelPDO $con = null) Return the first Isscaap matching the query, or a new Isscaap object populated from the query conditions when no match is found
 *
 * @method Isscaap findOneByOrdnum(int $OrdNum) Return the first Isscaap filtered by the OrdNum column
 * @method Isscaap findOneByFamcode(int $FamCode) Return the first Isscaap filtered by the FamCode column
 * @method Isscaap findOneBySpeccode(int $SpecCode) Return the first Isscaap filtered by the SpecCode column
 * @method Isscaap findOneByStockcode(int $StockCode) Return the first Isscaap filtered by the StockCode column
 * @method Isscaap findOneBySyncode(int $Syncode) Return the first Isscaap filtered by the Syncode column
 * @method Isscaap findOneByValid(int $Valid) Return the first Isscaap filtered by the Valid column
 * @method Isscaap findOneByGenus(string $Genus) Return the first Isscaap filtered by the Genus column
 * @method Isscaap findOneBySpecies(string $Species) Return the first Isscaap filtered by the Species column
 * @method Isscaap findOneByAgglevel(string $AggLevel) Return the first Isscaap filtered by the AggLevel column
 * @method Isscaap findOneByIsscaap(int $ISSCAAP) Return the first Isscaap filtered by the ISSCAAP column
 * @method Isscaap findOneByTaxcode(string $TaxCode) Return the first Isscaap filtered by the TaxCode column
 * @method Isscaap findOneByAlphacode(string $AlphaCode) Return the first Isscaap filtered by the AlphaCode column
 * @method Isscaap findOneByScientific(string $Scientific) Return the first Isscaap filtered by the Scientific column
 * @method Isscaap findOneByEnglish(string $English) Return the first Isscaap filtered by the English column
 * @method Isscaap findOneByFrench(string $French) Return the first Isscaap filtered by the French column
 * @method Isscaap findOneBySpanish(string $Spanish) Return the first Isscaap filtered by the Spanish column
 * @method Isscaap findOneByArabic(string $Arabic) Return the first Isscaap filtered by the Arabic column
 * @method Isscaap findOneByChinese(string $Chinese) Return the first Isscaap filtered by the Chinese column
 * @method Isscaap findOneByRussian(string $Russian) Return the first Isscaap filtered by the Russian column
 * @method Isscaap findOneByAuthor(string $Author) Return the first Isscaap filtered by the Author column
 * @method Isscaap findOneByFamily(string $Family) Return the first Isscaap filtered by the Family column
 * @method Isscaap findOneByOrder(string $Order) Return the first Isscaap filtered by the Order column
 * @method Isscaap findOneByTroph(double $Troph) Return the first Isscaap filtered by the Troph column
 * @method Isscaap findOneBySetroph(double $seTroph) Return the first Isscaap filtered by the seTroph column
 * @method Isscaap findOneByRefno(int $RefNo) Return the first Isscaap filtered by the RefNo column
 * @method Isscaap findOneByRemarktroph(string $RemarkTroph) Return the first Isscaap filtered by the RemarkTroph column
 * @method Isscaap findOneBySlmax(double $SLmax) Return the first Isscaap filtered by the SLmax column
 * @method Isscaap findOneByRefnosl(int $RefNoSL) Return the first Isscaap filtered by the RefNoSL column
 * @method Isscaap findOneByRemarksl(string $RemarkSL) Return the first Isscaap filtered by the RemarkSL column
 * @method Isscaap findOneByReef(double $Reef) Return the first Isscaap filtered by the Reef column
 * @method Isscaap findOneByPelagic(double $Pelagic) Return the first Isscaap filtered by the Pelagic column
 * @method Isscaap findOneByDemersal(double $Demersal) Return the first Isscaap filtered by the Demersal column
 * @method Isscaap findOneByDeepsea(double $DeepSea) Return the first Isscaap filtered by the DeepSea column
 * @method Isscaap findOneByResilience(string $Resilience) Return the first Isscaap filtered by the Resilience column
 * @method Isscaap findOneByResilienceremark(string $ResilienceRemark) Return the first Isscaap filtered by the ResilienceRemark column
 * @method Isscaap findOneByResilienceval(double $ResilienceVal) Return the first Isscaap filtered by the ResilienceVal column
 * @method Isscaap findOneByStatsData(int $Stats_data) Return the first Isscaap filtered by the Stats_data column
 * @method Isscaap findOneByStatsCatch(int $Stats_Catch) Return the first Isscaap filtered by the Stats_Catch column
 * @method Isscaap findOneByStatsAquaculture(int $Stats_Aquaculture) Return the first Isscaap filtered by the Stats_Aquaculture column
 * @method Isscaap findOneByFsAquatic(int $FS_Aquatic) Return the first Isscaap filtered by the FS_Aquatic column
 * @method Isscaap findOneByFsAquaticsumm(int $FS_AquaticSumm) Return the first Isscaap filtered by the FS_AquaticSumm column
 * @method Isscaap findOneByFsCultured(int $FS_Cultured) Return the first Isscaap filtered by the FS_Cultured column
 * @method Isscaap findOneByFsCulturedsumm(int $FS_CulturedSumm) Return the first Isscaap filtered by the FS_CulturedSumm column
 * @method Isscaap findOneByFirms(int $FIRMS) Return the first Isscaap filtered by the FIRMS column
 * @method Isscaap findOneByFirmsSumm(int $FIRMS_Summ) Return the first Isscaap filtered by the FIRMS_Summ column
 * @method Isscaap findOneByFigisId(int $FIGIS_ID) Return the first Isscaap filtered by the FIGIS_ID column
 * @method Isscaap findOneByColId(string $CoL_ID) Return the first Isscaap filtered by the CoL_ID column
 * @method Isscaap findOneByDb(string $DB) Return the first Isscaap filtered by the DB column
 * @method Isscaap findOneByTs(string $TS) Return the first Isscaap filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Isscaap objects filtered by the AutoCtr column
 * @method array findByOrdnum(int $OrdNum) Return Isscaap objects filtered by the OrdNum column
 * @method array findByFamcode(int $FamCode) Return Isscaap objects filtered by the FamCode column
 * @method array findBySpeccode(int $SpecCode) Return Isscaap objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Isscaap objects filtered by the StockCode column
 * @method array findBySyncode(int $Syncode) Return Isscaap objects filtered by the Syncode column
 * @method array findByValid(int $Valid) Return Isscaap objects filtered by the Valid column
 * @method array findByGenus(string $Genus) Return Isscaap objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Isscaap objects filtered by the Species column
 * @method array findByAgglevel(string $AggLevel) Return Isscaap objects filtered by the AggLevel column
 * @method array findByIsscaap(int $ISSCAAP) Return Isscaap objects filtered by the ISSCAAP column
 * @method array findByTaxcode(string $TaxCode) Return Isscaap objects filtered by the TaxCode column
 * @method array findByAlphacode(string $AlphaCode) Return Isscaap objects filtered by the AlphaCode column
 * @method array findByScientific(string $Scientific) Return Isscaap objects filtered by the Scientific column
 * @method array findByEnglish(string $English) Return Isscaap objects filtered by the English column
 * @method array findByFrench(string $French) Return Isscaap objects filtered by the French column
 * @method array findBySpanish(string $Spanish) Return Isscaap objects filtered by the Spanish column
 * @method array findByArabic(string $Arabic) Return Isscaap objects filtered by the Arabic column
 * @method array findByChinese(string $Chinese) Return Isscaap objects filtered by the Chinese column
 * @method array findByRussian(string $Russian) Return Isscaap objects filtered by the Russian column
 * @method array findByAuthor(string $Author) Return Isscaap objects filtered by the Author column
 * @method array findByFamily(string $Family) Return Isscaap objects filtered by the Family column
 * @method array findByOrder(string $Order) Return Isscaap objects filtered by the Order column
 * @method array findByTroph(double $Troph) Return Isscaap objects filtered by the Troph column
 * @method array findBySetroph(double $seTroph) Return Isscaap objects filtered by the seTroph column
 * @method array findByRefno(int $RefNo) Return Isscaap objects filtered by the RefNo column
 * @method array findByRemarktroph(string $RemarkTroph) Return Isscaap objects filtered by the RemarkTroph column
 * @method array findBySlmax(double $SLmax) Return Isscaap objects filtered by the SLmax column
 * @method array findByRefnosl(int $RefNoSL) Return Isscaap objects filtered by the RefNoSL column
 * @method array findByRemarksl(string $RemarkSL) Return Isscaap objects filtered by the RemarkSL column
 * @method array findByReef(double $Reef) Return Isscaap objects filtered by the Reef column
 * @method array findByPelagic(double $Pelagic) Return Isscaap objects filtered by the Pelagic column
 * @method array findByDemersal(double $Demersal) Return Isscaap objects filtered by the Demersal column
 * @method array findByDeepsea(double $DeepSea) Return Isscaap objects filtered by the DeepSea column
 * @method array findByResilience(string $Resilience) Return Isscaap objects filtered by the Resilience column
 * @method array findByResilienceremark(string $ResilienceRemark) Return Isscaap objects filtered by the ResilienceRemark column
 * @method array findByResilienceval(double $ResilienceVal) Return Isscaap objects filtered by the ResilienceVal column
 * @method array findByStatsData(int $Stats_data) Return Isscaap objects filtered by the Stats_data column
 * @method array findByStatsCatch(int $Stats_Catch) Return Isscaap objects filtered by the Stats_Catch column
 * @method array findByStatsAquaculture(int $Stats_Aquaculture) Return Isscaap objects filtered by the Stats_Aquaculture column
 * @method array findByFsAquatic(int $FS_Aquatic) Return Isscaap objects filtered by the FS_Aquatic column
 * @method array findByFsAquaticsumm(int $FS_AquaticSumm) Return Isscaap objects filtered by the FS_AquaticSumm column
 * @method array findByFsCultured(int $FS_Cultured) Return Isscaap objects filtered by the FS_Cultured column
 * @method array findByFsCulturedsumm(int $FS_CulturedSumm) Return Isscaap objects filtered by the FS_CulturedSumm column
 * @method array findByFirms(int $FIRMS) Return Isscaap objects filtered by the FIRMS column
 * @method array findByFirmsSumm(int $FIRMS_Summ) Return Isscaap objects filtered by the FIRMS_Summ column
 * @method array findByFigisId(int $FIGIS_ID) Return Isscaap objects filtered by the FIGIS_ID column
 * @method array findByColId(string $CoL_ID) Return Isscaap objects filtered by the CoL_ID column
 * @method array findByDb(string $DB) Return Isscaap objects filtered by the DB column
 * @method array findByTs(string $TS) Return Isscaap objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIsscaapQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIsscaapQuery object.
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
            $modelName = 'Isscaap';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IsscaapQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IsscaapQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IsscaapQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IsscaapQuery) {
            return $criteria;
        }
        $query = new IsscaapQuery(null, null, $modelAlias);

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
     * @return   Isscaap|Isscaap[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IsscaapPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Isscaap A model object, or null if the key is not found
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
     * @return                 Isscaap A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `OrdNum`, `FamCode`, `SpecCode`, `StockCode`, `Syncode`, `Valid`, `Genus`, `Species`, `AggLevel`, `ISSCAAP`, `TaxCode`, `AlphaCode`, `Scientific`, `English`, `French`, `Spanish`, `Arabic`, `Chinese`, `Russian`, `Author`, `Family`, `Order`, `Troph`, `seTroph`, `RefNo`, `RemarkTroph`, `SLmax`, `RefNoSL`, `RemarkSL`, `Reef`, `Pelagic`, `Demersal`, `DeepSea`, `Resilience`, `ResilienceRemark`, `ResilienceVal`, `Stats_data`, `Stats_Catch`, `Stats_Aquaculture`, `FS_Aquatic`, `FS_AquaticSumm`, `FS_Cultured`, `FS_CulturedSumm`, `FIRMS`, `FIRMS_Summ`, `FIGIS_ID`, `CoL_ID`, `DB`, `TS` FROM `isscaap` WHERE `AutoCtr` = :p0';
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
            $obj = new Isscaap();
            $obj->hydrate($row);
            IsscaapPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Isscaap|Isscaap[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Isscaap[]|mixed the list of results, formatted by the current formatter
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
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(IsscaapPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(IsscaapPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(IsscaapPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(IsscaapPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the OrdNum column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdnum(1234); // WHERE OrdNum = 1234
     * $query->filterByOrdnum(array(12, 34)); // WHERE OrdNum IN (12, 34)
     * $query->filterByOrdnum(array('min' => 12)); // WHERE OrdNum >= 12
     * $query->filterByOrdnum(array('max' => 12)); // WHERE OrdNum <= 12
     * </code>
     *
     * @param     mixed $ordnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(IsscaapPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(IsscaapPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::ORDNUM, $ordnum, $comparison);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(IsscaapPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(IsscaapPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FAMCODE, $famcode, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(IsscaapPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(IsscaapPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SPECCODE, $speccode, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(IsscaapPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(IsscaapPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the Syncode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE Syncode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE Syncode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE Syncode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE Syncode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(IsscaapPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(IsscaapPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the Valid column
     *
     * Example usage:
     * <code>
     * $query->filterByValid(1234); // WHERE Valid = 1234
     * $query->filterByValid(array(12, 34)); // WHERE Valid IN (12, 34)
     * $query->filterByValid(array('min' => 12)); // WHERE Valid >= 12
     * $query->filterByValid(array('max' => 12)); // WHERE Valid <= 12
     * </code>
     *
     * @param     mixed $valid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByValid($valid = null, $comparison = null)
    {
        if (is_array($valid)) {
            $useMinMax = false;
            if (isset($valid['min'])) {
                $this->addUsingAlias(IsscaapPeer::VALID, $valid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valid['max'])) {
                $this->addUsingAlias(IsscaapPeer::VALID, $valid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::VALID, $valid, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IsscaapPeer::GENUS, $genus, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IsscaapPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the AggLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByAgglevel('fooValue');   // WHERE AggLevel = 'fooValue'
     * $query->filterByAgglevel('%fooValue%'); // WHERE AggLevel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agglevel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByAgglevel($agglevel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agglevel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agglevel)) {
                $agglevel = str_replace('*', '%', $agglevel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::AGGLEVEL, $agglevel, $comparison);
    }

    /**
     * Filter the query on the ISSCAAP column
     *
     * Example usage:
     * <code>
     * $query->filterByIsscaap(1234); // WHERE ISSCAAP = 1234
     * $query->filterByIsscaap(array(12, 34)); // WHERE ISSCAAP IN (12, 34)
     * $query->filterByIsscaap(array('min' => 12)); // WHERE ISSCAAP >= 12
     * $query->filterByIsscaap(array('max' => 12)); // WHERE ISSCAAP <= 12
     * </code>
     *
     * @param     mixed $isscaap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByIsscaap($isscaap = null, $comparison = null)
    {
        if (is_array($isscaap)) {
            $useMinMax = false;
            if (isset($isscaap['min'])) {
                $this->addUsingAlias(IsscaapPeer::ISSCAAP, $isscaap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isscaap['max'])) {
                $this->addUsingAlias(IsscaapPeer::ISSCAAP, $isscaap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::ISSCAAP, $isscaap, $comparison);
    }

    /**
     * Filter the query on the TaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxcode('fooValue');   // WHERE TaxCode = 'fooValue'
     * $query->filterByTaxcode('%fooValue%'); // WHERE TaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByTaxcode($taxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taxcode)) {
                $taxcode = str_replace('*', '%', $taxcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::TAXCODE, $taxcode, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IsscaapPeer::ALPHACODE, $alphacode, $comparison);
    }

    /**
     * Filter the query on the Scientific column
     *
     * Example usage:
     * <code>
     * $query->filterByScientific('fooValue');   // WHERE Scientific = 'fooValue'
     * $query->filterByScientific('%fooValue%'); // WHERE Scientific LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scientific The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByScientific($scientific = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scientific)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scientific)) {
                $scientific = str_replace('*', '%', $scientific);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SCIENTIFIC, $scientific, $comparison);
    }

    /**
     * Filter the query on the English column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglish('fooValue');   // WHERE English = 'fooValue'
     * $query->filterByEnglish('%fooValue%'); // WHERE English LIKE '%fooValue%'
     * </code>
     *
     * @param     string $english The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByEnglish($english = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($english)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $english)) {
                $english = str_replace('*', '%', $english);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::ENGLISH, $english, $comparison);
    }

    /**
     * Filter the query on the French column
     *
     * Example usage:
     * <code>
     * $query->filterByFrench('fooValue');   // WHERE French = 'fooValue'
     * $query->filterByFrench('%fooValue%'); // WHERE French LIKE '%fooValue%'
     * </code>
     *
     * @param     string $french The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFrench($french = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($french)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $french)) {
                $french = str_replace('*', '%', $french);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FRENCH, $french, $comparison);
    }

    /**
     * Filter the query on the Spanish column
     *
     * Example usage:
     * <code>
     * $query->filterBySpanish('fooValue');   // WHERE Spanish = 'fooValue'
     * $query->filterBySpanish('%fooValue%'); // WHERE Spanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterBySpanish($spanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spanish)) {
                $spanish = str_replace('*', '%', $spanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SPANISH, $spanish, $comparison);
    }

    /**
     * Filter the query on the Arabic column
     *
     * Example usage:
     * <code>
     * $query->filterByArabic('fooValue');   // WHERE Arabic = 'fooValue'
     * $query->filterByArabic('%fooValue%'); // WHERE Arabic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arabic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByArabic($arabic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arabic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arabic)) {
                $arabic = str_replace('*', '%', $arabic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::ARABIC, $arabic, $comparison);
    }

    /**
     * Filter the query on the Chinese column
     *
     * Example usage:
     * <code>
     * $query->filterByChinese('fooValue');   // WHERE Chinese = 'fooValue'
     * $query->filterByChinese('%fooValue%'); // WHERE Chinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByChinese($chinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chinese)) {
                $chinese = str_replace('*', '%', $chinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::CHINESE, $chinese, $comparison);
    }

    /**
     * Filter the query on the Russian column
     *
     * Example usage:
     * <code>
     * $query->filterByRussian('fooValue');   // WHERE Russian = 'fooValue'
     * $query->filterByRussian('%fooValue%'); // WHERE Russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $russian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByRussian($russian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($russian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $russian)) {
                $russian = str_replace('*', '%', $russian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::RUSSIAN, $russian, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IsscaapPeer::AUTHOR, $author, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IsscaapPeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the Order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE Order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE Order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($order)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $order)) {
                $order = str_replace('*', '%', $order);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the Troph column
     *
     * Example usage:
     * <code>
     * $query->filterByTroph(1234); // WHERE Troph = 1234
     * $query->filterByTroph(array(12, 34)); // WHERE Troph IN (12, 34)
     * $query->filterByTroph(array('min' => 12)); // WHERE Troph >= 12
     * $query->filterByTroph(array('max' => 12)); // WHERE Troph <= 12
     * </code>
     *
     * @param     mixed $troph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByTroph($troph = null, $comparison = null)
    {
        if (is_array($troph)) {
            $useMinMax = false;
            if (isset($troph['min'])) {
                $this->addUsingAlias(IsscaapPeer::TROPH, $troph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($troph['max'])) {
                $this->addUsingAlias(IsscaapPeer::TROPH, $troph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::TROPH, $troph, $comparison);
    }

    /**
     * Filter the query on the seTroph column
     *
     * Example usage:
     * <code>
     * $query->filterBySetroph(1234); // WHERE seTroph = 1234
     * $query->filterBySetroph(array(12, 34)); // WHERE seTroph IN (12, 34)
     * $query->filterBySetroph(array('min' => 12)); // WHERE seTroph >= 12
     * $query->filterBySetroph(array('max' => 12)); // WHERE seTroph <= 12
     * </code>
     *
     * @param     mixed $setroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterBySetroph($setroph = null, $comparison = null)
    {
        if (is_array($setroph)) {
            $useMinMax = false;
            if (isset($setroph['min'])) {
                $this->addUsingAlias(IsscaapPeer::SETROPH, $setroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setroph['max'])) {
                $this->addUsingAlias(IsscaapPeer::SETROPH, $setroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SETROPH, $setroph, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(IsscaapPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(IsscaapPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the RemarkTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarktroph('fooValue');   // WHERE RemarkTroph = 'fooValue'
     * $query->filterByRemarktroph('%fooValue%'); // WHERE RemarkTroph LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarktroph The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByRemarktroph($remarktroph = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarktroph)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarktroph)) {
                $remarktroph = str_replace('*', '%', $remarktroph);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::REMARKTROPH, $remarktroph, $comparison);
    }

    /**
     * Filter the query on the SLmax column
     *
     * Example usage:
     * <code>
     * $query->filterBySlmax(1234); // WHERE SLmax = 1234
     * $query->filterBySlmax(array(12, 34)); // WHERE SLmax IN (12, 34)
     * $query->filterBySlmax(array('min' => 12)); // WHERE SLmax >= 12
     * $query->filterBySlmax(array('max' => 12)); // WHERE SLmax <= 12
     * </code>
     *
     * @param     mixed $slmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterBySlmax($slmax = null, $comparison = null)
    {
        if (is_array($slmax)) {
            $useMinMax = false;
            if (isset($slmax['min'])) {
                $this->addUsingAlias(IsscaapPeer::SLMAX, $slmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($slmax['max'])) {
                $this->addUsingAlias(IsscaapPeer::SLMAX, $slmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::SLMAX, $slmax, $comparison);
    }

    /**
     * Filter the query on the RefNoSL column
     *
     * Example usage:
     * <code>
     * $query->filterByRefnosl(1234); // WHERE RefNoSL = 1234
     * $query->filterByRefnosl(array(12, 34)); // WHERE RefNoSL IN (12, 34)
     * $query->filterByRefnosl(array('min' => 12)); // WHERE RefNoSL >= 12
     * $query->filterByRefnosl(array('max' => 12)); // WHERE RefNoSL <= 12
     * </code>
     *
     * @param     mixed $refnosl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByRefnosl($refnosl = null, $comparison = null)
    {
        if (is_array($refnosl)) {
            $useMinMax = false;
            if (isset($refnosl['min'])) {
                $this->addUsingAlias(IsscaapPeer::REFNOSL, $refnosl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refnosl['max'])) {
                $this->addUsingAlias(IsscaapPeer::REFNOSL, $refnosl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::REFNOSL, $refnosl, $comparison);
    }

    /**
     * Filter the query on the RemarkSL column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksl('fooValue');   // WHERE RemarkSL = 'fooValue'
     * $query->filterByRemarksl('%fooValue%'); // WHERE RemarkSL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarksl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByRemarksl($remarksl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarksl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarksl)) {
                $remarksl = str_replace('*', '%', $remarksl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::REMARKSL, $remarksl, $comparison);
    }

    /**
     * Filter the query on the Reef column
     *
     * Example usage:
     * <code>
     * $query->filterByReef(1234); // WHERE Reef = 1234
     * $query->filterByReef(array(12, 34)); // WHERE Reef IN (12, 34)
     * $query->filterByReef(array('min' => 12)); // WHERE Reef >= 12
     * $query->filterByReef(array('max' => 12)); // WHERE Reef <= 12
     * </code>
     *
     * @param     mixed $reef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByReef($reef = null, $comparison = null)
    {
        if (is_array($reef)) {
            $useMinMax = false;
            if (isset($reef['min'])) {
                $this->addUsingAlias(IsscaapPeer::REEF, $reef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reef['max'])) {
                $this->addUsingAlias(IsscaapPeer::REEF, $reef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::REEF, $reef, $comparison);
    }

    /**
     * Filter the query on the Pelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByPelagic(1234); // WHERE Pelagic = 1234
     * $query->filterByPelagic(array(12, 34)); // WHERE Pelagic IN (12, 34)
     * $query->filterByPelagic(array('min' => 12)); // WHERE Pelagic >= 12
     * $query->filterByPelagic(array('max' => 12)); // WHERE Pelagic <= 12
     * </code>
     *
     * @param     mixed $pelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByPelagic($pelagic = null, $comparison = null)
    {
        if (is_array($pelagic)) {
            $useMinMax = false;
            if (isset($pelagic['min'])) {
                $this->addUsingAlias(IsscaapPeer::PELAGIC, $pelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pelagic['max'])) {
                $this->addUsingAlias(IsscaapPeer::PELAGIC, $pelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::PELAGIC, $pelagic, $comparison);
    }

    /**
     * Filter the query on the Demersal column
     *
     * Example usage:
     * <code>
     * $query->filterByDemersal(1234); // WHERE Demersal = 1234
     * $query->filterByDemersal(array(12, 34)); // WHERE Demersal IN (12, 34)
     * $query->filterByDemersal(array('min' => 12)); // WHERE Demersal >= 12
     * $query->filterByDemersal(array('max' => 12)); // WHERE Demersal <= 12
     * </code>
     *
     * @param     mixed $demersal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByDemersal($demersal = null, $comparison = null)
    {
        if (is_array($demersal)) {
            $useMinMax = false;
            if (isset($demersal['min'])) {
                $this->addUsingAlias(IsscaapPeer::DEMERSAL, $demersal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demersal['max'])) {
                $this->addUsingAlias(IsscaapPeer::DEMERSAL, $demersal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::DEMERSAL, $demersal, $comparison);
    }

    /**
     * Filter the query on the DeepSea column
     *
     * Example usage:
     * <code>
     * $query->filterByDeepsea(1234); // WHERE DeepSea = 1234
     * $query->filterByDeepsea(array(12, 34)); // WHERE DeepSea IN (12, 34)
     * $query->filterByDeepsea(array('min' => 12)); // WHERE DeepSea >= 12
     * $query->filterByDeepsea(array('max' => 12)); // WHERE DeepSea <= 12
     * </code>
     *
     * @param     mixed $deepsea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByDeepsea($deepsea = null, $comparison = null)
    {
        if (is_array($deepsea)) {
            $useMinMax = false;
            if (isset($deepsea['min'])) {
                $this->addUsingAlias(IsscaapPeer::DEEPSEA, $deepsea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deepsea['max'])) {
                $this->addUsingAlias(IsscaapPeer::DEEPSEA, $deepsea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::DEEPSEA, $deepsea, $comparison);
    }

    /**
     * Filter the query on the Resilience column
     *
     * Example usage:
     * <code>
     * $query->filterByResilience('fooValue');   // WHERE Resilience = 'fooValue'
     * $query->filterByResilience('%fooValue%'); // WHERE Resilience LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resilience The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByResilience($resilience = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resilience)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resilience)) {
                $resilience = str_replace('*', '%', $resilience);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::RESILIENCE, $resilience, $comparison);
    }

    /**
     * Filter the query on the ResilienceRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByResilienceremark('fooValue');   // WHERE ResilienceRemark = 'fooValue'
     * $query->filterByResilienceremark('%fooValue%'); // WHERE ResilienceRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resilienceremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByResilienceremark($resilienceremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resilienceremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resilienceremark)) {
                $resilienceremark = str_replace('*', '%', $resilienceremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::RESILIENCEREMARK, $resilienceremark, $comparison);
    }

    /**
     * Filter the query on the ResilienceVal column
     *
     * Example usage:
     * <code>
     * $query->filterByResilienceval(1234); // WHERE ResilienceVal = 1234
     * $query->filterByResilienceval(array(12, 34)); // WHERE ResilienceVal IN (12, 34)
     * $query->filterByResilienceval(array('min' => 12)); // WHERE ResilienceVal >= 12
     * $query->filterByResilienceval(array('max' => 12)); // WHERE ResilienceVal <= 12
     * </code>
     *
     * @param     mixed $resilienceval The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByResilienceval($resilienceval = null, $comparison = null)
    {
        if (is_array($resilienceval)) {
            $useMinMax = false;
            if (isset($resilienceval['min'])) {
                $this->addUsingAlias(IsscaapPeer::RESILIENCEVAL, $resilienceval['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($resilienceval['max'])) {
                $this->addUsingAlias(IsscaapPeer::RESILIENCEVAL, $resilienceval['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::RESILIENCEVAL, $resilienceval, $comparison);
    }

    /**
     * Filter the query on the Stats_data column
     *
     * Example usage:
     * <code>
     * $query->filterByStatsData(1234); // WHERE Stats_data = 1234
     * $query->filterByStatsData(array(12, 34)); // WHERE Stats_data IN (12, 34)
     * $query->filterByStatsData(array('min' => 12)); // WHERE Stats_data >= 12
     * $query->filterByStatsData(array('max' => 12)); // WHERE Stats_data <= 12
     * </code>
     *
     * @param     mixed $statsData The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByStatsData($statsData = null, $comparison = null)
    {
        if (is_array($statsData)) {
            $useMinMax = false;
            if (isset($statsData['min'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_DATA, $statsData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statsData['max'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_DATA, $statsData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::STATS_DATA, $statsData, $comparison);
    }

    /**
     * Filter the query on the Stats_Catch column
     *
     * Example usage:
     * <code>
     * $query->filterByStatsCatch(1234); // WHERE Stats_Catch = 1234
     * $query->filterByStatsCatch(array(12, 34)); // WHERE Stats_Catch IN (12, 34)
     * $query->filterByStatsCatch(array('min' => 12)); // WHERE Stats_Catch >= 12
     * $query->filterByStatsCatch(array('max' => 12)); // WHERE Stats_Catch <= 12
     * </code>
     *
     * @param     mixed $statsCatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByStatsCatch($statsCatch = null, $comparison = null)
    {
        if (is_array($statsCatch)) {
            $useMinMax = false;
            if (isset($statsCatch['min'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_CATCH, $statsCatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statsCatch['max'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_CATCH, $statsCatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::STATS_CATCH, $statsCatch, $comparison);
    }

    /**
     * Filter the query on the Stats_Aquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByStatsAquaculture(1234); // WHERE Stats_Aquaculture = 1234
     * $query->filterByStatsAquaculture(array(12, 34)); // WHERE Stats_Aquaculture IN (12, 34)
     * $query->filterByStatsAquaculture(array('min' => 12)); // WHERE Stats_Aquaculture >= 12
     * $query->filterByStatsAquaculture(array('max' => 12)); // WHERE Stats_Aquaculture <= 12
     * </code>
     *
     * @param     mixed $statsAquaculture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByStatsAquaculture($statsAquaculture = null, $comparison = null)
    {
        if (is_array($statsAquaculture)) {
            $useMinMax = false;
            if (isset($statsAquaculture['min'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_AQUACULTURE, $statsAquaculture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statsAquaculture['max'])) {
                $this->addUsingAlias(IsscaapPeer::STATS_AQUACULTURE, $statsAquaculture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::STATS_AQUACULTURE, $statsAquaculture, $comparison);
    }

    /**
     * Filter the query on the FS_Aquatic column
     *
     * Example usage:
     * <code>
     * $query->filterByFsAquatic(1234); // WHERE FS_Aquatic = 1234
     * $query->filterByFsAquatic(array(12, 34)); // WHERE FS_Aquatic IN (12, 34)
     * $query->filterByFsAquatic(array('min' => 12)); // WHERE FS_Aquatic >= 12
     * $query->filterByFsAquatic(array('max' => 12)); // WHERE FS_Aquatic <= 12
     * </code>
     *
     * @param     mixed $fsAquatic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFsAquatic($fsAquatic = null, $comparison = null)
    {
        if (is_array($fsAquatic)) {
            $useMinMax = false;
            if (isset($fsAquatic['min'])) {
                $this->addUsingAlias(IsscaapPeer::FS_AQUATIC, $fsAquatic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsAquatic['max'])) {
                $this->addUsingAlias(IsscaapPeer::FS_AQUATIC, $fsAquatic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FS_AQUATIC, $fsAquatic, $comparison);
    }

    /**
     * Filter the query on the FS_AquaticSumm column
     *
     * Example usage:
     * <code>
     * $query->filterByFsAquaticsumm(1234); // WHERE FS_AquaticSumm = 1234
     * $query->filterByFsAquaticsumm(array(12, 34)); // WHERE FS_AquaticSumm IN (12, 34)
     * $query->filterByFsAquaticsumm(array('min' => 12)); // WHERE FS_AquaticSumm >= 12
     * $query->filterByFsAquaticsumm(array('max' => 12)); // WHERE FS_AquaticSumm <= 12
     * </code>
     *
     * @param     mixed $fsAquaticsumm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFsAquaticsumm($fsAquaticsumm = null, $comparison = null)
    {
        if (is_array($fsAquaticsumm)) {
            $useMinMax = false;
            if (isset($fsAquaticsumm['min'])) {
                $this->addUsingAlias(IsscaapPeer::FS_AQUATICSUMM, $fsAquaticsumm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsAquaticsumm['max'])) {
                $this->addUsingAlias(IsscaapPeer::FS_AQUATICSUMM, $fsAquaticsumm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FS_AQUATICSUMM, $fsAquaticsumm, $comparison);
    }

    /**
     * Filter the query on the FS_Cultured column
     *
     * Example usage:
     * <code>
     * $query->filterByFsCultured(1234); // WHERE FS_Cultured = 1234
     * $query->filterByFsCultured(array(12, 34)); // WHERE FS_Cultured IN (12, 34)
     * $query->filterByFsCultured(array('min' => 12)); // WHERE FS_Cultured >= 12
     * $query->filterByFsCultured(array('max' => 12)); // WHERE FS_Cultured <= 12
     * </code>
     *
     * @param     mixed $fsCultured The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFsCultured($fsCultured = null, $comparison = null)
    {
        if (is_array($fsCultured)) {
            $useMinMax = false;
            if (isset($fsCultured['min'])) {
                $this->addUsingAlias(IsscaapPeer::FS_CULTURED, $fsCultured['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsCultured['max'])) {
                $this->addUsingAlias(IsscaapPeer::FS_CULTURED, $fsCultured['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FS_CULTURED, $fsCultured, $comparison);
    }

    /**
     * Filter the query on the FS_CulturedSumm column
     *
     * Example usage:
     * <code>
     * $query->filterByFsCulturedsumm(1234); // WHERE FS_CulturedSumm = 1234
     * $query->filterByFsCulturedsumm(array(12, 34)); // WHERE FS_CulturedSumm IN (12, 34)
     * $query->filterByFsCulturedsumm(array('min' => 12)); // WHERE FS_CulturedSumm >= 12
     * $query->filterByFsCulturedsumm(array('max' => 12)); // WHERE FS_CulturedSumm <= 12
     * </code>
     *
     * @param     mixed $fsCulturedsumm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFsCulturedsumm($fsCulturedsumm = null, $comparison = null)
    {
        if (is_array($fsCulturedsumm)) {
            $useMinMax = false;
            if (isset($fsCulturedsumm['min'])) {
                $this->addUsingAlias(IsscaapPeer::FS_CULTUREDSUMM, $fsCulturedsumm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsCulturedsumm['max'])) {
                $this->addUsingAlias(IsscaapPeer::FS_CULTUREDSUMM, $fsCulturedsumm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FS_CULTUREDSUMM, $fsCulturedsumm, $comparison);
    }

    /**
     * Filter the query on the FIRMS column
     *
     * Example usage:
     * <code>
     * $query->filterByFirms(1234); // WHERE FIRMS = 1234
     * $query->filterByFirms(array(12, 34)); // WHERE FIRMS IN (12, 34)
     * $query->filterByFirms(array('min' => 12)); // WHERE FIRMS >= 12
     * $query->filterByFirms(array('max' => 12)); // WHERE FIRMS <= 12
     * </code>
     *
     * @param     mixed $firms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFirms($firms = null, $comparison = null)
    {
        if (is_array($firms)) {
            $useMinMax = false;
            if (isset($firms['min'])) {
                $this->addUsingAlias(IsscaapPeer::FIRMS, $firms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firms['max'])) {
                $this->addUsingAlias(IsscaapPeer::FIRMS, $firms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FIRMS, $firms, $comparison);
    }

    /**
     * Filter the query on the FIRMS_Summ column
     *
     * Example usage:
     * <code>
     * $query->filterByFirmsSumm(1234); // WHERE FIRMS_Summ = 1234
     * $query->filterByFirmsSumm(array(12, 34)); // WHERE FIRMS_Summ IN (12, 34)
     * $query->filterByFirmsSumm(array('min' => 12)); // WHERE FIRMS_Summ >= 12
     * $query->filterByFirmsSumm(array('max' => 12)); // WHERE FIRMS_Summ <= 12
     * </code>
     *
     * @param     mixed $firmsSumm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFirmsSumm($firmsSumm = null, $comparison = null)
    {
        if (is_array($firmsSumm)) {
            $useMinMax = false;
            if (isset($firmsSumm['min'])) {
                $this->addUsingAlias(IsscaapPeer::FIRMS_SUMM, $firmsSumm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firmsSumm['max'])) {
                $this->addUsingAlias(IsscaapPeer::FIRMS_SUMM, $firmsSumm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FIRMS_SUMM, $firmsSumm, $comparison);
    }

    /**
     * Filter the query on the FIGIS_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByFigisId(1234); // WHERE FIGIS_ID = 1234
     * $query->filterByFigisId(array(12, 34)); // WHERE FIGIS_ID IN (12, 34)
     * $query->filterByFigisId(array('min' => 12)); // WHERE FIGIS_ID >= 12
     * $query->filterByFigisId(array('max' => 12)); // WHERE FIGIS_ID <= 12
     * </code>
     *
     * @param     mixed $figisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByFigisId($figisId = null, $comparison = null)
    {
        if (is_array($figisId)) {
            $useMinMax = false;
            if (isset($figisId['min'])) {
                $this->addUsingAlias(IsscaapPeer::FIGIS_ID, $figisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($figisId['max'])) {
                $this->addUsingAlias(IsscaapPeer::FIGIS_ID, $figisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::FIGIS_ID, $figisId, $comparison);
    }

    /**
     * Filter the query on the CoL_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByColId('fooValue');   // WHERE CoL_ID = 'fooValue'
     * $query->filterByColId('%fooValue%'); // WHERE CoL_ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByColId($colId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colId)) {
                $colId = str_replace('*', '%', $colId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::COL_ID, $colId, $comparison);
    }

    /**
     * Filter the query on the DB column
     *
     * Example usage:
     * <code>
     * $query->filterByDb('fooValue');   // WHERE DB = 'fooValue'
     * $query->filterByDb('%fooValue%'); // WHERE DB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $db The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByDb($db = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($db)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $db)) {
                $db = str_replace('*', '%', $db);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::DB, $db, $comparison);
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
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(IsscaapPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(IsscaapPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IsscaapPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Isscaap $isscaap Object to remove from the list of results
     *
     * @return IsscaapQuery The current query, for fluid interface
     */
    public function prune($isscaap = null)
    {
        if ($isscaap) {
            $this->addUsingAlias(IsscaapPeer::AUTOCTR, $isscaap->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
