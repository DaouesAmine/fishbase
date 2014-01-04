<?php

require ROOT_DIR . '/api/services/speciesService.php';
require ROOT_DIR . '/api/dto/SpeciesDTO.php';

// http://local.dev/fishbase/api/algal

$app->get('/species/:speciesName', function ($speciesName) use ($app) {
    $species = SpeciesService::getSpeciesBySpeciesName($speciesName);
    //$stock = StocksQuery::create()->findOneBySpeccode($species->getSpeccode());

    //$dto = new SpeciesDTO();
    //$dto->build($species->toArray(), $stock->toArray());

    FBResponse::doResponse($app, $species, true);
    //FBResponse::doResponse($app, $res->toJSON(), true);
});

$app->get('/species/id/:id', function ($id) use ($app) {
    $species = SpeciesService::getOneSpecies($id);
    FBResponse::doResponse($app, $species, true);
});

$app->get('/species/all/:pageNum/:numRows', function ($pageNum, $numRows) use ($app) {
    $speciesPage = SpeciesService::getSpeciesListByPage($pageNum, $numRows);
    $dto = $speciesPage->getResults();
    FBResponse::doResponse($app, $dto, true);
});

