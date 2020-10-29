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
$email = (string) null;
$sexo  = (string) null;
$senha = (string) null;

// Recebendo dados do formulário contatos
$nome = $_POST['txtNome'];
$celular = $_POST['telCelular'];
$telefone = $_POST['telTelefone'];
$email = $_POST['emlEmail'];
$sexo = $_POST['rdoSexo'];
$senha = $_POST['pswSenha'];


$sql = "insert into tblusuarios 
        (nome, celular, telefone, email, sexo, senha, ativado)
            values(
                '".$nome."',
                '".$celular."', 
                '".$telefone."', 
                '".$email."',
                '".$sexo."', 
                '".$senha."',
                0
            );
        ";

//Executa no Banco de Dados o Script SQL
if (mysqli_query($conex, $sql)){
    echo("
        <script>
            alert('Registro de usuário inserido com sucesso!');
            location.href = '../cms/index.php';        
        </script>
    ");
    //Permite redirecionar para uma outra página.
    //header('location:../index.php');
}
else{ 
    echo("
        <script>
            alert('Erro ao registrar os dados no Banco de Dados! Por favor verificar a digitação dos dados.');
            location.href = '../cms/index.php';
            window.history.back();
        </script>
    ");
}
        
?>