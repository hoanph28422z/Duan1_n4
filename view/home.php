<section class="products" id="products">
        <div class="heading">
            <h2>Our Popular Products </h2>
        </div>
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


                        echo '<div class="box-sp '.$mr.' margin-bottom">
                        <div class="image">
                        <a href="'.$link_sp.'"> <img src="'.$anh.'" alt=""></a>
                        </div>

                        <p>$ '.$don_gia.'</p>
                        <a href="'.$link_sp.'">'.$te_hh.'</a>

                        

                    </div>';

                    $i++;
                    }
            ?>

        <!-- <div class="products-container">
                <div class="box">
                    <img src="../fame/img/p1.png" alt="">
                    <h3>Americano Pure</h3>
                    <div class="content">
                        <span>$25</span>
                        <a href="#">Add to Cart</a>
                    </div>
                </div>
            <div class="box">
                <img src="../fame/img/p1.png" alt="">
                <h3>Americano Pure</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="../fame/img/p1.png" alt="">
                <h3>Americano Pure</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="../fame/img/p1.png" alt="">
                <h3>Americano Pure</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="../fame/img/p1.png" alt="">
                <h3>Americano Pure</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="../fame/img/p1.png" alt="">
                <h3>Americano Pure</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
        </div> -->
    </section>
 