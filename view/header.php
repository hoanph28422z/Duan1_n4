<?php
  if(!isset($_SESSION['ho_ten'])){
    header('location:../index.php?act=dangnhap');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="fame/style.css">


    <!-- <link rel="stylesheet" href="show_pro/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="show_pro/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="show_pro/assets/css/lightcase.css">
    <link rel="stylesheet" href="show_pro/assets/css/meanmenu.css">
    <link rel="stylesheet" href="show_pro/assets/css/nice-select.css">
    <link rel="stylesheet" href="show_pro/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="show_pro/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="show_pro/assets/css/main.css"> -->
</head>
<body>
    <header>
        <a href="" class="logo">
            <img src="fame/img/logo.png" alt="">
        </a>
        <i class="bx bx-menu" id="menu-icon"></i>
        <ul class="navbar"> 
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="index.php?act=product">Products</a></li>
            <li><a href="index.php?act=dangnhap">Login</a></li>
        </ul>
        <div class="header-icon">
        <a href="index.php?act=viewcart"><i class="bx bx-cart-alt"></i></a>
            <i class="bx bx-search" id="search-icon"></i>
        <a href="index.php?act=logout"><i class='bx bx-log-out'></i></a>
        </div>
        <div class="search-box">
            <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Search Header">
            </form>
        </div>
        
    </header>   
</body>
