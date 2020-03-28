<?php
    session_start(); 
    $error=''; 
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "<script>alert(Username or password is invalid)</script>";
            $error = "Username or Password is invalid";
        }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $connection = mysqli_connect("localhost", "root", "");
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);
        $db =mysqli_select_db($connection,"project");
        $query = mysqli_query( $connection,"select * from login where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        $r= mysqli_fetch_array($query);
        if ($rows ==1 && $r['admin']==NULL) {
            $_SESSION['login_user']=$username;
            header("Location:profile.php");
        }
        else if ($rows==1 && $r['admin']=='yes')
        {
            $_SESSION['login_user']=$username;
            $_SESSION['admin']=1;
            header("Location:adminview.php");
        }
    else {
        $error = "Username or Password is invalid";
    }
    mysqli_close($connection); 
    }   
}

?>