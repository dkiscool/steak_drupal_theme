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
                        <?php print $breadcrumb; ?>
                        <?php print $help; ?>
                         <?php print $messages; ?>
       <?php print $tabs; ?>
<?php print $content; ?>
                           <div class="popular_meal_box margin_r_60">
                                 <?php print $special_two?>
                        	
                        </div>

      <div class="popular_meal_box">
          <?php print $special_two?>
                        	
                        </div>
                    </div>
                </div>

              

            </div> <!-- end of main column -->

            <div id="side_column">

            		<div class="side_column_section">
                            <?php print $right; ?>
                   	 
              </div>

                    <div class="side_column_section">
                    	
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
           <?php  print theme('links', $primary_links);  ?>
        </ul>

    	Copyright © 2048 <a href="#">Your Company Name</a> | <a href="" target="">Website Templates</a> by <a href="" target="">Free CSS Templates</a>

    </div>

</div>
<!-- end of container -->

</div>
</div>

    

       <?php print $closure; ?>
  </body>
</html>