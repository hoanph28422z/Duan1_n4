<div class="row margin-bottom">

                    <div class="box-title">
                        ĐƠN HÀNG CỦA TÔI
                    </div>

                    <div class="box-bill">
                            <table border="1">

                                    <tr>

                                    <th>STT</th>
                                    <th>MÃ ĐH</th>
                                    <th>NGÀY ĐẶT</th>
                                    <th>SỐ LƯỢNG ĐH</th>
                                    <th>TỔNG GIÁ TRỊ ĐH</th>
                                    <th>TÌNH TRẠNG ĐH</th>

                                    </tr>

                                    <?php

                                    if (is_array($listbill)) {
                                        $i=0;
                                        foreach ($listbill as $bill) {
                                            extract($bill);
                                            $i++;

                                            $trangthaidonhang = get_ttdh($bill['bill_status']);
                                            $countSP = demsoluongmathang($bill['id']);

                                            echo '
                                            
                                            <tr>

                                            <td>'.$i.'</td>
                                            <td>DAM-'.$id.'</td>
                                            <td>'.$bill['ngay_dh_bill'].'</td>
                                            <td>'.$countSP.'</td>
                                            <td>'.$bill['tong_dh_bill'].'</td>
                                            <td>'.$trangthaidonhang.'</td>
    
                                            </tr>
                                                ';
                                           
                                        }
                                    }
                                        
                                    

                                        ?>




                                    

                            </table>
                       
                    </div>

                    
             </div>