<?php



/**
 * This class defines the structure of the 'ecosystemref' table.
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
class EcosystemrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EcosystemrefTableMap';

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
        $this->setName('ecosystemref');
        $this->setPhpName('Ecosystemref');
        $this->setClassname('Ecosystemref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('EcosystemName', 'Ecosystemname', 'VARCHAR', true, 50, null);
        $this->addColumn('EcosystemType', 'Ecosystemtype', 'VARCHAR', false, 20, null);
        $this->addColumn('E_CODE_Large', 'ECodeLarge', 'INTEGER', false, null, null);
        $this->addColumn('E_CODE_Larger', 'ECodeLarger', 'INTEGER', false, null, null);
        $this->addColumn('Ready', 'Ready', 'TINYINT', false, null, null);
        $this->addColumn('OtherNames', 'Othernames', 'VARCHAR', false, 100, null);
        $this->addColumn('Location', 'Location', 'VARCHAR', false, 255, null);
        $this->addColumn('LocationMap', 'Locationmap', 'VARCHAR', false, 50, null);
        $this->addColumn('Salinity', 'Salinity', 'VARCHAR', false, 10, null);
        $this->addColumn('RiverLength', 'Riverlength', 'INTEGER', false, null, null);
        $this->addColumn('Area', 'Area', 'INTEGER', false, null, null);
        $this->addColumn('SizeRef', 'Sizeref', 'INTEGER', false, null, null);
        $this->addColumn('DrainageArea', 'Drainagearea', 'INTEGER', false, null, null);
        $this->addColumn('NorthernLat', 'Northernlat', 'INTEGER', false, null, null);
        $this->addColumn('NrangeNS', 'Nrangens', 'VARCHAR', false, 1, null);
        $this->addColumn('SouthernLat', 'Southernlat', 'INTEGER', false, null, null);
        $this->addColumn('SrangeNS', 'Srangens', 'VARCHAR', false, 1, null);
        $this->addColumn('WesternLat', 'Westernlat', 'INTEGER', false, null, null);
        $this->addColumn('WrangeEW', 'Wrangeew', 'VARCHAR', false, 1, null);
        $this->addColumn('EasternLat', 'Easternlat', 'INTEGER', false, null, null);
        $this->addColumn('ErangeEW', 'Erangeew', 'VARCHAR', false, 1, null);
        $this->addColumn('Climate', 'Climate', 'VARCHAR', false, 50, null);
        $this->addColumn('Polar', 'Polar', 'TINYINT', false, null, null);
        $this->addColumn('Boreal', 'Boreal', 'TINYINT', false, null, null);
        $this->addColumn('Temperate', 'Temperate', 'TINYINT', false, null, null);
        $this->addColumn('Subtropical', 'Subtropical', 'TINYINT', false, null, null);
        $this->addColumn('Tropical', 'Tropical', 'TINYINT', false, null, null);
        $this->addColumn('AverageDepth', 'Averagedepth', 'INTEGER', false, null, null);
        $this->addColumn('MaxDepth', 'Maxdepth', 'INTEGER', false, null, null);
        $this->addColumn('DepthRef', 'Depthref', 'INTEGER', false, null, null);
        $this->addColumn('TempSurface', 'Tempsurface', 'DOUBLE', false, null, null);
        $this->addColumn('TempSurfaceMap', 'Tempsurfacemap', 'VARCHAR', false, 50, null);
        $this->addColumn('TempDepth', 'Tempdepth', 'DOUBLE', false, null, null);
        $this->addColumn('TempDepthMap', 'Tempdepthmap', 'VARCHAR', false, 50, null);
        $this->addColumn('Description', 'Description', 'CLOB', false, null, null);
        $this->addColumn('TotalCount', 'Totalcount', 'INTEGER', false, null, null);
        $this->addColumn('TotalFamCount', 'Totalfamcount', 'INTEGER', false, null, null);
        $this->addColumn('TotalComplete', 'Totalcomplete', 'TINYINT', false, null, null);
        $this->addColumn('TotalLit', 'Totallit', 'INTEGER', false, null, null);
        $this->addColumn('TotalFamLit', 'Totalfamlit', 'INTEGER', false, null, null);
        $this->addColumn('TotalRef', 'Totalref', 'INTEGER', false, null, null);
        $this->addColumn('UseFlag', 'Useflag', 'TINYINT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('LastUpdate', 'Lastupdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('LatDegFill', 'Latdegfill', 'INTEGER', false, null, null);
        $this->addColumn('LatMinFill', 'Latminfill', 'INTEGER', false, null, null);
        $this->addColumn('NorthSouthFill', 'Northsouthfill', 'VARCHAR', false, 1, null);
        $this->addColumn('LongDegFill', 'Longdegfill', 'INTEGER', false, null, null);
        $this->addColumn('LongMinFill', 'Longminfill', 'INTEGER', false, null, null);
        $this->addColumn('EastWestFill', 'Eastwestfill', 'VARCHAR', false, 1, null);
        $this->addColumn('EcosystemURL1', 'Ecosystemurl1', 'CLOB', false, null, null);
        $this->addColumn('EcosystemURL2', 'Ecosystemurl2', 'CLOB', false, null, null);
        $this->addColumn('EcosystemURL3', 'Ecosystemurl3', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('EcosystemName_German', 'EcosystemnameGerman', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Russian_original', 'EcosystemnameRussianOriginal', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Russian', 'EcosystemnameRussian', 'CLOB', false, null, null);
        $this->addColumn('EcosystemName_French', 'EcosystemnameFrench', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Chinese', 'EcosystemnameChinese', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Dutch', 'EcosystemnameDutch', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Italian', 'EcosystemnameItalian', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Swedish', 'EcosystemnameSwedish', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Greek_original', 'EcosystemnameGreekOriginal', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Greek', 'EcosystemnameGreek', 'CLOB', false, null, null);
        $this->addColumn('EcosystemName_Portuguese', 'EcosystemnamePortuguese', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Spanish', 'EcosystemnameSpanish', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemName_Chinese_u', 'EcosystemnameChineseU', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EcosystemrefTableMap
