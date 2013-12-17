<?php



/**
 * This class defines the structure of the 'icescatch' table.
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
class IcescatchTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.IcescatchTableMap';

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
        $this->setName('icescatch');
        $this->setPhpName('Icescatch');
        $this->setClassname('Icescatch');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Specode', 'Specode', 'VARCHAR', false, 50, null);
        $this->addColumn('Areacode', 'Areacode', 'SMALLINT', false, null, 0);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 20, null);
        $this->addColumn('CountryCode', 'Countrycode', 'CHAR', false, 3, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 30, null);
        $this->addColumn('AlphaCode', 'Alphacode', 'CHAR', false, 3, null);
        $this->addColumn('Area', 'Area', 'VARCHAR', false, 55, null);
        $this->addColumn('Area2', 'Area2', 'VARCHAR', false, 10, null);
        $this->addColumn('1973', '1973', 'DOUBLE', false, null, null);
        $this->addColumn('1974', '1974', 'DOUBLE', false, null, null);
        $this->addColumn('1975', '1975', 'DOUBLE', false, null, null);
        $this->addColumn('1976', '1976', 'DOUBLE', false, null, null);
        $this->addColumn('1977', '1977', 'DOUBLE', false, null, null);
        $this->addColumn('1978', '1978', 'DOUBLE', false, null, null);
        $this->addColumn('1979', '1979', 'DOUBLE', false, null, null);
        $this->addColumn('1980', '1980', 'DOUBLE', false, null, null);
        $this->addColumn('1981', '1981', 'DOUBLE', false, null, null);
        $this->addColumn('1982', '1982', 'DOUBLE', false, null, null);
        $this->addColumn('1983', '1983', 'DOUBLE', false, null, null);
        $this->addColumn('1984', '1984', 'DOUBLE', false, null, null);
        $this->addColumn('1985', '1985', 'DOUBLE', false, null, null);
        $this->addColumn('1986', '1986', 'DOUBLE', false, null, null);
        $this->addColumn('1987', '1987', 'DOUBLE', false, null, null);
        $this->addColumn('1988', '1988', 'DOUBLE', false, null, null);
        $this->addColumn('1989', '1989', 'DOUBLE', false, null, null);
        $this->addColumn('1990', '1990', 'DOUBLE', false, null, null);
        $this->addColumn('1991', '1991', 'DOUBLE', false, null, null);
        $this->addColumn('1992', '1992', 'DOUBLE', false, null, null);
        $this->addColumn('1993', '1993', 'DOUBLE', false, null, null);
        $this->addColumn('1994', '1994', 'DOUBLE', false, null, null);
        $this->addColumn('1995', '1995', 'DOUBLE', false, null, null);
        $this->addColumn('1996', '1996', 'DOUBLE', false, null, null);
        $this->addColumn('1997', '1997', 'DOUBLE', false, null, null);
        $this->addColumn('1998', '1998', 'DOUBLE', false, null, null);
        $this->addColumn('1999', '1999', 'DOUBLE', false, null, null);
        $this->addColumn('2000', '2000', 'DOUBLE', false, null, null);
        $this->addColumn('2001', '2001', 'DOUBLE', false, null, null);
        $this->addColumn('2002', '2002', 'DOUBLE', false, null, null);
        $this->addColumn('2003', '2003', 'DOUBLE', false, null, null);
        $this->addColumn('2004', '2004', 'DOUBLE', false, null, null);
        $this->addColumn('2005', '2005', 'DOUBLE', false, null, null);
        $this->addColumn('2006', '2006', 'DOUBLE', false, null, null);
        $this->addColumn('2007', '2007', 'DOUBLE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // IcescatchTableMap
