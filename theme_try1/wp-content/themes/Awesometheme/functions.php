<?php 

  function awesome_script_enqueue() {
   
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.0', 'all');
   wp_enqueue_style('customstyle', get_template_directory_uri().'/css/awesome.css', array(), '1.0.0', 'all');
  

   //JS 
   wp_enqueue_script('jquery'); 

   wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.0', true);
   wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
   


    }
    add_action('wp_enqueue_scripts', 'awesome_script_enqueue');



             /* 

             ----------> Activate menu   <----------

             */

    function awesome_theme_setup(){
    	add_theme_support('menus');
 
    	//custom  menu below
    	register_nav_menu('primary', 'Primary Header Navigation');
    	register_nav_menu('secondary', 'Footer navigation');
    }

    add_action('init','awesome_theme_setup') ;
    // add_action('after_setup_theme','awesome_theme_setup')


                      /*  

         -----  >  ------->   ---  THEME SUPPORT FUNCTION ---- <------ <-----


                         */
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    //post formats

    //add_theme_support('post-formats');
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ,'link','video' ) );
    add_theme_support('html5',array('search-form')) ;


    /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



/*                       	
 ...................Side Bar function
  */

function awesome_widget_setup(){

	register_sidebar(
		array(
			'name' => 'sidebar',
			'id' => 'sidebar-1',
			'class' => 'sidebar-custom',
			'description' => 'Standard sidebar',
             'before_widget'  => '<div id="%1$s" class="widget %2$s">',
            'after_widget'   => "</div>",
            'before_title'   => '<h2 class="widgettitle">',
            'after_title'    => "</h2>",	
            'before_sidebar' => '',
            'after_sidebar'  => '',
					)
	     );

    register_sidebar( array(
'name' => 'Footer Area 1',
'id' => 'footer-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Area 2',
'id' => 'footer-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Area 3',
'id' => 'footer-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Area 4',
'id' => 'footer-4',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}

add_action('widgets_init','awesome_widget_setup');


 ?>
             


