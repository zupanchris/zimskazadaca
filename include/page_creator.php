<div id="page">
	<div class="container">
		<div class="row">

			<div id="creator" class="6u skel-cell-important">
				<form action="created.php" method="post">
					<div class="form-group">
						<label for="name">Enter Your Character Name</label>
						<input type="text" name="name" required>
						</input>
					</div>
					<div class="form-group">
						<label for="race">Select Your Race</label>
						<select class="form-control" name="race">
							<optgroup label="Dwarfs">
								<option >Hill Dwarf</option>
								<option>Mountain Dwarf</option>
							</optgroup>
							<optgroup label="Elfs">
								<option>High Elf</option>
								<option>Wood Elf</option>
								<option>Dark Elf (Drow)</option>
							</optgroup>
							<optgroup label="Halflings">
								<option>Lightfoot Halfling</option>
								<option>Stout Halfling</option>
							</optgroup>
							<optgroup label ="Gnomes">
								<option>Forest Gnome</option>
								<option>Rock Gnome</option>
							</optgroup>
							<optgroup label= "Other Playable Races">
								<option>Human</option>
								<option>Dragonborn</option>
								<option>Half-Elf</option>
								<option>Half-Orc</option>
								<option>Tiefling</option>
							</optgroup>
						</select>
					</div>

					<div class="form-group">
						<label for="class">Select Your Class</label>
						<select class="form-control" name="class">
							<option>Barbarian</option>
							<option>Bard</option>
							<option>Cleric</option>
							<option>Druid</option>
							<option>Fighter</option>
							<option>Monk</option>
							<option>Paladin</option>
							<option>Ranger</option>
							<option>Rogue</option>
							<option>Sorcerer</option>
							<option>Warlock</option>
							<option>Wizard</option>
						</select>
					</div>

					<div class="form-group">
						<label for="background">Select Your Background</label>
						<select class="form-control" name="background">
							<option>Acolyte</option>
							<option>Charlatan</option>
							<option>Criminal</option>
							<option>Entertainer</option>
							<option>Folk Hero</option>
							<option>Guild Artisan</option>
							<option>Hermit</option>
							<option>Noble</option>
							<option>Sage</option>
							<option>Sailor</option>
							<option>Soldier</option>
							<option>Urchin</option>
						</select>
					</div>
					<div class="form-group">
						<label for="description">Enter Your Character Description</label>
						<textarea id="subject" name="description" placeholder="Describe your character.." style="height:200px" required></textarea>
					</div>

					<input type="submit" value="Submit Character">
				</form>

				<?php
				$name = ucfirst(strtolower($name));
				$name = $_POST["name"];
				$race = $_POST["race"];
				$class = $_POST["class"];
				$background = $_POST["background"];
				$description = $_POST["description"];
				?>
			</div>
		</div>
	</div>
</div>