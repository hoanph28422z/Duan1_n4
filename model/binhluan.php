<?php

  // TẠO MODEL MÔ-ĐUN BÌNH LUẬN

  function add_comment($noi_dung, $ma_kh, $ma_hh, $ngay_bl){
    $sql = "insert into binh_luan(noi_dung, ma_kh, ma_hh, ngay_bl) values('".$noi_dung."', '".$ma_kh."', '".$ma_hh."', '".$ngay_bl."')";
    pdo_execute($sql);
}

  function selectall_binhluan($idprod){
  $sql = "select * from binh_luan  where 1";
  if ($idprod > 0) {
    $sql.= " and  ma_hh='".$idprod."' "; 
    
  }
  $sql.= " order by ma_bl desc";


  $dsbl = pdo_query($sql);
  return $dsbl;
  }

  function xoa_bl($ma_bl){
    $sql = "delete from binh_luan where ma_bl=".$ma_bl;
    pdo_execute($sql);
}


?>