<div class="row">
            <div class="row margin-bottom  form-title"><h1>DANH SÁCH BÌNH LUẬN</h1></div>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-dsLOAI">
                            <table>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>NỘI DUNG</th>
                                        <th>MÃ KH</th>
                                        <th>MÃ HH</th>
                                        <th>NGÀY ĐĂNG</th>
                                        <th></th>
                                    </tr>

                                  
                                    <?php
                                foreach ($dsbl as $bl) {
                                    extract($bl);
                                    
                                    $xoabl= "index.php?act=xoabl&mabl=".$ma_bl;
                                    echo 
                                        '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ma_bl.'</td>
                                        <td>'.$noi_dung.'</td>
                                        <td>'.$ma_kh.'</td>    
                                        <td>'.$ma_hh.'</td>    
                                        <td>'.$ngay_bl.'</td>    
                                        <td>
                                          <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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