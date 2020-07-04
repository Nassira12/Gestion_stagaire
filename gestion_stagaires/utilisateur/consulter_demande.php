<html>
<head></head>
<?php
    
    include "entete.php";
    
    if(isset($_POST['consulter'])){
        $cin = $_POST['cin'];  
        $test = $conn->query("SELECT cin FROM demande  where cin=$cin");
        if($test->num_rows!=0){
            $fetch = $test->fetch_array();
			
		  session_start();
            $_SESSION['cin'] = $cin;
            header("Location: affichage_demande.php");
        }else{
            echo "<span class='erreur'>CIN introuvable</span>";
        }
    }
		
		
?>
<body>
<table>
    <tr>
        <td valign="top">
            <div class="form">
                <form method="post">
                   <h2>Consulter</h2>
				   <div align="center">
                    <input type="number" placeholder="cin" name="cin"size="8" required/>
                    <input type="submit" name="consulter" value="consulter"/>
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
