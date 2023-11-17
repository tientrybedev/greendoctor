<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm biến</title>
    <link rel="stylesheet" href="sensor.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="loading_screen" id="loading_screen">
        <svg role="img" aria-label="Mouth and eyes come from 9:00 and rotate clockwise into position, right eye blinks, then all parts rotate and merge into 3:00" class="smiley" viewBox="0 0 128 128" width="128px" height="128px">
            <defs>
                <clipPath id="smiley-eyes">
                    <circle class="smiley__eye1" cx="64" cy="64" r="8" transform="rotate(-40,64,64) translate(0,-56)" />
                    <circle class="smiley__eye2" cx="64" cy="64" r="8" transform="rotate(40,64,64) translate(0,-56)" />
                </clipPath>
                <linearGradient id="smiley-grad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#000" />
                    <stop offset="100%" stop-color="#fff" />
                </linearGradient>
                <mask id="smiley-mask">
                    <rect x="0" y="0" width="128" height="128" fill="url(#smiley-grad)" />
                </mask>
            </defs>
            <g stroke-linecap="round" stroke-width="12" stroke-dasharray="175.93 351.86">
                <g>
                    <rect fill="hsl(193,90%,50%)" width="128" height="64" clip-path="url(#smiley-eyes)" />
                    <g fill="none" stroke="hsl(193,90%,50%)">
                        <circle class="smiley__mouth1" cx="64" cy="64" r="56" transform="rotate(180,64,64)" />
                        <circle class="smiley__mouth2" cx="64" cy="64" r="56" transform="rotate(0,64,64)" />
                    </g>
                </g>
                <g mask="url(#smiley-mask)">
                    <rect fill="hsl(223,90%,50%)" width="128" height="64" clip-path="url(#smiley-eyes)" />
                    <g fill="none" stroke="hsl(223,90%,50%)">
                        <circle class="smiley__mouth1" cx="64" cy="64" r="56" transform="rotate(180,64,64)" />
                        <circle class="smiley__mouth2" cx="64" cy="64" r="56" transform="rotate(0,64,64)" />
                    </g>
                </g>
            </g>
        </svg>
        <h3 class="loading_name">Green Doctor AI <br> Bác sĩ cây trồng</h3>
    </div>
    <div class="img-container fru1">
        <img src="assets/fruit1.png" alt="">
    </div>
    <div class="img-container fru2">
        <img src="assets/fruit2.png" alt="">
    </div>
    <div class="img-container fru3">
        <img src="assets/fruit3.png" alt="">
    </div>
    <div class="img-container fru4">
        <img src="assets/fruit4.png" alt="">
    </div>
    <div class="img-container fru5">
        <img src="assets/fruit5.png" alt="">
    </div>
    <div class="img-container fru6">
        <img src="assets/fruit6.png" alt="">
    </div>
    <a href="#" class="backBtn"><i class="fa-solid fa-chevron-left"></i></a>
    <div class="top_sensor">
        <h1>Bộ cảm biến</h1>
    </div>
    <form action="main_sensor.php" method="post" onsubmit="validateAndLogSubmit();">
    <div class="middle_sensor">
        <img src="assets/sensor_logo.png" alt="">
        <h2>Hãy Nhập mã cảm biến</h2>
        <div class="input-data-sensor">
            <input type="text" placeholder="Nhập Mã Cảm Biến" id="sensor_id"  name="sensor_id" oninput="clearError()">
            <div class="error" id="sensor_idError"></div>
        </div>
    </div>
    <div class="bot_sensor">
        <button type="submit">Truy cập</button>
        <a href="#" class="menu_page">Trang chủ</a>
    </div>
</form>
<script src="sensor.js"></script>
<script>
function validateAndLogSubmit() {
        // Call your form validation function
        validateForm();

        // Log the submit
        console.log("Submit button clicked!");

        // Return false to prevent the form from actually submitting
        return false;
    }
</script>
    <script>
        ScrollReveal({  
        reset: false,
        duration: 1000
    });
        ScrollReveal().reveal('.top_sensor', { delay: 1800, distance:'50px',  origin: 'bottom' });
        ScrollReveal().reveal('.middle_sensor', { delay: 1800, distance:'50px',  origin: 'bottom' });
        ScrollReveal().reveal('.bot_sensor', { delay: 1900, distance:'15px',  origin: 'bottom' });
        ScrollReveal().reveal('.fru1', { delay: 2000, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru1', { delay: 2000, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru2', { delay: 2100, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru3', { delay: 2200, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru4', { delay: 2300, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru5', { delay: 2400, distance:'50px',  origin: 'bottom' });
		ScrollReveal().reveal('.fru6', { delay: 2500, distance:'50px',  origin: 'bottom' });

	</script>
</body>

</html>