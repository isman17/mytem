<!DOCTYPE html>
<html>
<head>
	<title>HelpDesk</title>
	<link rel="icon" type="image/png" href="../img/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.icon.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> -->
	<script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
        $(document).ready(function(){
    		$('.scrollspy').scrollSpy();
		});
	</script>
</head>
<body>
	<div class="navbar-fixed">
		<nav class="purple darken-4">
			<div class="nav-wrapper z-depth-4">
				<ul class="left">
					<li><a href="../"><i class="left material-icons">home</i>Home</a></li>
				</ul>
				<ul class="right">
					<li><a href="#" class="dropdown-button" data-activates="menu"><i class="material-icons">more_vert</i></a></li>
				</ul>
				<ul id="menu" class="dropdown-content">
					<li><a href="#!" class="center"><i class="right material-icons">info</i>Info</a></li>
				</ul>
			</nav>
		</nav>
	</div>

	<div class="fixed-action-btn">
		<a href="#" class="btn-floating btn-large waves-effect waves-teal purple darken-4 z-depth-4">
			<i class="material-icons">arrow_upward</i>
		</a>
		<ul>
			<li><a href="add.php" class="btn-floating waves-effect waves-teal red darken-2 z-depth-4"><i class="material-icons" title="Create New Ticket">add</i></a></li>
			<li><a href="" class="btn-floating waves-effect waves-teal green darken-2 z-depth-4"><i class="material-icons">refresh</i></a></li>
		</ul>
	</div>

	<main>