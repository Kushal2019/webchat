
    <?php
    session_start();
        include("../ActionPages/backend.php");
        $frienddata=fri_id($_POST['id']);
    ?>
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="../upload/user_pic/<?=$frienddata['user_pic']?>" class="rounded-circle user_img">
                                    <div id="online">
                    
                                    </div>
                                </div>
                                <div class="user_info">
                                    <span><?=$frienddata['name']?></span>
                                    <p id="time">
                                        
                                    </p>
                                </div>
                                <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                          <!--  <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>-->
                        </div>