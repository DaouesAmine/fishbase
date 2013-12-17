<?php



/**
 * This class defines the structure of the 'webuse' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.fbapp.map
 */
class WebuseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.WebuseTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('webuse');
        $this->setPhpName('Webuse');
        $this->setClassname('Webuse');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('period', 'Period', 'TIMESTAMP', false, null, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('Month', 'Month', 'SMALLINT', false, null, null);
        $this->addColumn('Hits', 'Hits', 'INTEGER', false, null, 0);
        $this->addColumn('HitsNotViewed', 'Hitsnotviewed', 'INTEGER', false, null, 0);
        $this->addColumn('Sessions', 'Sessions', 'INTEGER', false, null, 0);
        $this->addColumn('UniqueUsers', 'Uniqueusers', 'INTEGER', false, null, 0);
        $this->addColumn('VisitsVisitors', 'Visitsvisitors', 'FLOAT', false, 11, 0);
        $this->addColumn('Pages', 'Pages', 'INTEGER', false, null, 0);
        $this->addColumn('PagesVisit', 'Pagesvisit', 'FLOAT', false, 11, 0);
        $this->addColumn('ReturnUsers', 'Returnusers', 'INTEGER', false, null, 0);
        $this->addColumn('PowerUsers', 'Powerusers', 'INTEGER', false, null, 0);
        $this->addColumn('BookMarkSessions', 'Bookmarksessions', 'INTEGER', false, null, 0);
        $this->addColumn('BookMark', 'Bookmark', 'FLOAT', false, null, 0);
        $this->addColumn('Duration', 'Duration', 'FLOAT', false, null, 0);
        $this->addColumn('Bandwidth_old', 'BandwidthOld', 'FLOAT', false, 11, 0);
        $this->addColumn('Bandwidth', 'Bandwidth', 'FLOAT', false, 11, 0);
        $this->addColumn('BWNotViewed', 'Bwnotviewed', 'FLOAT', false, 11, 0);
        $this->addColumn('USA', 'Usa', 'SMALLINT', false, null, 0);
        $this->addColumn('International', 'International', 'SMALLINT', false, null, 0);
        $this->addColumn('Unknown', 'Unknown', 'SMALLINT', false, null, 0);
        $this->addColumn('Countries', 'Countries', 'INTEGER', false, null, 0);
        $this->addColumn('DevCountries', 'Devcountries', 'INTEGER', false, null, 0);
        $this->addColumn('DevCountSess', 'Devcountsess', 'INTEGER', false, null, 0);
        $this->addColumn('ACPCountries', 'Acpcountries', 'INTEGER', false, null, 0);
        $this->addColumn('ACPCountSess', 'Acpcountsess', 'INTEGER', false, null, 0);
        $this->addColumn('OtherOS', 'Otheros', 'SMALLINT', false, null, 0);
        $this->addColumn('TopDay', 'Topday', 'INTEGER', false, null, 0);
        $this->addColumn('TopDayDate', 'Topdaydate', 'TIMESTAMP', false, null, null);
        $this->addColumn('Downloads', 'Downloads', 'SMALLINT', false, null, 0);
        $this->addColumn('SummaryDir', 'Summarydir', 'FLOAT', false, null, 0);
        $this->addColumn('NomenclatureDir', 'Nomenclaturedir', 'FLOAT', false, null, 0);
        $this->addColumn('ComNamesDir', 'Comnamesdir', 'FLOAT', false, null, 0);
        $this->addColumn('ReferencesDir', 'Referencesdir', 'FLOAT', false, null, 0);
        $this->addColumn('PhotosDir', 'Photosdir', 'FLOAT', false, null, 0);
        $this->addColumn('ForumDir', 'Forumdir', 'FLOAT', false, null, 0);
        $this->addColumn('TourDir', 'Tourdir', 'FLOAT', false, null, 0);
        $this->addColumn('ChatDir', 'Chatdir', 'FLOAT', false, null, 0);
        $this->addColumn('PopdynDir', 'Popdyndir', 'FLOAT', false, null, 0);
        $this->addColumn('ReproductionDir', 'Reproductiondir', 'FLOAT', false, null, 0);
        $this->addColumn('TrophicDir', 'Trophicdir', 'FLOAT', false, null, 0);
        $this->addColumn('CountryDir', 'Countrydir', 'FLOAT', false, null, 0);
        $this->addColumn('EschmeyerDir', 'Eschmeyerdir', 'FLOAT', false, null, 0);
        $this->addColumn('FBBookDir', 'Fbbookdir', 'FLOAT', false, null, 0);
        $this->addColumn('FishQuizDir', 'Fishquizdir', 'FLOAT', false, null, 0);
        $this->addColumn('MuseumDir', 'Museumdir', 'FLOAT', false, null, 0);
        $this->addColumn('GlossaryDir', 'Glossarydir', 'FLOAT', false, null, 0);
        $this->addColumn('MapDir', 'Mapdir', 'FLOAT', false, null, 0);
        $this->addColumn('Identification', 'Identification', 'FLOAT', false, null, 0);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('LarvalBaseDir', 'Larvalbasedir', 'FLOAT', false, null, 0);
        $this->addColumn('DiseaseDir', 'Diseasedir', 'FLOAT', false, null, 0);
        $this->addColumn('ToolsDir', 'Toolsdir', 'FLOAT', false, null, 0);
        $this->addColumn('IdentificationDir', 'Identificationdir', 'FLOAT', false, null, 0);
        $this->addColumn('KeysDir', 'Keysdir', 'FLOAT', false, null, 0);
        $this->addColumn('FieldGuidesDir', 'Fieldguidesdir', 'FLOAT', false, null, 0);
        $this->addColumn('FishOnLineDir', 'Fishonlinedir', 'FLOAT', false, null, 0);
        $this->addColumn('DownloadDir', 'Downloaddir', 'FLOAT', false, null, 0);
        $this->addColumn('EcologyDir', 'Ecologydir', 'FLOAT', false, null, 0);
        $this->addColumn('PhysiologyDir', 'Physiologydir', 'FLOAT', false, null, 0);
        $this->addColumn('GeneticsDir', 'Geneticsdir', 'FLOAT', false, null, 0);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WebuseTableMap
