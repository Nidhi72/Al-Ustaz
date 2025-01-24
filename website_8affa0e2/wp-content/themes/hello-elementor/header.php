<?php
/**
 * The template for displaying the header
 *
 * Contains the opening of the <head> tag, site header, and the opening <body> tag.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta property="og:image:url" content="https://wsarabia.com/images/opengraph.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:type" content="image/jpeg" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/inner.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">

	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<!-- Mini Header -->
<div class="mini-header">
	<div class="container">
		<div class="top-main">
			<div class="row">
				<div class="col-md-6">
					<div class="top-two">
						<h6>“Building Tomorrow's Kingdom Today”</h6>
					</div>
				</div>
				<div class="col-md-6">
					<div class="top-one">
						<ul>
							<li><i class="fa-sharp fa-regular fa-phone-volume"></i><a href="tel:+966548187650">+966 54 818 7650</a></li>
							<li><i class="fa-regular fa-envelope"></i><a href="mailto:sales@wsarabia.com">sales@wsarabia.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Navbar -->
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link active line-one" href="<?php echo home_url(); ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link line" href="<?php echo home_url( '/about' ); ?>">About Us</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link line" href="#">Business Segments <i class="fa-regular fa-angle-down"></i></a>
						<ul class="drop-main">
							<li class="nav-drp"><a href="<?php echo home_url( '/scaffolding-and-formwork' ); ?>">Scaffolding & Formworks</a></li>
							<li class="nav-drp"><a href="<?php echo home_url( '/ductile-iron-pipes' ); ?>">Ductile Iron Pipes</a></li>
							<li class="nav-drp"><a href="<?php echo home_url( '/fencing-works' ); ?>">Fencing Works</a></li>
							<li class="nav-drp"><a href="<?php echo home_url( '/ferro-alloys-and-minerals' ); ?>">Ferro Alloys and Minerals</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link line" href="#">Our ACHIEVEMENTS <i class="fa-regular fa-angle-down"></i></a>
						<ul class="drop-main">
							<li class="nav-drp"><a href="<?php echo home_url( '/projects' ); ?>">Completed Projects</a></li>
							<li class="nav-drp"><a href="<?php echo home_url( '/project-photos' ); ?>">Project Photos</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link line" href="<?php echo home_url( '/contact' ); ?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

