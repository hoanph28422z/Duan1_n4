

<div class="viewcart">

  <div class="viewcart_once">

    <div class="box-title">
      <h2>GIỎ HÀNG</h2><i class='bx bx-cart-alt bx-tada'></i>
    </div>
<form action="index.php?act=updateCart" method="post">
    <div class="box-content tableCART">

      <table>
        <tr>
          <thead>
            <th>MSV</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
          </thead>
        </tr>
        <?php
        // $tongtien = 0;
        
        foreach ($_SESSION['mycart'] as $id => $cart) {
          $hinh = $img_path . $cart[2];
          $ttien = $cart[3] * $cart[4];
          
          $html = "
          <div>
          <td>$cart[3]<input type=\"hidden\" class=\"iprice\" value=\"$cart[3]\"></td>
          <td>
          <form action='' method='POST'>
          <input class=\"iquantity\" onchange='subTotal()' type=\"number\" name=\"soluong\" value=\"$cart[4]\" min=\"1\" max=\"100\">
          </td>
          <td class=\"itotal\">$ttien</td>
            </div>
          ";
          // $tongtien = $tongtien + $ttien;
          $xoasp = '<a href="index.php?act=delcart&idcart='. $id .'"><input type="button" value="HỦY"></a>';
          echo '
                           <tr>
                           <td>' . $id . '</td>
                         <td><img src="' . $hinh . '" alt="" width="98%" height="100px; padding-top: 3px;"></td>
                        <td>' . $cart[1] . '</td>
                       <td>'.$html.'</td>
                      <td>' . $xoasp . '</td>
                      </tr>';


        }
        echo '
        <tr class="sum">
            <td>Tổng đơn hàng</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td id="gtotal"></td>
            <th></th>
               
            </tr>';



        ?>



      </table>


      <a href="index.php?act=bill"><input type="button" style="padding: 5px 10px;   margin-bottom: 70px;
 margin-right: 15px;" value="Tiếp tục đặt hàng"></a>
      <a href="index.php?act=delcart"><input type="button" style="padding: 5px 10px;   margin-bottom: 70px;
 margin-right: 15px;" value="Xóa giỏ hàng"> </a>


    </div>
  </div>
      </form>
  <style>
    .viewcart {
      margin-top: 83px;
      text-align: center;

    }

    .viewcart_once {
      background-image: url('https://cdn.wallpapersafari.com/51/9/aiDE7f.png');

    }

    input[type="button"] {
      background-color: #4CAF50;
      /* màu nền */
      border: none;
      /* không có đường viền */
      color: white;
      /* màu chữ */
      padding: 10px 20px;
      /* khoảng cách giữa nút và đường viền */
      text-align: center;
      /* căn giữa nội dung */
      text-decoration: none;
      /* không có gạch chân */
      display: inline-block;
      /* hiển thị thành khối */
      font-size: 16px;
      /* cỡ chữ */
      border-radius: 5px;
      /* bo góc */
      transition-duration: 0.4s;
      /* thời gian chuyển động */
      cursor: pointer;
      /* chỉ số chấm */
    }

    input[type="button"]:hover {
      background-color: #3e8e41;
      /* màu nền khi hover */
      color: white;
      /* màu chữ khi hover */
    }

    table {
      border-collapse: collapse;
      /* remove space between table cells */
      width: 1000px;
      /* max-width: 800px; */
      margin: 0 auto;
      /* center the table */
      font-family: Arial, sans-serif;
      font-size: 14px;
      margin-bottom: 70px;
    }

    thead {
      background-color: #333;
      color: #fff;
    }

    th {
      padding: 10px;
      text-align: center;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    td {
      padding: 20px;
    }
    .sum{
      background-color: gray;
    }
  </style>

<script>
            // function thaydoiQuantity(inputID, toantu, thanhTienID, price) {
            //     let intputSoluong = document.getElementById(inputID);

            //     if(toantu == '+') {
            //         intputSoluong.value = Number(intputSoluong.value) + 1;
            //     } else if(toantu == '-' && Number(intputSoluong.value)  > 1) {
            //         intputSoluong.value = Number(intputSoluong.value) - 1;
            //     } else {
            //         alert('FALSE');
            //     }

            //     document.getElementById(thanhTienID).value = price * intputSoluong.value;
            // }
              var gt=0;
            var iprice=document.getElementsByClassName('iprice');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itotal');
            var gtotal=document.getElementById('gtotal');
            function subTotal(){
              gt=0;
              for(i=0;i<iprice.length;i++){
                
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
              }
              gtotal.innerText=gt;
            }
            subTotal();
        
    </script>

</div>