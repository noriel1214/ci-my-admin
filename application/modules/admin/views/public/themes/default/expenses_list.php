<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Expenses
          <a  href="<?=base_url('admin/expenses/create')?>" class="btn btn-success">Add a new</a>
        </h2>
      </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Expenses listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Expense Title</th>
                                    <th>Expense Desc</th>
                                    <th>Expense Amt</th>
                                    <th>Expense Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($expenses as $expense): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $expense['exp_title'] ?></td>
                                    <td><?php echo $expense['exp_desc'] ?></td>
                                    <td><?php echo $expense['exp_amt'] ?></td>
                                    <td><?php echo $expense['exp_dt'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/expenses/edit/'.$expense['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/expenses/delete/'.$expense['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Expense Title</th>
                                    <th>Expense Desc</th>
                                    <th>Expense Amt</th>
                                    <th>Expense Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
</div>
<!-- /#page-wrapper -->