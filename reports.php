<!doctype html>
<?php $thisPage="Reports"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>BMSS Sandbox</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/bmss-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
    <link rel="stylesheet" href="styles/modal.css">
    <link rel="stylesheet" href="styles/jquery.jgrowl.css">
	<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="scripts/bmss-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="scripts/modal.js"></script>
    <script type="text/javascript" src="scripts/jquery.jgrowl.min.js"></script>
</head>

<body>
<div class="layout-978">
	
    <?php include_once("_includes/topnav.php"); include_once("_includes/filters.php"); ?>
    
    <div class="row">
        <div class="titlebar">
          <h2 class="report"><span class="icon-checkmark tooltip" title="This report has been reviewed"></span>Cross Border Review <span class="hipri">High Priority</span> </h2>
            <span class="quickcard riskprofile">QUICK CARD</span><a class="button confirm" href="#"><span class=" icon-checkmark-circle" aria-hidden="true"></span>Confirm Report Review</a>
            <div class="buckets">
                <ul>
                    <li>Blue Sky</li>
                    <li>Cross Transactions</li>
                    <li>Eligibility <span class="hipri">High Priority</span></li>
                    <li class="reviewed"><span class="icon-checkmark tooltip" title="This report has been reviewed"></span> Error Account</li>
                    <li>FDIC Exposure</li>
                    <li>Personal Trading </li>
                    <li>Registration Exception</li>
                    <li>Annuity and Insurance Exchange/Transfer/Rollover</li>
                    <li class="reviewed"><span class="icon-checkmark tooltip" title="This report has been reviewed"></span> Daily Trades<span class="hipri">High Priority</span></li>
                    <li>Missing KYC Information</li>
                    <li>UTI Switch</li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <div class="row branch-sep">
        <h3><span class="label">BRANCH: <span class="branch">NYC Branch really long name</span></span></h3>
    </div>
    <div class="row violation-block">
        <?php include("_includes/acc-tableheader1.php"); include_once("_includes/faid-details.php"); include_once("_includes/acct-details.php"); include_once("_includes/client-details.php"); include_once("_includes/sec-details.php"); include_once("_includes/rr-details.php");?>
        <?php include("_includes/5trades.php");?>
        <?php include("_includes/acc-tableheader2.php");?>
        <?php include("_includes/2trades.php");?>
    </div>
    
    
    <div class="row violation-block">
        	<?php include("_includes/acc-tableheader2.php");?>
            <?php include("_includes/3trades.php");?>
    </div>

     
     
        
    <div class="row branch-sep">
        <h3><span class="label">BRANCH: <span class="branch">Branch 2</span></span></h3>
    </div>

    <div class="row violation-block">
        	<?php include("_includes/acc-tableheader2.php");?>
            <?php include("_includes/2trades.php");?>
     </div>
    
    
</div>
<?php include_once("_includes/actions-footer.php"); ?>
<?php include_once("_includes/footer.php"); ?>
<?php include_once("_includes/send2fa.php"); ?>
<?php include_once("_includes/comments.php"); ?>

</body>
</html>
