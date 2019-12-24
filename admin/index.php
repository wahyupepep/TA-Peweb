<?php
require 'functions.php';

if (isset($_POST["submitLogin"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user'");

    //cek user
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        header('Location:http://localhost/UAS-PEWEB/admin/dashboard.php');
        exit();
    } else {
        echo "<script>
        alert('Password / Username Salah');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets\style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type='text/css'>
    <title>Login Administrator</title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form">
                <label for="username" style="padding-top:13px">
                    &nbsp;Username
                </label>
                <input id="username" class="form-content" type="text" name="username" required />
                <div class="form-border"></div>
                <label for="password" style="padding-top:22px">&nbsp;Password
                </label>
                <input id="password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submitLogin" value="LOGIN" />
            </form>
        </div>
    </div>
</body>

</html>