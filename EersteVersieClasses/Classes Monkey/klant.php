<?php

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 3/05/2017
 * Time: 14:43
 */


class klant
{
 private $id;
 private $naam;
 private $locatieKlant;



 //Aanmaken nieuwe klant
 function __construct()
 {
     this.$this->id;
     this.$this->naam;
     this.$this->locatieKlant;
 }
    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
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
    public function getLocatieKlant()
    {
        return $this->locatieKlant;
    }

    /**
     * @param mixed $locatieKlant
     */
    public function setLocatieKlant($locatieKlant)
    {
        $this->locatieKlant = $locatieKlant;
    }


}

?>