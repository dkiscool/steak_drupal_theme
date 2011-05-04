<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>

  <body>

<div id="container_wrapper_outter">
<div id="container_wrapper_inner">

<div id="container">

	<div id="menu">
    	 <?php  print theme('links', $primary_links);  ?>

        <div id="site_title">
            <h1>
                <a href="" target="_parent"><?php print $site_name; ?>
                <span><?php print $site_slogan; ?></span></a>
            </h1>
        </div>

    </div> <!-- end of menu -->

    <div id="banner">

        <div id="banner_section">
             <?php print $banner; ?>
          	
		</div> <!-- banner section -->

    </div> <!-- end of banner -->

    <div id="content_wrapper">
        <div id="content">

        	<div id="main_column">
                
                <div class="section_w590">

                    <div class="section_w590_content">
<?php print $content; ?>
                           <div class="popular_meal_box margin_r_60">
                        	<a href="#"><img src="sites/all/themes/steak/images/image_01.jpg" alt="image" /></a>
                          <h3>New Dish One</h3>
                            <p>Duis convallis, enim in scelerisque faucibus, mi libero interdum dolor, nec vestibulum turpis justo eget nulla.</p>
                            <div class="price">Price: $30</div> <a href="#">Order</a>
                        </div>

      <div class="popular_meal_box">
                        	<a href="#"><img src="sites/all/themes/steak/images/image_02.jpg" alt="image" /></a>
                  <h3>Special Dish Two</h3>
                            <p>Mauris ac diam quis magna rutrum adipiscing sed eget odio. Donec in metus elit, sed interdum magna</p>
                            <div class="price">Price: $30</div> <a href="#">Order</a>
                        </div>
                    </div>
                </div>

              

            </div> <!-- end of main column -->

            <div id="side_column">

            		<div class="side_column_section">
                   	  <h4>Categories</h4>
                 		 <ul class="category_list">
                        	<li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Donec velit mi</a></li>
                            <li><a href="#">Sed malesuada urna</a></li>
                            <li><a href="#">Ut aliquet eros</a></li>
                            <li><a href="#">Praesent leo nisi</a></li>
                            <li><a href="#">Vestibulum porta</a></li>
                        <li><a href="#">Donec elementum</a></li>
                        </ul>
              </div>

                    <div class="side_column_section">
                    	<h4>Our Address</h4>
                        <a href="http://maps.google.com" target="_blank"><img src="sites/all/themes/steak/images/map.jpg" alt="map" /></a>
          				<p>
                         	101, Lorem ipsum,<br />
                            Sit amet, Consectetur, 10280<br /><br />
                            Tel: 000-100-1020<br />
          					Fax: 002-002-0320<br /><br />
                            Email:<br /> <a href="#">info{at}yourcompany.com</a>
                        </p>
              </div>

            	<div class="side_column_bottom"></div>
            </div> <!-- end of side column -->

        <div class="cleaner"></div>
        </div> <!-- end of content -->

        <div class="cleaner"></div>
        <div class="content_bottom"></div>
	</div> <!-- end of content wrapper -->

    <div id="footer">

	     <ul class="footer_menu">
           <li><a href="#" class="current">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="#" >About</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">History</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    	Copyright © 2048 <a href="#">Your Company Name</a> | <a href="" target="">Website Templates</a> by <a href="" target="">Free CSS Templates</a>

    </div>

</div>
<!-- end of container -->

</div>
</div>

       <?php print $site_name; ?>
       <?php print $title; ?>
       <?php print $mission; ?>
       <?php print $breadcrumb; ?>

       <?php print $header; ?>
       <?php print $content_top; ?>
               
       <?php print $messages; ?>
       <?php print $tabs; ?>
       <?php print $content; ?>
       
       <?php print $content_bottom; ?>
       <?php  print theme('links', $primary_links);  ?>
       <?php  print theme('links', $secondary_links); ?>
       <?php print $left; ?>
       <?php print $right; ?>

       <?php print $help; ?>

       <?php print $closure; ?>
  </body>
</html>