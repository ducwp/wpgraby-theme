<?php get_header(); ?>




<section id="content-section" class="content-section">
  <div class="container">
    <div class="single-col-max mx-auto">
      <?php
      while (have_posts()) :
        the_post();
      ?>



        <h2 class="section-heading text-center mb-5"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></h2>
        <div class="entry-content">
          <?php
          the_content();

          wp_link_pages(
            array(
              'before' => '<div class="page-links">' . esc_html__('Pages:', 'wpgraby'),
              'after'  => '</div>',
            )
          );
          ?>
        </div><!-- .entry-content -->

      <?php

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
    </div><!--//single-col-max-->
  </div><!--//container-->
</section><!--//content-section-->





<?php get_footer(); ?>