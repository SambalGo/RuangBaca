<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <title>LOGIN</title>
</head>
<body>
    <div class="p-3 mb-2 bg-secondary text-white"></div>
    <div class="container d-flex justify-content-center align-items-center" 
    style="min-height:100vh">
    <form class = "borde shadow p-3 rounded"
        style="width: 450px"
        action="php/ceklogin.php"
        method="post"
        >
        <h1 class= "text-center p-3">LOGIN</h1>
        <div class="text-center p-3">
        <img src="img/logo.png" class="rounded" alt="logo" width="100" height="100">
        </div>
        <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
             <?php echo $_GET['error']; ?>
    </div>
    <?php } ?>

  <div class="mb-3">
    <label for="username"
            class="form-label">Username</label>
    <input type="text" 
            class="form-control" name="username" id="username" >
  </div>
  <div class="mb-3">
    <label for="pass"
            class="form-label">password</label>
    <input type="password"
            class="form-control" name="pass" id="pass" >
  </div>
  <div class="mb-1">
    <label for="pass"
            class="form-label">level</label>
  </div>
  <select class="form-select mb-3"
        name="level"
        aria-label="Default select example">
    <option selected value="user">user</option>
    <option value="admin">admin</option>
  </select>

  <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
<div class="p-3 mb-10 bg-secondary text-white"></div>
</html>