<?php get_header( 'blog' ); ?>

<div class="bg"></div>
  <div class="jumbotron" id="start">
    <div class="container">
      <br><br><br>
      <h1>News Archives: <?php the_time('F Y'); ?></h1>
  </div>        
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">

		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
		    <p><em><?php the_time('l, j.n.Y, H:i'); ?></em></p>
    		<hr>

		  <?php endwhile; else: ?>
		    <p><?php _e('Sorry, there are no posts.'); ?></p>
		  <?php endif; ?>

		</div>
		<div class="col-md-4 side">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>

</div><!--/container-->

