<?php



/**
 * This class defines the structure of the 'faoaquacult' table.
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
class FaoaquacultTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FaoaquacultTableMap';

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
        $this->setName('faoaquacult');
        $this->setPhpName('Faoaquacult');
        $this->setClassname('Faoaquacult');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, 0);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 255, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Specode', 'Specode', 'VARCHAR', false, 255, null);
        $this->addColumn('Environment', 'Environment', 'VARCHAR', false, 255, null);
        $this->addColumn('Area', 'Area', 'VARCHAR', false, 255, null);
        $this->addColumn('Arecode', 'Arecode', 'DOUBLE', false, null, null);
        $this->addColumn('AreaCode', 'Areacode', 'DOUBLE', false, null, null);
        $this->addColumn('1950', '1950', 'DOUBLE', false, null, null);
        $this->addColumn('1951', '1951', 'DOUBLE', false, null, null);
        $this->addColumn('1952', '1952', 'DOUBLE', false, null, null);
        $this->addColumn('1953', '1953', 'DOUBLE', false, null, null);
        $this->addColumn('1954', '1954', 'DOUBLE', false, null, null);
        $this->addColumn('1955', '1955', 'DOUBLE', false, null, null);
        $this->addColumn('1956', '1956', 'DOUBLE', false, null, null);
        $this->addColumn('1957', '1957', 'DOUBLE', false, null, null);
        $this->addColumn('1958', '1958', 'DOUBLE', false, null, null);
        $this->addColumn('1959', '1959', 'DOUBLE', false, null, null);
        $this->addColumn('1960', '1960', 'DOUBLE', false, null, null);
        $this->addColumn('1961', '1961', 'DOUBLE', false, null, null);
        $this->addColumn('1962', '1962', 'DOUBLE', false, null, null);
        $this->addColumn('1963', '1963', 'DOUBLE', false, null, null);
        $this->addColumn('1964', '1964', 'DOUBLE', false, null, null);
        $this->addColumn('1965', '1965', 'DOUBLE', false, null, null);
        $this->addColumn('1966', '1966', 'DOUBLE', false, null, null);
        $this->addColumn('1967', '1967', 'DOUBLE', false, null, null);
        $this->addColumn('1968', '1968', 'DOUBLE', false, null, null);
        $this->addColumn('1969', '1969', 'DOUBLE', false, null, null);
        $this->addColumn('1970', '1970', 'DOUBLE', false, null, null);
        $this->addColumn('1971', '1971', 'DOUBLE', false, null, null);
        $this->addColumn('1972', '1972', 'DOUBLE', false, null, null);
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
        $this->addColumn('2008', '2008', 'DOUBLE', false, null, null);
        $this->addColumn('2009', '2009', 'DOUBLE', false, null, null);
        $this->addColumn('2010', '2010', 'DOUBLE', false, null, null);
        $this->addColumn('2011', '2011', 'DOUBLE', false, null, null);
        $this->addColumn('Y01', 'Y01', 'DOUBLE', false, null, null);
        $this->addColumn('Y02', 'Y02', 'DOUBLE', false, null, null);
        $this->addColumn('Y03', 'Y03', 'DOUBLE', false, null, null);
        $this->addColumn('Y04', 'Y04', 'DOUBLE', false, null, null);
        $this->addColumn('Y05', 'Y05', 'DOUBLE', false, null, null);
        $this->addColumn('Y06', 'Y06', 'DOUBLE', false, null, null);
        $this->addColumn('Y07', 'Y07', 'DOUBLE', false, null, null);
        $this->addColumn('Y08', 'Y08', 'DOUBLE', false, null, null);
        $this->addColumn('Y09', 'Y09', 'DOUBLE', false, null, null);
        $this->addColumn('Y10', 'Y10', 'DOUBLE', false, null, null);
        $this->addColumn('Y11', 'Y11', 'DOUBLE', false, null, null);
        $this->addColumn('Y12', 'Y12', 'DOUBLE', false, null, null);
        $this->addColumn('Y13', 'Y13', 'DOUBLE', false, null, null);
        $this->addColumn('Y14', 'Y14', 'DOUBLE', false, null, null);
        $this->addColumn('Y15', 'Y15', 'DOUBLE', false, null, null);
        $this->addColumn('Y16', 'Y16', 'DOUBLE', false, null, null);
        $this->addColumn('Y17', 'Y17', 'DOUBLE', false, null, null);
        $this->addColumn('Y18', 'Y18', 'DOUBLE', false, null, null);
        $this->addColumn('Y19', 'Y19', 'DOUBLE', false, null, null);
        $this->addColumn('Y20', 'Y20', 'DOUBLE', false, null, null);
        $this->addColumn('Y21', 'Y21', 'DOUBLE', false, null, null);
        $this->addColumn('Y22', 'Y22', 'DOUBLE', false, null, null);
        $this->addColumn('Y23', 'Y23', 'DOUBLE', false, null, null);
        $this->addColumn('Y24', 'Y24', 'DOUBLE', false, null, null);
        $this->addColumn('Y25', 'Y25', 'DOUBLE', false, null, null);
        $this->addColumn('Y26', 'Y26', 'DOUBLE', false, null, null);
        $this->addColumn('Y27', 'Y27', 'DOUBLE', false, null, null);
        $this->addColumn('Y28', 'Y28', 'DOUBLE', false, null, null);
        $this->addColumn('Y29', 'Y29', 'DOUBLE', false, null, null);
        $this->addColumn('Y30', 'Y30', 'DOUBLE', false, null, null);
        $this->addColumn('Y31', 'Y31', 'DOUBLE', false, null, null);
        $this->addColumn('Y32', 'Y32', 'DOUBLE', false, null, null);
        $this->addColumn('Y33', 'Y33', 'DOUBLE', false, null, null);
        $this->addColumn('Y34', 'Y34', 'DOUBLE', false, null, null);
        $this->addColumn('Y35', 'Y35', 'DOUBLE', false, null, null);
        $this->addColumn('Y36', 'Y36', 'DOUBLE', false, null, null);
        $this->addColumn('Y37', 'Y37', 'DOUBLE', false, null, null);
        $this->addColumn('Y38', 'Y38', 'DOUBLE', false, null, null);
        $this->addColumn('Y39', 'Y39', 'DOUBLE', false, null, null);
        $this->addColumn('Y40', 'Y40', 'DOUBLE', false, null, null);
        $this->addColumn('Y41', 'Y41', 'DOUBLE', false, null, null);
        $this->addColumn('Y42', 'Y42', 'DOUBLE', false, null, null);
        $this->addColumn('Y43', 'Y43', 'DOUBLE', false, null, null);
        $this->addColumn('Y44', 'Y44', 'DOUBLE', false, null, null);
        $this->addColumn('Y45', 'Y45', 'DOUBLE', false, null, null);
        $this->addColumn('Y46', 'Y46', 'DOUBLE', false, null, null);
        $this->addColumn('Y47', 'Y47', 'DOUBLE', false, null, null);
        $this->addColumn('Y48', 'Y48', 'DOUBLE', false, null, null);
        $this->addColumn('Y49', 'Y49', 'DOUBLE', false, null, null);
        $this->addColumn('Y50', 'Y50', 'DOUBLE', false, null, null);
        $this->addColumn('Y51', 'Y51', 'DOUBLE', false, null, null);
        $this->addColumn('Y52', 'Y52', 'DOUBLE', false, null, null);
        $this->addColumn('Y53', 'Y53', 'DOUBLE', false, null, null);
        $this->addColumn('Y54', 'Y54', 'DOUBLE', false, null, null);
        $this->addColumn('Y55', 'Y55', 'DOUBLE', false, null, null);
        $this->addColumn('Y56', 'Y56', 'DOUBLE', false, null, null);
        $this->addColumn('Y57', 'Y57', 'DOUBLE', false, null, null);
        $this->addColumn('Y58', 'Y58', 'DOUBLE', false, null, null);
        $this->addColumn('Y59', 'Y59', 'DOUBLE', false, null, null);
        $this->addColumn('Y60', 'Y60', 'DOUBLE', false, null, null);
        $this->addColumn('Y61', 'Y61', 'DOUBLE', false, null, null);
        $this->addColumn('Y62', 'Y62', 'DOUBLE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FaoaquacultTableMap
