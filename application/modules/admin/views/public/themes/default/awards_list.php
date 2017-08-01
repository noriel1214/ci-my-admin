<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Awards
          <a  href="<?=base_url('admin/awards/create')?>" class="btn btn-success">Add a new</a>
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
                    Awards listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Award Name</th>
                                    <th>Gift</th>
                                    <th>Gift Amount</th>
                                    <th>Employee</th>
                                    <th>Award Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($awards as $award): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $award['award_name'] ?></td>
                                    <td><?php echo $award['gift'] ?></td>
                                    <td><?php echo $award['gift_amt'] ?></td>
                                    <td><?php echo $award['emp_id'] ?></td>
                                    <td><?php echo $award['award_dt'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/awards/edit/'.$award['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/awards/delete/'.$award['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Award Name</th>
                                    <th>Gift</th>
                                    <th>Gift Amount</th>
                                    <th>Employee</th>
                                    <th>Award Date</th>
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