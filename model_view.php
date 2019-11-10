<?php
//$id=$_GET['id'];
/*
$db=new core();
if (isset($_POST['display'])){
$query="select * from bookcata WHERE ccid=1";
$result=$db->select($query);
$row=$result->fetch_array();


}
*/
?>


<div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div id="magazine">
                <div style="background-image:url(images/upcoming-release/thumb/<?php //echo $row['pic']; ?>)"></div>
            </div>

        </div>
    </div>
</div>