<?php
 
    $hName='localhost';
    $uName='root';   
    $password='';   
    $dbName = "sound"; 
    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
 
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>