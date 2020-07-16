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
                            goto a;
                        }
                   }
                   else
                    { a:

                        $sql="select * from chat_with where user=
                        '$email' ORDER BY time DESC LIMIT 1";
                        $s=mysqli_query($con,$sql);
                        $data=mysqli_fetch_array($s);
                         $_SESSION['time2']=$data['time'];

                        $sql="select * FROM chat_with where user='$email' ORDER BY time DESC"; 
                        $s=mysqli_query($con,$sql);
                        while ($d=mysqli_fetch_array($s)) 
                        {
                            $fri=fri_detalis($d['friend']);
                            $fri_e=$fri['email'];
                             $sql="select  * from chat_data WHERE from_user in('$email','$fri_e') and to_fri in('$fri_e','$email') ORDER BY time DESC LIMIT 1";
                                $s1=mysqli_query($con,$sql);
                                $d1=mysqli_fetch_array($s1);

                    ?>
                    <li class="active">
                            <div class="d-flex bd-highlight" onclick="targetmsg('<?=$fri['id']?>')">
                                <div class="img_cont">
                                    <img src="../upload/user_pic/<?=$fri['user_pic']?>" class="rounded-circle user_img">
                                    <div id="online" >
                                        <script>
                                            function re1()
                                            {
                                                online1('<?=$fri['email']?>');
                                            }
                                           window.setInterval(re1, 100);
                                        </script>
                                    
                                    </div> 
                                </div>
                                <div class="user_info" >
                                    <span ><?=$fri['name']?></span>
                                    <?php
                                    if($d1['from_user']==$email)
                                    {
                                    ?>
                                            <p>you:<?=$d1['msg']?></p>
                                    <?php
                                    }
                                     else
                                     {
                                    ?>
                                            <p><?=$d1['msg']?></p>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </li>
                    <?php
                        }
                }
                    ?>