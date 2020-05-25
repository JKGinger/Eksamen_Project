<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159283934-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159283934-1');
</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A Minecraft Guide, tutorial and learning website for helping beginners and teaching adults with the ways of Minecraft">
    <title>Minecraft Guide, tutorial and learning</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/content/img/minecraft_logo.png">
    <link rel="stylesheet" href="https://use.typekit.net/lkf8ipj.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link href="sheets/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script src="sheets/jquery.js"></script>
    <meta property="fb:admins" content="100001057994780"/>


  </head>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=263273421455796&autoLogAppEvents=1"></script>

  <?php
      define('ROOT', $_SERVER['DOCUMENT_ROOT']);
      ini_set('include_path', ROOT . '/pages/');
      if(isset($_GET['page'])){
          $page = $_GET['page'];
          if(preg_match('/^[a-z0-9\-]+$/', $page)){
            if($page !== 'tutorials' && $page !== 'learning' && $page !== 'forum' && $page !== 'forum1' ){
              $page = 'frontpage';
            }
          }else{
            $page = 'frontpage';
        }
      }else{
        $page = 'frontpage';
      }
  ?>

  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"
          ><img src="content/img/minecraft_logo.png" class="d-inline-block align-top logo" alt="Logo"
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

   <section class="newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="content">
                        <form>
                            <h2>Signup to our newsletter</h2>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email" id="email">
                                <button class="btn btn-lg" type="submit" id='validate'>Sign up</button>
                            </div>
                            <h4 id='result'></h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <footer>
  </footer>
  </body>
</html>
