
<!--Sol Menu Bitiş-->

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
                            <h3 class="panel-title">Urun Ekleme</h3>
                        </div>
                        <form method="post" action="<?=  base_url()?>Admin/addPurchase">
                            <div class="panel-body" data-ng-app >
                                <div class="row">
                                    
                                    
                                    <div class="col-lg-3">
                                        <h3 class="panel-title">Ürün Adı</h3>
                                        <input type="text" name="name" class="form-control" placeholder="Ürün adı" required autofocus>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3 class="panel-title">BİRİM</h3>
                                         <select name="name" class="form-control select2">
                                            
                                            <option class="" value="kilogram">Kilogram</option>
                                            <option class="" value="ton">Ton</option>
                                            <option class="" value="santimetre">Santimetre</option>
                                            <option class="" value="metre">Metre</option>
                                            <option class="" value="adet">Adet</option>
                                            <option class="" value="gram">Gram</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <h3 class="panel-title">MİKTAR</h3>
                                        <input type="number" step="any" name="amount" class="form-control" type="number" required ng-model="quantity" placeholder="Miktar">
                                    </div>
                                    <div class="col-lg-3">
                                        <h3 class="panel-title">BİRİM FİYATI</h3>
                                        <input type="number" name="unit_price" class="form-control" required placeholder="Birim Fiyatı" ng-model="price">
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h3 class="panel-title">FİRMA</h3>
                                        <input type="text" name="supplier" class="form-control" required placeholder="FİRMA">
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-offset-9" >
                                        <h3 class="panel-title">TOPLAM FİYAT</h3>
                                        <input type="text" name="price" class="form-control" value="{{quantity * price}}" readonly>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-default btn-custom pull-right w-lg">Ekle</button>
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
                            <h3 class="panel-title">Listele</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-actions-bar m-b-0 sortable dataTable">
                                            <thead>
                                                <tr>

                                                    <th>Ürün Adı</th>
                                                    <th>Birimi</th>
                                                    <th>Miktarı</th>
                                                    <th>Birim Fiyatı</th>
                                                    <th>Toplam Fiyatı</th>
                                                   <th>Firma</th>
                                                    <th style="width: ">İşlem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($purchase as $pur) {?>
                                                <tr>
                                                    <td><?=$pur->name;?></td>
                                                    <td><?=$pur->unit_type;?></td>
                                                    <td><?=$pur->amount;?></td>
                                                    <td><?=$pur->unit_price;?></td>
                                                    <td><?=$pur->price;?></td>
                                                    <td><?=$pur->supplier;?></td>
                                                    <td>
                                                        <a href="<?=  base_url('Admin/updatePurchase/'.$pur->id)?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                                        <a href="<?=  base_url('Admin/deletePurchase/'.$pur->id)?>" class="table-action-btn"><i class="md md-delete"></i></a>
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
