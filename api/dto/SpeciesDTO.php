<?php
class SpeciesDTO
{
    protected $species;
    protected $stock;

    public function build($species, $stock)
    {
        $this->$species = $species;
        $this->$stock = $stock;
    }

    public function setSpecies($species)
    {
        $this->species = $species;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
