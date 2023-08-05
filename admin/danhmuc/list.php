<style>
    .row {
        position: relative;
        top: 0;
        left: 85px;
        width: 70vw;
    }

    .form-dsLOAI table tr th,
    .form-dsLOAI table tr td {
        text-align: center;

    }

    .btn {
        border: none;
        border-radius: 15px;
        box-shadow: 1px 1px 10px rgba(24 15 24 /15%);
        padding: 15px 12px;
        cursor: pointer;
        font-weight: 550;
    }

    .btn_btn {
        border: none;
        border-radius: 15px;
        box-shadow: 1px 1px 10px rgba(24 15 24 /15%);
        padding: 5px 12px;
        cursor: pointer;
        font-weight: 550;
    }
</style>

<div class="row">
    <div class="row margin-bottom  form-title">
        <h1>Quản lý loại hàng</h1>
    </div>

    <div class="row form-content">

        <div class="row margin-bottom10 form-dsLOAI">
            <table>
                <tr>

                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>


                <?php
                foreach ($dsdanhmuc as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&id=" . $ma_loai;

                    echo
                    '<tr>

                                        <td>' . $ma_loai . '</td>
                                        <td>' . $ten_loai . '</td>    
                                        <td><a href="' . $suadm . '"><input class="btn_btn" type="button" value="Sửa"></a> 

                                        </tr>';
                }

                ?>

            </table>
        </div>

        <div class="row margin-bottom10">

            <a href="index.php?act=adddm"><input type="button" class="btn" value="Nhập thêm"></a>
        </div>



    </div>


</div>