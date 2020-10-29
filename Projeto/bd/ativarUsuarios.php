<?php 
//Validação para tratar acesso do arquivo direto pela URL
if(isset($_GET['modo'])){
    
    //Validação para tratar se a requisição é realmente para excluir um registro
    if(strtoupper($_GET['modo']) == 'ATIVAR'){
        
        //Validação para tratar se foi informado um ID para a exclusão
        if(isset($_GET['id']) && $_GET['id'] != ""){
            
            /**********************INICIO*DA*EXCLUSÃO*DO*REGISTRO**********************************/   


            //Import do arquivo de função para conectar no BD
            require_once('conexaoMysql.php');

            //chama a função que vai estabelecer a conexão com o BD
            if(!$conex = conexaoMysql()){
                echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
                //die; //Finaliza a interpretação da página
            }



            $idUsuario = (string) null;
            $ativado = $_GET['ativado'];
            $idUsuario = $_GET['id'];

            if($ativado == 1){
                $sql = "update tblusuarios set 
                    ativado = 0 where idUsuario = ". $idUsuario;
                    $status = "desativado";
            }
            else{
                $sql = "update tblusuarios set 
                    ativado = 1 where idUsuario = ". $idUsuario;
                    $status = "ativado";
            }

            if (mysqli_query($conex, $sql)){
                echo("
                    <script>
                        alert('Usuário ".$status." com sucesso!');
                        location.href = '../CMS/index.php';        
                    </script>
                ");
                //Permite redirecionar para uma outra página.
                //header('location:../index.php');
            }

            else{ 
                echo("
                    <script>
                        alert('Erro ao excluir o usuário no Banco de Dados!');
                        window.history.back();
                    </script>
                ");
            }

            /**********************FIM*DA*EXCLUSÃO*DO*REGISTRO**********************************/
            
            
        //Terceira Condição para tratar se foi informado um ID válido para excluir o registro 
        }else 
            echo("
                <script>
                    alert('Nenhum registro foi informado para realizar a exclusão!');
                    location.href = '../index.php';
                </script>
            ");
        }
    //Segunda Condição para tratar a variavel modo se é igual a EXCLUIR
    else{
        echo("
            <script>
                alert('Requisão inválida para excluir um registro!');
                location.href = '../index.php';
            </script>
        ");
        }
    }
//Primeira Condição para tratar o acesso do arquivo
else{ 
    echo("
        <script>
            alert('Acesso inválido para esse arquivo!');
            location.href = '../index.php';
        </script>
    ");
}


?>