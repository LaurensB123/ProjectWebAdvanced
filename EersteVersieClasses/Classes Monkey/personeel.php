<?php

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 3/05/2017
 * Time: 15:04
 */
class personeel
{
private $id;
private $naamPersoneelsLid;
private $rolPersoneelsLid;

 function __construct()
 {
     this.$this->id;
     this.$this->naamPersoneelsLid;
     this.$this->rolPersoneelsLid;
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
    public function getNaamPersoneelsLid()
    {
        return $this->naamPersoneelsLid;
    }

    /**
     * @param mixed $naamPersoneelsLid
     */
    public function setNaamPersoneelsLid($naamPersoneelsLid)
    {
        $this->naamPersoneelsLid = $naamPersoneelsLid;
    }

    /**
     * @return mixed
     */
    public function getRolPersoneelsLid()
    {
        return $this->rolPersoneelsLid;
    }

    /**
     * @param mixed $rolPersoneelsLid
     */
    public function setRolPersoneelsLid($rolPersoneelsLid)
    {
        $this->rolPersoneelsLid = $rolPersoneelsLid;
    }

}