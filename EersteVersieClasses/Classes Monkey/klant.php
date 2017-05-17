<?php include  Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 3/05/2017
 * Time: 14:43
 */


class klant
{


private $klantNummer;
private $klantNaam;
private $klantVoornaam;
private $klantPostcode;
private $klantGemeente;
private $klantStraat;
private $klantHuisnummer;
private $klantTelefoonnummer;
private $klantGsmNummer;
private $klantEmailadres;
private $getekendeOfferte;
private $getekendContract;
private $project;


 //Aanmaken nieuwe klant
    /**
     * klant constructor.
     * @param Project $project
     */
    function __construct(Project $project)
 {
     this.$this->klantNummer;
     this.$this->klantNaam;
     this.$this->klantVoornaam;
     this.$this->klantPostcode;
     this.$this->klantGemeente;
     this.$this->klantStraat;
     this.$this->klantHuisnummer;
     this.$this->klantTelefoonnummer;
     this.$this->klantGsmNummer;
     this.$this->klantEmailadres;
     this.$this->getekendeOfferte;
     this.$this->getekendContract;
     this.$this->project;
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
    public function getKlantNaam()
    {
        return $this->klantNaam;
    }

    /**
     * @param mixed $klantNaam
     */
    public function setKlantNaam($klantNaam)
    {
        $this->klantNaam = $klantNaam;
    }

    /**
     * @return mixed
     */
    public function getKlantVoornaam()
    {
        return $this->klantVoornaam;
    }

    /**
     * @param mixed $klantVoornaam
     */
    public function setKlantVoornaam($klantVoornaam)
    {
        $this->klantVoornaam = $klantVoornaam;
    }

    /**
     * @return mixed
     */
    public function getKlantPostcode()
    {
        return $this->klantPostcode;
    }

    /**
     * @param mixed $klantPostcode
     */
    public function setKlantPostcode($klantPostcode)
    {
        $this->klantPostcode = $klantPostcode;
    }

    /**
     * @return mixed
     */
    public function getKlantGemeente()
    {
        return $this->klantGemeente;
    }

    /**
     * @param mixed $klantGemeente
     */
    public function setKlantGemeente($klantGemeente)
    {
        $this->klantGemeente = $klantGemeente;
    }

    /**
     * @return mixed
     */
    public function getKlantStraat()
    {
        return $this->klantStraat;
    }

    /**
     * @param mixed $klantStraat
     */
    public function setKlantStraat($klantStraat)
    {
        $this->klantStraat = $klantStraat;
    }

    /**
     * @return mixed
     */
    public function getKlantHuisnummer()
    {
        return $this->klantHuisnummer;
    }

    /**
     * @param mixed $klantHuisnummer
     */
    public function setKlantHuisnummer($klantHuisnummer)
    {
        $this->klantHuisnummer = $klantHuisnummer;
    }

    /**
     * @return mixed
     */
    public function getKlantTelefoonnummer()
    {
        return $this->klantTelefoonnummer;
    }

    /**
     * @param mixed $klantTelefoonnummer
     */
    public function setKlantTelefoonnummer($klantTelefoonnummer)
    {
        $this->klantTelefoonnummer = $klantTelefoonnummer;
    }

    /**
     * @return mixed
     */
    public function getKlantGsmNummer()
    {
        return $this->klantGsmNummer;
    }

    /**
     * @param mixed $klantGsmNummer
     */
    public function setKlantGsmNummer($klantGsmNummer)
    {
        $this->klantGsmNummer = $klantGsmNummer;
    }

    /**
     * @return mixed
     */
    public function getKlantEmailadres()
    {
        return $this->klantEmailadres;
    }

    /**
     * @param mixed $klantEmailadres
     */
    public function setKlantEmailadres($klantEmailadres)
    {
        $this->klantEmailadres = $klantEmailadres;
    }

    /**
     * @return mixed
     */
    public function getGetekendeOfferte()
    {
        return $this->getekendeOfferte;
    }

    /**
     * @param mixed $getekendeOfferte
     */
    public function setGetekendeOfferte($getekendeOfferte)
    {
        $this->getekendeOfferte = $getekendeOfferte;
    }

    /**
     * @return mixed
     */
    public function getGetekendContract()
    {
        return $this->getekendContract;
    }

    /**
     * @param mixed $getekendContract
     */
    public function setGetekendContract($getekendContract)
    {
        $this->getekendContract = $getekendContract;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
    }




}

?>