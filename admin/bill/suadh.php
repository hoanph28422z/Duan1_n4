<?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
        // var_dump($bill);
    }

?>

<div class="row">
            <div class="row  form-title"><h1>CẬP NHẬT ĐƠN HÀNG</h1></div>
            <div class="row form-content">
                    <form action="index.php?act=capnhatdh" method="post">
                        <div class="row margin-bottom10">
                            <label for="">Mã đơn hàng</label>
                            <input type="text" value="DAM-<?=$id ?>" disabled> 
                        </div>

                        <div class="row margin-bottom10">
                            <label for="">Tình trạng đơn hàng</label>
                            <input type="text" name="trangthai" value="<?=$bill_status ?>"> 
                            
                        </div>

                        <div class="row margin-bottom">
                                <input type="hidden" name="id" value="<?=$id ?>">
                                <input type="submit" name="update" value="CẬP NHẬT">
                                <input type="reset" value="NHẬP LẠI">
                                <a href="index.php?act=dsdh"><input type="button" value="DANH SÁCH"></a>
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