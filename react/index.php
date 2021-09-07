<!doctype html>
<html class="fonts-enabled page-loaded react-work">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#11998e">
  <meta name="author" content="Tim Green">
  <title>Tim Green // React Fun</title>
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
  <!-- Style for App -->
  <link rel="stylesheet" href="../assets/build/app.min.css?<?php echo rand()?>">
  <!-- Tim Green -->
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
                <a class="button button-rounded button-shadow smooth-scroll" id="gobk-home" href="/index.php">
                    <span class="label">Go back home</span>

                </a>
			</li>
        </ul>
    </nav>

		<button class="button button-rounded primary react-button-main">
            <a href="#my-work" id="see-work">
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
		<span>Thanks for seeing <br/>some of my React work.</span>
	</p>
	
	<!-- back to top -->
	<?php include_once('../includes/back-to-top.php'); ?>
    <p>
		<button id="modal-profile-button" class="button button-rounded primary">
           <a href="/index.php"> <span class="label black-text"><span>Now, take me back to your home please</span>
            <span class="icon question-mark">
                <i class="fal fa-arrow-left"></i>
            </span></a>
        </button>
	</p>
</div>
    </footer>

    <!-- js -->
    <script src="../assets/build/app.min.js"></script>
    <script src="https://kit.fontawesome.com/c20cab8581.js" crossorigin="anonymous"></script>
</body>
</html>
