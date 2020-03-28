<?php
include ("session.php");
if(isset($_POST['adminsubmit'])){
  $name=$_POST['studentname'];
  $_SESSION['uname']=$name;
}  
if(isset($_POST['update']))
{ echo "hello";
  $uname=$_SESSION['uname'];
  $res=mysqli_query($connection,"Select sum(points) from profile where username='$uname'");
  if($res) {
    $result=mysqli_fetch_array($res);
    {
      $fpoints=$result['sum(points)'];
    }
    echo $fpoints;
    echo $uname;
    $re=mysqli_query($connection,"update login set totalpoints=$fpoints where username='$uname'");
    if($re)
    {
      echo '<script type="text/javascript"> alert(success); </script>';
      header("location:adminview.php");
    }
    
    else  
      echo "error";
  }
  else echo 'error';
}
?>