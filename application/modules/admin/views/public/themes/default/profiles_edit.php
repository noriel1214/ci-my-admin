<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Profiles
                <a  href="<?= base_url('admin/profiles') ?>" class="btn btn-warning">Go back to profiles listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update profile
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/profiles/edit/'.$profile->id) ?>">
                                <div class="form-group">
                                    <label>Profile Name</label>
                                    <input value="<?php echo $profile->prof_name ?>" id="prof_name" name="prof_name" class="form-control" placeholder="Enter profile description">
                                </div>
                                <div class="form-group">
                                    <label>Profile Email</label>
                                    <input value="<?php echo $profile->prof_email ?>" id="prof_email" name="prof_email" class="form-control" placeholder="Enter profile description">
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
