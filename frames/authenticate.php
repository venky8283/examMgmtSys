<?php
include("config.php");
$username=$_POST['username'];
$password=$_POST['password'];
if($query=mysqli_query($link,"SELECT Username FROM login_admin WHERE Username='".$username."' AND Password='".$password."'")){
if(mysqli_num_rows($query)==1)
{
    header("Location:db.html");
}
    else
    {
        echo "something wrong;";
    }
}
else
{
    echo $username.$password;
}
?>