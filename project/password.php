<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['email']))
    {
  header('location:login.php');
    }

  ?>
<?php
$val=" ";
    if(isset($_GET['msg']))
    {
        $GLOBALS['val']=$_GET['msg'];
       //    echo  $GLOBALS['val'];
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script src="js/script.js"></script>
         <script src="js/pass.js"></script>
         <script type="text/javascript">
          function checkmsg(str)
            {
                if(str=='1')
                {
             document.getElementById("msg1").innerHTML="Plese check Email id";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        $("#myModal2").modal();
        return false;
            }  
            } 
         </script>
    </head>
    <body class="bg-primary" onload="checkmsg(<?=$val?>)">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form method="post" action="mail/forgetpass.php">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="add" type="email" aria-describedby="emailHelp" placeholder="Enter email address" /></div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="login.php">Return to login</a>
                                                <input type="submit" class="btn btn-primary" name="send" onclick="return em()" value="Reset Password"></div>
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
                include('pagesfile/footer.php')
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
      <!--  <script type="text/javascript">
        function ckecksms()
        {
            str=document.getElementById("inputEmailAddress").value;
            $.ajax({
             url: "sms/sms.php", 
              //Session["email"]=str;
              type:"post",
              data:{id:str},
              success: function(result){ 
               // alert(str);
           //   alert (result);
               //document.cookie=veifi+''
              if(result=="1")
              { 
                document.getElementById("msg1").innerHTML="chak your email id <br> your  ";
                  document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
                $("#myModal2").modal();
              }
              if(result=="2")
              { 
        document.getElementById("msg1").innerHTML="Plese Enter The Email";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        $("#myModal2").modal();
              }
            }});

        }
      </script>-->
        
    </body>
</html>
