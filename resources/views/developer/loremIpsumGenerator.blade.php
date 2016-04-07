
<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8'>

	<title>	Lorem Ipsum Generator
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

		.paragraphs-output {
			margin-top:15px;
		}

		input[type=text] {
			width:35px;
		}


	</style>


</head>
<body>



<div class='container'>


	<a href='/'>&larr; Home</a>

	<h1>Lorem Ipsum Generator</h1>

	How many paragraphs do you want?

	<form method='POST'>

		<input name="_token" type="hidden" >
		<label for="paragraphs">Paragraphs</label>
		<input maxlength="2" name="paragraphs" type="text" value="5" id="paragraphs"> (Max: 99)

		<br><br>

		<input type="submit" value="Generate!">
    </form>



</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>


</body>
</html>
