<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Awards
                <a  href="<?= base_url('admin/awards') ?>" class="btn btn-warning">Go back to awards listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new award
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/awards/create') ?>">
                                <div class="form-group">
                                    <label>Award Name</label>
                                    <input id="award_name" name="award_name" class="form-control" placeholder="Enter award description">
                                </div>
                                <div class="form-group">
                                    <label>Gift</label>
                                    <input id="gift" name="gift" class="form-control" placeholder="Enter award description">
                                </div>                                
                                <div class="form-group">
                                    <label>Gift Amount</label>
                                    <input id="gift_amt" name="gift_amt" class="form-control" placeholder="Enter award description">
                                </div>
                                <div class="form-group">
                                    <label>Employee</label>
                                    <select id="emp_id" name="emp_id" class="form-control">
                                        <?php foreach($employees as $employee): ?>
                                        <option value="<?php echo $employee["id"] ?>"><?php echo $employee["fname"]." ".$employee["lname"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Date</label>
                                    <input id="award_dt" name="award_dt" class="form-control" placeholder="Enter award description">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Create Award</button>
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
