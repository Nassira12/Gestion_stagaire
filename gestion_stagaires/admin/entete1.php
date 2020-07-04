<?php 

    session_start();
    $conn = mysqli_connect("localhost", "root", "", "stage");

?>
<html>
    <head>
        <title>Titre de la page</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
   <ul id="menu">
        <li><a href="acceuil.php">Acceuil</a></li>
        <li><a href="contact.php">Contact</a></li>
		<div align="center"><img src="img\tunisie_telecome.jpg"width="4%"></img></div>
</ul>

    </body>
</html>
