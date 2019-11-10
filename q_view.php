<div class="modal fade quick-view" id="quick-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <span class="availability">Available :<strong>Momand Books Store<i class="fa fa-check-circle"></i></strong></span>
                            <div class="prics">pages :<span class="now nop"><?php echo $row['pages']; ?></span>&nbsp;&nbsp;print year :<span class="now printb"> <?php echo $row['print_year']; ?></span></div>

                            <img class="img" width="200px" height="300px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" >

                        </div>
                    </div>
                    <!-- Product Thumnbnail -->
                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail ">

                            <div class="prics"><del class="was"></del><span class="now"><h3 class="modal-body pp modal-title"><?php echo $row['bname'] ?></h3></span></div>
                            <strong class="type"><?php echo $row['type']; ?>:</strong><h4 class="autn">&nbsp;   <?php echo $row['auth_name']; ?></h4>
                            <p class="bb"><?php echo strip_tags($row['btext']); ?></p>
                        </div>
                    </div>
                    <!-- Product Detail -->
                </div>
            </div>
            <!-- Single Product Detail -->

        </div>
    </div>
</div>