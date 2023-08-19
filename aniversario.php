 <?php include_once"head.php" ?>
<?php include_once"session.php" ?>
 <script> 
function deletar(){
  if (confirm("Deseja realmente deletar este cadastro?"))
    document.forms[0].submit();
  else
    return false}
</script> 

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <?php include_once"menu.php" ?><!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
       <?php include_once"menumobile.php" ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        
        <div class="row">
          
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Aniversariantes</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Código</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nome</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Aniversário</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Celular</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Opção</h6>
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                       
        <?php 
          $result_nomes = "SELECT * FROM tblistacl 
          where MONTH(data) >=  MONTH(NOW())
          and DAY(data) >=  DAY(NOW()) 
          order by MONTH(data) asc, DAY(data) asc, nome desc";

          $resultado = mysqli_query($conn , $result_nomes);
          while ($linha = mysqli_fetch_array($resultado)){          
          date_default_timezone_set('America/Sao_Paulo'); 

          $diaAtual =  date('d');
          $mesAtual = date('m');
          $diaNascimento =   date('d', strtotime($linha['data']));
          $mesNascimento =   date('m', strtotime($linha['data']));
          $classAniversariante = '';
          if (($diaAtual == $diaNascimento) && ($mesAtual == $mesNascimento)){
            $classAniversariante = 'style="background-color:#c3f7c5"';
          }

       echo
        '<thead><tr '.$classAniversariante.'>
                        <th class="border-bottom-0">'.$linha['id'].'</th>
                        <th class="border-bottom-0">
                            '.$linha['nome'].'
                                                     
                        </th>
                        <th class="border-bottom-0" type="date">
                         '.date('d/m/Y', strtotime($linha['data'])).'
                        </th>
                        <th class="border-bottom-0">
                          '.$linha['celular'].'
                        </th>
                        <th class="border-bottom-0">
                        <a href="deletar.php?id='.$linha['id'].'" 
        onclick="return deletar();"><i class="bi bi-trash">Deletar</i>  | 
        <a href="editar.php?id='.$linha['id'].'" 
        ><i class="bi bi-trash">Editar</i>
                        </th>
                      </tr>   
        </thead>';
      }

           ?>
                                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

