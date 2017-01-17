<?php
session_start();
	if($_GET['fechar']) {
		//Aplica um estilo css para esconder a modal na variável de sessão 'fechar', caso o usuário feche a janela e abra novamente será exibido a modal novamente, porque a variável de sessão é excluida ao fechar a janela
		$_SESSION['fechar'] = 'style="display:none"';
		//Redireciona para a própria página
		header("Location: modal.php");
	} else {}
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Descrição da página"/>
<meta name="keywords" content="Palavras chaves separadas por vírgula"/>
<link rel="stylesheet" href="./style7.css" type="text/css" title="Estilo do Site"/>
<title>Janela modal</title>
</head>
<body>
<!-- Na TAG link é referenciado o arquivo que terá o estilo CSS da página -->

<iframe src="http://www.upinside.com.br" width="100%" height="1082" scrolling="no" frameborder="0"></iframe>

<!--Aplica o estilo que vem do php lá em cima para aplicar o estilo CSS, caso o usuário já tenha clicado em fechar na mesma sessão-->
<div id="fundo" <?php echo $_SESSION['fechar']; ?>>
	<div class="janela">
    	<!--<img src="../php/imagens/logo.jpg" title="M Jailton" alt="logo do mjailton">-->
        <img src="../php/imagens/preto-branco.png" title="Foto" alt="Foto" width="768" weight="497">
        	<div class="close">
            	<a href="modal.php?fechar=true" title="Fechar">
                	<img src="../php/imagens/fechar.png" alt="Fechar" title="Botão de Fechar Modal" border="0" width="50">
                </a>
            </div><!--/close-->
	</div><!--/janela-->
</div><!--/fundo-->

</body>
</html>