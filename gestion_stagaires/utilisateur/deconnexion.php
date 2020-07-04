<?php
    session_start();
    session_destroy();
    header("Location: /gestion_stagaires/acceuil.php");
?>