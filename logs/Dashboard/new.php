                            <form id="newform" method="post" name="register" enctype="multipart/form-data" id="loginForm">

                            <?php
                            include("dbb.php");
                            $rand = rand(0000, 9999);
                            $ID = "video".$rand;

                            error_reporting(E_ALL);
                            if (isset($_REQUEST['submit'])) {

                                $uin = trim(addslashes($_REQUEST['uin']));
                                $videoheadline = trim(addslashes($_REQUEST['videoheadline']));
                                $date = trim(addslashes($_REQUEST['date']));
                                $category = trim(addslashes($_REQUEST['category']));
                                $videourl = trim(addslashes($_REQUEST['videourl']));
                                $yec = trim(addslashes($_REQUEST['yec']));

                                $sql = "INSERT INTO videotable (videoheadline, `date`, category, videourl, yec) VALUES ('$videoheadline','$date','$category','$videourl','$yec')";

                                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                $num = mysqli_insert_id($conn);
                                if (mysqli_affected_rows($conn) != 1) {
                                    $message = "Error inserting the video.";
                                }
                                echo "<script>alert('Video Successfully Uploaded')
                                location.href='video.php'</script>";
                            }
                            mysqli_close($conn);


                            ?>

                            <input type="hidden" value="<?php echo $ID; ?>" class="form-control" hidden="true" required name="uin" title="UIN">

                            <div class="form-group col-lg-10">
                                <label>Video Headline:</label>
                                <input type="text" placeholder="Feature Headline" required class="form-control" name="videoheadline" title="Feature Headline">
                            </div>

                            <div class="form-group col-lg-10">
                                <label>Select Date:</label>
                                <input type="date" required class="form-control" name="date" title="Video Date">
                            </div>

                            <div class="form-group col-lg-10">
                            <label class="control-label">Select Category:</label>
                                <select name="category" class="form-control" required>
                                <option value="" selected disabled="disabled">Select Category</option>
                                <option value="News">News</option>
                                <option value="Politics">Politics</option>
                                <option value="Sports">Sports</option>
                                <option value="Business">Business</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Entertainment">Entertainment</option>
                                </select>
                            </div>


                            <div class="form-group col-lg-10">
                                <label>Video URL (Link):</label>
                                <input type="text" placeholder="Video URL (Link)" required class="form-control" name="videourl" title="Video URL">
                            </div>

                            <div class="form-group col-lg-10">
                                <label>YouTube Embedded Code </label>                  
                                <textarea name="yec" required placeholder="YouTube Embedded Code" class="form-control" title="Youtube embedded Code"></textarea>
                            </div>

                            <div class="form-group col-lg-10">
                            <div class="text-center">
                                <input type="submit" name="submit" value="Upload Video" class="btn  btn-block btn-primary">
                            </div>
                            </div>
                            </div>
                            </form>