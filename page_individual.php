<?php
/**
 * Template Name: Individual Static Page
 *
 * @package WordPress
 * @subpackage startupgarden
 */

get_header( 'blog' );
?>
<?php
	$thumbnail = '';
	// Get the ID of the post_thumbnail (if it exists)
	$post_image_id = get_post_thumbnail_id($post_to_use->ID);
	// if it exists
	if ($post_image_id) {
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	}
	if (!empty($thumbnail)) { 
		?>
		<div class="bg-post" style="background: url('<?php echo $thumbnail; ?>') no-repeat center 30%; background-size: cover">
		<?php 
	} else { 
		?>
		<div class="bg">
		<?php 
	} 
?></div>
  <div class="jumbotron" id="start">
    <div class="container">
      <br><br><br>
      <h1><?php the_title(); ?></h1>
  </div>        
</div>

<div class="starter-template">
	<div class="text-container">
		<?php while ( have_posts() ) : the_post(); ?> 
	    <?php the_content(); ?> 
	    <?php endwhile; ?>
	</div>
</div>


<?php get_footer(); ?>

</div><!--/container-->

