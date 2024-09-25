<?php

include('../../config.php');

//tomar los datos ingresados del login 

$email = $_POST['email'];
$password_user = $_POST['password_user'];

//comparar los datos obtenidos con la base de datos 
//aplicar un registro de la sesion para verificar si es correcta o no la informacion 
$registro = 0 ; 
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $registro = $registro + 1;
    $email_tabla =$usuario['email'];
    $nombres =$usuario['nombres'];

} if ($registro == 0) {
    echo "datos incorrectos";

}else{  
    echo "detos correctos";  
    session_start();
    $_SESSION['sesion_email']= $email;
    header('Location: ' .$URL. '/index.php');
} 