<?php

class DBClass
{

    private $hostname;
    private $userename;
    private $password_DB;
    private $database;

    public function __construct($hostname,$userename,$password_DB,$database){
        $this->hostname=$hostname;
        $this->userename=$userename;
        $this->password_DB=$password_DB;
        $this->database=$database;
    }
    public function dbconnect(){
        return mysqli_connect($this->hostname, $this->userename, $this->password_DB, $this->database);
    }
}