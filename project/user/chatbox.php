<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
         <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/chatbox.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="../js/send_massage.js"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <?php
            include('../connect.php');
            include("../pagesfile/topnav.php");
            include("../pagesfile/sidetop.php");
        ?>
     <div id="layoutSidenav_content">
    <main>
        <!--hjjh-->
            <div class="container-fluid">
                 <!--this for first div-->
            <div class="row ">
                <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            <?php
                            $sql="select * from chat_with";
                            $exe=mysqli_query($con,$sql);
                            while ($ary=mysqli_fetch_array($exe)) {
                                $un=$ary['friend'];
                               $sql1="select activelog from login_detais where username='$un'";
                               $exe1=mysqli_query($con,$sql1);
                               $ary1=mysqli_fetch_array($exe1);
                            ?>
                        <li class="active">
                            <div class="d-flex bd-highlight" onclick="gotochat('<?=$un?>')">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                     <?php
                                        if($ary1[0]=="online")
                                        {
                                    ?>
                                    <span class="online_icon"></span>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="user_info">
                                    <span><?=$ary['friend_name']?></span>
                                    <?php
                                        if($ary1[0]=="online")
                                        {
                                    ?>
                                    <p><?=$ary['friend_name']?>  is online</p>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <p><?=$ary['friend_name']?>  is offline</p>
                                     <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                        ?>
                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div></div>
                <!--this for user chat div-->
               <?php
                    if(isset($_GET['email']))
                    {
                 include("../ActionPages/backend.php");
                include("../ActionPages/user_chat.php");
                }
               ?>    
    </main>

               <?php
            include("../pagesfile/footer.php");
           
        ?>
            </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/ppp.js"></script>
       
    </body>
</html>
