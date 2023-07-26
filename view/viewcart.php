
<div class="viewcart">
  
            <div class="box-left">
                           
                    <div class="box-title">GIỎ HÀNG</div>

                    <div class="box-content tableCART">

                        <table>
                                
                            <?php
                              viewcart(1);

                            ?>

                                


                                

                        </table>

                       
                        <a href="index.php?act=bill"><input type="button" style="padding: 5px 10px;   margin-bottom: 70px;
 margin-right: 15px;" value="Tiếp tục đặt hàng"></a> 
                        <a href="index.php?act=delcart"><input type="button" style="padding: 5px 10px;   margin-bottom: 70px;
 margin-right: 15px;" value="Xóa giỏ hàng"> </a>
                 

                    </div>
                    <style>



.viewcart{
  margin-top: 100px;
  text-align: center;
}

input[type="button"] {
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
}

input[type="button"]:hover {
  background-color: #3e8e41; /* màu nền khi hover */
  color: white; /* màu chữ khi hover */
}
                    </style>
                    
            </div>
       
</div>
   
            