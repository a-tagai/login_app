<?php

require_once(__DIR__ . '/../lib/Core/head.php');

$app = new App\Controller\Signup();
$app->run();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="assets/bootstrap-social/bootstrap-social.css">

	</head>
	<body>
	<?php require_once(__DIR__ . '/common/header.php'); ?>
	<div class="container">
		<h1 class="text-center">新規登録</h1>
		<?php if($app->hasErrors()): ?>
			<div class="alert alert-danger">
			<p><?= h($app->getErrors('message'));?></p>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-sm">
				<form action="" method="post">
					<div>
						<div class="form-group">
							<label class="control-label">Email:</label>
							<input type="text" class="form-control" name="user_email" value="<?= isset($app->getValues()->user_email) ? h($app->getValues()->user_email) : '';  ?>" placeholder="sample@example.com">
						</div>
						<div class="form-group">
							<label class="control-label">PASS:</label>
							<input type="password" class="form-control" name="user_password" value="" placeholder="****">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name="" value="サインアップ">
						</div>
					</div>
					<input type="hidden" name="token" value="<?= h($_SESSION['token']);?>">
				</form>
				<a href="login.php" title="">ログイン</a>
			</div>
		</div>
	</div>


	<!-- jQuery -->
	<script src="assets/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>