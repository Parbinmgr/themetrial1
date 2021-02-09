<?php get_header(); ?>

<div class="row">
	
<div class="col-xs-12 col-sm-8">

<?php 
   if(have_posts() ):
    
     while (have_posts() ): the_post(); ?>
      

          <article id=" post-<?php the_ID(); ?>" <?php post_class(); ?> >

                <?php if( has_post_thumbnail() ): ?>


                      <?php the_title('<h1 class="entry-title">','</h1>'); ?>            
                     <div class="pull-right"> <?php the_post_thumbnail('thumbnail'); ?> </div>

                <?php endif; ?>

                <!--     Edit LInks for POst to the Admins . -->

    
           <small> <?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?> </small>

           <?php the_content(); ?>

           <hr>

           <!--    ...... comment box below ....... -->

           <?php 
           if ( comments_open() ) {
            comments_template();
           } else { echo " Sorry , Comments are Closed ";}

            ?>
         
      
     
         </article>


   <?php  endwhile;

    endif;
 ?>
</div>

<div class="cols-xs-12 col-sm-4">
	 <?php get_sidebar(); ?>
	
</div>
</div>

<?php get_footer(); ?>