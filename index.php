<?php 
	// I'm including composer's generated autoload.php so I have access to any library I install.
	require("vendor/autoload.php");	
	// I'm telling twig where my templates are located. In my case, it's the 'myTemplates' folder. 
	$loader = new \Twig\Loader\FilesystemLoader('myTemplates');
	// I'm setting up the actual twig environment. 
	$twig = new \Twig\Environment($loader);
	// Just some data that I randomly came up with. Notice that it is a nested array that has a key "people" in it. 
	$myData = ["people"=>["Jill", "Jan", "Bob", "Frank"]];
	// This tells twig which file I want to load up. 
	$template = $twig->load("class.html.twig");
	// I pass my array of people to the render method to turn my curly brackets into actual data. 
	echo $template->render($myData);
?>
