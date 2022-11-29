<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="GET">
    Username:<input type="text" name="n1" ><br>
   password :<input type="text" name="n2"><br>
  
  
   </form>
   <?php 
  
   $n1=$_POST("n1");
   $n2= $_POST("n2");
   $somme = $n1+$n2;
   ?>
   if(!empty($_POST['n1']) && !empty($_POST['n2'])){
    echo $somme;
   }
   <?php
   <button type="submit">Ok</button>
   ?>
</body>
</html>