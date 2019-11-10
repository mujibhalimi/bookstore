<section class="services-area tc-padding-bottom">
    <div class="container">
        <div class="row">
            <!-- Services -->
            <?php

            $db=new core();

            $query="SELECT * FROM services WHERE id=7";
            $result=$db->select($query);
            $row=$result->fetch_array();
            ?>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="Services">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-column">
                                <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                <h5><a href="#"><?php echo $row['pashto_head']; ?></a></h5>
                                <p><?php echo substr($row['pashto_body'],0,10);?></p>
                            </div>
                        </div>
                        <?php

                        $db=new core();

                        $query="SELECT * FROM services WHERE id=4";
                        $result=$db->select($query);
                        $row=$result->fetch_array();
                        ?>
                        <div class="col-sm-6">
                            <div class="service-column">
                                <span class="service-icon"><i class="icon-amazing"></i></span>
                                <h5><a href="#"><?php echo $row['pashto_head']; ?></a></h5>
                                <p><?php echo substr($row['pashto_body'],0,10);?></p>
                            </div>
                        </div>
                        <?php

                        $db=new core();

                        $query="SELECT * FROM services WHERE id=5";
                        $result=$db->select($query);
                        $row=$result->fetch_array();
                        ?>
                        <div class="col-sm-6">
                            <div class="service-column m-0">
                                <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                <h5><a href="#"><?php echo $row['pashto_head']; ?></a></h5>
                                <p><?php echo substr($row['pashto_body'],0,10);?></p>
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
                                <h5><a href="#"><?php echo $row['pashto_head']; ?></a></h5>
                                <p><?php echo substr($row['pashto_body'],0,10);?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services -->
            <?php

            $db=new core();

            $query="SELECT * FROM services WHERE id=3";
            $result=$db->select($query);
            $row=$result->fetch_array();
            ?>
            <!-- Services Text -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="services-text">
                    <strong>د مومند خپرندوی ټولنې خدمات</strong>
                    <h3><?php echo $row['pashto_head']  ?><span class="theme-color"></span></h3>
                    <p><?php echo substr($row['pashto_body'],0,10);?></p>
                    <a href="services.php" class="btn-1 sm shadow-0">بشپړ لوستنه<i aria-hidden="true" class="icon-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- Services Text -->

        </div>
    </div>
</section>