<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="images">
          <!-- <div class="flexslider"> change figs to li</div> -->
            <?php while(has_sub_field('images')) : ?>
              <?php //for every image/caption combo this code is run ?>
              <figure>
                <?php $image = get_sub_field('image'); // pre_r($image);
                ?>
                <img src="<?php echo $image['sizes']['square']?>" alt="<?php echo $image['title']; ?>">
                <figcaption><?php the_sub_field('caption') ?></figcaption>
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