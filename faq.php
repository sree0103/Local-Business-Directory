<?php
 session_start();
 include('includes/dbconnection.php');   
 // connect with database
    // $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
 
    // fetch all FAQs from database
    $sql = "SELECT * FROM tblfaq";
    $statement = $dbh->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();
 
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>KKDail||FAQ</title>
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
<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link href="css/set1.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <!-- show all FAQs in a panel -->
    <section class="subpage-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="titile-block title-block_subpage">
                        <h2 style= " color:#6037ac;font-family: Times New Roman, Times, serif;font-size:50px;text-align:center;">FAQ</h2>
                        <p> <a href="index.php"> Home</a> / FAQ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="row">
                <div class="col-md-12 accordion_one">
                    <div class="panel-group">
                        <?php foreach ($faqs as $faq): ?>
                            <div class="panel panel-default">
                                <!-- button to show the question -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
                                        <?php echo $faq['question']; ?>
                                    </a>
                                </h4>
                            </div>
                            <!-- accordion for answer -->
                            <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="text-accordion">
                                        <?php echo $faq['answer']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once('includes/footer.php');?>

<style>
.accordion_one .panel-group {
    border: 1px solid #f1f1f1;
    margin-top: 100px
}
a:link {
    text-decoration: none
}
.accordion_one .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0px solid transparent;
    border-radius: 0;
    margin: 0
}
.accordion_one .panel-default {
    border: 0
}
.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px
}
h4 {
    font-size: 18px;
    line-height: 24px
}
.accordion_one .panel .panel-heading a.collapsed {
    color: #999999;
    display: block;
    padding: 12px 30px;
    border-top: 0px
}
.accordion_one .panel .panel-heading a {
    display: block;
    padding: 12px 30px;
    background: #fff;
    color: #313131;
    border-bottom: 1px solid #f1f1f1
}
.accordion-wrap .panel .panel-heading a {
    font-size: 14px
}
.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 25px 30px 30px 35px;
    background: #fff;
    color: #999999
}
.img-accordion {
    width: 81px;
    float: left;
    margin-right: 15px;
    display: block
}
.accordion_one .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #999999;
    background: #f1f1f1
}
.accordion_one .panel .panel-heading a:after,
.accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px
}
.accordion_one .panel .panel-heading a:after {
    content: "\2212"
}
.accordion_one .panel .panel-heading a:after,
.accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px
}

</style>