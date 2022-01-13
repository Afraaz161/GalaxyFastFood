   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary accent-white elevation-4 bg-success">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('user/Home_c/index');?>" class="brand-link">
      <img src="<?php echo base_url('assets/user/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Login</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/media/admin_afraaz.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Afraaz Anwar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin/Home_c/index'); ?>" class="nav-link">
            
               <i class="fa fa-tachometer" aria-hidden="true"></i>

              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/ORDER_c/index'); ?>" class="nav-link">
            
             <i class="fa fa-first-order fa-circle" aria-hidden="true"></i>
              <p>
                ORDER
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/Account_c/index');?>" class="nav-link">
              <i class="fa fa-address-book" aria-hidden="true"></i>
              <p>
                Account
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/Food_menu_c/index');?>" class="nav-link">
              <i class="fa fa-address-book" aria-hidden="true"></i>
              <p> Food </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="<?php echo site_url('admin/Gallary_c/index');?>" class="nav-link">
              <i class="fas fa-images"></i>
              <p> Gallary </p>
            </a>
          </li>
           
                 <!--  <li class="nav-item has-treeview">
            <a href="<?php echo site_url('admin/Food_menu_c/index');?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Food
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Food_menu_c/pizza');?>" class="nav-link text-white">
                  
                  <p>Pizza</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Food_menu_c/burger');?>" class="nav-link text-white">
                  
                  <p>Burger</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Food_menu_c/Shawarma');?>" class="nav-link text-white">
                  
                  <p>Shawarma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Food_menu_c/Drinks');?>" class="nav-link">
                  
                  <p>Drinks</p>
                </a>
              </li>

                 <li class="nav-item">
                <a href="<?php echo site_url('admin/Food_menu_c/Special_deals');?>" class="nav-link">
                  
                  <p>Special Deals</p>
                </a>
              </li>
              
              
            </ul>
          </li> -->
           <li class="nav-item">
            <a href="<?php echo site_url('admin/About_c/index');?>" class="nav-link">
              <i class="fas fa-address-card"></i>
              <p>
                About us
              </p>
            </a>
          </li>
        

          <li class="nav-item">
            <a href="<?php echo site_url('admin/Announcement_c/index');?>" class="nav-link">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <p>
                Anouncements
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo site_url('admin/News_c/index');?>" class="nav-link">
             <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                NEWS
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/Feedback_c/index');?>" class="nav-link">
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              <p>
                Feedback
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/CMS_c/index');?>" class="nav-link">
            <i class="fa fa-user" aria-hidden="true"></i>

              <p>
                CMS
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/Inquriy_c/index');?>" class="nav-link">
             <i class="fa fa-info" aria-hidden="true"></i>
              <p>
                Inquriy
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/Change_password_c/index');?>" class="nav-link">
             <i class="fa fa-info" aria-hidden="true"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

              <li class="nav-item">
            <a href="<?php echo site_url('admin/Signout_c/index');?>" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
          
          
          
         
         
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>