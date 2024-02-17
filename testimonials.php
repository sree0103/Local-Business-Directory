<?php
session_start();
include('includes/dbconnection.php');

$sql = "SELECT r.*, l.ListingTitle, l.logo FROM tblreview r INNER JOIN tbllisting l ON r.ListingId = l.ID";
$statement = $dbh->prepare($sql);
$statement->execute();
$reviews = $statement->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
   
    <!-- Page Title -->
    <title>KKDail||Testimonials</title>
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
        
        .card-columns {
            column-count: 2;
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
                        <h2 style= " color:#6037ac;font-family: Times New Roman, Times, serif;font-size:50px;text-align:center;">Testimonials</h2>
                        <p> <a href="index.php"> Home</a> / Testimonials</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="card-columns">
                    <?php foreach ($reviews as $review): ?>
                        <div class="card">
                            <div class="card-body">
                                
                            
                            <img src="images/<?php echo $review['logo']; ?>" class= "img-fluid" height="100"  width="300" style="border: 2px solid #F5F5F5; border-radius: 4px; alt="Listing Image" class="listing-image">
                            
                            <h5 class="card-title"><?php echo htmlentities($review['ListingTitle']); ?></h5>
                                <p class="card-text"><?php echo $review['Message']; ?></p>
                                <footer class="blockquote-footer"><?php echo $review['Name']; ?></footer>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('includes/footer.php');?>
</body>
</html>