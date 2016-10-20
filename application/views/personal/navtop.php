<?php ?>
<div class="topbar">
    <div class="topbar-left">
        <div class="text-center"><a href="<?= base_url() ?>Personal/" class="logo"><i class="icon-magnet icon-c-logo"></i><span><i class="md md-album"></i>T<i class="md md-album"></i> BOYA</span></a></div>
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
                        <a href="<?= base_url() ?>Admin/empty_page" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                    </li>
                    <li class="dropdown">
                        <?php if ($this->session->userdata('log') == TRUE) { ?>
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url() ?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"></a>
                        <?php } else { ?>
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><a class="btn btn-danger" href="<?=  base_url()?>Personal/login">Giriş</a></a>

                            <?php }
                        ?>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Kilit Ekranı</a></li>
                            <li><a href="<?=  base_url()?>Admin/logout"><i class="ti-power-off m-r-5"></i> Çıkış</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>