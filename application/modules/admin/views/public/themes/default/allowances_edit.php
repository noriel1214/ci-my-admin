<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Allowances
                <a  href="<?= base_url('admin/allowances') ?>" class="btn btn-warning">Go back to allowances listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update allowance
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/allowances/edit/'.$allowance->id) ?>">
                                <div class="form-group">
                                    <label>Allowance Type</label>
                                    <input value="<?php echo $allowance->allowance_name ?>" id="allowance_name" name="allowance_name" class="form-control" placeholder="Enter allowance description">
                                </div>
                                <div class="form-group">
                                    <label>Allowance Description</label>
                                    <input value="<?php echo $allowance->allowance_desc ?>" id="allowance_desc" name="allowance_desc" class="form-control" placeholder="Enter allowance description">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Allowance</button>
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
