<div style="margin-top: 120px;margin-bottom: 80px;" class="forgot-pass">
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
</div>  
<style>
 form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

input[type="submit"],
input[type="reset"] {
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}
            </style>

        