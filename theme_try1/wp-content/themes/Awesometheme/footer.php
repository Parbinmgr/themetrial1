 
    <footer >
    	<hr>
 	 
    <div class="footer-face">
     <div class="row">
 	 <div class="col-sm-3">

	<?php
	if(is_active_sidebar('footer-1')){
	dynamic_sidebar('footer-1');
	}
	?>
	</div>

	<div class="col-sm-3">

	<?php
	if(is_active_sidebar('footer-2')){
	dynamic_sidebar('footer-2');
	}
	?>
	</div>

	<div class="col-sm-3">

	<?php
	if(is_active_sidebar('footer-3')){
	dynamic_sidebar('footer-3');
	}
	?>

	</div>

	<div class="col-sm-3">

	<?php
	if(is_active_sidebar('footer-4')){
	dynamic_sidebar('footer-4');
	}
	?>


	</div>
    </div>
</div>
 	 <?php // wp_nav_menu(array('theme_location'=>'secondary')); ?>
    </footer>

  </div> <!-- .container -->  



   <?php wp_footer(); ?>
 

</body>
</html>