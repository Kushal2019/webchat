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
         <script src="../js/jsfile.js"></script>
         <?php
          if(isset($_GET['id']))
          {
            ?>
            <script type="text/javascript">
                function re()
                {
                    refresh('<?=$_GET['id']?>');
                }
                function on()
                {
                    online('<?=$_GET['id']?>');
                    
                }
                function massage()
                {
                 massage_recevied('<?=$_GET['id']?>');   
                }
                setTimeout( re,10 );
              window.setInterval(on, 2000);
               window.setInterval(massage, 1000);
            </script>
           
            <?php   
          }
        ?>
    </head>
    <body class="sb-nav-fixed">
       

        <?php
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
                        <li class="active">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                    <span class="online_icon"></span> 
                                </div>
                                <div class="user_info">
                                    <span>K</span>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </li>
                            <li class="active">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                    <span class="online_icon"></span> 
                                </div>
                                <div class="user_info">
                                    <span>Khalid</span>
                                    <p>Kalid is online</p>
                                </div>
                            </div>
                        </li>
                       <!-- <li class="active">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="../upload/user_pic/<?=$data['user_pic']?>" class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Taherah Big</span>
                                    <p>Taherah left 7 mins ago</p>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Sami Rafi</span>
                                    <p>Sami is online</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg" class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
                                    <span class="online_icon offline"></span>
                                </div>
                                <div class="user_info">
                                    <span>Rashid Samim</span>
                                    <p>Rashid left 50 mins ago</p>
                                </div>
                            </div>
                        </li>-->
                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div></div>
                <!--this for first div-->
                <div class="col-md-8 col-xl-9 chat">
                    <div class="card" >
                        
                        <?php
                            if(isset($_GET['id']))
                            {
                              //include('chat_header.php'); 
                                ?>
                                <div id="header">
                                    </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                         
                   <div class="card-body msg_card_body" scrolling="auto" onscroll="">
                            <div id="msg_receive">
                       </div>
                        </div>
                        <div class="card-footer">
                            <div class="input-group" >
                                <div class="input-group-append">
                                    <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                </div>
                                <input type="text" name="" class="form-control type_msg" id="msg1" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text send_btn" onclick="massage_send('<?=$_GET['id']?>')"><i class="fas fa-location-arrow"></i></span>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            else
                            {
                                ?>
                                 <img src="../upload/Logo/sou.png" width="100%" height="100%"> 
                                <?php
                            }
                        
                        ?>
                         
                     <!-- -->
                    </div>
                </div>
            </div>
        </div>
    
            
    <!--,mkj-->    
    </main>

               <?php
            include("../pagesfile/footer.php");
           
        ?>
            </div>
             <script>
                var input = document.getElementById("msg1");
                input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) 
                {
                event.preventDefault();
                massage_send('<?=$_GET['id']?>');
                 }
});
</script>
<script type="text/javascript"> 
        window.addEventListener("beforeunload", function (e) { 
            //alert('nm');
            //e.preventDefault(); 
        }); 
    </script> 
       
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/ppp.js"></script>
       
    </body>
</html>
