<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="LéoFly Web Site">
  <meta name="author" content="LéoFly">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body <?php 
// body_class(); 
?>>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <?php
    if (function_exists('the_custom_logo')) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src($custom_logo_id);
    } 
  ?>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="logo" style="background-image: url('<?php echo $logo[0] ?>')"></div>
      <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
            )
        );
      ?>
    <!--<div class="logo"></div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Membres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projets</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Événements</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">A propos</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> 
    </ul>-->
  </div> 
</nav>

</div>
<div class="container_2">
      <h1>
          LEOFLY
      </h1>
      <h2>
          Association d'aérospatial et d'aéronautique
      </h2>    
</div>
