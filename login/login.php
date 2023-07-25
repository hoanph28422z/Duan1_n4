
<div style="margin-top: 100px;" class="row margin-bottom">
                    
<div class="box-content">

                    <?php

                    if (isset($_SESSION['info_user'])) {
                        extract($_SESSION['info_user']);
                        

                        ?>



                            <div class="user-info">
  <!-- <h2>Thông tin người dùng</h2>
  <img class="avatar" src="path/to/user-avatar.jpg" alt="Ảnh đại diện của người dùng"> -->
  <div class="hello">
                                <h2>Xin chào</h2>
                                <?=$ho_ten ?>

                            </div>
  <ul>
    <li><strong>Tên đăng nhập:</strong> <?=$ho_ten ?></li>
    <li><strong>Họ tên:</strong> <?=$ho_ten ?></li>
    <li><strong>Email:</strong> <?=$email ?></li>
    <li><strong>Đơn hàng:</strong>  <a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
    <li><strong>Cập nhật tài khoản:</strong> <a href="index.php?act=editTK">Cập nhật tài khoản</a></li>
    <?php

                            if ($vai_tro ==1 ) {
                                
                           
                        ?>

                        <li>
                        <strong>Trang admin:</strong><a href="admin/index.php">Admin</a>
                        </li>


                        <?php     }  ?>
  </ul>
</div>

<style>
  .user-info {
    background-color: #f8f8f8;
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .hello{
    margin-right: 400px;
  }
  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
  }
  
  h2 {
    margin-top: 0;
  }
  
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  li {
    margin-bottom: 10px;
  }
  
  strong {
    display: inline-block;
    width: 150px;
  }
</style>





                        <?php
                    }else{


                    ?>
                    </div>

<!-- 
                        <form action="index.php?act=dangnhap" method="post">

                            <div class="row margin-bottom10">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" name="user">
                            </div>

                            <div class="row margin-bottom10">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="pass">
                            </div>

                            <div class="row margin-bottom10">
                                <input type="checkbox" name="" id=""> <label for="">Ghi nhớ tài khoản?</label>
                            </div>

                            <div class="row margin-bottom10">
                                <input type="submit" name="dangnhap" value="Đăng nhập">
                            </div>

                            <h4 style="color: #16C60C;">
                             <?php 
                           if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>
                            </h4>

                           
                           
                        </form>

                        <li>
                            <a href="index.php?act=quenMK">Quên mật khẩu</a>
                        </li>

                        <li>
                            <a href="index.php?act=dangki">Đăng kí thành viên</a>
                        </li> -->


 
    <body>
        <div class="background"></div>
        <div class="container">
            <div class="content">
                <h2 class="logo">Coffee And Tae <i class="bx bx-coffee"></i></h2>
                <div class="text-sci">
                    <h2> Welcome! <br> <span>Go To House Coffee</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsam quas, officia sed soluta commodi ex tenetur
                        necessitatibus harum vel quasi est voluptates
                        consectetur autem.</p>

                    <div class="list-icons">
                        <a href><i class="bx bxl-tiktok"></i></a>
                        <a href><i class="bx bxl-instagram"></i></a>
                        <a href><i  class="bx bxl-facebook"></i></a>
                        <a href> <i  class="bx bxl-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="logreg-box">
                <div class="form-box login">
                <form action="index.php?act=dangnhap" method="post">
                        <h2>Sign In</h2>
                        <div class="input_box">
                            <span class="icon"> <i class="bx bxs-envelope"></i></span>
                            <input type="text" name="user">
                            <label for>User</label>
                        </div>
                        <div class="input_box">
                            <span class="icon"> <i class="bx bxs-lock-alt"></i></span>
                            <input type="password" name="pass">
                            <label for>PassWord</label>
                        </div>
                        <div class="remember-forgot">
                            <label for=""><input type="checkbox">Remember Me</label>
                            <a href="index.php?act=quenMK">Forgot Password</a>
                        </div>
                        <input type="submit" name="dangnhap" value="Sign In">
                        <?php 
                           if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                           }
                           ?>
                        <div class="login-register">
                            <p>Don't have an account ? <a href="javascript:;" class="register-link">Sign</a></p>
                        </div>
                    </form>
                </div>




<!-- Sign Up -->

                <div class="form-box register">
                <form action="index.php?act=dangki" method="post">
                        <h2>Sign Up</h2>

                        <div class="input_box">
                            <span class="icon"> <i class="bx bxs-user"></i></span>
                            <input type="text" name="user" placeholder="Tên người dùng"> <br> <br>
                            <label for>Name</label>
                        </div>
                        
                        <div class="input_box">
                            <span class="icon"> <i class="bx bxs-envelope"></i></span>
                            <input type="email" name="email" placeholder="Địa chỉ email"> <br> <br>
                            <label for>Email</label>
                        </div>
                        <div class="input_box">
                            <span class="icon"> <i class="bx bxs-lock-alt"></i></span>
                            <input type="password" name="pass" placeholder="Mật khẩu"> <br> <br>
                            <label for>PassWord</label>
                        </div>
                        <div class="remember-forgot">
                            <label for=""><input type="checkbox">I agree to the terms & conditions</label>
                        </div>
                        <input type="submit" name="dangki" value="Sign Up">
                        <div class="login-register">
                            <p>Already have an account <a href="javascript:;" class="login-link">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        
    </body>
</html>
<?php
                    }
                        ?>