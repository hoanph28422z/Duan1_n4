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

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'adddm':
            // Kiểm tra xem người người dùng đã click vào nút add hay chưa?

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $tenloai = $_POST['tenloai'];

                if ($tenloai == "") {
                    $errors['tenloai'] = "Không được để trống";
                }
                if (!isset($errors)) {
                    insert_cate($tenloai);
                    $thongbao = "Thêm thành công";
                }
            }


            include_once "../admin/danhmuc/add.php";
            break;

        case 'listdm':

            $dsdanhmuc = selectall_cate();

            include_once "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                del_cate($_GET['id']);
            }

            $dsdanhmuc = selectall_cate();
            include_once "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $danhmuc = selectone_cate($_GET['id']);
            }
            include_once 'danhmuc/update.php';
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['id'];
                if ($tenloai == "") {
                    $errors['tenloai'] = "Không được để trống ";
                }
                if (!isset($errors)) {
                    update_cate($tenloai, $maloai);
                    $thongbao = "Cập nhật thành công";
                }
            }
            $dsdanhmuc = selectall_cate();
            include_once "danhmuc/list.php";


            break;





        case 'addsp':
            // Kiểm tra xem người người dùng đã click vào nút add hay chưa?

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensanpham = $_POST['tenhang'];
                $giasanpham = $_POST['giahang'];
                $quantity = $_POST['so_luong'];
                $cate = $_POST['loaihang'];
                $date = $_POST['ngay'];
                $des = $_POST['mota'];
                $chi_tiet = $_POST['chi_tiet'];

                $anh = $_FILES['hinhanh'];
                $image = $anh['name'];


                if (empty($tensanpham)) {
                    $errors['tenhang'] = "Không được bỏ trống";
                }
                if (empty($giasanpham)) {
                    $errors['giahang'] = "Không được bỏ trống";
                    if ($giasanpham < 0) {
                        $errors['giahang'] = "Giá của sản phẩm phải lớn hơn 0";
                    }
                }
                if (empty($quantity)) {
                    $errors['quantity'] = "Số lượng không được để trống";
                    if ($quantity < 0) {
                        $errors['quantity'] = "Số lượng không được âm";
                    }
                }
                if (empty($cate)) {
                    $errors['loaihang'] = "Không được để trống tên hàng";
                }
                if (empty($date)) {
                    $errors['ngay'] = "Không được để trống ngày tháng năm";
                }
                if (empty($des)) {
                    $errors['mota'] = "Không được để trống mô tả";
                }
                if (empty($chi_tiet)) {
                    $errors['chi_tiet'] = "Không được để trống mô tả";
                }
                if ($anh['size'] <= 0) {
                    $errors['image'] = "Bạn chưa nhập ảnh";
                } else {
                    $img = ['jpg', 'png', 'gif'];
                    //Lấy phần mở rộng của file
                    $ext = pathinfo($anh['name'], PATHINFO_EXTENSION);
                    if (!in_array($ext, $img)) {
                        $errors['hinhanh'] = "File của bạn không phải là hình";
                    }
                }
                if (!isset($errors)) {

                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                    insert_prod($tensanpham, $giasanpham, $quantity, $anh, $cate, $date, $des, $chi_tiet);
                    $thongbao = "Thêm thành công";
                    die();
                }

            }





            $dsdanhmuc = selectall_cate();
            // var_dump($dsdanhmuc);
            include_once "sanpham/add.php";
            break;


        case 'listsp':
            if (isset($_POST['listOK']) && ($_POST['listOK'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }




            $dssanpham = selectall_prod($kyw, $iddm);
            $dsdanhmuc = selectall_cate();
            include_once "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                del_prod($_GET['id']);
            }

            $dssanpham = selectall_prod('', 0);
            include_once "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {

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
                $chi_tiet = $_POST['chi_tiet'];
                $anh = $_FILES['hinhanh']['name'];


                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                update_prod($tensanpham, $giasanpham, $quantity, $anh, $cate, $date, $des, $chi_tiet, $ma_hh);
                $thongbao = "Cập nhật thành công";
                $dssanpham = selectall_prod('', 0);
                include_once "sanpham/list.php";
            }
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

        // Hang hoa
        case 'dsdh':

            if (isset($_POST['listOK']) && ($_POST['listOK'])) {
                $kyw = $_POST['kyw'];
                $idKH = $_POST['idKH'];
            } else {
                $kyw = '';
                $idKH = 0;
            }






            $listbill = load_all_bill_byIDKH($kyw, $idKH);
            include_once "bill/list.php";
            break;

        case 'xoadh':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoaDH($_GET['id']);
            }

            $listbill = load_all_bill_byIDKH(0);
            include_once "bill/list.php";
            break;


        case 'suadh':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $bill = info_one_bill($_GET['id']);

                // var_dump($bill);
            }

            $listbill = load_all_bill_byIDKH('', 0);

            include_once "bill/suadh.php";
            break;


        case 'capnhatdh':

            if (isset($_POST['update']) && ($_POST['update'])) {

                capnhat_dh($_POST['trangthai'], $_POST['id']);
                $thongbao = "✔️ Cập nhật thành công!";
            }
            $bill = info_one_bill($_POST['id']);
            $listbill = load_all_bill_byIDKH('', 0);
            include_once "bill/suadh.php";
            break;

        // Thong ke
        case 'thongke':
            $listthongke = loadall_thongke();
            include_once "thongke/bangthongke.php";
            break;


        case 'bieudo':
            $listthongke = loadall_thongke();
            include_once "thongke/bieudo.php";
            break;

        case 'dskh':
            $dsTK = selectall_TK();

            include_once "taikhoan/list.php";

            break;
        case 'xoatk':
            if (isset($_GET['makh']) && ($_GET['makh']) > 0) {
                $ma_kh = $_GET['makh'];
                delete_user($ma_kh);
            }
            $dsTK = selectall_TK();


            include_once "taikhoan/list.php";
            break;

        case 'suatk':

            if (isset($_GET['makh']) && ($_GET['makh']) > 0) {
                $ma_kh = $_GET['makh'];
                $dskh = selectone_TK($ma_kh);
                extract($dskh);
            }

            include_once "taikhoan/update.php";
            break;



        /* xong sản phẩm */
        default:
            include_once "home.php";
            break;
    }
} else {
    include_once "home.php";
}



include_once "footer.php";