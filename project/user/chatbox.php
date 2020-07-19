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
                   // chat_user()
                    
                }
                function massage()
                {
                    //alert(id);
                 massage_recevied('<?=$_GET['id']?>');
                 //user_chat();  
                }
                setTimeout( re,10 );
              window.setInterval(on, 100);
               window.setInterval(massage, 100);

              
            </script>
           
            <?php   
          }
        ?>
         <script>
// When the user clicks on div, open the popup
function myFunction(id)
 {
  var popup = document.getElementById(id);
  popup.classList.toggle("show");
}
            function delete_msg()
            {
               alert("ok"); 
               var a=document.getElementsByClassName('del');
              // document.
            for(i=0;i<a.length;i++)
            {
                a[i].style.display="block";
            }

            }
             function user_chat1()
                {
                 user_chat();  
                }
                 function Cleartime()
                {
                   // alert('jwdjbd');
                    $.ajax({
                       // alert('jwdjbd');
                        url:"../ActionPages/cleartime.php",
                        success:function(re)
                        {
                           // alert(re);
                        }
                    });
                }
                 window.setInterval(user_chat1, 100);
        </script>
        
    </head>
    <body class="sb-nav-fixed" onload="Cleartime()">
       

        <?php
        session_start();
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
                            <div id="chat_user">
                            </div>
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
                                    <li><i class="fas fa-users"></i> Clear chat </li>
                                    <li><i class="fa fa-trash" aria-hidden="true"></i><samp onclick="delete_msg();"> Delete chat</samp> </li>
                                    <li><i class="fas fa-ban"></i> Block friend</li>
                                    <li><i class="fa fa-unlock"></i> Unblock friend</li>
                                </ul>
                            </div>
                         
                   <div class="card-body msg_card_body" scrolling="auto" onscroll="">
                            <div id="msg_receive">
                       </div>
                        </div>
                        <div class="del"> 
                            <input type="submit"  class="del_me" value="Delete for me">
                            <input type="submit"  class="del_ev" value="Delete for everyone">
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
            <?php
                if(isset($_GET['id']))
                {
            ?>
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
<?php
}
?>
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
