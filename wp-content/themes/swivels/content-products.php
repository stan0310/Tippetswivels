
<!-- Single Post -->


<div class="col-12 col-md-6 col-lg-4">
  <div class="single-post wow fadeInUp" data-wow-delay="0.1s">
    
    <!-- Post Thumb -->
    <div class="post-thumb product-style-customised">
        
      <img class="offer_image" src="<?php the_field('image');?>" alt="">
       <a href=""><h1 class="offer_heading"><?php the_field('name');?></h1></a>
    </div>
    <!-- Post Content -->
    <div class="post-content">
      <div class="post-meta d-flex">
      
          <!-- Post Author -->
          
          <!-- Post Date -->
          <div class="post-date">
            <a href="#">
              <h1 class="offer_description"><?php the_field('description');?></h1></a>
            </div>
          </div>
          <!-- Post Comment & Share Area -->
        

        <div class="description_opacity"><?php the_field('price');?></div>
    
      </div>
    </div>
  </div>
