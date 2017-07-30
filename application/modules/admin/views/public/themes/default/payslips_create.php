<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Payslips
                <a  href="<?= base_url('admin/payslips') ?>" class="btn btn-warning">Go back to payslips listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new payslip
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/payslips/create') ?>">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input id="description" name="description" class="form-control" placeholder="Enter payslip description">
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
