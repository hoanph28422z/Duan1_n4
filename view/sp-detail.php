<div class="row margin-bottom">
            <div class="box-left">

            <!-- chi tiết sản phẩm  -->

            <div class="product-detail">

 <?php
 $img =  $img_path.$hinh;
 echo '<div class="product-image"><img src="'.$img.'" alt=""></div>'.'<br>';
 ?>
  <div class="product-info">
    <?php

                extract($one_prod);

            ?>
    <div style="margin-top:50px;" class="box-title">
    
    <h2><?=$te_hh ?></h2></div>
    
    <ul class="product-features">
    <?php  
echo '<li><strong>Mã sản phẩm:</strong> '.$ma_hh.'</li>'.'<br>';
echo '<li> <strong>TÊN HÀNG HÓA:</strong> '.$te_hh.'</li>'.'<br>';
echo '<li><strong>Giá:</strong> '.$don_gia.'</li>'.'<br>';
echo '<li> <strong>SỐ LƯỢNG HÀNG HÓA:</strong> '.$so_luong.'</li>'.'<br>';


echo ' <form action="index.php?act=addCART" method="post">
<input type="hidden" name="id" value="'.$ma_hh.'">
       <input type="hidden" name="tensp" value="'.$te_hh.'">
       <input type="hidden" name="anh" value="'.$hinh.'">
       <input type="hidden" name="gia" value="'.$don_gia.'">
<input class="add-to-cart" type="submit" name="addCART" value="Thêm vào giỏ hàng">
</form>';
echo '<p class="product-desc"> <strong>MÔ TẢ:</strong>'.$mo_ta.'</p>';

?>
    </ul>
  </div>
</div>

<style>
  .product-detail {
    display: flex;
    margin: 80px;
    margin-top: 50px;
   
  }
  
  .product-image {
    flex-basis: 50%;
    margin-right: 20px;
    border-radius:50px ;
  
  }
  
  .product-image img {
    width: 500px;
    height: 500px;
    margin-top: 120px;
    border-radius:20px;
    padding: 20px;
  }
  
  .product-info {
    flex-basis: 50%;
    margin-left: 80px;
    margin-top: 120px;
  }
  
  h2, .product-desc {
    margin-top: 25px;
  }
  
  .product-features {
    list-style: none;
    margin: 20px 0;
    padding: 0;
  }
  
  .product-features li {
    margin-bottom: 10px;
  }
  
  .product-features strong {
    display: inline-block;
    width: 150px;
  }
  
  .add-to-cart {
    background-color: #008cba;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
  }
  
  .add-to-cart:hover {
    background-color: #0077b3;
  }
</style>










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
             <div class="">

            <div class="box-title"><h2>SẢN PHẨM CÙNG LOẠI</h2></div>

            <div class="sanpham_cl">
                <?php
                    foreach ($spkhac as $same_kind) {
                       extract($same_kind);
                       $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;
                    
                       echo '<ul>
                       <li><a href="'.$link_sp.'">'.$te_hh.'</a></li>
                       </ul>';
                    }

                ?>
            </div>

            </div>
            <style>
    .sanpham_cl{
        
        margin:20px 100px 70px 100px;
        text-align: center;
    }
    ul li{
      padding: 10px;
    }
    ul li a{
      color: black;
    }

</style>

    </div>

          
        