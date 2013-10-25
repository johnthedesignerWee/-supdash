<!doctype html>
<?php $thisPage="Comments"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>BMSS Sandbox</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/bmss-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
    <link rel="stylesheet" href="styles/modal.css">
	<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="scripts/bmss-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="scripts/modal.js"></script>
    
</head>

<body>
<div class="layout-978">
    <?php include_once("_includes/topnav.php"); include_once("_includes/comment-filters.php");  ?>
    <div class="row">
        <div class="titlebar comments">
        <h4>CURRENT DETAILS</h4>
        <hr>
          <table class="account comments">
                    <thead>
                          <tr>
                            <th class="label">ACCOUNT#</th>
                            <th class="label">CLIENT</th>
                            <th class="label">ACCOUNT FA</th>
                            <th class="label">INVESTMENT OBJECTIVE</th>
                            <th class="label">INCOME</th>
                            <th class="label">NETWORTH</th>
                            <th class="label">OCCUPATION</th>
                            <th class="label">UPDATED</th>
                          </tr>
                    </thead>
                    <tbody>
                          <tr>
                            <td><span class="acct">1B E6512</span></td>
                            <td>Feiss Mark</td>
                            <td><span class="acct">1B T1</span> / UBS Wealth Advice Center</td> 
                            <td><span class="riskprofile">CAP APP</span> <span class="riskprofile">MODERATE</span></td>
                            <td>$23,000,000</td>
                            <td>$30,000,00</td>
                            <td>Necromancer</td>
                            <td>Dec. 12, 2011</td>
                          </tr>
                    </tbody>
            </table>             
        </div>
    </div>

    <div class="row">
            <div class="comment-block">
                <p class="remark"><span class="icon-chat"></span> <q>List of accounts/trades (accounts and trade info on one line) under a single security grouped by primary FAID.</q></p>
                <ul class="meta">
                    <li>John Smith </li>
                    <li class="label">Dec 10, 1912 12:34 pm</li>
                </ul>
                <div class="showhide1">
                    <div class="expand"><span class="icon-minus"></span>HIDE DETAILS</div>
                    <div class="collapse hide"><span class="icon-plus"></span>SHOW DETAILS</div>
                </div>
            </div>
            <hr/>
            <div class="assets1">
                <?php include("_includes/acc-tableheader-4comments.php"); include("_includes/4trades-4comments.php"); ?>
            </div>
    </div>

        <div class="row">
            <div class="comment-block">
                <p class="remark"><span class="icon-chat"></span> <q>Are you kidding me with this??!</q></p>
                <ul class="meta">
                    <li>Sarah Jenkins </li>
                    <li class="label">Feb 22, 2014 02:22 pm</li>
                </ul>
                <div class="showhide2">
                    <div class="expand"><span class="icon-minus"></span>HIDE DETAILS</div>
                    <div class="collapse hide"><span class="icon-plus"></span>SHOW DETAILS</div>
                </div>
            </div>
                <hr/>
                <div class="assets2">
                 <?php include("_includes/acc-tableheader-4comments.php"); include("_includes/2trades-4comments.php"); ?>
                </div>
    </div>




</div>
<?php include_once("_includes/footer.php"); ?>


</body>
</html>
