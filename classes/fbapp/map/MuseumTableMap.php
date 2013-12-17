<?php



/**
 * This class defines the structure of the 'museum' table.
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
class MuseumTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MuseumTableMap';

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
        $this->setName('museum');
        $this->setPhpName('Museum');
        $this->setClassname('Museum');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OccurrenceRefNo', 'Occurrencerefno', 'INTEGER', true, null, null);
        $this->addColumn('Museum', 'Museum', 'VARCHAR', false, 150, null);
        $this->addColumn('Acronym', 'Acronym', 'VARCHAR', false, 10, null);
        $this->addColumn('Address', 'Address', 'VARCHAR', false, 255, null);
        $this->addColumn('City', 'City', 'VARCHAR', false, 50, null);
        $this->addColumn('C_code', 'CCode', 'VARCHAR', false, 50, null);
        $this->addColumn('LogoURL', 'Logourl', 'CLOB', false, null, null);
        $this->addColumn('Online', 'Online', 'TINYINT', false, null, 0);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 50, null);
        $this->addColumn('HomePageURL', 'Homepageurl', 'CLOB', false, null, null);
        $this->addColumn('OnlineDatabase', 'Onlinedatabase', 'CLOB', false, null, null);
        $this->addColumn('CatalogueNumPrefix1', 'Cataloguenumprefix1', 'VARCHAR', false, 10, null);
        $this->addColumn('CatalogueNumberPrefix2', 'Cataloguenumberprefix2', 'VARCHAR', false, 10, null);
        $this->addColumn('CatalogueNumberPrefix3', 'Cataloguenumberprefix3', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactPerson1', 'Contactperson1', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactPerson1Email', 'Contactperson1email', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactPerson2', 'Contactperson2', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactPerson2Email', 'Contactperson2email', 'VARCHAR', false, 50, null);
        $this->addColumn('FirstVersionDate', 'Firstversiondate', 'TIMESTAMP', false, null, null);
        $this->addColumn('VersionDate', 'Versiondate', 'TIMESTAMP', false, null, null);
        $this->addColumn('Validity', 'Validity', 'VARCHAR', false, 50, null);
        $this->addColumn('LastUpdateDate', 'Lastupdatedate', 'TIMESTAMP', false, null, null);
        $this->addColumn('DatabaseFormat', 'Databaseformat', 'VARCHAR', false, 50, null);
        $this->addColumn('Accessions', 'Accessions', 'INTEGER', false, null, 0);
        $this->addColumn('Species', 'Species', 'INTEGER', false, null, 0);
        $this->addColumn('Families', 'Families', 'INTEGER', false, null, 0);
        $this->addColumn('Countries', 'Countries', 'INTEGER', false, null, 0);
        $this->addColumn('TopCountry', 'Topcountry', 'VARCHAR', false, 50, null);
        $this->addColumn('TopCountryRecords', 'Topcountryrecords', 'INTEGER', false, null, 0);
        $this->addColumn('Coordinates', 'Coordinates', 'INTEGER', false, null, 0);
        $this->addColumn('PercentCoordinates', 'Percentcoordinates', 'INTEGER', false, null, 0);
        $this->addColumn('DateOldestRecord', 'Dateoldestrecord', 'VARCHAR', false, 50, null);
        $this->addColumn('DateMostRecentRecord', 'Datemostrecentrecord', 'VARCHAR', false, 50, null);
        $this->addColumn('YearOldestRecord', 'Yearoldestrecord', 'VARCHAR', false, 50, null);
        $this->addColumn('YearMostRecentRecord', 'Yearmostrecentrecord', 'VARCHAR', false, 50, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, 0);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, 0);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('validnames', 'Validnames', 'INTEGER', false, null, 0);
        $this->addColumn('PercentValid', 'Percentvalid', 'FLOAT', false, null, 0);
        $this->addColumn('synonyms', 'Synonyms', 'INTEGER', false, null, 0);
        $this->addColumn('PercentSynonym', 'Percentsynonym', 'FLOAT', false, null, 0);
        $this->addColumn('non-matching', 'Nonmatching', 'INTEGER', false, null, 0);
        $this->addColumn('PercentNon-matching', 'Percentnonmatching', 'FLOAT', false, null, 0);
        $this->addColumn('AmbiguousName', 'Ambiguousname', 'INTEGER', false, null, 0);
        $this->addColumn('PercentAmbiguous', 'Percentambiguous', 'FLOAT', false, null, 0);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MuseumTableMap
