<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Document</title>
    
    
</head>
<body>
  <div class="container">
   <div class="w-75 m-auto">
    <?php
    if(isset($_SESSION['LOGGEDIN']) and $_SESSION('LOGGEDIN') == true){
      ?>
      <div class="border">
        <span class="p-2 m-3 text-sucess">Vous etes connecté</span>
      <h1>Bonjour <?php echo $_SESSION['username'] ; ?></h1>
        <a href="">Déconnexion</a>
    </div>
    <?php
    }else{
       ?>
       <form action="data/traitement.php" class="mt-2" method="POST" >
      <h1>Connexion</h1>
        Username<input type="text" class="form-control" name="username"></input><br>
        Password<input type="password" class="form-control" name="password"></input><br>
        <button type="submit" class="btn btn-primary">envoyer</button><br>
    </form>
    <?php
    }
    
   
    ?>
   </div>
    
  </div>
 
</body>
</html>