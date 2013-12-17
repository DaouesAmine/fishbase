<?php


/**
 * Base class that represents a row from the 'matrix' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMatrix extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MatrixPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MatrixPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the kf_type field.
     * @var        int
     */
    protected $kf_type;

    /**
     * The value for the tm_for_kf field.
     * @var        double
     */
    protected $tm_for_kf;

    /**
     * The value for the lmax field.
     * @var        double
     */
    protected $lmax;

    /**
     * The value for the lmax_type field.
     * @var        string
     */
    protected $lmax_type;

    /**
     * The value for the linf field.
     * @var        double
     */
    protected $linf;

    /**
     * The value for the linf_type field.
     * @var        string
     */
    protected $linf_type;

    /**
     * The value for the linf_1st field.
     * @var        double
     */
    protected $linf_1st;

    /**
     * The value for the linf_2nd field.
     * @var        double
     */
    protected $linf_2nd;

    /**
     * The value for the linf_comment field.
     * @var        string
     */
    protected $linf_comment;

    /**
     * The value for the k field.
     * @var        double
     */
    protected $k;

    /**
     * The value for the kf_comment field.
     * @var        string
     */
    protected $kf_comment;

    /**
     * The value for the phiprime field.
     * @var        double
     */
    protected $phiprime;

    /**
     * The value for the to field.
     * @var        double
     */
    protected $to;

    /**
     * The value for the mean_temp field.
     * @var        double
     */
    protected $mean_temp;

    /**
     * The value for the m field.
     * @var        double
     */
    protected $m;

    /**
     * The value for the m_se_1st field.
     * @var        double
     */
    protected $m_se_1st;

    /**
     * The value for the m_se_2nd field.
     * @var        double
     */
    protected $m_se_2nd;

    /**
     * The value for the m_comment field.
     * @var        string
     */
    protected $m_comment;

    /**
     * The value for the life_span field.
     * @var        double
     */
    protected $life_span;

    /**
     * The value for the life_span_1st field.
     * @var        double
     */
    protected $life_span_1st;

    /**
     * The value for the life_span_2nd field.
     * @var        double
     */
    protected $life_span_2nd;

    /**
     * The value for the generation_time field.
     * @var        double
     */
    protected $generation_time;

    /**
     * The value for the gen_time_1st field.
     * @var        double
     */
    protected $gen_time_1st;

    /**
     * The value for the gen_time_2nd field.
     * @var        double
     */
    protected $gen_time_2nd;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the tm_1st field.
     * @var        double
     */
    protected $tm_1st;

    /**
     * The value for the tm_2nd field.
     * @var        double
     */
    protected $tm_2nd;

    /**
     * The value for the lm field.
     * @var        double
     */
    protected $lm;

    /**
     * The value for the lm_se_1st field.
     * @var        double
     */
    protected $lm_se_1st;

    /**
     * The value for the lm_se_2nd field.
     * @var        double
     */
    protected $lm_se_2nd;

    /**
     * The value for the lm_type field.
     * @var        string
     */
    protected $lm_type;

    /**
     * The value for the lopt field.
     * @var        double
     */
    protected $lopt;

    /**
     * The value for the lopt_se_1st field.
     * @var        double
     */
    protected $lopt_se_1st;

    /**
     * The value for the lopt_se_2nd field.
     * @var        double
     */
    protected $lopt_se_2nd;

    /**
     * The value for the lopt_type field.
     * @var        string
     */
    protected $lopt_type;

    /**
     * The value for the lopt_text field.
     * @var        string
     */
    protected $lopt_text;

    /**
     * The value for the a field.
     * @var        double
     */
    protected $a;

    /**
     * The value for the b field.
     * @var        double
     */
    protected $b;

    /**
     * The value for the lw_length field.
     * @var        double
     */
    protected $lw_length;

    /**
     * The value for the lw_length_type field.
     * @var        string
     */
    protected $lw_length_type;

    /**
     * The value for the w field.
     * @var        double
     */
    protected $w;

    /**
     * The value for the w_type field.
     * @var        string
     */
    protected $w_type;

    /**
     * The value for the nitrogenprotein_weight field.
     * @var        double
     */
    protected $nitrogenprotein_weight;

    /**
     * The value for the nitrogenprotein_weight_type field.
     * @var        string
     */
    protected $nitrogenprotein_weight_type;

    /**
     * The value for the nitrogen field.
     * @var        double
     */
    protected $nitrogen;

    /**
     * The value for the protein field.
     * @var        double
     */
    protected $protein;

    /**
     * The value for the reproductive_guild field.
     * @var        string
     */
    protected $reproductive_guild;

    /**
     * The value for the fecundity field.
     * @var        double
     */
    protected $fecundity;

    /**
     * The value for the fecundity_1st field.
     * @var        string
     */
    protected $fecundity_1st;

    /**
     * The value for the fecundity_2nd field.
     * @var        string
     */
    protected $fecundity_2nd;

    /**
     * The value for the zzzfecundity_text field.
     * @var        string
     */
    protected $zzzfecundity_text;

    /**
     * The value for the emsy field.
     * @var        double
     */
    protected $emsy;

    /**
     * The value for the eopt field.
     * @var        double
     */
    protected $eopt;

    /**
     * The value for the fmsy field.
     * @var        double
     */
    protected $fmsy;

    /**
     * The value for the fopt field.
     * @var        double
     */
    protected $fopt;

    /**
     * The value for the lc field.
     * @var        double
     */
    protected $lc;

    /**
     * The value for the lc_type field.
     * @var        string
     */
    protected $lc_type;

    /**
     * The value for the e field.
     * @var        double
     */
    protected $e;

    /**
     * The value for the yr field.
     * @var        double
     */
    protected $yr;

    /**
     * The value for the resilience field.
     * @var        string
     */
    protected $resilience;

    /**
     * The value for the rm field.
     * @var        double
     */
    protected $rm;

    /**
     * The value for the lr field.
     * @var        double
     */
    protected $lr;

    /**
     * The value for the lr_type field.
     * @var        string
     */
    protected $lr_type;

    /**
     * The value for the main_food field.
     * @var        string
     */
    protected $main_food;

    /**
     * The value for the trophic_level field.
     * @var        string
     */
    protected $trophic_level;

    /**
     * The value for the qb field.
     * @var        double
     */
    protected $qb;

    /**
     * The value for the qb_text field.
     * @var        string
     */
    protected $qb_text;

    /**
     * The value for the qb_winf field.
     * @var        double
     */
    protected $qb_winf;

    /**
     * The value for the qb_temp field.
     * @var        double
     */
    protected $qb_temp;

    /**
     * The value for the qb_a field.
     * @var        double
     */
    protected $qb_a;

    /**
     * The value for the with_growth field.
     * @var        string
     */
    protected $with_growth;

    /**
     * The value for the with_max_age_size field.
     * @var        string
     */
    protected $with_max_age_size;

    /**
     * The value for the with_lw field.
     * @var        string
     */
    protected $with_lw;

    /**
     * The value for the with_reproduction field.
     * @var        string
     */
    protected $with_reproduction;

    /**
     * The value for the with_diet field.
     * @var        string
     */
    protected $with_diet;

    /**
     * The value for the with_food_consumption field.
     * @var        string
     */
    protected $with_food_consumption;

    /**
     * The value for the with_food field.
     * @var        string
     */
    protected $with_food;

    /**
     * The value for the with_maturity field.
     * @var        string
     */
    protected $with_maturity;

    /**
     * The value for the with_spawning field.
     * @var        string
     */
    protected $with_spawning;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the ts field.
     * @var        string
     */
    protected $ts;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
    }

    /**
     * Get the [kf_type] column value.
     *
     * @return int
     */
    public function getKfType()
    {

        return $this->kf_type;
    }

    /**
     * Get the [tm_for_kf] column value.
     *
     * @return double
     */
    public function getTmForKf()
    {

        return $this->tm_for_kf;
    }

    /**
     * Get the [lmax] column value.
     *
     * @return double
     */
    public function getLmax()
    {

        return $this->lmax;
    }

    /**
     * Get the [lmax_type] column value.
     *
     * @return string
     */
    public function getLmaxType()
    {

        return $this->lmax_type;
    }

    /**
     * Get the [linf] column value.
     *
     * @return double
     */
    public function getLinf()
    {

        return $this->linf;
    }

    /**
     * Get the [linf_type] column value.
     *
     * @return string
     */
    public function getLinfType()
    {

        return $this->linf_type;
    }

    /**
     * Get the [linf_1st] column value.
     *
     * @return double
     */
    public function getLinf1st()
    {

        return $this->linf_1st;
    }

    /**
     * Get the [linf_2nd] column value.
     *
     * @return double
     */
    public function getLinf2nd()
    {

        return $this->linf_2nd;
    }

    /**
     * Get the [linf_comment] column value.
     *
     * @return string
     */
    public function getLinfComment()
    {

        return $this->linf_comment;
    }

    /**
     * Get the [k] column value.
     *
     * @return double
     */
    public function getK()
    {

        return $this->k;
    }

    /**
     * Get the [kf_comment] column value.
     *
     * @return string
     */
    public function getKfComment()
    {

        return $this->kf_comment;
    }

    /**
     * Get the [phiprime] column value.
     *
     * @return double
     */
    public function getPhiprime()
    {

        return $this->phiprime;
    }

    /**
     * Get the [to] column value.
     *
     * @return double
     */
    public function getTo()
    {

        return $this->to;
    }

    /**
     * Get the [mean_temp] column value.
     *
     * @return double
     */
    public function getMeanTemp()
    {

        return $this->mean_temp;
    }

    /**
     * Get the [m] column value.
     *
     * @return double
     */
    public function getM()
    {

        return $this->m;
    }

    /**
     * Get the [m_se_1st] column value.
     *
     * @return double
     */
    public function getMSe1st()
    {

        return $this->m_se_1st;
    }

    /**
     * Get the [m_se_2nd] column value.
     *
     * @return double
     */
    public function getMSe2nd()
    {

        return $this->m_se_2nd;
    }

    /**
     * Get the [m_comment] column value.
     *
     * @return string
     */
    public function getMComment()
    {

        return $this->m_comment;
    }

    /**
     * Get the [life_span] column value.
     *
     * @return double
     */
    public function getLifeSpan()
    {

        return $this->life_span;
    }

    /**
     * Get the [life_span_1st] column value.
     *
     * @return double
     */
    public function getLifeSpan1st()
    {

        return $this->life_span_1st;
    }

    /**
     * Get the [life_span_2nd] column value.
     *
     * @return double
     */
    public function getLifeSpan2nd()
    {

        return $this->life_span_2nd;
    }

    /**
     * Get the [generation_time] column value.
     *
     * @return double
     */
    public function getGenerationTime()
    {

        return $this->generation_time;
    }

    /**
     * Get the [gen_time_1st] column value.
     *
     * @return double
     */
    public function getGenTime1st()
    {

        return $this->gen_time_1st;
    }

    /**
     * Get the [gen_time_2nd] column value.
     *
     * @return double
     */
    public function getGenTime2nd()
    {

        return $this->gen_time_2nd;
    }

    /**
     * Get the [tm] column value.
     *
     * @return double
     */
    public function getTm()
    {

        return $this->tm;
    }

    /**
     * Get the [tm_1st] column value.
     *
     * @return double
     */
    public function getTm1st()
    {

        return $this->tm_1st;
    }

    /**
     * Get the [tm_2nd] column value.
     *
     * @return double
     */
    public function getTm2nd()
    {

        return $this->tm_2nd;
    }

    /**
     * Get the [lm] column value.
     *
     * @return double
     */
    public function getLm()
    {

        return $this->lm;
    }

    /**
     * Get the [lm_se_1st] column value.
     *
     * @return double
     */
    public function getLmSe1st()
    {

        return $this->lm_se_1st;
    }

    /**
     * Get the [lm_se_2nd] column value.
     *
     * @return double
     */
    public function getLmSe2nd()
    {

        return $this->lm_se_2nd;
    }

    /**
     * Get the [lm_type] column value.
     *
     * @return string
     */
    public function getLmType()
    {

        return $this->lm_type;
    }

    /**
     * Get the [lopt] column value.
     *
     * @return double
     */
    public function getLopt()
    {

        return $this->lopt;
    }

    /**
     * Get the [lopt_se_1st] column value.
     *
     * @return double
     */
    public function getLoptSe1st()
    {

        return $this->lopt_se_1st;
    }

    /**
     * Get the [lopt_se_2nd] column value.
     *
     * @return double
     */
    public function getLoptSe2nd()
    {

        return $this->lopt_se_2nd;
    }

    /**
     * Get the [lopt_type] column value.
     *
     * @return string
     */
    public function getLoptType()
    {

        return $this->lopt_type;
    }

    /**
     * Get the [lopt_text] column value.
     *
     * @return string
     */
    public function getLoptText()
    {

        return $this->lopt_text;
    }

    /**
     * Get the [a] column value.
     *
     * @return double
     */
    public function getA()
    {

        return $this->a;
    }

    /**
     * Get the [b] column value.
     *
     * @return double
     */
    public function getB()
    {

        return $this->b;
    }

    /**
     * Get the [lw_length] column value.
     *
     * @return double
     */
    public function getLwLength()
    {

        return $this->lw_length;
    }

    /**
     * Get the [lw_length_type] column value.
     *
     * @return string
     */
    public function getLwLengthType()
    {

        return $this->lw_length_type;
    }

    /**
     * Get the [w] column value.
     *
     * @return double
     */
    public function getW()
    {

        return $this->w;
    }

    /**
     * Get the [w_type] column value.
     *
     * @return string
     */
    public function getWType()
    {

        return $this->w_type;
    }

    /**
     * Get the [nitrogenprotein_weight] column value.
     *
     * @return double
     */
    public function getNitrogenproteinWeight()
    {

        return $this->nitrogenprotein_weight;
    }

    /**
     * Get the [nitrogenprotein_weight_type] column value.
     *
     * @return string
     */
    public function getNitrogenproteinWeightType()
    {

        return $this->nitrogenprotein_weight_type;
    }

    /**
     * Get the [nitrogen] column value.
     *
     * @return double
     */
    public function getNitrogen()
    {

        return $this->nitrogen;
    }

    /**
     * Get the [protein] column value.
     *
     * @return double
     */
    public function getProtein()
    {

        return $this->protein;
    }

    /**
     * Get the [reproductive_guild] column value.
     *
     * @return string
     */
    public function getReproductiveGuild()
    {

        return $this->reproductive_guild;
    }

    /**
     * Get the [fecundity] column value.
     *
     * @return double
     */
    public function getFecundity()
    {

        return $this->fecundity;
    }

    /**
     * Get the [fecundity_1st] column value.
     *
     * @return string
     */
    public function getFecundity1st()
    {

        return $this->fecundity_1st;
    }

    /**
     * Get the [fecundity_2nd] column value.
     *
     * @return string
     */
    public function getFecundity2nd()
    {

        return $this->fecundity_2nd;
    }

    /**
     * Get the [zzzfecundity_text] column value.
     *
     * @return string
     */
    public function getZzzfecundityText()
    {

        return $this->zzzfecundity_text;
    }

    /**
     * Get the [emsy] column value.
     *
     * @return double
     */
    public function getEmsy()
    {

        return $this->emsy;
    }

    /**
     * Get the [eopt] column value.
     *
     * @return double
     */
    public function getEopt()
    {

        return $this->eopt;
    }

    /**
     * Get the [fmsy] column value.
     *
     * @return double
     */
    public function getFmsy()
    {

        return $this->fmsy;
    }

    /**
     * Get the [fopt] column value.
     *
     * @return double
     */
    public function getFopt()
    {

        return $this->fopt;
    }

    /**
     * Get the [lc] column value.
     *
     * @return double
     */
    public function getLc()
    {

        return $this->lc;
    }

    /**
     * Get the [lc_type] column value.
     *
     * @return string
     */
    public function getLcType()
    {

        return $this->lc_type;
    }

    /**
     * Get the [e] column value.
     *
     * @return double
     */
    public function getE()
    {

        return $this->e;
    }

    /**
     * Get the [yr] column value.
     *
     * @return double
     */
    public function getYr()
    {

        return $this->yr;
    }

    /**
     * Get the [resilience] column value.
     *
     * @return string
     */
    public function getResilience()
    {

        return $this->resilience;
    }

    /**
     * Get the [rm] column value.
     *
     * @return double
     */
    public function getRm()
    {

        return $this->rm;
    }

    /**
     * Get the [lr] column value.
     *
     * @return double
     */
    public function getLr()
    {

        return $this->lr;
    }

    /**
     * Get the [lr_type] column value.
     *
     * @return string
     */
    public function getLrType()
    {

        return $this->lr_type;
    }

    /**
     * Get the [main_food] column value.
     *
     * @return string
     */
    public function getMainFood()
    {

        return $this->main_food;
    }

    /**
     * Get the [trophic_level] column value.
     *
     * @return string
     */
    public function getTrophicLevel()
    {

        return $this->trophic_level;
    }

    /**
     * Get the [qb] column value.
     *
     * @return double
     */
    public function getQb()
    {

        return $this->qb;
    }

    /**
     * Get the [qb_text] column value.
     *
     * @return string
     */
    public function getQbText()
    {

        return $this->qb_text;
    }

    /**
     * Get the [qb_winf] column value.
     *
     * @return double
     */
    public function getQbWinf()
    {

        return $this->qb_winf;
    }

    /**
     * Get the [qb_temp] column value.
     *
     * @return double
     */
    public function getQbTemp()
    {

        return $this->qb_temp;
    }

    /**
     * Get the [qb_a] column value.
     *
     * @return double
     */
    public function getQbA()
    {

        return $this->qb_a;
    }

    /**
     * Get the [with_growth] column value.
     *
     * @return string
     */
    public function getWithGrowth()
    {

        return $this->with_growth;
    }

    /**
     * Get the [with_max_age_size] column value.
     *
     * @return string
     */
    public function getWithMaxAgeSize()
    {

        return $this->with_max_age_size;
    }

    /**
     * Get the [with_lw] column value.
     *
     * @return string
     */
    public function getWithLw()
    {

        return $this->with_lw;
    }

    /**
     * Get the [with_reproduction] column value.
     *
     * @return string
     */
    public function getWithReproduction()
    {

        return $this->with_reproduction;
    }

    /**
     * Get the [with_diet] column value.
     *
     * @return string
     */
    public function getWithDiet()
    {

        return $this->with_diet;
    }

    /**
     * Get the [with_food_consumption] column value.
     *
     * @return string
     */
    public function getWithFoodConsumption()
    {

        return $this->with_food_consumption;
    }

    /**
     * Get the [with_food] column value.
     *
     * @return string
     */
    public function getWithFood()
    {

        return $this->with_food;
    }

    /**
     * Get the [with_maturity] column value.
     *
     * @return string
     */
    public function getWithMaturity()
    {

        return $this->with_maturity;
    }

    /**
     * Get the [with_spawning] column value.
     *
     * @return string
     */
    public function getWithSpawning()
    {

        return $this->with_spawning;
    }

    /**
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
    }

    /**
     * Get the [optionally formatted] temporal [ts] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTs($format = 'Y-m-d H:i:s')
    {
        if ($this->ts === null) {
            return null;
        }

        if ($this->ts === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ts);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ts, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = MatrixPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MatrixPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = MatrixPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [kf_type] column.
     *
     * @param  int $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setKfType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kf_type !== $v) {
            $this->kf_type = $v;
            $this->modifiedColumns[] = MatrixPeer::KF_TYPE;
        }


        return $this;
    } // setKfType()

    /**
     * Set the value of [tm_for_kf] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTmForKf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm_for_kf !== $v) {
            $this->tm_for_kf = $v;
            $this->modifiedColumns[] = MatrixPeer::TM_FOR_KF;
        }


        return $this;
    } // setTmForKf()

    /**
     * Set the value of [lmax] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lmax !== $v) {
            $this->lmax = $v;
            $this->modifiedColumns[] = MatrixPeer::LMAX;
        }


        return $this;
    } // setLmax()

    /**
     * Set the value of [lmax_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLmaxType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lmax_type !== $v) {
            $this->lmax_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LMAX_TYPE;
        }


        return $this;
    } // setLmaxType()

    /**
     * Set the value of [linf] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->linf !== $v) {
            $this->linf = $v;
            $this->modifiedColumns[] = MatrixPeer::LINF;
        }


        return $this;
    } // setLinf()

    /**
     * Set the value of [linf_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLinfType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linf_type !== $v) {
            $this->linf_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LINF_TYPE;
        }


        return $this;
    } // setLinfType()

    /**
     * Set the value of [linf_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLinf1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->linf_1st !== $v) {
            $this->linf_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::LINF_1ST;
        }


        return $this;
    } // setLinf1st()

    /**
     * Set the value of [linf_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLinf2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->linf_2nd !== $v) {
            $this->linf_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::LINF_2ND;
        }


        return $this;
    } // setLinf2nd()

    /**
     * Set the value of [linf_comment] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLinfComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linf_comment !== $v) {
            $this->linf_comment = $v;
            $this->modifiedColumns[] = MatrixPeer::LINF_COMMENT;
        }


        return $this;
    } // setLinfComment()

    /**
     * Set the value of [k] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[] = MatrixPeer::K;
        }


        return $this;
    } // setK()

    /**
     * Set the value of [kf_comment] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setKfComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kf_comment !== $v) {
            $this->kf_comment = $v;
            $this->modifiedColumns[] = MatrixPeer::KF_COMMENT;
        }


        return $this;
    } // setKfComment()

    /**
     * Set the value of [phiprime] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setPhiprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phiprime !== $v) {
            $this->phiprime = $v;
            $this->modifiedColumns[] = MatrixPeer::PHIPRIME;
        }


        return $this;
    } // setPhiprime()

    /**
     * Set the value of [to] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->to !== $v) {
            $this->to = $v;
            $this->modifiedColumns[] = MatrixPeer::TO;
        }


        return $this;
    } // setTo()

    /**
     * Set the value of [mean_temp] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setMeanTemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mean_temp !== $v) {
            $this->mean_temp = $v;
            $this->modifiedColumns[] = MatrixPeer::MEAN_TEMP;
        }


        return $this;
    } // setMeanTemp()

    /**
     * Set the value of [m] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setM($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m !== $v) {
            $this->m = $v;
            $this->modifiedColumns[] = MatrixPeer::M;
        }


        return $this;
    } // setM()

    /**
     * Set the value of [m_se_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setMSe1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m_se_1st !== $v) {
            $this->m_se_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::M_SE_1ST;
        }


        return $this;
    } // setMSe1st()

    /**
     * Set the value of [m_se_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setMSe2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->m_se_2nd !== $v) {
            $this->m_se_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::M_SE_2ND;
        }


        return $this;
    } // setMSe2nd()

    /**
     * Set the value of [m_comment] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setMComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->m_comment !== $v) {
            $this->m_comment = $v;
            $this->modifiedColumns[] = MatrixPeer::M_COMMENT;
        }


        return $this;
    } // setMComment()

    /**
     * Set the value of [life_span] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLifeSpan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->life_span !== $v) {
            $this->life_span = $v;
            $this->modifiedColumns[] = MatrixPeer::LIFE_SPAN;
        }


        return $this;
    } // setLifeSpan()

    /**
     * Set the value of [life_span_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLifeSpan1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->life_span_1st !== $v) {
            $this->life_span_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::LIFE_SPAN_1ST;
        }


        return $this;
    } // setLifeSpan1st()

    /**
     * Set the value of [life_span_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLifeSpan2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->life_span_2nd !== $v) {
            $this->life_span_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::LIFE_SPAN_2ND;
        }


        return $this;
    } // setLifeSpan2nd()

    /**
     * Set the value of [generation_time] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setGenerationTime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->generation_time !== $v) {
            $this->generation_time = $v;
            $this->modifiedColumns[] = MatrixPeer::GENERATION_TIME;
        }


        return $this;
    } // setGenerationTime()

    /**
     * Set the value of [gen_time_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setGenTime1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->gen_time_1st !== $v) {
            $this->gen_time_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::GEN_TIME_1ST;
        }


        return $this;
    } // setGenTime1st()

    /**
     * Set the value of [gen_time_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setGenTime2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->gen_time_2nd !== $v) {
            $this->gen_time_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::GEN_TIME_2ND;
        }


        return $this;
    } // setGenTime2nd()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = MatrixPeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [tm_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTm1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm_1st !== $v) {
            $this->tm_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::TM_1ST;
        }


        return $this;
    } // setTm1st()

    /**
     * Set the value of [tm_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTm2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm_2nd !== $v) {
            $this->tm_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::TM_2ND;
        }


        return $this;
    } // setTm2nd()

    /**
     * Set the value of [lm] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm !== $v) {
            $this->lm = $v;
            $this->modifiedColumns[] = MatrixPeer::LM;
        }


        return $this;
    } // setLm()

    /**
     * Set the value of [lm_se_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLmSe1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm_se_1st !== $v) {
            $this->lm_se_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::LM_SE_1ST;
        }


        return $this;
    } // setLmSe1st()

    /**
     * Set the value of [lm_se_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLmSe2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lm_se_2nd !== $v) {
            $this->lm_se_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::LM_SE_2ND;
        }


        return $this;
    } // setLmSe2nd()

    /**
     * Set the value of [lm_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLmType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lm_type !== $v) {
            $this->lm_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LM_TYPE;
        }


        return $this;
    } // setLmType()

    /**
     * Set the value of [lopt] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lopt !== $v) {
            $this->lopt = $v;
            $this->modifiedColumns[] = MatrixPeer::LOPT;
        }


        return $this;
    } // setLopt()

    /**
     * Set the value of [lopt_se_1st] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLoptSe1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lopt_se_1st !== $v) {
            $this->lopt_se_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::LOPT_SE_1ST;
        }


        return $this;
    } // setLoptSe1st()

    /**
     * Set the value of [lopt_se_2nd] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLoptSe2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lopt_se_2nd !== $v) {
            $this->lopt_se_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::LOPT_SE_2ND;
        }


        return $this;
    } // setLoptSe2nd()

    /**
     * Set the value of [lopt_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLoptType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lopt_type !== $v) {
            $this->lopt_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LOPT_TYPE;
        }


        return $this;
    } // setLoptType()

    /**
     * Set the value of [lopt_text] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLoptText($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lopt_text !== $v) {
            $this->lopt_text = $v;
            $this->modifiedColumns[] = MatrixPeer::LOPT_TEXT;
        }


        return $this;
    } // setLoptText()

    /**
     * Set the value of [a] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[] = MatrixPeer::A;
        }


        return $this;
    } // setA()

    /**
     * Set the value of [b] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[] = MatrixPeer::B;
        }


        return $this;
    } // setB()

    /**
     * Set the value of [lw_length] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLwLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lw_length !== $v) {
            $this->lw_length = $v;
            $this->modifiedColumns[] = MatrixPeer::LW_LENGTH;
        }


        return $this;
    } // setLwLength()

    /**
     * Set the value of [lw_length_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLwLengthType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lw_length_type !== $v) {
            $this->lw_length_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LW_LENGTH_TYPE;
        }


        return $this;
    } // setLwLengthType()

    /**
     * Set the value of [w] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setW($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->w !== $v) {
            $this->w = $v;
            $this->modifiedColumns[] = MatrixPeer::W;
        }


        return $this;
    } // setW()

    /**
     * Set the value of [w_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->w_type !== $v) {
            $this->w_type = $v;
            $this->modifiedColumns[] = MatrixPeer::W_TYPE;
        }


        return $this;
    } // setWType()

    /**
     * Set the value of [nitrogenprotein_weight] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setNitrogenproteinWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->nitrogenprotein_weight !== $v) {
            $this->nitrogenprotein_weight = $v;
            $this->modifiedColumns[] = MatrixPeer::NITROGENPROTEIN_WEIGHT;
        }


        return $this;
    } // setNitrogenproteinWeight()

    /**
     * Set the value of [nitrogenprotein_weight_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setNitrogenproteinWeightType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitrogenprotein_weight_type !== $v) {
            $this->nitrogenprotein_weight_type = $v;
            $this->modifiedColumns[] = MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE;
        }


        return $this;
    } // setNitrogenproteinWeightType()

    /**
     * Set the value of [nitrogen] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setNitrogen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->nitrogen !== $v) {
            $this->nitrogen = $v;
            $this->modifiedColumns[] = MatrixPeer::NITROGEN;
        }


        return $this;
    } // setNitrogen()

    /**
     * Set the value of [protein] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setProtein($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->protein !== $v) {
            $this->protein = $v;
            $this->modifiedColumns[] = MatrixPeer::PROTEIN;
        }


        return $this;
    } // setProtein()

    /**
     * Set the value of [reproductive_guild] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setReproductiveGuild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reproductive_guild !== $v) {
            $this->reproductive_guild = $v;
            $this->modifiedColumns[] = MatrixPeer::REPRODUCTIVE_GUILD;
        }


        return $this;
    } // setReproductiveGuild()

    /**
     * Set the value of [fecundity] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFecundity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fecundity !== $v) {
            $this->fecundity = $v;
            $this->modifiedColumns[] = MatrixPeer::FECUNDITY;
        }


        return $this;
    } // setFecundity()

    /**
     * Set the value of [fecundity_1st] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFecundity1st($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fecundity_1st !== $v) {
            $this->fecundity_1st = $v;
            $this->modifiedColumns[] = MatrixPeer::FECUNDITY_1ST;
        }


        return $this;
    } // setFecundity1st()

    /**
     * Set the value of [fecundity_2nd] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFecundity2nd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fecundity_2nd !== $v) {
            $this->fecundity_2nd = $v;
            $this->modifiedColumns[] = MatrixPeer::FECUNDITY_2ND;
        }


        return $this;
    } // setFecundity2nd()

    /**
     * Set the value of [zzzfecundity_text] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setZzzfecundityText($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zzzfecundity_text !== $v) {
            $this->zzzfecundity_text = $v;
            $this->modifiedColumns[] = MatrixPeer::ZZZFECUNDITY_TEXT;
        }


        return $this;
    } // setZzzfecundityText()

    /**
     * Set the value of [emsy] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setEmsy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->emsy !== $v) {
            $this->emsy = $v;
            $this->modifiedColumns[] = MatrixPeer::EMSY;
        }


        return $this;
    } // setEmsy()

    /**
     * Set the value of [eopt] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setEopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eopt !== $v) {
            $this->eopt = $v;
            $this->modifiedColumns[] = MatrixPeer::EOPT;
        }


        return $this;
    } // setEopt()

    /**
     * Set the value of [fmsy] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFmsy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fmsy !== $v) {
            $this->fmsy = $v;
            $this->modifiedColumns[] = MatrixPeer::FMSY;
        }


        return $this;
    } // setFmsy()

    /**
     * Set the value of [fopt] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setFopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fopt !== $v) {
            $this->fopt = $v;
            $this->modifiedColumns[] = MatrixPeer::FOPT;
        }


        return $this;
    } // setFopt()

    /**
     * Set the value of [lc] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lc !== $v) {
            $this->lc = $v;
            $this->modifiedColumns[] = MatrixPeer::LC;
        }


        return $this;
    } // setLc()

    /**
     * Set the value of [lc_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLcType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lc_type !== $v) {
            $this->lc_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LC_TYPE;
        }


        return $this;
    } // setLcType()

    /**
     * Set the value of [e] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setE($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->e !== $v) {
            $this->e = $v;
            $this->modifiedColumns[] = MatrixPeer::E;
        }


        return $this;
    } // setE()

    /**
     * Set the value of [yr] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setYr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->yr !== $v) {
            $this->yr = $v;
            $this->modifiedColumns[] = MatrixPeer::YR;
        }


        return $this;
    } // setYr()

    /**
     * Set the value of [resilience] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setResilience($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resilience !== $v) {
            $this->resilience = $v;
            $this->modifiedColumns[] = MatrixPeer::RESILIENCE;
        }


        return $this;
    } // setResilience()

    /**
     * Set the value of [rm] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setRm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rm !== $v) {
            $this->rm = $v;
            $this->modifiedColumns[] = MatrixPeer::RM;
        }


        return $this;
    } // setRm()

    /**
     * Set the value of [lr] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lr !== $v) {
            $this->lr = $v;
            $this->modifiedColumns[] = MatrixPeer::LR;
        }


        return $this;
    } // setLr()

    /**
     * Set the value of [lr_type] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setLrType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lr_type !== $v) {
            $this->lr_type = $v;
            $this->modifiedColumns[] = MatrixPeer::LR_TYPE;
        }


        return $this;
    } // setLrType()

    /**
     * Set the value of [main_food] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setMainFood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->main_food !== $v) {
            $this->main_food = $v;
            $this->modifiedColumns[] = MatrixPeer::MAIN_FOOD;
        }


        return $this;
    } // setMainFood()

    /**
     * Set the value of [trophic_level] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setTrophicLevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trophic_level !== $v) {
            $this->trophic_level = $v;
            $this->modifiedColumns[] = MatrixPeer::TROPHIC_LEVEL;
        }


        return $this;
    } // setTrophicLevel()

    /**
     * Set the value of [qb] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setQb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->qb !== $v) {
            $this->qb = $v;
            $this->modifiedColumns[] = MatrixPeer::QB;
        }


        return $this;
    } // setQb()

    /**
     * Set the value of [qb_text] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setQbText($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qb_text !== $v) {
            $this->qb_text = $v;
            $this->modifiedColumns[] = MatrixPeer::QB_TEXT;
        }


        return $this;
    } // setQbText()

    /**
     * Set the value of [qb_winf] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setQbWinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->qb_winf !== $v) {
            $this->qb_winf = $v;
            $this->modifiedColumns[] = MatrixPeer::QB_WINF;
        }


        return $this;
    } // setQbWinf()

    /**
     * Set the value of [qb_temp] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setQbTemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->qb_temp !== $v) {
            $this->qb_temp = $v;
            $this->modifiedColumns[] = MatrixPeer::QB_TEMP;
        }


        return $this;
    } // setQbTemp()

    /**
     * Set the value of [qb_a] column.
     *
     * @param  double $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setQbA($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->qb_a !== $v) {
            $this->qb_a = $v;
            $this->modifiedColumns[] = MatrixPeer::QB_A;
        }


        return $this;
    } // setQbA()

    /**
     * Set the value of [with_growth] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithGrowth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_growth !== $v) {
            $this->with_growth = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_GROWTH;
        }


        return $this;
    } // setWithGrowth()

    /**
     * Set the value of [with_max_age_size] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithMaxAgeSize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_max_age_size !== $v) {
            $this->with_max_age_size = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_MAX_AGE_SIZE;
        }


        return $this;
    } // setWithMaxAgeSize()

    /**
     * Set the value of [with_lw] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithLw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_lw !== $v) {
            $this->with_lw = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_LW;
        }


        return $this;
    } // setWithLw()

    /**
     * Set the value of [with_reproduction] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithReproduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_reproduction !== $v) {
            $this->with_reproduction = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_REPRODUCTION;
        }


        return $this;
    } // setWithReproduction()

    /**
     * Set the value of [with_diet] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithDiet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_diet !== $v) {
            $this->with_diet = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_DIET;
        }


        return $this;
    } // setWithDiet()

    /**
     * Set the value of [with_food_consumption] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithFoodConsumption($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_food_consumption !== $v) {
            $this->with_food_consumption = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_FOOD_CONSUMPTION;
        }


        return $this;
    } // setWithFoodConsumption()

    /**
     * Set the value of [with_food] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithFood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_food !== $v) {
            $this->with_food = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_FOOD;
        }


        return $this;
    } // setWithFood()

    /**
     * Set the value of [with_maturity] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithMaturity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_maturity !== $v) {
            $this->with_maturity = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_MATURITY;
        }


        return $this;
    } // setWithMaturity()

    /**
     * Set the value of [with_spawning] column.
     *
     * @param  string $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setWithSpawning($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->with_spawning !== $v) {
            $this->with_spawning = $v;
            $this->modifiedColumns[] = MatrixPeer::WITH_SPAWNING;
        }


        return $this;
    } // setWithSpawning()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Matrix The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = MatrixPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Matrix The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MatrixPeer::TS;
            }
        } // if either are not null


        return $this;
    } // setTs()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->famcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->kf_type = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->tm_for_kf = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->lmax = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->lmax_type = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->linf = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->linf_type = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->linf_1st = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->linf_2nd = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->linf_comment = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->k = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->kf_comment = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->phiprime = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->to = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->mean_temp = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->m = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->m_se_1st = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->m_se_2nd = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->m_comment = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->life_span = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->life_span_1st = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->life_span_2nd = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->generation_time = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->gen_time_1st = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->gen_time_2nd = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->tm = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->tm_1st = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->tm_2nd = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->lm = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->lm_se_1st = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->lm_se_2nd = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->lm_type = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->lopt = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->lopt_se_1st = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->lopt_se_2nd = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->lopt_type = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->lopt_text = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->a = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->b = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->lw_length = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->lw_length_type = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->w = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->w_type = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->nitrogenprotein_weight = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->nitrogenprotein_weight_type = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->nitrogen = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->protein = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->reproductive_guild = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->fecundity = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->fecundity_1st = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->fecundity_2nd = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->zzzfecundity_text = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->emsy = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->eopt = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->fmsy = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->fopt = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->lc = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->lc_type = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->e = ($row[$startcol + 60] !== null) ? (double) $row[$startcol + 60] : null;
            $this->yr = ($row[$startcol + 61] !== null) ? (double) $row[$startcol + 61] : null;
            $this->resilience = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->rm = ($row[$startcol + 63] !== null) ? (double) $row[$startcol + 63] : null;
            $this->lr = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->lr_type = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->main_food = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->trophic_level = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->qb = ($row[$startcol + 68] !== null) ? (double) $row[$startcol + 68] : null;
            $this->qb_text = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->qb_winf = ($row[$startcol + 70] !== null) ? (double) $row[$startcol + 70] : null;
            $this->qb_temp = ($row[$startcol + 71] !== null) ? (double) $row[$startcol + 71] : null;
            $this->qb_a = ($row[$startcol + 72] !== null) ? (double) $row[$startcol + 72] : null;
            $this->with_growth = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->with_max_age_size = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->with_lw = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->with_reproduction = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->with_diet = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->with_food_consumption = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->with_food = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->with_maturity = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->with_spawning = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->stockcode = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->ts = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 84; // 84 = MatrixPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Matrix object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MatrixPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MatrixQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                MatrixPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = MatrixPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MatrixPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MatrixPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(MatrixPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(MatrixPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(MatrixPeer::KF_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`KF_type`';
        }
        if ($this->isColumnModified(MatrixPeer::TM_FOR_KF)) {
            $modifiedColumns[':p' . $index++]  = '`tm_for_KF`';
        }
        if ($this->isColumnModified(MatrixPeer::LMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LMax`';
        }
        if ($this->isColumnModified(MatrixPeer::LMAX_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LMax_type`';
        }
        if ($this->isColumnModified(MatrixPeer::LINF)) {
            $modifiedColumns[':p' . $index++]  = '`Linf`';
        }
        if ($this->isColumnModified(MatrixPeer::LINF_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Linf_type`';
        }
        if ($this->isColumnModified(MatrixPeer::LINF_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Linf_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::LINF_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Linf_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::LINF_COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Linf_comment`';
        }
        if ($this->isColumnModified(MatrixPeer::K)) {
            $modifiedColumns[':p' . $index++]  = '`K`';
        }
        if ($this->isColumnModified(MatrixPeer::KF_COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`KF_comment`';
        }
        if ($this->isColumnModified(MatrixPeer::PHIPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`PhiPrime`';
        }
        if ($this->isColumnModified(MatrixPeer::TO)) {
            $modifiedColumns[':p' . $index++]  = '`to`';
        }
        if ($this->isColumnModified(MatrixPeer::MEAN_TEMP)) {
            $modifiedColumns[':p' . $index++]  = '`mean_temp`';
        }
        if ($this->isColumnModified(MatrixPeer::M)) {
            $modifiedColumns[':p' . $index++]  = '`M`';
        }
        if ($this->isColumnModified(MatrixPeer::M_SE_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`M_se_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::M_SE_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`M_se_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::M_COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`M_comment`';
        }
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN)) {
            $modifiedColumns[':p' . $index++]  = '`Life_span`';
        }
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Life_span_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Life_span_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::GENERATION_TIME)) {
            $modifiedColumns[':p' . $index++]  = '`Generation_time`';
        }
        if ($this->isColumnModified(MatrixPeer::GEN_TIME_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Gen_time_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::GEN_TIME_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Gen_time_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(MatrixPeer::TM_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`tm_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::TM_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`tm_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::LM)) {
            $modifiedColumns[':p' . $index++]  = '`Lm`';
        }
        if ($this->isColumnModified(MatrixPeer::LM_SE_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Lm_se_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::LM_SE_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Lm_se_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::LM_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Lm_type`';
        }
        if ($this->isColumnModified(MatrixPeer::LOPT)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt`';
        }
        if ($this->isColumnModified(MatrixPeer::LOPT_SE_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt_se_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::LOPT_SE_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt_se_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::LOPT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt_type`';
        }
        if ($this->isColumnModified(MatrixPeer::LOPT_TEXT)) {
            $modifiedColumns[':p' . $index++]  = '`Lopt_text`';
        }
        if ($this->isColumnModified(MatrixPeer::A)) {
            $modifiedColumns[':p' . $index++]  = '`a`';
        }
        if ($this->isColumnModified(MatrixPeer::B)) {
            $modifiedColumns[':p' . $index++]  = '`b`';
        }
        if ($this->isColumnModified(MatrixPeer::LW_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`LW_length`';
        }
        if ($this->isColumnModified(MatrixPeer::LW_LENGTH_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LW_length_type`';
        }
        if ($this->isColumnModified(MatrixPeer::W)) {
            $modifiedColumns[':p' . $index++]  = '`W`';
        }
        if ($this->isColumnModified(MatrixPeer::W_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`W_type`';
        }
        if ($this->isColumnModified(MatrixPeer::NITROGENPROTEIN_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`NitrogenProtein_weight`';
        }
        if ($this->isColumnModified(MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`NitrogenProtein_weight_type`';
        }
        if ($this->isColumnModified(MatrixPeer::NITROGEN)) {
            $modifiedColumns[':p' . $index++]  = '`nitrogen`';
        }
        if ($this->isColumnModified(MatrixPeer::PROTEIN)) {
            $modifiedColumns[':p' . $index++]  = '`protein`';
        }
        if ($this->isColumnModified(MatrixPeer::REPRODUCTIVE_GUILD)) {
            $modifiedColumns[':p' . $index++]  = '`Reproductive_guild`';
        }
        if ($this->isColumnModified(MatrixPeer::FECUNDITY)) {
            $modifiedColumns[':p' . $index++]  = '`Fecundity`';
        }
        if ($this->isColumnModified(MatrixPeer::FECUNDITY_1ST)) {
            $modifiedColumns[':p' . $index++]  = '`Fecundity_1st`';
        }
        if ($this->isColumnModified(MatrixPeer::FECUNDITY_2ND)) {
            $modifiedColumns[':p' . $index++]  = '`Fecundity_2nd`';
        }
        if ($this->isColumnModified(MatrixPeer::ZZZFECUNDITY_TEXT)) {
            $modifiedColumns[':p' . $index++]  = '`zzzFecundity_text`';
        }
        if ($this->isColumnModified(MatrixPeer::EMSY)) {
            $modifiedColumns[':p' . $index++]  = '`Emsy`';
        }
        if ($this->isColumnModified(MatrixPeer::EOPT)) {
            $modifiedColumns[':p' . $index++]  = '`Eopt`';
        }
        if ($this->isColumnModified(MatrixPeer::FMSY)) {
            $modifiedColumns[':p' . $index++]  = '`Fmsy`';
        }
        if ($this->isColumnModified(MatrixPeer::FOPT)) {
            $modifiedColumns[':p' . $index++]  = '`Fopt`';
        }
        if ($this->isColumnModified(MatrixPeer::LC)) {
            $modifiedColumns[':p' . $index++]  = '`Lc`';
        }
        if ($this->isColumnModified(MatrixPeer::LC_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Lc_type`';
        }
        if ($this->isColumnModified(MatrixPeer::E)) {
            $modifiedColumns[':p' . $index++]  = '`E`';
        }
        if ($this->isColumnModified(MatrixPeer::YR)) {
            $modifiedColumns[':p' . $index++]  = '`YR`';
        }
        if ($this->isColumnModified(MatrixPeer::RESILIENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Resilience`';
        }
        if ($this->isColumnModified(MatrixPeer::RM)) {
            $modifiedColumns[':p' . $index++]  = '`rm`';
        }
        if ($this->isColumnModified(MatrixPeer::LR)) {
            $modifiedColumns[':p' . $index++]  = '`Lr`';
        }
        if ($this->isColumnModified(MatrixPeer::LR_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Lr_type`';
        }
        if ($this->isColumnModified(MatrixPeer::MAIN_FOOD)) {
            $modifiedColumns[':p' . $index++]  = '`main_food`';
        }
        if ($this->isColumnModified(MatrixPeer::TROPHIC_LEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`trophic_level`';
        }
        if ($this->isColumnModified(MatrixPeer::QB)) {
            $modifiedColumns[':p' . $index++]  = '`QB`';
        }
        if ($this->isColumnModified(MatrixPeer::QB_TEXT)) {
            $modifiedColumns[':p' . $index++]  = '`QB_text`';
        }
        if ($this->isColumnModified(MatrixPeer::QB_WINF)) {
            $modifiedColumns[':p' . $index++]  = '`QB_Winf`';
        }
        if ($this->isColumnModified(MatrixPeer::QB_TEMP)) {
            $modifiedColumns[':p' . $index++]  = '`QB_temp`';
        }
        if ($this->isColumnModified(MatrixPeer::QB_A)) {
            $modifiedColumns[':p' . $index++]  = '`QB_A`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_GROWTH)) {
            $modifiedColumns[':p' . $index++]  = '`with_growth`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_MAX_AGE_SIZE)) {
            $modifiedColumns[':p' . $index++]  = '`with_max_age_size`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_LW)) {
            $modifiedColumns[':p' . $index++]  = '`with_lw`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_REPRODUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`with_reproduction`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_DIET)) {
            $modifiedColumns[':p' . $index++]  = '`with_diet`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_FOOD_CONSUMPTION)) {
            $modifiedColumns[':p' . $index++]  = '`with_food_consumption`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_FOOD)) {
            $modifiedColumns[':p' . $index++]  = '`with_food`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_MATURITY)) {
            $modifiedColumns[':p' . $index++]  = '`with_maturity`';
        }
        if ($this->isColumnModified(MatrixPeer::WITH_SPAWNING)) {
            $modifiedColumns[':p' . $index++]  = '`with_spawning`';
        }
        if ($this->isColumnModified(MatrixPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`stockcode`';
        }
        if ($this->isColumnModified(MatrixPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `matrix` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`KF_type`':
                        $stmt->bindValue($identifier, $this->kf_type, PDO::PARAM_INT);
                        break;
                    case '`tm_for_KF`':
                        $stmt->bindValue($identifier, $this->tm_for_kf, PDO::PARAM_STR);
                        break;
                    case '`LMax`':
                        $stmt->bindValue($identifier, $this->lmax, PDO::PARAM_STR);
                        break;
                    case '`LMax_type`':
                        $stmt->bindValue($identifier, $this->lmax_type, PDO::PARAM_STR);
                        break;
                    case '`Linf`':
                        $stmt->bindValue($identifier, $this->linf, PDO::PARAM_STR);
                        break;
                    case '`Linf_type`':
                        $stmt->bindValue($identifier, $this->linf_type, PDO::PARAM_STR);
                        break;
                    case '`Linf_1st`':
                        $stmt->bindValue($identifier, $this->linf_1st, PDO::PARAM_STR);
                        break;
                    case '`Linf_2nd`':
                        $stmt->bindValue($identifier, $this->linf_2nd, PDO::PARAM_STR);
                        break;
                    case '`Linf_comment`':
                        $stmt->bindValue($identifier, $this->linf_comment, PDO::PARAM_STR);
                        break;
                    case '`K`':
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case '`KF_comment`':
                        $stmt->bindValue($identifier, $this->kf_comment, PDO::PARAM_STR);
                        break;
                    case '`PhiPrime`':
                        $stmt->bindValue($identifier, $this->phiprime, PDO::PARAM_STR);
                        break;
                    case '`to`':
                        $stmt->bindValue($identifier, $this->to, PDO::PARAM_STR);
                        break;
                    case '`mean_temp`':
                        $stmt->bindValue($identifier, $this->mean_temp, PDO::PARAM_STR);
                        break;
                    case '`M`':
                        $stmt->bindValue($identifier, $this->m, PDO::PARAM_STR);
                        break;
                    case '`M_se_1st`':
                        $stmt->bindValue($identifier, $this->m_se_1st, PDO::PARAM_STR);
                        break;
                    case '`M_se_2nd`':
                        $stmt->bindValue($identifier, $this->m_se_2nd, PDO::PARAM_STR);
                        break;
                    case '`M_comment`':
                        $stmt->bindValue($identifier, $this->m_comment, PDO::PARAM_STR);
                        break;
                    case '`Life_span`':
                        $stmt->bindValue($identifier, $this->life_span, PDO::PARAM_STR);
                        break;
                    case '`Life_span_1st`':
                        $stmt->bindValue($identifier, $this->life_span_1st, PDO::PARAM_STR);
                        break;
                    case '`Life_span_2nd`':
                        $stmt->bindValue($identifier, $this->life_span_2nd, PDO::PARAM_STR);
                        break;
                    case '`Generation_time`':
                        $stmt->bindValue($identifier, $this->generation_time, PDO::PARAM_STR);
                        break;
                    case '`Gen_time_1st`':
                        $stmt->bindValue($identifier, $this->gen_time_1st, PDO::PARAM_STR);
                        break;
                    case '`Gen_time_2nd`':
                        $stmt->bindValue($identifier, $this->gen_time_2nd, PDO::PARAM_STR);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`tm_1st`':
                        $stmt->bindValue($identifier, $this->tm_1st, PDO::PARAM_STR);
                        break;
                    case '`tm_2nd`':
                        $stmt->bindValue($identifier, $this->tm_2nd, PDO::PARAM_STR);
                        break;
                    case '`Lm`':
                        $stmt->bindValue($identifier, $this->lm, PDO::PARAM_STR);
                        break;
                    case '`Lm_se_1st`':
                        $stmt->bindValue($identifier, $this->lm_se_1st, PDO::PARAM_STR);
                        break;
                    case '`Lm_se_2nd`':
                        $stmt->bindValue($identifier, $this->lm_se_2nd, PDO::PARAM_STR);
                        break;
                    case '`Lm_type`':
                        $stmt->bindValue($identifier, $this->lm_type, PDO::PARAM_STR);
                        break;
                    case '`Lopt`':
                        $stmt->bindValue($identifier, $this->lopt, PDO::PARAM_STR);
                        break;
                    case '`Lopt_se_1st`':
                        $stmt->bindValue($identifier, $this->lopt_se_1st, PDO::PARAM_STR);
                        break;
                    case '`Lopt_se_2nd`':
                        $stmt->bindValue($identifier, $this->lopt_se_2nd, PDO::PARAM_STR);
                        break;
                    case '`Lopt_type`':
                        $stmt->bindValue($identifier, $this->lopt_type, PDO::PARAM_STR);
                        break;
                    case '`Lopt_text`':
                        $stmt->bindValue($identifier, $this->lopt_text, PDO::PARAM_STR);
                        break;
                    case '`a`':
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case '`b`':
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case '`LW_length`':
                        $stmt->bindValue($identifier, $this->lw_length, PDO::PARAM_STR);
                        break;
                    case '`LW_length_type`':
                        $stmt->bindValue($identifier, $this->lw_length_type, PDO::PARAM_STR);
                        break;
                    case '`W`':
                        $stmt->bindValue($identifier, $this->w, PDO::PARAM_STR);
                        break;
                    case '`W_type`':
                        $stmt->bindValue($identifier, $this->w_type, PDO::PARAM_STR);
                        break;
                    case '`NitrogenProtein_weight`':
                        $stmt->bindValue($identifier, $this->nitrogenprotein_weight, PDO::PARAM_STR);
                        break;
                    case '`NitrogenProtein_weight_type`':
                        $stmt->bindValue($identifier, $this->nitrogenprotein_weight_type, PDO::PARAM_STR);
                        break;
                    case '`nitrogen`':
                        $stmt->bindValue($identifier, $this->nitrogen, PDO::PARAM_STR);
                        break;
                    case '`protein`':
                        $stmt->bindValue($identifier, $this->protein, PDO::PARAM_STR);
                        break;
                    case '`Reproductive_guild`':
                        $stmt->bindValue($identifier, $this->reproductive_guild, PDO::PARAM_STR);
                        break;
                    case '`Fecundity`':
                        $stmt->bindValue($identifier, $this->fecundity, PDO::PARAM_STR);
                        break;
                    case '`Fecundity_1st`':
                        $stmt->bindValue($identifier, $this->fecundity_1st, PDO::PARAM_STR);
                        break;
                    case '`Fecundity_2nd`':
                        $stmt->bindValue($identifier, $this->fecundity_2nd, PDO::PARAM_STR);
                        break;
                    case '`zzzFecundity_text`':
                        $stmt->bindValue($identifier, $this->zzzfecundity_text, PDO::PARAM_STR);
                        break;
                    case '`Emsy`':
                        $stmt->bindValue($identifier, $this->emsy, PDO::PARAM_STR);
                        break;
                    case '`Eopt`':
                        $stmt->bindValue($identifier, $this->eopt, PDO::PARAM_STR);
                        break;
                    case '`Fmsy`':
                        $stmt->bindValue($identifier, $this->fmsy, PDO::PARAM_STR);
                        break;
                    case '`Fopt`':
                        $stmt->bindValue($identifier, $this->fopt, PDO::PARAM_STR);
                        break;
                    case '`Lc`':
                        $stmt->bindValue($identifier, $this->lc, PDO::PARAM_STR);
                        break;
                    case '`Lc_type`':
                        $stmt->bindValue($identifier, $this->lc_type, PDO::PARAM_STR);
                        break;
                    case '`E`':
                        $stmt->bindValue($identifier, $this->e, PDO::PARAM_STR);
                        break;
                    case '`YR`':
                        $stmt->bindValue($identifier, $this->yr, PDO::PARAM_STR);
                        break;
                    case '`Resilience`':
                        $stmt->bindValue($identifier, $this->resilience, PDO::PARAM_STR);
                        break;
                    case '`rm`':
                        $stmt->bindValue($identifier, $this->rm, PDO::PARAM_STR);
                        break;
                    case '`Lr`':
                        $stmt->bindValue($identifier, $this->lr, PDO::PARAM_STR);
                        break;
                    case '`Lr_type`':
                        $stmt->bindValue($identifier, $this->lr_type, PDO::PARAM_STR);
                        break;
                    case '`main_food`':
                        $stmt->bindValue($identifier, $this->main_food, PDO::PARAM_STR);
                        break;
                    case '`trophic_level`':
                        $stmt->bindValue($identifier, $this->trophic_level, PDO::PARAM_STR);
                        break;
                    case '`QB`':
                        $stmt->bindValue($identifier, $this->qb, PDO::PARAM_STR);
                        break;
                    case '`QB_text`':
                        $stmt->bindValue($identifier, $this->qb_text, PDO::PARAM_STR);
                        break;
                    case '`QB_Winf`':
                        $stmt->bindValue($identifier, $this->qb_winf, PDO::PARAM_STR);
                        break;
                    case '`QB_temp`':
                        $stmt->bindValue($identifier, $this->qb_temp, PDO::PARAM_STR);
                        break;
                    case '`QB_A`':
                        $stmt->bindValue($identifier, $this->qb_a, PDO::PARAM_STR);
                        break;
                    case '`with_growth`':
                        $stmt->bindValue($identifier, $this->with_growth, PDO::PARAM_STR);
                        break;
                    case '`with_max_age_size`':
                        $stmt->bindValue($identifier, $this->with_max_age_size, PDO::PARAM_STR);
                        break;
                    case '`with_lw`':
                        $stmt->bindValue($identifier, $this->with_lw, PDO::PARAM_STR);
                        break;
                    case '`with_reproduction`':
                        $stmt->bindValue($identifier, $this->with_reproduction, PDO::PARAM_STR);
                        break;
                    case '`with_diet`':
                        $stmt->bindValue($identifier, $this->with_diet, PDO::PARAM_STR);
                        break;
                    case '`with_food_consumption`':
                        $stmt->bindValue($identifier, $this->with_food_consumption, PDO::PARAM_STR);
                        break;
                    case '`with_food`':
                        $stmt->bindValue($identifier, $this->with_food, PDO::PARAM_STR);
                        break;
                    case '`with_maturity`':
                        $stmt->bindValue($identifier, $this->with_maturity, PDO::PARAM_STR);
                        break;
                    case '`with_spawning`':
                        $stmt->bindValue($identifier, $this->with_spawning, PDO::PARAM_STR);
                        break;
                    case '`stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`TS`':
                        $stmt->bindValue($identifier, $this->ts, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = MatrixPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = MatrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getFamcode();
                break;
            case 3:
                return $this->getKfType();
                break;
            case 4:
                return $this->getTmForKf();
                break;
            case 5:
                return $this->getLmax();
                break;
            case 6:
                return $this->getLmaxType();
                break;
            case 7:
                return $this->getLinf();
                break;
            case 8:
                return $this->getLinfType();
                break;
            case 9:
                return $this->getLinf1st();
                break;
            case 10:
                return $this->getLinf2nd();
                break;
            case 11:
                return $this->getLinfComment();
                break;
            case 12:
                return $this->getK();
                break;
            case 13:
                return $this->getKfComment();
                break;
            case 14:
                return $this->getPhiprime();
                break;
            case 15:
                return $this->getTo();
                break;
            case 16:
                return $this->getMeanTemp();
                break;
            case 17:
                return $this->getM();
                break;
            case 18:
                return $this->getMSe1st();
                break;
            case 19:
                return $this->getMSe2nd();
                break;
            case 20:
                return $this->getMComment();
                break;
            case 21:
                return $this->getLifeSpan();
                break;
            case 22:
                return $this->getLifeSpan1st();
                break;
            case 23:
                return $this->getLifeSpan2nd();
                break;
            case 24:
                return $this->getGenerationTime();
                break;
            case 25:
                return $this->getGenTime1st();
                break;
            case 26:
                return $this->getGenTime2nd();
                break;
            case 27:
                return $this->getTm();
                break;
            case 28:
                return $this->getTm1st();
                break;
            case 29:
                return $this->getTm2nd();
                break;
            case 30:
                return $this->getLm();
                break;
            case 31:
                return $this->getLmSe1st();
                break;
            case 32:
                return $this->getLmSe2nd();
                break;
            case 33:
                return $this->getLmType();
                break;
            case 34:
                return $this->getLopt();
                break;
            case 35:
                return $this->getLoptSe1st();
                break;
            case 36:
                return $this->getLoptSe2nd();
                break;
            case 37:
                return $this->getLoptType();
                break;
            case 38:
                return $this->getLoptText();
                break;
            case 39:
                return $this->getA();
                break;
            case 40:
                return $this->getB();
                break;
            case 41:
                return $this->getLwLength();
                break;
            case 42:
                return $this->getLwLengthType();
                break;
            case 43:
                return $this->getW();
                break;
            case 44:
                return $this->getWType();
                break;
            case 45:
                return $this->getNitrogenproteinWeight();
                break;
            case 46:
                return $this->getNitrogenproteinWeightType();
                break;
            case 47:
                return $this->getNitrogen();
                break;
            case 48:
                return $this->getProtein();
                break;
            case 49:
                return $this->getReproductiveGuild();
                break;
            case 50:
                return $this->getFecundity();
                break;
            case 51:
                return $this->getFecundity1st();
                break;
            case 52:
                return $this->getFecundity2nd();
                break;
            case 53:
                return $this->getZzzfecundityText();
                break;
            case 54:
                return $this->getEmsy();
                break;
            case 55:
                return $this->getEopt();
                break;
            case 56:
                return $this->getFmsy();
                break;
            case 57:
                return $this->getFopt();
                break;
            case 58:
                return $this->getLc();
                break;
            case 59:
                return $this->getLcType();
                break;
            case 60:
                return $this->getE();
                break;
            case 61:
                return $this->getYr();
                break;
            case 62:
                return $this->getResilience();
                break;
            case 63:
                return $this->getRm();
                break;
            case 64:
                return $this->getLr();
                break;
            case 65:
                return $this->getLrType();
                break;
            case 66:
                return $this->getMainFood();
                break;
            case 67:
                return $this->getTrophicLevel();
                break;
            case 68:
                return $this->getQb();
                break;
            case 69:
                return $this->getQbText();
                break;
            case 70:
                return $this->getQbWinf();
                break;
            case 71:
                return $this->getQbTemp();
                break;
            case 72:
                return $this->getQbA();
                break;
            case 73:
                return $this->getWithGrowth();
                break;
            case 74:
                return $this->getWithMaxAgeSize();
                break;
            case 75:
                return $this->getWithLw();
                break;
            case 76:
                return $this->getWithReproduction();
                break;
            case 77:
                return $this->getWithDiet();
                break;
            case 78:
                return $this->getWithFoodConsumption();
                break;
            case 79:
                return $this->getWithFood();
                break;
            case 80:
                return $this->getWithMaturity();
                break;
            case 81:
                return $this->getWithSpawning();
                break;
            case 82:
                return $this->getStockcode();
                break;
            case 83:
                return $this->getTs();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Matrix'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Matrix'][$this->getPrimaryKey()] = true;
        $keys = MatrixPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getFamcode(),
            $keys[3] => $this->getKfType(),
            $keys[4] => $this->getTmForKf(),
            $keys[5] => $this->getLmax(),
            $keys[6] => $this->getLmaxType(),
            $keys[7] => $this->getLinf(),
            $keys[8] => $this->getLinfType(),
            $keys[9] => $this->getLinf1st(),
            $keys[10] => $this->getLinf2nd(),
            $keys[11] => $this->getLinfComment(),
            $keys[12] => $this->getK(),
            $keys[13] => $this->getKfComment(),
            $keys[14] => $this->getPhiprime(),
            $keys[15] => $this->getTo(),
            $keys[16] => $this->getMeanTemp(),
            $keys[17] => $this->getM(),
            $keys[18] => $this->getMSe1st(),
            $keys[19] => $this->getMSe2nd(),
            $keys[20] => $this->getMComment(),
            $keys[21] => $this->getLifeSpan(),
            $keys[22] => $this->getLifeSpan1st(),
            $keys[23] => $this->getLifeSpan2nd(),
            $keys[24] => $this->getGenerationTime(),
            $keys[25] => $this->getGenTime1st(),
            $keys[26] => $this->getGenTime2nd(),
            $keys[27] => $this->getTm(),
            $keys[28] => $this->getTm1st(),
            $keys[29] => $this->getTm2nd(),
            $keys[30] => $this->getLm(),
            $keys[31] => $this->getLmSe1st(),
            $keys[32] => $this->getLmSe2nd(),
            $keys[33] => $this->getLmType(),
            $keys[34] => $this->getLopt(),
            $keys[35] => $this->getLoptSe1st(),
            $keys[36] => $this->getLoptSe2nd(),
            $keys[37] => $this->getLoptType(),
            $keys[38] => $this->getLoptText(),
            $keys[39] => $this->getA(),
            $keys[40] => $this->getB(),
            $keys[41] => $this->getLwLength(),
            $keys[42] => $this->getLwLengthType(),
            $keys[43] => $this->getW(),
            $keys[44] => $this->getWType(),
            $keys[45] => $this->getNitrogenproteinWeight(),
            $keys[46] => $this->getNitrogenproteinWeightType(),
            $keys[47] => $this->getNitrogen(),
            $keys[48] => $this->getProtein(),
            $keys[49] => $this->getReproductiveGuild(),
            $keys[50] => $this->getFecundity(),
            $keys[51] => $this->getFecundity1st(),
            $keys[52] => $this->getFecundity2nd(),
            $keys[53] => $this->getZzzfecundityText(),
            $keys[54] => $this->getEmsy(),
            $keys[55] => $this->getEopt(),
            $keys[56] => $this->getFmsy(),
            $keys[57] => $this->getFopt(),
            $keys[58] => $this->getLc(),
            $keys[59] => $this->getLcType(),
            $keys[60] => $this->getE(),
            $keys[61] => $this->getYr(),
            $keys[62] => $this->getResilience(),
            $keys[63] => $this->getRm(),
            $keys[64] => $this->getLr(),
            $keys[65] => $this->getLrType(),
            $keys[66] => $this->getMainFood(),
            $keys[67] => $this->getTrophicLevel(),
            $keys[68] => $this->getQb(),
            $keys[69] => $this->getQbText(),
            $keys[70] => $this->getQbWinf(),
            $keys[71] => $this->getQbTemp(),
            $keys[72] => $this->getQbA(),
            $keys[73] => $this->getWithGrowth(),
            $keys[74] => $this->getWithMaxAgeSize(),
            $keys[75] => $this->getWithLw(),
            $keys[76] => $this->getWithReproduction(),
            $keys[77] => $this->getWithDiet(),
            $keys[78] => $this->getWithFoodConsumption(),
            $keys[79] => $this->getWithFood(),
            $keys[80] => $this->getWithMaturity(),
            $keys[81] => $this->getWithSpawning(),
            $keys[82] => $this->getStockcode(),
            $keys[83] => $this->getTs(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = MatrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setFamcode($value);
                break;
            case 3:
                $this->setKfType($value);
                break;
            case 4:
                $this->setTmForKf($value);
                break;
            case 5:
                $this->setLmax($value);
                break;
            case 6:
                $this->setLmaxType($value);
                break;
            case 7:
                $this->setLinf($value);
                break;
            case 8:
                $this->setLinfType($value);
                break;
            case 9:
                $this->setLinf1st($value);
                break;
            case 10:
                $this->setLinf2nd($value);
                break;
            case 11:
                $this->setLinfComment($value);
                break;
            case 12:
                $this->setK($value);
                break;
            case 13:
                $this->setKfComment($value);
                break;
            case 14:
                $this->setPhiprime($value);
                break;
            case 15:
                $this->setTo($value);
                break;
            case 16:
                $this->setMeanTemp($value);
                break;
            case 17:
                $this->setM($value);
                break;
            case 18:
                $this->setMSe1st($value);
                break;
            case 19:
                $this->setMSe2nd($value);
                break;
            case 20:
                $this->setMComment($value);
                break;
            case 21:
                $this->setLifeSpan($value);
                break;
            case 22:
                $this->setLifeSpan1st($value);
                break;
            case 23:
                $this->setLifeSpan2nd($value);
                break;
            case 24:
                $this->setGenerationTime($value);
                break;
            case 25:
                $this->setGenTime1st($value);
                break;
            case 26:
                $this->setGenTime2nd($value);
                break;
            case 27:
                $this->setTm($value);
                break;
            case 28:
                $this->setTm1st($value);
                break;
            case 29:
                $this->setTm2nd($value);
                break;
            case 30:
                $this->setLm($value);
                break;
            case 31:
                $this->setLmSe1st($value);
                break;
            case 32:
                $this->setLmSe2nd($value);
                break;
            case 33:
                $this->setLmType($value);
                break;
            case 34:
                $this->setLopt($value);
                break;
            case 35:
                $this->setLoptSe1st($value);
                break;
            case 36:
                $this->setLoptSe2nd($value);
                break;
            case 37:
                $this->setLoptType($value);
                break;
            case 38:
                $this->setLoptText($value);
                break;
            case 39:
                $this->setA($value);
                break;
            case 40:
                $this->setB($value);
                break;
            case 41:
                $this->setLwLength($value);
                break;
            case 42:
                $this->setLwLengthType($value);
                break;
            case 43:
                $this->setW($value);
                break;
            case 44:
                $this->setWType($value);
                break;
            case 45:
                $this->setNitrogenproteinWeight($value);
                break;
            case 46:
                $this->setNitrogenproteinWeightType($value);
                break;
            case 47:
                $this->setNitrogen($value);
                break;
            case 48:
                $this->setProtein($value);
                break;
            case 49:
                $this->setReproductiveGuild($value);
                break;
            case 50:
                $this->setFecundity($value);
                break;
            case 51:
                $this->setFecundity1st($value);
                break;
            case 52:
                $this->setFecundity2nd($value);
                break;
            case 53:
                $this->setZzzfecundityText($value);
                break;
            case 54:
                $this->setEmsy($value);
                break;
            case 55:
                $this->setEopt($value);
                break;
            case 56:
                $this->setFmsy($value);
                break;
            case 57:
                $this->setFopt($value);
                break;
            case 58:
                $this->setLc($value);
                break;
            case 59:
                $this->setLcType($value);
                break;
            case 60:
                $this->setE($value);
                break;
            case 61:
                $this->setYr($value);
                break;
            case 62:
                $this->setResilience($value);
                break;
            case 63:
                $this->setRm($value);
                break;
            case 64:
                $this->setLr($value);
                break;
            case 65:
                $this->setLrType($value);
                break;
            case 66:
                $this->setMainFood($value);
                break;
            case 67:
                $this->setTrophicLevel($value);
                break;
            case 68:
                $this->setQb($value);
                break;
            case 69:
                $this->setQbText($value);
                break;
            case 70:
                $this->setQbWinf($value);
                break;
            case 71:
                $this->setQbTemp($value);
                break;
            case 72:
                $this->setQbA($value);
                break;
            case 73:
                $this->setWithGrowth($value);
                break;
            case 74:
                $this->setWithMaxAgeSize($value);
                break;
            case 75:
                $this->setWithLw($value);
                break;
            case 76:
                $this->setWithReproduction($value);
                break;
            case 77:
                $this->setWithDiet($value);
                break;
            case 78:
                $this->setWithFoodConsumption($value);
                break;
            case 79:
                $this->setWithFood($value);
                break;
            case 80:
                $this->setWithMaturity($value);
                break;
            case 81:
                $this->setWithSpawning($value);
                break;
            case 82:
                $this->setStockcode($value);
                break;
            case 83:
                $this->setTs($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = MatrixPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFamcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setKfType($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTmForKf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLmax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLmaxType($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLinf($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLinfType($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLinf1st($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLinf2nd($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLinfComment($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setK($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setKfComment($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPhiprime($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTo($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMeanTemp($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setM($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMSe1st($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMSe2nd($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMComment($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLifeSpan($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLifeSpan1st($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLifeSpan2nd($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setGenerationTime($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setGenTime1st($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setGenTime2nd($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTm($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTm1st($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTm2nd($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLm($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLmSe1st($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLmSe2nd($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLmType($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLopt($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLoptSe1st($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLoptSe2nd($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLoptType($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLoptText($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setA($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setB($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setLwLength($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setLwLengthType($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setW($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setWType($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setNitrogenproteinWeight($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setNitrogenproteinWeightType($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setNitrogen($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setProtein($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setReproductiveGuild($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setFecundity($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setFecundity1st($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setFecundity2nd($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setZzzfecundityText($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setEmsy($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setEopt($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setFmsy($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setFopt($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setLc($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setLcType($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setE($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setYr($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setResilience($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setRm($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setLr($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setLrType($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setMainFood($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setTrophicLevel($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setQb($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setQbText($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setQbWinf($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setQbTemp($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setQbA($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setWithGrowth($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setWithMaxAgeSize($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setWithLw($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setWithReproduction($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setWithDiet($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setWithFoodConsumption($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setWithFood($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setWithMaturity($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setWithSpawning($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setStockcode($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setTs($arr[$keys[83]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MatrixPeer::DATABASE_NAME);

        if ($this->isColumnModified(MatrixPeer::ID)) $criteria->add(MatrixPeer::ID, $this->id);
        if ($this->isColumnModified(MatrixPeer::SPECCODE)) $criteria->add(MatrixPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MatrixPeer::FAMCODE)) $criteria->add(MatrixPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(MatrixPeer::KF_TYPE)) $criteria->add(MatrixPeer::KF_TYPE, $this->kf_type);
        if ($this->isColumnModified(MatrixPeer::TM_FOR_KF)) $criteria->add(MatrixPeer::TM_FOR_KF, $this->tm_for_kf);
        if ($this->isColumnModified(MatrixPeer::LMAX)) $criteria->add(MatrixPeer::LMAX, $this->lmax);
        if ($this->isColumnModified(MatrixPeer::LMAX_TYPE)) $criteria->add(MatrixPeer::LMAX_TYPE, $this->lmax_type);
        if ($this->isColumnModified(MatrixPeer::LINF)) $criteria->add(MatrixPeer::LINF, $this->linf);
        if ($this->isColumnModified(MatrixPeer::LINF_TYPE)) $criteria->add(MatrixPeer::LINF_TYPE, $this->linf_type);
        if ($this->isColumnModified(MatrixPeer::LINF_1ST)) $criteria->add(MatrixPeer::LINF_1ST, $this->linf_1st);
        if ($this->isColumnModified(MatrixPeer::LINF_2ND)) $criteria->add(MatrixPeer::LINF_2ND, $this->linf_2nd);
        if ($this->isColumnModified(MatrixPeer::LINF_COMMENT)) $criteria->add(MatrixPeer::LINF_COMMENT, $this->linf_comment);
        if ($this->isColumnModified(MatrixPeer::K)) $criteria->add(MatrixPeer::K, $this->k);
        if ($this->isColumnModified(MatrixPeer::KF_COMMENT)) $criteria->add(MatrixPeer::KF_COMMENT, $this->kf_comment);
        if ($this->isColumnModified(MatrixPeer::PHIPRIME)) $criteria->add(MatrixPeer::PHIPRIME, $this->phiprime);
        if ($this->isColumnModified(MatrixPeer::TO)) $criteria->add(MatrixPeer::TO, $this->to);
        if ($this->isColumnModified(MatrixPeer::MEAN_TEMP)) $criteria->add(MatrixPeer::MEAN_TEMP, $this->mean_temp);
        if ($this->isColumnModified(MatrixPeer::M)) $criteria->add(MatrixPeer::M, $this->m);
        if ($this->isColumnModified(MatrixPeer::M_SE_1ST)) $criteria->add(MatrixPeer::M_SE_1ST, $this->m_se_1st);
        if ($this->isColumnModified(MatrixPeer::M_SE_2ND)) $criteria->add(MatrixPeer::M_SE_2ND, $this->m_se_2nd);
        if ($this->isColumnModified(MatrixPeer::M_COMMENT)) $criteria->add(MatrixPeer::M_COMMENT, $this->m_comment);
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN)) $criteria->add(MatrixPeer::LIFE_SPAN, $this->life_span);
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN_1ST)) $criteria->add(MatrixPeer::LIFE_SPAN_1ST, $this->life_span_1st);
        if ($this->isColumnModified(MatrixPeer::LIFE_SPAN_2ND)) $criteria->add(MatrixPeer::LIFE_SPAN_2ND, $this->life_span_2nd);
        if ($this->isColumnModified(MatrixPeer::GENERATION_TIME)) $criteria->add(MatrixPeer::GENERATION_TIME, $this->generation_time);
        if ($this->isColumnModified(MatrixPeer::GEN_TIME_1ST)) $criteria->add(MatrixPeer::GEN_TIME_1ST, $this->gen_time_1st);
        if ($this->isColumnModified(MatrixPeer::GEN_TIME_2ND)) $criteria->add(MatrixPeer::GEN_TIME_2ND, $this->gen_time_2nd);
        if ($this->isColumnModified(MatrixPeer::TM)) $criteria->add(MatrixPeer::TM, $this->tm);
        if ($this->isColumnModified(MatrixPeer::TM_1ST)) $criteria->add(MatrixPeer::TM_1ST, $this->tm_1st);
        if ($this->isColumnModified(MatrixPeer::TM_2ND)) $criteria->add(MatrixPeer::TM_2ND, $this->tm_2nd);
        if ($this->isColumnModified(MatrixPeer::LM)) $criteria->add(MatrixPeer::LM, $this->lm);
        if ($this->isColumnModified(MatrixPeer::LM_SE_1ST)) $criteria->add(MatrixPeer::LM_SE_1ST, $this->lm_se_1st);
        if ($this->isColumnModified(MatrixPeer::LM_SE_2ND)) $criteria->add(MatrixPeer::LM_SE_2ND, $this->lm_se_2nd);
        if ($this->isColumnModified(MatrixPeer::LM_TYPE)) $criteria->add(MatrixPeer::LM_TYPE, $this->lm_type);
        if ($this->isColumnModified(MatrixPeer::LOPT)) $criteria->add(MatrixPeer::LOPT, $this->lopt);
        if ($this->isColumnModified(MatrixPeer::LOPT_SE_1ST)) $criteria->add(MatrixPeer::LOPT_SE_1ST, $this->lopt_se_1st);
        if ($this->isColumnModified(MatrixPeer::LOPT_SE_2ND)) $criteria->add(MatrixPeer::LOPT_SE_2ND, $this->lopt_se_2nd);
        if ($this->isColumnModified(MatrixPeer::LOPT_TYPE)) $criteria->add(MatrixPeer::LOPT_TYPE, $this->lopt_type);
        if ($this->isColumnModified(MatrixPeer::LOPT_TEXT)) $criteria->add(MatrixPeer::LOPT_TEXT, $this->lopt_text);
        if ($this->isColumnModified(MatrixPeer::A)) $criteria->add(MatrixPeer::A, $this->a);
        if ($this->isColumnModified(MatrixPeer::B)) $criteria->add(MatrixPeer::B, $this->b);
        if ($this->isColumnModified(MatrixPeer::LW_LENGTH)) $criteria->add(MatrixPeer::LW_LENGTH, $this->lw_length);
        if ($this->isColumnModified(MatrixPeer::LW_LENGTH_TYPE)) $criteria->add(MatrixPeer::LW_LENGTH_TYPE, $this->lw_length_type);
        if ($this->isColumnModified(MatrixPeer::W)) $criteria->add(MatrixPeer::W, $this->w);
        if ($this->isColumnModified(MatrixPeer::W_TYPE)) $criteria->add(MatrixPeer::W_TYPE, $this->w_type);
        if ($this->isColumnModified(MatrixPeer::NITROGENPROTEIN_WEIGHT)) $criteria->add(MatrixPeer::NITROGENPROTEIN_WEIGHT, $this->nitrogenprotein_weight);
        if ($this->isColumnModified(MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE)) $criteria->add(MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE, $this->nitrogenprotein_weight_type);
        if ($this->isColumnModified(MatrixPeer::NITROGEN)) $criteria->add(MatrixPeer::NITROGEN, $this->nitrogen);
        if ($this->isColumnModified(MatrixPeer::PROTEIN)) $criteria->add(MatrixPeer::PROTEIN, $this->protein);
        if ($this->isColumnModified(MatrixPeer::REPRODUCTIVE_GUILD)) $criteria->add(MatrixPeer::REPRODUCTIVE_GUILD, $this->reproductive_guild);
        if ($this->isColumnModified(MatrixPeer::FECUNDITY)) $criteria->add(MatrixPeer::FECUNDITY, $this->fecundity);
        if ($this->isColumnModified(MatrixPeer::FECUNDITY_1ST)) $criteria->add(MatrixPeer::FECUNDITY_1ST, $this->fecundity_1st);
        if ($this->isColumnModified(MatrixPeer::FECUNDITY_2ND)) $criteria->add(MatrixPeer::FECUNDITY_2ND, $this->fecundity_2nd);
        if ($this->isColumnModified(MatrixPeer::ZZZFECUNDITY_TEXT)) $criteria->add(MatrixPeer::ZZZFECUNDITY_TEXT, $this->zzzfecundity_text);
        if ($this->isColumnModified(MatrixPeer::EMSY)) $criteria->add(MatrixPeer::EMSY, $this->emsy);
        if ($this->isColumnModified(MatrixPeer::EOPT)) $criteria->add(MatrixPeer::EOPT, $this->eopt);
        if ($this->isColumnModified(MatrixPeer::FMSY)) $criteria->add(MatrixPeer::FMSY, $this->fmsy);
        if ($this->isColumnModified(MatrixPeer::FOPT)) $criteria->add(MatrixPeer::FOPT, $this->fopt);
        if ($this->isColumnModified(MatrixPeer::LC)) $criteria->add(MatrixPeer::LC, $this->lc);
        if ($this->isColumnModified(MatrixPeer::LC_TYPE)) $criteria->add(MatrixPeer::LC_TYPE, $this->lc_type);
        if ($this->isColumnModified(MatrixPeer::E)) $criteria->add(MatrixPeer::E, $this->e);
        if ($this->isColumnModified(MatrixPeer::YR)) $criteria->add(MatrixPeer::YR, $this->yr);
        if ($this->isColumnModified(MatrixPeer::RESILIENCE)) $criteria->add(MatrixPeer::RESILIENCE, $this->resilience);
        if ($this->isColumnModified(MatrixPeer::RM)) $criteria->add(MatrixPeer::RM, $this->rm);
        if ($this->isColumnModified(MatrixPeer::LR)) $criteria->add(MatrixPeer::LR, $this->lr);
        if ($this->isColumnModified(MatrixPeer::LR_TYPE)) $criteria->add(MatrixPeer::LR_TYPE, $this->lr_type);
        if ($this->isColumnModified(MatrixPeer::MAIN_FOOD)) $criteria->add(MatrixPeer::MAIN_FOOD, $this->main_food);
        if ($this->isColumnModified(MatrixPeer::TROPHIC_LEVEL)) $criteria->add(MatrixPeer::TROPHIC_LEVEL, $this->trophic_level);
        if ($this->isColumnModified(MatrixPeer::QB)) $criteria->add(MatrixPeer::QB, $this->qb);
        if ($this->isColumnModified(MatrixPeer::QB_TEXT)) $criteria->add(MatrixPeer::QB_TEXT, $this->qb_text);
        if ($this->isColumnModified(MatrixPeer::QB_WINF)) $criteria->add(MatrixPeer::QB_WINF, $this->qb_winf);
        if ($this->isColumnModified(MatrixPeer::QB_TEMP)) $criteria->add(MatrixPeer::QB_TEMP, $this->qb_temp);
        if ($this->isColumnModified(MatrixPeer::QB_A)) $criteria->add(MatrixPeer::QB_A, $this->qb_a);
        if ($this->isColumnModified(MatrixPeer::WITH_GROWTH)) $criteria->add(MatrixPeer::WITH_GROWTH, $this->with_growth);
        if ($this->isColumnModified(MatrixPeer::WITH_MAX_AGE_SIZE)) $criteria->add(MatrixPeer::WITH_MAX_AGE_SIZE, $this->with_max_age_size);
        if ($this->isColumnModified(MatrixPeer::WITH_LW)) $criteria->add(MatrixPeer::WITH_LW, $this->with_lw);
        if ($this->isColumnModified(MatrixPeer::WITH_REPRODUCTION)) $criteria->add(MatrixPeer::WITH_REPRODUCTION, $this->with_reproduction);
        if ($this->isColumnModified(MatrixPeer::WITH_DIET)) $criteria->add(MatrixPeer::WITH_DIET, $this->with_diet);
        if ($this->isColumnModified(MatrixPeer::WITH_FOOD_CONSUMPTION)) $criteria->add(MatrixPeer::WITH_FOOD_CONSUMPTION, $this->with_food_consumption);
        if ($this->isColumnModified(MatrixPeer::WITH_FOOD)) $criteria->add(MatrixPeer::WITH_FOOD, $this->with_food);
        if ($this->isColumnModified(MatrixPeer::WITH_MATURITY)) $criteria->add(MatrixPeer::WITH_MATURITY, $this->with_maturity);
        if ($this->isColumnModified(MatrixPeer::WITH_SPAWNING)) $criteria->add(MatrixPeer::WITH_SPAWNING, $this->with_spawning);
        if ($this->isColumnModified(MatrixPeer::STOCKCODE)) $criteria->add(MatrixPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(MatrixPeer::TS)) $criteria->add(MatrixPeer::TS, $this->ts);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(MatrixPeer::DATABASE_NAME);
        $criteria->add(MatrixPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Matrix (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setKfType($this->getKfType());
        $copyObj->setTmForKf($this->getTmForKf());
        $copyObj->setLmax($this->getLmax());
        $copyObj->setLmaxType($this->getLmaxType());
        $copyObj->setLinf($this->getLinf());
        $copyObj->setLinfType($this->getLinfType());
        $copyObj->setLinf1st($this->getLinf1st());
        $copyObj->setLinf2nd($this->getLinf2nd());
        $copyObj->setLinfComment($this->getLinfComment());
        $copyObj->setK($this->getK());
        $copyObj->setKfComment($this->getKfComment());
        $copyObj->setPhiprime($this->getPhiprime());
        $copyObj->setTo($this->getTo());
        $copyObj->setMeanTemp($this->getMeanTemp());
        $copyObj->setM($this->getM());
        $copyObj->setMSe1st($this->getMSe1st());
        $copyObj->setMSe2nd($this->getMSe2nd());
        $copyObj->setMComment($this->getMComment());
        $copyObj->setLifeSpan($this->getLifeSpan());
        $copyObj->setLifeSpan1st($this->getLifeSpan1st());
        $copyObj->setLifeSpan2nd($this->getLifeSpan2nd());
        $copyObj->setGenerationTime($this->getGenerationTime());
        $copyObj->setGenTime1st($this->getGenTime1st());
        $copyObj->setGenTime2nd($this->getGenTime2nd());
        $copyObj->setTm($this->getTm());
        $copyObj->setTm1st($this->getTm1st());
        $copyObj->setTm2nd($this->getTm2nd());
        $copyObj->setLm($this->getLm());
        $copyObj->setLmSe1st($this->getLmSe1st());
        $copyObj->setLmSe2nd($this->getLmSe2nd());
        $copyObj->setLmType($this->getLmType());
        $copyObj->setLopt($this->getLopt());
        $copyObj->setLoptSe1st($this->getLoptSe1st());
        $copyObj->setLoptSe2nd($this->getLoptSe2nd());
        $copyObj->setLoptType($this->getLoptType());
        $copyObj->setLoptText($this->getLoptText());
        $copyObj->setA($this->getA());
        $copyObj->setB($this->getB());
        $copyObj->setLwLength($this->getLwLength());
        $copyObj->setLwLengthType($this->getLwLengthType());
        $copyObj->setW($this->getW());
        $copyObj->setWType($this->getWType());
        $copyObj->setNitrogenproteinWeight($this->getNitrogenproteinWeight());
        $copyObj->setNitrogenproteinWeightType($this->getNitrogenproteinWeightType());
        $copyObj->setNitrogen($this->getNitrogen());
        $copyObj->setProtein($this->getProtein());
        $copyObj->setReproductiveGuild($this->getReproductiveGuild());
        $copyObj->setFecundity($this->getFecundity());
        $copyObj->setFecundity1st($this->getFecundity1st());
        $copyObj->setFecundity2nd($this->getFecundity2nd());
        $copyObj->setZzzfecundityText($this->getZzzfecundityText());
        $copyObj->setEmsy($this->getEmsy());
        $copyObj->setEopt($this->getEopt());
        $copyObj->setFmsy($this->getFmsy());
        $copyObj->setFopt($this->getFopt());
        $copyObj->setLc($this->getLc());
        $copyObj->setLcType($this->getLcType());
        $copyObj->setE($this->getE());
        $copyObj->setYr($this->getYr());
        $copyObj->setResilience($this->getResilience());
        $copyObj->setRm($this->getRm());
        $copyObj->setLr($this->getLr());
        $copyObj->setLrType($this->getLrType());
        $copyObj->setMainFood($this->getMainFood());
        $copyObj->setTrophicLevel($this->getTrophicLevel());
        $copyObj->setQb($this->getQb());
        $copyObj->setQbText($this->getQbText());
        $copyObj->setQbWinf($this->getQbWinf());
        $copyObj->setQbTemp($this->getQbTemp());
        $copyObj->setQbA($this->getQbA());
        $copyObj->setWithGrowth($this->getWithGrowth());
        $copyObj->setWithMaxAgeSize($this->getWithMaxAgeSize());
        $copyObj->setWithLw($this->getWithLw());
        $copyObj->setWithReproduction($this->getWithReproduction());
        $copyObj->setWithDiet($this->getWithDiet());
        $copyObj->setWithFoodConsumption($this->getWithFoodConsumption());
        $copyObj->setWithFood($this->getWithFood());
        $copyObj->setWithMaturity($this->getWithMaturity());
        $copyObj->setWithSpawning($this->getWithSpawning());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Matrix Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return MatrixPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MatrixPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->speccode = null;
        $this->famcode = null;
        $this->kf_type = null;
        $this->tm_for_kf = null;
        $this->lmax = null;
        $this->lmax_type = null;
        $this->linf = null;
        $this->linf_type = null;
        $this->linf_1st = null;
        $this->linf_2nd = null;
        $this->linf_comment = null;
        $this->k = null;
        $this->kf_comment = null;
        $this->phiprime = null;
        $this->to = null;
        $this->mean_temp = null;
        $this->m = null;
        $this->m_se_1st = null;
        $this->m_se_2nd = null;
        $this->m_comment = null;
        $this->life_span = null;
        $this->life_span_1st = null;
        $this->life_span_2nd = null;
        $this->generation_time = null;
        $this->gen_time_1st = null;
        $this->gen_time_2nd = null;
        $this->tm = null;
        $this->tm_1st = null;
        $this->tm_2nd = null;
        $this->lm = null;
        $this->lm_se_1st = null;
        $this->lm_se_2nd = null;
        $this->lm_type = null;
        $this->lopt = null;
        $this->lopt_se_1st = null;
        $this->lopt_se_2nd = null;
        $this->lopt_type = null;
        $this->lopt_text = null;
        $this->a = null;
        $this->b = null;
        $this->lw_length = null;
        $this->lw_length_type = null;
        $this->w = null;
        $this->w_type = null;
        $this->nitrogenprotein_weight = null;
        $this->nitrogenprotein_weight_type = null;
        $this->nitrogen = null;
        $this->protein = null;
        $this->reproductive_guild = null;
        $this->fecundity = null;
        $this->fecundity_1st = null;
        $this->fecundity_2nd = null;
        $this->zzzfecundity_text = null;
        $this->emsy = null;
        $this->eopt = null;
        $this->fmsy = null;
        $this->fopt = null;
        $this->lc = null;
        $this->lc_type = null;
        $this->e = null;
        $this->yr = null;
        $this->resilience = null;
        $this->rm = null;
        $this->lr = null;
        $this->lr_type = null;
        $this->main_food = null;
        $this->trophic_level = null;
        $this->qb = null;
        $this->qb_text = null;
        $this->qb_winf = null;
        $this->qb_temp = null;
        $this->qb_a = null;
        $this->with_growth = null;
        $this->with_max_age_size = null;
        $this->with_lw = null;
        $this->with_reproduction = null;
        $this->with_diet = null;
        $this->with_food_consumption = null;
        $this->with_food = null;
        $this->with_maturity = null;
        $this->with_spawning = null;
        $this->stockcode = null;
        $this->ts = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MatrixPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
