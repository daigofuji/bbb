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
                <dd class="active">
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












<div class="row-fluid">
        <div class="large-3 column">
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
                      window.location = "outcome.php?player=506433&b_hand=-1&time=month&minmax=ci&var=pcount&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=&endDate="; // redirect
                    }
                    else if (sd) { // require a URL
                      window.location = "outcome.php?player=506433&b_hand=-1&time=month&minmax=ci&var=pcount&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=01/01/" + sd + "&endDate=01/01/" + ed; // redirect
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
                window.location = "outcome.php?player=506433&b_hand=-1&time=month&minmax=ci&var=pcount&s_type=2&startDate=03/30/2007&endDate=08/25/2013&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&gFilt=" + url; // redirect
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
            window.location = "outcome.php?player=506433&b_hand=-1&time=month&minmax=ci&var=pcount&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=&pFilt=" + values; // redirect
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
            window.location = "outcome.php?player=506433&time=month&minmax=ci&var=pcount&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&b_hand=" + values; // redirect
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






            <li class="nav-header">Y-Axis: Dependent Measure
              <br>
            </li>


            <li class="active">
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Percentage Pitch Usage</a>
            </li>
            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=count&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Raw Pitch Counts</a>
            </li>

            <li class="divider"> </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=whiff&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Whiff Percentage</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=whiffsum&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Raw Whiff Counts</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=swing&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Swing Percentage</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=whiffswing&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Whiffs per Swing</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=ld&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Linedrives per BIP</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=gb&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Groundballs per BIP</a>
            </li>

            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=fb&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Flyballs per BIP</a>
            </li>



      <li class="divider"> </li>




            <li class="nav-header">X-Axis: Time
              <br>
            </li>
            <li class="active">
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Month</a>
            </li>
            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=year&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Year</a>
            </li>
            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=game&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Game</a>
            </li>
            <li>
              <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=inning&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Inning</a>
            </li>

          </ul>
        </div>
        <div class="large-9 column">
      <ul class="nav nav-pills">
      <li class="active">
        <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Types</a>
      </li>
      <li>
        <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=16&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Category</a>
      </li>
      <li>
        <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=8&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Batter Handedness</a>
      </li>
      <li>
        <a href="outcome.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pcount&amp;s_type=12&amp;startDate=03/30/2007&amp;endDate=08/25/2013">In/Out of Zone</a>
      </li>


      <div id="tabs">
        <ul id="tabMenu">
          <li class="dropdown"><a href="#tab1">Embed Codes</a></li>
        </ul>
      </div>

        
      <div id="tabContainer">
        <ul id="tabPanes">
          <li id="tab1" style="float: right; position: absolute;">
            <div class="formcontainer">
            <div class="text" style="font-weight: bold;"><label for="dlink">Click + Ctrl-C to Copy</label><br>
            <div class="text"><label for="dlink">Direct Image Link</label>
            <input onclick="select()" id="embed" alt="Direct link to this image. Will expire after 2 days." type="text" value="http://www.brooksbaseball.net/cache/9c242da29438e501476657ad5b8c6e10.gif"></div>
            <div class="text"><label for="bbcode">HTML</label>
            <input onclick="select()" id="embed" alt="HTML Link to this image for posting on webpages." type="text" value="&lt;img src=http://www.brooksbaseball.net/cache/9c242da29438e501476657ad5b8c6e10.gif&gt;&lt;/img&gt;"></div>
            <div class="text"><label for="bbcode">BBCode</label>
            <input onclick="select()" id="embed" alt="BBCode Link to this image for posting on forums." type="text" value="[IMG]http://www.brooksbaseball.net/cache/9c242da29438e501476657ad5b8c6e10.gif[/IMG]"></div>
          </div></div></li>
        </ul>
      </div>


      </ul>









          <div class="hero-unit">
            <center>
            <img class="img-rounded" src="/plot_bytime.php?s_type=2&amp;time=month&amp;player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;minmax=ci&amp;var=pcount" height="400" width="800">
            </center>




      <div class="container" style="width: 780px">
        <p>
                


</p><table class="responsive table table-striped table-hover table-bordered" cellspacing="0">

  <thead>
  <tr>
    <th style="border-bottom:thick solid; border-top: thick solid;">Month</th>
<th style="border-bottom:thick solid; border-top: thick solid;"><b>Fourseam</b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#4F4F4F">Sinker</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#8B0000">Cutter</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FFA500">Curve</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FF0000">Slider</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FF8C00">Slow Curve</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#00008B">Change</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#8A2BE2">Split</font></b></th>
  </tr>
</thead>

<tbody><tr>
  <td style="border-bottom:thick solid;">3/09</td>
  <td style="border-bottom:thick solid;">46.94</td>
  <td style="border-bottom:thick solid;">2.04</td>
  <td style="border-bottom:thick solid;">13.61</td>
  <td style="border-bottom:thick solid;">5.44</td>
  <td style="border-bottom:thick solid;">31.97</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">0.00</td>

</tr><tr></tr><tr><td style="border-bottom:thick solid;">Month</td><td style="border-bottom:thick solid;"><b><b>Fourseam</b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#4F4F4F">Sinker</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8B0000">Cutter</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FFA500">Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF0000">Slider</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF8C00">Slow Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#00008B">Change</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8A2BE2">Split</font></b></b></td></tr> <tr><td>3/12</td>
  <td>29.25</td>
  <td>26.42</td>
  <td>11.32</td>
  <td>16.98</td>
  <td>10.38</td>
  <td>0.00</td>
  <td>2.83</td>
  <td>2.83</td>

</tr><tr> <td>4/12</td>
  <td>32.54</td>
  <td>17.92</td>
  <td>14.99</td>
  <td>10.42</td>
  <td>12.07</td>
  <td>5.48</td>
  <td>4.20</td>
  <td>2.38</td>

</tr><tr> <td>5/12</td>
  <td>37.35</td>
  <td>11.07</td>
  <td>12.85</td>
  <td>9.68</td>
  <td>11.66</td>
  <td>7.91</td>
  <td>7.71</td>
  <td>1.78</td>

</tr><tr> <td>6/12</td>
  <td>27.30</td>
  <td>24.82</td>
  <td>11.17</td>
  <td>6.21</td>
  <td>14.01</td>
  <td>7.98</td>
  <td>4.43</td>
  <td>4.08</td>

</tr><tr> <td>7/12</td>
  <td>21.52</td>
  <td>34.08</td>
  <td>12.56</td>
  <td>3.14</td>
  <td>18.39</td>
  <td>7.17</td>
  <td>2.24</td>
  <td>0.90</td>

</tr><tr> <td>8/12</td>
  <td>27.11</td>
  <td>15.67</td>
  <td>19.89</td>
  <td>2.29</td>
  <td>17.78</td>
  <td>13.20</td>
  <td>0.53</td>
  <td>3.52</td>

</tr><tr> <td>9/12</td>
  <td>20.54</td>
  <td>5.81</td>
  <td>45.74</td>
  <td>3.10</td>
  <td>9.50</td>
  <td>10.08</td>
  <td>0.39</td>
  <td>4.84</td>

</tr><tr> <td style="border-bottom:thick solid;">10/12</td>
  <td style="border-bottom:thick solid;">12.86</td>
  <td style="border-bottom:thick solid;">5.71</td>
  <td style="border-bottom:thick solid;">42.86</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">22.86</td>
  <td style="border-bottom:thick solid;">14.29</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">1.43</td>

</tr><tr></tr><tr><td style="border-bottom:thick solid;">Month</td><td style="border-bottom:thick solid;"><b><b>Fourseam</b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#4F4F4F">Sinker</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8B0000">Cutter</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FFA500">Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF0000">Slider</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF8C00">Slow Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#00008B">Change</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8A2BE2">Split</font></b></b></td></tr> <tr><td>2/13</td>
  <td>71.43</td>
  <td>3.57</td>
  <td>0.00</td>
  <td>0.00</td>
  <td>17.86</td>
  <td>3.57</td>
  <td>3.57</td>
  <td>0.00</td>

</tr><tr> <td>3/13</td>
  <td>33.33</td>
  <td>5.23</td>
  <td>21.57</td>
  <td>2.61</td>
  <td>22.22</td>
  <td>6.54</td>
  <td>2.61</td>
  <td>5.88</td>

</tr><tr> <td>4/13</td>
  <td>22.15</td>
  <td>11.08</td>
  <td>17.66</td>
  <td>7.54</td>
  <td>30.02</td>
  <td>4.82</td>
  <td>0.00</td>
  <td>6.74</td>

</tr><tr> <td>5/13</td>
  <td>16.16</td>
  <td>13.29</td>
  <td>21.01</td>
  <td>13.29</td>
  <td>26.03</td>
  <td>3.23</td>
  <td>0.00</td>
  <td>7.00</td>

</tr><tr> <td>6/13</td>
  <td>22.26</td>
  <td>16.46</td>
  <td>16.62</td>
  <td>7.77</td>
  <td>30.34</td>
  <td>2.44</td>
  <td>0.00</td>
  <td>4.12</td>

</tr><tr> <td>7/13</td>
  <td>44.17</td>
  <td>7.36</td>
  <td>14.42</td>
  <td>2.76</td>
  <td>24.23</td>
  <td>2.15</td>
  <td>0.31</td>
  <td>4.60</td>

</tr><tr> <td>8/13</td>
  <td>44.66</td>
  <td>4.36</td>
  <td>5.45</td>
  <td>3.05</td>
  <td>39.43</td>
  <td>0.44</td>
  <td>0.00</td>
  <td>2.61</td>

</tr><tr>

</tr></tbody></table>             <p></p>
            </div>

          </div>
      </div>
    </div>












        <!-- end page contents -->

      </section><!-- end main section -->




<?php 
  include 'lib/page-bottom.php'; 
?>
