<?php
	session_start();
	if(isset($_SESSION['user_name'])){
		header("Location: dash.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aloha CC - Welcome</title>
		<link rel="icon" href="index_files/AlohaCC-icon.png">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="index_files/uikit.css">
	</head>
	<body class="uk-flex uk-flex-center uk-flex-middle uk-background-muted uk-height-viewport" data-uk-height-viewport>
		<div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
			<p class="uk-text-small uk-text-center">Design Algorithm, BSCS—SS191</a> | <img src="index_files/AlohaCC.png" width="20px" /> Aloha 2020</p>
		</div>
		<div class="uk-width-medium uk-padding-small">
			<div class="toggle-class" style="margin: auto auto; text-align: center; margin-bottom: 40px">
				<img src="index_files/AlohaCC.png" style="width:150px" />
				<h1 class="uk-text-normal uk-text-secondary" style="margin: 0">Aloha!</h1>
			</div>
			<!-- login -->
			<form class="toggle-class" action="login.php">
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
							<input class="uk-input uk-border-pill" name="username" required placeholder="Username" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
							<input class="uk-input uk-border-pill" name="password" required placeholder="Password" type="password">
						</div>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" class="uk-button uk-button-default uk-border-pill uk-width-1-1"
						style="background-color: #32d296; color:white">LOG IN</button>
					</div>
				</fieldset>
			</form>
			<!-- /login -->

			<!-- recover password -->
			<form action="signup.php" method="post" class="uk-grid-small toggle-class" uk-grid hidden>
				<h1 class="uk-text-normal uk-text-secondary" style="margin: 0">Sign Up</h1>
				<div class="uk-width-1-1">
					<input class="uk-input uk-border-pill" name="email" type="email" placeholder="Email">
				</div>
				<div class="uk-width-1-1">
					<input class="uk-input uk-border-pill" name="username" type="text" placeholder="Username">
				</div>
				<div class="uk-width-1-1@s">
					<input class="uk-input uk-border-pill" name="password" type="password" placeholder="Password">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input uk-border-pill" name="weight" required type="number" placeholder="Weight">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input uk-border-pill" name="height" required type="number" placeholder="Height">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input uk-border-pill" name="birthdate" type="date" placeholder="Birthdate">
				</div>
				<div class="uk-width-1-2@s" style="display: inline">
					<input class="uk-input uk-border-pill" name="activityLvl" type="text" placeholder="Lifestyle">
					<a href="" class="uk-icon-link" uk-icon="question" uk-tooltip="Rate your lifestyle from Not Active to Active
					in scale of 1 to 5" style="float: inline-end; margin-top: -30px; margin-right: 10px; color: #32d296"></a>
				</div>
				<div class="uk-margin-bottom uk-margin-top" style="margin: auto auto; text-align: center">
					<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1" style="background-color: #32d296;color:white">Sign Up</button>
				</div>
			</form>
			<!-- /recover password -->
			
			<!-- action buttons -->
			<div>
				<div class="uk-text-center">
					<a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade">No account yet?</a>
					<a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden><span data-uk-icon="arrow-left"></span> Back to Login</a>
				</div>
			</div>
			<!-- action buttons -->
		</div>
		
		<!-- JS FILES -->
		<script src="index_files/uikit.js"></script>
		<script src="index_files/uikit-icons.js"></script>
	</body>
</html>