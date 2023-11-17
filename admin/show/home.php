<div class="box-right__main">
    <div class="box-right__main-item">
        <div class="box-right__main-item-revenue">
            <i class="fa-solid fa-chart-simple box-right__main-item-revenue-icon"></i>
            <span class="box-right__main-item-revenue-span">
                190000000
            </span>
            <p class="box-right__main-item-revenue-p">
                Doanh số
            </p>
        </div>
        <div class="box-right__main-item-revenue">
            <i class="fa-solid fa-bag-shopping box-right__main-item-revenue-icon"></i>
            <span class="box-right__main-item-revenue-span">
                300
            </span>
            <p class="box-right__main-item-revenue-p">
                Đơn hàng
            </p>
        </div>
        <div class="box-right__main-item-revenue">
            <i class="fa-solid fa-star-half-stroke box-right__main-item-revenue-icon"></i>
            <span class="box-right__main-item-revenue-span">
                4.0
            </span>
            <p class="box-right__main-item-revenue-p">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </p>
        </div>
        <div class="box-right__main-item-revenue">
            <i class="fa-solid fa-users box-right__main-item-revenue-icon"></i>
            <span class="box-right__main-item-revenue-span">
                1900
            </span>
            <p class="box-right__main-item-revenue-p">
                Theo dõi
            </p>
        </div>
    </div>
    <div class="container">
        <h2>Danh mục</h2>
        <div id="myChart" style="max-width:700px; height:400px"></div>
    </div>
    <?php
    $dm = getall_sanpham2();
    ?>
</div>
</div>
</div>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Tên danh mục', 'Số lương'],
            <?php
            foreach($dm as $dmsp){
                echo "
                ['".$dmsp['tendm']."', ".$dmsp['soluong']."],
                ";
            }
            ?>
        ]);

        // Set Options
        const options = {
            title: 'Thông kê danh mục'
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

    }
</script>