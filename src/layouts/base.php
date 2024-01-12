<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include './layouts/meta.php'; ?>

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