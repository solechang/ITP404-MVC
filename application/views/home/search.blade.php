<!doctype html>
<html>
<head>
	<title>Twitter Search App</title>
</head>
<body>
	<div id="container">
		<div id="searchpage">
			<h1>Twitter Search Page</h1>
			<form action="<?php echo URL::to('twitter/results') ?>" method="get">
				<input type="text" name="search-term">
				<input type="submit" value="Search">
			</form>
		</div>
		<div id="database">
			<h1>Twitter DB</h1>
			<?php foreach($userTwitters as $userTwitter): ?>
				<div class="user">
						<p><a href="<?php echo URL::to('twitter/results') . '?search-term=' . $userTwitter->username ?>" >
						 <?php echo  $userTwitter->username ?> </a> <?php echo $userTwitter->realname ?></p>
						
				</div>
			<?php endforeach ?>
		</div>
	
	</div>

</body>
</html>