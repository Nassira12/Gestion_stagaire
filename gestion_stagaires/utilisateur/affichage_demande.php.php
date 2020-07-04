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
		
		 
		$mysqli = new mysqli('localhost', 'root','' , 'stage');
		$mysqli->set_charset("utf8");
		$cin=$_SESSION['cin'];
		$requete = 'SELECT * FROM demande where cin=$cin';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			?>
		
			<tr>
			<td><?php echo $ligne['nom'];?></td>
			<td><?php echo $ligne['prenom'];?></td>
			<td><?php echo $ligne['cin'];?></td>
			<td><?php echo $ligne['specialite'];?></td>
			<td><?php echo $ligne['date_debut'];?></td>
			<td><?php echo $ligne['date_fin'];?></td>
			<td><?php echo $ligne['institut'];?></td>
			<td><?php echo $ligne['type_stage'];?></td>

			<?php		
		}
		$mysqli->close();
		?>
		</table>
	</body> 
</html>