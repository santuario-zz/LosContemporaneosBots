<?php
class Emp {
      public $text = "";
   }

if($_GET['FBName']){
	$userName = $_GET['FBName'];
}else{
	$userName = "usuario";
}
   
	
   $e = new Emp();
   $e->text = "¡Hola " . $userName . "!" ;

   $e1 = new Emp();
   $e1->text = "¡Encantado de conocerte!";
   
   $arraytest = array($e,$e1);
   echo json_encode($arraytest);
?>