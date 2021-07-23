   <script src="https://use.fontawesome.com/e363e29cbd.js"></script>
  <?php 
    
    if (!isset($_SESSION['admin']))
    {
        ?>
        <script>
            window.location.href="index";
        </script>
        <?php
    }
    include "../includes/db_config.php";
  ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
         
          <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img
                  src="userImages/user2-160x160.jpeg"
                  class="img-circle elevation-2"
                  alt="User Image"
                />
              </div>
              <div class="info">
                <a href="#" class="d-block"> Administration </a>
              </div>
            </div>
            <nav class="mt-2">
              <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
              >
                <li class="nav-item">
                  <a href="dashboard" class="nav-link">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a href="e-wallet" class="nav-link">
                    <i class="fa fa-money"></i>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Wallet</p><i class="fa fa-angle-right right"></i>
                    
                  </a>
                  
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="e-wallet" class="nav-link">
                          <i class="fa fa-money"></i>
                          <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Wallet</p>
                          
                        </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href=""
                        class="nav-link"
                      >
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Deposit</p>
                      </a>
                    </li>
                
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Withdrawal Request</p>
                      </a>
                    </li>
                 
                
                  </ul>
                </li>
                
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                      Profile Manage
                      <i class="fa fa-angle-right right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="profile" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>My Profile</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="change-password" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Change Password</p>
                      </a>
                    </li>
                    
                   
                  </ul>
                </li>

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-copy"></i>
                    <p>
                      Buy Package
                      <i class="fa fa-angle-right right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="upgrade-with-invest" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Buy Package</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Buy Package History</p>
                      </a>
                    </li>
                   
                  </ul>
                </li>
                <!--<li class="nav-item has-treeview">-->
                <!--  <a href="#" class="nav-link">-->
                <!--    <i class="nav-icon fa fa-book"></i>-->
                <!--    <p>-->
                <!--      Bouns Report-->
                <!--      <i class="fa fa-angle-right right"></i>-->
                <!--    </p>-->
                <!--  </a>-->
                <!--  <ul class="nav nav-treeview">-->
                <!--    <li class="nav-item">-->
                <!--      <a href="previous-referral-bonus.html" class="nav-link">-->
                <!--        <i class="fa fa-circle nav-icon"></i>-->
                <!--        <p>Direct Referral Bonus</p>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <a href="previous-matching-bonus.html" class="nav-link">-->
                <!--        <i class="fa fa-circle nav-icon"></i>-->
                <!--        <p>Matching Bonus</p>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <a href="growth-status.html" class="nav-link">-->
                <!--        <i class="fa fa-circle nav-icon"></i>-->
                <!--        <p>Today Roi Bonus</p>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-tree"></i>
                    <p>
                      Team Report
                      <i class="fa fa-angle-right right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="left-right-list" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Referral Left/Right</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="genealogy" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Genealogy (Tree View)</p>
                      </a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--  <a href="referrals_all.html" class="nav-link">-->
                    <!--    <i class="fa fa-circle nav-icon"></i>-->
                    <!--    <p>My Downline</p>-->
                    <!--  </a>-->
                    <!--</li>-->
                  </ul>
                </li>
               
                <li class="nav-item">
                  <a href="rewards" class="nav-link">
                    <i class="nav-icon fa fa-trophy"></i>
                    <p>Rewards</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-life-ring"></i>
                    <p>
                      Support Center
                      <i class="fa fa-angle-right right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li>
                      <a href="" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Need Support</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Support List</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
        