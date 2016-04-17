
<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8'>

	<title>	User Generator
</title>

	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<style>
		a:link {
			text-decoration:underline;
		}
	</style>


	<style>

		.container {
			margin-top:15px;
		}

		.users {
			margin-top:15px;
		}

		.user {
			margin-bottom:5px;
		}

		input[type=text] {
			width:35px;
		}

		.name {
			font-weight:bold;
		}

		.profile {
			font-style:italic;
		}

	</style>


</head>
<body>



<div class='container'>


	<a href='/'>&larr; Home</a>

	<h1>User Generator</h1>

	<form method="POST" action="practiceUserGenerator">
		{{ csrf_field() }}
		<label for="users">How many users?</label>
		<input maxlength="2" name="users" type="text" value="5" id="users"> (Max: 99)
		<br>

		Include...
		<br>
		<input name="birthdate" type="checkbox">
		<label for="birthdate">Birthdate</label>
		<br>

		<input name="profile" type="checkbox">
		<label for="profile">Profile</label>
		<br>

		<input name="_token" type="hidden">
		<input type="submit" value="Generate!">
    </form>



</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>


</body>
</html>
