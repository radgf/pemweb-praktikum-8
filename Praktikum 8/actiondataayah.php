<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $tlayah = $_POST['tlayah'];
        $pendayah = $_POST['pendayah'];
        $kerjaayah = $_POST['kerjaayah'];
        $gajiayah = $_POST['gajiayah'];
        $berkebayah = $_POST['berkebayah'];

        // menyimpan ke database
        $sql = mysqli_query($conn, "INSERT INTO dataayah (namaayah, tlayah, pendayah, kerjaayah, gajiayah, 
        berkebayah) VALUES ('$namaayah', '$tlayah', '$pendayah', '$kerjaayah', '$gajiayah', '$berkebayah')");
        if ($sql) {
            // pesan jika data berhasil tersimpan
            echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='formdataibu.php'</script>"; 
            } else {
            // pesan jika data gagal disimpan
                echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
            }
        }
?>