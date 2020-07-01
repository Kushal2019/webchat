<?php
  // echo "yes";
  session_start();
   include("backend.php");
   $se_name=$_POST['id'];
  $sql="select * from contacts where username ='$email'";
  $e=mysqli_query($con,$sql);
  while($d=mysqli_fetch_array($e))
  {
    $f_email=$d['friend_email'];
    $sql="select * from contacts,user_detalis where contacts.username='$email'and contacts.friend_email='$f_email' and user_detalis.email=contacts.friend_email and user_detalis.name like '%$se_name%'";
  $d=mysqli_query($con,$sql);
 if($userdata=mysqli_fetch_array($d))
 {
    ?>
   <div class="container" >
    <div class="row">
        <div class="col-md-8">
            <div class="people-nearby" >
              <form name="frm" method="post">
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="../upload/user_pic/<?=$userdata['user_pic']?>" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link"><?=$userdata['name']?></a></h5>
                    <p><?=$userdata['profession']?></p>
                    <input type="hidden" value="<?=$userdata['email']?>" name="mail1">
                    <p class="text-muted"><?=on_off($userdata['email'])?></p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <?php
                    $usermail=$_SESSION['email'];
                    $friend_email=$userdata['email'];
                   $sql="select * from contacts where username='$usermail' and friend_email='$friend_email'";
                     if(!mysqli_fetch_array(mysqli_query($con,$sql)))
                       {
                    ?>
                    <input type="submit" value="Addfriend" onclick="friend('<?=$userdata['email']?>')" class="btn btn-primary pull-right">
                    <?php
                    }
                    else
                    {
                    ?>
                    <input type="submit" value="Send Massage"  class="btn btn-primary pull-right" >
                    <?php
                  }
                  ?>
                  </div>
                </div>
              </div>
              </form> 
            </div>
        </div>
    </div>
</div>
    <?php
    }
  } 
    ?>