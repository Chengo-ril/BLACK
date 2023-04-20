<?php
include('dbb.php');
?>

<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:27:58 GMT -->
<head>
	<title>Ectasy | Home</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="shortcut icon" href="logs/login/images/logo.png" type="image/x-icon">

	<style>
		.responsive-youtube {
			overflow:hidden;
			padding-bottom:56.25%;
			position:relative;
			height: 0;
		}

		.responsive-youtube iframe {
			left: 0;
			height: 100%;
			width: 100%;
			position: absolute;
		}
		</style>

</head>
<body class="boxed">

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<?php include('header.php'); ?>
		<!-- End Header -->

		<!-- heading-news-section2
			================================================== -->
		<section class="heading-news2">

			<div class="container">
				<div class="ticker-news-box">
					
					<span class="breaking-news">breaking news</span>
					<ul id="js-news">
					<?php
            $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` ORDER BY `id` DESC LIMIT 0, 10";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
					<li class="news-item"><span class="time-news"><?php echo $row['date']; ?></span>  <a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></li>
			
					<?php
                        }
                        }
                                                            
                                                            
                        mysqli_close($conn);
                                        
                        ?> 
					</ul>

				 
				</div>

				<div class="iso-call heading-news-box">
					<div class="image-slider snd-size">
						<span class="top-stories">TOP STORIES</span>
						<ul class="bxslider">
						<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` ORDER BY `id` DESC LIMIT 13";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
           			<li>
								<div class="news-post image-post">
								<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="475px">
									<div class="hover-box">
										<div class="inner-hover">
										<a class="category-post world" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
											<li><i class="fa fa-user"></i>by <?php echo $row['photocredit'] ?></li>
												<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
												<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
					
											</ul>
										</div>
									</div>
								</div>
							</li>
							<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>  
							<!-- <li>
								<div class="news-post image-post">
									<img src="upload/news-posts/h2.jpg" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post world" href="world.html">Business</a>
											<h2><a href="single-post.html">Franca do të bashkëpunojë me Kosovën në ekonomi. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
												<li><i class="fa fa-eye"></i>872</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="news-post image-post">
									<img src="upload/news-posts/h8.jpg" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post travel" href="travel.html">travel</a>
											<h2><a href="single-post.html">Porti i Durresit më i vizituari në ballkan kete vit. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
												<li><i class="fa fa-eye"></i>872</li>
											</ul>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
					</div>

					<div class="news-post image-post default-size">
					<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='news' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
						<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="232px">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post world" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
								<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
								</ul>
								<p><?php echo $row['blockquote'] ?></p>
							</div>
						</div>
						<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
					</div>

					<div class="news-post image-post">
					<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='fashion' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
						<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="232px">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post fashion" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
								<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
								</ul>
								<p><?php echo $row['blockquote'] ?></p>
							</div>
						</div>
						<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
					</div>

					<div class="news-post image-post">
					<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='sports' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
							<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="232px">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post sports" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
								<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
								</ul>
								<p><?php echo $row['blockquote'] ?></p>
							</div>
						</div>
						<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
					</div>

					<div class="news-post image-post">
					<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='business' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
						<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="232px">
						<div class="hover-box">
							<div class="inner-hover">
							<a class="category-post food" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
								<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
								<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
								</ul>
								<p><?php echo $row['blockquote'] ?></p>
							</div>
						</div>
						<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
					</div>

				</div>
			</div>

		</section>
		<!-- End heading-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">

								<div class="title-section">
									<h1><span>Featured</span></h1>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post image-post2">
											<div class="post-gallery">
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="290px">
												<div class="hover-box">
													<div class="inner-hover">
													<a class="category-post travel" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
														<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
														<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
														</ul>
													</div>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
										<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='fashion' ORDER BY `id` DESC LIMIT 1,3";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<li>
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="80px">
												<div class="post-content">
												<a href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
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

								<div class="row">
								<div class="col-md-6">
										<div class="news-post image-post2">
											<div class="post-gallery">
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='politics' ORDER BY `id` DESC LIMIT 2, 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="290px">
												<div class="hover-box">
													<div class="inner-hover">
													<a class="category-post tech" href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
														<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
														<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li>
														</ul>
													</div>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<ul class="list-posts">
										<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='sports' ORDER BY `id` DESC LIMIT 1,3";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<li>
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="80px">
												<div class="post-content">
												<a href="cat.php?cat=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a>
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
								<!-- <div class="center-button">
									<a href="#"><i class="fa fa-refresh"></i> More from featured</a>
								</div> -->

							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<!-- <div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div> -->
							<!-- End google addsense -->

							<!-- grid-box -->
							<!-- <div class="grid-box">

								<div class="title-section">
									<h1><span class="world">News in Video</span></h1>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video3.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Suspendisse urna.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>	
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video4.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video1.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="news-post video-post">
											<img alt="" src="upload/news-posts/video2.jpg">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Morbi in sem quis dui placerat ornare.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									</div>	
								</div>

							</div> -->
							<!-- End grid-box -->

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">

								<div class="title-section">
									<h1><span class="world">SPECIALS</span></h1>
								</div>

								<div class="owl-carousel" data-num="2">
								
									<div class="item">
										<div class="news-post image-post2">
										<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='news' ORDER BY `id` DESC LIMIT 1,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="295px">
												<div class="hover-box">
													<div class="inner-hover">
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
															<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
														</ul>
													</div>
												</div>
											</div>
											<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
										</ul>
										</div>

										<ul class="list-posts">
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='news' ORDER BY `id` DESC LIMIT 2,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>

											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='news' ORDER BY `id` DESC LIMIT 3,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='news' ORDER BY `id` DESC LIMIT 4,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
										</ul>									
									</div>
								
									<div class="item">
										<div class="news-post image-post2">
										<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='business' ORDER BY `id` DESC LIMIT 1,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="295px">
												<div class="hover-box">
													<div class="inner-hover">
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
															<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
														</ul>
													</div>
												</div>
											</div>
											<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
										</ul>
										</div>

										<ul class="list-posts">
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='business' ORDER BY `id` DESC LIMIT 0,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>

											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='business' ORDER BY `id` DESC LIMIT 3,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='business' ORDER BY `id` DESC LIMIT 2,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
										</ul>									
									</div>
								
									<div class="item">
										<div class="news-post image-post2">
										<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 1,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="295px">
												<div class="hover-box">
													<div class="inner-hover">
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
															<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
														</ul>
													</div>
												</div>
											</div>
											<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
										</ul>
										</div>

										<ul class="list-posts">
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 2,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>

											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 3,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
											<li>
											<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="78px">
												<div class="post-content">
												<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
													<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													</ul>
												</div>
												<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
											</li>
										</ul>									
									</div>

								</div>

							</div>
							<!-- End carousel box -->

							<!-- google addsense -->
							<!-- <div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div> -->
							<!-- End google addsense -->

							<!-- article box -->
							<div class="article-box">

								<div class="title-section">
									<h1><span>Latest Articles</span></h1>
								</div>

								<div class="news-post article-post">
									<div class="row">
									<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='entertainment' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
										<div class="col-sm-5">
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="200px">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
												<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
												</ul>
												<p><?php echo $row['blockquote'] ?></p>
												<br> <br> 
												<a <?php echo "href='news.php?a=".$row['a']."'"?> class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>

										<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
									<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='sports' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
										<div class="col-sm-5">
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="200px">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
												<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
												</ul>
												<p><?php echo $row['blockquote'] ?></p>
												<br> <br> 
												<a <?php echo "href='news.php?a=".$row['a']."'"?> class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>

										<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
									<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='fashion' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
										<div class="col-sm-5">
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="200px">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
												<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
												</ul>
												<p><?php echo $row['blockquote'] ?></p>
												
												<a <?php echo "href='news.php?a=".$row['a']."'"?> class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>

										<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
									<?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` where category='politics' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
										<div class="col-sm-5">
											<div class="post-gallery">
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="200px">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="post-content">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
												<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $row['photocredit'] ?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
												</ul>
												<p><?php echo $row['blockquote'] ?></p>
												
												<a <?php echo "href='news.php?a=".$row['a']."'"?> class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>

										<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>
									</div>
								</div>
							</div>
							<!-- End article box -->

							<!-- pagination box -->
							<!-- <div class="pagination-box">
								<ul class="pagination-list">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">9</a></li>
									<li><a href="#">Next</a></li>
								</ul>
								<p>Page 1 of 9</p>
							</div> -->
							<!-- End Pagination box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<?php include('sidebar.php') ?>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
			<?php include('footer.php') ?>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:30:15 GMT -->
</html>