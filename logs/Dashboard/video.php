<?php
include('session.php');
include('dbb.php');
$id = 1;
$sql="SELECT * FROM form_register WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="">
	<meta property="og:title" content="ECTASY" />
	<meta property="og:description" content="Dont miss out latest news on fashion, entertainment and politics" />
	<meta property="author" itemprop="image" content="Chengo Ril">
	<meta name="language" content="english">
	<meta property="og:type" content="website, news" />

    <title>Ectasy | Video Upload</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png" type="image/x-icon">
</head>

<body>
<?php include('menu.php') ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h2>Video Upload</h2>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php
                  $rand = rand(1000,9999);
                  $ID = "video".$rand;
                    include('dbb.php'); 
                   error_reporting(E_ALL);

                   if(isset($_REQUEST["submit"])){
                    $uin = trim(addslashes($_REQUEST['uin']));
                    $videoheadline = trim(addslashes($_REQUEST['videoheadline']));
                    $date = trim(addslashes($_REQUEST['date']));
                    $category = trim(addslashes($_REQUEST['category']));
                    $videourl = trim(addslashes($_REQUEST['videourl']));
                    $yec = trim(addslashes($_REQUEST['yec']));
                    
                    




                   


                  // to check for duplicate record in the database

                  $sql = "INSERT INTO videotable (uin, videoheadline, `date`, category, videourl, yec) VALUES ('$uin','$videoheadline','$date','$category','$videourl','$yec')";

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
                                <input type="hidden" value="<?php echo $ID; ?>" class="form-control" name="uin" readonly>


                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Video Headline</label>
                                    <input type="text" class="form-control" name="videoheadline" placeholder="Enter Headline..." title="Enter Video Headline" required></div>
                                </div>

                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Date Uploaded</label>
                                    <input type="date" class="form-control" name="date" required></div>
                                </div>

                              
                            


                                <div class="col-sm-10">
                                <div class="form-group">
                                        <label class="col-sm-011 control-label">Category</label>
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
                                </div>

                                
                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Video URL</label>
                                    <input type="text" class="form-control" name="videourl" placeholder="Enter Video URL" title="Enter Video URL">
                                </div>
                                </div>

                                
                                <div class="col-sm-10">
                                <div class="form-group">
                                        <label class="col-sm-011 control-label">Youtube Embeded Code</label>
                                        <textarea name="yec" required placeholder="YouTube Embedded Code" class="form-control" title="Youtube embedded Code"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label"></label>
                                    <input type="submit" name="submit" value="Upload Video" class="btn  btn-block btn-primary">
                                </div>
                            </form>
                            </div>
                </div>
            </div>
        </div>
      <?php include('footer.php') ?>
        </div>
        </div>
 

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


    <script src="summernote.js"></script>

    <script>  
$(document).ready(function(){
    $('#summernote').summernote();
});
    </script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
