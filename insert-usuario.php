<?php include_once"config.php"; ?>
<?php 
$usuario_f = $_POST['usuario'];
$senha_f = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$sql = "SELECT * FROM tbusuarios WHERE usuario='$usuario_f'";
$result= mysqli_query($conn, $sql);
while ($linha = mysqli_fetch_assoc($result)){
       $usuario = $linha['usuario'];
 }if ($usuario === $usuario_f){
      	echo "<script>alert('Usuario já exite!'); window.location = 'cadastrar-user.php';</script>";
      	
      }else{
      
$sql2 = "INSERT INTO tbusuarios(usuario,senha) VALUES('$usuario_f','$senha_f')";
     mysqli_query($conn, $sql2);
     echo "<script>window.location = 'login.php';</script>";
      }

?>