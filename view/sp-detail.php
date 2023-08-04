
        
    <!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from xpressrow.com/html/cafena/cafena/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 08:03:09 GMT -->
<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Cafena - Coffee Shop HTML5 Template</title>


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
<style>
    .navbar{
        margin-bottom: 0;
        margin-top: 5px;
    }
    .navbar a{
        text-decoration: none;
    }
    .footer-box a{
        text-decoration: none;
    }
    .box-title{
        display: none;
    }
    .product-details__content h3,.text{
        position: absolute;
        margin-bottom: 15px;
    }
    .site-btn{
        margin-top: 35px;
    }
    .text{
        text-align: left;

    }
</style>
</head>

<body>
    
    <main>
        

        <!-- product popup start -->
       
        <!-- product popup end -->

        <!-- product details area start -->
        <div class="product-details__area pt-120 pb-110">
            <div class="container">
                <div class="row">
                <?php

extract($one_prod);

?>
                    <div class="col-xl-6">
                        <div class="product-details__wrapper">
                            <div class="pd-img">
                                <div class="tab-content" id="">
                                <?php
                                $img =  $img_path.$hinh;
                                echo '<div class="product-image"><img style="padding:40px" src="'.$img.'" alt=""></div>'.'<br>';
                            ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6">
                        <div class="product-details__content">
                        
                            <div class="tr-wrapper d-flex align-items-center justify-content-between">
                                <h2 style="" class="title"><?=$te_hh?></h2>
                                
                            </div>
                            <?php
                            echo '<h3><strong>Giá:</strong> '.$don_gia.'[VND]</h3>';
                            echo"<br>";
                            echo '<p class ="text">'.$chi_tiet.'</p>';
                            echo "<br>";
                            echo ' <div class="product-quantity d-flex align-items-center">
                            <form action="index.php?act=addCART" method="post">
                            <input type="hidden" name="id" value="'.$ma_hh.'">
                                  <input type="hidden" name="tensp" value="'.$te_hh.'">
                                  <input type="hidden" name="anh" value="'.$hinh.'">
                                  <input type="hidden" name="gia" value="'.$don_gia.'">
                            <input  class="site-btn" type="submit" name="addCART" value="Thêm vào giỏ hàng">
                            </form>
                            </div>';
                            
                            ?>

                            
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!-- product details area end -->

        <!-- product info start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pinfo-tab">
                        <nav>
                            <div class="nav d-flex align-items-center justify-content-center" id="pinfo-tab" role="tablist">
                                <a class="nav-link active" id="pinfo-1-tab" data-bs-toggle="tab" href="#pinfo-1" role="tab" aria-controls="pinfo-1" aria-selected="true">
                                    Mô Tả Sản Phẩm
                                </a>
                                <a class="nav-link" id="pinfo-2-tab" data-bs-toggle="tab" href="#pinfo-2" role="tab" aria-controls="pinfo-2" aria-selected="true">
                                    additional imformation
                                </a>
                                <a class="nav-link" id="pinfo-3-tab" data-bs-toggle="tab" href="#pinfo-3" role="tab" aria-controls="pinfo-3" aria-selected="true">
                                    Bình Luận
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content pinfo-content" id="pinfoContent">
                        <div class="tab-pane fade show active" id="pinfo-1" role="tabpanel" aria-labelledby="pinfo-1-tab">
                          <?php
                          echo '<p>'.$mo_ta.'</p>';
                          ?>
                        </div>
                        <div class="tab-pane fade" id="pinfo-2" role="tabpanel" aria-labelledby="pinfo-2-tab">
                            <ul class="adi-info list-unstyled mb-0">
                                <li>Weight</li>
                                <li>1.4 oz</li>
                                <li>Dimensions</li>
                                <li>62 × 56 × 12 in</li>
                                <li>Size</li>
                                <li>XL, XXL, LG, SM, MD</li>
                                <li>Fabric</li>
                                <li>Cotton, Silk &amp; Synthetic</li>
                                <li>Warranty</li>
                                <li>3 Months</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pinfo-3" role="tabpanel" aria-labelledby="pinfo-3-tab">
                            <div class="pp-comments">

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                            </div>
                                <script>
                                $(document).ready(function(){

                                $("#binhluan").load("view/binhluanform.php", {idprod:<?=$ma_hh?>});
                                });

                                </script>
                                <div class="row" id="binhluan">


                                </div>
                  
                          </div>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product info end -->

        <!-- releted products area start -->
        <div class="releted-product__area pt-100 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="rp-title mb-30">
                            Reletad Product
                        </h2>
                    </div>
                </div>
                <div class="row mt-none-30">
                   
                    
                    
                    
                          
                            <?php
                                    foreach ($spkhac as $same_kind) {
                                      extract($same_kind);
                                      
                                      $img =  $img_path.$hinh;
                                
                                      $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;
                                    
                                      echo '<div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                      <div class="pp__item pp__item--2 text-center pt-20 pb-20">
                                      <div style="min-height: 300px;" class="pp__thumb pp__thumb--2 mt-35">
                                      <a href="'.$link_sp.'"><img style="height:280px;padding:30px"; src="'.$img.'" alt=""></a>
                                      </div>
                                      <h4 class="pp__title pp__title--2">
                                      <a href="'.$link_sp.'">'.$te_hh.'</a>
                                      </h4>
                                    <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price">"'.$don_gia.'"</span>
                                    </div>
                                    </div>
                                    </div>
                                      ';
                                    }

                                ?>
                                
                                </div>

                                </div>

                </div>
            </div>
        </div>
        <!-- releted products area end -->

    </main>
</body>


<!-- Mirrored from xpressrow.com/html/cafena/cafena/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 08:03:09 GMT -->
</html>