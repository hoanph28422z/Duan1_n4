<?php

    session_start();

    include_once "model/pdo.php";
    include_once "model/sanpham.php";
    include_once "model/loai.php";
    include_once "model/taikhoan.php";
    include_once "model/viewcart.php";
    include_once "./view/header.php";
    include_once "global.php";
    

    if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart'])) {
       $_SESSION['mycart'] =[];
    }

    $spnews = selectall_prod_home();
    // $dsdm = selectall_cate();
    // $dstop10 = selectall_prod_top10();

    if (isset($_GET['act']) && ($_GET['act'])  != "") {
        $act = $_GET['act'];

        switch ($act) {

            case 'dangnhap':

                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $ho_ten = $_POST['user'];
                    $mat_khau = $_POST['pass'];
                    $email = $_POST['email'];
                    $check_user = check_user($ho_ten, $mat_khau);
                    
                    

                    if (is_array($check_user)) {

                        $_SESSION['info_user'] = $check_user;
                        header('location:./index.php');
                        $thongbao = "✔️ Đăng nhập thành công!";
                    }else{
                        $thongbao = "❌ Tài khoản không tồn tại! Kiểm tra và lại!";
                    }
 
                 }
 
                 include_once "./login/login.php";
                 break;

                 case 'dangki':

                    
                    break;

                    case 'editTK':

                        
                        break;
        
        
        
                    case 'logout':
                        session_unset();
                        header("Location:index.php");

                        break;
        
            
            // include "./view/login.php";
            // trang sản phẩm chi tiết

            case 'sanphamchitiet':

                if (isset($_GET['idsp']) && ($_GET['idsp'] >0)) {
                    $ma_hh = $_GET['idsp'] ;
                    
                    $one_prod = selectone_prod($ma_hh);
                    extract($one_prod);
                    $iddm = $ma_loai;

                    $spkhac = select_prod_same_kind($_GET['idsp'], $iddm);

                }else {
                    include_once "view/home.php";
                }


                include_once "view/sp-detail.php";
                break;

                case 'viewcart':

                    include_once "view/viewcart.php";
                    break;
    
    
                case 'addCART':
                    if (isset($_POST['addCART']) && ($_POST['addCART'])) {
                        
                            // do something with $_POST['id']
                        
                        $id = $_POST['id'];
                        $tensp = $_POST['tensp'];
                        $anh = $_POST['anh'];
                        $gia = $_POST['gia'];
                        $soluong = 1;
                        $ttien = $soluong*$gia;
                        $prodADD = [$id, $tensp, $anh, $gia, $soluong, $ttien];
                        
                        array_push($_SESSION['mycart'], $prodADD);
    
                        
                        
                    }
                    header('Location: index.php?act=viewcart');
                     break;
    
                case 'delcart':
    
                    if (isset($_GET['idcart'])) {
                        // hàm array_slice dùng để xoa mảng. Gồm 3 tham số: cái mảng, vị trí cần xóa, xóa bao nhiêu phần tử (ở đây 1 là chỉ xóa vị trí đó)
                        array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
                        
                    }else{
                        $_SESSION['mycart'] = [];
                    }
    
                    header('Location:index.php?act=viewcart');
                    break;
    


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
                    }else{
                        $idKH = 0;
                    }




                    $name_bill = $_POST['person'];
                    $email_bill = $_POST['email'];
                    $ngay_dh_bill = date('h:i:s a d/m/Y');
                    $tong_dh_bill= tongdonhang();
                    $pttt_bill = $_POST['pttt'];

                    $id_donhang = insert_bill($idKH, $name_bill, $email_bill, $pttt_bill ,$ngay_dh_bill, $tong_dh_bill);
                    
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


        

        
    }else{
    include_once "view/home.php";
    }
    include_once "view/footer.php";


?>