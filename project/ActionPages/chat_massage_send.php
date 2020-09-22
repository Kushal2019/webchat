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
                            if(mysqli_query($con,$sql))
                            {
                                $d=mysqli_query($con,$sql);
                            while($c=mysqli_fetch_array($d))
                            {
                            if($c['to_fri']!=$fri_email)
                            {
                                if($c['fri_status']==0)
                                {
                          ?>
                            <div class="del">
                                
                                     <input type="checkbox" >
                                </div>
                            <div class="d-flex justify-content-start mb-4">
                                 
                                <div class="img_cont_msg">
                                    <img src="../upload/user_pic/<?=$fri_de['user_pic']?>" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                  <span ondblclick="document.getElementById('<?=$c['msg']?>').style.display='block'">
                                   <?php
                                    if($c['fri_delete_me']==$email)
                                    {
                                        
                                            echo "<i class='fa fa-trash'></i>".$c['fri_delete_val'];
                                    }
                                    else
                                    {
                                        echo $c['msg'];
                                    }
                                  ?>
                                       </span>
                                    <span class="msg_time"><?=$c['time']?></span>
                                </div>
                            </div>
                            <div id="<?=$c['msg']?>" class="w3-modal" style="padding-top:230px;">
                                <div class="w3-modal-content w3-animate-left" style="width:300px;">
                                   <header class="w3-container w3-teal"> 
                                   <!-- <span onclick="document.getElementById('<?=$c['msg']?>').style.display='none'"   class="w3-button w3-display-topright">&times;</span>-->
                                    <h2>Delet Massage?</h2>
                                    </header>
                                    <div class="w3-container">
                                        <p align="center" onclick="delete_me('<?=$c['id']?>','<?=$c['from_user']?>');">  Delete for me</p>
                                        <p align="center" onclick="document.getElementById('<?=$c['msg']?>').style.display='none'">CANCEL</p>
                                        </div>
                                        <footer class="w3-container w3-teal">
                                        </footer>
                                    </div>
                                </div>
                         </div>
                            <?php
                            }
                                }
                                else
                                {
                                     if($c['status']=='0')
                                        {
                            ?>

                                             <div class="del">
                                                
                                                     <input type="checkbox" >
                                                </div>
                                            <div class="d-flex justify-content-end mb-4">
                                               
                                                <div class="msg_cotainer_send">

                                                     <span ondblclick="document.getElementById('<?=$c['msg']?>').style.display='block'"> 
                                                        <?php
                                                    if($c['delete_me']==$email)
                                                    {
                                                        echo "<i class='fa fa-trash'></i>".$c['delete_me_val'];
                                                    }
                                                    else
                                                    {
                                                        echo "<i class='fas fa-cloud-download-alt'></i>".$c['msg'];
                                                    }
                                                  ?></span>
                                                    <span class="msg_time_send"> <?=$c['time']?></span>
                                                </div>
                                                <div class="img_cont_msg">
                                                    <img src="../upload/user_pic/<?=$user['user_pic']?>" class="rounded-circle user_img_msg">
                                                </div>
                                            </div> 
                                            <div id="<?=$c['msg']?>" class="w3-modal" style="padding-top:230px;">
                                               <div class="w3-modal-content w3-animate-right" style="width:300px; ">
                                                   <header class="w3-container w3-teal"> 
                                                    <!--<span onclick="document.getElementById('<?=$c['msg']?>').style.display='none'"   class="w3-button w3-display-topright">&times;</span>-->
                                                    <h2>Delete Massage?</h2>
                                                    </header>
                                                    <div class="w3-container">
                                                        <p align="center" onclick="delete_me('<?=$c['id']?>','<?=$c['from_user']?>');">Delete for me</p>
                                                        <p align="center" onclick="document.getElementById('<?=$c['msg']?>').style.display='none'">Cancel</p>
                                                        <?php
                                                            if($c['delete_me_val']=='0')
                                                            {
                                                        ?>
                                                        <p align="center" onclick="delete_ev('<?=$c['id']?>','<?=$c['from_user']?>','<?=$c['to_fri']?>');">Delete for everone</p>
                                                        <?php
                                                    }?>
                                                        </div>
                                                        <footer class="w3-container w3-teal">
                                                            
                                                        </footer>
                                                    </div>
                                                </div>
                                         </div>
                            <?php
                                        }
                            }
                             }
                         }
                     
                     else
                     {
                        echo "1";
                    }
                }
                            ?>

                                

