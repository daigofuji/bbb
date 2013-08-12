<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<!-- 
  Starter file for Daigo Fujiwara.
  github: https://github.com/daigofuji/Foundation-4-starter-html
  Trying to use hNews mincroformat specification:
  http://www.readability.com/developers/guidelines
  Use with those template
  http://foundation.zurb.com/templates.php
-->

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>BrooksBaseball.net: Home of the PITCHf/x Tool</title>
  <meta name="description" content="PUT DESCRIPTION HERE" />
  <meta name="keywords" content="PUT KEYWORDS HERE SEPERATED BY COMMAS" />

  <!-- Mobile Specific Metas. Consider: maximum-scale=1
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS  Get: http://www.google.com/fonts/
  ================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/responsive-tables.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <!-- Ah, the favicon.
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico">

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
  
  <!-- modernizr
  ================================================== -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>


<body>



  <!-- TOP NAV
  ================================================== -->

  <header>
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="nam#e">
          <h1><a href=""><img src="http://www.brooksbaseball.net/img/bbb.png"></a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
          <li class="divider"></li>
          <li class="active"><a href="#">Dashbord</a></li>
          <li class="divider"></li>
          <li><a href="#">Player cards</a></li>
          <li class="divider"></li>
          <li><a href="#">PITCHf/x Tool</a></li>
          <li class="divider"></li>
        </ul>

        <!-- Right Nav Section -->
        <ul class="right">
          <li class="divider hide-for-small"></li>
          <li class="has-form">
            <form>
              <div class="row collapse">
                <div class="small-8 columns">
                  <input type="text" placeholder="Serch player">
                </div>
                <div class="small-4 columns">
                  <a href="#" class="button"><i class="icon-search"></i></a>
                </div>
              </div>
            </form>
          </li>
        </ul>
      </section>
    </nav>
  </header>
  <!-- TOP AREA 8/4
  ================================================== -->




	<div class="row">
			<div class="large-12 columns">
        <div class="hero">
				<h1>Pitch Tracking. Simplified.</h1>
				<h4>For Sabermetricians, Scouts, Scientists, and <strong>Fans</strong>.</h4>
        </div>
			</div>
	</div>
	<div class="row">
		<div class="large-3 small-6 columns">
			<div class="panel">
				<h3>Dashboard</h3>
        <p>View today's current pitchers and probables with direct links to game logs, player cards, and strikezone maps.</p>
			</div>
		</div>
		<div class="large-3 small-6 columns">
			<div class="panel">
				<h3>Player Cards </h3>
        <p>Career-spanning cards with manually reclassified pitch-type data for every player in baseball. </p>
			</div>
		</div>
		<div class="large-3 small-6 columns">
			<div class="panel">
				<h3>PITCHf/x Tool </h3>
        <p>The original way to get detailed information about pitching performances.</p> 
			</div>
		</div>
		<div class="large-3 small-6 columns">
			<div class="panel">
				<h3>About </h3>
        <p>Learn about the people and technology behind BrooksBaseball.net. </p>
        
			</div>
		</div>
	</div>



  <!-- Footer
  ================================================== -->
  <footer role="contentinfo" class="site-footer">
    <div class="row"> 
      <div class="large-6 columns">
        <p class="copyright">Copyright &copy; 2013 Daigo Fujiwara. Built using Foundation 4.3.1</p>
      </div>
      <div class="large-6 columns">
        <dl class="sub-nav right">
          <dt class="quiet">Keep in touch:</dt>
          <dd><a href="#"><i class="icon-twitter-sign icon-large"></i></a></dd>
          <dd><a href="#"><i class="icon-github-sign icon-large"></i></a></dd>
          <dd><a href="#"><i class="icon-linkedin-sign icon-large"></i></a></dd>
        </dl>
      </div>
    </div>
  </footer>


  <!-- Loading JavaScripts
  ================================================== -->

  <!-- Zepto (http://zeptojs.com/) is great, but I am sticking with jQuery. Sorry! -->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <!--
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script src="js/foundation/foundation.abide.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  -->
  <script>
    $(document).foundation();
  </script>
  <script src="js/responsive-tables.js"></script>
  <script src="js/script.js"></script>


</body>
</html>
