	<!doctype html>
<?php $thisPage="Home"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Supervisory Dashboard</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/supdash-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
	<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="scripts/bmss-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    
</head>

<body>
<div class="layout-978">
    <?php include_once("_includes/topnav.php"); ?>
    
    <div class="row">
        <div class="col9 overview">
            <h1>Overview </h1>
            <?php include_once("_includes/overview-filters.php"); ?>
            
            // overview here...
            
            <?php include_once("_includes/overview-datagridcontainer.php"); ?>
            
        </div>
        <div class="col3 communication">
            <h1>From the Communications Team </h1>
            // Communications here...
            
			<?php include_once("_includes/comms.php"); ?>
            
        </div>
        <div class="row-end">&nbsp;</div>
    </div>
    <div class="row performance test">
         <h1>Performance Indicators </h1>
         <div class="flags">
            // flags here...
         </div>
            <?php include_once("_includes/performance-selector.php"); ?>
        	<?php include_once("_includes/performance-filters.php"); ?>
        
            // performance indicators here...
        
    </div>
    
    
</div>
<?php include_once("_includes/footer.php"); ?>

</body>
</html>
