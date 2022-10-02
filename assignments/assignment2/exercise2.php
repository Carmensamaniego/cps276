<?php

$title = "Assignment 2: My web page";
$headingOne = "My Web Page";
$loopText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan elit. Proin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, iaculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas.";
$myName = "Carmen Samaniego";
$footer = "My Web Page"

/*function loop() {
    for ($i = 0; $i <= 3; $i++) {
    echo $loopText;
        }
}*/

//$printLoop = for(i = 0; i < 3; i++) {echo $loopText};

//$printLoop = loop();

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>&lt;<?php echo $title ?>&gt;</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $headingOne ?></h1>
		</header>
		<main>
			<h2>My name is <?php echo $myName ?></h2>
			<p><?php echo $loopText ?></p>
			
		</main>
		<footer>
			<p><?php echo $footer ?> &copy 2022</p>
		</footer>
	</div>
	
</body>
</html>