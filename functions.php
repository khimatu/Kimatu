<?php
fuction check_login($con)
{

if(isset($_SESSION['user_id']))
 {
    $id=$_SESSION['user_id'];
    $query = "select * from users where user_id = '$id' limit 1";
    
    $results = mysqli_query($con,$query);
    if($results && mysqli_num_rows($results) > 0){
        $user_data = mysqli_assoc($results);
        return $user_data
  }
 }
//  redirect to login
header("location:login.php")
die;
}
functions random_num($length)
{
    $text =""
    if($length < 5)
    {
        $length = 5;

    }
    $len = rand(4,$length);
    for($i=0;$i < $len;$i++){
        #code...

        $text .= rand(0,9);
    }
    return $text;
}
?>