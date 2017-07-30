<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Leaves
                <a  href="<?= base_url('admin/leaves') ?>" class="btn btn-warning">Go back to leaves listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new leave
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/leaves/create') ?>">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input id="leave_start_dt" name="leave_start_dt" class="form-control" placeholder="Enter leave description">
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input id="leave_end_dt" name="leave_end_dt" class="form-control" placeholder="Enter leave description">
                                </div>  
                                <div class="form-group">
                                    <label>Reason</label>
                                    <textarea id="leave_desc" name="leave_desc" class="form-control" rows="4"></textarea>
                                </div>                                 

                                <button type="submit" class="btn btn-primary">Create Leave</button>
                                <button type="reset" class="btn btn-default">Reset Fields</button>
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
