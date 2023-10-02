<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        h2 {
            font-size: 20px;
        }
        /* h2:hover {
            color: orangered;
        } */
    </style>
</head>

<body>
    <div class="ContainerI">
        <div class="NavbarI">
            <div class="Nav_head">
                <div class="logo">
                    <a href="index.php"><img src="BT2Logo.png" alt="" style="width: 65px; height: 45px; "></a>
                    <a href="index.php"><img src="BT2.2Logo.png" alt="" style="width: 115px;height: 45px;"></a>
                </div>
            </div>
            <div class="Nav_main">
                <ul class="list" style="list-style: none;">
                    <div class="TUser" style="background-color:white">
                        <li style="display: flex;">
                            <i class="bi bi-person" style="margin:0px 20px"></i>
                            <a href="User.php" style="color:black; text-decoration: none;"><h2>User</h2></a>
                            <a href="User.php" class="bi bi-caret-right-fill"></a>
                        </li>
                    </div>

                    <div class="TCMS">
                        <li style="display: flex;">
                            <i class="bi bi-box" style="margin:0px 20px"></i>
                            <h2>CMS</h2>
                            <i class="bi bi-caret-right-fill"></i>
                        </li>
                    </div>
                    <div class="TConfig">
                        <li style="display: flex;">
                            <i class="bi bi-gear" style="margin:0px 20px"></i>
                            <h2>Config</h2>
                            <i class="bi bi-caret-right-fill"></i>
                        </li>
                    </div>

                </ul>
            </div>
        </div>
        <div class="MainI">
            <div class="Main_Header">
                <div class="Main_Header HeaderL">
                    <i class="bi bi-list" style="padding:10px ; font-size: 40px;"></i>
                    <h1 style="padding-top:22px; font-size: 30px;">Dashboard</h1>
                </div>
                <div class="Header_R">
                    <form class="search-form">
                        <div class="search-label">
                            <a href=""><i class="bi bi-search" style="color:orange;margin:0px 15px;"></i></a>
                            <label for="search" class="visually-hidden">Search</label>
                            <input type="text" id="search" class="search-input" placeholder="       Search...">
                        </div>
                     </form>
                </div>

            <div class="Main_container">
                <div class="Main_containerHL">
                    <img src="http://w3cms.makaanlelo.com/static/dashboard/images/vector/book.png" style="position: absolute; top:0; left:50%;" alt="">
                    <img src="http://w3cms.makaanlelo.com/static/dashboard/images/vector/calpng.png" style="position: absolute; top:50px; right:20px;"alt="">
                    <img src="http://w3cms.makaanlelo.com/static/dashboard/images/egucation-girl.png"style="wigth:70%; height:60%;position: absolute; bottom:0;right:40px; " alt="">
                    <span>
                        <h1 style="font-size:30px; margin:30px 0px 10px 20px; color:white">Join Now and Get <br> Discount Voucher Up <br> To 20%</h1>
                        <h3 style="font-size:15px; margin:0px 0px 0px 20px; line-height: 1.5;color:white">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt.</h3>
                    </span>
                </div>
                <div class="Main_containerHR">  
                    <div id="line_top_x" style="margin: 20px; border-radius: 10px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    google.charts.load('current', {'packages':['line']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('number', 'Day');
                    data.addColumn('number', 'Guardians of the Galaxy');
                    data.addColumn('number', 'The Avengers');
                    data.addColumn('number', 'Transformers: Age of Extinction');
                    data.addRows([
                    [1,  37.8, 80.8, 41.8],
                    [2,  30.9, 69.5, 32.4],
                    [3,  25.4,   57, 25.7],
                    [4,  11.7, 18.8, 10.5],
                    [5,  11.9, 17.6, 10.4],
                    [6,   8.8, 13.6,  7.7],
                    [7,   7.6, 12.3,  9.6],
                    [8,  12.3, 29.2, 10.6],
                    [9,  16.9, 42.9, 14.8],
                    [10, 12.8, 30.9, 11.6],
                    [11,  5.3,  7.9,  4.7],
                    [12,  6.6,  8.4,  5.2],
                    [13,  4.8,  6.3,  3.6],
                    [14,  4.2,  6.2,  3.4]
                    ]);
                    var options = {
                    width: 500,
                    height: 250,
                    axes: {
                    x: {
                    0: {side: 'top'}
                    }
                    }
                    };
                    var chart = new google.charts.Line(document.getElementById('line_top_x'));
                    chart.draw(data, google.charts.Line.convertOptions(options));
                    }
                    </script>

                </div>
                <div class="Main_containerBT">
                    <div class="Main_containerBT-L">
                        <i class="bi bi-check" style="font-size:30px; color:white;position: absolute; top:16px; left: 19px"></i>
                        <img src="http://w3cms.makaanlelo.com/static/dashboard/images/vector/check.png" style="position: absolute; top:10px; right:0;" alt="">
                        <span style="position: absolute; top:14px; left:10px;width:50px;height:50px;border:12px solid white; border-radius:5px;">
                            <h1 style="font-size:30px;margin:-15px 0px 0px 45px; color:white "> 1.500</h1>
                            <h3 style="font-size:13px;margin:0px 0px 0px 45px; color:white; white-space: nowrap">All courses</h3>
                        </span>
                    </div>
                    <div class="Main_containerBT-C">
                        <img src="http://w3cms.makaanlelo.com/static/dashboard/images/vector/bookmarks.png" style="position: absolute; top:7px; right:0;" alt="">
                        <span style="position: absolute; top:14px; left:10px;width:50px;height:50px;border:25px solid white; border-radius:5px;">
                            <i class="bi bi-bookmarks-fill" style="font-size:30px; color:black;position: absolute; top:-20px; left: -15px"></i>
                            <h1 style="font-size:30px;margin:-27px 0px 0px 45px; color:white "> 1.112</h1>
                            <h3 style="font-size:13px;margin:0px 0px 0px 45px; color:white; white-space: nowrap">Upcoming</h3>
                        </span>
                    </div>
                    <div class="Main_containerBT-R">
                    <img src="http://w3cms.makaanlelo.com/static/dashboard/images/vector/bulb.png" style="position: absolute; top:7px; right:0;" alt="">
                        <span style="position: absolute; top:14px; left:10px;width:50px;height:50px;border:25px solid white; border-radius:5px;">
                            <i class="bi bi-lightbulb-fill" style="font-size:30px; color:rgba(230, 105, 105, 0.959);position: absolute; top:-20px; left: -15px"></i>
                            <h1 style="font-size:30px;margin:-27px 0px 0px 45px; color:white "> 1.112</h1>
                            <h3 style="font-size:13px;margin:0px 0px 0px 45px; color:white; white-space: nowrap">Upcoming</h3>
                        </span>
                    </div>
                </div>
                <div class="Main_containerB" style=" width: 89%;height: 400px; margin:0 70px 0 70px;position: absolute;top:490px;background-color:white;border-radius:10px">
                    <br><br>
                        <div id="chart_div" style="width: 1000px; height: 400px;"></div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart', 'bar']});
                            google.charts.setOnLoadCallback(drawStuff);
                                function drawStuff() {
                                var chartDiv = document.getElementById('chart_div');
                                var data = google.visualization.arrayToDataTable([
                                    ['Galaxy', 'Distance', 'Brightness'],
                                    ['Canis Major Dwarf', 8000, 23.3],
                                    ['Sagittarius Dwarf', 24000, 4.5],
                                    ['Ursa Major II Dwarf', 30000, 14.3],
                                    ['Lg. Magellanic Cloud', 50000, 0.9],
                                    ['Bootes I', 60000, 13.1]
                                    ]);
                                var materialOptions = {
                                width: 1080,
                                height: 300,
                                chart: {
                                    title: 'Score Activity',
                                    subtitle: ' '
                                },
                                series: {
                                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                                },
                                axes: {
                                    y: {
                                    distance: {label: 'parsecs'}, // Left y-axis.
                                    brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
                                    }
                                }
                                };
                                function drawMaterialChart() {
                                var materialChart = new google.charts.Bar(chartDiv);
                                materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
                                button.innerText = 'Change to Classic';
                                button.onclick = drawClassicChart;
                                }
                                drawMaterialChart();
                            };
                            </script>
                </div>
                <div class="Main_containerI-BT">
                    <div class="Main_containerI-BT-L">
                    <!-- <canvas id="donutChart" width="20px" height="20px" style="background-color:black"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        // Lấy thẻ canvas và context
                         var ctx = document.getElementById('donutChart').getContext('2d');
                        // Dữ liệu và tùy chọn cho biểu đồ
                        var data = {
                        datasets: [{
                        data: [30, 70], // Dữ liệu: ví dụ 30% và 70%
                        backgroundColor: ['white','orangered'], // Màu sắc cho các phần
                        borderColor: 'white', // Màu đường viền
                        borderWidth: 0, // Độ rộng của đường viền
                        }],
                        // labels: ['Blue', 'Gray'], // Nhãn cho các phần
                        };
                            var options = {
                            cutoutPercentage: 50, // Độ cắt trong hình vòng tròn (50% là hình donut)
                            };
                            // Tạo và vẽ biểu đồ
                            var donutChart = new Chart(ctx, {
                            type: 'doughnut', // Loại biểu đồ vòng tròn
                            data: data,
                            options: options,
                        });
                        </script>  -->
                        <h1 style="font-size:20px;text-align: center">
                        <br><br><br><br><br><br><br><br>
                            My Progress
                        </h1>
                        <h3 style="font-size:15px;text-align: center ;white-space: nowrap;">
                        <br>
                            Lorem ipsum dolor sit amet, consectetur
                        </h3>
                    <button style=" white-space: nowrap;border-radius:5px;display: flex;background-color:orangered;position: absolute;top: 290px;text-align: center;line-height: 30px;;left:120px;border:none; width:120px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                                                More Details
                                </button>

                    </div>
                    <div class="Main_containerI-BT-R">
                        <div id="calendar"></div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                var calendarEl = document.getElementById('calendar');
                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                initialView: 'dayGridMonth', // Chế độ xem mặc định
                                events: [
                                // Danh sách các sự kiện lịch
                                {
                                title: 'Sự kiện 1',
                                start: '2023-09-15',
                                end: '2023-09-17'
                                },
                                {
                                title: 'Sự kiện 2',
                                start: '2023-09-20',
                                end: '2023-09-22'
                                },
                                // Thêm sự kiện khác nếu cần
                                ]
                                });
                                calendar.setOption('height', 400); // Đặt chiều cao là 500px
                                calendar.setOption('width', 500);
                                calendar.render();
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>