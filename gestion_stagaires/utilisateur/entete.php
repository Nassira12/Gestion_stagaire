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
        <li>
                <a href="demande_stage.php">Demande stage</a>
                <ul>
                        <li><a href="ajouter_demande.php">Ajouter demande</a></li>
                        <li><a href="modifier_demande.php">Modifier  demande</a></li>
                        <li><a href="annuler_demande.php">Annuler demande</a></li>
                        <li><a href="consulter_demande.php">Consulter demande</a></li>
                </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="deconnexion.php">Logout</a></li>
		<div align="center"><img src="img\tunisie_telecome.jpg"width="4%"></img></div>
</ul>

    </body>
</html>
