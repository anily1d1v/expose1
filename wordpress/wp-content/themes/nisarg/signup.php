<?php
/**
 * Template Name: Signup Page
 * The template for displaying signup pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Nisarg
 */

get_header(); 
global $wpdb;

if ($_POST) {

    $fullName = $wpdb->escape($_POST['fullname']);
    $email = $wpdb->escape($_POST['useremail']);
    $password = $wpdb->escape($_POST['userpassword']);
    $confPassword = $wpdb->escape($_POST['confirmpassword']);


    $error = [];
    if (empty($fullName)) {
        $error['username_empty'] = "Please enter full name";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "please enter valid email";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $confPassword) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (count($error) == 0) {

        $userdata = array(
         'first_name' => $fullName,
         'user_login' => $email,
         'user_email' => $email,
         'user_pass' => $password
      );
       $insertUser = wp_insert_user( $userdata );

       if($insertUser instanceof WP_Error){
       	print_r($insertUser); die;
       	echo '<div class="alert alert-danger" role="alert">Something went wrong</div>';
       }else{
       	echo '<div class="alert alert-success" role="alert">Success</div>';
       }
        exit();
    }else{
        
        print_r($error);

 	
   }
}
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

			<?php // get_sidebar( 'sidebar-1' ); ?>
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
