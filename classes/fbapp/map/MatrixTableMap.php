<?php



/**
 * This class defines the structure of the 'matrix' table.
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
class MatrixTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MatrixTableMap';

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
        $this->setName('matrix');
        $this->setPhpName('Matrix');
        $this->setClassname('Matrix');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'SMALLINT', false, null, null);
        $this->addColumn('KF_type', 'KfType', 'SMALLINT', false, null, null);
        $this->addColumn('tm_for_KF', 'TmForKf', 'DOUBLE', false, null, null);
        $this->addColumn('LMax', 'Lmax', 'DOUBLE', false, null, null);
        $this->addColumn('LMax_type', 'LmaxType', 'VARCHAR', false, 5, null);
        $this->addColumn('Linf', 'Linf', 'DOUBLE', false, null, null);
        $this->addColumn('Linf_type', 'LinfType', 'VARCHAR', false, 5, null);
        $this->addColumn('Linf_1st', 'Linf1st', 'DOUBLE', false, null, null);
        $this->addColumn('Linf_2nd', 'Linf2nd', 'DOUBLE', false, null, null);
        $this->addColumn('Linf_comment', 'LinfComment', 'VARCHAR', false, 50, null);
        $this->addColumn('K', 'K', 'DOUBLE', false, null, null);
        $this->addColumn('KF_comment', 'KfComment', 'VARCHAR', false, 50, null);
        $this->addColumn('PhiPrime', 'Phiprime', 'DOUBLE', false, null, null);
        $this->addColumn('to', 'To', 'DOUBLE', false, null, null);
        $this->addColumn('mean_temp', 'MeanTemp', 'DOUBLE', false, null, null);
        $this->addColumn('M', 'M', 'DOUBLE', false, null, null);
        $this->addColumn('M_se_1st', 'MSe1st', 'DOUBLE', false, null, null);
        $this->addColumn('M_se_2nd', 'MSe2nd', 'DOUBLE', false, null, null);
        $this->addColumn('M_comment', 'MComment', 'VARCHAR', false, 50, null);
        $this->addColumn('Life_span', 'LifeSpan', 'FLOAT', false, null, null);
        $this->addColumn('Life_span_1st', 'LifeSpan1st', 'DOUBLE', false, null, null);
        $this->addColumn('Life_span_2nd', 'LifeSpan2nd', 'DOUBLE', false, null, null);
        $this->addColumn('Generation_time', 'GenerationTime', 'FLOAT', false, null, null);
        $this->addColumn('Gen_time_1st', 'GenTime1st', 'DOUBLE', false, null, null);
        $this->addColumn('Gen_time_2nd', 'GenTime2nd', 'DOUBLE', false, null, null);
        $this->addColumn('tm', 'Tm', 'FLOAT', false, null, null);
        $this->addColumn('tm_1st', 'Tm1st', 'DOUBLE', false, null, null);
        $this->addColumn('tm_2nd', 'Tm2nd', 'DOUBLE', false, null, null);
        $this->addColumn('Lm', 'Lm', 'FLOAT', false, null, null);
        $this->addColumn('Lm_se_1st', 'LmSe1st', 'FLOAT', false, null, null);
        $this->addColumn('Lm_se_2nd', 'LmSe2nd', 'FLOAT', false, null, null);
        $this->addColumn('Lm_type', 'LmType', 'VARCHAR', false, 5, null);
        $this->addColumn('Lopt', 'Lopt', 'DOUBLE', false, null, null);
        $this->addColumn('Lopt_se_1st', 'LoptSe1st', 'DOUBLE', false, null, null);
        $this->addColumn('Lopt_se_2nd', 'LoptSe2nd', 'DOUBLE', false, null, null);
        $this->addColumn('Lopt_type', 'LoptType', 'VARCHAR', false, 5, null);
        $this->addColumn('Lopt_text', 'LoptText', 'VARCHAR', false, 50, null);
        $this->addColumn('a', 'A', 'DOUBLE', false, null, null);
        $this->addColumn('b', 'B', 'DOUBLE', false, null, null);
        $this->addColumn('LW_length', 'LwLength', 'DOUBLE', false, null, null);
        $this->addColumn('LW_length_type', 'LwLengthType', 'VARCHAR', false, 10, null);
        $this->addColumn('W', 'W', 'DOUBLE', false, null, null);
        $this->addColumn('W_type', 'WType', 'VARCHAR', false, 10, null);
        $this->addColumn('NitrogenProtein_weight', 'NitrogenproteinWeight', 'DOUBLE', false, null, null);
        $this->addColumn('NitrogenProtein_weight_type', 'NitrogenproteinWeightType', 'VARCHAR', false, 5, null);
        $this->addColumn('nitrogen', 'Nitrogen', 'DOUBLE', false, null, null);
        $this->addColumn('protein', 'Protein', 'DOUBLE', false, null, null);
        $this->addColumn('Reproductive_guild', 'ReproductiveGuild', 'VARCHAR', false, 50, null);
        $this->addColumn('Fecundity', 'Fecundity', 'DOUBLE', false, null, null);
        $this->addColumn('Fecundity_1st', 'Fecundity1st', 'VARCHAR', false, 50, null);
        $this->addColumn('Fecundity_2nd', 'Fecundity2nd', 'VARCHAR', false, 50, null);
        $this->addColumn('zzzFecundity_text', 'ZzzfecundityText', 'VARCHAR', false, 50, null);
        $this->addColumn('Emsy', 'Emsy', 'DOUBLE', false, null, null);
        $this->addColumn('Eopt', 'Eopt', 'DOUBLE', false, null, null);
        $this->addColumn('Fmsy', 'Fmsy', 'DOUBLE', false, null, null);
        $this->addColumn('Fopt', 'Fopt', 'DOUBLE', false, null, null);
        $this->addColumn('Lc', 'Lc', 'DOUBLE', false, null, null);
        $this->addColumn('Lc_type', 'LcType', 'VARCHAR', false, 5, null);
        $this->addColumn('E', 'E', 'DOUBLE', false, null, null);
        $this->addColumn('YR', 'Yr', 'DOUBLE', false, null, null);
        $this->addColumn('Resilience', 'Resilience', 'VARCHAR', false, 50, null);
        $this->addColumn('rm', 'Rm', 'DOUBLE', false, null, null);
        $this->addColumn('Lr', 'Lr', 'DOUBLE', false, null, null);
        $this->addColumn('Lr_type', 'LrType', 'VARCHAR', false, 5, null);
        $this->addColumn('main_food', 'MainFood', 'VARCHAR', false, 255, null);
        $this->addColumn('trophic_level', 'TrophicLevel', 'VARCHAR', false, 255, null);
        $this->addColumn('QB', 'Qb', 'DOUBLE', false, null, null);
        $this->addColumn('QB_text', 'QbText', 'VARCHAR', false, 50, null);
        $this->addColumn('QB_Winf', 'QbWinf', 'DOUBLE', false, null, null);
        $this->addColumn('QB_temp', 'QbTemp', 'DOUBLE', false, null, null);
        $this->addColumn('QB_A', 'QbA', 'DOUBLE', false, null, null);
        $this->addColumn('with_growth', 'WithGrowth', 'CHAR', false, null, null);
        $this->addColumn('with_max_age_size', 'WithMaxAgeSize', 'CHAR', false, null, null);
        $this->addColumn('with_lw', 'WithLw', 'CHAR', false, null, null);
        $this->addColumn('with_reproduction', 'WithReproduction', 'CHAR', false, null, null);
        $this->addColumn('with_diet', 'WithDiet', 'CHAR', false, null, null);
        $this->addColumn('with_food_consumption', 'WithFoodConsumption', 'CHAR', false, null, null);
        $this->addColumn('with_food', 'WithFood', 'CHAR', false, null, null);
        $this->addColumn('with_maturity', 'WithMaturity', 'CHAR', false, null, null);
        $this->addColumn('with_spawning', 'WithSpawning', 'CHAR', false, null, null);
        $this->addColumn('stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MatrixTableMap
