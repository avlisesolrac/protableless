<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Descrição da página"/>
<meta name="keywords" content="Palavras chaves separadas por vírgula"/>
<link rel="stylesheet" href="./style13.css" type="text/css" title="Estilo do Site"/>
<title>Formatação de Formulário</title>
</head>
<body>
<!-- Na TAG link é referenciado o arquivo que terá o estilo CSS da página -->

<form action="" method="post" enctype="" name="contato">
	<fieldset>
		<legend>Envie seu contato:</legend>
			
			<label>
				<span>Nome:</span>
				<input type="text" name="nome" value="Informe seu nome!"
				onclick="//onclick - ao clicar no elemento, neste caso o input
				this.style.background='#f5f5f5', this.style.borderColor='#fff'
					if(this.value == 'Informe seu nome!' || this.value == 'Nome é inválido!') {
						this.value = ''
					}
					//onblur - ao sair de dentro de um input
				" onblur="
					if(this.value == '') {
						this.value='Informe seu nome!',
						this.style.background='#ffa6a6',
						this.style.borderColor='red'
					}
					//onchange - verifica as alterações feitas no input
				" onchange="
					if(this.value.length < 10) {
						this.value='Nome é inválido!',
						this.style.background='#ffa6a6',
						this.style.borderColor='red'
					} else {
						this.style.background='#97ffb1',
						this.style.borderColor='green'
					}
				" onmouseover="this.style.borderColor='blue'"
				onmouseout="this.style.borderColor='#999'"
				/>
			</label>

			<label>
				<span>Telefone:</span>
				<input type="text" name="email" maxlength="14" value="Informe seu telefone!"
				onclick="//onclick - ao clicar no elemento, neste caso o input
				this.style.background='#f5f5f5', this.style.borderColor='#fff'
					if(this.value == 'Informe seu telefone!' || this.value == 'Formato inválido:(XX) XXXX-XXXX') {
						this.value = ''
					}
					//onblur - ao sair de dentro de um input
				" onblur="
					if(this.value == '') {
						this.value='Informe seu telefone!',
						this.style.background='#ffa6a6',
						this.style.borderColor='red'
					}
					//onchange - verifica as alterações feitas no input
				" onchange="
					if(this.value.length < 14) {
						this.value='Formato inválido:(XX) XXXX-XXXX',
						this.style.background='#ffa6a6',
						this.style.borderColor='red'
					} else {
						this.style.background='#97ffb1',
						this.style.borderColor='green'
					}
					
				" onmouseover="this.style.borderColor='blue'"
				onmouseout="this.style.borderColor='#999'"/>
			</label>

			<label>
				<span>Classe:</span>
				<input type="text" name="classe"
				onclick="
				//onclick - ao clicar neste elemento será adicionado uma classe com nome 'click', agorá é só aplicar o estilo css nessa classe
				this.className='click'"
				onfocus="
				//onfocus - executa as instruções ao focar no input
				this.style.borderColor='cyan'"
				onmouseover="this.style.borderColor='blue'"
				onmouseout="this.style.borderColor='#999'"
				/>
			</label>

			<label>
				<span>Imagem:</span>
				<!--Altera o valor do input "fileon" para o nome do arquivo que foi adicionar no input "img" -->
				<input type="file" name="img" class="file" size="22" onchange="document.getElementById('fileon').value = this.value"/>
				<input type="text" name="fileon" id="fileon" size="24"/>
			</label>

			<input type="reset" name="limpar" value="limpar" class="btn"/>
			<input type="submit" name="enviar" value="enviar" class="btn"/>

	</fieldset>

</form>

</body>
</html>