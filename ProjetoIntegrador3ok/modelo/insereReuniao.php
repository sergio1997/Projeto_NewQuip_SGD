<?PHP
include "../modelo/conexao.php";
?>
<html>
    <head>
        <title>Resultado</title>
        <script type= "text/javascript">
            //função para redirecionar para outra pagina apos 5 segudos 
            //caso aultentique ou não 
            function loginsuccessfully() {
                setTimeout("window.location='../visao/pagina_inicial.php'");
                alert('Reunião marcada com sucesso!!');
            }
            function loginfailed() {
                setTimeout("window.location='../visao/pagina_inicial.php'");
                alert('setor não existe!!!!');
            }
        </script>
    </head>
    <body>
        <?php
        $grupo = $_POST['grupo'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $assunto = $_POST['assunto'];
        $sql = @mysqli_query("SELECT * FROM tbgrupo WHERE Nome_gupo LIKE '%" . $grupo . "%'");

        $row = @mysqli_num_rows($sql);

        if ($row > 0) {
            while ($linha = mysqli_fetch_array($sql)) {

                $nome = $linha['Nome_gupo'];
                echo"$nome";
            }
            $sqlinsere = @mysqli_query("INSERT INTO reuniao (grupo,data_reuniao,hora,assunto)VALUES('$nome','$data','$hora','$assunto')");
            echo "<script>loginsuccessfully()</script>";
        } else {
            echo "<script>loginfailed()</script>";
        }
        ?>
    </body>
</html>