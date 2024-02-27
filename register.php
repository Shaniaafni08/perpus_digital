<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['register'])) {
                                            $nama_lengkap = $_POST['nama_lengkap'];
                                            $email = $_POST['email'];
                                            $username = $_POST['username'];
                                            $alamat = $_POST['alamat'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']);

                                          $insert = mysqli_query($koneksi, "INSERT INTO user(nama_lengkap,email,username,alamat,password,level) VALUES ('$nama_lengkap','$email','$username','$alamat','$password','$level')");
                                          if($insert){
                                            echo '<script>alert("Selamat register berhasil. Silahkan Login");location.href="login.php"; </script>';
                                        }else{
                                            echo '<script>alert("Register gagal. Silahkan coba kembali")</script>';
                                        
                                          }
                                        }

                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nama Lengkap</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" required name="nama_lengkap" placeholder="Masukkan Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" required name="email" placeholder="Masukkan Email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" required name="username" placeholder="Masukkan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" required name="password" type="password" placeholder="Masukkan password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Alamat</label>
                                               <textarea required name="alamat" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                               <select required name="level" class="form select py 4">
                                                <option value="admin">admin</option>
                                                <option value="peminjam">peminjam</option>
                                               </select>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                       <b> &copy; 2024 Perpustakaan Digital.</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
