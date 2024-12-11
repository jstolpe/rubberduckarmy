<!DOCTYPE html>
<html>
	<head>
		<!-- html title -->
		<title>
			<?php echo $html_title; ?>
		</title>

		<!-- meta tags -->
		<meta name="viewport" content="width=device-width,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo BASE_URL_ASSETS; ?>/images/favicon.ico" />

		<!-- fontawesome -->
		<link rel="stylesheet" href="<?php echo BASE_URL_ASSETS; ?>/css/fontawesome/css/fontawesome.min.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL_ASSETS; ?>/css/fontawesome/css/solid.min.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL_ASSETS; ?>/css/fontawesome/css/brands.min.css" />

		<!-- template specific css -->
		<link href="<?php echo BASE_URL_ASSETS; ?>css/templates/default/styles.css" rel="stylesheet" type="text/css" />

		<!-- template specific js -->
		<script src="<?php echo BASE_URL_ASSETS; ?>js/templates/default/script.js"></script>

		<script>
			document.addEventListener( 'DOMContentLoaded', function() { // document ready
				// initialize RDA
				rubberDuckArmy.initialize();
			} );
		</script>

		<!-- page specific html head -->
		<?php echo $html_head; ?>
	</head>
	<body>
		<div class="header-container">
			<div class="header-container-pad">
				<div class="header-container-flex">
					<div class="header-flex-left">
						<a class="header-logo" href="<?php echo HREF_BASE_URL; ?>">
							<img src="<?php echo BASE_URL_ASSETS; ?>images/logo50x50.png" />
							<span class="header-site-display-name">
								<?php echo SITE_DISPLAY_NAME; ?>
							</span>
						</a>
					</div>
					<div class="header-flex-right">
						<span class="fa-solid fa-bars user-menu-icon">

						</span>

						<div class="user-menu-container hide">
							<div class="user-menu-container-inner">
								<div class="user-menu">
									<a href="<?php echo HREF_BASE_URL; ?>">
										<div class="user-menu-item top">
											<div class="user-item">
												<div>
													Home
												</div>
												<div class="user-item-icon">
													<span class="fa-solid fa-home">

													</span>
												</div>
											</div>
										</div>
									</a>
									<a href="<?php echo HREF_BASE_URL; ?>login">
										<div class="user-menu-item">
											<div class="user-item">
												<div>
													Log In
												</div>
												<div class="user-item-icon">
													<span class="fa-solid fa-right-to-bracket">

													</span>
												</div>
											</div>
										</div>
									</a>
									<a href="<?php echo HREF_BASE_URL; ?>signup">
										<div class="user-menu-item bottom">
											<div class="user-item">
												<div>
													Sign Up
												</div>
												<div class="user-item-icon">
													<span class="fa-solid fa-user-plus">

													</span>
												</div>
											</div>
										</div>
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- global overlay -->
			<div class="global-overlay-takover">

			</div>
		</div>

		<!-- body specific html -->
		<div class="body-container">
			<?php echo $html_body; ?>
		</div>
	</body>
</html>