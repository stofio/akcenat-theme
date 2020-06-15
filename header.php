<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Srpski rečnik</title>
  <link rel="icon" href="images/favicon-blue.png" type="image/gif" sizes="32x32">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="search-container container-fluid my-auto" id="search-bar">
      <div class="row">
        <form class="form-inline">
          <div class="search-bar">
            <input class="form-control" type="text" placeholder="PRETRAŽI REČ" aria-label="PRETRAŽI REČ">
            <div class="arrow-container">
              <i class="fas fa-arrow-right"></i>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="navbar navbar-expand-md mb-4" role="navigation">
      <div class="button-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
      </div>
      <div class="logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo akcenat.png">
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/slovo.html" target="_blank">SLOVO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sve-reci-pod-slovom.html" target="_blank">LISTA PO SLOVOM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rec.html" target="_blank">REČ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog.html" target="_blank">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/predlozi.html" target="_blank">PREDLOŽI</a>
          </li>
        </ul>
      </div>
      <div class="search-icon">
        <i class="fas fa-search"></i>
      </div>
    </div>
  </header>

  <div class="container home-top">
    <div class="row">
      <div class="reklama-bar">Reklama</div>
    </div>
  </div>