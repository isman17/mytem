<!DOCTYPE html>
<html>
<head>
	<title>MyTem</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="msapplication-TileColor" content="#9C27B0">
	<meta name="theme-color" content="#9C27B0">
	<link rel="apple-touch-icon" sizes="180x180" href="v2/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="v2/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="v2/img/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="v2/img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="icon" type="image/png" href="img/favicon-32x32.png">
	<link rel="mask-icon" href="v2/img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/material.css">
	<link rel="stylesheet" type="text/css" href="css/material.icon.css">
	<link rel="stylesheet" type="text/css" href="css/material.min.purple.css">
	<link rel="manifest" href="manifest.json">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/material.js"></script>
</head>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header class="mdl-layout__header mdl-shadow--8dp">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title"><a href="../">MyTemV2</a></span>
			<div class="mdl-layout-spacer"></div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
				<form action="">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input type="text" class="mdl-textfield__input" id="fixed-header-drawer-exp">
					</div>
				</form>
			</div>
			<button id="menu" class="mdl-button mdl-js-button mdl-button--icon">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu">
				<li class="mdl-menu__item"><a href="signout">SignOut</a></li>
				<li class="mdl-menu__item"><a href="signin">SignIn</a></li>
				<li class="mdl-menu__item"><a href="signup">SignUp</a></li>
			</ul>
		</div>
	</header>

	<div class="mdl-layout__drawer">
		<span class="mdl-layout-title">MyTemV2</span>
		<nav class="mdl-navigation">
			<a href="helpdesk/" class="mdl-navigation__link">HelpDesk</a>
			<a href="inventory/" class="mdl-navigation__link">Inventory</a>
			<a href="server/" class="mdl-navigation__link">Server</a>
		</nav>
	</div>
	
</div>
<br><br><br>

<main class="mdl-layout__content">