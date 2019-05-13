<?
	use application\layouts\helpers\HeaderMenu;
	$menu = new HeaderMenu;

	$account = 'Вход';
	if(isset($_SESSION['auth']) && $_SESSION['auth'] !== null):
		$account = 'Кабинет';
	endif;
?>

<header id="header">
	
</header>