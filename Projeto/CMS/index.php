<?php

require_once('../modulos/config.php');

//import do arquivo de função para conectar no banco de dados
require_once('../bd/conexaoMysql.php');

//chama a função que vai estabeleccer a conexão com o banco de dados.
if(!$conex = conexaoMysql()){
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
    //die; Finaliza a interpretação da página
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>CMS</title>
</head>

<body>
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
            <h1>Bem vindo,[xxxxx xxx]</h1>
            <h2 id="logout"><a href="../index.php">Logout</a></h2>
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
            <div id="admUsuarios" class="cmsConteudo">
                <h1>Registro de usuários </h1>
                <form name="frmRegistro" method="post" action="../bd/inserirUsuario.php">
                    <div class="camposRegistro">
                        <div>
                            <span>Nome:</span>
                        </div>
                        <input type="text" name="txtNome" value="" placeholder="Nome">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Celular:</span>
                        </div>
                        <input type="tel" name="telCelular" value="" placeholder="Celular">
                    </div>
                    
                    <div class="camposRegistro">
                         <div>
                            <span>Telefone:</span>
                        </div>
                        <input type="tel" name="telTelefone" value="" placeholder="Telefone">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Email:</span>
                        </div>
                        <input type="email" name="emlEmail" value="" placeholder="Email">
                    </div>

                    <div class="camposRegistro">
                         <div>
                            <span>Senha:</span>
                        </div>
                        <input type="password" name="pswSenha" value="" placeholder="Senha">
                    </div>

                    <div class="camposRegistro">
                        <label>Feminino<input type="radio" name="rdoSexo" value="F"></label> 
                        <label>Masculino<input type="radio" name="rdoSexo" value="M"></label>
                        <label>Outro<input type="radio" name="rdoSexo" value="O"></label>
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
                                senha
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
                                tblusuarios.senha from tblusuarios
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
                                    <?=$rsUsuarios['senha'];?>
                                </td>
                                <td>
                                    desativado
                                </td>
                                <td>
                                    <a href="../bd/excluirUsuario.php?modo=excluir&id=<?=$rsUsuarios['idUsuario']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                      <img src="../images/deletar.png" alt="Excluir" title="Excluir" class="icons">
                                   </a> 
                                </td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    </table>
                </div>
            </div>
            <div class="cmsConteudo" id="produtos"></div>
            <div class="cmsConteudo" id="conteudo"></div>
        </div>
        <div id="footer">
            <h1>Desenvolvido por xxxxxxx xxxxxxxxx</h1>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>