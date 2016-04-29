<html>
<title>SHINE ON YOUR CRAZY DIAMOND</title>
<?php
if (!isset( $_POST ) || empty($_POST) ){
    $erro = 'PREENCHA OS CAMPOS CORRETAMENTE!';
}

$pdo = pg_connect("host=localhost port=5432 dbname=cygni user=postgres password=123456");

$login = isset($_POST['login']) ? $_POST['login'] : '';
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : '';


echo ("hello world");
echo ("$login");
echo ("$passwd");








?>
</html>
