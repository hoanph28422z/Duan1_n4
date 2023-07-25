<?php

    if (is_array($danhmuc)) {
        extract($danhmuc);
    }

?>

<div style="margin-top: 150px;" class="row">
            <div class="row  form-title"><h1>Cập nhật loại hàng hóa</h1></div>
            <div class="row form-content">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="row margin-bottom10">
                            <label for="">Mã loại</label>
                            <input type="text" name="maloai" placeholder="auto number" disabled> 
                        </div>

                        <div class="row margin-bottom10">
                            <label for="">Tên loại</label>
                            <input type="text" name="tenloai" value="<?=$ten_loai  ?>"> 
                            <input type="hidden" name="id" value="<?=$ma_loai?>">
                        </div>

                        <div class="row margin-bottom">
                                
                                <input type="submit" name="capnhat" value="CẬP NHẬT">
                                <input type="reset" value="NHẬP LẠI">
                                <a href="indext.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                        </div>

                           <?php 
                           if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>
                    </form>
            </div>
    </div>

    </div>