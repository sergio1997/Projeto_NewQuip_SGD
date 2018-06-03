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
                setTimeout("window.location='../visao/adicionarTreinamento.php'");
                alert(' Treinamento salvo com sucesso!!');
            }
            function loginfailed() {
                setTimeout("window.location='../visao/adicionarTreinamento.php'");

                alert(' Usuário inesistente!');
            }
        </script>
    </head>
   <body>
        <?php
        $funcionario = $_POST['nome'];
        $evolucao = $_POST['evolucao'];
        $desempenho = $_POST['desempenho'];
        $observacoes = $_POST['observacoes'];

        $sql = mysqli_query( $conexao,"SELECT * FROM nome_usuario WHERE nome LIKE '%" . $funcionario . "%'");
        $row = mysqli_num_rows($sql);
        if ($row > 0) {
            while ($linha = mysqli_fetch_array($sql)) {
                $nome = $linha['nome'];
                
            }
            $sqlinsere = @mysqli_query($conexao,"INSERT INTO treinamento (nome,evolucao,desempenho,observacao)VALUES('$nome','$evolucao','$desempenho','$observacoes')");
            echo "<script>loginsuccessfully()</script>";
        } else {
            echo "<script>loginfailed()</script>";
        }
        ?>
    </body>
</html>