<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('The Shape calculator'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		<h1 style="color:black"><?php echo 'The Shape Calculator';  ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

			<?php
echo "<h2>Welcome to Shape Calculator<br><br></h2>

<b>Shape Calculator is an interactive web application. To the right you will
find the 3 step application. Follow the instructions in each step.
Clicking cancel will take you back to step 1. Enjoy!<br><br></b>

A small river named Duden flows by their place and supplies it with the
necessary regelialia. It is a paradisematic country, in which roasted parts of
sentences fly into your mouth.<br><br>
Even the all-powerful Pointing has no control about the blind texts it is an
almost unorthographic life One day however a small line of blind text by the
name of Lorem Ipsum decided to leave for the far World of Grammar.The
Big Oxmox advised her not to do so, because there were thousands of bad
Commas."

?>
		</div>
		<div id="footer" style="width:70px; height:20px;">
			<?php echo $this->Html->image('cake.power',array('width'=>'70px', 'height'=>'20'));
			
			?>
		</div>
	</div>
	
</body>
</html>
