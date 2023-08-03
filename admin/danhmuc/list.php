


<div class="row">
            <div class="row margin-bottom  form-title"><h1>Quản lý loại hàng</h1></div>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-dsLOAI">
                            <table>
                                    <tr>
                                        <th></th>
                                        <th>MÃ LOẠI</th>
                                        <th>TÊN LOẠI</th>
                                        <th></th>
                                    </tr>

                                  
                                    <?php
                                foreach ($dsdanhmuc as $dm) {
                                    extract($dm);
                                    $suadm = "index.php?act=suadm&id=".$ma_loai;
                                    $xoadm = "index.php?act=xoadm&id=".$ma_loai;
                                    echo 
                                        '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ma_loai.'</td>
                                        <td>'.$ten_loai.'</td>    
                                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                                          <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';

                                }

                                ?>
                                    
                            </table>
                    </div>

                    <div class="row margin-bottom10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>

                       
               
        </div>


    </div>