
<?php

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 3/05/2017
 * Time: 14:56
 */
include klant::class;

class evenement
{
 private $id;
 private $locatie;
 private $datum;
 private $naamEvenement;
 private $gast;
 private $personeel;



 //Aanmaken nieuw evenement
 function __construct()
 {
     this.$this->id;
     this.$this->locatie;
     this.$this->datum;
     this.$this->naamEvenement;
 }


 function assignOwner () {


 }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * @param mixed $locatie
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @return mixed
     */
    public function getNaamEvenement()
    {
        return $this->naamEvenement;
    }

    /**
     * @param mixed $naamEvenement
     */
    public function setNaamEvenement($naamEvenement)
    {
        $this->naamEvenement = $naamEvenement;
    }

}