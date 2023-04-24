<?php
    if(isset($_SESSION['accountType']) && !empty($_SESSION['accountType'])){
        header("Location: index.php");
    }
    include_once("./view/login.php");
?>