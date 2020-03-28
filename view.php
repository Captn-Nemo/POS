<!DOCTYPE html>
<?php
include("session.php");

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
  .container {
    width:650px;
  }
  table tr td:last-child a{
            margin-right: 15px;
        }
   .mystyle {
      float:right;
      /* line-height:20px; */
   }  
  </style>
</head>
<body>

<div class="container">
  <div class="row">
  <div class="page-header clearfix">
                        <h2 class="pull-left">Actitvity Point  Details</h2>
                        <a href="logout.php" class="btn btn-default mystyle" role="button">Logout</a>
                    </div>
                    <div class="clearfix"></div>
  <?php 
  $sql=mysqli_query($connection,"Select * from profile where username='$login_session'");
  if($sql)
  {
      if(mysqli_num_rows($sql) >0 )
      {
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
          echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>Activity</th>";
            echo "<th>Calcualted Points</th>";
            echo "<th>Action</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($sql))
        {
          echo "<tr>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['activity'] . "</td>";
          echo "<td>" . $row['points'] . "</td>";
          echo"<td>";
          echo "<a href='delete.php?slno=". $row['slno'] ."' title='Delete Entry' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
          echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      }
      else { echo "<p class='lead'><em>No records were found.</em></p>";}
  }
  else
    echo "error"
  
 ?>
  </div>
  <div class="row">
      <div class="col update">
        <a href="profile.php" class="btn btn-raised btn-primary" role="button">Update</a>
      </div>
  </div>
</div>
 
<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>
</html>


