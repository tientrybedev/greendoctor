document.addEventListener("DOMContentLoaded", function () {
    var loadingScreen = document.getElementById("loading_screen");

    // Wait for 1 second, then start fading out
    setTimeout(function () {
        loadingScreen.style.opacity = '0';
    }, 1750);

    // After 3 seconds, hide the loading screen
    setTimeout(function () {
        loadingScreen.style.display = 'none';
        document.body.style.overflow = 'auto'; // Allow scrolling after loading screen disappears
    }, 2100);
});
function validateForm() {
    var input = document.getElementById('sensor_id');
    var errorDiv = document.getElementById('sensor_idError');

    var numericValue = input.value.replace(/[^0-9]/g, '');

    if (numericValue.trim() === '') {
        errorDiv.innerText = 'Bạn chưa nhập mã cảm biến.';
        errorDiv.style.backgroundColor = '#FF90C2';
        showError();
    } else {
        input.value = numericValue; 
        hideError();
    }
}

function clearError() {
    var input = document.getElementById('sensor_id');
    input.value = input.value.replace(/[^0-9]/g, ''); // Allow only numeric input
    hideError();
}

function showError() {
    var errorDiv = document.getElementById('sensor_idError');
    errorDiv.style.maxHeight = '50px';
    errorDiv.style.opacity = '1';
    setTimeout(function () {
        hideError();
    }, 3500);
}

function hideError() {
    var errorDiv = document.getElementById('sensor_idError');
    errorDiv.style.maxHeight = '0';
    errorDiv.style.opacity = '0';
    errorDiv.style.backgroundColor = 'transparent';
}