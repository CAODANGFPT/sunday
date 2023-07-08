<div class="dm">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php 
                $tongdm = count($thongke);
                $i=1;
            foreach($thongke as $tk){
                extract($tk);
                if($i == $tongdm){$dauphay="";} else $dauphay=",";
                echo "['".$tk['tentd']."', ".$tk['countsp']."]".$dauphay;
                $i+=1;
            }
            
            ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Biểu đồ thống kê theo danh mục',
            'width': 800,
            'height': 650
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>
</div>