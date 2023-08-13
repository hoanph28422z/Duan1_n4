<div class="viewcart_all">

    <div style="margin: 20px;padding:10px;" class="">
        <div class="">


            <div class="box-title">
                <H2>CẢM ƠN</H2>
            </div>



            <div style="padding: 10px;" class="box-bill">

                <h3>Cảm ơn quí khách đã đặt hàng</h3>

            </div>

        </div>


        <?php

        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }

        ?>


        <div class="row">

            <div class="box-title">MÃ ĐƠN HÀNG</div>
            <div class="row box-bill">

                <p><?= $bill['id'] ?></p>

            </div>
        </div>

    </div>
    <div class="row margin-bottom">

    </div>








    <div class="row">

        <div class="box-title">
            <h2>CHI TIẾT GIỎ HÀNG</h2>
        </div>

        <div class="box-content tableCART">

            <table>

                <?php
                show_detail_bill($bill_chitiet);

                ?>






            </table>




        </div>
    </div>


</div>
<style>
    .viewcart_all {
        text-align: center;
        margin-top: 85px;
    }
</style>