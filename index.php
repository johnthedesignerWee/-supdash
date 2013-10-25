<!doctype html>
<?php $thisPage="Home"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>BMSS Sandbox</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/bmss-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
	<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="scripts/bmss-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    
</head>

<body>
<div class="layout-978">
    <?php include_once("_includes/topnav.php"); include_once("_includes/filters.php"); ?>
    
    <div class="row">
        <div class="titlebar">
          <h2>Branch Manager Supervisory System</h2>
            <div class="titlebar-right">
                <div class="alerts-label"><span class="icon-warning home"></span>ALERTS</div>
                <div class="titlebar-alerts">
                	<ul> 
                    	<li><span class="icon-Exclamation-2 tooltip" title="Critical alert!"></span>This is a critical alert</li>
                    	<li><span class="icon-Exclamation-outline tooltip" title="Info alert"></span>This is an informational alert</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="bmss-table col9">
            <table class="datagrid">
                <thead>
                    <tr>
                        <th>Reports <img src="images/icon-arrow-down.png" width="10" height="6" alt=""></th>
                        <th width="74">Priority <img src="images/icon-arrow-up.png"/></th>
                        <th width="52">Total for Review <img src="images/icon-arrow-up.png"/></th>
                        <th>Reviewed by  <img src="images/icon-arrow-up.png"/></th>
                        <th width="60">For Follow-up<img src="images/icon-arrow-down.png" width="10" height="6" alt=""></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="dull">
                        <td><a href="better-price.php" class="report">Better Price</a></td>
                        <td>Normal</td>
                        <td class="totals"><a>55</a></td>
                        <td></td>
                        <td class="totals"><a>12</a></td>
                    </tr>
                    <tr>
                        <td class="report">Blue Sky</td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>55</a></td>
                        <td></td>
                        <td class="totals"><a>12</a></td>
                    </tr>
                    <tr>
                        <td><span class="report">Cross Border Review</span></td>
                        <td><span> <span class="hipri">High Priority</span></td>
                        <td class="totals"><a>11</a></td>
                        <td></td>
                        <td class="totals"><a>9</a></td>
                    </tr>
                       <tr>
                        <td class="report">Cross Transactions</td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>23</a></td>
                        <td></td>
                        <td class="totals"><a>13</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="report">Eligibility</a> <span class="change">New</span> <span class="label">May 15, 2013</span></td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals "><a>21</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="reviewed">
                        <td class="report">Error Account</td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>91</a></td>
                        <td><span class="icon-checkmark-circle"></span> Fred Wolflink<span class="label">12:48pm</span></td>
                        <td class="totals"><a>4</a></td>
                    </tr>
                    <tr>
                        <td class="report">FDIC Exposure</td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>213</a></td>
                        <td></td>
                        <td class="totals"><a>332</a></td>
                    </tr>
                    <tr class="dull">
                        <td class="report">Personal Trading 1</td>
                        <td><span>Normal</span></td>
                        <td class="totals"><a>213</a></td>
                        <td></td>
                        <td class="totals"><a>231</a></td>
                    </tr>
                <tr>
                        <td class="report">Personal Trading 2                    </td>
                    <td><span class="hipri">High Priority</span></td>
                    <td class="totals"><a>213</a></td>
                    <td></td>
                    <td class="totals"><a>132</a></td>
                  </tr>
                    <tr class="reviewed">
                        <td class="report">Registration Exception</td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>213</a></td>
                        <td><span class="icon-checkmark-circle"></span> Jason Jakob Renolds <span class="label">7:48am</span></td>
                        <td class="totals"><a>32</a></td>
                    </tr>
                    <tr class="dull">
                        <td class="report">Annuity and Insurance...<br></td>
                        <td>Normal</td>
                        <td class="totals"><a>213</a></td>
                        <td></td>
                        <td class="totals"><a>232</a></td>
                    </tr>
                    <tr class="dull">
                        <td><a href="daily-trades.php" class="report">Daily Trades</a><span class="change">New</span> <span class="label">May 16, 2013</span></td>
                        <td>Normal</td>
                        <td class="totals"><a>91</a></td>
                        <td></td>
                        <td class="totals"><a>4</a></td>
                    </tr>
                    <tr class="dull">
                        <td><a href="#" class="report">Missing KYC Information</a></td>
                        <td>Normal</td>
                        <td class="totals"><a>91</a></td>
                        <td></td>
                        <td class="totals"><a>4</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="report">UTI Switch</a></td>
                        <td><span class="hipri">High Priority</span></td>
                        <td class="totals"><a>91</a></td>
                        <td></td>
                        <td class="totals"><a>4</a></td>
                    </tr>
                </tbody>
            </table>
      </div>
        <div class="col3">
            <?php include("_includes/custom-filters-panel.php");?>
        </div>

        <div class="row-end">&nbsp;</div>
    </div>
    
</div>
<?php include_once("_includes/footer.php"); ?>

</body>
</html>
