<?php
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>Oto Boya-Boya Yapma</title>
    <link href="<?=  base_url()?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?=  base_url()?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="<?=  base_url()?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/plugins/select2/select2.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?=  base_url()?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?=  base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
    <script src="<?=  base_url()?>assets/js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
    <div id="wrapper" class="enlarged">
        <div class="topbar">
            <div class="topbar-left">
                <div class="text-center"><a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span><i class="md md-album"></i>T<i class="md md-album"></i> BOYA</span></a></div>
            </div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left"><i class="ion-navicon"></i></button> <span class="clearfix"></span>
                        </div>
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Ara..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="hidden-xs">
                                <a href="empty_page.html#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Kilit Ekranı</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Çıkış</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Sol Menu Başlangıç-->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="">
                            <a href="index.html#" class="waves-effect "><i class="ti-home"></i> <span>Anasayfa</span></a>
                        </li>
                        <li class="has_sub">
                            <a href="" class="waves-effect active"><i class="ti-paint-bucket"></i><span class="label label-success pull-right">3</span><span>Renk</span></a>
                            <ul class="list-unstyled">
                                <li><a href="renk_ekle.html" class="waves-effect "><i class="ti-plus"></i> <span>Renk Ekle</span></a></li>
                                <li><a href="renk_ara.html" class="waves-effect "><i class="ti-search"></i> <span>Renk Ara</span></a></li>
                                <li><a href="boya_yapma.html" class="waves-effect active"><i class="ti-paint-roller"></i> <span>Boya Yap </span></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="musteri.html" class="waves-effect "><i class="ti-user"></i> <span>Müşteri</span></a>
                        </li>
                        <li class="">
                            <a href="rapor.html" class="waves-effect "><i class="ti-agenda"></i> <span>Rapor</span></a>
                        </li>
                        <li class="has_sub">
                            <a href="index.html#" class="waves-effect"><i class="ti-widget"></i><span class="label label-success pull-right">3</span><span>Ayarlar</span></a>
                            <ul class="list-unstyled">
                                <li><a href="donanim_ayarlari.html" class="waves-effect"><i class="ti-harddrives"></i> <span>Donanım</span></a></li>
                                <li><a href="personel_ayarlari.html" class="waves-effect "><i class="ti-user"></i> <span>Personel</span></a></li>
                                <li><a href="renk_gorunurlugu.html" class="waves-effect "><i class="ti-rss-alt"></i> <span>Görünürlük</span></a></li>
                                <li><a href="hakkimizda.html" class="waves-effect "><i class="ti-files"></i> <span>Hakkımızda</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

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
                                    <h3 class="panel-title">Boya Ekle</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="" class="form-horizantal" role="form">
                                        <!--Dropdown Başlangıç-->
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <div class="">
                                                        <select class="form-control select2">
                                                            <option>Boya Seç</option>
                                                            <option value="AK">Siyah</option>
                                                            <option value="HI">Kırmızı</option>
                                                            <option value="HI">Mavi</option>
                                                            <option value="HI">Yeşil</option>
                                                            <option value="HI">Beyaz</option>
                                                            <optgroup label="Gruplu Hali">
                                                                <option value="CT">Cyan</option>
                                                                <option value="DE">Magenta</option>
                                                                <option value="FL">Yavru Ağzı</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <div class="">
                                                        <select class="form-control select2">
                                                            <option>Effect Seç</option>
                                                            <option value="AK">Siyah</option>
                                                            <option value="HI">Kırmızı</option>
                                                            <option value="HI">Mavi</option>
                                                            <option value="HI">Yeşil</option>
                                                            <option value="HI">Beyaz</option>
                                                            <optgroup label="Gruplu Hali">
                                                                <option value="CT">Cyan</option>
                                                                <option value="DE">Magenta</option>
                                                                <option value="FL">Yavru Ağzı</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <!--Dropdown Bitiş-->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Müşteri Adı Soyadı">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" placeholder="Gram">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-lg-offset-3">
                                                <div class="text-center">
                                                    <button class="btn btn-custom btn-default w-lg">Ekle</button>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--İnput Alanı Bitiş-->

                    <!--Listeleme Alanı Başlangıç-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-border panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Boya Lİste</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-actions-bar m-b-0">
                                                    <thead>
                                                        <tr>

                                                            <th>M.Adı Soyadı</th>
                                                            <th>Boya</th>
                                                            <th>Effect</th>
                                                            <th>Gram</th>
                                                            <th style="width: 80px">İşlem</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sinan BORA</td>
                                                            <td>Siyah</td>
                                                            <td>Effect 1</td>
                                                            <td>100 gr</td>

                                                            <td>
                                                                <a href="" class="table-action-btn"><i class="md md-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sinan BORA</td>
                                                            <td>Siyah</td>
                                                            <td>Effect 1</td>
                                                            <td>100 gr</td>

                                                            <td>
                                                                <a href="" class="table-action-btn"><i class="md md-edit"></i></a>
                                                            </td>
                                                        </tr>
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
            <footer class="footer text-right">2015 © Ubold.</footer>
        </div>
    </div>
    <script>
        var resizefunc = [];
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="assets/plugins/switchery/dist/switchery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
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
</body>

</html>