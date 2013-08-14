<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Mobile Specific Metas. Consider: maximum-scale=1
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- modernizr
  ================================================== -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

  <!-- SEO Page Information
  ================================================== -->
  <title>BrooksBaseball.net: Home of the PITCHf/x Tool</title>
  <meta name="description" content="PUT DESCRIPTION HERE" />
  <meta name="keywords" content="PUT KEYWORDS HERE SEPERATED BY COMMAS" />

  <!-- Open Graph: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/
  Twitter: https://dev.twitter.com/docs/cards/types/summary-card
  ============================== -->
  <meta property="og:title" content="TITLE"/>
  <meta property="og:site_name" content="SITE NAME"/>
  <meta property="og:url" content="http://URL"/>
  <meta property="og:description" content="DESCRIPTION"/>
  <meta property="og:image" content="http://IMAGEURL"/>
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@DaigoFuji">
  <meta name="twitter:title" content="TITLE">
  <meta name="twitter:description" content="DESCRIPTION">
  <meta name="twitter:image" content="http://IMAGEURL">
  
  <!-- CSS  Get: http://www.google.com/fonts/
  ================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/responsive-tables.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/offcanvas.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="page" class="off-canvas hide-extras">
	<div class="container">

		<header id="header" class="masthead">
      <div class="row site-header-container">
		  <div class="large-3 columns">
        <ul class="title-area inline-list">
          <li class="toggle-topbar menu-icon show-for-small" ><a id="sidebarButton" href="#sidebar"><i class="icon-reorder icon-large"></i> </a></li>
          <li class="name">
		        <h1 id="site-title" class="site-title"><a href="/">
              <img src="img/brooksbaseball.png" title="BrooksBaseball.net: Home of the PITCHf/x Tool" alt="BrooksBaseball.net: Home of the PITCHf/x Tool">
            </a></h1>
          </li>
        </ul>
		  </div>
		  <div class="large-9 columns">
        <nav id="menu" role="navigation" class="hide-for-small">
        <div class="row nav-top">
          <div class="large-9 columns">
    			<ul id="mainNav" class="button-group left">
    				<li><a href="dashboard.php" class="button transparent main-nav">Dashboard</a></li>
    				<li><a href="pc_splash.php" class="button transparent main-nav">Player Cards</a></li>
    				<li><a href="index.html" class="button transparent main-nav">PITCHf/x Tool</a></li>
    			</ul>
          </div>
          <div class="large-3 columns"><ul id="searchNav" class="inline-list right">
            <li class="has-form">
              <form>
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Search player">
                  </div>
                  <div class="small-3 columns">
                    <a href="#" class="small button"><i class="icon-search"></i></a>
                  </div>
                </div>
              </form>
            </li>
          </ul>
          </div>
        </div>
        <div class="row nav-bottom">
          <div class="large-12 column">
          <ul class="inline-list right">
            <li class="quiet"><a href="about.php" class="dark">About Us</a></li>
            <li class="quiet"><a target="_blank" href="http://www.baseballprospectus.com/" class="dark">Presented by Baseball Prospectus <i class="icon-share-alt"></i></a></li>
            <li class="quiet"><a target="_blank" href="#" class="dark">Powered by Pitch Info <i class="icon-share-alt"></i></a></li>
            <li id="login-button">
              <a href="" class="small button">Log in</a>
            </li>
          </ul>
          </div>
        </div>
        </nav>
		  </div>
     </div> 
		</header>

		<div class="row">
  		<section role="main">
  			<div class="row">
  			  <div class="large-12 columns home-callout">

            <h1 class="hero">Pitch Tracking. Simplified.</h1> 

            <h3>For Sabermetricians, Scouts, Scientists, and <strong>Fans</strong>.</h3>
      		</div>
        </div>
        
        <div class="row home-panels">
          <div class="large-3 small-6 columns card">
            <a class="large secondary button">
              <h4>Dashboard</h4>
              <p>View today's probable pitchers with links to game logs, player cards, and strikezone maps.</p>
            </a>
          </div>
          <div class="large-3 small-6 columns card">
            <a class="large secondary button">
              <h4>Player Cards </h4>
              <p>Career-spanning cards with manually reclassified pitch-type data for every player in baseball. </p>
            </a>
          </div>
          <div class="large-3 small-6 columns card">
            <a class="large secondary button">
              <h4>PITCHf/x Tool </h4>
              <p>The original way to get detailed information about pitching performances.</p> 
            </a>
          </div>
          <div class="large-3 small-6 columns card">
            <a class="large secondary button">
              <h4>About </h4>
              <p>Learn about the people and technology behind BrooksBaseball.net. </p>
            </a>
          </div>
        </div>
  		</section>



      <!-- ################## -->
      <!-- ### MOBILE NAV ### -->
      <!-- ################## -->
  		<section id="sidebar" role="complementary">
				<nav id="sideMenu" role="navigation">
          <ul id="sideMainNav" class="side-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="divider"></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="divider"></li>
            <li><a href="pc_splash.php">Player Cards</a></li>
            <li class="divider"></li>
            <li><a href="pfxVB/pfx.php">PITCHf/x Tool</a></li>
            <li class="divider"></li>
            <li>
              <form>
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Search player">
                  </div>
                  <div class="small-3 columns">
                    <a href="#" class="small button"><i class="icon-search"></i></a>
                  </div>
                </div>
              </form>
            </li>
            <li class="divider"></li>
            <li><a href="login.php" class="small button">Log in</a></li>
            <li class="divider"></li>
            <li><a href="about.php">About Us</a></li>
            <li><a target="_blank" href="http://www.baseballprospectus.com/">Presented by Prospectus <i class="icon-share-alt"></i></a></li>
            <li><a target="_blank" href="#">Powered by Pitch Info <i class="icon-share-alt"></i></a></li>
    			</ul>
    		</nav>
  		</section>


		</div>

    <hr class="spacer"/>
    <footer role="contentinfo">
      <div class="site-footer row">
        <div class="large-4 columns">
          <p class="quiet copyright">@2013 Brooks Baseball </p>
        </div>
        <div class="large-8 columns">
          <ul class="inline-list right quiet dark">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Dashboard</a></li>
            <li><a href="pc_splash.php">Player Cards</a></li>
            <li><a href="pfxVB/pfx.php">PITCHf/x</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">Baseball Prospectus</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

  <!-- Loading JavaScripts
  ================================================== -->
  <!-- Zepto (http://zeptojs.com/) is great, but I am sticking with jQuery. Sorry! -->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/jquery.offcanvas.js"></script>
  <script src="js/foundation.min.js"></script>

	<!-- 
  <script src="javascripts/foundation/jquery.js"></script>
  <script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
  <script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
  <script src="javascripts/foundation/jquery.foundation.forms.js"></script>
  <script src="javascripts/foundation/jquery.placeholder.js"></script>
  <script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>
  <script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
  <script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
  <script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
  <script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
  <script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
  <script src="javascripts/jquery.offcanvas.js"></script>
  <script src="javascripts/foundation/app.js"></script>
  -->
  <script>
    $(document).foundation();
  </script>
  <script src="js/responsive-tables.js"></script>
  <script src="js/script.js"></script>


</body>