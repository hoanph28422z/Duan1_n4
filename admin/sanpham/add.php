<div style="margin-top: 200px;" class="row">
            <div class="row margin-bottom  form-title"><h1>Thêm sản phẩm</h1></div>

            <div class="row form-content2">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" class="form-quanlyhh">
                    <div class="row margin-bottom10">
                        <label for="">Mã hàng hóa</label> <br>
                        <input type="text" name="mahang" placeholder="auto number" disabled> 
                    </div>

                    <div class="row margin-bottom10">
                        <label for="">Tên hàng hóa</label> <br>
                        <input type="text" name="tenhang"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Đơn giá</label> <br>
                        <input type="text" name="giahang"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Số lượng</label> <br>
                        <input type="text" name="so_luong"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Hình ảnh</label> <br>
                        <input type="file" name="hinhanh"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Loại hàng</label> <br>
                        <select name="loaihang" class="select"  id="">
                        <?php
                        foreach ($dsdanhmuc as $danhmuc) {
                         
                            ?>
                                <option value="<?php echo $danhmuc['ma_loai'] ?>"><?php echo $danhmuc['ten_loai'] ?></option>

                                <?php

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
                        <input type="date" class="date" name="ngay"> 
                    </div>


                    <div class="row margin-bottom10">
                        <label for="">Số lượt xem</label> <br>
                        <input type="text" name="luotxem" value="0" disabled> 
                    </div>

                    <div class="row margin-bottom10 des">
                        <label for="">Mô tả</label>
                        <textarea name="mota" id="" cols="113" rows="3"></textarea>
                    </div>
                    <br>

                    <div class="row margin-bottom button ">
                            <input type="submit" name="themmoi" value="THÊM MỚI">
                            <input type="reset" value="NHẬP LẠI">
                            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                           if (isset($thongbao) && ($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>

                       
                </form>
        </div>
        </div>
    </div>