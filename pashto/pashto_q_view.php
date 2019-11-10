<div class="modal fade quick-view" id="quick-view">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail">
                            <span class="availability"><strong> مومند کتاب پلورنځي کې شته دی<i class="icon-check-circle"></i></strong></span>
                             <h3 class="pp"><?php echo $row['pbookname'];?></h3>

                            <div class="prics"><span class="now"><?php echo $row['book_price']; ?></span></div>
                            <h4 class="type"><?php echo $row['type_p'];  ?></h4>
                            <h4 class="autn"><?php echo $row['auth_name']; ?></h4>
                            <p class="bb"><?php echo $row['pbooktext']; ?></p>
                        </div>
                    </div>
                    <!-- Product Detail -->

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <img class="img" width="200px" height="300px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt="">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                </div>
            </div>
            <!-- Single Product Detail -->

        </div>
    </div>
</div>