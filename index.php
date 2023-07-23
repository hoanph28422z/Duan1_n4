<?php

    session_start();

    include_once "./model/pdo.php";
    include_once "./model/sanpham.php";
    include_once "./model/loai.php";
    include_once "./model/taikhoan.php";
    include_once "./model/viewcart.php";
    include_once "./view/header.php";
    include_once "global.php";



    if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart'])) {
       $_SESSION['mycart'] =[];
    }

    $spnews = selectall_prod_home();
    $dsdm = selectall_cate();
    $dstop10 = selectall_prod_top10();

    if (isset($_GET['act']) && ($_GET['act'])  != "") {
        $act = $_GET['act'];

        switch ($act) {

       
        }

        
    }else{
    include_once "./view/home.php";
    }
    include_once "./view/footer.php";


?>