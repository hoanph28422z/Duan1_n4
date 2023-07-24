
<div class="row margin-bottom">
        <div class="box-left">

            <div class="row margin-bottom">

                           
                    <div class="box-title">CẢM ƠN</div>

                  

                        <div class="row box-bill margin-bottom">
                                
                                    <p>Cảm ơn quí khách đã đặt hàng</p>
                            
                        </div>

                </div>


                <?php 

                    if (isset($bill) && (is_array($bill))) {
                        extract($bill);
                    }
                
                ?>


                        <div class="row margin-bottom">

                        <div class="box-title">MÃ ĐƠN HÀNG</div>
                        <div class="row box-bill">

                            <p><?=$bill['id'] ?></p>

                        </div>
                        </div>


                        <div class="row margin-bottom">

                        <div class="box-title">THÔNG TIN ĐẶT HÀNG</div>

                    <div class="box-bill tableCART">

                    <table>
                            <tr>
                                    <td>Người đặt hàng</td>
                                    <td>Email</td>
                            </tr>

                            <tr>
                                    <td><?=$bill['name_bill'] ?></td>
                                    <td><?=$bill['email_bill'] ?></td>
                            </tr>
                    </table>

                       
                 

                    </div>
                        </div>

                


                    <div class="row margin-bottom">

                    <div class="box-title">PHƯƠNG THỨC THANH TOÁN</div>

                    <div class="box-bill tableCART">

                                <P><?=$bill['pttt_bill']  ?></P>



                    </div>
                    </div>



                    <div class="row margin-bottom">

                        <div class="box-title">CHI TIẾT GIỎ HÀNG</div>

                    <div class="box-content tableCART">

                        <table>
                            
                            <?php
                               show_detail_bill($bill_chitiet);

                            ?>

                                


                                

                        </table>

                       
                 

                    </div>
                        </div>


                        

                       



                    
                   
                    
                    
            </div>
       

   
            