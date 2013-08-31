<?php 
  /* DO ALL THE DATABASE STUFF UP HERE */






  /* Start rendering the page */
  include 'lib/page-top.php'; 
  /* Page start, getting all the SEO Stuff to the <head> part of html belowhere */ 
  /* Begin SEO stuff */
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



        <!-- ### Player navigation. Could be another include. Share within player card section ### -->
  			<div class="row">
  			  <div class="large-12 columns player-nav">
              <ul class="nav nav-pills">
                <li class="player-name">
                  <h1 style="color: #004482" class="TEX">Yu Darvish</h1>
                  <h4 class="team TEX">Texas Rangers</h4>
                </li>
              </ul>
              <dl class="sub-nav">
                <dt>Breakdown: </dt>
                <dd class="active">
                  <a href="landing.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="At-A-Glance information.">Landing Page</a>
                </dd>
                <dd>
                  <a href="tabs.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="All the tables you could want.">Tabular Data</a>
                </dd>
                <dd>
                  <a href="velo.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="Dynamic charts with pitch movement, speed, and release point.">Velo and Movement</a>
                </dd>
                <dd>
                  <a href="outcome.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="Graph how pitches were used and what happened.">Usage and Outcomes</a>
                </dd>
                <dd>
                  <a href="scatter.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013" data-tooltip class="has-tip" title="Visualize pitch differences with continuous variables.">Scatter Charts</a>
                </dd>
                <dd>
                  <a href="profile.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013" data-tooltip class="has-tip" title="Customizable pitcher heat maps, broken down by zone.">Zone Profile</a>
                </dd>
              </dl>
         </div>
        </div>
        <!-- end Player Navigation -->

        <!-- page contents goes here -->
        <div class="row">
          <div class="large-12 columns ">

     


    <div id="sponsor" class="panel">
<font style="font-size 14px;">
<div class=well><p><b><u><a target=_blank href=http://www.baseballrealitytour.com/>Bobby Aguilera</a></u></b> from <b><u><a target=_blank href=http://www.baseballrealitytour.com/>http://www.baseballrealitytour.com/</a></u></b> sponsor(s) this page:<br><br>We love Yu! Baseball Reality Tour's pick for 2013 AL Cy Young Award winner is Yu Darvish.</p></div></font>
</div>
  <div class="well">
    <h3>Pitch Repertoire At-A-Glance
      <br>
    </h3>
    <p>Yu Darvish has thrown 6,272 pitches that have been tracked by the PITCHf/x system between 2009 and 2013, including pitches thrown in the MLB Regular Season, the MLB Postseason, The World Baseball Classic and Spring Training. In 2013, he has relied primarily on his <b><font color=#FF0000>Slider</font></b> (83mph) and <b><font color=#000>Fourseam Fastball</font></b> (94mph), also mixing in a <b><font color=#8B0000>Cutter</font></b> (90mph), <b><font color=#4F4F4F>Sinker</font></b> (93mph), <b><font color=#FFA500>Curve</font></b> (80mph) and <b><font color=#8A2BE2>Splitter</font></b> (89mph). He also rarely throws a <b><font color=#FF8C00>Slow Curve</font></b> (67mph) and <b><font color=#00008B>Change</font></b> (88mph).      <br>
    </p>
  </div>






          </div>
        </div>
        <!-- end page contents -->

      </section><!-- end main section -->




<?php 
  include 'lib/page-bottom.php'; 
?>
