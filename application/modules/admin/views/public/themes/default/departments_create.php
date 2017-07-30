<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Departments
                <a  href="<?= base_url('admin/departments') ?>" class="btn btn-warning">Go back to departments listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new department
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/departments/create') ?>">
                                <div class="form-group">
                                    <label>Department Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="dept_name" name="dept_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input id="dept_desc" name="dept_desc" class="form-control">
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
