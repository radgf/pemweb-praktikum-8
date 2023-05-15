<?php
include 'koneksi.php';

    // mendapatkan data dari form login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // mengamankan data dari serangan SQL Injection
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // query untuk memeriksa keberadaan pengguna
        $sql = "SELECT * FROM akunpengguna WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // login berhasil, simpan data pengguna ke sesi
            $user = $result->fetch_assoc();
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            // redirect ke halaman utama website
            header("Location: cetak.php");
            exit();
        } else {
            // login gagal
            $login_error = "Username atau password salah.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            .card {
                width: 450px;
                height: 250px;
                margin-left: auto;
                margin-right: auto;
                background-color: #A5C0DD;
            }
        </style>
    </head>
    <body>
        <div class="">
            <h2 class="text-center mt-5">Sistem Informasi Calon Peserta Didik Baru</h2>
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="text-center mb-4">Login</h4>
                    <?php if (isset($login_error)): ?>
                        <p><?php echo $login_error; ?></p>
                    <?php endif; ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <table width="350" align="center" cellpadding="2" cellspacing="2">
                            <tr>
                                <td width="130" for="username">Username</td>
                                <td><input type="text" name="username" required></td>
                            </tr>
                            <tr>
                                <td width="130" for="password">Password</td>
                                <td><input type="password" name="password" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="btnLogin" value="Login">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>