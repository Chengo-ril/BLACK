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

    <title>Ectasy | News Upload</title>

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
                            <h2>News Upload</h2>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php
                  $rand = rand(1000,9999);
                  $matric ="NEWS/".$rand;
                    include('dbb.php'); 
                   error_reporting(E_ALL);

                   if(isset($_REQUEST["submit"])){
                    $uin = $_REQUEST["uin"];
                    $date = $_REQUEST["date"];
                    $headline = trim(addslashes($_REQUEST["headline"]));
                    $category = trim(addslashes($_REQUEST["category"]));
                

                    $cover = $_FILES["cover"]['name'];
                    $target ="coverphoto/";
                    $target =$target.$_FILES["cover"]['name'];
                    if(move_uploaded_file($_FILES["cover"]['tmp_name'], $target)>0){

                    $photocredit = trim(addslashes($_REQUEST["photocredit"]));
                    $embed = trim(addslashes($_REQUEST["embed"]));
                    $content = trim(addslashes($_REQUEST["content"]));
                    $blockquote = trim(addslashes($_REQUEST["blockquote"]));
                    $a = trim(addslashes($_REQUEST["a"]));
                    $post_view = trim(addslashes($_REQUEST["post_view"]));
                    // $designation = trim(addslashes($_REQUEST["designation"]));

                    function RemoveSpecialChar($headline){
           
                        //using preg_replace() function
                        // to replace the word
                        $res = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$headline);
            
                        //Returning the result
                        return $res;
                    }
                    $headline2 = RemoveSpecialChar($headline);
                    $headline3 = str_replace(" ",'-',$headline2);
                    $headline4 = strtolower($headline3);
                    
                    




                   


                  // to check for duplicate record in the database

                   $check = mysqli_query ($conn, "SELECT * FROM blogtable WHERE  uin='$uin' AND content='$content'");
                    $checkrows = mysqli_num_rows ($check);
                    if($checkrows>0){
                       echo "<script>alert('record exist in database')</script>";
                    }
                    else{

                   $sql ="INSERT INTO blogtable(uin, date, headline, category, cover, photocredit, embed, content, blockquote, a, post_view) VALUES ('$uin','$date','$headline','$category','$cover','$photocredit','$embed','$content','$blockquote','$headline4','0')";
                   mysqli_query($conn, $sql) or die(mysqli_error($conn));
                   $num = mysqli_insert_id($conn);
                   if(mysqli_affected_rows($conn) !=1) {
                    $message ="Error inserting into database";
                   } 


                   echo "<script>alert('Your post has been successfully uploaded')</script>";
                }
              }
            }
                  ?>
                                <input type="hidden" value="<?php echo $matric; ?>" class="form-control" name="uin" readonly>

                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Date Uploaded</label>
                                    <input type="date" class="form-control" name="date" required></div>
                                </div>

                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Headline</label>
                                    <input type="text" class="form-control" name="headline" placeholder="Enter Headline..." required></div>
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
                                    <label class="col-sm-011 control-label">Cover Photo</label>
                                    <input type="file" accept=".jpg,.jpeg,.png,.gif,.ico" class="form-control" name="cover" required></div>
                                </div>

                                
                                <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-011 control-label">Photo Credit</label>
                                    <input type="text" class="form-control" name="photocredit" placeholder="Enter Photo Credit">
                                </div>
                                </div>

                                
                                <div class="col-sm-10">
                                <div class="form-group">
                                        <label class="col-sm-011 control-label">Embeded Code</label>
                                        <input type="text" name="embed"  class="form-control" placeholder="Embeded code link....." >
                                    </div>
                                </div>


                                <div class="col-sm-10">
                                <div class="form-group">
                                        <label class="col-sm-011 control-label">Content</label>
                                        <textarea  name="content" cols="5" class="form-control" id="summernote" placeholder="Enter Content....." rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-10">
                                <div class="form-group">
                                        <label class="col-sm-011 control-label">Blockquote</label>
                                        <textarea name="blockquote" cols="5" maxlength="80" class="form-control" rows="3" required></textarea>
                                    </div>
                                </div>


                                <!-- <div class="col-sm-4">
                                <div class="form-group"> -->
                                    <!-- <label class="col-sm-011 control-label">Link</label> -->
                                    <input type="hidden" class="form-control" name="a">
                                <!-- </div>
                                </div> -->


                                
                                <!-- <div class="col-sm-4">
                                <div class="form-group"> -->
                                    <!-- <label class="col-sm-011 control-label">Views</label> -->
                                    <input type="hidden" class="form-control" name="post_view" >
                                <!-- </div> -->
                                <!-- </div> -->

                                
                                        
                             <!-- <input type="hidden" name="designation"  class="form-control" value="Admin" > -->
                                    






                                <div class="form-group">
                                    <div class="col-sm-10">
                                    <label class="col-sm-011 control-label"></label>
                                    <input type="submit" name="submit" value="UPLOAD NEWS" class="form-control" style="background-color:  #1ab394; color: white;"></div>
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
