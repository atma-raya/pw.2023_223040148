<?php
    require "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1321d8a704.js" crossorigin="anonymous"></script>
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color :#25791e;
        border-radius: 15px;
    }

    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa-solid fa-house"></i>Home</li>
            </ol>
        </nav>
        <h2>Hallo <?php echo $_SESSION['username']; ?></h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 summary-kategori p-4">
                    <div class="row">
                        <div class="col-6">
                        <i class="fa-solid fa-bars fa-3x text-black 50"></i>
                        </div>
                        <div class="col-5 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4">Kategori</p>
                            <p><a href="kategori.php" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
    
    
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>