<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Leaves
          <a  href="<?=base_url('admin/leaves/create')?>" class="btn btn-success">Add a new</a>
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
                    Leaves listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Leave ID</th>
                                    <th>Leave Start Date</th>
                                    <th>Leave End Date</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($leaves as $leave): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $leave['id'] ?></td>
                                    <td><?php echo $leave['leave_start_dt'] ?></td>
                                    <td><?php echo $leave['leave_end_dt'] ?></td>
                                    <td><?php echo $leave['leave_desc'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/leaves/edit/'.$leave['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/leaves/delete/'.$leave['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Leave ID</th>
                                    <th>Leave Start Date</th>
                                    <th>Leave End Date</th>
                                    <th>Reason</th>
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