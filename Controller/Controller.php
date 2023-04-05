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
        }
}




?>