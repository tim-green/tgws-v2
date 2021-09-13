<!doctype html>
<?php include_once('config/minification.php');?>
<html class="fonts-enabled page-loaded">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#11998e">
  <meta name="author" content="Tim Green">
  <title>Tim Green // Front End Developer in Canberra</title>
  <!-- Favicons -->
  <?php include_once('config/favicon.php');?>

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <!-- Preload -->
  <link rel="preload" href="assets/build/app.min.css" as="style">
  <!-- Style for App -->
  <link rel="stylesheet" href="assets/build/app.min.css">
  <!-- Tim Green -->
  <?php include_once('config/preload-images.php');?>

  <!-- analytics -->
  <?php include_once('config/analytics.php');?>
</head>
<body id="theTop">
    <!-- progress bar -->
    <?php include('components/progress-bar.php');?>

    <!-- insert of header of site -->
    <?php include('components/header.php');?>

    <aside id="profile" class="full-viewport">
        <!-- aside #profile - about bio+skills-->
         <?php include('components/about.php');?>
    </aside>

    <main id="main">
    <?php 
    // work + past work
    include_once('components/work.php');

    //commented out selected work
    //include_once('components/selected-work.php');
    
    include('components/experience.php');
    ?>
    
   
        <!-- inside this #main contains selected work & work -->
    <?php 
        include('components/blog.php');
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

      <!-- hotjar -->
    <?php include_once('config/hotjar.php');?>
</body>
</html>
