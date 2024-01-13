<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jlmayorga
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<!-- --------------------------------------------------- -->
<!-- --- HEAD ------------------------------------------ -->
<!-- --------------------------------------------------- -->
<head>

	<!-- --------------------------------------- -->
	<!-- -- META TAGS -------------------------- -->
	<!-- --------------------------------------- -->
	<meta name="robots" content="follow"/>
	<meta name="author" content="jl.mayorga.co@gmail.com" />
	<meta name="keywords" content="Angular, JavaScript, TypeScript, React, Vue, Frontend Development, Full Stack Development, UI/UX Design, Responsive Design, Agile Methodologies, Git, HTML, CSS, Node.js, Express.js, Nest.js, RESTful APIs, MySQL, PostgreSQL, MongoDB, Serverless Architecture, Webpack, Testing Frameworks (Jasmine, Karma, Jest, Cypress), DevOps, CI/CD, Docker, AWS, Azure, Heroku, GraphQL, Laravel, Python, Django, Flask, Machine Learning, Robotic Systems, Reinforcement Learning, Control Systems, Distributed Control, Game Theory, Research, Electronic Engineering, Embedded Systems, Raspberry Pi, BeagleBone Black, Sensors, IoT, Remote Sensing, Computer Vision, PID Control, LQR Control, Optimal Control, Dynamical Systems, Replicator Dynamics, Electronic Design, Hardware Integration, Edge Computing, Edge Devices, Data Acquisition, Signal Processing, Algorithm Development, Robotics, Internet of Things (IoT), Cyber-Physical Systems, Simulink, State Machines, Finite State Machines, Real-time Systems, Feedback Control, System Identification, Kalman Filtering, Decision Support Systems, Human-Machine Interaction, Human-Robot Interaction, Autonomous Systems, Swarm Robotics, Mechatronics, Actuators, Kinematics, Dynamics, Embedded C, Firmware Development, Energy Harvesting, Wireless Communication, MQTT, Zigbee, LoRa, Bluetooth, Industrial Automation."/>
	<meta name="description" content="Highly skilled and experienced Angular Senior Front End Developer with over 6 years of experience in developing and implementing user-friendly and visually appealing web applications using Angular and other front-end technologies. Strong proficiency in HTML, CSS, and JavaScript. Excellent understanding of responsive design, cross-browser compatibility, and accessibility standards. Proven ability to work in a fast-paced environment and collaborate effectively with cross-functional teams. Strong communication and leadership skills, with experience mentoring junior developers. Demonstrated understanding of the software development life cycle, Agile methodologies, and software development best practices."/>
	<meta name="copyright" content="Copyright Jorge Luis Mayorga Taborda" />
	<!-- --------------------------------------- -->

	<!-- --------------------------------------- -->
	<!-- --- META WORDPRESS --------------------- -->
	<!-- --------------------------------------- -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- --------------------------------------- -->

	<!-- --------------------------------------- -->
	<!-- ----WORDPRESS HEAD --------------------- -->
	<!-- --------------------------------------- -->
	<?php wp_head(); ?>
	<!-- --------------------------------------- -->

</head>
<!-- ----------------------------------------------------------------- -->


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description = get_bloginfo( 'description', 'display' );
			if ( $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $personal_website_for_portfolio_and_blog_about_tech_code_ai_and_robotics_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'personal-website-for-portfolio-and-blog-about-tech-code-ai-and-robotics' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
