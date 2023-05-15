<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendibu = $_POST['pendibu'];
        $kerjaibu = $_POST['kerjaibu'];
        $gajiibu = $_POST['gajiibu'];
        $berkebibu = $_POST['berkebibu'];

        // menyimpan ke database
        $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, tlibu, pendibu, kerjaibu, gajiibu, 
        berkebibu) VALUES ('$namaibu', '$tlibu', '$pendibu', '$kerjaibu', '$gajiibu', '$berkebibu')");
        if ($sql) {
            // pesan jika data berhasil tersimpan
            echo "<script>alert('Selesai!'); window.location.href='cetak.php'</script>"; 
            } else {
            // pesan jika data gagal disimpan
                echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
            }
        }
?>