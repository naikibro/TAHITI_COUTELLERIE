<?php

class Product
{
    private $nb_product = 0;
    private $name_product  = "product_name";
    private $type = "product_type";
    private $price = 0;

    function __construct()
    {
        $this->nb_product = 0;
        $this->name_product = "product_name";
        $this->type = "product_type";
        $this->price = 0;
    }

    // ----- M E T H O D S -------------------------------------------------

    public function add_product()
    {
        $temp = new Connect();
        $temp = $temp->a;

        $temp = $temp->prepare("INSERT INTO `product` (`nb_product`, `name_product`, `type`, `price`) VALUES ('$this->nb_product', '$this->name_product', '$this->type', $this->price); ");
        var_dump($temp);
        $temp->execute();

    }

    public function remove_product_by_nb($nbOfProductToRemove)
    {
        $temp = new Connect();
        $temp = $temp->a;

        $temp = $temp->prepare("DELETE FROM `product` WHERE nb_product = $nbOfProductToRemove;");
        $temp->execute();

    }

    public function remove_product_by_name($nameOfProductToRemove)
    {
        $temp = new Connect();
        $temp = $temp->a;

        $sqlQuery = "DELETE FROM `product` WHERE name_product = `$nameOfProductToRemove`;";

        $temp = $temp->prepare($sqlQuery);
        $temp->execute();

    }

    public function get_all_values_from_vue($vueName)
    {
        $temp = new Connect();
        $temp = $temp->a;

        $temp = $temp->prepare("SELECT * FROM $vueName;");
        $temp->execute();

        $res = [];
        $i = 0;
        foreach ($temp as $row)
        {
            $res[$i] = $row;
            $i++;
        }
        
        return $res;
    }
    
    public function get_select_vue_from_list($list, $name)
    {
        $res = "<select name='$name' id='$name'>";
        
        
        foreach ($list as $row)
        {
            $tmp = $row["type"];
            $res .= "<option label='$tmp' value='$tmp'>$tmp</option>";
        }

        $res .= "</select>";

        return $res;
    }

    // ----- I N T E R F A C E S ---------------------------------------------

    public function interface_add_product()
    {
        echo "";
    }

    // ----- SET -----

    /**
     * @param int $nb_product
     */
    public function setNbProduct($nb_product)
    {
        $this->nb_product = $nb_product;
    }

    /**
     * @param string $name_product
     */
    public function setNameProduct($name_product)
    {
        $this->name_product = $name_product;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // ----- G E T -----

    /**
     * @return int
     */
    public function getNbProduct()
    {
        return $this->nb_product;
    }

    /**
     * @return string
     */
    public function getNameProduct()
    {
        return $this->name_product;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

}