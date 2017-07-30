<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Vacancies
                <a  href="<?= base_url('admin/vacancies') ?>" class="btn btn-warning">Go back to vacancies listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update vacancy
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/vacancies/edit/'.$vacancy->id) ?>">
                                <div class="form-group">
                                    <label>Position Name</label>
                                    <input value="<?php echo $vacancy->vacancy_name ?>" id="vacancy_name" name="vacancy_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input value="<?php echo $vacancy->vacancy_desc ?>" id="vacancy_desc" name="vacancy_desc" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input value="<?php echo $vacancy->dept_id ?>" id="dept_id" name="dept_id" class="form-control">
                                </div>  
                                <div class="form-group">
                                    <label>Position</label>
                                    <input value="<?php echo $vacancy->pos_id ?>" id="pos_id" name="pos_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Date of Application</label>
                                    <input value="<?php echo $vacancy->last_appl_dt ?>" id="last_appl_dt" name="last_appl_dt" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Save Changes</button>
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
