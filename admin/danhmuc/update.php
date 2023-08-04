<?php

    if (is_array($danhmuc)) {
        extract($danhmuc);
    }

?>
<style>
    .main{
        position: relative;
        top: 0;
        left: 100px;
        display: flex;
        justify-content: center;
     
    }
    .form_product{
        width: 450px;
        height: 100vh;
        
    }
    .des{
        width: 450px;
    }
    .id_product{
        padding: 15px;
        border-radius: 5px;
        outline: none;
        width: 100%;
        border: none;
        box-shadow: 1px 1px 10px rgba(24 15 24 /15%);
    }
    .row label{
        float: left;
        font-size: 0.986rem;
        margin: 15px 5px;
        font-weight: 550;
    }
    .padding{
        position: relative;
        display: flex;
        flex-direction: column;
    }
    #dacbiet{
        position: absolute;
        top: 15px;
    }
    #binhthuong{
        position: absolute;
        top: 65px;
        left: 61%;
    }
    .btn_products{
        padding: 15px;
        border: none;
        box-shadow: 1px 1px 10px rgba(14 25 14/25%);
        border-radius: 10px;
        margin: 10px 15px;
    }
</style>
<div class="row">
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