
<?php 
/*
*  This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ); ?>
</head>
<body  <?php body_class(); ?>>
  <div class="container-fluid px-5" id="header_area">
    <div class="row">
         <div class="col-md-3">
            <a href=""> <img src="<?php echo get_theme_mod('mh_logo');?>"  alt="logo" class="logos"></a>
         </div>
         <div class="col-md-9">
            <ul id="nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Section</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </ul>
         </div>
        </div>
    </div>
  </div>

<?php wp_footer( ); ?>
</body>
</html>