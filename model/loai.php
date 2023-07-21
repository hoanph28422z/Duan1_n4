<?php

    // TẠO MODEL MÔ-ĐUN DANH MỤC

    function insert_cate($tenloai){
        $sql = "insert into loai(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }

    function selectall_cate(){
        $sql = "select * from loai order by ma_loai desc";
        $dsdanhmuc = pdo_query($sql);
        return $dsdanhmuc;
    }

    function del_cate($ma_loai){
        $sql = "delete from loai where ma_loai=".$ma_loai;
        pdo_execute($sql);
    }

    function selectone_cate($ma_loai){
        $sql = "select * from loai where ma_loai=".$ma_loai;
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }

    function update_cate($tenloai, $maloai){
        $sql = "update loai set ten_loai= '".$tenloai. "' where ma_loai=".$maloai;
        pdo_execute($sql);
    }

?>