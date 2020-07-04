<html>
<head></head>
<?php
    include "entete.php";

    if(isset($_POST['connexion'])){
        $cin = $_POST['cin'];
       
        
        $test = $conn->query("SELECT * FROM demande WHERE cin = '$cin'");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
            $_SESSION['cin'] = $fetch['cin'];
            header("Location: annuler_demande.php");
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
                    <input type="number" placeholder="CIN" name="cin" size="8" required/>
                    <input type="submit" name="connexion" value="connexion"/>
                </form>
            </div>
        </td>
       
    </tr>
</table>
</body>
</html>