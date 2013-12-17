<?php


/**
 * Base class that represents a query for the 'morphmet' table.
 *
 *
 *
 * @method MorphmetQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method MorphmetQuery orderByPicname($order = Criteria::ASC) Order by the PicName column
 * @method MorphmetQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MorphmetQuery orderByTl($order = Criteria::ASC) Order by the TL column
 * @method MorphmetQuery orderBySl($order = Criteria::ASC) Order by the SL column
 * @method MorphmetQuery orderByFl($order = Criteria::ASC) Order by the FL column
 * @method MorphmetQuery orderByHl($order = Criteria::ASC) Order by the HL column
 * @method MorphmetQuery orderByPal($order = Criteria::ASC) Order by the PAL column
 * @method MorphmetQuery orderByPdl($order = Criteria::ASC) Order by the PDL column
 * @method MorphmetQuery orderByPpl($order = Criteria::ASC) Order by the PPL column
 * @method MorphmetQuery orderByPpel($order = Criteria::ASC) Order by the PPEL column
 * @method MorphmetQuery orderByEd($order = Criteria::ASC) Order by the ED column
 * @method MorphmetQuery orderByPol($order = Criteria::ASC) Order by the POL column
 * @method MorphmetQuery orderByBd($order = Criteria::ASC) Order by the BD column
 * @method MorphmetQuery orderByCh($order = Criteria::ASC) Order by the CH column
 * @method MorphmetQuery orderByCa($order = Criteria::ASC) Order by the CA column
 * @method MorphmetQuery orderBySnouttipx($order = Criteria::ASC) Order by the SnoutTipX column
 * @method MorphmetQuery orderBySnouttipy($order = Criteria::ASC) Order by the SnoutTipY column
 * @method MorphmetQuery orderByCaudaloriginx($order = Criteria::ASC) Order by the CaudalOriginX column
 * @method MorphmetQuery orderByCaudaloriginy($order = Criteria::ASC) Order by the CaudalOriginY column
 * @method MorphmetQuery orderByTlendx($order = Criteria::ASC) Order by the TLEndX column
 * @method MorphmetQuery orderByTlendy($order = Criteria::ASC) Order by the TLEndY column
 * @method MorphmetQuery orderByDorsaloriginx($order = Criteria::ASC) Order by the DorsalOriginX column
 * @method MorphmetQuery orderByDorsaloriginy($order = Criteria::ASC) Order by the DorsalOriginY column
 * @method MorphmetQuery orderByAnaloriginx($order = Criteria::ASC) Order by the AnalOriginX column
 * @method MorphmetQuery orderByAnaloriginy($order = Criteria::ASC) Order by the AnalOriginY column
 * @method MorphmetQuery orderByEyefrontx($order = Criteria::ASC) Order by the EyeFrontX column
 * @method MorphmetQuery orderByEyefronty($order = Criteria::ASC) Order by the EyeFrontY column
 * @method MorphmetQuery orderByEyeendx($order = Criteria::ASC) Order by the EyeEndX column
 * @method MorphmetQuery orderByEyeendy($order = Criteria::ASC) Order by the EyeEndY column
 * @method MorphmetQuery orderByOpercleendx($order = Criteria::ASC) Order by the OpercleEndX column
 * @method MorphmetQuery orderByOpercleendy($order = Criteria::ASC) Order by the OpercleEndY column
 * @method MorphmetQuery orderByMaxdepthdorsalx($order = Criteria::ASC) Order by the MaxDepthDorsalX column
 * @method MorphmetQuery orderByMaxdepthdorsaly($order = Criteria::ASC) Order by the MaxDepthDorsalY column
 * @method MorphmetQuery orderByMaxdepthventralx($order = Criteria::ASC) Order by the MaxDepthVentralX column
 * @method MorphmetQuery orderByMaxdepthventraly($order = Criteria::ASC) Order by the MaxDepthVentralY column
 * @method MorphmetQuery orderByPectoraloriginx($order = Criteria::ASC) Order by the PectoralOriginX column
 * @method MorphmetQuery orderByPectoraloriginy($order = Criteria::ASC) Order by the PectoralOriginY column
 * @method MorphmetQuery orderByPelvicoriginx($order = Criteria::ASC) Order by the PelvicOriginX column
 * @method MorphmetQuery orderByPelvicoriginy($order = Criteria::ASC) Order by the PelvicOriginY column
 * @method MorphmetQuery orderByFlendx($order = Criteria::ASC) Order by the FLEndX column
 * @method MorphmetQuery orderByFlendy($order = Criteria::ASC) Order by the FLEndY column
 * @method MorphmetQuery orderByCaudalupperx($order = Criteria::ASC) Order by the CaudalUpperX column
 * @method MorphmetQuery orderByCaudaluppery($order = Criteria::ASC) Order by the CaudalUpperY column
 * @method MorphmetQuery orderByCaudallowerx($order = Criteria::ASC) Order by the CaudalLowerX column
 * @method MorphmetQuery orderByCaudallowery($order = Criteria::ASC) Order by the CaudalLowerY column
 * @method MorphmetQuery orderByAspectratio($order = Criteria::ASC) Order by the AspectRatio column
 * @method MorphmetQuery orderByDoubtful($order = Criteria::ASC) Order by the Doubtful column
 * @method MorphmetQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method MorphmetQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MorphmetQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MorphmetQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MorphmetQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MorphmetQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MorphmetQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method MorphmetQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MorphmetQuery groupByAutoctr() Group by the autoctr column
 * @method MorphmetQuery groupByPicname() Group by the PicName column
 * @method MorphmetQuery groupBySpeccode() Group by the Speccode column
 * @method MorphmetQuery groupByTl() Group by the TL column
 * @method MorphmetQuery groupBySl() Group by the SL column
 * @method MorphmetQuery groupByFl() Group by the FL column
 * @method MorphmetQuery groupByHl() Group by the HL column
 * @method MorphmetQuery groupByPal() Group by the PAL column
 * @method MorphmetQuery groupByPdl() Group by the PDL column
 * @method MorphmetQuery groupByPpl() Group by the PPL column
 * @method MorphmetQuery groupByPpel() Group by the PPEL column
 * @method MorphmetQuery groupByEd() Group by the ED column
 * @method MorphmetQuery groupByPol() Group by the POL column
 * @method MorphmetQuery groupByBd() Group by the BD column
 * @method MorphmetQuery groupByCh() Group by the CH column
 * @method MorphmetQuery groupByCa() Group by the CA column
 * @method MorphmetQuery groupBySnouttipx() Group by the SnoutTipX column
 * @method MorphmetQuery groupBySnouttipy() Group by the SnoutTipY column
 * @method MorphmetQuery groupByCaudaloriginx() Group by the CaudalOriginX column
 * @method MorphmetQuery groupByCaudaloriginy() Group by the CaudalOriginY column
 * @method MorphmetQuery groupByTlendx() Group by the TLEndX column
 * @method MorphmetQuery groupByTlendy() Group by the TLEndY column
 * @method MorphmetQuery groupByDorsaloriginx() Group by the DorsalOriginX column
 * @method MorphmetQuery groupByDorsaloriginy() Group by the DorsalOriginY column
 * @method MorphmetQuery groupByAnaloriginx() Group by the AnalOriginX column
 * @method MorphmetQuery groupByAnaloriginy() Group by the AnalOriginY column
 * @method MorphmetQuery groupByEyefrontx() Group by the EyeFrontX column
 * @method MorphmetQuery groupByEyefronty() Group by the EyeFrontY column
 * @method MorphmetQuery groupByEyeendx() Group by the EyeEndX column
 * @method MorphmetQuery groupByEyeendy() Group by the EyeEndY column
 * @method MorphmetQuery groupByOpercleendx() Group by the OpercleEndX column
 * @method MorphmetQuery groupByOpercleendy() Group by the OpercleEndY column
 * @method MorphmetQuery groupByMaxdepthdorsalx() Group by the MaxDepthDorsalX column
 * @method MorphmetQuery groupByMaxdepthdorsaly() Group by the MaxDepthDorsalY column
 * @method MorphmetQuery groupByMaxdepthventralx() Group by the MaxDepthVentralX column
 * @method MorphmetQuery groupByMaxdepthventraly() Group by the MaxDepthVentralY column
 * @method MorphmetQuery groupByPectoraloriginx() Group by the PectoralOriginX column
 * @method MorphmetQuery groupByPectoraloriginy() Group by the PectoralOriginY column
 * @method MorphmetQuery groupByPelvicoriginx() Group by the PelvicOriginX column
 * @method MorphmetQuery groupByPelvicoriginy() Group by the PelvicOriginY column
 * @method MorphmetQuery groupByFlendx() Group by the FLEndX column
 * @method MorphmetQuery groupByFlendy() Group by the FLEndY column
 * @method MorphmetQuery groupByCaudalupperx() Group by the CaudalUpperX column
 * @method MorphmetQuery groupByCaudaluppery() Group by the CaudalUpperY column
 * @method MorphmetQuery groupByCaudallowerx() Group by the CaudalLowerX column
 * @method MorphmetQuery groupByCaudallowery() Group by the CaudalLowerY column
 * @method MorphmetQuery groupByAspectratio() Group by the AspectRatio column
 * @method MorphmetQuery groupByDoubtful() Group by the Doubtful column
 * @method MorphmetQuery groupByRemarks() Group by the Remarks column
 * @method MorphmetQuery groupByEntered() Group by the Entered column
 * @method MorphmetQuery groupByDateentered() Group by the DateEntered column
 * @method MorphmetQuery groupByModified() Group by the Modified column
 * @method MorphmetQuery groupByDatemodified() Group by the DateModified column
 * @method MorphmetQuery groupByExpert() Group by the Expert column
 * @method MorphmetQuery groupByDatechecked() Group by the DateChecked column
 * @method MorphmetQuery groupByTs() Group by the TS column
 *
 * @method MorphmetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MorphmetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MorphmetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Morphmet findOne(PropelPDO $con = null) Return the first Morphmet matching the query
 * @method Morphmet findOneOrCreate(PropelPDO $con = null) Return the first Morphmet matching the query, or a new Morphmet object populated from the query conditions when no match is found
 *
 * @method Morphmet findOneByAutoctr(int $autoctr) Return the first Morphmet filtered by the autoctr column
 * @method Morphmet findOneBySpeccode(int $Speccode) Return the first Morphmet filtered by the Speccode column
 * @method Morphmet findOneByTl(int $TL) Return the first Morphmet filtered by the TL column
 * @method Morphmet findOneBySl(int $SL) Return the first Morphmet filtered by the SL column
 * @method Morphmet findOneByFl(int $FL) Return the first Morphmet filtered by the FL column
 * @method Morphmet findOneByHl(int $HL) Return the first Morphmet filtered by the HL column
 * @method Morphmet findOneByPal(int $PAL) Return the first Morphmet filtered by the PAL column
 * @method Morphmet findOneByPdl(int $PDL) Return the first Morphmet filtered by the PDL column
 * @method Morphmet findOneByPpl(int $PPL) Return the first Morphmet filtered by the PPL column
 * @method Morphmet findOneByPpel(int $PPEL) Return the first Morphmet filtered by the PPEL column
 * @method Morphmet findOneByEd(int $ED) Return the first Morphmet filtered by the ED column
 * @method Morphmet findOneByPol(int $POL) Return the first Morphmet filtered by the POL column
 * @method Morphmet findOneByBd(int $BD) Return the first Morphmet filtered by the BD column
 * @method Morphmet findOneByCh(int $CH) Return the first Morphmet filtered by the CH column
 * @method Morphmet findOneByCa(int $CA) Return the first Morphmet filtered by the CA column
 * @method Morphmet findOneBySnouttipx(int $SnoutTipX) Return the first Morphmet filtered by the SnoutTipX column
 * @method Morphmet findOneBySnouttipy(int $SnoutTipY) Return the first Morphmet filtered by the SnoutTipY column
 * @method Morphmet findOneByCaudaloriginx(int $CaudalOriginX) Return the first Morphmet filtered by the CaudalOriginX column
 * @method Morphmet findOneByCaudaloriginy(int $CaudalOriginY) Return the first Morphmet filtered by the CaudalOriginY column
 * @method Morphmet findOneByTlendx(int $TLEndX) Return the first Morphmet filtered by the TLEndX column
 * @method Morphmet findOneByTlendy(int $TLEndY) Return the first Morphmet filtered by the TLEndY column
 * @method Morphmet findOneByDorsaloriginx(int $DorsalOriginX) Return the first Morphmet filtered by the DorsalOriginX column
 * @method Morphmet findOneByDorsaloriginy(int $DorsalOriginY) Return the first Morphmet filtered by the DorsalOriginY column
 * @method Morphmet findOneByAnaloriginx(int $AnalOriginX) Return the first Morphmet filtered by the AnalOriginX column
 * @method Morphmet findOneByAnaloriginy(int $AnalOriginY) Return the first Morphmet filtered by the AnalOriginY column
 * @method Morphmet findOneByEyefrontx(int $EyeFrontX) Return the first Morphmet filtered by the EyeFrontX column
 * @method Morphmet findOneByEyefronty(int $EyeFrontY) Return the first Morphmet filtered by the EyeFrontY column
 * @method Morphmet findOneByEyeendx(int $EyeEndX) Return the first Morphmet filtered by the EyeEndX column
 * @method Morphmet findOneByEyeendy(int $EyeEndY) Return the first Morphmet filtered by the EyeEndY column
 * @method Morphmet findOneByOpercleendx(int $OpercleEndX) Return the first Morphmet filtered by the OpercleEndX column
 * @method Morphmet findOneByOpercleendy(int $OpercleEndY) Return the first Morphmet filtered by the OpercleEndY column
 * @method Morphmet findOneByMaxdepthdorsalx(int $MaxDepthDorsalX) Return the first Morphmet filtered by the MaxDepthDorsalX column
 * @method Morphmet findOneByMaxdepthdorsaly(int $MaxDepthDorsalY) Return the first Morphmet filtered by the MaxDepthDorsalY column
 * @method Morphmet findOneByMaxdepthventralx(int $MaxDepthVentralX) Return the first Morphmet filtered by the MaxDepthVentralX column
 * @method Morphmet findOneByMaxdepthventraly(int $MaxDepthVentralY) Return the first Morphmet filtered by the MaxDepthVentralY column
 * @method Morphmet findOneByPectoraloriginx(int $PectoralOriginX) Return the first Morphmet filtered by the PectoralOriginX column
 * @method Morphmet findOneByPectoraloriginy(int $PectoralOriginY) Return the first Morphmet filtered by the PectoralOriginY column
 * @method Morphmet findOneByPelvicoriginx(int $PelvicOriginX) Return the first Morphmet filtered by the PelvicOriginX column
 * @method Morphmet findOneByPelvicoriginy(int $PelvicOriginY) Return the first Morphmet filtered by the PelvicOriginY column
 * @method Morphmet findOneByFlendx(int $FLEndX) Return the first Morphmet filtered by the FLEndX column
 * @method Morphmet findOneByFlendy(int $FLEndY) Return the first Morphmet filtered by the FLEndY column
 * @method Morphmet findOneByCaudalupperx(int $CaudalUpperX) Return the first Morphmet filtered by the CaudalUpperX column
 * @method Morphmet findOneByCaudaluppery(int $CaudalUpperY) Return the first Morphmet filtered by the CaudalUpperY column
 * @method Morphmet findOneByCaudallowerx(int $CaudalLowerX) Return the first Morphmet filtered by the CaudalLowerX column
 * @method Morphmet findOneByCaudallowery(int $CaudalLowerY) Return the first Morphmet filtered by the CaudalLowerY column
 * @method Morphmet findOneByAspectratio(double $AspectRatio) Return the first Morphmet filtered by the AspectRatio column
 * @method Morphmet findOneByDoubtful(int $Doubtful) Return the first Morphmet filtered by the Doubtful column
 * @method Morphmet findOneByRemarks(string $Remarks) Return the first Morphmet filtered by the Remarks column
 * @method Morphmet findOneByEntered(int $Entered) Return the first Morphmet filtered by the Entered column
 * @method Morphmet findOneByDateentered(string $DateEntered) Return the first Morphmet filtered by the DateEntered column
 * @method Morphmet findOneByModified(int $Modified) Return the first Morphmet filtered by the Modified column
 * @method Morphmet findOneByDatemodified(string $DateModified) Return the first Morphmet filtered by the DateModified column
 * @method Morphmet findOneByExpert(int $Expert) Return the first Morphmet filtered by the Expert column
 * @method Morphmet findOneByDatechecked(string $DateChecked) Return the first Morphmet filtered by the DateChecked column
 * @method Morphmet findOneByTs(string $TS) Return the first Morphmet filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Morphmet objects filtered by the autoctr column
 * @method array findByPicname(string $PicName) Return Morphmet objects filtered by the PicName column
 * @method array findBySpeccode(int $Speccode) Return Morphmet objects filtered by the Speccode column
 * @method array findByTl(int $TL) Return Morphmet objects filtered by the TL column
 * @method array findBySl(int $SL) Return Morphmet objects filtered by the SL column
 * @method array findByFl(int $FL) Return Morphmet objects filtered by the FL column
 * @method array findByHl(int $HL) Return Morphmet objects filtered by the HL column
 * @method array findByPal(int $PAL) Return Morphmet objects filtered by the PAL column
 * @method array findByPdl(int $PDL) Return Morphmet objects filtered by the PDL column
 * @method array findByPpl(int $PPL) Return Morphmet objects filtered by the PPL column
 * @method array findByPpel(int $PPEL) Return Morphmet objects filtered by the PPEL column
 * @method array findByEd(int $ED) Return Morphmet objects filtered by the ED column
 * @method array findByPol(int $POL) Return Morphmet objects filtered by the POL column
 * @method array findByBd(int $BD) Return Morphmet objects filtered by the BD column
 * @method array findByCh(int $CH) Return Morphmet objects filtered by the CH column
 * @method array findByCa(int $CA) Return Morphmet objects filtered by the CA column
 * @method array findBySnouttipx(int $SnoutTipX) Return Morphmet objects filtered by the SnoutTipX column
 * @method array findBySnouttipy(int $SnoutTipY) Return Morphmet objects filtered by the SnoutTipY column
 * @method array findByCaudaloriginx(int $CaudalOriginX) Return Morphmet objects filtered by the CaudalOriginX column
 * @method array findByCaudaloriginy(int $CaudalOriginY) Return Morphmet objects filtered by the CaudalOriginY column
 * @method array findByTlendx(int $TLEndX) Return Morphmet objects filtered by the TLEndX column
 * @method array findByTlendy(int $TLEndY) Return Morphmet objects filtered by the TLEndY column
 * @method array findByDorsaloriginx(int $DorsalOriginX) Return Morphmet objects filtered by the DorsalOriginX column
 * @method array findByDorsaloriginy(int $DorsalOriginY) Return Morphmet objects filtered by the DorsalOriginY column
 * @method array findByAnaloriginx(int $AnalOriginX) Return Morphmet objects filtered by the AnalOriginX column
 * @method array findByAnaloriginy(int $AnalOriginY) Return Morphmet objects filtered by the AnalOriginY column
 * @method array findByEyefrontx(int $EyeFrontX) Return Morphmet objects filtered by the EyeFrontX column
 * @method array findByEyefronty(int $EyeFrontY) Return Morphmet objects filtered by the EyeFrontY column
 * @method array findByEyeendx(int $EyeEndX) Return Morphmet objects filtered by the EyeEndX column
 * @method array findByEyeendy(int $EyeEndY) Return Morphmet objects filtered by the EyeEndY column
 * @method array findByOpercleendx(int $OpercleEndX) Return Morphmet objects filtered by the OpercleEndX column
 * @method array findByOpercleendy(int $OpercleEndY) Return Morphmet objects filtered by the OpercleEndY column
 * @method array findByMaxdepthdorsalx(int $MaxDepthDorsalX) Return Morphmet objects filtered by the MaxDepthDorsalX column
 * @method array findByMaxdepthdorsaly(int $MaxDepthDorsalY) Return Morphmet objects filtered by the MaxDepthDorsalY column
 * @method array findByMaxdepthventralx(int $MaxDepthVentralX) Return Morphmet objects filtered by the MaxDepthVentralX column
 * @method array findByMaxdepthventraly(int $MaxDepthVentralY) Return Morphmet objects filtered by the MaxDepthVentralY column
 * @method array findByPectoraloriginx(int $PectoralOriginX) Return Morphmet objects filtered by the PectoralOriginX column
 * @method array findByPectoraloriginy(int $PectoralOriginY) Return Morphmet objects filtered by the PectoralOriginY column
 * @method array findByPelvicoriginx(int $PelvicOriginX) Return Morphmet objects filtered by the PelvicOriginX column
 * @method array findByPelvicoriginy(int $PelvicOriginY) Return Morphmet objects filtered by the PelvicOriginY column
 * @method array findByFlendx(int $FLEndX) Return Morphmet objects filtered by the FLEndX column
 * @method array findByFlendy(int $FLEndY) Return Morphmet objects filtered by the FLEndY column
 * @method array findByCaudalupperx(int $CaudalUpperX) Return Morphmet objects filtered by the CaudalUpperX column
 * @method array findByCaudaluppery(int $CaudalUpperY) Return Morphmet objects filtered by the CaudalUpperY column
 * @method array findByCaudallowerx(int $CaudalLowerX) Return Morphmet objects filtered by the CaudalLowerX column
 * @method array findByCaudallowery(int $CaudalLowerY) Return Morphmet objects filtered by the CaudalLowerY column
 * @method array findByAspectratio(double $AspectRatio) Return Morphmet objects filtered by the AspectRatio column
 * @method array findByDoubtful(int $Doubtful) Return Morphmet objects filtered by the Doubtful column
 * @method array findByRemarks(string $Remarks) Return Morphmet objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Morphmet objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Morphmet objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Morphmet objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Morphmet objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Morphmet objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Morphmet objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Morphmet objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphmetQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMorphmetQuery object.
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
            $modelName = 'Morphmet';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MorphmetQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MorphmetQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MorphmetQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MorphmetQuery) {
            return $criteria;
        }
        $query = new MorphmetQuery(null, null, $modelAlias);

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
     * @return   Morphmet|Morphmet[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MorphmetPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Morphmet A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPicname($key, $con = null)
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
     * @return                 Morphmet A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `PicName`, `Speccode`, `TL`, `SL`, `FL`, `HL`, `PAL`, `PDL`, `PPL`, `PPEL`, `ED`, `POL`, `BD`, `CH`, `CA`, `SnoutTipX`, `SnoutTipY`, `CaudalOriginX`, `CaudalOriginY`, `TLEndX`, `TLEndY`, `DorsalOriginX`, `DorsalOriginY`, `AnalOriginX`, `AnalOriginY`, `EyeFrontX`, `EyeFrontY`, `EyeEndX`, `EyeEndY`, `OpercleEndX`, `OpercleEndY`, `MaxDepthDorsalX`, `MaxDepthDorsalY`, `MaxDepthVentralX`, `MaxDepthVentralY`, `PectoralOriginX`, `PectoralOriginY`, `PelvicOriginX`, `PelvicOriginY`, `FLEndX`, `FLEndY`, `CaudalUpperX`, `CaudalUpperY`, `CaudalLowerX`, `CaudalLowerY`, `AspectRatio`, `Doubtful`, `Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `morphmet` WHERE `PicName` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Morphmet();
            $obj->hydrate($row);
            MorphmetPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Morphmet|Morphmet[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Morphmet[]|mixed the list of results, formatted by the current formatter
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MorphmetPeer::PICNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MorphmetPeer::PICNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(MorphmetPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(MorphmetPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the PicName column
     *
     * Example usage:
     * <code>
     * $query->filterByPicname('fooValue');   // WHERE PicName = 'fooValue'
     * $query->filterByPicname('%fooValue%'); // WHERE PicName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPicname($picname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picname)) {
                $picname = str_replace('*', '%', $picname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PICNAME, $picname, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MorphmetPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MorphmetPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the TL column
     *
     * Example usage:
     * <code>
     * $query->filterByTl(1234); // WHERE TL = 1234
     * $query->filterByTl(array(12, 34)); // WHERE TL IN (12, 34)
     * $query->filterByTl(array('min' => 12)); // WHERE TL >= 12
     * $query->filterByTl(array('max' => 12)); // WHERE TL <= 12
     * </code>
     *
     * @param     mixed $tl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByTl($tl = null, $comparison = null)
    {
        if (is_array($tl)) {
            $useMinMax = false;
            if (isset($tl['min'])) {
                $this->addUsingAlias(MorphmetPeer::TL, $tl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tl['max'])) {
                $this->addUsingAlias(MorphmetPeer::TL, $tl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::TL, $tl, $comparison);
    }

    /**
     * Filter the query on the SL column
     *
     * Example usage:
     * <code>
     * $query->filterBySl(1234); // WHERE SL = 1234
     * $query->filterBySl(array(12, 34)); // WHERE SL IN (12, 34)
     * $query->filterBySl(array('min' => 12)); // WHERE SL >= 12
     * $query->filterBySl(array('max' => 12)); // WHERE SL <= 12
     * </code>
     *
     * @param     mixed $sl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterBySl($sl = null, $comparison = null)
    {
        if (is_array($sl)) {
            $useMinMax = false;
            if (isset($sl['min'])) {
                $this->addUsingAlias(MorphmetPeer::SL, $sl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sl['max'])) {
                $this->addUsingAlias(MorphmetPeer::SL, $sl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::SL, $sl, $comparison);
    }

    /**
     * Filter the query on the FL column
     *
     * Example usage:
     * <code>
     * $query->filterByFl(1234); // WHERE FL = 1234
     * $query->filterByFl(array(12, 34)); // WHERE FL IN (12, 34)
     * $query->filterByFl(array('min' => 12)); // WHERE FL >= 12
     * $query->filterByFl(array('max' => 12)); // WHERE FL <= 12
     * </code>
     *
     * @param     mixed $fl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByFl($fl = null, $comparison = null)
    {
        if (is_array($fl)) {
            $useMinMax = false;
            if (isset($fl['min'])) {
                $this->addUsingAlias(MorphmetPeer::FL, $fl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fl['max'])) {
                $this->addUsingAlias(MorphmetPeer::FL, $fl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::FL, $fl, $comparison);
    }

    /**
     * Filter the query on the HL column
     *
     * Example usage:
     * <code>
     * $query->filterByHl(1234); // WHERE HL = 1234
     * $query->filterByHl(array(12, 34)); // WHERE HL IN (12, 34)
     * $query->filterByHl(array('min' => 12)); // WHERE HL >= 12
     * $query->filterByHl(array('max' => 12)); // WHERE HL <= 12
     * </code>
     *
     * @param     mixed $hl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByHl($hl = null, $comparison = null)
    {
        if (is_array($hl)) {
            $useMinMax = false;
            if (isset($hl['min'])) {
                $this->addUsingAlias(MorphmetPeer::HL, $hl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hl['max'])) {
                $this->addUsingAlias(MorphmetPeer::HL, $hl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::HL, $hl, $comparison);
    }

    /**
     * Filter the query on the PAL column
     *
     * Example usage:
     * <code>
     * $query->filterByPal(1234); // WHERE PAL = 1234
     * $query->filterByPal(array(12, 34)); // WHERE PAL IN (12, 34)
     * $query->filterByPal(array('min' => 12)); // WHERE PAL >= 12
     * $query->filterByPal(array('max' => 12)); // WHERE PAL <= 12
     * </code>
     *
     * @param     mixed $pal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPal($pal = null, $comparison = null)
    {
        if (is_array($pal)) {
            $useMinMax = false;
            if (isset($pal['min'])) {
                $this->addUsingAlias(MorphmetPeer::PAL, $pal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pal['max'])) {
                $this->addUsingAlias(MorphmetPeer::PAL, $pal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PAL, $pal, $comparison);
    }

    /**
     * Filter the query on the PDL column
     *
     * Example usage:
     * <code>
     * $query->filterByPdl(1234); // WHERE PDL = 1234
     * $query->filterByPdl(array(12, 34)); // WHERE PDL IN (12, 34)
     * $query->filterByPdl(array('min' => 12)); // WHERE PDL >= 12
     * $query->filterByPdl(array('max' => 12)); // WHERE PDL <= 12
     * </code>
     *
     * @param     mixed $pdl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPdl($pdl = null, $comparison = null)
    {
        if (is_array($pdl)) {
            $useMinMax = false;
            if (isset($pdl['min'])) {
                $this->addUsingAlias(MorphmetPeer::PDL, $pdl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdl['max'])) {
                $this->addUsingAlias(MorphmetPeer::PDL, $pdl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PDL, $pdl, $comparison);
    }

    /**
     * Filter the query on the PPL column
     *
     * Example usage:
     * <code>
     * $query->filterByPpl(1234); // WHERE PPL = 1234
     * $query->filterByPpl(array(12, 34)); // WHERE PPL IN (12, 34)
     * $query->filterByPpl(array('min' => 12)); // WHERE PPL >= 12
     * $query->filterByPpl(array('max' => 12)); // WHERE PPL <= 12
     * </code>
     *
     * @param     mixed $ppl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPpl($ppl = null, $comparison = null)
    {
        if (is_array($ppl)) {
            $useMinMax = false;
            if (isset($ppl['min'])) {
                $this->addUsingAlias(MorphmetPeer::PPL, $ppl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppl['max'])) {
                $this->addUsingAlias(MorphmetPeer::PPL, $ppl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PPL, $ppl, $comparison);
    }

    /**
     * Filter the query on the PPEL column
     *
     * Example usage:
     * <code>
     * $query->filterByPpel(1234); // WHERE PPEL = 1234
     * $query->filterByPpel(array(12, 34)); // WHERE PPEL IN (12, 34)
     * $query->filterByPpel(array('min' => 12)); // WHERE PPEL >= 12
     * $query->filterByPpel(array('max' => 12)); // WHERE PPEL <= 12
     * </code>
     *
     * @param     mixed $ppel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPpel($ppel = null, $comparison = null)
    {
        if (is_array($ppel)) {
            $useMinMax = false;
            if (isset($ppel['min'])) {
                $this->addUsingAlias(MorphmetPeer::PPEL, $ppel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppel['max'])) {
                $this->addUsingAlias(MorphmetPeer::PPEL, $ppel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PPEL, $ppel, $comparison);
    }

    /**
     * Filter the query on the ED column
     *
     * Example usage:
     * <code>
     * $query->filterByEd(1234); // WHERE ED = 1234
     * $query->filterByEd(array(12, 34)); // WHERE ED IN (12, 34)
     * $query->filterByEd(array('min' => 12)); // WHERE ED >= 12
     * $query->filterByEd(array('max' => 12)); // WHERE ED <= 12
     * </code>
     *
     * @param     mixed $ed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEd($ed = null, $comparison = null)
    {
        if (is_array($ed)) {
            $useMinMax = false;
            if (isset($ed['min'])) {
                $this->addUsingAlias(MorphmetPeer::ED, $ed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ed['max'])) {
                $this->addUsingAlias(MorphmetPeer::ED, $ed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::ED, $ed, $comparison);
    }

    /**
     * Filter the query on the POL column
     *
     * Example usage:
     * <code>
     * $query->filterByPol(1234); // WHERE POL = 1234
     * $query->filterByPol(array(12, 34)); // WHERE POL IN (12, 34)
     * $query->filterByPol(array('min' => 12)); // WHERE POL >= 12
     * $query->filterByPol(array('max' => 12)); // WHERE POL <= 12
     * </code>
     *
     * @param     mixed $pol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPol($pol = null, $comparison = null)
    {
        if (is_array($pol)) {
            $useMinMax = false;
            if (isset($pol['min'])) {
                $this->addUsingAlias(MorphmetPeer::POL, $pol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pol['max'])) {
                $this->addUsingAlias(MorphmetPeer::POL, $pol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::POL, $pol, $comparison);
    }

    /**
     * Filter the query on the BD column
     *
     * Example usage:
     * <code>
     * $query->filterByBd(1234); // WHERE BD = 1234
     * $query->filterByBd(array(12, 34)); // WHERE BD IN (12, 34)
     * $query->filterByBd(array('min' => 12)); // WHERE BD >= 12
     * $query->filterByBd(array('max' => 12)); // WHERE BD <= 12
     * </code>
     *
     * @param     mixed $bd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByBd($bd = null, $comparison = null)
    {
        if (is_array($bd)) {
            $useMinMax = false;
            if (isset($bd['min'])) {
                $this->addUsingAlias(MorphmetPeer::BD, $bd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bd['max'])) {
                $this->addUsingAlias(MorphmetPeer::BD, $bd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::BD, $bd, $comparison);
    }

    /**
     * Filter the query on the CH column
     *
     * Example usage:
     * <code>
     * $query->filterByCh(1234); // WHERE CH = 1234
     * $query->filterByCh(array(12, 34)); // WHERE CH IN (12, 34)
     * $query->filterByCh(array('min' => 12)); // WHERE CH >= 12
     * $query->filterByCh(array('max' => 12)); // WHERE CH <= 12
     * </code>
     *
     * @param     mixed $ch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCh($ch = null, $comparison = null)
    {
        if (is_array($ch)) {
            $useMinMax = false;
            if (isset($ch['min'])) {
                $this->addUsingAlias(MorphmetPeer::CH, $ch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ch['max'])) {
                $this->addUsingAlias(MorphmetPeer::CH, $ch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CH, $ch, $comparison);
    }

    /**
     * Filter the query on the CA column
     *
     * Example usage:
     * <code>
     * $query->filterByCa(1234); // WHERE CA = 1234
     * $query->filterByCa(array(12, 34)); // WHERE CA IN (12, 34)
     * $query->filterByCa(array('min' => 12)); // WHERE CA >= 12
     * $query->filterByCa(array('max' => 12)); // WHERE CA <= 12
     * </code>
     *
     * @param     mixed $ca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCa($ca = null, $comparison = null)
    {
        if (is_array($ca)) {
            $useMinMax = false;
            if (isset($ca['min'])) {
                $this->addUsingAlias(MorphmetPeer::CA, $ca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ca['max'])) {
                $this->addUsingAlias(MorphmetPeer::CA, $ca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CA, $ca, $comparison);
    }

    /**
     * Filter the query on the SnoutTipX column
     *
     * Example usage:
     * <code>
     * $query->filterBySnouttipx(1234); // WHERE SnoutTipX = 1234
     * $query->filterBySnouttipx(array(12, 34)); // WHERE SnoutTipX IN (12, 34)
     * $query->filterBySnouttipx(array('min' => 12)); // WHERE SnoutTipX >= 12
     * $query->filterBySnouttipx(array('max' => 12)); // WHERE SnoutTipX <= 12
     * </code>
     *
     * @param     mixed $snouttipx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterBySnouttipx($snouttipx = null, $comparison = null)
    {
        if (is_array($snouttipx)) {
            $useMinMax = false;
            if (isset($snouttipx['min'])) {
                $this->addUsingAlias(MorphmetPeer::SNOUTTIPX, $snouttipx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snouttipx['max'])) {
                $this->addUsingAlias(MorphmetPeer::SNOUTTIPX, $snouttipx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::SNOUTTIPX, $snouttipx, $comparison);
    }

    /**
     * Filter the query on the SnoutTipY column
     *
     * Example usage:
     * <code>
     * $query->filterBySnouttipy(1234); // WHERE SnoutTipY = 1234
     * $query->filterBySnouttipy(array(12, 34)); // WHERE SnoutTipY IN (12, 34)
     * $query->filterBySnouttipy(array('min' => 12)); // WHERE SnoutTipY >= 12
     * $query->filterBySnouttipy(array('max' => 12)); // WHERE SnoutTipY <= 12
     * </code>
     *
     * @param     mixed $snouttipy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterBySnouttipy($snouttipy = null, $comparison = null)
    {
        if (is_array($snouttipy)) {
            $useMinMax = false;
            if (isset($snouttipy['min'])) {
                $this->addUsingAlias(MorphmetPeer::SNOUTTIPY, $snouttipy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snouttipy['max'])) {
                $this->addUsingAlias(MorphmetPeer::SNOUTTIPY, $snouttipy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::SNOUTTIPY, $snouttipy, $comparison);
    }

    /**
     * Filter the query on the CaudalOriginX column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudaloriginx(1234); // WHERE CaudalOriginX = 1234
     * $query->filterByCaudaloriginx(array(12, 34)); // WHERE CaudalOriginX IN (12, 34)
     * $query->filterByCaudaloriginx(array('min' => 12)); // WHERE CaudalOriginX >= 12
     * $query->filterByCaudaloriginx(array('max' => 12)); // WHERE CaudalOriginX <= 12
     * </code>
     *
     * @param     mixed $caudaloriginx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudaloriginx($caudaloriginx = null, $comparison = null)
    {
        if (is_array($caudaloriginx)) {
            $useMinMax = false;
            if (isset($caudaloriginx['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALORIGINX, $caudaloriginx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudaloriginx['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALORIGINX, $caudaloriginx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALORIGINX, $caudaloriginx, $comparison);
    }

    /**
     * Filter the query on the CaudalOriginY column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudaloriginy(1234); // WHERE CaudalOriginY = 1234
     * $query->filterByCaudaloriginy(array(12, 34)); // WHERE CaudalOriginY IN (12, 34)
     * $query->filterByCaudaloriginy(array('min' => 12)); // WHERE CaudalOriginY >= 12
     * $query->filterByCaudaloriginy(array('max' => 12)); // WHERE CaudalOriginY <= 12
     * </code>
     *
     * @param     mixed $caudaloriginy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudaloriginy($caudaloriginy = null, $comparison = null)
    {
        if (is_array($caudaloriginy)) {
            $useMinMax = false;
            if (isset($caudaloriginy['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALORIGINY, $caudaloriginy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudaloriginy['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALORIGINY, $caudaloriginy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALORIGINY, $caudaloriginy, $comparison);
    }

    /**
     * Filter the query on the TLEndX column
     *
     * Example usage:
     * <code>
     * $query->filterByTlendx(1234); // WHERE TLEndX = 1234
     * $query->filterByTlendx(array(12, 34)); // WHERE TLEndX IN (12, 34)
     * $query->filterByTlendx(array('min' => 12)); // WHERE TLEndX >= 12
     * $query->filterByTlendx(array('max' => 12)); // WHERE TLEndX <= 12
     * </code>
     *
     * @param     mixed $tlendx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByTlendx($tlendx = null, $comparison = null)
    {
        if (is_array($tlendx)) {
            $useMinMax = false;
            if (isset($tlendx['min'])) {
                $this->addUsingAlias(MorphmetPeer::TLENDX, $tlendx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tlendx['max'])) {
                $this->addUsingAlias(MorphmetPeer::TLENDX, $tlendx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::TLENDX, $tlendx, $comparison);
    }

    /**
     * Filter the query on the TLEndY column
     *
     * Example usage:
     * <code>
     * $query->filterByTlendy(1234); // WHERE TLEndY = 1234
     * $query->filterByTlendy(array(12, 34)); // WHERE TLEndY IN (12, 34)
     * $query->filterByTlendy(array('min' => 12)); // WHERE TLEndY >= 12
     * $query->filterByTlendy(array('max' => 12)); // WHERE TLEndY <= 12
     * </code>
     *
     * @param     mixed $tlendy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByTlendy($tlendy = null, $comparison = null)
    {
        if (is_array($tlendy)) {
            $useMinMax = false;
            if (isset($tlendy['min'])) {
                $this->addUsingAlias(MorphmetPeer::TLENDY, $tlendy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tlendy['max'])) {
                $this->addUsingAlias(MorphmetPeer::TLENDY, $tlendy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::TLENDY, $tlendy, $comparison);
    }

    /**
     * Filter the query on the DorsalOriginX column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsaloriginx(1234); // WHERE DorsalOriginX = 1234
     * $query->filterByDorsaloriginx(array(12, 34)); // WHERE DorsalOriginX IN (12, 34)
     * $query->filterByDorsaloriginx(array('min' => 12)); // WHERE DorsalOriginX >= 12
     * $query->filterByDorsaloriginx(array('max' => 12)); // WHERE DorsalOriginX <= 12
     * </code>
     *
     * @param     mixed $dorsaloriginx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDorsaloriginx($dorsaloriginx = null, $comparison = null)
    {
        if (is_array($dorsaloriginx)) {
            $useMinMax = false;
            if (isset($dorsaloriginx['min'])) {
                $this->addUsingAlias(MorphmetPeer::DORSALORIGINX, $dorsaloriginx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsaloriginx['max'])) {
                $this->addUsingAlias(MorphmetPeer::DORSALORIGINX, $dorsaloriginx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DORSALORIGINX, $dorsaloriginx, $comparison);
    }

    /**
     * Filter the query on the DorsalOriginY column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsaloriginy(1234); // WHERE DorsalOriginY = 1234
     * $query->filterByDorsaloriginy(array(12, 34)); // WHERE DorsalOriginY IN (12, 34)
     * $query->filterByDorsaloriginy(array('min' => 12)); // WHERE DorsalOriginY >= 12
     * $query->filterByDorsaloriginy(array('max' => 12)); // WHERE DorsalOriginY <= 12
     * </code>
     *
     * @param     mixed $dorsaloriginy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDorsaloriginy($dorsaloriginy = null, $comparison = null)
    {
        if (is_array($dorsaloriginy)) {
            $useMinMax = false;
            if (isset($dorsaloriginy['min'])) {
                $this->addUsingAlias(MorphmetPeer::DORSALORIGINY, $dorsaloriginy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsaloriginy['max'])) {
                $this->addUsingAlias(MorphmetPeer::DORSALORIGINY, $dorsaloriginy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DORSALORIGINY, $dorsaloriginy, $comparison);
    }

    /**
     * Filter the query on the AnalOriginX column
     *
     * Example usage:
     * <code>
     * $query->filterByAnaloriginx(1234); // WHERE AnalOriginX = 1234
     * $query->filterByAnaloriginx(array(12, 34)); // WHERE AnalOriginX IN (12, 34)
     * $query->filterByAnaloriginx(array('min' => 12)); // WHERE AnalOriginX >= 12
     * $query->filterByAnaloriginx(array('max' => 12)); // WHERE AnalOriginX <= 12
     * </code>
     *
     * @param     mixed $analoriginx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByAnaloriginx($analoriginx = null, $comparison = null)
    {
        if (is_array($analoriginx)) {
            $useMinMax = false;
            if (isset($analoriginx['min'])) {
                $this->addUsingAlias(MorphmetPeer::ANALORIGINX, $analoriginx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analoriginx['max'])) {
                $this->addUsingAlias(MorphmetPeer::ANALORIGINX, $analoriginx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::ANALORIGINX, $analoriginx, $comparison);
    }

    /**
     * Filter the query on the AnalOriginY column
     *
     * Example usage:
     * <code>
     * $query->filterByAnaloriginy(1234); // WHERE AnalOriginY = 1234
     * $query->filterByAnaloriginy(array(12, 34)); // WHERE AnalOriginY IN (12, 34)
     * $query->filterByAnaloriginy(array('min' => 12)); // WHERE AnalOriginY >= 12
     * $query->filterByAnaloriginy(array('max' => 12)); // WHERE AnalOriginY <= 12
     * </code>
     *
     * @param     mixed $analoriginy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByAnaloriginy($analoriginy = null, $comparison = null)
    {
        if (is_array($analoriginy)) {
            $useMinMax = false;
            if (isset($analoriginy['min'])) {
                $this->addUsingAlias(MorphmetPeer::ANALORIGINY, $analoriginy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analoriginy['max'])) {
                $this->addUsingAlias(MorphmetPeer::ANALORIGINY, $analoriginy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::ANALORIGINY, $analoriginy, $comparison);
    }

    /**
     * Filter the query on the EyeFrontX column
     *
     * Example usage:
     * <code>
     * $query->filterByEyefrontx(1234); // WHERE EyeFrontX = 1234
     * $query->filterByEyefrontx(array(12, 34)); // WHERE EyeFrontX IN (12, 34)
     * $query->filterByEyefrontx(array('min' => 12)); // WHERE EyeFrontX >= 12
     * $query->filterByEyefrontx(array('max' => 12)); // WHERE EyeFrontX <= 12
     * </code>
     *
     * @param     mixed $eyefrontx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEyefrontx($eyefrontx = null, $comparison = null)
    {
        if (is_array($eyefrontx)) {
            $useMinMax = false;
            if (isset($eyefrontx['min'])) {
                $this->addUsingAlias(MorphmetPeer::EYEFRONTX, $eyefrontx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyefrontx['max'])) {
                $this->addUsingAlias(MorphmetPeer::EYEFRONTX, $eyefrontx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::EYEFRONTX, $eyefrontx, $comparison);
    }

    /**
     * Filter the query on the EyeFrontY column
     *
     * Example usage:
     * <code>
     * $query->filterByEyefronty(1234); // WHERE EyeFrontY = 1234
     * $query->filterByEyefronty(array(12, 34)); // WHERE EyeFrontY IN (12, 34)
     * $query->filterByEyefronty(array('min' => 12)); // WHERE EyeFrontY >= 12
     * $query->filterByEyefronty(array('max' => 12)); // WHERE EyeFrontY <= 12
     * </code>
     *
     * @param     mixed $eyefronty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEyefronty($eyefronty = null, $comparison = null)
    {
        if (is_array($eyefronty)) {
            $useMinMax = false;
            if (isset($eyefronty['min'])) {
                $this->addUsingAlias(MorphmetPeer::EYEFRONTY, $eyefronty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyefronty['max'])) {
                $this->addUsingAlias(MorphmetPeer::EYEFRONTY, $eyefronty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::EYEFRONTY, $eyefronty, $comparison);
    }

    /**
     * Filter the query on the EyeEndX column
     *
     * Example usage:
     * <code>
     * $query->filterByEyeendx(1234); // WHERE EyeEndX = 1234
     * $query->filterByEyeendx(array(12, 34)); // WHERE EyeEndX IN (12, 34)
     * $query->filterByEyeendx(array('min' => 12)); // WHERE EyeEndX >= 12
     * $query->filterByEyeendx(array('max' => 12)); // WHERE EyeEndX <= 12
     * </code>
     *
     * @param     mixed $eyeendx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEyeendx($eyeendx = null, $comparison = null)
    {
        if (is_array($eyeendx)) {
            $useMinMax = false;
            if (isset($eyeendx['min'])) {
                $this->addUsingAlias(MorphmetPeer::EYEENDX, $eyeendx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyeendx['max'])) {
                $this->addUsingAlias(MorphmetPeer::EYEENDX, $eyeendx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::EYEENDX, $eyeendx, $comparison);
    }

    /**
     * Filter the query on the EyeEndY column
     *
     * Example usage:
     * <code>
     * $query->filterByEyeendy(1234); // WHERE EyeEndY = 1234
     * $query->filterByEyeendy(array(12, 34)); // WHERE EyeEndY IN (12, 34)
     * $query->filterByEyeendy(array('min' => 12)); // WHERE EyeEndY >= 12
     * $query->filterByEyeendy(array('max' => 12)); // WHERE EyeEndY <= 12
     * </code>
     *
     * @param     mixed $eyeendy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEyeendy($eyeendy = null, $comparison = null)
    {
        if (is_array($eyeendy)) {
            $useMinMax = false;
            if (isset($eyeendy['min'])) {
                $this->addUsingAlias(MorphmetPeer::EYEENDY, $eyeendy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyeendy['max'])) {
                $this->addUsingAlias(MorphmetPeer::EYEENDY, $eyeendy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::EYEENDY, $eyeendy, $comparison);
    }

    /**
     * Filter the query on the OpercleEndX column
     *
     * Example usage:
     * <code>
     * $query->filterByOpercleendx(1234); // WHERE OpercleEndX = 1234
     * $query->filterByOpercleendx(array(12, 34)); // WHERE OpercleEndX IN (12, 34)
     * $query->filterByOpercleendx(array('min' => 12)); // WHERE OpercleEndX >= 12
     * $query->filterByOpercleendx(array('max' => 12)); // WHERE OpercleEndX <= 12
     * </code>
     *
     * @param     mixed $opercleendx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByOpercleendx($opercleendx = null, $comparison = null)
    {
        if (is_array($opercleendx)) {
            $useMinMax = false;
            if (isset($opercleendx['min'])) {
                $this->addUsingAlias(MorphmetPeer::OPERCLEENDX, $opercleendx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opercleendx['max'])) {
                $this->addUsingAlias(MorphmetPeer::OPERCLEENDX, $opercleendx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::OPERCLEENDX, $opercleendx, $comparison);
    }

    /**
     * Filter the query on the OpercleEndY column
     *
     * Example usage:
     * <code>
     * $query->filterByOpercleendy(1234); // WHERE OpercleEndY = 1234
     * $query->filterByOpercleendy(array(12, 34)); // WHERE OpercleEndY IN (12, 34)
     * $query->filterByOpercleendy(array('min' => 12)); // WHERE OpercleEndY >= 12
     * $query->filterByOpercleendy(array('max' => 12)); // WHERE OpercleEndY <= 12
     * </code>
     *
     * @param     mixed $opercleendy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByOpercleendy($opercleendy = null, $comparison = null)
    {
        if (is_array($opercleendy)) {
            $useMinMax = false;
            if (isset($opercleendy['min'])) {
                $this->addUsingAlias(MorphmetPeer::OPERCLEENDY, $opercleendy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opercleendy['max'])) {
                $this->addUsingAlias(MorphmetPeer::OPERCLEENDY, $opercleendy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::OPERCLEENDY, $opercleendy, $comparison);
    }

    /**
     * Filter the query on the MaxDepthDorsalX column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxdepthdorsalx(1234); // WHERE MaxDepthDorsalX = 1234
     * $query->filterByMaxdepthdorsalx(array(12, 34)); // WHERE MaxDepthDorsalX IN (12, 34)
     * $query->filterByMaxdepthdorsalx(array('min' => 12)); // WHERE MaxDepthDorsalX >= 12
     * $query->filterByMaxdepthdorsalx(array('max' => 12)); // WHERE MaxDepthDorsalX <= 12
     * </code>
     *
     * @param     mixed $maxdepthdorsalx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByMaxdepthdorsalx($maxdepthdorsalx = null, $comparison = null)
    {
        if (is_array($maxdepthdorsalx)) {
            $useMinMax = false;
            if (isset($maxdepthdorsalx['min'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALX, $maxdepthdorsalx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxdepthdorsalx['max'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALX, $maxdepthdorsalx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALX, $maxdepthdorsalx, $comparison);
    }

    /**
     * Filter the query on the MaxDepthDorsalY column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxdepthdorsaly(1234); // WHERE MaxDepthDorsalY = 1234
     * $query->filterByMaxdepthdorsaly(array(12, 34)); // WHERE MaxDepthDorsalY IN (12, 34)
     * $query->filterByMaxdepthdorsaly(array('min' => 12)); // WHERE MaxDepthDorsalY >= 12
     * $query->filterByMaxdepthdorsaly(array('max' => 12)); // WHERE MaxDepthDorsalY <= 12
     * </code>
     *
     * @param     mixed $maxdepthdorsaly The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByMaxdepthdorsaly($maxdepthdorsaly = null, $comparison = null)
    {
        if (is_array($maxdepthdorsaly)) {
            $useMinMax = false;
            if (isset($maxdepthdorsaly['min'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALY, $maxdepthdorsaly['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxdepthdorsaly['max'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALY, $maxdepthdorsaly['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::MAXDEPTHDORSALY, $maxdepthdorsaly, $comparison);
    }

    /**
     * Filter the query on the MaxDepthVentralX column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxdepthventralx(1234); // WHERE MaxDepthVentralX = 1234
     * $query->filterByMaxdepthventralx(array(12, 34)); // WHERE MaxDepthVentralX IN (12, 34)
     * $query->filterByMaxdepthventralx(array('min' => 12)); // WHERE MaxDepthVentralX >= 12
     * $query->filterByMaxdepthventralx(array('max' => 12)); // WHERE MaxDepthVentralX <= 12
     * </code>
     *
     * @param     mixed $maxdepthventralx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByMaxdepthventralx($maxdepthventralx = null, $comparison = null)
    {
        if (is_array($maxdepthventralx)) {
            $useMinMax = false;
            if (isset($maxdepthventralx['min'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALX, $maxdepthventralx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxdepthventralx['max'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALX, $maxdepthventralx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALX, $maxdepthventralx, $comparison);
    }

    /**
     * Filter the query on the MaxDepthVentralY column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxdepthventraly(1234); // WHERE MaxDepthVentralY = 1234
     * $query->filterByMaxdepthventraly(array(12, 34)); // WHERE MaxDepthVentralY IN (12, 34)
     * $query->filterByMaxdepthventraly(array('min' => 12)); // WHERE MaxDepthVentralY >= 12
     * $query->filterByMaxdepthventraly(array('max' => 12)); // WHERE MaxDepthVentralY <= 12
     * </code>
     *
     * @param     mixed $maxdepthventraly The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByMaxdepthventraly($maxdepthventraly = null, $comparison = null)
    {
        if (is_array($maxdepthventraly)) {
            $useMinMax = false;
            if (isset($maxdepthventraly['min'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALY, $maxdepthventraly['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxdepthventraly['max'])) {
                $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALY, $maxdepthventraly['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::MAXDEPTHVENTRALY, $maxdepthventraly, $comparison);
    }

    /**
     * Filter the query on the PectoralOriginX column
     *
     * Example usage:
     * <code>
     * $query->filterByPectoraloriginx(1234); // WHERE PectoralOriginX = 1234
     * $query->filterByPectoraloriginx(array(12, 34)); // WHERE PectoralOriginX IN (12, 34)
     * $query->filterByPectoraloriginx(array('min' => 12)); // WHERE PectoralOriginX >= 12
     * $query->filterByPectoraloriginx(array('max' => 12)); // WHERE PectoralOriginX <= 12
     * </code>
     *
     * @param     mixed $pectoraloriginx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPectoraloriginx($pectoraloriginx = null, $comparison = null)
    {
        if (is_array($pectoraloriginx)) {
            $useMinMax = false;
            if (isset($pectoraloriginx['min'])) {
                $this->addUsingAlias(MorphmetPeer::PECTORALORIGINX, $pectoraloriginx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pectoraloriginx['max'])) {
                $this->addUsingAlias(MorphmetPeer::PECTORALORIGINX, $pectoraloriginx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PECTORALORIGINX, $pectoraloriginx, $comparison);
    }

    /**
     * Filter the query on the PectoralOriginY column
     *
     * Example usage:
     * <code>
     * $query->filterByPectoraloriginy(1234); // WHERE PectoralOriginY = 1234
     * $query->filterByPectoraloriginy(array(12, 34)); // WHERE PectoralOriginY IN (12, 34)
     * $query->filterByPectoraloriginy(array('min' => 12)); // WHERE PectoralOriginY >= 12
     * $query->filterByPectoraloriginy(array('max' => 12)); // WHERE PectoralOriginY <= 12
     * </code>
     *
     * @param     mixed $pectoraloriginy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPectoraloriginy($pectoraloriginy = null, $comparison = null)
    {
        if (is_array($pectoraloriginy)) {
            $useMinMax = false;
            if (isset($pectoraloriginy['min'])) {
                $this->addUsingAlias(MorphmetPeer::PECTORALORIGINY, $pectoraloriginy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pectoraloriginy['max'])) {
                $this->addUsingAlias(MorphmetPeer::PECTORALORIGINY, $pectoraloriginy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PECTORALORIGINY, $pectoraloriginy, $comparison);
    }

    /**
     * Filter the query on the PelvicOriginX column
     *
     * Example usage:
     * <code>
     * $query->filterByPelvicoriginx(1234); // WHERE PelvicOriginX = 1234
     * $query->filterByPelvicoriginx(array(12, 34)); // WHERE PelvicOriginX IN (12, 34)
     * $query->filterByPelvicoriginx(array('min' => 12)); // WHERE PelvicOriginX >= 12
     * $query->filterByPelvicoriginx(array('max' => 12)); // WHERE PelvicOriginX <= 12
     * </code>
     *
     * @param     mixed $pelvicoriginx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPelvicoriginx($pelvicoriginx = null, $comparison = null)
    {
        if (is_array($pelvicoriginx)) {
            $useMinMax = false;
            if (isset($pelvicoriginx['min'])) {
                $this->addUsingAlias(MorphmetPeer::PELVICORIGINX, $pelvicoriginx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pelvicoriginx['max'])) {
                $this->addUsingAlias(MorphmetPeer::PELVICORIGINX, $pelvicoriginx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PELVICORIGINX, $pelvicoriginx, $comparison);
    }

    /**
     * Filter the query on the PelvicOriginY column
     *
     * Example usage:
     * <code>
     * $query->filterByPelvicoriginy(1234); // WHERE PelvicOriginY = 1234
     * $query->filterByPelvicoriginy(array(12, 34)); // WHERE PelvicOriginY IN (12, 34)
     * $query->filterByPelvicoriginy(array('min' => 12)); // WHERE PelvicOriginY >= 12
     * $query->filterByPelvicoriginy(array('max' => 12)); // WHERE PelvicOriginY <= 12
     * </code>
     *
     * @param     mixed $pelvicoriginy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByPelvicoriginy($pelvicoriginy = null, $comparison = null)
    {
        if (is_array($pelvicoriginy)) {
            $useMinMax = false;
            if (isset($pelvicoriginy['min'])) {
                $this->addUsingAlias(MorphmetPeer::PELVICORIGINY, $pelvicoriginy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pelvicoriginy['max'])) {
                $this->addUsingAlias(MorphmetPeer::PELVICORIGINY, $pelvicoriginy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::PELVICORIGINY, $pelvicoriginy, $comparison);
    }

    /**
     * Filter the query on the FLEndX column
     *
     * Example usage:
     * <code>
     * $query->filterByFlendx(1234); // WHERE FLEndX = 1234
     * $query->filterByFlendx(array(12, 34)); // WHERE FLEndX IN (12, 34)
     * $query->filterByFlendx(array('min' => 12)); // WHERE FLEndX >= 12
     * $query->filterByFlendx(array('max' => 12)); // WHERE FLEndX <= 12
     * </code>
     *
     * @param     mixed $flendx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByFlendx($flendx = null, $comparison = null)
    {
        if (is_array($flendx)) {
            $useMinMax = false;
            if (isset($flendx['min'])) {
                $this->addUsingAlias(MorphmetPeer::FLENDX, $flendx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flendx['max'])) {
                $this->addUsingAlias(MorphmetPeer::FLENDX, $flendx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::FLENDX, $flendx, $comparison);
    }

    /**
     * Filter the query on the FLEndY column
     *
     * Example usage:
     * <code>
     * $query->filterByFlendy(1234); // WHERE FLEndY = 1234
     * $query->filterByFlendy(array(12, 34)); // WHERE FLEndY IN (12, 34)
     * $query->filterByFlendy(array('min' => 12)); // WHERE FLEndY >= 12
     * $query->filterByFlendy(array('max' => 12)); // WHERE FLEndY <= 12
     * </code>
     *
     * @param     mixed $flendy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByFlendy($flendy = null, $comparison = null)
    {
        if (is_array($flendy)) {
            $useMinMax = false;
            if (isset($flendy['min'])) {
                $this->addUsingAlias(MorphmetPeer::FLENDY, $flendy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flendy['max'])) {
                $this->addUsingAlias(MorphmetPeer::FLENDY, $flendy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::FLENDY, $flendy, $comparison);
    }

    /**
     * Filter the query on the CaudalUpperX column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudalupperx(1234); // WHERE CaudalUpperX = 1234
     * $query->filterByCaudalupperx(array(12, 34)); // WHERE CaudalUpperX IN (12, 34)
     * $query->filterByCaudalupperx(array('min' => 12)); // WHERE CaudalUpperX >= 12
     * $query->filterByCaudalupperx(array('max' => 12)); // WHERE CaudalUpperX <= 12
     * </code>
     *
     * @param     mixed $caudalupperx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudalupperx($caudalupperx = null, $comparison = null)
    {
        if (is_array($caudalupperx)) {
            $useMinMax = false;
            if (isset($caudalupperx['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALUPPERX, $caudalupperx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudalupperx['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALUPPERX, $caudalupperx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALUPPERX, $caudalupperx, $comparison);
    }

    /**
     * Filter the query on the CaudalUpperY column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudaluppery(1234); // WHERE CaudalUpperY = 1234
     * $query->filterByCaudaluppery(array(12, 34)); // WHERE CaudalUpperY IN (12, 34)
     * $query->filterByCaudaluppery(array('min' => 12)); // WHERE CaudalUpperY >= 12
     * $query->filterByCaudaluppery(array('max' => 12)); // WHERE CaudalUpperY <= 12
     * </code>
     *
     * @param     mixed $caudaluppery The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudaluppery($caudaluppery = null, $comparison = null)
    {
        if (is_array($caudaluppery)) {
            $useMinMax = false;
            if (isset($caudaluppery['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALUPPERY, $caudaluppery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudaluppery['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALUPPERY, $caudaluppery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALUPPERY, $caudaluppery, $comparison);
    }

    /**
     * Filter the query on the CaudalLowerX column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudallowerx(1234); // WHERE CaudalLowerX = 1234
     * $query->filterByCaudallowerx(array(12, 34)); // WHERE CaudalLowerX IN (12, 34)
     * $query->filterByCaudallowerx(array('min' => 12)); // WHERE CaudalLowerX >= 12
     * $query->filterByCaudallowerx(array('max' => 12)); // WHERE CaudalLowerX <= 12
     * </code>
     *
     * @param     mixed $caudallowerx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudallowerx($caudallowerx = null, $comparison = null)
    {
        if (is_array($caudallowerx)) {
            $useMinMax = false;
            if (isset($caudallowerx['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALLOWERX, $caudallowerx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudallowerx['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALLOWERX, $caudallowerx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALLOWERX, $caudallowerx, $comparison);
    }

    /**
     * Filter the query on the CaudalLowerY column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudallowery(1234); // WHERE CaudalLowerY = 1234
     * $query->filterByCaudallowery(array(12, 34)); // WHERE CaudalLowerY IN (12, 34)
     * $query->filterByCaudallowery(array('min' => 12)); // WHERE CaudalLowerY >= 12
     * $query->filterByCaudallowery(array('max' => 12)); // WHERE CaudalLowerY <= 12
     * </code>
     *
     * @param     mixed $caudallowery The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByCaudallowery($caudallowery = null, $comparison = null)
    {
        if (is_array($caudallowery)) {
            $useMinMax = false;
            if (isset($caudallowery['min'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALLOWERY, $caudallowery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudallowery['max'])) {
                $this->addUsingAlias(MorphmetPeer::CAUDALLOWERY, $caudallowery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::CAUDALLOWERY, $caudallowery, $comparison);
    }

    /**
     * Filter the query on the AspectRatio column
     *
     * Example usage:
     * <code>
     * $query->filterByAspectratio(1234); // WHERE AspectRatio = 1234
     * $query->filterByAspectratio(array(12, 34)); // WHERE AspectRatio IN (12, 34)
     * $query->filterByAspectratio(array('min' => 12)); // WHERE AspectRatio >= 12
     * $query->filterByAspectratio(array('max' => 12)); // WHERE AspectRatio <= 12
     * </code>
     *
     * @param     mixed $aspectratio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByAspectratio($aspectratio = null, $comparison = null)
    {
        if (is_array($aspectratio)) {
            $useMinMax = false;
            if (isset($aspectratio['min'])) {
                $this->addUsingAlias(MorphmetPeer::ASPECTRATIO, $aspectratio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspectratio['max'])) {
                $this->addUsingAlias(MorphmetPeer::ASPECTRATIO, $aspectratio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::ASPECTRATIO, $aspectratio, $comparison);
    }

    /**
     * Filter the query on the Doubtful column
     *
     * Example usage:
     * <code>
     * $query->filterByDoubtful(1234); // WHERE Doubtful = 1234
     * $query->filterByDoubtful(array(12, 34)); // WHERE Doubtful IN (12, 34)
     * $query->filterByDoubtful(array('min' => 12)); // WHERE Doubtful >= 12
     * $query->filterByDoubtful(array('max' => 12)); // WHERE Doubtful <= 12
     * </code>
     *
     * @param     mixed $doubtful The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDoubtful($doubtful = null, $comparison = null)
    {
        if (is_array($doubtful)) {
            $useMinMax = false;
            if (isset($doubtful['min'])) {
                $this->addUsingAlias(MorphmetPeer::DOUBTFUL, $doubtful['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($doubtful['max'])) {
                $this->addUsingAlias(MorphmetPeer::DOUBTFUL, $doubtful['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DOUBTFUL, $doubtful, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::REMARKS, $remarks, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MorphmetPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MorphmetPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::ENTERED, $entered, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MorphmetPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MorphmetPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MorphmetPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MorphmetPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::MODIFIED, $modified, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MorphmetPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MorphmetPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MorphmetPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MorphmetPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::EXPERT, $expert, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MorphmetPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MorphmetPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MorphmetPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MorphmetPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmetPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Morphmet $morphmet Object to remove from the list of results
     *
     * @return MorphmetQuery The current query, for fluid interface
     */
    public function prune($morphmet = null)
    {
        if ($morphmet) {
            $this->addUsingAlias(MorphmetPeer::PICNAME, $morphmet->getPicname(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
