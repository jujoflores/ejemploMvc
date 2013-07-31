<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $config->get('projectName')?></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1><?php echo $this->lang->translate('title')?></h1>
			</div><!-- #header-->
			<div id="middle">
				<div id="container">
					<div id="content">
						<h2><?php echo $this->lang->translate('users')?></h2>
						<?php foreach($this->users as $user){?>
							<div>
							<?php echo $user['name']?>
							</div>
						<?php }?>
					</div><!-- #content-->
				</div><!-- #container-->
			</div><!-- #middle-->
		</div><!-- #wrapper -->
	</body>
</html>
