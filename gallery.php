<div class="col-lg-8 col-xs-12">
    <div class="gallery">

        <!-- Secondary heading -->
        <div class="sec-heading">
            <h3>All <span class="theme-color">Blogs</span></h3>
            <a class="view-all" href="all_blog.php">View All<i class="fa fa-angle-double-right"></i></a>
        </div>
        <!-- Secondary heading -->

        <!-- Gallery List -->
        <ul>
            <?php
            $db=new core();
            $queryblog="SELECT * FROM blog,user,catagories WHERE catagories.cid=blog.cate_id AND user.id=blog.user_id AND approve='1' ORDER BY blog.blog_id DESC LIMIT 8";

            $resultblog=$db->select($queryblog);
            while ($rew=$resultblog->fetch_array()) :
            ?>
            <li>
                <div class="gallery-figure">
                    <img src="images/large-blog/<?php echo $rew['photo']; ?>" alt="">
                    <div class="overlay">
                        <ul class="position-center-x">
                            <p style="color: white;"><?php echo $rew['heading']; ?></p>
                            <li><a href="blog-detail.php?id=<?php echo $rew['blog_id']; ?>"><i class="fa fa-heart"></i>Read</a></li>
                            <li><a href="images/large-blog/<?php echo $rew['photo']; ?>" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <!-- Gallery List -->

    </div>
</div>