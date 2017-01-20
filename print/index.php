<?php
require_once('dts/ini.php');
require_once('dts/get.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php setHome();?>/tpl/style.css" rel="stylesheet" type="text/css">
<link href="<?php setHome();?>/tpl/print.css" rel="stylesheet" type="text/css" media="print"><!--Estilo para modo de impressão-->

	<?php getHome();?>

</div><!--/content-->
</div><!--/site-->

<div id="clear"></div><!--/clear-->

<div id="footer">
<div class="footer_content">
	<div id="footer_spacer"></div><!--/content-->
	
	<?php setMenu();?>
	
	<ul class="footer_elementos">
		<li>
			<img src="<?php setHome();?>/tpl/imagens/logo_footer.png" border="0" alt="Logo" title="Pro Tableless, imprima o anúncio" width="247" height="91"/>
		</li>
		<li>
			<div class="tel">Ligue:</div>
			<p>(11) 2568-6400</p>
			<p>(11) 96485-6672</p>
		</li>
		<li class="right">
			<div class="mail">Escreva:</div>
			<p class="min">carlos.eduardo-silva@hotmail.com</p>
			<p class="min">caarlos.eduardo.silva@gmail.com</p>
		</li>
	</ul><!--/ul_logo_tel_mail-->
</div><!--/footer_content-->
</div><!--/footer-->

</body>
</html>