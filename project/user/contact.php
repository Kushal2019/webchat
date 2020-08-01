<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WebChat</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/addfriend.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/contact_search.js"></script>
        <script type="text/javascript" src="../js/jsfile.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        session_start();
  if(!isset($_SESSION['email']))
    {
  header('location:../new folder/index.php');
    }
       // session_start();
            include("../pagesfile/contact_topnav.php");
            include("../pagesfile/sidetop.php");
            include("../ActionPages/backend.php");
        ?>
     <div id="layoutSidenav_content">
    <main>
         <div class="container" id="con">
    <div class="row">
        <div class="col-md-8">
            <div class="people-nearby">
              <?php
                while($con_user=mysqli_fetch_array($contact))
                {
                  $email=$con_user['friend_email'];
                  $userdata=fri_detalis($email);
              ?>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="../upload/user_pic/<?=$userdata['user_pic']?>" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link"><?=$userdata['name']?></a></h5>
                    <p><?=$userdata['profession']?></p>
                    <div id='<?=$userdata['id']?>'>
                      <script>
                        function re2()
                        {
                            online2('<?=$userdata['id']?>');
                        }
                       window.setInterval(re2, 100);
                    </script>

                     </div> 
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right" onclick="targetmsg(<?=$userdata['id']?>)">Send Massage</button>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
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
            <button type="button" class="btn btn-default" data-dismiss="modal" id="bt2" style="color:red;">Close</button>
        </div>
      </div>
    </div>
  </div>
        
        <script src="../js/ajax.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
     </body>
</html>
