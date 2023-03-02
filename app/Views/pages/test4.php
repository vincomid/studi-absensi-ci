<html>

<head>
    <scrip src="https://code.jquery.com/jquery-3.6.0.min.js%22%3E">
        </script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
            integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <title>WebRTC Example</title>
</head>

<body>
    <video id="video" width="320" height="240" autoplay></video>
    <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
    <img id="photo" src="#" alt="Your photo" />
    <button id="startbutton">Take photo</button>
    <button id="sendbutton">Send photo</button>
</body>
<script>
var video = document.querySelector('#video');
var canvas = document.querySelector('#canvas');
var photo = document.querySelector('#photo');
var startbutton = document.querySelector('#startbutton');
var sendbutton = document.querySelector('#sendbutton');

navigator.mediaDevices.getUserMedia({
        video: true,
        audio: false
    })
    .then(function(stream) {
        video.srcObject = stream;
    })
    .catch(function(err) {
        console.log("An error occurred: " + err);
    });

function takepicture() {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    var data = canvas.toDataURL('image/png');
    photo.setAttribute('src', data);
}

startbutton.addEventListener('click', function(ev) {
    takepicture();
    ev.preventDefault();
}, false);

sendbutton.addEventListener('click', function(ev) {
    var data = photo.getAttribute('src');
    $.ajax({
        type: "POST",
        url: "<?= site_url('/upload') ?>",
        data: {
            photo: data
        }
    }).done(function(msg) {
        alert("Photo uploaded!");
    });
    ev.preventDefault();
}, false);
</script>

</html>