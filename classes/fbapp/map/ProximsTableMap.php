<?php



/**
 * This class defines the structure of the 'proxims' table.
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
class ProximsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ProximsTableMap';

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
        $this->setName('proxims');
        $this->setPhpName('Proxims');
        $this->setClassname('Proxims');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('ChemicsRefNo', 'Chemicsrefno', 'INTEGER', true, null, 4883);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 60, null);
        $this->addColumn('Length', 'Length', 'FLOAT', false, null, null);
        $this->addColumn('LengthUpper', 'Lengthupper', 'FLOAT', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'CHAR', false, 2, null);
        $this->addColumn('WeightLower', 'Weightlower', 'FLOAT', false, null, null);
        $this->addColumn('WeightUpper', 'Weightupper', 'FLOAT', false, null, null);
        $this->addColumn('HeadLower', 'Headlower', 'FLOAT', false, null, null);
        $this->addColumn('HeadUpper', 'Headupper', 'FLOAT', false, null, null);
        $this->addColumn('VisceraLower22', 'Visceralower22', 'FLOAT', false, null, null);
        $this->addColumn('VisceraUpper22', 'Visceraupper22', 'FLOAT', false, null, null);
        $this->addColumn('TrunkLower', 'Trunklower', 'FLOAT', false, null, null);
        $this->addColumn('TrunkUpper', 'Trunkupper', 'FLOAT', false, null, null);
        $this->addColumn('RoeLower', 'Roelower', 'FLOAT', false, null, null);
        $this->addColumn('RoeUpper', 'Roeupper', 'FLOAT', false, null, null);
        $this->addColumn('SkinLower', 'Skinlower', 'FLOAT', false, null, null);
        $this->addColumn('SkinUpper', 'Skinupper', 'FLOAT', false, null, null);
        $this->addColumn('TestesLower', 'Testeslower', 'FLOAT', false, null, null);
        $this->addColumn('TestesUpper', 'Testesupper', 'FLOAT', false, null, null);
        $this->addColumn('FinsLower', 'Finslower', 'FLOAT', false, null, null);
        $this->addColumn('FinsUpper', 'Finsupper', 'FLOAT', false, null, null);
        $this->addColumn('LiverLower', 'Liverlower', 'FLOAT', false, null, null);
        $this->addColumn('LiverUpper', 'Liverupper', 'FLOAT', false, null, null);
        $this->addColumn('BonesLower', 'Boneslower', 'FLOAT', false, null, null);
        $this->addColumn('BonesUpper', 'Bonesupper', 'FLOAT', false, null, null);
        $this->addColumn('MeatLower', 'Meatlower', 'FLOAT', false, null, null);
        $this->addColumn('MeatUpper', 'Meatupper', 'FLOAT', false, null, null);
        $this->addColumn('FilletLower', 'Filletlower', 'FLOAT', false, null, null);
        $this->addColumn('FilletUpper', 'Filletupper', 'FLOAT', false, null, null);
        $this->addColumn('SteakLower', 'Steaklower', 'FLOAT', false, null, null);
        $this->addColumn('SteakUpper', 'Steakupper', 'FLOAT', false, null, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 64, null);
        $this->addColumn('MeatMoistMin', 'Meatmoistmin', 'FLOAT', false, null, null);
        $this->addColumn('MeatMoistMax', 'Meatmoistmax', 'FLOAT', false, null, null);
        $this->addColumn('MeatProtMin', 'Meatprotmin', 'FLOAT', false, null, null);
        $this->addColumn('MeatProtMax', 'Meatprotmax', 'FLOAT', false, null, null);
        $this->addColumn('MeatFatMin', 'Meatfatmin', 'FLOAT', false, null, null);
        $this->addColumn('MeatFatMax', 'Meatfatmax', 'FLOAT', false, null, null);
        $this->addColumn('MeatAshMin', 'Meatashmin', 'FLOAT', false, null, null);
        $this->addColumn('MeatAshMax', 'Meatashmax', 'FLOAT', false, null, null);
        $this->addColumn('LiverMoistMin', 'Livermoistmin', 'FLOAT', false, null, null);
        $this->addColumn('LiverMoistMax', 'Livermoistmax', 'FLOAT', false, null, null);
        $this->addColumn('LiverProtMin', 'Liverprotmin', 'FLOAT', false, null, null);
        $this->addColumn('LiverProtMax', 'Liverprotmax', 'FLOAT', false, null, null);
        $this->addColumn('LiverFatMin', 'Liverfatmin', 'FLOAT', false, null, null);
        $this->addColumn('LiverFatMax', 'Liverfatmax', 'FLOAT', false, null, null);
        $this->addColumn('LiverAshMin', 'Liverashmin', 'FLOAT', false, null, null);
        $this->addColumn('LiverAshMax', 'Liverashmax', 'FLOAT', false, null, null);
        $this->addColumn('RoeMoistMin', 'Roemoistmin', 'FLOAT', false, null, null);
        $this->addColumn('RoeMoistMax', 'Roemoistmax', 'FLOAT', false, null, null);
        $this->addColumn('RoeProtMin', 'Roeprotmin', 'FLOAT', false, null, null);
        $this->addColumn('RoeProtMax', 'Roeprotmax', 'FLOAT', false, null, null);
        $this->addColumn('RoeFatMin', 'Roefatmin', 'FLOAT', false, null, null);
        $this->addColumn('RoeFatMax', 'Roefatmax', 'FLOAT', false, null, null);
        $this->addColumn('RoeAshMin', 'Roeashmin', 'FLOAT', false, null, null);
        $this->addColumn('RoeAshMax', 'Roeashmax', 'FLOAT', false, null, null);
        $this->addColumn('VisceraMoistMin', 'Visceramoistmin', 'FLOAT', false, null, null);
        $this->addColumn('VisceraMoistMax', 'Visceramoistmax', 'FLOAT', false, null, null);
        $this->addColumn('VisceraProtMin', 'Visceraprotmin', 'FLOAT', false, null, null);
        $this->addColumn('VisceraProtMax', 'Visceraprotmax', 'FLOAT', false, null, null);
        $this->addColumn('VisceraFatMin', 'Viscerafatmin', 'FLOAT', false, null, null);
        $this->addColumn('VisceraFatMax', 'Viscerafatmax', 'FLOAT', false, null, null);
        $this->addColumn('VisceraAshMin', 'Visceraashmin', 'FLOAT', false, null, null);
        $this->addColumn('VisceraAshMax', 'Visceraashmax', 'FLOAT', false, null, null);
        $this->addColumn('HeadMoistMin', 'Headmoistmin', 'FLOAT', false, null, null);
        $this->addColumn('HeadMoistMax', 'Headmoistmax', 'FLOAT', false, null, null);
        $this->addColumn('HeadProtMin', 'Headprotmin', 'FLOAT', false, null, null);
        $this->addColumn('HeadProtMax', 'Headprotmax', 'FLOAT', false, null, null);
        $this->addColumn('HeadFatMin', 'Headfatmin', 'FLOAT', false, null, null);
        $this->addColumn('HeadFatMax', 'Headfatmax', 'FLOAT', false, null, null);
        $this->addColumn('HeadAshMin', 'Headashmin', 'FLOAT', false, null, null);
        $this->addColumn('HeadAshMax', 'Headashmax', 'FLOAT', false, null, null);
        $this->addColumn('WasteMoistMin', 'Wastemoistmin', 'FLOAT', false, null, null);
        $this->addColumn('WasteMoistMax', 'Wastemoistmax', 'FLOAT', false, null, null);
        $this->addColumn('WasteProtMin', 'Wasteprotmin', 'FLOAT', false, null, null);
        $this->addColumn('WasteProtMax', 'Wasteprotmax', 'FLOAT', false, null, null);
        $this->addColumn('WasteFatMin', 'Wastefatmin', 'FLOAT', false, null, null);
        $this->addColumn('WasteFatMax', 'Wastefatmax', 'FLOAT', false, null, null);
        $this->addColumn('WasteAshMin', 'Wasteashmin', 'FLOAT', false, null, null);
        $this->addColumn('WasteAshMax', 'Wasteashmax', 'FLOAT', false, null, null);
        $this->addColumn('CommentChemics', 'Commentchemics', 'VARCHAR', false, 60, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ProximsTableMap
