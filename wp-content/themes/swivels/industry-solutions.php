<!-- ****** Archive Area Start ****** -->

<div class="border_top"></div>


<section class="archive-area section_padding_80">
  <div class="container">
     <div class="post-content ">
        <h1 class="product-title"><?php the_field('industry');?></h1>

       <div class="product-content"><?php the_field('industry_content');?></div>

       
    </div>
    <div class="row">
     

      <?php
                        // The Query
      $args = array ('post_type'=>'industry_solution');

      $the_query = new WP_Query( $args );
                        // The Loop 
                // global $active;
                //  $active = 'active';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content','industry-solutions');
                  // $active = '';
      }

      /* Restore original Post Data */
      wp_reset_postdata();

      ?>  



    </div>
  </div>
</section>


