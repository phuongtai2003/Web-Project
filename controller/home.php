<?php
    if($role == "admin"){
        include_once("./view/company_home.php");
    }
    else{
        include_once('./view/home.php');
    }
?>