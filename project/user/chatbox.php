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
    </head>
    <body class="sb-nav-fixed">
        <?php
            include("../pagesfile/topnav.php");
            include("../pagesfile/sidetop.php");
        ?>
     <div id="layoutSidenav_content">
    <main>
       
<div class="card-body chat-care">
                    <ul class="chat">
                        <li class="agent clearfix">
                            <span class="chat-img left clearfix mx-2">
                                <img src="../upload/user_pic/userprofile.jpg" alt="Agent" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header clearfix">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="admin clearfix">
                            <span class="chat-img right clearfix  mx-2">
                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="Admin" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header clearfix">
                                    <small class="left text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="agent clearfix">
                            <span class="chat-img left clearfix mx-2">
                                <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="Agent" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header clearfix">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </li>
                        <li class="admin clearfix">
                            <span class="chat-img right clearfix  mx-2">
                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="Admin" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header clearfix">
                                    <small class="left text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                   aaaa

                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
        
    </main>

               <?php
            include("../pagesfile/footer.php");
           
        ?>
            </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/chat.js"></script>
       
    </body>
</html>
