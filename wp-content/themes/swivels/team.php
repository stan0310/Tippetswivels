<!-- ****** Archive Area Start ****** -->

<div class="border_top"></div>


<section class="archive-area section_padding_80">
  <div class="container">
    <div class="row">
      <div class="team"><h1>Meet Our Friendly Team:</h1></div>

      <?php
                        // The Query
      $args = array ('post_type'=>'team');

      $the_query = new WP_Query( $args );
                        // The Loop 
                // global $active;
                //  $active = 'active';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content','team');
                  // $active = '';
      }

      /* Restore original Post Data */
      wp_reset_postdata();

      ?>  



    </div>
  </div>
</section>


