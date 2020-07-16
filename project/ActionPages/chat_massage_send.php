                          <?php
                          session_start();
                            include('backend.php');
                            $id=$_POST['id'];
                            $fri_de=fri_id($id);
                            $user=fri_detalis($email);
                            $fri_email=$fri_de['email'];
                            if(isset($_SESSION['time']))
                            {
                                 $sql="select  * from chat_data WHERE from_user in('$email','$fri_email') and to_fri in('$fri_email','$email') ORDER BY id DESC LIMIT 1";
                                 $s=mysqli_query($con,$sql);
                                 $t=mysqli_fetch_array($s);
                                 $time=$t['time'];
                                 if($_SESSION['time']==$time)
                                 {
                                    echo "1";
                                 }
                                 else
                                 {
                                    goto a;
                                 }
                             }
                            else
                             {
                                a:
                                   $sql="select  * from chat_data WHERE from_user in('$email','$fri_email') and to_fri in('$fri_email','$email') ORDER BY id DESC LIMIT 1";
                                     $s=mysqli_query($con,$sql);
                                     $t=mysqli_fetch_array($s);
                                    $time=$t['time'];
                                  $_SESSION['time']=$time; 
                                // $sql="update chat_with set time='$time' where user='$email' and friend='$fri_email'";
                                // mysqli_query($con,$sql);

                            $sql="select * from chat_data where from_user in('$email','$fri_email') and to_fri in('$fri_email','$email')";
                            $d=mysqli_query($con,$sql);
                            while($c=mysqli_fetch_array($d))
                            {
                            if($c['to_fri']!=$fri_email)
                            {
                          ?>

                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="../upload/user_pic/<?=$fri_de['user_pic']?>" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                   <?=$c['msg']?>
                                    <span class="msg_time">  <?=$c['time']?></span>
                                </div>
                            </div>
                            <?php
                                }
                                else
                                {
                            ?>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                     <?=$c['msg']?>
                                    <span class="msg_time_send"> <?=$c['time']?></span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../upload/user_pic/<?=$user['user_pic']?>" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <?php

                            }
                             }
                         }
                            ?>

                                

