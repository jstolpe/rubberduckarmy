<!DOCTYPE html>
<html>
	<head>
		<!-- html title -->
		<title>
			<?php echo $html_title; ?>
		</title>

		<!-- meta tags -->
		<meta name="viewport" content="width=device-width,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

		<!-- template specific css -->
		<link href="<?php echo BASE_URL_ASSETS; ?>css/templates/default/styles.css" rel="stylesheet" type="text/css" />

		<!-- template specific js -->
		<script src="<?php echo BASE_URL_ASSETS; ?>js/templates/default/script.js"></script>

		<!-- page specific html head -->
		<?php echo $html_head; ?>
	</head>
	<body>
		<!-- body specific html -->
		<?php echo $html_body; ?>
	</body>
</html>