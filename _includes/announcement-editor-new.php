<div class="announcement-editor-new hide">
    <div class="right"><a class="close" ><img width="9" height="9" alt="" src="images/x.png"></a></div>

    <div class="recipients">
        <div class="location">
             <span class="icon-plus addloc"></span>
        </div>
        <hr/>
        <div class="audience">
             <span class="icon-plus"></span>
        </div> 
        <hr />
    </div>
    <div class="announcement-body shadow1">
        <div class="metas">
            <div class="title">
                <h5>SUBJECT:</h5>
                <input id="subject" class="shadow1 title texxt" placeholder="Subject" value="" name="subject">
            </div>
            <div class="date">
                <h5>PUBLISH DATE</h5>
                <input id="pubdate" class="shadow1 title texxt" value="" name="subject"><span class="icon-calendar"></span>
            </div>
            <div class="date">
                <h5>EXPIRY DATE</h5>
                <input id="expdate" class="shadow1 title texxt" value="" name="subject"><span class="icon-calendar"></span>
            </div>
        </div>
        
        <div class="message">
            <h5>MESSAGE:</h5>
            <form method="post" class="reply form">
                <textarea rows="18"></textarea>
            </form>
        </div>
       
        <div class="actions"> <a class="button secondary">Cancel </a><a class="button">Publish</a></div>
    </div>    

<?php include_once("_includes/location-selector.php"); ?>


</div>







