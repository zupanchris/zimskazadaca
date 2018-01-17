<div id="page">
	<div class="container">
		<div class="row">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
				<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-expanded="true">Profile</a>
				<a class="nav-link" id="v-pills-update-tab" data-toggle="pill" href="#v-pills-update" role="tab" aria-controls="v-pills-update" aria-expanded="true">Update Profile</a>
				<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-expanded="true">Messages</a>
				<a class="nav-link" id="v-pills-favorite-tab" data-toggle="pill" href="#v-pills-favorite" role="tab" aria-controls="v-pills-favorite" aria-expanded="true">Favorite Characters</a>
				<a class="nav-link" id="v-pills-mycharacters-tab" data-toggle="pill" href="#v-pills-mycharacters" role="tab" aria-controls="v-pills-mycharacters" aria-expanded="true">My Characters</a>
			</div>
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<span class="profile"><img src="images/profile.png">
						<br>
						<input type="file" name="img">
						<br>
						<article id="profile">
							<?php
$FirstName = $_POST["FirstName"];
$FirstName = ucfirst(strtolower($FirstName));
$LastName = $_POST["LastName"];
$LastName = ucfirst(strtolower($LastName));
$FavClass = $_POST["FavClass"];
$FavClass = ucfirst(strtolower($FavClass));
$FavRace = $_POST["FavRace"];
$FavRace = ucfirst(strtolower($FavRace));
$FavGame = $_POST["FavGame"];
$FavGame = ucfirst(strtolower($FavGame));
$Country = $_POST["Country"];
$Country = ucfirst(strtolower($Country));
$City = $_POST["City"];
$City = ucfirst(strtolower($City));
$GameMaster = $_POST["GameMaster"];
							?>
							</article>
							</span>
							</div>
							<div class="tab-pane fade" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update-tab">
							<form action="bootstrap.php" method="post">
							<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputFirstName">First Name</label>
							<input type="text" class="form-control" id="inputFirstName" name="FirstName" placeholder="First Name..">
							</div>
							<div class="form-group col-md-6">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" id="inputLastName" name="LastName" placeholder="Last Name..">
							</div>
							</div>
							<div class="form-group">
							<label for="inputFavClass">Favorite Class</label>
							<input type="text" class="form-control" id="inputFavClass" name="FavClass" placeholder="Favoreite Class..">
							</div>
							<div class="form-group">
							<label for="inputFavRace">Favorite Race</label>
							<input type="text" class="form-control" id="inputFavRace" name="FavRace" placeholder="Favorite Race..">
							</div>
							<div class="form-group">
							<label for="inputFavGame">Favorite Game</label>
							<input type="text" class="form-control" id="inputFavGame" name="FavGame" placeholder="Favorite Game..">
							</div>
							<div class="form-row">
							<div class="form-group col-md-12">
							<label for="inputState">Are You Game Master?</label>
							<select id="inputState" name="GameMaster" class="form-control">
							<option>Yes</option>
							<option>No</option>
							<option>Learning to become one</option>
							<option>Recently started</option>
							<option>None of the above</option>
							</select>
				</div>
				<div class="form-group col-md-6">
					<label for="inputCountry">Country</label>
					<input type="text" class="form-control" id="inputCountry" name="Country">
				</div>
				<div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity" name="City">
				</div>
			</div>
			<button type="submit" class="button">
				Update
			</button>
			</form>
		</div>
		<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			You have (0) new messages.
		</div>
		<div class="tab-pane fade" id="v-pills-favorite" role="tabpanel" aria-labelledby="v-pills-favorite-tab">
			Your favorite Characters.
		</div>
		<div class="tab-pane fade" id="v-pills-mycharacters" role="tabpanel" aria-labelledby="v-pills-mycharacters-tab">
			Manage Your Characters.
		</div>
	</div>

</div>

</div>
</div>
</div>