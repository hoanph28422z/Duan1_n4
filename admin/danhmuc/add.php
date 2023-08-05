<style>
        .title {
                text-transform: capitalize;
        }

        #form_group {
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 450px;
                margin: 0 auto;

        }

        .form_tag {
                width: 555px;
                height: 560px;
                position: fixed;
                top: 0%;
                left: 20%;
                box-shadow: 1px 1px 10px rgba(24 15 24 /25%);
                height: 100vh;
                width: 80%;

        }

        .hiden {
                height: 45px;
                text-align: center;
                text-transform: uppercase;
                border-radius: 5px;
                border: none;
                box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
                font-weight: 550;

        }

        .name_tag {
                width: 100%;
                padding: 15px;
                border: none;
                outline: none;
                border-radius: 5px;
                margin: 15px 0;
                font-weight: 550;

        }

        .btn_tag {
                border: none;
                outline: none;
                box-shadow: 1px 1px 10px rgba(24 15 24 /25%);
                padding: 15px;
                border-radius: 50px;
                margin: 15px 10px;
                cursor: pointer;
                font-weight: 550;
        }

        .btn_tag:hover {
                transform: translateY(-5px);
                transition: 0.2s all linear;
        }
</style>
<div class="row">
        <div class="row form-content">
                <form action="index.php?act=adddm" method="post" class="form_tag">
                        <br>
                        <h1 class="title">Thêm mới loại hàng hóa</h1>
                        <br>
                        <div class="row margin-bottom10" id="form_group ">
                                <input type="text" class="hiden" name="maloai" placeholder="Tên Loại" disabled>

                        </div>

                        <div class="row margin-bottom10" id="form_group">
                                <input type="text" class="name_tag" name="tenloai" placeholder="Mời Bạn Nhập Dữ Liệu">


                        </div>

                        <div class="row margin-bottom">
                                <input type="submit" class="btn_tag" name="themmoi" value="THÊM MỚI">
                                <input type="reset" class="btn_tag" value="NHẬP LẠI">
                                <a href="index.php?act=listdm"><input type="button" class="btn_tag" value="DANH SÁCH"></a>
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