<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base href="../../">
		<title>MyNetwork: Log In or Sign Up</title>
		<link rel="stylesheet" type="text/css" href="resources/css/homepage.css">
	</head>
	<body>
		<div id="navigation">
			<div id="logo">
				<p>
					<span style="cursor: pointer">
						<span id="logo_design">My</span>Network
					</span>
				</p>
			</div>
			<div id="registration">
				<div id="sign_in_buttons" class="top_menu">
					<button type="submit" id="join" class="join" name="join" value="join" formaction="signup.php">Join now</button>
					<button type="submit" id="sign_in" name="sign_in" class="sign_in" value="sign_in" formaction="signin.php">Sign in</button>
				</div>			
			</div>
		</div>
		<div id="content">
			<div id="content-message">
				<span id="message">Welcome to your professional community!</span>
				<div id="search_box_div">
					<img id="search_icon" src="resources/icons/search_icon.png" style="cursor: pointer;" />
					<input type="text" name="search_box" id="text_box" placeholder="Find People" />			
				</div>
			</div>
			<div id="network-img">
				<img id="network_pic" src="resources/images/network_pic.jpg" />
			</div>
		</div>
	</body>
</html>
