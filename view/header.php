<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="login/style.css">
    <link rel="stylesheet" href="fame/style.css">
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
            <li><a href="#products">Products</a></li>
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
</html>