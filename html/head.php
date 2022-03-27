<?php
$x = parse_url($_GET['url']);
switch ($x['path']) {
  case '/':
    $pageTitle = 'Recently Added Sub';
    $activeSub = true;
    break;
  case '/recently-added-raw':
    $pageTitle = 'Recently Added Raw';
    $activeRaw = true;
    break;
  case '/recently-added-dub':
    $pageTitle = 'Recently Added Dub';
    $activeDub = true;
    break;
  case '/movies':
    $pageTitle = 'Recently Added Movie';
    $activeMovie = true;
    break;
  case '/new-season':
    $pageTitle = 'New Season';
    $activeSeason = true;
    break;
  case '/popular':
    $pageTitle = 'Popular Anime';
    $activePopular = true;
    break;
  case '/ongoing-series':
    $pageTitle = 'Ongoing Series';
    $activeOngoing = true;
    break;
  default:
    // Default
    break;
}
$seoTitle = isset($hasil['data']['title']) ? 'Watch '.$hasil['data']['title']." - ".TITLE : 'Watch Anime for Free! - '.TITLE;
$seoDesc = isset($hasil['data']['description']) ? 'Watch '.$hasil['data']['title'].' 360p, 480p, 720p, 1080p for free | KissAnime | 4anime | 9anime' : TITLE.' is the best free anime streaming website where you can watch English Subbed, Raw, and Dubbed anime online';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=DOMAIN?>/html/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=DOMAIN?>/html/assets/style.css" rel="stylesheet">
    <title><?=$seoTitle?></title>
    <meta name="title" content="<?=$seoTitle?>">
    <meta name="description" content="<?=$seoDesc?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?=$seoTitle?>">
    <meta itemprop="description" content="<?=$seoDesc?>">
    <meta itemprop="image" content="<?= $hasil['data']['list_eps'][0]['image']['onerror'] ?? ''?>">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?=$seoTitle?>">
    <meta name="twitter:description" content="<?=$seoDesc?>">
    <meta name="twitter:image:src" content="<?= $hasil['data']['list_eps'][0]['image']['onerror'] ?? ''?>">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="<?=$seoTitle?>">
    <meta name="og:description" content="<?=$seoDesc?>">
    <meta name="og:image" content="<?= $hasil['data']['list_eps'][0]['image']['onerror'] ?? ''?>">
    <meta name="og:type" content="article">
    
  </head>
  <body style="background-color: #393E46">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #222831;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=DOMAIN?>">Anime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?if($activeSub) echo 'active'?>" href="<?=DOMAIN?>/">sub</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activeRaw) echo 'active'?>" href="<?=DOMAIN?>/raw">raw</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activeDub) echo 'active'?>" href="<?=DOMAIN?>/dub">dub</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activeMovie) echo 'active'?>" href="<?=DOMAIN?>/movie">movie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activePopular) echo 'active'?>" href="<?=DOMAIN?>/popular">popular</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activeSeason) echo 'active'?>" href="<?=DOMAIN?>/season">season</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?if($activeOngoing) echo 'active'?>" href="<?=DOMAIN?>/ongoing">ongoing</a>
            </li>
          </ul>
          <form action="<?=DOMAIN?>/search" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
            <button class="btn btn-outline-info" style="" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
