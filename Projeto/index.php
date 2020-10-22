<?php 

require_once('bd/conexaoMysql.php');

if(!$conex = conexaoMysql()){
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
    //die; Finaliza a interpretação da página
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Eletrônicos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/ancora.js"></script>
</head>

<body>
    <!-- MENU -->
    <header>
        <div id="headerCaixa">
            <div class="headerLogo">
                <img src="./images/icone.png" alt="iconeDaEmpresa">
            </div>
            <nav>
                <ul id="menu">
                    <li class="menuItens">
                        <a href="#linha2">
                            A Empresa
                        </a>
                    </li>
                    <li class="menuItens">
                        <a href="#nossasLojas">
                            Lojas
                        </a>
                    </li>
                    <li class="menuItens">
                        <a href="#entreEmContato">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
            <div id="loginCaixa">
                <form name="frmLogin" method="post" action="index.php">
                    <div class="campos">
                        Usuário:
                        <input type="text" name="txtUsuario" value="" placeholder="Usuário">
                    </div>
                    <div class="campos">
                        Senha: <input type="password" name="txtLogin" value="" placeholder="Senha">
                    </div>
                    <input type="submit" name="btnLogin" value="Ok" id="btnLogin">

                </form>
            </div>
        </div>
    </header>
    <!-- Slider -->
    <div class="conteudo">
        <div id="sliderCaixa">
            <div id="sliderConteudo">
                <div class="arrow" id="previous">&ltrif;</div>
                <div id="slider"></div>
                <div class="arrow" id="next">&rtrif;</div>
            </div>

            <div id="redeSociais">
                <div>
                    <img src="./images/gitIcone.png" alt="Icone do GitHub">
                </div>
                <div>
                    <img src="./images/instaIcone.png" alt="Icone do Instagram">
                </div>
                <div>
                    <img src="./images/twitterIcone.png" alt="Icone do Twitter">
                </div>
            </div>
        </div>
    </div>
    <!-- Conteudo -->
    <div class="conteudo">
        <div id="conteudoCaixa">
            <div id="listaConteudo">
                <ul>
                    <li>Consoles</li>
                    <li>Computadores</li>
                    <li>Celulares</li>
                </ul>
            </div>
            <div id="caixaItens">
                <div id="caixaBarraPesquisa">
                    <form action="index.php" name="frmPesquisa" method="post">
                        Pesquisa:<input type="text" name="txtPesquisa" value="">
                        <input type="submit" name="btnPesquisar" value="Pesquisar">
                    </form>
                </div>
                <h3 id="itensEncontrados">Produtos Encontrados:</h3>
                <div id="itensCaixaPrincipal">
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Playstation 5</li>
                            <li>Novo console da Sony</li>
                            <li>R$ 6.000,99</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                    <div class="itens">
                        <div class="itemImagem">
                            <img src="./images/ps5.jpg" alt="imagem do produto">
                        </div>
                        <ul>
                            <li>Nome:</li>
                            <li>Descrição</li>
                            <li>preço</li>
                        </ul>
                        <div class="saibaMais">
                            Saiba mais
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conteudo">
        <div id="linha2">
            <h1 class="title">Titulo xxxxxxxxxxxxx</h1>
            <div>
                Somos uma empresa de eletrônicos e informática em geral, procuramos vender produtos modernos para assim possibillitar que uma maior quantidade tenha benefícios. Estamos abertos a qualquer opinião e crítica sobre nossa empresa e loja, você pode enviar
                sua sugestão ou caso estejas com problemas, no formulário logo abaixo. Iremos tentar ajudar o mais breve possível.
            </div>
        </div>
    </div>
    <div class="conteudo">
        <div id="produtosEmDestaque">
            <h1 class="title">Produtos em destaques:</h1>

            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensDestaque">
                <div class="produtoImagem">
                    <img src="./images/ps5.jpg" alt="Produto em destaque">
                </div>
                <h1>Nome do Produto</h1>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
        </div>
    </div>
    <div class="conteudo">
        <div id="produtosEmPromocao">
            <h1 class="title">Nossos produtos em destaque</h1>

            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:5.999
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:5.999
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:5.999
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:5.999
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:5.999
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:xxxx
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:xxxx
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="itensPromocao">
                <div class="promocaoImagens">
                    <img src="./images/ps5.jpg" alt="Produto em promoção">
                </div>
                <h1>Nome:</h1>

                <div class="preco">
                    <h2 class="precoAntigo">
                        De R$:xxxx
                    </h2>
                    <h2 class="precoNovo">
                        Por R$:xxxx
                    </h2>
                </div>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
        </div>
    </div>
    <div class="conteudo">
        <div id="nossasLojas">
            <h1 class="title">Nossas lojas</h1>
            <div class="cardLoja">
                <div class="lojaImg">
                    <img src="./images/alphaville.jpg" alt="Ilustração da loja">
                </div>
                <ul>
                    <li>
                        Alphaville
                    </li>
                    <li>
                        Avenida xxxxx
                    </li>
                    <li>
                        xxxxxxxxxxx
                    </li>
                </ul>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="cardLoja">
                <div class="lojaImg">
                    <img src="./images/osasco.jpg" alt="Ilustração da loja">
                </div>
                <ul>
                    <li>
                        Osasco
                    </li>
                    <li>
                        Avenida xxxxx
                    </li>
                    <li>
                        xxxxxxxxxxxxxxxxx
                    </li>
                </ul>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
            <div class="cardLoja">
                <div class="lojaImg">
                    <img src="./images/barueri.png" alt="Ilustração da loja">
                </div>
                <ul>
                    <li>
                        Barueri
                    </li>
                    <li>
                        Avenida xxxxx
                    </li>
                    <li>
                        xxxxxxxxxxxxxxxxxxx
                    </li>
                </ul>
                <div class="saibaMaisDestaque">
                    Saiba mais
                </div>
            </div>
        </div>
    </div>

    <div class="conteudo">
        <div id="entreEmContato">
            <h1 class="title">Entre em contato conosco</h1>
            <div id="forms">
                <form action="bd/inserirContato.php" name="frmContato" method="post">
                    <div class="campoDePesquisa">
                        <h3>Nome:</h3>
                        <div class="entradaDeDados">
                            <input type="text" name="txtNome" value="" placeholder="Digite seu nome:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Telefone(opcional):</h3>
                        <div class="entradaDeDados">
                            <input type="tel" name="telTelefone" value="" placeholder="Digite seu telefone:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Celular:</h3>
                        <div class="entradaDeDados">
                            <input type="tel" name="telCelular" value="" placeholder="Digite seu celular:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Email:</h3>
                        <div class="entradaDeDados">
                            <input type="email" name="emlEmail" value="" placeholder="Digite seu email:">
                        </div>
                    </div>

                    <div class="campoDePesquisa">
                        <h3>Home page(opcional):</h3>
                        <div class="entradaDeDados">
                            <input type="url" name="urlHomePage" value="" placeholder="Digite sua homepage:">
                        </div>
                    </div>

                    <div class="campoDePesquisa">
                        <h3>Link do Facebook(opcional):</h3>
                        <div class="entradaDeDados">
                            <input type="url" name="urlLinkFacebook" value="" placeholder="Digite seu link do Facebook:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Sugestão/Críticas(opcional):</h3>
                        <div class="entradaDeDados">
                            <input type="text" name="txtCritica" value="" placeholder="Digite sua Sugestão:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Mensagem</h3>
                        <div id="mensagem">
                            <input type="text" name="txtMensagem" value="">
                        </div>
                    </div>

                    <div class="campoDePesquisa">
                        <h3>Sexo</h3>
                        <div id="sexo">
                            <input type="radio" name="rdoSexo" value="F" checked>Feminino
                            <input type="radio" name="rdoSexo" value="M">Masculino
                            <input type="radio" name="rdoSexo" value="O">Outro
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <h3>Profissão:</h3>
                        <div class="entradaDeDados">
                            <input type="text" name="txtProfissao" value="" placeholder="Digite sua Profissão:">
                        </div>
                    </div>
                    <div class="campoDePesquisa">
                        <div id="enviar">
                            <input type="submit" name="btnEnviar" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div id="footerCaixa">
            <div class="headerLogo">
                <img src="./images/icone.png" alt="iconeDaEmpresa">
            </div>
            <div id="copyright">
                <h3>© Copyright 2020</h3>
                <h3>Todos os direitos reservados - Política de privacidade</h3>
            </div>
        </div>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>