<?php 
require 'koneksi.php';
checkLoginAtLogin();

if (isset($_POST['btnLogin'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $checkUsername = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if ($data = mysqli_fetch_assoc($checkUsername)) {
        // Hanya cocokkan langsung password tanpa hashing
        if ($password === $data['password']) {
            $_SESSION = [
                'id_user' => $data['id_user'],
                'username' => $data['username'],
            ];

            header("Location: admin/index.php");
        } else {
          setAlert("Password Salah!", "Cek Kembali PASSWORD Anda", "error");
          header("Location: ../login.php");
        }
    } else {
      setAlert("Username tidak Terdftar!", "Cek kembali USERNAME Anda!", "error");
      header("Location: ../login.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include 'assets/css/css.php'; ?>
  <title>Login</title>
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(assets/img/dl.webp);
    }

    .container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -55%);
    }
</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 mx-5 py-4 px-5 text-dark rounded border border-dark" style="background-color: rgba(180,190,196,.6);">
            <h3 class="text-center">Login</h3>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>
            <form method="post">
                <div class="form-group">
                    <label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
                    <input required class="form-control rounded-pill" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
                    <input required class="form-control rounded-pill" type="password" name="password" id="password">
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-warning rounded-pill" type="submit" name="btnLogin"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer style="position: absolute; bottom: 0; width: 100%; text-align: center;">
    <div style="background-color: transparent;" class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg text-center text-white pt-4 pb-2">
                <!-- Footer content here -->
            </div>
        </div>
    </div>
</footer>
</body>
</html>
