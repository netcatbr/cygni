<html>
<title>SHINE ON YOUR CRAZY DIAMOND</title>
<?php
$pdo = new PDO('pgsql:host=localhost;dbname=cygni', 'postgres', '123456');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : '';

$sql = "select * from usuario where login = '".$login."' and senha = '".$passwd."'";

echo $sql;

$result = $pdo->query($sql); 
 
$row = $result->fetch(PDO::FETCH_NUM);

if($row > 0){
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $passwd;
    header("location:index.html");
}else{
    session_destroy();
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header("location:senha_invalida.html");
}

?>

</html>
