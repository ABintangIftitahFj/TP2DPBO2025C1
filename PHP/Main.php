<?php

require_once 'Baju.php';


$listBaju = [
    new Baju(1, "Kemeja Putih", 150000, 10, "Kancing", "Plastik", "Putih", 40, "Zara"),
    new Baju(2, "Kaos Hitam", 100000, 15, "Sablon", "Katun", "Hitam", 42, "H&M"),
    new Baju(3, "Jaket Denim", 300000, 5, "Resleting", "Logam", "Silver", 44, "Levi's"),
    new Baju(4, "Sweater Abu", 250000, 8, "Bordir", "Benang", "Abu-abu", 46, "Uniqlo"),
    new Baju(5, "Blazer Navy", 500000, 3, "Kancing", "Logam", "Hitam", 48, "Zara")
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Baju</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Produk Baju</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Stok Produk</th>
                <th>Jenis Aksesoris</th>
                <th>Bahan Aksesoris</th>
                <th>Warna Aksesoris</th>
                <th>Size</th>
                <th>Merk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listBaju as $baju) : ?>
                <tr>
                    <td><?= $baju->getId(); ?></td>
                    <td><?= $baju->getNamaProduk(); ?></td>
                    <td><?= $baju->getHargaProduk(); ?></td>
                    <td><?= $baju->getStokProduk(); ?></td>
                    <td><?= $baju->getJenisAksesoris(); ?></td>
                    <td><?= $baju->getBahanAksesoris(); ?></td>
                    <td><?= $baju->getWarnaAksesoris(); ?></td>
                    <td><?= $baju->getSize(); ?></td>
                    <td><?= $baju->getMerk(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
