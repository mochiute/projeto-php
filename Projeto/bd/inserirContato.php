<?php 
/*Abre a conexão com o BD*/

    //Import do arquivo de variaveis e constantes.
    require_once('../modulos/config.php');

    //import do arquivo de função para conectar no banco de dados
    require_once('conexaoMysql.php');

    //chama a função que vai estabeleccer a conexão com o banco de dados.
    if(!$conex = conexaoMysql()){
        echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
        //die; Finaliza a interpretação da página
    }


//Declaração de variáveis
$nome  = (string) null;
$celular  = (string) null;
$telefone  = (string) null;
$homePage  = (string) null;
$linkFaceb  = (string) null;
$email = (string) null;
$sexo  = (string) null;
$sugestao  = (string) null;
$mensagem   = (string) null;
$profissao  = (string) null;

// Recebendo dados do formulário contatos
$nome = $_POST['txtNome'];
$celular = $_POST['telCelular'];
$telefone = $_POST['telTelefone'];
$email = $_POST['emlEmail'];
$homePage = $_POST['urlHomePage'];
$linkFacebook = $_POST['urlLinkFacebook'];
$sugestao = $_POST['txtCritica'];
$mensagem = $_POST['txtMensagem'];
$sexo = $_POST['rdoSexo'];
$profissao = $_POST['txtProfissao'];


$sql = "insert into tblcontatos 
            (nome, celular, telefone, homePage, linkFacebook, email, sexo, sugestao, mensagem, profissao)
            values
            (
                '".$nome."',
                '".$celular."',
                '".$telefone."',
                '".$homePage."',
                '".$linkFacebook."',
                '".$email."',
                '".$sexo."', 
                '".$sugestao."',
                '".$mensagem."',
                '".$profissao."'
            );
        ";

//Executa no Banco de Dados o Script SQL
if (mysqli_query($conex, $sql)){
    echo("
        <script>
            alert('Registro inserido com sucesso!');
            location.href = '../index.php';        
        </script>
    ");
    //Permite redirecionar para uma outra página.
    //header('location:../index.php');
}
else{ 
    echo("
        <script>
            alert('Erro ao inserir os dados no Banco de Dados! Favor verificar a digitação dos dados.');
            location.href = '../index.php';
            window.history.back();
        </script>
    ");
}
        
?>    