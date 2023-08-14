<?php include_once"config.php"; ?>
<?php 
$usuario_f = $_POST['usuario'];
$senha_f = $_POST['senha'];
$sql = "SELECT * FROM tbusuarios WHERE usuario ='$usuario_f'";
$result = mysqli_query($conn, $sql);
while ($linha = mysqli_fetch_assoc($result)){
     $usuario = $linha['usuario'];
	 $senha = $linha['senha'];
   }if (password_verify($senha_f, $senha)) {
      	session_start();
         $_SESSION['usuario'] = $usuario;
      	header("Location: index.php");
      }else{
      header("Location: login.php");
      }
 ?>