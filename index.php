<?php
include("frames/config.php");
if($_SESSION['loggedin']==1)
{
    header("Location:frames/db.html");
}
    

$wrong=0;
if(isset($_POST['username'])&&isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
if($query=mysqli_query($link,"SELECT Username FROM login_admin WHERE Username='".$username."' AND Password='".$password."'")){
if(mysqli_num_rows($query)==1)
{
    $_SESSION["loggedin"]=1;
    header("Location:frames/db.html");
}
    else
    {
        $wrong=1;
    }
}
}

?>
       
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    </head>

<body style="overflow:hidden;" >
    <div class="row" >
        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
            <div class="header">
                <h2>Sign In</h2>
            </div>
            <h5 class="border"><strong>to Exam management system</strong></h5>
            <div class="form-elements">
                <form method="post">
                    <span style="color:red"><?php if($wrong==1){echo "Username and Password didn't match.";}?></span>
                    <input name="username" type="text" class="form-control" placeholder="johndoe7" />
                    <input name="password" type="password" class="form-control" placeholder="Mt" />
                    
                         
                       
        
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>