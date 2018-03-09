<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Pendaftaran Global Host</title>
</head>
<body style="background-image:url(http://papers.co/wallpaper/papers.co-mh70-cityscape-skyline-high-buildings-skyscrapers-sunset-35-3840x2160-4k-wallpaper.jpg);
background-size: cover; 
background-repeat: no-repeat; 
background-attachment: fixed;
background-position: center">
<div style="margin-top: 5%; margin-bottom: 3%; margin-right: 20%; margin-left: 20%; border-bottom: 5%; border: solid #333 1px;">	
	<h1 style="color: white; font-size: 40px; text-align: center;">HOSTING VOLUNTEER REGISTRATION</h1>
</div>
<div style="margin-right: 15%; margin-left: 15%; margin-bottom: 10%; padding: 10px; background: rgba(234, 237, 242, 0.5)">	
	<form method="POST" action="responses.php" enctype="multipart/form-data">

		<div class="form-group">
			<label for="fullname">Full Name</label>
			<input type="fullname" class="form-control" id="fullName" name="fullname" placeholder="Enter Your Full Name">
		</div>

		<div class="form-group">
			<label for="nickname">How could we address you?</label>
			<input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="Enter Your Nickname">
		</div>
		<p>Gender</p>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
			<label class="form-check-label" for="male">
				Male
			</label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
			<label class="form-check-label" for="female">
				Female
			</label>
		</div>
		<br>
		<div class="form-group">
			<label for="phonenumber">Phone Number</label>
			<input type="NIM" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
		</div>
		<div class="form-group">
			<label for="EmailPendaftar">Email</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
		</div>
		
		<p>City</p>
		<div class="form-group">
			<select class="form-control" name="city">
				<option>Malang</option>
				<option>Surabaya</option>
				<option>Jakarta</option>
				<option>Bandung</option>
			</select>
		</div>

		<p>Interested in (max 2)</p>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="Wherever Needed" name="keahlian[]" value="Whenever Needed">
			<label class="form-check-label" for="Whereverneeded">Wherever Needed</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Decoration" name="keahlian[]" value="Decoration">
			<label class="form-check-label" for="Decoration">Decoration</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Game" name="Keahlian[]" value="Game">
			<label class="form-check-label" for="Game">Game</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Food" name="keahlian[]" value="Food">
			<label class="form-check-label" for="Food">Food</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Arts" name="keahlian[]" value="Arts">
			<label class="form-check-label" for="Arts">Arts</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Others" name="keahlian[]" value="Others">
			<label class="form-check-label" for="others">Others</label>
		</div>
		<br>
		<div class="form-group">
			<label for="offers">I can offer the following skills, knowledge and expertise</label>
			<textarea class="form-control" id="offers" rows="3" name="offer" placeholder="Please tell us about yourself"></textarea>
		</div>
		<div class="form-group">
			<label for="reasons">My reason for getting involved</label>
			<textarea class="form-control" id="reasons" rows="3" name="reason" placeholder="Please tell us what you hope to gain from volunteering with us"></textarea>
		</div>
			

		<div class="form-group">
			<label for="picture">Upload Picture</label>
			<input type="file" class="form-control-file" id="picture" name="picture">
		</div>
		<button type="Bloomer" class="btn btn-primary">Volunteer Now</button>

	</form>
</div>
</body>
</html>