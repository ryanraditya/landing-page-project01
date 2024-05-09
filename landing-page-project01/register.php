<?php
include "dbkoneksi.php";
$register_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$username, $email, $password]);

    if ($stmt->rowCount() > 0) {
        $register_message = "Berhasil mendaftar, silakan login.";
        echo "<script>alert('$register_message');</script>";
    } else {
        $register_message = "Gagal mendaftar.";
        echo "<script>alert('$register_message');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>puskesmas01</title>
    <!--link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--link css-->
    <link rel="stylesheet" href="ryan.css">
    <!--link animasi-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-light">
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <form action="register.php" method="POST" class="login-form">
                        <h2 class="form-title">Register Akun</h2>
                        <div class="form-group">
                            <input type="email" placeholder="Masukan Email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Masukan Username" name="username" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Masukan Password" name="password" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="register" class="form-submit">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <style>
        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .login-form {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .form-title {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-submit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-submit:hover {
            background-color: #0056b3;
        }
    </style>
    <!--content end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--js animasi-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>