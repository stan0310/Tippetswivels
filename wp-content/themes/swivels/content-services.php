
<!-- Single Post -->
<div class="col-12 col-md-6 col-lg-4">
  <div class="single-post wow fadeInUp" data-wow-delay="0.1s">
    <!-- Post Thumb -->
    <div class="post-thumb">
      <img class="services_image" src="<?php the_field('image');?>" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
      <div class="post-meta d-flex">
      
          <!-- Post Author -->
          
          <!-- Post Date -->
          <div class="post-date">
            <a href="#">
              <h1><?php the_field('title');?></h1></a>
            </div>
          </div>
          <!-- Post Comment & Share Area -->
        

        <div class="description_opacity"><?php the_field('descriptions');?></div>
       <div class="readmore"><a href="<?php permalink ?>">[ Read More...]</a></div>
      </div>
    </div>
  </div>









