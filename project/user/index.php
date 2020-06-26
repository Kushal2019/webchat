<!DOCTYPE html>
<html lang="en">
<?php
    $val="";
    if(isset($_GET['msg']))
    {
    $GLOBALS['val']=$_GET['msg'];
    }

?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WebChat</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/usermyprofile.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/user.js"></script>
        <script type="text/javascript">
        function check_up_ero(msg)
        {
            if(msg=='1')
            {
               document.getElementById("msg1").innerHTML="update ";
                $("#myModal2").modal();
                return false;
            }
        }
      </script>
    </head>
    <body class="sb-nav-fixed" onload="check_up_ero(<?=$val?>)">
        <?php
            include("../pagesfile/topnav.php");
            include("../pagesfile/sidetop.php");
        ?>
     <div id="layoutSidenav_content">
    <main>
    <div class="container emp-profile">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary" >
                                Change Photo
                                <input type="file" name="file" accept="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="profile-edit-btn"  id="bt" onclick="return enable();">Edit Profile </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form method="post" action="../ActionPages/user_detalis_up.php">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="name" id="ip1" class="change" value="<?=$data['name']?>" disabled style="border: none;"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="email" name="email" value="<?=$data['email']?>" disabled style="border: none;"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="number" name="phone" id="ip2" class="change" value="<?=$data['mobile']?>" disabled style="border: none;"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="pro" id="ip3" class="change" value="<?=$data['profession']?>" disabled style="border: none;"></p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-2">
                                               
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="submit" name="up" value="Update" id="update" class="btn btn-success" style="display: none;" onclick="return check1()"></p>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                    
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Old Passwod </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="pro" id="ip3" class="change"></p>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-3">
                                                <label>New Passwod </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="pro" id="ip3" class="change"></p>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-3">
                                                <label>Confirm Passwod </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="pro" id="ip3" class="change"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                               
                                            </div>
                                            <div class="col-md-6">
                                                <p><button type="button" class="btn btn-success">Change</button>
                                                <button type="button" class="btn btn-danger">Reset</button>
                                                </p>

                                            </div>
                                        </div>
                                </form>                  
                            </div>
                        </div>
                    </div>
                </div>          
        </div>
     </main>

        <?php
            include("../pagesfile/footer.php");
           
        ?>
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
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
       
    </body>
</html>
