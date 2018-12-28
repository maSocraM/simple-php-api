<?php

/**
 * Class Db
 * Connects with the database
 * required: PDO library
 */
class Db
{

    // database connection details
    private $server = "127.0.0.1"; // host
    private $db     = "";          // database name'
    private $user   = "";          // username
    private $pass   = "";          // password

    // variable to get database connection
    public $con = null;


    /**
     * Return database connection
     *
     * @return null|PDO
     */
    public function connect_db() 
    {

        $query_conn = "mysql:host=" . $this->server . "; dbname=" . $this->db . "; charset=utf8";


        try {
            $this->con = new PDO($query_conn, $this->user, $this->pass);
            $this->con->exec("set names utf8");
        }
        catch (PDOException $e) {
            echo "DB Error: " . $e->getMessage();
        }

        return $this->con;

    }

}
