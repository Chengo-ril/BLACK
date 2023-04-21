<header class="clearfix second-style">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									<li>
										<span class="city-weather">Akure, Nigeria</span>
									</li>
                                    <li>
                                    <span class="time-now">
                                    <script language=javascript>
                                        todaysDate = new Date();
                                        dayarray = new
                                        Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
                                            "Saturday");
                                        montharray = new Array("Jan", "Feb", "Mar", "Apr",
                                            "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                                        document.write(dayarray[todaysDate.getDay()] + ", " +
                                            montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
                                        if (todaysDate.getYear() <
                                            1000) {
                                            document.write(todaysDate.getYear() + 1900);
                                        } else {
                                            document.write(todaysDate.getYear());
                                        }
                                    </script>
                                </span>


                            </li>
                            <li> <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
                                    <script>
                                        function checkTime(i) {
                                            if (i < 10) {
                                                i = "0" + i;
                                            }
                                            return i;
                                        }

                                        function startTime() {
                                            var today = new Date();
                                            var h = today.getHours();
                                            var m = today.getMinutes();
                                            var s = today.getSeconds();
                                            // add a zero in front of numbers<10
                                            m = checkTime(m);
                                            s = checkTime(s);
                                            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                                            t = setTimeout(function() {
                                                startTime()
                                            }, 500);
                                        }
                                        startTime();
                                    </script>
                                </span></li>
									<li><a href="./logs/login/index.php">Log In</a></li>
									<!-- <li><a href="contact.html">Contact</a></li> -->
									<!-- <li><a href="#">Purchase Theme</a></li> -->
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<!-- <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li> -->
									<li><a class="twitter" href="https://twitter.com/chengoril?t=LJH-2zdfyzGz6_AC-5yrqw&s=08"><i class="fa fa-twitter"></i></a></li>
									<!-- <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li> -->
									<!-- <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li> -->
									<!-- <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> -->
									<!-- <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li> -->
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><img src="logs/login/images/ectasywhite.png" alt="" width="120px"></a>
						</div>

						<!-- <div class="advertisement">
							<div class="desktop-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/728x90-white.jpg" alt="">
							</div>
							<div class="tablet-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/468x60-white.jpg" alt="">
							</div>
						</div> -->
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

								<li class="drop"><a class="home" href="index.php">Home</a></li>

								<li><a class="world" href="cat.php?cat=news">News</a>
									<!-- <div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown world-dropdown">
												<div class="filter-block">
													<ul class="filter-posts">
														<li><a href="#">All</a></li>
														<li><a href="#">Politics</a></li>
														<li><a href="#">Business</a></li>
														<li><a class="active" href="#">Lifestyle</a></li>
														<li><a href="#">Economy</a></li>
														<li><a href="#">Music</a></li>
													</ul>
												</div>
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Lifestyle</h1>
														<div class="owl-carousel" data-num="4">
														
															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art1.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art2.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art3.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art6.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art9.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div> -->
								</li>

								<li><a class="travel" href="cat.php?cat=politics">Politics</a></li>

								<li><a class="tech" href="cat.php?cat=sports">Sports</a>
									<!-- <div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ul class="horizontal-filter-posts">
														<li><a class="active" href="#">All</a></li>
														<li><a href="#">Software</a></li>
														<li><a href="#">Internet</a></li>
														<li><a href="#">Mobile</a></li>
													</ul>
													<div class="owl-carousel" data-num="4">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art1.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art2.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art3.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art6.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art9.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div> -->
								</li>

								<li><a class="fashion" href="cat.php?cat=business">Business</a></li>

								<li><a class="sport" href="cat.php?cat=fashion">Fashion</a></li>
								<li><a class="travel" href="cat.php?cat=entertainment">Entertainment</a></li>
								<!-- <li><a class="food" href="videocat.php?vid=Video">Videos</li> -->

							</ul>
							<form class="navbar-form navbar-right" role="search" action="search.php" method="post">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>