<title>Fale Conosco | Pro Tableless - Agência Web</title>
<meta name="description" content="Fale Conosco | Pro Tableless - Desenvolvimento de sites nos padrões web, Trabalhando para você conquistar novos clientes">
<meta name="keywords" content="Design Digital, Lojas Virtuais, Desenvolvimento de Sites, Estratégia de vendas, Consultoria web, Criação de sistemas">

<?php setHeader();?>

<div id="conteudo">
	<h1 class="titulo">Fale Conosco</h1>
	<div id="pagina">
		<div class="contato">
			<h3>Por Telefone:</h3>
			<p>(11) 2568-6618</p>
			<p>(11) 96485-6672</p>

			<h3>Por E-mail:</h3>
			<p>carlos.eduardo-silva@hotmail.com</p>
			<p>caarlos.eduardo.silva@gmail.com</p>
		</div><!--/contato-->

		<form class="fale" action="" method="post">
			<fieldset>
				<legend>Envie uma mensagem:</legend>
					<label>
						<span>Nome:</span>
						<input type="text" name="nome"/>
					</label>
					<label>
						<span>E-mail:</span>
						<input type="email" name="email"/>
					</label>
					<label>
					<!--TODO//-->
						<span>Telefone:</span>
						<input type="text" name="telefone"/>
					</label>
					<label>
						<span>Mensagem:</span>
						<textarea rows="8" name="mensagem"></textarea>
					</label>
					<input class="btn" type="submit" name="enviar" value="Entre em Contato"/>
			</fieldset>
		</form>
	</div><!--/pagina-->
</div><!--/conteudo-->