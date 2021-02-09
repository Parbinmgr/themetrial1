<!DOCTYPE html>
<!DOCTYPE html>
<html>
   <head>
	 <meta charset="utf-8">
	 <title> Awesome THEME </title>
	 <?php wp_head(); ?>
   </head> 
   <?php 
        if (is_front_page() ):
            $awesome_classes = array('awesome-class','my-class') ;
        else: 
        	$awesome_classes = array('no-awesome-class') ;

        endif;

    ?>
 <body <?php body_class( $awesome_classes );  ?> >

 	<div class="container">
 		<div class="row">
 
            <div class="cols-xs-12">

 

              <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Awesome Theme</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>



   </div>

   <div class="search-form-conatiner">
     <?php 
        get_search_form();

      ?>
   </div>


 <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      
    </ul>
    
  </div> -->
 	        

                
   <!--var_dump(get_custom_header()); --> 
 	         </div>      
 

 	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>" alt="">

