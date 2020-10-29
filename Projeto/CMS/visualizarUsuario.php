<?php
    //Import do arquivo de Variaveis e Constantes
    require_once('../modulos/config.php');

    //Import do arquivo de função para conectar no BD
    require_once('../bd/conexaoMysql.php');

    //chama a função que vai estabelecer a conexão com o BD
    if(!$conex = conexaoMysql())
    {
        echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
        //die; //Finaliza a interpretação da página
    }

    $id = $_POST['idContato'];

    $sql = "select * from tblusuarios where idUsuario = ".$id;


    $select = mysqli_query($conex, $sql);        

    if($rsUsuarios = mysqli_fetch_assoc($select)){
        $nome = $rsUsuarios['nome'];
        $celular = $rsUsuarios['celular'];
        $email = $rsUsuarios['email'];
        //Tratamento da data para converter no padrão brasileiro

        $sexo = $rsUsuarios['sexo'];
        $senha = $rsUsuarios['senha'];

        //Validação para ativar o rádio do sexo
        if(strtoupper($sexo) == "F")
            $sexo = "Feminino";
        elseif(strtoupper($sexo) == "M")
            $sexo = "Masculino";
    }
?>

<html>
    <head>
        <title>Visualizar contato</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <script src="js/jquery.js"></script>
        
        <script>
            $(document).ready(function(){
                //fadeIn
                //toggle
                //fadeOut
                //slideDown
                //slideToggle
                $("#fecharModal").click(function(){
                    $("#modalContainer").fadeOut();
                });

            });
        </script>
    </head>
    <body>
        <div id="fecharModal">
            FECHAR
        </div>
        <div id="visualizarUsuarios">
            <div class="linhaDiv">
                <div>
                    Nome:
                </div>
                <div>
                    <?=@$nome?>
                </div>
            </div>
            <div class="linhaDiv">
                <div>
                    Celular
                </div>
                <div>
                    <?=@$celular?>
                </div>
            </div>
            <div class="linhaDiv">
                <div>
                    Email:
                </div>
                <div>
                    <?=@$email?>
                </div>
            </div>
            <div class="linhaDiv">
                <div>
                    Senha:
                </div>
                <div>
                    <?=@$senha?>
                </div>
            </div>
            <div class="linhaDiv">
                <div>
                    Sexo:
                </div>
                <div>
                    <?=@$sexo?>
                </div>
            </div>
        </div>    
    </body>   
</html>