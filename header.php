<html>
<head>
<?php wp_head(); ?>
</head>

<body <?php 
// body_class(); 
?>>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
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
    <div class="logo"></div>
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
    </ul>
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