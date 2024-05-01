<?php
include 'layoutatas.php';
session_start();

if (isset($_SESSION["pesanan_berhasil"]) && $_SESSION["pesanan_berhasil"]) {
    // Ambil data pemesanan dari session
    $nama = isset($_SESSION["nama"]) ? $_SESSION["nama"] : "";
    $jenis = isset($_SESSION["jenis"]) ? $_SESSION["jenis"] : "";
    $peserta = isset($_SESSION["peserta"]) ? $_SESSION["peserta"] : "";
    $hargaperorang = isset($_SESSION["hargaperorang"]) ? $_SESSION["hargaperorang"] : "";
    $tanggal = isset($_SESSION["tanggal"]) ? $_SESSION["tanggal"] : "";
    $total = isset($_SESSION["total"]) ? $_SESSION["total"] : "";

    // Hapus status pesanan berhasil dari session
    unset($_SESSION["pesanan_berhasil"]);

    // Hapus data pemesanan dari session jika sudah ditampilkan
    unset($_SESSION["nama"]);
    unset($_SESSION["jenis"]);
    unset($_SESSION["peserta"]);
    unset($_SESSION["hargaperorang"]);
    unset($_SESSION["tanggal"]);
    unset($_SESSION["total"]);
} else {
    // Redirect ke halaman lain jika tidak ada data pemesanan yang tersedia
    header("Location: beranda.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detil Pemesanan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="
      background: rgb(0, 0, 0);
      background: -moz-linear-gradient(
        180deg,
        rgba(0, 0, 0, 1) 0%,
        rgba(0, 62, 109, 1) 100%
      );
      background: -webkit-linear-gradient(
        180deg,
        rgba(0, 0, 0, 1) 0%,
        rgba(0, 62, 109, 1) 100%
      );
      background: linear-gradient(
        180deg,
        rgba(0, 0, 0, 1) 0%,
        rgba(0, 62, 109, 1) 100%
      );
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000',endColorstr='#003e6d',GradientType=1);
    ">
    <div class="container my-5">
        <h2 class="text-center fw-semibold text-white">Detil Pemesanan</h2>
        <hr class="text-center" style="color: white;">
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <p class="card-title">Nama Pemesan: <?php echo $nama; ?></p>
                        <hr style="color: white;">
                        <p class="card-text">Jenis Tiket & Wahana: <?php echo $jenis; ?></p>
                        <hr style="color: white;">
                        <p class="card-text">Jumlah Orang: <?php echo $peserta; ?></p>
                        <hr style="color: white;">
                        <p class="card-text">Harga per Orang: <?php echo $hargaperorang; ?></p>
                        <hr style="color: white;">
                        <p class="card-text">Tanggal Pemesanan: <?php echo $tanggal; ?></p>
                        <hr style="color: white;">
                        <p class="card-text">Total Harga: <?php echo $total; ?></p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="beranda.php" class="btn btn-danger">Kembali ke Halaman Beranda</a>
                    <a href="ordertiket.php" class="btn btn-success">Membeli Tiket Lagi?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
