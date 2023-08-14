 <?php include_once"head.php" ?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/logo.png" width="180" alt="">
                </a>
                <p class="text-center">Agencia de Colatina-Es</p>
                <form method="post" action="valida.php">
                  <div class="mb-3">
                    <label  class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" >
                  </div>
                  <div class="mb-4">
                    <label  class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" >
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                   
                    
                  </div>
                  <button type="submit" Value="Acessar" name="btnLogin" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Acessar</button>
                
                  <div class="d-flex align-items-center justify-content-center">
                 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

