<!--Welcome to The Shape Calculator application

Author:Trupti Kini
License:Creative Commons

This page outputs the area of the selected shape-->

<!DOCTYPE html>
<html lang="en-US">
<head>
</head>
<body>
	<div class="block">
		<?php
			if(isset($_GET['arear'])) 
			{
				echo $this->Form->input('The area of the Rectangle is',array( 'disabled' => 'disabled' , 'value' => $_GET['arear']));
			}

			elseif(isset($_GET['areac']))
			{
				echo $this->Form->input('The area of the Circle is',array( 'disabled' => 'disabled' , 'value' => $_GET['areac']));
			}

			elseif(isset($_GET['areas']))
			{
				echo $this->Form->input('The area of the Square is',array( 'disabled' => 'disabled' , 'value' => $_GET['areas']));
			}

			elseif(isset($_GET['areae']))
			{
				echo $this->Form->input('The area of the Elipse is',array( 'disabled' => 'disabled' , 'value' => $_GET['areae']));
			}

                        echo $this->Html->link('Previous step', 
	                                array('action' => 'sc_step', 0), 
	                                array('class' => 'button')
                                	);
		?>
	</div>
</body>
</html>
