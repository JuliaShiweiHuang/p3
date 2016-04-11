<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8'>

	<title>	Practice Page
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

	<h1>Lorem Ipsum Generator </h1>
	<h4>How many paragraphs do you want?</h4>
	<form method='POST' action='practiceLoremIpsum'>
		{{ csrf_field() }}
		<label for="number_of_paragraphs">Paragraphs</label>
		<input maxlength="2" type="text" name="number_of_paragraphs" id="number_of_paragraphs">
		<br><br>
		<input type="submit" value="Generate">
	</form>
	<h3>
		<?php
			if(isset($_POST['number_of_paragraphs'])) {
				foreach($paragraphs as $paragraph) {
				   echo $paragraph;
				   echo "<br>";
			   }
			}
		?>
	</h3>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>


</body>
</html>
