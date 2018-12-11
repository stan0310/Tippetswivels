 <!-- ****** Welcome Post Area Start ****** -->
<?php
  global $active;
?>

<section class="welcome-post-sliders owl-carousel <?php echo $active ?>">


	    <?php
                  // The Query
          $args = array ('post_type'=>'slide');
         
          $the_query = new WP_Query( $args );
                  // The Loop 
          // global $active;
          //  $active = 'active';
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('content','slider');
            // $active = '';
          }

          /* Restore original Post Data */
          wp_reset_postdata();

        ?>  



</section>









