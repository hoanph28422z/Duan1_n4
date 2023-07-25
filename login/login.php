<div style="margin-top: 200px;" class="row margin-bottom">
                    <div class="box-title">
                        TÀI KHOẢN
                    </div>

                    <div class="box-content">

                    <?php

                    if (isset($_SESSION['info_user'])) {
                        extract($_SESSION['info_user']);
                        

                        ?>


                            <div class="row margin-bottom10">
                                <h2>Xin chào</h2>
                                <?=$ho_ten ?>

                            </div>

                            <div class="row margin-bottom10">

                            <li>
                            <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                        </li>

                        <li>
                            <a href="index.php?act=quenMK">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=editTK">Cập nhật tài khoản</a>
                        </li>

                        <?php

                            if ($vai_tro ==1 ) {
                                
                           
                        ?>

                        <li>
                            <a href="admin/index.php">Đăng nhập Admin</a>
                        </li>


                        <?php     }  ?>




                        <li>
                            <a href="index.php?act=logout">Thoát</a>
                        </li>
                                
                            </div>





                        <?php
                    }else{


                    ?>



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
                        </li>

                        <?php
                    }
                        ?>