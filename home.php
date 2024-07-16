<?php
session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['id']))
    {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <title></title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" 
    style="min-height:100vh">
    <?php 
        if ($_SESSION['level'] == 'admin'){?>
            <div class="card" style="width: 18rem;">
            <img src="img/admin.png" class="card-img-top" alt="...">
            <div class="card-body text-center" >
                <h5 class="card-title"> <?php echo $_SESSION['name'];?></h5>
                <a href="admin/index.html" class="btn btn-primary">Masuk</a>
                <a href="logout.php" class="btn btn-primary">Keluar</a>
            </div>
            </div>
     <?php   }else{ ?>
        <div class="card" style="width: 18rem;">
            <img src="img/admin.png" class="card-img-top" alt="...">
            <div class="card-body text-center" >
                <h5 class="card-title"> <?php echo $_SESSION['name'];?></h5>
                <a href="user/index.php" class="btn btn-primary">Masuk</a>
                <a href="logout.php" class="btn btn-primary">Keluar</a>
            </div>
            </div>
    <?php }?>
   

</div>
</body>
</html>
<?php }else{
    header ("Location: login.php ");
}?>