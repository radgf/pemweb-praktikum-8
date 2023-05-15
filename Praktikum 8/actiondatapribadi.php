<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
    $namalengkap = $_POST['namalengkap'];
    $jkelamin = $_POST['jkelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tmptlahir = $_POST['tmptlahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $berkebkhusus = $_POST['berkebkhusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $tmpttinggal = $_POST['tmpttinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $penerimakip = $_POST['penerimakip'];
    $nokip = $_POST['nokip'];
    $kwn = $_POST['kwn'];
    $namanegara = $_POST['namanegara'];

        // menyimpan ke database
        $sql = mysqli_query($conn, "INSERT INTO datapribadi (namalengkap, jkelamin, nisn, nik, tmptlahir, tglahir, 
        agama, berkebkhusus, alamat, rt, rw, namadusun, namakel, kec, kodepos, tmpttinggal, transport, nohp, notelp, 
        email, penerimakip, nokip, kwn, namanegara) VALUES ('$namalengkap', '$jkelamin', '$nisn', '$nik', '$tmptlahir', 
        '$tglahir', '$agama', '$berkebkhusus', '$alamat', '$rt', '$rw', '$namadusun', '$namakel', '$kec', '$kodepos', 
        '$tmpttinggal', '$transport', '$nohp', '$notelp', '$email', '$penerimakip', '$nokip', '$kwn', '$namanegara')");
        if ($sql) {
            // pesan jika data berhasil tersimpan
            echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='formdataayah.php'</script>"; 
            } else {
            // pesan jika data gagal disimpan
                echo "alert('Data Pribadi Gagal Ditambahkan!');";
            }
        }
?>