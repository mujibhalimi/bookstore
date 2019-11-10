<div class="recomended-products tc-padding">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Recomend products Slider -->
        <div class="recomend-slider">
            <?php
            $db=new core();
            $query="select * from bookcata";
            $result=$db->select($query);
            while ($row=$result->fetch_array()) :

?>
            <!-- Item -->
            <div class="item">
                <a id="pic" href="model_view.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#open-book-view"><img src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt=""></a>
                <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>'">
            </div>
            <!-- Item -->
<?php endwhile; ?>
        </div>
        <!-- Recomend products Slider -->

    </div>
</div>
<Script src="jquery.js" ></Script>
<script>
    $(document).ready(function(){
        $("#id").val(id);
        $("#pic").click(function()
        {
            $.ajax({
                type:"GET" ,
                url : "model_view.php" ,
                data :"id="+id   ,
                success : function(data){
                    //                location.reload() ;
                    alert(data);
                }
            });
        });
    });
</script>