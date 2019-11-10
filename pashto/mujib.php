<?php

class mujib{

    public $host=DB_HOST;
    public $user=DB_USER;
    public $pass=DB_PASS;
    public $db=DB_NAME;

    public $link;
    public function __construct()
    {
        $this->connect();

    }

    private function connect(){

        $this->link=new mysqli($this->host,$this->user,$this->pass,$this->db);
    }

    public function select($query){

        $result=$this->link->query($query);
        if ($result->num_rows>0)
        {
           return $result;
        }
        else
        {
            return false;
        }
    }
    public function insert($query)
    {
     $in=$this->link->query($query);
     if ($in)
     {
         header('location:index.php?msg=success');
     }
     else{
         return false;
     }
    }

}