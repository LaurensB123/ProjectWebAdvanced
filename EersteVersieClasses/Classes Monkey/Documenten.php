<?php include Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11402595
 * Date: 17/05/2017
 * Time: 14:28
 */
class Documenten
{
    private $documentNummer;
    private $type;
    private $aanmaakDatum;
    private $vervalDatum;
    private $klantNummer;

    /**
     * Documenten constructor.
     * @param $documentNummer
     * @param $type
     * @param $aanmaakDatum
     * @param $vervalDatum
     * @param $klantNummer
     */
    public function __construct($documentNummer, $type, \DateTime $aanmaakDatum, \DateTime $vervalDatum, $klantNummer)
    {
        $this->documentNummer = $documentNummer;
        $this->type = $type;
        $this->aanmaakDatum = $aanmaakDatum;
        $this->vervalDatum = $vervalDatum;
        $this->klantNummer = $klantNummer;
    }

    /**
     * @return mixed
     */
    public function getDocumentNummer()
    {
        return $this->documentNummer;
    }

    /**
     * @param mixed $documentNummer
     */
    public function setDocumentNummer($documentNummer)
    {
        $this->documentNummer = $documentNummer;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return DateTime
     */
    public function getAanmaakDatum(): DateTime
    {
        return $this->aanmaakDatum;
    }

    /**
     * @param DateTime $aanmaakDatum
     */
    public function setAanmaakDatum(DateTime $aanmaakDatum)
    {
        $this->aanmaakDatum = $aanmaakDatum;
    }

    /**
     * @return mixed
     */
    public function getVervalDatum()
    {
        return $this->vervalDatum;
    }

    /**
     * @param mixed $vervalDatum
     */
    public function setVervalDatum($vervalDatum)
    {
        $this->vervalDatum = $vervalDatum;
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

}

