<?php
// Pastikan sudah terhubung ke database
include "koneksi.php";

session_start();
if (empty($_SESSION['username']) && empty($_SESSION['passuser'])) {
    echo "Anda harus login terlebih dahulu.";
    header("Location: login.php");
    exit;
}

// Query untuk mengambil data admin dari tabel `tb_user`
$query = "SELECT * FROM tb_user WHERE level='admin'";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"> <!-- Bootstrap untuk tampilan tabel -->
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Data Admin</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $id++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['level']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
