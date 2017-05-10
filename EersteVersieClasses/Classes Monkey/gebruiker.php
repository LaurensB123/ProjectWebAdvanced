<?php include Database.inc.php;


/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 10/05/2017
 * Time: 14:47
 */
class gebruiker
{
    private $gebruikersnaam;
    private $wachtwoord;

    function __construct()
    {
        this.$this->gebruikersnaam;
        this.$this->wachtwoord;
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


}