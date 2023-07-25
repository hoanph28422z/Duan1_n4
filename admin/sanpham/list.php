<div style="margin-top: 150px;" class="row">
            <div class="row margin-bottom  form-title"><h1>Quản lý loại hàng</h1></div>

            <form action="index.php?act=listsp" class="margin-bottom" method="post">
                            <input type="text" name="kyw" id="">
                            <select name="iddm" id="">
                            
                            <option value="0" selected>Tất cả</option>

                            <?php
                        foreach ($dsdanhmuc as $danhmuc) {
                         
                            ?>
                                <option value="<?php echo $danhmuc['ma_loai'] ?>"><?php echo $danhmuc['ten_loai'] ?></option>

                                <?php

                        }

                        ?>
                            </select>

                            <input type="submit" name="listOK" value="GO">
                    </form>

            <div class="row form-content">
                
                    <div class="row margin-bottom10 form-dsHANG">


                            <table>
                                    <tr>
                                    <th></th>
                                        <th>MÃ HÀNG </th>
                                        <th>TÊN HÀNG HÓA</th>
                                        <th>HÌNH</th>
                                        <th>ĐƠN GIÁ</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>LƯỢT XEM</th>
                                        <th></th>
                                    </tr>

                                  
                                    <?php
                                foreach ($dssanpham as $sp) {
                                    extract($sp);
                                    $suasp = "index.php?act=suasp&id=".$ma_hh;
                                    $xoasp = "index.php?act=xoasp&id=".$ma_hh;
                                    $img = "../upload/".$hinh;
                                    if (is_file($img)) {
                                       $anh = "<img src='".$img."' width='100' height='80' ";
                                    }else{
                                       $anh = "no photo";
                                    }
                                    echo 
                                        '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ma_hh.'</td>
                                        <td>'.$te_hh.'</td>    
                                        <td>'.$anh.'</td>    
                                        <td>'.$don_gia.'</td>    
                                        <td>'.$so_luong.'</td>    
                                        <td>'.$so_luot_xem.'</td>    
                                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                                          <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';

                                }

                                ?>
                                    
                            </table>
                    </div>

                    <div class="row margin-bottom10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục đã chọn">
                            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>

                       
               
        </div>


    </div>