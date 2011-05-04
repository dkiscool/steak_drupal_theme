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