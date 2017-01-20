<?php
function getHome(){
	//atribui a variável url o endereço digitado pelo usuário na barra de endereço.
	$url = $_GET['url'];
	//echo $url;

	//explode - separa a $url por diretorios na '/' em um array
	$url = explode('/', $url);

	/*//print_r - exibe variável do tipo array E.:Array([Valor-Indice]=>[Valor-Conteudo-Do-Indice])
	print_r($url);

	//Exibir um indice específico
	echo "<br>$url[2]";*/

	//Se o usuário não digitar nada então será atribuido a variável $url o valor index, senão será atribuido o valor que o usuário digitou na barra de endereço
	$url[0] = ($url[0] == NULL ? 'index' : $url[0]);
	//echo $url[0];

	/*Quando fizer upload em um servidor de hospedagem, tirar as '/' antes do tpl, porque o próprio servidor já acrescenta essa barra automaticamente*/
	//file_exists() - verifica se um arquivo existe, nesse caso o que está dentro da url[0]
	if(file_exists('tpl/'.$url[0].'.php')){
		//Se existir será retornado uma unica vez o arquivo solicitado
		require_once('/tpl/'.$url[0].'.php');
	}
	//Se o arquivo não existe no diretório tpl, então será procurado no diretorio acima no caso usando a $url[0] e a $url[1] sendo o arquivo procurado
	elseif(file_exists('tpl/'.$url[0].'/'.$url[1].'.php')) {
		//Se existir será retornado o arquivo existente no diretorio especificado uma unica vez
		require_once('/tpl/'.$url[0].'/'.$url[1].'.php');
	} else {
		//Se não, será retornado a página 404 de página não encontrada uma unica vez
		require_once('/tpl/404.php');
	}
}

function setHeader() {
	//Retorna o arquivo header.php uma unica vez
	require_once('tpl/header.php');
}

function setMenu() {
	//Retorna o arquivo menu.php mais de uma vez
	require('tpl/menu.php');
}

function setHome() {
	//exibe o endereço local do projeto que foi definido em ini.php dentro da pasta dts
	echo BASE;
}
?>