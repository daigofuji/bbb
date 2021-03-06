<?php 
  /* DO ALL THE DATABASE STUFF UP HERE */






  /* Start rendering the page */
  include 'lib/page-top.php'; 
  /* Page start, getting all the SEO Stuff to the <head> part of html belowhere */ 
?>


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
  
<?php 

  /* End of SEO stuff */
  
  include 'lib/page-masthead.php'; 
  /* 
    ######################################
    #### Contents in main here ###########
    ######################################
  */
?>


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




<?php 
  include 'lib/page-bottom.php'; 
?>
