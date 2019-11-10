<section class="add-banners-holder tc-padding-bottom">
    <div class="container">
        <div class="row">

            <!-- Banner -->

            <?php

            $db=new core();

            $query="select * from ads ORDER BY ads_id DESC limit 1";

            $result=$db->select($query);

            $row=$result->fetch_array();

            ?>

            <div class="col-lg-6 col-sm-12">
                <div class="add-banner add-banner-1">
                    <div class="z-inedex-2 p-relative">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo substr($row['body'],0,200); ?></p>
                        <hr>
                        <strong class="font-merriweather"><?php echo $row['price']; ?><sup>Afg</sup></strong>
                    </div>
                    <img class="adds-book" width="160px" height="168px" src="images/add-banners/add-books/<?php echo $row['photo']; ?>" alt="">
                </div>
            </div>
            <?php   ?>
            <!-- Banner -->
            <?php

            $db=new core();

            $query2="select * from ads ORDER BY ads_id ASC limit 1";

            $result2=$db->select($query2);

            $row2=$result2->fetch_array();

            ?>

            <!-- Banner -->
            <div class="col-lg-6 col-sm-12">
                <div class="add-banner add-banner-2">
                    <div class="z-inedex-2 p-relative">
                        <strong><?php echo $row2['name']; ?></strong>
                        <h3><?php echo substr($row2['body'],0,200); ?></h3>
                        <hr>
                        <p><?php echo $row2['price']; ?><sup>Afg</sup></p>
                    </div>
                    <img width="205px" height="176px" class="adds-book" src="images/add-banners/add-books/<?php echo $row2['photo']; ?>" alt="">
                </div>
            </div>
            <!-- Banner -->

        </div>
    </div>
</section>