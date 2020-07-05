<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Srpski rečnik</title>
  <link rel="icon" href="images/favicon-blue.png" sizes="32x32">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="search-container container-fluid my-auto" id="search-bar">
      <div class="row">
          <?php get_search_form(); ?>
      </div>
    </div>

    <div class="navbar navbar-expand-md mb-4" role="navigation">
      <div class="button-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
      </div>
      <div class="logo-container">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo akcenat.png">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">POČETNA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/najnovije-reci">NAJNOVIJE REČI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategorija/skracenica/">SKRAĆENICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/predlozi-rec">PREDLOŽI REČ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">BLOG</a>
          </li>
        </ul>
      </div>
      <div class="search-icon">
        <i class="fas fa-search"></i>
      </div>
    </div>
  </header>

  <div class="container home-top">
    <div class="row" style="display:none">
      <div class="reklama-bar">Reklama</div>
    </div>
  </div>

