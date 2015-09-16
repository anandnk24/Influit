<?php
	error_reporting(0);
	$_POST['message'];
	$_POST['comment'];
?>

<html>
	<head>
	<link rel="stylesheet" href="first.css" />
	<h1 class="title"> Influit </h1>
	</head>

	<body>
		
		<div class="posts">
		<p> Search results continue to include people’s profiles as well as pertinent Facebook pages, groups and applications. Therefore what you’ve done to date still works. The gravity of Facebook groups, which some thought lame, will increase as Facebook internal search is adopted. </p> 
		
		<h4 class="comment"> Facebook is indeed an important tool! </h4>

		<p> While advertising a google product make sure you link to them directly into the feature (google docs, google slides, google sheets, etc). </p>
		<p> If you advertise Apple products, make sure you list out its features and important  charactersitcs so people in your network can know a lot about the product beforehand. </p>
		<p>  Wall-post external content like blog posts and news should be optimized for important keywords, especially the content’s title tag. </p>
		<p> If you want your promotional data indexed in the wider Facebook, outside of your friends, make sure you select “everyone” in privacy settings > search. </p>
		<p> <?php error_reporting(0); echo $_POST['message']; ?> </p>
		</div>
		<form method = "POST" action="">
			<textarea class="form" name="message" rows="5" cols="50"></textarea>
			<input class="submit form" type="submit" name="submit" value="Submit!"
			/>
		</form>
	</body>
</html>




