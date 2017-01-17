<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="description" content="Trabalhando com formulários">
<meta name="keywords" content="form, action, input, button, submit">
<title>Trabalhando com Formulários</title>
</head>
<body>
	<!--Quando for usar o formulário para envio de arquivo, necessário o enctype="multipart/form-data"-->
	<form name="formContato" action="contatosend.php" method="post" enctype="multipart/form-data">
    	<fieldset>
    		<legend>Dados primários:</legend>
                <label>
                    <span>Nome:</span>
                    <input type="text" size="50" name="nome"/>
                </label>
                <br/>
                <label>
                    <span>Senha:</span>
                    <input type="password" size="50" name="senha"/>
                </label>
                <br/>
                <label>
                    <input type="checkbox" value="1" name="news"/>Marque para receber e-mails
                </label>
                <br/>
                <!--O name tem que ser igual para radio -->
                <label>
                    <input type="radio" value="1" name="s"/>Masculino
                <label>
                <label>
                    <input type="radio" value="2" name="s"/>Feminino
                <label>
                <br/>
                <!-- Pouco usado <input type="button" name="enviar" value="ENVIAR"/> -->
                <input type="file" name="img" size="50"/>
                <br/>
                <!-- Usar este input para enviar ocultamente a data de envio do formulário -->
                <input type="hidden" name="data" value="<?php date('d/m/y'); ?>"/>
                <!-- Usar o hidden da seguinte forma no caso de versões antigas do IE que não consegue identificar o input type image como submit -->
                <input type="hidden" value="enviar" />
                <input type="image" src="../php/imagens/entrar.gif" value="enviar"/>
                <br/><br/>
        </fieldset>
        <br/>
        <fieldset>
        	<legend>Dados Secundários:</legend>
            	<label>
                	<span>Selecione seu setor:</span>
                	<select name="setor">
                    	<option value="-1">Selecione uma opção: &nbsp;</option>
                    	<option value="1">Comercial &nbsp;</option>
                        <option value="2">Suporte &nbsp;</option>
                    </select>
                </label>
                <br/>
                <label>
                	<span>Envie sua mensagem:</span><br/>
                	<textarea name="msg" cols="50" rows="10"></textarea>
                <label>
        </fieldset>
        <br/>
        <fieldset>
        	<legend>Enviar Formulário:</legend>
            <input type="reset" value="Limpar Formulário" />
            <input type="submit" value="ENVIAR" name="enviar">
        </fieldset>
    </form>

</body>
</html>