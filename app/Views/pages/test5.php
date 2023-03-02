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
    <!-- HTML -->
    <input type="file" accept="image/*" onchange="previewImage(event)" />
    <img id="preview" />

    <!-- JavaScript -->

</body>
<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function uploadImage() {
    var file = document.querySelector('#preview').src;
    $.ajax({
        url: '<?= base_url('/upload') ?>',
        type: 'POST',
        data: {
            file: file
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