<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--custom css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js" defer></script>
    <title>Home</title>
</head>
<body>
    <!--Header-->
    <?php require_once 'elements/header.php' ?>
    
    <!--home section-->
    <?php require 'elements/home/slider.php'?>

    <!--Service section-->
    <?php require 'elements/home/services.php'?>
   
    <!--About-->
    <?php require_once 'elements/home/about.php'?>

    <!--Packages-->
    <?php require_once 'elements/home/packages.php'?>

    <!--offer--->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi eum repellendus, labore quam asperiores. Autem, quae tempora amet laboriosam sit esse, ad commodi, ea quaerat doloremque voluptate vel officia!
            </p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>

    <!--Footer-->
    <?php require_once 'elements/footer.php' ?>
    
    
</body>
</html>