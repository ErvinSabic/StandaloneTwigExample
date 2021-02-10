<?php 
	require("vendor/autoload.php");	
	$loader = new \Twig\Loader\FilesystemLoader('myTemplates');
	$twig = new \Twig\Environment($loader);

	$myData = ["people"=>["Jill", "Jan", "Bob", "Frank"]];
	$template = $twig->load("class.html.twig");

	echo $template->render($myData);
?>
