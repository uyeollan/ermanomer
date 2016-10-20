

<body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="card-box">
            <div class="panel-heading">
                <h3 class="text-center">Oto Boyama <strong class=
				"text-custom">Giriş</strong></h3>
            </div>
            <div class="panel-body">
                <form action="<?=  base_url()?>Admin/admin_login" method="post" class="form-horizontal m-t-20">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" placeholder="Kullanıcı Adı" required type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" placeholder="Şifre" required type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">Beni Hatırla</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-default btn-block text-uppercase waves-effect waves-light" type="submit">Giriş</button>
                        </div>
                    </div>
                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a class="text-dark" href="page-recoverpw.html"><i class=
							"fa fa-lock m-r-5"></i> Şifremi unuttum</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  