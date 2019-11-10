<?php

$db=new core();

$query="SELECT * FROM services";
$result=$db->select($query);
$row=$result->fetch_array();
?>


<section class="services-area tc-padding-bottom">
    <div class="container">
        <div class="row">

            <!-- Services Text -->
            <?php

            $db=new core();

            $query="SELECT * FROM services WHERE id=3";
            $result=$db->select($query);
            $row=$result->fetch_array();
            ?>
            <div class="col-lg-4 col-xs-12">
                <div class="services-text">
                    <strong>Our Book Shop Service</strong>
                    <h3><?php echo $row['heading']; ?><span class="theme-color"></span></h3>
                    <p><?php echo $row['body']; ?></p>
                    <a href="ser.php" class="btn-1 sm shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- Services Text -->
            <?php

            $db=new core();

            $query="SELECT * FROM services WHERE id=4";
            $result=$db->select($query);
            $row=$result->fetch_array();
            ?>
            <!-- Services -->
            <div class="col-lg-8 col-xs-12">
                <div class="Services">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-column">
                                <span class="service-icon"><i class="icon-amazing"></i></span>
                                <h5><a href="#"><?php echo $row['heading']; ?></a></h5>
                                <p><?php echo $row['body']; ?></p>
                            </div>
                        </div>
                        <?php

                        $db=new core();

                        $query="SELECT * FROM services WHERE id=5";
                        $result=$db->select($query);
                        $row=$result->fetch_array();
                        ?>
                        <div class="col-sm-6">
                            <div class="service-column">
                                <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                <h5><a href="#"><?php echo $row['heading']; ?></a></h5>
                                <p><a href="#"><?php echo $row['body']; ?></p>
                            </div>
                        </div>
                        <?php

                        $db=new core();

                        $query="SELECT * FROM services WHERE id=6";
                        $result=$db->select($query);
                        $row=$result->fetch_array();
                        ?>
                        <div class="col-sm-6">
                            <div class="service-column m-0">
                                <span class="service-icon"><i class="icon-responsive"></i></span>
                                <h5><a href="#"><?php echo $row['heading']; ?></a></h5>
                                <p><a href="#"><?php echo $row['body']; ?></p>
                            </div>
                        </div>
                        <?php

                        $db=new core();

                        $query="SELECT * FROM services WHERE id=7";
                        $result=$db->select($query);
                        $row=$result->fetch_array();
                        ?>
                        <div class="col-sm-6">
                            <div class="service-column m-0">
                                <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                <h5><a href="#"><?php echo $row['heading']; ?></a></h5>
                                <p><a href="#"><?php echo $row['body']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services -->

        </div>
    </div>
</section>
