<?php
    include_once "../model/pdo.php";
    include_once "../model/loai.php";
    include_once "../model/sanpham.php";
    include_once "../model/taikhoan.php";
    include_once "../model/binhluan.php";
    include_once "../model/viewcart.php";
    include_once "../model/thongke.php";
    include_once "header.php";
    // controller

    if (isset($_GET['act'])){
        $act = $_GET['act'];

        switch ($act) {
            case 'adddm':
                // Kiểm tra xem người người dùng đã click vào nút add hay chưa?
               
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_cate($tenloai);
                    $thongbao = "Thêm thành công";
                }
               
                
                include_once "../admin/danhmuc/add.php";
                break;

            case 'listdm':

                $dsdanhmuc = selectall_cate();
                
                include_once "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&$_GET['id']>0) {
                    del_cate($_GET['id']);
                }
                
                $dsdanhmuc = selectall_cate();
                include_once "danhmuc/listdm.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&$_GET['id']>0) {
                $danhmuc = selectone_cate($_GET['id']);
                }
                include_once 'danhmuc/update.php';
                break;

            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $maloai = $_POST['id'];
                    update_cate($tenloai, $maloai);
                    $thongbao = "Cập nhật thành công";

                }

                
                $dsdanhmuc = selectall_cate();
                include_once "danhmuc/listdm.php";
                break;



            /*  CONTRLLER CHO SẢN PHẨM  */


                



            
            /* xong sản phẩm */
            default:
                include_once "home.php";
                break;
        }
    }else{
        include_once "home.php";
    }


   
    include_once "footer.php";

?>