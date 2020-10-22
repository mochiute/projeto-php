<?php
/*****************************************************************
*   Objetivo: Configuração para conectar no banco de dados Mysql.*
*   Data: 16/09/2020.                                            *
*   Autor: Gabriel.                                              *
******************************************************************/
function conexaoMysql () {
    /*
        Existem 3 formas de conexão com banco de dados
        
            mysql_connect() - versão mais antiga (evitar de utilizar) mysql selectDb()
            
            mysqli_connect() - versão mais atualizada e que possibilita uma melhor segurança na conexão e possui uma eficiencia melhor.
            
            PDO() - Versão para conexão com o BD utilizando programação Orientada a Objetos (segurança muito mais eficiente)
    */
    
    /*variaveis para a conexão com o BD(Banco de Dados)*/
    $server = (string) "localhost"; 
    $user = (string) "root"; 
    $password = (string) "Katanazero16"; 
    $dataBase = (string) "dbprojeto2020t"; 
    
    /*Cria a conexão com o BD MySQL*/
    if ($conexao = @mysqli_connect($server, $user, $password, $dataBase))
        return $conexao;
    else
        return false;
}   

?>