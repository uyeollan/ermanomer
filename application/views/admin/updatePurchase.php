<br><br>
<center><h1 class="page-header">UPDATE</h1></center>
<form class="form-group" method="post" action="<?=  base_url('Admin/update_purchase/'.$purchase[0]->id)?>">
    <input type="hidden" name="adminid" value="<?= $purchase[0]->id?>">
    <div data-ng-app="" ng-init="quantity=<?= $purchase[0]->amount?>;price=<?= $purchase[0]->unit_price?>" class="col-md-4 col-md-offset-4" style="padding-top:20px;" >
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputUsername" name="name" value="<?= $purchase[0]->name?>" placeholder="" required />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Birim</label>
            <input type="text" class="form-control" id="exampleInputPassword" name="unit_type" value="<?=$purchase[0]->unit_type?>" placeholder="" required />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Miktar</label>
            <input type="number" ng-model="quantity" class="form-control" id="exampleInputPassword" name="amount" value="<?=$purchase[0]->amount?>" placeholder="" required />
        </div>
        <div class="form-group">
            <label for="exampleInputName">Birim Fiyatı</label>
            <input type="number" class="form-control" id="exampleInputName" ng-model="price" name="unit_price" value="<?= $purchase[0]->unit_price?>" placeholder=""required />
        </div> 
        <div class="form-group">
            <label for="exampleInputName">Firma</label>
            <input type="text" class="form-control" id="exampleInputName"  name="supplier" value="<?= $purchase[0]->supplier?>" placeholder="" required />
        </div> 
        <div class="form-group">
            <label for="exampleInputSurname">Toplam Fiyat</label>
            <input type="number" class="form-control" id="exampleInputSurname" name="price" value="{{quantity * price}}" placeholder="" readonly />
        </div>
        
        <button type="submit" class="btn btn-default pull-left">Submit</button>
        <div class="col-md-3">
            <a class="btn btn-danger btn-block " href="<?=  base_url()?>Admin/urun_ekle">Cancel</a>
        </div>
    </div>
    <form>