<?php include Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 3/05/2017
 * Time: 15:04
 */
class personeel
{
    private $naam;
    private $adress;
    private $gebruikersnaam;
    private $wachtwoord;
    private $loonkost;

    function __construct()
    {
        this . $this->naam;
        this . $this->adress;
        this . $this->gebruikersnaam;
        this . $this->wachtwoord;
        this . $this->loonkost;
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
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * @param mixed $gebruikersnaam
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    /**
     * @return mixed
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * @param mixed $wachtwoord
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
    }

    /**
     * @return mixed
     */
    public function getLoonkost()
    {
        return $this->loonkost;
    }

    /**
     * @param mixed $loonkost
     */
    public function setLoonkost($loonkost)
    {
        $this->loonkost = $loonkost;
    }

}