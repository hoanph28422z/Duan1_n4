
<div style="margin-top: 200px;" class="row margin-bottom">
            <div class="box-left">
                           
                    <form action="index.php?act=billconfirm" method="post" class="billform">

                    <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>

                  

                        <div class="row box-content margin-bottom">
                                <table>

                                <?php

                                    if (isset($_SESSION['info_user'])) {
                                        $person = $_SESSION['info_user']['ho_ten'];
                                        $email = $_SESSION['info_user']['email'];
                                    }else{
                                        $person = "";
                                        $email = "";
                                    }


                                ?>


                                        <tr>
                                            <td>Người đặt hàng</td> 
                                            <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;" type="text" name="person" id="" value="<?=$person ?>"></td>
                                        </tr>

                                        <tr>
                                            <td>Email</td> 
                                            <td><input style="width: 300px; padding: 5px 10px; margin-left: 30px; margin-bottom: 10px;"  type="text" name="email" id="" value="<?=$email ?>"></td>
                                        </tr>
                                </table>
                        </div>


                        <div class="row margin-bottom">

                        <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="row box-bill">

                            <table class="formBILL">
                                    <td><input type="radio" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
                                    <td><input type="radio" name="pttt" id="">Chuyển khoản ngân hàng</td>
                                    <td><input type="radio" name="pttt" id="">Thanh toán online</td>
                            </table>


                        </div>
                        </div>


                        <div class="row margin-bottom">

                        <div class="box-title">GIỎ HÀNG</div>

                    <div class="box-content tableCART">

                        <table>
                                
                            <?php
                                viewcart(0);

                            ?>

                                


                                

                        </table>

                       
                 

                    </div>
                        </div>

                        <a href="index.php?act=billconfirm"><input type="submit" style="padding: 5px 10px; margin-top: 20px; margin-right: 15px;" name="dongydathang" value="Đồng ý đặt hàng"></a> 



                    
                    </form>
                    
                    
            </div>
       

   
    
