<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?= $this->asset->getMetaDesc() ?>">
	<meta name="keywords" content="<?= $this->asset->getMetaKeys() ?>">
	<title><?= $title ?></title>
	<link rel="shortcut icon" href="/public/images/icons/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="/public/style/css/main.css">
	<link rel="stylesheet" href="/public/style/css/bootstrap/bootstrap-grid.css">
	<link rel="stylesheet" href="/public/style/css/bootstrap/bootstrap.css">
	<script type="text/javascript" src="/public/style/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="/public/style/js/app.js"></script>
</head>
<body>
	<? include 'application/layouts/helpers/header.php' ?>
	<main>
		<div id="wrapper">
			<?= $content ?>
		</div>
	</main>
	<? include 'application/layouts/helpers/footer.php' ?>
	<script type="text/javascript" src="/public/style/js/bootstrap/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="/public/style/js/bootstrap/bootstrap.js"></script>
</body>
</html>