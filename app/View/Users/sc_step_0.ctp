<!--Welcome to The Shape Calculator application

Author:Trupti Kini
License:Creative Commons

This page will display the shapes. User can select the shape and go to the next step-->

<!DOCTYPE html>
<html lang="en-US">
	<head>
	</head>
	<body>
		<div class="block">
			<?php
				echo $this->Form->create('User');
				$options = array('1' => 'Rectangle','2' => 'Circle','3' => 'Square','4' => 'Eclipse');
				echo $this->Form->input('Select the shape', array('type' => 'radio', 'options' => $options,'class'=>'shape'));
				echo $this->Form->end('Click Here'); 
			?>
		</div>
	</body>
</html>

