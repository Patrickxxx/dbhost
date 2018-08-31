<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php
include "conexao.php";
$usuario = $_POST['usuario'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$nivel = '2';
$nivel_acesso_id = 2;

/*if(isset($_POST['termos'])){
    $listaCheckbox = $_POST['termos'];
    foreach ($listaCheckbox as $termos) {
        echo $termos;
        //aqui você salva no seu banco
    }
}
$termos = $_POST['termos'];
*/

$sql = "INSERT INTO usuarios (usuario,sexo,email,senha,nome,nivel,nivel_acesso_id) " .
"values('$usuario','$sexo','$email','$senha','$nome','$nivel_acesso_id','$nivel')";
header("Refresh: 1; url=TelaLogin.php");

$result = mysqli_query($conn, $sql); // efetua o cadastro

if ($conn->insert_id == TRUE) {
?>
<script type="text/javascript">
alert("Cadastrado com Sucesso! ");

</script>

<?php
}



?>
    </body>
</html>