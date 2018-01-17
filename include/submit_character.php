<div id="page">
	<div class="container">
		<div class="row">				
			<div id="content" class="6u skel-cell-important">
				
				<?php
				
				echo ucfirst($_POST["name"]) . " is a " . 
				$_POST["race"]  . " " . $_POST["class"]. ", with " . 
				$_POST["background"] . " background. <br /><br />" . 
				ucfirst($_POST["description"])
												
				?>
						
			</div>
		</div>
	</div>
</div>
	

