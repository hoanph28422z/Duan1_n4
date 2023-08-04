<section style="margin-bottom: 70px;" class="products">
        <div class="heading">
            <h2>Our Popular Products </h2>
        </div>
        
        <div class="box-title"><strong><h2><?=$ten_dm ?></h2></strong></div>
        <div class="products-container">
                 <?php

$i =0;
foreach ($dssp as $sp) {
extract($sp);
$anh = $img_path.$hinh;
$link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;

if (($i==2) ||($i==5) ||  ($i==8) || ($i==11)){
    $mr="";
}else{
    $mr="";
}


echo '<div class="box">
                        <div class="image">
                        <a href="'.$link_sp.'"> <img src="'.$anh.'" alt=""></a>
                        </div>
                        <div class="ten_sp">
                        <a href="'.$link_sp.'">'.$te_hh.'</a>
                        </div>
                        <div class="content_home">
                        <span>'.$don_gia.'VND</span>
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
    </section>
    <style>
.add-to-cart {
    text-transform: uppercase;
    color: #1b1b1b;
    border: 2px solid #bc9667;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 15px;
    margin-top: 15px;
  }
  .add-to-cart:hover {
  background-color: #bc9667;
}
.products-container .box .content_home span {
    height: 40px;
    margin-top: 15px;
    margin-left: 20px;
}
.ten_sp{
    text-align: center;
    margin-top: 20px;
}
.ten_sp a{
    padding:4px 0.3rem;
    color:#1b1b1b;
    border-radius: 4px;
    text-transform: uppercase;
}
.products-container .box .content_home{
    display: flex;
    justify-content: center;
    align-items: center
}
.box-title h2{
    text-transform: uppercase;
}
 </style>