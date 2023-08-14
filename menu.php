
  <?php include_once"head.php" ?>
  <?php include_once"session.php" ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
   <div>
         <nav class="navbar navbar-expand-lg navbar-light">
         
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a  target="_blank" class="btn btn-primary"><?php echo "<b>Usuario:</b>".$usuario; ?></a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                 
                    <a href="./sair.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Sair</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="./assets/images/logos/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>

        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
             <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">INICIO</span>
              </a>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="./cadastrar.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">CADASTRAR</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./listar.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">LISTAR</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./pesquisar.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">PESQUISAR</span>
              </a>
            </li>
           
            
            
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    
    
  </div>
