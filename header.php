<html>
<head>
<?php wp_head(); ?>
</head>

<body <?php 
// body_class(); 
?>>
<div id="ttr_header" class="jumbotron">

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

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
      
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> 
    </ul>
  </div> 
</nav>

<h1> <?php 
    the_title();
?> </h1>
</div>
<div class="container">