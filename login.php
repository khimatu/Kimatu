<?php
session_start();
include("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    // someone was posted
   $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        // read from database
        $query = "select * from users where user_name = '$user-name' limit 1";

        $result = mysqli_query($con, $query);
        if($result){
            if($results && mysqli_num_rows($results) > 0){
                $user_data = mysqli_assoc($results);
              if($user_data['password']=== $password){
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location:index.php");
                die;
              }
          }

        }
        echo "check your username or password";

    }else{
        echo "Please enter valid information!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
            width:100%;
        }
        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:#96000c;
            border:none;
        }
        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        
        }
    </style>
    <div id="box">
        <form method="post">
            <div style="font-size:17px; margin:10px;"></div>
        <input id="text" type="text" name="user_name">
        <br>
        <br>
        <input id="text" type="password" name="password">
        <br>
        <br>
        <input id="button" type="submit" value="Login">
        <br>
        <br>
        <a href="signup.php">Click to Signup</a>
        <br>
        <br>
        </form>
    </div>
</body>
</html>