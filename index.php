    <!doctype html>
<?php $thisPage="Home"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Supervisory Dashboard</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/supdash-styles.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
    <link rel="stylesheet" href="styles/modal.css"/>
    <link rel="stylesheet" href="styles/icons.css"/>
    <script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="scripts/supdash-behaviors.js"></script>
    <script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="scripts/modal.js"></script>
</head>

<body>

<div class="layout-978">
    <div class="row topnav" >
        <?php include_once("_includes/topnav.php"); ?>
    </div>
    
    <div class="row onc">
        <div class="col9">
            <div class="overview box-shadow">
                <h1 class="transparent">Overview </h1>
                <?php include_once("_includes/overview-filters.php"); ?>
                <?php include_once("_includes/overview-datagridcontainer.php"); ?>
            </div>
        </div>

        <div class="col3 comms box-shadow">
            <h1>From the Communications Team </h1>
            <?php include_once("_includes/comms.php"); ?>
        </div>  
        <div class="row-end">&nbsp;</div>
    </div>
    <?php include_once("_includes/performance-filters.php"); ?>
    
</div>
<?php include_once("_includes/footer.php"); ?>

<?php include_once("_includes/modal-editlinks.php"); ?>
<?php include_once("_includes/modal-alertmessage.php"); ?>


</body>
</html>
