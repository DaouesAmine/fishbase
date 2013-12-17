<?php


/**
 * Base static class for performing query and update operations on the 'matrix' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMatrixPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'matrix';

    /** the related Propel class for this table */
    const OM_CLASS = 'Matrix';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MatrixTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 84;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 84;

    /** the column name for the ID field */
    const ID = 'matrix.ID';

    /** the column name for the SpecCode field */
    const SPECCODE = 'matrix.SpecCode';

    /** the column name for the FamCode field */
    const FAMCODE = 'matrix.FamCode';

    /** the column name for the KF_type field */
    const KF_TYPE = 'matrix.KF_type';

    /** the column name for the tm_for_KF field */
    const TM_FOR_KF = 'matrix.tm_for_KF';

    /** the column name for the LMax field */
    const LMAX = 'matrix.LMax';

    /** the column name for the LMax_type field */
    const LMAX_TYPE = 'matrix.LMax_type';

    /** the column name for the Linf field */
    const LINF = 'matrix.Linf';

    /** the column name for the Linf_type field */
    const LINF_TYPE = 'matrix.Linf_type';

    /** the column name for the Linf_1st field */
    const LINF_1ST = 'matrix.Linf_1st';

    /** the column name for the Linf_2nd field */
    const LINF_2ND = 'matrix.Linf_2nd';

    /** the column name for the Linf_comment field */
    const LINF_COMMENT = 'matrix.Linf_comment';

    /** the column name for the K field */
    const K = 'matrix.K';

    /** the column name for the KF_comment field */
    const KF_COMMENT = 'matrix.KF_comment';

    /** the column name for the PhiPrime field */
    const PHIPRIME = 'matrix.PhiPrime';

    /** the column name for the to field */
    const TO = 'matrix.to';

    /** the column name for the mean_temp field */
    const MEAN_TEMP = 'matrix.mean_temp';

    /** the column name for the M field */
    const M = 'matrix.M';

    /** the column name for the M_se_1st field */
    const M_SE_1ST = 'matrix.M_se_1st';

    /** the column name for the M_se_2nd field */
    const M_SE_2ND = 'matrix.M_se_2nd';

    /** the column name for the M_comment field */
    const M_COMMENT = 'matrix.M_comment';

    /** the column name for the Life_span field */
    const LIFE_SPAN = 'matrix.Life_span';

    /** the column name for the Life_span_1st field */
    const LIFE_SPAN_1ST = 'matrix.Life_span_1st';

    /** the column name for the Life_span_2nd field */
    const LIFE_SPAN_2ND = 'matrix.Life_span_2nd';

    /** the column name for the Generation_time field */
    const GENERATION_TIME = 'matrix.Generation_time';

    /** the column name for the Gen_time_1st field */
    const GEN_TIME_1ST = 'matrix.Gen_time_1st';

    /** the column name for the Gen_time_2nd field */
    const GEN_TIME_2ND = 'matrix.Gen_time_2nd';

    /** the column name for the tm field */
    const TM = 'matrix.tm';

    /** the column name for the tm_1st field */
    const TM_1ST = 'matrix.tm_1st';

    /** the column name for the tm_2nd field */
    const TM_2ND = 'matrix.tm_2nd';

    /** the column name for the Lm field */
    const LM = 'matrix.Lm';

    /** the column name for the Lm_se_1st field */
    const LM_SE_1ST = 'matrix.Lm_se_1st';

    /** the column name for the Lm_se_2nd field */
    const LM_SE_2ND = 'matrix.Lm_se_2nd';

    /** the column name for the Lm_type field */
    const LM_TYPE = 'matrix.Lm_type';

    /** the column name for the Lopt field */
    const LOPT = 'matrix.Lopt';

    /** the column name for the Lopt_se_1st field */
    const LOPT_SE_1ST = 'matrix.Lopt_se_1st';

    /** the column name for the Lopt_se_2nd field */
    const LOPT_SE_2ND = 'matrix.Lopt_se_2nd';

    /** the column name for the Lopt_type field */
    const LOPT_TYPE = 'matrix.Lopt_type';

    /** the column name for the Lopt_text field */
    const LOPT_TEXT = 'matrix.Lopt_text';

    /** the column name for the a field */
    const A = 'matrix.a';

    /** the column name for the b field */
    const B = 'matrix.b';

    /** the column name for the LW_length field */
    const LW_LENGTH = 'matrix.LW_length';

    /** the column name for the LW_length_type field */
    const LW_LENGTH_TYPE = 'matrix.LW_length_type';

    /** the column name for the W field */
    const W = 'matrix.W';

    /** the column name for the W_type field */
    const W_TYPE = 'matrix.W_type';

    /** the column name for the NitrogenProtein_weight field */
    const NITROGENPROTEIN_WEIGHT = 'matrix.NitrogenProtein_weight';

    /** the column name for the NitrogenProtein_weight_type field */
    const NITROGENPROTEIN_WEIGHT_TYPE = 'matrix.NitrogenProtein_weight_type';

    /** the column name for the nitrogen field */
    const NITROGEN = 'matrix.nitrogen';

    /** the column name for the protein field */
    const PROTEIN = 'matrix.protein';

    /** the column name for the Reproductive_guild field */
    const REPRODUCTIVE_GUILD = 'matrix.Reproductive_guild';

    /** the column name for the Fecundity field */
    const FECUNDITY = 'matrix.Fecundity';

    /** the column name for the Fecundity_1st field */
    const FECUNDITY_1ST = 'matrix.Fecundity_1st';

    /** the column name for the Fecundity_2nd field */
    const FECUNDITY_2ND = 'matrix.Fecundity_2nd';

    /** the column name for the zzzFecundity_text field */
    const ZZZFECUNDITY_TEXT = 'matrix.zzzFecundity_text';

    /** the column name for the Emsy field */
    const EMSY = 'matrix.Emsy';

    /** the column name for the Eopt field */
    const EOPT = 'matrix.Eopt';

    /** the column name for the Fmsy field */
    const FMSY = 'matrix.Fmsy';

    /** the column name for the Fopt field */
    const FOPT = 'matrix.Fopt';

    /** the column name for the Lc field */
    const LC = 'matrix.Lc';

    /** the column name for the Lc_type field */
    const LC_TYPE = 'matrix.Lc_type';

    /** the column name for the E field */
    const E = 'matrix.E';

    /** the column name for the YR field */
    const YR = 'matrix.YR';

    /** the column name for the Resilience field */
    const RESILIENCE = 'matrix.Resilience';

    /** the column name for the rm field */
    const RM = 'matrix.rm';

    /** the column name for the Lr field */
    const LR = 'matrix.Lr';

    /** the column name for the Lr_type field */
    const LR_TYPE = 'matrix.Lr_type';

    /** the column name for the main_food field */
    const MAIN_FOOD = 'matrix.main_food';

    /** the column name for the trophic_level field */
    const TROPHIC_LEVEL = 'matrix.trophic_level';

    /** the column name for the QB field */
    const QB = 'matrix.QB';

    /** the column name for the QB_text field */
    const QB_TEXT = 'matrix.QB_text';

    /** the column name for the QB_Winf field */
    const QB_WINF = 'matrix.QB_Winf';

    /** the column name for the QB_temp field */
    const QB_TEMP = 'matrix.QB_temp';

    /** the column name for the QB_A field */
    const QB_A = 'matrix.QB_A';

    /** the column name for the with_growth field */
    const WITH_GROWTH = 'matrix.with_growth';

    /** the column name for the with_max_age_size field */
    const WITH_MAX_AGE_SIZE = 'matrix.with_max_age_size';

    /** the column name for the with_lw field */
    const WITH_LW = 'matrix.with_lw';

    /** the column name for the with_reproduction field */
    const WITH_REPRODUCTION = 'matrix.with_reproduction';

    /** the column name for the with_diet field */
    const WITH_DIET = 'matrix.with_diet';

    /** the column name for the with_food_consumption field */
    const WITH_FOOD_CONSUMPTION = 'matrix.with_food_consumption';

    /** the column name for the with_food field */
    const WITH_FOOD = 'matrix.with_food';

    /** the column name for the with_maturity field */
    const WITH_MATURITY = 'matrix.with_maturity';

    /** the column name for the with_spawning field */
    const WITH_SPAWNING = 'matrix.with_spawning';

    /** the column name for the stockcode field */
    const STOCKCODE = 'matrix.stockcode';

    /** the column name for the TS field */
    const TS = 'matrix.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Matrix objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Matrix[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MatrixPeer::$fieldNames[MatrixPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Speccode', 'Famcode', 'KfType', 'TmForKf', 'Lmax', 'LmaxType', 'Linf', 'LinfType', 'Linf1st', 'Linf2nd', 'LinfComment', 'K', 'KfComment', 'Phiprime', 'To', 'MeanTemp', 'M', 'MSe1st', 'MSe2nd', 'MComment', 'LifeSpan', 'LifeSpan1st', 'LifeSpan2nd', 'GenerationTime', 'GenTime1st', 'GenTime2nd', 'Tm', 'Tm1st', 'Tm2nd', 'Lm', 'LmSe1st', 'LmSe2nd', 'LmType', 'Lopt', 'LoptSe1st', 'LoptSe2nd', 'LoptType', 'LoptText', 'A', 'B', 'LwLength', 'LwLengthType', 'W', 'WType', 'NitrogenproteinWeight', 'NitrogenproteinWeightType', 'Nitrogen', 'Protein', 'ReproductiveGuild', 'Fecundity', 'Fecundity1st', 'Fecundity2nd', 'ZzzfecundityText', 'Emsy', 'Eopt', 'Fmsy', 'Fopt', 'Lc', 'LcType', 'E', 'Yr', 'Resilience', 'Rm', 'Lr', 'LrType', 'MainFood', 'TrophicLevel', 'Qb', 'QbText', 'QbWinf', 'QbTemp', 'QbA', 'WithGrowth', 'WithMaxAgeSize', 'WithLw', 'WithReproduction', 'WithDiet', 'WithFoodConsumption', 'WithFood', 'WithMaturity', 'WithSpawning', 'Stockcode', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'speccode', 'famcode', 'kfType', 'tmForKf', 'lmax', 'lmaxType', 'linf', 'linfType', 'linf1st', 'linf2nd', 'linfComment', 'k', 'kfComment', 'phiprime', 'to', 'meanTemp', 'm', 'mSe1st', 'mSe2nd', 'mComment', 'lifeSpan', 'lifeSpan1st', 'lifeSpan2nd', 'generationTime', 'genTime1st', 'genTime2nd', 'tm', 'tm1st', 'tm2nd', 'lm', 'lmSe1st', 'lmSe2nd', 'lmType', 'lopt', 'loptSe1st', 'loptSe2nd', 'loptType', 'loptText', 'a', 'b', 'lwLength', 'lwLengthType', 'w', 'wType', 'nitrogenproteinWeight', 'nitrogenproteinWeightType', 'nitrogen', 'protein', 'reproductiveGuild', 'fecundity', 'fecundity1st', 'fecundity2nd', 'zzzfecundityText', 'emsy', 'eopt', 'fmsy', 'fopt', 'lc', 'lcType', 'e', 'yr', 'resilience', 'rm', 'lr', 'lrType', 'mainFood', 'trophicLevel', 'qb', 'qbText', 'qbWinf', 'qbTemp', 'qbA', 'withGrowth', 'withMaxAgeSize', 'withLw', 'withReproduction', 'withDiet', 'withFoodConsumption', 'withFood', 'withMaturity', 'withSpawning', 'stockcode', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MatrixPeer::ID, MatrixPeer::SPECCODE, MatrixPeer::FAMCODE, MatrixPeer::KF_TYPE, MatrixPeer::TM_FOR_KF, MatrixPeer::LMAX, MatrixPeer::LMAX_TYPE, MatrixPeer::LINF, MatrixPeer::LINF_TYPE, MatrixPeer::LINF_1ST, MatrixPeer::LINF_2ND, MatrixPeer::LINF_COMMENT, MatrixPeer::K, MatrixPeer::KF_COMMENT, MatrixPeer::PHIPRIME, MatrixPeer::TO, MatrixPeer::MEAN_TEMP, MatrixPeer::M, MatrixPeer::M_SE_1ST, MatrixPeer::M_SE_2ND, MatrixPeer::M_COMMENT, MatrixPeer::LIFE_SPAN, MatrixPeer::LIFE_SPAN_1ST, MatrixPeer::LIFE_SPAN_2ND, MatrixPeer::GENERATION_TIME, MatrixPeer::GEN_TIME_1ST, MatrixPeer::GEN_TIME_2ND, MatrixPeer::TM, MatrixPeer::TM_1ST, MatrixPeer::TM_2ND, MatrixPeer::LM, MatrixPeer::LM_SE_1ST, MatrixPeer::LM_SE_2ND, MatrixPeer::LM_TYPE, MatrixPeer::LOPT, MatrixPeer::LOPT_SE_1ST, MatrixPeer::LOPT_SE_2ND, MatrixPeer::LOPT_TYPE, MatrixPeer::LOPT_TEXT, MatrixPeer::A, MatrixPeer::B, MatrixPeer::LW_LENGTH, MatrixPeer::LW_LENGTH_TYPE, MatrixPeer::W, MatrixPeer::W_TYPE, MatrixPeer::NITROGENPROTEIN_WEIGHT, MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE, MatrixPeer::NITROGEN, MatrixPeer::PROTEIN, MatrixPeer::REPRODUCTIVE_GUILD, MatrixPeer::FECUNDITY, MatrixPeer::FECUNDITY_1ST, MatrixPeer::FECUNDITY_2ND, MatrixPeer::ZZZFECUNDITY_TEXT, MatrixPeer::EMSY, MatrixPeer::EOPT, MatrixPeer::FMSY, MatrixPeer::FOPT, MatrixPeer::LC, MatrixPeer::LC_TYPE, MatrixPeer::E, MatrixPeer::YR, MatrixPeer::RESILIENCE, MatrixPeer::RM, MatrixPeer::LR, MatrixPeer::LR_TYPE, MatrixPeer::MAIN_FOOD, MatrixPeer::TROPHIC_LEVEL, MatrixPeer::QB, MatrixPeer::QB_TEXT, MatrixPeer::QB_WINF, MatrixPeer::QB_TEMP, MatrixPeer::QB_A, MatrixPeer::WITH_GROWTH, MatrixPeer::WITH_MAX_AGE_SIZE, MatrixPeer::WITH_LW, MatrixPeer::WITH_REPRODUCTION, MatrixPeer::WITH_DIET, MatrixPeer::WITH_FOOD_CONSUMPTION, MatrixPeer::WITH_FOOD, MatrixPeer::WITH_MATURITY, MatrixPeer::WITH_SPAWNING, MatrixPeer::STOCKCODE, MatrixPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SPECCODE', 'FAMCODE', 'KF_TYPE', 'TM_FOR_KF', 'LMAX', 'LMAX_TYPE', 'LINF', 'LINF_TYPE', 'LINF_1ST', 'LINF_2ND', 'LINF_COMMENT', 'K', 'KF_COMMENT', 'PHIPRIME', 'TO', 'MEAN_TEMP', 'M', 'M_SE_1ST', 'M_SE_2ND', 'M_COMMENT', 'LIFE_SPAN', 'LIFE_SPAN_1ST', 'LIFE_SPAN_2ND', 'GENERATION_TIME', 'GEN_TIME_1ST', 'GEN_TIME_2ND', 'TM', 'TM_1ST', 'TM_2ND', 'LM', 'LM_SE_1ST', 'LM_SE_2ND', 'LM_TYPE', 'LOPT', 'LOPT_SE_1ST', 'LOPT_SE_2ND', 'LOPT_TYPE', 'LOPT_TEXT', 'A', 'B', 'LW_LENGTH', 'LW_LENGTH_TYPE', 'W', 'W_TYPE', 'NITROGENPROTEIN_WEIGHT', 'NITROGENPROTEIN_WEIGHT_TYPE', 'NITROGEN', 'PROTEIN', 'REPRODUCTIVE_GUILD', 'FECUNDITY', 'FECUNDITY_1ST', 'FECUNDITY_2ND', 'ZZZFECUNDITY_TEXT', 'EMSY', 'EOPT', 'FMSY', 'FOPT', 'LC', 'LC_TYPE', 'E', 'YR', 'RESILIENCE', 'RM', 'LR', 'LR_TYPE', 'MAIN_FOOD', 'TROPHIC_LEVEL', 'QB', 'QB_TEXT', 'QB_WINF', 'QB_TEMP', 'QB_A', 'WITH_GROWTH', 'WITH_MAX_AGE_SIZE', 'WITH_LW', 'WITH_REPRODUCTION', 'WITH_DIET', 'WITH_FOOD_CONSUMPTION', 'WITH_FOOD', 'WITH_MATURITY', 'WITH_SPAWNING', 'STOCKCODE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'SpecCode', 'FamCode', 'KF_type', 'tm_for_KF', 'LMax', 'LMax_type', 'Linf', 'Linf_type', 'Linf_1st', 'Linf_2nd', 'Linf_comment', 'K', 'KF_comment', 'PhiPrime', 'to', 'mean_temp', 'M', 'M_se_1st', 'M_se_2nd', 'M_comment', 'Life_span', 'Life_span_1st', 'Life_span_2nd', 'Generation_time', 'Gen_time_1st', 'Gen_time_2nd', 'tm', 'tm_1st', 'tm_2nd', 'Lm', 'Lm_se_1st', 'Lm_se_2nd', 'Lm_type', 'Lopt', 'Lopt_se_1st', 'Lopt_se_2nd', 'Lopt_type', 'Lopt_text', 'a', 'b', 'LW_length', 'LW_length_type', 'W', 'W_type', 'NitrogenProtein_weight', 'NitrogenProtein_weight_type', 'nitrogen', 'protein', 'Reproductive_guild', 'Fecundity', 'Fecundity_1st', 'Fecundity_2nd', 'zzzFecundity_text', 'Emsy', 'Eopt', 'Fmsy', 'Fopt', 'Lc', 'Lc_type', 'E', 'YR', 'Resilience', 'rm', 'Lr', 'Lr_type', 'main_food', 'trophic_level', 'QB', 'QB_text', 'QB_Winf', 'QB_temp', 'QB_A', 'with_growth', 'with_max_age_size', 'with_lw', 'with_reproduction', 'with_diet', 'with_food_consumption', 'with_food', 'with_maturity', 'with_spawning', 'stockcode', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MatrixPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Speccode' => 1, 'Famcode' => 2, 'KfType' => 3, 'TmForKf' => 4, 'Lmax' => 5, 'LmaxType' => 6, 'Linf' => 7, 'LinfType' => 8, 'Linf1st' => 9, 'Linf2nd' => 10, 'LinfComment' => 11, 'K' => 12, 'KfComment' => 13, 'Phiprime' => 14, 'To' => 15, 'MeanTemp' => 16, 'M' => 17, 'MSe1st' => 18, 'MSe2nd' => 19, 'MComment' => 20, 'LifeSpan' => 21, 'LifeSpan1st' => 22, 'LifeSpan2nd' => 23, 'GenerationTime' => 24, 'GenTime1st' => 25, 'GenTime2nd' => 26, 'Tm' => 27, 'Tm1st' => 28, 'Tm2nd' => 29, 'Lm' => 30, 'LmSe1st' => 31, 'LmSe2nd' => 32, 'LmType' => 33, 'Lopt' => 34, 'LoptSe1st' => 35, 'LoptSe2nd' => 36, 'LoptType' => 37, 'LoptText' => 38, 'A' => 39, 'B' => 40, 'LwLength' => 41, 'LwLengthType' => 42, 'W' => 43, 'WType' => 44, 'NitrogenproteinWeight' => 45, 'NitrogenproteinWeightType' => 46, 'Nitrogen' => 47, 'Protein' => 48, 'ReproductiveGuild' => 49, 'Fecundity' => 50, 'Fecundity1st' => 51, 'Fecundity2nd' => 52, 'ZzzfecundityText' => 53, 'Emsy' => 54, 'Eopt' => 55, 'Fmsy' => 56, 'Fopt' => 57, 'Lc' => 58, 'LcType' => 59, 'E' => 60, 'Yr' => 61, 'Resilience' => 62, 'Rm' => 63, 'Lr' => 64, 'LrType' => 65, 'MainFood' => 66, 'TrophicLevel' => 67, 'Qb' => 68, 'QbText' => 69, 'QbWinf' => 70, 'QbTemp' => 71, 'QbA' => 72, 'WithGrowth' => 73, 'WithMaxAgeSize' => 74, 'WithLw' => 75, 'WithReproduction' => 76, 'WithDiet' => 77, 'WithFoodConsumption' => 78, 'WithFood' => 79, 'WithMaturity' => 80, 'WithSpawning' => 81, 'Stockcode' => 82, 'Ts' => 83, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'speccode' => 1, 'famcode' => 2, 'kfType' => 3, 'tmForKf' => 4, 'lmax' => 5, 'lmaxType' => 6, 'linf' => 7, 'linfType' => 8, 'linf1st' => 9, 'linf2nd' => 10, 'linfComment' => 11, 'k' => 12, 'kfComment' => 13, 'phiprime' => 14, 'to' => 15, 'meanTemp' => 16, 'm' => 17, 'mSe1st' => 18, 'mSe2nd' => 19, 'mComment' => 20, 'lifeSpan' => 21, 'lifeSpan1st' => 22, 'lifeSpan2nd' => 23, 'generationTime' => 24, 'genTime1st' => 25, 'genTime2nd' => 26, 'tm' => 27, 'tm1st' => 28, 'tm2nd' => 29, 'lm' => 30, 'lmSe1st' => 31, 'lmSe2nd' => 32, 'lmType' => 33, 'lopt' => 34, 'loptSe1st' => 35, 'loptSe2nd' => 36, 'loptType' => 37, 'loptText' => 38, 'a' => 39, 'b' => 40, 'lwLength' => 41, 'lwLengthType' => 42, 'w' => 43, 'wType' => 44, 'nitrogenproteinWeight' => 45, 'nitrogenproteinWeightType' => 46, 'nitrogen' => 47, 'protein' => 48, 'reproductiveGuild' => 49, 'fecundity' => 50, 'fecundity1st' => 51, 'fecundity2nd' => 52, 'zzzfecundityText' => 53, 'emsy' => 54, 'eopt' => 55, 'fmsy' => 56, 'fopt' => 57, 'lc' => 58, 'lcType' => 59, 'e' => 60, 'yr' => 61, 'resilience' => 62, 'rm' => 63, 'lr' => 64, 'lrType' => 65, 'mainFood' => 66, 'trophicLevel' => 67, 'qb' => 68, 'qbText' => 69, 'qbWinf' => 70, 'qbTemp' => 71, 'qbA' => 72, 'withGrowth' => 73, 'withMaxAgeSize' => 74, 'withLw' => 75, 'withReproduction' => 76, 'withDiet' => 77, 'withFoodConsumption' => 78, 'withFood' => 79, 'withMaturity' => 80, 'withSpawning' => 81, 'stockcode' => 82, 'ts' => 83, ),
        BasePeer::TYPE_COLNAME => array (MatrixPeer::ID => 0, MatrixPeer::SPECCODE => 1, MatrixPeer::FAMCODE => 2, MatrixPeer::KF_TYPE => 3, MatrixPeer::TM_FOR_KF => 4, MatrixPeer::LMAX => 5, MatrixPeer::LMAX_TYPE => 6, MatrixPeer::LINF => 7, MatrixPeer::LINF_TYPE => 8, MatrixPeer::LINF_1ST => 9, MatrixPeer::LINF_2ND => 10, MatrixPeer::LINF_COMMENT => 11, MatrixPeer::K => 12, MatrixPeer::KF_COMMENT => 13, MatrixPeer::PHIPRIME => 14, MatrixPeer::TO => 15, MatrixPeer::MEAN_TEMP => 16, MatrixPeer::M => 17, MatrixPeer::M_SE_1ST => 18, MatrixPeer::M_SE_2ND => 19, MatrixPeer::M_COMMENT => 20, MatrixPeer::LIFE_SPAN => 21, MatrixPeer::LIFE_SPAN_1ST => 22, MatrixPeer::LIFE_SPAN_2ND => 23, MatrixPeer::GENERATION_TIME => 24, MatrixPeer::GEN_TIME_1ST => 25, MatrixPeer::GEN_TIME_2ND => 26, MatrixPeer::TM => 27, MatrixPeer::TM_1ST => 28, MatrixPeer::TM_2ND => 29, MatrixPeer::LM => 30, MatrixPeer::LM_SE_1ST => 31, MatrixPeer::LM_SE_2ND => 32, MatrixPeer::LM_TYPE => 33, MatrixPeer::LOPT => 34, MatrixPeer::LOPT_SE_1ST => 35, MatrixPeer::LOPT_SE_2ND => 36, MatrixPeer::LOPT_TYPE => 37, MatrixPeer::LOPT_TEXT => 38, MatrixPeer::A => 39, MatrixPeer::B => 40, MatrixPeer::LW_LENGTH => 41, MatrixPeer::LW_LENGTH_TYPE => 42, MatrixPeer::W => 43, MatrixPeer::W_TYPE => 44, MatrixPeer::NITROGENPROTEIN_WEIGHT => 45, MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE => 46, MatrixPeer::NITROGEN => 47, MatrixPeer::PROTEIN => 48, MatrixPeer::REPRODUCTIVE_GUILD => 49, MatrixPeer::FECUNDITY => 50, MatrixPeer::FECUNDITY_1ST => 51, MatrixPeer::FECUNDITY_2ND => 52, MatrixPeer::ZZZFECUNDITY_TEXT => 53, MatrixPeer::EMSY => 54, MatrixPeer::EOPT => 55, MatrixPeer::FMSY => 56, MatrixPeer::FOPT => 57, MatrixPeer::LC => 58, MatrixPeer::LC_TYPE => 59, MatrixPeer::E => 60, MatrixPeer::YR => 61, MatrixPeer::RESILIENCE => 62, MatrixPeer::RM => 63, MatrixPeer::LR => 64, MatrixPeer::LR_TYPE => 65, MatrixPeer::MAIN_FOOD => 66, MatrixPeer::TROPHIC_LEVEL => 67, MatrixPeer::QB => 68, MatrixPeer::QB_TEXT => 69, MatrixPeer::QB_WINF => 70, MatrixPeer::QB_TEMP => 71, MatrixPeer::QB_A => 72, MatrixPeer::WITH_GROWTH => 73, MatrixPeer::WITH_MAX_AGE_SIZE => 74, MatrixPeer::WITH_LW => 75, MatrixPeer::WITH_REPRODUCTION => 76, MatrixPeer::WITH_DIET => 77, MatrixPeer::WITH_FOOD_CONSUMPTION => 78, MatrixPeer::WITH_FOOD => 79, MatrixPeer::WITH_MATURITY => 80, MatrixPeer::WITH_SPAWNING => 81, MatrixPeer::STOCKCODE => 82, MatrixPeer::TS => 83, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SPECCODE' => 1, 'FAMCODE' => 2, 'KF_TYPE' => 3, 'TM_FOR_KF' => 4, 'LMAX' => 5, 'LMAX_TYPE' => 6, 'LINF' => 7, 'LINF_TYPE' => 8, 'LINF_1ST' => 9, 'LINF_2ND' => 10, 'LINF_COMMENT' => 11, 'K' => 12, 'KF_COMMENT' => 13, 'PHIPRIME' => 14, 'TO' => 15, 'MEAN_TEMP' => 16, 'M' => 17, 'M_SE_1ST' => 18, 'M_SE_2ND' => 19, 'M_COMMENT' => 20, 'LIFE_SPAN' => 21, 'LIFE_SPAN_1ST' => 22, 'LIFE_SPAN_2ND' => 23, 'GENERATION_TIME' => 24, 'GEN_TIME_1ST' => 25, 'GEN_TIME_2ND' => 26, 'TM' => 27, 'TM_1ST' => 28, 'TM_2ND' => 29, 'LM' => 30, 'LM_SE_1ST' => 31, 'LM_SE_2ND' => 32, 'LM_TYPE' => 33, 'LOPT' => 34, 'LOPT_SE_1ST' => 35, 'LOPT_SE_2ND' => 36, 'LOPT_TYPE' => 37, 'LOPT_TEXT' => 38, 'A' => 39, 'B' => 40, 'LW_LENGTH' => 41, 'LW_LENGTH_TYPE' => 42, 'W' => 43, 'W_TYPE' => 44, 'NITROGENPROTEIN_WEIGHT' => 45, 'NITROGENPROTEIN_WEIGHT_TYPE' => 46, 'NITROGEN' => 47, 'PROTEIN' => 48, 'REPRODUCTIVE_GUILD' => 49, 'FECUNDITY' => 50, 'FECUNDITY_1ST' => 51, 'FECUNDITY_2ND' => 52, 'ZZZFECUNDITY_TEXT' => 53, 'EMSY' => 54, 'EOPT' => 55, 'FMSY' => 56, 'FOPT' => 57, 'LC' => 58, 'LC_TYPE' => 59, 'E' => 60, 'YR' => 61, 'RESILIENCE' => 62, 'RM' => 63, 'LR' => 64, 'LR_TYPE' => 65, 'MAIN_FOOD' => 66, 'TROPHIC_LEVEL' => 67, 'QB' => 68, 'QB_TEXT' => 69, 'QB_WINF' => 70, 'QB_TEMP' => 71, 'QB_A' => 72, 'WITH_GROWTH' => 73, 'WITH_MAX_AGE_SIZE' => 74, 'WITH_LW' => 75, 'WITH_REPRODUCTION' => 76, 'WITH_DIET' => 77, 'WITH_FOOD_CONSUMPTION' => 78, 'WITH_FOOD' => 79, 'WITH_MATURITY' => 80, 'WITH_SPAWNING' => 81, 'STOCKCODE' => 82, 'TS' => 83, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'SpecCode' => 1, 'FamCode' => 2, 'KF_type' => 3, 'tm_for_KF' => 4, 'LMax' => 5, 'LMax_type' => 6, 'Linf' => 7, 'Linf_type' => 8, 'Linf_1st' => 9, 'Linf_2nd' => 10, 'Linf_comment' => 11, 'K' => 12, 'KF_comment' => 13, 'PhiPrime' => 14, 'to' => 15, 'mean_temp' => 16, 'M' => 17, 'M_se_1st' => 18, 'M_se_2nd' => 19, 'M_comment' => 20, 'Life_span' => 21, 'Life_span_1st' => 22, 'Life_span_2nd' => 23, 'Generation_time' => 24, 'Gen_time_1st' => 25, 'Gen_time_2nd' => 26, 'tm' => 27, 'tm_1st' => 28, 'tm_2nd' => 29, 'Lm' => 30, 'Lm_se_1st' => 31, 'Lm_se_2nd' => 32, 'Lm_type' => 33, 'Lopt' => 34, 'Lopt_se_1st' => 35, 'Lopt_se_2nd' => 36, 'Lopt_type' => 37, 'Lopt_text' => 38, 'a' => 39, 'b' => 40, 'LW_length' => 41, 'LW_length_type' => 42, 'W' => 43, 'W_type' => 44, 'NitrogenProtein_weight' => 45, 'NitrogenProtein_weight_type' => 46, 'nitrogen' => 47, 'protein' => 48, 'Reproductive_guild' => 49, 'Fecundity' => 50, 'Fecundity_1st' => 51, 'Fecundity_2nd' => 52, 'zzzFecundity_text' => 53, 'Emsy' => 54, 'Eopt' => 55, 'Fmsy' => 56, 'Fopt' => 57, 'Lc' => 58, 'Lc_type' => 59, 'E' => 60, 'YR' => 61, 'Resilience' => 62, 'rm' => 63, 'Lr' => 64, 'Lr_type' => 65, 'main_food' => 66, 'trophic_level' => 67, 'QB' => 68, 'QB_text' => 69, 'QB_Winf' => 70, 'QB_temp' => 71, 'QB_A' => 72, 'with_growth' => 73, 'with_max_age_size' => 74, 'with_lw' => 75, 'with_reproduction' => 76, 'with_diet' => 77, 'with_food_consumption' => 78, 'with_food' => 79, 'with_maturity' => 80, 'with_spawning' => 81, 'stockcode' => 82, 'TS' => 83, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = MatrixPeer::getFieldNames($toType);
        $key = isset(MatrixPeer::$fieldKeys[$fromType][$name]) ? MatrixPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MatrixPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, MatrixPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MatrixPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. MatrixPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MatrixPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(MatrixPeer::ID);
            $criteria->addSelectColumn(MatrixPeer::SPECCODE);
            $criteria->addSelectColumn(MatrixPeer::FAMCODE);
            $criteria->addSelectColumn(MatrixPeer::KF_TYPE);
            $criteria->addSelectColumn(MatrixPeer::TM_FOR_KF);
            $criteria->addSelectColumn(MatrixPeer::LMAX);
            $criteria->addSelectColumn(MatrixPeer::LMAX_TYPE);
            $criteria->addSelectColumn(MatrixPeer::LINF);
            $criteria->addSelectColumn(MatrixPeer::LINF_TYPE);
            $criteria->addSelectColumn(MatrixPeer::LINF_1ST);
            $criteria->addSelectColumn(MatrixPeer::LINF_2ND);
            $criteria->addSelectColumn(MatrixPeer::LINF_COMMENT);
            $criteria->addSelectColumn(MatrixPeer::K);
            $criteria->addSelectColumn(MatrixPeer::KF_COMMENT);
            $criteria->addSelectColumn(MatrixPeer::PHIPRIME);
            $criteria->addSelectColumn(MatrixPeer::TO);
            $criteria->addSelectColumn(MatrixPeer::MEAN_TEMP);
            $criteria->addSelectColumn(MatrixPeer::M);
            $criteria->addSelectColumn(MatrixPeer::M_SE_1ST);
            $criteria->addSelectColumn(MatrixPeer::M_SE_2ND);
            $criteria->addSelectColumn(MatrixPeer::M_COMMENT);
            $criteria->addSelectColumn(MatrixPeer::LIFE_SPAN);
            $criteria->addSelectColumn(MatrixPeer::LIFE_SPAN_1ST);
            $criteria->addSelectColumn(MatrixPeer::LIFE_SPAN_2ND);
            $criteria->addSelectColumn(MatrixPeer::GENERATION_TIME);
            $criteria->addSelectColumn(MatrixPeer::GEN_TIME_1ST);
            $criteria->addSelectColumn(MatrixPeer::GEN_TIME_2ND);
            $criteria->addSelectColumn(MatrixPeer::TM);
            $criteria->addSelectColumn(MatrixPeer::TM_1ST);
            $criteria->addSelectColumn(MatrixPeer::TM_2ND);
            $criteria->addSelectColumn(MatrixPeer::LM);
            $criteria->addSelectColumn(MatrixPeer::LM_SE_1ST);
            $criteria->addSelectColumn(MatrixPeer::LM_SE_2ND);
            $criteria->addSelectColumn(MatrixPeer::LM_TYPE);
            $criteria->addSelectColumn(MatrixPeer::LOPT);
            $criteria->addSelectColumn(MatrixPeer::LOPT_SE_1ST);
            $criteria->addSelectColumn(MatrixPeer::LOPT_SE_2ND);
            $criteria->addSelectColumn(MatrixPeer::LOPT_TYPE);
            $criteria->addSelectColumn(MatrixPeer::LOPT_TEXT);
            $criteria->addSelectColumn(MatrixPeer::A);
            $criteria->addSelectColumn(MatrixPeer::B);
            $criteria->addSelectColumn(MatrixPeer::LW_LENGTH);
            $criteria->addSelectColumn(MatrixPeer::LW_LENGTH_TYPE);
            $criteria->addSelectColumn(MatrixPeer::W);
            $criteria->addSelectColumn(MatrixPeer::W_TYPE);
            $criteria->addSelectColumn(MatrixPeer::NITROGENPROTEIN_WEIGHT);
            $criteria->addSelectColumn(MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE);
            $criteria->addSelectColumn(MatrixPeer::NITROGEN);
            $criteria->addSelectColumn(MatrixPeer::PROTEIN);
            $criteria->addSelectColumn(MatrixPeer::REPRODUCTIVE_GUILD);
            $criteria->addSelectColumn(MatrixPeer::FECUNDITY);
            $criteria->addSelectColumn(MatrixPeer::FECUNDITY_1ST);
            $criteria->addSelectColumn(MatrixPeer::FECUNDITY_2ND);
            $criteria->addSelectColumn(MatrixPeer::ZZZFECUNDITY_TEXT);
            $criteria->addSelectColumn(MatrixPeer::EMSY);
            $criteria->addSelectColumn(MatrixPeer::EOPT);
            $criteria->addSelectColumn(MatrixPeer::FMSY);
            $criteria->addSelectColumn(MatrixPeer::FOPT);
            $criteria->addSelectColumn(MatrixPeer::LC);
            $criteria->addSelectColumn(MatrixPeer::LC_TYPE);
            $criteria->addSelectColumn(MatrixPeer::E);
            $criteria->addSelectColumn(MatrixPeer::YR);
            $criteria->addSelectColumn(MatrixPeer::RESILIENCE);
            $criteria->addSelectColumn(MatrixPeer::RM);
            $criteria->addSelectColumn(MatrixPeer::LR);
            $criteria->addSelectColumn(MatrixPeer::LR_TYPE);
            $criteria->addSelectColumn(MatrixPeer::MAIN_FOOD);
            $criteria->addSelectColumn(MatrixPeer::TROPHIC_LEVEL);
            $criteria->addSelectColumn(MatrixPeer::QB);
            $criteria->addSelectColumn(MatrixPeer::QB_TEXT);
            $criteria->addSelectColumn(MatrixPeer::QB_WINF);
            $criteria->addSelectColumn(MatrixPeer::QB_TEMP);
            $criteria->addSelectColumn(MatrixPeer::QB_A);
            $criteria->addSelectColumn(MatrixPeer::WITH_GROWTH);
            $criteria->addSelectColumn(MatrixPeer::WITH_MAX_AGE_SIZE);
            $criteria->addSelectColumn(MatrixPeer::WITH_LW);
            $criteria->addSelectColumn(MatrixPeer::WITH_REPRODUCTION);
            $criteria->addSelectColumn(MatrixPeer::WITH_DIET);
            $criteria->addSelectColumn(MatrixPeer::WITH_FOOD_CONSUMPTION);
            $criteria->addSelectColumn(MatrixPeer::WITH_FOOD);
            $criteria->addSelectColumn(MatrixPeer::WITH_MATURITY);
            $criteria->addSelectColumn(MatrixPeer::WITH_SPAWNING);
            $criteria->addSelectColumn(MatrixPeer::STOCKCODE);
            $criteria->addSelectColumn(MatrixPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.KF_type');
            $criteria->addSelectColumn($alias . '.tm_for_KF');
            $criteria->addSelectColumn($alias . '.LMax');
            $criteria->addSelectColumn($alias . '.LMax_type');
            $criteria->addSelectColumn($alias . '.Linf');
            $criteria->addSelectColumn($alias . '.Linf_type');
            $criteria->addSelectColumn($alias . '.Linf_1st');
            $criteria->addSelectColumn($alias . '.Linf_2nd');
            $criteria->addSelectColumn($alias . '.Linf_comment');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.KF_comment');
            $criteria->addSelectColumn($alias . '.PhiPrime');
            $criteria->addSelectColumn($alias . '.to');
            $criteria->addSelectColumn($alias . '.mean_temp');
            $criteria->addSelectColumn($alias . '.M');
            $criteria->addSelectColumn($alias . '.M_se_1st');
            $criteria->addSelectColumn($alias . '.M_se_2nd');
            $criteria->addSelectColumn($alias . '.M_comment');
            $criteria->addSelectColumn($alias . '.Life_span');
            $criteria->addSelectColumn($alias . '.Life_span_1st');
            $criteria->addSelectColumn($alias . '.Life_span_2nd');
            $criteria->addSelectColumn($alias . '.Generation_time');
            $criteria->addSelectColumn($alias . '.Gen_time_1st');
            $criteria->addSelectColumn($alias . '.Gen_time_2nd');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.tm_1st');
            $criteria->addSelectColumn($alias . '.tm_2nd');
            $criteria->addSelectColumn($alias . '.Lm');
            $criteria->addSelectColumn($alias . '.Lm_se_1st');
            $criteria->addSelectColumn($alias . '.Lm_se_2nd');
            $criteria->addSelectColumn($alias . '.Lm_type');
            $criteria->addSelectColumn($alias . '.Lopt');
            $criteria->addSelectColumn($alias . '.Lopt_se_1st');
            $criteria->addSelectColumn($alias . '.Lopt_se_2nd');
            $criteria->addSelectColumn($alias . '.Lopt_type');
            $criteria->addSelectColumn($alias . '.Lopt_text');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.LW_length');
            $criteria->addSelectColumn($alias . '.LW_length_type');
            $criteria->addSelectColumn($alias . '.W');
            $criteria->addSelectColumn($alias . '.W_type');
            $criteria->addSelectColumn($alias . '.NitrogenProtein_weight');
            $criteria->addSelectColumn($alias . '.NitrogenProtein_weight_type');
            $criteria->addSelectColumn($alias . '.nitrogen');
            $criteria->addSelectColumn($alias . '.protein');
            $criteria->addSelectColumn($alias . '.Reproductive_guild');
            $criteria->addSelectColumn($alias . '.Fecundity');
            $criteria->addSelectColumn($alias . '.Fecundity_1st');
            $criteria->addSelectColumn($alias . '.Fecundity_2nd');
            $criteria->addSelectColumn($alias . '.zzzFecundity_text');
            $criteria->addSelectColumn($alias . '.Emsy');
            $criteria->addSelectColumn($alias . '.Eopt');
            $criteria->addSelectColumn($alias . '.Fmsy');
            $criteria->addSelectColumn($alias . '.Fopt');
            $criteria->addSelectColumn($alias . '.Lc');
            $criteria->addSelectColumn($alias . '.Lc_type');
            $criteria->addSelectColumn($alias . '.E');
            $criteria->addSelectColumn($alias . '.YR');
            $criteria->addSelectColumn($alias . '.Resilience');
            $criteria->addSelectColumn($alias . '.rm');
            $criteria->addSelectColumn($alias . '.Lr');
            $criteria->addSelectColumn($alias . '.Lr_type');
            $criteria->addSelectColumn($alias . '.main_food');
            $criteria->addSelectColumn($alias . '.trophic_level');
            $criteria->addSelectColumn($alias . '.QB');
            $criteria->addSelectColumn($alias . '.QB_text');
            $criteria->addSelectColumn($alias . '.QB_Winf');
            $criteria->addSelectColumn($alias . '.QB_temp');
            $criteria->addSelectColumn($alias . '.QB_A');
            $criteria->addSelectColumn($alias . '.with_growth');
            $criteria->addSelectColumn($alias . '.with_max_age_size');
            $criteria->addSelectColumn($alias . '.with_lw');
            $criteria->addSelectColumn($alias . '.with_reproduction');
            $criteria->addSelectColumn($alias . '.with_diet');
            $criteria->addSelectColumn($alias . '.with_food_consumption');
            $criteria->addSelectColumn($alias . '.with_food');
            $criteria->addSelectColumn($alias . '.with_maturity');
            $criteria->addSelectColumn($alias . '.with_spawning');
            $criteria->addSelectColumn($alias . '.stockcode');
            $criteria->addSelectColumn($alias . '.TS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatrixPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatrixPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MatrixPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Matrix
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MatrixPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return MatrixPeer::populateObjects(MatrixPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MatrixPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MatrixPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Matrix $obj A Matrix object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            MatrixPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Matrix object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Matrix) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Matrix object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MatrixPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Matrix Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MatrixPeer::$instances[$key])) {
                return MatrixPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (MatrixPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MatrixPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to matrix
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = MatrixPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MatrixPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MatrixPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MatrixPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Matrix object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MatrixPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MatrixPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MatrixPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MatrixPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MatrixPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(MatrixPeer::DATABASE_NAME)->getTable(MatrixPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMatrixPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMatrixPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MatrixTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return MatrixPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Matrix or Criteria object.
     *
     * @param      mixed $values Criteria or Matrix object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Matrix object
        }

        if ($criteria->containsKey(MatrixPeer::ID) && $criteria->keyContainsValue(MatrixPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MatrixPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MatrixPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Matrix or Criteria object.
     *
     * @param      mixed $values Criteria or Matrix object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MatrixPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MatrixPeer::ID);
            $value = $criteria->remove(MatrixPeer::ID);
            if ($value) {
                $selectCriteria->add(MatrixPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MatrixPeer::TABLE_NAME);
            }

        } else { // $values is Matrix object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MatrixPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the matrix table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MatrixPeer::TABLE_NAME, $con, MatrixPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MatrixPeer::clearInstancePool();
            MatrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Matrix or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Matrix object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MatrixPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Matrix) { // it's a model object
            // invalidate the cache for this single object
            MatrixPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MatrixPeer::DATABASE_NAME);
            $criteria->add(MatrixPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MatrixPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MatrixPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MatrixPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Matrix object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Matrix $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MatrixPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MatrixPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(MatrixPeer::DATABASE_NAME, MatrixPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Matrix
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MatrixPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MatrixPeer::DATABASE_NAME);
        $criteria->add(MatrixPeer::ID, $pk);

        $v = MatrixPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Matrix[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MatrixPeer::DATABASE_NAME);
            $criteria->add(MatrixPeer::ID, $pks, Criteria::IN);
            $objs = MatrixPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMatrixPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMatrixPeer::buildTableMap();

