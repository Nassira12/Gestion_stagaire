<html>
<head></head>
<?php
    include "entete1.php";

    if(isset($_POST['connexion'])){
        $cin = $_POST['cin'];
        $password = $_POST['password'];
        $test = $conn->query("SELECT * FROM utilisateur WHERE cin = '$cin' AND password = '$password'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['cin'] = $fetch['id'];
            header("Location: ajouter_demande.php");
        }else{
            echo "<span class='erreur'>CIN ou mot de passe incorrecte</span>";
        }
        
    }

    if(isset($_POST['inscription'])){$cin = $_POST['cin'];
	    $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $profession = $_POST['profession'];
		$sexe = $_POST['sexe'];
        $conn->query("INSERT INTO utilisateur VALUES( NULL, '$cin', '$nom', '$prenom', '$email', '$tel', '$password', '$profession', '$sexe')");
        echo "<span class='success'>Inscription avec success</span>";
        
    }

?>
<body>
<table>
    <tr>
        <td valign="top">
            <div class="form">
                <form method="post">
                   <h2>Connexion</h2>
                    <input type="number" placeholder="CIN" name="cin" size="8"  required/>
                    <input type="password" placeholder="Password" name="password" required/>
                    <input type="submit" name="connexion" value="connexion"/>
                </form>
            </div>
        </td>
        <td valign="top">
            <div class="form">
                <form method="post">
                   <h2>Inscription etudiant</h2>
				    <input type="number" placeholder="cin" name="cin"  size="8" required/>
                    <input type="text" placeholder="Nom" name="nom" required/>
                    <input type="text" placeholder="Prenom" name="prenom" required/>
                    <input type="number" placeholder="Telephone" name="tel"size="8" required/>
                    <input type="email" placeholder="Email" name="email" required/>
                    <input type="password" placeholder="Password" name="password" required/>
					<input type="text" placeholder="etudiant" name="profession" value="etudiant"required/>
					<label><input type="radio" name="sexe" value="femme"required/> Femme</label>
                   <label> <input type="radio" name="sexe" value="homme" required/> Homme</label><br>
                    <input type="submit" name="inscription" value="Inscription"/>
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>