<?php
include('session.php');
include('dbb.php');
$id = 1;
$sql="SELECT * FROM form_register WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<?php 
if(isset($_REQUEST['id'])){
    $sql = "SELECT * FROM videotable WHERE id='$_REQUEST[id]'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ectasy | Video update</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">


    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

  <?php include('menu.php') ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Video Update</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  class="form-horizontal" enctype="m">
                               
                            <?php
                  $rand = rand(0000, 9999);
                  $ID = "video".$rand;
                    include('dbb.php'); 
                   error_reporting(E_ALL);

                   if(isset($_REQUEST["submit"])){
                    $uin = $_REQUEST["uin"];
                    $videoheadline = trim(addslashes($_REQUEST["videoheadline"]));
                    $date = $_REQUEST["date"];
                    $category = trim(addslashes($_REQUEST["category"]));
                    $videourl = trim(addslashes($_REQUEST["videourl"]));
                    $yec = trim(addslashes($_REQUEST["yec"]));

                    
                                  
                        
                        $sql ="UPDATE videotable SET uin='$uin', videoheadline='$videoheadline', date='$date', category='$category', videourl='$videourl', yec='$yec' WHERE id='$_REQUEST[id]'";
                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        $num = mysqli_insert_id($conn);
                        if(mysqli_affected_rows($conn) !=1){
                            $message ="Error updating news";
                        }
                    
                        echo "<script>alert('Video successfully updated')
                        location.href='videoinventory.php'</script>";
                    }

                        mysqli_close($conn);
                            ?>
            



                                
                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label">UIN</label>
                                    <input type="text" value="<?php echo $row['uin']; ?>" class="form-control" name="uin" required></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label">Video Headline</label>
                                    <input type="text" placeholder="Video Headline" required class="form-control" name="videoheadline" value="<?php echo $row['videoheadline'] ?>" title="Feature Headline"></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label">Date Uploaded</label>
                                    <input type="date" class="form-control" value="<?php echo $row['date']; ?>" name="date" required></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="control-label">Select Category:</label>
                                    <select name="category" class="form-control" required>
                                    <option value="" selected disabled="disabled"><?php echo $row['category'] ?> - Select Category</option>
                                    <option value="News">News</option>
                                    <option value="Politics">Politics</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Business">Business</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Entertainment">Entertainment</option>
                                    </select>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label">Video URL(Link)</label>
                                    <input type="text" placeholder="Video URL (Link)" required class="form-control" name="videourl" value="<?php echo $row['videourl'] ?>" title="Video URL">
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label">Youtube Embeded Code</label>
                                    <textarea name="yec" required placeholder="YouTube Embedded Code" class="form-control" title="Youtube embedded Code"><?php echo $row['yec'] ?>"</textarea>
                            </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-10">
                                <label class="col-sm-011 control-label"></label>
                                <input type="submit" name="submit" value="Update Video" class="form-control" style="background-color:  #1ab394; color: white;" onclick="return confirm('Are you sure you want to update this?');"></div>
                            </div>


                                </form>
                </div>       
                </div>       
                </div>       
                                
        <div class="footer">
            
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

  
<script src="summernote.js"></script>

<script>  
$(document).ready(function(){
$('#summernote').summernote();
});
</script>

</body>

</html>
