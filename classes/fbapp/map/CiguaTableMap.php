<?php



/**
 * This class defines the structure of the 'cigua' table.
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
class CiguaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CiguaTableMap';

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
        $this->setName('cigua');
        $this->setPhpName('Cigua');
        $this->setClassname('Cigua');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('RECORD_NO', 'RecordNo', 'DOUBLE', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('COUNTRY', 'Country', 'VARCHAR', false, 16, null);
        $this->addColumn('LOCATION', 'Location', 'VARCHAR', false, 19, null);
        $this->addColumn('LatitudeDeg', 'Latitudedeg', 'INTEGER', false, null, 0);
        $this->addColumn('LatitudeMin', 'Latitudemin', 'INTEGER', false, null, 0);
        $this->addColumn('NorthSouth', 'Northsouth', 'VARCHAR', false, 50, null);
        $this->addColumn('LongitudeDeg', 'Longitudedeg', 'INTEGER', false, null, 0);
        $this->addColumn('LongitudeMin', 'Longitudemin', 'INTEGER', false, null, 0);
        $this->addColumn('EastWest', 'Eastwest', 'VARCHAR', false, 50, null);
        $this->addColumn('DATEREC', 'Daterec', 'TIMESTAMP', false, null, null);
        $this->addColumn('FISH_Y_N', 'FishYN', 'TINYINT', false, null, null);
        $this->addColumn('CRAB', 'Crab', 'TINYINT', false, null, null);
        $this->addColumn('LOBST', 'Lobst', 'TINYINT', false, null, null);
        $this->addColumn('OTHCRUST', 'Othcrust', 'TINYINT', false, null, null);
        $this->addColumn('GASTR', 'Gastr', 'TINYINT', false, null, null);
        $this->addColumn('BIVALVE', 'Bivalve', 'TINYINT', false, null, null);
        $this->addColumn('OTHER_MOLL', 'OtherMoll', 'TINYINT', false, null, null);
        $this->addColumn('BEACH', 'Beach', 'TINYINT', false, null, null);
        $this->addColumn('REEF_PATCH', 'ReefPatch', 'TINYINT', false, null, null);
        $this->addColumn('LAGOON', 'Lagoon', 'TINYINT', false, null, null);
        $this->addColumn('RIVER', 'River', 'TINYINT', false, null, null);
        $this->addColumn('MANGROVE', 'Mangrove', 'TINYINT', false, null, null);
        $this->addColumn('OUTER_REEF', 'OuterReef', 'TINYINT', false, null, null);
        $this->addColumn('OPEN_SEA', 'OpenSea', 'TINYINT', false, null, null);
        $this->addColumn('FRESHNOICE', 'Freshnoice', 'TINYINT', false, null, null);
        $this->addColumn('FRESH_CE', 'FreshCe', 'TINYINT', false, null, null);
        $this->addColumn('FROZEN', 'Frozen', 'TINYINT', false, null, null);
        $this->addColumn('SALTED', 'Salted', 'TINYINT', false, null, null);
        $this->addColumn('DRIED', 'Dried', 'TINYINT', false, null, null);
        $this->addColumn('SMOKED', 'Smoked', 'TINYINT', false, null, null);
        $this->addColumn('PICKLED', 'Pickled', 'TINYINT', false, null, null);
        $this->addColumn('HEAD', 'Head', 'TINYINT', false, null, null);
        $this->addColumn('FLESH', 'Flesh', 'TINYINT', false, null, null);
        $this->addColumn('SKIN', 'Skin', 'TINYINT', false, null, null);
        $this->addColumn('LIVER', 'Liver', 'TINYINT', false, null, null);
        $this->addColumn('ROE', 'Roe', 'TINYINT', false, null, null);
        $this->addColumn('OTHER_ORGA', 'OtherOrga', 'TINYINT', false, null, null);
        $this->addColumn('UNPREPARED', 'Unprepared', 'TINYINT', false, null, null);
        $this->addColumn('MARINATED', 'Marinated', 'TINYINT', false, null, null);
        $this->addColumn('COOKED', 'Cooked', 'TINYINT', false, null, null);
        $this->addColumn('ATE_THIS_M', 'AteThisM', 'DOUBLE', false, null, null);
        $this->addColumn('FELT_SICK', 'FeltSick', 'DOUBLE', false, null, null);
        $this->addColumn('WERE_ADMIT', 'WereAdmit', 'DOUBLE', false, null, null);
        $this->addColumn('LOCAL_NAME', 'LocalName', 'VARCHAR', false, 28, null);
        $this->addColumn('ENGLISH_NA', 'EnglishNa', 'VARCHAR', false, 26, null);
        $this->addColumn('SCIENTIFIC', 'Scientific', 'VARCHAR', false, 33, null);
        $this->addColumn('VENDOR', 'Vendor', 'VARCHAR', false, 42, null);
        $this->addColumn('AREACAUGHT', 'Areacaught', 'VARCHAR', false, 40, null);
        $this->addColumn('DATE_EATEN', 'DateEaten', 'TIMESTAMP', false, null, null);
        $this->addColumn('TIME_EATEN', 'TimeEaten', 'VARCHAR', false, 8, null);
        $this->addColumn('DATE_SICK', 'DateSick', 'TIMESTAMP', false, null, null);
        $this->addColumn('TIME_SICK', 'TimeSick', 'VARCHAR', false, 8, null);
        $this->addColumn('BURNING_PA', 'BurningPa', 'TINYINT', false, null, null);
        $this->addColumn('TINGLING_N', 'TinglingN', 'TINYINT', false, null, null);
        $this->addColumn('URINATE_DI', 'UrinateDi', 'TINYINT', false, null, null);
        $this->addColumn('DIFFICULTW', 'Difficultw', 'TINYINT', false, null, null);
        $this->addColumn('DIFFICULTT', 'Difficultt', 'TINYINT', false, null, null);
        $this->addColumn('DIFFICULTY', 'Difficulty', 'TINYINT', false, null, null);
        $this->addColumn('EYE_IRRITA', 'EyeIrrita', 'TINYINT', false, null, null);
        $this->addColumn('PIN_PRICKI', 'PinPricki', 'TINYINT', false, null, null);
        $this->addColumn('STRANGE_TA', 'StrangeTa', 'TINYINT', false, null, null);
        $this->addColumn('SKIN_ITCHI', 'SkinItchi', 'TINYINT', false, null, null);
        $this->addColumn('EXCESS_SAL', 'ExcessSal', 'TINYINT', false, null, null);
        $this->addColumn('EXCESS_SWT', 'ExcessSwt', 'TINYINT', false, null, null);
        $this->addColumn('DIARRHOEA', 'Diarrhoea', 'TINYINT', false, null, null);
        $this->addColumn('VOMITING', 'Vomiting', 'TINYINT', false, null, null);
        $this->addColumn('FEVER_CHIL', 'FeverChil', 'TINYINT', false, null, null);
        $this->addColumn('HEADACHE', 'Headache', 'TINYINT', false, null, null);
        $this->addColumn('JOINT_ACHE', 'JointAche', 'TINYINT', false, null, null);
        $this->addColumn('MUSCLE_CRA', 'MuscleCra', 'TINYINT', false, null, null);
        $this->addColumn('PULSE', 'Pulse', 'SMALLINT', false, null, null);
        $this->addColumn('SYSTOLIC', 'Systolic', 'SMALLINT', false, null, null);
        $this->addColumn('DIASTOLIC', 'Diastolic', 'DOUBLE', false, null, null);
        $this->addColumn('PUPILS', 'Pupils', 'FLOAT', false, null, null);
        $this->addColumn('DEATH', 'Death', 'FLOAT', false, null, null);
        $this->addColumn('COMMENTS', 'Comments', 'VARCHAR', false, 254, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
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

} // CiguaTableMap
