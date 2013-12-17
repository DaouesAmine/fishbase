<?php


/**
 * Base class that represents a query for the 'poplf' table.
 *
 *
 *
 * @method PoplfQuery orderByLfcode($order = Criteria::ASC) Order by the LFCode column
 * @method PoplfQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method PoplfQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method PoplfQuery orderByLfrefno($order = Criteria::ASC) Order by the LFRefno column
 * @method PoplfQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method PoplfQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PoplfQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PoplfQuery orderByLatdeg($order = Criteria::ASC) Order by the LatDeg column
 * @method PoplfQuery orderByLatmin($order = Criteria::ASC) Order by the LatMin column
 * @method PoplfQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method PoplfQuery orderByLatdegs($order = Criteria::ASC) Order by the LatDegS column
 * @method PoplfQuery orderByLatmins($order = Criteria::ASC) Order by the LatMinS column
 * @method PoplfQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method PoplfQuery orderByLongdeg($order = Criteria::ASC) Order by the LongDeg column
 * @method PoplfQuery orderByLongmin($order = Criteria::ASC) Order by the LongMin column
 * @method PoplfQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method PoplfQuery orderByLongdege($order = Criteria::ASC) Order by the LongDegE column
 * @method PoplfQuery orderByLongmine($order = Criteria::ASC) Order by the LongMinE column
 * @method PoplfQuery orderByEastweste($order = Criteria::ASC) Order by the EastWestE column
 * @method PoplfQuery orderByAccuracy($order = Criteria::ASC) Order by the Accuracy column
 * @method PoplfQuery orderByDepthmin($order = Criteria::ASC) Order by the DepthMin column
 * @method PoplfQuery orderByDepthmax($order = Criteria::ASC) Order by the DepthMax column
 * @method PoplfQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method PoplfQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method PoplfQuery orderByMlmin($order = Criteria::ASC) Order by the MLMin column
 * @method PoplfQuery orderByMlmax($order = Criteria::ASC) Order by the MLMax column
 * @method PoplfQuery orderByMeanlength($order = Criteria::ASC) Order by the MeanLength column
 * @method PoplfQuery orderByLm($order = Criteria::ASC) Order by the Lm column
 * @method PoplfQuery orderByLoo($order = Criteria::ASC) Order by the Loo column
 * @method PoplfQuery orderByLopt($order = Criteria::ASC) Order by the Lopt column
 * @method PoplfQuery orderByLc($order = Criteria::ASC) Order by the Lc column
 * @method PoplfQuery orderBySourcelinf($order = Criteria::ASC) Order by the SourceLinf column
 * @method PoplfQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method PoplfQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PoplfQuery orderByLwref($order = Criteria::ASC) Order by the LWRef column
 * @method PoplfQuery orderByLtype($order = Criteria::ASC) Order by the LType column
 * @method PoplfQuery orderByF($order = Criteria::ASC) Order by the F column
 * @method PoplfQuery orderByZ($order = Criteria::ASC) Order by the Z column
 * @method PoplfQuery orderByE($order = Criteria::ASC) Order by the E column
 * @method PoplfQuery orderByM($order = Criteria::ASC) Order by the M column
 * @method PoplfQuery orderByUnexploited($order = Criteria::ASC) Order by the Unexploited column
 * @method PoplfQuery orderByDatatype($order = Criteria::ASC) Order by the DataType column
 * @method PoplfQuery orderByGrowthloo($order = Criteria::ASC) Order by the GrowthLoo column
 * @method PoplfQuery orderByGrowthk($order = Criteria::ASC) Order by the GrowthK column
 * @method PoplfQuery orderByGrowthref($order = Criteria::ASC) Order by the GrowthRef column
 * @method PoplfQuery orderByGrowthm($order = Criteria::ASC) Order by the GrowthM column
 * @method PoplfQuery orderByGrowthmref($order = Criteria::ASC) Order by the GrowthMRef column
 * @method PoplfQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method PoplfQuery orderByFrequencytype($order = Criteria::ASC) Order by the FrequencyType column
 * @method PoplfQuery orderByClassinterval($order = Criteria::ASC) Order by the ClassInterval column
 * @method PoplfQuery orderByGear($order = Criteria::ASC) Order by the Gear column
 * @method PoplfQuery orderByGearii($order = Criteria::ASC) Order by the GearII column
 * @method PoplfQuery orderByYearfrom($order = Criteria::ASC) Order by the YearFrom column
 * @method PoplfQuery orderByYearto($order = Criteria::ASC) Order by the YearTo column
 * @method PoplfQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method PoplfQuery orderByProvider($order = Criteria::ASC) Order by the Provider column
 * @method PoplfQuery orderByEmail($order = Criteria::ASC) Order by the EMail column
 * @method PoplfQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PoplfQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PoplfQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PoplfQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PoplfQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PoplfQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PoplfQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PoplfQuery groupByLfcode() Group by the LFCode column
 * @method PoplfQuery groupByStockcode() Group by the Stockcode column
 * @method PoplfQuery groupBySpeccode() Group by the Speccode column
 * @method PoplfQuery groupByLfrefno() Group by the LFRefno column
 * @method PoplfQuery groupBySex() Group by the Sex column
 * @method PoplfQuery groupByLocality() Group by the Locality column
 * @method PoplfQuery groupByCCode() Group by the C_Code column
 * @method PoplfQuery groupByLatdeg() Group by the LatDeg column
 * @method PoplfQuery groupByLatmin() Group by the LatMin column
 * @method PoplfQuery groupByNorthsouth() Group by the NorthSouth column
 * @method PoplfQuery groupByLatdegs() Group by the LatDegS column
 * @method PoplfQuery groupByLatmins() Group by the LatMinS column
 * @method PoplfQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method PoplfQuery groupByLongdeg() Group by the LongDeg column
 * @method PoplfQuery groupByLongmin() Group by the LongMin column
 * @method PoplfQuery groupByEastwest() Group by the EastWest column
 * @method PoplfQuery groupByLongdege() Group by the LongDegE column
 * @method PoplfQuery groupByLongmine() Group by the LongMinE column
 * @method PoplfQuery groupByEastweste() Group by the EastWestE column
 * @method PoplfQuery groupByAccuracy() Group by the Accuracy column
 * @method PoplfQuery groupByDepthmin() Group by the DepthMin column
 * @method PoplfQuery groupByDepthmax() Group by the DepthMax column
 * @method PoplfQuery groupByTempmin() Group by the TempMin column
 * @method PoplfQuery groupByTempmax() Group by the TempMax column
 * @method PoplfQuery groupByMlmin() Group by the MLMin column
 * @method PoplfQuery groupByMlmax() Group by the MLMax column
 * @method PoplfQuery groupByMeanlength() Group by the MeanLength column
 * @method PoplfQuery groupByLm() Group by the Lm column
 * @method PoplfQuery groupByLoo() Group by the Loo column
 * @method PoplfQuery groupByLopt() Group by the Lopt column
 * @method PoplfQuery groupByLc() Group by the Lc column
 * @method PoplfQuery groupBySourcelinf() Group by the SourceLinf column
 * @method PoplfQuery groupByA() Group by the a column
 * @method PoplfQuery groupByB() Group by the b column
 * @method PoplfQuery groupByLwref() Group by the LWRef column
 * @method PoplfQuery groupByLtype() Group by the LType column
 * @method PoplfQuery groupByF() Group by the F column
 * @method PoplfQuery groupByZ() Group by the Z column
 * @method PoplfQuery groupByE() Group by the E column
 * @method PoplfQuery groupByM() Group by the M column
 * @method PoplfQuery groupByUnexploited() Group by the Unexploited column
 * @method PoplfQuery groupByDatatype() Group by the DataType column
 * @method PoplfQuery groupByGrowthloo() Group by the GrowthLoo column
 * @method PoplfQuery groupByGrowthk() Group by the GrowthK column
 * @method PoplfQuery groupByGrowthref() Group by the GrowthRef column
 * @method PoplfQuery groupByGrowthm() Group by the GrowthM column
 * @method PoplfQuery groupByGrowthmref() Group by the GrowthMRef column
 * @method PoplfQuery groupByTm() Group by the tm column
 * @method PoplfQuery groupByFrequencytype() Group by the FrequencyType column
 * @method PoplfQuery groupByClassinterval() Group by the ClassInterval column
 * @method PoplfQuery groupByGear() Group by the Gear column
 * @method PoplfQuery groupByGearii() Group by the GearII column
 * @method PoplfQuery groupByYearfrom() Group by the YearFrom column
 * @method PoplfQuery groupByYearto() Group by the YearTo column
 * @method PoplfQuery groupByRemark() Group by the Remark column
 * @method PoplfQuery groupByProvider() Group by the Provider column
 * @method PoplfQuery groupByEmail() Group by the EMail column
 * @method PoplfQuery groupByEntered() Group by the Entered column
 * @method PoplfQuery groupByDateentered() Group by the DateEntered column
 * @method PoplfQuery groupByModified() Group by the Modified column
 * @method PoplfQuery groupByDatemodified() Group by the DateModified column
 * @method PoplfQuery groupByExpert() Group by the Expert column
 * @method PoplfQuery groupByDatechecked() Group by the DateChecked column
 * @method PoplfQuery groupByTs() Group by the TS column
 *
 * @method PoplfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PoplfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PoplfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Poplf findOne(PropelPDO $con = null) Return the first Poplf matching the query
 * @method Poplf findOneOrCreate(PropelPDO $con = null) Return the first Poplf matching the query, or a new Poplf object populated from the query conditions when no match is found
 *
 * @method Poplf findOneByLfcode(int $LFCode) Return the first Poplf filtered by the LFCode column
 * @method Poplf findOneByStockcode(int $Stockcode) Return the first Poplf filtered by the Stockcode column
 * @method Poplf findOneBySpeccode(int $Speccode) Return the first Poplf filtered by the Speccode column
 * @method Poplf findOneByLfrefno(int $LFRefno) Return the first Poplf filtered by the LFRefno column
 * @method Poplf findOneBySex(string $Sex) Return the first Poplf filtered by the Sex column
 * @method Poplf findOneByLocality(string $Locality) Return the first Poplf filtered by the Locality column
 * @method Poplf findOneByCCode(string $C_Code) Return the first Poplf filtered by the C_Code column
 * @method Poplf findOneByLatdeg(int $LatDeg) Return the first Poplf filtered by the LatDeg column
 * @method Poplf findOneByLatmin(double $LatMin) Return the first Poplf filtered by the LatMin column
 * @method Poplf findOneByNorthsouth(string $NorthSouth) Return the first Poplf filtered by the NorthSouth column
 * @method Poplf findOneByLatdegs(int $LatDegS) Return the first Poplf filtered by the LatDegS column
 * @method Poplf findOneByLatmins(double $LatMinS) Return the first Poplf filtered by the LatMinS column
 * @method Poplf findOneByNorthsouths(string $NorthSouthS) Return the first Poplf filtered by the NorthSouthS column
 * @method Poplf findOneByLongdeg(int $LongDeg) Return the first Poplf filtered by the LongDeg column
 * @method Poplf findOneByLongmin(double $LongMin) Return the first Poplf filtered by the LongMin column
 * @method Poplf findOneByEastwest(string $EastWest) Return the first Poplf filtered by the EastWest column
 * @method Poplf findOneByLongdege(int $LongDegE) Return the first Poplf filtered by the LongDegE column
 * @method Poplf findOneByLongmine(double $LongMinE) Return the first Poplf filtered by the LongMinE column
 * @method Poplf findOneByEastweste(string $EastWestE) Return the first Poplf filtered by the EastWestE column
 * @method Poplf findOneByAccuracy(string $Accuracy) Return the first Poplf filtered by the Accuracy column
 * @method Poplf findOneByDepthmin(int $DepthMin) Return the first Poplf filtered by the DepthMin column
 * @method Poplf findOneByDepthmax(int $DepthMax) Return the first Poplf filtered by the DepthMax column
 * @method Poplf findOneByTempmin(double $TempMin) Return the first Poplf filtered by the TempMin column
 * @method Poplf findOneByTempmax(double $TempMax) Return the first Poplf filtered by the TempMax column
 * @method Poplf findOneByMlmin(double $MLMin) Return the first Poplf filtered by the MLMin column
 * @method Poplf findOneByMlmax(double $MLMax) Return the first Poplf filtered by the MLMax column
 * @method Poplf findOneByMeanlength(double $MeanLength) Return the first Poplf filtered by the MeanLength column
 * @method Poplf findOneByLm(double $Lm) Return the first Poplf filtered by the Lm column
 * @method Poplf findOneByLoo(double $Loo) Return the first Poplf filtered by the Loo column
 * @method Poplf findOneByLopt(double $Lopt) Return the first Poplf filtered by the Lopt column
 * @method Poplf findOneByLc(double $Lc) Return the first Poplf filtered by the Lc column
 * @method Poplf findOneBySourcelinf(string $SourceLinf) Return the first Poplf filtered by the SourceLinf column
 * @method Poplf findOneByA(double $a) Return the first Poplf filtered by the a column
 * @method Poplf findOneByB(double $b) Return the first Poplf filtered by the b column
 * @method Poplf findOneByLwref(int $LWRef) Return the first Poplf filtered by the LWRef column
 * @method Poplf findOneByLtype(string $LType) Return the first Poplf filtered by the LType column
 * @method Poplf findOneByF(double $F) Return the first Poplf filtered by the F column
 * @method Poplf findOneByZ(double $Z) Return the first Poplf filtered by the Z column
 * @method Poplf findOneByE(double $E) Return the first Poplf filtered by the E column
 * @method Poplf findOneByM(double $M) Return the first Poplf filtered by the M column
 * @method Poplf findOneByUnexploited(int $Unexploited) Return the first Poplf filtered by the Unexploited column
 * @method Poplf findOneByDatatype(string $DataType) Return the first Poplf filtered by the DataType column
 * @method Poplf findOneByGrowthloo(double $GrowthLoo) Return the first Poplf filtered by the GrowthLoo column
 * @method Poplf findOneByGrowthk(double $GrowthK) Return the first Poplf filtered by the GrowthK column
 * @method Poplf findOneByGrowthref(int $GrowthRef) Return the first Poplf filtered by the GrowthRef column
 * @method Poplf findOneByGrowthm(double $GrowthM) Return the first Poplf filtered by the GrowthM column
 * @method Poplf findOneByGrowthmref(int $GrowthMRef) Return the first Poplf filtered by the GrowthMRef column
 * @method Poplf findOneByTm(double $tm) Return the first Poplf filtered by the tm column
 * @method Poplf findOneByFrequencytype(string $FrequencyType) Return the first Poplf filtered by the FrequencyType column
 * @method Poplf findOneByClassinterval(double $ClassInterval) Return the first Poplf filtered by the ClassInterval column
 * @method Poplf findOneByGear(string $Gear) Return the first Poplf filtered by the Gear column
 * @method Poplf findOneByGearii(string $GearII) Return the first Poplf filtered by the GearII column
 * @method Poplf findOneByYearfrom(int $YearFrom) Return the first Poplf filtered by the YearFrom column
 * @method Poplf findOneByYearto(int $YearTo) Return the first Poplf filtered by the YearTo column
 * @method Poplf findOneByRemark(string $Remark) Return the first Poplf filtered by the Remark column
 * @method Poplf findOneByProvider(string $Provider) Return the first Poplf filtered by the Provider column
 * @method Poplf findOneByEmail(string $EMail) Return the first Poplf filtered by the EMail column
 * @method Poplf findOneByEntered(int $Entered) Return the first Poplf filtered by the Entered column
 * @method Poplf findOneByDateentered(string $DateEntered) Return the first Poplf filtered by the DateEntered column
 * @method Poplf findOneByModified(int $Modified) Return the first Poplf filtered by the Modified column
 * @method Poplf findOneByDatemodified(string $DateModified) Return the first Poplf filtered by the DateModified column
 * @method Poplf findOneByExpert(int $Expert) Return the first Poplf filtered by the Expert column
 * @method Poplf findOneByDatechecked(string $DateChecked) Return the first Poplf filtered by the DateChecked column
 * @method Poplf findOneByTs(string $TS) Return the first Poplf filtered by the TS column
 *
 * @method array findByLfcode(int $LFCode) Return Poplf objects filtered by the LFCode column
 * @method array findByStockcode(int $Stockcode) Return Poplf objects filtered by the Stockcode column
 * @method array findBySpeccode(int $Speccode) Return Poplf objects filtered by the Speccode column
 * @method array findByLfrefno(int $LFRefno) Return Poplf objects filtered by the LFRefno column
 * @method array findBySex(string $Sex) Return Poplf objects filtered by the Sex column
 * @method array findByLocality(string $Locality) Return Poplf objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Poplf objects filtered by the C_Code column
 * @method array findByLatdeg(int $LatDeg) Return Poplf objects filtered by the LatDeg column
 * @method array findByLatmin(double $LatMin) Return Poplf objects filtered by the LatMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Poplf objects filtered by the NorthSouth column
 * @method array findByLatdegs(int $LatDegS) Return Poplf objects filtered by the LatDegS column
 * @method array findByLatmins(double $LatMinS) Return Poplf objects filtered by the LatMinS column
 * @method array findByNorthsouths(string $NorthSouthS) Return Poplf objects filtered by the NorthSouthS column
 * @method array findByLongdeg(int $LongDeg) Return Poplf objects filtered by the LongDeg column
 * @method array findByLongmin(double $LongMin) Return Poplf objects filtered by the LongMin column
 * @method array findByEastwest(string $EastWest) Return Poplf objects filtered by the EastWest column
 * @method array findByLongdege(int $LongDegE) Return Poplf objects filtered by the LongDegE column
 * @method array findByLongmine(double $LongMinE) Return Poplf objects filtered by the LongMinE column
 * @method array findByEastweste(string $EastWestE) Return Poplf objects filtered by the EastWestE column
 * @method array findByAccuracy(string $Accuracy) Return Poplf objects filtered by the Accuracy column
 * @method array findByDepthmin(int $DepthMin) Return Poplf objects filtered by the DepthMin column
 * @method array findByDepthmax(int $DepthMax) Return Poplf objects filtered by the DepthMax column
 * @method array findByTempmin(double $TempMin) Return Poplf objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Poplf objects filtered by the TempMax column
 * @method array findByMlmin(double $MLMin) Return Poplf objects filtered by the MLMin column
 * @method array findByMlmax(double $MLMax) Return Poplf objects filtered by the MLMax column
 * @method array findByMeanlength(double $MeanLength) Return Poplf objects filtered by the MeanLength column
 * @method array findByLm(double $Lm) Return Poplf objects filtered by the Lm column
 * @method array findByLoo(double $Loo) Return Poplf objects filtered by the Loo column
 * @method array findByLopt(double $Lopt) Return Poplf objects filtered by the Lopt column
 * @method array findByLc(double $Lc) Return Poplf objects filtered by the Lc column
 * @method array findBySourcelinf(string $SourceLinf) Return Poplf objects filtered by the SourceLinf column
 * @method array findByA(double $a) Return Poplf objects filtered by the a column
 * @method array findByB(double $b) Return Poplf objects filtered by the b column
 * @method array findByLwref(int $LWRef) Return Poplf objects filtered by the LWRef column
 * @method array findByLtype(string $LType) Return Poplf objects filtered by the LType column
 * @method array findByF(double $F) Return Poplf objects filtered by the F column
 * @method array findByZ(double $Z) Return Poplf objects filtered by the Z column
 * @method array findByE(double $E) Return Poplf objects filtered by the E column
 * @method array findByM(double $M) Return Poplf objects filtered by the M column
 * @method array findByUnexploited(int $Unexploited) Return Poplf objects filtered by the Unexploited column
 * @method array findByDatatype(string $DataType) Return Poplf objects filtered by the DataType column
 * @method array findByGrowthloo(double $GrowthLoo) Return Poplf objects filtered by the GrowthLoo column
 * @method array findByGrowthk(double $GrowthK) Return Poplf objects filtered by the GrowthK column
 * @method array findByGrowthref(int $GrowthRef) Return Poplf objects filtered by the GrowthRef column
 * @method array findByGrowthm(double $GrowthM) Return Poplf objects filtered by the GrowthM column
 * @method array findByGrowthmref(int $GrowthMRef) Return Poplf objects filtered by the GrowthMRef column
 * @method array findByTm(double $tm) Return Poplf objects filtered by the tm column
 * @method array findByFrequencytype(string $FrequencyType) Return Poplf objects filtered by the FrequencyType column
 * @method array findByClassinterval(double $ClassInterval) Return Poplf objects filtered by the ClassInterval column
 * @method array findByGear(string $Gear) Return Poplf objects filtered by the Gear column
 * @method array findByGearii(string $GearII) Return Poplf objects filtered by the GearII column
 * @method array findByYearfrom(int $YearFrom) Return Poplf objects filtered by the YearFrom column
 * @method array findByYearto(int $YearTo) Return Poplf objects filtered by the YearTo column
 * @method array findByRemark(string $Remark) Return Poplf objects filtered by the Remark column
 * @method array findByProvider(string $Provider) Return Poplf objects filtered by the Provider column
 * @method array findByEmail(string $EMail) Return Poplf objects filtered by the EMail column
 * @method array findByEntered(int $Entered) Return Poplf objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Poplf objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Poplf objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Poplf objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Poplf objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Poplf objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Poplf objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplfQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePoplfQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'fbapp';
        }
        if (null === $modelName) {
            $modelName = 'Poplf';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PoplfQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PoplfQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PoplfQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PoplfQuery) {
            return $criteria;
        }
        $query = new PoplfQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$LFCode, $Stockcode, $Sex, $Locality, $C_Code, $Gear]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Poplf|Poplf[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PoplfPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Poplf A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LFCode`, `Stockcode`, `Speccode`, `LFRefno`, `Sex`, `Locality`, `C_Code`, `LatDeg`, `LatMin`, `NorthSouth`, `LatDegS`, `LatMinS`, `NorthSouthS`, `LongDeg`, `LongMin`, `EastWest`, `LongDegE`, `LongMinE`, `EastWestE`, `Accuracy`, `DepthMin`, `DepthMax`, `TempMin`, `TempMax`, `MLMin`, `MLMax`, `MeanLength`, `Lm`, `Loo`, `Lopt`, `Lc`, `SourceLinf`, `a`, `b`, `LWRef`, `LType`, `F`, `Z`, `E`, `M`, `Unexploited`, `DataType`, `GrowthLoo`, `GrowthK`, `GrowthRef`, `GrowthM`, `GrowthMRef`, `tm`, `FrequencyType`, `ClassInterval`, `Gear`, `GearII`, `YearFrom`, `YearTo`, `Remark`, `Provider`, `EMail`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `poplf` WHERE `LFCode` = :p0 AND `Stockcode` = :p1 AND `Sex` = :p2 AND `Locality` = :p3 AND `C_Code` = :p4 AND `Gear` = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Poplf();
            $obj->hydrate($row);
            PoplfPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Poplf|Poplf[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Poplf[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PoplfPeer::LFCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PoplfPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PoplfPeer::SEX, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PoplfPeer::LOCALITY, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(PoplfPeer::C_CODE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(PoplfPeer::GEAR, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PoplfPeer::LFCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PoplfPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PoplfPeer::SEX, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PoplfPeer::LOCALITY, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(PoplfPeer::C_CODE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(PoplfPeer::GEAR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LFCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLfcode(1234); // WHERE LFCode = 1234
     * $query->filterByLfcode(array(12, 34)); // WHERE LFCode IN (12, 34)
     * $query->filterByLfcode(array('min' => 12)); // WHERE LFCode >= 12
     * $query->filterByLfcode(array('max' => 12)); // WHERE LFCode <= 12
     * </code>
     *
     * @param     mixed $lfcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLfcode($lfcode = null, $comparison = null)
    {
        if (is_array($lfcode)) {
            $useMinMax = false;
            if (isset($lfcode['min'])) {
                $this->addUsingAlias(PoplfPeer::LFCODE, $lfcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lfcode['max'])) {
                $this->addUsingAlias(PoplfPeer::LFCODE, $lfcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LFCODE, $lfcode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PoplfPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PoplfPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PoplfPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PoplfPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the LFRefno column
     *
     * Example usage:
     * <code>
     * $query->filterByLfrefno(1234); // WHERE LFRefno = 1234
     * $query->filterByLfrefno(array(12, 34)); // WHERE LFRefno IN (12, 34)
     * $query->filterByLfrefno(array('min' => 12)); // WHERE LFRefno >= 12
     * $query->filterByLfrefno(array('max' => 12)); // WHERE LFRefno <= 12
     * </code>
     *
     * @param     mixed $lfrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLfrefno($lfrefno = null, $comparison = null)
    {
        if (is_array($lfrefno)) {
            $useMinMax = false;
            if (isset($lfrefno['min'])) {
                $this->addUsingAlias(PoplfPeer::LFREFNO, $lfrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lfrefno['max'])) {
                $this->addUsingAlias(PoplfPeer::LFREFNO, $lfrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LFREFNO, $lfrefno, $comparison);
    }

    /**
     * Filter the query on the Sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE Sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE Sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the LatDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdeg(1234); // WHERE LatDeg = 1234
     * $query->filterByLatdeg(array(12, 34)); // WHERE LatDeg IN (12, 34)
     * $query->filterByLatdeg(array('min' => 12)); // WHERE LatDeg >= 12
     * $query->filterByLatdeg(array('max' => 12)); // WHERE LatDeg <= 12
     * </code>
     *
     * @param     mixed $latdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLatdeg($latdeg = null, $comparison = null)
    {
        if (is_array($latdeg)) {
            $useMinMax = false;
            if (isset($latdeg['min'])) {
                $this->addUsingAlias(PoplfPeer::LATDEG, $latdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdeg['max'])) {
                $this->addUsingAlias(PoplfPeer::LATDEG, $latdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LATDEG, $latdeg, $comparison);
    }

    /**
     * Filter the query on the LatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatmin(1234); // WHERE LatMin = 1234
     * $query->filterByLatmin(array(12, 34)); // WHERE LatMin IN (12, 34)
     * $query->filterByLatmin(array('min' => 12)); // WHERE LatMin >= 12
     * $query->filterByLatmin(array('max' => 12)); // WHERE LatMin <= 12
     * </code>
     *
     * @param     mixed $latmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLatmin($latmin = null, $comparison = null)
    {
        if (is_array($latmin)) {
            $useMinMax = false;
            if (isset($latmin['min'])) {
                $this->addUsingAlias(PoplfPeer::LATMIN, $latmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latmin['max'])) {
                $this->addUsingAlias(PoplfPeer::LATMIN, $latmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LATMIN, $latmin, $comparison);
    }

    /**
     * Filter the query on the NorthSouth column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouth('fooValue');   // WHERE NorthSouth = 'fooValue'
     * $query->filterByNorthsouth('%fooValue%'); // WHERE NorthSouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByNorthsouth($northsouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouth)) {
                $northsouth = str_replace('*', '%', $northsouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LatDegS column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdegs(1234); // WHERE LatDegS = 1234
     * $query->filterByLatdegs(array(12, 34)); // WHERE LatDegS IN (12, 34)
     * $query->filterByLatdegs(array('min' => 12)); // WHERE LatDegS >= 12
     * $query->filterByLatdegs(array('max' => 12)); // WHERE LatDegS <= 12
     * </code>
     *
     * @param     mixed $latdegs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLatdegs($latdegs = null, $comparison = null)
    {
        if (is_array($latdegs)) {
            $useMinMax = false;
            if (isset($latdegs['min'])) {
                $this->addUsingAlias(PoplfPeer::LATDEGS, $latdegs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdegs['max'])) {
                $this->addUsingAlias(PoplfPeer::LATDEGS, $latdegs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LATDEGS, $latdegs, $comparison);
    }

    /**
     * Filter the query on the LatMinS column
     *
     * Example usage:
     * <code>
     * $query->filterByLatmins(1234); // WHERE LatMinS = 1234
     * $query->filterByLatmins(array(12, 34)); // WHERE LatMinS IN (12, 34)
     * $query->filterByLatmins(array('min' => 12)); // WHERE LatMinS >= 12
     * $query->filterByLatmins(array('max' => 12)); // WHERE LatMinS <= 12
     * </code>
     *
     * @param     mixed $latmins The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLatmins($latmins = null, $comparison = null)
    {
        if (is_array($latmins)) {
            $useMinMax = false;
            if (isset($latmins['min'])) {
                $this->addUsingAlias(PoplfPeer::LATMINS, $latmins['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latmins['max'])) {
                $this->addUsingAlias(PoplfPeer::LATMINS, $latmins['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LATMINS, $latmins, $comparison);
    }

    /**
     * Filter the query on the NorthSouthS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouths('fooValue');   // WHERE NorthSouthS = 'fooValue'
     * $query->filterByNorthsouths('%fooValue%'); // WHERE NorthSouthS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouths The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByNorthsouths($northsouths = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouths)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouths)) {
                $northsouths = str_replace('*', '%', $northsouths);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::NORTHSOUTHS, $northsouths, $comparison);
    }

    /**
     * Filter the query on the LongDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdeg(1234); // WHERE LongDeg = 1234
     * $query->filterByLongdeg(array(12, 34)); // WHERE LongDeg IN (12, 34)
     * $query->filterByLongdeg(array('min' => 12)); // WHERE LongDeg >= 12
     * $query->filterByLongdeg(array('max' => 12)); // WHERE LongDeg <= 12
     * </code>
     *
     * @param     mixed $longdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLongdeg($longdeg = null, $comparison = null)
    {
        if (is_array($longdeg)) {
            $useMinMax = false;
            if (isset($longdeg['min'])) {
                $this->addUsingAlias(PoplfPeer::LONGDEG, $longdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdeg['max'])) {
                $this->addUsingAlias(PoplfPeer::LONGDEG, $longdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LONGDEG, $longdeg, $comparison);
    }

    /**
     * Filter the query on the LongMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongmin(1234); // WHERE LongMin = 1234
     * $query->filterByLongmin(array(12, 34)); // WHERE LongMin IN (12, 34)
     * $query->filterByLongmin(array('min' => 12)); // WHERE LongMin >= 12
     * $query->filterByLongmin(array('max' => 12)); // WHERE LongMin <= 12
     * </code>
     *
     * @param     mixed $longmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLongmin($longmin = null, $comparison = null)
    {
        if (is_array($longmin)) {
            $useMinMax = false;
            if (isset($longmin['min'])) {
                $this->addUsingAlias(PoplfPeer::LONGMIN, $longmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longmin['max'])) {
                $this->addUsingAlias(PoplfPeer::LONGMIN, $longmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LONGMIN, $longmin, $comparison);
    }

    /**
     * Filter the query on the EastWest column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwest('fooValue');   // WHERE EastWest = 'fooValue'
     * $query->filterByEastwest('%fooValue%'); // WHERE EastWest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByEastwest($eastwest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwest)) {
                $eastwest = str_replace('*', '%', $eastwest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the LongDegE column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdege(1234); // WHERE LongDegE = 1234
     * $query->filterByLongdege(array(12, 34)); // WHERE LongDegE IN (12, 34)
     * $query->filterByLongdege(array('min' => 12)); // WHERE LongDegE >= 12
     * $query->filterByLongdege(array('max' => 12)); // WHERE LongDegE <= 12
     * </code>
     *
     * @param     mixed $longdege The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLongdege($longdege = null, $comparison = null)
    {
        if (is_array($longdege)) {
            $useMinMax = false;
            if (isset($longdege['min'])) {
                $this->addUsingAlias(PoplfPeer::LONGDEGE, $longdege['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdege['max'])) {
                $this->addUsingAlias(PoplfPeer::LONGDEGE, $longdege['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LONGDEGE, $longdege, $comparison);
    }

    /**
     * Filter the query on the LongMinE column
     *
     * Example usage:
     * <code>
     * $query->filterByLongmine(1234); // WHERE LongMinE = 1234
     * $query->filterByLongmine(array(12, 34)); // WHERE LongMinE IN (12, 34)
     * $query->filterByLongmine(array('min' => 12)); // WHERE LongMinE >= 12
     * $query->filterByLongmine(array('max' => 12)); // WHERE LongMinE <= 12
     * </code>
     *
     * @param     mixed $longmine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLongmine($longmine = null, $comparison = null)
    {
        if (is_array($longmine)) {
            $useMinMax = false;
            if (isset($longmine['min'])) {
                $this->addUsingAlias(PoplfPeer::LONGMINE, $longmine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longmine['max'])) {
                $this->addUsingAlias(PoplfPeer::LONGMINE, $longmine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LONGMINE, $longmine, $comparison);
    }

    /**
     * Filter the query on the EastWestE column
     *
     * Example usage:
     * <code>
     * $query->filterByEastweste('fooValue');   // WHERE EastWestE = 'fooValue'
     * $query->filterByEastweste('%fooValue%'); // WHERE EastWestE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastweste The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByEastweste($eastweste = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastweste)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastweste)) {
                $eastweste = str_replace('*', '%', $eastweste);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::EASTWESTE, $eastweste, $comparison);
    }

    /**
     * Filter the query on the Accuracy column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuracy('fooValue');   // WHERE Accuracy = 'fooValue'
     * $query->filterByAccuracy('%fooValue%'); // WHERE Accuracy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuracy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByAccuracy($accuracy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuracy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuracy)) {
                $accuracy = str_replace('*', '%', $accuracy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::ACCURACY, $accuracy, $comparison);
    }

    /**
     * Filter the query on the DepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmin(1234); // WHERE DepthMin = 1234
     * $query->filterByDepthmin(array(12, 34)); // WHERE DepthMin IN (12, 34)
     * $query->filterByDepthmin(array('min' => 12)); // WHERE DepthMin >= 12
     * $query->filterByDepthmin(array('max' => 12)); // WHERE DepthMin <= 12
     * </code>
     *
     * @param     mixed $depthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDepthmin($depthmin = null, $comparison = null)
    {
        if (is_array($depthmin)) {
            $useMinMax = false;
            if (isset($depthmin['min'])) {
                $this->addUsingAlias(PoplfPeer::DEPTHMIN, $depthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmin['max'])) {
                $this->addUsingAlias(PoplfPeer::DEPTHMIN, $depthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DEPTHMIN, $depthmin, $comparison);
    }

    /**
     * Filter the query on the DepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmax(1234); // WHERE DepthMax = 1234
     * $query->filterByDepthmax(array(12, 34)); // WHERE DepthMax IN (12, 34)
     * $query->filterByDepthmax(array('min' => 12)); // WHERE DepthMax >= 12
     * $query->filterByDepthmax(array('max' => 12)); // WHERE DepthMax <= 12
     * </code>
     *
     * @param     mixed $depthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDepthmax($depthmax = null, $comparison = null)
    {
        if (is_array($depthmax)) {
            $useMinMax = false;
            if (isset($depthmax['min'])) {
                $this->addUsingAlias(PoplfPeer::DEPTHMAX, $depthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmax['max'])) {
                $this->addUsingAlias(PoplfPeer::DEPTHMAX, $depthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DEPTHMAX, $depthmax, $comparison);
    }

    /**
     * Filter the query on the TempMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTempmin(1234); // WHERE TempMin = 1234
     * $query->filterByTempmin(array(12, 34)); // WHERE TempMin IN (12, 34)
     * $query->filterByTempmin(array('min' => 12)); // WHERE TempMin >= 12
     * $query->filterByTempmin(array('max' => 12)); // WHERE TempMin <= 12
     * </code>
     *
     * @param     mixed $tempmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(PoplfPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(PoplfPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::TEMPMIN, $tempmin, $comparison);
    }

    /**
     * Filter the query on the TempMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTempmax(1234); // WHERE TempMax = 1234
     * $query->filterByTempmax(array(12, 34)); // WHERE TempMax IN (12, 34)
     * $query->filterByTempmax(array('min' => 12)); // WHERE TempMax >= 12
     * $query->filterByTempmax(array('max' => 12)); // WHERE TempMax <= 12
     * </code>
     *
     * @param     mixed $tempmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(PoplfPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(PoplfPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::TEMPMAX, $tempmax, $comparison);
    }

    /**
     * Filter the query on the MLMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMlmin(1234); // WHERE MLMin = 1234
     * $query->filterByMlmin(array(12, 34)); // WHERE MLMin IN (12, 34)
     * $query->filterByMlmin(array('min' => 12)); // WHERE MLMin >= 12
     * $query->filterByMlmin(array('max' => 12)); // WHERE MLMin <= 12
     * </code>
     *
     * @param     mixed $mlmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByMlmin($mlmin = null, $comparison = null)
    {
        if (is_array($mlmin)) {
            $useMinMax = false;
            if (isset($mlmin['min'])) {
                $this->addUsingAlias(PoplfPeer::MLMIN, $mlmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlmin['max'])) {
                $this->addUsingAlias(PoplfPeer::MLMIN, $mlmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::MLMIN, $mlmin, $comparison);
    }

    /**
     * Filter the query on the MLMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMlmax(1234); // WHERE MLMax = 1234
     * $query->filterByMlmax(array(12, 34)); // WHERE MLMax IN (12, 34)
     * $query->filterByMlmax(array('min' => 12)); // WHERE MLMax >= 12
     * $query->filterByMlmax(array('max' => 12)); // WHERE MLMax <= 12
     * </code>
     *
     * @param     mixed $mlmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByMlmax($mlmax = null, $comparison = null)
    {
        if (is_array($mlmax)) {
            $useMinMax = false;
            if (isset($mlmax['min'])) {
                $this->addUsingAlias(PoplfPeer::MLMAX, $mlmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlmax['max'])) {
                $this->addUsingAlias(PoplfPeer::MLMAX, $mlmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::MLMAX, $mlmax, $comparison);
    }

    /**
     * Filter the query on the MeanLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMeanlength(1234); // WHERE MeanLength = 1234
     * $query->filterByMeanlength(array(12, 34)); // WHERE MeanLength IN (12, 34)
     * $query->filterByMeanlength(array('min' => 12)); // WHERE MeanLength >= 12
     * $query->filterByMeanlength(array('max' => 12)); // WHERE MeanLength <= 12
     * </code>
     *
     * @param     mixed $meanlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByMeanlength($meanlength = null, $comparison = null)
    {
        if (is_array($meanlength)) {
            $useMinMax = false;
            if (isset($meanlength['min'])) {
                $this->addUsingAlias(PoplfPeer::MEANLENGTH, $meanlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meanlength['max'])) {
                $this->addUsingAlias(PoplfPeer::MEANLENGTH, $meanlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::MEANLENGTH, $meanlength, $comparison);
    }

    /**
     * Filter the query on the Lm column
     *
     * Example usage:
     * <code>
     * $query->filterByLm(1234); // WHERE Lm = 1234
     * $query->filterByLm(array(12, 34)); // WHERE Lm IN (12, 34)
     * $query->filterByLm(array('min' => 12)); // WHERE Lm >= 12
     * $query->filterByLm(array('max' => 12)); // WHERE Lm <= 12
     * </code>
     *
     * @param     mixed $lm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLm($lm = null, $comparison = null)
    {
        if (is_array($lm)) {
            $useMinMax = false;
            if (isset($lm['min'])) {
                $this->addUsingAlias(PoplfPeer::LM, $lm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lm['max'])) {
                $this->addUsingAlias(PoplfPeer::LM, $lm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LM, $lm, $comparison);
    }

    /**
     * Filter the query on the Loo column
     *
     * Example usage:
     * <code>
     * $query->filterByLoo(1234); // WHERE Loo = 1234
     * $query->filterByLoo(array(12, 34)); // WHERE Loo IN (12, 34)
     * $query->filterByLoo(array('min' => 12)); // WHERE Loo >= 12
     * $query->filterByLoo(array('max' => 12)); // WHERE Loo <= 12
     * </code>
     *
     * @param     mixed $loo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLoo($loo = null, $comparison = null)
    {
        if (is_array($loo)) {
            $useMinMax = false;
            if (isset($loo['min'])) {
                $this->addUsingAlias(PoplfPeer::LOO, $loo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loo['max'])) {
                $this->addUsingAlias(PoplfPeer::LOO, $loo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LOO, $loo, $comparison);
    }

    /**
     * Filter the query on the Lopt column
     *
     * Example usage:
     * <code>
     * $query->filterByLopt(1234); // WHERE Lopt = 1234
     * $query->filterByLopt(array(12, 34)); // WHERE Lopt IN (12, 34)
     * $query->filterByLopt(array('min' => 12)); // WHERE Lopt >= 12
     * $query->filterByLopt(array('max' => 12)); // WHERE Lopt <= 12
     * </code>
     *
     * @param     mixed $lopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLopt($lopt = null, $comparison = null)
    {
        if (is_array($lopt)) {
            $useMinMax = false;
            if (isset($lopt['min'])) {
                $this->addUsingAlias(PoplfPeer::LOPT, $lopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lopt['max'])) {
                $this->addUsingAlias(PoplfPeer::LOPT, $lopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LOPT, $lopt, $comparison);
    }

    /**
     * Filter the query on the Lc column
     *
     * Example usage:
     * <code>
     * $query->filterByLc(1234); // WHERE Lc = 1234
     * $query->filterByLc(array(12, 34)); // WHERE Lc IN (12, 34)
     * $query->filterByLc(array('min' => 12)); // WHERE Lc >= 12
     * $query->filterByLc(array('max' => 12)); // WHERE Lc <= 12
     * </code>
     *
     * @param     mixed $lc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLc($lc = null, $comparison = null)
    {
        if (is_array($lc)) {
            $useMinMax = false;
            if (isset($lc['min'])) {
                $this->addUsingAlias(PoplfPeer::LC, $lc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lc['max'])) {
                $this->addUsingAlias(PoplfPeer::LC, $lc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LC, $lc, $comparison);
    }

    /**
     * Filter the query on the SourceLinf column
     *
     * Example usage:
     * <code>
     * $query->filterBySourcelinf('fooValue');   // WHERE SourceLinf = 'fooValue'
     * $query->filterBySourcelinf('%fooValue%'); // WHERE SourceLinf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourcelinf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterBySourcelinf($sourcelinf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourcelinf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourcelinf)) {
                $sourcelinf = str_replace('*', '%', $sourcelinf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::SOURCELINF, $sourcelinf, $comparison);
    }

    /**
     * Filter the query on the a column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE a = 1234
     * $query->filterByA(array(12, 34)); // WHERE a IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE a >= 12
     * $query->filterByA(array('max' => 12)); // WHERE a <= 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(PoplfPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(PoplfPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::A, $a, $comparison);
    }

    /**
     * Filter the query on the b column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE b = 1234
     * $query->filterByB(array(12, 34)); // WHERE b IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE b >= 12
     * $query->filterByB(array('max' => 12)); // WHERE b <= 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PoplfPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PoplfPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the LWRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLwref(1234); // WHERE LWRef = 1234
     * $query->filterByLwref(array(12, 34)); // WHERE LWRef IN (12, 34)
     * $query->filterByLwref(array('min' => 12)); // WHERE LWRef >= 12
     * $query->filterByLwref(array('max' => 12)); // WHERE LWRef <= 12
     * </code>
     *
     * @param     mixed $lwref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLwref($lwref = null, $comparison = null)
    {
        if (is_array($lwref)) {
            $useMinMax = false;
            if (isset($lwref['min'])) {
                $this->addUsingAlias(PoplfPeer::LWREF, $lwref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lwref['max'])) {
                $this->addUsingAlias(PoplfPeer::LWREF, $lwref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LWREF, $lwref, $comparison);
    }

    /**
     * Filter the query on the LType column
     *
     * Example usage:
     * <code>
     * $query->filterByLtype('fooValue');   // WHERE LType = 'fooValue'
     * $query->filterByLtype('%fooValue%'); // WHERE LType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ltype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByLtype($ltype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ltype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ltype)) {
                $ltype = str_replace('*', '%', $ltype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::LTYPE, $ltype, $comparison);
    }

    /**
     * Filter the query on the F column
     *
     * Example usage:
     * <code>
     * $query->filterByF(1234); // WHERE F = 1234
     * $query->filterByF(array(12, 34)); // WHERE F IN (12, 34)
     * $query->filterByF(array('min' => 12)); // WHERE F >= 12
     * $query->filterByF(array('max' => 12)); // WHERE F <= 12
     * </code>
     *
     * @param     mixed $f The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByF($f = null, $comparison = null)
    {
        if (is_array($f)) {
            $useMinMax = false;
            if (isset($f['min'])) {
                $this->addUsingAlias(PoplfPeer::F, $f['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($f['max'])) {
                $this->addUsingAlias(PoplfPeer::F, $f['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::F, $f, $comparison);
    }

    /**
     * Filter the query on the Z column
     *
     * Example usage:
     * <code>
     * $query->filterByZ(1234); // WHERE Z = 1234
     * $query->filterByZ(array(12, 34)); // WHERE Z IN (12, 34)
     * $query->filterByZ(array('min' => 12)); // WHERE Z >= 12
     * $query->filterByZ(array('max' => 12)); // WHERE Z <= 12
     * </code>
     *
     * @param     mixed $z The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByZ($z = null, $comparison = null)
    {
        if (is_array($z)) {
            $useMinMax = false;
            if (isset($z['min'])) {
                $this->addUsingAlias(PoplfPeer::Z, $z['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($z['max'])) {
                $this->addUsingAlias(PoplfPeer::Z, $z['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::Z, $z, $comparison);
    }

    /**
     * Filter the query on the E column
     *
     * Example usage:
     * <code>
     * $query->filterByE(1234); // WHERE E = 1234
     * $query->filterByE(array(12, 34)); // WHERE E IN (12, 34)
     * $query->filterByE(array('min' => 12)); // WHERE E >= 12
     * $query->filterByE(array('max' => 12)); // WHERE E <= 12
     * </code>
     *
     * @param     mixed $e The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByE($e = null, $comparison = null)
    {
        if (is_array($e)) {
            $useMinMax = false;
            if (isset($e['min'])) {
                $this->addUsingAlias(PoplfPeer::E, $e['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($e['max'])) {
                $this->addUsingAlias(PoplfPeer::E, $e['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::E, $e, $comparison);
    }

    /**
     * Filter the query on the M column
     *
     * Example usage:
     * <code>
     * $query->filterByM(1234); // WHERE M = 1234
     * $query->filterByM(array(12, 34)); // WHERE M IN (12, 34)
     * $query->filterByM(array('min' => 12)); // WHERE M >= 12
     * $query->filterByM(array('max' => 12)); // WHERE M <= 12
     * </code>
     *
     * @param     mixed $m The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByM($m = null, $comparison = null)
    {
        if (is_array($m)) {
            $useMinMax = false;
            if (isset($m['min'])) {
                $this->addUsingAlias(PoplfPeer::M, $m['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m['max'])) {
                $this->addUsingAlias(PoplfPeer::M, $m['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::M, $m, $comparison);
    }

    /**
     * Filter the query on the Unexploited column
     *
     * Example usage:
     * <code>
     * $query->filterByUnexploited(1234); // WHERE Unexploited = 1234
     * $query->filterByUnexploited(array(12, 34)); // WHERE Unexploited IN (12, 34)
     * $query->filterByUnexploited(array('min' => 12)); // WHERE Unexploited >= 12
     * $query->filterByUnexploited(array('max' => 12)); // WHERE Unexploited <= 12
     * </code>
     *
     * @param     mixed $unexploited The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByUnexploited($unexploited = null, $comparison = null)
    {
        if (is_array($unexploited)) {
            $useMinMax = false;
            if (isset($unexploited['min'])) {
                $this->addUsingAlias(PoplfPeer::UNEXPLOITED, $unexploited['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unexploited['max'])) {
                $this->addUsingAlias(PoplfPeer::UNEXPLOITED, $unexploited['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::UNEXPLOITED, $unexploited, $comparison);
    }

    /**
     * Filter the query on the DataType column
     *
     * Example usage:
     * <code>
     * $query->filterByDatatype('fooValue');   // WHERE DataType = 'fooValue'
     * $query->filterByDatatype('%fooValue%'); // WHERE DataType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datatype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDatatype($datatype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datatype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datatype)) {
                $datatype = str_replace('*', '%', $datatype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DATATYPE, $datatype, $comparison);
    }

    /**
     * Filter the query on the GrowthLoo column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthloo(1234); // WHERE GrowthLoo = 1234
     * $query->filterByGrowthloo(array(12, 34)); // WHERE GrowthLoo IN (12, 34)
     * $query->filterByGrowthloo(array('min' => 12)); // WHERE GrowthLoo >= 12
     * $query->filterByGrowthloo(array('max' => 12)); // WHERE GrowthLoo <= 12
     * </code>
     *
     * @param     mixed $growthloo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGrowthloo($growthloo = null, $comparison = null)
    {
        if (is_array($growthloo)) {
            $useMinMax = false;
            if (isset($growthloo['min'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHLOO, $growthloo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthloo['max'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHLOO, $growthloo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GROWTHLOO, $growthloo, $comparison);
    }

    /**
     * Filter the query on the GrowthK column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthk(1234); // WHERE GrowthK = 1234
     * $query->filterByGrowthk(array(12, 34)); // WHERE GrowthK IN (12, 34)
     * $query->filterByGrowthk(array('min' => 12)); // WHERE GrowthK >= 12
     * $query->filterByGrowthk(array('max' => 12)); // WHERE GrowthK <= 12
     * </code>
     *
     * @param     mixed $growthk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGrowthk($growthk = null, $comparison = null)
    {
        if (is_array($growthk)) {
            $useMinMax = false;
            if (isset($growthk['min'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHK, $growthk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthk['max'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHK, $growthk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GROWTHK, $growthk, $comparison);
    }

    /**
     * Filter the query on the GrowthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthref(1234); // WHERE GrowthRef = 1234
     * $query->filterByGrowthref(array(12, 34)); // WHERE GrowthRef IN (12, 34)
     * $query->filterByGrowthref(array('min' => 12)); // WHERE GrowthRef >= 12
     * $query->filterByGrowthref(array('max' => 12)); // WHERE GrowthRef <= 12
     * </code>
     *
     * @param     mixed $growthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGrowthref($growthref = null, $comparison = null)
    {
        if (is_array($growthref)) {
            $useMinMax = false;
            if (isset($growthref['min'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHREF, $growthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthref['max'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHREF, $growthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GROWTHREF, $growthref, $comparison);
    }

    /**
     * Filter the query on the GrowthM column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthm(1234); // WHERE GrowthM = 1234
     * $query->filterByGrowthm(array(12, 34)); // WHERE GrowthM IN (12, 34)
     * $query->filterByGrowthm(array('min' => 12)); // WHERE GrowthM >= 12
     * $query->filterByGrowthm(array('max' => 12)); // WHERE GrowthM <= 12
     * </code>
     *
     * @param     mixed $growthm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGrowthm($growthm = null, $comparison = null)
    {
        if (is_array($growthm)) {
            $useMinMax = false;
            if (isset($growthm['min'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHM, $growthm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthm['max'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHM, $growthm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GROWTHM, $growthm, $comparison);
    }

    /**
     * Filter the query on the GrowthMRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthmref(1234); // WHERE GrowthMRef = 1234
     * $query->filterByGrowthmref(array(12, 34)); // WHERE GrowthMRef IN (12, 34)
     * $query->filterByGrowthmref(array('min' => 12)); // WHERE GrowthMRef >= 12
     * $query->filterByGrowthmref(array('max' => 12)); // WHERE GrowthMRef <= 12
     * </code>
     *
     * @param     mixed $growthmref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGrowthmref($growthmref = null, $comparison = null)
    {
        if (is_array($growthmref)) {
            $useMinMax = false;
            if (isset($growthmref['min'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHMREF, $growthmref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthmref['max'])) {
                $this->addUsingAlias(PoplfPeer::GROWTHMREF, $growthmref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GROWTHMREF, $growthmref, $comparison);
    }

    /**
     * Filter the query on the tm column
     *
     * Example usage:
     * <code>
     * $query->filterByTm(1234); // WHERE tm = 1234
     * $query->filterByTm(array(12, 34)); // WHERE tm IN (12, 34)
     * $query->filterByTm(array('min' => 12)); // WHERE tm >= 12
     * $query->filterByTm(array('max' => 12)); // WHERE tm <= 12
     * </code>
     *
     * @param     mixed $tm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(PoplfPeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(PoplfPeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::TM, $tm, $comparison);
    }

    /**
     * Filter the query on the FrequencyType column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequencytype('fooValue');   // WHERE FrequencyType = 'fooValue'
     * $query->filterByFrequencytype('%fooValue%'); // WHERE FrequencyType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $frequencytype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByFrequencytype($frequencytype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($frequencytype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $frequencytype)) {
                $frequencytype = str_replace('*', '%', $frequencytype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::FREQUENCYTYPE, $frequencytype, $comparison);
    }

    /**
     * Filter the query on the ClassInterval column
     *
     * Example usage:
     * <code>
     * $query->filterByClassinterval(1234); // WHERE ClassInterval = 1234
     * $query->filterByClassinterval(array(12, 34)); // WHERE ClassInterval IN (12, 34)
     * $query->filterByClassinterval(array('min' => 12)); // WHERE ClassInterval >= 12
     * $query->filterByClassinterval(array('max' => 12)); // WHERE ClassInterval <= 12
     * </code>
     *
     * @param     mixed $classinterval The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByClassinterval($classinterval = null, $comparison = null)
    {
        if (is_array($classinterval)) {
            $useMinMax = false;
            if (isset($classinterval['min'])) {
                $this->addUsingAlias(PoplfPeer::CLASSINTERVAL, $classinterval['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classinterval['max'])) {
                $this->addUsingAlias(PoplfPeer::CLASSINTERVAL, $classinterval['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::CLASSINTERVAL, $classinterval, $comparison);
    }

    /**
     * Filter the query on the Gear column
     *
     * Example usage:
     * <code>
     * $query->filterByGear('fooValue');   // WHERE Gear = 'fooValue'
     * $query->filterByGear('%fooValue%'); // WHERE Gear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGear($gear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gear)) {
                $gear = str_replace('*', '%', $gear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GEAR, $gear, $comparison);
    }

    /**
     * Filter the query on the GearII column
     *
     * Example usage:
     * <code>
     * $query->filterByGearii('fooValue');   // WHERE GearII = 'fooValue'
     * $query->filterByGearii('%fooValue%'); // WHERE GearII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gearii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByGearii($gearii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gearii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gearii)) {
                $gearii = str_replace('*', '%', $gearii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::GEARII, $gearii, $comparison);
    }

    /**
     * Filter the query on the YearFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByYearfrom(1234); // WHERE YearFrom = 1234
     * $query->filterByYearfrom(array(12, 34)); // WHERE YearFrom IN (12, 34)
     * $query->filterByYearfrom(array('min' => 12)); // WHERE YearFrom >= 12
     * $query->filterByYearfrom(array('max' => 12)); // WHERE YearFrom <= 12
     * </code>
     *
     * @param     mixed $yearfrom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByYearfrom($yearfrom = null, $comparison = null)
    {
        if (is_array($yearfrom)) {
            $useMinMax = false;
            if (isset($yearfrom['min'])) {
                $this->addUsingAlias(PoplfPeer::YEARFROM, $yearfrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearfrom['max'])) {
                $this->addUsingAlias(PoplfPeer::YEARFROM, $yearfrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::YEARFROM, $yearfrom, $comparison);
    }

    /**
     * Filter the query on the YearTo column
     *
     * Example usage:
     * <code>
     * $query->filterByYearto(1234); // WHERE YearTo = 1234
     * $query->filterByYearto(array(12, 34)); // WHERE YearTo IN (12, 34)
     * $query->filterByYearto(array('min' => 12)); // WHERE YearTo >= 12
     * $query->filterByYearto(array('max' => 12)); // WHERE YearTo <= 12
     * </code>
     *
     * @param     mixed $yearto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByYearto($yearto = null, $comparison = null)
    {
        if (is_array($yearto)) {
            $useMinMax = false;
            if (isset($yearto['min'])) {
                $this->addUsingAlias(PoplfPeer::YEARTO, $yearto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearto['max'])) {
                $this->addUsingAlias(PoplfPeer::YEARTO, $yearto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::YEARTO, $yearto, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Provider column
     *
     * Example usage:
     * <code>
     * $query->filterByProvider('fooValue');   // WHERE Provider = 'fooValue'
     * $query->filterByProvider('%fooValue%'); // WHERE Provider LIKE '%fooValue%'
     * </code>
     *
     * @param     string $provider The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByProvider($provider = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($provider)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $provider)) {
                $provider = str_replace('*', '%', $provider);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::PROVIDER, $provider, $comparison);
    }

    /**
     * Filter the query on the EMail column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMail = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PoplfPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PoplfPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PoplfPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PoplfPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PoplfPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PoplfPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PoplfPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PoplfPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PoplfPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PoplfPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PoplfPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PoplfPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the TS column
     *
     * Example usage:
     * <code>
     * $query->filterByTs('2011-03-14'); // WHERE TS = '2011-03-14'
     * $query->filterByTs('now'); // WHERE TS = '2011-03-14'
     * $query->filterByTs(array('max' => 'yesterday')); // WHERE TS < '2011-03-13'
     * </code>
     *
     * @param     mixed $ts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PoplfPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PoplfPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Poplf $poplf Object to remove from the list of results
     *
     * @return PoplfQuery The current query, for fluid interface
     */
    public function prune($poplf = null)
    {
        if ($poplf) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PoplfPeer::LFCODE), $poplf->getLfcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PoplfPeer::STOCKCODE), $poplf->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PoplfPeer::SEX), $poplf->getSex(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PoplfPeer::LOCALITY), $poplf->getLocality(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(PoplfPeer::C_CODE), $poplf->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(PoplfPeer::GEAR), $poplf->getGear(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
