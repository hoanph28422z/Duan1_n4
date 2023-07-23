<div class="row margin-bottom">
            <div class="box-left">

            <!-- chi tiết sản phẩm  -->
            <div class="row margin-bottom">

            <?php

                extract($one_prod);

            ?>
            <div class="box-title"><?=$te_hh ?></div>

            <div class="row box-content">
                <?php  

                        

                     $img =  $img_path.$hinh;

                     echo '<div class="row margin-bottom "> <img src="'.$img.'" alt=""> </div>'.'<br>';
                     echo '<p>- <strong>MÃ HÀNG HÓA:</strong> '.$ma_hh.'</p>'.'<br>';
                     echo '<p>- <strong>TÊN HÀNG HÓA:</strong> '.$te_hh.'</p>'.'<br>';
                     echo '<p>- <strong>GIÁ HÀNG HÓA:</strong> '.$don_gia.'</p>'.'<br>';
                     echo ' <p class="margin-bottom"> <strong>SỐ LƯỢNG HÀNG HÓA:</strong> '.$so_luong.'</p>'.'<br>';
                     echo ' <form action="index.php?act=addCART" method="post">
                     <input type="hidden" name="id" value="'.$ma_hh.'">
                            <input type="hidden" name="tensp" value="'.$te_hh.'">
                            <input type="hidden" name="anh" value="'.$hinh.'">
                            <input type="hidden" name="gia" value="'.$don_gia.'">
                    <input style="margin-left: 45px; margin-top: 10px; margin-bottom: 15px;" type="submit" name="addCART" value="Thêm vào giỏ hàng">
                    </form>';
                    echo '<form method="post" action="">
                    <input type="hidden" name="ma_hh" value="<?php echo $ma_hh; ?>" />
                    <button type="submit">Mua ngay</button>
                    </form>';
                     echo '<p style="margin-left: 30px;">'.$mo_ta.'</p>';

                ?>
            </div>
            
                
                
                
               


            </div>

             <!-- BOX BÌNH LUẬN  -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

             <script>
            $(document).ready(function(){
           
          $("#binhluan").load("view/binhluanform.php", {idprod: <?=$ma_hh  ?>});
            });
           
            </script>
             <div class="row" id="binhluan">

            <!-- <div class="box-title">BÌNH LUẬN</div>

            <div class="row box-content" id="binhluan">
                

            </div> -->

            </div>


             <!-- SẢN PHẨM CÙNG LOẠI -->
             <div class="row margin-bottom">

            <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>

            <div class="row box-content">
                <?php
                    foreach ($spkhac as $same_kind) {
                       extract($same_kind);
                       $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;

                       echo '<li><a href="'.$link_sp.'">'.$te_hh.'</a></li>';
                    }

                ?>

                

            </div>

            </div>

    </div>

          
        