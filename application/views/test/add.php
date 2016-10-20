<?php ?>
<form method="post" action="<?=  base_url()?>Test/add">
    <div class="row">
        <div class="col-lg-4">
            <input type="text" name="username" class="form-control" placeholder="Renk Adı">
        </div>
        <div class="col-lg-4">
            <input type="text" name="password" class="form-control" placeholder="Renk Üretici">
        </div>
        <div class="col-lg-4">
            <input type="text" name="name" class="form-control" placeholder="Renk Tipi">
        </div>
        <div class="col-lg-4">
            <input type="text"name="surname" class="form-control" placeholder="Katalog">
        </div>
        <div class="col-lg-4">
            <button type="submit" class="form-control" placeholder="Model">ok</button>
        </div>
    </div>
</form>