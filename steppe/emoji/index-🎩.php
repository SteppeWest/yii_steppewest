<!DOCTYPE html>
<html lang="en">
<?php
	/**
	 🎩
		http://xn--9k8h.development.localhost
		http://🎩.pedro.id.au
	 😈
		http://xn--m28h.development.localhost
		http://😈.pedro.id.au
	 */

	$host = $_SERVER['HTTP_HOST'];
	$subDom = substr($host , 0, strpos ($host , '.'));

	$data = [];

	switch ($subDom) {
		case 'xn--9k8h':
			$data['title'] = '🎩.pedro.id.au';
			$data['class'] = 'em-svg em-tophat';
			$data['label'] = 'TOP HAT';
			break;
		case 'xn--m28h':
			$data['title'] = '😈.pedro.id.au';
			$data['class'] = 'em-svg em-smiling_imp';
			$data['label'] = 'SMILING FACE WITH HORNS';
			break;
}
?>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><? echo $data['title'] ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://emoji-css.afeld.me/emoji.css" integrity="sha384-BNYxyYfvvmVpO2r4OU2lMGoMMRUHwy6bLIw5d3i0xRaHt3wl0tzD28SdcI21lVWw" crossorigin="anonymous">
	<link href="css/heroic-features.min.css" rel="stylesheet">

</head>

<body>
	<div class="container">

		<header class="jumbotron my-4">
			<h1 class="lead display-1 text-center">
				<i class="<? echo $data['class'] ?>" aria-role="presentation" aria-label="<? echo $data['label'] ?>"></i>
			</h1>
		</header>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>

</html>
