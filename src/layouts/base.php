<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sueno Villas">
	<meta name="keywords" content="la union, beach, resort, beach resort, la union resort, la union tourist, la union baguio, hotels, la union hotels, la union beach, la union beach resort, villa, la union villa, la union resorts hotel">
	<meta itemprop="image" content="https://res.cloudinary.com/dm5wejdp9/image/upload/v1705045790/hr5axijohuwxbj4ywlja.png">
	<meta name="twitter:image" content="https://res.cloudinary.com/dm5wejdp9/image/upload/v1705045790/hr5axijohuwxbj4ywlja.png">
	<meta property="og:image" content="https://res.cloudinary.com/dm5wejdp9/image/upload/v1705045790/hr5axijohuwxbj4ywlja.png">
	<meta property="og:image:alt" content="https://res.cloudinary.com/dm5wejdp9/image/upload/v1705045790/hr5axijohuwxbj4ywlja.png">

	<title> <?php echo $site_name; ?> </title>
	<?php include './layouts/styles.php'; ?>
	<link rel="shortcut icon" href="./assets/img/logo/favicon.ico">
</head>

<?php if ($in_concat == true) { ?>

	<body class=" scroll-smooth">
		<div class="">
			<?php echo $content; ?>
		</div>
	<?php } else { ?>

		<body class=" scroll-smooth">
			<div class="page">

				<?php echo $content; ?>

			</div>
		<?php } ?>
		</body>

</html>