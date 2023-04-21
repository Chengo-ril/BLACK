<?php
include('dbb.php');
$today = date("d-M-Y");
if (isset($_REQUEST['a'])){

	$view_query= "UPDATE `blogtable` SET views=views + " . 1 . " WHERE a = '$_REQUEST[a]'";
	$send_viewquery = mysqli_query($conn, $view_query);

    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM blogtable WHERE a='$_REQUEST[a]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:48:58 GMT -->
<head>
	<title><?php echo $row['headline']; ?></title>

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
    <link rel="shortcut icon" href="logs/login/images/logo.png" type="image/x-icon">

    <!-- <style>
  #HCB_comment_box textarea {
    height:400px;
  }
  </style> -->

  
  <style>
#HCB_comment_box{border: 2px solid #FFFFFF; border-radius: 5px; padding: 10px; color:#FFFFFF; background: rgba(0, 0, 0, 0.5);}
.hcb-mod b{color:#0088AF;}
#HCB_comment_box textarea,#HCB_comment_box input.text{border-top:1px solid #e4e4e4;border-left:1px solid #e4e4e4;border-bottom:1px solid #eaeaea;border-right:1px solid #eaeaea;background-color:#f8f8f8;}
#HCB_comment_box .hcb-wrapper-half{display:block;width:50%;float:left;}
#HCB_comment_box .hcb-wrapper{clear:both;}
#HCB_comment_box input.text{display:block;width:95%;}
#HCB_comment_box input.submit{border-top:1px solid #FCB1A2;border-left:1px solid #FCB1A2;border-bottom:1px solid #BB2B0F;border-right:1px solid #BB2B0F;background-color:#F26646;color:#000;font-weight:bold;cursor:pointer;}
#HCB_comment_box div.comment{color:#FDB3A5; background: rgba(0, 0, 0, 0.5); border:3px double #F26646 ; margin:5px; padding:2px;}
#HCB_comment_box .comment .likes{color: #00FF00;}
#HCB_comment_box .hcb-link{color:#0088AF;text-decoration:none;} 


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
		<?php include('header.php') ?>
		<!-- End Header -->

		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">breaking news</span>
					<span class="new-news">New</span>
					<ul id="js-news">
                    <?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` ORDER BY `id` DESC LIMIT 0, 10";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<li class="news-item"><span class="time-news"><?php echo $row['date']; ?></span>  <a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></li>
                        <?php
							}
							}
                        ?>    
					</ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content" style="background-color: rgb(236, 227, 227); border-radius:5px; padding: 20px;   " >

							<!-- single-post box -->
							<div class="single-post-box">
							<?php
								include('dbb.php');
								$today = date("d-M-Y");
								if (isset($_REQUEST['a'])){
									$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` WHERE a='$_REQUEST[a]'";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_array($result);
								}
								?>
								<div class="title-post">
                                <h1 style="color:#000;"><?php echo $row['headline']; ?></h1>
									<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><?php echo $row['newDate']; ?></li>
                                        <li><i class="fa fa-tags"></i><?php echo $row['category']; ?></li>
										<li><i class="fa fa-eye"></i><?php echo $row['post_view']; ?></li> 
										<li><i class="fa fa-user"></i>Photo Credit: <?php echo $row['photocredit']; ?></li> 
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="https://facebook.com/<?php echo "href='news.php?a=".$row['a']."'"?>"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
										<li><a class="twitter" href="https://twitter.com/<?php echo "href='news.php?a=".$row['a']."'"?>"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
										<!-- <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li> -->
									</ul>
								</div>

								<div class="post-gallery">
                                <img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="">
									<span class="image-caption"><?php echo $row['photocredit']; ?></span>
								</div>

								<div class="post-content">

									<p>  <p><?php echo $row['content']; ?></p></p>

									<blockquote>
										<p><?php echo $row['blockquote'] ?> </p>
									</blockquote>
								</div>

								<!-- <div class="post-gallery">
									<img src="upload/news-posts/single2.jpg" alt="">
									<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
								</div> -->

								<!-- <div class="post-content">

									<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

									<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>

								</div> -->

								<!-- <div class="article-inpost">
									<div class="row">
										<div class="col-md-6">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-content">
												<h2>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </h2>
												<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. </p>
												<p>Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. </p>
												<p>Nunc iaculis mi in ante. Vivamus nibh feugiat est.</p>
											</div>
										</div>
									</div>
								</div> -->

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
                                    <?php
                                    include('dbb.php');
									$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE a='$_REQUEST[a]'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="https://facebook.com/<?php echo "href='news.php?a=".$row['a']."'"?>"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="https://twitter.com/<?php echo "href='news.php?a=".$row['a']."'"?>"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<!-- <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li> -->
                                    <?php
                                    }
                                    }
                                                                        
                                                                        
                                    mysqli_close($conn);
                                                    
                                    ?>
									</ul>
								</div>



								<div class="prev-next-posts">
                                <div class="title-section">
                                        <br/>
										<h1><span>Latest Posts</span></h1>
									</div>
									<div class="prev-post">
                                    <?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` ORDER BY `id` DESC LIMIT 0,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
											<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="100px">
										<div class="post-content">
                                        <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
												<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
											</ul>
										</div>
                                        <?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?> 
									</div>
									<div class="next-post">
                                    <?php
                                    include('dbb.php');
                                    $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` ORDER BY `id` DESC LIMIT 1,1";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    ?>
												<img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="100px">
										<div class="post-content">
                                        <h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $row['date'] ?></li>
												<li><i class="fa fa-eye"></i><?php echo $row['post_view'] ?></li>
											</ul>
										</div>
									</div>
                                    <?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?> 
								</div>

								<!-- <div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										<li>
											<a href="#more-autor" data-toggle="tab">More From Autor</a>
										</li>
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<img src="upload/users/avatar1.jpg" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><span>Jane Smith</span><a href="autor-details.html">18 Posts</a></h1>
														<ul class="autor-social">
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
															<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
													<p>
														Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. 
													</p>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal1.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal2.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal3.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal4.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div> -->

								<!-- carousel box -->
								<!-- <div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art1.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art2.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post video-post">
											<img src="upload/news-posts/art3.jpg" alt="">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art4.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/art5.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>

									</div>
								</div> -->
								<!-- End carousel box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
									</div>
                              <!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24KV9C0xi6EgrU74RkDFaTv1"+"&opts=16798&num=10&ts=1681407622355");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->

