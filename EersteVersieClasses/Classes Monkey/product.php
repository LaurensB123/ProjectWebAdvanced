<?php include Database.inc.php;

/**
 * Created by PhpStorm.
 * User: 11305206
 * Date: 10/05/2017
 * Time: 15:15
 */
class product
{
    private $naamProduct;
    private $prijsProduct;

    function __construct()
    {
        this.$this->naamProduct;
        this.$this->prijsProduct;
    }

    /**
     * @return mixed
     */
    public function getNaamProduct()
    {
        return $this->naamProduct;
    }

    /**
     * @param mixed $naamProduct
     */
    public function setNaamProduct($naamProduct)
    {
        $this->naamProduct = $naamProduct;
    }

    /**
     * @return mixed
     */
    public function getPrijsProduct()
    {
        return $this->prijsProduct;
    }

    /**
     * @param mixed $prijsProduct
     */
    public function setPrijsProduct($prijsProduct)
    {
        $this->prijsProduct = $prijsProduct;
    }



}