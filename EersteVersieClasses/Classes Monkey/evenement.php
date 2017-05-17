<?php

class evenement {
    private $id;
    private $naam;
    private $beginDatum;
    private $eindDatum;
    private $klantId;
    private $prijs;

    public function __construct($naam, \DateTime $beginDatum, \DateTime $eindDatum, $klantId, $prijs) {
        $this->setNaam($naam);
        $this->SetStartDatum($beginDatum);
        $this->setEindDatum($eindDatum);
        $this->setKlantId($klantId);
        $this->setPrijs($prijs);
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
    public function getBeginDatum()
    {
        return $this->beginDatum;
    }

    /**
     * @param mixed $beginDatum
     */
    public function setBeginDatum($beginDatum)
    {
        $this->beginDatum = $beginDatum;
    }

    /**
     * @return mixed
     */
    public function getEindDatum()
    {
        return $this->eindDatum;
    }

    /**
     * @param mixed $eindDatum
     */
    public function setEindDatum($eindDatum)
    {
        $this->eindDatum = $eindDatum;
    }

    /**
     * @return mixed
     */
    public function getKlantId()
    {
        return $this->klantId;
    }

    /**
     * @param mixed $klantId
     */
    public function setKlantId($klantId)
    {
        $this->klantId = $klantId;
    }

    /**
     * @return mixed
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @param mixed $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }


}
