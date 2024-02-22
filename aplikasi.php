<?php
// Koneksi ke database
$servername = "localhost";
$username = "ahmadthoriq";
$password = "password";
$dbname = "Pendaftaran";

$conn = new mysqli('localhost', 'username', 'password', 'Pendaftaran');


// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses data formulir
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO pengguna (nama, email, password_hash)
VALUES ('$nama', '$email', '$password_hash')";

if (mysqli_query($conn, $sql)) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
