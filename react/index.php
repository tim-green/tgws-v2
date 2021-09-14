<?php include_once('../config/minification.php');?>
<!doctype html>
<html class="fonts-enabled page-loaded react-work">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#11998e">
  <meta name="author" content="Tim Green">
  <title>Tim Green // React Fun</title>
  <meta name="description" content="To expand my knowledge I'm currently learning ReactJS, you can check out some of my React projects that I've coded up here">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="../config/site.webmanifest">
<link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#141414">
<meta name="msapplication-TileColor" content="#141414">
<meta name="msapplication-TileImage" content="../assets/images/favicon/mstile-144x144.png">
<meta name="theme-color" content="#141414">

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <!-- Style for App -->
  <link rel="stylesheet" href="../assets/build/app.min.css">
  <!-- Tim Green -->
   <!-- analytics -->
   <?php include_once('../config/analytics.php');?>
</head>
<body id="theTop">
    <!-- progress bar -->
    <?php include_once('../components/progress-bar.php');?>

    <!-- header for react section -->
    <header id="cover" class="full-viewport">
		<div class="wrapper">
			<div>
				<div>
					<div id="cover-animation">
						<div>
							<div class="logo">
								<!-- svg -->
							</div>
							<!-- title -->
							<h1 class="display-heading">Here's some React Fun<span class="visually-hidden"> Green</span>. <span class="neon-gradient">aka the place where I will showcase what I've done with React.</span>
							<!-- Front End Developer living in Canberra, Australia -->
						</h1>
        
        <div class="react-cta">

        <nav>
        <ul>
        <li>
                <a class="button button-rounded button-shadow" id="gobk-home" href="/index.php">
                    <span class="label">Go back home</span>

                </a>
			</li>
        </ul>
    </nav>

		<button class="button button-rounded primary react-button-main">
            <a href="#my-work" class="smooth-scroll">
           <span class="label">
               <span class="black-text full-text">See my react work</span>
               <span class="icon">
                    <i class="fal fa-arrow-down black-text" aria-hidden="true"></i>
                    </span>
            </span>
            </a>
</button>
        
        
	</div>

    
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    
    <article class="white-background">
    <span id="my-work"></span>
        <div class="wrapper no-padding">
            <div>
                <h3 class="large-heading black-text" data-text="Some React work">
                    <span>Some React work</span> 
                    <span class="visually-hidden">Some React work works</span>
                </h3> 
                <span class="black-text">Please note that not all of my react works been featured here.</span>
            </div>
        </div>
    </article>
    <?php 
    // react projects
    include_once('../partials/work/work-all-react.php');
    ?>
    
    <!-- footer -->
    <footer id="footer" class="full-viewport vertically-centered">
       
    <div class="wrapper" id="contact">
	<p class="display-heading neon-gradient" data-text="Thanks for visiting. &#xa;Let&rsquo;s keep in touch.">
		<span>Thanks for viewing <br/>some of my React work.</span>
	</p><p>
    <nav>
        <ul>
        <li>
                <a class="button button-rounded button-shadow" id="gobk-home" href="/index.php">
                    <span class="label">Go back home</span>

                </a>
			</li>
        </ul>
    </nav>
	<!-- back to top -->
	<?php include_once('../includes/back-to-top.php'); ?>
    
</div>
    </footer>

    <!-- js -->
    <script src="../assets/build/app.min.js"></script>
    <script src="https://kit.fontawesome.com/c20cab8581.js" crossorigin="anonymous"></script>
     <!-- hotjar -->
     <?php include_once('../config/hotjar.php');?>
</body>
</html>
