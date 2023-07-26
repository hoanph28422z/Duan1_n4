
<style>
    .row{
        
        margin:100px 100px 150px 100px;
        text-align: center;
    }
    table {
  border-collapse: collapse; /* remove space between table cells */
  width: 100%;
  /* max-width: 800px; */
  margin: 0 auto; /* center the table */
  font-family: Arial, sans-serif;
  font-size: 14px;
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
  padding: 10px;
}
</style>




<div class="row">

                    <div class="box-title">
                        ĐƠN HÀNG CỦA TÔI
                    </div>

                    <div class="box-bill">
                            <table border="1">

                                    <tr>
                                    <thead>
                                    <th>STT</th>
                                    <th>MÃ ĐH</th>
                                    <th>NGÀY ĐẶT</th>
                                    <th>SỐ LƯỢNG ĐH</th>
                                    <th>TỔNG GIÁ TRỊ ĐH</th>
                                    <th>TÌNH TRẠNG ĐH</th>
                                    </thead>
                                    </tr>

                                    <?php

                                    if (is_array($listbill)) {
                                        $i=0;
                                        foreach ($listbill as $bill) {
                                            extract($bill);
                                            $i++;

                                            $trangthaidonhang = get_ttdh($bill['bill_status']);
                                            $countSP = demsoluongmathang($bill['id']);

                                            echo '
                                            
                                            <tr>

                                            <td>'.$i.'</td>
                                            <td>DAM-'.$id.'</td>
                                            <td>'.$bill['ngay_dh_bill'].'</td>
                                            <td>'.$countSP.'</td>
                                            <td>'.$bill['tong_dh_bill'].'</td>
                                            <td>'.$trangthaidonhang.'</td>
    
                                            </tr>
                                                ';
                                           
                                        }
                                    }
                                        
                                    

                                        ?>




                                    

                            </table>
                       
                    </div>

                    
             </div>