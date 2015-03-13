<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="images">
            <?php while(has_sub_field('images')) : ?>
              <?php //for every image/caption combo this code is run ?>
              <figure>
                <p>hi</p>
              </figure>
              <?php endwhile; ?> 
          </div>

          
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>