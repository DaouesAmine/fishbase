<?php


/**
 * Base class that represents a query for the 'webuse' table.
 *
 *
 *
 * @method WebuseQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method WebuseQuery orderByPeriod($order = Criteria::ASC) Order by the period column
 * @method WebuseQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method WebuseQuery orderByMonth($order = Criteria::ASC) Order by the Month column
 * @method WebuseQuery orderByHits($order = Criteria::ASC) Order by the Hits column
 * @method WebuseQuery orderByHitsnotviewed($order = Criteria::ASC) Order by the HitsNotViewed column
 * @method WebuseQuery orderBySessions($order = Criteria::ASC) Order by the Sessions column
 * @method WebuseQuery orderByUniqueusers($order = Criteria::ASC) Order by the UniqueUsers column
 * @method WebuseQuery orderByVisitsvisitors($order = Criteria::ASC) Order by the VisitsVisitors column
 * @method WebuseQuery orderByPages($order = Criteria::ASC) Order by the Pages column
 * @method WebuseQuery orderByPagesvisit($order = Criteria::ASC) Order by the PagesVisit column
 * @method WebuseQuery orderByReturnusers($order = Criteria::ASC) Order by the ReturnUsers column
 * @method WebuseQuery orderByPowerusers($order = Criteria::ASC) Order by the PowerUsers column
 * @method WebuseQuery orderByBookmarksessions($order = Criteria::ASC) Order by the BookMarkSessions column
 * @method WebuseQuery orderByBookmark($order = Criteria::ASC) Order by the BookMark column
 * @method WebuseQuery orderByDuration($order = Criteria::ASC) Order by the Duration column
 * @method WebuseQuery orderByBandwidthOld($order = Criteria::ASC) Order by the Bandwidth_old column
 * @method WebuseQuery orderByBandwidth($order = Criteria::ASC) Order by the Bandwidth column
 * @method WebuseQuery orderByBwnotviewed($order = Criteria::ASC) Order by the BWNotViewed column
 * @method WebuseQuery orderByUsa($order = Criteria::ASC) Order by the USA column
 * @method WebuseQuery orderByInternational($order = Criteria::ASC) Order by the International column
 * @method WebuseQuery orderByUnknown($order = Criteria::ASC) Order by the Unknown column
 * @method WebuseQuery orderByCountries($order = Criteria::ASC) Order by the Countries column
 * @method WebuseQuery orderByDevcountries($order = Criteria::ASC) Order by the DevCountries column
 * @method WebuseQuery orderByDevcountsess($order = Criteria::ASC) Order by the DevCountSess column
 * @method WebuseQuery orderByAcpcountries($order = Criteria::ASC) Order by the ACPCountries column
 * @method WebuseQuery orderByAcpcountsess($order = Criteria::ASC) Order by the ACPCountSess column
 * @method WebuseQuery orderByOtheros($order = Criteria::ASC) Order by the OtherOS column
 * @method WebuseQuery orderByTopday($order = Criteria::ASC) Order by the TopDay column
 * @method WebuseQuery orderByTopdaydate($order = Criteria::ASC) Order by the TopDayDate column
 * @method WebuseQuery orderByDownloads($order = Criteria::ASC) Order by the Downloads column
 * @method WebuseQuery orderBySummarydir($order = Criteria::ASC) Order by the SummaryDir column
 * @method WebuseQuery orderByNomenclaturedir($order = Criteria::ASC) Order by the NomenclatureDir column
 * @method WebuseQuery orderByComnamesdir($order = Criteria::ASC) Order by the ComNamesDir column
 * @method WebuseQuery orderByReferencesdir($order = Criteria::ASC) Order by the ReferencesDir column
 * @method WebuseQuery orderByPhotosdir($order = Criteria::ASC) Order by the PhotosDir column
 * @method WebuseQuery orderByForumdir($order = Criteria::ASC) Order by the ForumDir column
 * @method WebuseQuery orderByTourdir($order = Criteria::ASC) Order by the TourDir column
 * @method WebuseQuery orderByChatdir($order = Criteria::ASC) Order by the ChatDir column
 * @method WebuseQuery orderByPopdyndir($order = Criteria::ASC) Order by the PopdynDir column
 * @method WebuseQuery orderByReproductiondir($order = Criteria::ASC) Order by the ReproductionDir column
 * @method WebuseQuery orderByTrophicdir($order = Criteria::ASC) Order by the TrophicDir column
 * @method WebuseQuery orderByCountrydir($order = Criteria::ASC) Order by the CountryDir column
 * @method WebuseQuery orderByEschmeyerdir($order = Criteria::ASC) Order by the EschmeyerDir column
 * @method WebuseQuery orderByFbbookdir($order = Criteria::ASC) Order by the FBBookDir column
 * @method WebuseQuery orderByFishquizdir($order = Criteria::ASC) Order by the FishQuizDir column
 * @method WebuseQuery orderByMuseumdir($order = Criteria::ASC) Order by the MuseumDir column
 * @method WebuseQuery orderByGlossarydir($order = Criteria::ASC) Order by the GlossaryDir column
 * @method WebuseQuery orderByMapdir($order = Criteria::ASC) Order by the MapDir column
 * @method WebuseQuery orderByIdentification($order = Criteria::ASC) Order by the Identification column
 * @method WebuseQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method WebuseQuery orderByLarvalbasedir($order = Criteria::ASC) Order by the LarvalBaseDir column
 * @method WebuseQuery orderByDiseasedir($order = Criteria::ASC) Order by the DiseaseDir column
 * @method WebuseQuery orderByToolsdir($order = Criteria::ASC) Order by the ToolsDir column
 * @method WebuseQuery orderByIdentificationdir($order = Criteria::ASC) Order by the IdentificationDir column
 * @method WebuseQuery orderByKeysdir($order = Criteria::ASC) Order by the KeysDir column
 * @method WebuseQuery orderByFieldguidesdir($order = Criteria::ASC) Order by the FieldGuidesDir column
 * @method WebuseQuery orderByFishonlinedir($order = Criteria::ASC) Order by the FishOnLineDir column
 * @method WebuseQuery orderByDownloaddir($order = Criteria::ASC) Order by the DownloadDir column
 * @method WebuseQuery orderByEcologydir($order = Criteria::ASC) Order by the EcologyDir column
 * @method WebuseQuery orderByPhysiologydir($order = Criteria::ASC) Order by the PhysiologyDir column
 * @method WebuseQuery orderByGeneticsdir($order = Criteria::ASC) Order by the GeneticsDir column
 * @method WebuseQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method WebuseQuery groupByAutoctr() Group by the autoctr column
 * @method WebuseQuery groupByPeriod() Group by the period column
 * @method WebuseQuery groupByYear() Group by the Year column
 * @method WebuseQuery groupByMonth() Group by the Month column
 * @method WebuseQuery groupByHits() Group by the Hits column
 * @method WebuseQuery groupByHitsnotviewed() Group by the HitsNotViewed column
 * @method WebuseQuery groupBySessions() Group by the Sessions column
 * @method WebuseQuery groupByUniqueusers() Group by the UniqueUsers column
 * @method WebuseQuery groupByVisitsvisitors() Group by the VisitsVisitors column
 * @method WebuseQuery groupByPages() Group by the Pages column
 * @method WebuseQuery groupByPagesvisit() Group by the PagesVisit column
 * @method WebuseQuery groupByReturnusers() Group by the ReturnUsers column
 * @method WebuseQuery groupByPowerusers() Group by the PowerUsers column
 * @method WebuseQuery groupByBookmarksessions() Group by the BookMarkSessions column
 * @method WebuseQuery groupByBookmark() Group by the BookMark column
 * @method WebuseQuery groupByDuration() Group by the Duration column
 * @method WebuseQuery groupByBandwidthOld() Group by the Bandwidth_old column
 * @method WebuseQuery groupByBandwidth() Group by the Bandwidth column
 * @method WebuseQuery groupByBwnotviewed() Group by the BWNotViewed column
 * @method WebuseQuery groupByUsa() Group by the USA column
 * @method WebuseQuery groupByInternational() Group by the International column
 * @method WebuseQuery groupByUnknown() Group by the Unknown column
 * @method WebuseQuery groupByCountries() Group by the Countries column
 * @method WebuseQuery groupByDevcountries() Group by the DevCountries column
 * @method WebuseQuery groupByDevcountsess() Group by the DevCountSess column
 * @method WebuseQuery groupByAcpcountries() Group by the ACPCountries column
 * @method WebuseQuery groupByAcpcountsess() Group by the ACPCountSess column
 * @method WebuseQuery groupByOtheros() Group by the OtherOS column
 * @method WebuseQuery groupByTopday() Group by the TopDay column
 * @method WebuseQuery groupByTopdaydate() Group by the TopDayDate column
 * @method WebuseQuery groupByDownloads() Group by the Downloads column
 * @method WebuseQuery groupBySummarydir() Group by the SummaryDir column
 * @method WebuseQuery groupByNomenclaturedir() Group by the NomenclatureDir column
 * @method WebuseQuery groupByComnamesdir() Group by the ComNamesDir column
 * @method WebuseQuery groupByReferencesdir() Group by the ReferencesDir column
 * @method WebuseQuery groupByPhotosdir() Group by the PhotosDir column
 * @method WebuseQuery groupByForumdir() Group by the ForumDir column
 * @method WebuseQuery groupByTourdir() Group by the TourDir column
 * @method WebuseQuery groupByChatdir() Group by the ChatDir column
 * @method WebuseQuery groupByPopdyndir() Group by the PopdynDir column
 * @method WebuseQuery groupByReproductiondir() Group by the ReproductionDir column
 * @method WebuseQuery groupByTrophicdir() Group by the TrophicDir column
 * @method WebuseQuery groupByCountrydir() Group by the CountryDir column
 * @method WebuseQuery groupByEschmeyerdir() Group by the EschmeyerDir column
 * @method WebuseQuery groupByFbbookdir() Group by the FBBookDir column
 * @method WebuseQuery groupByFishquizdir() Group by the FishQuizDir column
 * @method WebuseQuery groupByMuseumdir() Group by the MuseumDir column
 * @method WebuseQuery groupByGlossarydir() Group by the GlossaryDir column
 * @method WebuseQuery groupByMapdir() Group by the MapDir column
 * @method WebuseQuery groupByIdentification() Group by the Identification column
 * @method WebuseQuery groupByDateentered() Group by the DateEntered column
 * @method WebuseQuery groupByLarvalbasedir() Group by the LarvalBaseDir column
 * @method WebuseQuery groupByDiseasedir() Group by the DiseaseDir column
 * @method WebuseQuery groupByToolsdir() Group by the ToolsDir column
 * @method WebuseQuery groupByIdentificationdir() Group by the IdentificationDir column
 * @method WebuseQuery groupByKeysdir() Group by the KeysDir column
 * @method WebuseQuery groupByFieldguidesdir() Group by the FieldGuidesDir column
 * @method WebuseQuery groupByFishonlinedir() Group by the FishOnLineDir column
 * @method WebuseQuery groupByDownloaddir() Group by the DownloadDir column
 * @method WebuseQuery groupByEcologydir() Group by the EcologyDir column
 * @method WebuseQuery groupByPhysiologydir() Group by the PhysiologyDir column
 * @method WebuseQuery groupByGeneticsdir() Group by the GeneticsDir column
 * @method WebuseQuery groupByTs() Group by the TS column
 *
 * @method WebuseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WebuseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WebuseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Webuse findOne(PropelPDO $con = null) Return the first Webuse matching the query
 * @method Webuse findOneOrCreate(PropelPDO $con = null) Return the first Webuse matching the query, or a new Webuse object populated from the query conditions when no match is found
 *
 * @method Webuse findOneByPeriod(string $period) Return the first Webuse filtered by the period column
 * @method Webuse findOneByYear(int $Year) Return the first Webuse filtered by the Year column
 * @method Webuse findOneByMonth(int $Month) Return the first Webuse filtered by the Month column
 * @method Webuse findOneByHits(int $Hits) Return the first Webuse filtered by the Hits column
 * @method Webuse findOneByHitsnotviewed(int $HitsNotViewed) Return the first Webuse filtered by the HitsNotViewed column
 * @method Webuse findOneBySessions(int $Sessions) Return the first Webuse filtered by the Sessions column
 * @method Webuse findOneByUniqueusers(int $UniqueUsers) Return the first Webuse filtered by the UniqueUsers column
 * @method Webuse findOneByVisitsvisitors(double $VisitsVisitors) Return the first Webuse filtered by the VisitsVisitors column
 * @method Webuse findOneByPages(int $Pages) Return the first Webuse filtered by the Pages column
 * @method Webuse findOneByPagesvisit(double $PagesVisit) Return the first Webuse filtered by the PagesVisit column
 * @method Webuse findOneByReturnusers(int $ReturnUsers) Return the first Webuse filtered by the ReturnUsers column
 * @method Webuse findOneByPowerusers(int $PowerUsers) Return the first Webuse filtered by the PowerUsers column
 * @method Webuse findOneByBookmarksessions(int $BookMarkSessions) Return the first Webuse filtered by the BookMarkSessions column
 * @method Webuse findOneByBookmark(double $BookMark) Return the first Webuse filtered by the BookMark column
 * @method Webuse findOneByDuration(double $Duration) Return the first Webuse filtered by the Duration column
 * @method Webuse findOneByBandwidthOld(double $Bandwidth_old) Return the first Webuse filtered by the Bandwidth_old column
 * @method Webuse findOneByBandwidth(double $Bandwidth) Return the first Webuse filtered by the Bandwidth column
 * @method Webuse findOneByBwnotviewed(double $BWNotViewed) Return the first Webuse filtered by the BWNotViewed column
 * @method Webuse findOneByUsa(int $USA) Return the first Webuse filtered by the USA column
 * @method Webuse findOneByInternational(int $International) Return the first Webuse filtered by the International column
 * @method Webuse findOneByUnknown(int $Unknown) Return the first Webuse filtered by the Unknown column
 * @method Webuse findOneByCountries(int $Countries) Return the first Webuse filtered by the Countries column
 * @method Webuse findOneByDevcountries(int $DevCountries) Return the first Webuse filtered by the DevCountries column
 * @method Webuse findOneByDevcountsess(int $DevCountSess) Return the first Webuse filtered by the DevCountSess column
 * @method Webuse findOneByAcpcountries(int $ACPCountries) Return the first Webuse filtered by the ACPCountries column
 * @method Webuse findOneByAcpcountsess(int $ACPCountSess) Return the first Webuse filtered by the ACPCountSess column
 * @method Webuse findOneByOtheros(int $OtherOS) Return the first Webuse filtered by the OtherOS column
 * @method Webuse findOneByTopday(int $TopDay) Return the first Webuse filtered by the TopDay column
 * @method Webuse findOneByTopdaydate(string $TopDayDate) Return the first Webuse filtered by the TopDayDate column
 * @method Webuse findOneByDownloads(int $Downloads) Return the first Webuse filtered by the Downloads column
 * @method Webuse findOneBySummarydir(double $SummaryDir) Return the first Webuse filtered by the SummaryDir column
 * @method Webuse findOneByNomenclaturedir(double $NomenclatureDir) Return the first Webuse filtered by the NomenclatureDir column
 * @method Webuse findOneByComnamesdir(double $ComNamesDir) Return the first Webuse filtered by the ComNamesDir column
 * @method Webuse findOneByReferencesdir(double $ReferencesDir) Return the first Webuse filtered by the ReferencesDir column
 * @method Webuse findOneByPhotosdir(double $PhotosDir) Return the first Webuse filtered by the PhotosDir column
 * @method Webuse findOneByForumdir(double $ForumDir) Return the first Webuse filtered by the ForumDir column
 * @method Webuse findOneByTourdir(double $TourDir) Return the first Webuse filtered by the TourDir column
 * @method Webuse findOneByChatdir(double $ChatDir) Return the first Webuse filtered by the ChatDir column
 * @method Webuse findOneByPopdyndir(double $PopdynDir) Return the first Webuse filtered by the PopdynDir column
 * @method Webuse findOneByReproductiondir(double $ReproductionDir) Return the first Webuse filtered by the ReproductionDir column
 * @method Webuse findOneByTrophicdir(double $TrophicDir) Return the first Webuse filtered by the TrophicDir column
 * @method Webuse findOneByCountrydir(double $CountryDir) Return the first Webuse filtered by the CountryDir column
 * @method Webuse findOneByEschmeyerdir(double $EschmeyerDir) Return the first Webuse filtered by the EschmeyerDir column
 * @method Webuse findOneByFbbookdir(double $FBBookDir) Return the first Webuse filtered by the FBBookDir column
 * @method Webuse findOneByFishquizdir(double $FishQuizDir) Return the first Webuse filtered by the FishQuizDir column
 * @method Webuse findOneByMuseumdir(double $MuseumDir) Return the first Webuse filtered by the MuseumDir column
 * @method Webuse findOneByGlossarydir(double $GlossaryDir) Return the first Webuse filtered by the GlossaryDir column
 * @method Webuse findOneByMapdir(double $MapDir) Return the first Webuse filtered by the MapDir column
 * @method Webuse findOneByIdentification(double $Identification) Return the first Webuse filtered by the Identification column
 * @method Webuse findOneByDateentered(string $DateEntered) Return the first Webuse filtered by the DateEntered column
 * @method Webuse findOneByLarvalbasedir(double $LarvalBaseDir) Return the first Webuse filtered by the LarvalBaseDir column
 * @method Webuse findOneByDiseasedir(double $DiseaseDir) Return the first Webuse filtered by the DiseaseDir column
 * @method Webuse findOneByToolsdir(double $ToolsDir) Return the first Webuse filtered by the ToolsDir column
 * @method Webuse findOneByIdentificationdir(double $IdentificationDir) Return the first Webuse filtered by the IdentificationDir column
 * @method Webuse findOneByKeysdir(double $KeysDir) Return the first Webuse filtered by the KeysDir column
 * @method Webuse findOneByFieldguidesdir(double $FieldGuidesDir) Return the first Webuse filtered by the FieldGuidesDir column
 * @method Webuse findOneByFishonlinedir(double $FishOnLineDir) Return the first Webuse filtered by the FishOnLineDir column
 * @method Webuse findOneByDownloaddir(double $DownloadDir) Return the first Webuse filtered by the DownloadDir column
 * @method Webuse findOneByEcologydir(double $EcologyDir) Return the first Webuse filtered by the EcologyDir column
 * @method Webuse findOneByPhysiologydir(double $PhysiologyDir) Return the first Webuse filtered by the PhysiologyDir column
 * @method Webuse findOneByGeneticsdir(double $GeneticsDir) Return the first Webuse filtered by the GeneticsDir column
 * @method Webuse findOneByTs(string $TS) Return the first Webuse filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Webuse objects filtered by the autoctr column
 * @method array findByPeriod(string $period) Return Webuse objects filtered by the period column
 * @method array findByYear(int $Year) Return Webuse objects filtered by the Year column
 * @method array findByMonth(int $Month) Return Webuse objects filtered by the Month column
 * @method array findByHits(int $Hits) Return Webuse objects filtered by the Hits column
 * @method array findByHitsnotviewed(int $HitsNotViewed) Return Webuse objects filtered by the HitsNotViewed column
 * @method array findBySessions(int $Sessions) Return Webuse objects filtered by the Sessions column
 * @method array findByUniqueusers(int $UniqueUsers) Return Webuse objects filtered by the UniqueUsers column
 * @method array findByVisitsvisitors(double $VisitsVisitors) Return Webuse objects filtered by the VisitsVisitors column
 * @method array findByPages(int $Pages) Return Webuse objects filtered by the Pages column
 * @method array findByPagesvisit(double $PagesVisit) Return Webuse objects filtered by the PagesVisit column
 * @method array findByReturnusers(int $ReturnUsers) Return Webuse objects filtered by the ReturnUsers column
 * @method array findByPowerusers(int $PowerUsers) Return Webuse objects filtered by the PowerUsers column
 * @method array findByBookmarksessions(int $BookMarkSessions) Return Webuse objects filtered by the BookMarkSessions column
 * @method array findByBookmark(double $BookMark) Return Webuse objects filtered by the BookMark column
 * @method array findByDuration(double $Duration) Return Webuse objects filtered by the Duration column
 * @method array findByBandwidthOld(double $Bandwidth_old) Return Webuse objects filtered by the Bandwidth_old column
 * @method array findByBandwidth(double $Bandwidth) Return Webuse objects filtered by the Bandwidth column
 * @method array findByBwnotviewed(double $BWNotViewed) Return Webuse objects filtered by the BWNotViewed column
 * @method array findByUsa(int $USA) Return Webuse objects filtered by the USA column
 * @method array findByInternational(int $International) Return Webuse objects filtered by the International column
 * @method array findByUnknown(int $Unknown) Return Webuse objects filtered by the Unknown column
 * @method array findByCountries(int $Countries) Return Webuse objects filtered by the Countries column
 * @method array findByDevcountries(int $DevCountries) Return Webuse objects filtered by the DevCountries column
 * @method array findByDevcountsess(int $DevCountSess) Return Webuse objects filtered by the DevCountSess column
 * @method array findByAcpcountries(int $ACPCountries) Return Webuse objects filtered by the ACPCountries column
 * @method array findByAcpcountsess(int $ACPCountSess) Return Webuse objects filtered by the ACPCountSess column
 * @method array findByOtheros(int $OtherOS) Return Webuse objects filtered by the OtherOS column
 * @method array findByTopday(int $TopDay) Return Webuse objects filtered by the TopDay column
 * @method array findByTopdaydate(string $TopDayDate) Return Webuse objects filtered by the TopDayDate column
 * @method array findByDownloads(int $Downloads) Return Webuse objects filtered by the Downloads column
 * @method array findBySummarydir(double $SummaryDir) Return Webuse objects filtered by the SummaryDir column
 * @method array findByNomenclaturedir(double $NomenclatureDir) Return Webuse objects filtered by the NomenclatureDir column
 * @method array findByComnamesdir(double $ComNamesDir) Return Webuse objects filtered by the ComNamesDir column
 * @method array findByReferencesdir(double $ReferencesDir) Return Webuse objects filtered by the ReferencesDir column
 * @method array findByPhotosdir(double $PhotosDir) Return Webuse objects filtered by the PhotosDir column
 * @method array findByForumdir(double $ForumDir) Return Webuse objects filtered by the ForumDir column
 * @method array findByTourdir(double $TourDir) Return Webuse objects filtered by the TourDir column
 * @method array findByChatdir(double $ChatDir) Return Webuse objects filtered by the ChatDir column
 * @method array findByPopdyndir(double $PopdynDir) Return Webuse objects filtered by the PopdynDir column
 * @method array findByReproductiondir(double $ReproductionDir) Return Webuse objects filtered by the ReproductionDir column
 * @method array findByTrophicdir(double $TrophicDir) Return Webuse objects filtered by the TrophicDir column
 * @method array findByCountrydir(double $CountryDir) Return Webuse objects filtered by the CountryDir column
 * @method array findByEschmeyerdir(double $EschmeyerDir) Return Webuse objects filtered by the EschmeyerDir column
 * @method array findByFbbookdir(double $FBBookDir) Return Webuse objects filtered by the FBBookDir column
 * @method array findByFishquizdir(double $FishQuizDir) Return Webuse objects filtered by the FishQuizDir column
 * @method array findByMuseumdir(double $MuseumDir) Return Webuse objects filtered by the MuseumDir column
 * @method array findByGlossarydir(double $GlossaryDir) Return Webuse objects filtered by the GlossaryDir column
 * @method array findByMapdir(double $MapDir) Return Webuse objects filtered by the MapDir column
 * @method array findByIdentification(double $Identification) Return Webuse objects filtered by the Identification column
 * @method array findByDateentered(string $DateEntered) Return Webuse objects filtered by the DateEntered column
 * @method array findByLarvalbasedir(double $LarvalBaseDir) Return Webuse objects filtered by the LarvalBaseDir column
 * @method array findByDiseasedir(double $DiseaseDir) Return Webuse objects filtered by the DiseaseDir column
 * @method array findByToolsdir(double $ToolsDir) Return Webuse objects filtered by the ToolsDir column
 * @method array findByIdentificationdir(double $IdentificationDir) Return Webuse objects filtered by the IdentificationDir column
 * @method array findByKeysdir(double $KeysDir) Return Webuse objects filtered by the KeysDir column
 * @method array findByFieldguidesdir(double $FieldGuidesDir) Return Webuse objects filtered by the FieldGuidesDir column
 * @method array findByFishonlinedir(double $FishOnLineDir) Return Webuse objects filtered by the FishOnLineDir column
 * @method array findByDownloaddir(double $DownloadDir) Return Webuse objects filtered by the DownloadDir column
 * @method array findByEcologydir(double $EcologyDir) Return Webuse objects filtered by the EcologyDir column
 * @method array findByPhysiologydir(double $PhysiologyDir) Return Webuse objects filtered by the PhysiologyDir column
 * @method array findByGeneticsdir(double $GeneticsDir) Return Webuse objects filtered by the GeneticsDir column
 * @method array findByTs(string $TS) Return Webuse objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWebuseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWebuseQuery object.
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
            $modelName = 'Webuse';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WebuseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WebuseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WebuseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WebuseQuery) {
            return $criteria;
        }
        $query = new WebuseQuery(null, null, $modelAlias);

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
     * @return   Webuse|Webuse[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WebusePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Webuse A model object, or null if the key is not found
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
     * @return                 Webuse A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `period`, `Year`, `Month`, `Hits`, `HitsNotViewed`, `Sessions`, `UniqueUsers`, `VisitsVisitors`, `Pages`, `PagesVisit`, `ReturnUsers`, `PowerUsers`, `BookMarkSessions`, `BookMark`, `Duration`, `Bandwidth_old`, `Bandwidth`, `BWNotViewed`, `USA`, `International`, `Unknown`, `Countries`, `DevCountries`, `DevCountSess`, `ACPCountries`, `ACPCountSess`, `OtherOS`, `TopDay`, `TopDayDate`, `Downloads`, `SummaryDir`, `NomenclatureDir`, `ComNamesDir`, `ReferencesDir`, `PhotosDir`, `ForumDir`, `TourDir`, `ChatDir`, `PopdynDir`, `ReproductionDir`, `TrophicDir`, `CountryDir`, `EschmeyerDir`, `FBBookDir`, `FishQuizDir`, `MuseumDir`, `GlossaryDir`, `MapDir`, `Identification`, `DateEntered`, `LarvalBaseDir`, `DiseaseDir`, `ToolsDir`, `IdentificationDir`, `KeysDir`, `FieldGuidesDir`, `FishOnLineDir`, `DownloadDir`, `EcologyDir`, `PhysiologyDir`, `GeneticsDir`, `TS` FROM `webuse` WHERE `autoctr` = :p0';
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
            $obj = new Webuse();
            $obj->hydrate($row);
            WebusePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Webuse|Webuse[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Webuse[]|mixed the list of results, formatted by the current formatter
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
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WebusePeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WebusePeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(WebusePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(WebusePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('2011-03-14'); // WHERE period = '2011-03-14'
     * $query->filterByPeriod('now'); // WHERE period = '2011-03-14'
     * $query->filterByPeriod(array('max' => 'yesterday')); // WHERE period < '2011-03-13'
     * </code>
     *
     * @param     mixed $period The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (is_array($period)) {
            $useMinMax = false;
            if (isset($period['min'])) {
                $this->addUsingAlias(WebusePeer::PERIOD, $period['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($period['max'])) {
                $this->addUsingAlias(WebusePeer::PERIOD, $period['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::PERIOD, $period, $comparison);
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
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(WebusePeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(WebusePeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth(1234); // WHERE Month = 1234
     * $query->filterByMonth(array(12, 34)); // WHERE Month IN (12, 34)
     * $query->filterByMonth(array('min' => 12)); // WHERE Month >= 12
     * $query->filterByMonth(array('max' => 12)); // WHERE Month <= 12
     * </code>
     *
     * @param     mixed $month The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(WebusePeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(WebusePeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the Hits column
     *
     * Example usage:
     * <code>
     * $query->filterByHits(1234); // WHERE Hits = 1234
     * $query->filterByHits(array(12, 34)); // WHERE Hits IN (12, 34)
     * $query->filterByHits(array('min' => 12)); // WHERE Hits >= 12
     * $query->filterByHits(array('max' => 12)); // WHERE Hits <= 12
     * </code>
     *
     * @param     mixed $hits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByHits($hits = null, $comparison = null)
    {
        if (is_array($hits)) {
            $useMinMax = false;
            if (isset($hits['min'])) {
                $this->addUsingAlias(WebusePeer::HITS, $hits['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hits['max'])) {
                $this->addUsingAlias(WebusePeer::HITS, $hits['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::HITS, $hits, $comparison);
    }

    /**
     * Filter the query on the HitsNotViewed column
     *
     * Example usage:
     * <code>
     * $query->filterByHitsnotviewed(1234); // WHERE HitsNotViewed = 1234
     * $query->filterByHitsnotviewed(array(12, 34)); // WHERE HitsNotViewed IN (12, 34)
     * $query->filterByHitsnotviewed(array('min' => 12)); // WHERE HitsNotViewed >= 12
     * $query->filterByHitsnotviewed(array('max' => 12)); // WHERE HitsNotViewed <= 12
     * </code>
     *
     * @param     mixed $hitsnotviewed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByHitsnotviewed($hitsnotviewed = null, $comparison = null)
    {
        if (is_array($hitsnotviewed)) {
            $useMinMax = false;
            if (isset($hitsnotviewed['min'])) {
                $this->addUsingAlias(WebusePeer::HITSNOTVIEWED, $hitsnotviewed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hitsnotviewed['max'])) {
                $this->addUsingAlias(WebusePeer::HITSNOTVIEWED, $hitsnotviewed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::HITSNOTVIEWED, $hitsnotviewed, $comparison);
    }

    /**
     * Filter the query on the Sessions column
     *
     * Example usage:
     * <code>
     * $query->filterBySessions(1234); // WHERE Sessions = 1234
     * $query->filterBySessions(array(12, 34)); // WHERE Sessions IN (12, 34)
     * $query->filterBySessions(array('min' => 12)); // WHERE Sessions >= 12
     * $query->filterBySessions(array('max' => 12)); // WHERE Sessions <= 12
     * </code>
     *
     * @param     mixed $sessions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterBySessions($sessions = null, $comparison = null)
    {
        if (is_array($sessions)) {
            $useMinMax = false;
            if (isset($sessions['min'])) {
                $this->addUsingAlias(WebusePeer::SESSIONS, $sessions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sessions['max'])) {
                $this->addUsingAlias(WebusePeer::SESSIONS, $sessions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::SESSIONS, $sessions, $comparison);
    }

    /**
     * Filter the query on the UniqueUsers column
     *
     * Example usage:
     * <code>
     * $query->filterByUniqueusers(1234); // WHERE UniqueUsers = 1234
     * $query->filterByUniqueusers(array(12, 34)); // WHERE UniqueUsers IN (12, 34)
     * $query->filterByUniqueusers(array('min' => 12)); // WHERE UniqueUsers >= 12
     * $query->filterByUniqueusers(array('max' => 12)); // WHERE UniqueUsers <= 12
     * </code>
     *
     * @param     mixed $uniqueusers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByUniqueusers($uniqueusers = null, $comparison = null)
    {
        if (is_array($uniqueusers)) {
            $useMinMax = false;
            if (isset($uniqueusers['min'])) {
                $this->addUsingAlias(WebusePeer::UNIQUEUSERS, $uniqueusers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniqueusers['max'])) {
                $this->addUsingAlias(WebusePeer::UNIQUEUSERS, $uniqueusers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::UNIQUEUSERS, $uniqueusers, $comparison);
    }

    /**
     * Filter the query on the VisitsVisitors column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitsvisitors(1234); // WHERE VisitsVisitors = 1234
     * $query->filterByVisitsvisitors(array(12, 34)); // WHERE VisitsVisitors IN (12, 34)
     * $query->filterByVisitsvisitors(array('min' => 12)); // WHERE VisitsVisitors >= 12
     * $query->filterByVisitsvisitors(array('max' => 12)); // WHERE VisitsVisitors <= 12
     * </code>
     *
     * @param     mixed $visitsvisitors The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByVisitsvisitors($visitsvisitors = null, $comparison = null)
    {
        if (is_array($visitsvisitors)) {
            $useMinMax = false;
            if (isset($visitsvisitors['min'])) {
                $this->addUsingAlias(WebusePeer::VISITSVISITORS, $visitsvisitors['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitsvisitors['max'])) {
                $this->addUsingAlias(WebusePeer::VISITSVISITORS, $visitsvisitors['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::VISITSVISITORS, $visitsvisitors, $comparison);
    }

    /**
     * Filter the query on the Pages column
     *
     * Example usage:
     * <code>
     * $query->filterByPages(1234); // WHERE Pages = 1234
     * $query->filterByPages(array(12, 34)); // WHERE Pages IN (12, 34)
     * $query->filterByPages(array('min' => 12)); // WHERE Pages >= 12
     * $query->filterByPages(array('max' => 12)); // WHERE Pages <= 12
     * </code>
     *
     * @param     mixed $pages The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPages($pages = null, $comparison = null)
    {
        if (is_array($pages)) {
            $useMinMax = false;
            if (isset($pages['min'])) {
                $this->addUsingAlias(WebusePeer::PAGES, $pages['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pages['max'])) {
                $this->addUsingAlias(WebusePeer::PAGES, $pages['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::PAGES, $pages, $comparison);
    }

    /**
     * Filter the query on the PagesVisit column
     *
     * Example usage:
     * <code>
     * $query->filterByPagesvisit(1234); // WHERE PagesVisit = 1234
     * $query->filterByPagesvisit(array(12, 34)); // WHERE PagesVisit IN (12, 34)
     * $query->filterByPagesvisit(array('min' => 12)); // WHERE PagesVisit >= 12
     * $query->filterByPagesvisit(array('max' => 12)); // WHERE PagesVisit <= 12
     * </code>
     *
     * @param     mixed $pagesvisit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPagesvisit($pagesvisit = null, $comparison = null)
    {
        if (is_array($pagesvisit)) {
            $useMinMax = false;
            if (isset($pagesvisit['min'])) {
                $this->addUsingAlias(WebusePeer::PAGESVISIT, $pagesvisit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagesvisit['max'])) {
                $this->addUsingAlias(WebusePeer::PAGESVISIT, $pagesvisit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::PAGESVISIT, $pagesvisit, $comparison);
    }

    /**
     * Filter the query on the ReturnUsers column
     *
     * Example usage:
     * <code>
     * $query->filterByReturnusers(1234); // WHERE ReturnUsers = 1234
     * $query->filterByReturnusers(array(12, 34)); // WHERE ReturnUsers IN (12, 34)
     * $query->filterByReturnusers(array('min' => 12)); // WHERE ReturnUsers >= 12
     * $query->filterByReturnusers(array('max' => 12)); // WHERE ReturnUsers <= 12
     * </code>
     *
     * @param     mixed $returnusers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByReturnusers($returnusers = null, $comparison = null)
    {
        if (is_array($returnusers)) {
            $useMinMax = false;
            if (isset($returnusers['min'])) {
                $this->addUsingAlias(WebusePeer::RETURNUSERS, $returnusers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($returnusers['max'])) {
                $this->addUsingAlias(WebusePeer::RETURNUSERS, $returnusers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::RETURNUSERS, $returnusers, $comparison);
    }

    /**
     * Filter the query on the PowerUsers column
     *
     * Example usage:
     * <code>
     * $query->filterByPowerusers(1234); // WHERE PowerUsers = 1234
     * $query->filterByPowerusers(array(12, 34)); // WHERE PowerUsers IN (12, 34)
     * $query->filterByPowerusers(array('min' => 12)); // WHERE PowerUsers >= 12
     * $query->filterByPowerusers(array('max' => 12)); // WHERE PowerUsers <= 12
     * </code>
     *
     * @param     mixed $powerusers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPowerusers($powerusers = null, $comparison = null)
    {
        if (is_array($powerusers)) {
            $useMinMax = false;
            if (isset($powerusers['min'])) {
                $this->addUsingAlias(WebusePeer::POWERUSERS, $powerusers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($powerusers['max'])) {
                $this->addUsingAlias(WebusePeer::POWERUSERS, $powerusers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::POWERUSERS, $powerusers, $comparison);
    }

    /**
     * Filter the query on the BookMarkSessions column
     *
     * Example usage:
     * <code>
     * $query->filterByBookmarksessions(1234); // WHERE BookMarkSessions = 1234
     * $query->filterByBookmarksessions(array(12, 34)); // WHERE BookMarkSessions IN (12, 34)
     * $query->filterByBookmarksessions(array('min' => 12)); // WHERE BookMarkSessions >= 12
     * $query->filterByBookmarksessions(array('max' => 12)); // WHERE BookMarkSessions <= 12
     * </code>
     *
     * @param     mixed $bookmarksessions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByBookmarksessions($bookmarksessions = null, $comparison = null)
    {
        if (is_array($bookmarksessions)) {
            $useMinMax = false;
            if (isset($bookmarksessions['min'])) {
                $this->addUsingAlias(WebusePeer::BOOKMARKSESSIONS, $bookmarksessions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bookmarksessions['max'])) {
                $this->addUsingAlias(WebusePeer::BOOKMARKSESSIONS, $bookmarksessions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::BOOKMARKSESSIONS, $bookmarksessions, $comparison);
    }

    /**
     * Filter the query on the BookMark column
     *
     * Example usage:
     * <code>
     * $query->filterByBookmark(1234); // WHERE BookMark = 1234
     * $query->filterByBookmark(array(12, 34)); // WHERE BookMark IN (12, 34)
     * $query->filterByBookmark(array('min' => 12)); // WHERE BookMark >= 12
     * $query->filterByBookmark(array('max' => 12)); // WHERE BookMark <= 12
     * </code>
     *
     * @param     mixed $bookmark The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByBookmark($bookmark = null, $comparison = null)
    {
        if (is_array($bookmark)) {
            $useMinMax = false;
            if (isset($bookmark['min'])) {
                $this->addUsingAlias(WebusePeer::BOOKMARK, $bookmark['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bookmark['max'])) {
                $this->addUsingAlias(WebusePeer::BOOKMARK, $bookmark['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::BOOKMARK, $bookmark, $comparison);
    }

    /**
     * Filter the query on the Duration column
     *
     * Example usage:
     * <code>
     * $query->filterByDuration(1234); // WHERE Duration = 1234
     * $query->filterByDuration(array(12, 34)); // WHERE Duration IN (12, 34)
     * $query->filterByDuration(array('min' => 12)); // WHERE Duration >= 12
     * $query->filterByDuration(array('max' => 12)); // WHERE Duration <= 12
     * </code>
     *
     * @param     mixed $duration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDuration($duration = null, $comparison = null)
    {
        if (is_array($duration)) {
            $useMinMax = false;
            if (isset($duration['min'])) {
                $this->addUsingAlias(WebusePeer::DURATION, $duration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duration['max'])) {
                $this->addUsingAlias(WebusePeer::DURATION, $duration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DURATION, $duration, $comparison);
    }

    /**
     * Filter the query on the Bandwidth_old column
     *
     * Example usage:
     * <code>
     * $query->filterByBandwidthOld(1234); // WHERE Bandwidth_old = 1234
     * $query->filterByBandwidthOld(array(12, 34)); // WHERE Bandwidth_old IN (12, 34)
     * $query->filterByBandwidthOld(array('min' => 12)); // WHERE Bandwidth_old >= 12
     * $query->filterByBandwidthOld(array('max' => 12)); // WHERE Bandwidth_old <= 12
     * </code>
     *
     * @param     mixed $bandwidthOld The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByBandwidthOld($bandwidthOld = null, $comparison = null)
    {
        if (is_array($bandwidthOld)) {
            $useMinMax = false;
            if (isset($bandwidthOld['min'])) {
                $this->addUsingAlias(WebusePeer::BANDWIDTH_OLD, $bandwidthOld['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bandwidthOld['max'])) {
                $this->addUsingAlias(WebusePeer::BANDWIDTH_OLD, $bandwidthOld['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::BANDWIDTH_OLD, $bandwidthOld, $comparison);
    }

    /**
     * Filter the query on the Bandwidth column
     *
     * Example usage:
     * <code>
     * $query->filterByBandwidth(1234); // WHERE Bandwidth = 1234
     * $query->filterByBandwidth(array(12, 34)); // WHERE Bandwidth IN (12, 34)
     * $query->filterByBandwidth(array('min' => 12)); // WHERE Bandwidth >= 12
     * $query->filterByBandwidth(array('max' => 12)); // WHERE Bandwidth <= 12
     * </code>
     *
     * @param     mixed $bandwidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByBandwidth($bandwidth = null, $comparison = null)
    {
        if (is_array($bandwidth)) {
            $useMinMax = false;
            if (isset($bandwidth['min'])) {
                $this->addUsingAlias(WebusePeer::BANDWIDTH, $bandwidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bandwidth['max'])) {
                $this->addUsingAlias(WebusePeer::BANDWIDTH, $bandwidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::BANDWIDTH, $bandwidth, $comparison);
    }

    /**
     * Filter the query on the BWNotViewed column
     *
     * Example usage:
     * <code>
     * $query->filterByBwnotviewed(1234); // WHERE BWNotViewed = 1234
     * $query->filterByBwnotviewed(array(12, 34)); // WHERE BWNotViewed IN (12, 34)
     * $query->filterByBwnotviewed(array('min' => 12)); // WHERE BWNotViewed >= 12
     * $query->filterByBwnotviewed(array('max' => 12)); // WHERE BWNotViewed <= 12
     * </code>
     *
     * @param     mixed $bwnotviewed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByBwnotviewed($bwnotviewed = null, $comparison = null)
    {
        if (is_array($bwnotviewed)) {
            $useMinMax = false;
            if (isset($bwnotviewed['min'])) {
                $this->addUsingAlias(WebusePeer::BWNOTVIEWED, $bwnotviewed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bwnotviewed['max'])) {
                $this->addUsingAlias(WebusePeer::BWNOTVIEWED, $bwnotviewed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::BWNOTVIEWED, $bwnotviewed, $comparison);
    }

    /**
     * Filter the query on the USA column
     *
     * Example usage:
     * <code>
     * $query->filterByUsa(1234); // WHERE USA = 1234
     * $query->filterByUsa(array(12, 34)); // WHERE USA IN (12, 34)
     * $query->filterByUsa(array('min' => 12)); // WHERE USA >= 12
     * $query->filterByUsa(array('max' => 12)); // WHERE USA <= 12
     * </code>
     *
     * @param     mixed $usa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByUsa($usa = null, $comparison = null)
    {
        if (is_array($usa)) {
            $useMinMax = false;
            if (isset($usa['min'])) {
                $this->addUsingAlias(WebusePeer::USA, $usa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usa['max'])) {
                $this->addUsingAlias(WebusePeer::USA, $usa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::USA, $usa, $comparison);
    }

    /**
     * Filter the query on the International column
     *
     * Example usage:
     * <code>
     * $query->filterByInternational(1234); // WHERE International = 1234
     * $query->filterByInternational(array(12, 34)); // WHERE International IN (12, 34)
     * $query->filterByInternational(array('min' => 12)); // WHERE International >= 12
     * $query->filterByInternational(array('max' => 12)); // WHERE International <= 12
     * </code>
     *
     * @param     mixed $international The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByInternational($international = null, $comparison = null)
    {
        if (is_array($international)) {
            $useMinMax = false;
            if (isset($international['min'])) {
                $this->addUsingAlias(WebusePeer::INTERNATIONAL, $international['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($international['max'])) {
                $this->addUsingAlias(WebusePeer::INTERNATIONAL, $international['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::INTERNATIONAL, $international, $comparison);
    }

    /**
     * Filter the query on the Unknown column
     *
     * Example usage:
     * <code>
     * $query->filterByUnknown(1234); // WHERE Unknown = 1234
     * $query->filterByUnknown(array(12, 34)); // WHERE Unknown IN (12, 34)
     * $query->filterByUnknown(array('min' => 12)); // WHERE Unknown >= 12
     * $query->filterByUnknown(array('max' => 12)); // WHERE Unknown <= 12
     * </code>
     *
     * @param     mixed $unknown The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByUnknown($unknown = null, $comparison = null)
    {
        if (is_array($unknown)) {
            $useMinMax = false;
            if (isset($unknown['min'])) {
                $this->addUsingAlias(WebusePeer::UNKNOWN, $unknown['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unknown['max'])) {
                $this->addUsingAlias(WebusePeer::UNKNOWN, $unknown['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::UNKNOWN, $unknown, $comparison);
    }

    /**
     * Filter the query on the Countries column
     *
     * Example usage:
     * <code>
     * $query->filterByCountries(1234); // WHERE Countries = 1234
     * $query->filterByCountries(array(12, 34)); // WHERE Countries IN (12, 34)
     * $query->filterByCountries(array('min' => 12)); // WHERE Countries >= 12
     * $query->filterByCountries(array('max' => 12)); // WHERE Countries <= 12
     * </code>
     *
     * @param     mixed $countries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByCountries($countries = null, $comparison = null)
    {
        if (is_array($countries)) {
            $useMinMax = false;
            if (isset($countries['min'])) {
                $this->addUsingAlias(WebusePeer::COUNTRIES, $countries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countries['max'])) {
                $this->addUsingAlias(WebusePeer::COUNTRIES, $countries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::COUNTRIES, $countries, $comparison);
    }

    /**
     * Filter the query on the DevCountries column
     *
     * Example usage:
     * <code>
     * $query->filterByDevcountries(1234); // WHERE DevCountries = 1234
     * $query->filterByDevcountries(array(12, 34)); // WHERE DevCountries IN (12, 34)
     * $query->filterByDevcountries(array('min' => 12)); // WHERE DevCountries >= 12
     * $query->filterByDevcountries(array('max' => 12)); // WHERE DevCountries <= 12
     * </code>
     *
     * @param     mixed $devcountries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDevcountries($devcountries = null, $comparison = null)
    {
        if (is_array($devcountries)) {
            $useMinMax = false;
            if (isset($devcountries['min'])) {
                $this->addUsingAlias(WebusePeer::DEVCOUNTRIES, $devcountries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devcountries['max'])) {
                $this->addUsingAlias(WebusePeer::DEVCOUNTRIES, $devcountries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DEVCOUNTRIES, $devcountries, $comparison);
    }

    /**
     * Filter the query on the DevCountSess column
     *
     * Example usage:
     * <code>
     * $query->filterByDevcountsess(1234); // WHERE DevCountSess = 1234
     * $query->filterByDevcountsess(array(12, 34)); // WHERE DevCountSess IN (12, 34)
     * $query->filterByDevcountsess(array('min' => 12)); // WHERE DevCountSess >= 12
     * $query->filterByDevcountsess(array('max' => 12)); // WHERE DevCountSess <= 12
     * </code>
     *
     * @param     mixed $devcountsess The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDevcountsess($devcountsess = null, $comparison = null)
    {
        if (is_array($devcountsess)) {
            $useMinMax = false;
            if (isset($devcountsess['min'])) {
                $this->addUsingAlias(WebusePeer::DEVCOUNTSESS, $devcountsess['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devcountsess['max'])) {
                $this->addUsingAlias(WebusePeer::DEVCOUNTSESS, $devcountsess['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DEVCOUNTSESS, $devcountsess, $comparison);
    }

    /**
     * Filter the query on the ACPCountries column
     *
     * Example usage:
     * <code>
     * $query->filterByAcpcountries(1234); // WHERE ACPCountries = 1234
     * $query->filterByAcpcountries(array(12, 34)); // WHERE ACPCountries IN (12, 34)
     * $query->filterByAcpcountries(array('min' => 12)); // WHERE ACPCountries >= 12
     * $query->filterByAcpcountries(array('max' => 12)); // WHERE ACPCountries <= 12
     * </code>
     *
     * @param     mixed $acpcountries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByAcpcountries($acpcountries = null, $comparison = null)
    {
        if (is_array($acpcountries)) {
            $useMinMax = false;
            if (isset($acpcountries['min'])) {
                $this->addUsingAlias(WebusePeer::ACPCOUNTRIES, $acpcountries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($acpcountries['max'])) {
                $this->addUsingAlias(WebusePeer::ACPCOUNTRIES, $acpcountries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::ACPCOUNTRIES, $acpcountries, $comparison);
    }

    /**
     * Filter the query on the ACPCountSess column
     *
     * Example usage:
     * <code>
     * $query->filterByAcpcountsess(1234); // WHERE ACPCountSess = 1234
     * $query->filterByAcpcountsess(array(12, 34)); // WHERE ACPCountSess IN (12, 34)
     * $query->filterByAcpcountsess(array('min' => 12)); // WHERE ACPCountSess >= 12
     * $query->filterByAcpcountsess(array('max' => 12)); // WHERE ACPCountSess <= 12
     * </code>
     *
     * @param     mixed $acpcountsess The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByAcpcountsess($acpcountsess = null, $comparison = null)
    {
        if (is_array($acpcountsess)) {
            $useMinMax = false;
            if (isset($acpcountsess['min'])) {
                $this->addUsingAlias(WebusePeer::ACPCOUNTSESS, $acpcountsess['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($acpcountsess['max'])) {
                $this->addUsingAlias(WebusePeer::ACPCOUNTSESS, $acpcountsess['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::ACPCOUNTSESS, $acpcountsess, $comparison);
    }

    /**
     * Filter the query on the OtherOS column
     *
     * Example usage:
     * <code>
     * $query->filterByOtheros(1234); // WHERE OtherOS = 1234
     * $query->filterByOtheros(array(12, 34)); // WHERE OtherOS IN (12, 34)
     * $query->filterByOtheros(array('min' => 12)); // WHERE OtherOS >= 12
     * $query->filterByOtheros(array('max' => 12)); // WHERE OtherOS <= 12
     * </code>
     *
     * @param     mixed $otheros The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByOtheros($otheros = null, $comparison = null)
    {
        if (is_array($otheros)) {
            $useMinMax = false;
            if (isset($otheros['min'])) {
                $this->addUsingAlias(WebusePeer::OTHEROS, $otheros['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otheros['max'])) {
                $this->addUsingAlias(WebusePeer::OTHEROS, $otheros['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::OTHEROS, $otheros, $comparison);
    }

    /**
     * Filter the query on the TopDay column
     *
     * Example usage:
     * <code>
     * $query->filterByTopday(1234); // WHERE TopDay = 1234
     * $query->filterByTopday(array(12, 34)); // WHERE TopDay IN (12, 34)
     * $query->filterByTopday(array('min' => 12)); // WHERE TopDay >= 12
     * $query->filterByTopday(array('max' => 12)); // WHERE TopDay <= 12
     * </code>
     *
     * @param     mixed $topday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByTopday($topday = null, $comparison = null)
    {
        if (is_array($topday)) {
            $useMinMax = false;
            if (isset($topday['min'])) {
                $this->addUsingAlias(WebusePeer::TOPDAY, $topday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topday['max'])) {
                $this->addUsingAlias(WebusePeer::TOPDAY, $topday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TOPDAY, $topday, $comparison);
    }

    /**
     * Filter the query on the TopDayDate column
     *
     * Example usage:
     * <code>
     * $query->filterByTopdaydate('2011-03-14'); // WHERE TopDayDate = '2011-03-14'
     * $query->filterByTopdaydate('now'); // WHERE TopDayDate = '2011-03-14'
     * $query->filterByTopdaydate(array('max' => 'yesterday')); // WHERE TopDayDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $topdaydate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByTopdaydate($topdaydate = null, $comparison = null)
    {
        if (is_array($topdaydate)) {
            $useMinMax = false;
            if (isset($topdaydate['min'])) {
                $this->addUsingAlias(WebusePeer::TOPDAYDATE, $topdaydate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topdaydate['max'])) {
                $this->addUsingAlias(WebusePeer::TOPDAYDATE, $topdaydate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TOPDAYDATE, $topdaydate, $comparison);
    }

    /**
     * Filter the query on the Downloads column
     *
     * Example usage:
     * <code>
     * $query->filterByDownloads(1234); // WHERE Downloads = 1234
     * $query->filterByDownloads(array(12, 34)); // WHERE Downloads IN (12, 34)
     * $query->filterByDownloads(array('min' => 12)); // WHERE Downloads >= 12
     * $query->filterByDownloads(array('max' => 12)); // WHERE Downloads <= 12
     * </code>
     *
     * @param     mixed $downloads The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDownloads($downloads = null, $comparison = null)
    {
        if (is_array($downloads)) {
            $useMinMax = false;
            if (isset($downloads['min'])) {
                $this->addUsingAlias(WebusePeer::DOWNLOADS, $downloads['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($downloads['max'])) {
                $this->addUsingAlias(WebusePeer::DOWNLOADS, $downloads['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DOWNLOADS, $downloads, $comparison);
    }

    /**
     * Filter the query on the SummaryDir column
     *
     * Example usage:
     * <code>
     * $query->filterBySummarydir(1234); // WHERE SummaryDir = 1234
     * $query->filterBySummarydir(array(12, 34)); // WHERE SummaryDir IN (12, 34)
     * $query->filterBySummarydir(array('min' => 12)); // WHERE SummaryDir >= 12
     * $query->filterBySummarydir(array('max' => 12)); // WHERE SummaryDir <= 12
     * </code>
     *
     * @param     mixed $summarydir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterBySummarydir($summarydir = null, $comparison = null)
    {
        if (is_array($summarydir)) {
            $useMinMax = false;
            if (isset($summarydir['min'])) {
                $this->addUsingAlias(WebusePeer::SUMMARYDIR, $summarydir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summarydir['max'])) {
                $this->addUsingAlias(WebusePeer::SUMMARYDIR, $summarydir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::SUMMARYDIR, $summarydir, $comparison);
    }

    /**
     * Filter the query on the NomenclatureDir column
     *
     * Example usage:
     * <code>
     * $query->filterByNomenclaturedir(1234); // WHERE NomenclatureDir = 1234
     * $query->filterByNomenclaturedir(array(12, 34)); // WHERE NomenclatureDir IN (12, 34)
     * $query->filterByNomenclaturedir(array('min' => 12)); // WHERE NomenclatureDir >= 12
     * $query->filterByNomenclaturedir(array('max' => 12)); // WHERE NomenclatureDir <= 12
     * </code>
     *
     * @param     mixed $nomenclaturedir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByNomenclaturedir($nomenclaturedir = null, $comparison = null)
    {
        if (is_array($nomenclaturedir)) {
            $useMinMax = false;
            if (isset($nomenclaturedir['min'])) {
                $this->addUsingAlias(WebusePeer::NOMENCLATUREDIR, $nomenclaturedir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nomenclaturedir['max'])) {
                $this->addUsingAlias(WebusePeer::NOMENCLATUREDIR, $nomenclaturedir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::NOMENCLATUREDIR, $nomenclaturedir, $comparison);
    }

    /**
     * Filter the query on the ComNamesDir column
     *
     * Example usage:
     * <code>
     * $query->filterByComnamesdir(1234); // WHERE ComNamesDir = 1234
     * $query->filterByComnamesdir(array(12, 34)); // WHERE ComNamesDir IN (12, 34)
     * $query->filterByComnamesdir(array('min' => 12)); // WHERE ComNamesDir >= 12
     * $query->filterByComnamesdir(array('max' => 12)); // WHERE ComNamesDir <= 12
     * </code>
     *
     * @param     mixed $comnamesdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByComnamesdir($comnamesdir = null, $comparison = null)
    {
        if (is_array($comnamesdir)) {
            $useMinMax = false;
            if (isset($comnamesdir['min'])) {
                $this->addUsingAlias(WebusePeer::COMNAMESDIR, $comnamesdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comnamesdir['max'])) {
                $this->addUsingAlias(WebusePeer::COMNAMESDIR, $comnamesdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::COMNAMESDIR, $comnamesdir, $comparison);
    }

    /**
     * Filter the query on the ReferencesDir column
     *
     * Example usage:
     * <code>
     * $query->filterByReferencesdir(1234); // WHERE ReferencesDir = 1234
     * $query->filterByReferencesdir(array(12, 34)); // WHERE ReferencesDir IN (12, 34)
     * $query->filterByReferencesdir(array('min' => 12)); // WHERE ReferencesDir >= 12
     * $query->filterByReferencesdir(array('max' => 12)); // WHERE ReferencesDir <= 12
     * </code>
     *
     * @param     mixed $referencesdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByReferencesdir($referencesdir = null, $comparison = null)
    {
        if (is_array($referencesdir)) {
            $useMinMax = false;
            if (isset($referencesdir['min'])) {
                $this->addUsingAlias(WebusePeer::REFERENCESDIR, $referencesdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referencesdir['max'])) {
                $this->addUsingAlias(WebusePeer::REFERENCESDIR, $referencesdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::REFERENCESDIR, $referencesdir, $comparison);
    }

    /**
     * Filter the query on the PhotosDir column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotosdir(1234); // WHERE PhotosDir = 1234
     * $query->filterByPhotosdir(array(12, 34)); // WHERE PhotosDir IN (12, 34)
     * $query->filterByPhotosdir(array('min' => 12)); // WHERE PhotosDir >= 12
     * $query->filterByPhotosdir(array('max' => 12)); // WHERE PhotosDir <= 12
     * </code>
     *
     * @param     mixed $photosdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPhotosdir($photosdir = null, $comparison = null)
    {
        if (is_array($photosdir)) {
            $useMinMax = false;
            if (isset($photosdir['min'])) {
                $this->addUsingAlias(WebusePeer::PHOTOSDIR, $photosdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($photosdir['max'])) {
                $this->addUsingAlias(WebusePeer::PHOTOSDIR, $photosdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::PHOTOSDIR, $photosdir, $comparison);
    }

    /**
     * Filter the query on the ForumDir column
     *
     * Example usage:
     * <code>
     * $query->filterByForumdir(1234); // WHERE ForumDir = 1234
     * $query->filterByForumdir(array(12, 34)); // WHERE ForumDir IN (12, 34)
     * $query->filterByForumdir(array('min' => 12)); // WHERE ForumDir >= 12
     * $query->filterByForumdir(array('max' => 12)); // WHERE ForumDir <= 12
     * </code>
     *
     * @param     mixed $forumdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByForumdir($forumdir = null, $comparison = null)
    {
        if (is_array($forumdir)) {
            $useMinMax = false;
            if (isset($forumdir['min'])) {
                $this->addUsingAlias(WebusePeer::FORUMDIR, $forumdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($forumdir['max'])) {
                $this->addUsingAlias(WebusePeer::FORUMDIR, $forumdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::FORUMDIR, $forumdir, $comparison);
    }

    /**
     * Filter the query on the TourDir column
     *
     * Example usage:
     * <code>
     * $query->filterByTourdir(1234); // WHERE TourDir = 1234
     * $query->filterByTourdir(array(12, 34)); // WHERE TourDir IN (12, 34)
     * $query->filterByTourdir(array('min' => 12)); // WHERE TourDir >= 12
     * $query->filterByTourdir(array('max' => 12)); // WHERE TourDir <= 12
     * </code>
     *
     * @param     mixed $tourdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByTourdir($tourdir = null, $comparison = null)
    {
        if (is_array($tourdir)) {
            $useMinMax = false;
            if (isset($tourdir['min'])) {
                $this->addUsingAlias(WebusePeer::TOURDIR, $tourdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tourdir['max'])) {
                $this->addUsingAlias(WebusePeer::TOURDIR, $tourdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TOURDIR, $tourdir, $comparison);
    }

    /**
     * Filter the query on the ChatDir column
     *
     * Example usage:
     * <code>
     * $query->filterByChatdir(1234); // WHERE ChatDir = 1234
     * $query->filterByChatdir(array(12, 34)); // WHERE ChatDir IN (12, 34)
     * $query->filterByChatdir(array('min' => 12)); // WHERE ChatDir >= 12
     * $query->filterByChatdir(array('max' => 12)); // WHERE ChatDir <= 12
     * </code>
     *
     * @param     mixed $chatdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByChatdir($chatdir = null, $comparison = null)
    {
        if (is_array($chatdir)) {
            $useMinMax = false;
            if (isset($chatdir['min'])) {
                $this->addUsingAlias(WebusePeer::CHATDIR, $chatdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chatdir['max'])) {
                $this->addUsingAlias(WebusePeer::CHATDIR, $chatdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::CHATDIR, $chatdir, $comparison);
    }

    /**
     * Filter the query on the PopdynDir column
     *
     * Example usage:
     * <code>
     * $query->filterByPopdyndir(1234); // WHERE PopdynDir = 1234
     * $query->filterByPopdyndir(array(12, 34)); // WHERE PopdynDir IN (12, 34)
     * $query->filterByPopdyndir(array('min' => 12)); // WHERE PopdynDir >= 12
     * $query->filterByPopdyndir(array('max' => 12)); // WHERE PopdynDir <= 12
     * </code>
     *
     * @param     mixed $popdyndir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPopdyndir($popdyndir = null, $comparison = null)
    {
        if (is_array($popdyndir)) {
            $useMinMax = false;
            if (isset($popdyndir['min'])) {
                $this->addUsingAlias(WebusePeer::POPDYNDIR, $popdyndir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popdyndir['max'])) {
                $this->addUsingAlias(WebusePeer::POPDYNDIR, $popdyndir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::POPDYNDIR, $popdyndir, $comparison);
    }

    /**
     * Filter the query on the ReproductionDir column
     *
     * Example usage:
     * <code>
     * $query->filterByReproductiondir(1234); // WHERE ReproductionDir = 1234
     * $query->filterByReproductiondir(array(12, 34)); // WHERE ReproductionDir IN (12, 34)
     * $query->filterByReproductiondir(array('min' => 12)); // WHERE ReproductionDir >= 12
     * $query->filterByReproductiondir(array('max' => 12)); // WHERE ReproductionDir <= 12
     * </code>
     *
     * @param     mixed $reproductiondir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByReproductiondir($reproductiondir = null, $comparison = null)
    {
        if (is_array($reproductiondir)) {
            $useMinMax = false;
            if (isset($reproductiondir['min'])) {
                $this->addUsingAlias(WebusePeer::REPRODUCTIONDIR, $reproductiondir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproductiondir['max'])) {
                $this->addUsingAlias(WebusePeer::REPRODUCTIONDIR, $reproductiondir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::REPRODUCTIONDIR, $reproductiondir, $comparison);
    }

    /**
     * Filter the query on the TrophicDir column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophicdir(1234); // WHERE TrophicDir = 1234
     * $query->filterByTrophicdir(array(12, 34)); // WHERE TrophicDir IN (12, 34)
     * $query->filterByTrophicdir(array('min' => 12)); // WHERE TrophicDir >= 12
     * $query->filterByTrophicdir(array('max' => 12)); // WHERE TrophicDir <= 12
     * </code>
     *
     * @param     mixed $trophicdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByTrophicdir($trophicdir = null, $comparison = null)
    {
        if (is_array($trophicdir)) {
            $useMinMax = false;
            if (isset($trophicdir['min'])) {
                $this->addUsingAlias(WebusePeer::TROPHICDIR, $trophicdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trophicdir['max'])) {
                $this->addUsingAlias(WebusePeer::TROPHICDIR, $trophicdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TROPHICDIR, $trophicdir, $comparison);
    }

    /**
     * Filter the query on the CountryDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrydir(1234); // WHERE CountryDir = 1234
     * $query->filterByCountrydir(array(12, 34)); // WHERE CountryDir IN (12, 34)
     * $query->filterByCountrydir(array('min' => 12)); // WHERE CountryDir >= 12
     * $query->filterByCountrydir(array('max' => 12)); // WHERE CountryDir <= 12
     * </code>
     *
     * @param     mixed $countrydir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByCountrydir($countrydir = null, $comparison = null)
    {
        if (is_array($countrydir)) {
            $useMinMax = false;
            if (isset($countrydir['min'])) {
                $this->addUsingAlias(WebusePeer::COUNTRYDIR, $countrydir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countrydir['max'])) {
                $this->addUsingAlias(WebusePeer::COUNTRYDIR, $countrydir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::COUNTRYDIR, $countrydir, $comparison);
    }

    /**
     * Filter the query on the EschmeyerDir column
     *
     * Example usage:
     * <code>
     * $query->filterByEschmeyerdir(1234); // WHERE EschmeyerDir = 1234
     * $query->filterByEschmeyerdir(array(12, 34)); // WHERE EschmeyerDir IN (12, 34)
     * $query->filterByEschmeyerdir(array('min' => 12)); // WHERE EschmeyerDir >= 12
     * $query->filterByEschmeyerdir(array('max' => 12)); // WHERE EschmeyerDir <= 12
     * </code>
     *
     * @param     mixed $eschmeyerdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByEschmeyerdir($eschmeyerdir = null, $comparison = null)
    {
        if (is_array($eschmeyerdir)) {
            $useMinMax = false;
            if (isset($eschmeyerdir['min'])) {
                $this->addUsingAlias(WebusePeer::ESCHMEYERDIR, $eschmeyerdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eschmeyerdir['max'])) {
                $this->addUsingAlias(WebusePeer::ESCHMEYERDIR, $eschmeyerdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::ESCHMEYERDIR, $eschmeyerdir, $comparison);
    }

    /**
     * Filter the query on the FBBookDir column
     *
     * Example usage:
     * <code>
     * $query->filterByFbbookdir(1234); // WHERE FBBookDir = 1234
     * $query->filterByFbbookdir(array(12, 34)); // WHERE FBBookDir IN (12, 34)
     * $query->filterByFbbookdir(array('min' => 12)); // WHERE FBBookDir >= 12
     * $query->filterByFbbookdir(array('max' => 12)); // WHERE FBBookDir <= 12
     * </code>
     *
     * @param     mixed $fbbookdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByFbbookdir($fbbookdir = null, $comparison = null)
    {
        if (is_array($fbbookdir)) {
            $useMinMax = false;
            if (isset($fbbookdir['min'])) {
                $this->addUsingAlias(WebusePeer::FBBOOKDIR, $fbbookdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fbbookdir['max'])) {
                $this->addUsingAlias(WebusePeer::FBBOOKDIR, $fbbookdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::FBBOOKDIR, $fbbookdir, $comparison);
    }

    /**
     * Filter the query on the FishQuizDir column
     *
     * Example usage:
     * <code>
     * $query->filterByFishquizdir(1234); // WHERE FishQuizDir = 1234
     * $query->filterByFishquizdir(array(12, 34)); // WHERE FishQuizDir IN (12, 34)
     * $query->filterByFishquizdir(array('min' => 12)); // WHERE FishQuizDir >= 12
     * $query->filterByFishquizdir(array('max' => 12)); // WHERE FishQuizDir <= 12
     * </code>
     *
     * @param     mixed $fishquizdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByFishquizdir($fishquizdir = null, $comparison = null)
    {
        if (is_array($fishquizdir)) {
            $useMinMax = false;
            if (isset($fishquizdir['min'])) {
                $this->addUsingAlias(WebusePeer::FISHQUIZDIR, $fishquizdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishquizdir['max'])) {
                $this->addUsingAlias(WebusePeer::FISHQUIZDIR, $fishquizdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::FISHQUIZDIR, $fishquizdir, $comparison);
    }

    /**
     * Filter the query on the MuseumDir column
     *
     * Example usage:
     * <code>
     * $query->filterByMuseumdir(1234); // WHERE MuseumDir = 1234
     * $query->filterByMuseumdir(array(12, 34)); // WHERE MuseumDir IN (12, 34)
     * $query->filterByMuseumdir(array('min' => 12)); // WHERE MuseumDir >= 12
     * $query->filterByMuseumdir(array('max' => 12)); // WHERE MuseumDir <= 12
     * </code>
     *
     * @param     mixed $museumdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByMuseumdir($museumdir = null, $comparison = null)
    {
        if (is_array($museumdir)) {
            $useMinMax = false;
            if (isset($museumdir['min'])) {
                $this->addUsingAlias(WebusePeer::MUSEUMDIR, $museumdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($museumdir['max'])) {
                $this->addUsingAlias(WebusePeer::MUSEUMDIR, $museumdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::MUSEUMDIR, $museumdir, $comparison);
    }

    /**
     * Filter the query on the GlossaryDir column
     *
     * Example usage:
     * <code>
     * $query->filterByGlossarydir(1234); // WHERE GlossaryDir = 1234
     * $query->filterByGlossarydir(array(12, 34)); // WHERE GlossaryDir IN (12, 34)
     * $query->filterByGlossarydir(array('min' => 12)); // WHERE GlossaryDir >= 12
     * $query->filterByGlossarydir(array('max' => 12)); // WHERE GlossaryDir <= 12
     * </code>
     *
     * @param     mixed $glossarydir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByGlossarydir($glossarydir = null, $comparison = null)
    {
        if (is_array($glossarydir)) {
            $useMinMax = false;
            if (isset($glossarydir['min'])) {
                $this->addUsingAlias(WebusePeer::GLOSSARYDIR, $glossarydir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($glossarydir['max'])) {
                $this->addUsingAlias(WebusePeer::GLOSSARYDIR, $glossarydir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::GLOSSARYDIR, $glossarydir, $comparison);
    }

    /**
     * Filter the query on the MapDir column
     *
     * Example usage:
     * <code>
     * $query->filterByMapdir(1234); // WHERE MapDir = 1234
     * $query->filterByMapdir(array(12, 34)); // WHERE MapDir IN (12, 34)
     * $query->filterByMapdir(array('min' => 12)); // WHERE MapDir >= 12
     * $query->filterByMapdir(array('max' => 12)); // WHERE MapDir <= 12
     * </code>
     *
     * @param     mixed $mapdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByMapdir($mapdir = null, $comparison = null)
    {
        if (is_array($mapdir)) {
            $useMinMax = false;
            if (isset($mapdir['min'])) {
                $this->addUsingAlias(WebusePeer::MAPDIR, $mapdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mapdir['max'])) {
                $this->addUsingAlias(WebusePeer::MAPDIR, $mapdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::MAPDIR, $mapdir, $comparison);
    }

    /**
     * Filter the query on the Identification column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentification(1234); // WHERE Identification = 1234
     * $query->filterByIdentification(array(12, 34)); // WHERE Identification IN (12, 34)
     * $query->filterByIdentification(array('min' => 12)); // WHERE Identification >= 12
     * $query->filterByIdentification(array('max' => 12)); // WHERE Identification <= 12
     * </code>
     *
     * @param     mixed $identification The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByIdentification($identification = null, $comparison = null)
    {
        if (is_array($identification)) {
            $useMinMax = false;
            if (isset($identification['min'])) {
                $this->addUsingAlias(WebusePeer::IDENTIFICATION, $identification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identification['max'])) {
                $this->addUsingAlias(WebusePeer::IDENTIFICATION, $identification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::IDENTIFICATION, $identification, $comparison);
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
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(WebusePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(WebusePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the LarvalBaseDir column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalbasedir(1234); // WHERE LarvalBaseDir = 1234
     * $query->filterByLarvalbasedir(array(12, 34)); // WHERE LarvalBaseDir IN (12, 34)
     * $query->filterByLarvalbasedir(array('min' => 12)); // WHERE LarvalBaseDir >= 12
     * $query->filterByLarvalbasedir(array('max' => 12)); // WHERE LarvalBaseDir <= 12
     * </code>
     *
     * @param     mixed $larvalbasedir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByLarvalbasedir($larvalbasedir = null, $comparison = null)
    {
        if (is_array($larvalbasedir)) {
            $useMinMax = false;
            if (isset($larvalbasedir['min'])) {
                $this->addUsingAlias(WebusePeer::LARVALBASEDIR, $larvalbasedir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalbasedir['max'])) {
                $this->addUsingAlias(WebusePeer::LARVALBASEDIR, $larvalbasedir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::LARVALBASEDIR, $larvalbasedir, $comparison);
    }

    /**
     * Filter the query on the DiseaseDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseasedir(1234); // WHERE DiseaseDir = 1234
     * $query->filterByDiseasedir(array(12, 34)); // WHERE DiseaseDir IN (12, 34)
     * $query->filterByDiseasedir(array('min' => 12)); // WHERE DiseaseDir >= 12
     * $query->filterByDiseasedir(array('max' => 12)); // WHERE DiseaseDir <= 12
     * </code>
     *
     * @param     mixed $diseasedir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDiseasedir($diseasedir = null, $comparison = null)
    {
        if (is_array($diseasedir)) {
            $useMinMax = false;
            if (isset($diseasedir['min'])) {
                $this->addUsingAlias(WebusePeer::DISEASEDIR, $diseasedir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseasedir['max'])) {
                $this->addUsingAlias(WebusePeer::DISEASEDIR, $diseasedir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DISEASEDIR, $diseasedir, $comparison);
    }

    /**
     * Filter the query on the ToolsDir column
     *
     * Example usage:
     * <code>
     * $query->filterByToolsdir(1234); // WHERE ToolsDir = 1234
     * $query->filterByToolsdir(array(12, 34)); // WHERE ToolsDir IN (12, 34)
     * $query->filterByToolsdir(array('min' => 12)); // WHERE ToolsDir >= 12
     * $query->filterByToolsdir(array('max' => 12)); // WHERE ToolsDir <= 12
     * </code>
     *
     * @param     mixed $toolsdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByToolsdir($toolsdir = null, $comparison = null)
    {
        if (is_array($toolsdir)) {
            $useMinMax = false;
            if (isset($toolsdir['min'])) {
                $this->addUsingAlias(WebusePeer::TOOLSDIR, $toolsdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toolsdir['max'])) {
                $this->addUsingAlias(WebusePeer::TOOLSDIR, $toolsdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TOOLSDIR, $toolsdir, $comparison);
    }

    /**
     * Filter the query on the IdentificationDir column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificationdir(1234); // WHERE IdentificationDir = 1234
     * $query->filterByIdentificationdir(array(12, 34)); // WHERE IdentificationDir IN (12, 34)
     * $query->filterByIdentificationdir(array('min' => 12)); // WHERE IdentificationDir >= 12
     * $query->filterByIdentificationdir(array('max' => 12)); // WHERE IdentificationDir <= 12
     * </code>
     *
     * @param     mixed $identificationdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByIdentificationdir($identificationdir = null, $comparison = null)
    {
        if (is_array($identificationdir)) {
            $useMinMax = false;
            if (isset($identificationdir['min'])) {
                $this->addUsingAlias(WebusePeer::IDENTIFICATIONDIR, $identificationdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identificationdir['max'])) {
                $this->addUsingAlias(WebusePeer::IDENTIFICATIONDIR, $identificationdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::IDENTIFICATIONDIR, $identificationdir, $comparison);
    }

    /**
     * Filter the query on the KeysDir column
     *
     * Example usage:
     * <code>
     * $query->filterByKeysdir(1234); // WHERE KeysDir = 1234
     * $query->filterByKeysdir(array(12, 34)); // WHERE KeysDir IN (12, 34)
     * $query->filterByKeysdir(array('min' => 12)); // WHERE KeysDir >= 12
     * $query->filterByKeysdir(array('max' => 12)); // WHERE KeysDir <= 12
     * </code>
     *
     * @param     mixed $keysdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByKeysdir($keysdir = null, $comparison = null)
    {
        if (is_array($keysdir)) {
            $useMinMax = false;
            if (isset($keysdir['min'])) {
                $this->addUsingAlias(WebusePeer::KEYSDIR, $keysdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($keysdir['max'])) {
                $this->addUsingAlias(WebusePeer::KEYSDIR, $keysdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::KEYSDIR, $keysdir, $comparison);
    }

    /**
     * Filter the query on the FieldGuidesDir column
     *
     * Example usage:
     * <code>
     * $query->filterByFieldguidesdir(1234); // WHERE FieldGuidesDir = 1234
     * $query->filterByFieldguidesdir(array(12, 34)); // WHERE FieldGuidesDir IN (12, 34)
     * $query->filterByFieldguidesdir(array('min' => 12)); // WHERE FieldGuidesDir >= 12
     * $query->filterByFieldguidesdir(array('max' => 12)); // WHERE FieldGuidesDir <= 12
     * </code>
     *
     * @param     mixed $fieldguidesdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByFieldguidesdir($fieldguidesdir = null, $comparison = null)
    {
        if (is_array($fieldguidesdir)) {
            $useMinMax = false;
            if (isset($fieldguidesdir['min'])) {
                $this->addUsingAlias(WebusePeer::FIELDGUIDESDIR, $fieldguidesdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fieldguidesdir['max'])) {
                $this->addUsingAlias(WebusePeer::FIELDGUIDESDIR, $fieldguidesdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::FIELDGUIDESDIR, $fieldguidesdir, $comparison);
    }

    /**
     * Filter the query on the FishOnLineDir column
     *
     * Example usage:
     * <code>
     * $query->filterByFishonlinedir(1234); // WHERE FishOnLineDir = 1234
     * $query->filterByFishonlinedir(array(12, 34)); // WHERE FishOnLineDir IN (12, 34)
     * $query->filterByFishonlinedir(array('min' => 12)); // WHERE FishOnLineDir >= 12
     * $query->filterByFishonlinedir(array('max' => 12)); // WHERE FishOnLineDir <= 12
     * </code>
     *
     * @param     mixed $fishonlinedir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByFishonlinedir($fishonlinedir = null, $comparison = null)
    {
        if (is_array($fishonlinedir)) {
            $useMinMax = false;
            if (isset($fishonlinedir['min'])) {
                $this->addUsingAlias(WebusePeer::FISHONLINEDIR, $fishonlinedir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishonlinedir['max'])) {
                $this->addUsingAlias(WebusePeer::FISHONLINEDIR, $fishonlinedir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::FISHONLINEDIR, $fishonlinedir, $comparison);
    }

    /**
     * Filter the query on the DownloadDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDownloaddir(1234); // WHERE DownloadDir = 1234
     * $query->filterByDownloaddir(array(12, 34)); // WHERE DownloadDir IN (12, 34)
     * $query->filterByDownloaddir(array('min' => 12)); // WHERE DownloadDir >= 12
     * $query->filterByDownloaddir(array('max' => 12)); // WHERE DownloadDir <= 12
     * </code>
     *
     * @param     mixed $downloaddir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByDownloaddir($downloaddir = null, $comparison = null)
    {
        if (is_array($downloaddir)) {
            $useMinMax = false;
            if (isset($downloaddir['min'])) {
                $this->addUsingAlias(WebusePeer::DOWNLOADDIR, $downloaddir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($downloaddir['max'])) {
                $this->addUsingAlias(WebusePeer::DOWNLOADDIR, $downloaddir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::DOWNLOADDIR, $downloaddir, $comparison);
    }

    /**
     * Filter the query on the EcologyDir column
     *
     * Example usage:
     * <code>
     * $query->filterByEcologydir(1234); // WHERE EcologyDir = 1234
     * $query->filterByEcologydir(array(12, 34)); // WHERE EcologyDir IN (12, 34)
     * $query->filterByEcologydir(array('min' => 12)); // WHERE EcologyDir >= 12
     * $query->filterByEcologydir(array('max' => 12)); // WHERE EcologyDir <= 12
     * </code>
     *
     * @param     mixed $ecologydir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByEcologydir($ecologydir = null, $comparison = null)
    {
        if (is_array($ecologydir)) {
            $useMinMax = false;
            if (isset($ecologydir['min'])) {
                $this->addUsingAlias(WebusePeer::ECOLOGYDIR, $ecologydir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecologydir['max'])) {
                $this->addUsingAlias(WebusePeer::ECOLOGYDIR, $ecologydir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::ECOLOGYDIR, $ecologydir, $comparison);
    }

    /**
     * Filter the query on the PhysiologyDir column
     *
     * Example usage:
     * <code>
     * $query->filterByPhysiologydir(1234); // WHERE PhysiologyDir = 1234
     * $query->filterByPhysiologydir(array(12, 34)); // WHERE PhysiologyDir IN (12, 34)
     * $query->filterByPhysiologydir(array('min' => 12)); // WHERE PhysiologyDir >= 12
     * $query->filterByPhysiologydir(array('max' => 12)); // WHERE PhysiologyDir <= 12
     * </code>
     *
     * @param     mixed $physiologydir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByPhysiologydir($physiologydir = null, $comparison = null)
    {
        if (is_array($physiologydir)) {
            $useMinMax = false;
            if (isset($physiologydir['min'])) {
                $this->addUsingAlias(WebusePeer::PHYSIOLOGYDIR, $physiologydir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($physiologydir['max'])) {
                $this->addUsingAlias(WebusePeer::PHYSIOLOGYDIR, $physiologydir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::PHYSIOLOGYDIR, $physiologydir, $comparison);
    }

    /**
     * Filter the query on the GeneticsDir column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneticsdir(1234); // WHERE GeneticsDir = 1234
     * $query->filterByGeneticsdir(array(12, 34)); // WHERE GeneticsDir IN (12, 34)
     * $query->filterByGeneticsdir(array('min' => 12)); // WHERE GeneticsDir >= 12
     * $query->filterByGeneticsdir(array('max' => 12)); // WHERE GeneticsDir <= 12
     * </code>
     *
     * @param     mixed $geneticsdir The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByGeneticsdir($geneticsdir = null, $comparison = null)
    {
        if (is_array($geneticsdir)) {
            $useMinMax = false;
            if (isset($geneticsdir['min'])) {
                $this->addUsingAlias(WebusePeer::GENETICSDIR, $geneticsdir['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geneticsdir['max'])) {
                $this->addUsingAlias(WebusePeer::GENETICSDIR, $geneticsdir['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::GENETICSDIR, $geneticsdir, $comparison);
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
     * @return WebuseQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(WebusePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(WebusePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebusePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Webuse $webuse Object to remove from the list of results
     *
     * @return WebuseQuery The current query, for fluid interface
     */
    public function prune($webuse = null)
    {
        if ($webuse) {
            $this->addUsingAlias(WebusePeer::AUTOCTR, $webuse->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
