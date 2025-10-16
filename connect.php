<?php

// Estrutura TRY/CATCH, utilizada para tratar exceções
try {
    // Variável para armazenar os objetos de conexão ao banco de dados(BD)
    $conn = new mysqli('localhost', 'root', '', 'db_acinema');
    // Tratamento de exceção/erro, com utilização da classe para tratamento Exception e a variável de armazenamento de erro $e
} catch (Exception $e) {
    // Mensagem do erro/exceção apresentada, sendo possivel, atraves de diversas funções, exibir linha de erro, o código, oarquivo, etc...  
    echo "Erro na conexão. " . "<br>" . "Erro na linha: " . $e->getLine() . "<br>" .
        "Erro de código: " . $e->getCode() . "<br>"  . "Messagem de erro: " .
        $e->getMessage() . "<br>"  . "Erro no arquivo: " . $e->getFile();
}