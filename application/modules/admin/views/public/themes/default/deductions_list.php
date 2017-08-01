<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Deductions
          <a  href="<?=base_url('admin/deductions/create')?>" class="btn btn-success">Add a new</a>
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
                    Deductions listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Deduction Name</th>
                                    <th>Deduction Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($deductions as $deduction): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $deduction['deduction_name'] ?></td>
                                    <td><?php echo $deduction['deduction_desc'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/deductions/edit/'.$deduction['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/deductions/delete/'.$deduction['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Deduction Name</th>
                                    <th>Deduction Description</th>
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