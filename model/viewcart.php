



<?php

    function viewcart($del){
        global $img_path;
        $i=0;
        $tongtien=0;
       

        if ($del==1) {


            $xoasp_td2 = '<td></td>';
            

            
        }else{
            

            $xoasp_td2="";
        }


        echo '
        <div class="row">
                <tr>
                <thead>
                <th>STT</th>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
               
                
                </thead>
                </tr>
        </div>
        ';
    foreach ($_SESSION['mycart'] as $cart) {

        $hinh = $img_path.$cart[2];
        $ttien = $cart[3]*$cart[4];
        $tongtien = $tongtien + $ttien;
            // $xoasp = '<a href="index.php?delcart&idcart='.$i.'"><input type="button" value="Xoa"></a>';
                    echo '

                     <tr class"mycart">
                     
                        <td>'.$i.'</td>
                        <td><img src="'.$hinh.'" alt="" width="98%" height="100px; padding-top: 3px;"></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$ttien.'</td>

                    </tr>';


            $i+=1;  

    }

    echo '<tr>
            <td>Tổng đơn hàng</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>'.$tongtien.'</td>
            '.$xoasp_td2.'
               
            </tr>';
    }





    function tongdonhang(){
       
        $tongtien=0;
        

       
    foreach ($_SESSION['mycart'] as $cart) {
       
        $ttien = $cart[3]*$cart[4];
        $tongtien = $tongtien + $ttien;


    }

    return $tongtien;

    
    }



    function insert_bill($idKH, $name_bill, $email_bill, $pttt_bill ,$ngay_dh_bill, $tong_dh_bill){
        $sql = "insert into bill(idKH, name_bill, email_bill, pttt_bill, ngay_dh_bill, tong_dh_bill) values('$idKH', '$name_bill', '$email_bill', '$pttt_bill' ,'$ngay_dh_bill', '$tong_dh_bill')";
        return  pdo_execute_return_lastInsertId($sql);
    }



    
    function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill){
        
          $sql  = "INSERT INTO `cart` (`iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES ('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill');";
        
        
         pdo_execute($sql);
    }


    
    function selectone_bill($id_donhang){
       
        $sql = "select * from bill where id=".$id_donhang;
        $bill = pdo_query_one($sql);
        return $bill;
    }


    function selectall_cart($id_donhang){
        global $id_donhang;
        $sql = "select * from cart where idbill=".$id_donhang;
        $cart = pdo_query($sql);
        return $cart;
    }





    function show_detail_bill($bill_chitiet){
        
        $i=0;
        $tongtien=0;
       

      
        echo '
                <tr>
                <th>STT</th>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                

                </tr>
        
        ';
    foreach ($bill_chitiet as $cart) {
        global $img_path;
        $i++;
        $hinh = $img_path.$cart['img'];
        // $ttien = $cart['price']*$cart['soluong'];
        $tongtien+=$cart['thanhtien'];



                    echo '
        
        
        
        
                     <tr>
                        <td>'.$i.'</td>
                        <td><img src="'.$hinh.'" alt="" width="98%" height="100px; padding-top: 3px;"></td>
                        <td>'.$cart['name'].'</td>
                        <td>'.$cart['price'].'</td>
                        <td>'.$cart['soluong'].'</td>
                        <td>'.$cart['thanhtien'].'</td>
                       
                    </tr>';


            $i+=1;  

    }

    echo '<tr>
            <td>Tổng đơn hàng</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>'.$tongtien.'</td>
           
               
            </tr>';
    }



    // load đơn hàng của tôi theo idKH


    function load_all_bill_byIDKH($kyw="", $idKH=0){
        $sql = "select * from bill where 1";
        if (isset($idKH) && ($idKH > 0)) {
        $sql.= " AND idKH=".$idKH;
        }elseif($kyw!=""){
            $sql.=" and id like '%".$kyw."%' ";
        }
        $sql.=" order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }



    function get_ttdh($n){
        switch ($n) {
            case '0':
                $trangthaidonhang = "Đơn hàng mới";
                break;
            
            case '1':
                $trangthaidonhang = "Đang xử lí";
                break;

            case '2':
                $trangthaidonhang = "Đang giao";
                break;


            case '3':
                $trangthaidonhang = "Hoàn tất";
                break;

        
            default:
                    $trangthaidonhang = "Đơn hàng mới";
                break;
        }

        return $trangthaidonhang;
    }


    function demsoluongmathang($idbill){
        $sql = "select * from cart where idbill=".$idbill;
        $soluongbill = pdo_query($sql);
        return count($soluongbill);
    }   


    // Chức năng xóa đơn hàng

    function xoaDH($id){
        $sql = "delete from bill where id=".$id;
        pdo_execute($sql);
    }

    // lấy thông tin


    function info_one_bill($id){
        $sql = "select * from bill where id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }


    // tiến hành sửa

    function capnhat_dh($ttdh, $id){
       $sql = "update bill set bill_status='".$ttdh."' where id=".$id;
       pdo_execute($sql);
       
    }





?>
<style>
    .row{
        /* margin:100px 100px 150px 100px; */
        text-align: center;
        
    }
    table {
  border-collapse: collapse; /* remove space between table cells */
  width: 1000px;
  /* max-width: 800px; */
  margin: 0 auto; /* center the table */
  font-family: Arial, sans-serif;
  font-size: 14px;
  margin-bottom: 70px;
}

thead {
  background-color: #333;
  color: #fff;
}

th {
  padding:20px;

  text-align: center;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

td {
  padding: 20px;
}
</style>    
