<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpgraby
 */

get_header();
?>


<section id="content-section" class="content-section">
  <div class="container">
    <div class="single-col-max mx-auto">
      <?php while (have_posts()) : the_post();  ?>
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
      endwhile; // End of the loop.
      ?>
    </div><!--//single-col-max-->
  </div><!--//container-->
</section><!--//content-section-->





<?php get_footer(); ?>