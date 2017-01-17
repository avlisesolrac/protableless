<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="description" content="Trabalhando com tabelas">
<meta name="keywords" content="table, tabela, tr, td, th">
<title>Tabelas</title>
</head>
<body>

	<table width="600" border="1" cellpadding="5" cellspacing="5"><!--Abre a tabela-->
    	<tr><!--Abre uma linha-->
        	<td rowspan="3">Coluna 1 da linha1</td>
            <td>Coluna 2 da linha1</td>
            <td>Coluna 3 da linha1</td>
        </tr>
        <tr>
        	<td colspan="2">Coluna 1 da linha2</td>
            <td>Coluna 2 da linha2</td>
        </tr>
        <tr>
        	<td>Coluna 1 da linha3</td>
            <td>Coluna 2 da linha3</td>
            <td>Coluna 3 da linha3</td>
        </tr>
    </table>
    
    <br/><br/>
    
    <table width="600" border="1" cellpadding="5" cellspacing="5"><!--Abre a tabela-->
    	<tr><!--Abre uma linha-->
        	<td rowspan="3">Técnicas de SEO tem como vantagens:</td>
			<td>Melhor colocação nas pesquisas</td>
        </tr>
        <tr>
        	<td>+ Visistas em seu site</td>

        </tr>
        <tr>
        	<td>+ Clientes para você</td>

        </tr>
    </table>
    <br/><br/>
    <table width="600" border="1" cellpadding="5" cellspacing="5" title="Lista Clientes Ativos">
    	<tbody>
        	<tr>
            	<td><b>Nome:</b></td>
                <td><b>E-mail:</b></td>
                <td><b>Fone:</b></td>
            </tr>
        </tbody>
        
        	<tr>
            	<td>Robson V. Leite</td>
                <td>contato@upinside.com.br</td>
                <td>54 3381.2185</td>
            </tr>
            
            <tr>
            	<td>Campus UpInside</td>
                <td>suporte@campusup.com.br</td>
                <td>54 3381.2185</td>
            </tr>
            
        <tfoot>
        	<tr>
            	<td height="80" align="center" valign="bottom" colspan="3">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                </td>
            </tr>
        </tfoot>
    </table>

</body>
</html>