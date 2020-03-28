<?php
include('session.php');
if(!isset($_SESSION['login_user']))
  header("Location:index.php");
 ?>
<!DOCTYPE html>
<html>
    <head>

        <title>Your Home Page</title>
        <link rel="stylesheet" href="./css/animate.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <style>
        body {
          background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
          margin:50 auto}
        .mystyle {margin:20px 0;}
        .btn:after {
    font-family: "Glyphicons Halflings";
    content: "\e114";
    float: right;
    margin-left: 15px;
  }
  .btn.collapsed:after {
    content: "\e060";
  }
  .radio {margin-right:10px !important;}
  .button { float:right; align:center;margin-top:50px;}
  img {
    border-radius:50%;
    width:50px;
    height:50px
  }
  .profile {
    color:#000;
    background:#fff;
    padding:2%;
    margin-top:10px;
    text-align:center;
    text-transform:uppercase;
    line-height:50px;
  }
  .profile a {
    color:#fff;
  }
  .myne{

    margin-top:50px !important;
  }
  </style>
 
  
    </head>
    <body>
        
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });
          
        </script>
      <div class="container">
        <div id="jumbotron" class="profile animated bounceInLeft">
        <div class="row">
          <div class="col-2">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"  alt="avatar">
          </div>
          <div class="col-7">
          <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
          </div>
          <div class="col">
         <a href="logout.php" class="btn btn-raised btn-success pull-right">Log Out</a></b>
          </div>
        </div>
        </div>
            <div id="accordion">
            
                <div class="card mystyle animated fadeInRight delay-1s">
                  
                    <div class="card-header" id="headingOne">
                    
                        <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"  >
                            1.National Initiatives Participation
                        </button>
                        </h5>
                    </div>
                    
                    <div id="collapseOne" class="collapse in" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <form method="post" action="count.php" id="cat1">
                                <div class="row">
                                  
                                   <div class="col">
                                        <div class="radio">
                                                  <label class="bmd-form-sm">
                                                    <input type="radio" name="NCC" id="optionsRadios1"  value="NSS">
                                                    NSS
                                                  </label>
                                          </div> 
                                      </div>
                                    <div class="col">
                                          <div class="radio">
                                                  <label class="bmd-form-sm">
                                                    <input type="radio" name="NCC" id="optionsRadios1"  value="NCC">
                                                    NCC
                                                  </label>
                                                </div> 
                                      </div>
                                  
                                    </div>
                                    
                                      <div class="row">
                                        <div class="col">
                                          <div class="form-group"> 
                                            <label for="formGroupExampleInput" class="bmd-label-floating">If you have any other certifcations please Enter here</label>
                                            <input type="text" name="event" class="form-control" id="formGroupExampleInput" required>
                                            
                                          </div>
                                        </div>
                                        <div class="col">
                                        <input type="submit" name="form1" class="btn btn-raised btn-success button" value="Add">
                                        </div>
                                      </div>
                                </div>  
                            </form>
                          </div>
                        </div>
                        <div class="card mystyle animated fadeInRight delay-1s">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2.Sports /Games/ Cultural Activities Participation
                              </button>
                            </h5>
                          </div>
                          
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                            <form method="post" action="count.php" name="cat2"> 
                                <div class="row">
                                  <div class="col">
                                      <div class="form-group">
                                          <label for="exampleSelect1" class="bmd-label-floating">Select Event</label>
                                          <select class="form-control" id="exampleSelect1" name="selectc" required>
                                              <option selected>------------</option>
                                              <option  value="sports">1.Sports</option>
                                              <option  value="games">2.Games</option>
                                              <option  value="music">3.Music</option>
                                              <option  value="arts">4.Performing arts</option>
                                              <option  value="larts">5.Literary arts</option>
                                          </select>
                                        
                                        </div>
                                      </div>
                                  <div class="col">
                                        <div class="form-group">
                                             <label for="exampleSelect1" class="bmd-label-floating">Select Level</label>
                                              <select class="form-control" id="exampleSelect1" name="level">
                                                  <option selected>------------</option>
                                                  <option value="College">Level I College Events</option>
                                                  <option value="Zonal">Level II Zonal Events</option>
                                                  <option value="University">Level III State/ University Events</option>
                                                  <option value="National">Level IV National Events</option>
                                                  <option value="International">Level V International Events</option>
                                              </select>
                                            </div>
                                    </div>         
                                  </div>
                                  <div class="row">
                                  
                                    <div class="col">
                                    <div class="radio">
                                                  <label class="bmd-form-sm-inline">
                                                    <input type="radio" name="prize" id="optionsRadios1" value="1">
                                                    1st Prize
                                                  </label>
                                                </div> 
                                    </div>
                                    <div class="col">
                                    <div class="radio">
                                                  <label class="bmd-form-sm-inline">
                                                    <input type="radio" name="prize" id="optionsRadios1" value="2">
                                                    2nd Prize
                                                  </label>
                                                </div> 
                                    </div>
                                    <div class="col">
                                    <div class="radio">
                                                  <label class="bmd-form-sm-inline">
                                                    <input type="radio" name="prize" id="optionsRadios1" value="3">
                                                    3rd Prize
                                                  </label>
                                                </div> 
                                    </div>
                                    <div class="col">
                                    <div class="radio">
                                                  <label class="bmd-form-sm-inline">
                                                    <input type="radio" name="prize" id="optionsRadios1" value="0">
                                                    Pariticpated
                                                  </label>
                                                </div> 
                                    </div>
                                    <div class="col">
                                    <input type="submit" name="form2" class="btn btn-raised btn-success" style="float:right;" value="Add">
                                    </div>
                                  </div>   
                                  <div class="form-group"> 
                                            <label for="formGroupExampleInput" class="bmd-label-floating">Enter Event details</label>
                                            <input type="text" name="event" class="form-control" id="formGroupExampleInput" required>
                                            
                                          </div>
                              </div>
                            </form>
                          </div>
                        </div>
                       
                        <div class="card mystyle animated fadeInRight delay-1s">
                                <div class="card-header" id="headingthree">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                        3.Professional Self Initiatives
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                                  <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                        </div>
                        <div class="card mystyle animated fadeInRight delay-1s">
                                <div class="card-header" id="headingfour">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                           4. Entrepreneurship and Innovation
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                  <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                        </div>
                        <div class="card mystyle animated fadeInRight delay-1s">
                          <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsefour">
                                      5.Leadership & Management
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                  </div>
                    
                    <div class="row animated fadeIn delay-2s">
                        <div class="col update">
                              
                        <a href="view.php" class="btn btn-raised btn-success" role="button">Update</a>
                        <a href="profile.php" class="btn btn-raised btn-success" role="button">Reset</a>
                                
                        </div>
                    </div>  
                </div>
              </div>
  
            </div>

</body>
</html>