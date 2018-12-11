

<div class="border_top"></div>
<!-- ****** Contatc Area Start ****** -->
<div class="contact-area section_padding_80">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="google-map-area">
                    <div id="map" data-title="<?php the_title(); ?>"  data-lat="<?php the_field('lat');?>" data-lng="<?php the_field('lng');?>"></div>
                </div>
            </div>
        </div>

        

        <!-- Contact Info Area Start -->
        <div class="contact-info-area section_padding_80_50">
            <div class="row">
               <?php
                                // The Query
               $args = array ('post_type'=>'contact');

               $the_query = new WP_Query( $args );
                                    // The Loop 
                            // global $active;
                            //  $active = 'active';
               while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('content','contact-us');
                              // $active = '';
            }

            /* Restore original Post Data */
            wp_reset_postdata();

            ?> 
            
        </div>
    </div>

    <!-- Contact Form  -->
    <div class="contact-form-area">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h4><?php the_field('company') ?></h4>
                    <p>Phone:<br><?php the_field('phone') ?></p>
                    <p>Email:<br><?php the_field('email') ?></p>
                    <p>Address:<br><?php the_field('address') ?></p>
                    <p>PO Box 23-648 <br>Hunters Corner <br> Papatoetoe Auckland 2104</p>
                </div>

                
            </div>
            <div class="col-12 col-md-7 item">
                <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                    <h2 class="contact-form-title mb-30">If You Have Any Inquiry Contact Us Today !</h2>
                    <!-- Contact Form -->
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="contact-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-website" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
    <!-- ****** Contact Area End ****** -->