<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>

<div class="row">
    <div class="col-12 col-md-6">
        <form action="<?=base_url('/admin/product/store'); ?>"method="post">

        <?=csrf_field() ?>

        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" name="product_name" class="form-control"required autofocus>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Stock</label>
            <input type="text" name="product_stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Description</label>
            <textarea name="product_description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        </form>
 <center><img src="assets/img/8.PNG" alt=""></center>

    </div>
</div>

<?=$this->endSection()?>