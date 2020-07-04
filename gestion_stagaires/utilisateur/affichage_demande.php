
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
	table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
tr {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color: #D0E3FA;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
		</style>
	</head>
	<body>
	
		<h2 align="center">Reponse de demande de stage</h2>
		<table border=1>
			<tr>
			<td><b>Nom</b></td>
			<td><b>Prenom</b></td>
			<td><b>Cin</b></td>
			<td><b>Specialite</b></td>
			<td><b>Date debut stage</b></td>
			<td><b>Date fin stage</b></td>
			<td><b>Institut</b></td>
			<td><b>Type stage</b></td>
			</tr>
			<?php
			
		 if (isset($_POST['cin'])) {
		$mysqli = new mysqli('localhost', 'root','' , 'stage');
		$mysqli->set_charset("utf8");
		$_SESSION['cin']=$cin;
		var_dump($_SESSION);// Affiche le contenu de $_SESSION
		$requete = 'SELECT * FROM demande where cin="var_dump($_SESSION)"';
		$resultcount=mysqli_num_rows($requete);
       
		if(($resultcount)>0){
		while($row =mysqli_fetch_array($requete)){
			  $nom = $row['nom'];
              $prenom = $row['prenom'];
              $cin= $row['cin'];
			  $specialite= $row['specialite'];
			  $date_debut= $row['date_debut'];
			  $date_fin= $row['date_fin'];
			  $institut = $row['institut'];
			  $type_stage = $row['type_stage'];
   
               
			?>
		
			<tr>
			<td><?php echo $nom;?></td>
			<td><?php echo  $prenom;?></td>
			<td><?php echo $cin;?></td>
			<td><?php echo  $date_debut;?></td>
			<td><?php echo  $date_fin;?></td>
			<td><?php echo $institut ;?></td>
			<td><?php echo $type_stage ;?></td>

			<?php		
		 }}}
		//$mysqli->close();
		?>
		
		</table>
		<br>
		<table border=1>
			<tr>
			<td><b>CIN</b></td>
			<td><b>Etat</b></td>
			<td><b>Impression demande</b></td>
			</tr>
			<?php
		
		 if (isset($_POST['cin'])) {
		$mysqli = new mysqli('localhost', 'root','' , 'stage');
		$mysqli->set_charset("utf8");
		$cin=$_SESSION['cin'];
		$requete = 'SELECT * FROM etat_demande_stage where cin="'.$_SESSION['cin'].'"';
		$resultcount=mysqli_num_rows($requete);
     
		if(($resultcount)>0){
		while($row =mysqli_fetch_array($requete)){
              $cin= $row['cin'];
			  $etat= $row['etat'];
     
               
			?>
		
			<tr>
			<td><?php echo $cin;?></td>
			<td><?php echo  $etat;?></td>
            <td><?php echo " <a href='imprimer_demande.php>Imprimer</a>";?></td>
			<?php		
		 }}}
		//$mysqli->close();
		
		?>
		</table>
		
	</body> 
</html>