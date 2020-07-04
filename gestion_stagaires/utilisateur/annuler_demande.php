<?php 
include'page.php'; 

 
if (isset($cin) AND !(empty($cin)))
{$cin = $_POST['cin'];
     
    $sql = "DELETE FROM demande WHERE cin=$cin";
 
if ($conn->query($sql) === TRUE) {
    echo "<span class='success'>Demande deleted successfully</span>";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
 
?>
   