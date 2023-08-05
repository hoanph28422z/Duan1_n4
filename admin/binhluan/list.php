<style>
    .row {
        position: relative;
        left: 92px;
        width: 79vw;
    }

    .btn_comment {
        border: none;
        box-shadow: 1px 1px 10px rgba(24 15 24 /25%);
        border-radius: 5px;
        padding: 10px 25px;
    }

    .table tr th,
    .table tr td {
        text-align: center;
    }
</style>


<div class="row">
    <div class="row margin-bottom  form-title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>

    <div class="row form-content">

        <div class="row margin-bottom10 form-dsLOAI">
            <table class="table">
                <tr>

                    <th>ID</th>
                    <th>NỘI DUNG</th>
                    <th>MÃ KH</th>
                    <th>MÃ HH</th>
                    <th>NGÀY ĐĂNG</th>
                    <th>Chức Năng</th>
                </tr>


                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);

                    $xoabl = "index.php?act=xoabl&mabl=" . $ma_bl;
                    echo
                    '<tr>

                                        <td>' . $ma_bl . '</td>
                                        <td>' . $noi_dung . '</td>
                                        <td>' . $ma_kh . '</td>    
                                        <td>' . $ma_hh . '</td>    
                                        <td>' . $ngay_bl . '</td>    
                                        <td>
                                          <a href="' . $xoabl . '"><input type="button" class="btn_comment" value="Xóa"></a></td>
                                        </tr>';
                }

                ?>

            </table>
        </div>





    </div>


</div>