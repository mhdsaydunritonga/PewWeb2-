<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = array(
                    array(1, "pepsodent", 20, 10.000),
                    array(2, "sunlight", 15, 11.000),
                    array(3, "baygon", 10, 16.000),
                    array(4, "dove", 18, 22.000),
                    array(5, "rinso",15, 20.000,),
                    array(6, "downy", 20, 11.500),
                    array(7, "le mineral",25, 5.000)
                );

                // Hitung jumlah
                foreach ($data as $key => $value) {
                    $data[$key][4] = $value[2] * $value[3];
                }

                // Tampilkan data
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value[0] . "</td>";
                    echo "<td>" . $value[1] . "</td>";
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td>" . $value[3] . "</td>";
                    echo "<td>" . $value[4] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>



<?php 
// Data tabel barang (contoh)
$tabel_barang = array(
    array('produk' => 'pepsodent', 'stok' => '20', 'harga' => 10000),
    array('produk' => 'sunlight', 'stok' => '15', 'harga' => 11000),
    array('produk' => 'baygon', 'stok' => '10', 'harga' => 16000),
    array('produk' => 'dove', 'stok' => '18', 'harga' => 22000),
    array('produk' => 'rinso', 'stok' => '15', 'harga' => 20000),
    array('produk' => 'downy', 'stok' => '20', 'harga' => 11500),
    array('produk' => 'le mineral', 'stok' => '25', 'harga' => 5000),
);

$total = 0;
foreach ($tabel_barang as $barang) {
    $total += $barang['harga'];
}

echo "Total harga dari tabel barang adalah: $total PHP";
?>



