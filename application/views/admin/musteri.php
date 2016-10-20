

        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                        </div>
                    </div>
                    <!--İnput Alanı Başlangıç-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-border panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Müşteri Ekle</h3>
                                </div>
                                <form method="post" action="<?=  base_url()?>Admin/add_customer">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="text" name="name" class="form-control" placeholder="Müşteri Adı Soyadı" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="phone" class="form-control" data-mask="(999) 999-9999" required placeholder="Telefon Numarası">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <textarea name="address" id="" class="form-control" rows="3" placeholder="Adress Giriniz" required=""></textarea>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-offset-3">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-custom btn-default w-lg">Ekle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!--İnput Alanı Bitiş-->

                    <!--Listeleme Alanı Başlangıç-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-border panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Müşteri Lİste</h3>
                                    <p><small>Arama kriterlerini girip arayarak sonuçları filtreleyebilirsiniz</small></p>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="Ad Soyad">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="date" class="form-control" placeholder="Tarih">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="Boya">
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-default btn-block">Ara</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-actions-bar m-b-0">
                                                    <thead>
                                                        <tr>

                                                            <th>Adı Soyadı</th>
                                                            <th>Telefon</th>
                                                            <th>Tarih</th>
                                                            <th>Boya</th>
                                                            <th>Fatura</th>
                                                            <th>Bakiye</th>
                                                            <th>Toplam</th>
                                                            <th style="width: 80px">İşlem</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($customers as $cus) {?>
                                                        <tr>
                                                            <td><?=$cus->name ?></td>
                                                            <td><?=$cus->phone ?></td>
                                                            <td><?=$cus->address ?></td>
                                                            <td>Mix54</td>
                                                            <td><?=$cus->debt ?> &#x20BA;</td>
                                                            <td>100 &#x20BA;</td>
                                                            <td>0 &#x20BA;</td>

                                                            <td>
                                                                
                                                                 <a href="<?=  base_url('Admin/updatePurchase/'.$cus->id)?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                                        <a href="<?=  base_url('Admin/deletePurchase/'.$cus->id)?>" class="table-action-btn"><i class="md md-delete"></i></a>
                                                    
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Listeleme Alanı Bitiş-->


                </div>
            </div>
            <footer class="footer text-right">©2016 Mavikent Bilişim.</footer>
        </div>
    </div>

    <script>
        jQuery(document).ready(function () {

            //advance multiselect start
            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });

            $('.selectpicker').selectpicker();
            $(":file").filestyle({
                input: false
            });
        });

        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ion-plus-round',
            verticaldownclass: 'ion-minus-round'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }

        $("input[name='demo1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='demo2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='demo3']").TouchSpin();
        $("input[name='demo3_21']").TouchSpin({
            initval: 40
        });
        $("input[name='demo3_22']").TouchSpin({
            initval: 40
        });

        $("input[name='demo5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        $("input[name='demo0']").TouchSpin({});


        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength()

        $('input#thresholdconfig').maxlength({
            threshold: 20
        });

        $('input#moreoptions').maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger",
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true
        });

        $('input#placement').maxlength({
            alwaysShow: true,
            placement: 'top-left'
        });
    </script>
