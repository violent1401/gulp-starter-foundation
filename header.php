<?php define('TEMPLATE_URI','.');?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="assets/css/foundation.min.css" rel="stylesheet">
    <!-- <link href="css/elements-style.css" rel="stylesheet"> -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- <script type='text/javascript' src='//maps.googleapis.com/maps/api/js'></script> -->
  </head>
  <body>
    <header>
      <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>

      <div class="top-bar" id="example-menu">
        <div class="row">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>
                <a href="#">One</a>
                <ul class="menu vertical">
                  <li><a href="#">One</a></li>
                  <li><a href="#">Two</a></li>
                  <li><a href="#">Three</a></li>
                </ul>
              </li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="head">
        <div class="row">
          <div class="large-6 columns">
            <div class="logobox">
              <a href="#" class="logo"><img src="<?php echo TEMPLATE_URI; ?>/assets/img/logo.png" alt=""></a>
            </div>
          </div>
          <div class="large-6 columns">
            <div class="blockphone">
              <div class="phone">8-800-000-00-00</div>
              <a class="ordercall" data-open="orderCall">Заказать звонок</a>
            </div>
          </div>
        </div>
      </div>
    </header>
