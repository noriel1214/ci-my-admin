<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Applications
          <a  href="<?=base_url('admin/applications/create')?>" class="btn btn-success">Add a new</a>
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
                    Applications listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Application ID</th>
                                    <th>Applicant's Name</th>
                                    <th>Position Applied For</th>
                                    <th>Application Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($applications as $application): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $application['id'] ?></td>
                                    <td><?php echo $application['appl_name'] ?></td>
                                    <td><?php echo $application['pos_id'] ?></td>
                                    <td><?php echo $application['appl_dt'] ?></td>
                                    <td><?php echo $application['pos_status_id'] ?></td>
                                    
                                    <td>
                                        <a href="<?=base_url('admin/applications/edit/'.$application['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/applications/delete/'.$application['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Application ID</th>
                                    <th>Applicant's Name</th>
                                    <th>Position Applied For</th>
                                    <th>Application Date</th>
                                    <th>Status</th>
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