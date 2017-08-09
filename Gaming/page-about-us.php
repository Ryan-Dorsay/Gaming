<?php

get_header(); ?>
  
  <!-- site-content -->
  <div class="site-content clearfix">
    
  
      <?php if (have_posts()) :
        while (have_posts()) : the_post();

        get_template_part('content', 'page');

        endwhile;

        else :
          echo '<p>No content found</p>';

        endif;
        ?>

        <div class="bga">
        <h1>Posts About Games</h1>
        </div>
        <?php

          $ourCurrentPage = get_query_var('paged');

          $aboutPosts = new WP_Query(array(
            'category_name' => 'About',
            'posts_per_page' => 3,
            'paged' => $ourCurrentPage
          ));

          if ($aboutPosts->have_posts()) :
            while ($aboutPosts->have_posts()) :
              $aboutPosts->the_post();
              ?> <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <?php
            endwhile;
             ?>

             <br>

          <?php
            echo paginate_links(array(
              'total' => $aboutPosts->max_num_pages
            ));

          endif;

        ?>
 


    
  </div><!-- /site-content -->
  
  <?php get_footer();

?>