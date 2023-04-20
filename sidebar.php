<div class="sidebar">

<div class="widget social-widget">
    <div class="title-section">
        <h1><span>Stay Connected</span></h1>
    </div>
    <ul class="social-share">
        <!-- <li>
            <a href="#" class="rss"><i class="fa fa-rss"></i></a>
            <span class="number">9,455</span>
            <span>Subscribers</span>
        </li> -->
        <li>
            <a href="https://web.facebook.com/theinsiderng" class="instagram"><i class="fa fa-instagram"></i></a>
            <span class="number">300</span>
            <span>Followers</span>
        </li>
        <li>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <span class="number">3,501</span>
            <span>Followers</span>
        </li>
        <!-- <li>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
            <span class="number">35,003</span>
            <span>Followers</span>
        </li> -->
    </ul>
</div>

<div class="widget features-slide-widget">
    <div class="title-section">
        <h1><span>Featured Posts</span></h1>
    </div>
    <div class="image-post-slider">
        <ul class="bxslider">
        <?php
        include('dbb.php');
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` ORDER BY RAND() DESC LIMIT 0, 6";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
            <li>
                <div class="news-post image-post2">
                    <div class="post-gallery">
                    <a <?php echo "href='news.php?a=" . $row['a'] . "' "; ?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="250px"></a>
                        <div class="hover-box">
                            <div class="inner-hover">
                            <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
                                <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
                                    <li><i class="fa fa-user"></i>by <?php echo $row['photocredit'] ?></li>
                                    <li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
           <?php
                                     }
                                    }
                                    
           ?>
        </ul>
    </div>
</div>

<div class="widget tab-posts-widget">

    <ul class="nav nav-tabs" id="myTab">
        <li class="active">
            <a href="#option1" data-toggle="tab">Latest</a>
        </li>
        <li>
            <a href="#option2" data-toggle="tab">Politics</a>
        </li>
        <li>
            <a href="#option3" data-toggle="tab">Sports</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="option1">
            <ul class="list-posts">
            <?php
                include('dbb.php');
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` ORDER BY `id` DESC LIMIT 0,5";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
                <li>
                    <a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="65px"></a>
                    <div class="post-content">
                    <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
                        <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
                        </ul>
                    </div>
                  
                </li>

                <!-- <li>
                    <img src="upload/news-posts/listw2.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>

                <li>
                    <img src="upload/news-posts/listw3.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>

                <li>
                    <img src="upload/news-posts/listw4.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>

                <li>
                    <img src="upload/news-posts/listw5.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li> -->
                <?php
                    }
                    }
                                                        
                                                        
                    mysqli_close($conn);
                                    
                    ?>   
            </ul>
        </div>
        <div class="tab-pane" id="option2">
            <ul class="list-posts">
            <?php
                include('dbb.php');
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 0,6";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
                <li>
                <a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="65px"></a>
                    <div class="post-content">
                    <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
                        <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
                        </ul>
                    </div>
                </li>

                <!-- <li>
                    <img src="upload/news-posts/listw4.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>

                <li>
                    <img src="upload/news-posts/listw5.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <img src="upload/news-posts/listw1.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li>

                <li>
                    <img src="upload/news-posts/listw2.jpg" alt="">
                    <div class="post-content">
                        <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                        </ul>
                    </div>
                </li> -->
                <?php
                    }
                    }
                                                        
                                                        
                    mysqli_close($conn);
                                    
                    ?> 
            </ul>										
        </div>
        <div class="tab-pane" id="option3">
            <ul class="list-posts">
            <?php
                include('dbb.php');
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 0,5";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
                <li>
                <a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="65px"></a>
                    <div class="post-content">
                    <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
                        <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
                        </ul>
                    </div>
                </li>
                <?php
                    }
                    }
                                                        
                                                        
                    mysqli_close($conn);
                                    
                    ?> 
        
            </ul>										
        </div>
    </div>
</div>



<!-- <div class="responsive youtube">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/EPnpLZKMzsU" frameborder="0" allow="acceleromoter; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe> 

</div> -->


<!-- <div class="widget post-widget">
    <div class="title-section">
        <h1><span>Featured Video</span></h1>
    </div>
    <div class="news-post video-post responsive youtube">

        <img alt="" src="upload/news-posts/video-sidebar.jpg">
        <a href="https://www.youtube.com/watch?v=t4vFF5L07Hg" class="video-link"><i class="fa fa-play-circle-o"></i></a>
        <div class="hover-box">
            <h2><a href="single-post.html"><?php echo $row['videoheadline'] ?> </a></h2>
            <ul class="post-tags">
                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
        </div>
    </div>
    <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>
</div> -->

<!-- <div class="widget subscribe-widget">
    <form class="subscribe-form">
        <h1>Subscribe to RSS Feeds</h1>
        <input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
        <button id="submit-subscribe">
            <i class="fa fa-arrow-circle-right"></i>
        </button>
        <p>Get all latest content delivered to your email a few times a month.</p>
    </form>
</div> -->

<div class="widget tags-widget">

    <div class="title-section">
        <h1><span>Popular Tags</span></h1>
    </div>

    <ul class="tag-list">
        <li><a href="cat.php?cat=news">News</a></li>
        <li><a href="cat.php?cat=politics">Politics</a></li>
        <li><a href="cat.php?cat=sports">Sports</a></li>
        <li><a href="cat.php?cat=business">Business</a></li>
        <li><a href="cat.php?cat=fashion">Fashion</a></li>
        <li><a href="cat.php?cat=entertainment">Entertainment</a></li>
    </ul>

</div>

<!-- <div class="advertisement">
    <div class="desktop-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/300x250.jpg" alt="">
    </div>
    <div class="tablet-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/200x200.jpg" alt="">
    </div>
    <div class="mobile-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/300x250.jpg" alt="">
    </div>
</div> -->

</div>