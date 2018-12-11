<!-- ****** Archive Area Start ****** -->
<div class="border_top"></div>
<section class="archive-area section_padding_80">
  <div class="container">

    <div class="post-content ">
        <h1 class="about-title"><?php the_title();?></h1>

       <div class="about-content"><?php the_field('company');?></div>

       
    </div>
    <div class="row">


      <?php
                        // The Query
      $args = array ('post_type'=>'special');

      $the_query = new WP_Query( $args );
                        // The Loop 
                // global $active;
                //  $active = 'active';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content','special-offers');
                  // $active = '';
      }

      /* Restore original Post Data */
      wp_reset_postdata();

      ?>  



    </div>

       <div class="post-content ">
        <h1 class="about-title"><?php the_field('new_releases');?></h1>

       <div class="about-content"><?php the_field('new_release_content');?></div>

       
    </div>
  </div>
</section>
<!-- ****** Archive Area End ****** -->
