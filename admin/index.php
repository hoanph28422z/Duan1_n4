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

            case 'addsp':
                // Kiểm tra xem người người dùng đã click vào nút add hay chưa?
               
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tensanpham = $_POST['tenhang'];
                    $giasanpham = $_POST['giahang'];
                    $quantity = $_POST['so_luong'];
                    $cate = $_POST['loaihang'];
                    $date = $_POST['ngay'];
                    $des = $_POST['mota'];
                    $anh = $_FILES['hinhanh']['name'];

                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    
                    insert_prod($tensanpham, $giasanpham, $quantity, $anh ,$cate, $date, $des);
                    $thongbao = "Thêm thành công";
                }
               
                $dsdanhmuc = selectall_cate();
                // var_dump($dsdanhmuc);
                include_once "sanpham/add.php";
                break;

            case 'listsp':
                if (isset($_POST['listOK']) && ($_POST['listOK'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }




                $dssanpham = selectall_prod($kyw, $iddm);
                $dsdanhmuc = selectall_cate();
                include_once "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id'])&&$_GET['id']>0) {
                    del_prod($_GET['id']);
                }
                
                $dssanpham = selectall_prod('', 0);
                include_once "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id'])&&$_GET['id']>0) {
                $sanpham = selectone_prod($_GET['id']);
                }

                $dsdanhmuc = selectall_cate();
                
                include_once 'sanpham/update.php';
                break;

            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ma_hh = $_POST['id'];
                    $tensanpham = $_POST['tenhang'];
                    $giasanpham = $_POST['giahang'];
                    $quantity = $_POST['so_luong'];
                    $cate = $_POST['loaihang'];
                    $date = $_POST['ngay'];
                    $des = $_POST['mota'];
                    $anh = $_FILES['hinhanh']['name'];

                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    update_prod($tensanpham, $giasanpham, $giamgia, $anh ,$cate, $date, $des, $ma_hh);
                    $thongbao = "Cập nhật thành công";

                }

                
                $dssanpham = selectall_prod('', 0);
                include_once "sanpham/list.php";
                break;

                
                // Binh luan
                case 'dsbl':

                    $dsbl = selectall_binhluan(0);
                    include_once "binhluan/list.php";
                    break;
    
                case 'xoabl':
    
                    if (isset($_GET['mabl']) && ($_GET['mabl'] > 0)) {
                        $ma_bl = $_GET['mabl'];
                        xoa_bl($ma_bl);
                    }
                    $dsbl = selectall_binhluan(0);
                    include_once "binhluan/list.php";
                    break;


            
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