
    <?php
    session_start();
        include("../ActionPages/backend.php");
        $frienddata=fri_id($_POST['id']);
        //print_r($frienddata);
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
                        </div>