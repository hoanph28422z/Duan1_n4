<style>
    .btn_upload_list {
        border-radius: 5px;
        border: none;
        padding: 15px;
        box-shadow: 1px 1px 10px rgba(24 15 24 /25%);
        margin: 15px 10px;
        font-weight: 550;
        cursor: pointer;
    }

    .btn_upload_list:hover {
        transform: translateY(-5px);
        transition: 0.2s all linear;
    }

    .list_item {
        padding: 15px;
        border: none;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    #text_list {
        display: flex;
        flex-direction: column;
        width: 450px;
        margin: 10px auto;
    }

    #text_list label {
        text-align: left;
        margin: 5px;
        font-weight: 550;
        text-transform: capitalize;
    }
</style>


<?php
if (isset($bill) && (is_array($bill))) {
    extract($bill);
    // var_dump($bill);
}

?>

<div class="row">
    <div class="row  form-title">
        <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <div class="row form-content">
        <form action="index.php?act=capnhatdh" method="post">
            <div class="row margin-bottom10" id="text_list">
                <label class="text_list" for="">Mã đơn hàng</label>

                <input type="text" class="list_item" value="DAM-<?= $id ?>" disabled>
            </div>

            <div class="row margin-bottom10" id="text_list">
                <label for="">Tình trạng đơn hàng</label>
                <select name="trangthai" id="" class="list_item">
                <!-- <option><?= $bill_status ?></option> -->
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>

            </div>

            <div class="row margin-bottom">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn_upload_list" name="update" value="CẬP NHẬT">
                <input type="reset" class="btn_upload_list" value="NHẬP LẠI">
                <a href="index.php?act=dsdh"><input type="button" class="btn_upload_list" value="DANH SÁCH"></a>
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