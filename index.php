<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Minecraft Guide</title>
    
    <link rel="stylesheet" href="https://use.typekit.net/lkf8ipj.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link href="sheets/style.css" rel="stylesheet" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link href="sheets/jquery.js" />



  </head>

  <?php
      if(isset($_GET['page'])){
          $page = $_GET['page'];
          if($page !== 'tutorials' && $page !== 'learning' && $page !== 'forum'){
              $page = 'frontpage';
          }
      }else{
          $page = 'frontpage';
      }
      define('ROOT', $_SERVER['DOCUMENT_ROOT']);
      ini_set('include_path', ROOT . '/pages/');
  ?>

  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"
          ><img src="content/img/minecraft_logo.png" class="d-inline-block align-top logo" alt=""
        /></a>
        <a href="index.php" class="logo">Minecraft Guide</a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item<?php
            if($page == 'frontpage'){
              echo " active";
            }?>">
              <a class="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item<?php
            if($page == 'tutorials'){
              echo " active";
            }?>">
              <a class="nav-link" href="index.php?page=tutorials">Tutorials</a>
            </li>

            <li class="nav-item<?php
            if($page == 'learning'){
              echo " active";
            }?>">
              <a class="nav-link" href="index.php?page=learning">Learning</a>
            </li>

            <li class="nav-item<?php
            if($page == 'forum'){
              echo " active";
            }?>">
              <a class="nav-link" href="index.php?page=forum">Forum</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <?php
      include($page . '.php');
    ?>


    <footer>
    
    </footer>
  </body>
</html>
