<?php
 function connection(){
     return mysqli_connect("localhost", "root","","lab3aidanakadyrbay");

 }
 if(isset($_GET['username'])){
     $mysql=connection();
     $statement = $mysql->prepare("insert into user_aidana(FIRST_NAME,EMAIL) values(?,?)");
     $statement->bind_param("ss",$_GET['username'],$_GET['email']);
     $statement->execute();
     echo $_GET['username']."     ".$_GET['email'];
 }
 ?>
