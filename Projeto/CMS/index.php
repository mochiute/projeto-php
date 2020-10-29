<?php

require_once('../modulos/config.php');
$action = "../bd/inserirUsuario.php";

//import do arquivo de função para conectar no banco de dados
require_once('../bd/conexaoMysql.php');

//chama a função que vai estabeleccer a conexão com o banco de dados.
if(!$conex = conexaoMysql()){
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
    //die; Finaliza a interpretação da página

}

if(isset($_GET['modo'])){
    //Validação para verificar se o modo é para buscar no banco o registro
    if(strtoupper($_GET['modo']) == "CONSULTAR"){
        //Validação para saber se o id foi encaminhado
        if(isset($_GET['id']) && $_GET['id'] != ""){
            
            $id = $_GET['id'];

            //Ativa um recurso para a utilização de variáveis de sessão
            //Uma variavel de sessão permanece ativa até que o programa destrua ela ou o navegador seja fechado
            session_start();
            
            //Criamos uma variavel chamada id como sendo uma variavel de sessão
            $_SESSION['id'] = $id;

            $sql = "select * from tblusuarios where idUsuario = ".$id;

                $select = mysqli_query($conex, $sql);

                if($rsUsuario = mysqli_fetch_assoc($select)){
                    
                    $nome = $rsUsuario['nome'];
                    $celular = $rsUsuario['celular'];
                    $email = $rsUsuario['email'];
                    $senha = $rsUsuario['senha'];
                    $telefone = $rsUsuario['telefone'];
                    //Tratamento da data para converter no padrão brasileiro
                    $sexo = $rsUsuario['sexo'];
                    //Validação para ativar o rádio do sexo
                    if(strtoupper($sexo) == "F")
                        $chkFeminino = "checked";
                    elseif(strtoupper($sexo) == "M")
                        $chkMasculino = "checked";
                    elseif(strtoupper($sexo) == "O")
                        $chkOutro = "checked";
                        
                    $action = "../bd/atualizarUsuario.php";
                } 
        }
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>CMS</title>
    <script src="js/jquery.js"></script>

    <script>
        'use strict';

        $(document).ready(function(){
            //Function para carregar a Modal
            $(".pesquisar").click(function(){
                $("#modalContainer").fadeIn(1000);

            });

        });

        //Function para carregar ou visualizar contato na modal
        function visualizarUsuario(id) {
            // alert(id);
            $.ajax({
                type: "POST",
                url: "visualizarUsuario.php",
                data: {idContato:id},
                success: function(dados){
                    $("#modal").html(dados);
                } 
            });
        }
    </script>
</head>

<body>
        <div id="modalContainer">
            <div id="modal">

            </div>
        </div>

    <div id="caixaPrincipal">
        <div id="header">
            <div class="title">
                <h1>CMS<span> - Sistema de Gerenciamento do Site</span></h1>
            </div>
            <div id="headerImg">
                <img src="../images/icone.png">
            </div>
        </div>
        <div id="menu">
            <div id="menuContainer">
            <!-- <div class="menuItems" id="admConteudo">
                <img src="../images/conteudo.png">
                <h3>Adm Conteudo</h3>
            </div>
            <div class="menuItems" id="admFaleConosco">
                <img src="../images/faleconosco.png">
                <h3>Adm Fale Conosco</h3>
            </div>
            <div class="menuItems" id="admProdutos">
                <img src="../images/produtos.png">
                <h3>Adm Produtos</h3>
            </div>
            <div class="menuItems" id="contas">
                <img src="../images/usuario.png">
                <h3>Adm Usuários</h3>
            </div> -->
            </div>
            <div id="options">
                <h1>Bem vindo,[xxxxx xxx]</h1>
                <h2 id="logout">
                    <a href="../index.php">Logout</a>
                </h2>
            </div>
        </div>
        <div id="conteudo">

            <div id="faleConosco" class="cmsConteudo ocultar">
                <table>
                    <tr id="linha">
                        <td>
                            nome
                        </td>
                        <td>
                            celular
                        </td>
                        <td>
                            email
                        </td>
                        <td>
                            obs
                        </td>
                        <td>
                            opções
                        </td>
                    </tr>
                        <?php 
                    //Script para buscar todos os dados no BD
                    $sql = "
                            select tblcontatos.idContato,
                            tblcontatos.nome, 
                            tblcontatos.celular, 
                            tblcontatos.email, 
                            tblcontatos.mensagem from tblcontatos 
                            order by tblcontatos.idContato desc;
                            ";
                            
                    //Executa o script no BD (Retorna o conteudo
                    //existente e armazena na variável $select)
                    $select = mysqli_query($conex, $sql);

                    while($rsContatos = mysqli_fetch_assoc($select))
                    {    
                ?>
                        <tr>
                            <td>
                                <?=$rsContatos['nome'];?>
                            </td>
                            <td>
                                <?=$rsContatos['celular'];?>
                            </td>
                            <td>
                                <?=$rsContatos['email'];?>
                            </td>
                            <td>
                                <?=$rsContatos['mensagem'];?>
                            </td>
                            <td>
                            <a href="../bd/excluirContato.php?modo=excluir&id=<?=$rsContatos['idContato']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                <img src="../images/deletar.png" alt="Excluir" title="Excluir" class="icons">
                            </a> 
                            </td>
                        </tr>
                        <?php
                    }
                
                ?>
                </table>
            </div>
            <div id="admUsuarios" class="cmsConteudo ocultar">
                <h1>Registro de usuários </h1>
                <form name="frmRegistro" method="post" action="<?=$action?>">
                    <div class="camposRegistro">
                        <div>
                            <span>Nome:</span>
                        </div>
                        <input type="text" name="txtNome" value="<?=@$nome?>" placeholder="Nome">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Celular:</span>
                        </div>
                        <input type="tel" name="telCelular" value="<?=@$celular?>" placeholder="Celular">
                    </div>
                    
                    <div class="camposRegistro">
                         <div>
                            <span>Telefone:</span>
                        </div>
                        <input type="tel" name="telTelefone" value="<?=@$telefone?>" placeholder="Telefone">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Email:</span>
                        </div>
                        <input type="email" name="emlEmail" value="<?=@$email ?>" placeholder="Email">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Senha:</span>
                        </div>
                        <input type="password" name="pswSenha" value="<?=@$senha ?>" placeholder="Senha">
                    </div>

                    <div class="camposRegistro">
                        <label>Feminino<input type="radio" name="rdoSexo" value="F" <?=@$chkFeminino?>></label> 
                        <label>Masculino<input type="radio" name="rdoSexo" value="M" <?=@$chkMasculino?>></label>
                        <label>Outro<input type="radio" name="rdoSexo" value="O" <?=@$chkOutro?>></label>
                    </div>
                    
                    <div class="camposRegistro">
                        <input type="submit" name="btnRegitro" value="Registrar">
                    </div>
                </form>

                <div id="usuarios">
                    <table>
                        <tr id="linhaUsuario">
                            <td>
                                nome
                            </td>
                            <td>
                                celular
                            </td>
                            <td>
                                email
                            </td>                    
                            <td>
                                status
                            </td>
                            <td>
                                opções
                            </td>
                        </tr>
                            <?php 
                        //Script para buscar todos os dados no BD
                        $sql = "
                                select tblusuarios.idUsuario,
                                tblusuarios.nome, 
                                tblusuarios.celular, 
                                tblusuarios.email, 
                                tblusuarios.senha,tblusuarios.ativado from tblusuarios
                                order by tblusuarios.idUsuario desc;
                                ";
                                
                        //Executa o script no BD (Retorna o conteudo
                        //existente e armazena na variável $select)
                        $select = mysqli_query($conex, $sql);

                        while($rsUsuarios = mysqli_fetch_assoc($select))
                        {    
                    ?>
                            <tr>
                                <td>
                                    <?=$rsUsuarios['nome'];?>
                                </td>
                                <td>
                                    <?=$rsUsuarios['celular'];?>
                                </td>
                                <td>
                                    <?=$rsUsuarios['email'];?>
                                </td>
                                <td>
                                    <?php 
                                        if($rsUsuarios['ativado'] == 0)
                                            echo('Desativado');
                                        else
                                            echo('Ativado');
                                    ?>
                                </td>
                                <td>
                                    <a href="../bd/excluirUsuario.php?modo=excluir&id=<?=$rsUsuarios['idUsuario']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                      <img src="../images/deletar.png" alt="Excluir" title="Excluir" class="icons">
                                   </a> 
                                   <a href="index.php?modo=consultar&id=<?=$rsUsuarios['idUsuario']?>">
                                      <img src="../images/edit.png" alt="Editar" title="Editar" class="icons">
                                   </a>
                                   <a href="../bd/ativarUsuarios.php?modo=ativar&ativado=<?=$rsUsuarios['ativado']?>&id=<?=$rsUsuarios['idUsuario']?>">
                                        <?php
                                            if($rsUsuarios['ativado'] == 0){
                                                $status = "desativar";
                                            }
                                            else{
                                                $status = "ativar";
                                            }
                                        ?>
                                        <img src="../images/<?=@$status?>.png" alt="Desativar" title="Desativar" class="icons">
                                    </a>
                                   <img src="../images/search.png" class="icons pesquisar" onclick="visualizarUsuario(<?=$rsUsuarios['idUsuario']?>);"> 
                                </td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    </table>
                </div>
            </div>
            <div class="cmsConteudo ocultar" id="produtos">
            </div>
            <div class="cmsConteudo ocultar" id="admConteudo">
                <h1 class="mainTitle">Registro de Lojas</h1>
                <form name="frmRegistroDeLojas" method="post" action="index.php">
                    <div class="registroNossasLojas">
                        <div>Digite o nome da Cidade:</div>
                        <input type="text" name="txtNomeCidade" value="" placeholder="Cidade">
                    </div>
                    <div class="registroNossasLojas">
                        <div>Digite o endereço:</div>
                        <input type="text" name="txtEndereco" value="" placeholder="Endereço">
                    </div>
                    <div class="registroNossasLojas">
                        <div>Digite o telefone:</div>
                        <input type="text" name="telTelefone" value="" placeholder="Telefone">
                    </div>
                    <div class="registroNossasLojas">
                        <input type="submit" name="btnRegistrar" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
            <h1>Desenvolvido por xxxxxxx xxxxxxxxx</h1>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>