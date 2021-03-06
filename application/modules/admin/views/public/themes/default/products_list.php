<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Products
                    <a  href="<?= base_url('admin/products/create') ?>" class="btn btn-success">Add a new</a>
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
                    Products listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Tag Line</th>
                                    <th>Price</th>
                                    <th>QoH</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product): ?>
                                <tr class="odd gradeX">
                                    
                                    <td><?php echo $product['id'] ?></td>
                                    <td><?php echo $product['name'] ?></td>
                                    <td><?php echo $product['model'] ?> </td>
                                    <td><?php echo $product['tag_line'] ?></td>
                                    <td><?php echo $product['price'] ?></td>
                                    <td><?php echo $product['qty_at_hand'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/products/edit/'.$product['id']) ?>" class="btn btn-info">edit</a>  
                                        <a href="<?= base_url('admin/products/delete/'.$product['id']) ?>" class="btn btn-danger">delete</a>
                                    </td>                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Tag Line</th>
                                    <th>Price</th>
                                    <th>QoH</th>
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