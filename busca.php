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
                <h5 class="card-title fw-semibold mb-4">Resultado da pesquisa</h5>
                <div class="table-responsive">
                 <?php include_once"config.php"; ?>
<?php
$busca = $_GET['busca'];
$result_nomes = "SELECT * FROM tblistacl WHERE nome like '%$busca%' or cidade =  '$busca'or estado = '$busca' or celular = '$busca' or celular = '$busca' or cidade = '$busca' ORDER BY nome ASC";
$resultado = mysqli_query($conn , $result_nomes);
while ($linha = mysqli_fetch_array($resultado)){
  echo $nome = $linha ['nome'];
  echo '<a href=deletar.php?id='.$linha['id'].'>Deletar</a> |
        <a href=editar.php?id='.$linha['id'].'>Editar</a> ';
  echo '<br>';
}
?>
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

