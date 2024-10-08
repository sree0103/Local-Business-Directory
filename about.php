<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <!-- Page Title -->
    <title>KKDail|| About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Hover Effects -->
    <link href="css/set1.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
<style>
    .subpage-bg {
            width: 100%;
            height: 100vh;
            background-image: url("images/blog-detail-img.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
    }
    .full-blog {
        font-family: "Arial", sans-serif; 
        font-style: oblique;
    }
</style>    
</head>

<body>
   <?php include_once('includes/header.php');?>
    <!--============================= SUBPAGE HEADER BG =============================-->
    <section class="subpage-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="titile-block title-block_subpage">
                        <h2 style= " color:#6037ac;font-family: Times New Roman, Times, serif;font-size:50px;text-align:center;">About Us</h2>
                        <p> <a href="index.php"> Home</a> / About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SUBPAGE HEADER BG -->
    <!--============================= BLOG DETAIL =============================-->
    <section class="main-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 responsive-wrap">
                    <div class="full-blog"> <?php

$sql="SELECT * from  tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)

{               ?>
    
                        

                        <div class="blog-content">
                        
                            <div class="blog-text">

                                <p class="lead">
                                   <?php  echo $row->PageDescription;?>
                                </p>

                             

                            </div><?php $cnt=$cnt+1;}} ?>
                        </div>
                       
                    
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </section>
    <!--//END BLOG DETAIL -->
    <?php include_once('includes/footer.php');?>

    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>