<?php
include('session.php');

  if (isset($_POST['form1']))
  {
    echo "<i>HELLO</i>";
    $point=60;
    $event=$_POST['event'];
    echo $login_session;
    echo $event;
    $re=mysqli_query($connection,"Insert into profile (username,activity,points) values ('$login_session','$event',$point)");
    if($re)
      echo "success";
    else
      echo "error";
  }
  if(isset($_POST['form2']))
  {
    if($_POST['selectc']=='sports'||$_POST['selectc']=='games')
     $cat=2;
    else
      $cat=3;
    $col=$_POST['level'];
    $sql=mysqli_query($connection,"Select $col from activity_points where category=$cat");
    $res=mysqli_fetch_assoc($sql);
    foreach($res as $x => $x_value) {
      $point=$x_value;
    }
    $val=$_POST['prize'];
    if($val!=0)
    {
      $sql2=mysqli_query($connection,"Select $col from prize where pno=$val");
      $res2=mysqli_fetch_assoc($sql2);
      foreach($res2 as $x => $x_value) {
        $p=$x_value;
    }
    $point=$point+$p;
  }
  echo $point;
  $event=$_POST['event'];
  $res3=mysqli_query($connection,"Insert into profile (username,activity,points) values ('$login_session','$event',$point)");
  if($res3)
     echo "success";
  else
     echo "error";
}


else
  echo "error";
header('Location: profile.php');
?>