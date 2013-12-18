<?php

require ROOT_DIR . '/api/services/speciesService.php';
require ROOT_DIR . '/api/dto/SpeciesDTO.php';

// http://local.dev/fishbase/api/algal

$app->get('/species/:species', function ($speciesName) use ($app) {
    $species = SpeciesService::getSpecies($speciesName);
    //$stock = StocksQuery::create()->findOneBySpeccode($species->getSpeccode());

    //$dto = new SpeciesDTO();
    //$dto->build($species->toArray(), $stock->toArray());

    FBResponse::doResponse($app, $species->toJSON(false), true);
    //FBResponse::doResponse($app, $res->toJSON(), true);
});

$app->get('/species/all/:pageNum', function ($pageNum) use ($app) {
    $speciesPage = SpeciesService::getSpeciesPage($pageNum);
    $dto = $speciesPage->getResults();
    FBResponse::doResponse($app, $dto->toJSON(false,false), true);
});

