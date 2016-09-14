<?php
/**
 * Template Name: Home Page
 */

// Custom Fields

get_header(); ?>

<?php $field = get_field('options');
?>

<?php get_template_part( 'template-parts/content', 'main' ); ?><!-- Pull 'Main' section for main page -->

<?php get_template_part( 'template-parts/content', 'navbar' ); ?><!-- Pull 'Navbar' section for main page -->

<?php //get_template_part( 'template-parts/content', 'topbutton' ); ?><!-- Pull 'topButton' section for main page -->

<?php get_template_part( 'template-parts/content', 'main-portfolio' ); ?><!-- Pull 'Main-Portfolio' section for main page if user selects Portfolio section -->

<?php 

if( $field == true ){

  get_template_part( 'template-parts/content', 'blog-draw' ); 

}

?><!-- Pull 'Blog-Draw' section for main page -->


<?php get_template_part( 'template-parts/content', 'about' ); ?><!-- Pull 'About' section for main page -->

<?php get_template_part( 'template-parts/content', 'contact' ); ?><!-- Pull 'Contact' section for main page -->

<?php
get_footer();