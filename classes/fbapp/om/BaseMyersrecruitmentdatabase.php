<?php


/**
 * Base class that represents a row from the 'myersrecruitmentdatabase' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMyersrecruitmentdatabase extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MyersrecruitmentdatabasePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MyersrecruitmentdatabasePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        string
     */
    protected $id;

    /**
     * The value for the reclag field.
     * @var        double
     */
    protected $reclag;

    /**
     * The value for the sp field.
     * @var        string
     */
    protected $sp;

    /**
     * The value for the genusused field.
     * @var        string
     */
    protected $genusused;

    /**
     * The value for the speciesused field.
     * @var        string
     */
    protected $speciesused;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the cfamily field.
     * @var        string
     */
    protected $cfamily;

    /**
     * The value for the order field.
     * @var        string
     */
    protected $order;

    /**
     * The value for the stockorig field.
     * @var        string
     */
    protected $stockorig;

    /**
     * The value for the stock field.
     * @var        string
     */
    protected $stock;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the areacode field.
     * @var        int
     */
    protected $areacode;

    /**
     * The value for the area field.
     * @var        double
     */
    protected $area;

    /**
     * The value for the unit field.
     * @var        string
     */
    protected $unit;

    /**
     * The value for the latitude2 field.
     * @var        double
     */
    protected $latitude2;

    /**
     * The value for the ns field.
     * @var        string
     */
    protected $ns;

    /**
     * The value for the longitude2 field.
     * @var        double
     */
    protected $longitude2;

    /**
     * The value for the we field.
     * @var        string
     */
    protected $we;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the mainref field.
     * @var        int
     */
    protected $mainref;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the cvrec field.
     * @var        double
     */
    protected $cvrec;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the comments2 field.
     * @var        string
     */
    protected $comments2;

    /**
     * The value for the commentsn field.
     * @var        string
     */
    protected $commentsn;

    /**
     * The value for the areatxt field.
     * @var        string
     */
    protected $areatxt;

    /**
     * The value for the fage field.
     * @var        string
     */
    protected $fage;

    /**
     * The value for the method field.
     * @var        string
     */
    protected $method;

    /**
     * The value for the method2 field.
     * @var        string
     */
    protected $method2;

    /**
     * The value for the unitssb field.
     * @var        string
     */
    protected $unitssb;

    /**
     * The value for the unitrec field.
     * @var        string
     */
    protected $unitrec;

    /**
     * The value for the unitland field.
     * @var        string
     */
    protected $unitland;

    /**
     * The value for the agerecdat field.
     * @var        double
     */
    protected $agerecdat;

    /**
     * The value for the eggdiam field.
     * @var        string
     */
    protected $eggdiam;

    /**
     * The value for the lhatch field.
     * @var        string
     */
    protected $lhatch;

    /**
     * The value for the lmeta field.
     * @var        string
     */
    protected $lmeta;

    /**
     * The value for the deltal field.
     * @var        string
     */
    protected $deltal;

    /**
     * The value for the deltan field.
     * @var        string
     */
    protected $deltan;

    /**
     * The value for the monthspa field.
     * @var        string
     */
    protected $monthspa;

    /**
     * The value for the spawnmnth field.
     * @var        string
     */
    protected $spawnmnth;

    /**
     * The value for the natmort field.
     * @var        string
     */
    protected $natmort;

    /**
     * The value for the f01 field.
     * @var        string
     */
    protected $f01;

    /**
     * The value for the fmax field.
     * @var        string
     */
    protected $fmax;

    /**
     * The value for the fmed field.
     * @var        string
     */
    protected $fmed;

    /**
     * The value for the kgprecf0 field.
     * @var        string
     */
    protected $kgprecf0;

    /**
     * The value for the spawnloc field.
     * @var        string
     */
    protected $spawnloc;

    /**
     * The value for the eggtype field.
     * @var        string
     */
    protected $eggtype;

    /**
     * The value for the feedtype field.
     * @var        string
     */
    protected $feedtype;

    /**
     * The value for the sourcemat field.
     * @var        string
     */
    protected $sourcemat;

    /**
     * The value for the lenmat field.
     * @var        string
     */
    protected $lenmat;

    /**
     * The value for the lenmatm field.
     * @var        string
     */
    protected $lenmatm;

    /**
     * The value for the lenmatf field.
     * @var        string
     */
    protected $lenmatf;

    /**
     * The value for the tm field.
     * @var        double
     */
    protected $tm;

    /**
     * The value for the tmref field.
     * @var        int
     */
    protected $tmref;

    /**
     * The value for the agemat field.
     * @var        string
     */
    protected $agemat;

    /**
     * The value for the agematm field.
     * @var        string
     */
    protected $agematm;

    /**
     * The value for the agematf field.
     * @var        string
     */
    protected $agematf;

    /**
     * The value for the lenrec field.
     * @var        string
     */
    protected $lenrec;

    /**
     * The value for the agerec field.
     * @var        string
     */
    protected $agerec;

    /**
     * The value for the agerecm field.
     * @var        string
     */
    protected $agerecm;

    /**
     * The value for the agerecf field.
     * @var        string
     */
    protected $agerecf;

    /**
     * The value for the loo field.
     * @var        double
     */
    protected $loo;

    /**
     * The value for the k field.
     * @var        double
     */
    protected $k;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the growthref field.
     * @var        int
     */
    protected $growthref;

    /**
     * The value for the sourcegro field.
     * @var        string
     */
    protected $sourcegro;

    /**
     * The value for the linfin field.
     * @var        string
     */
    protected $linfin;

    /**
     * The value for the kram field.
     * @var        string
     */
    protected $kram;

    /**
     * The value for the to field.
     * @var        string
     */
    protected $to;

    /**
     * The value for the linfinm field.
     * @var        string
     */
    protected $linfinm;

    /**
     * The value for the km field.
     * @var        string
     */
    protected $km;

    /**
     * The value for the tom field.
     * @var        string
     */
    protected $tom;

    /**
     * The value for the linfinf field.
     * @var        string
     */
    protected $linfinf;

    /**
     * The value for the kf field.
     * @var        string
     */
    protected $kf;

    /**
     * The value for the tof field.
     * @var        string
     */
    protected $tof;

    /**
     * The value for the sourceab field.
     * @var        string
     */
    protected $sourceab;

    /**
     * The value for the altwtpar field.
     * @var        string
     */
    protected $altwtpar;

    /**
     * The value for the bltwtpar field.
     * @var        string
     */
    protected $bltwtpar;

    /**
     * The value for the altwtparm field.
     * @var        string
     */
    protected $altwtparm;

    /**
     * The value for the bltwtparm field.
     * @var        string
     */
    protected $bltwtparm;

    /**
     * The value for the altwtparf field.
     * @var        string
     */
    protected $altwtparf;

    /**
     * The value for the bltwtparf field.
     * @var        string
     */
    protected $bltwtparf;

    /**
     * The value for the entered field.
     * @var        int
     */
    protected $entered;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the modified field.
     * @var        int
     */
    protected $modified;

    /**
     * The value for the datemodified field.
     * @var        string
     */
    protected $datemodified;

    /**
     * The value for the expert field.
     * @var        int
     */
    protected $expert;

    /**
     * The value for the datechecked field.
     * @var        string
     */
    protected $datechecked;

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
     * @return string
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [reclag] column value.
     *
     * @return double
     */
    public function getReclag()
    {

        return $this->reclag;
    }

    /**
     * Get the [sp] column value.
     *
     * @return string
     */
    public function getSp()
    {

        return $this->sp;
    }

    /**
     * Get the [genusused] column value.
     *
     * @return string
     */
    public function getGenusused()
    {

        return $this->genusused;
    }

    /**
     * Get the [speciesused] column value.
     *
     * @return string
     */
    public function getSpeciesused()
    {

        return $this->speciesused;
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
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
    }

    /**
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
    }

    /**
     * Get the [cfamily] column value.
     *
     * @return string
     */
    public function getCfamily()
    {

        return $this->cfamily;
    }

    /**
     * Get the [order] column value.
     *
     * @return string
     */
    public function getOrder()
    {

        return $this->order;
    }

    /**
     * Get the [stockorig] column value.
     *
     * @return string
     */
    public function getStockorig()
    {

        return $this->stockorig;
    }

    /**
     * Get the [stock] column value.
     *
     * @return string
     */
    public function getStock()
    {

        return $this->stock;
    }

    /**
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [areacode] column value.
     *
     * @return int
     */
    public function getAreacode()
    {

        return $this->areacode;
    }

    /**
     * Get the [area] column value.
     *
     * @return double
     */
    public function getArea()
    {

        return $this->area;
    }

    /**
     * Get the [unit] column value.
     *
     * @return string
     */
    public function getUnit()
    {

        return $this->unit;
    }

    /**
     * Get the [latitude2] column value.
     *
     * @return double
     */
    public function getLatitude2()
    {

        return $this->latitude2;
    }

    /**
     * Get the [ns] column value.
     *
     * @return string
     */
    public function getNs()
    {

        return $this->ns;
    }

    /**
     * Get the [longitude2] column value.
     *
     * @return double
     */
    public function getLongitude2()
    {

        return $this->longitude2;
    }

    /**
     * Get the [we] column value.
     *
     * @return string
     */
    public function getWe()
    {

        return $this->we;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [mainref] column value.
     *
     * @return int
     */
    public function getMainref()
    {

        return $this->mainref;
    }

    /**
     * Get the [dataref] column value.
     *
     * @return int
     */
    public function getDataref()
    {

        return $this->dataref;
    }

    /**
     * Get the [cvrec] column value.
     *
     * @return double
     */
    public function getCvrec()
    {

        return $this->cvrec;
    }

    /**
     * Get the [comments] column value.
     *
     * @return string
     */
    public function getComments()
    {

        return $this->comments;
    }

    /**
     * Get the [comments2] column value.
     *
     * @return string
     */
    public function getComments2()
    {

        return $this->comments2;
    }

    /**
     * Get the [commentsn] column value.
     *
     * @return string
     */
    public function getCommentsn()
    {

        return $this->commentsn;
    }

    /**
     * Get the [areatxt] column value.
     *
     * @return string
     */
    public function getAreatxt()
    {

        return $this->areatxt;
    }

    /**
     * Get the [fage] column value.
     *
     * @return string
     */
    public function getFage()
    {

        return $this->fage;
    }

    /**
     * Get the [method] column value.
     *
     * @return string
     */
    public function getMethod()
    {

        return $this->method;
    }

    /**
     * Get the [method2] column value.
     *
     * @return string
     */
    public function getMethod2()
    {

        return $this->method2;
    }

    /**
     * Get the [unitssb] column value.
     *
     * @return string
     */
    public function getUnitssb()
    {

        return $this->unitssb;
    }

    /**
     * Get the [unitrec] column value.
     *
     * @return string
     */
    public function getUnitrec()
    {

        return $this->unitrec;
    }

    /**
     * Get the [unitland] column value.
     *
     * @return string
     */
    public function getUnitland()
    {

        return $this->unitland;
    }

    /**
     * Get the [agerecdat] column value.
     *
     * @return double
     */
    public function getAgerecdat()
    {

        return $this->agerecdat;
    }

    /**
     * Get the [eggdiam] column value.
     *
     * @return string
     */
    public function getEggdiam()
    {

        return $this->eggdiam;
    }

    /**
     * Get the [lhatch] column value.
     *
     * @return string
     */
    public function getLhatch()
    {

        return $this->lhatch;
    }

    /**
     * Get the [lmeta] column value.
     *
     * @return string
     */
    public function getLmeta()
    {

        return $this->lmeta;
    }

    /**
     * Get the [deltal] column value.
     *
     * @return string
     */
    public function getDeltal()
    {

        return $this->deltal;
    }

    /**
     * Get the [deltan] column value.
     *
     * @return string
     */
    public function getDeltan()
    {

        return $this->deltan;
    }

    /**
     * Get the [monthspa] column value.
     *
     * @return string
     */
    public function getMonthspa()
    {

        return $this->monthspa;
    }

    /**
     * Get the [spawnmnth] column value.
     *
     * @return string
     */
    public function getSpawnmnth()
    {

        return $this->spawnmnth;
    }

    /**
     * Get the [natmort] column value.
     *
     * @return string
     */
    public function getNatmort()
    {

        return $this->natmort;
    }

    /**
     * Get the [f01] column value.
     *
     * @return string
     */
    public function getF01()
    {

        return $this->f01;
    }

    /**
     * Get the [fmax] column value.
     *
     * @return string
     */
    public function getFmax()
    {

        return $this->fmax;
    }

    /**
     * Get the [fmed] column value.
     *
     * @return string
     */
    public function getFmed()
    {

        return $this->fmed;
    }

    /**
     * Get the [kgprecf0] column value.
     *
     * @return string
     */
    public function getKgprecf0()
    {

        return $this->kgprecf0;
    }

    /**
     * Get the [spawnloc] column value.
     *
     * @return string
     */
    public function getSpawnloc()
    {

        return $this->spawnloc;
    }

    /**
     * Get the [eggtype] column value.
     *
     * @return string
     */
    public function getEggtype()
    {

        return $this->eggtype;
    }

    /**
     * Get the [feedtype] column value.
     *
     * @return string
     */
    public function getFeedtype()
    {

        return $this->feedtype;
    }

    /**
     * Get the [sourcemat] column value.
     *
     * @return string
     */
    public function getSourcemat()
    {

        return $this->sourcemat;
    }

    /**
     * Get the [lenmat] column value.
     *
     * @return string
     */
    public function getLenmat()
    {

        return $this->lenmat;
    }

    /**
     * Get the [lenmatm] column value.
     *
     * @return string
     */
    public function getLenmatm()
    {

        return $this->lenmatm;
    }

    /**
     * Get the [lenmatf] column value.
     *
     * @return string
     */
    public function getLenmatf()
    {

        return $this->lenmatf;
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
     * Get the [tmref] column value.
     *
     * @return int
     */
    public function getTmref()
    {

        return $this->tmref;
    }

    /**
     * Get the [agemat] column value.
     *
     * @return string
     */
    public function getAgemat()
    {

        return $this->agemat;
    }

    /**
     * Get the [agematm] column value.
     *
     * @return string
     */
    public function getAgematm()
    {

        return $this->agematm;
    }

    /**
     * Get the [agematf] column value.
     *
     * @return string
     */
    public function getAgematf()
    {

        return $this->agematf;
    }

    /**
     * Get the [lenrec] column value.
     *
     * @return string
     */
    public function getLenrec()
    {

        return $this->lenrec;
    }

    /**
     * Get the [agerec] column value.
     *
     * @return string
     */
    public function getAgerec()
    {

        return $this->agerec;
    }

    /**
     * Get the [agerecm] column value.
     *
     * @return string
     */
    public function getAgerecm()
    {

        return $this->agerecm;
    }

    /**
     * Get the [agerecf] column value.
     *
     * @return string
     */
    public function getAgerecf()
    {

        return $this->agerecf;
    }

    /**
     * Get the [loo] column value.
     *
     * @return double
     */
    public function getLoo()
    {

        return $this->loo;
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
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
    }

    /**
     * Get the [growthref] column value.
     *
     * @return int
     */
    public function getGrowthref()
    {

        return $this->growthref;
    }

    /**
     * Get the [sourcegro] column value.
     *
     * @return string
     */
    public function getSourcegro()
    {

        return $this->sourcegro;
    }

    /**
     * Get the [linfin] column value.
     *
     * @return string
     */
    public function getLinfin()
    {

        return $this->linfin;
    }

    /**
     * Get the [kram] column value.
     *
     * @return string
     */
    public function getKram()
    {

        return $this->kram;
    }

    /**
     * Get the [to] column value.
     *
     * @return string
     */
    public function getTo()
    {

        return $this->to;
    }

    /**
     * Get the [linfinm] column value.
     *
     * @return string
     */
    public function getLinfinm()
    {

        return $this->linfinm;
    }

    /**
     * Get the [km] column value.
     *
     * @return string
     */
    public function getKm()
    {

        return $this->km;
    }

    /**
     * Get the [tom] column value.
     *
     * @return string
     */
    public function getTom()
    {

        return $this->tom;
    }

    /**
     * Get the [linfinf] column value.
     *
     * @return string
     */
    public function getLinfinf()
    {

        return $this->linfinf;
    }

    /**
     * Get the [kf] column value.
     *
     * @return string
     */
    public function getKf()
    {

        return $this->kf;
    }

    /**
     * Get the [tof] column value.
     *
     * @return string
     */
    public function getTof()
    {

        return $this->tof;
    }

    /**
     * Get the [sourceab] column value.
     *
     * @return string
     */
    public function getSourceab()
    {

        return $this->sourceab;
    }

    /**
     * Get the [altwtpar] column value.
     *
     * @return string
     */
    public function getAltwtpar()
    {

        return $this->altwtpar;
    }

    /**
     * Get the [bltwtpar] column value.
     *
     * @return string
     */
    public function getBltwtpar()
    {

        return $this->bltwtpar;
    }

    /**
     * Get the [altwtparm] column value.
     *
     * @return string
     */
    public function getAltwtparm()
    {

        return $this->altwtparm;
    }

    /**
     * Get the [bltwtparm] column value.
     *
     * @return string
     */
    public function getBltwtparm()
    {

        return $this->bltwtparm;
    }

    /**
     * Get the [altwtparf] column value.
     *
     * @return string
     */
    public function getAltwtparf()
    {

        return $this->altwtparf;
    }

    /**
     * Get the [bltwtparf] column value.
     *
     * @return string
     */
    public function getBltwtparf()
    {

        return $this->bltwtparf;
    }

    /**
     * Get the [entered] column value.
     *
     * @return int
     */
    public function getEntered()
    {

        return $this->entered;
    }

    /**
     * Get the [optionally formatted] temporal [dateentered] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateentered($format = 'Y-m-d H:i:s')
    {
        if ($this->dateentered === null) {
            return null;
        }

        if ($this->dateentered === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateentered);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateentered, true), $x);
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
     * Get the [modified] column value.
     *
     * @return int
     */
    public function getModified()
    {

        return $this->modified;
    }

    /**
     * Get the [optionally formatted] temporal [datemodified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemodified($format = 'Y-m-d H:i:s')
    {
        if ($this->datemodified === null) {
            return null;
        }

        if ($this->datemodified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemodified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemodified, true), $x);
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
     * Get the [expert] column value.
     *
     * @return int
     */
    public function getExpert()
    {

        return $this->expert;
    }

    /**
     * Get the [optionally formatted] temporal [datechecked] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatechecked($format = 'Y-m-d H:i:s')
    {
        if ($this->datechecked === null) {
            return null;
        }

        if ($this->datechecked === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datechecked);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datechecked, true), $x);
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
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [reclag] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setReclag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->reclag !== $v) {
            $this->reclag = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::RECLAG;
        }


        return $this;
    } // setReclag()

    /**
     * Set the value of [sp] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sp !== $v) {
            $this->sp = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SP;
        }


        return $this;
    } // setSp()

    /**
     * Set the value of [genusused] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setGenusused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genusused !== $v) {
            $this->genusused = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::GENUSUSED;
        }


        return $this;
    } // setGenusused()

    /**
     * Set the value of [speciesused] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSpeciesused($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speciesused !== $v) {
            $this->speciesused = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SPECIESUSED;
        }


        return $this;
    } // setSpeciesused()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [cfamily] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setCfamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cfamily !== $v) {
            $this->cfamily = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::CFAMILY;
        }


        return $this;
    } // setCfamily()

    /**
     * Set the value of [order] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [stockorig] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setStockorig($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stockorig !== $v) {
            $this->stockorig = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::STOCKORIG;
        }


        return $this;
    } // setStockorig()

    /**
     * Set the value of [stock] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setStock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stock !== $v) {
            $this->stock = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::STOCK;
        }


        return $this;
    } // setStock()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [area] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [unit] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setUnit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unit !== $v) {
            $this->unit = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::UNIT;
        }


        return $this;
    } // setUnit()

    /**
     * Set the value of [latitude2] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLatitude2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitude2 !== $v) {
            $this->latitude2 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LATITUDE2;
        }


        return $this;
    } // setLatitude2()

    /**
     * Set the value of [ns] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setNs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ns !== $v) {
            $this->ns = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::NS;
        }


        return $this;
    } // setNs()

    /**
     * Set the value of [longitude2] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLongitude2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitude2 !== $v) {
            $this->longitude2 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LONGITUDE2;
        }


        return $this;
    } // setLongitude2()

    /**
     * Set the value of [we] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setWe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->we !== $v) {
            $this->we = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::WE;
        }


        return $this;
    } // setWe()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [mainref] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setMainref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mainref !== $v) {
            $this->mainref = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::MAINREF;
        }


        return $this;
    } // setMainref()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [cvrec] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setCvrec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->cvrec !== $v) {
            $this->cvrec = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::CVREC;
        }


        return $this;
    } // setCvrec()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [comments2] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setComments2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments2 !== $v) {
            $this->comments2 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::COMMENTS2;
        }


        return $this;
    } // setComments2()

    /**
     * Set the value of [commentsn] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setCommentsn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentsn !== $v) {
            $this->commentsn = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::COMMENTSN;
        }


        return $this;
    } // setCommentsn()

    /**
     * Set the value of [areatxt] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAreatxt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->areatxt !== $v) {
            $this->areatxt = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AREATXT;
        }


        return $this;
    } // setAreatxt()

    /**
     * Set the value of [fage] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setFage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fage !== $v) {
            $this->fage = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::FAGE;
        }


        return $this;
    } // setFage()

    /**
     * Set the value of [method] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method !== $v) {
            $this->method = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::METHOD;
        }


        return $this;
    } // setMethod()

    /**
     * Set the value of [method2] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setMethod2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->method2 !== $v) {
            $this->method2 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::METHOD2;
        }


        return $this;
    } // setMethod2()

    /**
     * Set the value of [unitssb] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setUnitssb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitssb !== $v) {
            $this->unitssb = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::UNITSSB;
        }


        return $this;
    } // setUnitssb()

    /**
     * Set the value of [unitrec] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setUnitrec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitrec !== $v) {
            $this->unitrec = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::UNITREC;
        }


        return $this;
    } // setUnitrec()

    /**
     * Set the value of [unitland] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setUnitland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitland !== $v) {
            $this->unitland = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::UNITLAND;
        }


        return $this;
    } // setUnitland()

    /**
     * Set the value of [agerecdat] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgerecdat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->agerecdat !== $v) {
            $this->agerecdat = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGERECDAT;
        }


        return $this;
    } // setAgerecdat()

    /**
     * Set the value of [eggdiam] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setEggdiam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggdiam !== $v) {
            $this->eggdiam = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::EGGDIAM;
        }


        return $this;
    } // setEggdiam()

    /**
     * Set the value of [lhatch] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLhatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lhatch !== $v) {
            $this->lhatch = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LHATCH;
        }


        return $this;
    } // setLhatch()

    /**
     * Set the value of [lmeta] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLmeta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lmeta !== $v) {
            $this->lmeta = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LMETA;
        }


        return $this;
    } // setLmeta()

    /**
     * Set the value of [deltal] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDeltal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->deltal !== $v) {
            $this->deltal = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DELTAL;
        }


        return $this;
    } // setDeltal()

    /**
     * Set the value of [deltan] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDeltan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->deltan !== $v) {
            $this->deltan = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DELTAN;
        }


        return $this;
    } // setDeltan()

    /**
     * Set the value of [monthspa] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setMonthspa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->monthspa !== $v) {
            $this->monthspa = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::MONTHSPA;
        }


        return $this;
    } // setMonthspa()

    /**
     * Set the value of [spawnmnth] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSpawnmnth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spawnmnth !== $v) {
            $this->spawnmnth = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SPAWNMNTH;
        }


        return $this;
    } // setSpawnmnth()

    /**
     * Set the value of [natmort] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setNatmort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->natmort !== $v) {
            $this->natmort = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::NATMORT;
        }


        return $this;
    } // setNatmort()

    /**
     * Set the value of [f01] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setF01($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->f01 !== $v) {
            $this->f01 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::F01;
        }


        return $this;
    } // setF01()

    /**
     * Set the value of [fmax] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setFmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fmax !== $v) {
            $this->fmax = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::FMAX;
        }


        return $this;
    } // setFmax()

    /**
     * Set the value of [fmed] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setFmed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fmed !== $v) {
            $this->fmed = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::FMED;
        }


        return $this;
    } // setFmed()

    /**
     * Set the value of [kgprecf0] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setKgprecf0($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kgprecf0 !== $v) {
            $this->kgprecf0 = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::KGPRECF0;
        }


        return $this;
    } // setKgprecf0()

    /**
     * Set the value of [spawnloc] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSpawnloc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spawnloc !== $v) {
            $this->spawnloc = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SPAWNLOC;
        }


        return $this;
    } // setSpawnloc()

    /**
     * Set the value of [eggtype] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setEggtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggtype !== $v) {
            $this->eggtype = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::EGGTYPE;
        }


        return $this;
    } // setEggtype()

    /**
     * Set the value of [feedtype] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setFeedtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->feedtype !== $v) {
            $this->feedtype = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::FEEDTYPE;
        }


        return $this;
    } // setFeedtype()

    /**
     * Set the value of [sourcemat] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSourcemat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourcemat !== $v) {
            $this->sourcemat = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SOURCEMAT;
        }


        return $this;
    } // setSourcemat()

    /**
     * Set the value of [lenmat] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLenmat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lenmat !== $v) {
            $this->lenmat = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LENMAT;
        }


        return $this;
    } // setLenmat()

    /**
     * Set the value of [lenmatm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLenmatm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lenmatm !== $v) {
            $this->lenmatm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LENMATM;
        }


        return $this;
    } // setLenmatm()

    /**
     * Set the value of [lenmatf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLenmatf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lenmatf !== $v) {
            $this->lenmatf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LENMATF;
        }


        return $this;
    } // setLenmatf()

    /**
     * Set the value of [tm] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tm !== $v) {
            $this->tm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TM;
        }


        return $this;
    } // setTm()

    /**
     * Set the value of [tmref] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTmref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tmref !== $v) {
            $this->tmref = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TMREF;
        }


        return $this;
    } // setTmref()

    /**
     * Set the value of [agemat] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgemat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agemat !== $v) {
            $this->agemat = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGEMAT;
        }


        return $this;
    } // setAgemat()

    /**
     * Set the value of [agematm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgematm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agematm !== $v) {
            $this->agematm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGEMATM;
        }


        return $this;
    } // setAgematm()

    /**
     * Set the value of [agematf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgematf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agematf !== $v) {
            $this->agematf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGEMATF;
        }


        return $this;
    } // setAgematf()

    /**
     * Set the value of [lenrec] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLenrec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lenrec !== $v) {
            $this->lenrec = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LENREC;
        }


        return $this;
    } // setLenrec()

    /**
     * Set the value of [agerec] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgerec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agerec !== $v) {
            $this->agerec = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGEREC;
        }


        return $this;
    } // setAgerec()

    /**
     * Set the value of [agerecm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgerecm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agerecm !== $v) {
            $this->agerecm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGERECM;
        }


        return $this;
    } // setAgerecm()

    /**
     * Set the value of [agerecf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAgerecf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agerecf !== $v) {
            $this->agerecf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::AGERECF;
        }


        return $this;
    } // setAgerecf()

    /**
     * Set the value of [loo] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLoo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->loo !== $v) {
            $this->loo = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LOO;
        }


        return $this;
    } // setLoo()

    /**
     * Set the value of [k] column.
     *
     * @param  double $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::K;
        }


        return $this;
    } // setK()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [growthref] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setGrowthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthref !== $v) {
            $this->growthref = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::GROWTHREF;
        }


        return $this;
    } // setGrowthref()

    /**
     * Set the value of [sourcegro] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSourcegro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourcegro !== $v) {
            $this->sourcegro = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SOURCEGRO;
        }


        return $this;
    } // setSourcegro()

    /**
     * Set the value of [linfin] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLinfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linfin !== $v) {
            $this->linfin = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LINFIN;
        }


        return $this;
    } // setLinfin()

    /**
     * Set the value of [kram] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setKram($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kram !== $v) {
            $this->kram = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::KRAM;
        }


        return $this;
    } // setKram()

    /**
     * Set the value of [to] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->to !== $v) {
            $this->to = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TO;
        }


        return $this;
    } // setTo()

    /**
     * Set the value of [linfinm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLinfinm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linfinm !== $v) {
            $this->linfinm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LINFINM;
        }


        return $this;
    } // setLinfinm()

    /**
     * Set the value of [km] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setKm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->km !== $v) {
            $this->km = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::KM;
        }


        return $this;
    } // setKm()

    /**
     * Set the value of [tom] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tom !== $v) {
            $this->tom = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TOM;
        }


        return $this;
    } // setTom()

    /**
     * Set the value of [linfinf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setLinfinf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->linfinf !== $v) {
            $this->linfinf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::LINFINF;
        }


        return $this;
    } // setLinfinf()

    /**
     * Set the value of [kf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setKf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kf !== $v) {
            $this->kf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::KF;
        }


        return $this;
    } // setKf()

    /**
     * Set the value of [tof] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTof($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tof !== $v) {
            $this->tof = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TOF;
        }


        return $this;
    } // setTof()

    /**
     * Set the value of [sourceab] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setSourceab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourceab !== $v) {
            $this->sourceab = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::SOURCEAB;
        }


        return $this;
    } // setSourceab()

    /**
     * Set the value of [altwtpar] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAltwtpar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->altwtpar !== $v) {
            $this->altwtpar = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ALTWTPAR;
        }


        return $this;
    } // setAltwtpar()

    /**
     * Set the value of [bltwtpar] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setBltwtpar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bltwtpar !== $v) {
            $this->bltwtpar = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::BLTWTPAR;
        }


        return $this;
    } // setBltwtpar()

    /**
     * Set the value of [altwtparm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAltwtparm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->altwtparm !== $v) {
            $this->altwtparm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ALTWTPARM;
        }


        return $this;
    } // setAltwtparm()

    /**
     * Set the value of [bltwtparm] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setBltwtparm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bltwtparm !== $v) {
            $this->bltwtparm = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::BLTWTPARM;
        }


        return $this;
    } // setBltwtparm()

    /**
     * Set the value of [altwtparf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setAltwtparf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->altwtparf !== $v) {
            $this->altwtparf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ALTWTPARF;
        }


        return $this;
    } // setAltwtparf()

    /**
     * Set the value of [bltwtparf] column.
     *
     * @param  string $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setBltwtparf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bltwtparf !== $v) {
            $this->bltwtparf = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::BLTWTPARF;
        }


        return $this;
    } // setBltwtparf()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Myersrecruitmentdatabase The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MyersrecruitmentdatabasePeer::TS;
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

            $this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->reclag = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->sp = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->genusused = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->speciesused = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->speccode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->stockcode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->family = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cfamily = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->order = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->stockorig = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->stock = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->c_code = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->areacode = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->area = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->unit = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->latitude2 = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->ns = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->longitude2 = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->we = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->source = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->mainref = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->dataref = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->cvrec = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->comments = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->comments2 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->commentsn = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->areatxt = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->fage = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->method = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->method2 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->unitssb = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->unitrec = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->unitland = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->agerecdat = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->eggdiam = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->lhatch = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->lmeta = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->deltal = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->deltan = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->monthspa = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->spawnmnth = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->natmort = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->f01 = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->fmax = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->fmed = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->kgprecf0 = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->spawnloc = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->eggtype = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->feedtype = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->sourcemat = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->lenmat = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->lenmatm = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->lenmatf = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->tm = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->tmref = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->agemat = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->agematm = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->agematf = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->lenrec = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->agerec = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->agerecm = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->agerecf = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->loo = ($row[$startcol + 63] !== null) ? (double) $row[$startcol + 63] : null;
            $this->k = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->lengthtype = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->growthref = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->sourcegro = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->linfin = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->kram = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->to = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->linfinm = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->km = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->tom = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->linfinf = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->kf = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->tof = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->sourceab = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->altwtpar = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->bltwtpar = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->altwtparm = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->bltwtparm = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->altwtparf = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->bltwtparf = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->entered = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->dateentered = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->modified = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->datemodified = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->expert = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->datechecked = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->ts = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 91; // 91 = MyersrecruitmentdatabasePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Myersrecruitmentdatabase object", $e);
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
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MyersrecruitmentdatabasePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MyersrecruitmentdatabaseQuery::create()
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
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MyersrecruitmentdatabasePeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::RECLAG)) {
            $modifiedColumns[':p' . $index++]  = '`Reclag`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SP)) {
            $modifiedColumns[':p' . $index++]  = '`sp`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::GENUSUSED)) {
            $modifiedColumns[':p' . $index++]  = '`genusUsed`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPECIESUSED)) {
            $modifiedColumns[':p' . $index++]  = '`speciesUsed`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`speccode`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`stockcode`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`family`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::CFAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`cfamily`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`order`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCKORIG)) {
            $modifiedColumns[':p' . $index++]  = '`stockOrig`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCK)) {
            $modifiedColumns[':p' . $index++]  = '`stock`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCode`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`Area`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNIT)) {
            $modifiedColumns[':p' . $index++]  = '`Unit`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LATITUDE2)) {
            $modifiedColumns[':p' . $index++]  = '`Latitude2`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::NS)) {
            $modifiedColumns[':p' . $index++]  = '`ns`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LONGITUDE2)) {
            $modifiedColumns[':p' . $index++]  = '`longitude2`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::WE)) {
            $modifiedColumns[':p' . $index++]  = '`we`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`source`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MAINREF)) {
            $modifiedColumns[':p' . $index++]  = '`MainRef`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::CVREC)) {
            $modifiedColumns[':p' . $index++]  = '`CVRec`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`comments`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTS2)) {
            $modifiedColumns[':p' . $index++]  = '`comments2`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTSN)) {
            $modifiedColumns[':p' . $index++]  = '`commentsN`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREATXT)) {
            $modifiedColumns[':p' . $index++]  = '`AreaTxt`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FAGE)) {
            $modifiedColumns[':p' . $index++]  = '`fage`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::METHOD)) {
            $modifiedColumns[':p' . $index++]  = '`method`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::METHOD2)) {
            $modifiedColumns[':p' . $index++]  = '`method2`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITSSB)) {
            $modifiedColumns[':p' . $index++]  = '`unitssb`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITREC)) {
            $modifiedColumns[':p' . $index++]  = '`unitrec`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITLAND)) {
            $modifiedColumns[':p' . $index++]  = '`unitland`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECDAT)) {
            $modifiedColumns[':p' . $index++]  = '`agerecdat`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EGGDIAM)) {
            $modifiedColumns[':p' . $index++]  = '`eggdiam`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LHATCH)) {
            $modifiedColumns[':p' . $index++]  = '`lhatch`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LMETA)) {
            $modifiedColumns[':p' . $index++]  = '`lmeta`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DELTAL)) {
            $modifiedColumns[':p' . $index++]  = '`deltal`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DELTAN)) {
            $modifiedColumns[':p' . $index++]  = '`deltan`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MONTHSPA)) {
            $modifiedColumns[':p' . $index++]  = '`monthspa`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPAWNMNTH)) {
            $modifiedColumns[':p' . $index++]  = '`spawnmnth`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::NATMORT)) {
            $modifiedColumns[':p' . $index++]  = '`natmort`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::F01)) {
            $modifiedColumns[':p' . $index++]  = '`f01`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FMAX)) {
            $modifiedColumns[':p' . $index++]  = '`fmax`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FMED)) {
            $modifiedColumns[':p' . $index++]  = '`fmed`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KGPRECF0)) {
            $modifiedColumns[':p' . $index++]  = '`kgprecf0`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPAWNLOC)) {
            $modifiedColumns[':p' . $index++]  = '`spawnloc`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EGGTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`eggtype`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FEEDTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Feedtype`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEMAT)) {
            $modifiedColumns[':p' . $index++]  = '`sourcemat`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMAT)) {
            $modifiedColumns[':p' . $index++]  = '`lenmat`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMATM)) {
            $modifiedColumns[':p' . $index++]  = '`lenmatm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMATF)) {
            $modifiedColumns[':p' . $index++]  = '`lenmatf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TM)) {
            $modifiedColumns[':p' . $index++]  = '`tm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TMREF)) {
            $modifiedColumns[':p' . $index++]  = '`tmRef`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMAT)) {
            $modifiedColumns[':p' . $index++]  = '`agemat`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMATM)) {
            $modifiedColumns[':p' . $index++]  = '`agematm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMATF)) {
            $modifiedColumns[':p' . $index++]  = '`agematf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENREC)) {
            $modifiedColumns[':p' . $index++]  = '`lenrec`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEREC)) {
            $modifiedColumns[':p' . $index++]  = '`agerec`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECM)) {
            $modifiedColumns[':p' . $index++]  = '`agerecm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECF)) {
            $modifiedColumns[':p' . $index++]  = '`agerecf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LOO)) {
            $modifiedColumns[':p' . $index++]  = '`Loo`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::K)) {
            $modifiedColumns[':p' . $index++]  = '`K`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::GROWTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthRef`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEGRO)) {
            $modifiedColumns[':p' . $index++]  = '`sourcegro`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFIN)) {
            $modifiedColumns[':p' . $index++]  = '`linfin`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KRAM)) {
            $modifiedColumns[':p' . $index++]  = '`kram`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TO)) {
            $modifiedColumns[':p' . $index++]  = '`to`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFINM)) {
            $modifiedColumns[':p' . $index++]  = '`linfinm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KM)) {
            $modifiedColumns[':p' . $index++]  = '`kM`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TOM)) {
            $modifiedColumns[':p' . $index++]  = '`toM`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFINF)) {
            $modifiedColumns[':p' . $index++]  = '`linfinf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KF)) {
            $modifiedColumns[':p' . $index++]  = '`kF`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TOF)) {
            $modifiedColumns[':p' . $index++]  = '`toF`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEAB)) {
            $modifiedColumns[':p' . $index++]  = '`sourceab`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPAR)) {
            $modifiedColumns[':p' . $index++]  = '`altwtpar`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPAR)) {
            $modifiedColumns[':p' . $index++]  = '`bltwtpar`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPARM)) {
            $modifiedColumns[':p' . $index++]  = '`altwtparm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPARM)) {
            $modifiedColumns[':p' . $index++]  = '`bltwtparm`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPARF)) {
            $modifiedColumns[':p' . $index++]  = '`altwtparf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPARF)) {
            $modifiedColumns[':p' . $index++]  = '`bltwtparf`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`entered`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`dateentered`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`modified`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`datemodified`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`expert`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`datechecked`';
        }
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `myersrecruitmentdatabase` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case '`Reclag`':
                        $stmt->bindValue($identifier, $this->reclag, PDO::PARAM_STR);
                        break;
                    case '`sp`':
                        $stmt->bindValue($identifier, $this->sp, PDO::PARAM_STR);
                        break;
                    case '`genusUsed`':
                        $stmt->bindValue($identifier, $this->genusused, PDO::PARAM_STR);
                        break;
                    case '`speciesUsed`':
                        $stmt->bindValue($identifier, $this->speciesused, PDO::PARAM_STR);
                        break;
                    case '`speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`cfamily`':
                        $stmt->bindValue($identifier, $this->cfamily, PDO::PARAM_STR);
                        break;
                    case '`order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_STR);
                        break;
                    case '`stockOrig`':
                        $stmt->bindValue($identifier, $this->stockorig, PDO::PARAM_STR);
                        break;
                    case '`stock`':
                        $stmt->bindValue($identifier, $this->stock, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`AreaCode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`Area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_STR);
                        break;
                    case '`Unit`':
                        $stmt->bindValue($identifier, $this->unit, PDO::PARAM_STR);
                        break;
                    case '`Latitude2`':
                        $stmt->bindValue($identifier, $this->latitude2, PDO::PARAM_STR);
                        break;
                    case '`ns`':
                        $stmt->bindValue($identifier, $this->ns, PDO::PARAM_STR);
                        break;
                    case '`longitude2`':
                        $stmt->bindValue($identifier, $this->longitude2, PDO::PARAM_STR);
                        break;
                    case '`we`':
                        $stmt->bindValue($identifier, $this->we, PDO::PARAM_STR);
                        break;
                    case '`source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`MainRef`':
                        $stmt->bindValue($identifier, $this->mainref, PDO::PARAM_INT);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`CVRec`':
                        $stmt->bindValue($identifier, $this->cvrec, PDO::PARAM_STR);
                        break;
                    case '`comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`comments2`':
                        $stmt->bindValue($identifier, $this->comments2, PDO::PARAM_STR);
                        break;
                    case '`commentsN`':
                        $stmt->bindValue($identifier, $this->commentsn, PDO::PARAM_STR);
                        break;
                    case '`AreaTxt`':
                        $stmt->bindValue($identifier, $this->areatxt, PDO::PARAM_STR);
                        break;
                    case '`fage`':
                        $stmt->bindValue($identifier, $this->fage, PDO::PARAM_STR);
                        break;
                    case '`method`':
                        $stmt->bindValue($identifier, $this->method, PDO::PARAM_STR);
                        break;
                    case '`method2`':
                        $stmt->bindValue($identifier, $this->method2, PDO::PARAM_STR);
                        break;
                    case '`unitssb`':
                        $stmt->bindValue($identifier, $this->unitssb, PDO::PARAM_STR);
                        break;
                    case '`unitrec`':
                        $stmt->bindValue($identifier, $this->unitrec, PDO::PARAM_STR);
                        break;
                    case '`unitland`':
                        $stmt->bindValue($identifier, $this->unitland, PDO::PARAM_STR);
                        break;
                    case '`agerecdat`':
                        $stmt->bindValue($identifier, $this->agerecdat, PDO::PARAM_STR);
                        break;
                    case '`eggdiam`':
                        $stmt->bindValue($identifier, $this->eggdiam, PDO::PARAM_STR);
                        break;
                    case '`lhatch`':
                        $stmt->bindValue($identifier, $this->lhatch, PDO::PARAM_STR);
                        break;
                    case '`lmeta`':
                        $stmt->bindValue($identifier, $this->lmeta, PDO::PARAM_STR);
                        break;
                    case '`deltal`':
                        $stmt->bindValue($identifier, $this->deltal, PDO::PARAM_STR);
                        break;
                    case '`deltan`':
                        $stmt->bindValue($identifier, $this->deltan, PDO::PARAM_STR);
                        break;
                    case '`monthspa`':
                        $stmt->bindValue($identifier, $this->monthspa, PDO::PARAM_STR);
                        break;
                    case '`spawnmnth`':
                        $stmt->bindValue($identifier, $this->spawnmnth, PDO::PARAM_STR);
                        break;
                    case '`natmort`':
                        $stmt->bindValue($identifier, $this->natmort, PDO::PARAM_STR);
                        break;
                    case '`f01`':
                        $stmt->bindValue($identifier, $this->f01, PDO::PARAM_STR);
                        break;
                    case '`fmax`':
                        $stmt->bindValue($identifier, $this->fmax, PDO::PARAM_STR);
                        break;
                    case '`fmed`':
                        $stmt->bindValue($identifier, $this->fmed, PDO::PARAM_STR);
                        break;
                    case '`kgprecf0`':
                        $stmt->bindValue($identifier, $this->kgprecf0, PDO::PARAM_STR);
                        break;
                    case '`spawnloc`':
                        $stmt->bindValue($identifier, $this->spawnloc, PDO::PARAM_STR);
                        break;
                    case '`eggtype`':
                        $stmt->bindValue($identifier, $this->eggtype, PDO::PARAM_STR);
                        break;
                    case '`Feedtype`':
                        $stmt->bindValue($identifier, $this->feedtype, PDO::PARAM_STR);
                        break;
                    case '`sourcemat`':
                        $stmt->bindValue($identifier, $this->sourcemat, PDO::PARAM_STR);
                        break;
                    case '`lenmat`':
                        $stmt->bindValue($identifier, $this->lenmat, PDO::PARAM_STR);
                        break;
                    case '`lenmatm`':
                        $stmt->bindValue($identifier, $this->lenmatm, PDO::PARAM_STR);
                        break;
                    case '`lenmatf`':
                        $stmt->bindValue($identifier, $this->lenmatf, PDO::PARAM_STR);
                        break;
                    case '`tm`':
                        $stmt->bindValue($identifier, $this->tm, PDO::PARAM_STR);
                        break;
                    case '`tmRef`':
                        $stmt->bindValue($identifier, $this->tmref, PDO::PARAM_INT);
                        break;
                    case '`agemat`':
                        $stmt->bindValue($identifier, $this->agemat, PDO::PARAM_STR);
                        break;
                    case '`agematm`':
                        $stmt->bindValue($identifier, $this->agematm, PDO::PARAM_STR);
                        break;
                    case '`agematf`':
                        $stmt->bindValue($identifier, $this->agematf, PDO::PARAM_STR);
                        break;
                    case '`lenrec`':
                        $stmt->bindValue($identifier, $this->lenrec, PDO::PARAM_STR);
                        break;
                    case '`agerec`':
                        $stmt->bindValue($identifier, $this->agerec, PDO::PARAM_STR);
                        break;
                    case '`agerecm`':
                        $stmt->bindValue($identifier, $this->agerecm, PDO::PARAM_STR);
                        break;
                    case '`agerecf`':
                        $stmt->bindValue($identifier, $this->agerecf, PDO::PARAM_STR);
                        break;
                    case '`Loo`':
                        $stmt->bindValue($identifier, $this->loo, PDO::PARAM_STR);
                        break;
                    case '`K`':
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`GrowthRef`':
                        $stmt->bindValue($identifier, $this->growthref, PDO::PARAM_INT);
                        break;
                    case '`sourcegro`':
                        $stmt->bindValue($identifier, $this->sourcegro, PDO::PARAM_STR);
                        break;
                    case '`linfin`':
                        $stmt->bindValue($identifier, $this->linfin, PDO::PARAM_STR);
                        break;
                    case '`kram`':
                        $stmt->bindValue($identifier, $this->kram, PDO::PARAM_STR);
                        break;
                    case '`to`':
                        $stmt->bindValue($identifier, $this->to, PDO::PARAM_STR);
                        break;
                    case '`linfinm`':
                        $stmt->bindValue($identifier, $this->linfinm, PDO::PARAM_STR);
                        break;
                    case '`kM`':
                        $stmt->bindValue($identifier, $this->km, PDO::PARAM_STR);
                        break;
                    case '`toM`':
                        $stmt->bindValue($identifier, $this->tom, PDO::PARAM_STR);
                        break;
                    case '`linfinf`':
                        $stmt->bindValue($identifier, $this->linfinf, PDO::PARAM_STR);
                        break;
                    case '`kF`':
                        $stmt->bindValue($identifier, $this->kf, PDO::PARAM_STR);
                        break;
                    case '`toF`':
                        $stmt->bindValue($identifier, $this->tof, PDO::PARAM_STR);
                        break;
                    case '`sourceab`':
                        $stmt->bindValue($identifier, $this->sourceab, PDO::PARAM_STR);
                        break;
                    case '`altwtpar`':
                        $stmt->bindValue($identifier, $this->altwtpar, PDO::PARAM_STR);
                        break;
                    case '`bltwtpar`':
                        $stmt->bindValue($identifier, $this->bltwtpar, PDO::PARAM_STR);
                        break;
                    case '`altwtparm`':
                        $stmt->bindValue($identifier, $this->altwtparm, PDO::PARAM_STR);
                        break;
                    case '`bltwtparm`':
                        $stmt->bindValue($identifier, $this->bltwtparm, PDO::PARAM_STR);
                        break;
                    case '`altwtparf`':
                        $stmt->bindValue($identifier, $this->altwtparf, PDO::PARAM_STR);
                        break;
                    case '`bltwtparf`':
                        $stmt->bindValue($identifier, $this->bltwtparf, PDO::PARAM_STR);
                        break;
                    case '`entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`datechecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
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


            if (($retval = MyersrecruitmentdatabasePeer::doValidate($this, $columns)) !== true) {
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
        $pos = MyersrecruitmentdatabasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReclag();
                break;
            case 2:
                return $this->getSp();
                break;
            case 3:
                return $this->getGenusused();
                break;
            case 4:
                return $this->getSpeciesused();
                break;
            case 5:
                return $this->getSpeccode();
                break;
            case 6:
                return $this->getStockcode();
                break;
            case 7:
                return $this->getFamily();
                break;
            case 8:
                return $this->getCfamily();
                break;
            case 9:
                return $this->getOrder();
                break;
            case 10:
                return $this->getStockorig();
                break;
            case 11:
                return $this->getStock();
                break;
            case 12:
                return $this->getCCode();
                break;
            case 13:
                return $this->getAreacode();
                break;
            case 14:
                return $this->getArea();
                break;
            case 15:
                return $this->getUnit();
                break;
            case 16:
                return $this->getLatitude2();
                break;
            case 17:
                return $this->getNs();
                break;
            case 18:
                return $this->getLongitude2();
                break;
            case 19:
                return $this->getWe();
                break;
            case 20:
                return $this->getSource();
                break;
            case 21:
                return $this->getMainref();
                break;
            case 22:
                return $this->getDataref();
                break;
            case 23:
                return $this->getCvrec();
                break;
            case 24:
                return $this->getComments();
                break;
            case 25:
                return $this->getComments2();
                break;
            case 26:
                return $this->getCommentsn();
                break;
            case 27:
                return $this->getAreatxt();
                break;
            case 28:
                return $this->getFage();
                break;
            case 29:
                return $this->getMethod();
                break;
            case 30:
                return $this->getMethod2();
                break;
            case 31:
                return $this->getUnitssb();
                break;
            case 32:
                return $this->getUnitrec();
                break;
            case 33:
                return $this->getUnitland();
                break;
            case 34:
                return $this->getAgerecdat();
                break;
            case 35:
                return $this->getEggdiam();
                break;
            case 36:
                return $this->getLhatch();
                break;
            case 37:
                return $this->getLmeta();
                break;
            case 38:
                return $this->getDeltal();
                break;
            case 39:
                return $this->getDeltan();
                break;
            case 40:
                return $this->getMonthspa();
                break;
            case 41:
                return $this->getSpawnmnth();
                break;
            case 42:
                return $this->getNatmort();
                break;
            case 43:
                return $this->getF01();
                break;
            case 44:
                return $this->getFmax();
                break;
            case 45:
                return $this->getFmed();
                break;
            case 46:
                return $this->getKgprecf0();
                break;
            case 47:
                return $this->getSpawnloc();
                break;
            case 48:
                return $this->getEggtype();
                break;
            case 49:
                return $this->getFeedtype();
                break;
            case 50:
                return $this->getSourcemat();
                break;
            case 51:
                return $this->getLenmat();
                break;
            case 52:
                return $this->getLenmatm();
                break;
            case 53:
                return $this->getLenmatf();
                break;
            case 54:
                return $this->getTm();
                break;
            case 55:
                return $this->getTmref();
                break;
            case 56:
                return $this->getAgemat();
                break;
            case 57:
                return $this->getAgematm();
                break;
            case 58:
                return $this->getAgematf();
                break;
            case 59:
                return $this->getLenrec();
                break;
            case 60:
                return $this->getAgerec();
                break;
            case 61:
                return $this->getAgerecm();
                break;
            case 62:
                return $this->getAgerecf();
                break;
            case 63:
                return $this->getLoo();
                break;
            case 64:
                return $this->getK();
                break;
            case 65:
                return $this->getLengthtype();
                break;
            case 66:
                return $this->getGrowthref();
                break;
            case 67:
                return $this->getSourcegro();
                break;
            case 68:
                return $this->getLinfin();
                break;
            case 69:
                return $this->getKram();
                break;
            case 70:
                return $this->getTo();
                break;
            case 71:
                return $this->getLinfinm();
                break;
            case 72:
                return $this->getKm();
                break;
            case 73:
                return $this->getTom();
                break;
            case 74:
                return $this->getLinfinf();
                break;
            case 75:
                return $this->getKf();
                break;
            case 76:
                return $this->getTof();
                break;
            case 77:
                return $this->getSourceab();
                break;
            case 78:
                return $this->getAltwtpar();
                break;
            case 79:
                return $this->getBltwtpar();
                break;
            case 80:
                return $this->getAltwtparm();
                break;
            case 81:
                return $this->getBltwtparm();
                break;
            case 82:
                return $this->getAltwtparf();
                break;
            case 83:
                return $this->getBltwtparf();
                break;
            case 84:
                return $this->getEntered();
                break;
            case 85:
                return $this->getDateentered();
                break;
            case 86:
                return $this->getModified();
                break;
            case 87:
                return $this->getDatemodified();
                break;
            case 88:
                return $this->getExpert();
                break;
            case 89:
                return $this->getDatechecked();
                break;
            case 90:
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
        if (isset($alreadyDumpedObjects['Myersrecruitmentdatabase'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Myersrecruitmentdatabase'][$this->getPrimaryKey()] = true;
        $keys = MyersrecruitmentdatabasePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getReclag(),
            $keys[2] => $this->getSp(),
            $keys[3] => $this->getGenusused(),
            $keys[4] => $this->getSpeciesused(),
            $keys[5] => $this->getSpeccode(),
            $keys[6] => $this->getStockcode(),
            $keys[7] => $this->getFamily(),
            $keys[8] => $this->getCfamily(),
            $keys[9] => $this->getOrder(),
            $keys[10] => $this->getStockorig(),
            $keys[11] => $this->getStock(),
            $keys[12] => $this->getCCode(),
            $keys[13] => $this->getAreacode(),
            $keys[14] => $this->getArea(),
            $keys[15] => $this->getUnit(),
            $keys[16] => $this->getLatitude2(),
            $keys[17] => $this->getNs(),
            $keys[18] => $this->getLongitude2(),
            $keys[19] => $this->getWe(),
            $keys[20] => $this->getSource(),
            $keys[21] => $this->getMainref(),
            $keys[22] => $this->getDataref(),
            $keys[23] => $this->getCvrec(),
            $keys[24] => $this->getComments(),
            $keys[25] => $this->getComments2(),
            $keys[26] => $this->getCommentsn(),
            $keys[27] => $this->getAreatxt(),
            $keys[28] => $this->getFage(),
            $keys[29] => $this->getMethod(),
            $keys[30] => $this->getMethod2(),
            $keys[31] => $this->getUnitssb(),
            $keys[32] => $this->getUnitrec(),
            $keys[33] => $this->getUnitland(),
            $keys[34] => $this->getAgerecdat(),
            $keys[35] => $this->getEggdiam(),
            $keys[36] => $this->getLhatch(),
            $keys[37] => $this->getLmeta(),
            $keys[38] => $this->getDeltal(),
            $keys[39] => $this->getDeltan(),
            $keys[40] => $this->getMonthspa(),
            $keys[41] => $this->getSpawnmnth(),
            $keys[42] => $this->getNatmort(),
            $keys[43] => $this->getF01(),
            $keys[44] => $this->getFmax(),
            $keys[45] => $this->getFmed(),
            $keys[46] => $this->getKgprecf0(),
            $keys[47] => $this->getSpawnloc(),
            $keys[48] => $this->getEggtype(),
            $keys[49] => $this->getFeedtype(),
            $keys[50] => $this->getSourcemat(),
            $keys[51] => $this->getLenmat(),
            $keys[52] => $this->getLenmatm(),
            $keys[53] => $this->getLenmatf(),
            $keys[54] => $this->getTm(),
            $keys[55] => $this->getTmref(),
            $keys[56] => $this->getAgemat(),
            $keys[57] => $this->getAgematm(),
            $keys[58] => $this->getAgematf(),
            $keys[59] => $this->getLenrec(),
            $keys[60] => $this->getAgerec(),
            $keys[61] => $this->getAgerecm(),
            $keys[62] => $this->getAgerecf(),
            $keys[63] => $this->getLoo(),
            $keys[64] => $this->getK(),
            $keys[65] => $this->getLengthtype(),
            $keys[66] => $this->getGrowthref(),
            $keys[67] => $this->getSourcegro(),
            $keys[68] => $this->getLinfin(),
            $keys[69] => $this->getKram(),
            $keys[70] => $this->getTo(),
            $keys[71] => $this->getLinfinm(),
            $keys[72] => $this->getKm(),
            $keys[73] => $this->getTom(),
            $keys[74] => $this->getLinfinf(),
            $keys[75] => $this->getKf(),
            $keys[76] => $this->getTof(),
            $keys[77] => $this->getSourceab(),
            $keys[78] => $this->getAltwtpar(),
            $keys[79] => $this->getBltwtpar(),
            $keys[80] => $this->getAltwtparm(),
            $keys[81] => $this->getBltwtparm(),
            $keys[82] => $this->getAltwtparf(),
            $keys[83] => $this->getBltwtparf(),
            $keys[84] => $this->getEntered(),
            $keys[85] => $this->getDateentered(),
            $keys[86] => $this->getModified(),
            $keys[87] => $this->getDatemodified(),
            $keys[88] => $this->getExpert(),
            $keys[89] => $this->getDatechecked(),
            $keys[90] => $this->getTs(),
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
        $pos = MyersrecruitmentdatabasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReclag($value);
                break;
            case 2:
                $this->setSp($value);
                break;
            case 3:
                $this->setGenusused($value);
                break;
            case 4:
                $this->setSpeciesused($value);
                break;
            case 5:
                $this->setSpeccode($value);
                break;
            case 6:
                $this->setStockcode($value);
                break;
            case 7:
                $this->setFamily($value);
                break;
            case 8:
                $this->setCfamily($value);
                break;
            case 9:
                $this->setOrder($value);
                break;
            case 10:
                $this->setStockorig($value);
                break;
            case 11:
                $this->setStock($value);
                break;
            case 12:
                $this->setCCode($value);
                break;
            case 13:
                $this->setAreacode($value);
                break;
            case 14:
                $this->setArea($value);
                break;
            case 15:
                $this->setUnit($value);
                break;
            case 16:
                $this->setLatitude2($value);
                break;
            case 17:
                $this->setNs($value);
                break;
            case 18:
                $this->setLongitude2($value);
                break;
            case 19:
                $this->setWe($value);
                break;
            case 20:
                $this->setSource($value);
                break;
            case 21:
                $this->setMainref($value);
                break;
            case 22:
                $this->setDataref($value);
                break;
            case 23:
                $this->setCvrec($value);
                break;
            case 24:
                $this->setComments($value);
                break;
            case 25:
                $this->setComments2($value);
                break;
            case 26:
                $this->setCommentsn($value);
                break;
            case 27:
                $this->setAreatxt($value);
                break;
            case 28:
                $this->setFage($value);
                break;
            case 29:
                $this->setMethod($value);
                break;
            case 30:
                $this->setMethod2($value);
                break;
            case 31:
                $this->setUnitssb($value);
                break;
            case 32:
                $this->setUnitrec($value);
                break;
            case 33:
                $this->setUnitland($value);
                break;
            case 34:
                $this->setAgerecdat($value);
                break;
            case 35:
                $this->setEggdiam($value);
                break;
            case 36:
                $this->setLhatch($value);
                break;
            case 37:
                $this->setLmeta($value);
                break;
            case 38:
                $this->setDeltal($value);
                break;
            case 39:
                $this->setDeltan($value);
                break;
            case 40:
                $this->setMonthspa($value);
                break;
            case 41:
                $this->setSpawnmnth($value);
                break;
            case 42:
                $this->setNatmort($value);
                break;
            case 43:
                $this->setF01($value);
                break;
            case 44:
                $this->setFmax($value);
                break;
            case 45:
                $this->setFmed($value);
                break;
            case 46:
                $this->setKgprecf0($value);
                break;
            case 47:
                $this->setSpawnloc($value);
                break;
            case 48:
                $this->setEggtype($value);
                break;
            case 49:
                $this->setFeedtype($value);
                break;
            case 50:
                $this->setSourcemat($value);
                break;
            case 51:
                $this->setLenmat($value);
                break;
            case 52:
                $this->setLenmatm($value);
                break;
            case 53:
                $this->setLenmatf($value);
                break;
            case 54:
                $this->setTm($value);
                break;
            case 55:
                $this->setTmref($value);
                break;
            case 56:
                $this->setAgemat($value);
                break;
            case 57:
                $this->setAgematm($value);
                break;
            case 58:
                $this->setAgematf($value);
                break;
            case 59:
                $this->setLenrec($value);
                break;
            case 60:
                $this->setAgerec($value);
                break;
            case 61:
                $this->setAgerecm($value);
                break;
            case 62:
                $this->setAgerecf($value);
                break;
            case 63:
                $this->setLoo($value);
                break;
            case 64:
                $this->setK($value);
                break;
            case 65:
                $this->setLengthtype($value);
                break;
            case 66:
                $this->setGrowthref($value);
                break;
            case 67:
                $this->setSourcegro($value);
                break;
            case 68:
                $this->setLinfin($value);
                break;
            case 69:
                $this->setKram($value);
                break;
            case 70:
                $this->setTo($value);
                break;
            case 71:
                $this->setLinfinm($value);
                break;
            case 72:
                $this->setKm($value);
                break;
            case 73:
                $this->setTom($value);
                break;
            case 74:
                $this->setLinfinf($value);
                break;
            case 75:
                $this->setKf($value);
                break;
            case 76:
                $this->setTof($value);
                break;
            case 77:
                $this->setSourceab($value);
                break;
            case 78:
                $this->setAltwtpar($value);
                break;
            case 79:
                $this->setBltwtpar($value);
                break;
            case 80:
                $this->setAltwtparm($value);
                break;
            case 81:
                $this->setBltwtparm($value);
                break;
            case 82:
                $this->setAltwtparf($value);
                break;
            case 83:
                $this->setBltwtparf($value);
                break;
            case 84:
                $this->setEntered($value);
                break;
            case 85:
                $this->setDateentered($value);
                break;
            case 86:
                $this->setModified($value);
                break;
            case 87:
                $this->setDatemodified($value);
                break;
            case 88:
                $this->setExpert($value);
                break;
            case 89:
                $this->setDatechecked($value);
                break;
            case 90:
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
        $keys = MyersrecruitmentdatabasePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setReclag($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSp($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGenusused($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpeciesused($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSpeccode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStockcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFamily($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCfamily($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOrder($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStockorig($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStock($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCCode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAreacode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setArea($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setUnit($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLatitude2($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNs($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLongitude2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWe($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSource($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMainref($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDataref($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCvrec($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setComments($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setComments2($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCommentsn($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAreatxt($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFage($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMethod($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setMethod2($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setUnitssb($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setUnitrec($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setUnitland($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAgerecdat($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEggdiam($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLhatch($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLmeta($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDeltal($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDeltan($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setMonthspa($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setSpawnmnth($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setNatmort($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setF01($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFmax($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setFmed($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setKgprecf0($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setSpawnloc($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setEggtype($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setFeedtype($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setSourcemat($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLenmat($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setLenmatm($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLenmatf($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setTm($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTmref($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setAgemat($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setAgematm($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setAgematf($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setLenrec($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setAgerec($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setAgerecm($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setAgerecf($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setLoo($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setK($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setLengthtype($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setGrowthref($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setSourcegro($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setLinfin($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setKram($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setTo($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setLinfinm($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setKm($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setTom($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setLinfinf($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setKf($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setTof($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setSourceab($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setAltwtpar($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setBltwtpar($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setAltwtparm($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setBltwtparm($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setAltwtparf($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setBltwtparf($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setEntered($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setDateentered($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setModified($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setDatemodified($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setExpert($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setDatechecked($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setTs($arr[$keys[90]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);

        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ID)) $criteria->add(MyersrecruitmentdatabasePeer::ID, $this->id);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::RECLAG)) $criteria->add(MyersrecruitmentdatabasePeer::RECLAG, $this->reclag);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SP)) $criteria->add(MyersrecruitmentdatabasePeer::SP, $this->sp);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::GENUSUSED)) $criteria->add(MyersrecruitmentdatabasePeer::GENUSUSED, $this->genusused);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPECIESUSED)) $criteria->add(MyersrecruitmentdatabasePeer::SPECIESUSED, $this->speciesused);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPECCODE)) $criteria->add(MyersrecruitmentdatabasePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCKCODE)) $criteria->add(MyersrecruitmentdatabasePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FAMILY)) $criteria->add(MyersrecruitmentdatabasePeer::FAMILY, $this->family);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::CFAMILY)) $criteria->add(MyersrecruitmentdatabasePeer::CFAMILY, $this->cfamily);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ORDER)) $criteria->add(MyersrecruitmentdatabasePeer::ORDER, $this->order);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCKORIG)) $criteria->add(MyersrecruitmentdatabasePeer::STOCKORIG, $this->stockorig);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::STOCK)) $criteria->add(MyersrecruitmentdatabasePeer::STOCK, $this->stock);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::C_CODE)) $criteria->add(MyersrecruitmentdatabasePeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREACODE)) $criteria->add(MyersrecruitmentdatabasePeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREA)) $criteria->add(MyersrecruitmentdatabasePeer::AREA, $this->area);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNIT)) $criteria->add(MyersrecruitmentdatabasePeer::UNIT, $this->unit);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LATITUDE2)) $criteria->add(MyersrecruitmentdatabasePeer::LATITUDE2, $this->latitude2);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::NS)) $criteria->add(MyersrecruitmentdatabasePeer::NS, $this->ns);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LONGITUDE2)) $criteria->add(MyersrecruitmentdatabasePeer::LONGITUDE2, $this->longitude2);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::WE)) $criteria->add(MyersrecruitmentdatabasePeer::WE, $this->we);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCE)) $criteria->add(MyersrecruitmentdatabasePeer::SOURCE, $this->source);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MAINREF)) $criteria->add(MyersrecruitmentdatabasePeer::MAINREF, $this->mainref);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATAREF)) $criteria->add(MyersrecruitmentdatabasePeer::DATAREF, $this->dataref);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::CVREC)) $criteria->add(MyersrecruitmentdatabasePeer::CVREC, $this->cvrec);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTS)) $criteria->add(MyersrecruitmentdatabasePeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTS2)) $criteria->add(MyersrecruitmentdatabasePeer::COMMENTS2, $this->comments2);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::COMMENTSN)) $criteria->add(MyersrecruitmentdatabasePeer::COMMENTSN, $this->commentsn);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AREATXT)) $criteria->add(MyersrecruitmentdatabasePeer::AREATXT, $this->areatxt);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FAGE)) $criteria->add(MyersrecruitmentdatabasePeer::FAGE, $this->fage);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::METHOD)) $criteria->add(MyersrecruitmentdatabasePeer::METHOD, $this->method);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::METHOD2)) $criteria->add(MyersrecruitmentdatabasePeer::METHOD2, $this->method2);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITSSB)) $criteria->add(MyersrecruitmentdatabasePeer::UNITSSB, $this->unitssb);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITREC)) $criteria->add(MyersrecruitmentdatabasePeer::UNITREC, $this->unitrec);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::UNITLAND)) $criteria->add(MyersrecruitmentdatabasePeer::UNITLAND, $this->unitland);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECDAT)) $criteria->add(MyersrecruitmentdatabasePeer::AGERECDAT, $this->agerecdat);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EGGDIAM)) $criteria->add(MyersrecruitmentdatabasePeer::EGGDIAM, $this->eggdiam);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LHATCH)) $criteria->add(MyersrecruitmentdatabasePeer::LHATCH, $this->lhatch);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LMETA)) $criteria->add(MyersrecruitmentdatabasePeer::LMETA, $this->lmeta);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DELTAL)) $criteria->add(MyersrecruitmentdatabasePeer::DELTAL, $this->deltal);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DELTAN)) $criteria->add(MyersrecruitmentdatabasePeer::DELTAN, $this->deltan);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MONTHSPA)) $criteria->add(MyersrecruitmentdatabasePeer::MONTHSPA, $this->monthspa);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPAWNMNTH)) $criteria->add(MyersrecruitmentdatabasePeer::SPAWNMNTH, $this->spawnmnth);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::NATMORT)) $criteria->add(MyersrecruitmentdatabasePeer::NATMORT, $this->natmort);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::F01)) $criteria->add(MyersrecruitmentdatabasePeer::F01, $this->f01);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FMAX)) $criteria->add(MyersrecruitmentdatabasePeer::FMAX, $this->fmax);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FMED)) $criteria->add(MyersrecruitmentdatabasePeer::FMED, $this->fmed);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KGPRECF0)) $criteria->add(MyersrecruitmentdatabasePeer::KGPRECF0, $this->kgprecf0);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SPAWNLOC)) $criteria->add(MyersrecruitmentdatabasePeer::SPAWNLOC, $this->spawnloc);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EGGTYPE)) $criteria->add(MyersrecruitmentdatabasePeer::EGGTYPE, $this->eggtype);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::FEEDTYPE)) $criteria->add(MyersrecruitmentdatabasePeer::FEEDTYPE, $this->feedtype);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEMAT)) $criteria->add(MyersrecruitmentdatabasePeer::SOURCEMAT, $this->sourcemat);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMAT)) $criteria->add(MyersrecruitmentdatabasePeer::LENMAT, $this->lenmat);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMATM)) $criteria->add(MyersrecruitmentdatabasePeer::LENMATM, $this->lenmatm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENMATF)) $criteria->add(MyersrecruitmentdatabasePeer::LENMATF, $this->lenmatf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TM)) $criteria->add(MyersrecruitmentdatabasePeer::TM, $this->tm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TMREF)) $criteria->add(MyersrecruitmentdatabasePeer::TMREF, $this->tmref);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMAT)) $criteria->add(MyersrecruitmentdatabasePeer::AGEMAT, $this->agemat);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMATM)) $criteria->add(MyersrecruitmentdatabasePeer::AGEMATM, $this->agematm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEMATF)) $criteria->add(MyersrecruitmentdatabasePeer::AGEMATF, $this->agematf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENREC)) $criteria->add(MyersrecruitmentdatabasePeer::LENREC, $this->lenrec);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGEREC)) $criteria->add(MyersrecruitmentdatabasePeer::AGEREC, $this->agerec);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECM)) $criteria->add(MyersrecruitmentdatabasePeer::AGERECM, $this->agerecm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::AGERECF)) $criteria->add(MyersrecruitmentdatabasePeer::AGERECF, $this->agerecf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LOO)) $criteria->add(MyersrecruitmentdatabasePeer::LOO, $this->loo);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::K)) $criteria->add(MyersrecruitmentdatabasePeer::K, $this->k);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LENGTHTYPE)) $criteria->add(MyersrecruitmentdatabasePeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::GROWTHREF)) $criteria->add(MyersrecruitmentdatabasePeer::GROWTHREF, $this->growthref);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEGRO)) $criteria->add(MyersrecruitmentdatabasePeer::SOURCEGRO, $this->sourcegro);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFIN)) $criteria->add(MyersrecruitmentdatabasePeer::LINFIN, $this->linfin);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KRAM)) $criteria->add(MyersrecruitmentdatabasePeer::KRAM, $this->kram);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TO)) $criteria->add(MyersrecruitmentdatabasePeer::TO, $this->to);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFINM)) $criteria->add(MyersrecruitmentdatabasePeer::LINFINM, $this->linfinm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KM)) $criteria->add(MyersrecruitmentdatabasePeer::KM, $this->km);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TOM)) $criteria->add(MyersrecruitmentdatabasePeer::TOM, $this->tom);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::LINFINF)) $criteria->add(MyersrecruitmentdatabasePeer::LINFINF, $this->linfinf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::KF)) $criteria->add(MyersrecruitmentdatabasePeer::KF, $this->kf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TOF)) $criteria->add(MyersrecruitmentdatabasePeer::TOF, $this->tof);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::SOURCEAB)) $criteria->add(MyersrecruitmentdatabasePeer::SOURCEAB, $this->sourceab);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPAR)) $criteria->add(MyersrecruitmentdatabasePeer::ALTWTPAR, $this->altwtpar);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPAR)) $criteria->add(MyersrecruitmentdatabasePeer::BLTWTPAR, $this->bltwtpar);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPARM)) $criteria->add(MyersrecruitmentdatabasePeer::ALTWTPARM, $this->altwtparm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPARM)) $criteria->add(MyersrecruitmentdatabasePeer::BLTWTPARM, $this->bltwtparm);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ALTWTPARF)) $criteria->add(MyersrecruitmentdatabasePeer::ALTWTPARF, $this->altwtparf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::BLTWTPARF)) $criteria->add(MyersrecruitmentdatabasePeer::BLTWTPARF, $this->bltwtparf);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::ENTERED)) $criteria->add(MyersrecruitmentdatabasePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATEENTERED)) $criteria->add(MyersrecruitmentdatabasePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::MODIFIED)) $criteria->add(MyersrecruitmentdatabasePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATEMODIFIED)) $criteria->add(MyersrecruitmentdatabasePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::EXPERT)) $criteria->add(MyersrecruitmentdatabasePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::DATECHECKED)) $criteria->add(MyersrecruitmentdatabasePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(MyersrecruitmentdatabasePeer::TS)) $criteria->add(MyersrecruitmentdatabasePeer::TS, $this->ts);

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
        $criteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);
        $criteria->add(MyersrecruitmentdatabasePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  string $key Primary key.
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
     * @param object $copyObj An object of Myersrecruitmentdatabase (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setReclag($this->getReclag());
        $copyObj->setSp($this->getSp());
        $copyObj->setGenusused($this->getGenusused());
        $copyObj->setSpeciesused($this->getSpeciesused());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setFamily($this->getFamily());
        $copyObj->setCfamily($this->getCfamily());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setStockorig($this->getStockorig());
        $copyObj->setStock($this->getStock());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setAreacode($this->getAreacode());
        $copyObj->setArea($this->getArea());
        $copyObj->setUnit($this->getUnit());
        $copyObj->setLatitude2($this->getLatitude2());
        $copyObj->setNs($this->getNs());
        $copyObj->setLongitude2($this->getLongitude2());
        $copyObj->setWe($this->getWe());
        $copyObj->setSource($this->getSource());
        $copyObj->setMainref($this->getMainref());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setCvrec($this->getCvrec());
        $copyObj->setComments($this->getComments());
        $copyObj->setComments2($this->getComments2());
        $copyObj->setCommentsn($this->getCommentsn());
        $copyObj->setAreatxt($this->getAreatxt());
        $copyObj->setFage($this->getFage());
        $copyObj->setMethod($this->getMethod());
        $copyObj->setMethod2($this->getMethod2());
        $copyObj->setUnitssb($this->getUnitssb());
        $copyObj->setUnitrec($this->getUnitrec());
        $copyObj->setUnitland($this->getUnitland());
        $copyObj->setAgerecdat($this->getAgerecdat());
        $copyObj->setEggdiam($this->getEggdiam());
        $copyObj->setLhatch($this->getLhatch());
        $copyObj->setLmeta($this->getLmeta());
        $copyObj->setDeltal($this->getDeltal());
        $copyObj->setDeltan($this->getDeltan());
        $copyObj->setMonthspa($this->getMonthspa());
        $copyObj->setSpawnmnth($this->getSpawnmnth());
        $copyObj->setNatmort($this->getNatmort());
        $copyObj->setF01($this->getF01());
        $copyObj->setFmax($this->getFmax());
        $copyObj->setFmed($this->getFmed());
        $copyObj->setKgprecf0($this->getKgprecf0());
        $copyObj->setSpawnloc($this->getSpawnloc());
        $copyObj->setEggtype($this->getEggtype());
        $copyObj->setFeedtype($this->getFeedtype());
        $copyObj->setSourcemat($this->getSourcemat());
        $copyObj->setLenmat($this->getLenmat());
        $copyObj->setLenmatm($this->getLenmatm());
        $copyObj->setLenmatf($this->getLenmatf());
        $copyObj->setTm($this->getTm());
        $copyObj->setTmref($this->getTmref());
        $copyObj->setAgemat($this->getAgemat());
        $copyObj->setAgematm($this->getAgematm());
        $copyObj->setAgematf($this->getAgematf());
        $copyObj->setLenrec($this->getLenrec());
        $copyObj->setAgerec($this->getAgerec());
        $copyObj->setAgerecm($this->getAgerecm());
        $copyObj->setAgerecf($this->getAgerecf());
        $copyObj->setLoo($this->getLoo());
        $copyObj->setK($this->getK());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setGrowthref($this->getGrowthref());
        $copyObj->setSourcegro($this->getSourcegro());
        $copyObj->setLinfin($this->getLinfin());
        $copyObj->setKram($this->getKram());
        $copyObj->setTo($this->getTo());
        $copyObj->setLinfinm($this->getLinfinm());
        $copyObj->setKm($this->getKm());
        $copyObj->setTom($this->getTom());
        $copyObj->setLinfinf($this->getLinfinf());
        $copyObj->setKf($this->getKf());
        $copyObj->setTof($this->getTof());
        $copyObj->setSourceab($this->getSourceab());
        $copyObj->setAltwtpar($this->getAltwtpar());
        $copyObj->setBltwtpar($this->getBltwtpar());
        $copyObj->setAltwtparm($this->getAltwtparm());
        $copyObj->setBltwtparm($this->getBltwtparm());
        $copyObj->setAltwtparf($this->getAltwtparf());
        $copyObj->setBltwtparf($this->getBltwtparf());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return Myersrecruitmentdatabase Clone of current object.
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
     * @return MyersrecruitmentdatabasePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MyersrecruitmentdatabasePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->reclag = null;
        $this->sp = null;
        $this->genusused = null;
        $this->speciesused = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->family = null;
        $this->cfamily = null;
        $this->order = null;
        $this->stockorig = null;
        $this->stock = null;
        $this->c_code = null;
        $this->areacode = null;
        $this->area = null;
        $this->unit = null;
        $this->latitude2 = null;
        $this->ns = null;
        $this->longitude2 = null;
        $this->we = null;
        $this->source = null;
        $this->mainref = null;
        $this->dataref = null;
        $this->cvrec = null;
        $this->comments = null;
        $this->comments2 = null;
        $this->commentsn = null;
        $this->areatxt = null;
        $this->fage = null;
        $this->method = null;
        $this->method2 = null;
        $this->unitssb = null;
        $this->unitrec = null;
        $this->unitland = null;
        $this->agerecdat = null;
        $this->eggdiam = null;
        $this->lhatch = null;
        $this->lmeta = null;
        $this->deltal = null;
        $this->deltan = null;
        $this->monthspa = null;
        $this->spawnmnth = null;
        $this->natmort = null;
        $this->f01 = null;
        $this->fmax = null;
        $this->fmed = null;
        $this->kgprecf0 = null;
        $this->spawnloc = null;
        $this->eggtype = null;
        $this->feedtype = null;
        $this->sourcemat = null;
        $this->lenmat = null;
        $this->lenmatm = null;
        $this->lenmatf = null;
        $this->tm = null;
        $this->tmref = null;
        $this->agemat = null;
        $this->agematm = null;
        $this->agematf = null;
        $this->lenrec = null;
        $this->agerec = null;
        $this->agerecm = null;
        $this->agerecf = null;
        $this->loo = null;
        $this->k = null;
        $this->lengthtype = null;
        $this->growthref = null;
        $this->sourcegro = null;
        $this->linfin = null;
        $this->kram = null;
        $this->to = null;
        $this->linfinm = null;
        $this->km = null;
        $this->tom = null;
        $this->linfinf = null;
        $this->kf = null;
        $this->tof = null;
        $this->sourceab = null;
        $this->altwtpar = null;
        $this->bltwtpar = null;
        $this->altwtparm = null;
        $this->bltwtparm = null;
        $this->altwtparf = null;
        $this->bltwtparf = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(MyersrecruitmentdatabasePeer::DEFAULT_STRING_FORMAT);
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
