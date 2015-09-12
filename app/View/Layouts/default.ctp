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

$cakeDescription = __d('cake_dev', 'Challenge');
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
	<style>
  		#map { top:40px; bottom:0; width:100%;height: 650px }
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
	<title><?php echo __('Challenge');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo __("Challenge");?>">
	<link rel="canonical" href="http://challenge.com">
	<!-- <link rel="publisher" href="">-->
	<meta name="author" content="<?php echo __('Eloi Galles');?>">
	<meta property="og:locale" content="ca_ES">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Challenge">
	<meta property="og:description" content="Challenge">
	<meta property="og:url" content="http://Challenge.com">
	<meta property="og:site_name" content="Challenge">

	<!-- core CSS -->
	<?php echo $this->Html->css(array(
			'bootstrap.min',
			'font-awesome.min',
			'animate.min',
			'main',
			'responsive',
			)
		);
	?>
</head>
<body id="home" class="homepage">
	<div class="container">
			<div style="margin-top:20px">
				<?php echo $this->Session->flash(); ?>
			</div>
			<?php echo $this->fetch('content'); ?>
	</div>
<?= $this->Html->script(array('jquery','bootstrap.min', 'owl.carousel.min','mousescroll','smoothscroll','jquery.prettyPhoto','jquery.isotope.min','jquery.inview.min','wow.min','main')); ?>
<?= $this->fetch('script');?>
</body>
</html>
