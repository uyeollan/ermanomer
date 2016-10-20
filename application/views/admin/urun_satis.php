
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
                        <form method="post" action="<?=  base_url()?>Admin/productSell">
                            <div class="panel-body" data-ng-app >
                                <div class="row">
                                    
                                    
                                    <div class="col-lg-3">
                                        <h3 class="panel-title">Ürün Adı</h3>
                                         <div class="form-group">
                                                    <div class="">
                                                        <select name="name" class="form-control select2">
                                                            
                                                           <?php $counter=0 ?>

                <?php foreach ($product as $prsn) { ?>
                <div class="col-md-10">
			<option class="" value="<?=$prsn->name?>"><?=$prsn->name;?></option>
                </div>
                        <?php $counter++;?>
                         <?php }?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>
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
                                        <h3 class="panel-title">MÜŞTERİ SEÇ</h3>
                                                <div class="form-group">
                                                    <div class="">
                                                        <select name="customer_name" class="form-control select2">
                                                            
                                                           <?php $counter=0 ?>

                <?php foreach ($person as $prsn) { ?>
                <div class="col-md-10">
			<option class="" value="<?=$prsn->id?>"><?=$prsn->name;?></option>
                </div>
                        <?php $counter++;?>
                         <?php }?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                        
                                           
                                            </div>
                                    <h3 class="panel-title">YENİ MÜŞTERİ</h3>
                                   <div class="col-lg-1 " >
                                    
                                    <a class="btn btn-primary btn-block glyphicon glyphicon-plus col-md-2" data-toggle="modal" data-target="#myModal"></a>
                                    </div>
                                    <div class="col-lg-3 col-md-offset-9" >
                                        <h3 class="panel-title">TOPLAM FİYAT</h3>
                                        <input type="text" name="price" class="form-control" value="{{quantity * price}}" readonly>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-default btn-custom pull-right w-lg">Satış</button>
                                    </div>
                                </div>
                            </div>
                        </form>



        <!--Sol Menu Bitiş-->

                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                        </div>
                    </div>
                    <!--İnput Alanı Başlangıç-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-border panel-inverse">
                               
                                    <div class="row">
                                        <div class="col-md-12">
                         
                                        </div>
                                    </div>

                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--İnput Alanı Bitiş-->


           
    


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
                                                <th>ID</th>
                                                <th>Personel</th>
                                                <th>Müşteri</th>
                                                <th>Ürün</th>
                                                <th>Miktar</th>
                                                <th>Fiyat</th>
                                                <th>Yapılan Ödeme</th>
                                                <th>İşlem Tarihi</th>
                                                <th style="width: ">İşlem</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($sale as $sal) {?>
                                        <tbody>
                                            <tr>
                                                <td><?=$sal->id?></td>
                                                <td><?=$sal->personel_name?></td>
                                                <td><?=$sal->customer_name?></td>
                                                <td><?=$sal->product_name?></td>
                                                <td><?=$sal->amount?><?=$sal->unit_type?></td>
                                                <td><?=$sal->price?></td>
                                                <td><?=$sal->payment?></td>
                                                <td><?=$sal->date?></td>"
                                                <td>
                                                    <a href="<?=  base_url('Admin/deleteSell/'.$sal->id)?>" class="table-action-btn"><i class="md md-delete"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php }?>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Listeleme Alanı Bitiş-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=  base_url()?>Admin/add_customer/1">
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
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">KAPAT</button>
                                                <button type="submit" class="btn btn-custom btn-primary w-lg">Ekle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </form>
      </div>
      <div class="modal-footer">
        
       
      </div>
    </div>
  </div>
</div>

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
