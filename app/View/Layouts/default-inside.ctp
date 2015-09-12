<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Gadmi');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.gm-style .gm-style-mtc 
		label,.gm-style .gm-style-mtc 
		div{
			font-weight:400
			}
	</style>
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<style type="text/css">
		.gm-style .gm-style-cc span,
		.gm-style .gm-style-cc a,
		.gm-style .gm-style-mtc div 
		{
			font-size:10px
		}
	</style>
	<style type="text/css">
		@media print {
			.gm-style .gmnoprint, .gmnoprint {
				display:none  
			}
		}
		@media screen {
			.gm-style .gmnoscreen, .gmnoscreen {
				display:none
			}
		}
	</style>
	<style type="text/css">
	.gm-style{
		font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;
		text-decoration:none}
	</style>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo __('Gadmi, Gestió Administrativa El Masnou');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo __("Gestió Administrativa El Masnou Elaboració de pressupostos i factures, control i seguiment de cobraments, arxiu i digitalització de documentació, assessorament administratiu i econòmic, coordinació amb la gestoria, gestió de personal");?>">
	<link rel="canonical" href="http://gadmi.com">
	<!-- <link rel="publisher" href="">-->
	<meta name="author" content="<?php echo __('B&amp;G Serveis informàtics');?>">
	<meta property="og:locale" content="ca_ES">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Gadmi, Gestió Administrativa El Masnou">
	<meta property="og:description" content="Gestió Administrativa El Masnou Elaboració de pressupostos i factures, control i seguiment de cobraments, arxiu i digitalització de documentació, assessorament administratiu i econòmic, coordinació amb la gestoria, gestió de personal">
	<meta property="og:url" content="http://gadmi.com">
	<meta property="og:site_name" content="Gadmi, Gestió Administrativa El Masnou">
<!--<meta property="article:publisher" content="https://www.facebook.com/gadmi">
<meta property="fb:app_id" content="691425877580626">
<meta name="alexaVerifyID" content="RngJAnnFQXh1wxY_XZiXzVpSZ8k">
<meta name="msvalidate.01" content="5186A25393F260C16114D75C677D8B40">
<meta name="google-site-verification" content="biTMAV27LmUpfRogeO9QF5vr0p6iY-2jBZQ_FUKawTw">
<meta name="p:domain_verify" content="18ab16e920fe0392980759b6e1413cb8">
<meta name="yandex-verification" content="72f96eb21cfaad76">
-->


	<!-- core CSS -->
	<?php echo $this->Html->css(array(
			'bootstrap.min',
			'font-awesome.min',
			'animate.min',
			'owl.carousel',
			'owl.transitions',
			'prettyPhoto',
			'main',
			'responsive',
			'dropzone')
		);
	?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <?php
		echo $this->Html->meta(
		    'favicon.ico',
		    '/favicon.ico',
		    array('type' => 'icon')
		);
		?>
</head>
<body id="home" class="homepage">
	<div class="container" style="margin-top:50px">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			<br />
	</div>
<?= $this->Html->script(array('jquery','bootstrap.min', 'owl.carousel.min','mousescroll','smoothscroll','jquery.prettyPhoto','jquery.isotope.min','jquery.inview.min','wow.min','dropzone')); ?>
<?= $this->fetch('script');?>
</body>
</html>
