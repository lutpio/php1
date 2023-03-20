<?php
session_start();

$isKosong = empty($_SESSION['email']);

$email = '';
$password = '';

if($isKosong == false){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];  
}

if(isset($_POST['login'])) {
    if($email == $_POST["email_login"] && $password == $_POST["password_login"]){
        $_SESSION['login'] = true;
        header("Location: anggota.php");
    }    
    $error = true;
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
    </head>
    <body class="bg-dark-subtle">
        <div class="container-floid">
            <div class="position-absolute top-50 start-50 translate-middle bg-light p-4 rounded-2 h-55 w-50">
            <a href="index.php"><button type="button" class="btn-close float-end" aria-label="Close"></button></a>
            <br>    
            <?php if(isset($error)): ?>    
                <div class="alert alert-danger py-3" role="alert">
                    Password / Username salah
                </div>
            <?php endif; ?>             
                <form action="" method="post">
                <div class="form-group mb-3">
                        <label for="email_login"  class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_login" id="email_login" autofocus autocomplete="off" placeholder="masukkan email.." required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_login"  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password_login" id="password_login" autocomplete="off"  placeholder="masukkan password.." required>                    
                    </div> 
                    <div class="form-check mb-3 ">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                    </div>
                    <hr class="my-4">
                    <a href="form.php" class="link-primary text-decoration-none" >Daftar</a>
                </form>
            </div>        
        </div>
    </body>
</html>
