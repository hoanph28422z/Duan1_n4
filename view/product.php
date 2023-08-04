<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
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
    <style>.pp__thumb--2 img{
        width: 100%;
        height: 250px;
        border-radius: 5px;
    }
    .add-to-cart{
        border: none;
        padding: 6px 12px;
        margin-top: 5px;
        border-radius: 50px;
        width: 90%;
        font-weight: 550;
        box-shadow: 1px 1px 10px 2px rgba(24 35 15 /35%);
    }
        .add-to-cart:hover{
            transform: translateY(5px);
            transition: 0.1s all linear;
        }
        .navbar {
            margin-top: 16px;

        }
        .navbar li a{
            text-decoration: none;
            
        }
        .footer-box a{
            text-decoration: none;
        }
        </style>
</head>

<body>
    <div class="product-popup product-popup-1">
        <div class="view-background">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="quickview d-flex align-items-center justify-content-center">
                        <div class="quickview__thumb">
                            <img src="show_pro/assets/images/products/pp-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>VICARAGUA COFFEE BEANS</h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i
                                    class="fal fa-times"></i></a>
                        </div>
                        <div class="viewcontent__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="viewcontent__price">
                            <h4><span>$</span>99.00</h4>
                        </div>
                        <div class="viewcontent__stock">
                            <h4>Available :<span> In stock</span></h4>
                        </div>
                        <div class="viewcontent__details">
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium
                                risus lacinia vel. Fusce eget turpis orci.</p>
                        </div>
                        <div class="viewcontent__action">
                            <span>Qty</span>
                            <input type="number" placeholder="1">
                            <a class="site-btn" href="#">add to cart</a>
                        </div>
                        <div class="viewcontent__footer">
                            <ul class="list-unstyled">
                                <li>Category:</li>
                                <li>SKU:</li>
                                <li>Brand:</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>Watches</li>
                                <li>2584-MK63</li>
                                <li>Brenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product popup end -->

    <!-- blog area start -->
    <div class="blog-area pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30">
                        <div class="sf-left">
                            <div class="show-text">
                                <span>Showing 1–12 of 54 results</span>
                            </div>
                        </div>
                        <div class="sf-right d-flex justify-content-end align-items-center">
                            <nav>
                                <div class="nav" id="shop-filter-tab" role="tablist">
                                    <a class="nav-link active" id="shop-tab-1-tab" data-bs-toggle="tab"
                                        href="#shop-tab-1" role="tab" aria-controls="shop-tab-1" aria-selected="true"><i
                                            class="fas fa-th"></i></a>
                                    <a class="nav-link" id="shop-tab-2-tab" data-bs-toggle="tab" href="#shop-tab-2"
                                        role="tab" aria-controls="shop-tab-2" aria-selected="false"><i
                                            class="fas fa-list-ul"></i></a>
                                </div>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tab-content" id="shop-tabContent">





                        <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel"
                            aria-labelledby="shop-tab-1-tab">
                            <div class="row">

                                <?php
                                                $i =0;
                                                foreach ($spnews as $sp) {
                                                    extract($sp);
                                                    $anh = $img_path.$hinh;
                                                    $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;

                                                    if (($i==2) ||($i==5) ||  ($i==8) ){
                                                        $mr="";
                                                    }else{
                                                        $mr="margin-right";
                                                    }


                                                    echo '  <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                                    <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                                    <div class="pp__thumb pp__thumb--2 mt-35">
                                                    <a href="'.$link_sp.'"> <img style="padding:30px" src="'.$anh.'" alt=""></a>
                                                    </div>
                                                    <div class="pp__content pp__content--2 mt-25">

                                                    <h4 class="pp__title pp__title--2">
                                                    <a href="'.$link_sp.'">'.$te_hh.'</a>
                                                    </h4>
                                                    <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                    <h6 class="label">Price - </h6>
                                                    <span>'.$don_gia.'VND</span>
                                                    </div>
                                                    </div>
                                                    <form action="index.php?act=addCART" method="post">
                                                        <input type="hidden" name="id" value="'.$ma_hh.'">
                                                        <input type="hidden" name="tensp" value="'.$te_hh.'">
                                                        <input type="hidden" name="anh" value="'.$hinh.'">
                                                        <input type="hidden" name="gia" value="'.$don_gia.'">
                                                        <input class="add-to-cart" type="submit" name="addCART" value="Add to Cart">
                                                    </form>
                                                    </div>
                                                    </div>
                                                    ';
                                                    
                                                            $i++;
                                                    }
                                                    ?>



                            </div>
                        </div>








                    </div>

                </div>



                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar blog__sidebar--shop mt-none-30">
                        <div class="widget mt-30">
                            <h2 class="title">Search Here</h2>
                            <form action="index.php?act=sanpham" method="post" class="search-widget">
                                <input type="search" name="kyw" id="search" placeholder="Serach Product">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>


                        <div  class="widget mt-30">
                            <h2 class="title">Categories</h2>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);

                                    $link_dm = "index.php?act=sanpham&iddm=".$ma_loai;

                                    echo '<ul>
                                            <li class="cat-item">
                                             <a style="margin-left:90px" href="'.$link_dm.'">'.$ten_loai.'</a>
                                            </li>
                                        </ul>
                                        ';
                                }
                        ?>
                        </div>


                        <div class="widget mt-30">
                            <h2 class="title">top Product</h2>
                            <div class="recent-posts top-products">

                                <?php
                                        foreach ($dstop10 as $ds) {

                                            extract($ds);

                                            $anh = $img_path.$hinh;
                                            $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;

                                            echo'<div class="item d-flex align-items-center">
                                            <div class="thumb">
                                            <a href="'.$link_sp.'"><img src="'.$anh.'" alt=""></a>
                                                </div>
                                                <div class="content">
                                                <h5 class="rp-title border-effect"><a href="'.$link_sp.'">'.$te_hh.'</a></h5>
                                                </div>
                                                </div> ';   
                                        }
                                            ?>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->


    </main>
</body>