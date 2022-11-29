<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
}

body {
    color: #707070;
    font-family: "Helvetica Neue", Arial, sans-serif;
}

a {
    color: #707070;
    text-decoration: none;
}

.wrapper {
    max-width: 800px;
    margin: 40px auto;
}

header .profile{
   
    
    margin-bottom: 24px;
}

header .profile img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-left: 300px ;
    object-fit: cover;
}
h2 a{
    list-style: none;
}

header .profile .details {
    margin-left: 75px;
}
header .profile h1 {
    font-size: 4.5em;
    font-weight: lighter;
}

header .profile .details .role {
    background-color: #4595F4;
    color: #fff;
    padding: 7px 15px;
    border-radius: 10px;
    margin-left: 20px;
} 

header .bio p {
    margin-bottom: 20px;
}

header .bio .contact {
    display: flex;
    justify-content: space-between;
    
}

header .bio a {
    color: #4595F4;
    text-decoration: underline;
}

header {
    margin-bottom: 24px;
}

section {
    margin-bottom: 24px;
}
    </style>
 </head>
 <body>
 <div class="wrapper">
        <header>
            <div class="profile">
                <img src="images/descartes.jpg" alt="Descartes's profile" class="avatar">
                <div class="details">
                    <h1>Desacartes bambu</h1>
                    <div class="mail-role">
                        <a href="mailto:me@mail.com" class="mail">descartesbambu@gmail.com</a>
                        <span class="role" id="role">Développeur</span>
                    </div>
                </div>
                
            </div>
            <h2><a href="../sessionindex.php">Déconnection</a></h2>
 </body>
 </html>