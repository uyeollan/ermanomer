

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
                            <h3 class="panel-title">ÜRETİCİ EKLE</h3>
                        </div>
                        <form action="<?= base_url(); ?>Admin/add_manufacturer" method="post">
                            <div class="panel-body">
                                <div class="col">
                                    <div class="col-lg-4">
                                        <input type="text" name="name" class="form-control" required placeholder="Üretici Adı">
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <button class="btn btn-custom btn-default w-lg" type="submit">Ekle</button>
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
                            <h3 class="panel-title">Müşteri Liste</h3>
                            <p><small>Arama kriterlerini girip arayarak sonuçları filtreleyebilirsiniz</small></p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Üretici Adı">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Üretici Adı">
                                </div>
                                <div class="col-lg-4">
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

                                                    <th>Üretici Kodu</th>
                                                    <th>Üretici adı</th>
                                                    <th style="width: 80px">İşlem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($manufacturer as $man) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $man->id ?></td>
                                                        <td><?= $man->name ?></td>
                                                        <td>
                                                            <a href="" class="table-action-btn"><i class="md md-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

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
