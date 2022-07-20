<?php
/**
 * Template Name: home muse ferroviario
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package museo-ferroviario
 */

get_header();
?>

	<main id="primary" class="container">
     
	<?php include get_template_directory() . '/assets/modulos/modulo-noticias/custom-loop-noticias.php';?>

	</main><!-- #main -->

<?php
