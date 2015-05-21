<!--Welcome to The Shape Calculator application

Author:Trupti Kini
License:Creative Commons

If user selects Circle, then this page inputs Diameter from user-->

<!DOCTYPE html>
<html lang="en-US">

	<head></head>
	<body>
		<div class="block">
			<?php
				echo $this->Form->create('User');
				echo $this->Form->input('Diameter');


				echo $this->Html->link('Previous step', 
					array('action' => 'msf_step', 0), 
					array('class' => 'button')
				);
					echo $this->Form->end('Click Here'); 
			?>
		</div>
	</body>
</html>
