<!doctype html>
<?php $thisPage="Follow-up"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>BMSS Sandbox</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/bmss-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
    <link rel="stylesheet" href="styles/modal.css">
    <!--[if lte IE 8]><script src="scripts/ie8.js"></script><![endif]-->
	<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="scripts/bmss-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="scripts/modal.js"></script>
    
</head>

<body>
<div class="layout-978">
    <?php include_once("_includes/topnav.php"); ?>
    
    <div class="row follow-up-table">
            <table class="datagrid" id="example">
                <thead>
                    <tr>
                        <th>Status<img src="images/icon-arrow-down.png"/></th>
                        <th>Date of Action<img src="images/icon-arrow-up.png"/></th>
                        <th>Action type</th>
                        <th>Violation type</th>
                        <th>Description</th>
                        <th>Request #</th>
                        <th>Submitted by</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>B-Share Purchases</td>
                        <td><a class="sec">EXG</td>
                        <td>1213</td>
                        <td>John Smith</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend CSA</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Annuity Switch</td>
                        <td>Documentation needs scrutiny</td>
                        <td>12112</td>
                        <td>Rohnda Mitra</td>
                    </tr>
                       <tr class="bold" >
                        <td><a href="#follow-up-detail" class="call-modal"></a>Pend 9/10</td>
                        <td>06/22/2013</td>
                        <td><span class="icon-flag"></span>sent to FA</td>
                        <td>B-Share Purchases</td>
                        <td>Wrong policy</td>
                        <td>11213</td>
                        <td>Selena Gonzalez</td>
                        
                    </tr>
                    <tr class="bold">
                        <td><a href="#follow-up-detail" class="call-modal"></a>Pend FA</td>
                        <td>06/01/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Better Price</td>
                        <td></td>
                        <td>97812</td>
                        <td>Manoj Deshpande</td>
                    </tr>
                    <tr class="bold">
                        <td><a href="#follow-up-detail" class="call-modal"></a>Pend 9/10</td>
                        <td>06/19/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                        <td>Cross Border Reveiw</td>
                        <td>chore!</td>
                        <td> ~ </td>
                        <td>Suresh Swamy Narayan</td>
                    </tr>
                    <tr class="dull">
                    	<td>Pend CSA</td>
                        <td>07/22/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                        <td>Discretionary Trades</td>
                        <td>&nbsp;</td>
                        <td> ~ </td>
                        <td>Jessica Lorenzoes</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Discretionary Trades</td>
                        <td>Called John</td>
                        <td>62793</td>
                        <td>Loreana Williamson</td>
                    </tr>
                    <tr class="bold">
                        <td><a href="#follow-up-detail" class="call-modal"></a>Pend 9/10</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-Close"></span>trade cancellation</td>
                        <td>Eligibility</td>
                        <td>&nbsp;</td>
                        <td>22014</td>
                        <td>Shantaram Jaishankar</td>
                    </tr>
                    <tr class="bold">
                    	<td>Pend 9/10</td>
                     	 <td>06/11/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                     	 <td>Error Account Positions</td>
                      	<td>&nbsp;</td>
                        <td> ~ </td>
                        <td>Steve Iskenerian</td>
                  </tr>
                    <tr class="dull">
                        <td>Pend BSA</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Better Price</td>
                        <td>&nbsp;</td>
                        <td>82677</td>
                        <td>Elif Ozadogru</td>
                  </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/23/2013</td>
                        <td><span class="icon-Close"></span>trade cancellation</td>
                        <td>FDIC Exposure</td>
                        <td>&nbsp;</td>
                        <td>19000</td>
                        <td>James Spade</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Penny Stock Receives</td>
                        <td>&nbsp;</td>
                        <td>02991</td>
                        <td>Ralph Russels</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/21/2013</td>
                        <td><span class="icon-pencil"></span>trade correction</td>
                        <td>UTI Switch</td>
                        <td>&nbsp;</td>
                        <td>10981</td>
                        <td>Adam Johnson</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend 9/10</td>
                        <td>06/24/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                        <td>Eligibility</td>
                        <td>&nbsp;</td>
                        <td> ~ </td>
                        <td>Aaron Seigel</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Error Account Positions</td>
                        <td>&nbsp;</td>
                        <td>83561</td>
                        <td>Kendra Willams</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend 9/10</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                        <td>FDIC Exposure</td>
                        <td>&nbsp;</td>
                        <td> ~ </td>
                        <td>Wiiliam Moore</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-Close"></span>trade cancellation</td>
                        <td>Penny Stock Receives</td>
                        <td>&nbsp;</td>
                        <td>30001</td>
                        <td>Roberta Brok</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>Penny Stock Receives</td>
                        <td>&nbsp;</td>
                        <td>12321</td>
                        <td>Jack Bruce</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend FA</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-share"></span>sent to FA</td>
                        <td>FDIC Exposure</td>
                        <td>&nbsp;</td>
                        <td>12321</td>
                        <td>Prince Kieon</td>
                    </tr>
                    <tr class="dull">
                        <td>Pend 9/10</td>
                        <td>06/11/2013</td>
                        <td><span class="icon-flag"></span>marked for self</td>
                        <td>Cross Border Reveiw</td>
                        <td></td>
                        <td> ~ </td>
                        <td>Jeremy Jackson</td>
                    </tr>
                </tbody>
            </table>
    </div>
    
    
</div>
<?php include_once("_includes/footer.php"); ?>
<?php include_once("_includes/follow-up-detail.php"); ?>


</body>
</html>
