<?php

session_start();

include_once "model/pdo.php";
include_once "model/sanpham.php";
include_once "model/loai.php";
include_once "model/taikhoan.php";
include_once "model/viewcart.php";
include_once "view/header.php";
include_once "global.php";


if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnews = selectall_prod_home();
$dsdm = selectall_cate();
$dstop10 = selectall_prod_top10();

if (isset($_GET['act']) && ($_GET['act']) != "") {

    $act = $_GET['act'];

    switch ($act) {


        case 'product':

            include_once "view/product.php";
            break;

        case 'dangnhap':
            

            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ho_ten = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $check_user = check_user($ho_ten, $mat_khau);
                
                if (is_array($check_user)) {

                    $_SESSION['info_user'] = $check_user;

                    if ($check_user['vai_tro'] == 0) {
                        header('location:index.php');            


                    } else if ($check_user['vai_tro'] == 1) {
                        header('location:admin/index.php');
                    }


                } else {
                    $thongbao = "❌ Tài khoản không tồn tại! Kiểm tra và lại!";
                }

            }
            

            include_once "./login/login.php";
            break;

        case 'dangki':

            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $email = $_POST['email'];
                $ho_ten = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $que_quan = $_POST['que_quan'];
                $sdt = $_POST['sdt'];
                if (empty($ho_ten)) {
                    $errors['user'] = "Tên không được để giỗng";
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Địa chỉ email không hợp lệ";
                }
                if (!preg_match('/^[0-9]{10}$/', $sdt)) {
                    $errors['sdt'] = "Số điện thoại không hợp lệ";
                }
                if (empty($mat_khau)) {
                    $errors['pass'] = "Mật khẩu không được để trống";
                }
                if (!isset($errors)) {
                    insert_user($ho_ten, $email, $mat_khau, $que_quan, $sdt);
                    $thongbao = "✔️ Đăng ký thành công";

                }

            }

            include_once "./login/login.php";
            break;


        case 'editTK':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ho_ten = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $email = $_POST['email'];
                $que_quan = $_POST['que_quan'];
                $sdt = $_POST['sdt'];
                $id = $_POST['id'];

                if (empty($ho_ten)) {
                    $errors['user'] = "Tên không được để giỗng";
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Địa chỉ email không hợp lệ";
                }
                if (!preg_match('/^[0-9]{10}$/', $sdt)) {
                    $errors['sdt'] = "Số điện thoại không hợp lệ";
                }
                if (empty($mat_khau)) {
                    $errors['pass'] = "Mật khẩu không được để trống";
                }
                if (!isset($errors)) {
                    update_user($ho_ten, $email, $mat_khau, $que_quan, $sdt, $id);
                    $_SESSION['info_user'] = check_user($ho_ten, $mat_khau);
                    header('location: index.php?act=editTK');
                }



            }

            include_once "view/editTK.php";
            break;


        case 'quenMK':

            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là: " . $check_email['mat_khau'];
                } else {
                    $thongbao = "Email không tồn tại trong hệ thống";
                }

            }

            include_once "view/forget-pass.php";
            break;


        case 'logout':
            session_unset();
            session_destroy();
            header("Location:index.php?act=dangnhap");

            break;


        // include "./view/login.php";
        // trang sản phẩm chi tiết
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];

            } else {
                $kyw = "";
            }



            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }

            $dssp = selectall_prod($kyw, $iddm);
            $ten_dm = select_name_cate($iddm);

            include_once "view/sanpham.php";


            break;

        case 'sanphamchitiet':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $ma_hh = $_GET['idsp'];

                $one_prod = selectone_prod($ma_hh);
                extract($one_prod);
                $iddm = $ma_loai;

                $spkhac = select_prod_same_kind($_GET['idsp'], $iddm);

            } else {
                include_once "view/home.php";
            }


            include_once "view/sp-detail.php";
            break;

        case 'viewcart':

            include_once "view/viewcart.php";
            break;


        case 'addCART':
            if (isset($_POST['addCART']) && ($_POST['addCART'])) {

                $id = $_POST['id'];

                if (!isset($_SESSION['mycart'][$id])) {

                    $tensp = $_POST['tensp'];
                    $anh = $_POST['anh'];
                    $gia = $_POST['gia'];
                    $soluong = 1;
                    $ttien = intval($soluong) * intval($gia);
                    $prodADD = [$id, $tensp, $anh, $gia, $soluong, $ttien];

                    $_SESSION['mycart'][$id] = $prodADD;
                } else {
                    $_SESSION['mycart'][$id][4] += 1;
                    $_SESSION['mycart'][$id][5] = $_SESSION['mycart'][$id][4] * $_SESSION['mycart'][$id][3];
                }

            }

            header('Location: index.php?act=viewcart');
            break;
        case 'updateCart':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['mycart'][$_POST['id']][4] = $_POST['soluong'];
            }
            header('Location: index.php?act=viewcart');

            break;

        case 'delcart':

            if (isset($_GET['idcart'])) {
                // hàm array_slice dùng để xoa mảng. Gồm 3 tham số: cái mảng, vị trí cần xóa, xóa bao nhiêu phần tử (ở đây 1 là chỉ xóa vị trí đó)
                unset($_SESSION['mycart'][$_GET['idcart']]);

            } else {
                $_SESSION['mycart'] = [];
            }

            header('Location:index.php?act=viewcart');
            break;
        // echo "<pre>";
        //     print_r($_GET['idcart']);
        //     die;



        // Tiến hành đặt hàng

        case 'bill':

            include_once "view/bill.php";
            break;

        case 'billconfirm':
            //Tạo đơn hàng / bill

            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {

                // TẠO ĐƠN HÀNG 

                if (isset($_SESSION['info_user'])) {
                    $idKH = $_SESSION['info_user']['ma_kh'];
                } else {
                    $idKH = 0;
                }

                $name_bill = $_POST['person'];
                $email_bill = $_POST['email'];
                $ngay_dh_bill = date('h:i:s a d/m/Y');
                $tong_dh_bill = tongdonhang();
                $pttt_bill = $_POST['pttt_bill'];

                $id_donhang = insert_bill($idKH, $name_bill, $email_bill, $pttt_bill, $ngay_dh_bill, $tong_dh_bill);

                // insert into cart với $_SESSION['mycart'] và $id_donhang
                // TẠO GIỎ HÀNG
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['info_user']['ma_kh'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $id_donhang);
                }


                // xóa session cart

                $_SESSION['mycart'] = "";

            }


            global $id_donhang;

            $bill = selectone_bill($id_donhang);
            $bill_chitiet = selectall_cart($id_donhang);

            include_once "view/billconfirm.php";
            break;


        case 'mybill':

            $listbill = load_all_bill_byIDKH('', $_SESSION['info_user']['ma_kh']);
            include_once "view/mybill.php";
            break;


        default:
            include_once "view/home.php";
            break;
        
    }






} else {
    if(!isset($_SESSION['info_user'])){
        header('location:index.php?act=dangnhap');
    }
    include_once "view/home.php";
    
}

include_once "view/footer.php";