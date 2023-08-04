<?php

    // TẠO MODEL MÔ-ĐUN SẢN PHẨM

    function insert_prod($tensanpham, $giasanpham, $quantity, $anh ,$cate, $date, $des, $chi_tiet){
        $sql = "insert into hang_hoa(te_hh, don_gia, so_luong, hinh, ma_loai, ngay_nhap, mo_ta, chi_tiet) values('$tensanpham', '$giasanpham', '$quantity', '$anh', '$cate', '$date', '$des','$chi_tiet')";
        pdo_execute($sql);
    }

    function selectall_prod($kyw, $iddm){
        $sql = "select * from hang_hoa where 1";
        if ($kyw != "") {
            $sql.=" and te_hh like '%".$kyw."%'";
        }
        if ($iddm >0) {
            $sql.=" and ma_loai='".$iddm."' ";
        }
        
        
        $sql.=" order by ma_hh";
        $dssanpham = pdo_query($sql);
        return $dssanpham;
    }

    function del_prod($ma_hh){
        $sql = "delete from hang_hoa where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    function selectone_prod($ma_hh){
        $sql = "select * from hang_hoa where ma_hh=".$ma_hh;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }

    function update_prod($tensanpham, $giasanpham, $quantity, $anh ,$cate, $date, $des,$chi_tiet, $ma_hh){
        if ($anh!="") {
            $sql = "update hang_hoa set te_hh= '".$tensanpham. "', don_gia='".$giasanpham."', so_luong='".$quantity."', 
        hinh='".$anh."', ngay_nhap='".$date."', ma_loai='".$cate."', mo_ta='".$des."',chi_tiet='".$chi_tiet."'
        where ma_hh='".$ma_hh."' ";
        }else{
            $sql = "update hang_hoa set te_hh= '".$tensanpham. "', don_gia='".$giasanpham."', so_luong='".$quantity."', ngay_nhap='".$date."', ma_loai='".$cate."', mo_ta='".$des."',chi_tiet='".$chi_tiet."'
            where ma_hh=".$ma_hh;
        }

        pdo_execute($sql);
    }



// load sản phẩ, cho trang chủ

function selectall_prod_home(){
    $sql = "select * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    $dssanpham = pdo_query($sql);
    return $dssanpham;

    // limit 0,9 là lấy đúng 9 sản phẩm kết hợp desc sẽ là mới nhất
}

// load top 10 yêu thích dựa theo lượt xem

function selectall_prod_top10(){
    $sql = "select * from hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $dssanpham = pdo_query($sql);
    return $dssanpham;

    // limit 0,9 là lấy đúng 9 sản phẩm kết hợp desc sẽ là mới nhất
}
// load gio hang
function selectall_pro_cart(){
    $sql = "select * from cart";
    $dscart = pdo_query($sql);
    return $dscart;
}


// Load sản phẩm cùng loại

function select_prod_same_kind($ma_hh, $iddm){
    $sql = "select * from hang_hoa where ma_loai=".$iddm." and  ma_hh <> ".$ma_hh;
    $sanpham = pdo_query($sql);
    return $sanpham;
}


// lấy tên danh mục

function select_name_cate($iddm){
    if ($iddm >0) {
    $sql = "select ten_loai from loai where ma_loai=".$iddm;
    $sanpham = pdo_query_one($sql);
    extract($sanpham);
    return $ten_loai;
        
    }else{
        return "";
    }
}

?>