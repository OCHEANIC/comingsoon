<?php
$page ="Credits";
define('path', '../');
require path.'php/init.php';
if(!isset($_GET['u'])){
	$credit = "";
}
?>
<html>
	<head>
		<title>
			<?php echo $CONFIG['OCHEANICGAMERZ']." &bull; ". strtoupper($page); ?>
		</title>
		<?php include path.'asset/includes/css.php'; ?>
	</head>
	<body class="home">
		
		<div class="main">
			<div class="nav">
				<?php include path.'asset/includes/nav.php';?>
			</div>
			<div class="container">
					<div class="jumbotron">
					<h1>Welcome to <?php echo $CONFIG['OCHEANIC SMP'];?></h1>
					<h4><?php echo $CONFIG['PLAY.OCHEANICSMP.IN'];?></h4>
				</div>
				<div class="home_container">
						<div class="news">
							<h2>News</h2>
							<?php switch ($credit){
								case "0":
							?>
							<div class="panel panel-bg">
								<div class="panel-heading">
									Note
								</div>
								<div class="panel-body">
										Click on any people on the side
									</div>
								</div>
							</div>
							<?php break; ?>
							<?php case "1":?>
							<div class="panel panel-bg">
								<div class="panel-heading">
									OCHEANICGAMERZ
								</div>
								<div class="panel-body">
										Owner And developer of Website 
										<br>
										Minecraft server developer
										<br>
										<b><a href="https://www.github.com/OCHEANIC">Github Page</a></b>
										<b><a href="https://yrnetwork.tk">Minecraft Page</a></b>
									</div>
								</div>
							</div>
							<?php break;?>
							<?php } ?>
						<div class="login">
							<h2>Other</h2>
							<div class="panel panel-bg">
								<div class="panel-heading">
									Roles	
								</div>
								<div class="panel-body">
									<a href="?u=1">OCHEANICGAMERZ</a>	 
								</div>
							</div>
						</div>
				</div>
			</div>
				<?php include path.'asset/includes/footer.php';?>
			
		<?php include path.'asset/includes/scripts.php';?>
	</body>
</html>
