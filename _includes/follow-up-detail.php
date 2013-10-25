
<!-- 
*********   MODAL : FOLLOW UP DETAIL  *************************************************************************************
******************************************************************************************************************
-->

<section class="semantic-content" id="follow-up-detail" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

    <div class="modal-inner modal">
        <header id="modal-label" class="header"><h2><span class="icon-flag"></span>Follow-up</h2><!-- Header --></header>
        <div class="modal-content">
        <div class="quick-items"><span class="label">Request #:</span> <span class="bold">97812</span></div>
            <div class="col11">
                <h2 class="bucket">Eligibility</h2>
                <div class="violation-block">
                    <?php include("_includes/acc-tableheader1.php"); include("_includes/faid-details.php"); include("_includes/acct-details.php"); include("_includes/client-details.php"); include("_includes/sec-details.php"); include("_includes/rr-details.php"); ?>
                    <?php include("_includes/1trade.php"); ?>
                </div>
                <div class="violation-block">
                    <?php include("_includes/acc-tableheader2.php"); ?>
                    <?php include("_includes/2trades.php"); ?>
                </div>
                
                <div class="col7">
                	<?php include("_includes/messages.php"); ?>
                </div>
                <div class="col4">
                	<?php include("_includes/notes.php"); ?>
                </div>

            </div><!--/ col11-->
        </div>
        <div class="footer">
        	<a class="button secondary left" rel="modal:close" href="#close-modal"><span>Close</span></a>  
            <a class="button green" ><span class="icon-checkmark-circle"></span><span>Resolved</span></a> 
        </div>
    </div>

    <a href="#!" class="modal-close" title="Close this modal" data-close="Close" data-dismiss="modal">×</a>
</section><!-- /Modal:coment -->