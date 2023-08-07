<!-- 

<div class="row">
            <div class="row margin-bottom  form-title"><h1>CẬP NHẬT TÀI KHOẢN</h1></div>

            <div class="row form-content">
                
            <form action="index.php?act=capnhatKH" method="post" class="form-quanlykh">
                    
                    <div class="row margin-bottom10">
                        <label for="">USERNAME</label> <br>
                        <input type="text" name="tenkh" value="<?=$ho_ten ?>"> 
                    </div>


                    

                    <div class="row margin-bottom10">
                        <label for="">EMAIL</label> <br>
                        <input type="text" name="email" value="<?=$email ?>"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">PASSWORD</label> <br>
                        <input type="text" name="pass" value="<?=$mat_khau ?>"> 
                    </div>


                    


                    <div class="row margin-bottom10">
                        <label for="choose">ROLE</label> <br>
                      
                        
                        <input type="text" name="role" value="<?=$vai_tro ?>"> 
                        
                    </div>


                
                    <div>
                            <input type="hidden" name="ma_kh" value="<?=$ma_kh ?>">
                            <input type="submit" name="capnhat" value="CẬP NHẬT">
                            <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    

                    <?php 
                           if (isset($thongbao) && ($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>

                       
                </form>
                    


    </div>  -->