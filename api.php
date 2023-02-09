<?php
require('koneksi.php');
// if ($_GET['keyword']) {
//     $keyword = $_GET['keyword'];
//     $query = mysqli_query(
//         $conn,
//         "SELECT * FROM tb_produk"
//     );
// } else {
    $query = mysqli_query($conn, "SELECT * FROM tb_produk");
// }
foreach ($query as $data) {
    $myObj[] = $data;
}

// header('Access-Control-Allow-Origin: http://127.0.0.1:8000/');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: http(s)?://?(127.0.0.1:8000|192.168.0.110:8000)$');
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Allow-Methods: GET');
// header('Access-Control-Allow-Headers: x-xsrf-token');
// header('Content-Type: application/json; charset-utf-8');
// defined('BASEPATH') or exit('No direct script access allowed');

$myJSON = json_encode($myObj);

echo $myJSON;

// header("location: https://stevanandreas.com");