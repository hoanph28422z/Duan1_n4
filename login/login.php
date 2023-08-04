

<div style="margin-top: 100px;" class="row margin-bottom">

    <div class="box-content">

        <?php

        if (isset($_SESSION['info_user'])) {
            extract($_SESSION['info_user']);


        ?>



            <div class="user-info">
                <!-- <h2>Thông tin người dùng</h2>
  <img class="avatar" src="path/to/user-avatar.jpg" alt="Ảnh đại diện của người dùng"> -->

                    <h2>Hồ Sơ Của Tôi</h2>
                    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                <ul class="text_user">
                    <li><strong>Tên Đăng Nhập</strong><?= $ho_ten ?></li>
                    <li><strong>Email</strong><?= $email?></li>

                    <li><a href="index.php?act=editTK">Cập nhật tài khoản</a></li>
                    <?php

                    if ($vai_tro == 1) {
                    ?>
                        <li>
                            <strong>Trang admin:</strong><a href="admin/index.php">Admin</a>
                        </li>
                    <?php     }  ?>
                </ul>
            </div>

            <style>
                .box-content{
                    background-image: url('https://as1.ftcdn.net/v2/jpg/00/81/27/82/1000_F_81278278_KJxTGlpV9u3w67mKjlJfG8KGUyqS3HYD.jpg');
                    background-size: 100vw , 100vh;
                    background-repeat: no-repeat;
                
                }
                .user-info {
                    background-color: #f8f8f8;
                    border: 1px solid #ccc;
                    padding: 20px;
                    margin: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    width: 450px;
                    height: 450px;
                    margin: 10px auto;
                    opacity: 1;
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
                .footer#footer {
                    position: relative;
                    bottom: -192px;
                }
                .text_user{
                    padding-top: 15px;
                    text-align: left;
                    text-transform: uppercase;
                }
                .text_user li{
                    margin-top: 20px;
                }
                .text_user li a{
                    
                    font-weight: 550;
                }
            </style>





        <?php
        } else {


        ?>
    </div>
    <header>
    <link rel="stylesheet" href="login/style.css">
    </header>
    <body>
        <div style="margin-top: -109px;" class="background"></div>
        <div class="container">
            <div class="content">
                <h2 class="logo">Coffee And Tae <i class="bx bx-coffee"></i></h2>
                <div class="text-sci">
                    <h2> Welcome! <br> <span>Go To House Coffee</span></h2>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsam quas, officia sed soluta commodi ex tenetur
                        necessitatibus harum vel quasi est voluptates
                        consectetur autem.</p>

                    <div class="list-icons">
                        <a href><i class="bx bxl-tiktok"></i></a>
                        <a href><i class="bx bxl-instagram"></i></a>
                        <a href><i class="bx bxl-facebook"></i></a>
                        <a href> <i class="bx bxl-twitter"></i></a>
                        <a href="index.php"><i class='bx bx-home'></i></a>
                    </div>
                </div>
            </div>

            <div class="logreg-box">
                <div class="form-box login">
                    <form action="index.php?act=dangnhap" method="post">
                        <h2>Sign In</h2>
                        <div class="input_box">
                            <span class="icon"> <i class='bx bx-user'></i></span>
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
                        <input style="width: 100%;
                        height: 45px;
                        background: #c4103d;
                        border: none;
                        outline: none;
                        border-radius: 4px;
                        color: #e4e4e4;
                        font-weight: 500;
                        box-shadow: 0 0 10px 0  rgba(0, 0, 0, 0.5);" type="submit" name="dangnhap" value="Sign In">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
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
                        <input style="width: 100%;
                            height: 45px;
                            background: #c4103d;
                            border: none;
                            outline: none;
                            border-radius: 4px;
                            color: #e4e4e4;
                            font-weight: 500;
                            box-shadow: 0 0 10px 0  rgba(0, 0, 0, 0.5);
                            " type="submit" name="dangki" value="Sign Up">
                        <div class="login-register">
                            <p>Already have an account <a href="javascript:;" class="login-link">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </body>
    <section class="footer" id="footer">

    </section>
<style>
    .footer{
        display: none;
    }
    header{
        display: none;
    }
    .container{
        margin-top: 30px;
    }
</style>
    </html>
<?php
        }
?>