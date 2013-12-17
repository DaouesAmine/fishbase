<?php



/**
 * This class defines the structure of the 'larvae' table.
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
class LarvaeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LarvaeTableMap';

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
        $this->setName('larvae');
        $this->setPhpName('Larvae');
        $this->setClassname('Larvae');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('LarvaeRefNo', 'Larvaerefno', 'INTEGER', false, null, null);
        $this->addColumn('OtherRef1', 'Otherref1', 'INTEGER', false, null, null);
        $this->addColumn('OtherRef2', 'Otherref2', 'INTEGER', false, null, null);
        $this->addPrimaryKey('LarvalArea', 'Larvalarea', 'VARCHAR', true, 120, null);
        $this->addColumn('PlaceofDevelopment', 'Placeofdevelopment', 'VARCHAR', false, 38, '');
        $this->addColumn('LhMax', 'Lhmax', 'FLOAT', false, null, null);
        $this->addColumn('LBirthmaxRef', 'Lbirthmaxref', 'INTEGER', false, null, 0);
        $this->addColumn('LhMin', 'Lhmin', 'FLOAT', false, null, null);
        $this->addColumn('LBirthminRef', 'Lbirthminref', 'INTEGER', false, null, null);
        $this->addColumn('LhMid', 'Lhmid', 'FLOAT', false, null, null);
        $this->addColumn('LBirthmodRef', 'Lbirthmodref', 'INTEGER', false, null, null);
        $this->addColumn('PreanalLengthMaxY', 'Preanallengthmaxy', 'FLOAT', false, null, null);
        $this->addColumn('PreAnmaxRef', 'Preanmaxref', 'INTEGER', false, null, null);
        $this->addColumn('PreanalLengthMinY', 'Preanallengthminy', 'FLOAT', false, null, null);
        $this->addColumn('PreAnminRef', 'Preanminref', 'INTEGER', false, null, null);
        $this->addColumn('PreanalLengthModY', 'Preanallengthmody', 'FLOAT', false, null, null);
        $this->addColumn('PreAnmodRef', 'Preanmodref', 'INTEGER', false, null, null);
        $this->addColumn('FlexLengthMin', 'Flexlengthmin', 'FLOAT', false, null, null);
        $this->addColumn('FlexLengthMod', 'Flexlengthmod', 'FLOAT', false, null, null);
        $this->addColumn('FlexLengthMax', 'Flexlengthmax', 'FLOAT', false, null, null);
        $this->addColumn('FlexLengthType', 'Flexlengthtype', 'CHAR', false, 2, null);
        $this->addColumn('FlexLengthMinRef', 'Flexlengthminref', 'INTEGER', false, null, null);
        $this->addColumn('FlexLengthModRef', 'Flexlengthmodref', 'INTEGER', false, null, null);
        $this->addColumn('FlexLengthMaxRef', 'Flexlengthmaxref', 'INTEGER', false, null, null);
        $this->addColumn('TransLengthMin', 'Translengthmin', 'FLOAT', false, null, null);
        $this->addColumn('TransLengthMod', 'Translengthmod', 'FLOAT', false, null, null);
        $this->addColumn('TransLengthMax', 'Translengthmax', 'FLOAT', false, null, null);
        $this->addColumn('TransLengthType', 'Translengthtype', 'CHAR', false, 2, null);
        $this->addColumn('TransLengthMinRef', 'Translengthminref', 'INTEGER', false, null, null);
        $this->addColumn('TransLengthModRef', 'Translengthmodref', 'INTEGER', false, null, null);
        $this->addColumn('TransLengthMaxRef', 'Translengthmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LarvalDurationMin', 'Larvaldurationmin', 'FLOAT', false, null, null);
        $this->addColumn('LarvalDurationMinRef', 'Larvaldurationminref', 'INTEGER', false, null, null);
        $this->addColumn('LarvalDurationMax', 'Larvaldurationmax', 'FLOAT', false, null, null);
        $this->addColumn('LarvalDurationMaxRef', 'Larvaldurationmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LarvalDurationMod', 'Larvaldurationmod', 'FLOAT', false, null, null);
        $this->addColumn('LarvalDurationModRef', 'Larvaldurationmodref', 'INTEGER', false, null, null);
        $this->addColumn('Shapeofyolksac', 'Shapeofyolksac', 'VARCHAR', false, 9, null);
        $this->addColumn('YolksacPigm', 'Yolksacpigm', 'VARCHAR', false, 11, null);
        $this->addColumn('YolksacSegm', 'Yolksacsegm', 'VARCHAR', false, 11, null);
        $this->addColumn('YolkRef', 'Yolkref', 'INTEGER', false, null, null);
        $this->addColumn('OilGlobules', 'Oilglobules', 'VARCHAR', false, 25, null);
        $this->addColumn('OilGlobuleposH', 'Oilglobuleposh', 'VARCHAR', false, 9, null);
        $this->addColumn('OilGlobuleposV', 'Oilglobuleposv', 'VARCHAR', false, 7, null);
        $this->addColumn('OilGlobulePigm', 'Oilglobulepigm', 'VARCHAR', false, 11, null);
        $this->addColumn('RowsonTailY', 'Rowsontaily', 'VARCHAR', false, 30, null);
        $this->addColumn('OtherMelOnTailY', 'Othermelontaily', 'VARCHAR', false, 45, null);
        $this->addColumn('MelonHeadTrunkY', 'Melonheadtrunky', 'VARCHAR', false, 32, null);
        $this->addColumn('LyaMax', 'Lyamax', 'FLOAT', false, null, null);
        $this->addColumn('L1FeedmaxRef', 'L1feedmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LyaMin', 'Lyamin', 'FLOAT', false, null, null);
        $this->addColumn('L1FeedminRef', 'L1feedminref', 'INTEGER', false, null, null);
        $this->addColumn('LyaMod', 'Lyamod', 'FLOAT', false, null, null);
        $this->addColumn('L1FeedmodRef', 'L1feedmodref', 'INTEGER', false, null, null);
        $this->addColumn('JanLarv', 'Janlarv', 'TINYINT', false, null, null);
        $this->addColumn('FebLarv', 'Feblarv', 'TINYINT', false, null, null);
        $this->addColumn('MarLarv', 'Marlarv', 'TINYINT', false, null, null);
        $this->addColumn('AprLarv', 'Aprlarv', 'TINYINT', false, null, null);
        $this->addColumn('MayLarv', 'Maylarv', 'TINYINT', false, null, null);
        $this->addColumn('JunLarv', 'Junlarv', 'TINYINT', false, null, null);
        $this->addColumn('JulLarv', 'Jullarv', 'TINYINT', false, null, null);
        $this->addColumn('AugLarv', 'Auglarv', 'TINYINT', false, null, null);
        $this->addColumn('SepLarv', 'Seplarv', 'TINYINT', false, null, null);
        $this->addColumn('OctLarv', 'Octlarv', 'TINYINT', false, null, null);
        $this->addColumn('NovLarv', 'Novlarv', 'BOOLEAN', false, 1, null);
        $this->addColumn('DecLarv', 'Declarv', 'TINYINT', false, null, null);
        $this->addColumn('PresenceRef', 'Presenceref', 'INTEGER', false, null, null);
        $this->addColumn('WaterDepthMax', 'Waterdepthmax', 'SMALLINT', false, null, null);
        $this->addColumn('WaterTempMax', 'Watertempmax', 'FLOAT', false, null, null);
        $this->addColumn('SalinityMax', 'Salinitymax', 'FLOAT', false, null, null);
        $this->addColumn('pH', 'Ph', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('WatermaxRef', 'Watermaxref', 'INTEGER', false, null, null);
        $this->addColumn('WaterDepthMin', 'Waterdepthmin', 'SMALLINT', false, null, null);
        $this->addColumn('WaterTempMin', 'Watertempmin', 'FLOAT', false, null, null);
        $this->addColumn('SalinityMin', 'Salinitymin', 'FLOAT', false, null, null);
        $this->addColumn('pHMin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('WaterminRef', 'Waterminref', 'INTEGER', false, null, null);
        $this->addColumn('WaterDepthMod', 'Waterdepthmod', 'SMALLINT', false, null, null);
        $this->addColumn('WaterTempMod', 'Watertempmod', 'FLOAT', false, null, null);
        $this->addColumn('SalinityMod', 'Salinitymod', 'FLOAT', false, null, null);
        $this->addColumn('pHMod', 'Phmod', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMod', 'Oxygenmod', 'FLOAT', false, null, null);
        $this->addColumn('WatermodRef', 'Watermodref', 'INTEGER', false, null, null);
        $this->addColumn('StrikingFeature', 'Strikingfeature', 'VARCHAR', false, 35, null);
        $this->addColumn('LarvaPic', 'Larvapic', 'VARCHAR', false, 8, null);
        $this->addColumn('StrikingShapeLat', 'Strikingshapelat', 'VARCHAR', false, 21, null);
        $this->addColumn('StrikingShapeDors', 'Strikingshapedors', 'VARCHAR', false, 21, null);
        $this->addColumn('BodyForm', 'Bodyform', 'VARCHAR', false, 50, null);
        $this->addColumn('ShapeofGut', 'Shapeofgut', 'VARCHAR', false, 21, null);
        $this->addColumn('GasBladderEarly', 'Gasbladderearly', 'VARCHAR', false, 9, null);
        $this->addColumn('GasBladderLate', 'Gasbladderlate', 'VARCHAR', false, 9, null);
        $this->addColumn('SpinalArmatureEarl', 'Spinalarmatureearl', 'VARCHAR', false, 24, null);
        $this->addColumn('SpinalArmatureLate', 'Spinalarmaturelate', 'VARCHAR', false, 24, null);
        $this->addColumn('RowsonTailE', 'Rowsontaile', 'VARCHAR', false, 30, null);
        $this->addColumn('OtherMelonTailE', 'Othermelontaile', 'VARCHAR', false, 45, null);
        $this->addColumn('MelonHeadTrunkE', 'Melonheadtrunke', 'VARCHAR', false, 32, null);
        $this->addColumn('RowsonTaill', 'Rowsontaill', 'VARCHAR', false, 30, null);
        $this->addColumn('OtherMelonTaill', 'Othermelontaill', 'VARCHAR', false, 45, null);
        $this->addColumn('MelonHeadTrunkl', 'Melonheadtrunkl', 'VARCHAR', false, 32, null);
        $this->addColumn('UrostyleRegion', 'Urostyleregion', 'VARCHAR', false, 11, null);
        $this->addColumn('UrostyleRegionLate', 'Urostyleregionlate', 'VARCHAR', false, 11, null);
        $this->addColumn('Peritoneum', 'Peritoneum', 'VARCHAR', false, 25, null);
        $this->addColumn('PectoralsI', 'Pectoralsi', 'VARCHAR', false, 16, null);
        $this->addColumn('PectoralsII', 'Pectoralsii', 'VARCHAR', false, 31, null);
        $this->addColumn('PelvicsI', 'Pelvicsi', 'VARCHAR', false, 29, null);
        $this->addColumn('PelvicsII', 'Pelvicsii', 'VARCHAR', false, 31, null);
        $this->addColumn('MyomeresMax', 'Myomeresmax', 'SMALLINT', false, null, null);
        $this->addColumn('MyomeresMin', 'Myomeresmin', 'SMALLINT', false, null, null);
        $this->addColumn('MyomeresMod', 'Myomeresmod', 'SMALLINT', false, null, null);
        $this->addColumn('MyomVert', 'Myomvert', 'VARCHAR', false, 9, null);
        $this->addColumn('TotMyomRef', 'Totmyomref', 'INTEGER', false, null, null);
        $this->addColumn('MyomeresMaxPrean', 'Myomeresmaxprean', 'SMALLINT', false, null, null);
        $this->addColumn('MyomeresMinPrean', 'Myomeresminprean', 'SMALLINT', false, null, null);
        $this->addColumn('MyomeresModPrean', 'Myomeresmodprean', 'SMALLINT', false, null, null);
        $this->addColumn('MyomVert2', 'Myomvert2', 'VARCHAR', false, 9, null);
        $this->addColumn('PreAnMyoRef', 'Preanmyoref', 'INTEGER', false, null, null);
        $this->addColumn('RLLatePre', 'Rllatepre', 'FLOAT', false, null, null);
        $this->addColumn('RLLateFlex', 'Rllateflex', 'FLOAT', false, null, null);
        $this->addColumn('RLLatePost', 'Rllatepost', 'FLOAT', false, null, null);
        $this->addColumn('RLEarlyPre', 'Rlearlypre', 'FLOAT', false, null, null);
        $this->addColumn('RLEarlyFlex', 'Rlearlyflex', 'FLOAT', false, null, null);
        $this->addColumn('RLEarlyPost', 'Rlearlypost', 'FLOAT', false, null, null);
        $this->addColumn('RLFlexPre', 'Rlflexpre', 'FLOAT', false, null, null);
        $this->addColumn('RLFlexFlex', 'Rlflexflex', 'FLOAT', false, null, null);
        $this->addColumn('RLFlexPost', 'Rlflexpost', 'FLOAT', false, null, null);
        $this->addColumn('MeasurementsPreRef', 'Measurementspreref', 'INTEGER', false, null, null);
        $this->addColumn('MeasurementsFlexRef', 'Measurementsflexref', 'INTEGER', false, null, null);
        $this->addColumn('MeasurementsPostRef', 'Measurementspostref', 'INTEGER', false, null, null);
        $this->addColumn('TypePre', 'Typepre', 'CHAR', false, 2, null);
        $this->addColumn('TypeFlex', 'Typeflex', 'CHAR', false, 2, null);
        $this->addColumn('TypePost', 'Typepost', 'CHAR', false, 2, null);
        $this->addColumn('comment', 'Comment', 'VARCHAR', false, 20, null);
        $this->addColumn('PreanalLengthMaxPre', 'Preanallengthmaxpre', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthMaxFlex', 'Preanallengthmaxflex', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthMaxPost', 'Preanallengthmaxpost', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthMinPre', 'Preanallengthminpre', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthMinFlex', 'Preanallengthminflex', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthMinPost', 'Preanallengthminpost', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthLitPre', 'Preanallengthlitpre', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthLitFlex', 'Preanallengthlitflex', 'FLOAT', false, null, null);
        $this->addColumn('PreanalLengthLitPost', 'Preanallengthlitpost', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMaxPre', 'Prepeclengthmaxpre', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMaxFlex', 'Prepeclengthmaxflex', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMaxPost', 'Prepeclengthmaxpost', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMinPre', 'Prepeclengthminpre', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMinFlex', 'Prepeclengthminflex', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthMinPost', 'Prepeclengthminpost', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthLitPre', 'Prepeclengthlitpre', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthLitFlex', 'Prepeclengthlitflex', 'FLOAT', false, null, null);
        $this->addColumn('PrepecLengthLitPost', 'Prepeclengthlitpost', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMaxPre', 'Preorbitalmaxpre', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMaxFlex', 'Preorbitalmaxflex', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMaxPost', 'Preorbitalmaxpost', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMinPre', 'Preorbitalminpre', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMinFlex', 'Preorbitalminflex', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalMinPost', 'Preorbitalminpost', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalLitPre', 'Preorbitallitpre', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalLitFlex', 'Preorbitallitflex', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalLitPost', 'Preorbitallitpost', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMaxPre', 'Diameterofeyemaxpre', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMaxFlex', 'Diameterofeyemaxflex', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMaxPost', 'Diameterofeyemaxpost', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMinPre', 'Diameterofeyeminpre', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMinFlex', 'Diameterofeyeminflex', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeMinPost', 'Diameterofeyeminpost', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeLitPre', 'Diameterofeyelitpre', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeLitFlex', 'Diameterofeyelitflex', 'FLOAT', false, null, null);
        $this->addColumn('DiameterofEyeLitPost', 'Diameterofeyelitpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMaxPre', 'Deptheyemaxpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMaxFlex', 'Deptheyemaxflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMaxPost', 'Deptheyemaxpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMinPre', 'Deptheyeminpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMinFlex', 'Deptheyeminflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeMinPost', 'Deptheyeminpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeLitPre', 'Deptheyelitpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeLitFlex', 'Deptheyelitflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthEyeLitPost', 'Deptheyelitpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMaxPre', 'Depthpectoralmaxpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMaxFlex', 'Depthpectoralmaxflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMaxPost', 'Depthpectoralmaxpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMinPre', 'Depthpectoralminpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMinFlex', 'Depthpectoralminflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralMinPost', 'Depthpectoralminpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralLitPre', 'Depthpectorallitpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralLitFlex', 'Depthpectorallitflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthPectoralLitPost', 'Depthpectorallitpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMaxPre', 'Depthanusmaxpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMaxFlex', 'Depthanusmaxflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMaxPost', 'Depthanusmaxpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMinPre', 'Depthanusminpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMinFlex', 'Depthanusminflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusMinPost', 'Depthanusminpost', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusLitPre', 'Depthanuslitpre', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusLitFlex', 'Depthanuslitflex', 'FLOAT', false, null, null);
        $this->addColumn('DepthAnusLitPost', 'Depthanuslitpost', 'FLOAT', false, null, null);
        $this->addColumn('AddCharYolks', 'Addcharyolks', 'CLOB', false, null, null);
        $this->addColumn('AddCharPosts', 'Addcharposts', 'CLOB', false, null, null);
        $this->addColumn('EaseofID', 'Easeofid', 'VARCHAR', false, 80, null);
        $this->addColumn('SimilarSpecies1', 'Similarspecies1', 'INTEGER', false, null, null);
        $this->addColumn('SimilarSpec1Remarks', 'Similarspec1remarks', 'CLOB', false, null, null);
        $this->addColumn('SimilarSpecies2', 'Similarspecies2', 'INTEGER', false, null, null);
        $this->addColumn('SimilarSpec2Remarks', 'Similarspec2remarks', 'CLOB', false, null, null);
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

} // LarvaeTableMap
