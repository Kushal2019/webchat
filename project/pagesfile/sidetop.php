<?php 
require '../ActionPages/UserallData.php';
$data=user_detalis($_SESSION['email']);
?> 
 <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">my profile</div>
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                <?=$data['name']?></a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="chatbox.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                Chats
                            </a>
                                <a class="nav-link" href="contact.php">
                                    <div class="sb-nav-link-icon">
                                        <i class="fa fa-address-book">
                                        </i>
                                    </div>
                                    Contact
                                 </a>
                                  <a class="nav-link" href="addfriend.php">
                                    <div class="sb-nav-link-icon">
                                        <i class="fa fa-user-plus">
                                        </i>
                                    </div>
                                    Addfriend
                                 </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       <?=$data['name']?>
                    </div>
                </nav>
            </div>
            
            