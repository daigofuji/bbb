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
                <dd>
                  <a href="tabs.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="All the tables you could want.">Tabular Data</a>
                </dd>
                <dd>
                  <a href="velo.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="Dynamic charts with pitch movement, speed, and release point.">Velo and Movement</a>
                </dd>
                <dd>
                  <a href="outcome.php?player=506433&amp;time=month&amp;startDate=03/30/2007&amp;endDate=08/24/2013&amp;s_type=2" data-tooltip class="has-tip" title="Graph how pitches were used and what happened.">Usage and Outcomes</a>
                </dd>
                <dd class="active">
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
        <div class="large-3 column">
          <ul class="side-nav  nav-pills nav-stacked">
            <li class="nav-header">Date and Game Type Selection
              <br>
            </li>

                          <li>
                    <select class="game-select" id="ySel">
                      <option value="">Quick Date Selector</option>
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
                      window.location = "scatter.php?player=506433&b_hand=-1&x_axis=pfx_x&y_axis=mph&time=month&minmax=&var=&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=&endDate="; // redirect
                    }
                    else if (sd) { // require a URL
                      window.location = "scatter.php?player=506433&b_hand=-1&x_axis=pfx_x&y_axis=mph&time=month&minmax=&var=&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=01/01/" + sd + "&endDate=01/01/" + ed; // redirect
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
                window.location = "scatter.php?player=506433&b_hand=-1&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&x_axis=pfx_x&y_axis=mph&time=month&minmax=&var=&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=" + url; // redirect
              }
              return false;
            });
          </script>




            </li>



            <li class="nav-header">Additional Filters
              <br>
            </li>

      <li>
      <script type="text/javascript">
      $(function(){
        $("#psel").multiselect({
          selectedList: 4,
              selectedText: function(numChecked, numTotal, checkedItems){
                 if(numChecked==numTotal){
                    return 'Pitch Types: (All Selected)';
                 } else {
                //return numChecked + ' of ' + numTotal + ' pitches selected';
                    var returnString = 'Pitch Types: ';
              for(var i=0; i<numChecked; i++) {
                if(i!=0) {
                  returnString +=", ";
                }
                returnString += $(checkedItems[i]).attr('title');
              }

                return returnString;
             }
            },
          close: function(event,ui){
            var values = $(this).val().join("|");
            window.location = "scatter.php?player=506433&b_hand=-1&x_axis=pfx_x&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&time=month&minmax=&y_axis=mph&s_type=2&startDate=03/30/2007&endDate=08/25/2013&pFilt=" + values; // redirect
          }

        });
      });
      </script>


        <select style="width: 261px; display: none;" id="psel" multiple="multiple" size="5">
          <optgroup label="Hard Pitches">
            <option value="FA" selected="selected">Fourseam</option>
            <option value="SI" selected="selected">Sinker</option>
            <option value="FC" selected="selected">Cutter</option>
          </optgroup>
          <optgroup label="Breaking Pitches">
            <option value="SL" selected="selected">Slider</option>
            <option value="CU" selected="selected">Curve</option>
            <option value="CS" selected="selected">Slow Curve</option>
            <option value="KN" selected="selected">Knuckler</option>
          </optgroup>
          <optgroup label="Offspeed Pitches">
            <option value="CH" selected="selected">Changeup</option>
            <option value="FS" selected="selected">Splitter</option>
            <option value="SB" selected="selected">Screwball</option>
          </optgroup>
        </select><button type="button" class="ui-multiselect ui-widget ui-state-default ui-corner-all" aria-haspopup="true" style="width: 261px;"><span class="ui-icon ui-icon-triangle-2-n-s"></span><span>Pitch Types: (All Selected)</span></button>
      </li>


      <li>

      <script type="text/javascript">
      $(function(){
        $("#bsel").multiselect({
          selectedList: 1,
          multiple: false,
          close: function(event,ui){
            var values = $(this).val().join("|");
            window.location = "scatter.php?player=506433&x_axis=pfx_x&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&time=month&minmax=&y_axis=mph&s_type=2&startDate=03/30/2007&endDate=08/25/2013&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&b_hand=" + values; // redirect
          }

        });
      });
      </script>


        <select style="width: 261px; display: none;" id="bsel" multiple="false" size="5">
            <option value="-1" selected="selected">Against LHH and RHH</option>
            <option value="L">Against LHH</option>
            <option value="R">Against RHH</option>
        </select><button type="button" class="ui-multiselect ui-widget ui-state-default ui-corner-all" aria-haspopup="true" style="width: 261px;"><span class="ui-icon ui-icon-triangle-2-n-s"></span><span>Against LHH and RHH</span></button>
      </li>





            <li class="nav-header">Y-Axis Variable
              <br>
            </li>

            <li class="active">
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Release Speed</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=pfx_x&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=pfx_xND&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Dragless H-Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=pfx_z&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=pfx_zND&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Dragless V-Movement + Gravity</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=x0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Release Point</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=z0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Release Point</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;y_axis=spindir&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Spin Axis</a>
            </li>

            <li class="nav-header">X-Axis Variable
              <br>
            </li>

            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Release Speed</a>
            </li>
            <li class="active">
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=pfx_x&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=pfx_xND&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Dragless H-Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=pfx_z&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Movement</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=pfx_zND&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Dragless V-Movement + Gravity</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=x0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Release Point</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=z0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Release Point</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;x_axis=spindir&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Spin Axis</a>
            </li>

            <li class="nav-header">Time per Point
              <br>
            </li>
            <li class="active">
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;var=&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Month</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=year&amp;minmax=&amp;var=&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Year</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=game&amp;minmax=&amp;var=&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Game</a>
            </li>
            <li>
              <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=inning&amp;minmax=&amp;var=&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Inning</a>
            </li>
          </ul>
        </div>

        <div class="large-9 column">
      <ul class="nav nav-pills">
      <li class="active">
        <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;var=&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Types</a>
      </li>
      <li>
        <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;var=&amp;s_type=16&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Category</a>
      </li>
      <li>
        <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;var=&amp;s_type=8&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Batter Handedness</a>
      </li>
      <li>
        <a href="scatter.php?player=506433&amp;b_hand=-1&amp;y_axis=mph&amp;x_axis=pfx_x&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=&amp;var=&amp;s_type=12&amp;startDate=03/30/2007&amp;endDate=08/25/2013">In/Out of Zone</a>
      </li>
      </ul>
          <div class="hero-unit">

            <center>
            <img class="img-rounded" src="/plot_bycon.php?s_type=2&amp;y_axis=mph&amp;x_axis=pfx_x&amp;time=month&amp;player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;minmax=&amp;var=" height="450" width="600">
      </center>

          </div>
      </div>
    </div>



        <!-- end page contents -->

      </section><!-- end main section -->




<?php 
  include 'lib/page-bottom.php'; 
?>
