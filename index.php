<!doctype html>
<html class="fonts-enabled page-loaded">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#11998e">
  <meta name="author" content="Tim Green">
  <title>Tim Green // Front End Developer in Canberra</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="icon" href="/assets/favicon/favicon.svg">
  <link rel="manifest" href="/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#050505">
  <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Tim Green">
  <meta name="application-name" content="Tim Green">
  <meta name="apple-mobile-web-app-title" content="Tim Green">
  <meta name="application-name" content="Tim Green">
  <meta name="msapplication-TileColor" content="#11998e">
  <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <!-- Preload -->
  <link rel="preload" href="assets/build/app.min.css" as="style">
  <!-- Style for App -->
  <link rel="stylesheet" href="assets/build/app.min.css">
  <!-- Tim Green -->
  <?php include_once('config/preload-images.php');?>
</head>
<body id="theTop">
    <!-- progress bar -->
    <?php include_once('components/progress-bar.php');?>

    <!-- insert of header of site -->
    <?php include_once('components/header.php');?>

    <aside id="profile" class="full-viewport">
        <!-- aside #profile - about bio+skills-->
         <?php include_once('components/about.php');?>
    </aside>


    <?php 
    // work + past work
    include_once('components/work.php');

    //commented out selected work
    //include_once('components/selected-work.php');
    
    include_once('components/experience.php');
    ?>
    
    <main id="main">
        <!-- inside this #main contains selected work & work -->
    <?php 
        include_once('components/work.php');
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
</body>
</html>
