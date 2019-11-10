<div class="form-holder">

    <!-- Secondary heading -->
    <div class="sec-heading">
        <h3>Leave Comments</h3>
    </div>
    <!-- Secondary heading -->
    <!-- Sending Form -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea class="form-control" id="comment" required="required" rows="5" placeholder="Text here..."></textarea>
                <i class="fa fa-pencil-square-o"></i>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" id="name" required="required" placeholder="Full name">
                <i class="fa fa-user"></i>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" id="subject" required="required" placeholder="Subject">
                <i class="fa fa-align-left"></i>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" id="email" required="required" placeholder="Email">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" id="p_no" required="required" placeholder="Phone no.">
                <i class="fa fa-phone"></i>
            </div>
        </div>
        <div class="col-sm-12">
            <input type="hidden" id="id" value="<?php echo $id; ?>">
            <button id="save" type="submit" class="btn-1 shadow-0 sm">send message</button>
        </div>
    </div>
    <!-- Sending Form -->

</div>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript">
    $.noConflict();
    jQuery(document).ready(function($){
        $("#save").click(function () {
            var name=$("#name").val();
            var comment=$("#comment").val();
            alert('hi');
            $.ajax({
                url: "serverforbog.php",
                type: "post",
                async : false,
                data:{
                    "done": 1,
                    "username":name,
                    "comment": comment
                },
                success :function (data) {
                    $("#name").val('');
                    $("#comment").val('');
                }
            });
        });
    });
</script>