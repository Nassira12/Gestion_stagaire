<?php
 
  
	 /* $mysqli = new mysqli('localhost', 'root','' , 'stage');
	$mysqli->set_charset("utf8");
    $select = $conn->query("SELECT cin FROM demande  where cin=$cin");
     $resultcount=mysqli_num_rows($select);
     
		if(($resultcount)>0){
		while($row =mysqli_fetch_array($select)){
        
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $cin = $row['cin'];*/
     
                echo "
           <html>
<head>
<title></title>
 <link rel='stylesheet' href='style_imprimer.css'>
</head>
<body class='b'>
<div class='photos'>
<img src='img/tunisie_telecome.jpg'></img></div>
<div class='st'>
<h2><div class='titre'>Réponse de demande de stage au sein de la Tunisie Télécom</div></h2><br>
<p>Madame/Mademoiselle/Monsieur, $nom intitulaire de N°CIN $cin <br>
Je fais suite à notre entretien  pour le poste de stagiaire au sein de notre entreprise. Par la présente, j'ai le plaisir de vous annoncer que votre candidature a été retenue.
Comme convenu avec vous, ce stage, d'une durée de (X) mois, commencera le (date de début) et finira le (date de fin). </p>
<table>
<tr>
<td class='st'><h2>Nom de l'entreprise d'acceuil :</h2></td>
<td class='st'><h3>Tunisie Télécom</h3> </td>
 <tr>
<td class='st'><h2>Adresse :</h2></td>
<td class='st'><h3>Avenue Habib Bourgiba 8100</h3> </td>
<tr>
<td class='st'><h2>Tél :</h2></td>
<td class='st'><h3> 78602201</h3> </td>
<tr>
<td class='st'><h2>Nom du Responsable de stage :</h2></td>
<td class='st'><h3>Nouri Mahmoud</h3> </td>
</tr></table>
<table align='right'>
<tr>
<td class='st' ><h2>Signature responsable et cache :</h2></td></tr>
<tr>
<td class='st'align='center'><h3>.</h3> </td></tr>
</div>

        "; 
		//}}

?>

