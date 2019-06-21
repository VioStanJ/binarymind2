<?php
	session_start();
	
  require 'DAO/dao.php';
  include_once 'models/Tools.php';

  $bdd = DAO::getConnexion();		
  global $bdd; 
	if(!empty($_GET['page']) && is_file($_GET['page'].'.php')){
      include $_GET['page'].'.php';
	}else{
		include 'sign.php';
	}
	
?>