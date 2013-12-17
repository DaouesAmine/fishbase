<?php



/**
 * This class defines the structure of the 'intrcase' table.
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
class IntrcaseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.IntrcaseTableMap';

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
        $this->setName('intrcase');
        $this->setPhpName('Intrcase');
        $this->setClassname('Intrcase');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('IntrCaseRefNo', 'Intrcaserefno', 'INTEGER', false, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Year', 'Year', 'INTEGER', false, null, null);
        $this->addColumn('RangeMin', 'Rangemin', 'INTEGER', false, null, null);
        $this->addColumn('RangeMax', 'Rangemax', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Period', 'Period', 'VARCHAR', true, 16, null);
        $this->addColumn('PeriodOrder', 'Periodorder', 'CHAR', false, null, null);
        $this->addColumn('TO', 'To', 'VARCHAR', false, 100, null);
        $this->addPrimaryKey('C_Code_To', 'CCodeTo', 'VARCHAR', true, 4, null);
        $this->addColumn('Area_To', 'AreaTo', 'SMALLINT', false, null, null);
        $this->addPrimaryKey('From', 'From', 'VARCHAR', true, 100, null);
        $this->addColumn('C_Code_From', 'CCodeFrom', 'VARCHAR', false, 4, null);
        $this->addColumn('Area_From', 'AreaFrom', 'SMALLINT', false, null, null);
        $this->addColumn('Reason', 'Reason', 'VARCHAR', false, 29, null);
        $this->addColumn('OtherReason', 'Otherreason', 'VARCHAR', false, 29, null);
        $this->addColumn('OtherReason2', 'Otherreason2', 'VARCHAR', false, 75, null);
        $this->addColumn('ReasonOrder', 'Reasonorder', 'SMALLINT', false, null, 0);
        $this->addColumn('Introducer', 'Introducer', 'VARCHAR', false, 27, null);
        $this->addColumn('Estabwild', 'Estabwild', 'VARCHAR', false, 24, null);
        $this->addColumn('EstabType', 'Estabtype', 'VARCHAR', false, 21, null);
        $this->addColumn('EstabAqua', 'Estabaqua', 'TINYINT', false, null, null);
        $this->addColumn('ComAqua', 'Comaqua', 'VARCHAR', false, 11, null);
        $this->addColumn('ReproMode', 'Repromode', 'VARCHAR', false, 32, null);
        $this->addColumn('EcolEff', 'Ecoleff', 'VARCHAR', false, 13, null);
        $this->addColumn('EcolEffType', 'Ecolefftype', 'VARCHAR', false, 10, null);
        $this->addColumn('Impacts', 'Impacts', 'VARCHAR', false, 50, null);
        $this->addColumn('SocioEff', 'Socioeff', 'VARCHAR', false, 13, null);
        $this->addColumn('SocioEffType', 'Socioefftype', 'VARCHAR', false, 10, null);
        $this->addColumn('IntrSourceRef', 'Intrsourceref', 'INTEGER', false, null, null);
        $this->addColumn('RecordSource', 'Recordsource', 'VARCHAR', false, 50, null);
        $this->addColumn('Invasive', 'Invasive', 'TINYINT', false, null, null);
        $this->addColumn('InvasiveRef', 'Invasiveref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // IntrcaseTableMap
