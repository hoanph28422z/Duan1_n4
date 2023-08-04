<?php
       // TẠO MODEL MÔ-ĐUN TÀI KHOẢN

       function insert_user($ho_ten, $email, $mat_khau, $que_quan, $sdt){
        $sql = "insert into khach_hang(ho_ten, email, mat_khau, que_quan, sdt) values('".$ho_ten."', '".$email."', '".$mat_khau."','".$que_quan."','".$sdt."')";
        pdo_execute($sql);
    }


    // Kiểm ra cho đăng nhập

    function check_user($ho_ten, $mat_khau){
        $sql = "select * from khach_hang where ho_ten='".$ho_ten."' and mat_khau='".$mat_khau."' ";
        $kh = pdo_query_one($sql);
        return $kh;
    }

    // Cập nhật tài khoản
    function update_user($ho_ten, $email, $mat_khau,$que_quan,$sdt,$id){
        $sql = "update khach_hang set ho_ten ='".$ho_ten."', email ='".$email."', mat_khau ='".$mat_khau."', que_quan ='".$que_quan."', sdt ='".$sdt."' where ma_kh =".$id;
        pdo_execute($sql);
        

    }


    // Quên mật khẩu

    
    function check_email($email){
        $sql = "select * from khach_hang where email='".$email."' ";
        $kh = pdo_query_one($sql);
        return $kh;
    }



    // LOAD TẤT CẢ NGƯỜI DÙNG

    function selectall_TK(){
        $sql = "select * from khach_hang order by ma_kh desc";
        $dsTK = pdo_query($sql);
        return $dsTK;
    }


    // Lấy 1 khách hàng


    function selectone_TK($ma_kh){
        $sql = "select * from khach_hang where ma_kh=".$ma_kh;
        $kh = pdo_query_one($sql);
        return $kh;
    }


    // Xóa tài khoản

    function delete_user($ma_kh){

        $sql = "delete from khach_hang where ma_kh=".$ma_kh;
        pdo_execute($sql);

    }


    // Cập nhật tài khoản trong admin

    // Cập nhật tài khoản
    function update_user_inADMIN($ho_ten, $email, $mat_khau,$que_quan,$sdt, $role, $id){
        $sql = "update khach_hang set ho_ten ='".$ho_ten."', email ='".$email."', mat_khau ='".$mat_khau."', que_quan ='".$que_quan."', sdt ='".$sdt."', vai_tro = '".$role."' where ma_kh =".$id;
        pdo_execute($sql);
        

    }

    

?>