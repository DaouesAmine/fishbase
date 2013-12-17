<?php



/**
 * This class defines the structure of the 'country' table.
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
class CountryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CountryTableMap';

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
        $this->setName('country');
        $this->setPhpName('Country');
        $this->setClassname('Country');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('CountryRefNo', 'Countryrefno', 'INTEGER', false, null, null);
        $this->addColumn('AlsoRef', 'Alsoref', 'INTEGER', false, null, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', false, 20, 'native');
        $this->addColumn('CurrentPresence', 'Currentpresence', 'VARCHAR', false, 9, null);
        $this->addColumn('Freshwater', 'Freshwater', 'INTEGER', false, null, 0);
        $this->addColumn('Brackish', 'Brackish', 'INTEGER', false, null, 0);
        $this->addColumn('Saltwater', 'Saltwater', 'INTEGER', false, null, 0);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('Abundance', 'Abundance', 'VARCHAR', false, 38, null);
        $this->addColumn('RefAbundance', 'Refabundance', 'INTEGER', false, null, null);
        $this->addColumn('Importance', 'Importance', 'VARCHAR', false, 21, null);
        $this->addColumn('RefImportance', 'Refimportance', 'INTEGER', false, null, null);
        $this->addColumn('ExVesselPrice', 'Exvesselprice', 'DOUBLE', false, null, null);
        $this->addColumn('Aquaculture', 'Aquaculture', 'VARCHAR', false, 17, null);
        $this->addColumn('RefAquaculture', 'Refaquaculture', 'INTEGER', false, null, null);
        $this->addColumn('LiveExportOrg', 'Liveexportorg', 'INTEGER', false, null, 0);
        $this->addColumn('LiveExport', 'Liveexport', 'VARCHAR', false, 20, null);
        $this->addColumn('RefLiveExport', 'Refliveexport', 'INTEGER', false, null, null);
        $this->addColumn('Game', 'Game', 'INTEGER', false, null, 0);
        $this->addColumn('Bait', 'Bait', 'INTEGER', false, null, 0);
        $this->addColumn('Regulations', 'Regulations', 'VARCHAR', false, 14, null);
        $this->addColumn('RefRegulations', 'Refregulations', 'INTEGER', false, null, null);
        $this->addColumn('Threatened', 'Threatened', 'INTEGER', false, null, 0);
        $this->addColumn('CountrySubComp', 'Countrysubcomp', 'TINYINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CountryTableMap
