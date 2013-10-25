
<!-- 
*********   MODAL : SEND 2 FA  *************************************************************************************
******************************************************************************************************************
-->

<section class="semantic-content" id="send2fa" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

    <div class="modal-inner modal">
        <header id="modal-label" class="header"><h2><span class="icon-share"></span>Send to FA</h2><!-- Header --></header>
        <?php include("_includes/send2fa-metas.php"); ?>
                    <?php include("_includes/review-item.php"); ?>
        <div class="modal-content shadow">
            <div class="send2fa-body">
                <div class="col11">
                    <div class="violation-block">
                        <?php include("_includes/acc-tableheader1.php"); include("_includes/faid-details.php"); include("_includes/acct-details.php"); include("_includes/client-details.php"); include("_includes/sec-details.php"); include("_includes/rr-details.php"); ?>
                        <?php include("_includes/1trade-s2fa.php"); ?>
                        <?php include("_includes/acc-tableheader2.php"); ?>
                        <?php include("_includes/2trades-s2fa.php"); ?>
                    </div>
                    <?php include("_includes/additional.php"); ?>
                    <div class="col7">
                    	<?php include("_includes/messages.php"); ?>
                    </div>
                    <div class="col4">
                    	<?php include("_includes/notes.php"); ?>
                    </div>
                </div><!--/ col11-->
            </div>
        </div>
        <div class="footer">
        	<a class="button secondary left" id="close-btn" rel="modal:close" href="#close-modal"><span>Close</span></a>  
            <a class="button" id="send-btn"><span class="icon-share"></span><span>Send</span></a> 
        </div>
    </div>

    <a href="#!" class="modal-close" title="Close this modal" data-close="Close" data-dismiss="modal">×</a>
</section><!-- /Modal:coment -->