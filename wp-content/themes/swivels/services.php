<!-- ****** Archive Area Start ****** -->
<div class="border_top"></div>
<section class="archive-area section_padding_80">
  <div class="container">
    <div class="row">

      <?php
                        // The Query
      $args = array ('post_type'=>'service');

      $the_query = new WP_Query( $args );
                        // The Loop 
                // global $active;
                //  $active = 'active';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content','services');
                  // $active = '';
      }

      /* Restore original Post Data */
      wp_reset_postdata();

      ?>  



    </div>
  </div>
</section>
<!-- ****** Archive Area End ****** -->






