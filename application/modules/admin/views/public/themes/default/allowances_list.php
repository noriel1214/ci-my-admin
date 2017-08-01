<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Allowances
          <a  href="<?=base_url('admin/allowances/create')?>" class="btn btn-success">Add a new</a>
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
                    Allowances listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Allowance Name</th>
                                    <th>Allowance Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($allowances as $allowance): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $allowance['allowance_name'] ?></td>
                                    <td><?php echo $allowance['allowance_desc'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/allowances/edit/'.$allowance['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/allowances/delete/'.$allowance['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Allowance Name</th>
                                    <th>Allowance Description</th>
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