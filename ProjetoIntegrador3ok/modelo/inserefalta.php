<?PHP
include "conexao.php";
?>
<html>
    <head>
        <title>Rsultado</title>
        <script type= "text/javascript">
            //função para redirecionar para outra pagina apos 5 segudos 
            //caso aultentique ou não 
            function loginsuccessfully() {
                setTimeout("window.location='../visao/listarfaltas.php'");
                alert('Agenda salvo com sucesso!!');
            }
            function loginfailed() {
                setTimeout("window.location='../visao/agendarTarefa.php'");
                alert('grupo que voce digitou não exite');
            }
        </script>
    </head>
    <body>
        <?php
        $id_funcionario = $_POST['id'];
        $data = $_POST['data'];
        $motivo = $_POST['motivo'];

        $sqlinsere = "INSERT INTO faltas(data_falta,motivo)VALUES('{$data}','{$motivo}')";
                $sql =("SELECT * FROM faltas WHERE data_falta='{$data}' AND motivo='$motivo'");
        $exibe = @mysqli_fetch_assoc($sql);
        $id_faltas = $exibe['id_falta'];
        $sqlinsere1 = "INSERT INTO codigo_faltas(id,id_faltas)VALUES('${id_funcionario}','{$id_faltas}')";
        $sql1 = mysqli_query($conexao, $sqlinsere);
        $sql2 = mysqli_query($conexao, $sqlinsere1);
        
        echo "<script>loginsuccessfully()</script>";
        ?>
    </body>
</html>