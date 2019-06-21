<?php
class DAO{
	
    static function getConnexion(){
        try{
            $db=new PDO("mysql:host=localhost;dbname=binarymind","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            return $db;
        }catch(EXCEPTION $e){
            die("There's an issue => ".$e->getMessage());
        }
    }
}