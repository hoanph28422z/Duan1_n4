<div class="row">
            <div class="row margin-bottom  form-title"><h1>Quản lý loại hàng</h1></div>

            <form action="index.php?act=dsdh" class="margin-bottom" method="post">

                            <input type="text" name="kyw" id="">

                            <select name="idKH" id="">
                            
                            <option value="0" selected>Tất cả</option>

                            </select>
               
                            <input type="submit" name="listOK" value="GO">
                    </form>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-DH">


                            <table>
                                    <tr>
                                        <th></th>
                                        <th>MÃ ĐƠN HÀNG </th>
                                        <th>KHÁCH HÀNG</th>
                                        <th>SỐ LƯỢNG HÀNG</th>
                                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                        <th>NGÀY & GIỜ ĐẶT HÀNG</th>
                                        <th>THAO TÁC</th>
                                        <th></th>
                                    </tr>

                                    <?php


                                foreach ($listbill as $bill) {
                                    extract($bill);

                                    $soluongSP= demsoluongmathang($id);
                                    $ttdh = get_ttdh($bill_status);
                                    
                                    $suadh = "index.php?act=suadh&id=".$id;
                                    $xoadh = "index.php?act=xoadh&id=".$id;

                                    echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>DAM-'.$id.'</td>
                                    <td>'.$name_bill.'<br>
                                        '.$email_bill.'<br>
                                    </td>    
                                    <td>'.$soluongSP.'</td>    
                                    <td>'.$tong_dh_bill.'$</td>    
                                    <td><p style="padding: 3px 5px; color: yellow; border-radius:  2px 10px 2px 10px;background-color: green;">'.$ttdh.'</p></td>    
                                    <td>'.$ngay_dh_bill.'</td>    
                                    <td><a href="'.$suadh.'"><input type="button" value="Sửa"></a> 
                                      <a href="'.$xoadh.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                }




                                    ?>
 
                                    
                            </table>
                    </div>

                    <div class="row margin-bottom10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục đã chọn">
                           
                    </div>

                       
               
        </div>


    </div>