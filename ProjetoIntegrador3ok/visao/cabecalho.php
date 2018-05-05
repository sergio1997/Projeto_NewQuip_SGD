<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>SGD</title>
<!-- Parte responsiva -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Fontes usadas -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- icones -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- tema -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/calendar.css">
<script language="Javascript">
    //alerta se deseja excluir ou não os dados
    function confirmacao() {
        var resposta = confirm("Tem certeza que desejaremover seus dados?");
        if (resposta == true) {
            window.location.href = "modelo/ExcluirConta.php?nome=$exibe[nome]";
        }
    }
</script>
