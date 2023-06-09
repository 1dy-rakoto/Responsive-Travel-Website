<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--custom css link-->
    <link rel="stylesheet" href="css/style.css">
    <title>Book</title>
</head>
<body>
    <!--Header-->
    <?php require_once 'elements/header.php' ?>

    <!--heading-->
    <div class="heading" style="background: url(images/book_background.jpg) no-repeat;">
        <h1>Book now</h1>
    </div>

    <!--Booking-->
    <section class="booking">
        <h1 class="heading-title">Book your trips!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <Label>name:</Label>
                    <input type="text" name="name" placeholder="enter your name...">
                </div>
                <div class="inputBox">
                    <Label>email:</Label>
                    <input type="email" name="email" placeholder="enter your email...">
                </div>
                <div class="inputBox">
                    <Label>phone:</Label>
                    <input type="number" name="phone" placeholder="enter your number...">
                </div>
                <div class="inputBox">
                    <Label>address:</Label>
                    <input type="text" name="address" placeholder="enter your address...">
                </div>
                <div class="inputBox">
                    <Label>where to:</Label>
                    <input type="text" name="location" placeholder="place you want to visit ...">
                </div>
                <div class="inputBox">
                    <Label>how many:</Label>
                    <input type="number" name="guests" placeholder="number of guests...">
                </div>
                <div class="inputBox">
                    <Label>arrivals:</Label>
                    <input type="date" name="arrivals" >
                </div>
                <div class="inputBox">
                    <Label>leaving:</Label>
                    <input type="date"  name="leaving" >
                </div>  
            </div>
            <input type="submit" value="submit" name="send" class="btn">
        </form>
    </section>

    <!--Footer-->
    <?php require_once 'elements/footer.php' ?>
    <script src="js/script.js" defer></script>
</body>
</html>