<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Online Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="css/jquery.jscrollpane.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/colors.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="Shortcut icon" href="img/favicon.gif" type="image/gif" />

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.jscrollpane.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.catslider.js"></script>
        <script src="js/modernizr.custom.63321.js"></script>

    </head>
    <body>
        <div id="main">
            <!-- TOP MENU START -->
            <?php include ('php/elements/top_menu.php'); ?>
            <!-- TOP MENU END -->

            <!-- BASKET MENU START -->
            <?php include ('php/elements/basket_menu.php'); ?>
            <!-- BASKET MENU END -->

            <!-- MENU START -->
            <?php include ('php/elements/menu.php'); ?>
            <!-- MENU END -->

            <?php
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                $page = trim(strtolower($_GET['page']));
                if (file_exists('php/pages/' . $page . '.php')) {
                    include('php/pages/' . $page . '.php');
                } else {
                    include('php/pages/home.php');
                }
            } else {
                include('php/pages/home.php');
            }
            ?>

            <?php include('php/elements/footer.php'); ?>
            <div class="navbar-fixed-bottom cookies-info" style="display: none;">
                <div class="container">
                    Informujemy, że strona korzysta z plików cookies. Odwiedzając serwis bez dokonania zmian ustawień przeglądarki, wyrażasz zgodę na wykorzystanie plików cookies w celu ułatwienia korzystania z serwisu.
                    <button id="cookiesAccept" class="btn btn-xs btn-warning pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
            </div>
        </div>
    </body>
</html>
