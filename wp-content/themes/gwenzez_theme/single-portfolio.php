<?php get_header(); ?>


    
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="portfolioItem">
          <div class="wrapper">
            <h2><?php the_title(); ?></h2>
            <div class="slide clearfix">
          
            <?php $image = get_field('screenshot'); ?>
            <?php //pre_r($image); ?>

            <img src="<?php echo $image['sizes']['large']?>" alt="<?php echo $image['title']; ?>">

            <div class="slideText">
              <h4><?php the_field('website_name'); ?></h4>
              <?php
                $tags = get_field('built_with_tags');
                $tags = "<span>" . join('</span><span>', $tags) . "</span>";
              ?>
              <?php //pre_r($tags); ?>

              <h5><?php echo $tags; ?></h5>
              <p><?php the_field('client_testimonial'); ?></p>

              <a href="<?php the_field('link'); ?>" target="_blank" class="ani">Visit live site</a>

 <?php get_field('built_with_tags'); ?>

              </div><!-- slideText -->
        
            </div> <!-- /.slide -->

          </div> <!-- /.wrapper -->
        </div> <!-- /.portfolioItem -->
      <?php endwhile; // end of the loop. ?>

   

  

<?php get_footer(); ?>