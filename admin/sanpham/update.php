<?php

if (is_array($sanpham)) {
   extract($sanpham);

   $iddm = $ma_loai;
}

$img = "../upload/".$hinh;
if (is_file($img)) {
$anh = "<img src='".$img."' width='100' height='80' ";
}else{
$anh = "no photo";
}


?>
<div class="row">
            <div class="row margin-bottom  form-title"><h1>Cập nhật sản phẩm</h1></div>

            
        <div class="hinh_anh">
        <?=$anh?>
        </div>
            <div class="row form-content2">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data"  class="form-quanlyhh">
                    <div class="row margin-bottom10">
                        <label for="">Mã hàng hóa</label> <br>
                        <input type="text" name="mahang" placeholder="auto number" disabled> 
                    </div>

                    <div class="row margin-bottom10">
                        <label for="">Tên hàng hóa</label> <br>
                        <input type="text" name="tenhang" value="<?=$te_hh ?>"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Đơn giá</label> <br>
                        <input type="text" name="giahang" value="<?=$don_gia?>"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Số lượng</label> <br>
                        <input type="text" name="so_luong" value="<?=$so_luong ?>"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Hình ảnh</label> <br>
                       
                        <input type="file" name="hinhanh"> <br> 
                        
                        
                        
                    </div>


                    <div class="row margin-bottom10">
                        
                        <label for="">Loại hàng</label> <br>
                        <select name="loaihang" class="select"  id="">
                        <?php
                        foreach ($dsdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm==$ma_loai) $selected="selected"; else $selected = "";

                            echo '<option value="'.$ma_loai.'" '.$selected.'>'.$ten_loai.'</option>';

                        }
                         
                            ?>
                                

                            
                        </select>
                    </div>


                    <div class="row margin-bottom10">
                        <label for="choose">Hàng đặc biệt</label> <br>
                        <div class="padding">
                        <input type="radio" name="choose" id="dacbiet" value="đặc biệt"> <label  for="dacbiet" id="dacbiet">Đặc biệt</label>
                        <input type="radio" name="choose" id="binhthuong" value="bình thường"> <label for="binhthuong">Bình thường</label>
                        </div>
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Ngày nhập</label> <br>
                        <input type="date" class="date" name="ngay" value="<?=$ngay_nhap?>"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Số lượt xem</label> <br>
                        <input type="text" name="luotxem" value="0" disabled> 
                    </div>

                    <div class="row margin-bottom10 des">
                        <label for="">Mô tả</label>
                        <textarea name="mota" id="" cols="113" rows="3"><?=$mo_ta?></textarea>
                    </div>

                    <div class="row margin-bottom10 des">
                        <label for="">Chi tiet</label>
                        <textarea name="chi_tiet" id="" cols="113" rows="3"><?=$mo_ta?></textarea>
                    </div>
                    <br>

                    <div class="row margin-bottom button ">
                            <input type="hidden" name="id" value="<?=$ma_hh ?>">
                            <input type="submit" name="capnhat" value="CẬP NHẬT">
                            <input type="reset" value="NHẬP LẠI">
                            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
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