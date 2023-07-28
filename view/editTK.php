<div style="margin-top: 85px;" class="edit_tk">

            <!-- chi tiết sản phẩm  -->
        <div class="row margin-bottom">

            <div class="box-title"><h2>CẬP NHẬT TÀI KHOẢN</h2></div>

            <div class="row box-content formDK">

            <?php

                if (isset($_SESSION['info_user']) && (is_array($_SESSION['info_user']))) {
                    extract($_SESSION['info_user']);
                    // var_dump($_SESSION['info_user']);
                }

            ?>
        
                <form action="index.php?act=editTK" method="post">
                
                        <label for>Username</label><br>
                        <input type="text" name="user" value="<?=$ho_ten ?>"> <br> <br>
                        <label for>Email</label><br>
                        <input type="email" name="email" value="<?=$email ?>"> <br> <br>
                        <label for>PassWord</label><br>
                        <input type="password" name="pass" value="<?=$mat_khau ?>"> <br> <br>
                        
                        <input type="hidden" name="id" value="<?=$ma_kh ?>">


                        <input type="submit" name="capnhat" value="Cập nhật">
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
            <style>
                .edit_tk{
                        background-image: url('https://as1.ftcdn.net/v2/jpg/00/81/27/82/1000_F_81278278_KJxTGlpV9u3w67mKjlJfG8KGUyqS3HYD.jpg');
                }
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

input[type="text"],
input[type="password"],
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
            
                
                
                
               


        </div>


    </div>

          

        