<div class="viewcart_all">
       
<div style="margin: 20px;padding:10px;" class="">
            <div class="">

                           
                    <div class="box-title"><H2>CẢM ƠN</H2></div>

                  

                        <div style="padding: 10px;" class="box-bill">
                                
                                    <h3>Cảm ơn quí khách đã đặt hàng</h3>
                            
                        </div>

                </div>


                <?php 

                    if (isset($bill) && (is_array($bill))) {
                        extract($bill);
                    }
                
                ?>


                        <div class="row">

                        <div class="box-title">MÃ ĐƠN HÀNG</div>
                        <div class="row box-bill">

                            <p><?=$bill['id'] ?></p>

                        </div>
                        </div>

</div>
                        <div class="row margin-bottom">

                        <div class="box-title"><h2>THÔNG TIN ĐẶT HÀNG</h2></div>

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

                


             



                    <div class="row">

                        <div class="box-title"><h2>CHI TIẾT GIỎ HÀNG</h2></div>

                    <div class="box-content tableCART">

                        <table>
                            
                            <?php
                               show_detail_bill($bill_chitiet);

                            ?>

                                


                                

                        </table>

                       
                 

                    </div>
                        </div>

        
            </div>
            <style>
     .viewcart_all{
        text-align: center;
        margin-top: 85px;
    }
</style>

   
            