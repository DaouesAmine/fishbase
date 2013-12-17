<?php


/**
 * Base class that represents a query for the 'genetics' table.
 *
 *
 *
 * @method GeneticsQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method GeneticsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method GeneticsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method GeneticsQuery orderByGeneticsrefno($order = Criteria::ASC) Order by the GeneticsRefNo column
 * @method GeneticsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method GeneticsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method GeneticsQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method GeneticsQuery orderByTissues($order = Criteria::ASC) Order by the Tissues column
 * @method GeneticsQuery orderByChromosomeno($order = Criteria::ASC) Order by the ChromosomeNo column
 * @method GeneticsQuery orderByChromosomeref($order = Criteria::ASC) Order by the ChromosomeRef column
 * @method GeneticsQuery orderByChromosomedip($order = Criteria::ASC) Order by the ChromosomeDip column
 * @method GeneticsQuery orderByChromosomediptemp($order = Criteria::ASC) Order by the ChromosomeDipTemp column
 * @method GeneticsQuery orderByChromosomedipmax($order = Criteria::ASC) Order by the ChromosomeDipMax column
 * @method GeneticsQuery orderByChromosomedipref($order = Criteria::ASC) Order by the ChromosomeDipRef column
 * @method GeneticsQuery orderByChromosometyperef($order = Criteria::ASC) Order by the ChromosomeTypeRef column
 * @method GeneticsQuery orderByMetacentric($order = Criteria::ASC) Order by the Metacentric column
 * @method GeneticsQuery orderBySubmetacentric($order = Criteria::ASC) Order by the SubMetacentric column
 * @method GeneticsQuery orderBySubtelocentric($order = Criteria::ASC) Order by the Subtelocentric column
 * @method GeneticsQuery orderByTelocentric($order = Criteria::ASC) Order by the Telocentric column
 * @method GeneticsQuery orderByMetasubmetacentric($order = Criteria::ASC) Order by the MetaSubmetacentric column
 * @method GeneticsQuery orderBySubteloacrocentric($order = Criteria::ASC) Order by the SubteloAcrocentric column
 * @method GeneticsQuery orderByChromosomearm($order = Criteria::ASC) Order by the ChromosomeArm column
 * @method GeneticsQuery orderByChromosomearmcalc($order = Criteria::ASC) Order by the ChromosomeArmCalc column
 * @method GeneticsQuery orderByChromosomearmtemp($order = Criteria::ASC) Order by the ChromosomeArmTemp column
 * @method GeneticsQuery orderByChromosomearmref($order = Criteria::ASC) Order by the ChromosomeArmRef column
 * @method GeneticsQuery orderBySexmech($order = Criteria::ASC) Order by the SexMech column
 * @method GeneticsQuery orderBySexmechref($order = Criteria::ASC) Order by the SexmechRef column
 * @method GeneticsQuery orderByDnasequence($order = Criteria::ASC) Order by the DNASequence column
 * @method GeneticsQuery orderByDnaseqref($order = Criteria::ASC) Order by the DNASeqRef column
 * @method GeneticsQuery orderByDnaanalysis($order = Criteria::ASC) Order by the DNAAnalysis column
 * @method GeneticsQuery orderByDnaanalref($order = Criteria::ASC) Order by the DNAAnalRef column
 * @method GeneticsQuery orderByGeneticmarker($order = Criteria::ASC) Order by the GeneticMarker column
 * @method GeneticsQuery orderByGmarkerref($order = Criteria::ASC) Order by the GMarkerRef column
 * @method GeneticsQuery orderByDna($order = Criteria::ASC) Order by the DNA column
 * @method GeneticsQuery orderByDnaref($order = Criteria::ASC) Order by the DNARef column
 * @method GeneticsQuery orderByRemarksref($order = Criteria::ASC) Order by the RemarksRef column
 * @method GeneticsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GeneticsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method GeneticsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GeneticsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method GeneticsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GeneticsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method GeneticsQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method GeneticsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GeneticsQuery groupByAutoctr() Group by the AutoCtr column
 * @method GeneticsQuery groupByStockcode() Group by the StockCode column
 * @method GeneticsQuery groupBySpeccode() Group by the SpecCode column
 * @method GeneticsQuery groupByGeneticsrefno() Group by the GeneticsRefNo column
 * @method GeneticsQuery groupByLocality() Group by the Locality column
 * @method GeneticsQuery groupByCCode() Group by the C_Code column
 * @method GeneticsQuery groupBySex() Group by the Sex column
 * @method GeneticsQuery groupByTissues() Group by the Tissues column
 * @method GeneticsQuery groupByChromosomeno() Group by the ChromosomeNo column
 * @method GeneticsQuery groupByChromosomeref() Group by the ChromosomeRef column
 * @method GeneticsQuery groupByChromosomedip() Group by the ChromosomeDip column
 * @method GeneticsQuery groupByChromosomediptemp() Group by the ChromosomeDipTemp column
 * @method GeneticsQuery groupByChromosomedipmax() Group by the ChromosomeDipMax column
 * @method GeneticsQuery groupByChromosomedipref() Group by the ChromosomeDipRef column
 * @method GeneticsQuery groupByChromosometyperef() Group by the ChromosomeTypeRef column
 * @method GeneticsQuery groupByMetacentric() Group by the Metacentric column
 * @method GeneticsQuery groupBySubmetacentric() Group by the SubMetacentric column
 * @method GeneticsQuery groupBySubtelocentric() Group by the Subtelocentric column
 * @method GeneticsQuery groupByTelocentric() Group by the Telocentric column
 * @method GeneticsQuery groupByMetasubmetacentric() Group by the MetaSubmetacentric column
 * @method GeneticsQuery groupBySubteloacrocentric() Group by the SubteloAcrocentric column
 * @method GeneticsQuery groupByChromosomearm() Group by the ChromosomeArm column
 * @method GeneticsQuery groupByChromosomearmcalc() Group by the ChromosomeArmCalc column
 * @method GeneticsQuery groupByChromosomearmtemp() Group by the ChromosomeArmTemp column
 * @method GeneticsQuery groupByChromosomearmref() Group by the ChromosomeArmRef column
 * @method GeneticsQuery groupBySexmech() Group by the SexMech column
 * @method GeneticsQuery groupBySexmechref() Group by the SexmechRef column
 * @method GeneticsQuery groupByDnasequence() Group by the DNASequence column
 * @method GeneticsQuery groupByDnaseqref() Group by the DNASeqRef column
 * @method GeneticsQuery groupByDnaanalysis() Group by the DNAAnalysis column
 * @method GeneticsQuery groupByDnaanalref() Group by the DNAAnalRef column
 * @method GeneticsQuery groupByGeneticmarker() Group by the GeneticMarker column
 * @method GeneticsQuery groupByGmarkerref() Group by the GMarkerRef column
 * @method GeneticsQuery groupByDna() Group by the DNA column
 * @method GeneticsQuery groupByDnaref() Group by the DNARef column
 * @method GeneticsQuery groupByRemarksref() Group by the RemarksRef column
 * @method GeneticsQuery groupByEntered() Group by the Entered column
 * @method GeneticsQuery groupByDateentered() Group by the DateEntered column
 * @method GeneticsQuery groupByModified() Group by the Modified column
 * @method GeneticsQuery groupByDatemodified() Group by the DateModified column
 * @method GeneticsQuery groupByExpert() Group by the Expert column
 * @method GeneticsQuery groupByDatechecked() Group by the DateChecked column
 * @method GeneticsQuery groupByRemark() Group by the Remark column
 * @method GeneticsQuery groupByTs() Group by the TS column
 *
 * @method GeneticsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GeneticsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GeneticsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Genetics findOne(PropelPDO $con = null) Return the first Genetics matching the query
 * @method Genetics findOneOrCreate(PropelPDO $con = null) Return the first Genetics matching the query, or a new Genetics object populated from the query conditions when no match is found
 *
 * @method Genetics findOneByStockcode(int $StockCode) Return the first Genetics filtered by the StockCode column
 * @method Genetics findOneBySpeccode(int $SpecCode) Return the first Genetics filtered by the SpecCode column
 * @method Genetics findOneByGeneticsrefno(int $GeneticsRefNo) Return the first Genetics filtered by the GeneticsRefNo column
 * @method Genetics findOneByLocality(string $Locality) Return the first Genetics filtered by the Locality column
 * @method Genetics findOneByCCode(string $C_Code) Return the first Genetics filtered by the C_Code column
 * @method Genetics findOneBySex(string $Sex) Return the first Genetics filtered by the Sex column
 * @method Genetics findOneByTissues(string $Tissues) Return the first Genetics filtered by the Tissues column
 * @method Genetics findOneByChromosomeno(int $ChromosomeNo) Return the first Genetics filtered by the ChromosomeNo column
 * @method Genetics findOneByChromosomeref(int $ChromosomeRef) Return the first Genetics filtered by the ChromosomeRef column
 * @method Genetics findOneByChromosomedip(int $ChromosomeDip) Return the first Genetics filtered by the ChromosomeDip column
 * @method Genetics findOneByChromosomediptemp(int $ChromosomeDipTemp) Return the first Genetics filtered by the ChromosomeDipTemp column
 * @method Genetics findOneByChromosomedipmax(int $ChromosomeDipMax) Return the first Genetics filtered by the ChromosomeDipMax column
 * @method Genetics findOneByChromosomedipref(int $ChromosomeDipRef) Return the first Genetics filtered by the ChromosomeDipRef column
 * @method Genetics findOneByChromosometyperef(int $ChromosomeTypeRef) Return the first Genetics filtered by the ChromosomeTypeRef column
 * @method Genetics findOneByMetacentric(int $Metacentric) Return the first Genetics filtered by the Metacentric column
 * @method Genetics findOneBySubmetacentric(int $SubMetacentric) Return the first Genetics filtered by the SubMetacentric column
 * @method Genetics findOneBySubtelocentric(int $Subtelocentric) Return the first Genetics filtered by the Subtelocentric column
 * @method Genetics findOneByTelocentric(int $Telocentric) Return the first Genetics filtered by the Telocentric column
 * @method Genetics findOneByMetasubmetacentric(int $MetaSubmetacentric) Return the first Genetics filtered by the MetaSubmetacentric column
 * @method Genetics findOneBySubteloacrocentric(int $SubteloAcrocentric) Return the first Genetics filtered by the SubteloAcrocentric column
 * @method Genetics findOneByChromosomearm(int $ChromosomeArm) Return the first Genetics filtered by the ChromosomeArm column
 * @method Genetics findOneByChromosomearmcalc(int $ChromosomeArmCalc) Return the first Genetics filtered by the ChromosomeArmCalc column
 * @method Genetics findOneByChromosomearmtemp(int $ChromosomeArmTemp) Return the first Genetics filtered by the ChromosomeArmTemp column
 * @method Genetics findOneByChromosomearmref(int $ChromosomeArmRef) Return the first Genetics filtered by the ChromosomeArmRef column
 * @method Genetics findOneBySexmech(string $SexMech) Return the first Genetics filtered by the SexMech column
 * @method Genetics findOneBySexmechref(int $SexmechRef) Return the first Genetics filtered by the SexmechRef column
 * @method Genetics findOneByDnasequence(int $DNASequence) Return the first Genetics filtered by the DNASequence column
 * @method Genetics findOneByDnaseqref(int $DNASeqRef) Return the first Genetics filtered by the DNASeqRef column
 * @method Genetics findOneByDnaanalysis(int $DNAAnalysis) Return the first Genetics filtered by the DNAAnalysis column
 * @method Genetics findOneByDnaanalref(int $DNAAnalRef) Return the first Genetics filtered by the DNAAnalRef column
 * @method Genetics findOneByGeneticmarker(int $GeneticMarker) Return the first Genetics filtered by the GeneticMarker column
 * @method Genetics findOneByGmarkerref(int $GMarkerRef) Return the first Genetics filtered by the GMarkerRef column
 * @method Genetics findOneByDna(double $DNA) Return the first Genetics filtered by the DNA column
 * @method Genetics findOneByDnaref(int $DNARef) Return the first Genetics filtered by the DNARef column
 * @method Genetics findOneByRemarksref(int $RemarksRef) Return the first Genetics filtered by the RemarksRef column
 * @method Genetics findOneByEntered(int $Entered) Return the first Genetics filtered by the Entered column
 * @method Genetics findOneByDateentered(string $DateEntered) Return the first Genetics filtered by the DateEntered column
 * @method Genetics findOneByModified(int $Modified) Return the first Genetics filtered by the Modified column
 * @method Genetics findOneByDatemodified(string $DateModified) Return the first Genetics filtered by the DateModified column
 * @method Genetics findOneByExpert(int $Expert) Return the first Genetics filtered by the Expert column
 * @method Genetics findOneByDatechecked(string $DateChecked) Return the first Genetics filtered by the DateChecked column
 * @method Genetics findOneByRemark(string $Remark) Return the first Genetics filtered by the Remark column
 * @method Genetics findOneByTs(string $TS) Return the first Genetics filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Genetics objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Genetics objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Genetics objects filtered by the SpecCode column
 * @method array findByGeneticsrefno(int $GeneticsRefNo) Return Genetics objects filtered by the GeneticsRefNo column
 * @method array findByLocality(string $Locality) Return Genetics objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Genetics objects filtered by the C_Code column
 * @method array findBySex(string $Sex) Return Genetics objects filtered by the Sex column
 * @method array findByTissues(string $Tissues) Return Genetics objects filtered by the Tissues column
 * @method array findByChromosomeno(int $ChromosomeNo) Return Genetics objects filtered by the ChromosomeNo column
 * @method array findByChromosomeref(int $ChromosomeRef) Return Genetics objects filtered by the ChromosomeRef column
 * @method array findByChromosomedip(int $ChromosomeDip) Return Genetics objects filtered by the ChromosomeDip column
 * @method array findByChromosomediptemp(int $ChromosomeDipTemp) Return Genetics objects filtered by the ChromosomeDipTemp column
 * @method array findByChromosomedipmax(int $ChromosomeDipMax) Return Genetics objects filtered by the ChromosomeDipMax column
 * @method array findByChromosomedipref(int $ChromosomeDipRef) Return Genetics objects filtered by the ChromosomeDipRef column
 * @method array findByChromosometyperef(int $ChromosomeTypeRef) Return Genetics objects filtered by the ChromosomeTypeRef column
 * @method array findByMetacentric(int $Metacentric) Return Genetics objects filtered by the Metacentric column
 * @method array findBySubmetacentric(int $SubMetacentric) Return Genetics objects filtered by the SubMetacentric column
 * @method array findBySubtelocentric(int $Subtelocentric) Return Genetics objects filtered by the Subtelocentric column
 * @method array findByTelocentric(int $Telocentric) Return Genetics objects filtered by the Telocentric column
 * @method array findByMetasubmetacentric(int $MetaSubmetacentric) Return Genetics objects filtered by the MetaSubmetacentric column
 * @method array findBySubteloacrocentric(int $SubteloAcrocentric) Return Genetics objects filtered by the SubteloAcrocentric column
 * @method array findByChromosomearm(int $ChromosomeArm) Return Genetics objects filtered by the ChromosomeArm column
 * @method array findByChromosomearmcalc(int $ChromosomeArmCalc) Return Genetics objects filtered by the ChromosomeArmCalc column
 * @method array findByChromosomearmtemp(int $ChromosomeArmTemp) Return Genetics objects filtered by the ChromosomeArmTemp column
 * @method array findByChromosomearmref(int $ChromosomeArmRef) Return Genetics objects filtered by the ChromosomeArmRef column
 * @method array findBySexmech(string $SexMech) Return Genetics objects filtered by the SexMech column
 * @method array findBySexmechref(int $SexmechRef) Return Genetics objects filtered by the SexmechRef column
 * @method array findByDnasequence(int $DNASequence) Return Genetics objects filtered by the DNASequence column
 * @method array findByDnaseqref(int $DNASeqRef) Return Genetics objects filtered by the DNASeqRef column
 * @method array findByDnaanalysis(int $DNAAnalysis) Return Genetics objects filtered by the DNAAnalysis column
 * @method array findByDnaanalref(int $DNAAnalRef) Return Genetics objects filtered by the DNAAnalRef column
 * @method array findByGeneticmarker(int $GeneticMarker) Return Genetics objects filtered by the GeneticMarker column
 * @method array findByGmarkerref(int $GMarkerRef) Return Genetics objects filtered by the GMarkerRef column
 * @method array findByDna(double $DNA) Return Genetics objects filtered by the DNA column
 * @method array findByDnaref(int $DNARef) Return Genetics objects filtered by the DNARef column
 * @method array findByRemarksref(int $RemarksRef) Return Genetics objects filtered by the RemarksRef column
 * @method array findByEntered(int $Entered) Return Genetics objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Genetics objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Genetics objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Genetics objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Genetics objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Genetics objects filtered by the DateChecked column
 * @method array findByRemark(string $Remark) Return Genetics objects filtered by the Remark column
 * @method array findByTs(string $TS) Return Genetics objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGeneticsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGeneticsQuery object.
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
            $modelName = 'Genetics';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GeneticsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GeneticsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GeneticsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GeneticsQuery) {
            return $criteria;
        }
        $query = new GeneticsQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Genetics|Genetics[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GeneticsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Genetics A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Genetics A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `GeneticsRefNo`, `Locality`, `C_Code`, `Sex`, `Tissues`, `ChromosomeNo`, `ChromosomeRef`, `ChromosomeDip`, `ChromosomeDipTemp`, `ChromosomeDipMax`, `ChromosomeDipRef`, `ChromosomeTypeRef`, `Metacentric`, `SubMetacentric`, `Subtelocentric`, `Telocentric`, `MetaSubmetacentric`, `SubteloAcrocentric`, `ChromosomeArm`, `ChromosomeArmCalc`, `ChromosomeArmTemp`, `ChromosomeArmRef`, `SexMech`, `SexmechRef`, `DNASequence`, `DNASeqRef`, `DNAAnalysis`, `DNAAnalRef`, `GeneticMarker`, `GMarkerRef`, `DNA`, `DNARef`, `RemarksRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Remark`, `TS` FROM `genetics` WHERE `AutoCtr` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Genetics();
            $obj->hydrate($row);
            GeneticsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Genetics|Genetics[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Genetics[]|mixed the list of results, formatted by the current formatter
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GeneticsPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GeneticsPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(GeneticsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(GeneticsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(GeneticsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(GeneticsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(GeneticsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(GeneticsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the GeneticsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneticsrefno(1234); // WHERE GeneticsRefNo = 1234
     * $query->filterByGeneticsrefno(array(12, 34)); // WHERE GeneticsRefNo IN (12, 34)
     * $query->filterByGeneticsrefno(array('min' => 12)); // WHERE GeneticsRefNo >= 12
     * $query->filterByGeneticsrefno(array('max' => 12)); // WHERE GeneticsRefNo <= 12
     * </code>
     *
     * @param     mixed $geneticsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByGeneticsrefno($geneticsrefno = null, $comparison = null)
    {
        if (is_array($geneticsrefno)) {
            $useMinMax = false;
            if (isset($geneticsrefno['min'])) {
                $this->addUsingAlias(GeneticsPeer::GENETICSREFNO, $geneticsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geneticsrefno['max'])) {
                $this->addUsingAlias(GeneticsPeer::GENETICSREFNO, $geneticsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::GENETICSREFNO, $geneticsrefno, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GeneticsPeer::LOCALITY, $locality, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GeneticsPeer::C_CODE, $cCode, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GeneticsPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Tissues column
     *
     * Example usage:
     * <code>
     * $query->filterByTissues('fooValue');   // WHERE Tissues = 'fooValue'
     * $query->filterByTissues('%fooValue%'); // WHERE Tissues LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tissues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByTissues($tissues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tissues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tissues)) {
                $tissues = str_replace('*', '%', $tissues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::TISSUES, $tissues, $comparison);
    }

    /**
     * Filter the query on the ChromosomeNo column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomeno(1234); // WHERE ChromosomeNo = 1234
     * $query->filterByChromosomeno(array(12, 34)); // WHERE ChromosomeNo IN (12, 34)
     * $query->filterByChromosomeno(array('min' => 12)); // WHERE ChromosomeNo >= 12
     * $query->filterByChromosomeno(array('max' => 12)); // WHERE ChromosomeNo <= 12
     * </code>
     *
     * @param     mixed $chromosomeno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomeno($chromosomeno = null, $comparison = null)
    {
        if (is_array($chromosomeno)) {
            $useMinMax = false;
            if (isset($chromosomeno['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMENO, $chromosomeno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomeno['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMENO, $chromosomeno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMENO, $chromosomeno, $comparison);
    }

    /**
     * Filter the query on the ChromosomeRef column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomeref(1234); // WHERE ChromosomeRef = 1234
     * $query->filterByChromosomeref(array(12, 34)); // WHERE ChromosomeRef IN (12, 34)
     * $query->filterByChromosomeref(array('min' => 12)); // WHERE ChromosomeRef >= 12
     * $query->filterByChromosomeref(array('max' => 12)); // WHERE ChromosomeRef <= 12
     * </code>
     *
     * @param     mixed $chromosomeref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomeref($chromosomeref = null, $comparison = null)
    {
        if (is_array($chromosomeref)) {
            $useMinMax = false;
            if (isset($chromosomeref['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEREF, $chromosomeref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomeref['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEREF, $chromosomeref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEREF, $chromosomeref, $comparison);
    }

    /**
     * Filter the query on the ChromosomeDip column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomedip(1234); // WHERE ChromosomeDip = 1234
     * $query->filterByChromosomedip(array(12, 34)); // WHERE ChromosomeDip IN (12, 34)
     * $query->filterByChromosomedip(array('min' => 12)); // WHERE ChromosomeDip >= 12
     * $query->filterByChromosomedip(array('max' => 12)); // WHERE ChromosomeDip <= 12
     * </code>
     *
     * @param     mixed $chromosomedip The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomedip($chromosomedip = null, $comparison = null)
    {
        if (is_array($chromosomedip)) {
            $useMinMax = false;
            if (isset($chromosomedip['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIP, $chromosomedip['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomedip['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIP, $chromosomedip['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIP, $chromosomedip, $comparison);
    }

    /**
     * Filter the query on the ChromosomeDipTemp column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomediptemp(1234); // WHERE ChromosomeDipTemp = 1234
     * $query->filterByChromosomediptemp(array(12, 34)); // WHERE ChromosomeDipTemp IN (12, 34)
     * $query->filterByChromosomediptemp(array('min' => 12)); // WHERE ChromosomeDipTemp >= 12
     * $query->filterByChromosomediptemp(array('max' => 12)); // WHERE ChromosomeDipTemp <= 12
     * </code>
     *
     * @param     mixed $chromosomediptemp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomediptemp($chromosomediptemp = null, $comparison = null)
    {
        if (is_array($chromosomediptemp)) {
            $useMinMax = false;
            if (isset($chromosomediptemp['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPTEMP, $chromosomediptemp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomediptemp['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPTEMP, $chromosomediptemp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPTEMP, $chromosomediptemp, $comparison);
    }

    /**
     * Filter the query on the ChromosomeDipMax column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomedipmax(1234); // WHERE ChromosomeDipMax = 1234
     * $query->filterByChromosomedipmax(array(12, 34)); // WHERE ChromosomeDipMax IN (12, 34)
     * $query->filterByChromosomedipmax(array('min' => 12)); // WHERE ChromosomeDipMax >= 12
     * $query->filterByChromosomedipmax(array('max' => 12)); // WHERE ChromosomeDipMax <= 12
     * </code>
     *
     * @param     mixed $chromosomedipmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomedipmax($chromosomedipmax = null, $comparison = null)
    {
        if (is_array($chromosomedipmax)) {
            $useMinMax = false;
            if (isset($chromosomedipmax['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPMAX, $chromosomedipmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomedipmax['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPMAX, $chromosomedipmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPMAX, $chromosomedipmax, $comparison);
    }

    /**
     * Filter the query on the ChromosomeDipRef column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomedipref(1234); // WHERE ChromosomeDipRef = 1234
     * $query->filterByChromosomedipref(array(12, 34)); // WHERE ChromosomeDipRef IN (12, 34)
     * $query->filterByChromosomedipref(array('min' => 12)); // WHERE ChromosomeDipRef >= 12
     * $query->filterByChromosomedipref(array('max' => 12)); // WHERE ChromosomeDipRef <= 12
     * </code>
     *
     * @param     mixed $chromosomedipref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomedipref($chromosomedipref = null, $comparison = null)
    {
        if (is_array($chromosomedipref)) {
            $useMinMax = false;
            if (isset($chromosomedipref['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPREF, $chromosomedipref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomedipref['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPREF, $chromosomedipref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEDIPREF, $chromosomedipref, $comparison);
    }

    /**
     * Filter the query on the ChromosomeTypeRef column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosometyperef(1234); // WHERE ChromosomeTypeRef = 1234
     * $query->filterByChromosometyperef(array(12, 34)); // WHERE ChromosomeTypeRef IN (12, 34)
     * $query->filterByChromosometyperef(array('min' => 12)); // WHERE ChromosomeTypeRef >= 12
     * $query->filterByChromosometyperef(array('max' => 12)); // WHERE ChromosomeTypeRef <= 12
     * </code>
     *
     * @param     mixed $chromosometyperef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosometyperef($chromosometyperef = null, $comparison = null)
    {
        if (is_array($chromosometyperef)) {
            $useMinMax = false;
            if (isset($chromosometyperef['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMETYPEREF, $chromosometyperef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosometyperef['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMETYPEREF, $chromosometyperef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMETYPEREF, $chromosometyperef, $comparison);
    }

    /**
     * Filter the query on the Metacentric column
     *
     * Example usage:
     * <code>
     * $query->filterByMetacentric(1234); // WHERE Metacentric = 1234
     * $query->filterByMetacentric(array(12, 34)); // WHERE Metacentric IN (12, 34)
     * $query->filterByMetacentric(array('min' => 12)); // WHERE Metacentric >= 12
     * $query->filterByMetacentric(array('max' => 12)); // WHERE Metacentric <= 12
     * </code>
     *
     * @param     mixed $metacentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByMetacentric($metacentric = null, $comparison = null)
    {
        if (is_array($metacentric)) {
            $useMinMax = false;
            if (isset($metacentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::METACENTRIC, $metacentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metacentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::METACENTRIC, $metacentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::METACENTRIC, $metacentric, $comparison);
    }

    /**
     * Filter the query on the SubMetacentric column
     *
     * Example usage:
     * <code>
     * $query->filterBySubmetacentric(1234); // WHERE SubMetacentric = 1234
     * $query->filterBySubmetacentric(array(12, 34)); // WHERE SubMetacentric IN (12, 34)
     * $query->filterBySubmetacentric(array('min' => 12)); // WHERE SubMetacentric >= 12
     * $query->filterBySubmetacentric(array('max' => 12)); // WHERE SubMetacentric <= 12
     * </code>
     *
     * @param     mixed $submetacentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySubmetacentric($submetacentric = null, $comparison = null)
    {
        if (is_array($submetacentric)) {
            $useMinMax = false;
            if (isset($submetacentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::SUBMETACENTRIC, $submetacentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($submetacentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::SUBMETACENTRIC, $submetacentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SUBMETACENTRIC, $submetacentric, $comparison);
    }

    /**
     * Filter the query on the Subtelocentric column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtelocentric(1234); // WHERE Subtelocentric = 1234
     * $query->filterBySubtelocentric(array(12, 34)); // WHERE Subtelocentric IN (12, 34)
     * $query->filterBySubtelocentric(array('min' => 12)); // WHERE Subtelocentric >= 12
     * $query->filterBySubtelocentric(array('max' => 12)); // WHERE Subtelocentric <= 12
     * </code>
     *
     * @param     mixed $subtelocentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySubtelocentric($subtelocentric = null, $comparison = null)
    {
        if (is_array($subtelocentric)) {
            $useMinMax = false;
            if (isset($subtelocentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::SUBTELOCENTRIC, $subtelocentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtelocentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::SUBTELOCENTRIC, $subtelocentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SUBTELOCENTRIC, $subtelocentric, $comparison);
    }

    /**
     * Filter the query on the Telocentric column
     *
     * Example usage:
     * <code>
     * $query->filterByTelocentric(1234); // WHERE Telocentric = 1234
     * $query->filterByTelocentric(array(12, 34)); // WHERE Telocentric IN (12, 34)
     * $query->filterByTelocentric(array('min' => 12)); // WHERE Telocentric >= 12
     * $query->filterByTelocentric(array('max' => 12)); // WHERE Telocentric <= 12
     * </code>
     *
     * @param     mixed $telocentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByTelocentric($telocentric = null, $comparison = null)
    {
        if (is_array($telocentric)) {
            $useMinMax = false;
            if (isset($telocentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::TELOCENTRIC, $telocentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($telocentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::TELOCENTRIC, $telocentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::TELOCENTRIC, $telocentric, $comparison);
    }

    /**
     * Filter the query on the MetaSubmetacentric column
     *
     * Example usage:
     * <code>
     * $query->filterByMetasubmetacentric(1234); // WHERE MetaSubmetacentric = 1234
     * $query->filterByMetasubmetacentric(array(12, 34)); // WHERE MetaSubmetacentric IN (12, 34)
     * $query->filterByMetasubmetacentric(array('min' => 12)); // WHERE MetaSubmetacentric >= 12
     * $query->filterByMetasubmetacentric(array('max' => 12)); // WHERE MetaSubmetacentric <= 12
     * </code>
     *
     * @param     mixed $metasubmetacentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByMetasubmetacentric($metasubmetacentric = null, $comparison = null)
    {
        if (is_array($metasubmetacentric)) {
            $useMinMax = false;
            if (isset($metasubmetacentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::METASUBMETACENTRIC, $metasubmetacentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metasubmetacentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::METASUBMETACENTRIC, $metasubmetacentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::METASUBMETACENTRIC, $metasubmetacentric, $comparison);
    }

    /**
     * Filter the query on the SubteloAcrocentric column
     *
     * Example usage:
     * <code>
     * $query->filterBySubteloacrocentric(1234); // WHERE SubteloAcrocentric = 1234
     * $query->filterBySubteloacrocentric(array(12, 34)); // WHERE SubteloAcrocentric IN (12, 34)
     * $query->filterBySubteloacrocentric(array('min' => 12)); // WHERE SubteloAcrocentric >= 12
     * $query->filterBySubteloacrocentric(array('max' => 12)); // WHERE SubteloAcrocentric <= 12
     * </code>
     *
     * @param     mixed $subteloacrocentric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySubteloacrocentric($subteloacrocentric = null, $comparison = null)
    {
        if (is_array($subteloacrocentric)) {
            $useMinMax = false;
            if (isset($subteloacrocentric['min'])) {
                $this->addUsingAlias(GeneticsPeer::SUBTELOACROCENTRIC, $subteloacrocentric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subteloacrocentric['max'])) {
                $this->addUsingAlias(GeneticsPeer::SUBTELOACROCENTRIC, $subteloacrocentric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SUBTELOACROCENTRIC, $subteloacrocentric, $comparison);
    }

    /**
     * Filter the query on the ChromosomeArm column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomearm(1234); // WHERE ChromosomeArm = 1234
     * $query->filterByChromosomearm(array(12, 34)); // WHERE ChromosomeArm IN (12, 34)
     * $query->filterByChromosomearm(array('min' => 12)); // WHERE ChromosomeArm >= 12
     * $query->filterByChromosomearm(array('max' => 12)); // WHERE ChromosomeArm <= 12
     * </code>
     *
     * @param     mixed $chromosomearm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomearm($chromosomearm = null, $comparison = null)
    {
        if (is_array($chromosomearm)) {
            $useMinMax = false;
            if (isset($chromosomearm['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARM, $chromosomearm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomearm['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARM, $chromosomearm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARM, $chromosomearm, $comparison);
    }

    /**
     * Filter the query on the ChromosomeArmCalc column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomearmcalc(1234); // WHERE ChromosomeArmCalc = 1234
     * $query->filterByChromosomearmcalc(array(12, 34)); // WHERE ChromosomeArmCalc IN (12, 34)
     * $query->filterByChromosomearmcalc(array('min' => 12)); // WHERE ChromosomeArmCalc >= 12
     * $query->filterByChromosomearmcalc(array('max' => 12)); // WHERE ChromosomeArmCalc <= 12
     * </code>
     *
     * @param     mixed $chromosomearmcalc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomearmcalc($chromosomearmcalc = null, $comparison = null)
    {
        if (is_array($chromosomearmcalc)) {
            $useMinMax = false;
            if (isset($chromosomearmcalc['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMCALC, $chromosomearmcalc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomearmcalc['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMCALC, $chromosomearmcalc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMCALC, $chromosomearmcalc, $comparison);
    }

    /**
     * Filter the query on the ChromosomeArmTemp column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomearmtemp(1234); // WHERE ChromosomeArmTemp = 1234
     * $query->filterByChromosomearmtemp(array(12, 34)); // WHERE ChromosomeArmTemp IN (12, 34)
     * $query->filterByChromosomearmtemp(array('min' => 12)); // WHERE ChromosomeArmTemp >= 12
     * $query->filterByChromosomearmtemp(array('max' => 12)); // WHERE ChromosomeArmTemp <= 12
     * </code>
     *
     * @param     mixed $chromosomearmtemp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomearmtemp($chromosomearmtemp = null, $comparison = null)
    {
        if (is_array($chromosomearmtemp)) {
            $useMinMax = false;
            if (isset($chromosomearmtemp['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMTEMP, $chromosomearmtemp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomearmtemp['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMTEMP, $chromosomearmtemp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMTEMP, $chromosomearmtemp, $comparison);
    }

    /**
     * Filter the query on the ChromosomeArmRef column
     *
     * Example usage:
     * <code>
     * $query->filterByChromosomearmref(1234); // WHERE ChromosomeArmRef = 1234
     * $query->filterByChromosomearmref(array(12, 34)); // WHERE ChromosomeArmRef IN (12, 34)
     * $query->filterByChromosomearmref(array('min' => 12)); // WHERE ChromosomeArmRef >= 12
     * $query->filterByChromosomearmref(array('max' => 12)); // WHERE ChromosomeArmRef <= 12
     * </code>
     *
     * @param     mixed $chromosomearmref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByChromosomearmref($chromosomearmref = null, $comparison = null)
    {
        if (is_array($chromosomearmref)) {
            $useMinMax = false;
            if (isset($chromosomearmref['min'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMREF, $chromosomearmref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chromosomearmref['max'])) {
                $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMREF, $chromosomearmref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::CHROMOSOMEARMREF, $chromosomearmref, $comparison);
    }

    /**
     * Filter the query on the SexMech column
     *
     * Example usage:
     * <code>
     * $query->filterBySexmech('fooValue');   // WHERE SexMech = 'fooValue'
     * $query->filterBySexmech('%fooValue%'); // WHERE SexMech LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexmech The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySexmech($sexmech = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexmech)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexmech)) {
                $sexmech = str_replace('*', '%', $sexmech);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SEXMECH, $sexmech, $comparison);
    }

    /**
     * Filter the query on the SexmechRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySexmechref(1234); // WHERE SexmechRef = 1234
     * $query->filterBySexmechref(array(12, 34)); // WHERE SexmechRef IN (12, 34)
     * $query->filterBySexmechref(array('min' => 12)); // WHERE SexmechRef >= 12
     * $query->filterBySexmechref(array('max' => 12)); // WHERE SexmechRef <= 12
     * </code>
     *
     * @param     mixed $sexmechref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterBySexmechref($sexmechref = null, $comparison = null)
    {
        if (is_array($sexmechref)) {
            $useMinMax = false;
            if (isset($sexmechref['min'])) {
                $this->addUsingAlias(GeneticsPeer::SEXMECHREF, $sexmechref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sexmechref['max'])) {
                $this->addUsingAlias(GeneticsPeer::SEXMECHREF, $sexmechref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::SEXMECHREF, $sexmechref, $comparison);
    }

    /**
     * Filter the query on the DNASequence column
     *
     * Example usage:
     * <code>
     * $query->filterByDnasequence(1234); // WHERE DNASequence = 1234
     * $query->filterByDnasequence(array(12, 34)); // WHERE DNASequence IN (12, 34)
     * $query->filterByDnasequence(array('min' => 12)); // WHERE DNASequence >= 12
     * $query->filterByDnasequence(array('max' => 12)); // WHERE DNASequence <= 12
     * </code>
     *
     * @param     mixed $dnasequence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDnasequence($dnasequence = null, $comparison = null)
    {
        if (is_array($dnasequence)) {
            $useMinMax = false;
            if (isset($dnasequence['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNASEQUENCE, $dnasequence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dnasequence['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNASEQUENCE, $dnasequence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNASEQUENCE, $dnasequence, $comparison);
    }

    /**
     * Filter the query on the DNASeqRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDnaseqref(1234); // WHERE DNASeqRef = 1234
     * $query->filterByDnaseqref(array(12, 34)); // WHERE DNASeqRef IN (12, 34)
     * $query->filterByDnaseqref(array('min' => 12)); // WHERE DNASeqRef >= 12
     * $query->filterByDnaseqref(array('max' => 12)); // WHERE DNASeqRef <= 12
     * </code>
     *
     * @param     mixed $dnaseqref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDnaseqref($dnaseqref = null, $comparison = null)
    {
        if (is_array($dnaseqref)) {
            $useMinMax = false;
            if (isset($dnaseqref['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNASEQREF, $dnaseqref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dnaseqref['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNASEQREF, $dnaseqref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNASEQREF, $dnaseqref, $comparison);
    }

    /**
     * Filter the query on the DNAAnalysis column
     *
     * Example usage:
     * <code>
     * $query->filterByDnaanalysis(1234); // WHERE DNAAnalysis = 1234
     * $query->filterByDnaanalysis(array(12, 34)); // WHERE DNAAnalysis IN (12, 34)
     * $query->filterByDnaanalysis(array('min' => 12)); // WHERE DNAAnalysis >= 12
     * $query->filterByDnaanalysis(array('max' => 12)); // WHERE DNAAnalysis <= 12
     * </code>
     *
     * @param     mixed $dnaanalysis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDnaanalysis($dnaanalysis = null, $comparison = null)
    {
        if (is_array($dnaanalysis)) {
            $useMinMax = false;
            if (isset($dnaanalysis['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNAANALYSIS, $dnaanalysis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dnaanalysis['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNAANALYSIS, $dnaanalysis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNAANALYSIS, $dnaanalysis, $comparison);
    }

    /**
     * Filter the query on the DNAAnalRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDnaanalref(1234); // WHERE DNAAnalRef = 1234
     * $query->filterByDnaanalref(array(12, 34)); // WHERE DNAAnalRef IN (12, 34)
     * $query->filterByDnaanalref(array('min' => 12)); // WHERE DNAAnalRef >= 12
     * $query->filterByDnaanalref(array('max' => 12)); // WHERE DNAAnalRef <= 12
     * </code>
     *
     * @param     mixed $dnaanalref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDnaanalref($dnaanalref = null, $comparison = null)
    {
        if (is_array($dnaanalref)) {
            $useMinMax = false;
            if (isset($dnaanalref['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNAANALREF, $dnaanalref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dnaanalref['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNAANALREF, $dnaanalref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNAANALREF, $dnaanalref, $comparison);
    }

    /**
     * Filter the query on the GeneticMarker column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneticmarker(1234); // WHERE GeneticMarker = 1234
     * $query->filterByGeneticmarker(array(12, 34)); // WHERE GeneticMarker IN (12, 34)
     * $query->filterByGeneticmarker(array('min' => 12)); // WHERE GeneticMarker >= 12
     * $query->filterByGeneticmarker(array('max' => 12)); // WHERE GeneticMarker <= 12
     * </code>
     *
     * @param     mixed $geneticmarker The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByGeneticmarker($geneticmarker = null, $comparison = null)
    {
        if (is_array($geneticmarker)) {
            $useMinMax = false;
            if (isset($geneticmarker['min'])) {
                $this->addUsingAlias(GeneticsPeer::GENETICMARKER, $geneticmarker['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geneticmarker['max'])) {
                $this->addUsingAlias(GeneticsPeer::GENETICMARKER, $geneticmarker['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::GENETICMARKER, $geneticmarker, $comparison);
    }

    /**
     * Filter the query on the GMarkerRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGmarkerref(1234); // WHERE GMarkerRef = 1234
     * $query->filterByGmarkerref(array(12, 34)); // WHERE GMarkerRef IN (12, 34)
     * $query->filterByGmarkerref(array('min' => 12)); // WHERE GMarkerRef >= 12
     * $query->filterByGmarkerref(array('max' => 12)); // WHERE GMarkerRef <= 12
     * </code>
     *
     * @param     mixed $gmarkerref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByGmarkerref($gmarkerref = null, $comparison = null)
    {
        if (is_array($gmarkerref)) {
            $useMinMax = false;
            if (isset($gmarkerref['min'])) {
                $this->addUsingAlias(GeneticsPeer::GMARKERREF, $gmarkerref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gmarkerref['max'])) {
                $this->addUsingAlias(GeneticsPeer::GMARKERREF, $gmarkerref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::GMARKERREF, $gmarkerref, $comparison);
    }

    /**
     * Filter the query on the DNA column
     *
     * Example usage:
     * <code>
     * $query->filterByDna(1234); // WHERE DNA = 1234
     * $query->filterByDna(array(12, 34)); // WHERE DNA IN (12, 34)
     * $query->filterByDna(array('min' => 12)); // WHERE DNA >= 12
     * $query->filterByDna(array('max' => 12)); // WHERE DNA <= 12
     * </code>
     *
     * @param     mixed $dna The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDna($dna = null, $comparison = null)
    {
        if (is_array($dna)) {
            $useMinMax = false;
            if (isset($dna['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNA, $dna['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dna['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNA, $dna['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNA, $dna, $comparison);
    }

    /**
     * Filter the query on the DNARef column
     *
     * Example usage:
     * <code>
     * $query->filterByDnaref(1234); // WHERE DNARef = 1234
     * $query->filterByDnaref(array(12, 34)); // WHERE DNARef IN (12, 34)
     * $query->filterByDnaref(array('min' => 12)); // WHERE DNARef >= 12
     * $query->filterByDnaref(array('max' => 12)); // WHERE DNARef <= 12
     * </code>
     *
     * @param     mixed $dnaref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDnaref($dnaref = null, $comparison = null)
    {
        if (is_array($dnaref)) {
            $useMinMax = false;
            if (isset($dnaref['min'])) {
                $this->addUsingAlias(GeneticsPeer::DNAREF, $dnaref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dnaref['max'])) {
                $this->addUsingAlias(GeneticsPeer::DNAREF, $dnaref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DNAREF, $dnaref, $comparison);
    }

    /**
     * Filter the query on the RemarksRef column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksref(1234); // WHERE RemarksRef = 1234
     * $query->filterByRemarksref(array(12, 34)); // WHERE RemarksRef IN (12, 34)
     * $query->filterByRemarksref(array('min' => 12)); // WHERE RemarksRef >= 12
     * $query->filterByRemarksref(array('max' => 12)); // WHERE RemarksRef <= 12
     * </code>
     *
     * @param     mixed $remarksref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByRemarksref($remarksref = null, $comparison = null)
    {
        if (is_array($remarksref)) {
            $useMinMax = false;
            if (isset($remarksref['min'])) {
                $this->addUsingAlias(GeneticsPeer::REMARKSREF, $remarksref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($remarksref['max'])) {
                $this->addUsingAlias(GeneticsPeer::REMARKSREF, $remarksref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::REMARKSREF, $remarksref, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GeneticsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GeneticsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::ENTERED, $entered, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GeneticsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GeneticsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GeneticsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GeneticsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::MODIFIED, $modified, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GeneticsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GeneticsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GeneticsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GeneticsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::EXPERT, $expert, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GeneticsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GeneticsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GeneticsPeer::REMARK, $remark, $comparison);
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
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GeneticsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GeneticsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GeneticsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Genetics $genetics Object to remove from the list of results
     *
     * @return GeneticsQuery The current query, for fluid interface
     */
    public function prune($genetics = null)
    {
        if ($genetics) {
            $this->addUsingAlias(GeneticsPeer::AUTOCTR, $genetics->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
