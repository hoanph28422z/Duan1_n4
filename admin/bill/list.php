<style>
    .row{
        position: relative;
        left: 100px;
        width: 80vw;
    }
    .btn_list_bill{
        border: none;
        outline: none;
        cursor: pointer;
        box-shadow: 1px 1px 10px rgba(24 15 24 /15%);
        padding: 5px;
        border-radius: 5px;
    }
</style>


<div class="row">
            <div class="row margin-bottom  form-title"><h1>Quản lý loại hàng</h1></div>

            

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-DH">


                            <table>
                                    <tr>

                                        <th>MÃ ĐƠN HÀNG </th>
                                        <th>KHÁCH HÀNG</th>
                                        <th>EMAIL</th>
                                        <th>SỐ LƯỢNG HÀNG</th>
                                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                        <th>NGÀY & GIỜ ĐẶT HÀNG</th>
                                        <th>THAO TÁC</th>

                                    </tr>

                                    <?php


                                foreach ($listbill as $bill) {
                                    extract($bill);

                                    $soluongSP= demsoluongmathang($id);
                                    $ttdh = get_ttdh($bill_status);
                                    
                                    $suadh = "index.php?act=suadh&id=".$id;
                                    $xoadh = "index.php?act=xoadh&id=".$id;

                                    echo ' <tr>

                                    <td>DAM-'.$id.'</td>
                                    <td>'.$name_bill.'</td>
                                    <td>'.$email_bill.'</td>    
                                    <td>'.$soluongSP.'</td>    
                                    <td>'.$tong_dh_bill.'$</td>    
                                    <td><p style="padding: 3px 5px; color: yellow; border-radius:  2px 10px 2px 10px;background-color: green;">'.$ttdh.'</p></td>    
                                    <td>'.$ngay_dh_bill.'</td>    
                                    <td><a href="'.$suadh.'"><input type="button" class="btn_list_bill" value="Sửa"></a> 
                                      <a href="'.$xoadh.'"><input type="button" class="btn_list_bill" value="Xóa"></a></td>
                                    </tr>';
                                }




                                    ?>
 
                                    
                            </table>
                    </div>


                       
               
        </div>


    </div>