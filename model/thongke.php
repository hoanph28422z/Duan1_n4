<?php
    // lấy dữ liệu từ bảng loại và sản phẩm dựa theo yêu cầu của bảng

    function loadall_thongke(){
    $sql = "select loai.ma_loai as id_loai, loai.ten_loai as name_loai, count(hang_hoa.ma_hh) as countSP, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice from hang_hoa left join loai on loai.ma_loai = hang_hoa.ma_loai group by loai.ma_loai order by loai.ma_loai desc";
    $lisdstk = pdo_query($sql);
    return $lisdstk;
       
    }


?>