<?php 
//session_start();
  //  print_r($_SESSION);

//remover indicer do array de sessão -> unset()
//unset($_SESSION['autenticado']); // remove apenas se existir o indice


//destruir a variavel de sessão -> session_destroy()
session_destroy(); //sera destruida
//forçar um redirencionamento

header('location:index.php');
?>