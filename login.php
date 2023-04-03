<?php 
session_start();

include('config.php');

$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

$email = addslashes($_POST['email']);
$senha = md5($_POST['senha']);


$sql = "select * from usuarios where email = '{$email}' and senha = '{$senha}' and status = '1'";
#echo $sql;
#exit;
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
   # print_r($row);
    $_SESSION['email'] = $row['email'];
    #print_r($_SESSION['email']);
    header("Location: dashboard.php");
}
else{
    echo 'Usuário ou senha inválido';
}

?>
<br>
<a href="http://localhost:8080/restaurante/admin/"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Retornar</button></a>