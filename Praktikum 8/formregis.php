<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_nopendaftaran = "";
    $error_jnspendaftaran = "";
    $error_tglmsksklh = "";
    $error_nis = "";
    $error_nopsrtujian = "";
    $error_appaud = "";
    $error_aptk = "";
    $error_noseriskhun = "";
    $error_noseriijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nopendaftaran = "";
    $datetime = "";
    $jnspendaftaran = "";
    $tglmsksklh = "";
    $nis = "";
    $nopsrtujian = "";
    $appaud = "";
    $aptk = "";
    $noseriskhun = "";
    $noseriijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopsrtujian"])) {
            $error_nopsrtujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopsrtujian = cek_input($_POST["nopsrtujian"]);
            if (!is_numeric($nopsrtujian)) {
                $error_nopsrtujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noseriskhun"])) {
            $error_noseriskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noseriskhun = cek_input($_POST["noseriskhun"]);
            if (!is_numeric($noseriskhun)) {
                $error_noseriskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noseriijazah"])) {
            $error_noseriijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noseriijazah = cek_input($_POST["noseriijazah"]);
            if (!is_numeric($noseriijazah)) {
                $error_noseriijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    

    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-header text-center fw-bold">FORMULIR PESERTA DIDIK</div>
                <div class="bg-dark text-white pt-1 pb-1">
                    FORM REGISTRASI PESERTA DIDIK
                </div>
                <div class="card-body">
                    <form method="post" action="actiondataregis.php">
                        
                        <br>
                        <div class="form-group row">
                            <label for="jnspendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jnspendaftaran" value="Siswa Baru">Siswa Baru</label>
                                <input type="radio" name="jnspendaftaran" value="Pindahan">Pindahan</label> 
                                <span class="warning" ><?php echo $error_jnspendaftaran; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-10">
                                <input type="date" name="tglmsksklh" id="tglmsksklh" class="form-control <?php echo 
                                ($error_tglmsksklh !="" ? "is-invalid" : ""); ?>" placeholder="DD - MM - YYYY" 
                                value="<?php echo $tglmsksklh; ?>"> <span class="warning"><?php echo $error_tglmsksklh ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ?
                                "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> 
                                <span class="warning"><?php echo $error_nis ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="nopsrtujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" name="nopsrtujian" id="nopsrtujian" class="form-control <?php echo 
                                ($error_nopsrtujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" 
                                value="<?php echo $nopsrtujian; ?>"> <span class="warning"><?php echo $error_nopsrtujian ?></span>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group row">
                            <label for="appaud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                            <div class="col-sm-10">
                                <input type="radio" name="appaud" value="Ya">Ya</label>
                                <input type="radio" name="appaud" value="Tidak">Tidak</label> 
                                <span class="warning" ><?php echo $error_appaud; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aptk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                            <div class="col-sm-10">
                                <input type="radio" name="aptk" value="Ya">Ya</label>
                                <input type="radio" name="aptk" value="Tidak">Tidak</label> 
                                <span class="warning" ><?php echo $error_aptk; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noseriskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noseriskhun" id="noseriskhun" class="form-control <?php echo 
                                ($error_noseriskhun !="" ? "is-invalid" : ""); ?>" placeholder="No Seri SKHUN" 
                                value="<?php echo $noseriskhun; ?>"> <span class="warning"><?php echo $error_noseriskhun
                                ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noseriijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noseriijazah" id="noseriijazah" class="form-control <?php echo
                                ($error_noseriijazah !="" ? "is-invalid" : ""); ?>" placeholder="No Seri Ijazah"
                                value="<?php echo $noseriijazah; ?>"> <span class="warning"><?php echo $error_noseriijazah ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="hobi">
                                <option value=""></option>
                                <option value="Olahraga"> Olahraga </option>
                                <option value="Kesenian"> Kesenian</option>
                                <option value="Membaca"> Membaca</option>
                                <option value="Menulis"> Menulis </option>
                                <option value="Traveling"> Traveling </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_hobi; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="citacita">
                                <option value=""></option>
                                <option value="PNS"> PNS </option>
                                <option value="TNI/POLRI"> TNI/POLRI</option>
                                <option value="Guru/Dosen"> Guru/Dosen</option>
                                <option value="Dokter"> Dokter </option>
                                <option value="Politikus"> Politikus </option>
                                <option value="Wiraswasta"> Wiraswasta </option>
                                <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_citacita; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10 float-right">
                                <button type="submit" name="submit" class="btn btn-dark">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>