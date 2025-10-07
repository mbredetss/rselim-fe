<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO testimoni (nama, pesan) VALUES ('$nama', '$pesan')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Testimoni berhasil dikirim!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
