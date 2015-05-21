<!--Welcome to The Shape Calculator application

Author:Trupti Kini
License:Creative Commons

If user selects Elipse, then this page inputs a Axis and b Axis from user-->

<!DOCTYPE html>
<html lang="en-US">
	<head></head>
	<body>
		<div class="block">
			<?php
				echo $this->Form->create('User');

				echo $this->Form->input('a Axis');
				echo $this->Form->input('b Axis');

				echo $this->Html->link('Previous step', 
							array('action' => 'sc_step', 0), 
							array('class' => 'button')
							);

				echo $this->Form->end('Click Here'); 
			?>
		</div>
	</body>
</html>
