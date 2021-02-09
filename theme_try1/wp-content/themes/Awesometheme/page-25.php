<?php get_header(); ?>

<div class="row">
	
<div class="col-xs-12 col-sm-8">

<?php 
   if(have_posts() ):
    
     while (have_posts() ): the_post(); ?>

        
      
       <h1><?php the_title(); ?></h1>
    	  <p><?php the_content(); ?></p>

    
    	
    	 <hr>

   <?php  endwhile;

    endif;
 ?>
</div>

<div class="cols-xs-12 col-sm-4">
	 <?php get_sidebar(); ?>
	
</div>
</div>

<?php get_footer(); ?>