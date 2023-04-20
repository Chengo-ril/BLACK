<?php
include('dbb.php');
$today = date("d-M-Y");
if (isset($_REQUEST['cat'])){
    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM blogtable WHERE category='$_REQUEST[cat]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $newcategory = $row['category']; 
}
?>

<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/news-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:48:35 GMT -->
<head>
	<title>ECTASY | CATEGORY</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:site_name" content="">
	<meta property="og:title" content="ECTASY" />
	<meta property="og:description" content="Dont miss out latest news on fashion, entertainment and politics" />
	<meta property="author" itemprop="image" content="Chengo Ril">
	<meta name="language" content="english">
	<meta property="og:type" content="website, news" />

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

</head>
<body class="boxed">

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<?php include('header.php') ?>
		<!-- End Header -->

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
                     
									<h1><span class="world"><?php echo $row['category'] ?></span></h1>
       
								</div>

								<div class="row">
                                <?php
						$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM blogtable  WHERE category='$_REQUEST[cat]'";
						$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` WHERE category='$_REQUEST[cat]' ORDER BY `id` DESC LIMIT 70";

                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_array($result)){
                        ?>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
                                            <a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="250px"></a>
                                            <a class="category-post world" <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['category']; ?></a>
											</div>
											<div class="post-title">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-eye"></i><?php echo $row['date']; ?></li>
                                                    <li><i class="fa fa-user"></i>By: <?php echo $row['photocredit']; ?></li>
													<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
													<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
												</ul>
											</div>
											<div class="post-content">
												<p><?php echo $row['blockquote'] ?></p>
												<a <?php echo "href='news.php?a=".$row['a']."'"?> class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>

                                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
								</div>

								<!-- <div class="row">
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im9.jpg" alt="">
												<a class="category-post world" href="world.html">Trends</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im10.jpg" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>

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

							<!-- grid box -->
							<div class="grid-box">

								<!-- <div class="row">
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im11.jpg" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im12.jpg" alt="">
												<a class="category-post world" href="world.html">Lifestyle</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im13.jpg" alt="">
												<a class="category-post world" href="world.html">Trends</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="upload/news-posts/im14.jpg" alt="">
												<a class="category-post world" href="world.html">Business</a>
											</div>
											<div class="post-title">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
												<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
											</div>
										</div>
									</div>
								</div> -->

							</div>
							<!-- End grid box -->

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

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/news-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:48:57 GMT -->
</html>