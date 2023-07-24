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

            //Mua hàng
            
            
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
                    include_once "view/viewcart.php";
                    break;
    
                case 'delcart':
    
                    if (isset($_GET['idcart'])) {
                        // hàm array_slice dùng để xoa mảng. Gồm 3 tham số: cái mảng, vị trí cần xóa, xóa bao nhiêu phần tử (ở đây 1 là chỉ xóa vị trí đó)
                        array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
                        
                    }else{
                        $_SESSION['mycart'] = [];
                    }
    
                    header('Location: index.php?act=viewcart');
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