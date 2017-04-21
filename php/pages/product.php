<div id="product">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="gallery">
                    <div id="gallery-big" class="mb20">
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod1.jpg" alt="Lazy Owl Image"></div>
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod2.jpg" alt="Lazy Owl Image"></div>
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod3.jpg" alt="Lazy Owl Image"></div>
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod1.jpg" alt="Lazy Owl Image"></div>
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod2.jpg" alt="Lazy Owl Image"></div>
                        <div class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod3.jpg" alt="Lazy Owl Image"></div>
                    </div>

                    <div id="gallery-mini">
                        <a href="#" class="item active"><img class="lazyOwl img-responsive" data-src="img/products/prod1.jpg" alt="Lazy Owl Image"></a>
                        <a href="#" class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod2.jpg" alt="Lazy Owl Image"></a>
                        <a href="#" class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod3.jpg" alt="Lazy Owl Image"></a>
                        <a href="#" class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod1.jpg" alt="Lazy Owl Image"></a>
                        <a href="#" class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod2.jpg" alt="Lazy Owl Image"></a>
                        <a href="#" class="item"><img class="lazyOwl img-responsive" data-src="img/products/prod3.jpg" alt="Lazy Owl Image"></a>
                    </div>
                    <script type="text/javascript">
                        $("#gallery-big").owlCarousel({
                            singleItem: true,
                            lazyLoad: true,
                            lazyFollow: false,
                            navigation: false
                        });

                        $("#gallery-mini").owlCarousel({
                            items: 3,
                            lazyLoad: true,
                            navigation: true,
                            autoPlay: true,
                            navigationText: ["<button class='btn btn-xs btn-primary-color'><span class='glyphicon glyphicon-menu-left'></span></button>", "<button class='btn btn-xs btn-primary-color'><span class='glyphicon glyphicon-menu-right'></span></button>"],
                        });

                        $("#gallery-mini a").click(function () {
                            var owl = $("#gallery-big").data('owlCarousel');
                            owl.goTo($("#gallery-mini a").index(this));

                            $("#gallery-mini a.active").removeClass('active');
                            $(this).addClass('active');
                            return false;
                        });
                    </script>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="font-open-sans font-weight-400">Inteligentny zegarek</h1>
                <div class="clearfix"></div>
                <ul class="starts list-unstyled list-inline">
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                </ul>
                <script type="text/javascript">
                    $(".starts a").hover(function () {
                        $(this).parent().prevAll().children('a').addClass('yellow');
                        $(this).addClass('yellow');
                    }).mouseleave(function() {
                        $(".starts a").removeClass('yellow');
                    });
                </script>
                <div class="clearfix"></div>

                <div class="product-params">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="filters-product">
                                <div class="row">
                                    <div class="col-md-5 text-right">
                                        <div class="filters-product-label middle-text">Kolor:</div>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control">
                                            <option>Czarny</option>
                                            <option>Zielony</option>
                                            <option>Niebieski</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 text-right">
                                        <div class="filters-product-label middle-text">Ilość:</div>
                                    </div>
                                    <div class="col-md-7">

                                        <div class="form-group">
                                            <div class="input-group btn-quantity">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default btn-border quantity-minus" type="button"><span class="glyphicon glyphicon glyphicon-minus"></span></button>
                                                </span>
                                                <input type="text" class="form-control" id="quantity" value="1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default btn-border quantity-plus" type="button"><span class="glyphicon glyphicon glyphicon-plus"></span></button>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="product-price text-center">
                                <span class="price font-size-bigger">249,00 zł</span>
                            </div>
                            <div class="product-box-buttons mb15 text-center">
                                <button class="btn btn-cart btn-lg">
                                    <span class="primary-color-bg btn-cart-icon">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </span>DO KOSZYKA
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Producent:</td>
                            <td>Nazwa producenta</td>
                        </tr>
                        <tr>
                            <td>Model:</td>
                            <td>A1554</td>
                        </tr>
                        <tr>
                            <td>Funkcje:</td>
                            <td>Stoper, budzik, kalendarz, radio</td>
                        </tr>
                        <tr>
                            <td>Wbudowana kamera:</td>
                            <td>TAK, 2 Mpix</td>
                        </tr>
                        <tr>
                            <td>Karta pamięci:</td>
                            <td>Do 32GB (brak karty w zestawie)</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".btn-quantity").each(function () {
        var input = $(this).find('input');

        $(this).find('.btn').click(function () {

            if ($(this).hasClass('quantity-plus')) {
                input.val(parseInt(input.val()) + 1);
            } else if ($(this).hasClass('quantity-minus')) {
                if (parseInt(input.val()) > 1) {
                    input.val(parseInt(input.val()) - 1);
                }
            }

            return false;
        });

        input.focusout(function () {
            if (parseInt($(this).val()) <= 0) {
                $(this).val('1');
            }
        });
    });
</script>
