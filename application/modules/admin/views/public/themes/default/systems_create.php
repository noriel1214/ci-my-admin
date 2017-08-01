<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Systems
                <a  href="<?= base_url('admin/systems') ?>" class="btn btn-warning">Go back to systems listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new system
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/systems/create') ?>">
                                <div class="form-group">
                                    <label>System Name</label>
                                    <input id="sys_name" name="sys_name" class="form-control" placeholder="Enter system description">
                                </div>
                                <div class="form-group">
                                    <label>System Title</label>
                                    <input id="sys_title" name="sys_title" class="form-control" placeholder="Enter system description">
                                </div>
                                <div class="form-group">
                                    <label>System Address</label>
                                    <input id="sys_addr" name="sys_addr" class="form-control" placeholder="Enter system description">
                                </div>
                                <div class="form-group">
                                    <label>System Phone</label>
                                    <input id="sys_phone" name="sys_phone" class="form-control" placeholder="Enter system description">
                                </div>
                                <div class="form-group">
                                    <label>System Email</label>
                                    <input id="sys_email" name="sys_email" class="form-control" placeholder="Enter system description">
                                </div>
                                <div class="form-group">
                                    <label>System Language</label>
                                    <input id="sys_lang" name="sys_lang" class="form-control" placeholder="Enter system description">
                                </div>

                                <button type="submit" class="btn btn-primary">Create System</button>
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
