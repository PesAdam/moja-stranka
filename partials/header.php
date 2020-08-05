<?php
    $nazov = basename($_SERVER['SCRIPT_NAME'], '.php'); 
    if ($nazov == 'index')  $nazov='home';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?php echo  ucfirst($nazov); ?> | Pes Adam </title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $nazov; ?>">
	<header class="site-header">
		<nav class="container">
			<ul class="menu">

            <?php
				$stranky = glob('*php');
				$stranky = array_reverse($stranky);
				foreach ($stranky as $file){
					
					$page = basename($file, '.php');
					
					if($page == 'index') $page = 'home';

					if($nazov == $page) echo '<li> <strong>'.ucfirst($page).'</strong> </li>';
					else echo '<li> <a href="'.$file.'">'.ucfirst($page).'</a> </li>';
				}
            ?>    
			</ul>
		</nav>
	</header>

	<main>