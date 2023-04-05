<?php
include('Model/Model.php');
class Controller extends Model{
        public function __construct(){
            parent::__construct();
            echo "constructor";
        }

        public function index(){
            include('View/userdata.php');
        }

        public function create(){
            include('View/userform.php');
            if(isset($_REQUEST['submit'])){
                $data=[
                    "username"=>$_REQUEST['username'],
                    "contact"=>$_REQUEST['contact']
                ];
                echo $this->insert_data("users",$data) ? "Data insert successfully" :"fail";
            }
        }
}




?>