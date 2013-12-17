<?php


/**
 * Base class that represents a query for the 'proxims' table.
 *
 *
 *
 * @method ProximsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method ProximsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ProximsQuery orderByChemicsrefno($order = Criteria::ASC) Order by the ChemicsRefNo column
 * @method ProximsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method ProximsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method ProximsQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method ProximsQuery orderByLengthupper($order = Criteria::ASC) Order by the LengthUpper column
 * @method ProximsQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method ProximsQuery orderByWeightlower($order = Criteria::ASC) Order by the WeightLower column
 * @method ProximsQuery orderByWeightupper($order = Criteria::ASC) Order by the WeightUpper column
 * @method ProximsQuery orderByHeadlower($order = Criteria::ASC) Order by the HeadLower column
 * @method ProximsQuery orderByHeadupper($order = Criteria::ASC) Order by the HeadUpper column
 * @method ProximsQuery orderByVisceralower22($order = Criteria::ASC) Order by the VisceraLower22 column
 * @method ProximsQuery orderByVisceraupper22($order = Criteria::ASC) Order by the VisceraUpper22 column
 * @method ProximsQuery orderByTrunklower($order = Criteria::ASC) Order by the TrunkLower column
 * @method ProximsQuery orderByTrunkupper($order = Criteria::ASC) Order by the TrunkUpper column
 * @method ProximsQuery orderByRoelower($order = Criteria::ASC) Order by the RoeLower column
 * @method ProximsQuery orderByRoeupper($order = Criteria::ASC) Order by the RoeUpper column
 * @method ProximsQuery orderBySkinlower($order = Criteria::ASC) Order by the SkinLower column
 * @method ProximsQuery orderBySkinupper($order = Criteria::ASC) Order by the SkinUpper column
 * @method ProximsQuery orderByTesteslower($order = Criteria::ASC) Order by the TestesLower column
 * @method ProximsQuery orderByTestesupper($order = Criteria::ASC) Order by the TestesUpper column
 * @method ProximsQuery orderByFinslower($order = Criteria::ASC) Order by the FinsLower column
 * @method ProximsQuery orderByFinsupper($order = Criteria::ASC) Order by the FinsUpper column
 * @method ProximsQuery orderByLiverlower($order = Criteria::ASC) Order by the LiverLower column
 * @method ProximsQuery orderByLiverupper($order = Criteria::ASC) Order by the LiverUpper column
 * @method ProximsQuery orderByBoneslower($order = Criteria::ASC) Order by the BonesLower column
 * @method ProximsQuery orderByBonesupper($order = Criteria::ASC) Order by the BonesUpper column
 * @method ProximsQuery orderByMeatlower($order = Criteria::ASC) Order by the MeatLower column
 * @method ProximsQuery orderByMeatupper($order = Criteria::ASC) Order by the MeatUpper column
 * @method ProximsQuery orderByFilletlower($order = Criteria::ASC) Order by the FilletLower column
 * @method ProximsQuery orderByFilletupper($order = Criteria::ASC) Order by the FilletUpper column
 * @method ProximsQuery orderBySteaklower($order = Criteria::ASC) Order by the SteakLower column
 * @method ProximsQuery orderBySteakupper($order = Criteria::ASC) Order by the SteakUpper column
 * @method ProximsQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method ProximsQuery orderByMeatmoistmin($order = Criteria::ASC) Order by the MeatMoistMin column
 * @method ProximsQuery orderByMeatmoistmax($order = Criteria::ASC) Order by the MeatMoistMax column
 * @method ProximsQuery orderByMeatprotmin($order = Criteria::ASC) Order by the MeatProtMin column
 * @method ProximsQuery orderByMeatprotmax($order = Criteria::ASC) Order by the MeatProtMax column
 * @method ProximsQuery orderByMeatfatmin($order = Criteria::ASC) Order by the MeatFatMin column
 * @method ProximsQuery orderByMeatfatmax($order = Criteria::ASC) Order by the MeatFatMax column
 * @method ProximsQuery orderByMeatashmin($order = Criteria::ASC) Order by the MeatAshMin column
 * @method ProximsQuery orderByMeatashmax($order = Criteria::ASC) Order by the MeatAshMax column
 * @method ProximsQuery orderByLivermoistmin($order = Criteria::ASC) Order by the LiverMoistMin column
 * @method ProximsQuery orderByLivermoistmax($order = Criteria::ASC) Order by the LiverMoistMax column
 * @method ProximsQuery orderByLiverprotmin($order = Criteria::ASC) Order by the LiverProtMin column
 * @method ProximsQuery orderByLiverprotmax($order = Criteria::ASC) Order by the LiverProtMax column
 * @method ProximsQuery orderByLiverfatmin($order = Criteria::ASC) Order by the LiverFatMin column
 * @method ProximsQuery orderByLiverfatmax($order = Criteria::ASC) Order by the LiverFatMax column
 * @method ProximsQuery orderByLiverashmin($order = Criteria::ASC) Order by the LiverAshMin column
 * @method ProximsQuery orderByLiverashmax($order = Criteria::ASC) Order by the LiverAshMax column
 * @method ProximsQuery orderByRoemoistmin($order = Criteria::ASC) Order by the RoeMoistMin column
 * @method ProximsQuery orderByRoemoistmax($order = Criteria::ASC) Order by the RoeMoistMax column
 * @method ProximsQuery orderByRoeprotmin($order = Criteria::ASC) Order by the RoeProtMin column
 * @method ProximsQuery orderByRoeprotmax($order = Criteria::ASC) Order by the RoeProtMax column
 * @method ProximsQuery orderByRoefatmin($order = Criteria::ASC) Order by the RoeFatMin column
 * @method ProximsQuery orderByRoefatmax($order = Criteria::ASC) Order by the RoeFatMax column
 * @method ProximsQuery orderByRoeashmin($order = Criteria::ASC) Order by the RoeAshMin column
 * @method ProximsQuery orderByRoeashmax($order = Criteria::ASC) Order by the RoeAshMax column
 * @method ProximsQuery orderByVisceramoistmin($order = Criteria::ASC) Order by the VisceraMoistMin column
 * @method ProximsQuery orderByVisceramoistmax($order = Criteria::ASC) Order by the VisceraMoistMax column
 * @method ProximsQuery orderByVisceraprotmin($order = Criteria::ASC) Order by the VisceraProtMin column
 * @method ProximsQuery orderByVisceraprotmax($order = Criteria::ASC) Order by the VisceraProtMax column
 * @method ProximsQuery orderByViscerafatmin($order = Criteria::ASC) Order by the VisceraFatMin column
 * @method ProximsQuery orderByViscerafatmax($order = Criteria::ASC) Order by the VisceraFatMax column
 * @method ProximsQuery orderByVisceraashmin($order = Criteria::ASC) Order by the VisceraAshMin column
 * @method ProximsQuery orderByVisceraashmax($order = Criteria::ASC) Order by the VisceraAshMax column
 * @method ProximsQuery orderByHeadmoistmin($order = Criteria::ASC) Order by the HeadMoistMin column
 * @method ProximsQuery orderByHeadmoistmax($order = Criteria::ASC) Order by the HeadMoistMax column
 * @method ProximsQuery orderByHeadprotmin($order = Criteria::ASC) Order by the HeadProtMin column
 * @method ProximsQuery orderByHeadprotmax($order = Criteria::ASC) Order by the HeadProtMax column
 * @method ProximsQuery orderByHeadfatmin($order = Criteria::ASC) Order by the HeadFatMin column
 * @method ProximsQuery orderByHeadfatmax($order = Criteria::ASC) Order by the HeadFatMax column
 * @method ProximsQuery orderByHeadashmin($order = Criteria::ASC) Order by the HeadAshMin column
 * @method ProximsQuery orderByHeadashmax($order = Criteria::ASC) Order by the HeadAshMax column
 * @method ProximsQuery orderByWastemoistmin($order = Criteria::ASC) Order by the WasteMoistMin column
 * @method ProximsQuery orderByWastemoistmax($order = Criteria::ASC) Order by the WasteMoistMax column
 * @method ProximsQuery orderByWasteprotmin($order = Criteria::ASC) Order by the WasteProtMin column
 * @method ProximsQuery orderByWasteprotmax($order = Criteria::ASC) Order by the WasteProtMax column
 * @method ProximsQuery orderByWastefatmin($order = Criteria::ASC) Order by the WasteFatMin column
 * @method ProximsQuery orderByWastefatmax($order = Criteria::ASC) Order by the WasteFatMax column
 * @method ProximsQuery orderByWasteashmin($order = Criteria::ASC) Order by the WasteAshMin column
 * @method ProximsQuery orderByWasteashmax($order = Criteria::ASC) Order by the WasteAshMax column
 * @method ProximsQuery orderByCommentchemics($order = Criteria::ASC) Order by the CommentChemics column
 * @method ProximsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method ProximsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method ProximsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method ProximsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method ProximsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method ProximsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method ProximsQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method ProximsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ProximsQuery groupByStockcode() Group by the StockCode column
 * @method ProximsQuery groupBySpeccode() Group by the SpecCode column
 * @method ProximsQuery groupByChemicsrefno() Group by the ChemicsRefNo column
 * @method ProximsQuery groupByCCode() Group by the C_Code column
 * @method ProximsQuery groupByLocality() Group by the Locality column
 * @method ProximsQuery groupByLength() Group by the Length column
 * @method ProximsQuery groupByLengthupper() Group by the LengthUpper column
 * @method ProximsQuery groupByLengthtype() Group by the LengthType column
 * @method ProximsQuery groupByWeightlower() Group by the WeightLower column
 * @method ProximsQuery groupByWeightupper() Group by the WeightUpper column
 * @method ProximsQuery groupByHeadlower() Group by the HeadLower column
 * @method ProximsQuery groupByHeadupper() Group by the HeadUpper column
 * @method ProximsQuery groupByVisceralower22() Group by the VisceraLower22 column
 * @method ProximsQuery groupByVisceraupper22() Group by the VisceraUpper22 column
 * @method ProximsQuery groupByTrunklower() Group by the TrunkLower column
 * @method ProximsQuery groupByTrunkupper() Group by the TrunkUpper column
 * @method ProximsQuery groupByRoelower() Group by the RoeLower column
 * @method ProximsQuery groupByRoeupper() Group by the RoeUpper column
 * @method ProximsQuery groupBySkinlower() Group by the SkinLower column
 * @method ProximsQuery groupBySkinupper() Group by the SkinUpper column
 * @method ProximsQuery groupByTesteslower() Group by the TestesLower column
 * @method ProximsQuery groupByTestesupper() Group by the TestesUpper column
 * @method ProximsQuery groupByFinslower() Group by the FinsLower column
 * @method ProximsQuery groupByFinsupper() Group by the FinsUpper column
 * @method ProximsQuery groupByLiverlower() Group by the LiverLower column
 * @method ProximsQuery groupByLiverupper() Group by the LiverUpper column
 * @method ProximsQuery groupByBoneslower() Group by the BonesLower column
 * @method ProximsQuery groupByBonesupper() Group by the BonesUpper column
 * @method ProximsQuery groupByMeatlower() Group by the MeatLower column
 * @method ProximsQuery groupByMeatupper() Group by the MeatUpper column
 * @method ProximsQuery groupByFilletlower() Group by the FilletLower column
 * @method ProximsQuery groupByFilletupper() Group by the FilletUpper column
 * @method ProximsQuery groupBySteaklower() Group by the SteakLower column
 * @method ProximsQuery groupBySteakupper() Group by the SteakUpper column
 * @method ProximsQuery groupByComment() Group by the Comment column
 * @method ProximsQuery groupByMeatmoistmin() Group by the MeatMoistMin column
 * @method ProximsQuery groupByMeatmoistmax() Group by the MeatMoistMax column
 * @method ProximsQuery groupByMeatprotmin() Group by the MeatProtMin column
 * @method ProximsQuery groupByMeatprotmax() Group by the MeatProtMax column
 * @method ProximsQuery groupByMeatfatmin() Group by the MeatFatMin column
 * @method ProximsQuery groupByMeatfatmax() Group by the MeatFatMax column
 * @method ProximsQuery groupByMeatashmin() Group by the MeatAshMin column
 * @method ProximsQuery groupByMeatashmax() Group by the MeatAshMax column
 * @method ProximsQuery groupByLivermoistmin() Group by the LiverMoistMin column
 * @method ProximsQuery groupByLivermoistmax() Group by the LiverMoistMax column
 * @method ProximsQuery groupByLiverprotmin() Group by the LiverProtMin column
 * @method ProximsQuery groupByLiverprotmax() Group by the LiverProtMax column
 * @method ProximsQuery groupByLiverfatmin() Group by the LiverFatMin column
 * @method ProximsQuery groupByLiverfatmax() Group by the LiverFatMax column
 * @method ProximsQuery groupByLiverashmin() Group by the LiverAshMin column
 * @method ProximsQuery groupByLiverashmax() Group by the LiverAshMax column
 * @method ProximsQuery groupByRoemoistmin() Group by the RoeMoistMin column
 * @method ProximsQuery groupByRoemoistmax() Group by the RoeMoistMax column
 * @method ProximsQuery groupByRoeprotmin() Group by the RoeProtMin column
 * @method ProximsQuery groupByRoeprotmax() Group by the RoeProtMax column
 * @method ProximsQuery groupByRoefatmin() Group by the RoeFatMin column
 * @method ProximsQuery groupByRoefatmax() Group by the RoeFatMax column
 * @method ProximsQuery groupByRoeashmin() Group by the RoeAshMin column
 * @method ProximsQuery groupByRoeashmax() Group by the RoeAshMax column
 * @method ProximsQuery groupByVisceramoistmin() Group by the VisceraMoistMin column
 * @method ProximsQuery groupByVisceramoistmax() Group by the VisceraMoistMax column
 * @method ProximsQuery groupByVisceraprotmin() Group by the VisceraProtMin column
 * @method ProximsQuery groupByVisceraprotmax() Group by the VisceraProtMax column
 * @method ProximsQuery groupByViscerafatmin() Group by the VisceraFatMin column
 * @method ProximsQuery groupByViscerafatmax() Group by the VisceraFatMax column
 * @method ProximsQuery groupByVisceraashmin() Group by the VisceraAshMin column
 * @method ProximsQuery groupByVisceraashmax() Group by the VisceraAshMax column
 * @method ProximsQuery groupByHeadmoistmin() Group by the HeadMoistMin column
 * @method ProximsQuery groupByHeadmoistmax() Group by the HeadMoistMax column
 * @method ProximsQuery groupByHeadprotmin() Group by the HeadProtMin column
 * @method ProximsQuery groupByHeadprotmax() Group by the HeadProtMax column
 * @method ProximsQuery groupByHeadfatmin() Group by the HeadFatMin column
 * @method ProximsQuery groupByHeadfatmax() Group by the HeadFatMax column
 * @method ProximsQuery groupByHeadashmin() Group by the HeadAshMin column
 * @method ProximsQuery groupByHeadashmax() Group by the HeadAshMax column
 * @method ProximsQuery groupByWastemoistmin() Group by the WasteMoistMin column
 * @method ProximsQuery groupByWastemoistmax() Group by the WasteMoistMax column
 * @method ProximsQuery groupByWasteprotmin() Group by the WasteProtMin column
 * @method ProximsQuery groupByWasteprotmax() Group by the WasteProtMax column
 * @method ProximsQuery groupByWastefatmin() Group by the WasteFatMin column
 * @method ProximsQuery groupByWastefatmax() Group by the WasteFatMax column
 * @method ProximsQuery groupByWasteashmin() Group by the WasteAshMin column
 * @method ProximsQuery groupByWasteashmax() Group by the WasteAshMax column
 * @method ProximsQuery groupByCommentchemics() Group by the CommentChemics column
 * @method ProximsQuery groupByEntered() Group by the Entered column
 * @method ProximsQuery groupByDateentered() Group by the DateEntered column
 * @method ProximsQuery groupByModified() Group by the Modified column
 * @method ProximsQuery groupByDatemodified() Group by the DateModified column
 * @method ProximsQuery groupByExpert() Group by the Expert column
 * @method ProximsQuery groupByDatechecked() Group by the DateChecked column
 * @method ProximsQuery groupByRemark() Group by the Remark column
 * @method ProximsQuery groupByTs() Group by the TS column
 *
 * @method ProximsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProximsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProximsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Proxims findOne(PropelPDO $con = null) Return the first Proxims matching the query
 * @method Proxims findOneOrCreate(PropelPDO $con = null) Return the first Proxims matching the query, or a new Proxims object populated from the query conditions when no match is found
 *
 * @method Proxims findOneByStockcode(int $StockCode) Return the first Proxims filtered by the StockCode column
 * @method Proxims findOneBySpeccode(int $SpecCode) Return the first Proxims filtered by the SpecCode column
 * @method Proxims findOneByChemicsrefno(int $ChemicsRefNo) Return the first Proxims filtered by the ChemicsRefNo column
 * @method Proxims findOneByCCode(string $C_Code) Return the first Proxims filtered by the C_Code column
 * @method Proxims findOneByLocality(string $Locality) Return the first Proxims filtered by the Locality column
 * @method Proxims findOneByLength(double $Length) Return the first Proxims filtered by the Length column
 * @method Proxims findOneByLengthupper(double $LengthUpper) Return the first Proxims filtered by the LengthUpper column
 * @method Proxims findOneByLengthtype(string $LengthType) Return the first Proxims filtered by the LengthType column
 * @method Proxims findOneByWeightlower(double $WeightLower) Return the first Proxims filtered by the WeightLower column
 * @method Proxims findOneByWeightupper(double $WeightUpper) Return the first Proxims filtered by the WeightUpper column
 * @method Proxims findOneByHeadlower(double $HeadLower) Return the first Proxims filtered by the HeadLower column
 * @method Proxims findOneByHeadupper(double $HeadUpper) Return the first Proxims filtered by the HeadUpper column
 * @method Proxims findOneByVisceralower22(double $VisceraLower22) Return the first Proxims filtered by the VisceraLower22 column
 * @method Proxims findOneByVisceraupper22(double $VisceraUpper22) Return the first Proxims filtered by the VisceraUpper22 column
 * @method Proxims findOneByTrunklower(double $TrunkLower) Return the first Proxims filtered by the TrunkLower column
 * @method Proxims findOneByTrunkupper(double $TrunkUpper) Return the first Proxims filtered by the TrunkUpper column
 * @method Proxims findOneByRoelower(double $RoeLower) Return the first Proxims filtered by the RoeLower column
 * @method Proxims findOneByRoeupper(double $RoeUpper) Return the first Proxims filtered by the RoeUpper column
 * @method Proxims findOneBySkinlower(double $SkinLower) Return the first Proxims filtered by the SkinLower column
 * @method Proxims findOneBySkinupper(double $SkinUpper) Return the first Proxims filtered by the SkinUpper column
 * @method Proxims findOneByTesteslower(double $TestesLower) Return the first Proxims filtered by the TestesLower column
 * @method Proxims findOneByTestesupper(double $TestesUpper) Return the first Proxims filtered by the TestesUpper column
 * @method Proxims findOneByFinslower(double $FinsLower) Return the first Proxims filtered by the FinsLower column
 * @method Proxims findOneByFinsupper(double $FinsUpper) Return the first Proxims filtered by the FinsUpper column
 * @method Proxims findOneByLiverlower(double $LiverLower) Return the first Proxims filtered by the LiverLower column
 * @method Proxims findOneByLiverupper(double $LiverUpper) Return the first Proxims filtered by the LiverUpper column
 * @method Proxims findOneByBoneslower(double $BonesLower) Return the first Proxims filtered by the BonesLower column
 * @method Proxims findOneByBonesupper(double $BonesUpper) Return the first Proxims filtered by the BonesUpper column
 * @method Proxims findOneByMeatlower(double $MeatLower) Return the first Proxims filtered by the MeatLower column
 * @method Proxims findOneByMeatupper(double $MeatUpper) Return the first Proxims filtered by the MeatUpper column
 * @method Proxims findOneByFilletlower(double $FilletLower) Return the first Proxims filtered by the FilletLower column
 * @method Proxims findOneByFilletupper(double $FilletUpper) Return the first Proxims filtered by the FilletUpper column
 * @method Proxims findOneBySteaklower(double $SteakLower) Return the first Proxims filtered by the SteakLower column
 * @method Proxims findOneBySteakupper(double $SteakUpper) Return the first Proxims filtered by the SteakUpper column
 * @method Proxims findOneByComment(string $Comment) Return the first Proxims filtered by the Comment column
 * @method Proxims findOneByMeatmoistmin(double $MeatMoistMin) Return the first Proxims filtered by the MeatMoistMin column
 * @method Proxims findOneByMeatmoistmax(double $MeatMoistMax) Return the first Proxims filtered by the MeatMoistMax column
 * @method Proxims findOneByMeatprotmin(double $MeatProtMin) Return the first Proxims filtered by the MeatProtMin column
 * @method Proxims findOneByMeatprotmax(double $MeatProtMax) Return the first Proxims filtered by the MeatProtMax column
 * @method Proxims findOneByMeatfatmin(double $MeatFatMin) Return the first Proxims filtered by the MeatFatMin column
 * @method Proxims findOneByMeatfatmax(double $MeatFatMax) Return the first Proxims filtered by the MeatFatMax column
 * @method Proxims findOneByMeatashmin(double $MeatAshMin) Return the first Proxims filtered by the MeatAshMin column
 * @method Proxims findOneByMeatashmax(double $MeatAshMax) Return the first Proxims filtered by the MeatAshMax column
 * @method Proxims findOneByLivermoistmin(double $LiverMoistMin) Return the first Proxims filtered by the LiverMoistMin column
 * @method Proxims findOneByLivermoistmax(double $LiverMoistMax) Return the first Proxims filtered by the LiverMoistMax column
 * @method Proxims findOneByLiverprotmin(double $LiverProtMin) Return the first Proxims filtered by the LiverProtMin column
 * @method Proxims findOneByLiverprotmax(double $LiverProtMax) Return the first Proxims filtered by the LiverProtMax column
 * @method Proxims findOneByLiverfatmin(double $LiverFatMin) Return the first Proxims filtered by the LiverFatMin column
 * @method Proxims findOneByLiverfatmax(double $LiverFatMax) Return the first Proxims filtered by the LiverFatMax column
 * @method Proxims findOneByLiverashmin(double $LiverAshMin) Return the first Proxims filtered by the LiverAshMin column
 * @method Proxims findOneByLiverashmax(double $LiverAshMax) Return the first Proxims filtered by the LiverAshMax column
 * @method Proxims findOneByRoemoistmin(double $RoeMoistMin) Return the first Proxims filtered by the RoeMoistMin column
 * @method Proxims findOneByRoemoistmax(double $RoeMoistMax) Return the first Proxims filtered by the RoeMoistMax column
 * @method Proxims findOneByRoeprotmin(double $RoeProtMin) Return the first Proxims filtered by the RoeProtMin column
 * @method Proxims findOneByRoeprotmax(double $RoeProtMax) Return the first Proxims filtered by the RoeProtMax column
 * @method Proxims findOneByRoefatmin(double $RoeFatMin) Return the first Proxims filtered by the RoeFatMin column
 * @method Proxims findOneByRoefatmax(double $RoeFatMax) Return the first Proxims filtered by the RoeFatMax column
 * @method Proxims findOneByRoeashmin(double $RoeAshMin) Return the first Proxims filtered by the RoeAshMin column
 * @method Proxims findOneByRoeashmax(double $RoeAshMax) Return the first Proxims filtered by the RoeAshMax column
 * @method Proxims findOneByVisceramoistmin(double $VisceraMoistMin) Return the first Proxims filtered by the VisceraMoistMin column
 * @method Proxims findOneByVisceramoistmax(double $VisceraMoistMax) Return the first Proxims filtered by the VisceraMoistMax column
 * @method Proxims findOneByVisceraprotmin(double $VisceraProtMin) Return the first Proxims filtered by the VisceraProtMin column
 * @method Proxims findOneByVisceraprotmax(double $VisceraProtMax) Return the first Proxims filtered by the VisceraProtMax column
 * @method Proxims findOneByViscerafatmin(double $VisceraFatMin) Return the first Proxims filtered by the VisceraFatMin column
 * @method Proxims findOneByViscerafatmax(double $VisceraFatMax) Return the first Proxims filtered by the VisceraFatMax column
 * @method Proxims findOneByVisceraashmin(double $VisceraAshMin) Return the first Proxims filtered by the VisceraAshMin column
 * @method Proxims findOneByVisceraashmax(double $VisceraAshMax) Return the first Proxims filtered by the VisceraAshMax column
 * @method Proxims findOneByHeadmoistmin(double $HeadMoistMin) Return the first Proxims filtered by the HeadMoistMin column
 * @method Proxims findOneByHeadmoistmax(double $HeadMoistMax) Return the first Proxims filtered by the HeadMoistMax column
 * @method Proxims findOneByHeadprotmin(double $HeadProtMin) Return the first Proxims filtered by the HeadProtMin column
 * @method Proxims findOneByHeadprotmax(double $HeadProtMax) Return the first Proxims filtered by the HeadProtMax column
 * @method Proxims findOneByHeadfatmin(double $HeadFatMin) Return the first Proxims filtered by the HeadFatMin column
 * @method Proxims findOneByHeadfatmax(double $HeadFatMax) Return the first Proxims filtered by the HeadFatMax column
 * @method Proxims findOneByHeadashmin(double $HeadAshMin) Return the first Proxims filtered by the HeadAshMin column
 * @method Proxims findOneByHeadashmax(double $HeadAshMax) Return the first Proxims filtered by the HeadAshMax column
 * @method Proxims findOneByWastemoistmin(double $WasteMoistMin) Return the first Proxims filtered by the WasteMoistMin column
 * @method Proxims findOneByWastemoistmax(double $WasteMoistMax) Return the first Proxims filtered by the WasteMoistMax column
 * @method Proxims findOneByWasteprotmin(double $WasteProtMin) Return the first Proxims filtered by the WasteProtMin column
 * @method Proxims findOneByWasteprotmax(double $WasteProtMax) Return the first Proxims filtered by the WasteProtMax column
 * @method Proxims findOneByWastefatmin(double $WasteFatMin) Return the first Proxims filtered by the WasteFatMin column
 * @method Proxims findOneByWastefatmax(double $WasteFatMax) Return the first Proxims filtered by the WasteFatMax column
 * @method Proxims findOneByWasteashmin(double $WasteAshMin) Return the first Proxims filtered by the WasteAshMin column
 * @method Proxims findOneByWasteashmax(double $WasteAshMax) Return the first Proxims filtered by the WasteAshMax column
 * @method Proxims findOneByCommentchemics(string $CommentChemics) Return the first Proxims filtered by the CommentChemics column
 * @method Proxims findOneByEntered(int $Entered) Return the first Proxims filtered by the Entered column
 * @method Proxims findOneByDateentered(string $DateEntered) Return the first Proxims filtered by the DateEntered column
 * @method Proxims findOneByModified(int $Modified) Return the first Proxims filtered by the Modified column
 * @method Proxims findOneByDatemodified(string $DateModified) Return the first Proxims filtered by the DateModified column
 * @method Proxims findOneByExpert(int $Expert) Return the first Proxims filtered by the Expert column
 * @method Proxims findOneByDatechecked(string $DateChecked) Return the first Proxims filtered by the DateChecked column
 * @method Proxims findOneByRemark(string $Remark) Return the first Proxims filtered by the Remark column
 * @method Proxims findOneByTs(string $TS) Return the first Proxims filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return Proxims objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Proxims objects filtered by the SpecCode column
 * @method array findByChemicsrefno(int $ChemicsRefNo) Return Proxims objects filtered by the ChemicsRefNo column
 * @method array findByCCode(string $C_Code) Return Proxims objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Proxims objects filtered by the Locality column
 * @method array findByLength(double $Length) Return Proxims objects filtered by the Length column
 * @method array findByLengthupper(double $LengthUpper) Return Proxims objects filtered by the LengthUpper column
 * @method array findByLengthtype(string $LengthType) Return Proxims objects filtered by the LengthType column
 * @method array findByWeightlower(double $WeightLower) Return Proxims objects filtered by the WeightLower column
 * @method array findByWeightupper(double $WeightUpper) Return Proxims objects filtered by the WeightUpper column
 * @method array findByHeadlower(double $HeadLower) Return Proxims objects filtered by the HeadLower column
 * @method array findByHeadupper(double $HeadUpper) Return Proxims objects filtered by the HeadUpper column
 * @method array findByVisceralower22(double $VisceraLower22) Return Proxims objects filtered by the VisceraLower22 column
 * @method array findByVisceraupper22(double $VisceraUpper22) Return Proxims objects filtered by the VisceraUpper22 column
 * @method array findByTrunklower(double $TrunkLower) Return Proxims objects filtered by the TrunkLower column
 * @method array findByTrunkupper(double $TrunkUpper) Return Proxims objects filtered by the TrunkUpper column
 * @method array findByRoelower(double $RoeLower) Return Proxims objects filtered by the RoeLower column
 * @method array findByRoeupper(double $RoeUpper) Return Proxims objects filtered by the RoeUpper column
 * @method array findBySkinlower(double $SkinLower) Return Proxims objects filtered by the SkinLower column
 * @method array findBySkinupper(double $SkinUpper) Return Proxims objects filtered by the SkinUpper column
 * @method array findByTesteslower(double $TestesLower) Return Proxims objects filtered by the TestesLower column
 * @method array findByTestesupper(double $TestesUpper) Return Proxims objects filtered by the TestesUpper column
 * @method array findByFinslower(double $FinsLower) Return Proxims objects filtered by the FinsLower column
 * @method array findByFinsupper(double $FinsUpper) Return Proxims objects filtered by the FinsUpper column
 * @method array findByLiverlower(double $LiverLower) Return Proxims objects filtered by the LiverLower column
 * @method array findByLiverupper(double $LiverUpper) Return Proxims objects filtered by the LiverUpper column
 * @method array findByBoneslower(double $BonesLower) Return Proxims objects filtered by the BonesLower column
 * @method array findByBonesupper(double $BonesUpper) Return Proxims objects filtered by the BonesUpper column
 * @method array findByMeatlower(double $MeatLower) Return Proxims objects filtered by the MeatLower column
 * @method array findByMeatupper(double $MeatUpper) Return Proxims objects filtered by the MeatUpper column
 * @method array findByFilletlower(double $FilletLower) Return Proxims objects filtered by the FilletLower column
 * @method array findByFilletupper(double $FilletUpper) Return Proxims objects filtered by the FilletUpper column
 * @method array findBySteaklower(double $SteakLower) Return Proxims objects filtered by the SteakLower column
 * @method array findBySteakupper(double $SteakUpper) Return Proxims objects filtered by the SteakUpper column
 * @method array findByComment(string $Comment) Return Proxims objects filtered by the Comment column
 * @method array findByMeatmoistmin(double $MeatMoistMin) Return Proxims objects filtered by the MeatMoistMin column
 * @method array findByMeatmoistmax(double $MeatMoistMax) Return Proxims objects filtered by the MeatMoistMax column
 * @method array findByMeatprotmin(double $MeatProtMin) Return Proxims objects filtered by the MeatProtMin column
 * @method array findByMeatprotmax(double $MeatProtMax) Return Proxims objects filtered by the MeatProtMax column
 * @method array findByMeatfatmin(double $MeatFatMin) Return Proxims objects filtered by the MeatFatMin column
 * @method array findByMeatfatmax(double $MeatFatMax) Return Proxims objects filtered by the MeatFatMax column
 * @method array findByMeatashmin(double $MeatAshMin) Return Proxims objects filtered by the MeatAshMin column
 * @method array findByMeatashmax(double $MeatAshMax) Return Proxims objects filtered by the MeatAshMax column
 * @method array findByLivermoistmin(double $LiverMoistMin) Return Proxims objects filtered by the LiverMoistMin column
 * @method array findByLivermoistmax(double $LiverMoistMax) Return Proxims objects filtered by the LiverMoistMax column
 * @method array findByLiverprotmin(double $LiverProtMin) Return Proxims objects filtered by the LiverProtMin column
 * @method array findByLiverprotmax(double $LiverProtMax) Return Proxims objects filtered by the LiverProtMax column
 * @method array findByLiverfatmin(double $LiverFatMin) Return Proxims objects filtered by the LiverFatMin column
 * @method array findByLiverfatmax(double $LiverFatMax) Return Proxims objects filtered by the LiverFatMax column
 * @method array findByLiverashmin(double $LiverAshMin) Return Proxims objects filtered by the LiverAshMin column
 * @method array findByLiverashmax(double $LiverAshMax) Return Proxims objects filtered by the LiverAshMax column
 * @method array findByRoemoistmin(double $RoeMoistMin) Return Proxims objects filtered by the RoeMoistMin column
 * @method array findByRoemoistmax(double $RoeMoistMax) Return Proxims objects filtered by the RoeMoistMax column
 * @method array findByRoeprotmin(double $RoeProtMin) Return Proxims objects filtered by the RoeProtMin column
 * @method array findByRoeprotmax(double $RoeProtMax) Return Proxims objects filtered by the RoeProtMax column
 * @method array findByRoefatmin(double $RoeFatMin) Return Proxims objects filtered by the RoeFatMin column
 * @method array findByRoefatmax(double $RoeFatMax) Return Proxims objects filtered by the RoeFatMax column
 * @method array findByRoeashmin(double $RoeAshMin) Return Proxims objects filtered by the RoeAshMin column
 * @method array findByRoeashmax(double $RoeAshMax) Return Proxims objects filtered by the RoeAshMax column
 * @method array findByVisceramoistmin(double $VisceraMoistMin) Return Proxims objects filtered by the VisceraMoistMin column
 * @method array findByVisceramoistmax(double $VisceraMoistMax) Return Proxims objects filtered by the VisceraMoistMax column
 * @method array findByVisceraprotmin(double $VisceraProtMin) Return Proxims objects filtered by the VisceraProtMin column
 * @method array findByVisceraprotmax(double $VisceraProtMax) Return Proxims objects filtered by the VisceraProtMax column
 * @method array findByViscerafatmin(double $VisceraFatMin) Return Proxims objects filtered by the VisceraFatMin column
 * @method array findByViscerafatmax(double $VisceraFatMax) Return Proxims objects filtered by the VisceraFatMax column
 * @method array findByVisceraashmin(double $VisceraAshMin) Return Proxims objects filtered by the VisceraAshMin column
 * @method array findByVisceraashmax(double $VisceraAshMax) Return Proxims objects filtered by the VisceraAshMax column
 * @method array findByHeadmoistmin(double $HeadMoistMin) Return Proxims objects filtered by the HeadMoistMin column
 * @method array findByHeadmoistmax(double $HeadMoistMax) Return Proxims objects filtered by the HeadMoistMax column
 * @method array findByHeadprotmin(double $HeadProtMin) Return Proxims objects filtered by the HeadProtMin column
 * @method array findByHeadprotmax(double $HeadProtMax) Return Proxims objects filtered by the HeadProtMax column
 * @method array findByHeadfatmin(double $HeadFatMin) Return Proxims objects filtered by the HeadFatMin column
 * @method array findByHeadfatmax(double $HeadFatMax) Return Proxims objects filtered by the HeadFatMax column
 * @method array findByHeadashmin(double $HeadAshMin) Return Proxims objects filtered by the HeadAshMin column
 * @method array findByHeadashmax(double $HeadAshMax) Return Proxims objects filtered by the HeadAshMax column
 * @method array findByWastemoistmin(double $WasteMoistMin) Return Proxims objects filtered by the WasteMoistMin column
 * @method array findByWastemoistmax(double $WasteMoistMax) Return Proxims objects filtered by the WasteMoistMax column
 * @method array findByWasteprotmin(double $WasteProtMin) Return Proxims objects filtered by the WasteProtMin column
 * @method array findByWasteprotmax(double $WasteProtMax) Return Proxims objects filtered by the WasteProtMax column
 * @method array findByWastefatmin(double $WasteFatMin) Return Proxims objects filtered by the WasteFatMin column
 * @method array findByWastefatmax(double $WasteFatMax) Return Proxims objects filtered by the WasteFatMax column
 * @method array findByWasteashmin(double $WasteAshMin) Return Proxims objects filtered by the WasteAshMin column
 * @method array findByWasteashmax(double $WasteAshMax) Return Proxims objects filtered by the WasteAshMax column
 * @method array findByCommentchemics(string $CommentChemics) Return Proxims objects filtered by the CommentChemics column
 * @method array findByEntered(int $Entered) Return Proxims objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Proxims objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Proxims objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Proxims objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Proxims objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Proxims objects filtered by the DateChecked column
 * @method array findByRemark(string $Remark) Return Proxims objects filtered by the Remark column
 * @method array findByTs(string $TS) Return Proxims objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseProximsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProximsQuery object.
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
            $modelName = 'Proxims';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProximsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProximsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProximsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProximsQuery) {
            return $criteria;
        }
        $query = new ProximsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $ChemicsRefNo, $Locality]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Proxims|Proxims[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProximsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proxims A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `SpecCode`, `ChemicsRefNo`, `C_Code`, `Locality`, `Length`, `LengthUpper`, `LengthType`, `WeightLower`, `WeightUpper`, `HeadLower`, `HeadUpper`, `VisceraLower22`, `VisceraUpper22`, `TrunkLower`, `TrunkUpper`, `RoeLower`, `RoeUpper`, `SkinLower`, `SkinUpper`, `TestesLower`, `TestesUpper`, `FinsLower`, `FinsUpper`, `LiverLower`, `LiverUpper`, `BonesLower`, `BonesUpper`, `MeatLower`, `MeatUpper`, `FilletLower`, `FilletUpper`, `SteakLower`, `SteakUpper`, `Comment`, `MeatMoistMin`, `MeatMoistMax`, `MeatProtMin`, `MeatProtMax`, `MeatFatMin`, `MeatFatMax`, `MeatAshMin`, `MeatAshMax`, `LiverMoistMin`, `LiverMoistMax`, `LiverProtMin`, `LiverProtMax`, `LiverFatMin`, `LiverFatMax`, `LiverAshMin`, `LiverAshMax`, `RoeMoistMin`, `RoeMoistMax`, `RoeProtMin`, `RoeProtMax`, `RoeFatMin`, `RoeFatMax`, `RoeAshMin`, `RoeAshMax`, `VisceraMoistMin`, `VisceraMoistMax`, `VisceraProtMin`, `VisceraProtMax`, `VisceraFatMin`, `VisceraFatMax`, `VisceraAshMin`, `VisceraAshMax`, `HeadMoistMin`, `HeadMoistMax`, `HeadProtMin`, `HeadProtMax`, `HeadFatMin`, `HeadFatMax`, `HeadAshMin`, `HeadAshMax`, `WasteMoistMin`, `WasteMoistMax`, `WasteProtMin`, `WasteProtMax`, `WasteFatMin`, `WasteFatMax`, `WasteAshMin`, `WasteAshMax`, `CommentChemics`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Remark`, `TS` FROM `proxims` WHERE `StockCode` = :p0 AND `ChemicsRefNo` = :p1 AND `Locality` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Proxims();
            $obj->hydrate($row);
            ProximsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Proxims|Proxims[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proxims[]|mixed the list of results, formatted by the current formatter
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ProximsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ProximsPeer::CHEMICSREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ProximsPeer::LOCALITY, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ProximsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ProximsPeer::CHEMICSREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ProximsPeer::LOCALITY, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(ProximsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(ProximsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ProximsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ProximsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ChemicsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByChemicsrefno(1234); // WHERE ChemicsRefNo = 1234
     * $query->filterByChemicsrefno(array(12, 34)); // WHERE ChemicsRefNo IN (12, 34)
     * $query->filterByChemicsrefno(array('min' => 12)); // WHERE ChemicsRefNo >= 12
     * $query->filterByChemicsrefno(array('max' => 12)); // WHERE ChemicsRefNo <= 12
     * </code>
     *
     * @param     mixed $chemicsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByChemicsrefno($chemicsrefno = null, $comparison = null)
    {
        if (is_array($chemicsrefno)) {
            $useMinMax = false;
            if (isset($chemicsrefno['min'])) {
                $this->addUsingAlias(ProximsPeer::CHEMICSREFNO, $chemicsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chemicsrefno['max'])) {
                $this->addUsingAlias(ProximsPeer::CHEMICSREFNO, $chemicsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::CHEMICSREFNO, $chemicsrefno, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProximsPeer::C_CODE, $cCode, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProximsPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE Length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE Length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE Length >= 12
     * $query->filterByLength(array('max' => 12)); // WHERE Length <= 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(ProximsPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(ProximsPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the LengthUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthupper(1234); // WHERE LengthUpper = 1234
     * $query->filterByLengthupper(array(12, 34)); // WHERE LengthUpper IN (12, 34)
     * $query->filterByLengthupper(array('min' => 12)); // WHERE LengthUpper >= 12
     * $query->filterByLengthupper(array('max' => 12)); // WHERE LengthUpper <= 12
     * </code>
     *
     * @param     mixed $lengthupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLengthupper($lengthupper = null, $comparison = null)
    {
        if (is_array($lengthupper)) {
            $useMinMax = false;
            if (isset($lengthupper['min'])) {
                $this->addUsingAlias(ProximsPeer::LENGTHUPPER, $lengthupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthupper['max'])) {
                $this->addUsingAlias(ProximsPeer::LENGTHUPPER, $lengthupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LENGTHUPPER, $lengthupper, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the WeightLower column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightlower(1234); // WHERE WeightLower = 1234
     * $query->filterByWeightlower(array(12, 34)); // WHERE WeightLower IN (12, 34)
     * $query->filterByWeightlower(array('min' => 12)); // WHERE WeightLower >= 12
     * $query->filterByWeightlower(array('max' => 12)); // WHERE WeightLower <= 12
     * </code>
     *
     * @param     mixed $weightlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWeightlower($weightlower = null, $comparison = null)
    {
        if (is_array($weightlower)) {
            $useMinMax = false;
            if (isset($weightlower['min'])) {
                $this->addUsingAlias(ProximsPeer::WEIGHTLOWER, $weightlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightlower['max'])) {
                $this->addUsingAlias(ProximsPeer::WEIGHTLOWER, $weightlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WEIGHTLOWER, $weightlower, $comparison);
    }

    /**
     * Filter the query on the WeightUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightupper(1234); // WHERE WeightUpper = 1234
     * $query->filterByWeightupper(array(12, 34)); // WHERE WeightUpper IN (12, 34)
     * $query->filterByWeightupper(array('min' => 12)); // WHERE WeightUpper >= 12
     * $query->filterByWeightupper(array('max' => 12)); // WHERE WeightUpper <= 12
     * </code>
     *
     * @param     mixed $weightupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWeightupper($weightupper = null, $comparison = null)
    {
        if (is_array($weightupper)) {
            $useMinMax = false;
            if (isset($weightupper['min'])) {
                $this->addUsingAlias(ProximsPeer::WEIGHTUPPER, $weightupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightupper['max'])) {
                $this->addUsingAlias(ProximsPeer::WEIGHTUPPER, $weightupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WEIGHTUPPER, $weightupper, $comparison);
    }

    /**
     * Filter the query on the HeadLower column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadlower(1234); // WHERE HeadLower = 1234
     * $query->filterByHeadlower(array(12, 34)); // WHERE HeadLower IN (12, 34)
     * $query->filterByHeadlower(array('min' => 12)); // WHERE HeadLower >= 12
     * $query->filterByHeadlower(array('max' => 12)); // WHERE HeadLower <= 12
     * </code>
     *
     * @param     mixed $headlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadlower($headlower = null, $comparison = null)
    {
        if (is_array($headlower)) {
            $useMinMax = false;
            if (isset($headlower['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADLOWER, $headlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headlower['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADLOWER, $headlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADLOWER, $headlower, $comparison);
    }

    /**
     * Filter the query on the HeadUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadupper(1234); // WHERE HeadUpper = 1234
     * $query->filterByHeadupper(array(12, 34)); // WHERE HeadUpper IN (12, 34)
     * $query->filterByHeadupper(array('min' => 12)); // WHERE HeadUpper >= 12
     * $query->filterByHeadupper(array('max' => 12)); // WHERE HeadUpper <= 12
     * </code>
     *
     * @param     mixed $headupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadupper($headupper = null, $comparison = null)
    {
        if (is_array($headupper)) {
            $useMinMax = false;
            if (isset($headupper['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADUPPER, $headupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headupper['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADUPPER, $headupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADUPPER, $headupper, $comparison);
    }

    /**
     * Filter the query on the VisceraLower22 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceralower22(1234); // WHERE VisceraLower22 = 1234
     * $query->filterByVisceralower22(array(12, 34)); // WHERE VisceraLower22 IN (12, 34)
     * $query->filterByVisceralower22(array('min' => 12)); // WHERE VisceraLower22 >= 12
     * $query->filterByVisceralower22(array('max' => 12)); // WHERE VisceraLower22 <= 12
     * </code>
     *
     * @param     mixed $visceralower22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceralower22($visceralower22 = null, $comparison = null)
    {
        if (is_array($visceralower22)) {
            $useMinMax = false;
            if (isset($visceralower22['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERALOWER22, $visceralower22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceralower22['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERALOWER22, $visceralower22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERALOWER22, $visceralower22, $comparison);
    }

    /**
     * Filter the query on the VisceraUpper22 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraupper22(1234); // WHERE VisceraUpper22 = 1234
     * $query->filterByVisceraupper22(array(12, 34)); // WHERE VisceraUpper22 IN (12, 34)
     * $query->filterByVisceraupper22(array('min' => 12)); // WHERE VisceraUpper22 >= 12
     * $query->filterByVisceraupper22(array('max' => 12)); // WHERE VisceraUpper22 <= 12
     * </code>
     *
     * @param     mixed $visceraupper22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceraupper22($visceraupper22 = null, $comparison = null)
    {
        if (is_array($visceraupper22)) {
            $useMinMax = false;
            if (isset($visceraupper22['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAUPPER22, $visceraupper22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraupper22['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAUPPER22, $visceraupper22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAUPPER22, $visceraupper22, $comparison);
    }

    /**
     * Filter the query on the TrunkLower column
     *
     * Example usage:
     * <code>
     * $query->filterByTrunklower(1234); // WHERE TrunkLower = 1234
     * $query->filterByTrunklower(array(12, 34)); // WHERE TrunkLower IN (12, 34)
     * $query->filterByTrunklower(array('min' => 12)); // WHERE TrunkLower >= 12
     * $query->filterByTrunklower(array('max' => 12)); // WHERE TrunkLower <= 12
     * </code>
     *
     * @param     mixed $trunklower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByTrunklower($trunklower = null, $comparison = null)
    {
        if (is_array($trunklower)) {
            $useMinMax = false;
            if (isset($trunklower['min'])) {
                $this->addUsingAlias(ProximsPeer::TRUNKLOWER, $trunklower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trunklower['max'])) {
                $this->addUsingAlias(ProximsPeer::TRUNKLOWER, $trunklower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::TRUNKLOWER, $trunklower, $comparison);
    }

    /**
     * Filter the query on the TrunkUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByTrunkupper(1234); // WHERE TrunkUpper = 1234
     * $query->filterByTrunkupper(array(12, 34)); // WHERE TrunkUpper IN (12, 34)
     * $query->filterByTrunkupper(array('min' => 12)); // WHERE TrunkUpper >= 12
     * $query->filterByTrunkupper(array('max' => 12)); // WHERE TrunkUpper <= 12
     * </code>
     *
     * @param     mixed $trunkupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByTrunkupper($trunkupper = null, $comparison = null)
    {
        if (is_array($trunkupper)) {
            $useMinMax = false;
            if (isset($trunkupper['min'])) {
                $this->addUsingAlias(ProximsPeer::TRUNKUPPER, $trunkupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trunkupper['max'])) {
                $this->addUsingAlias(ProximsPeer::TRUNKUPPER, $trunkupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::TRUNKUPPER, $trunkupper, $comparison);
    }

    /**
     * Filter the query on the RoeLower column
     *
     * Example usage:
     * <code>
     * $query->filterByRoelower(1234); // WHERE RoeLower = 1234
     * $query->filterByRoelower(array(12, 34)); // WHERE RoeLower IN (12, 34)
     * $query->filterByRoelower(array('min' => 12)); // WHERE RoeLower >= 12
     * $query->filterByRoelower(array('max' => 12)); // WHERE RoeLower <= 12
     * </code>
     *
     * @param     mixed $roelower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoelower($roelower = null, $comparison = null)
    {
        if (is_array($roelower)) {
            $useMinMax = false;
            if (isset($roelower['min'])) {
                $this->addUsingAlias(ProximsPeer::ROELOWER, $roelower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roelower['max'])) {
                $this->addUsingAlias(ProximsPeer::ROELOWER, $roelower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROELOWER, $roelower, $comparison);
    }

    /**
     * Filter the query on the RoeUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByRoeupper(1234); // WHERE RoeUpper = 1234
     * $query->filterByRoeupper(array(12, 34)); // WHERE RoeUpper IN (12, 34)
     * $query->filterByRoeupper(array('min' => 12)); // WHERE RoeUpper >= 12
     * $query->filterByRoeupper(array('max' => 12)); // WHERE RoeUpper <= 12
     * </code>
     *
     * @param     mixed $roeupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoeupper($roeupper = null, $comparison = null)
    {
        if (is_array($roeupper)) {
            $useMinMax = false;
            if (isset($roeupper['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEUPPER, $roeupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roeupper['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEUPPER, $roeupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEUPPER, $roeupper, $comparison);
    }

    /**
     * Filter the query on the SkinLower column
     *
     * Example usage:
     * <code>
     * $query->filterBySkinlower(1234); // WHERE SkinLower = 1234
     * $query->filterBySkinlower(array(12, 34)); // WHERE SkinLower IN (12, 34)
     * $query->filterBySkinlower(array('min' => 12)); // WHERE SkinLower >= 12
     * $query->filterBySkinlower(array('max' => 12)); // WHERE SkinLower <= 12
     * </code>
     *
     * @param     mixed $skinlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterBySkinlower($skinlower = null, $comparison = null)
    {
        if (is_array($skinlower)) {
            $useMinMax = false;
            if (isset($skinlower['min'])) {
                $this->addUsingAlias(ProximsPeer::SKINLOWER, $skinlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skinlower['max'])) {
                $this->addUsingAlias(ProximsPeer::SKINLOWER, $skinlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::SKINLOWER, $skinlower, $comparison);
    }

    /**
     * Filter the query on the SkinUpper column
     *
     * Example usage:
     * <code>
     * $query->filterBySkinupper(1234); // WHERE SkinUpper = 1234
     * $query->filterBySkinupper(array(12, 34)); // WHERE SkinUpper IN (12, 34)
     * $query->filterBySkinupper(array('min' => 12)); // WHERE SkinUpper >= 12
     * $query->filterBySkinupper(array('max' => 12)); // WHERE SkinUpper <= 12
     * </code>
     *
     * @param     mixed $skinupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterBySkinupper($skinupper = null, $comparison = null)
    {
        if (is_array($skinupper)) {
            $useMinMax = false;
            if (isset($skinupper['min'])) {
                $this->addUsingAlias(ProximsPeer::SKINUPPER, $skinupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skinupper['max'])) {
                $this->addUsingAlias(ProximsPeer::SKINUPPER, $skinupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::SKINUPPER, $skinupper, $comparison);
    }

    /**
     * Filter the query on the TestesLower column
     *
     * Example usage:
     * <code>
     * $query->filterByTesteslower(1234); // WHERE TestesLower = 1234
     * $query->filterByTesteslower(array(12, 34)); // WHERE TestesLower IN (12, 34)
     * $query->filterByTesteslower(array('min' => 12)); // WHERE TestesLower >= 12
     * $query->filterByTesteslower(array('max' => 12)); // WHERE TestesLower <= 12
     * </code>
     *
     * @param     mixed $testeslower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByTesteslower($testeslower = null, $comparison = null)
    {
        if (is_array($testeslower)) {
            $useMinMax = false;
            if (isset($testeslower['min'])) {
                $this->addUsingAlias(ProximsPeer::TESTESLOWER, $testeslower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testeslower['max'])) {
                $this->addUsingAlias(ProximsPeer::TESTESLOWER, $testeslower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::TESTESLOWER, $testeslower, $comparison);
    }

    /**
     * Filter the query on the TestesUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByTestesupper(1234); // WHERE TestesUpper = 1234
     * $query->filterByTestesupper(array(12, 34)); // WHERE TestesUpper IN (12, 34)
     * $query->filterByTestesupper(array('min' => 12)); // WHERE TestesUpper >= 12
     * $query->filterByTestesupper(array('max' => 12)); // WHERE TestesUpper <= 12
     * </code>
     *
     * @param     mixed $testesupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByTestesupper($testesupper = null, $comparison = null)
    {
        if (is_array($testesupper)) {
            $useMinMax = false;
            if (isset($testesupper['min'])) {
                $this->addUsingAlias(ProximsPeer::TESTESUPPER, $testesupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($testesupper['max'])) {
                $this->addUsingAlias(ProximsPeer::TESTESUPPER, $testesupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::TESTESUPPER, $testesupper, $comparison);
    }

    /**
     * Filter the query on the FinsLower column
     *
     * Example usage:
     * <code>
     * $query->filterByFinslower(1234); // WHERE FinsLower = 1234
     * $query->filterByFinslower(array(12, 34)); // WHERE FinsLower IN (12, 34)
     * $query->filterByFinslower(array('min' => 12)); // WHERE FinsLower >= 12
     * $query->filterByFinslower(array('max' => 12)); // WHERE FinsLower <= 12
     * </code>
     *
     * @param     mixed $finslower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByFinslower($finslower = null, $comparison = null)
    {
        if (is_array($finslower)) {
            $useMinMax = false;
            if (isset($finslower['min'])) {
                $this->addUsingAlias(ProximsPeer::FINSLOWER, $finslower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finslower['max'])) {
                $this->addUsingAlias(ProximsPeer::FINSLOWER, $finslower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::FINSLOWER, $finslower, $comparison);
    }

    /**
     * Filter the query on the FinsUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByFinsupper(1234); // WHERE FinsUpper = 1234
     * $query->filterByFinsupper(array(12, 34)); // WHERE FinsUpper IN (12, 34)
     * $query->filterByFinsupper(array('min' => 12)); // WHERE FinsUpper >= 12
     * $query->filterByFinsupper(array('max' => 12)); // WHERE FinsUpper <= 12
     * </code>
     *
     * @param     mixed $finsupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByFinsupper($finsupper = null, $comparison = null)
    {
        if (is_array($finsupper)) {
            $useMinMax = false;
            if (isset($finsupper['min'])) {
                $this->addUsingAlias(ProximsPeer::FINSUPPER, $finsupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finsupper['max'])) {
                $this->addUsingAlias(ProximsPeer::FINSUPPER, $finsupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::FINSUPPER, $finsupper, $comparison);
    }

    /**
     * Filter the query on the LiverLower column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverlower(1234); // WHERE LiverLower = 1234
     * $query->filterByLiverlower(array(12, 34)); // WHERE LiverLower IN (12, 34)
     * $query->filterByLiverlower(array('min' => 12)); // WHERE LiverLower >= 12
     * $query->filterByLiverlower(array('max' => 12)); // WHERE LiverLower <= 12
     * </code>
     *
     * @param     mixed $liverlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverlower($liverlower = null, $comparison = null)
    {
        if (is_array($liverlower)) {
            $useMinMax = false;
            if (isset($liverlower['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERLOWER, $liverlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverlower['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERLOWER, $liverlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERLOWER, $liverlower, $comparison);
    }

    /**
     * Filter the query on the LiverUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverupper(1234); // WHERE LiverUpper = 1234
     * $query->filterByLiverupper(array(12, 34)); // WHERE LiverUpper IN (12, 34)
     * $query->filterByLiverupper(array('min' => 12)); // WHERE LiverUpper >= 12
     * $query->filterByLiverupper(array('max' => 12)); // WHERE LiverUpper <= 12
     * </code>
     *
     * @param     mixed $liverupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverupper($liverupper = null, $comparison = null)
    {
        if (is_array($liverupper)) {
            $useMinMax = false;
            if (isset($liverupper['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERUPPER, $liverupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverupper['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERUPPER, $liverupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERUPPER, $liverupper, $comparison);
    }

    /**
     * Filter the query on the BonesLower column
     *
     * Example usage:
     * <code>
     * $query->filterByBoneslower(1234); // WHERE BonesLower = 1234
     * $query->filterByBoneslower(array(12, 34)); // WHERE BonesLower IN (12, 34)
     * $query->filterByBoneslower(array('min' => 12)); // WHERE BonesLower >= 12
     * $query->filterByBoneslower(array('max' => 12)); // WHERE BonesLower <= 12
     * </code>
     *
     * @param     mixed $boneslower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByBoneslower($boneslower = null, $comparison = null)
    {
        if (is_array($boneslower)) {
            $useMinMax = false;
            if (isset($boneslower['min'])) {
                $this->addUsingAlias(ProximsPeer::BONESLOWER, $boneslower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boneslower['max'])) {
                $this->addUsingAlias(ProximsPeer::BONESLOWER, $boneslower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::BONESLOWER, $boneslower, $comparison);
    }

    /**
     * Filter the query on the BonesUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByBonesupper(1234); // WHERE BonesUpper = 1234
     * $query->filterByBonesupper(array(12, 34)); // WHERE BonesUpper IN (12, 34)
     * $query->filterByBonesupper(array('min' => 12)); // WHERE BonesUpper >= 12
     * $query->filterByBonesupper(array('max' => 12)); // WHERE BonesUpper <= 12
     * </code>
     *
     * @param     mixed $bonesupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByBonesupper($bonesupper = null, $comparison = null)
    {
        if (is_array($bonesupper)) {
            $useMinMax = false;
            if (isset($bonesupper['min'])) {
                $this->addUsingAlias(ProximsPeer::BONESUPPER, $bonesupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bonesupper['max'])) {
                $this->addUsingAlias(ProximsPeer::BONESUPPER, $bonesupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::BONESUPPER, $bonesupper, $comparison);
    }

    /**
     * Filter the query on the MeatLower column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatlower(1234); // WHERE MeatLower = 1234
     * $query->filterByMeatlower(array(12, 34)); // WHERE MeatLower IN (12, 34)
     * $query->filterByMeatlower(array('min' => 12)); // WHERE MeatLower >= 12
     * $query->filterByMeatlower(array('max' => 12)); // WHERE MeatLower <= 12
     * </code>
     *
     * @param     mixed $meatlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatlower($meatlower = null, $comparison = null)
    {
        if (is_array($meatlower)) {
            $useMinMax = false;
            if (isset($meatlower['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATLOWER, $meatlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatlower['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATLOWER, $meatlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATLOWER, $meatlower, $comparison);
    }

    /**
     * Filter the query on the MeatUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatupper(1234); // WHERE MeatUpper = 1234
     * $query->filterByMeatupper(array(12, 34)); // WHERE MeatUpper IN (12, 34)
     * $query->filterByMeatupper(array('min' => 12)); // WHERE MeatUpper >= 12
     * $query->filterByMeatupper(array('max' => 12)); // WHERE MeatUpper <= 12
     * </code>
     *
     * @param     mixed $meatupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatupper($meatupper = null, $comparison = null)
    {
        if (is_array($meatupper)) {
            $useMinMax = false;
            if (isset($meatupper['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATUPPER, $meatupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatupper['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATUPPER, $meatupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATUPPER, $meatupper, $comparison);
    }

    /**
     * Filter the query on the FilletLower column
     *
     * Example usage:
     * <code>
     * $query->filterByFilletlower(1234); // WHERE FilletLower = 1234
     * $query->filterByFilletlower(array(12, 34)); // WHERE FilletLower IN (12, 34)
     * $query->filterByFilletlower(array('min' => 12)); // WHERE FilletLower >= 12
     * $query->filterByFilletlower(array('max' => 12)); // WHERE FilletLower <= 12
     * </code>
     *
     * @param     mixed $filletlower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByFilletlower($filletlower = null, $comparison = null)
    {
        if (is_array($filletlower)) {
            $useMinMax = false;
            if (isset($filletlower['min'])) {
                $this->addUsingAlias(ProximsPeer::FILLETLOWER, $filletlower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($filletlower['max'])) {
                $this->addUsingAlias(ProximsPeer::FILLETLOWER, $filletlower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::FILLETLOWER, $filletlower, $comparison);
    }

    /**
     * Filter the query on the FilletUpper column
     *
     * Example usage:
     * <code>
     * $query->filterByFilletupper(1234); // WHERE FilletUpper = 1234
     * $query->filterByFilletupper(array(12, 34)); // WHERE FilletUpper IN (12, 34)
     * $query->filterByFilletupper(array('min' => 12)); // WHERE FilletUpper >= 12
     * $query->filterByFilletupper(array('max' => 12)); // WHERE FilletUpper <= 12
     * </code>
     *
     * @param     mixed $filletupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByFilletupper($filletupper = null, $comparison = null)
    {
        if (is_array($filletupper)) {
            $useMinMax = false;
            if (isset($filletupper['min'])) {
                $this->addUsingAlias(ProximsPeer::FILLETUPPER, $filletupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($filletupper['max'])) {
                $this->addUsingAlias(ProximsPeer::FILLETUPPER, $filletupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::FILLETUPPER, $filletupper, $comparison);
    }

    /**
     * Filter the query on the SteakLower column
     *
     * Example usage:
     * <code>
     * $query->filterBySteaklower(1234); // WHERE SteakLower = 1234
     * $query->filterBySteaklower(array(12, 34)); // WHERE SteakLower IN (12, 34)
     * $query->filterBySteaklower(array('min' => 12)); // WHERE SteakLower >= 12
     * $query->filterBySteaklower(array('max' => 12)); // WHERE SteakLower <= 12
     * </code>
     *
     * @param     mixed $steaklower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterBySteaklower($steaklower = null, $comparison = null)
    {
        if (is_array($steaklower)) {
            $useMinMax = false;
            if (isset($steaklower['min'])) {
                $this->addUsingAlias(ProximsPeer::STEAKLOWER, $steaklower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steaklower['max'])) {
                $this->addUsingAlias(ProximsPeer::STEAKLOWER, $steaklower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::STEAKLOWER, $steaklower, $comparison);
    }

    /**
     * Filter the query on the SteakUpper column
     *
     * Example usage:
     * <code>
     * $query->filterBySteakupper(1234); // WHERE SteakUpper = 1234
     * $query->filterBySteakupper(array(12, 34)); // WHERE SteakUpper IN (12, 34)
     * $query->filterBySteakupper(array('min' => 12)); // WHERE SteakUpper >= 12
     * $query->filterBySteakupper(array('max' => 12)); // WHERE SteakUpper <= 12
     * </code>
     *
     * @param     mixed $steakupper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterBySteakupper($steakupper = null, $comparison = null)
    {
        if (is_array($steakupper)) {
            $useMinMax = false;
            if (isset($steakupper['min'])) {
                $this->addUsingAlias(ProximsPeer::STEAKUPPER, $steakupper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steakupper['max'])) {
                $this->addUsingAlias(ProximsPeer::STEAKUPPER, $steakupper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::STEAKUPPER, $steakupper, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProximsPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the MeatMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatmoistmin(1234); // WHERE MeatMoistMin = 1234
     * $query->filterByMeatmoistmin(array(12, 34)); // WHERE MeatMoistMin IN (12, 34)
     * $query->filterByMeatmoistmin(array('min' => 12)); // WHERE MeatMoistMin >= 12
     * $query->filterByMeatmoistmin(array('max' => 12)); // WHERE MeatMoistMin <= 12
     * </code>
     *
     * @param     mixed $meatmoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatmoistmin($meatmoistmin = null, $comparison = null)
    {
        if (is_array($meatmoistmin)) {
            $useMinMax = false;
            if (isset($meatmoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATMOISTMIN, $meatmoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatmoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATMOISTMIN, $meatmoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATMOISTMIN, $meatmoistmin, $comparison);
    }

    /**
     * Filter the query on the MeatMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatmoistmax(1234); // WHERE MeatMoistMax = 1234
     * $query->filterByMeatmoistmax(array(12, 34)); // WHERE MeatMoistMax IN (12, 34)
     * $query->filterByMeatmoistmax(array('min' => 12)); // WHERE MeatMoistMax >= 12
     * $query->filterByMeatmoistmax(array('max' => 12)); // WHERE MeatMoistMax <= 12
     * </code>
     *
     * @param     mixed $meatmoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatmoistmax($meatmoistmax = null, $comparison = null)
    {
        if (is_array($meatmoistmax)) {
            $useMinMax = false;
            if (isset($meatmoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATMOISTMAX, $meatmoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatmoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATMOISTMAX, $meatmoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATMOISTMAX, $meatmoistmax, $comparison);
    }

    /**
     * Filter the query on the MeatProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatprotmin(1234); // WHERE MeatProtMin = 1234
     * $query->filterByMeatprotmin(array(12, 34)); // WHERE MeatProtMin IN (12, 34)
     * $query->filterByMeatprotmin(array('min' => 12)); // WHERE MeatProtMin >= 12
     * $query->filterByMeatprotmin(array('max' => 12)); // WHERE MeatProtMin <= 12
     * </code>
     *
     * @param     mixed $meatprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatprotmin($meatprotmin = null, $comparison = null)
    {
        if (is_array($meatprotmin)) {
            $useMinMax = false;
            if (isset($meatprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATPROTMIN, $meatprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATPROTMIN, $meatprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATPROTMIN, $meatprotmin, $comparison);
    }

    /**
     * Filter the query on the MeatProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatprotmax(1234); // WHERE MeatProtMax = 1234
     * $query->filterByMeatprotmax(array(12, 34)); // WHERE MeatProtMax IN (12, 34)
     * $query->filterByMeatprotmax(array('min' => 12)); // WHERE MeatProtMax >= 12
     * $query->filterByMeatprotmax(array('max' => 12)); // WHERE MeatProtMax <= 12
     * </code>
     *
     * @param     mixed $meatprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatprotmax($meatprotmax = null, $comparison = null)
    {
        if (is_array($meatprotmax)) {
            $useMinMax = false;
            if (isset($meatprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATPROTMAX, $meatprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATPROTMAX, $meatprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATPROTMAX, $meatprotmax, $comparison);
    }

    /**
     * Filter the query on the MeatFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatfatmin(1234); // WHERE MeatFatMin = 1234
     * $query->filterByMeatfatmin(array(12, 34)); // WHERE MeatFatMin IN (12, 34)
     * $query->filterByMeatfatmin(array('min' => 12)); // WHERE MeatFatMin >= 12
     * $query->filterByMeatfatmin(array('max' => 12)); // WHERE MeatFatMin <= 12
     * </code>
     *
     * @param     mixed $meatfatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatfatmin($meatfatmin = null, $comparison = null)
    {
        if (is_array($meatfatmin)) {
            $useMinMax = false;
            if (isset($meatfatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATFATMIN, $meatfatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatfatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATFATMIN, $meatfatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATFATMIN, $meatfatmin, $comparison);
    }

    /**
     * Filter the query on the MeatFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatfatmax(1234); // WHERE MeatFatMax = 1234
     * $query->filterByMeatfatmax(array(12, 34)); // WHERE MeatFatMax IN (12, 34)
     * $query->filterByMeatfatmax(array('min' => 12)); // WHERE MeatFatMax >= 12
     * $query->filterByMeatfatmax(array('max' => 12)); // WHERE MeatFatMax <= 12
     * </code>
     *
     * @param     mixed $meatfatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatfatmax($meatfatmax = null, $comparison = null)
    {
        if (is_array($meatfatmax)) {
            $useMinMax = false;
            if (isset($meatfatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATFATMAX, $meatfatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatfatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATFATMAX, $meatfatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATFATMAX, $meatfatmax, $comparison);
    }

    /**
     * Filter the query on the MeatAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatashmin(1234); // WHERE MeatAshMin = 1234
     * $query->filterByMeatashmin(array(12, 34)); // WHERE MeatAshMin IN (12, 34)
     * $query->filterByMeatashmin(array('min' => 12)); // WHERE MeatAshMin >= 12
     * $query->filterByMeatashmin(array('max' => 12)); // WHERE MeatAshMin <= 12
     * </code>
     *
     * @param     mixed $meatashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatashmin($meatashmin = null, $comparison = null)
    {
        if (is_array($meatashmin)) {
            $useMinMax = false;
            if (isset($meatashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATASHMIN, $meatashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATASHMIN, $meatashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATASHMIN, $meatashmin, $comparison);
    }

    /**
     * Filter the query on the MeatAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMeatashmax(1234); // WHERE MeatAshMax = 1234
     * $query->filterByMeatashmax(array(12, 34)); // WHERE MeatAshMax IN (12, 34)
     * $query->filterByMeatashmax(array('min' => 12)); // WHERE MeatAshMax >= 12
     * $query->filterByMeatashmax(array('max' => 12)); // WHERE MeatAshMax <= 12
     * </code>
     *
     * @param     mixed $meatashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByMeatashmax($meatashmax = null, $comparison = null)
    {
        if (is_array($meatashmax)) {
            $useMinMax = false;
            if (isset($meatashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::MEATASHMAX, $meatashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meatashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::MEATASHMAX, $meatashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MEATASHMAX, $meatashmax, $comparison);
    }

    /**
     * Filter the query on the LiverMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLivermoistmin(1234); // WHERE LiverMoistMin = 1234
     * $query->filterByLivermoistmin(array(12, 34)); // WHERE LiverMoistMin IN (12, 34)
     * $query->filterByLivermoistmin(array('min' => 12)); // WHERE LiverMoistMin >= 12
     * $query->filterByLivermoistmin(array('max' => 12)); // WHERE LiverMoistMin <= 12
     * </code>
     *
     * @param     mixed $livermoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLivermoistmin($livermoistmin = null, $comparison = null)
    {
        if (is_array($livermoistmin)) {
            $useMinMax = false;
            if (isset($livermoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERMOISTMIN, $livermoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($livermoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERMOISTMIN, $livermoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERMOISTMIN, $livermoistmin, $comparison);
    }

    /**
     * Filter the query on the LiverMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLivermoistmax(1234); // WHERE LiverMoistMax = 1234
     * $query->filterByLivermoistmax(array(12, 34)); // WHERE LiverMoistMax IN (12, 34)
     * $query->filterByLivermoistmax(array('min' => 12)); // WHERE LiverMoistMax >= 12
     * $query->filterByLivermoistmax(array('max' => 12)); // WHERE LiverMoistMax <= 12
     * </code>
     *
     * @param     mixed $livermoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLivermoistmax($livermoistmax = null, $comparison = null)
    {
        if (is_array($livermoistmax)) {
            $useMinMax = false;
            if (isset($livermoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERMOISTMAX, $livermoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($livermoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERMOISTMAX, $livermoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERMOISTMAX, $livermoistmax, $comparison);
    }

    /**
     * Filter the query on the LiverProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverprotmin(1234); // WHERE LiverProtMin = 1234
     * $query->filterByLiverprotmin(array(12, 34)); // WHERE LiverProtMin IN (12, 34)
     * $query->filterByLiverprotmin(array('min' => 12)); // WHERE LiverProtMin >= 12
     * $query->filterByLiverprotmin(array('max' => 12)); // WHERE LiverProtMin <= 12
     * </code>
     *
     * @param     mixed $liverprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverprotmin($liverprotmin = null, $comparison = null)
    {
        if (is_array($liverprotmin)) {
            $useMinMax = false;
            if (isset($liverprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERPROTMIN, $liverprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERPROTMIN, $liverprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERPROTMIN, $liverprotmin, $comparison);
    }

    /**
     * Filter the query on the LiverProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverprotmax(1234); // WHERE LiverProtMax = 1234
     * $query->filterByLiverprotmax(array(12, 34)); // WHERE LiverProtMax IN (12, 34)
     * $query->filterByLiverprotmax(array('min' => 12)); // WHERE LiverProtMax >= 12
     * $query->filterByLiverprotmax(array('max' => 12)); // WHERE LiverProtMax <= 12
     * </code>
     *
     * @param     mixed $liverprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverprotmax($liverprotmax = null, $comparison = null)
    {
        if (is_array($liverprotmax)) {
            $useMinMax = false;
            if (isset($liverprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERPROTMAX, $liverprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERPROTMAX, $liverprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERPROTMAX, $liverprotmax, $comparison);
    }

    /**
     * Filter the query on the LiverFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverfatmin(1234); // WHERE LiverFatMin = 1234
     * $query->filterByLiverfatmin(array(12, 34)); // WHERE LiverFatMin IN (12, 34)
     * $query->filterByLiverfatmin(array('min' => 12)); // WHERE LiverFatMin >= 12
     * $query->filterByLiverfatmin(array('max' => 12)); // WHERE LiverFatMin <= 12
     * </code>
     *
     * @param     mixed $liverfatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverfatmin($liverfatmin = null, $comparison = null)
    {
        if (is_array($liverfatmin)) {
            $useMinMax = false;
            if (isset($liverfatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERFATMIN, $liverfatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverfatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERFATMIN, $liverfatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERFATMIN, $liverfatmin, $comparison);
    }

    /**
     * Filter the query on the LiverFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverfatmax(1234); // WHERE LiverFatMax = 1234
     * $query->filterByLiverfatmax(array(12, 34)); // WHERE LiverFatMax IN (12, 34)
     * $query->filterByLiverfatmax(array('min' => 12)); // WHERE LiverFatMax >= 12
     * $query->filterByLiverfatmax(array('max' => 12)); // WHERE LiverFatMax <= 12
     * </code>
     *
     * @param     mixed $liverfatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverfatmax($liverfatmax = null, $comparison = null)
    {
        if (is_array($liverfatmax)) {
            $useMinMax = false;
            if (isset($liverfatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERFATMAX, $liverfatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverfatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERFATMAX, $liverfatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERFATMAX, $liverfatmax, $comparison);
    }

    /**
     * Filter the query on the LiverAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverashmin(1234); // WHERE LiverAshMin = 1234
     * $query->filterByLiverashmin(array(12, 34)); // WHERE LiverAshMin IN (12, 34)
     * $query->filterByLiverashmin(array('min' => 12)); // WHERE LiverAshMin >= 12
     * $query->filterByLiverashmin(array('max' => 12)); // WHERE LiverAshMin <= 12
     * </code>
     *
     * @param     mixed $liverashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverashmin($liverashmin = null, $comparison = null)
    {
        if (is_array($liverashmin)) {
            $useMinMax = false;
            if (isset($liverashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERASHMIN, $liverashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERASHMIN, $liverashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERASHMIN, $liverashmin, $comparison);
    }

    /**
     * Filter the query on the LiverAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverashmax(1234); // WHERE LiverAshMax = 1234
     * $query->filterByLiverashmax(array(12, 34)); // WHERE LiverAshMax IN (12, 34)
     * $query->filterByLiverashmax(array('min' => 12)); // WHERE LiverAshMax >= 12
     * $query->filterByLiverashmax(array('max' => 12)); // WHERE LiverAshMax <= 12
     * </code>
     *
     * @param     mixed $liverashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByLiverashmax($liverashmax = null, $comparison = null)
    {
        if (is_array($liverashmax)) {
            $useMinMax = false;
            if (isset($liverashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::LIVERASHMAX, $liverashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::LIVERASHMAX, $liverashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::LIVERASHMAX, $liverashmax, $comparison);
    }

    /**
     * Filter the query on the RoeMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRoemoistmin(1234); // WHERE RoeMoistMin = 1234
     * $query->filterByRoemoistmin(array(12, 34)); // WHERE RoeMoistMin IN (12, 34)
     * $query->filterByRoemoistmin(array('min' => 12)); // WHERE RoeMoistMin >= 12
     * $query->filterByRoemoistmin(array('max' => 12)); // WHERE RoeMoistMin <= 12
     * </code>
     *
     * @param     mixed $roemoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoemoistmin($roemoistmin = null, $comparison = null)
    {
        if (is_array($roemoistmin)) {
            $useMinMax = false;
            if (isset($roemoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEMOISTMIN, $roemoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roemoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEMOISTMIN, $roemoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEMOISTMIN, $roemoistmin, $comparison);
    }

    /**
     * Filter the query on the RoeMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRoemoistmax(1234); // WHERE RoeMoistMax = 1234
     * $query->filterByRoemoistmax(array(12, 34)); // WHERE RoeMoistMax IN (12, 34)
     * $query->filterByRoemoistmax(array('min' => 12)); // WHERE RoeMoistMax >= 12
     * $query->filterByRoemoistmax(array('max' => 12)); // WHERE RoeMoistMax <= 12
     * </code>
     *
     * @param     mixed $roemoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoemoistmax($roemoistmax = null, $comparison = null)
    {
        if (is_array($roemoistmax)) {
            $useMinMax = false;
            if (isset($roemoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEMOISTMAX, $roemoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roemoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEMOISTMAX, $roemoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEMOISTMAX, $roemoistmax, $comparison);
    }

    /**
     * Filter the query on the RoeProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRoeprotmin(1234); // WHERE RoeProtMin = 1234
     * $query->filterByRoeprotmin(array(12, 34)); // WHERE RoeProtMin IN (12, 34)
     * $query->filterByRoeprotmin(array('min' => 12)); // WHERE RoeProtMin >= 12
     * $query->filterByRoeprotmin(array('max' => 12)); // WHERE RoeProtMin <= 12
     * </code>
     *
     * @param     mixed $roeprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoeprotmin($roeprotmin = null, $comparison = null)
    {
        if (is_array($roeprotmin)) {
            $useMinMax = false;
            if (isset($roeprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEPROTMIN, $roeprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roeprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEPROTMIN, $roeprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEPROTMIN, $roeprotmin, $comparison);
    }

    /**
     * Filter the query on the RoeProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRoeprotmax(1234); // WHERE RoeProtMax = 1234
     * $query->filterByRoeprotmax(array(12, 34)); // WHERE RoeProtMax IN (12, 34)
     * $query->filterByRoeprotmax(array('min' => 12)); // WHERE RoeProtMax >= 12
     * $query->filterByRoeprotmax(array('max' => 12)); // WHERE RoeProtMax <= 12
     * </code>
     *
     * @param     mixed $roeprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoeprotmax($roeprotmax = null, $comparison = null)
    {
        if (is_array($roeprotmax)) {
            $useMinMax = false;
            if (isset($roeprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEPROTMAX, $roeprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roeprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEPROTMAX, $roeprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEPROTMAX, $roeprotmax, $comparison);
    }

    /**
     * Filter the query on the RoeFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRoefatmin(1234); // WHERE RoeFatMin = 1234
     * $query->filterByRoefatmin(array(12, 34)); // WHERE RoeFatMin IN (12, 34)
     * $query->filterByRoefatmin(array('min' => 12)); // WHERE RoeFatMin >= 12
     * $query->filterByRoefatmin(array('max' => 12)); // WHERE RoeFatMin <= 12
     * </code>
     *
     * @param     mixed $roefatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoefatmin($roefatmin = null, $comparison = null)
    {
        if (is_array($roefatmin)) {
            $useMinMax = false;
            if (isset($roefatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEFATMIN, $roefatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roefatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEFATMIN, $roefatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEFATMIN, $roefatmin, $comparison);
    }

    /**
     * Filter the query on the RoeFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRoefatmax(1234); // WHERE RoeFatMax = 1234
     * $query->filterByRoefatmax(array(12, 34)); // WHERE RoeFatMax IN (12, 34)
     * $query->filterByRoefatmax(array('min' => 12)); // WHERE RoeFatMax >= 12
     * $query->filterByRoefatmax(array('max' => 12)); // WHERE RoeFatMax <= 12
     * </code>
     *
     * @param     mixed $roefatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoefatmax($roefatmax = null, $comparison = null)
    {
        if (is_array($roefatmax)) {
            $useMinMax = false;
            if (isset($roefatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEFATMAX, $roefatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roefatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEFATMAX, $roefatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEFATMAX, $roefatmax, $comparison);
    }

    /**
     * Filter the query on the RoeAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRoeashmin(1234); // WHERE RoeAshMin = 1234
     * $query->filterByRoeashmin(array(12, 34)); // WHERE RoeAshMin IN (12, 34)
     * $query->filterByRoeashmin(array('min' => 12)); // WHERE RoeAshMin >= 12
     * $query->filterByRoeashmin(array('max' => 12)); // WHERE RoeAshMin <= 12
     * </code>
     *
     * @param     mixed $roeashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoeashmin($roeashmin = null, $comparison = null)
    {
        if (is_array($roeashmin)) {
            $useMinMax = false;
            if (isset($roeashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEASHMIN, $roeashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roeashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEASHMIN, $roeashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEASHMIN, $roeashmin, $comparison);
    }

    /**
     * Filter the query on the RoeAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRoeashmax(1234); // WHERE RoeAshMax = 1234
     * $query->filterByRoeashmax(array(12, 34)); // WHERE RoeAshMax IN (12, 34)
     * $query->filterByRoeashmax(array('min' => 12)); // WHERE RoeAshMax >= 12
     * $query->filterByRoeashmax(array('max' => 12)); // WHERE RoeAshMax <= 12
     * </code>
     *
     * @param     mixed $roeashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByRoeashmax($roeashmax = null, $comparison = null)
    {
        if (is_array($roeashmax)) {
            $useMinMax = false;
            if (isset($roeashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::ROEASHMAX, $roeashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roeashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::ROEASHMAX, $roeashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ROEASHMAX, $roeashmax, $comparison);
    }

    /**
     * Filter the query on the VisceraMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceramoistmin(1234); // WHERE VisceraMoistMin = 1234
     * $query->filterByVisceramoistmin(array(12, 34)); // WHERE VisceraMoistMin IN (12, 34)
     * $query->filterByVisceramoistmin(array('min' => 12)); // WHERE VisceraMoistMin >= 12
     * $query->filterByVisceramoistmin(array('max' => 12)); // WHERE VisceraMoistMin <= 12
     * </code>
     *
     * @param     mixed $visceramoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceramoistmin($visceramoistmin = null, $comparison = null)
    {
        if (is_array($visceramoistmin)) {
            $useMinMax = false;
            if (isset($visceramoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAMOISTMIN, $visceramoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceramoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAMOISTMIN, $visceramoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAMOISTMIN, $visceramoistmin, $comparison);
    }

    /**
     * Filter the query on the VisceraMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceramoistmax(1234); // WHERE VisceraMoistMax = 1234
     * $query->filterByVisceramoistmax(array(12, 34)); // WHERE VisceraMoistMax IN (12, 34)
     * $query->filterByVisceramoistmax(array('min' => 12)); // WHERE VisceraMoistMax >= 12
     * $query->filterByVisceramoistmax(array('max' => 12)); // WHERE VisceraMoistMax <= 12
     * </code>
     *
     * @param     mixed $visceramoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceramoistmax($visceramoistmax = null, $comparison = null)
    {
        if (is_array($visceramoistmax)) {
            $useMinMax = false;
            if (isset($visceramoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAMOISTMAX, $visceramoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceramoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAMOISTMAX, $visceramoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAMOISTMAX, $visceramoistmax, $comparison);
    }

    /**
     * Filter the query on the VisceraProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraprotmin(1234); // WHERE VisceraProtMin = 1234
     * $query->filterByVisceraprotmin(array(12, 34)); // WHERE VisceraProtMin IN (12, 34)
     * $query->filterByVisceraprotmin(array('min' => 12)); // WHERE VisceraProtMin >= 12
     * $query->filterByVisceraprotmin(array('max' => 12)); // WHERE VisceraProtMin <= 12
     * </code>
     *
     * @param     mixed $visceraprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceraprotmin($visceraprotmin = null, $comparison = null)
    {
        if (is_array($visceraprotmin)) {
            $useMinMax = false;
            if (isset($visceraprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAPROTMIN, $visceraprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAPROTMIN, $visceraprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAPROTMIN, $visceraprotmin, $comparison);
    }

    /**
     * Filter the query on the VisceraProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraprotmax(1234); // WHERE VisceraProtMax = 1234
     * $query->filterByVisceraprotmax(array(12, 34)); // WHERE VisceraProtMax IN (12, 34)
     * $query->filterByVisceraprotmax(array('min' => 12)); // WHERE VisceraProtMax >= 12
     * $query->filterByVisceraprotmax(array('max' => 12)); // WHERE VisceraProtMax <= 12
     * </code>
     *
     * @param     mixed $visceraprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceraprotmax($visceraprotmax = null, $comparison = null)
    {
        if (is_array($visceraprotmax)) {
            $useMinMax = false;
            if (isset($visceraprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAPROTMAX, $visceraprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAPROTMAX, $visceraprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAPROTMAX, $visceraprotmax, $comparison);
    }

    /**
     * Filter the query on the VisceraFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByViscerafatmin(1234); // WHERE VisceraFatMin = 1234
     * $query->filterByViscerafatmin(array(12, 34)); // WHERE VisceraFatMin IN (12, 34)
     * $query->filterByViscerafatmin(array('min' => 12)); // WHERE VisceraFatMin >= 12
     * $query->filterByViscerafatmin(array('max' => 12)); // WHERE VisceraFatMin <= 12
     * </code>
     *
     * @param     mixed $viscerafatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByViscerafatmin($viscerafatmin = null, $comparison = null)
    {
        if (is_array($viscerafatmin)) {
            $useMinMax = false;
            if (isset($viscerafatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAFATMIN, $viscerafatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viscerafatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAFATMIN, $viscerafatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAFATMIN, $viscerafatmin, $comparison);
    }

    /**
     * Filter the query on the VisceraFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByViscerafatmax(1234); // WHERE VisceraFatMax = 1234
     * $query->filterByViscerafatmax(array(12, 34)); // WHERE VisceraFatMax IN (12, 34)
     * $query->filterByViscerafatmax(array('min' => 12)); // WHERE VisceraFatMax >= 12
     * $query->filterByViscerafatmax(array('max' => 12)); // WHERE VisceraFatMax <= 12
     * </code>
     *
     * @param     mixed $viscerafatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByViscerafatmax($viscerafatmax = null, $comparison = null)
    {
        if (is_array($viscerafatmax)) {
            $useMinMax = false;
            if (isset($viscerafatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAFATMAX, $viscerafatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viscerafatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAFATMAX, $viscerafatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAFATMAX, $viscerafatmax, $comparison);
    }

    /**
     * Filter the query on the VisceraAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraashmin(1234); // WHERE VisceraAshMin = 1234
     * $query->filterByVisceraashmin(array(12, 34)); // WHERE VisceraAshMin IN (12, 34)
     * $query->filterByVisceraashmin(array('min' => 12)); // WHERE VisceraAshMin >= 12
     * $query->filterByVisceraashmin(array('max' => 12)); // WHERE VisceraAshMin <= 12
     * </code>
     *
     * @param     mixed $visceraashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceraashmin($visceraashmin = null, $comparison = null)
    {
        if (is_array($visceraashmin)) {
            $useMinMax = false;
            if (isset($visceraashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAASHMIN, $visceraashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAASHMIN, $visceraashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAASHMIN, $visceraashmin, $comparison);
    }

    /**
     * Filter the query on the VisceraAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraashmax(1234); // WHERE VisceraAshMax = 1234
     * $query->filterByVisceraashmax(array(12, 34)); // WHERE VisceraAshMax IN (12, 34)
     * $query->filterByVisceraashmax(array('min' => 12)); // WHERE VisceraAshMax >= 12
     * $query->filterByVisceraashmax(array('max' => 12)); // WHERE VisceraAshMax <= 12
     * </code>
     *
     * @param     mixed $visceraashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByVisceraashmax($visceraashmax = null, $comparison = null)
    {
        if (is_array($visceraashmax)) {
            $useMinMax = false;
            if (isset($visceraashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAASHMAX, $visceraashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::VISCERAASHMAX, $visceraashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::VISCERAASHMAX, $visceraashmax, $comparison);
    }

    /**
     * Filter the query on the HeadMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadmoistmin(1234); // WHERE HeadMoistMin = 1234
     * $query->filterByHeadmoistmin(array(12, 34)); // WHERE HeadMoistMin IN (12, 34)
     * $query->filterByHeadmoistmin(array('min' => 12)); // WHERE HeadMoistMin >= 12
     * $query->filterByHeadmoistmin(array('max' => 12)); // WHERE HeadMoistMin <= 12
     * </code>
     *
     * @param     mixed $headmoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadmoistmin($headmoistmin = null, $comparison = null)
    {
        if (is_array($headmoistmin)) {
            $useMinMax = false;
            if (isset($headmoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADMOISTMIN, $headmoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headmoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADMOISTMIN, $headmoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADMOISTMIN, $headmoistmin, $comparison);
    }

    /**
     * Filter the query on the HeadMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadmoistmax(1234); // WHERE HeadMoistMax = 1234
     * $query->filterByHeadmoistmax(array(12, 34)); // WHERE HeadMoistMax IN (12, 34)
     * $query->filterByHeadmoistmax(array('min' => 12)); // WHERE HeadMoistMax >= 12
     * $query->filterByHeadmoistmax(array('max' => 12)); // WHERE HeadMoistMax <= 12
     * </code>
     *
     * @param     mixed $headmoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadmoistmax($headmoistmax = null, $comparison = null)
    {
        if (is_array($headmoistmax)) {
            $useMinMax = false;
            if (isset($headmoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADMOISTMAX, $headmoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headmoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADMOISTMAX, $headmoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADMOISTMAX, $headmoistmax, $comparison);
    }

    /**
     * Filter the query on the HeadProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadprotmin(1234); // WHERE HeadProtMin = 1234
     * $query->filterByHeadprotmin(array(12, 34)); // WHERE HeadProtMin IN (12, 34)
     * $query->filterByHeadprotmin(array('min' => 12)); // WHERE HeadProtMin >= 12
     * $query->filterByHeadprotmin(array('max' => 12)); // WHERE HeadProtMin <= 12
     * </code>
     *
     * @param     mixed $headprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadprotmin($headprotmin = null, $comparison = null)
    {
        if (is_array($headprotmin)) {
            $useMinMax = false;
            if (isset($headprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADPROTMIN, $headprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADPROTMIN, $headprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADPROTMIN, $headprotmin, $comparison);
    }

    /**
     * Filter the query on the HeadProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadprotmax(1234); // WHERE HeadProtMax = 1234
     * $query->filterByHeadprotmax(array(12, 34)); // WHERE HeadProtMax IN (12, 34)
     * $query->filterByHeadprotmax(array('min' => 12)); // WHERE HeadProtMax >= 12
     * $query->filterByHeadprotmax(array('max' => 12)); // WHERE HeadProtMax <= 12
     * </code>
     *
     * @param     mixed $headprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadprotmax($headprotmax = null, $comparison = null)
    {
        if (is_array($headprotmax)) {
            $useMinMax = false;
            if (isset($headprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADPROTMAX, $headprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADPROTMAX, $headprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADPROTMAX, $headprotmax, $comparison);
    }

    /**
     * Filter the query on the HeadFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadfatmin(1234); // WHERE HeadFatMin = 1234
     * $query->filterByHeadfatmin(array(12, 34)); // WHERE HeadFatMin IN (12, 34)
     * $query->filterByHeadfatmin(array('min' => 12)); // WHERE HeadFatMin >= 12
     * $query->filterByHeadfatmin(array('max' => 12)); // WHERE HeadFatMin <= 12
     * </code>
     *
     * @param     mixed $headfatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadfatmin($headfatmin = null, $comparison = null)
    {
        if (is_array($headfatmin)) {
            $useMinMax = false;
            if (isset($headfatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADFATMIN, $headfatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headfatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADFATMIN, $headfatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADFATMIN, $headfatmin, $comparison);
    }

    /**
     * Filter the query on the HeadFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadfatmax(1234); // WHERE HeadFatMax = 1234
     * $query->filterByHeadfatmax(array(12, 34)); // WHERE HeadFatMax IN (12, 34)
     * $query->filterByHeadfatmax(array('min' => 12)); // WHERE HeadFatMax >= 12
     * $query->filterByHeadfatmax(array('max' => 12)); // WHERE HeadFatMax <= 12
     * </code>
     *
     * @param     mixed $headfatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadfatmax($headfatmax = null, $comparison = null)
    {
        if (is_array($headfatmax)) {
            $useMinMax = false;
            if (isset($headfatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADFATMAX, $headfatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headfatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADFATMAX, $headfatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADFATMAX, $headfatmax, $comparison);
    }

    /**
     * Filter the query on the HeadAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadashmin(1234); // WHERE HeadAshMin = 1234
     * $query->filterByHeadashmin(array(12, 34)); // WHERE HeadAshMin IN (12, 34)
     * $query->filterByHeadashmin(array('min' => 12)); // WHERE HeadAshMin >= 12
     * $query->filterByHeadashmin(array('max' => 12)); // WHERE HeadAshMin <= 12
     * </code>
     *
     * @param     mixed $headashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadashmin($headashmin = null, $comparison = null)
    {
        if (is_array($headashmin)) {
            $useMinMax = false;
            if (isset($headashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADASHMIN, $headashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADASHMIN, $headashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADASHMIN, $headashmin, $comparison);
    }

    /**
     * Filter the query on the HeadAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadashmax(1234); // WHERE HeadAshMax = 1234
     * $query->filterByHeadashmax(array(12, 34)); // WHERE HeadAshMax IN (12, 34)
     * $query->filterByHeadashmax(array('min' => 12)); // WHERE HeadAshMax >= 12
     * $query->filterByHeadashmax(array('max' => 12)); // WHERE HeadAshMax <= 12
     * </code>
     *
     * @param     mixed $headashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByHeadashmax($headashmax = null, $comparison = null)
    {
        if (is_array($headashmax)) {
            $useMinMax = false;
            if (isset($headashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::HEADASHMAX, $headashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::HEADASHMAX, $headashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::HEADASHMAX, $headashmax, $comparison);
    }

    /**
     * Filter the query on the WasteMoistMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWastemoistmin(1234); // WHERE WasteMoistMin = 1234
     * $query->filterByWastemoistmin(array(12, 34)); // WHERE WasteMoistMin IN (12, 34)
     * $query->filterByWastemoistmin(array('min' => 12)); // WHERE WasteMoistMin >= 12
     * $query->filterByWastemoistmin(array('max' => 12)); // WHERE WasteMoistMin <= 12
     * </code>
     *
     * @param     mixed $wastemoistmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWastemoistmin($wastemoistmin = null, $comparison = null)
    {
        if (is_array($wastemoistmin)) {
            $useMinMax = false;
            if (isset($wastemoistmin['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEMOISTMIN, $wastemoistmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wastemoistmin['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEMOISTMIN, $wastemoistmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEMOISTMIN, $wastemoistmin, $comparison);
    }

    /**
     * Filter the query on the WasteMoistMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWastemoistmax(1234); // WHERE WasteMoistMax = 1234
     * $query->filterByWastemoistmax(array(12, 34)); // WHERE WasteMoistMax IN (12, 34)
     * $query->filterByWastemoistmax(array('min' => 12)); // WHERE WasteMoistMax >= 12
     * $query->filterByWastemoistmax(array('max' => 12)); // WHERE WasteMoistMax <= 12
     * </code>
     *
     * @param     mixed $wastemoistmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWastemoistmax($wastemoistmax = null, $comparison = null)
    {
        if (is_array($wastemoistmax)) {
            $useMinMax = false;
            if (isset($wastemoistmax['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEMOISTMAX, $wastemoistmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wastemoistmax['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEMOISTMAX, $wastemoistmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEMOISTMAX, $wastemoistmax, $comparison);
    }

    /**
     * Filter the query on the WasteProtMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWasteprotmin(1234); // WHERE WasteProtMin = 1234
     * $query->filterByWasteprotmin(array(12, 34)); // WHERE WasteProtMin IN (12, 34)
     * $query->filterByWasteprotmin(array('min' => 12)); // WHERE WasteProtMin >= 12
     * $query->filterByWasteprotmin(array('max' => 12)); // WHERE WasteProtMin <= 12
     * </code>
     *
     * @param     mixed $wasteprotmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWasteprotmin($wasteprotmin = null, $comparison = null)
    {
        if (is_array($wasteprotmin)) {
            $useMinMax = false;
            if (isset($wasteprotmin['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEPROTMIN, $wasteprotmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wasteprotmin['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEPROTMIN, $wasteprotmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEPROTMIN, $wasteprotmin, $comparison);
    }

    /**
     * Filter the query on the WasteProtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWasteprotmax(1234); // WHERE WasteProtMax = 1234
     * $query->filterByWasteprotmax(array(12, 34)); // WHERE WasteProtMax IN (12, 34)
     * $query->filterByWasteprotmax(array('min' => 12)); // WHERE WasteProtMax >= 12
     * $query->filterByWasteprotmax(array('max' => 12)); // WHERE WasteProtMax <= 12
     * </code>
     *
     * @param     mixed $wasteprotmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWasteprotmax($wasteprotmax = null, $comparison = null)
    {
        if (is_array($wasteprotmax)) {
            $useMinMax = false;
            if (isset($wasteprotmax['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEPROTMAX, $wasteprotmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wasteprotmax['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEPROTMAX, $wasteprotmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEPROTMAX, $wasteprotmax, $comparison);
    }

    /**
     * Filter the query on the WasteFatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWastefatmin(1234); // WHERE WasteFatMin = 1234
     * $query->filterByWastefatmin(array(12, 34)); // WHERE WasteFatMin IN (12, 34)
     * $query->filterByWastefatmin(array('min' => 12)); // WHERE WasteFatMin >= 12
     * $query->filterByWastefatmin(array('max' => 12)); // WHERE WasteFatMin <= 12
     * </code>
     *
     * @param     mixed $wastefatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWastefatmin($wastefatmin = null, $comparison = null)
    {
        if (is_array($wastefatmin)) {
            $useMinMax = false;
            if (isset($wastefatmin['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEFATMIN, $wastefatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wastefatmin['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEFATMIN, $wastefatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEFATMIN, $wastefatmin, $comparison);
    }

    /**
     * Filter the query on the WasteFatMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWastefatmax(1234); // WHERE WasteFatMax = 1234
     * $query->filterByWastefatmax(array(12, 34)); // WHERE WasteFatMax IN (12, 34)
     * $query->filterByWastefatmax(array('min' => 12)); // WHERE WasteFatMax >= 12
     * $query->filterByWastefatmax(array('max' => 12)); // WHERE WasteFatMax <= 12
     * </code>
     *
     * @param     mixed $wastefatmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWastefatmax($wastefatmax = null, $comparison = null)
    {
        if (is_array($wastefatmax)) {
            $useMinMax = false;
            if (isset($wastefatmax['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEFATMAX, $wastefatmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wastefatmax['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEFATMAX, $wastefatmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEFATMAX, $wastefatmax, $comparison);
    }

    /**
     * Filter the query on the WasteAshMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWasteashmin(1234); // WHERE WasteAshMin = 1234
     * $query->filterByWasteashmin(array(12, 34)); // WHERE WasteAshMin IN (12, 34)
     * $query->filterByWasteashmin(array('min' => 12)); // WHERE WasteAshMin >= 12
     * $query->filterByWasteashmin(array('max' => 12)); // WHERE WasteAshMin <= 12
     * </code>
     *
     * @param     mixed $wasteashmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWasteashmin($wasteashmin = null, $comparison = null)
    {
        if (is_array($wasteashmin)) {
            $useMinMax = false;
            if (isset($wasteashmin['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEASHMIN, $wasteashmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wasteashmin['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEASHMIN, $wasteashmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEASHMIN, $wasteashmin, $comparison);
    }

    /**
     * Filter the query on the WasteAshMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWasteashmax(1234); // WHERE WasteAshMax = 1234
     * $query->filterByWasteashmax(array(12, 34)); // WHERE WasteAshMax IN (12, 34)
     * $query->filterByWasteashmax(array('min' => 12)); // WHERE WasteAshMax >= 12
     * $query->filterByWasteashmax(array('max' => 12)); // WHERE WasteAshMax <= 12
     * </code>
     *
     * @param     mixed $wasteashmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByWasteashmax($wasteashmax = null, $comparison = null)
    {
        if (is_array($wasteashmax)) {
            $useMinMax = false;
            if (isset($wasteashmax['min'])) {
                $this->addUsingAlias(ProximsPeer::WASTEASHMAX, $wasteashmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wasteashmax['max'])) {
                $this->addUsingAlias(ProximsPeer::WASTEASHMAX, $wasteashmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::WASTEASHMAX, $wasteashmax, $comparison);
    }

    /**
     * Filter the query on the CommentChemics column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentchemics('fooValue');   // WHERE CommentChemics = 'fooValue'
     * $query->filterByCommentchemics('%fooValue%'); // WHERE CommentChemics LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentchemics The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByCommentchemics($commentchemics = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentchemics)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentchemics)) {
                $commentchemics = str_replace('*', '%', $commentchemics);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProximsPeer::COMMENTCHEMICS, $commentchemics, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ProximsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ProximsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::ENTERED, $entered, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ProximsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ProximsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ProximsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ProximsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::MODIFIED, $modified, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ProximsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ProximsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(ProximsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(ProximsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::EXPERT, $expert, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ProximsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ProximsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProximsPeer::REMARK, $remark, $comparison);
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
     * @return ProximsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ProximsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ProximsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProximsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Proxims $proxims Object to remove from the list of results
     *
     * @return ProximsQuery The current query, for fluid interface
     */
    public function prune($proxims = null)
    {
        if ($proxims) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ProximsPeer::STOCKCODE), $proxims->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ProximsPeer::CHEMICSREFNO), $proxims->getChemicsrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ProximsPeer::LOCALITY), $proxims->getLocality(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
