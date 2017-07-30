<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Applications
                <a  href="<?= base_url('admin/applications') ?>" class="btn btn-warning">Go back to applications listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update application
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/applications/edit/'.$application->id) ?>">
                                <div class="form-group">
                                    <label>Application Title</label>
                                    <input value="<?php echo $application->appl_name ?>" id="appl_name" name="appl_name" class="form-control" placeholder="Enter application description">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input value="<?php echo $application->appl_desc ?>" id="appl_desc" name="appl_desc" class="form-control" placeholder="Enter application description">
                                </div>
                                <div class="form-group">
                                    <label>Position</label>
                                    <input value="<?php echo $application->pos_id ?>" id="pos_id" name="pos_id" class="form-control" placeholder="Enter application description">
                                </div>
                                <div class="form-group">
                                    <label>Date of Application</label>
                                    <input value="<?php echo $application->appl_dt ?>" id="appl_dt" name="appl_dt" class="form-control" placeholder="Enter application description">
                                </div>
                                <div class="form-group">
                                    <label>Application Status</label>
                                    <input value="<?php echo $application->pos_status_id ?>" id="pos_status_id" name="pos_status_id" class="form-control" placeholder="Enter application description">
                                </div> 

                                <button type="submit" class="btn btn-primary">Submit Button</button>
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
