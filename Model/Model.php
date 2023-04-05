<?php
class Model{

    public  $connection;
    public function  __construct(){
        echo "parent class";
        $this->connection = new mysqli("localhost","root","","mvc");
    }

    public function insert_data($table,$data){
        $key=implode(",",array_keys($data));
        $val=implode("','",array_values($data));
        $query="insert into $table($key)values('$val')";
        if($this->connection->query($query)){
            return true;
        }
        else{
            return false;
        }
    }
}
?>