
<?php include_once"config.php"; ?>
<?php
echo $nome = $_POST['nome'];
echo $data = $_POST['data'];
echo$cidade = $_POST['cidade'];
echo$estado = $_POST['estado'];
echo$celular = $_POST['celular'];
 echo$sexo = $_POST['sexo'];

$sql = "INSERT INTO tblistacl (nome,data,cidade,estado,celular,sexo) VALUES ('$nome','$data','$cidade','$estado','$celular' ,'$sexo')";

if (mysqli_query($conn, $sql)) {
  header("Location: cadastrar.php");
 }else{
   echo "Deu Erro" . $sql . "<br>" . mysqli_error($conn);
 }

mysli_close($conn);

 ?>
