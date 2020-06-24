<!DOCTYPE html> 
<?php
session_start();
$val="";
if(isset($_GET['msg']))
{
  $GLOBALS['val']=$_GET['msg'];
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
     <script src="js/regester.js"></script>
     <script>
      function checkmsg(str)
      {
        if(str=='1')
        {
          document.getElementById("msg1").innerHTML="Plese check all detalis";
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
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="ActionPages/reg.php" method="post">
                                            <div class="form-row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name"
                                                    name="frist" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="last" /></div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputMobile">Mobile Number</label><input class="form-control py-4" id="inputMobile" type="text" placeholder="Enter Mobile Number" name="phone"  maxlength="10"  onblur="ckeckephone(this.value)"/></div>
                                                </div>
                                                 <div class="col-md-6">
                                                      <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email address" name="email" onblur="ckeckemail(this.value)" /></div>
                                                </div>
                                                <div id="aa"></div>
                                            </div>
                                          
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" name="form-control py-4" id="inputPassword" type="password" placeholder="Enter password"  onmousedown="this.type='text'" onmouseup="this.type='password'"  /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="pas"/></div>
                                                </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group"><label class="small mb-1" for="inputProfession">Profession(optional)</label><input class="form-control py-4" id="inputProfession" type="text" placeholder="Enter Profession" name="prof"  /></div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="form-group"><label class="small mb-1" for="inputveri">verification code <div id='cdmsg' style="color:red;"></div></label><input class="form-control py-4" id="inputveri" type="text" placeholder="Enter verification code" name="" onblur="return checkvcode()"  /></div>
                                                </div>
                                            </div>
                                            <center><div><input type="submit" class="btn btn-primary" onclick="return check()" value="Create Account" name="sub" ></div></center>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
             <!--add footer .... link== pagesfile/footer.html-->
             <br>
             <?php include('pagesfile/footer.php');?>
        </div>
        
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
            <button type="button" class="btn btn-default" data-dismiss="modal" id="bt" onclick="javascript:document.getElementById('inputFirstName').focus();" style="color:red;">Close</button>
        </div>
      </div>
    </div>
  </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script type="text/javascript">
        function ckeckemail(str)
        {
            $.ajax({
             url: "ActionPages/CheckEmail.php", 
              //Session["email"]=str;
              type:"post",
              data:{id:str},
              success: function(result){ 
               // alert(str);
             // alert (result);
               //document.cookie=veifi+''
              if(result=="1")
              { 
                document.getElementById("msg1").innerHTML="chak your email id <br> your  ";
                 
                $("#myModal2").modal();
              }
              else if(result=="2")
              { 
                document.getElementById("cdmsg").innerHTML="";
                document.getElementById("msg1").innerHTML="<font color='red'>your mail id invalid</font>";
                
                $("#myModal2").modal();
              }
              else
              {
                sessionStorage.setItem("vc", result);
                $( "#cdmsg" ).html("We send Verify Code your email.");
              }
            
            }});

        }
       function checkvcode(){
        var p=sessionStorage.getItem("vc");
           if(document.getElementById("inputveri").value=="")
            {

                 document.getElementById("msg1").innerHTML="Enter the Verification Code";
                 
                $("#myModal2").modal();
                return false;
            }
            else
            {

              
                     if(document.getElementById("inputveri").value!=p)
                     {
                      document.getElementById("cdmsg").innerHTML="";
                        document.getElementById("msg1").innerHTML="Worng Verification Code ";
                 
                      $("#myModal2").modal();
                      return false;
                     }
                     else
                     {
                     // alert("hi");
                      document.getElementById("cdmsg").style.color = "green";
                      document.getElementById("cdmsg").innerHTML="Verify success..";
                     }

            }

        }
        function ckeckephone(ph)
            {
              $.ajax({
             url: "ActionPages/Chakphonenumber.php", 
              //Session["email"]=str;
              type:"post",
              data:{id:ph},
              success: function(result){
               
                if(result=="1")
              {
                  document.getElementById("msg1").innerHTML="Your Mobile Number already exits";
                  document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
                   document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
                 $("#myModal2").modal();
                 return false;
       }
              }
              });
            }
      </script>  
       
    </body>
</html>
