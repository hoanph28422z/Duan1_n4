<style>
    .row {
        position: relative;
        left: 102px;
        width: 79vw;

    }

    .btn {
        border: none;
        padding: 6px 15px;
        outline: none;
        box-shadow: 1px 1px 10px rgba(25 25 25 /25%);
        border-radius: 5px;
        margin-left: 10px;
    }

    .form-dsHANG table tr th,
    .form-dsHANG table tr td {
        text-align: center;
    }
</style>


<div class="row">
    <div class="row margin-bottom  form-title">
        <h1>Quản lý loại hàng</h1>
    </div>



    <div class="row form-content">

        <div class="row margin-bottom10 form-dsHANG">


            <table>
                <tr>

                    <th>MÃ HÀNG </th>
                    <th>TÊN HÀNG HÓA</th>
                    <th>HÌNH</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>LƯỢT XEM</th>
                    <th><a href="index.php?act=addsp">Thêm Mới</a></th>
                </tr>


                <?php
                foreach ($dssanpham as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=" . $ma_hh;
                    $xoasp = "index.php?act=xoasp&id=" . $ma_hh;
                    $img = "../upload/" . $hinh;
                    if (is_file($img)) {
                        $anh = "<img src='" . $img . "' width='100' height='80' ";
                    } else {
                        $anh = "no photo";
                    }
                    echo
                    '<tr>

                                        <td>' . $ma_hh . '</td>
                                        <td>' . $te_hh . '</td>    
                                        <td>' . $anh . '</td>    
                                        <td>' . $don_gia . '</td>    
                                        <td>' . $so_luong . '</td>    
                                        <td>' . $so_luot_xem . '</td>    
                                        <td><a href="' . $suasp . '"><input class="btn" type="button" value="Sửa"></a> 
                                          <a href="' . $xoasp . '"><input  class="btn" type="button" value="Xóa"></a></td>
                                        </tr>';
                }

                ?>

            </table>
        </div>




    </div>


</div>