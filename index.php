<?php
get_header(); ?>

<div class="bg"></div>
<div class="jumbotron" id="start">
  <div class="container">
    <br><br><br>
    <h1>Startup Garden</h1>
    <h2>Aalto University Campus, Espoo, Finland</h2>
  </div>        
</div>

<?php
// define how pages will display
$args = array(
  'sort_order' => 'ASC',
  'sort_column' => 'menu_order', //post_title
  'hierarchical' => 1,
  'include' => '6, 9, 12, 14, 16, 18, 20',
  'child_of' => 0,
  'parent' => -1,
  'exclude_tree' => '',
  'number' => '',
  'offset' => 0,
  'post_type' => 'page',
  'post_status' => 'publish'
);
$pages = get_pages($args);
$counter = 0;
//start loop
foreach ($pages as $page_data) {
  $counter++;
  $content = apply_filters('the_content', $page_data->post_content);
  $title = $page_data->post_title;
  $slug = $page_data->post_name;
  $postcolour = $counter % 2 ? 'white' : '#F7F7F7';
?>


<div id='<?php echo "$slug" ?>' style='background-color: <?php echo $postcolour; ?>;'>
  <div class="starter-template">
    <h2><?php echo "$title" ?></h2>
    <div class="text-container">
      <?php 
      if ($slug != 'contact') { ?>
      <?php echo "$content" ?>
      <?php } ?>
      <div class="container-fluid">
        <?php
         if ($slug == 'people') {
          ?>
          <div id="people-table">
            <?php

            $args=array(
              'post_type' => 'page', //selects pages
              'post_parent' => '14', //Selects pages with the parent ID of 14
              'posts_per_page' => '-1',
              'order' => 'ASC',
              'orderby' => 'menu_order'
             );
           
            $childpages = new WP_Query($args);
            if( $childpages->have_posts() ) {
            while ($childpages->have_posts()) : $childpages->the_post(); ?>
              <div class="person">
                <div class="person_image_wrapper">
                  <img src="<?php the_field('person_image'); ?>" />
                </div> 
                <h4><?php the_title(); ?></h4>
                <h5><?php the_field('person_title'); ?></h5>
                <?php the_content() ?>
              </div>
               
            <?php endwhile; }?>
            <span class="stretch"></span>
            <div id="button-wrapper">
              <a id="viewmore" class="btn collapse-btn collapsed"></a>
            </div>
          </div>
          <?php 
          } elseif ($slug == 'contact') {
          ?>
          <div id="contact-table" class="row">
            <div id="contact-text" class="col-md-6">
              <h4><?php the_field('subtitle_1', 20); ?></h4>
              <?php echo "$content" ?>
              <br>
              <h4><?php the_field('subtitle_2', 20); ?></h4>
              <p style="font-size: 1.1em">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?php the_field('phone', 20); ?><br>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php the_field('e-mail', 20); ?>
              </p>
            </div>
            <div class="col-md-6">
              <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7936.021807966812!2d24.832175000000017!3d60.18064199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468df58d0b88505f%3A0xaacf6d4afeea4ebb!2sUrban+Mill!5e0!3m2!1sfi!2sfi!4v1434351601478" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <?php 
          } elseif ($slug == 'teams') {
          ?>
          <div id="teams-table">
            <?php

            $args=array(
              'post_type' => 'page', //selects pages
              'post_parent' => '12', //Selects pages with the parent ID of 12
              'posts_per_page' => '-1',
              'order' => 'ASC',
              'orderby' => 'menu_order'
             );
           
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) {
              $my_query->the_post(); ?>
              <div class="team">
                <a href="<?php echo esc_url(get_permalink()) ?>">
                  <div class="circle" style="background-image: url(<?php the_field('team_image'); ?>)">
                  </div>
                  <div class="team-text">
                    <h4><?php the_title(); ?></h4>
                  </div>
                </a>
              </div>
               
            <?php }
            }
            ?>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php
}
get_footer();
?>

</div><!--/container-->