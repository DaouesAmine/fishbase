<?php


/**
 * Base class that represents a query for the 'massconversion' table.
 *
 *
 *
 * @method MassconversionQuery orderByRecordno($order = Criteria::ASC) Order by the RecordNo column
 * @method MassconversionQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method MassconversionQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method MassconversionQuery orderByNameused($order = Criteria::ASC) Order by the NameUsed column
 * @method MassconversionQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MassconversionQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method MassconversionQuery orderByMassconvmainref($order = Criteria::ASC) Order by the MassConvMainRef column
 * @method MassconversionQuery orderByMassconvrefno($order = Criteria::ASC) Order by the MassConvRefNo column
 * @method MassconversionQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method MassconversionQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method MassconversionQuery orderByCCode($order = Criteria::ASC) Order by the C_code column
 * @method MassconversionQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method MassconversionQuery orderByLifestage($order = Criteria::ASC) Order by the LifeStage column
 * @method MassconversionQuery orderByDmWm($order = Criteria::ASC) Order by the DM_WM column
 * @method MassconversionQuery orderByDmWmcalc($order = Criteria::ASC) Order by the DM_WMcalc column
 * @method MassconversionQuery orderByAfdmDm($order = Criteria::ASC) Order by the AFDM_DM column
 * @method MassconversionQuery orderByAfdmDmcalc($order = Criteria::ASC) Order by the AFDM_DMcalc column
 * @method MassconversionQuery orderByAfdmWm($order = Criteria::ASC) Order by the AFDM_WM column
 * @method MassconversionQuery orderByAfdmWmcalc($order = Criteria::ASC) Order by the AFDM_WMcalc column
 * @method MassconversionQuery orderByProteinDm($order = Criteria::ASC) Order by the Protein_DM column
 * @method MassconversionQuery orderByProteinDmcalc($order = Criteria::ASC) Order by the Protein_DMcalc column
 * @method MassconversionQuery orderByCarbhydrDm($order = Criteria::ASC) Order by the Carbhydr_DM column
 * @method MassconversionQuery orderByCarbhydrDmcalc($order = Criteria::ASC) Order by the Carbhydr_DMcalc column
 * @method MassconversionQuery orderByLipidDm($order = Criteria::ASC) Order by the Lipid_DM column
 * @method MassconversionQuery orderByLipidDmcalc($order = Criteria::ASC) Order by the Lipid_DMcalc column
 * @method MassconversionQuery orderByCDm($order = Criteria::ASC) Order by the C_DM column
 * @method MassconversionQuery orderByCDmcalc($order = Criteria::ASC) Order by the C_DMcalc column
 * @method MassconversionQuery orderByNDm($order = Criteria::ASC) Order by the N_DM column
 * @method MassconversionQuery orderByNDmcalc($order = Criteria::ASC) Order by the N_DMcalc column
 * @method MassconversionQuery orderByPDm($order = Criteria::ASC) Order by the P_DM column
 * @method MassconversionQuery orderByPDmcalc($order = Criteria::ASC) Order by the P_DMcalc column
 * @method MassconversionQuery orderByCAfdm($order = Criteria::ASC) Order by the C_AFDM column
 * @method MassconversionQuery orderByCAfdmcalc($order = Criteria::ASC) Order by the C_AFDMcalc column
 * @method MassconversionQuery orderByNAfdm($order = Criteria::ASC) Order by the N_AFDM column
 * @method MassconversionQuery orderByNAfdmcalc($order = Criteria::ASC) Order by the N_AFDMcalc column
 * @method MassconversionQuery orderByPAfdm($order = Criteria::ASC) Order by the P_AFDM column
 * @method MassconversionQuery orderByPAfdmcalc($order = Criteria::ASC) Order by the P_AFDMcalc column
 * @method MassconversionQuery orderByJMgwm($order = Criteria::ASC) Order by the J_mgWM column
 * @method MassconversionQuery orderByJMgwmcalc($order = Criteria::ASC) Order by the J_mgWMcalc column
 * @method MassconversionQuery orderByJMgdm($order = Criteria::ASC) Order by the J_mgDM column
 * @method MassconversionQuery orderByJMgdmcalc($order = Criteria::ASC) Order by the J_mgDMcalc column
 * @method MassconversionQuery orderByJMgafdm($order = Criteria::ASC) Order by the J_mgAFDM column
 * @method MassconversionQuery orderByJMgafdmcalc($order = Criteria::ASC) Order by the J_mgAFDMcalc column
 * @method MassconversionQuery orderByJMgc($order = Criteria::ASC) Order by the J_mgC column
 * @method MassconversionQuery orderByJMgccalc($order = Criteria::ASC) Order by the J_mgCcalc column
 * @method MassconversionQuery orderByCNmass($order = Criteria::ASC) Order by the C_Nmass column
 * @method MassconversionQuery orderByCPmass($order = Criteria::ASC) Order by the C_Pmass column
 * @method MassconversionQuery orderByNPmass($order = Criteria::ASC) Order by the N_Pmass column
 * @method MassconversionQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method MassconversionQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MassconversionQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MassconversionQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MassconversionQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MassconversionQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MassconversionQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method MassconversionQuery groupByRecordno() Group by the RecordNo column
 * @method MassconversionQuery groupByGenus() Group by the Genus column
 * @method MassconversionQuery groupBySpecies() Group by the Species column
 * @method MassconversionQuery groupByNameused() Group by the NameUsed column
 * @method MassconversionQuery groupBySpeccode() Group by the Speccode column
 * @method MassconversionQuery groupByStockcode() Group by the StockCode column
 * @method MassconversionQuery groupByMassconvmainref() Group by the MassConvMainRef column
 * @method MassconversionQuery groupByMassconvrefno() Group by the MassConvRefNo column
 * @method MassconversionQuery groupByLocality() Group by the Locality column
 * @method MassconversionQuery groupByCountry() Group by the Country column
 * @method MassconversionQuery groupByCCode() Group by the C_code column
 * @method MassconversionQuery groupBySex() Group by the Sex column
 * @method MassconversionQuery groupByLifestage() Group by the LifeStage column
 * @method MassconversionQuery groupByDmWm() Group by the DM_WM column
 * @method MassconversionQuery groupByDmWmcalc() Group by the DM_WMcalc column
 * @method MassconversionQuery groupByAfdmDm() Group by the AFDM_DM column
 * @method MassconversionQuery groupByAfdmDmcalc() Group by the AFDM_DMcalc column
 * @method MassconversionQuery groupByAfdmWm() Group by the AFDM_WM column
 * @method MassconversionQuery groupByAfdmWmcalc() Group by the AFDM_WMcalc column
 * @method MassconversionQuery groupByProteinDm() Group by the Protein_DM column
 * @method MassconversionQuery groupByProteinDmcalc() Group by the Protein_DMcalc column
 * @method MassconversionQuery groupByCarbhydrDm() Group by the Carbhydr_DM column
 * @method MassconversionQuery groupByCarbhydrDmcalc() Group by the Carbhydr_DMcalc column
 * @method MassconversionQuery groupByLipidDm() Group by the Lipid_DM column
 * @method MassconversionQuery groupByLipidDmcalc() Group by the Lipid_DMcalc column
 * @method MassconversionQuery groupByCDm() Group by the C_DM column
 * @method MassconversionQuery groupByCDmcalc() Group by the C_DMcalc column
 * @method MassconversionQuery groupByNDm() Group by the N_DM column
 * @method MassconversionQuery groupByNDmcalc() Group by the N_DMcalc column
 * @method MassconversionQuery groupByPDm() Group by the P_DM column
 * @method MassconversionQuery groupByPDmcalc() Group by the P_DMcalc column
 * @method MassconversionQuery groupByCAfdm() Group by the C_AFDM column
 * @method MassconversionQuery groupByCAfdmcalc() Group by the C_AFDMcalc column
 * @method MassconversionQuery groupByNAfdm() Group by the N_AFDM column
 * @method MassconversionQuery groupByNAfdmcalc() Group by the N_AFDMcalc column
 * @method MassconversionQuery groupByPAfdm() Group by the P_AFDM column
 * @method MassconversionQuery groupByPAfdmcalc() Group by the P_AFDMcalc column
 * @method MassconversionQuery groupByJMgwm() Group by the J_mgWM column
 * @method MassconversionQuery groupByJMgwmcalc() Group by the J_mgWMcalc column
 * @method MassconversionQuery groupByJMgdm() Group by the J_mgDM column
 * @method MassconversionQuery groupByJMgdmcalc() Group by the J_mgDMcalc column
 * @method MassconversionQuery groupByJMgafdm() Group by the J_mgAFDM column
 * @method MassconversionQuery groupByJMgafdmcalc() Group by the J_mgAFDMcalc column
 * @method MassconversionQuery groupByJMgc() Group by the J_mgC column
 * @method MassconversionQuery groupByJMgccalc() Group by the J_mgCcalc column
 * @method MassconversionQuery groupByCNmass() Group by the C_Nmass column
 * @method MassconversionQuery groupByCPmass() Group by the C_Pmass column
 * @method MassconversionQuery groupByNPmass() Group by the N_Pmass column
 * @method MassconversionQuery groupByComments() Group by the Comments column
 * @method MassconversionQuery groupByEntered() Group by the Entered column
 * @method MassconversionQuery groupByDateentered() Group by the DateEntered column
 * @method MassconversionQuery groupByModified() Group by the Modified column
 * @method MassconversionQuery groupByDatemodified() Group by the DateModified column
 * @method MassconversionQuery groupByExpert() Group by the Expert column
 * @method MassconversionQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method MassconversionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MassconversionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MassconversionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Massconversion findOne(PropelPDO $con = null) Return the first Massconversion matching the query
 * @method Massconversion findOneOrCreate(PropelPDO $con = null) Return the first Massconversion matching the query, or a new Massconversion object populated from the query conditions when no match is found
 *
 * @method Massconversion findOneByGenus(string $Genus) Return the first Massconversion filtered by the Genus column
 * @method Massconversion findOneBySpecies(string $Species) Return the first Massconversion filtered by the Species column
 * @method Massconversion findOneByNameused(string $NameUsed) Return the first Massconversion filtered by the NameUsed column
 * @method Massconversion findOneBySpeccode(int $Speccode) Return the first Massconversion filtered by the Speccode column
 * @method Massconversion findOneByStockcode(int $StockCode) Return the first Massconversion filtered by the StockCode column
 * @method Massconversion findOneByMassconvmainref(int $MassConvMainRef) Return the first Massconversion filtered by the MassConvMainRef column
 * @method Massconversion findOneByMassconvrefno(int $MassConvRefNo) Return the first Massconversion filtered by the MassConvRefNo column
 * @method Massconversion findOneByLocality(string $Locality) Return the first Massconversion filtered by the Locality column
 * @method Massconversion findOneByCountry(string $Country) Return the first Massconversion filtered by the Country column
 * @method Massconversion findOneByCCode(string $C_code) Return the first Massconversion filtered by the C_code column
 * @method Massconversion findOneBySex(string $Sex) Return the first Massconversion filtered by the Sex column
 * @method Massconversion findOneByLifestage(string $LifeStage) Return the first Massconversion filtered by the LifeStage column
 * @method Massconversion findOneByDmWm(double $DM_WM) Return the first Massconversion filtered by the DM_WM column
 * @method Massconversion findOneByDmWmcalc(string $DM_WMcalc) Return the first Massconversion filtered by the DM_WMcalc column
 * @method Massconversion findOneByAfdmDm(double $AFDM_DM) Return the first Massconversion filtered by the AFDM_DM column
 * @method Massconversion findOneByAfdmDmcalc(string $AFDM_DMcalc) Return the first Massconversion filtered by the AFDM_DMcalc column
 * @method Massconversion findOneByAfdmWm(double $AFDM_WM) Return the first Massconversion filtered by the AFDM_WM column
 * @method Massconversion findOneByAfdmWmcalc(string $AFDM_WMcalc) Return the first Massconversion filtered by the AFDM_WMcalc column
 * @method Massconversion findOneByProteinDm(double $Protein_DM) Return the first Massconversion filtered by the Protein_DM column
 * @method Massconversion findOneByProteinDmcalc(string $Protein_DMcalc) Return the first Massconversion filtered by the Protein_DMcalc column
 * @method Massconversion findOneByCarbhydrDm(double $Carbhydr_DM) Return the first Massconversion filtered by the Carbhydr_DM column
 * @method Massconversion findOneByCarbhydrDmcalc(string $Carbhydr_DMcalc) Return the first Massconversion filtered by the Carbhydr_DMcalc column
 * @method Massconversion findOneByLipidDm(double $Lipid_DM) Return the first Massconversion filtered by the Lipid_DM column
 * @method Massconversion findOneByLipidDmcalc(string $Lipid_DMcalc) Return the first Massconversion filtered by the Lipid_DMcalc column
 * @method Massconversion findOneByCDm(double $C_DM) Return the first Massconversion filtered by the C_DM column
 * @method Massconversion findOneByCDmcalc(string $C_DMcalc) Return the first Massconversion filtered by the C_DMcalc column
 * @method Massconversion findOneByNDm(double $N_DM) Return the first Massconversion filtered by the N_DM column
 * @method Massconversion findOneByNDmcalc(string $N_DMcalc) Return the first Massconversion filtered by the N_DMcalc column
 * @method Massconversion findOneByPDm(double $P_DM) Return the first Massconversion filtered by the P_DM column
 * @method Massconversion findOneByPDmcalc(string $P_DMcalc) Return the first Massconversion filtered by the P_DMcalc column
 * @method Massconversion findOneByCAfdm(double $C_AFDM) Return the first Massconversion filtered by the C_AFDM column
 * @method Massconversion findOneByCAfdmcalc(string $C_AFDMcalc) Return the first Massconversion filtered by the C_AFDMcalc column
 * @method Massconversion findOneByNAfdm(double $N_AFDM) Return the first Massconversion filtered by the N_AFDM column
 * @method Massconversion findOneByNAfdmcalc(string $N_AFDMcalc) Return the first Massconversion filtered by the N_AFDMcalc column
 * @method Massconversion findOneByPAfdm(double $P_AFDM) Return the first Massconversion filtered by the P_AFDM column
 * @method Massconversion findOneByPAfdmcalc(string $P_AFDMcalc) Return the first Massconversion filtered by the P_AFDMcalc column
 * @method Massconversion findOneByJMgwm(double $J_mgWM) Return the first Massconversion filtered by the J_mgWM column
 * @method Massconversion findOneByJMgwmcalc(string $J_mgWMcalc) Return the first Massconversion filtered by the J_mgWMcalc column
 * @method Massconversion findOneByJMgdm(double $J_mgDM) Return the first Massconversion filtered by the J_mgDM column
 * @method Massconversion findOneByJMgdmcalc(string $J_mgDMcalc) Return the first Massconversion filtered by the J_mgDMcalc column
 * @method Massconversion findOneByJMgafdm(double $J_mgAFDM) Return the first Massconversion filtered by the J_mgAFDM column
 * @method Massconversion findOneByJMgafdmcalc(string $J_mgAFDMcalc) Return the first Massconversion filtered by the J_mgAFDMcalc column
 * @method Massconversion findOneByJMgc(double $J_mgC) Return the first Massconversion filtered by the J_mgC column
 * @method Massconversion findOneByJMgccalc(string $J_mgCcalc) Return the first Massconversion filtered by the J_mgCcalc column
 * @method Massconversion findOneByCNmass(double $C_Nmass) Return the first Massconversion filtered by the C_Nmass column
 * @method Massconversion findOneByCPmass(double $C_Pmass) Return the first Massconversion filtered by the C_Pmass column
 * @method Massconversion findOneByNPmass(double $N_Pmass) Return the first Massconversion filtered by the N_Pmass column
 * @method Massconversion findOneByComments(string $Comments) Return the first Massconversion filtered by the Comments column
 * @method Massconversion findOneByEntered(int $Entered) Return the first Massconversion filtered by the Entered column
 * @method Massconversion findOneByDateentered(string $DateEntered) Return the first Massconversion filtered by the DateEntered column
 * @method Massconversion findOneByModified(int $Modified) Return the first Massconversion filtered by the Modified column
 * @method Massconversion findOneByDatemodified(string $DateModified) Return the first Massconversion filtered by the DateModified column
 * @method Massconversion findOneByExpert(int $Expert) Return the first Massconversion filtered by the Expert column
 * @method Massconversion findOneByDatechecked(string $DateChecked) Return the first Massconversion filtered by the DateChecked column
 *
 * @method array findByRecordno(int $RecordNo) Return Massconversion objects filtered by the RecordNo column
 * @method array findByGenus(string $Genus) Return Massconversion objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Massconversion objects filtered by the Species column
 * @method array findByNameused(string $NameUsed) Return Massconversion objects filtered by the NameUsed column
 * @method array findBySpeccode(int $Speccode) Return Massconversion objects filtered by the Speccode column
 * @method array findByStockcode(int $StockCode) Return Massconversion objects filtered by the StockCode column
 * @method array findByMassconvmainref(int $MassConvMainRef) Return Massconversion objects filtered by the MassConvMainRef column
 * @method array findByMassconvrefno(int $MassConvRefNo) Return Massconversion objects filtered by the MassConvRefNo column
 * @method array findByLocality(string $Locality) Return Massconversion objects filtered by the Locality column
 * @method array findByCountry(string $Country) Return Massconversion objects filtered by the Country column
 * @method array findByCCode(string $C_code) Return Massconversion objects filtered by the C_code column
 * @method array findBySex(string $Sex) Return Massconversion objects filtered by the Sex column
 * @method array findByLifestage(string $LifeStage) Return Massconversion objects filtered by the LifeStage column
 * @method array findByDmWm(double $DM_WM) Return Massconversion objects filtered by the DM_WM column
 * @method array findByDmWmcalc(string $DM_WMcalc) Return Massconversion objects filtered by the DM_WMcalc column
 * @method array findByAfdmDm(double $AFDM_DM) Return Massconversion objects filtered by the AFDM_DM column
 * @method array findByAfdmDmcalc(string $AFDM_DMcalc) Return Massconversion objects filtered by the AFDM_DMcalc column
 * @method array findByAfdmWm(double $AFDM_WM) Return Massconversion objects filtered by the AFDM_WM column
 * @method array findByAfdmWmcalc(string $AFDM_WMcalc) Return Massconversion objects filtered by the AFDM_WMcalc column
 * @method array findByProteinDm(double $Protein_DM) Return Massconversion objects filtered by the Protein_DM column
 * @method array findByProteinDmcalc(string $Protein_DMcalc) Return Massconversion objects filtered by the Protein_DMcalc column
 * @method array findByCarbhydrDm(double $Carbhydr_DM) Return Massconversion objects filtered by the Carbhydr_DM column
 * @method array findByCarbhydrDmcalc(string $Carbhydr_DMcalc) Return Massconversion objects filtered by the Carbhydr_DMcalc column
 * @method array findByLipidDm(double $Lipid_DM) Return Massconversion objects filtered by the Lipid_DM column
 * @method array findByLipidDmcalc(string $Lipid_DMcalc) Return Massconversion objects filtered by the Lipid_DMcalc column
 * @method array findByCDm(double $C_DM) Return Massconversion objects filtered by the C_DM column
 * @method array findByCDmcalc(string $C_DMcalc) Return Massconversion objects filtered by the C_DMcalc column
 * @method array findByNDm(double $N_DM) Return Massconversion objects filtered by the N_DM column
 * @method array findByNDmcalc(string $N_DMcalc) Return Massconversion objects filtered by the N_DMcalc column
 * @method array findByPDm(double $P_DM) Return Massconversion objects filtered by the P_DM column
 * @method array findByPDmcalc(string $P_DMcalc) Return Massconversion objects filtered by the P_DMcalc column
 * @method array findByCAfdm(double $C_AFDM) Return Massconversion objects filtered by the C_AFDM column
 * @method array findByCAfdmcalc(string $C_AFDMcalc) Return Massconversion objects filtered by the C_AFDMcalc column
 * @method array findByNAfdm(double $N_AFDM) Return Massconversion objects filtered by the N_AFDM column
 * @method array findByNAfdmcalc(string $N_AFDMcalc) Return Massconversion objects filtered by the N_AFDMcalc column
 * @method array findByPAfdm(double $P_AFDM) Return Massconversion objects filtered by the P_AFDM column
 * @method array findByPAfdmcalc(string $P_AFDMcalc) Return Massconversion objects filtered by the P_AFDMcalc column
 * @method array findByJMgwm(double $J_mgWM) Return Massconversion objects filtered by the J_mgWM column
 * @method array findByJMgwmcalc(string $J_mgWMcalc) Return Massconversion objects filtered by the J_mgWMcalc column
 * @method array findByJMgdm(double $J_mgDM) Return Massconversion objects filtered by the J_mgDM column
 * @method array findByJMgdmcalc(string $J_mgDMcalc) Return Massconversion objects filtered by the J_mgDMcalc column
 * @method array findByJMgafdm(double $J_mgAFDM) Return Massconversion objects filtered by the J_mgAFDM column
 * @method array findByJMgafdmcalc(string $J_mgAFDMcalc) Return Massconversion objects filtered by the J_mgAFDMcalc column
 * @method array findByJMgc(double $J_mgC) Return Massconversion objects filtered by the J_mgC column
 * @method array findByJMgccalc(string $J_mgCcalc) Return Massconversion objects filtered by the J_mgCcalc column
 * @method array findByCNmass(double $C_Nmass) Return Massconversion objects filtered by the C_Nmass column
 * @method array findByCPmass(double $C_Pmass) Return Massconversion objects filtered by the C_Pmass column
 * @method array findByNPmass(double $N_Pmass) Return Massconversion objects filtered by the N_Pmass column
 * @method array findByComments(string $Comments) Return Massconversion objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Massconversion objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Massconversion objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Massconversion objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Massconversion objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Massconversion objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Massconversion objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMassconversionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMassconversionQuery object.
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
            $modelName = 'Massconversion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MassconversionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MassconversionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MassconversionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MassconversionQuery) {
            return $criteria;
        }
        $query = new MassconversionQuery(null, null, $modelAlias);

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
     * @return   Massconversion|Massconversion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MassconversionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Massconversion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRecordno($key, $con = null)
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
     * @return                 Massconversion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `RecordNo`, `Genus`, `Species`, `NameUsed`, `Speccode`, `StockCode`, `MassConvMainRef`, `MassConvRefNo`, `Locality`, `Country`, `C_code`, `Sex`, `LifeStage`, `DM_WM`, `DM_WMcalc`, `AFDM_DM`, `AFDM_DMcalc`, `AFDM_WM`, `AFDM_WMcalc`, `Protein_DM`, `Protein_DMcalc`, `Carbhydr_DM`, `Carbhydr_DMcalc`, `Lipid_DM`, `Lipid_DMcalc`, `C_DM`, `C_DMcalc`, `N_DM`, `N_DMcalc`, `P_DM`, `P_DMcalc`, `C_AFDM`, `C_AFDMcalc`, `N_AFDM`, `N_AFDMcalc`, `P_AFDM`, `P_AFDMcalc`, `J_mgWM`, `J_mgWMcalc`, `J_mgDM`, `J_mgDMcalc`, `J_mgAFDM`, `J_mgAFDMcalc`, `J_mgC`, `J_mgCcalc`, `C_Nmass`, `C_Pmass`, `N_Pmass`, `Comments`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `massconversion` WHERE `RecordNo` = :p0';
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
            $obj = new Massconversion();
            $obj->hydrate($row);
            MassconversionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Massconversion|Massconversion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Massconversion[]|mixed the list of results, formatted by the current formatter
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MassconversionPeer::RECORDNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MassconversionPeer::RECORDNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the RecordNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordno(1234); // WHERE RecordNo = 1234
     * $query->filterByRecordno(array(12, 34)); // WHERE RecordNo IN (12, 34)
     * $query->filterByRecordno(array('min' => 12)); // WHERE RecordNo >= 12
     * $query->filterByRecordno(array('max' => 12)); // WHERE RecordNo <= 12
     * </code>
     *
     * @param     mixed $recordno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByRecordno($recordno = null, $comparison = null)
    {
        if (is_array($recordno)) {
            $useMinMax = false;
            if (isset($recordno['min'])) {
                $this->addUsingAlias(MassconversionPeer::RECORDNO, $recordno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordno['max'])) {
                $this->addUsingAlias(MassconversionPeer::RECORDNO, $recordno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::RECORDNO, $recordno, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the NameUsed column
     *
     * Example usage:
     * <code>
     * $query->filterByNameused('fooValue');   // WHERE NameUsed = 'fooValue'
     * $query->filterByNameused('%fooValue%'); // WHERE NameUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNameused($nameused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameused)) {
                $nameused = str_replace('*', '%', $nameused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::NAMEUSED, $nameused, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MassconversionPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MassconversionPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::SPECCODE, $speccode, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(MassconversionPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(MassconversionPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the MassConvMainRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMassconvmainref(1234); // WHERE MassConvMainRef = 1234
     * $query->filterByMassconvmainref(array(12, 34)); // WHERE MassConvMainRef IN (12, 34)
     * $query->filterByMassconvmainref(array('min' => 12)); // WHERE MassConvMainRef >= 12
     * $query->filterByMassconvmainref(array('max' => 12)); // WHERE MassConvMainRef <= 12
     * </code>
     *
     * @param     mixed $massconvmainref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByMassconvmainref($massconvmainref = null, $comparison = null)
    {
        if (is_array($massconvmainref)) {
            $useMinMax = false;
            if (isset($massconvmainref['min'])) {
                $this->addUsingAlias(MassconversionPeer::MASSCONVMAINREF, $massconvmainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($massconvmainref['max'])) {
                $this->addUsingAlias(MassconversionPeer::MASSCONVMAINREF, $massconvmainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::MASSCONVMAINREF, $massconvmainref, $comparison);
    }

    /**
     * Filter the query on the MassConvRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByMassconvrefno(1234); // WHERE MassConvRefNo = 1234
     * $query->filterByMassconvrefno(array(12, 34)); // WHERE MassConvRefNo IN (12, 34)
     * $query->filterByMassconvrefno(array('min' => 12)); // WHERE MassConvRefNo >= 12
     * $query->filterByMassconvrefno(array('max' => 12)); // WHERE MassConvRefNo <= 12
     * </code>
     *
     * @param     mixed $massconvrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByMassconvrefno($massconvrefno = null, $comparison = null)
    {
        if (is_array($massconvrefno)) {
            $useMinMax = false;
            if (isset($massconvrefno['min'])) {
                $this->addUsingAlias(MassconversionPeer::MASSCONVREFNO, $massconvrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($massconvrefno['max'])) {
                $this->addUsingAlias(MassconversionPeer::MASSCONVREFNO, $massconvrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::MASSCONVREFNO, $massconvrefno, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MassconversionPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE Country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE Country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the C_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MassconversionPeer::C_CODE, $cCode, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MassconversionPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the LifeStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage('fooValue');   // WHERE LifeStage = 'fooValue'
     * $query->filterByLifestage('%fooValue%'); // WHERE LifeStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByLifestage($lifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage)) {
                $lifestage = str_replace('*', '%', $lifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::LIFESTAGE, $lifestage, $comparison);
    }

    /**
     * Filter the query on the DM_WM column
     *
     * Example usage:
     * <code>
     * $query->filterByDmWm(1234); // WHERE DM_WM = 1234
     * $query->filterByDmWm(array(12, 34)); // WHERE DM_WM IN (12, 34)
     * $query->filterByDmWm(array('min' => 12)); // WHERE DM_WM >= 12
     * $query->filterByDmWm(array('max' => 12)); // WHERE DM_WM <= 12
     * </code>
     *
     * @param     mixed $dmWm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByDmWm($dmWm = null, $comparison = null)
    {
        if (is_array($dmWm)) {
            $useMinMax = false;
            if (isset($dmWm['min'])) {
                $this->addUsingAlias(MassconversionPeer::DM_WM, $dmWm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dmWm['max'])) {
                $this->addUsingAlias(MassconversionPeer::DM_WM, $dmWm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::DM_WM, $dmWm, $comparison);
    }

    /**
     * Filter the query on the DM_WMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByDmWmcalc('fooValue');   // WHERE DM_WMcalc = 'fooValue'
     * $query->filterByDmWmcalc('%fooValue%'); // WHERE DM_WMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dmWmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByDmWmcalc($dmWmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dmWmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dmWmcalc)) {
                $dmWmcalc = str_replace('*', '%', $dmWmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::DM_WMCALC, $dmWmcalc, $comparison);
    }

    /**
     * Filter the query on the AFDM_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByAfdmDm(1234); // WHERE AFDM_DM = 1234
     * $query->filterByAfdmDm(array(12, 34)); // WHERE AFDM_DM IN (12, 34)
     * $query->filterByAfdmDm(array('min' => 12)); // WHERE AFDM_DM >= 12
     * $query->filterByAfdmDm(array('max' => 12)); // WHERE AFDM_DM <= 12
     * </code>
     *
     * @param     mixed $afdmDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByAfdmDm($afdmDm = null, $comparison = null)
    {
        if (is_array($afdmDm)) {
            $useMinMax = false;
            if (isset($afdmDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::AFDM_DM, $afdmDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afdmDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::AFDM_DM, $afdmDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::AFDM_DM, $afdmDm, $comparison);
    }

    /**
     * Filter the query on the AFDM_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByAfdmDmcalc('fooValue');   // WHERE AFDM_DMcalc = 'fooValue'
     * $query->filterByAfdmDmcalc('%fooValue%'); // WHERE AFDM_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afdmDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByAfdmDmcalc($afdmDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afdmDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afdmDmcalc)) {
                $afdmDmcalc = str_replace('*', '%', $afdmDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::AFDM_DMCALC, $afdmDmcalc, $comparison);
    }

    /**
     * Filter the query on the AFDM_WM column
     *
     * Example usage:
     * <code>
     * $query->filterByAfdmWm(1234); // WHERE AFDM_WM = 1234
     * $query->filterByAfdmWm(array(12, 34)); // WHERE AFDM_WM IN (12, 34)
     * $query->filterByAfdmWm(array('min' => 12)); // WHERE AFDM_WM >= 12
     * $query->filterByAfdmWm(array('max' => 12)); // WHERE AFDM_WM <= 12
     * </code>
     *
     * @param     mixed $afdmWm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByAfdmWm($afdmWm = null, $comparison = null)
    {
        if (is_array($afdmWm)) {
            $useMinMax = false;
            if (isset($afdmWm['min'])) {
                $this->addUsingAlias(MassconversionPeer::AFDM_WM, $afdmWm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afdmWm['max'])) {
                $this->addUsingAlias(MassconversionPeer::AFDM_WM, $afdmWm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::AFDM_WM, $afdmWm, $comparison);
    }

    /**
     * Filter the query on the AFDM_WMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByAfdmWmcalc('fooValue');   // WHERE AFDM_WMcalc = 'fooValue'
     * $query->filterByAfdmWmcalc('%fooValue%'); // WHERE AFDM_WMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afdmWmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByAfdmWmcalc($afdmWmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afdmWmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afdmWmcalc)) {
                $afdmWmcalc = str_replace('*', '%', $afdmWmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::AFDM_WMCALC, $afdmWmcalc, $comparison);
    }

    /**
     * Filter the query on the Protein_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByProteinDm(1234); // WHERE Protein_DM = 1234
     * $query->filterByProteinDm(array(12, 34)); // WHERE Protein_DM IN (12, 34)
     * $query->filterByProteinDm(array('min' => 12)); // WHERE Protein_DM >= 12
     * $query->filterByProteinDm(array('max' => 12)); // WHERE Protein_DM <= 12
     * </code>
     *
     * @param     mixed $proteinDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByProteinDm($proteinDm = null, $comparison = null)
    {
        if (is_array($proteinDm)) {
            $useMinMax = false;
            if (isset($proteinDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::PROTEIN_DM, $proteinDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proteinDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::PROTEIN_DM, $proteinDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::PROTEIN_DM, $proteinDm, $comparison);
    }

    /**
     * Filter the query on the Protein_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByProteinDmcalc('fooValue');   // WHERE Protein_DMcalc = 'fooValue'
     * $query->filterByProteinDmcalc('%fooValue%'); // WHERE Protein_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proteinDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByProteinDmcalc($proteinDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proteinDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proteinDmcalc)) {
                $proteinDmcalc = str_replace('*', '%', $proteinDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::PROTEIN_DMCALC, $proteinDmcalc, $comparison);
    }

    /**
     * Filter the query on the Carbhydr_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByCarbhydrDm(1234); // WHERE Carbhydr_DM = 1234
     * $query->filterByCarbhydrDm(array(12, 34)); // WHERE Carbhydr_DM IN (12, 34)
     * $query->filterByCarbhydrDm(array('min' => 12)); // WHERE Carbhydr_DM >= 12
     * $query->filterByCarbhydrDm(array('max' => 12)); // WHERE Carbhydr_DM <= 12
     * </code>
     *
     * @param     mixed $carbhydrDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCarbhydrDm($carbhydrDm = null, $comparison = null)
    {
        if (is_array($carbhydrDm)) {
            $useMinMax = false;
            if (isset($carbhydrDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::CARBHYDR_DM, $carbhydrDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($carbhydrDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::CARBHYDR_DM, $carbhydrDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::CARBHYDR_DM, $carbhydrDm, $comparison);
    }

    /**
     * Filter the query on the Carbhydr_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByCarbhydrDmcalc('fooValue');   // WHERE Carbhydr_DMcalc = 'fooValue'
     * $query->filterByCarbhydrDmcalc('%fooValue%'); // WHERE Carbhydr_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carbhydrDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCarbhydrDmcalc($carbhydrDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carbhydrDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carbhydrDmcalc)) {
                $carbhydrDmcalc = str_replace('*', '%', $carbhydrDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::CARBHYDR_DMCALC, $carbhydrDmcalc, $comparison);
    }

    /**
     * Filter the query on the Lipid_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByLipidDm(1234); // WHERE Lipid_DM = 1234
     * $query->filterByLipidDm(array(12, 34)); // WHERE Lipid_DM IN (12, 34)
     * $query->filterByLipidDm(array('min' => 12)); // WHERE Lipid_DM >= 12
     * $query->filterByLipidDm(array('max' => 12)); // WHERE Lipid_DM <= 12
     * </code>
     *
     * @param     mixed $lipidDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByLipidDm($lipidDm = null, $comparison = null)
    {
        if (is_array($lipidDm)) {
            $useMinMax = false;
            if (isset($lipidDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::LIPID_DM, $lipidDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lipidDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::LIPID_DM, $lipidDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::LIPID_DM, $lipidDm, $comparison);
    }

    /**
     * Filter the query on the Lipid_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByLipidDmcalc('fooValue');   // WHERE Lipid_DMcalc = 'fooValue'
     * $query->filterByLipidDmcalc('%fooValue%'); // WHERE Lipid_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lipidDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByLipidDmcalc($lipidDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lipidDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lipidDmcalc)) {
                $lipidDmcalc = str_replace('*', '%', $lipidDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::LIPID_DMCALC, $lipidDmcalc, $comparison);
    }

    /**
     * Filter the query on the C_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByCDm(1234); // WHERE C_DM = 1234
     * $query->filterByCDm(array(12, 34)); // WHERE C_DM IN (12, 34)
     * $query->filterByCDm(array('min' => 12)); // WHERE C_DM >= 12
     * $query->filterByCDm(array('max' => 12)); // WHERE C_DM <= 12
     * </code>
     *
     * @param     mixed $cDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCDm($cDm = null, $comparison = null)
    {
        if (is_array($cDm)) {
            $useMinMax = false;
            if (isset($cDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::C_DM, $cDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::C_DM, $cDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_DM, $cDm, $comparison);
    }

    /**
     * Filter the query on the C_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByCDmcalc('fooValue');   // WHERE C_DMcalc = 'fooValue'
     * $query->filterByCDmcalc('%fooValue%'); // WHERE C_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCDmcalc($cDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cDmcalc)) {
                $cDmcalc = str_replace('*', '%', $cDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_DMCALC, $cDmcalc, $comparison);
    }

    /**
     * Filter the query on the N_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByNDm(1234); // WHERE N_DM = 1234
     * $query->filterByNDm(array(12, 34)); // WHERE N_DM IN (12, 34)
     * $query->filterByNDm(array('min' => 12)); // WHERE N_DM >= 12
     * $query->filterByNDm(array('max' => 12)); // WHERE N_DM <= 12
     * </code>
     *
     * @param     mixed $nDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNDm($nDm = null, $comparison = null)
    {
        if (is_array($nDm)) {
            $useMinMax = false;
            if (isset($nDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::N_DM, $nDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::N_DM, $nDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::N_DM, $nDm, $comparison);
    }

    /**
     * Filter the query on the N_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByNDmcalc('fooValue');   // WHERE N_DMcalc = 'fooValue'
     * $query->filterByNDmcalc('%fooValue%'); // WHERE N_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNDmcalc($nDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nDmcalc)) {
                $nDmcalc = str_replace('*', '%', $nDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::N_DMCALC, $nDmcalc, $comparison);
    }

    /**
     * Filter the query on the P_DM column
     *
     * Example usage:
     * <code>
     * $query->filterByPDm(1234); // WHERE P_DM = 1234
     * $query->filterByPDm(array(12, 34)); // WHERE P_DM IN (12, 34)
     * $query->filterByPDm(array('min' => 12)); // WHERE P_DM >= 12
     * $query->filterByPDm(array('max' => 12)); // WHERE P_DM <= 12
     * </code>
     *
     * @param     mixed $pDm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPDm($pDm = null, $comparison = null)
    {
        if (is_array($pDm)) {
            $useMinMax = false;
            if (isset($pDm['min'])) {
                $this->addUsingAlias(MassconversionPeer::P_DM, $pDm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pDm['max'])) {
                $this->addUsingAlias(MassconversionPeer::P_DM, $pDm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::P_DM, $pDm, $comparison);
    }

    /**
     * Filter the query on the P_DMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByPDmcalc('fooValue');   // WHERE P_DMcalc = 'fooValue'
     * $query->filterByPDmcalc('%fooValue%'); // WHERE P_DMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pDmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPDmcalc($pDmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pDmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pDmcalc)) {
                $pDmcalc = str_replace('*', '%', $pDmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::P_DMCALC, $pDmcalc, $comparison);
    }

    /**
     * Filter the query on the C_AFDM column
     *
     * Example usage:
     * <code>
     * $query->filterByCAfdm(1234); // WHERE C_AFDM = 1234
     * $query->filterByCAfdm(array(12, 34)); // WHERE C_AFDM IN (12, 34)
     * $query->filterByCAfdm(array('min' => 12)); // WHERE C_AFDM >= 12
     * $query->filterByCAfdm(array('max' => 12)); // WHERE C_AFDM <= 12
     * </code>
     *
     * @param     mixed $cAfdm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCAfdm($cAfdm = null, $comparison = null)
    {
        if (is_array($cAfdm)) {
            $useMinMax = false;
            if (isset($cAfdm['min'])) {
                $this->addUsingAlias(MassconversionPeer::C_AFDM, $cAfdm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cAfdm['max'])) {
                $this->addUsingAlias(MassconversionPeer::C_AFDM, $cAfdm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_AFDM, $cAfdm, $comparison);
    }

    /**
     * Filter the query on the C_AFDMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByCAfdmcalc('fooValue');   // WHERE C_AFDMcalc = 'fooValue'
     * $query->filterByCAfdmcalc('%fooValue%'); // WHERE C_AFDMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cAfdmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCAfdmcalc($cAfdmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cAfdmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cAfdmcalc)) {
                $cAfdmcalc = str_replace('*', '%', $cAfdmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_AFDMCALC, $cAfdmcalc, $comparison);
    }

    /**
     * Filter the query on the N_AFDM column
     *
     * Example usage:
     * <code>
     * $query->filterByNAfdm(1234); // WHERE N_AFDM = 1234
     * $query->filterByNAfdm(array(12, 34)); // WHERE N_AFDM IN (12, 34)
     * $query->filterByNAfdm(array('min' => 12)); // WHERE N_AFDM >= 12
     * $query->filterByNAfdm(array('max' => 12)); // WHERE N_AFDM <= 12
     * </code>
     *
     * @param     mixed $nAfdm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNAfdm($nAfdm = null, $comparison = null)
    {
        if (is_array($nAfdm)) {
            $useMinMax = false;
            if (isset($nAfdm['min'])) {
                $this->addUsingAlias(MassconversionPeer::N_AFDM, $nAfdm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nAfdm['max'])) {
                $this->addUsingAlias(MassconversionPeer::N_AFDM, $nAfdm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::N_AFDM, $nAfdm, $comparison);
    }

    /**
     * Filter the query on the N_AFDMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByNAfdmcalc('fooValue');   // WHERE N_AFDMcalc = 'fooValue'
     * $query->filterByNAfdmcalc('%fooValue%'); // WHERE N_AFDMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nAfdmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNAfdmcalc($nAfdmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nAfdmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nAfdmcalc)) {
                $nAfdmcalc = str_replace('*', '%', $nAfdmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::N_AFDMCALC, $nAfdmcalc, $comparison);
    }

    /**
     * Filter the query on the P_AFDM column
     *
     * Example usage:
     * <code>
     * $query->filterByPAfdm(1234); // WHERE P_AFDM = 1234
     * $query->filterByPAfdm(array(12, 34)); // WHERE P_AFDM IN (12, 34)
     * $query->filterByPAfdm(array('min' => 12)); // WHERE P_AFDM >= 12
     * $query->filterByPAfdm(array('max' => 12)); // WHERE P_AFDM <= 12
     * </code>
     *
     * @param     mixed $pAfdm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPAfdm($pAfdm = null, $comparison = null)
    {
        if (is_array($pAfdm)) {
            $useMinMax = false;
            if (isset($pAfdm['min'])) {
                $this->addUsingAlias(MassconversionPeer::P_AFDM, $pAfdm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pAfdm['max'])) {
                $this->addUsingAlias(MassconversionPeer::P_AFDM, $pAfdm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::P_AFDM, $pAfdm, $comparison);
    }

    /**
     * Filter the query on the P_AFDMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByPAfdmcalc('fooValue');   // WHERE P_AFDMcalc = 'fooValue'
     * $query->filterByPAfdmcalc('%fooValue%'); // WHERE P_AFDMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pAfdmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByPAfdmcalc($pAfdmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pAfdmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pAfdmcalc)) {
                $pAfdmcalc = str_replace('*', '%', $pAfdmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::P_AFDMCALC, $pAfdmcalc, $comparison);
    }

    /**
     * Filter the query on the J_mgWM column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgwm(1234); // WHERE J_mgWM = 1234
     * $query->filterByJMgwm(array(12, 34)); // WHERE J_mgWM IN (12, 34)
     * $query->filterByJMgwm(array('min' => 12)); // WHERE J_mgWM >= 12
     * $query->filterByJMgwm(array('max' => 12)); // WHERE J_mgWM <= 12
     * </code>
     *
     * @param     mixed $jMgwm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgwm($jMgwm = null, $comparison = null)
    {
        if (is_array($jMgwm)) {
            $useMinMax = false;
            if (isset($jMgwm['min'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGWM, $jMgwm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jMgwm['max'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGWM, $jMgwm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGWM, $jMgwm, $comparison);
    }

    /**
     * Filter the query on the J_mgWMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgwmcalc('fooValue');   // WHERE J_mgWMcalc = 'fooValue'
     * $query->filterByJMgwmcalc('%fooValue%'); // WHERE J_mgWMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jMgwmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgwmcalc($jMgwmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jMgwmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jMgwmcalc)) {
                $jMgwmcalc = str_replace('*', '%', $jMgwmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGWMCALC, $jMgwmcalc, $comparison);
    }

    /**
     * Filter the query on the J_mgDM column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgdm(1234); // WHERE J_mgDM = 1234
     * $query->filterByJMgdm(array(12, 34)); // WHERE J_mgDM IN (12, 34)
     * $query->filterByJMgdm(array('min' => 12)); // WHERE J_mgDM >= 12
     * $query->filterByJMgdm(array('max' => 12)); // WHERE J_mgDM <= 12
     * </code>
     *
     * @param     mixed $jMgdm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgdm($jMgdm = null, $comparison = null)
    {
        if (is_array($jMgdm)) {
            $useMinMax = false;
            if (isset($jMgdm['min'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGDM, $jMgdm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jMgdm['max'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGDM, $jMgdm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGDM, $jMgdm, $comparison);
    }

    /**
     * Filter the query on the J_mgDMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgdmcalc('fooValue');   // WHERE J_mgDMcalc = 'fooValue'
     * $query->filterByJMgdmcalc('%fooValue%'); // WHERE J_mgDMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jMgdmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgdmcalc($jMgdmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jMgdmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jMgdmcalc)) {
                $jMgdmcalc = str_replace('*', '%', $jMgdmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGDMCALC, $jMgdmcalc, $comparison);
    }

    /**
     * Filter the query on the J_mgAFDM column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgafdm(1234); // WHERE J_mgAFDM = 1234
     * $query->filterByJMgafdm(array(12, 34)); // WHERE J_mgAFDM IN (12, 34)
     * $query->filterByJMgafdm(array('min' => 12)); // WHERE J_mgAFDM >= 12
     * $query->filterByJMgafdm(array('max' => 12)); // WHERE J_mgAFDM <= 12
     * </code>
     *
     * @param     mixed $jMgafdm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgafdm($jMgafdm = null, $comparison = null)
    {
        if (is_array($jMgafdm)) {
            $useMinMax = false;
            if (isset($jMgafdm['min'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGAFDM, $jMgafdm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jMgafdm['max'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGAFDM, $jMgafdm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGAFDM, $jMgafdm, $comparison);
    }

    /**
     * Filter the query on the J_mgAFDMcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgafdmcalc('fooValue');   // WHERE J_mgAFDMcalc = 'fooValue'
     * $query->filterByJMgafdmcalc('%fooValue%'); // WHERE J_mgAFDMcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jMgafdmcalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgafdmcalc($jMgafdmcalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jMgafdmcalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jMgafdmcalc)) {
                $jMgafdmcalc = str_replace('*', '%', $jMgafdmcalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGAFDMCALC, $jMgafdmcalc, $comparison);
    }

    /**
     * Filter the query on the J_mgC column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgc(1234); // WHERE J_mgC = 1234
     * $query->filterByJMgc(array(12, 34)); // WHERE J_mgC IN (12, 34)
     * $query->filterByJMgc(array('min' => 12)); // WHERE J_mgC >= 12
     * $query->filterByJMgc(array('max' => 12)); // WHERE J_mgC <= 12
     * </code>
     *
     * @param     mixed $jMgc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgc($jMgc = null, $comparison = null)
    {
        if (is_array($jMgc)) {
            $useMinMax = false;
            if (isset($jMgc['min'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGC, $jMgc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jMgc['max'])) {
                $this->addUsingAlias(MassconversionPeer::J_MGC, $jMgc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGC, $jMgc, $comparison);
    }

    /**
     * Filter the query on the J_mgCcalc column
     *
     * Example usage:
     * <code>
     * $query->filterByJMgccalc('fooValue');   // WHERE J_mgCcalc = 'fooValue'
     * $query->filterByJMgccalc('%fooValue%'); // WHERE J_mgCcalc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jMgccalc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByJMgccalc($jMgccalc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jMgccalc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jMgccalc)) {
                $jMgccalc = str_replace('*', '%', $jMgccalc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::J_MGCCALC, $jMgccalc, $comparison);
    }

    /**
     * Filter the query on the C_Nmass column
     *
     * Example usage:
     * <code>
     * $query->filterByCNmass(1234); // WHERE C_Nmass = 1234
     * $query->filterByCNmass(array(12, 34)); // WHERE C_Nmass IN (12, 34)
     * $query->filterByCNmass(array('min' => 12)); // WHERE C_Nmass >= 12
     * $query->filterByCNmass(array('max' => 12)); // WHERE C_Nmass <= 12
     * </code>
     *
     * @param     mixed $cNmass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCNmass($cNmass = null, $comparison = null)
    {
        if (is_array($cNmass)) {
            $useMinMax = false;
            if (isset($cNmass['min'])) {
                $this->addUsingAlias(MassconversionPeer::C_NMASS, $cNmass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cNmass['max'])) {
                $this->addUsingAlias(MassconversionPeer::C_NMASS, $cNmass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_NMASS, $cNmass, $comparison);
    }

    /**
     * Filter the query on the C_Pmass column
     *
     * Example usage:
     * <code>
     * $query->filterByCPmass(1234); // WHERE C_Pmass = 1234
     * $query->filterByCPmass(array(12, 34)); // WHERE C_Pmass IN (12, 34)
     * $query->filterByCPmass(array('min' => 12)); // WHERE C_Pmass >= 12
     * $query->filterByCPmass(array('max' => 12)); // WHERE C_Pmass <= 12
     * </code>
     *
     * @param     mixed $cPmass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByCPmass($cPmass = null, $comparison = null)
    {
        if (is_array($cPmass)) {
            $useMinMax = false;
            if (isset($cPmass['min'])) {
                $this->addUsingAlias(MassconversionPeer::C_PMASS, $cPmass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cPmass['max'])) {
                $this->addUsingAlias(MassconversionPeer::C_PMASS, $cPmass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::C_PMASS, $cPmass, $comparison);
    }

    /**
     * Filter the query on the N_Pmass column
     *
     * Example usage:
     * <code>
     * $query->filterByNPmass(1234); // WHERE N_Pmass = 1234
     * $query->filterByNPmass(array(12, 34)); // WHERE N_Pmass IN (12, 34)
     * $query->filterByNPmass(array('min' => 12)); // WHERE N_Pmass >= 12
     * $query->filterByNPmass(array('max' => 12)); // WHERE N_Pmass <= 12
     * </code>
     *
     * @param     mixed $nPmass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByNPmass($nPmass = null, $comparison = null)
    {
        if (is_array($nPmass)) {
            $useMinMax = false;
            if (isset($nPmass['min'])) {
                $this->addUsingAlias(MassconversionPeer::N_PMASS, $nPmass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nPmass['max'])) {
                $this->addUsingAlias(MassconversionPeer::N_PMASS, $nPmass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::N_PMASS, $nPmass, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::COMMENTS, $comments, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MassconversionPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MassconversionPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::ENTERED, $entered, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MassconversionPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MassconversionPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MassconversionPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MassconversionPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::MODIFIED, $modified, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MassconversionPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MassconversionPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MassconversionPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MassconversionPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::EXPERT, $expert, $comparison);
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
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MassconversionPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MassconversionPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MassconversionPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Massconversion $massconversion Object to remove from the list of results
     *
     * @return MassconversionQuery The current query, for fluid interface
     */
    public function prune($massconversion = null)
    {
        if ($massconversion) {
            $this->addUsingAlias(MassconversionPeer::RECORDNO, $massconversion->getRecordno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
