<?php



/**
 * This class defines the structure of the 'families' table.
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
class FamiliesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FamiliesTableMap';

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
        $this->setName('families');
        $this->setPhpName('Families');
        $this->setClassname('Families');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', true, null, null);
        $this->addColumn('SortID', 'Sortid', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Family', 'Family', 'VARCHAR', true, 20, '');
        $this->addColumn('AuthorYear', 'Authoryear', 'VARCHAR', false, 100, null);
        $this->addColumn('Qualification', 'Qualification', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 100, null);
        $this->addColumn('FamiliesRefNo', 'Familiesrefno', 'INTEGER', false, null, null);
        $this->addColumn('Synonym', 'Synonym', 'TINYINT', false, null, null);
        $this->addColumn('Order', 'Order', 'VARCHAR', false, 70, null);
        $this->addColumn('Ordnum', 'Ordnum', 'SMALLINT', false, null, null);
        $this->addColumn('Class', 'Class', 'VARCHAR', false, 50, null);
        $this->addColumn('ClassNum', 'Classnum', 'SMALLINT', false, null, 0);
        $this->addColumn('Genera', 'Genera', 'SMALLINT', false, null, null);
        $this->addColumn('Species', 'Species', 'SMALLINT', false, null, null);
        $this->addColumn('BodyShapeI', 'Bodyshapei', 'VARCHAR', false, 20, null);
        $this->addColumn('SpeciesCount', 'Speciescount', 'SMALLINT', false, null, null);
        $this->addColumn('Marine', 'Marine', 'BOOLEAN', false, 1, null);
        $this->addColumn('Brackish', 'Brackish', 'BOOLEAN', false, 1, null);
        $this->addColumn('Freshwater', 'Freshwater', 'BOOLEAN', false, 1, null);
        $this->addColumn('WaterSalinity', 'Watersalinity', 'VARCHAR', false, 21, null);
        $this->addColumn('Aquarium', 'Aquarium', 'VARCHAR', false, 4, null);
        $this->addColumn('ReprGuild', 'Reprguild', 'VARCHAR', false, 20, null);
        $this->addColumn('SwimMode', 'Swimmode', 'VARCHAR', false, 50, null);
        $this->addColumn('Activity', 'Activity', 'VARCHAR', false, 50, null);
        $this->addColumn('PeriodRange', 'Periodrange', 'VARCHAR', false, 6, null);
        $this->addColumn('Period', 'Period', 'VARCHAR', false, 11, null);
        $this->addColumn('EpochRange', 'Epochrange', 'VARCHAR', false, 6, null);
        $this->addColumn('Epoch', 'Epoch', 'VARCHAR', false, 11, null);
        $this->addColumn('FossilRef', 'Fossilref', 'INTEGER', false, null, null);
        $this->addColumn('FamPic', 'Fampic', 'VARCHAR', false, 15, null);
        $this->addColumn('LarvPic', 'Larvpic', 'VARCHAR', false, 8, null);
        $this->addColumn('ValidGenera', 'Validgenera', 'SMALLINT', false, null, null);
        $this->addColumn('Complete', 'Complete', 'BOOLEAN', false, 1, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 1, null);
        $this->addColumn('AspinesMin', 'Aspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('AspinesMax', 'Aspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('AraysMin', 'Araysmin', 'SMALLINT', false, null, null);
        $this->addColumn('AraysMax', 'Araysmax', 'SMALLINT', false, null, null);
        $this->addColumn('DspinesMin', 'Dspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('DspinesMax', 'Dspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('DraysMin', 'Draysmin', 'SMALLINT', false, null, null);
        $this->addColumn('DraysMax', 'Draysmax', 'SMALLINT', false, null, null);
        $this->addColumn('Northernmost', 'Northernmost', 'SMALLINT', false, null, null);
        $this->addColumn('NorthSouthN', 'Northsouthn', 'VARCHAR', false, 1, null);
        $this->addColumn('Southernmost', 'Southernmost', 'SMALLINT', false, null, null);
        $this->addColumn('NorthSouthS', 'Northsouths', 'VARCHAR', false, 1, null);
        $this->addColumn('Westernmost', 'Westernmost', 'SMALLINT', false, null, null);
        $this->addColumn('WestEastW', 'Westeastw', 'VARCHAR', false, 1, null);
        $this->addColumn('Easternmost', 'Easternmost', 'SMALLINT', false, null, null);
        $this->addColumn('WestEastE', 'Westeaste', 'VARCHAR', false, 1, null);
        $this->addColumn('PhiPrime', 'Phiprime', 'FLOAT', false, null, null);
        $this->addColumn('Division', 'Division', 'VARCHAR', false, 21, null);
        $this->addColumn('Experts', 'Experts', 'VARCHAR', false, 70, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('Etymology', 'Etymology', 'CLOB', false, null, null);
        $this->addColumn('FamilyExpert', 'Familyexpert', 'SMALLINT', false, null, null);
        $this->addColumn('FBContact', 'Fbcontact', 'SMALLINT', false, null, null);
        $this->addColumn('CLOFExpert', 'Clofexpert', 'VARCHAR', false, 255, null);
        $this->addColumn('CommonName_Greek', 'CommonnameGreek', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Greek_u', 'CommonnameGreekU', 'VARCHAR', false, 255, null);
        $this->addColumn('CommonName_Russian', 'CommonnameRussian', 'CLOB', false, null, null);
        $this->addColumn('CommonName_Russian_original', 'CommonnameRussianOriginal', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_German', 'CommonnameGerman', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_French', 'CommonnameFrench', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Italian', 'CommonnameItalian', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Dutch', 'CommonnameDutch', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Chinese', 'CommonnameChinese', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Chinese_u', 'CommonnameChineseU', 'VARCHAR', false, 255, null);
        $this->addColumn('CommonName_Spanish', 'CommonnameSpanish', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Portuguese', 'CommonnamePortuguese', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Swedish', 'CommonnameSwedish', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FamiliesTableMap
