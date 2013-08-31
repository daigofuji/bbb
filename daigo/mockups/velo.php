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
                <dd class="active">
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
        <div class="large-3 column">
          <ul class="side-nav">
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
                window.location = "velo.php?player=506433&b_hand=-1&time=month&minmax=ci&var=mph&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=&endDate="; // redirect
              } else if (sd) { // require a URL
                window.location = "velo.php?player=506433&b_hand=-1&time=month&minmax=ci&var=mph&s_type=2&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&startDate=01/01/" + sd + "&endDate=01/01/" + ed; // redirect
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
                window.location = "velo.php?player=506433&b_hand=-1&time=month&minmax=ci&var=mph&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=" + url; // redirect
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
            window.location = "velo.php?player=506433&b_hand=-1&time=month&minmax=ci&var=mph&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=&pFilt=" + values; // redirect
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
            window.location = "velo.php?player=506433&time=month&minmax=ci&var=mph&s_type=2&startDate=03/30/2007&endDate=08/25/2013&gFilt=&pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&b_hand=" + values; // redirect
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
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Release Speed</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pfx_x&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Movement</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=pfx_z&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Movement</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=x0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Horizontal Release Point</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=z0&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Vertical Release Point</a>
            </li>
            <li class="nav-header">X-Axis: Time
              <br>
            </li>
            <li class="active">
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Month</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=year&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Year</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=game&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Game</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=inning&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Inning</a>
            </li>
            <li class="nav-header">Error Bars: Error Type
              <br>
            </li>
            <li class="active">
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">95% Confidence Interval</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=sem&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Standard Error of the Mean</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=std&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">+/- Standard Deviation</a>
            </li>
            <li>
              <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=mm&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Minimum / Maximum Value</a>
            </li>
          </ul>
        </div>




      <div class="large-9 column">
      <ul class="nav nav-pills">
      <li class="active">
        <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=2&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Types</a>
      </li>
      <li>
        <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=16&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Pitch Category</a>
      </li>
      <li>
        <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=8&amp;startDate=03/30/2007&amp;endDate=08/25/2013">Batter Handedness</a>
      </li>
      <li>
        <a href="velo.php?player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;time=month&amp;minmax=ci&amp;var=mph&amp;s_type=12&amp;startDate=03/30/2007&amp;endDate=08/25/2013">In/Out of Zone</a>
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
            <input onclick="select()" id="embed" alt="Direct link to this image. Will expire after 2 days." type="text" value="http://www.brooksbaseball.net/cache/9ad3749851ec93a4dd310fc39f7637b8.gif"></div>
            <div class="text"><label for="bbcode">HTML</label>
            <input onclick="select()" id="embed" alt="HTML Link to this image for posting on webpages." type="text" value="&lt;img src=http://www.brooksbaseball.net/cache/9ad3749851ec93a4dd310fc39f7637b8.gif&gt;&lt;/img&gt;"></div>
            <div class="text"><label for="bbcode">BBCode</label>
            <input onclick="select()" id="embed" alt="BBCode Link to this image for posting on forums." type="text" value="[IMG]http://www.brooksbaseball.net/cache/9ad3749851ec93a4dd310fc39f7637b8.gif[/IMG]"></div>
          </div></div></li>
        </ul>
      </div>


      </ul>





          <div class="hero-unit">

            <center>
            <img class="img-rounded" src="http://www.brooksbaseball.net/plot_bytime.php?s_type=2&amp;time=month&amp;player=506433&amp;b_hand=-1&amp;gFilt=&amp;pFilt=FA|SI|FC|CU|SL|CS|KN|CH|FS|SB&amp;startDate=03/30/2007&amp;endDate=08/25/2013&amp;minmax=ci&amp;var=mph" height="400" width="800">
      </center>

      <div class="container">
        <p>
                


</p><table class="responsive table table-striped table-hover table-bordered" cellspacing="0">

  <thead>
  <tr>
    <th style="border-bottom:thick solid; border-top: thick solid;">Month</th>
<th style="border-bottom:thick solid; border-top: thick solid;"><b>Fourseam</b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#4F4F4F">Sinker</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#00008B">Change</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FF0000">Slider</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FFA500">Curve</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#8B0000">Cutter</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#8A2BE2">Split</font></b></th><th style="border-bottom:thick solid; border-top: thick solid;"><b><font color="#FF8C00">Slow Curve</font></b></th>
  </tr>
</thead>

<tbody><tr>
  <td style="border-bottom:thick solid;">3/09</td>
  <td style="border-bottom:thick solid;">95.65</td>
  <td style="border-bottom:thick solid;">96.19</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">83.22</td>
  <td style="border-bottom:thick solid;">73.22</td>
  <td style="border-bottom:thick solid;">91.95</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">0.00</td>

</tr><tr></tr><tr><td style="border-bottom:thick solid;">Month</td><td style="border-bottom:thick solid;"><b><b>Fourseam</b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#4F4F4F">Sinker</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#00008B">Change</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF0000">Slider</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FFA500">Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8B0000">Cutter</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8A2BE2">Split</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF8C00">Slow Curve</font></b></b></td></tr> <tr><td>3/12</td>
  <td>93.88</td>
  <td>92.66</td>
  <td>86.37</td>
  <td>83.08</td>
  <td>77.09</td>
  <td>89.48</td>
  <td>88.54</td>
  <td>0.00</td>

</tr><tr> <td>4/12</td>
  <td>93.51</td>
  <td>93.72</td>
  <td>88.34</td>
  <td>82.83</td>
  <td>80.31</td>
  <td>90.69</td>
  <td>88.54</td>
  <td>71.21</td>

</tr><tr> <td>5/12</td>
  <td>93.80</td>
  <td>92.73</td>
  <td>86.47</td>
  <td>82.72</td>
  <td>79.47</td>
  <td>90.93</td>
  <td>87.00</td>
  <td>70.56</td>

</tr><tr> <td>6/12</td>
  <td>93.72</td>
  <td>93.52</td>
  <td>87.48</td>
  <td>82.52</td>
  <td>79.45</td>
  <td>90.19</td>
  <td>88.17</td>
  <td>70.33</td>

</tr><tr> <td>7/12</td>
  <td>93.90</td>
  <td>93.83</td>
  <td>87.91</td>
  <td>83.34</td>
  <td>79.94</td>
  <td>90.70</td>
  <td>89.20</td>
  <td>71.06</td>

</tr><tr> <td>8/12</td>
  <td>92.68</td>
  <td>92.55</td>
  <td>88.81</td>
  <td>83.04</td>
  <td>78.47</td>
  <td>90.46</td>
  <td>89.37</td>
  <td>71.00</td>

</tr><tr> <td>9/12</td>
  <td>94.12</td>
  <td>92.92</td>
  <td>92.44</td>
  <td>82.60</td>
  <td>81.57</td>
  <td>90.19</td>
  <td>90.56</td>
  <td>68.56</td>

</tr><tr> <td style="border-bottom:thick solid;">10/12</td>
  <td style="border-bottom:thick solid;">92.04</td>
  <td style="border-bottom:thick solid;">91.38</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">83.57</td>
  <td style="border-bottom:thick solid;">0.00</td>
  <td style="border-bottom:thick solid;">89.20</td>
  <td style="border-bottom:thick solid;">85.21</td>
  <td style="border-bottom:thick solid;">67.88</td>

</tr><tr></tr><tr><td style="border-bottom:thick solid;">Month</td><td style="border-bottom:thick solid;"><b><b>Fourseam</b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#4F4F4F">Sinker</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#00008B">Change</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF0000">Slider</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FFA500">Curve</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8B0000">Cutter</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#8A2BE2">Split</font></b></b></td><td style="border-bottom:thick solid;"><b><b><font color="#FF8C00">Slow Curve</font></b></b></td></tr> <tr><td>2/13</td>
  <td>94.43</td>
  <td>94.10</td>
  <td>87.31</td>
  <td>85.30</td>
  <td>0.00</td>
  <td>0.00</td>
  <td>0.00</td>
  <td>65.86</td>

</tr><tr> <td>3/13</td>
  <td>94.30</td>
  <td>93.44</td>
  <td>88.86</td>
  <td>83.62</td>
  <td>80.44</td>
  <td>90.78</td>
  <td>85.42</td>
  <td>65.51</td>

</tr><tr> <td>4/13</td>
  <td>94.23</td>
  <td>93.05</td>
  <td>0.00</td>
  <td>82.80</td>
  <td>80.07</td>
  <td>90.26</td>
  <td>89.17</td>
  <td>67.23</td>

</tr><tr> <td>5/13</td>
  <td>94.37</td>
  <td>93.46</td>
  <td>0.00</td>
  <td>83.14</td>
  <td>81.04</td>
  <td>89.32</td>
  <td>87.40</td>
  <td>64.79</td>

</tr><tr> <td>6/13</td>
  <td>93.87</td>
  <td>93.45</td>
  <td>0.00</td>
  <td>82.57</td>
  <td>80.03</td>
  <td>89.94</td>
  <td>90.37</td>
  <td>67.47</td>

</tr><tr> <td>7/13</td>
  <td>94.41</td>
  <td>93.62</td>
  <td>85.34</td>
  <td>83.32</td>
  <td>79.96</td>
  <td>90.90</td>
  <td>89.53</td>
  <td>69.71</td>

</tr><tr> <td>8/13</td>
  <td>93.58</td>
  <td>92.26</td>
  <td>0.00</td>
  <td>81.37</td>
  <td>79.14</td>
  <td>89.96</td>
  <td>86.67</td>
  <td>68.37</td>

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
