<div class="row margin-bottom">
            <div class="box-left">

            <!-- chi tiết sản phẩm  -->
        <div class="row margin-bottom">

            <div class="box-title">QUÊN MẬT KHẨU</div>

            <div class="row box-content formDK">

                <form action="index.php?act=quenMK" method="post">
                       
                        Email:  <br>
                        <input type="email" name="email" placeholder="Địa chỉ email"> <br> <br>
                       
                        <input type="submit" name="guiemail" value="Gửi email">
                        <input type="reset" value="Nhập lại">

                        <h4 style="color: #16C60C;">
                        <?php 
                           if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>
                            </h4>
                    </form>
                
            </div>
            
                
                
                
               


        </div>


    </div>

            <div class="box-right">
            <?php  include_once "box-right.php";  ?>
        </div>

        