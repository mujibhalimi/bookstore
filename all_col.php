<div class="collection-content">
    <ul>
        <?php
        //$id=$_GET['id'];
        $db=new core();
        if (isset($_POST['display'])){
        $allbook="select * from bookcata";
        $res=$db->select($allbook);
        while ($ro1=$res->fetch_array()) :
            ?>
            <li id="all">
                <div class="s-product">
                    <div class="s-product-img">
                        <img src="images/upcoming-release/thumb/<?php echo $ro1['pic']; ?>" alt="">
                        <div class="s-product-hover">
                            <div class="position-center-x">
                                <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                            </div>
                        </div>
                    </div>
                    <h6><a href="book-detail.html">Ramadan Kareem</a></h6>
                    <span>Richard Matherson</span>
                </div>
            </li>
        <?php  endwhile;  }?>
    </ul>
</div>