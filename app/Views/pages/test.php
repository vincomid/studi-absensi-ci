<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" readonly>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" readonly>
        </div>
    </form>
</body>
<script>
// Membuat fungsi untuk mengambil posisi pengguna
function getLocation() {
    // Cek apakah browser mendukung Geolocation API
    if (navigator.geolocation) {
        // Panggil fungsi getCurrentPosition untuk mengambil posisi pengguna
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

// Fungsi callback untuk menampilkan posisi pengguna pada form
function showPosition(position) {
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;
}

// Fungsi callback untuk menampilkan pesan error jika gagal mengambil posisi pengguna
function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.")
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.")
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.")
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.")
            break;
    }
}

// Panggil fungsi getLocation() untuk mengambil posisi pengguna saat halaman dimuat
getLocation();
</script>

</html>