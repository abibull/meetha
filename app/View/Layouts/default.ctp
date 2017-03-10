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

#$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
#$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
        MEETHA HAI | Sweet Shop
	</title>
	<?php
	    #echo $this->Html->meta('icon');
	    echo $this->Html->meta('favicon.ico','/img/title_icon.ico',array('type'=>'icon'));

		echo $this->Html->css(array('bootstrap.min','animate.min','font-awesome.min','dataTables.responsive','dataTables.bootstrap.min','dataTables','style.default','owl.carousel','owl.theme','owl.transitions','car'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
	    <?php echo $this->element('top'); ?>
	    <?php echo $this->element('nav');?>
		<div id="header">
			<!--h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1-->
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
        <?php echo $this->element('foot');?>
	</div>

	<!--?php echo $this->element('sql_dump'); ?-->


	<?php
	    echo $this->Html->script('jquery.min');
	    echo $this->Html->script('bootstrap.min');
	    echo $this->Html->script("jquery.dataTables.min.js");
	    echo $this->Html->script("dataTables.responsive");
	    echo $this->Html->script("dataTables.bootstrap.min.js");
	    echo $this->Html->script('bootstrap-hover-dropdown');
        echo $this->Html->script('owl.carousel.min');
        echo $this->Html->script('respond.min');

	    echo $this->Html->script('jquery.cookie');
	    echo $this->Html->script('waypoints.min');
        echo $this->Html->script('modernizr');
	    echo $this->Html->script('front');

	?>
</body>
</html>