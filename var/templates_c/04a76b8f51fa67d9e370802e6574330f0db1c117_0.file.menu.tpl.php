<?php
/* Smarty version 3.1.44, created on 2022-03-28 10:40:49
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/template/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6241c8f1ac5df4_00013811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a76b8f51fa67d9e370802e6574330f0db1c117' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/template/menu.tpl',
      1 => 1648478442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241c8f1ac5df4_00013811 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/<?php echo $_smarty_tpl->tpl_vars['_template_name']->value;?>
/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-dark-orange">
    <!-- Brand Logo -->
    <a href="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
" class="brand-link">
      <img src="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
media/images/logo-md.png" alt="Rhapsody Task Management System" class="brand-image img-circle elevation-3" style="opacity: 1.0">
      <span class="brand-text font-weight-light burnt-orange">Rhapsody</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php if ($_SESSION['permissions'] == 'admin' || $_SESSION['permissions'] == 'employee') {?>
        <img src="<?php echo (defined('EMPLOYEE_PICS_URL') ? constant('EMPLOYEE_PICS_URL') : null);?>
/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="img-circle elevation-2" alt="<?php echo $_SESSION['name'];?>
's avatar on <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
">
        <?php } elseif ($_SESSION['permissions'] == 'client') {?>
          <img src="<?php echo (defined('USER_PICS_URL') ? constant('USER_PICS_URL') : null);?>
/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="img-circle elevation-2" alt="<?php echo $_SESSION['name'];?>
's avatar on <?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
">
        <?php } else { ?>
          <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" class="img-circle elevation-2" alt="<?php echo (defined('SITE_URL') ? constant('SITE_URL') : null);?>
">
        <?php }?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if ($_SESSION['name'] != '') {?> <?php echo $_SESSION['name'];?>
 <?php } else { ?> Elawn Mushk<?php }?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if ($_SESSION['permissions'] == 'admin' || $_SESSION['permissions'] == 'employee') {?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Company Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="media/default/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    New Tickets
                    <span class="right badge badge-success">26</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Open Tickets
                    <span class="right badge badge-warning">19</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Due Today
                    <span class="right badge badge-warning bg-burnt-orange">11</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Overdue Tickets
                    <span class="right badge badge-danger">8</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Resolved Tickets
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <?php }?>
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <?php if ($_SESSION['permissions'] == 'admin' || $_SESSION['permissions'] == 'employee') {?>
                Employee
                <?php } else { ?>
                Client 
                <?php }?> Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="media/default/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    New Tickets
                    <span class="right badge badge-success"><?php echo $_smarty_tpl->tpl_vars['total_new']->value;?>
</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Open Tickets
                    <span class="right badge badge-warning">7</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Due Today
                    <span class="right badge badge-warning bg-burnt-orange">2</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Overdue Tickets
                    <span class="right badge badge-danger">1</span>  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="media/default/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Resolved Tickets
                  </p>
                </a>
              </li>
            </ul>
          </li>
                    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clients
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-success right">2 New</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assigned to Me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Clients</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Timesheets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Solutions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php echo '<script'; ?>
>
$("#sidebar").on('click','a',function(){
    $("#sidebar a.active").removeClass("active"); 
    // $("#sidebar ul.nav-treeview").removeClass("active").removeClass("menu-open").attr( { style: "display:none;" } ); 
    $(this).addClass("active"); 
});
<?php echo '</script'; ?>
><?php }
}
