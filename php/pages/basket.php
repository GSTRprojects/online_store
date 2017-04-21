<div id="basket">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Koszyk</h2>
                <table id="basket-summ" class="table table-hover table-striped">
                    <colgroup>
                        <col width="120">
                        <col>
                        <col width="150">
                        <col width="70">
                        <col width="150">
                        <col width="40">
                    </colgroup>
                    <thead>
                        <tr>
                            <th colspan="2">Produkt</th>
                            <th>Cena</th>
                            <th>Ilość</th>
                            <th>Razem</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart-image">
                                    <a href="#"><img src="img/foto1.jpg" class="img-responsive"/></a>
                                </div>
                            </td>
                            <td><a href="#" class="product-title">Inteligentny zegarek</a></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td><input type="text" class="form-control text-center" value="1"/></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td>
                                <a href="#" title="Usuń z koszyka" class="btn btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-image">
                                    <a href="#"><img src="img/products/prod1.jpg" class="img-responsive"/></a>
                                </div>
                            </td>
                            <td><a href="#" class="product-title">Inteligentny zegarek</a></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td><input type="text" class="form-control text-center" value="1"/></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td>
                                <a href="#" title="Usuń z koszyka" class="btn btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-image">
                                    <a href="#"><img src="img/products/prod2.jpg" class="img-responsive"/></a>
                                </div>
                            </td>
                            <td><a href="#" class="product-title">Inteligentny zegarek</a></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td><input type="text" class="form-control text-center" value="1"/></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td>
                                <a href="#" title="Usuń z koszyka" class="btn btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-image">
                                    <a href="#"><img src="img/products/prod3.jpg" class="img-responsive"/></a>
                                </div>
                            </td>
                            <td><a href="#" class="product-title">Inteligentny zegarek</a></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td><input type="text" class="form-control text-center" value="1"/></td>
                            <td><span class="price">249,00 zł</span></td>
                            <td>
                                <a href="#" title="Usuń z koszyka" class="btn btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">
                                <h4>Suma:</h4>
                            </td>
                            <td><span class="price">996,00 zł</span></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <hr />
        <h2 class="mb20">Podsumowanie zamówienia</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Metoda dostawy</h4></div>
                    <table class="table">
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="shipment" value="">
                                    <label>Poczta Polska</label>
                                </div>
                            </td>
                            <td class="text-right"><p class="form-control-static">12,00 zł</p></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="shipment" value="">
                                    <label>Kurier</label>
                                </div>
                            </td>
                            <td class="text-right"><p class="form-control-static">14,00 zł</p></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="shipment" value="">
                                    <label>Kurier (za pobraniem)</label>
                                </div>
                            </td>
                            <td class="text-right"><p class="form-control-static">19,00 zł</p></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="shipment" value="">
                                    <label>Odbiór w punkcie</label>
                                </div>
                            </td>
                            <td class="text-right"><p class="form-control-static">6,00 zł</p></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Metoda płatności</h4></div>
                    <table class="table">
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="payment" value="">
                                    <label>PayU</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="payment" value="">
                                    <label>Płatność kartą</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio">
                                    <input type="radio" name="payment" value="">
                                    <label>Przelew tradycyjny</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Dane do wysyłki</h4></div>
                    <div class="panel-body">

                        <form role="form" data-toggle="validator">
                            <div class="form-group">
                                <input type="text" placeholder="Imię i nazwisko" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                <span class="line"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Ulica i numer domu" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                <span class="line"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input data-mask="00-000" placeholder="Kod pocztowy" type="text" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                        <span class="line"></span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Miasto" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                        <span class="line"></span>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input data-mask="000-000-000" placeholder="Telefon kontaktowy" type="text" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                <span class="line"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" data-error="Nieprawidłowy adres email" required>
                                <span class="line"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Uwagi" class="form-control"></textarea>
                                <span class="line"></span>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="invoiceVat" class="styled" type="checkbox">
                                    <label for="invoiceVat">
                                        Chcę otrzymać fakturę VAT
                                    </label>
                                </div>
                            </div>
                            <div id="invoiceData" style="display: none">
                                <div class="form-group">
                                    <input type="text" placeholder="Nazwa firmy" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                    <span class="line"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Ulica i numer domu" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                    <span class="line"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input data-mask="00-000" placeholder="Kod pocztowy" type="text" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                            <span class="line"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Miasto" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                            <span class="line"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="NIP" class="form-control" data-minlength="6" data-error="Min. 3 znaki" required>
                                    <span class="line"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function invoiceChange() {
                                    if ($("#invoiceVat").prop("checked")) {
                                        $("#invoiceData").show();
                                    } else {
                                        $("#invoiceData").hide();
                                    }
                                }
                                $("#invoiceVat").change(function () {
                                    invoiceChange();
                                });

                                invoiceChange();
                            </script>
                        </form>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                <p class="form-control-static">Wartość koszyka:</p>
                            </td>
                            <td class="text-right"><p class="form-control-static">996,00 zł</p></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="form-control-static">Koszt dostawy:</p>
                            </td>
                            <td class="text-right"><p class="form-control-static">14,00 zł</p></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="form-control-static">Razem do zapłaty:</p>
                            </td>
                            <td class="text-right"><p class="form-control-static price">1010,00 zł</p></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                <div class="checkbox">
                                    <input id="acceptRules" class="styled" type="checkbox">
                                    <label for="acceptRules">
                                        Zgadzam się i akceptuje warunki <a href="#">Regulaminu sklepu</a>.
                                    </label>
                                </div>
                            </div>
                            </td>
                        </tr>
                    </table>
                    <div class="panel-footer text-right">
                        <button class="btn btn-primary-color btn-lg">Przejdź do podsumowania</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
