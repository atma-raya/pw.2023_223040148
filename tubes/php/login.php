<?php
    session_start();
    require "../hubung.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<style>
    .main{
        height: 100vh;
    }

    .login-box {
        height: 300px;
        width: 500px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id=username>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id=password>
                </div>
                <div>
                    <button class="btn btn-dark form-control mt-3" type="submit" name="btnlogin">Login</button>
                </div>
            </form>
        </div>
        
        <div class="mt-3" style="width : 500px">
            <?php
                if(isset($_POST['btnlogin'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);
                    
                    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows ($query);
                    $data = mysqli_fetch_array($query);

                    if($countdata>0){
                        if (password_verify($password, $data['password'])) {
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location:../php');
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Password salah!
                            </div>
                            <?php    
                        }
                    }
                    else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Pastikan Akun benar!
                        </div>
                        <?php
                    }
                
                }
            ?>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>