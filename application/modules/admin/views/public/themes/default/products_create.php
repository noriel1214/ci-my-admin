<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Products
                <a  href="<?= base_url('admin/products') ?>" class="btn btn-warning">Go back to products listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/products/create') ?>">
                                <div class="form-group">
                                    <label>Product Id Input</label>
                                    <input id="id" name="id" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" name="name" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select id="brand_id" name="brand_id" class="form-control">
                                        <?php foreach($brands as $brand): ?>
                                        <option value="<?php echo $brand['id'] ?>"><?php echo $brand['description'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select id="category_id" name="category_id" class="form-control">
                                        <?php foreach($categories as $category): ?>
                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['description'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input id="model" name="model" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Tag Line</label>
                                    <input id="tag_line" name="tag_line" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input id="price" name="price" class="form-control" placeholder="Enter price">
                                </div>                                
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea id="features" name="features" class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>


                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
