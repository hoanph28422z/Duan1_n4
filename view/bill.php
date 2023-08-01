

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


                        <div class="row">

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

                    
                    <style>
                      input[type="submit"] {
  background-color: #4CAF50; /* màu nền */
  border: none; /* không có đường viền */
  color: white; /* màu chữ */
  padding: 10px 20px; /* khoảng cách giữa nút và đường viền */
  text-align: center; /* căn giữa nội dung */
  text-decoration: none; /* không có gạch chân */
  display: inline-block; /* hiển thị thành khối */
  font-size: 16px; /* cỡ chữ */
  border-radius: 5px; /* bo góc */
  transition-duration: 0.4s; /* thời gian chuyển động */
  cursor: pointer; /* chỉ số chấm */
  margin-bottom: 50px;
}

input[type="submit"]:hover {
  background-color: #3e8e41; /* màu nền khi hover */
  color: white; /* màu chữ khi hover */
}
.box-left{
  margin-top: 100px;
        text-align: center;
    }
    table {
  border-collapse: collapse; /* remove space between table cells */
  width: 100%;
  /* max-width: 800px; */
  margin: 0 auto; /* center the table */
  font-family: Arial, sans-serif;
  font-size: 14px;
}

thead {
  background-color: #333;
  color: #fff;
}

th {
  padding: 10px;
  text-align: center;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

td {
  padding: 10px;
}
                    </style>
            </div>
       

   
    
