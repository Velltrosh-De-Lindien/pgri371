<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Halaman Login -->
     <div class="page-login">
        <!-- Box -->
         <div class="box-login1 box-login2">
            <!-- Box Header -->
             <div class="login-header text-center">
                Login Admin
             </div>
             <!-- Box Body -->
              <div class="box-body">
                <?php
                    if(isset($_GET['msg'])){
                        echo "<div class='alert alert-error'>".$_GET['msg']."</div";
                    } 
                ?>
                <!-- Form Login-->
                <form action="" method="POST">
                    <div class="form-login">
                        <label for="">Username</label>
                        <input type="text" name="user" placeholder="Username" class="input-login">
                    </div>
                <form action="">
                    <div class="form-login">
                        <label for="">Password</label>
                        <input type="password" name="pass" placeholder="Password" class="input-login">
                    </div>
                    <div class="btn">
                    <input type="submit" name="submit" value="Login" class="btn-login">
                    </div>
                </form>

                <?php
                if(isset($_POST['submit'])){
                    $user = mysqli_real_escape_string($conn, $_POST['user']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
                    if (mysqli_num_rows($cek) > 0){

                        $d = mysqli_fetch_object($cek);
                        if (md5($pass) == $d->password){

                            $_SESSION['status_login']       = true;
                            $_SESSION['uid']                = $d->id;
                            $_SESSION['uname']              = $d->nama;
                            $_SESSION['ulevel']             = $d->level;

                            echo "<script>window.location = 'admin/index.php'</script>";

                        }else {
                            echo '<div class="alert alert-error">Password salah</div>';
                        }

                    }else {
                            echo '<div class="alert alert-error">Username tidak ditemukan</div>';
                        }
                    }
                
                ?>

              </div>
              <!-- Box Footer -->
               <div class="box-footer text-center">
                <a href="index.php">Halaman Utama</a>
               </div>
         </div>
     </div>
</body>
</html>