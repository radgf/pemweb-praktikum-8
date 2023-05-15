<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $datetime = $_POST['tglregis'];
        $nopendaftaran = $_POST['nopendaftaran'];
        $jnspendaftaran = $_POST['jnspendaftaran'];
        $tglmsksklh = $_POST['tglmsksklh'];
        $nis = $_POST['nis'];
        $nopsrtujian= $_POST['nopsrtujian'];
        $appaud = $_POST['appaud'];
        $aptk = $_POST['aptk'];
        $noseriskhun = $_POST['noseriskhun'];
        $noseriijazah = $_POST['noseriijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // mendapatkan tanggal dan waktu saat ini
      $datetime = date("Y-m-d H:i:s");

      // menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (tglregis, nopendaftaran, jnspendaftaran, tglmsksklh, nis, nopsrtujian, 
      appaud, aptk, noseriskhun, noseriijazah, hobi, citacita) VALUES ('$datetime', '$nopendaftaran', '$jnspendaftaran', '$tglmsksklh', 
      '$nis', '$nopsrtujian', '$appaud', '$aptk', '$noseriskhun', '$noseriijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data berhasil tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='formdatapribadi.php'
          </script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!');";
        }
      }
?>