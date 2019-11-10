<!doctype html>
<html>
<head>

</head>
<body>
<div id="display">

</div>

    <label>name</label>
    <input type="text" id="name">
    <br>
    <label>comment</label>
    <input type="text" id="comment">
    <br>
    <button type="submit" id="save">save</button>

</body>
</html>
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
                    $("#fullname").val('');
                    $("#comment").val('');
                }
            });
        });
    });
</script>