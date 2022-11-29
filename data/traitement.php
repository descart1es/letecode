<?php 
session_start()

$method = $_SERVER ['REQUEST_METHOD'];
$username = 'descartes';
$password = 12345;



if($method == "POST"){
    if(isset($_POST['username']) && isset($_POST['password'])){
     if($_POST['username'] == $username and $_POST['password'] == $password){
         echo "successfully connected";

         $_SESSION['username'] == $username;
         $_SESSION ['password'] == md5($password);
         $_SESSION['LOGGEDIN'] == true; 

         //echo '<div><a href= "../sessionindex.php">Retour à la page<a>';
         //header('Location: ../sessionindex.php');

     }else{
        echo "your are not connected";
     }
    
}else{
    echo "Entrez tout les champs";
   }
}


 ?>
 