<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Deductions
                <a  href="<?= base_url('admin/deductions') ?>" class="btn btn-warning">Go back to deductions listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update deduction
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/deductions/edit/'.$deduction->id) ?>">
                                <div class="form-group">
                                    <label>Deduction Type</label>
                                    <input value="<?php echo $deduction->deduction_name  ?>" id="deduction_name" name="deduction_name" class="form-control" placeholder="Enter deduction description">
                                </div>
                                <div class="form-group">
                                    <label>Deduction Description</label>
                                    <input value="<?php echo $deduction->deduction_desc  ?>" id="deduction_desc" name="deduction_desc" class="form-control" placeholder="Enter deduction description">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Deduction</button>
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
