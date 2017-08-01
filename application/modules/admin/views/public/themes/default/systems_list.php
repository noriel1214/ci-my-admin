<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Systems
          <a  href="<?=base_url('admin/systems/create')?>" class="btn btn-success">Add a new</a>
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
                    Systems listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Language</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($systems as $system): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $system['sys_name'] ?></td>
                                    <td><?php echo $system['sys_title'] ?></td>
                                    <td><?php echo $system['sys_addr'] ?></td>
                                    <td><?php echo $system['sys_phone'] ?></td>
                                    <td><?php echo $system['sys_email'] ?></td>
                                    <td><?php echo $system['sys_lang'] ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/systems/edit/'.$system['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/systems/delete/'.$system['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Language</th>
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