<h3></h3><!-- Start BawkBox Code--><script data-sil-id="643c60514fce680013c756ef">var loadWidget = function() { var d = document, w = window, l = window.location,p = l.protocol == "file:" ? "http://" : "//"; if (!w.WS) w.WS = {}; c = w.WS; var m=function(t, o){ var e = d.getElementsByTagName("script"); e=e[e.length-1]; var n = d.createElement(t); if (t=="script") {n.async=true;} for (k in o) n[k] = o[k]; e.parentNode.insertBefore(n, e)}; m("script", { src: p + "bawkbox.com/widget/customer-chat/643c60514fce680013c756ef?page=" +encodeURIComponent(l+''), type: 'text/javascript' }); c.load_net = m; }; if(window.Squarespace){ document.addEventListener('DOMContentLoaded', loadWidget); setTimeOut(function(){ document.addEventListener('DOMContentLoaded', loadWidget); }, 3000) } else { loadWidget() } </script><div class="sil-widget-customer-chat sil-widget" id="sil-widget-643c60514fce680013c756ef"><a href="//bawkbox.com/install/customer-chat">Customer Chat</a></div><!-- End BawkBox Code-->
								</div>
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->
                        
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

<!-- Mirrored from nunforest.com/hotmagazine/dark-version/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:49:18 GMT -->
</html>