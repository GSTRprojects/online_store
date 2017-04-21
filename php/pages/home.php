<div id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="owl-carousel-over promotion">
                    <div id="owl-carousel-big" class="owl-carousel">
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                        <div>
                            <?php include 'php/elements/product.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 owl-small">
                <div id="owl-carousel-small" class="owl-carousel owl-carousel-one-col">
                    <div>
                        <?php include 'php/elements/featured.php'; ?>
                    </div>
                    <div>
                        <?php include 'php/elements/featured.php'; ?>
                    </div>
                    <div>
                        <?php include 'php/elements/featured.php'; ?>
                    </div>
                </div>
            </div>
            <script>

                $(document).ready(function () {
                    $("#owl-carousel-big").owlCarousel({
                        slideSpeed: 150,
                        items: 4,
                        navigation: true,
                        navigationText: ["<button class='btn btn-xs btn-primary-color'><span class='glyphicon glyphicon-menu-left'></span></button>", "<button class='btn btn-xs btn-primary-color'><span class='glyphicon glyphicon-menu-right'></span></button>"],
                        itemsDesktop: [1199, 4],
                        itemsDesktopSmall: [980, 3],
                        itemsTablet: [768, 2],
                        itemsTabletSmall: false,
                        autoPlay: true,
                        stopOnHover: true,
                        itemsMobile: [479, 1],
                        pagination: false,
                        afterInit: function(){
                            $("#owl-carousel-big .owl-buttons .owl-prev").after('<h3>Oferty tygodnia</h3>');
                        }
                    });

                    $("#owl-carousel-small").owlCarousel({
                        slideSpeed: 350,
                        items: 1,
                        navigation: false,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [980, 1],
                        itemsTablet: [768, 1],
                        itemsTabletSmall: false,
                        autoPlay: true,
                        stopOnHover: true,
                        itemsMobile: [479, 1],
                        pagination: false,


                    });

                });


            </script>
        </div>
      </div>

        <header class="clearfix">
            <h1 class="text-center"><span>Popularne produkty</span></h1>
        </header>
<div class="container">
    <div class="main">
        <div id="mi-slider" class="mi-slider">
            <ul>
                <li>
                  <a href="#">
                        <?php include 'php/elements/featured.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/featured.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/featured.php'; ?>
                  </a>
                </li>
            </ul>
            <ul>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
            </ul>
            <ul>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
            </ul>
            <ul>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
                <li>
                  <a href="#">
                        <?php include 'php/elements/product.php'; ?>
                  </a>
                </li>
            </ul>
            <nav>
                <a href="#">Telefony</a>
                <a href="#">Tablety</a>
                <a href="#">Zegarki</a>
                <a href="#">Aparaty</a>
            </nav>
        </div>
    </div>
</div>
<!-- /container -->
<script>
$(function() {

    $('#mi-slider').catslider();

});
</script>

<div class="container">
<header class="clearfix">
    <h1 class="text-center mtb40"><span>Nowości</span></h1>
</header>
        <div class="row">
            <div class="col-md-3">
                <?php include 'php/elements/product.php'; ?>
            </div>
            <div class="col-md-3">
                <?php include 'php/elements/product.php'; ?>
            </div>
            <div class="col-md-3">
                <?php include 'php/elements/product.php'; ?>
            </div>
            <div class="col-md-3">
                <?php include 'php/elements/product.php'; ?>
            </div>
        </div>
    </div>
