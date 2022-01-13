<aside class="main-sidebar sidebar-dark-primary elevation-4">   <!-- Main 
   Sidebar Container -->
    <!-- Brand Logo -->
    <a href="<?php echo site_url('user/Home_c/index');?>" class="brand-link">
      <img src="<?php echo base_url('assets/user/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> USER LOGIN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar"> <!-- Sidebar user panel (optional) -->
      <?php
      foreach ($show as $value) {
      
      
       //  @$name = $show[0]->name;
       // @$pic = $show[0]->pic;
       ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="image">
          
          <img src="<?php echo base_url('assets/media/accounts/'.$value->pic); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
                     
                      <p style="color: white;"><?php echo $value->name;?></p>
                    
        </div>
        <?php
      }
      ?>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('Home_c/index'); ?>" class="nav-link">
            
               <i class="fa fa-home" aria-hidden="true"></i>

              <p>
               Home
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo site_url('user/Home_c/index'); ?>" class="nav-link">
            
               <i class="fa fa-tachometer" aria-hidden="true"></i>

              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Profile_c/index'); ?>" class="nav-link">
            
              <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Order_c/index');?>" class="nav-link">
              <i class="fa fa-first-order" aria-hidden="true"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('user/Order_c/history');?>" class="nav-link">
              <i class="fas fa-history"></i>
              <p>History</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Special_deal_c/index');?>" class="nav-link">
              <i class="fa fa-medkit" aria-hidden="true"></i>
              <p>
                Special Deals
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Announcements_c/index');?>" class="nav-link">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <p>
                Announcements
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('user/News_c/index');?>" class="nav-link">
              <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                News
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Feedback_c/index');?>" class="nav-link">
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              <p>
                Feedback
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Change_password_c/index');?>" class="nav-link">
             <i class="fa fa-key" aria-hidden="true"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('user/Sign_out_c/index');?>" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
          
          <!--
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              
              
            </ul>
          </li>
        -->
         
         
         
         
        </ul>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>