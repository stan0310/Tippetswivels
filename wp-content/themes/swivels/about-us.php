 <!-- Single Post -->
 <div class="border_top"></div>
 <div class="col-10 col-sm-11">
    <div class="single-post about-style">
        <!-- Post Thumb -->
        <?php
         // The Query
        $args = array ('post_type'=>'about');

        $the_query = new WP_Query( $args );
                                    // The Loop 
                            // global $active;
                            //  $active = 'active';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('content','about-us');
                              // $active = '';
        }

        /* Restore original Post Data */
        wp_reset_postdata();

        ?> 

        

    </div>



</div>



</div>

