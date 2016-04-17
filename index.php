<?php
	$jsondata = file_get_contents("movies.json");
	$json = json_decode($jsondata, true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Exercise with php and json</title>
    <!-- Latest compiled and minified CSS -->

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Bootstrap theme -->
</head>
  <body>
			<div class="container">
				<h1><b>Movies</b></h1>
				<ul class="list-group">
					<?php
							foreach ($json['movies'] as $key => $value) {
								echo '<h4><b>' . $value['title'] . '</b></h4>';
								echo '<li class="list-group-item list-group-item-success"><b>Year:</b>'. ' ' .$value['year'].'</li>';
								echo '<li class="list-group-item list-group-item-info"><b>Genre:</b>' . ' ' .$value['genre'].'</li>';
								echo '<li class="list-group-item list-group-item-warning"><b>Director:</b>' . ' ' .$value['director'].'</li>';
							}
					 ?>
				</ul>
			</div>
    <!-- jQuery (Must for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
