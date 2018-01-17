<div id="page">
	<div class="container">
		<div class="row">
			<div id="login_form" class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-6 cell">
						<h1>Log In</h1>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-8 small-12 cell">

						<form action="authorize.php" method="post">
							<div class="grid-x grid-padding-x">
								<div class="large-6 small-12 cell">
									<input type="text" placeholder="Username" id="username"  name= "username" value="<?php
									if (isset($_GET["username"])) {
										echo $_GET["username"];
									}
 ?>" required/>
								</div>
							</div>
							<div class="grid-x grid-padding-x">
								<div class="large-6 small-12 cell">
									<input type="password" placeholder="Password" id="pwd" name="password" required/>
								</div>
							</div>
							<input type="submit" name="submit" value="Log In">
							<br />
							<?php
								if (isset($_GET["failure"])) {
									echo "Wrong Username/Password combination";
								}
							?>
							<br />
							<label>Not a member yet?</label>
							<br />
							<a href="register.php" class="button">Register here</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

