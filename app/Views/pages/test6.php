<html>

<head>
    <scrip src="https://code.jquery.com/jquery-3.6.0.min.js">
        </script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
            integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <title>WebRTC Example</title>
</head>

<body>
    <!-- HTML -->
    <video id="video" width="320" height="240" autoplay></video>
    <button onclick="capture()">Capture</button>
    <canvas id="canvas" width="320" height="240"></canvas>

    <!-- JavaScript -->

</body>
<script>
// JavaScript
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');

navigator.mediaDevices.getUserMedia({
        video: true
    })
    .then(function(stream) {
        video.srcObject = stream;
    })
    .catch(function(error) {
        console.error(error);
    });

function capture() {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    const dataURL = canvas.toDataURL('image/png');
    uploadImage(dataURL);
}

function uploadImage(dataURL) {
    $.ajax({
        url: '<?= site_url("/upload") ?>',
        type: 'POST',
        data: {
            file: dataURL
        },
        success: function(response) {
            console.log(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}
</script>

</html>