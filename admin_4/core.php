<?php

class core{

    public $host=HOST;
    public $user=USER;
    public $pass=PAS;
    public $name=DB_NAME;

    public $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(){
        $this->link=new mysqli($this->host,$this->user,$this->pass,$this->name);
    }
    public function insert($query){
        $insert=$this->link->query($query);
        if ($insert)

        {
          header("location:home.php?insert=your post inserted!");
        }
        else
        {
            echo 'post did not inserted';
        }
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
    public function update($query){
        $update=$this->link->query($query);
        if ($update)
        {
            header("location:home.php?update=your post updated!");
        }
        else
        {
            echo 'post did not updated';
        }
    }
    public function delete($query){
        $delete=$this->link->query($query);
        if ($delete)
        {
            header("location:home.php?delete=your post deleted!");
        }
        else
        {
            echo 'post did not deleted';
        }
    }
}
