  <!DOCTYPE html>
  <?php
  session_start();
  if(isset($_SESSION['email']))
    {
  header('location:user/index.php');
    }

    
  ?>
<html lang="en">
    <head >
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
         <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
      <script src="js/login.js"></script>
        <script src="js/scripts.js"></script>
    <script type="text/javascript">
    function checkemail(msg)
    {
    if(msg=='1')
    {
       document.getElementById("msg1").innerHTML="Plese check username and password";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        $("#myModal2").modal();
        return false;
    }
  }
  </script>
    </head>
    <?php
    $val="";
    if(isset($_GET['msg']))
    {
    $GLOBALS['val']=$_GET['msg'];
   // echo  $_GET['msg'];
    //echo $GLOBALS['val'];
    }

?>
    <body class="bg-primary" onload="checkemail(<?=$val?>)">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="ActionPages/log.php" method="post" >
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" value="<?php 
                                            if(isset($_COOKIE['username']))
                                            {
                                                echo $_COOKIE['username'];
                                            }
                                            ?>" /></div>
                                           <!-- <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" name="pass" placeholder="Enter password"/></div>
                                           --><div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" name="pass" placeholder="Enter password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password'"  name="pass" 
                                            value="<?php 
                                            if(isset($_COOKIE['password']))
                                            {
                                                echo $_COOKIE['password'];
                                            }
                                            ?>"/></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"  name="rempas"/><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.php">Forgot Password?</a><input type="submit"class="btn btn-primary"  onclick="return login()" value="Login"  name="call"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
               <?php
               
               include('pagesfile/footer.php');
               ?>
            </div>
       <!--1-->
        <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h5 class="modal-title"><i class="fa fa-warning" style="font-size:20px;color:red"></i> Warning</h5>
          <button type="button" class="close" data-dismiss="modal" id="bt1" style="color:red;">&times;</button>
        </div>
        <div class="modal-body">
          <p id="msg1" style="color:red;">Plese Enter The First Name </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="bt" onclick="javascript:document.getElementById('inputEmailAddress').focus();" style="color:red;">Close</button>
        </div>
      </div>
    </div>
  </div>
        <script src="js/ajax.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
