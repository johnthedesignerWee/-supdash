<!doctype html>
<?php $thisPage="Admin"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Supervisory Dashboard</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="styles/supdash-styles.css"/>
    <link rel="stylesheet" href="styles/icons.css"/>
    <link rel="stylesheet" href="styles/tooltipster.css"/>
    <link rel="stylesheet" href="styles/modal.css"/>
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
    
    <div class="row">
        <div class="title">
            <h2 class="title">Communications</h2>
                <div class="actions">
                    <a class="button wmf-message"><span class="icon-add"></span> WMF Message</a>
                    <a class="button spt-message"><span class="icon-add"></span> Sharepoint Message</a>
                </div>
            <hr/>
        </div>

        <?php include_once("_includes/announcements.php"); ?>
        <?php include_once("_includes/announcement-editor.php"); ?>
        <?php include_once("_includes/announcement-edited.php"); ?>
        <?php include_once("_includes/announcement-editor-new.php"); ?>
        <?php include_once("_includes/spt-message-editor-new.php"); ?>


    </div>

    
</div>
<?php include_once("_includes/footer.php"); ?>

        

</body>
</html>
