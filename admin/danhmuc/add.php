
<div class="row">
            <div class="row  form-title"><h1>Thêm mới loại hàng hóa</h1></div>
            <div class="row form-content">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row margin-bottom10">
                            <label for="">Mã loại</label>
                            <input type="text" name="maloai" placeholder="auto number" disabled> 
                        </div>

                        <div class="row margin-bottom10">
                            <label for="">Tên loại</label>
                            <input type="text" name="tenloai"> 
                        </div>

                        <div class="row margin-bottom">
                                <input type="submit" name="themmoi" value="THÊM MỚI">
                                <input type="reset" value="NHẬP LẠI">
                                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
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