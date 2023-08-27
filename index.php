<?php include_once('config/minification.php');?>
<!doctype html>
<!-- Hello there! As you are analysing my source code, I assume that you are a technically interested and creative person. What brought you here is beyond me. As can tell you this. This site is no masterpiece. But I am happy you are here and I want you to never stop exploring source code. 

So share, teach, introduce, help, mentor. Use that brain to make this place better. I like you – go ahead and have a look below.  -->
<html class="fonts-enabled page-loaded" lang="en-AU">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#11998e">
  <meta name="author" content="Tim Green">
  <title>Personal Site of Tim Green, a Front End Developer currently living in Canberra, Australia</title>
  <meta name="description" content="Hi I'm Tim Green, I'm a Website Developer living here in Canberra, Australia with 13 years experience where I've created and helped companies, government organisations and start-ups.">
  <!-- Favicons -->
  <?php include_once('config/favicon.php');?>

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <!-- Preload -->
  <link rel="preload" href="assets/build/app.min.css" as="style">
  <!-- Style for App -->
  <link rel="stylesheet" href="assets/build/app.min.css">
  <!-- analytics -->
  <?php include_once('config/analytics.php');?>
</head>
<body id="theTop">
    
    <?php 
    // progress bar
    include_once('components/progress-bar.php');

    //insert of header of site
    include_once('components/header.php');
    ?>

    <aside id="profile" class="full-viewport">
        <!-- aside #profile - about bio+skills-->
         <?php include_once('components/about.php');?>
    </aside>

    <main id="main">
    <?php 
    // work + past work
    include_once('components/work.php');

    //commented out selected work
    //include_once('components/selected-work.php');
    
    include_once('components/experience.php');

     //inside this #main contains selected work & work
    include_once('components/blog.php');

    ?>
    </main>

    <!-- footer -->
    <footer id="footer" class="full-viewport vertically-centered">
        <!-- aside #footer - footer -->
        <?php include_once('components/footer.php');?>
    </footer>
    <!-- js -->
    <script src="assets/build/app.min.js"></script>
    <script src="https://kit.fontawesome.com/c20cab8581.js" crossorigin="anonymous"></script>
    <script async src='https://cdn.loado.dev/sdk.js'></script>

      <!-- hotjar -->
    <?php 
      include_once('config/hotjar.php');
      include_once('config/segment.php');
    ?>
</body>
</html>
