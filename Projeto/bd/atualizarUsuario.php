<?php 
/*Abre a conexão com o BD*/

//Import do arquivo de Variaveis e Constantes
require_once('../modulos/config.php');

//Import do arquivo de função para conectar no BD
require_once('conexaoMysql.php');

//chama a função que vai estabelecer a conexão com o BD
if(!$conex = conexaoMysql()){
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
    //die; //Finaliza a interpretação da página
}

/*Variaveis*/
$nome = (string) null;
$celular = (string) null;
$email = (string) null;
$senha = (string) null;
$sexo = (string) null;
$telefone = (string) null;

/*Recebe todos os dados do formulário*/
$nome = $_POST['txtNome'];
$celular = $_POST['telCelular'];
$email = $_POST['emlEmail'];
$sexo = $_POST['rdoSexo'];
$senha = $_POST['pswSenha'];
$telefone = $_POST['telTelefone'];


session_start();

$sql = "update tblusuarios set 
        nome = '".$nome."',
        celular = '".$celular."',
        email = '".$email."',
        sexo = '".$sexo."',
        senha = '".$senha."',
        telefone = '".$telefone."'

        where idUsuario =". $_SESSION['id'];



//Limpar a variável de sessão

// Apaga somente o conteudo da variavel
// $_SESSION['id'] = null;

// Elimina apenas esta variavel de sessão
// session_unset() serve para versões mais antigas
unset($_SESSION['id']);

//Eliminar todas as variáveis de sessão do sistema
session_destroy();

//Executa no BD o Script SQL

if (mysqli_query($conex, $sql))
{
    echo("
            <script>
                alert('Usuário Alterado com sucesso!');
                location.href = '../CMS/index.php';
            </script>
    ");
    
    //Permite redirecionar para uma outra página
    //header('location:../index.php');
}
else
    echo("
            <script>
                alert('Erro ao Alterar os dados no Banco de Dados! Favor verificar a digitação de todos os dados.');
                location.href = '../index.php';
                window.history.back();
            </script>
    
        ");

?>