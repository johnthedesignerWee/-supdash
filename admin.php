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
                    <a class="button"><span class="icon-add"></span> WMF Message</a>
                    <a class="button"><span class="icon-add"></span> Sharepoint Message</a>
                </div>
            <hr/>
        </div>
        

        <div class="announcement">
            <span class="date label">Oct 13, 2013</span>
            <p class="msg">
                Totally removes the element from the page. Note that while the element is still in the DOM, 
                it is removed visually and any other conceivable way (you can't tab to it or its children, it is ignored by screen readers, etc).
            </p>
            <div class="actions">
                <span class="action"><span class="icon-pencil"></span>edit</span>
                <span class="action"><span class="icon-close"></span>delete</span>
            </div>
        </div>

        <div class="announcement">
            <span class="date label">Oct 13, 2013</span>
            <p class="msg">
                Totally removes the element from the page. Note that while the element is still in the DOM, 
                it is removed visually and any other conceivable way (you can't tab to it or its children, it is ignored by screen readers, etc).
            </p>
            <div class="actions">
                <span class="action edit"><span class="icon-pencil"></span>edit</span>
                <span class="action del"><span class="icon-close"></span>delete</span>
            </div>
        </div>

        <div class="announcement">
            <span class="date label">Oct 13, 2013</span>
            <p class="msg">
                Totally removes the element from the page. Note that while the element is still in the DOM, 
                it is removed visually and any other conceivable way (you can't tab to it or its children, it is ignored by screen readers, etc).
            </p>
            <div class="actions">
                <span class="action"><span class="icon-pencil"></span>edit</span>
                <span class="action"><span class="icon-close"></span>delete</span>
            </div>
        </div>

       

        
    <div class="row-end">&nbsp;</div>
    </div>

    
</div>
<?php include_once("_includes/footer.php"); ?>

<?php include_once("_includes/modal-editlinks.php"); ?>
<?php include_once("_includes/modal-alertmessage.php"); ?>


</body>
</html>
