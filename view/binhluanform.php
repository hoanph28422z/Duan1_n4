<?php   
    session_start();
    include_once "../model/pdo.php";
    include_once "../model/binhluan.php";
    if (isset($_SESSION['info_user'])) {
        $ho_ten = $_SESSION['info_user']['ho_ten'];
    }else{
        $ho_ten = "";
    }
    $idprod = $_REQUEST['idprod'];
    $dsbl = selectall_binhluan($idprod);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <div class="row">



        <div class="box-title">
            BÌNH LUẬN
        </div>

        <div class="box-content2 binhluan">
            <table>
            <?php
                
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>'.$ho_ten.'</td>';
                    echo '<td>'.$noi_dung.'</td>';
                    echo '<td>'.$ngay_bl.'</td></tr>';
                }
        ?>
            </table>
        </div>

        <?php

        if (isset($_SESSION['info_user'])) {
        extract($_SESSION['info_user']);
    

    ?>

        <!-- <div class="">

            <form style="display: flex;justify-content:space-between;margin-left: 250px;margin-right: 300px;margin-bottom: 70px;" action="<?=$_SERVER['PHP_SELF'];  ?>" method="post">
                <input type="hidden" name="ma_hh" value="<?=$idprod ?>">
                <input type="text" style="width: 500px;height: 50px;padding: 10px;" placeholder="Nhập bình luận" name="noidung" id=""> <br><br>
                <input style="width: 150px;height: 50px;background-color: #4CAF50;
                               color: white;
                               padding:10px;
                               border: none;
                               border-radius: 4px;
                               cursor: pointer;" type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div> -->

        <form style="display: flex;justify-content:space-between;margin-left: 250px;margin-right: 300px;margin-bottom: 70px;" action="<?=$_SERVER['PHP_SELF'];  ?>" method="post">
        <div class="row">
        <input type="hidden" name="ma_hh" value="<?=$idprod ?>">
                                        <div class="col-md-12">
                                            <div class="form-group mb-15">
                                               
                                                <textarea style="width: 500px;height: 50px;padding: 10px;" placeholder="Nhập bình luận" name="noidung" id=""></textarea>
                                            </div>
                                        </div>
                                     
                                        <div class="col-md-12">
                                            <input class="site-btn" type="submit" name="guibinhluan" value="Gửi bình luận">
                                        </div>
                                    </div>

        </form>








        <?php  
        }else{
            echo '<h3 style="padding: 5px 10px; background: red; color: yellow;">Đăng nhập để bình luận sản phẩm</h3>';
        }
            
            
            ?>



        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noidung'];
            $ma_hh = $_POST['ma_hh'];
            $ma_kh = $_SESSION['info_user']['ma_kh'];
            date_default_timezone_set(timezone_name_from_abbr("CST"));
            $ngay_bl = date("h:i:s a d/m/Y");

            add_comment($noi_dung, $ma_kh, $ma_hh, $ngay_bl);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        


        ?>



    </div>



</body>
</html>