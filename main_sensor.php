<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sensor_id = $_POST["sensor_id"];
}else{
    header("Location: sensor.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_sensor.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Cảm biến</title>
</head>
<body>
    <div class="main_sensor">
        <div class="top_main_sensor">
            <a href="sensor.php" class="backBtn"><i class="fa-solid fa-chevron-left"></i></a>
            <h3>Mã cảm biến: <?php echo $sensor_id ?></h3>
            <h3>Vị trí: Tp: Hồ Chí Minh, Việt Nam</h3>
            <div class="img_menu_icon">
                <a href="#"><img src="assets/latopi_logo.jpg" alt=""></a>
            </div>
        </div>
        <div class="middle_main_sensor">
            <div class="weather_more">
                <div class="weather_notify">
                    <div class="weather_des">
                        <img src="assets/cloudy.png" alt="">
                    </div>
                    <div class="weather_temp">
                        <h4>19°C</h4>
                    </div>
                </div>
                <div class="weather_info">
                    <div class="rain info">
                        <figure>
                            <img src="assets/rainwater.png" alt="">
                            <figcaption>Lượng mưa</figcaption>
                        </figure>
                        <p>0.0 mm</p>
                    </div>
                    <div class="wind info">
                        <figure>
                            <img src="assets/wind.png" alt="">
                            <figcaption>Tốc độ gió</figcaption>
                        </figure>
                        <p>0.5m/s</p>
                    </div>
                    <div class="temp info">
                        <figure>
                            <img src="assets/temp.png" alt="">
                            <figcaption>Độ ẩm</figcaption>
                        </figure>
                        <p>74%</p>
                    </div>
                </div>
            </div>
            <div class="result">
                    <h3>Kết quả đo cảm biến lúc: <br>10/10/2023</h3>
                    <div class="earth sensor_result">
                        <h4>Đất</h4>
                        <div class="first_row">
                            <figure>
                                <img src="assets/dry_temp.png" alt="">
                                <figcaption>Độ ẩm <br> 34%</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/N.png" alt="">
                                <figcaption>Độ ẩm <br> 34%</figcaption>
                            </figure>
                        </div>
                        <div class="second_row">
                            <figure>
                                <img src="assets/K.png" alt="">
                                <figcaption>Độ ẩm <br> 34%</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/P.png" alt="">
                                <figcaption>Độ ẩm <br> 34%</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="water sensor_result">
                        <h4>Nước</h4>
                        <figure>
                            <img src="assets/sunny.png" alt="">
                            <figcaption>Nhiệt độ <br> 34%</figcaption>
                        </figure>
                        <figure>
                            <img src="assets/temp.png" alt="">
                            <figcaption>Độ ẩm <br> 34%</figcaption>
                        </figure>
                    </div>
                    <div class="air sensor_result">

                        <h4>Không khí</h4>
                        <div class="first_row">
                            <figure>
                                <img src="assets/o.png" alt="">
                                <figcaption>Oxi <br> 34%</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/N.png" alt="">
                                <figcaption>Nito <br> 34%</figcaption>
                            </figure>
                        </div>
                        <figure>
                            <img src="assets/c.png" alt="">
                            <figcaption>CO2 <br> 34%</figcaption>
                        </figure>
                    </div>
                </div>
                <div class='content'>
                    <h3>Khuyến cáo phân bón <br> hiệu quả</h3>
                    <div class="dpx">
                    <div class='px'>
                        <h2>Giai đoạn phát triển</h2>
                    <label>
                        <input type="checkbox" class="option-input checkbox" checked />
                        Trưởng thành
                    </label>
                    <label>
                        <input type="checkbox" class="option-input checkbox" />
                        Ra hoa
                    </label>
                    <label>
                        <input type="checkbox" class="option-input checkbox" />
                        Kết quả
                    </label>
                    </div>
                    <div class='py'>
                        <h2>Loại cây trồng</h2>
                    <label>
                        <input type="radio" class="option-input radio" name="example" checked />
                        Thanh long
                    </label>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        Sầu riêng
                    </label>
                    <label>
                        <input type="radio" class="option-input radio" name="example" />
                        Cafe
                    </label>
                    </div>
                    </div>
                    </div>
        </div>
    </div>
</body>
</html>