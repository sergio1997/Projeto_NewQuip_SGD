<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");

$id = $_POST['id'];


$query = mysqli_query("SELECT id FROM funcionario WHERE email ='$_SESSION[email]'");
$linha = @mysqli_fetch_assoc($query);
$sessao = $linha['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type= "text/javascript">
            //função para redirecionar para outra pagina apos 5 segudos 
            //caso aultentique ou não 
            function passa() {

                setTimeout("window.location='../visao/formulario3.php?id=<?php echo $id; ?>'");
            }
            function volta() {

                setTimeout("window.location='../visao/avaliadoformulario3.php'");

                alert('você não pode se avaliar');
            }
        </script>
    </head>
    <body>
        <?php
        ?>
        <?php
        if ($id == $sessao) {
            echo "<script>volta()</script>";
        } else {
            echo "<script>passa()</script>";
        }
        ?>
    </body>
</html>