<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $namaPembeli = $_POST["nama"];
    $jumlahBeli = $_POST["jumlahBeli"];
    $kodeBuku = $_POST["kodeB"];
    $diskon = 0 ;
    ?>
    <?php
    if ($kodeBuku=="B0001") {
        $judul= "MS Access 2020";
        $pengarang = "Kurnia";
        $harga = 47000;
    }elseif($kodeBuku=="B0002") {
        $judul= "PHP & MySql Untuk Orang Awan";
        $pengarang = "Peter Tambunan";
        $harga = 64000;
    }elseif($kodeBuku=="B0003") {
        $judul= "Web Untuk Bisnis";
        $pengarang = "Abdul Kadir ";
        $harga = 73000;
    }else{
        echo "none";
    }
    if ($jumlahBeli>=10) {
        $diskon= 0.1 * $jumlahBeli * $harga  ;
        $bayar= $jumlahBeli * $harga - $diskon  ;
    }else{
        $bayar= $jumlahBeli * $harga;
    }
    
    ?>
    <div class="container">
        <h1>STRUK PEMBELIAN BARANG SEDERHANA</h1>
        <p>Tanggal: <?= date('d-M-Y'); ?></p>
        <p>Nama: <?= $namaPembeli ?></p>
        <hr>
        <div class="transaction-details">
            <p>Judul Buku: <?= $judul?></p>
            <p>Pengarang: <?= $pengarang ?></p>
            <p>Harga Buku: Rp. <?= $harga ?></p>
            <hr>
            <p>Jumlah Beli: <?= $jumlahBeli ?></p>
            <p>Diskon: Rp.<?= $diskon ?></p>
            <p class="total">Total Bayar: Rp. 
                <?= $bayar?>
            </p>
        </div>
        <a href="1.php">Tambah Data Pembelian</a>
    </div>
</body>
</html>