                    <?php
                    session_start();
                    include('backend.php');
                    if(isset($_SESSION['time2']))
                   {
                        $sql="select * from chat_with where user='$email' ORDER BY time DESC LIMIT 1";
                        $s=mysqli_query($con,$sql);
                        $data=mysqli_fetch_array($s);
                        $time=$data['time'];
                        if($_SESSION['time2']==$time)
                        {
                            echo "1";
                        }
                        else
                        {
                            unset($_SESSION['time']);
                            unset($_SESSION['time2']);
                            goto a;
                        }
                   }
                   else
                    { a:

                        $sql="select * from chat_with where user='$email' ORDER BY time DESC LIMIT 1";
                        $s=mysqli_query($con,$sql);
                        $data=mysqli_fetch_array($s);
                         $_SESSION['time2']=$data['time'];

                        $sql="select * FROM chat_with where user='$email' ORDER BY time DESC"; 
                        if(mysqli_query($con,$sql))
                        {
                            $s=mysqli_query($con,$sql);
                        while ($d=mysqli_fetch_array($s)) 
                        {
                            $fri=fri_detalis($d['friend']);
                            $fri_e=$fri['email'];
                             $sql="select  * from chat_data WHERE from_user in('$email','$fri_e') and to_fri in('$fri_e','$email') and status in('0') and fri_status in('0') ORDER BY id DESC LIMIT 1";
                                $s1=mysqli_query($con,$sql);
                                $d1=mysqli_fetch_array($s1);

                    ?>
                    <li class="active">
                            <div class="d-flex bd-highlight" onclick="targetmsg('<?=$fri['id']?>')">
                                <div class="img_cont">
                                    <img src="../upload/user_pic/<?=$fri['user_pic']?>" class="rounded-circle user_img">
                                    <div id='<?=$fri['email']?>'>
                                        <script>
                                            function re1()
                                            {
                                                online1('<?=$fri['email']?>');
                                               
                                            }
                                          window.setInterval(re1, 2000);
                                        </script>
                                    
                                    </div> 
                                </div>
                                <div class="user_info" >
                                    <span ><?=$fri['name']?></span>
                                    <?php
                                    
                                    if($d1['from_user']==$email)
                                    {
                                     if($d1['delete_me']==$email)
                                        {
                                    ?>
                                            <p>you:<?php echo "<i class='fa fa-trash'></i>".$d1['delete_me_val'];?></p>
                                    <?php
                                         }
                                         else
                                         {
                                    ?>
                                                <p>you:<?=$d1['msg'];?></p>
                                     <?php
                                         }
                                    }
                                     else
                                     {
                                        if($d1['fri_delete_me']==$email)
                                        {
                                    ?>
                                         <p><?php echo "<i class='fa fa-trash'></i>".$d1['fri_delete_val'];?></p>
                                         <?php
                                     }
                                     else
                                     {
                                         ?>
                                         <p><?=$d1['msg']?></p>
                                    <?php
                                        }
                                        }
                                    ?>
                                 </div>
                            </div>
                        </li>
                    <?php
                        }
                    }
                    else
                    {
                        echo "2";
                    }
                }
                    ?>