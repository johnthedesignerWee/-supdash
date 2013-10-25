
<!-- 
*********   MODAL : SEND 2 FA  *************************************************************************************
******************************************************************************************************************
-->

<section class="semantic-content" id="comment" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

    <div class="modal-inner modal">
        <header id="modal-label" class="header"><h2><span class="icon-chat"></span>Comments</h2><!-- Header --></header>
                    <?php include("_includes/review-item.php"); ?>
        <div class="modal-content">
            <div class="send2fa-body">
                <div class="col11">
                    <form class="reply form">
                        <textarea rows="18"></textarea>
                     </form>
                </div><!--/ col11-->
            </div>
        </div>
        <div class="footer">
        	<a class="button secondary left" id="close-btn" rel="modal:close" href="#close-modal"><span>Close</span></a>  
            <a class="button" id="comment-btn" rel="modal:close" href="#close-modal"><span class="icon-chat"></span><span>Comment</span></a> 
        </div>
    </div>

    <a href="#!" class="modal-close" title="Close this modal" data-close="Close" data-dismiss="modal">×</a>
</section><!-- /Modal:coment -->