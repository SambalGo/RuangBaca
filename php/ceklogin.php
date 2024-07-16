<?php
session_start();
include "../conect.php";

    if(isset($_POST['username'])&& isset($_POST['pass']) && isset($_POST['level'])){

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          $username = test_input($_POST['username']);
          $pswd = test_input($_POST['pass']);
          $level = test_input($_POST['level']);

          if(empty($username)){
                header("Location: ../login.php?error=Username is Required");
          }else if (empty($pswd)){
                header("Location: ../login.php?error=Password is Required");
          }else{
            $pswd = md5($pswd);
                $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pswd'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result)===1){ 
                    $row = mysqli_fetch_assoc($result);
                    if($row['pass']=== $pswd && $row['level']== $level ){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['level'] = $row['level'];
                        $_SESSION['username'] = $row['username'];

                        header ("Location: ../home.php ");
                }else{
                    header("Location: ../login.php?error=Incorrect Username or password");
                }

          }else{
            header("Location: ../login.php?error=Incorrect Username or password");
        }
    }

    }else{
        header ("Location: ../login.php ");
    }

?>