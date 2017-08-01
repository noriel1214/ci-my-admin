<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Expenses
                <a  href="<?= base_url('admin/expenses') ?>" class="btn btn-warning">Go back to expenses listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update expense
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/expenses/edit/'.$expense->id) ?>">
                                <div class="form-group">
                                    <label>Expense Name</label>
                                    <input value="<?php echo $expense->exp_title ?>" id="exp_title" name="exp_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Expense Description</label>
                                    <input value="<?php echo $expense->exp_desc ?>" id="exp_desc" name="exp_desc" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Expense Amount</label>
                                    <input value="<?php echo $expense->exp_amt ?>" id="exp_amt" name="exp_amt" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Expense Date</label>
                                    <input  value="<?php echo $expense->exp_dt ?>" id="exp_dt" name="exp_dt" class="form-control" >
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
