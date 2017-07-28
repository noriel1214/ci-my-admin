<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Brands
          <a  href="<?=base_url('admin/brands/create')?>" class="btn btn-success">Add a new</a>
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
                    Brands listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Brand ID</th>
                                    <th>Description</th>
                                    <th>Created From IP</th>
                                    <th>Updated From IP</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($brands as $brand): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $brand['id'] ?></td>
                                    <td><?php echo $brand['description'] ?></td>
                                    <td><?php echo $brand['created_from_ip'] ?></td>
                                    <td><?php echo $brand['updated_from_ip'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/brands/edit/'.$brand['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/brands/delete/'.$brand['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Brand ID</th>
                                    <th>Description</th>
                                    <th>Created From IP</th>
                                    <th>Updated From IP</th>
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