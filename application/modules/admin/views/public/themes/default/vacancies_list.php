<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Vacancies
          <a  href="<?=base_url('admin/vacancies/create')?>" class="btn btn-success">Add a new</a>
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
                    Vacancies listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Vacancy ID</th>
                                    <th>Position Name</th>
                                    <th>Description</th>
                                    <th>Department</th>
                                    <th>Last Day of Application</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($vacancies as $vacancy): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $vacancy['id'] ?></td>
                                    <td><?php echo $vacancy['vacancy_name'] ?></td>
                                    <td><?php echo $vacancy['vacancy_desc'] ?></td>
                                    <td><?php echo $vacancy['dept_id'] ?></td>
                                    <td><?php echo $vacancy['last_appl_dt'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/vacancies/edit/'.$vacancy['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/vacancies/delete/'.$vacancy['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Vacancy ID</th>
                                    <th>Position Name</th>
                                    <th>Description</th>
                                    <th>Department</th>
                                    <th>Last Day of Application</th>
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