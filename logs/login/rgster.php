<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">


    
    <title>ECTASY | Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a>
                <div class="logo">
                    <img class="logo-size" src="images/logo-white.png" alt="" title="Ectasy">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            <a class="active">Register</a>
                        </div>
                        <form method="post" enctype="multipart/form-data">

                        <?php  
                
                $rand = rand(100000,999999);
                $junk ="BLOGGER-" .$rand;
                  include('dbb.php'); 
                 error_reporting(E_ALL);

                 if(isset($_REQUEST["submit"])){
                  $fullname = trim(addslashes($_REQUEST["fullname"]));
                  $uin = $_REQUEST["uin"];
                  $emailed = $_REQUEST["emailed"];
                  $phone= $_REQUEST["phone"];
                  $dob = $_REQUEST["dob"];
                  $gender = $_REQUEST["gender"];
                  $civic= $_REQUEST["civic"];
                  $passworded = $_REQUEST["passworded"];

                  
                  

                  $passport = $_FILES["passport"]['name'];
                  $target ="passport/";
                  $target =$target.$_FILES["passport"]['name'];
                  if(move_uploaded_file($_FILES["passport"]['tmp_name'], $target)>0){


                 

                // to check for duplicate record in the database

                $check = mysqli_query ($conn, "SELECT * FROM form_register WHERE emailed='$emailed' AND phone ='$phone' ");
                  $checkrows = mysqli_num_rows ($check);
                  if($checkrows>0){
                     echo "<script>alert('record exist in database')</script>";
                  }
                  else{
         
                $sql = "INSERT INTO form_register(fullname, uin, emailed, phone, dob, passport, gender, civic, passworded) VALUES ('$fullname','$uin','$emailed','$phone','$dob','$passport','$gender','$civic',PASSWORD('$passworded'))";
                mysqli_query($conn, $sql) or die(my_sqli_error($conn));
                $num =mysqli_insert_id($conn);
                if(mysqli_affected_rows($conn) !=1) {
                    $message ="Error inserting into database";
                }
                  
                 echo "<script>alert('Dear $fullname your data has been submitted successfully')</script>";
              }
            }
        }
                ?>
                            <div>
                                <label for="name">Full Name *</label>
                                <input class="form-control" type="text" name="fullname" placeholder="Enter Fullname" required>
                            </div>
                            <div>
                                <input type="hidden" value="<?php echo $junk ?>" name="uin" class="form-control" >
                            </div>
                            <div>
                                <label for="email">Email *</label>
                                <input class="form-control" type="email" name="emailed" placeholder="Enter Email Address" required>
                            </div>
                            <div>
                                <label for="phone">Phone Number *</label>
                                <input class="form-control" type="number" name="phone" placeholder="Enter Phone Number" required>
                            </div>
                            <div>
                                <label for="dob">Date of Birth *</label>
                                <input class="form-control" type="date" name="dob"  required>
                            </div>
                            <div>
                                <label for="passport">Passport *</label>
                                <input class="form-control" type="file" accept=".jpg,.jpeg,.png,.gif,.ico" name="passport"  required>
                            </div>
                            <div>
                                <label for="gender">Gender *</label>
                                <select name="gender" class="form-control" required>
                                    <option value="" selected disabled="disabled">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>   
                            </div>
                            <div>
                                <label for="m">Civic Status *</label>
                                <select name="civic" class="form-control" required>
                                    <option value="" selected disabled="disabled">Select Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorce">Divorce</option>
                                    <option value="Widow/Widower">Widow/Widower</option>
                                </select>   
                            </div>
                            <div>
                                <label for="password">Password *</label>
                                <input class="form-control" type="password" name="passworded" required>
                            </div>
                            
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="submit" value="SIGN UP">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>