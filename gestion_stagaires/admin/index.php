<html>
<head></head>
<?php
    include "entete1.php";

    if(isset($_POST['connexion'])){
        $cin = $_POST['cin'];
        $password = $_POST['password'];
		$profession=$_POST['profession'];
        
        $test = $conn->query("SELECT * FROM admin WHERE cin = '$cin' AND password = '$password' AND profession='admin'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['cin'] = $fetch['id'];
            header("Location: lister_demande.php");
        }else{
            echo "<span class='erreur'>CIN ou mot de passe incorrecte</span>";
        }
        
    }
?>
<body>
<table>
    <tr>
        <td valign="top">
            <div class="form">
                <form method="post">
                   <h2>Connexion</h2>
				   <div align="center">
				   <img src="img/admin.png" width="200px"></img></div>
                    <input type="text" placeholder="cin" name="cin" required/>
                    <input type="password" placeholder="Password" name="password" required/>
                    <input type="submit" name="connexion" value="connexion"/>
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
