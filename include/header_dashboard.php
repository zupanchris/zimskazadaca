<div id="header-wrapper">
		
        	<div id="header" class="container">
            
            	<div id="logo"><h1><a href="../index.php"><img src="../images/headline.png" height="50"/img></a></h1></div>
                <nav id="nav">
                    <ul>
                        <li><a href="../index.php">Homepage</a></li>
                        <li><a href="../creator.php">Character Creator</a></li>
                        <li><a href="../top.php">Top Characters</a></li>
                        <li><a href="../request.php">Request Art</a></li>
                        <li class="current_page_item"><a href="../profile.php">Profile</a></li>
                        <?php if(!isset($_SESSION["authorized"])): ?>
	  					<li><a href="<?php echo $sourceAPP; ?>../login.php" class="button">Log In</a></li>
	  					<?php else: ?>
	  					<li><a href="<?php echo $sourceAPP; ?>../logout.php" class="button">Log Out</a></li>
	  					<?php endif;?>
						</div>
                    </ul>
                </nav>
                
            </div>

		</div>