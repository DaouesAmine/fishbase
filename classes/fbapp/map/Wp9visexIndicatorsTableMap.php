<?php



/**
 * This class defines the structure of the 'wp9visex_indicators' table.
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
class Wp9visexIndicatorsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Wp9visexIndicatorsTableMap';

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
        $this->setName('wp9visex_indicators');
        $this->setPhpName('Wp9visexIndicators');
        $this->setClassname('Wp9visexIndicators');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Name', 'Name', 'CHAR', false, 200, null);
        $this->addColumn('Institution', 'Institution', 'CHAR', false, 200, null);
        $this->addColumn('Email', 'Email', 'CHAR', false, 200, null);
        $this->addColumn('MPAName', 'Mpaname', 'CHAR', false, 200, null);
        $this->addColumn('MPACountry', 'Mpacountry', 'CHAR', false, 100, null);
        $this->addColumn('MPALocation', 'Mpalocation', 'CHAR', false, 200, null);
        $this->addColumn('MPACharacter', 'Mpacharacter', 'CHAR', false, 100, null);
        $this->addColumn('ScubaDiving', 'Scubadiving', 'CHAR', false, 10, null);
        $this->addColumn('Snorkeling', 'Snorkeling', 'CHAR', false, 10, null);
        $this->addColumn('Hiking', 'Hiking', 'CHAR', false, 10, null);
        $this->addColumn('FFWatching', 'Ffwatching', 'CHAR', false, 10, null);
        $this->addColumn('SeascapeWatching', 'Seascapewatching', 'CHAR', false, 10, null);
        $this->addColumn('Other1', 'Other1', 'CHAR', false, 200, null);
        $this->addColumn('Other2', 'Other2', 'CHAR', false, 200, null);
        $this->addColumn('Other3', 'Other3', 'CHAR', false, 200, null);
        $this->addColumn('Other4', 'Other4', 'CHAR', false, 200, null);
        $this->addColumn('ComName1', 'Comname1', 'CHAR', false, 200, null);
        $this->addColumn('SciName1', 'Sciname1', 'CHAR', false, 200, null);
        $this->addColumn('DescEco1', 'Desceco1', 'CHAR', false, 200, null);
        $this->addColumn('TempPres1', 'Temppres1', 'CHAR', false, 50, null);
        $this->addColumn('ComName2', 'Comname2', 'CHAR', false, 200, null);
        $this->addColumn('SciName2', 'Sciname2', 'CHAR', false, 200, null);
        $this->addColumn('DescEco2', 'Desceco2', 'CHAR', false, 200, null);
        $this->addColumn('TempPres2', 'Temppres2', 'CHAR', false, 50, null);
        $this->addColumn('ComName3', 'Comname3', 'CHAR', false, 200, null);
        $this->addColumn('SciName3', 'Sciname3', 'CHAR', false, 200, null);
        $this->addColumn('DescEco3', 'Desceco3', 'CHAR', false, 200, null);
        $this->addColumn('TempPres3', 'Temppres3', 'CHAR', false, 50, null);
        $this->addColumn('ComName4', 'Comname4', 'CHAR', false, 200, null);
        $this->addColumn('SciName4', 'Sciname4', 'CHAR', false, 200, null);
        $this->addColumn('DescEco4', 'Desceco4', 'CHAR', false, 200, null);
        $this->addColumn('TempPres4', 'Temppres4', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName1', 'Ecocomname1', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco1', 'Ecodesceco1', 'CHAR', false, 200, null);
        $this->addColumn('RelDis1', 'Reldis1', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName2', 'Ecocomname2', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco2', 'Ecodesceco2', 'CHAR', false, 200, null);
        $this->addColumn('RelDis2', 'Reldis2', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName3', 'Ecocomname3', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco3', 'Ecodesceco3', 'CHAR', false, 200, null);
        $this->addColumn('RelDis3', 'Reldis3', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName4', 'Ecocomname4', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco4', 'Ecodesceco4', 'CHAR', false, 200, null);
        $this->addColumn('RelDis4', 'Reldis4', 'CHAR', false, 50, null);
        $this->addColumn('VisEx_HistInfo_4', 'VisexHistinfo4', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo_3', 'VisexHistinfo3', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo_2', 'VisexHistinfo2', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo_1', 'VisexHistinfo1', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_Ref_Info1', 'VisexRefInfo1', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo_1', 'VisexCurinfo1', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo_2', 'VisexCurinfo2', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo_3', 'VisexCurinfo3', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo_4', 'VisexCurinfo4', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo2_4', 'VisexHistinfo24', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo2_3', 'VisexHistinfo23', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo2_2', 'VisexHistinfo22', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo2_1', 'VisexHistinfo21', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_Ref_Info2', 'VisexRefInfo2', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo2_1', 'VisexCurinfo21', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo2_2', 'VisexCurinfo22', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo2_3', 'VisexCurinfo23', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo2_4', 'VisexCurinfo24', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo3_4', 'VisexHistinfo34', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo3_3', 'VisexHistinfo33', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo3_2', 'VisexHistinfo32', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo3_1', 'VisexHistinfo31', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_Ref_Info3', 'VisexRefInfo3', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo3_1', 'VisexCurinfo31', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo3_2', 'VisexCurinfo32', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo3_3', 'VisexCurinfo33', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo3_4', 'VisexCurinfo34', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo4_4', 'VisexHistinfo44', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo4_3', 'VisexHistinfo43', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo4_2', 'VisexHistinfo42', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_HistInfo4_1', 'VisexHistinfo41', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_Ref_Info4', 'VisexRefInfo4', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo4_1', 'VisexCurinfo41', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo4_2', 'VisexCurinfo42', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo4_3', 'VisexCurinfo43', 'CHAR', false, 5, null);
        $this->addColumn('VisEx_CurInfo4_4', 'VisexCurinfo44', 'CHAR', false, 5, null);
        $this->addColumn('newpassword', 'Newpassword', 'VARCHAR', false, 5, null);
        $this->addColumn('IndDate', 'Inddate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // Wp9visexIndicatorsTableMap
