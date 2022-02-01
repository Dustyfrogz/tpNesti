<!DOCTYPE html>
<html lang="en">

<head>
<?php include('common/head.php'); ?>


    
</head>

<body>
    <?php include('common/header.php'); ?>
    <!-- Navigation-->
    <?php include('common/navigation.php'); ?>

    <?php
    $loc = filter_input(INPUT_GET, "loc");
    //     if ($loc = $_GET['loc']==null){
    //     $loc = 'home';
    // }
    switch ($loc) {
        case 'home':
            include("content/index_content.php");
            break;
        case 'about':
            include("content/about_content.php");
            break;
        case 'products':
            include("content/product_content.php");
            break;
        case 'realisations':
            include("content/realisations.php");
            break;
        default:
            include("content/index_content.php");
            break;
    } ?>;
    <?php include('common/footer.php'); ?>
    <!-- Bootstrap core JS-->
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>