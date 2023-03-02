<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
        integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="loading">
        <img src="https://media.tenor.com/UnFx-k_lSckAAAAC/amalie-steiness.gif" alt="Loading...">
        <p>Sedang memproses data...</p>
    </div>
    <!-- <button id="get-data-btn">Get Data</button>

    <h1 id="foo"></h1>
    <h1 id="baz"></h1> -->





    <script>
    $(document).ready(function() {
        // Sembunyikan loading saat halaman selesai dimuat
        $('#loading').hide();

        // Tampilkan loading saat melakukan request AJAX
        $(document).ajaxStart(function() {
            setTimeout(function() {
                $('#loading').show();
            }, 5000);
        });

        // Sembunyikan loading saat request AJAX selesai
        $(document).ajaxStop(function() {
            $('#loading').hide();
        });
    });
    // $(document).ready(function() {

    //     $('#get-data-btn').click(function() {
    //         $.ajax({
    //             url: '<?= site_url('/get_data') ?>',
    //             type: 'GET',
    //             dataType: 'json',
    //             success: function(data) {
    //                 // Your code to update the page goes here
    //                 console.log(data.foo);
    //                 console.log(data.baz);
    //                 document.getElementById("foo").value = data.foo;
    //                 document.getElementById("baz").value = data.baz;

    //             }
    //         });
    //     });
    // });
    </script>





</body>


</html>