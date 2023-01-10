<?php

class Connect
{
    public $a = null;

    const DBNAME =  "mysql:host=localhost;dbname=Knife";
    const USERNAME =  "root";
    const PASSWORD =  "";

    function __construct()
    {
        $this->a = new PDO(Connect::DBNAME, Connect::USERNAME, Connect::PASSWORD);

    }

    public function display_full_table($tablename)
    {
        $a = new PDO(Connect::DBNAME, Connect::USERNAME, Connect::PASSWORD);

        $a = $a->prepare("select * from $tablename;");
        $a->execute();

        foreach ($a as $row)
        {
            echo $row['nb_product'];
            echo " | ";
            echo $row['name_product'];
            echo " | ";
            echo $row['type'];
            echo " | ";
            echo $row['price'];
            echo "<hr/>";
            echo "<br/>";
        }
    }

}

?>
