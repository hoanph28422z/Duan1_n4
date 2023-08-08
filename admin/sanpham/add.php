




<style>
    .main {
        position: relative;
        top: 0;
        left: 100px;
        display: flex;
        justify-content: center;

    }

    .form_product {
        width: 450px;
        height: 100vh;

    }

    .des {
        width: 450px;
    }

    .id_product {
        padding: 15px;
        border-radius: 5px;
        outline: none;
        width: 100%;
        border: none;
        box-shadow: 1px 1px 10px rgba(24 15 24 /15%);
    }

    .row label {
        float: left;
        font-size: 0.986rem;
        margin: 15px 5px;
        font-weight: 550;
    }

    .padding {
        position: relative;
        display: flex;
        flex-direction: column;
    }

    #dacbiet {
        position: absolute;
        top: 15px;
    }

    #binhthuong {
        position: absolute;
        top: 65px;
        left: 61%;
    }

    .btn_products {
        padding: 15px;
        border: none;
        box-shadow: 1px 1px 10px rgba(14 25 14/25%);
        border-radius: 10px;
        margin: 10px 15px;
    }
</style>

<?php



?>
<div class="main">

    <div class="row">
        <div class="row margin-bottom  form-title">
            <h1>Thêm sản phẩm</h1>
        </div>

        <div class="row form-content2">
            <form action="index.php?act=addsp" class="form_product" method="post" enctype="multipart/form-data" class="form-quanlyhh">
                <div class="row margin-bottom10">

                    <input type="text" class="id_product" name="mahang" placeholder="Mã Hàng Hóa" disabled>
                </div>

                <div class="row margin-bottom10">
                    <label for="">Tên hàng hóa</label> <br>
                    <input type="text" class="id_product" name="tenhang">
                    <span style="color:red"><?= $errors['tenhang'] ?? '' ?></span>
                </div>


                <div class="row margin-bottom10">
                    <label for="">Đơn giá</label> <br>
                    <input type="text" class="id_product" name="giahang">
                    <span style="color:red"><?= $errors['giahang'] ?? '' ?></span>

                </div>


                <div class="row margin-bottom10">
                    <label for="">Số lượng</label> <br>
                    <input type="text" class="id_product" name="so_luong">
                    <span style="color:red"><?= $errors['so_luong'] ?? '' ?></span>
                </div>


                <div class="row margin-bottom10">
                    <label for="">Hình ảnh</label> <br>
                    <input type="file" class="id_product" name="hinhanh">
                    <span style="color:red"><?= $errors['hinhanh'] ?? '' ?></span>
                </div>


                <div class="row margin-bottom10">
                    <label for="">Loại hàng</label> <br>
                    <select name="loaihang" class="id_product" class="select" id="">
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
                        <div class="form_group_pro">
                            <label for="binhthuong">Đặc Biệt</label>
                            <input type="radio" name="choose" id="dacbiet" value="đặc biệt">
                        </div>
                        <div class="form_group_pro">
                            <label for="binhthuong">Bình thường</label>
                            <input type="radio" name="choose" id="binhthuong" value="bình thường">
                        </div>
                    </div>
                </div>


                <div class="row margin-bottom10">
                    <label for="">Ngày nhập</label> <br>
                    <input type="date" class="date" name="ngay">

                </div>




                <div class="row margin-bottom10 des">
                    <label for="">Mô tả</label>
                    <textarea name="mota" class="id_product"></textarea>
                    <span style="color:red"><?= $errors['mota'] ?? '' ?></span>
                </div>

                <div class="row margin-bottom10 des">
                    <label for="">Chi Tiet</label>
                    <textarea name="chi_tiet" class="id_product"></textarea>
                    <span style="color:red"><?= $errors['chi_tiet'] ?? '' ?></span>
                </div>
                <br>
                <div class="row margin-bottom button ">
                    <input type="submit" class="btn_products" name="themmoi" value="THÊM MỚI">
                    <input type="reset" class="btn_products" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" class="btn_products" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }

                ?>


            </form>
        </div>
    </div>
</div>
</div>