<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Employees
          <a  href="<?=base_url('admin/employees/create')?>" class="btn btn-success">Add a new</a>
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
                    Employees listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($employees as $employee): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $employee['id'] ?></td>
                                    <td><?php echo $employee['fname'].' '.$employee['mname'].'. '.$employee['lname'].' '.$employee['suffix'] ?></td>
                                    <td><?php echo $employee['addrline1'].' '.$employee['addrline2'].' '.$employee['barrio'].' '.$employee['citytown'].', '.$employee['province'].' '.$employee['zip'] ?></td>
                                    <td><?php echo $employee['phone'] ?></td>
                                    <td><?php echo $employee['email'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/employees/edit/'.$employee['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/employees/delete/'.$employee['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
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