<?php

/**
 * Class Transactions
 * Model from transactions table
 */
class Transactions {

    private $con;
    private $table_name = "coordinates";

    public $id;
    public $latitude;
    public $longitude;

    /**
     * Transactions constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->con = $db;
    }

    /**
     * Return randomic (20) transactions
     * @return mixed|null|string|void
     */
    public function get_transactions() {

        $retorno = null;

        $query = sprintf("SELECT latitude, longitude FROM %s WHERE latitude <> '' ORDER BY RAND() LIMIT 15", $this->table_name); ;

        $con = $this->con->prepare($query);

        $res = $con->execute();

        if($res) {
            $retorno = json_encode($con->fetchAll(PDO::FETCH_ASSOC));
        }

        return $retorno;

    }

}