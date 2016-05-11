<html>
<?PHP
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:login.php');
}
?>
<title>MENU</title>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>Cadastro</title>
</head>
<h2><b>CONTROLE DO PATRIMONIO</b></h2>
<body>
    <a href="paginas/cadastro.php">CADASTRO DE IMOVEL</a>
    <a href="paginas/imovel.php">IMOVEIS</a>
    <a href="paginas/moveil.php">MOVEIS</a>
</body>
</html>
