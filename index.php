<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Staging Server</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		

		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">BPDev Staging Server</a>
			</div>
		
		</nav>

		<h3 class="text-center">
			Please select a project below
			<hr>
		</h3>

		<?php 
		$rootContents = scandir('/var/www/html');

		$folders = array();
		foreach($rootContents as $item){
			if(count(explode('.', $item)) == 1){
				$folders[] = $item;
			}
		}

		// var_dump($folders);

		// var_dump($projects);

		?>

		<div class="container">
			
			<?php foreach($folders as $folder):?>
				<div class="col-md-3 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<i class="glyphicon glyphicon-folder-open" style="font-size: 50px;"></i>
						</div>
						<div class="panel-footer">
							<a href="<?=$folder?>" class="btn btn-default btn-block"><?=$folder?></a>
						</div>
					</div>
				</div>
			<?php endforeach;?>

		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>