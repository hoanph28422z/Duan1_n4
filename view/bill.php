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
<style>
  div{
    font-family:Roboto;
  }
</style>
<div class="box-left">

  <form action="index.php?act=billconfirm" method="post" class="billform">

    <div   class="box-title"><h2>THÔNG TIN ĐẶT HÀNG</h2></div>

    <div class="row box-content margin-bottom">
      <table>

        <?php

        if (isset($_SESSION['info_user'])) {
          $person = $_SESSION['info_user']['ho_ten'];
          $email = $_SESSION['info_user']['email'];
          $que_quan = $_SESSION['info_user']['que_quan'];
          $sdt = $_SESSION['info_user']['sdt'];
        } else {
          $person = "";
          $email = "";
          $que_quan = "";
          $sdt = "";
        }


        ?>


        <tr>
          <td>Người đặt hàng</td>
          <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;" type="text" name="person" id="" value="<?= $person ?>"></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;" type="text" name="email" id="" value="<?= $email ?>"></td>
        </tr>
        <tr>
          <td>Quê Quán</td>
          <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;" type="text" name="que_quan" id="" value="<?= $que_quan ?>"></td>
        </tr>
        <tr>
          <td>Số Điện Thoại</td>
          <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;" type="text" name="sdt" id="" value="<?= $sdt ?>"></td>
        </tr>
      </table>
    </div>




    <div style=" text-align: center;" class="viewcart">

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

        echo '

        <tr>
        
           <td>'.$id.'</td>
           <td class="product-thumbnail"><img class="img" src="'.$hinh.'"></td>
           <td class="product-name">'.$cart[1].'</td>
           <td class="product-price">'.$cart[3].'</td>
           <td class="product-quantity">'.$cart[4].'</td>
           <td class=\"product-subtotal\">'.$ttien.'</td>

       </tr>';
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

              </div>
            </div>


          </div>
          <!-- cart area end -->


      </div>
    </div>

    <a href="index.php?act=billconfirm"><input type="submit" style="padding: 5px 10px; margin-bottom:40px; margin-right: 15px;" name="dongydathang" value="Đồng ý đặt hàng"><i class='bx bxs-check-circle bx-tada' ></i></a>




  </form>
</div>


<style>
  input[type="submit"] {
    border: none;
    border-radius: 0px;
    color: #000;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0px;
    background-color: transparent;
  }

  input[type="submit"]:hover {
    background-color:seagreen;
    /* màu nền khi hover */
    color: white;
    /* màu chữ khi hover */
    border-radius: 5px;
  }

  .box-left {
    margin-top: 100px;
    text-align: center;
  }

  table tbody tr td {
    padding: 20px 70px;
    vertical-align: middle;

  }
  
</style>
</div>