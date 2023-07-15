<div class="row margin-bottom">
            <div class="box-left">

            
            <div class="row margin-bottom">

         <div class="box-title"><strong><?=$ten_dm ?></strong></div>

            <div class="row box-content">
                <?php

                        $i =0;
                        foreach ($dssp as $sp) {
                        extract($sp);
                        $anh = $img_path.$hinh;
                        $link_sp = "index.php?act=sanphamchitiet&idsp=".$ma_hh;

                        if (($i==2) ||($i==5) ||  ($i==8) || ($i==11)){
                            $mr="";
                        }else{
                            $mr="margin-right";
                        }


                        echo '<div class="box-sp '.$mr.' margin-bottom">
                        <div class="image">
                            <img src="'.$anh.'" alt="">
                        </div>

                        <p>$ '.$don_gia.'</p>
                        <a href="'.$link_sp.'">'.$te_hh.'</a>
                        </div>';

                        $i++;
                        }
                

                    ?>
            </div>
            
                
                
                
               


            </div>

    </div>

          

        