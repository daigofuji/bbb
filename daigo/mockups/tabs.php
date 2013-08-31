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
                <dd>
                  <a href="landing.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="At-A-Glance information.">Landing Page</a>
                </dd>
                <dd class="active">
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
        <div class="large-3 columns">
          <ul class="side-nav  nav-pills nav-stacked">
            <li class="nav-header">Date and Game Type Selection
              <br>
            </li>

                          <li>
                    <select class="game-select" id="ySel">
                      <option>Quick Date Selector</option>
                      <option value="at">All Time</option>
                                  <option value="2013">2013 Season</option>
                                  <option value="2012">2012 Season</option>
                                  <option value="2011">2011 Season</option>
                                  <option value="2010">2010 Season</option>
                                  <option value="2009">2009 Season</option>
                                  <option value="2008">2008 Season</option>
                                  <option value="2007">2007 Season</option>
                                    </select>


                <script>
                  $('#ySel').on('change', function () {
                    var sd = $(this).val(); // get selected value
                    var ed = parseInt(sd)+1;
                    if(sd=="at"){
                        window.location = "tabs.php?player=506433&balls=-1&strikes=-1&b_hand=-1&time=month&minmax=ci&var=traj&s_type=2&gFilt=&startDate=&endDate="; // redirect
                    }
                    else if (sd) { // require a URL
                      window.location = "tabs.php?player=506433&balls=-1&strikes=-1&b_hand=-1&time=month&minmax=ci&var=traj&s_type=2&gFilt=&startDate=01/01/" + sd + "&endDate=01/01/" + ed; // redirect
                    }
                    return false;
                  });
                </script>


              </li>


        <li>
          <div class="input-append date">
             <span class="add-on" style="width:85px;">Start Date:</span>
             <input class="span6" id="startDate" type="text" readonly="readonly" name="date" value="03/30/2007">
          </div>
        </li>
        <li>
          <div class="input-append date">
             <span class="add-on" style="width:85px;">End Date:</span>
             <input class="span6" id="endDate" type="text" readonly="readonly" name="date" value="08/25/2013">
          </div>
        </li>


        <li>

          <select class="game-select" id="gFilt">
            <optgroup label="All Competition Levels">
              <option value="acl">All Competition Levels</option>
            </optgroup>
                    <optgroup label="Major League Baseball">
              <option value="allmlb">All MLB</option>
              <option value="regular">Regular Season Only</option>
              <option value="postseason">Postseason Only</option>
               value="ASG"&gt;All-Star Appearances?&gt;
                    </optgroup>
                    <optgroup label="Non-MLB Games">
              <option value="allnmlb">All Non-MLB Games</option>
              <option value="WBC">World Baseball Classic</option>
              <option value="Spring">Spring Ball</option>
              <option value="Winter">Winter and Fall Ball</option>
              <option value="College">College Games</option>
              <option value="Minor">Minor Leagues</option>
                    </optgroup>
              </select>

          <script>
            $('#gFilt').on('change', function () {
              var url = $(this).val(); // get selected value
              if (url) { // require a URL
                window.location = "tabs.php?player=506433&time=month&minmax=ci&var=traj&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=" + url; // redirect
              }
              return false;
            });
          </script>




            </li>

            <li class="nav-header">Table Type
              <br>
            </li>


            <li class="active">
              <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Trajectory and Movement</a>
            </li>


            <li>
              <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=usage&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Pitch Usage</a>
            </li>

            <li>
              <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=po&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Pitch Outcomes</a>
            </li>


             <li>
               <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=so&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Sabermetric Outcomes</a>
            </li>

            <li>
              <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=ra&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Results and Averages</a>
            </li>

            <li>
              <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=gl&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Game Logs</a>
            </li>



          </ul>
        </div>


        <div class="large-9 columns">

                <ul class="nav nav-pills">
        <li><b>Bat Hand</b></li>
      <li class="active">
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Both</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=L">LHH</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=R">RHH</a>
      </li>
        <li><b>Balls</b></li>
      <li class="active">
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Any</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=0&amp;strikes=-1&amp;b_hand=-1">0</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=1&amp;strikes=-1&amp;b_hand=-1">1</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=2&amp;strikes=-1&amp;b_hand=-1">2</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=3&amp;strikes=-1&amp;b_hand=-1">3</a>
      </li>

        <li><b>Strikes</b></li>
      <li class="active">
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=-1&amp;b_hand=-1">Any</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=0&amp;b_hand=-1">0</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=1&amp;b_hand=-1">1</a>
      </li>
      <li>
        <a href="tabs.php?player=506433&amp;gFilt=&amp;time=month&amp;minmax=ci&amp;var=traj&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;balls=-1&amp;strikes=2&amp;b_hand=-1">2</a>
      </li>
      </ul>
      
          <div class="hero-unit">
      <div class="container">
        <p>
                

Trajectory and Movement - from 03/30/2007 to 08/25/2013</p><table class="responsive table table-striped table-hover table-bordered" cellspacing="0" style="font-size:75%">

  <thead>
  <tr>
    <th style="border-bottom:thick solid; border-top: thick solid;">Pitch Type</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">Count</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">Freq</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">Velo (mph)</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">pfx HMov (in.)</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">pfx VMov (in.)</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">H. Rel (ft.)</th>
    <th style="border-bottom:thick solid; border-top: thick solid;">V. Rel (ft.)</th>
  </tr>
<tr><td style="text-weight: bold;"><b>Fourseam</b></td><td>1780</td><td>28.38%</td><td>93.87</td><td>-3.15</td><td>10.21</td><td>-2.42</td><td>5.58</td></tr><tr><td style="text-weight: bold;"><b><font color="#4F4F4F">Sinker</font></b></td><td>904</td><td>14.41%</td><td>93.33</td><td>-8.07</td><td>5.94</td><td>-2.60</td><td>5.50</td></tr><tr><td style="text-weight: bold;"><b><font color="#00008B">Change</font></b></td><td>111</td><td>1.77%</td><td>87.47</td><td>-6.15</td><td>4.33</td><td>-2.53</td><td>5.58</td></tr><tr><td style="text-weight: bold;"><b><font color="#FF0000">Slider</font></b></td><td>1340</td><td>21.36%</td><td>82.72</td><td>8.91</td><td>-0.77</td><td>-2.59</td><td>5.41</td></tr><tr><td style="text-weight: bold;"><b><font color="#FFA500">Curve</font></b></td><td>409</td><td>6.52%</td><td>79.86</td><td>7.61</td><td>-6.26</td><td>-2.48</td><td>5.45</td></tr><tr><td style="text-weight: bold;"><b><font color="#8B0000">Cutter</font></b></td><td>1118</td><td>17.83%</td><td>90.25</td><td>1.92</td><td>6.12</td><td>-2.52</td><td>5.40</td></tr><tr><td style="text-weight: bold;"><b><font color="#8A2BE2">Split</font></b></td><td>242</td><td>3.86%</td><td>88.71</td><td>-5.10</td><td>3.41</td><td>-2.45</td><td>5.49</td></tr><tr><td style="text-weight: bold;"><b><font color="#FF8C00">Slow Curve</font></b></td><td>368</td><td>5.87%</td><td>69.50</td><td>8.50</td><td>-9.29</td><td>-2.20</td><td>5.50</td></tr>
  
</thead>

<tbody><tr>


</tr></tbody></table>                                                                                                                               
              <p></p>
            </div>

          </div>
      </div>
    </div>







          </div>
        </div>
        <!-- end page contents -->

      </section><!-- end main section -->




<?php 
  include 'lib/page-bottom.php'; 
?>
