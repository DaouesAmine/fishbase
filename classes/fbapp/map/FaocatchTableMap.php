<?php



/**
 * This class defines the structure of the 'faocatch' table.
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
class FaocatchTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FaocatchTableMap';

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
        $this->setName('faocatch');
        $this->setPhpName('Faocatch');
        $this->setClassname('Faocatch');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 25, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('SPECODE', 'Specode', 'CHAR', false, 3, null);
        $this->addColumn('Area', 'Area', 'VARCHAR', false, 35, null);
        $this->addColumn('Arecode', 'Arecode', 'SMALLINT', false, null, null);
        $this->addColumn('AreaCode', 'Areacode', 'SMALLINT', false, null, null);
        $this->addColumn('Measure', 'Measure', 'VARCHAR', false, 2, null);
        $this->addColumn('1950', '1950', 'FLOAT', false, null, null);
        $this->addColumn('1951', '1951', 'FLOAT', false, null, null);
        $this->addColumn('1952', '1952', 'FLOAT', false, null, null);
        $this->addColumn('1953', '1953', 'FLOAT', false, null, null);
        $this->addColumn('1954', '1954', 'FLOAT', false, null, null);
        $this->addColumn('1955', '1955', 'FLOAT', false, null, null);
        $this->addColumn('1956', '1956', 'FLOAT', false, null, null);
        $this->addColumn('1957', '1957', 'FLOAT', false, null, null);
        $this->addColumn('1958', '1958', 'FLOAT', false, null, null);
        $this->addColumn('1959', '1959', 'FLOAT', false, null, null);
        $this->addColumn('1960', '1960', 'FLOAT', false, null, null);
        $this->addColumn('1961', '1961', 'FLOAT', false, null, null);
        $this->addColumn('1962', '1962', 'FLOAT', false, null, null);
        $this->addColumn('1963', '1963', 'FLOAT', false, null, null);
        $this->addColumn('1964', '1964', 'FLOAT', false, null, null);
        $this->addColumn('1965', '1965', 'FLOAT', false, null, null);
        $this->addColumn('1966', '1966', 'FLOAT', false, null, null);
        $this->addColumn('1967', '1967', 'FLOAT', false, null, null);
        $this->addColumn('1968', '1968', 'FLOAT', false, null, null);
        $this->addColumn('1969', '1969', 'FLOAT', false, null, null);
        $this->addColumn('1970', '1970', 'FLOAT', false, null, null);
        $this->addColumn('1971', '1971', 'FLOAT', false, null, null);
        $this->addColumn('1972', '1972', 'FLOAT', false, null, null);
        $this->addColumn('1973', '1973', 'FLOAT', false, null, null);
        $this->addColumn('1974', '1974', 'FLOAT', false, null, null);
        $this->addColumn('1975', '1975', 'FLOAT', false, null, null);
        $this->addColumn('1976', '1976', 'FLOAT', false, null, null);
        $this->addColumn('1977', '1977', 'FLOAT', false, null, null);
        $this->addColumn('1978', '1978', 'FLOAT', false, null, null);
        $this->addColumn('1979', '1979', 'FLOAT', false, null, null);
        $this->addColumn('1980', '1980', 'FLOAT', false, null, null);
        $this->addColumn('1981', '1981', 'FLOAT', false, null, null);
        $this->addColumn('1982', '1982', 'FLOAT', false, null, null);
        $this->addColumn('1983', '1983', 'FLOAT', false, null, null);
        $this->addColumn('1984', '1984', 'FLOAT', false, null, null);
        $this->addColumn('1985', '1985', 'FLOAT', false, null, null);
        $this->addColumn('1986', '1986', 'FLOAT', false, null, null);
        $this->addColumn('1987', '1987', 'FLOAT', false, null, null);
        $this->addColumn('1988', '1988', 'FLOAT', false, null, null);
        $this->addColumn('1989', '1989', 'FLOAT', false, null, null);
        $this->addColumn('1990', '1990', 'FLOAT', false, null, null);
        $this->addColumn('1991', '1991', 'FLOAT', false, null, null);
        $this->addColumn('1992', '1992', 'FLOAT', false, null, null);
        $this->addColumn('1993', '1993', 'FLOAT', false, null, null);
        $this->addColumn('1994', '1994', 'FLOAT', false, null, null);
        $this->addColumn('1995', '1995', 'FLOAT', false, null, null);
        $this->addColumn('1996', '1996', 'FLOAT', false, null, null);
        $this->addColumn('1997', '1997', 'FLOAT', false, null, null);
        $this->addColumn('1998', '1998', 'FLOAT', false, null, null);
        $this->addColumn('1999', '1999', 'FLOAT', false, null, null);
        $this->addColumn('2000', '2000', 'FLOAT', false, null, null);
        $this->addColumn('2001', '2001', 'FLOAT', false, null, null);
        $this->addColumn('2002', '2002', 'FLOAT', false, null, null);
        $this->addColumn('2003', '2003', 'FLOAT', false, null, null);
        $this->addColumn('2004', '2004', 'FLOAT', false, null, null);
        $this->addColumn('2005', '2005', 'FLOAT', false, null, null);
        $this->addColumn('2006', '2006', 'FLOAT', false, null, null);
        $this->addColumn('2007', '2007', 'FLOAT', false, null, null);
        $this->addColumn('2008', '2008', 'FLOAT', false, null, null);
        $this->addColumn('2009', '2009', 'FLOAT', false, null, null);
        $this->addColumn('2010', '2010', 'FLOAT', false, null, null);
        $this->addColumn('2011', '2011', 'FLOAT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FaocatchTableMap
