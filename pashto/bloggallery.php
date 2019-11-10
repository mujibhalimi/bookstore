<div class="col-lg-8 col-md-8 col-xs-12">
    <div class="gallery">

        <!-- Secondary heading -->
        <div class="sec-heading">
            <h3>ټول  <span class="theme-color">ویب بلاګونه</span></h3>
            <a class="view-all" href="gallery.php">ټول لیدل<i class="icon-angle-double-left"></i></a>
        </div>
        <!-- Secondary heading -->

        <!-- Gallery List -->

        <ul id="hover-dir" class="gallery-list">
            <?php
            $db=new core();
            $queryblog="SELECT * FROM blog,user,catagories WHERE catagories.cid=blog.cate_id AND user.id=blog.user_id AND approve='1' ORDER BY blog.blog_id DESC LIMIT 8";

            $resultblog=$db->select($queryblog);
            while ($rew=$resultblog->fetch_array()) :
            ?>

            <li>
                <img src="../images/large-blog/<?php echo $rew['photo']; ?>" alt="">
                <div class="overlay">
                    <ul class="position-center-x">
                        <p style="color: white;"><?php echo $rew['headingp']; ?></p>
                        <li><a href="event-detail.php?id=<?php echo $rew['blog_id']; ?>"><i class="icon-book"></i>&nbsp;بشپړ لوستل</a></li>
                        <li><a href="../images/large-blog/<?php echo $rew['photo']; ?>" data-rel="prettyPhoto[gallery]"><i class="icon-plus"></i></a></li>
                    </ul>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <!-- Gallery List -->

    </div>
</div>