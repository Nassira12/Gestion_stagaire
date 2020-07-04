<?php
    include "entete.php";

    // supprimer
    if(isset($_GET['supp'])){
        $id = $_GET['supp'];
        $conn->query("DELETE FROM produit WHERE id = $id");
    }


    $id = $_SESSION['login'];

    $select = $conn->query("SELECT * FROM produit p, utilisateur u WHERE p.idUtilisateur = u.id AND u.id = $id");
    while($row = $select->fetch_array()){
        
        $id = $row[0];
        $nomp = $row['nomp'];
        $desc = $row['description'];
        $prix = $row['prix'];
        $qte = $row['quantite'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $tel = $row['tel'];
        $email = $row['email'];
        $image = $row['image'];
        
        echo "
            <div class='produit'>
                <img src='img/$image'/>
               <div class='info'>
                <h2>c</h2>
                <p>$desc</p>
                Prix: <b>$prix DT</b><br>
                Quantite: <b>$qte</b>
               </div>
               <div class='profile'>
                   <a href='modifier.php?id=$id' class='btn'>Modifier</a>
                   <a href='mesproduits.php?supp=$id' class='btn'>Supprimer</a>
               </div>
            </div>
        ";
    }

?>
