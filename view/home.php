
<section class="home" id="home">
        <div class="home-text">
            <h1>Start Your Day <br> With Coffee</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut illo fuga dolorem nisi officiis! Inventore magni ipsum quos hic rerum voluptatum quibusdam vitae, asperiores commodi dicta laboriosam, unde, nisi dolore.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="fame/img/main.png" alt="">
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-img">
            <img src="fame/img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, aut sed ea sint aperiam corrupti voluptas eligendi ut officiis ipsum provident deleniti ducimus quas cum autem qui nobis, expedita dolor.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, aut sed ea sint aperiam corrupti voluptas eligendi ut officiis ipsum provident deleniti ducimus quas cum autem qui nobis, expedita dolor.</p>
            <p class="pading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut iure placeat harum similique corrupti.</p>
            <a href="#" class="btn"> Learn More </a>
        </div>
    </section>

<section class="products" id="products">
        <div class="heading">
            <h2>Our Popular Products </h2>
        </div>
        
        
        <div class="products-container">
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
 </style>