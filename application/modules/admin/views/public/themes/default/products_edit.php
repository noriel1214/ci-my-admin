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
                    Edit product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/products/edit/'.$product->id) ?>">
                                <div class="form-group">
                                    <label>Product Id Input</label>
                                    <input id="id" name="id" class="form-control" value="<?php echo $product->id ?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" name="name" value="<?php echo $product->name ?>" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input id="model" name="model" value="<?php echo $product->model ?>" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Tag Line</label>
                                    <input id="tag_line" name="tag_line" value="<?php echo $product->tag_line ?>" class="form-control" placeholder="Enter brand description">
                                </div>
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea id="features" name="features" class="form-control" rows="3"><?php echo $product->features ?></textarea>
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
