<?php



/**
 * This class defines the structure of the 'myersrecruitmentdatabase' table.
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
class MyersrecruitmentdatabaseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MyersrecruitmentdatabaseTableMap';

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
        $this->setName('myersrecruitmentdatabase');
        $this->setPhpName('Myersrecruitmentdatabase');
        $this->setClassname('Myersrecruitmentdatabase');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'VARCHAR', true, 100, null);
        $this->addColumn('Reclag', 'Reclag', 'DOUBLE', false, null, null);
        $this->addColumn('sp', 'Sp', 'VARCHAR', false, 100, null);
        $this->addColumn('genusUsed', 'Genusused', 'VARCHAR', false, 50, null);
        $this->addColumn('speciesUsed', 'Speciesused', 'VARCHAR', false, 50, null);
        $this->addColumn('speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('family', 'Family', 'VARCHAR', false, 255, null);
        $this->addColumn('cfamily', 'Cfamily', 'VARCHAR', false, 255, null);
        $this->addColumn('order', 'Order', 'VARCHAR', false, 255, null);
        $this->addColumn('stockOrig', 'Stockorig', 'VARCHAR', false, 255, null);
        $this->addColumn('stock', 'Stock', 'VARCHAR', false, 255, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('AreaCode', 'Areacode', 'INTEGER', false, null, null);
        $this->addColumn('Area', 'Area', 'DOUBLE', false, null, null);
        $this->addColumn('Unit', 'Unit', 'VARCHAR', false, 255, null);
        $this->addColumn('Latitude2', 'Latitude2', 'DOUBLE', false, null, null);
        $this->addColumn('ns', 'Ns', 'VARCHAR', false, 255, null);
        $this->addColumn('longitude2', 'Longitude2', 'DOUBLE', false, null, null);
        $this->addColumn('we', 'We', 'VARCHAR', false, 255, null);
        $this->addColumn('source', 'Source', 'VARCHAR', false, 255, null);
        $this->addColumn('MainRef', 'Mainref', 'INTEGER', false, null, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('CVRec', 'Cvrec', 'DOUBLE', false, null, null);
        $this->addColumn('comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('comments2', 'Comments2', 'CLOB', false, null, null);
        $this->addColumn('commentsN', 'Commentsn', 'CLOB', false, null, null);
        $this->addColumn('AreaTxt', 'Areatxt', 'VARCHAR', false, 255, null);
        $this->addColumn('fage', 'Fage', 'VARCHAR', false, 255, null);
        $this->addColumn('method', 'Method', 'VARCHAR', false, 255, null);
        $this->addColumn('method2', 'Method2', 'VARCHAR', false, 255, null);
        $this->addColumn('unitssb', 'Unitssb', 'VARCHAR', false, 255, null);
        $this->addColumn('unitrec', 'Unitrec', 'VARCHAR', false, 255, null);
        $this->addColumn('unitland', 'Unitland', 'VARCHAR', false, 255, null);
        $this->addColumn('agerecdat', 'Agerecdat', 'DOUBLE', false, null, null);
        $this->addColumn('eggdiam', 'Eggdiam', 'VARCHAR', false, 255, null);
        $this->addColumn('lhatch', 'Lhatch', 'VARCHAR', false, 255, null);
        $this->addColumn('lmeta', 'Lmeta', 'VARCHAR', false, 255, null);
        $this->addColumn('deltal', 'Deltal', 'VARCHAR', false, 255, null);
        $this->addColumn('deltan', 'Deltan', 'VARCHAR', false, 255, null);
        $this->addColumn('monthspa', 'Monthspa', 'VARCHAR', false, 255, null);
        $this->addColumn('spawnmnth', 'Spawnmnth', 'VARCHAR', false, 255, null);
        $this->addColumn('natmort', 'Natmort', 'VARCHAR', false, 255, null);
        $this->addColumn('f01', 'F01', 'VARCHAR', false, 255, null);
        $this->addColumn('fmax', 'Fmax', 'VARCHAR', false, 255, null);
        $this->addColumn('fmed', 'Fmed', 'VARCHAR', false, 255, null);
        $this->addColumn('kgprecf0', 'Kgprecf0', 'VARCHAR', false, 255, null);
        $this->addColumn('spawnloc', 'Spawnloc', 'VARCHAR', false, 255, null);
        $this->addColumn('eggtype', 'Eggtype', 'VARCHAR', false, 255, null);
        $this->addColumn('Feedtype', 'Feedtype', 'VARCHAR', false, 255, null);
        $this->addColumn('sourcemat', 'Sourcemat', 'VARCHAR', false, 255, null);
        $this->addColumn('lenmat', 'Lenmat', 'VARCHAR', false, 255, null);
        $this->addColumn('lenmatm', 'Lenmatm', 'VARCHAR', false, 255, null);
        $this->addColumn('lenmatf', 'Lenmatf', 'VARCHAR', false, 255, null);
        $this->addColumn('tm', 'Tm', 'DOUBLE', false, null, null);
        $this->addColumn('tmRef', 'Tmref', 'INTEGER', false, null, null);
        $this->addColumn('agemat', 'Agemat', 'VARCHAR', false, 255, null);
        $this->addColumn('agematm', 'Agematm', 'VARCHAR', false, 255, null);
        $this->addColumn('agematf', 'Agematf', 'VARCHAR', false, 255, null);
        $this->addColumn('lenrec', 'Lenrec', 'VARCHAR', false, 255, null);
        $this->addColumn('agerec', 'Agerec', 'VARCHAR', false, 255, null);
        $this->addColumn('agerecm', 'Agerecm', 'VARCHAR', false, 255, null);
        $this->addColumn('agerecf', 'Agerecf', 'VARCHAR', false, 255, null);
        $this->addColumn('Loo', 'Loo', 'DOUBLE', false, null, null);
        $this->addColumn('K', 'K', 'DOUBLE', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'VARCHAR', false, 10, null);
        $this->addColumn('GrowthRef', 'Growthref', 'INTEGER', false, null, null);
        $this->addColumn('sourcegro', 'Sourcegro', 'VARCHAR', false, 255, null);
        $this->addColumn('linfin', 'Linfin', 'VARCHAR', false, 255, null);
        $this->addColumn('kram', 'Kram', 'VARCHAR', false, 255, null);
        $this->addColumn('to', 'To', 'VARCHAR', false, 255, null);
        $this->addColumn('linfinm', 'Linfinm', 'VARCHAR', false, 255, null);
        $this->addColumn('kM', 'Km', 'VARCHAR', false, 255, null);
        $this->addColumn('toM', 'Tom', 'VARCHAR', false, 255, null);
        $this->addColumn('linfinf', 'Linfinf', 'VARCHAR', false, 255, null);
        $this->addColumn('kF', 'Kf', 'VARCHAR', false, 255, null);
        $this->addColumn('toF', 'Tof', 'VARCHAR', false, 255, null);
        $this->addColumn('sourceab', 'Sourceab', 'VARCHAR', false, 255, null);
        $this->addColumn('altwtpar', 'Altwtpar', 'VARCHAR', false, 255, null);
        $this->addColumn('bltwtpar', 'Bltwtpar', 'VARCHAR', false, 255, null);
        $this->addColumn('altwtparm', 'Altwtparm', 'VARCHAR', false, 255, null);
        $this->addColumn('bltwtparm', 'Bltwtparm', 'VARCHAR', false, 255, null);
        $this->addColumn('altwtparf', 'Altwtparf', 'VARCHAR', false, 255, null);
        $this->addColumn('bltwtparf', 'Bltwtparf', 'VARCHAR', false, 255, null);
        $this->addColumn('entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MyersrecruitmentdatabaseTableMap
