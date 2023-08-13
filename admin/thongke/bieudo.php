<style>
        #myChart {
                width: 650px;
                margin: 10px auto;
                background: none;
        }
</style>


<div class="row">

        <!-- <div id="myChart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
                google.charts.load('current', {
                        'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                                ['Danh mục', 'Số lượng sản phẩm'],

                                <?php
                                $tongdanhmuc = count($listthongke);
                                $i = 1;
                                foreach ($listthongke as $tk) {
                                        extract($tk);

                                        if ($i == $tongdanhmuc) $dauphay = "";
                                        else  $dauphay = ",";
                                        echo '["' . $name_loai . '", "' . $countSP . '"]' . $dauphay;
                                        $i += 1;
                                }


                                ?>


                        ]);

                        var options = {
                                title: 'Biểu đồ thống kê sản phẩm theo danh mục'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                }
        </script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.2.7/morris.min.js"> -->




        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

        <body>

                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                <script>
                        var xValues = ([


                                <?php
                                $tongdanhmuc = count($listthongke);
                                $i = 1;
                                foreach ($listthongke as $tk) {
                                        extract($tk);

                                        if ($i == $tongdanhmuc) $dauphay = "";
                                        else  $dauphay = ",";
                                        echo '["' . $name_loai . '",]' . $dauphay;
                                        $i += 1;
                                }


                                ?>


                        ]);
                        var yValues = ([


                                <?php
                                $tongdanhmuc = count($listthongke);
                                $i = 1;
                                foreach ($listthongke as $tk) {
                                        extract($tk);

                                        if ($i == $tongdanhmuc) $dauphay = "";
                                        else  $dauphay = ",";
                                        echo '[ "' . $countSP . '" ,]' . $dauphay;
                                        $i += 1;
                                }


                                ?>


                        ]);;
                        var barColors = [
                                "#b91d47",
                                "#00aba9",
                                "#2b5797",
                                "#e8c3b9",
                                "#1e7145"
                        ];

                        new Chart("myChart", {
                                type: "pie",
                                data: {
                                        labels: xValues,
                                        datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                        }]
                                },
                                options: {
                                        title: {
                                                display: true,
                                                text: "Biểu Đồ Thống Kê Bán Sản Phẩm Các Loại"
                                        }
                                }
                        });
                </script>