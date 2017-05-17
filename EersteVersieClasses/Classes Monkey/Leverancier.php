<?php include Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 10/05/2017
 * Time: 14:31
 */
class Leverancier {
 private $nummer;
 private $naam;
 private $postcode;
 private $gemeente;
 private $straat;
 private $huisnr;
 private $telefoonnr;
 private $gsmnr;
 private $email;
 private $type;

    /**
     * Leverancier constructor.
     * @param $nummer
     * @param $naam
     * @param $postcode
     * @param $gemeente
     * @param $straat
     * @param $huisnr
     * @param $telefoonnr
     * @param $gsmnr
     * @param $email
     * @param $type
     */
    public function __construct($nummer, $naam, $postcode, $gemeente, $straat, $huisnr, $telefoonnr, $gsmnr, $email, $type)
    {
        $this->nummer = $nummer;
        $this->naam = $naam;
        $this->postcode = $postcode;
        $this->gemeente = $gemeente;
        $this->straat = $straat;
        $this->huisnr = $huisnr;
        $this->telefoonnr = $telefoonnr;
        $this->gsmnr = $gsmnr;
        $this->email = $email;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * @param mixed $nummer
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;
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
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getGemeente()
    {
        return $this->gemeente;
    }

    /**
     * @param mixed $gemeente
     */
    public function setGemeente($gemeente)
    {
        $this->gemeente = $gemeente;
    }

    /**
     * @return mixed
     */
    public function getStraat()
    {
        return $this->straat;
    }

    /**
     * @param mixed $straat
     */
    public function setStraat($straat)
    {
        $this->straat = $straat;
    }

    /**
     * @return mixed
     */
    public function getHuisnr()
    {
        return $this->huisnr;
    }

    /**
     * @param mixed $huisnr
     */
    public function setHuisnr($huisnr)
    {
        $this->huisnr = $huisnr;
    }

    /**
     * @return mixed
     */
    public function getTelefoonnr()
    {
        return $this->telefoonnr;
    }

    /**
     * @param mixed $telefoonnr
     */
    public function setTelefoonnr($telefoonnr)
    {
        $this->telefoonnr = $telefoonnr;
    }

    /**
     * @return mixed
     */
    public function getGsmnr()
    {
        return $this->gsmnr;
    }

    /**
     * @param mixed $gsmnr
     */
    public function setGsmnr($gsmnr)
    {
        $this->gsmnr = $gsmnr;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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


}


