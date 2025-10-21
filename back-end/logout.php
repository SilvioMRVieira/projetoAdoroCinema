<?php
// sequência de logoff
session_start(); //inicia a sessão
session_unset(); //remove os dados da sessão
session_destroy(); //destroi a sessão
header(header: 'Location: ../adoroCinema.php'); //retorno para tela de login
exit;