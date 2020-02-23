<?php
// protegendo paginas
session_start();

//variavel que verifica se a autenticação foi realizada
$usuario_autenticado = false;
//usuarios do sistema
$usuarios_app = array(
    array('email' => 'joaopaulofranca211@gmail.com', 'senha'=>'123456'),
    array('email' => 'joaopaulofrancasilva@outlook.com', 'senha'=>'cont0596'),
    array('email' => 'gracione@outlook.com', 'senha'=>'1234'),
);

foreach($usuarios_app as $user){
    //echo 'Usuário app: ' . $user['email'] . '/' . $user['senha'];
    //echo'<br/>';
    //echo 'Usuário form: ' . $_POST['email'] . '/' . $_POST['senha'];
   
    if($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha'] ){
        $usuario_autenticado = true;
    }    
}
    if($usuario_autenticado){
        echo'Usuário autenticado com sucesso!';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

