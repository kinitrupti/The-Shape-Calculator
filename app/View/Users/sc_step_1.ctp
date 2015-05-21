<!--Welcome to The Shape Calculator application

Author:Trupti Kini
License:Creative Commons

If user selects Rectangle, then this page inputs Length & Breadth from user-->

<!DOCTYPE html>
<html lang="en-US">
	<head>
	</head>
        <body>
                <div class="block">
                        <?php
                                echo $this->Form->create('User');
                                
				echo $this->Form->input('Length');
                                echo $this->Form->input('Breadth');

                                echo $this->Html->link('Previous step', 
	                                array('action' => 'sc_step', 0), 
	                                array('class' => 'button')
                                );
	                        
				echo $this->Form->submit(__('Submit',true), array('class'=>'some class')); 
                                echo $this->Form->end();
                        ?>
                </div>
        </body>
</html>        
