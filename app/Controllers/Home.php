<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function admin()
    {
        return view('pages/tambahAkunAdmin');
    }
    public function test(){
         return view('pages/home');
    }
    public function index()
    {
        return view('pages/home');
    }
    public function tambahWilayah()
    {
        return view('pages/tambahWilayah');
    }
    public function tambahPegawai()
    {
        return view('pages/tambahAkunPegawai');
    }
    public function rekapLaporan()
    {
        return view('pages/rekapLaporan');
    }
    public function daftarPegawai()
    {
        return view('pages/daftarPegawai');
    }
    public function daftarWilayah()
    {
        return view('pages/daftarWilayah');
    }

    public function upload(){
         // dapatkan data gambar dari POST
        $imageData = $this->request->getPost('file');

        // ubah data URL menjadi binary
        $binaryData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

         // simpan binary data ke folder public/img dengan nama yang unik
        $newName = uniqid() . '.png';
                write_file('/public/img/' . $newName, $binaryData);

        // tampilkan pesan sukses
    echo 'Foto berhasil disimpan dengan nama: ' . $newName;
      
    }
    public function get_data()
{
    // Your code to retrieve data goes here
    $data = ['foo' => 'bar', 'baz' => 'qux'];

    // Send the data as JSON
    return $this->response->setJSON($data);
}
  public function distance($lat1, $lon1, $lat2, $lon2, $unit = 'm') {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $dist = $dist * 60 * 1.1515;
    if ($unit == 'km') {
        $dist = $dist * 1.609344;
    } else if ($unit == 'm') {
        $dist = $dist * 1609.344;
    }
    return $dist;
}
    public function saveLocation()
    {
        $latitude = 0.4907235676477095;
        $longitude = 101.49336052414905;
        $center_lat = 0.4907235676477095; // contoh titik pusat latitude
        $center_lon = 101.4933605241490; // contoh titik pusat longitude
        $radius = 10; // radius dalam meter

        // Hitung jarak antara posisi pengguna dan titik pusat
        $distance = $this->distance($latitude, $longitude, $center_lat, $center_lon);

        // Bandingkan jarak dengan radius yang diinginkan
        if ($distance <= $radius) {
            // Jika posisi pengguna berada dalam radius, simpan data lokasi pengguna ke database atau lakukan pengolahan data lainnya
            echo 'berrhasil';
        } else {
            // Jika posisi pengguna di luar radius, tampilkan pesan error
            echo 'gagal';
        }
    }


  
}