<?php
    include "entete.php";

    if(isset($_POST['ajouter'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cin'];
        $specialite = $_POST['specialite'];
		$date_debut = $_POST['date_debut'];
		$date_fin = $_POST['date_fin'];
		$institut = $_POST['institut'];
		$type_stage = $_POST['type_stage'];
        $id= $_SESSION['cin'];
        $conn->query("INSERT INTO demande VALUES( NULL, '$nom', '$prenom', '$cin', '$specialite', '$date_debut', '$date_fin', '$institut', '$type_stage')");
        echo "<span class='success'>Demande ajouté avec success</span>";
        
    }


?>
<div class="form centrer">
    <form method="post" enctype="multipart/form-data">
       <h2>ajouter demande stage</h2>
        <input type="text" placeholder="Nom" name="nom" required/>
	    <input type="text" placeholder="Prenom" name="prenom" required/>
		<input type="number" placeholder="cin" name="cin" size="8"required/>
		 <input type="text" placeholder="specialite" name="specialite" required/>
		 <p>Date Début Stage <input type="date" name="date_debut"required/> <p> 
         <p>Date Fin stage<input type="date" name="date_fin"required/><p>
		 <select name="institut"required/>
          <option value="Université de Tunis">Université de Tunis</option>
          <option value="Université de Tunis El Manar">Université de Tunis El Manar </option>
          <option value="Université de Carthage">Université de Carthage</option>
          <option value="Université de Sousse">Université de Sousse</option>
		  <option value="Université de Sfax">Université de Sfax</option>
		  <option value="Université de la Manouba">Université de la Manouba</option>
		  <option value="Université de Monastir">Université de Monastir</option>
		  <option value="Université Ez-Zitouna">Université Ez-Zitouna</option>
		  <option value="Université virtuelle">Université virtuelle </option>
		  <option value="Université de Gafsa">Université de Gafsa</option>
		  <option value="Instituts Supérieurs des Etudes Technologiques (ISET)"> Instituts Supérieurs des Etudes Technologiques (ISET)</option>
		  <option value="Université de Jendouba">Université de Jendouba </option>
		   <option value="Université de Kairouan">Université de Kairouan</option>
	      <option value="Université de Gabès">Université de Gabès </option>
		  <option value="Université Privés">Université Privés</option>
	
         </select><br>
<p> <input type="checkbox" name="type_stage"value="initiation(1mois)" required/>Stage d'initiation(pratique et obligatoire)- 1 mois</p><br>
<p> <input type="checkbox" name="type_stage"value="perfectionnement (1mois)"required/>Stage technicien(pratique et obligatoire)- 1 mois</p><br>
 <p><input type="checkbox" name="type_stage"value="PFE (15 semaines)" required/>Stage de fin d'études(pratique et obligatoire)- 15 semaines</p><br>
 
        <input type="submit" name="ajouter" value="ajouter"/>
    </form>
</div>