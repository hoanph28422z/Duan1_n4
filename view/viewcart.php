<head>

  <!--========= Required meta tags =========-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!--====== Favicon ======-->
  <link rel="shortcut icon" href="show_pro/assets/images/logo/favicon.ico" type="images/x-icon" />

<!--====== CSS Here ======-->
<link rel="stylesheet" href="show_pro/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="show_pro/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="show_pro/assets/css/lightcase.css">
<link rel="stylesheet" href="show_pro/assets/css/meanmenu.css">
<link rel="stylesheet" href="show_pro/assets/css/nice-select.css">
<link rel="stylesheet" href="show_pro/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="show_pro/assets/css/jquery-ui.css">
<link rel="stylesheet" href="show_pro/assets/css/main.css">

</head>

<div style="margin-top: 150px; text-align: center;" class="viewcart">

  <div class="viewcart_once">

    <div class="box-title">
      <h2>GIỎ HÀNG</h2><i class='bx bx-cart-alt bx-tada'></i>
    </div>


    <body>


      <!-- cart area start -->
      <div class="cart-area pt-70 pb-120">
        <!-- <div class="container"> -->
          <div class="row">
            <div class="col-xl-12">
              <div class="cart-wrapper">
                <div class="table-content table-responsive">
                  <table class="table">
                    <thead style="background-color:white;">
                      <tr>
                        <th style="color:#333;" class="">Product ID</th>
                        <th style="color:#333;" class="product-thumbnail">Product Image</th>
                        <th style="color:#333;" class="cart-product-name">Product Name</th>
                        <th style="color:#333;" class="product-price">Price</th>
                        <th style="color:#333;" class="product-quantity">Quantity</th>
                        <th style="color:#333;" class="product-subtotal">subTotal</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $tongtien = 0;

                      foreach ($_SESSION['mycart'] as $id => $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = intval($cart[3]) * intval($cart[4]);

                        $html = "
          ";
                        $tongtien = $tongtien + $ttien;
                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $id . '"><i class="bx bx-message-alt-x"></i></a>';
                        echo "
              <tr>
              
                  <td> $id </td>
                  <td class=\"product-thumbnail\"><img class=\"img\" src=\"$hinh\" alt=\"\" width=\"98%\" height=\"100px; padding-top: 3px;\"></td>
                  <td class=\"product-name\"> $cart[1] </td>
                  <td class=\"product-price\"> $cart[3] </td>
                  <td class=\"product-quantity\">
                      <form action=\"index.php?act=updateCart\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" value=\"$id\" />
                        <input type=\"number\" class=\"quantity\" name=\"soluong\" value=\"$cart[4]\" min=\"0\" max=\"100\">
                        <input type=\"submit\" value=\"Update\">
                      </form>
                  </td>
                  <td class=\"product-subtotal\"> $ttien </td>
                  <td> $xoasp </td>
              </tr>
          ";
                      }
                      echo '
        <tr class="sum">
            <td>Total order</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>' . $tongtien . '</td>
            <th></th>
               
            </tr>';



                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="cart-bottom-wrapper d-flex align-items-center">
                <a class="site-btn site-btn__bghide" href="index.php?act=bill"><i class='bx bx-upvote bx-fade-up' ></i>TIẾP TỤC ĐẶT HÀNG</a>
                <a class="site-btn site-btn__bghide" href="index.php?act=delcart"><i class='bx bxs-trash-alt'></i>XÓA GIỎ HÀNG </a>
              </div>
            </div>
          </div>

        
      </div>
      <!-- cart area end -->


  </div>
</div>
