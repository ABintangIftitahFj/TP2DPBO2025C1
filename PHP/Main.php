<?php

require_once 'Baju.php';

$listBaju = [
    new Baju(1, 'Kemeja Putih Kucing', 150000, 10, 'img/kp_kucing.jpg', 'Kancing', 'Plastik', 'Putih', 40, 'Zara'),
    new Baju(2, 'Kaos Hitam BerangBerang', 100000, 15, 'img/kaos_hitam.jpg', 'Sablon', 'Katun', 'Hitam', 42, 'H&M'),
    new Baju(3, 'Jaket Denim Kelinci', 300000, 5, 'img/jaket_denim.jpg', 'Resleting', 'Logam', 'Silver', 44, "Levi's"),
    new Baju(4, 'Sweater Abu Musang', 250000, 8, 'img/sweater_abu.jpg', 'Bordir', 'Benang', 'Abu-abu', 46, 'Uniqlo'),
    new Baju(5, 'Blazer Navy Iguana', 500000, 3, 'img/blazer_navy.jpg', 'Kancing', 'Logam', 'Hitam', 48, 'Zara')
];

$formSubmitted = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = count($listBaju) + 1;
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $stok_produk = $_POST['stok_produk'];
    $jenis_aksesoris = $_POST['jenis_aksesoris'];
    $bahan_aksesoris = $_POST['bahan_aksesoris'];
    $warna_aksesoris = $_POST['warna_aksesoris'];
    $size = $_POST['size'];
    $merk = $_POST['merk'];

    $gambar_produk = '';
    if (isset($_FILES['gambar_produk']) && $_FILES['gambar_produk']['error'] == 0) {
        $gambar_produk = 'img/' . basename($_FILES['gambar_produk']['name']);
        move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $gambar_produk);
    }

    $bajuBaru = new Baju($id, $nama_produk, $harga_produk, $stok_produk, $gambar_produk, $jenis_aksesoris, $bahan_aksesoris, $warna_aksesoris, $size, $merk);
    $listBaju[] = $bajuBaru;
    $formSubmitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chavalli Outlet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-header {
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
            background-color: #6c757d;
            color: white;
            font-weight: bold;
        }
        .btn-primary {
            border-radius: 10px;
            padding: 8px 20px;
            background-color: #5c6bc0;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3f51b5;
        }
        .form-control, .form-control-file {
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .table {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .thead-dark {
            background-color: #343a40;
            color: white;
        }
        .product-image {
            border-radius: 8px;
            object-fit: cover;
            height: 80px;
            width: 80px;
        }
        .navbar {
            background-color: #343a40;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Chavalli Outlet</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <!-- Form di sebelah kiri, lebih kecil -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center py-3">
                    Tambah Produk 
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="form_submitted" value="1">
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control form-control-sm" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Harga</label>
                                    <input type="number" name="harga_produk" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Stok</label>
                                    <input type="number" name="stok_produk" class="form-control form-control-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Jenis Aksesoris</label>
                                    <input type="text" name="jenis_aksesoris" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Bahan Aksesoris</label>
                                    <input type="text" name="bahan_aksesoris" class="form-control form-control-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Warna Aksesoris</label>
                                    <input type="text" name="warna_aksesoris" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">Size</label>
                                    <input type="number" name="size" class="form-control form-control-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Gambar Produk</label>
                            <input type="file" name="gambar_produk" class="form-control form-control-sm">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Tabel di sebelah kanan -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center py-3">
                    Daftar Produk 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Size</th>
                                    <th>Merk</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listBaju as $baju): ?>
                                    <tr>
                                        <td><?= $baju->getId() ?></td>
                                        <td><img src="<?= $baju->getGambarProduk() ?>" class="product-image"></td>
                                        <td><?= $baju->getNamaProduk() ?></td>
                                        <td>Rp <?= number_format($baju->getHargaProduk(), 0, ',', '.') ?></td>
                                        <td><?= $baju->getStokProduk() ?></td>
                                        <td><?= $baju->getSize() ?></td>
                                        <td><?= $baju->getMerk() ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal<?= $baju->getId() ?>">
                                                Detail
                                            </button>
                                            
                                            <!-- Modal untuk detail -->
                                            <div class="modal fade" id="detailModal<?= $baju->getId() ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="border-radius: 15px;">
                                                        <div class="modal-header" style="background-color: #343a40; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                                            <h5 class="modal-title">Detail <?= $baju->getNamaProduk() ?></h5>
                                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-5 text-center">
                                                                    <img src="<?= $baju->getGambarProduk() ?>" class="img-fluid rounded" style="max-height: 200px;">
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <h5><?= $baju->getNamaProduk() ?></h5>
                                                                    <p><strong>Merk:</strong> <?= $baju->getMerk() ?></p>
                                                                    <p><strong>Harga:</strong> Rp <?= number_format($baju->getHargaProduk(), 0, ',', '.') ?></p>
                                                                    <p><strong>Stok:</strong> <?= $baju->getStokProduk() ?></p>
                                                                    <p><strong>Size:</strong> <?= $baju->getSize() ?></p>
                                                                    <p><strong>Aksesoris:</strong> <?= $baju->getJenisAksesoris() ?> (<?= $baju->getBahanAksesoris() ?>, <?= $baju->getWarnaAksesoris() ?>)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($formSubmitted): ?>
<script>
    alert('Produk berhasil ditambahkan!');
</script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>