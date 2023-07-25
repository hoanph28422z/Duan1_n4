<div style="margin-top: 150px;" class="row">
            <div class="row margin-bottom  form-title"><h1>DANH SÁCH TÀI KHOẢN</h1></div>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-dsLOAI">
                            <table>
                                    <tr>
                                        <th></th>
                                        <th>MÃ TK</th>
                                        <th>USERNAME</th>
                                        <th>EMAIL</th>
                                        <th>PASSWORD</th>
                                        <th>ROLE</th>
                                        <th></th>
                                    </tr>

                                  
                                    <?php
                                foreach ($dsTK as $tk) {
                                    extract($tk);
                                    $suatk = "index.php?act=suatk&makh=".$ma_kh;
                                    $xoatk= "index.php?act=xoatk&makh=".$ma_kh;
                                    echo 
                                        '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ma_kh.'</td>
                                        <td>'.$ho_ten.'</td>    
                                        <td>'.$email.'</td>    
                                        <td>'.$mat_khau.'</td>    
                                        <td>'.$vai_tro.'</td>    
                                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                                          <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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