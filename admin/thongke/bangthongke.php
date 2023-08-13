<style>
    .row{
        width: 79vw;
        margin: 0 auto;
        position: relative;
        left: 50px;

    }
    .btn__{
        border: none;
        border-radius: 5px;
        padding: 15px ;
        box-shadow: 1px 1px 12px rgba(35 25 15/25%);
        font-weight: 550;
        cursor: pointer;
    }
</style>


<div class="row">
            <div class="row margin-bottom  form-title"><h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1></div>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 list-thongke">
                            <table>
                                    <tr>
                                        <th>MÃ DANH MỤC</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>GIÁ CAO NHẤT</th>
                                        <th>GIÁ THẤP NHẤT</th>
                                        <th>GIÁ TRUNG BÌNH</th>
                                    </tr>


                                    <?php

                                     foreach ($listthongke as $tk) {
                                       extract($tk);
                                      
                                       echo '<tr>
                                       <td>'.$id_loai.'</td>
                                       <td>'.$name_loai.'</td>
                                       <td>'.$countSP.'</td>    
                                       <td>'.$minprice.'</td>    
                                       <td>'.$maxprice.'</td>    
                                       <td>'.$avgprice.'</td>    
                                   </tr>';
                                    }


                                ?>
                                    
                                    

                                  
                                 
                                    
                            </table>
                    </div>

                    <div class="row margin-bottom10">
                           
                            <a href="index.php?act=bieudo"><input type="button" class="btn__" value="Xem biểu đồ"></a>
                        
                    </div>

                       
               
        </div>


    </div>