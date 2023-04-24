<?php
    session_start();
    $page_name = "Home";
    $page_url = "./controller/home.php";
    $role = $_SESSION['accountType'] ?? '';
    if(isset($_GET['page']) && isset($_GET['page'])!=""){
        $page_name = ucfirst($_GET['page']);
        $page_url = "./controller/".$_GET['page'].".php";
        if(!file_exists($page_url)){
            $page_url = "./controller/home.php";
        }
    }
    if($page_url == "./controller/activate.php"){
        include_once($page_url);
    }
    else{
        include_once("./view/header.php");
        include_once($page_url);
        include_once("./view/footer.php");
    }
?>