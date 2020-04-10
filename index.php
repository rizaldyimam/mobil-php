<?php
include ("koneksi.php");

$sql = "SELECT * FROM tbl_mobil";
$query = mysqli_query($conn, $sql);
$nomer = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Mobil</th>
                <th>Harga Mobil</th>
                <th>Golongan</th>
            </tr>
        </thead>
        <tbody>
            <?php
               
                while($data = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$nomer."</td>";
                    echo "<td>".$data["nama_mobil"]."</td>";
                    echo "<td>".$data["harga_mobil"]."</td>";
                    echo "<td><a href=golongan.php?id=".$data["id"].">Cek Golongan</a></td>";
                    echo "</tr>";
                    $nomer++;
                }
            ?>
        </tbody>
    </table>

</body>
</html>
