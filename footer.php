<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>Giving the latest on Politics, Entertainment, Business, Sports and Fashion.</p>
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<!-- <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li> -->
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<!-- <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
									<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									<li>
									<?php
                include('dbb.php');
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE category='sports' ORDER BY `id` DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
										<a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="80px"></a>
										<div class="post-content">
										<a href="cat.php?cat=sports"><?php echo $row['category']; ?></a>
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
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE category='politics' ORDER BY `id` DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
										<a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="80px"></a>
										<div class="post-content">
										<a href="cat.php?cat=sports"><?php echo $row['category']; ?></a>
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
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` WHERE category='fashion' ORDER BY `id` DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>
										<a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" height="80px"></a>
										<div class="post-content">
										<a href="cat.php?cat=sports"><?php echo $row['category']; ?></a>
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
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Categories</h1>
								<ul class="category-list">
									<?php include('categorylist.php') ?>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Photos</h1>
								<ul class="flickr-list">
				
									<li>
									<?php
                include('dbb.php');
                $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `blogtable` ORDER BY `id` DESC LIMIT 0,6";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                ?>	
									<a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="logs/dashboard/coverphoto/<?php echo $row['cover']; ?>" alt="" height="100px"></a>
									<?php
								}
								}
																	
																	
								mysqli_close($conn);
												
								?>	
								</li>
									<!-- <li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>  -->
								</ul>
								<!-- <a href="#">View more photos...</a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2022 Ectasy</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<!-- <li><a href="contact.php">Contact</a></li> -->
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>