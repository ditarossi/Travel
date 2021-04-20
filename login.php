<?php
    session_start();
    require('database.php');
?>
<link href="assets/bootstrap/css/bootstraplogin.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/login.css" rel="stylesheet" />
<script src="assets/bootstrap/js/bootstraplogin.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
<a class='btn btn-dark display-4' href='index.php?target=home'>Back to Home</a><br><br>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Admin</h3>
                    <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="form-group">
                            Username<input type="text" name="username"  class="form-control" >
                        </div>
                        <div class="form-group">
                            Password<input type="password" name="password"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" name="loginadmin" class="btn btn-dark display-4">Login</button>  
                        </div>
                        
                        <?php
                            if (isset($_POST['loginadmin']))
                            {
                                $username=$_POST['username'];
                                $password=$_POST['password'];
                                //require('database.php');
                                $queryselect = "SELECT * FROM admin WHERE username='$username' and password_admin='$password' ";
                                $hasilselect = mysqli_query($koneksi1,$queryselect);
                                $jumlah = mysqli_num_rows($hasilselect);
                                if ($jumlah==1){
                                    while($row = mysqli_fetch_array($hasilselect))
                                    {
                                        //session_start();
                                        $_SESSION['username']=$row['username'];
										$_SESSION['nama_admin']=$row['nama_admin'];
                                        echo "<script>alert('Login Berhasil');</script>";
                                        echo "<script>location='admin.php';</script>";

                                    }
                                }else 
                                {
                                    echo "<script>alert('Login gagal, Username atau Password tidak sesuai !');</script>"; 
                                    echo "<script>location='login.php';</script>";
                                }   
                            }
                        ?>

                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login for User</h3>
                    <form  method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="form-group">
                            E-mail<input type="text" name="email"  class="form-control" >
                        </div>
                        <div class="form-group">
                            Password<input type="password" name="passworduser"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" name ="loginuser" class="btn btn-dark display-4">Login</button>  
                        </div>
                        <div class="form-group">
                            Belum punya akun?<a href="index.php?target=akunbaru" value="Login"> Create Account</a>
                        </div>

             
						<?php
                            if (isset($_POST['loginuser']))
                            {
                                $email=$_POST['email'];
								$passworduser=$_POST['passworduser'];
                                $queryselectuser = "SELECT * FROM pelanggan WHERE email_pelanggan='$email' and password_pelanggan='$passworduser' ";
                                $hasilselectuser = mysqli_query($koneksi1,$queryselectuser);
                                $jumlah = mysqli_num_rows($hasilselectuser);
                                if ($jumlah==1){
                                    while($row = mysqli_fetch_array($hasilselectuser))
                                    {
                                        //session_start();
                                        $_SESSION['email']=$row['email_pelanggan'];
										$_SESSION['passworduser']=$row['password_pelanggan'];
										$_SESSION['nama_pelanggan']=$row['nama_pelanggan'];
										$_SESSION['telepon_pelanggan']=$row['telepon_pelanggan'];
                                        echo "<script>alert('Login Berhasil');</script>";
                                        echo "<script>location='pelanggan.php?target=home';</script>";

                                    }
                                }else 
                                {
                                    echo "<script>alert('Login gagal, E-mail atau Password tidak sesuai !');</script>"; 
                                    echo "<script>location='login.php';</script>";
                                }   
                            }
                        ?>
                    </form>
                    
                </div>
            </div>
        </div>