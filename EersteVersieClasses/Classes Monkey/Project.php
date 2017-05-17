<?php include Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11402595
 * Date: 17/05/2017
 * Time: 14:19
 */
class Project
{
    private $projectNummer;
    private $projectNaam;
    private $beginDatum;
    private $eindDatum;
    private $klantNummer;
    private $bezetting;
    private $kost;
    private $materialen;

    /**
     * Documenten constructor.
     * @param $projectNummer
     * @param $projectNaam
     * @param $beginDatum
     * @param $eindDatum
     * @param $klantNummer
     * @param $bezetting
     * @param $kost
     * @param $materialen
     */
    public function __construct($projectNummer, $projectNaam, \DateTime $beginDatum, \DateTime $eindDatum, $klantNummer, $bezetting, $kost, $materialen)
    {
        $this->projectNummer = $projectNummer;
        $this->projectNaam = $projectNaam;
        $this->beginDatum = $beginDatum;
        $this->eindDatum = $eindDatum;
        $this->klantNummer = $klantNummer;
        $this->bezetting = $bezetting;
        $this->kost = $kost;
        $this->materialen = $materialen;
    }

    /**
     * @return mixed
     */
    public function getProjectNummer()
    {
        return $this->projectNummer;
    }

    /**
     * @param mixed $projectNummer
     */
    public function setProjectNummer($projectNummer)
    {
        $this->projectNummer = $projectNummer;
    }

    /**
     * @return mixed
     */
    public function getProjectNaam()
    {
        return $this->projectNaam;
    }

    /**
     * @param mixed $projectNaam
     */
    public function setProjectNaam($projectNaam)
    {
        $this->projectNaam = $projectNaam;
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
    public function getKlantNummer()
    {
        return $this->klantNummer;
    }

    /**
     * @param mixed $klantNummer
     */
    public function setKlantNummer($klantNummer)
    {
        $this->klantNummer = $klantNummer;
    }

    /**
     * @return mixed
     */
    public function getBezetting()
    {
        return $this->bezetting;
    }

    /**
     * @param mixed $bezetting
     */
    public function setBezetting($bezetting)
    {
        $this->bezetting = $bezetting;
    }

    /**
     * @return mixed
     */
    public function getKost()
    {
        return $this->kost;
    }

    /**
     * @param mixed $kost
     */
    public function setKost($kost)
    {
        $this->kost = $kost;
    }

    /**
     * @return mixed
     */
    public function getMaterialen()
    {
        return $this->materialen;
    }

    /**
     * @param mixed $materialen
     */
    public function setMaterialen($materialen)
    {
        $this->materialen = $materialen;
    }


}