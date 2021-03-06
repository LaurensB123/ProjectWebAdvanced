<?php include Database.inc.php;

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

    /**
     * klant constructor.
     * @param $klantNummer
     * @param $klantNaam
     * @param $klantVoornaam
     * @param $klantPostcode
     * @param $klantGemeente
     * @param $klantStraat
     * @param $klantHuisnummer
     * @param $klantTelefoonnummer
     * @param $klantGsmNummer
     * @param $klantEmailadres
     * @param $getekendeOfferte
     * @param $getekendContract
     * @param $project
     */
    public function __construct($klantNummer, $klantNaam, $klantVoornaam, $klantPostcode, $klantGemeente, $klantStraat, $klantHuisnummer, $klantTelefoonnummer, $klantGsmNummer, $klantEmailadres, $getekendeOfferte, $getekendContract,Project $project)
    {
        $this->klantNummer = $klantNummer;
        $this->klantNaam = $klantNaam;
        $this->klantVoornaam = $klantVoornaam;
        $this->klantPostcode = $klantPostcode;
        $this->klantGemeente = $klantGemeente;
        $this->klantStraat = $klantStraat;
        $this->klantHuisnummer = $klantHuisnummer;
        $this->klantTelefoonnummer = $klantTelefoonnummer;
        $this->klantGsmNummer = $klantGsmNummer;
        $this->klantEmailadres = $klantEmailadres;
        $this->getekendeOfferte = $getekendeOfferte;
        $this->getekendContract = $getekendContract;
        $this->project = $project;
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
    public function setProject($project)
    {
        $this->project = $project;
    }




}

?>