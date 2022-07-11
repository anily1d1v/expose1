<?php
/**
 * Template Name: Signin Page
 * The template for displaying signup pages.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nisarg
 */
if ($_POST) {
    $username = sanitize_user($_POST['userlogin']);
    $password = esc_attr($_POST['userpassword']);
      
      $creds = array(
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => true
    );


    $user = wp_signon( $creds, false );
    print_r($user);
   

    if ( is_wp_error( $user ) ) {
        echo $user->get_error_message();
    }else{
      wp_redirect( 'sample-page' );
    };
  };



get_header(); 
$posts_nav_style = get_theme_mod( 'nisarg_posts_nav','old-new-posts');
?>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-md-12 content-area">
				<main id="main" class="site-main" role="main">
			
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--row-->
	</div><!--.container-->
	<?php get_footer(); ?>


