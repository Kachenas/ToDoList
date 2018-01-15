<?php 

$todos = file_get_contents('assets/todos.json'); // get contents from json
$todos = json_decode($todos, true);//convert to javascript object



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Sample Json</title>
	
	<script src="https://use.fontawesome.com/acc6bc0537.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Yanone+Kaffeesatz" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<div class="wrapper">
		<div class="wrapper1">
		<h1><i class="fa fa-plus-circle" aria-hidden="true"></i> To Do List</h1>
		<input id="newTask" type="text" placeholder="Your task">
		</div>
		<div class="wrapper2">
			<h2><i class="fa fa-tasks" aria-hidden="true"></i> *Tasks List*</h2>
			<ul>
				<?php 

					foreach ($todos as $key => $todo) {
						if ($todo['done'] === false) {
							echo '<li id=' . $key . '><span><i class="fa fa-trash" aria-hidden="true"></i></span>'.$todo['task'].'<li><br>';
						}else {
							echo '<li id=' . $key . 'class=completed><span><i class="fa fa-trash" aria-hidden="true"></i></span>'.$todo['task'].'<li><br>';
						}
					}

				 ?>
			</ul>
		</div>

	</div>

	




	<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>
		
	<script type="text/javascript" src="assets/js/todos.js"></script>
	
</body>
</html>