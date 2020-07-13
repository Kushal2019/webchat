                          <?php
                          session_start();
                            include('backend.php');
                            $id=$_POST['id'];
                            $fri_de=fri_id($id);
                            $user=fri_detalis($email);
                            $fri_email=$fri_de['email'];
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
                            ?>
                         <!--   <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                            <img src="" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                        <img src="" class="rounded-circle user_img_msg">
                                </div>
                            </div>-->
                           <!-- <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>-->