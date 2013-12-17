<?php



/**
 * This class defines the structure of the 'disref' table.
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
class DisrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.DisrefTableMap';

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
        $this->setName('disref');
        $this->setPhpName('Disref');
        $this->setClassname('Disref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('DisCode', 'Discode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('DiseasesRefNo', 'Diseasesrefno', 'INTEGER', true, null, null);
        $this->addColumn('DiseaseI', 'Diseasei', 'VARCHAR', false, 46, null);
        $this->addPrimaryKey('DiseaseII', 'Diseaseii', 'VARCHAR', true, 60, null);
        $this->addColumn('Pic', 'Pic', 'VARCHAR', false, 8, null);
        $this->addColumn('Othernames', 'Othernames', 'VARCHAR', false, 146, null);
        $this->addPrimaryKey('GermGenus', 'Germgenus', 'VARCHAR', true, 30, null);
        $this->addColumn('GermSpecies', 'Germspecies', 'VARCHAR', false, 50, null);
        $this->addColumn('Group', 'Group', 'VARCHAR', false, 40, null);
        $this->addColumn('SkinFinsAfflicted', 'Skinfinsafflicted', 'TINYINT', false, null, null);
        $this->addColumn('BellyAfflicted', 'Bellyafflicted', 'TINYINT', false, null, null);
        $this->addColumn('AberrantBehavior', 'Aberrantbehavior', 'TINYINT', false, null, null);
        $this->addColumn('GillsAfflicted', 'Gillsafflicted', 'TINYINT', false, null, null);
        $this->addColumn('AnusAfflicted', 'Anusafflicted', 'TINYINT', false, null, null);
        $this->addColumn('OtherBehavior', 'Otherbehavior', 'TINYINT', false, null, null);
        $this->addColumn('EyesAfflicted', 'Eyesafflicted', 'TINYINT', false, null, null);
        $this->addColumn('VisceraAfflicted', 'Visceraafflicted', 'TINYINT', false, null, null);
        $this->addColumn('OtherSymptoms', 'Othersymptoms', 'TINYINT', false, null, null);
        $this->addColumn('AberrantColor', 'Aberrantcolor', 'TINYINT', false, null, null);
        $this->addColumn('AberrantCoat', 'Aberrantcoat', 'TINYINT', false, null, null);
        $this->addColumn('AberrantMuscusProd', 'Aberrantmuscusprod', 'TINYINT', false, null, null);
        $this->addColumn('Spots', 'Spots', 'TINYINT', false, null, null);
        $this->addColumn('SpotsColor', 'Spotscolor', 'VARCHAR', false, 5, null);
        $this->addColumn('SpotsonHead', 'Spotsonhead', 'TINYINT', false, null, null);
        $this->addColumn('DorsalSpots', 'Dorsalspots', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonDorsalFin', 'Spotsondorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonCaudalFin', 'Spotsoncaudalfin', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonTrunk', 'Spotsontrunk', 'TINYINT', false, null, null);
        $this->addColumn('VentralSpots', 'Ventralspots', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonAnalFin', 'Spotsonanalfin', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonUnpairedF', 'Spotsonunpairedf', 'TINYINT', false, null, null);
        $this->addColumn('SpotsonTail', 'Spotsontail', 'TINYINT', false, null, null);
        $this->addColumn('Areas', 'Areas', 'TINYINT', false, null, null);
        $this->addColumn('AreaColorI', 'Areacolori', 'VARCHAR', false, 5, null);
        $this->addColumn('AreasonHead', 'Areasonhead', 'TINYINT', false, null, null);
        $this->addColumn('DorsalAreas', 'Dorsalareas', 'TINYINT', false, null, null);
        $this->addColumn('AreaonDorsalFin', 'Areaondorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('AreaonCaudalFin', 'Areaoncaudalfin', 'TINYINT', false, null, null);
        $this->addColumn('AreasonTrunk', 'Areasontrunk', 'TINYINT', false, null, null);
        $this->addColumn('VentralAreas', 'Ventralareas', 'TINYINT', false, null, null);
        $this->addColumn('AreaonAnalFin', 'Areaonanalfin', 'TINYINT', false, null, null);
        $this->addColumn('AreaonUnpairedF', 'Areaonunpairedf', 'TINYINT', false, null, null);
        $this->addColumn('AreasonTail', 'Areasontail', 'TINYINT', false, null, null);
        $this->addColumn('Boils', 'Boils', 'TINYINT', false, null, null);
        $this->addColumn('BoilsColor', 'Boilscolor', 'VARCHAR', false, 5, null);
        $this->addColumn('BoilsonHead', 'Boilsonhead', 'TINYINT', false, null, null);
        $this->addColumn('Dorsalboils', 'Dorsalboils', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonDorsalFin', 'Boilsondorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonCaudalFin', 'Boilsoncaudalfin', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonTrunk', 'Boilsontrunk', 'TINYINT', false, null, null);
        $this->addColumn('VentralBoils', 'Ventralboils', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonAnalFin', 'Boilsonanalfin', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonUnpairedF', 'Boilsonunpairedf', 'TINYINT', false, null, null);
        $this->addColumn('BoilsonTail', 'Boilsontail', 'TINYINT', false, null, null);
        $this->addColumn('Ulcer', 'Ulcer', 'TINYINT', false, null, null);
        $this->addColumn('UlcerColor', 'Ulcercolor', 'VARCHAR', false, 5, null);
        $this->addColumn('UlceronHead', 'Ulceronhead', 'TINYINT', false, null, null);
        $this->addColumn('DorsalUlcer', 'Dorsalulcer', 'TINYINT', false, null, null);
        $this->addColumn('UlceronDorsalFin', 'Ulcerondorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('UlceronCaudalFin', 'Ulceroncaudalfin', 'TINYINT', false, null, null);
        $this->addColumn('UlceronTrunk', 'Ulcerontrunk', 'TINYINT', false, null, null);
        $this->addColumn('VentralUlcer', 'Ventralulcer', 'TINYINT', false, null, null);
        $this->addColumn('UlceronAnalFin', 'Ulceronanalfin', 'TINYINT', false, null, null);
        $this->addColumn('UlceronUnpairedF', 'Ulceronunpairedf', 'TINYINT', false, null, null);
        $this->addColumn('UlceronTail', 'Ulcerontail', 'TINYINT', false, null, null);
        $this->addColumn('AttachmentsSkin2', 'Attachmentsskin2', 'VARCHAR', false, 13, null);
        $this->addColumn('AttachmentonHead', 'Attachmentonhead', 'TINYINT', false, null, null);
        $this->addColumn('DorsalAttachments', 'Dorsalattachments', 'TINYINT', false, null, null);
        $this->addColumn('AttonDorsalFin', 'Attondorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('AttonCaudalFin', 'Attoncaudalfin', 'TINYINT', false, null, null);
        $this->addColumn('AttachmentonTrunk', 'Attachmentontrunk', 'TINYINT', false, null, null);
        $this->addColumn('VentralAttachments', 'Ventralattachments', 'TINYINT', false, null, null);
        $this->addColumn('AttonAnalFin', 'Attonanalfin', 'TINYINT', false, null, null);
        $this->addColumn('AttonUnpairedF', 'Attonunpairedf', 'TINYINT', false, null, null);
        $this->addColumn('AttachmentonTail', 'Attachmentontail', 'TINYINT', false, null, null);
        $this->addColumn('Fins1', 'Fins1', 'VARCHAR', false, 23, null);
        $this->addColumn('DorsalFin', 'Dorsalfin', 'TINYINT', false, null, null);
        $this->addColumn('CaudalFin', 'Caudalfin', 'TINYINT', false, null, null);
        $this->addColumn('AnalFin', 'Analfin', 'TINYINT', false, null, null);
        $this->addColumn('UnpairedFins', 'Unpairedfins', 'TINYINT', false, null, null);
        $this->addColumn('AberrantColorGills', 'Aberrantcolorgills', 'TINYINT', false, null, null);
        $this->addColumn('AberColorGill', 'Abercolorgill', 'VARCHAR', false, 13, null);
        $this->addColumn('EyeColor', 'Eyecolor', 'TINYINT', false, null, null);
        $this->addColumn('AberrantSpotsGill', 'Aberrantspotsgill', 'TINYINT', false, null, null);
        $this->addColumn('AberrantSpotsColor', 'Aberrantspotscolor', 'VARCHAR', false, 5, null);
        $this->addColumn('EyeSpots', 'Eyespots', 'VARCHAR', false, 5, null);
        $this->addColumn('KnotsonGills', 'Knotsongills', 'TINYINT', false, null, null);
        $this->addColumn('KnotsColor', 'Knotscolor', 'VARCHAR', false, 5, null);
        $this->addColumn('EyesCondition', 'Eyescondition', 'VARCHAR', false, 12, null);
        $this->addColumn('AreasonGills', 'Areasongills', 'TINYINT', false, null, null);
        $this->addColumn('AreasColor', 'Areascolor', 'VARCHAR', false, 5, null);
        $this->addColumn('MucusProdGills', 'Mucusprodgills', 'TINYINT', false, null, null);
        $this->addColumn('ConditionGills', 'Conditiongills', 'TINYINT', false, null, null);
        $this->addColumn('ObjectGills', 'Objectgills', 'TINYINT', false, null, null);
        $this->addColumn('AttachmentGills', 'Attachmentgills', 'VARCHAR', false, 13, null);
        $this->addColumn('BellyCondition', 'Bellycondition', 'VARCHAR', false, 12, null);
        $this->addColumn('AnusCondition', 'Anuscondition', 'TINYINT', false, null, null);
        $this->addColumn('BellyLumen', 'Bellylumen', 'TINYINT', false, null, null);
        $this->addColumn('AnusColor', 'Anuscolor', 'TINYINT', false, null, null);
        $this->addColumn('BellyWorms', 'Bellyworms', 'VARCHAR', false, 11, null);
        $this->addColumn('AnusObject', 'Anusobject', 'TINYINT', false, null, null);
        $this->addColumn('AnusAttachments', 'Anusattachments', 'VARCHAR', false, 13, null);
        $this->addColumn('AnusExudates', 'Anusexudates', 'TINYINT', false, null, null);
        $this->addColumn('LiverAffl', 'Liveraffl', 'TINYINT', false, null, null);
        $this->addColumn('LiverSize', 'Liversize', 'VARCHAR', false, 8, null);
        $this->addColumn('LiverApp', 'Liverapp', 'VARCHAR', false, 5, null);
        $this->addColumn('LiverBlot', 'Liverblot', 'TINYINT', false, null, null);
        $this->addColumn('LiverBlC', 'Liverblc', 'VARCHAR', false, 10, null);
        $this->addColumn('LiverKnots', 'Liverknots', 'TINYINT', false, null, null);
        $this->addColumn('LiverKnC', 'Liverknc', 'VARCHAR', false, 10, null);
        $this->addColumn('SpleenAffl', 'Spleenaffl', 'TINYINT', false, null, null);
        $this->addColumn('SpleenSize', 'Spleensize', 'VARCHAR', false, 8, null);
        $this->addColumn('SpleenApp', 'Spleenapp', 'VARCHAR', false, 5, null);
        $this->addColumn('SpleenBlot', 'Spleenblot', 'TINYINT', false, null, null);
        $this->addColumn('SpleenBlC', 'Spleenblc', 'VARCHAR', false, 10, null);
        $this->addColumn('SpleenKnots', 'Spleenknots', 'TINYINT', false, null, null);
        $this->addColumn('SpleenKnC', 'Spleenknc', 'VARCHAR', false, 10, null);
        $this->addColumn('KidneyAffl', 'Kidneyaffl', 'TINYINT', false, null, null);
        $this->addColumn('KidneySize', 'Kidneysize', 'VARCHAR', false, 8, null);
        $this->addColumn('KidneyApp', 'Kidneyapp', 'VARCHAR', false, 5, null);
        $this->addColumn('KidneyBlot', 'Kidneyblot', 'TINYINT', false, null, null);
        $this->addColumn('KidneyBlC', 'Kidneyblc', 'VARCHAR', false, 10, null);
        $this->addColumn('KidneyKnots', 'Kidneyknots', 'TINYINT', false, null, null);
        $this->addColumn('KidneyKnC', 'Kidneyknc', 'VARCHAR', false, 10, null);
        $this->addColumn('SwimBladderAffl', 'Swimbladderaffl', 'TINYINT', false, null, null);
        $this->addColumn('SwimBladderSize', 'Swimbladdersize', 'VARCHAR', false, 8, null);
        $this->addColumn('SwimBladderApp', 'Swimbladderapp', 'VARCHAR', false, 8, null);
        $this->addColumn('SwimBladderBlot', 'Swimbladderblot', 'TINYINT', false, null, null);
        $this->addColumn('SwimBladderBlC', 'Swimbladderblc', 'VARCHAR', false, 10, null);
        $this->addColumn('SwimBladderKnots', 'Swimbladderknots', 'TINYINT', false, null, null);
        $this->addColumn('SwimBladderKnC', 'Swimbladderknc', 'VARCHAR', false, 10, null);
        $this->addColumn('IntestineAffl', 'Intestineaffl', 'TINYINT', false, null, null);
        $this->addColumn('IntestineSize', 'Intestinesize', 'VARCHAR', false, 8, null);
        $this->addColumn('IntestineApp', 'Intestineapp', 'VARCHAR', false, 11, null);
        $this->addColumn('IntestineBlot', 'Intestineblot', 'TINYINT', false, null, null);
        $this->addColumn('IntestineBlC', 'Intestineblc', 'VARCHAR', false, 10, null);
        $this->addColumn('IntestineKnots', 'Intestineknots', 'TINYINT', false, null, null);
        $this->addColumn('IntestineKnC', 'Intestineknc', 'VARCHAR', false, 10, null);
        $this->addColumn('OtherOrgans', 'Otherorgans', 'TINYINT', false, null, null);
        $this->addColumn('OtherOrgansSize', 'Otherorganssize', 'VARCHAR', false, 8, null);
        $this->addColumn('OtherOrgansBlot', 'Otherorgansblot', 'TINYINT', false, null, null);
        $this->addColumn('OtherOrgansBlC', 'Otherorgansblc', 'VARCHAR', false, 10, null);
        $this->addColumn('OtherOrgansKnots', 'Otherorgansknots', 'TINYINT', false, null, null);
        $this->addColumn('OtherOrgansKnC', 'Otherorgansknc', 'VARCHAR', false, 10, null);
        $this->addColumn('AllOrgans', 'Allorgans', 'TINYINT', false, null, null);
        $this->addColumn('AllOrgansApp', 'Allorgansapp', 'VARCHAR', false, 7, null);
        $this->addColumn('Bristeling', 'Bristeling', 'TINYINT', false, null, null);
        $this->addColumn('Mortality', 'Mortality', 'VARCHAR', false, 28, null);
        $this->addColumn('Loss', 'Loss', 'TINYINT', false, null, null);
        $this->addColumn('SkeletonDeformation', 'Skeletondeformation', 'TINYINT', false, null, null);
        $this->addColumn('Spring', 'Spring', 'TINYINT', false, null, null);
        $this->addColumn('Summer', 'Summer', 'TINYINT', false, null, null);
        $this->addColumn('GrowthRate', 'Growthrate', 'TINYINT', false, null, null);
        $this->addColumn('Autumn', 'Autumn', 'TINYINT', false, null, null);
        $this->addColumn('Winter', 'Winter', 'TINYINT', false, null, null);
        $this->addColumn('Condition', 'Condition', 'TINYINT', false, null, null);
        $this->addColumn('AberrantActivity', 'Aberrantactivity', 'TINYINT', false, null, null);
        $this->addColumn('Activity', 'Activity', 'VARCHAR', false, 33, null);
        $this->addColumn('AberrantBalance', 'Aberrantbalance', 'TINYINT', false, null, null);
        $this->addColumn('AberrantSwMotions', 'Aberrantswmotions', 'TINYINT', false, null, null);
        $this->addColumn('SwimmingMotions', 'Swimmingmotions', 'VARCHAR', false, 8, null);
        $this->addColumn('AberrantBodyDirec', 'Aberrantbodydirec', 'TINYINT', false, null, null);
        $this->addColumn('Scraping', 'Scraping', 'TINYINT', false, null, null);
        $this->addColumn('Jumping', 'Jumping', 'TINYINT', false, null, null);
        $this->addColumn('AberrantFins', 'Aberrantfins', 'TINYINT', false, null, null);
        $this->addColumn('Fins', 'Fins', 'VARCHAR', false, 9, null);
        $this->addColumn('AberrantLocation', 'Aberrantlocation', 'TINYINT', false, null, null);
        $this->addColumn('FishNearSurface', 'Fishnearsurface', 'TINYINT', false, null, null);
        $this->addColumn('InfloworOutflow', 'Infloworoutflow', 'TINYINT', false, null, null);
        $this->addColumn('AberrantAppetite', 'Aberrantappetite', 'TINYINT', false, null, null);
        $this->addColumn('Operculum', 'Operculum', 'TINYINT', false, null, null);
        $this->addColumn('AberrantVentilation', 'Aberrantventilation', 'TINYINT', false, null, null);
        $this->addColumn('Fast', 'Fast', 'TINYINT', false, null, null);
        $this->addColumn('Slow', 'Slow', 'TINYINT', false, null, null);
        $this->addColumn('Flat', 'Flat', 'TINYINT', false, null, null);
        $this->addColumn('heavy', 'Heavy', 'TINYINT', false, null, null);
        $this->addColumn('GaspingAir', 'Gaspingair', 'TINYINT', false, null, null);
        $this->addColumn('FishAfflicted', 'Fishafflicted', 'VARCHAR', false, 80, null);
        $this->addColumn('FishAfflicted2', 'Fishafflicted2', 'VARCHAR', false, 80, null);
        $this->addColumn('FishAfflicted3', 'Fishafflicted3', 'VARCHAR', false, 80, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Fishafflict', 'Fishafflict', 'VARCHAR', false, 240, null);
        $this->addColumn('Symptom', 'Symptom', 'CLOB', false, null, null);
        $this->addColumn('Treatments', 'Treatments', 'CLOB', false, null, null);
        $this->addColumn('Prophylaxes', 'Prophylaxes', 'CLOB', false, null, null);
        $this->addColumn('AddRems', 'Addrems', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // DisrefTableMap
