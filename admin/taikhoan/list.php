<style>
.row {
    position: relative;
    left: 102px;
    width: 79vw;

}
.text_center tr th,
.text_center tr td{
    text-align: center;
    text-transform: uppercase;
}

.btn_user {
    background: none;
    border: none;
    box-shadow: 1px 1px 10px rgba(22 25 19 /15%);
    padding: 10px 15px;
    border-radius: 15px;
    margin: 0 10px;
    cursor: pointer;
}

.text_user {
    display: flex;
    justify-content: center;

}
</style>


<div class="row">
    <div class="row margin-bottom  form-title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>

    <div class="row form-content">

        <div class="row margin-bottom10 form-dsLOAI">
            <table class="text_center">
                <tr>

                    <th>MÃ TK</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th>Chức Năng</th>
                </tr>


                <?php
                                foreach ($dsTK as $tk) {
                                    extract($tk);
                                    $suatk = "index.php?act=suatk&makh=".$ma_kh;
                                    $xoatk= "index.php?act=xoatk&makh=".$ma_kh;
                                    echo 
                                        '<tr>

                                        <td>'.$ma_kh.'</td>
                                        <td>'.$ho_ten.'</td>    
                                        <td>'.$email.'</td>    
                                        <td>'.$mat_khau.'</td>    
                                        <td>'.$vai_tro.'</td>    
                                        <td class="text_user">
                                        <a href="'.$suatk.'"><input type="button" class="btn_user" value="Sửa"></a> 
                                          <a href="'.$xoatk.'"><input type="button" class="btn_user" value="Xóa"></a></td>
                                        </tr>';

                                }

                                ?>

            </table>
        </div>




    </div>


</div>