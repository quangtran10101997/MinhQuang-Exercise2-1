<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exrcise 2</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<div class="content">
		<?php 
			include('Controller/NewController.php');
			$list  = new NewController;
			$array = $list->showdata();
	 	?>
	</div>
</body>
</html>
