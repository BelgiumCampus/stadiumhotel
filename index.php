<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="css/site.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
<!--        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">-->
        <!--todo: proper favicon-->
        <link rel="icon" href="content/stadium-hotel-logo.jpg" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <title>The Stadium Hotel</title>
    </head>
    <body>
       
        <header>
            <!--contact details and logo-->
            <nav>
                <!--navigation-->
            </nav>
        </header>
        <main>
            <section>
                <!--quick booking-->
                 <?php
                    include 'views/quickbooking-module.html';
                ?>
            </section>
            <section>
                <?php
                    include 'views/tile-module.html';
                ?>
            </section>
            <section>
                <!--contact form-->
            </section>
        </main>
        <footer>
            <!--copyright, date and links-->
        </footer>
 
    </body>
</html>