<ul class="category-list">
								<li>
										<a href="cat.php?cat=news">News
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='news'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=politics">Politics
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='politics'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=sports">Sports
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='sports'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=business">Business
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='business'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=fashion">Fashion
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='fashion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=entertainment">Entertainment
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM blogtable WHERE category='entertainment'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
									<li>
										<a href="cat.php?cat=videos">Videos
										<?php
include('dbb.php');
$sql = "SELECT COUNT( * ) AS TOTALPOST FROM videotable";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></a>
									</li>
								</ul>