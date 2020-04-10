<?php
include ("koneksi.php");

$id = $_GET["id"];
$sql = "SELECT * FROM tbl_mobil WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Golongan</h1>
    <?php
        echo "<h2>Nama Mobil : ".$data["nama_mobil"]."</h2>";
        echo "<h2>Harga Mobil : Rp.".$data["harga_mobil"]."</h2>";
        $harga = $data["harga_mobil"];
        function golongan($harga)
        {
            if ($harga >= 100000000) {
                return "mahal";
            }elseif ($harga >= 50000000) {
                return "sedang";
            }else {
                return "murah";
            }
        };
        echo "<h2>Golongan Mobil : ".golongan($harga)."</h2>";
    ?>
</body>
</html>