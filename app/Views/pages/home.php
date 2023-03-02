<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
        integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>

    <title>Home</title>
</head>

<body onload="displayTime()">


    <div class="container">
        <div class="flex justify-center items-center flex-row">
            <div class="card card-compact w-92 bg-base-100 shadow-xl">

                <div class="card-body">
                    <h1 class="card-title items-center justify-center text-5xl">SIPEKAN</h1>
                    <p id="current-time" class="text-2xl items-center justify-center text-center font-bold"></p>
                    <p class="text-2xl items-center justify-center text-center">Jam Absen Masuk WIB 08:15</p>
                    <p class="text-2xl items-center justify-center text-center">Jam Absen Pulang WIB 16:00</p>
                    <p class="text-2xl items-center justify-center text-center">Toleransi Waktu 15 Menit</p>

                    <p class="text-3xl p-4 items-center justify-center text-center">Kelvin Frantino Lim</p>

                </div>
            </div>
        </div>

        <div class="flex justify-center flex-row mt-5">
            <button type="button"
                class="inline-block rounded bg-success px-12 pt-5 pb-4 text-xl font-bold uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]">
                Datang
            </button>
        </div>
        <div class="flex justify-center flex-row mt-5">
            <button type="button"
                class="inline-block rounded bg-warning px-12 pt-5 pb-4 text-xl font-bold uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)]">
                Pulang
            </button>
        </div>
        <div class="flex justify-center flex-row mt-5">
            <button type="button"
                class="inline-block rounded bg-info px-[70px] pt-5 pb-4 text-xl font-bold uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]">
                Izin
            </button>
        </div>
</body>

</div>

<!-- 
    <div class="container">
        <div class="flex justify-center mt-[20px]">

            <div class="w-[400px] items-center justify-items-center content-center">

                <!-- <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10 dark:bg-dark">
                    <div class="py-8 px-2 items-center justify-center">
                        <p class="font-medium  text-primary mb-4 ">
                            Kelvin Frantino Lim</p>
                        <p class="font-medium  text-primary mb-4 ">
                            Lokasi</p>

                        <div class="flex flex-wrap mb-3">
                            <a href="#"
                                class="text-base font-semibold  text-white bg-gradient-to-r from-cyan-500 to-blue-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                                Datang</a>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <a href="#"
                                class="text-base font-semibold  text-white bg-gradient-to-r from-cyan-500 to-blue-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                                Pulang</a>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <a href="#"
                                class="text-base font-semibold  text-white bg-gradient-to-r from-cyan-500 to-blue-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                                Izin</a>
                        </div>

                    </div>

                </div> -->
</div>

</div>

</div> -->




<script src="/js/app.js"></script>

<script>
function displayTime() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var time = hours + ":" + minutes + ":" + seconds;

    // jika waktu saat ini melebihi jam 17:00, ubah warna teks menjadi merah
    if (hours <= hours == 8 && minutes >= 15) {
        document.getElementById("current-time").style.color = "green";
    } else if (hours > hours == 8 && minutes > 15 && hours <= hours == 8 && minutes <= 30) {
        document.getElementById("current-time").style.color = "orange";
    } else {
        document.getElementById("current-time").style.color = "red";
    }

    document.getElementById("current-time").innerHTML = time;
}
setInterval(displayTime, 1000); // memperbarui waktu setiap 1 detik
</script>
</body>

</html>