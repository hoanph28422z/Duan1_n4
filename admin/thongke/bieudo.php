<div style="margin-top: 150px;" class="row">

<div id="myChart" style="width:100%; max-width:800px; height:700px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng sản phẩm'],

        <?php
        $tongdanhmuc = count($listthongke);
        $i=1;
        foreach ($listthongke as $tk) {
                extract($tk);

                if ($i==$tongdanhmuc) $dauphay = "";
                else  $dauphay= ",";
                echo '["'.$name_loai.'", "'.$countSP.'"]'.$dauphay;
                $i+=1;
        }


        ?>

        
        ]);

        var options = {
        title:'Biểu đồ thống kê sản phẩm theo danh mục'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
        }
</script>


</div>


