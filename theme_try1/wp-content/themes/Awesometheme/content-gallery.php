
<h1><?php the_title(); ?></h1>
     
    <div class="thumbnail-image"> <?php the_post_thumbnail('thumbnail'); ?> </div>  
      <small> Posted on: <?php the_time('F j, Y'); ?> at  <?php the_time('g:i a'); ?> , in <?php the_category(); ?></small>
       
 <hr>