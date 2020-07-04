<?php
    include "entete.php";

    
 

    if(isset($_POST['modifier'])){
        $cin=$_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin_modif = $_POST['cin_modif'];
        $specialite = $_POST['specialite'];
		$date_debut = $_POST['date_debut'];	
        $date_fin = $_POST['date_fin'];  		
		$institut = $_POST['institut'];
		$type_stage = $_POST['type_stage'];
       
        $conn->query("UPDATE demande SET nom = '$nom', prenom = '$prenom',cin= '$cin_modif',specialite= '$specialite',date_debut= '$date_debut',date_fin= '$date_fin',
		 institut= '$institut',type_stage= '$type_stage' WHERE cin= '$cin'");
        echo "<span class='success'>Demande modifier avec success</span>";
   
    }
?>
<div class="form centrer">
    <form method="post">
       <h2>modifier demande</h2>
	     <input type="number" placeholder="Cin ancienne" name="cin" size="8"required/>
        <input type="text" placeholder="Nom a modifier" name="nom" value="" required/>
        <input type="text" placeholder="Prenom a modifier" name="prenom" value="" required/>
        <input type="number" placeholder="Cin a modifier" name="cin_modif" size="8"required/>
		<input type="text" placeholder="specialite a modifier" name="specialite" value="" required/>
	    <p>Date début stage	<input type="date" placeholder="Date debut de stage" name="date_debut"  required/></p>
	    <p>Date fin stage	<input type="date" placeholder="date fin de stage" name="date_fin"  required/></p>
		<input type="text" placeholder="Institut" name="institut" value="" required/>
		<input type="text" placeholder="Type de stage" name="type_stage" value="" required/>
        <input type="submit" name="modifier" value="modifier"/>
    </form>
</div>