<?php
if(isset($_POST['login'])){
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare ("SELECT * FROM users WHERE email =? AND password =?");
    $user->execute([
        $_POST['email'], $_POST['password']
    ]);

    $count = $user->rowCount(); 

    if($count > 0) {//jika login berhasil
        session_start();

        $_SESSION['user'] = $user->fetch();
    
        header("location:dashboard.php");
    }else{//jika login gagal
        echo "<script>alert('Pastikan Sandi dan Email benar');</script>";
        
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
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="assets/bootstrap-icons.min.css">
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
                    <form action="" method="POST" class="login-form">
                        <h2 class="form-title">Login Akun</h2>
                        <div class="form-group">
                            <input type="email" placeholder="Username" name="email" class="form-input">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-input">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="form-submit">login Sekarang</button>
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