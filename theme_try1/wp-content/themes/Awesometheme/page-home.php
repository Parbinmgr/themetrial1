<?php get_header(); ?>

<div class="row">

    <!-- ........ First post to my custom Page ........ -->

   <!-- <div class="col-xs-12"> -->


     <div id="awesome-carousel" class="carousel slide" data-bs-ride="carousel">
         
          <div class="carousel-inner">

             <?php 

            $args_cat = array( 
              'include' => '3, 5, 4' // string are use in ''
            );

            $category = get_categories($args_cat);
             $count = 0 ;
             $bullets = '' ;

            foreach ($category as $category ):

               $args = array(
              'type' => 'post',
              'posts_per_page' => 1,
            //  'category__in' => array( 6, 9, 7 ),
              'category__in' => $category->term_id ,
              'category__not_in' => array( 2 ),
               );


           // $lastblog = new WP_Query('type=post&posts_per_page=1');
              $lastblog = new WP_Query($args); //aternative code for simpleness.



              if($lastblog->have_posts() ):


    
                  while ( $lastblog->have_posts() ): $lastblog->the_post(); ?>

                      <div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">
                               <?php the_post_thumbnail('full'); ?>
                     

                      <div class="carousel-caption d-none d-md-block">
                          <?php the_title( sprintf(' <h1 class="entry-title"> <a href="%s"> ', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                          <small><?php the_category(); ?> </small>
                      
                       </div>
                     </div>
                         

                <?php $bullets .= '<li data-bs-target="#awesome-carousel" data-bs-slide-to=" '.$count.' " class="' ?>  
                             <?php if ($count == 0 ): $bullets .= 'active' ; endif ;?>

                             <?php  $bullets .= '"></li> ' ; ?>   


                   <?php  endwhile;

              endif;
           wp_reset_postdata();

           $count++ ;
            endforeach;


      ?>
      <ol class="carousel-indicators">

        <?php echo $bullets ; ?>
          
       </ol>

            
          </div>
          <a class="carousel-control-prev" href="#awesome-carousel" role="button" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#awesome-carousel" role="button" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </a>
      </div>
    </div>

    <div class="row">
    
      

        <?php 

            $args_cat = array( 
              'include' => '3, 5, 4' // string are use in ''
            );

            $category = get_categories($args_cat);
            foreach ($category as $category ):

               $args = array(
              'type' => 'post',
              'posts_per_page' => 1,
            //  'category__in' => array( 6, 9, 7 ),
              'category__in' => $category->term_id ,
              'category__not_in' => array( 2 ),
               );


           // $lastblog = new WP_Query('type=post&posts_per_page=1');
              $lastblog = new WP_Query($args); //aternative code for simpleness.



              if($lastblog->have_posts() ):
    
                  while ( $lastblog->have_posts() ): $lastblog->the_post(); ?>


                     <div class="col-xs-12 col-sm-4">

                       <?php get_template_part('content','featured'); ?>

                     </div>     


                   <?php  endwhile;

              endif;
       wp_reset_postdata();


            endforeach;


      ?>  

         
        
    
  </div>

     <div class="row">

     <!-- ........ 2nd and third but not the first whic may repeat post to my custom Page ........ -->



<div class="col-xs-12 col-sm-8">

<?php 
   if(have_posts() ):
    
     while (have_posts() ): the_post(); ?>

     	<?php get_template_part('content', get_post_format()); ?>


   <?php  endwhile;

    endif;
/*
    //for shoter version
      $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,
      );
      

     // $lastblog = new WP_Query('type=post&posts_per_page=2&offset=1');
         $lastblog = new WP_Query($args);

              if($lastblog->have_posts() ):
    
                  while ( $lastblog->have_posts() ): $lastblog->the_post(); ?>

                       <?php get_template_part('content', get_post_format()); ?>


                   <?php  endwhile;

              endif;
       wp_reset_postdata();
       */
        ?>
     <!--    <hr> -->
        <!-- for category filter -->

        <?php 
        /*
             $lastblog = new WP_Query('type=post&posts_per_page=-1&cat=9'); //id chai mailez songs ko domain hereko....

              if($lastblog->have_posts() ):
    
                  while ( $lastblog->have_posts() ): $lastblog->the_post(); ?>

                       <?php get_template_part('content', get_post_format()); ?>


                   <?php  endwhile;

              endif;
       wp_reset_postdata();

       */



         ?>
    
 
</div>

    <div class="cols-xs-12 col-sm-4">
	   <?php get_sidebar(); ?>
	
    </div>
</div>


<?php get_footer(); ?>