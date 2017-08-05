<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Payslips
          <a  href="<?=base_url('admin/payslips/create')?>" class="btn btn-success">Add a new</a>
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
                    Payslips listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Summary</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($payslips as $payslip): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $payslip['fname']." ".$payslip['lname'] ?></td>
                                    
                                    <td>
                                        <p class="small">Basic Salary: <?php echo (number_format($payslip['starting_salary'], 2)) ?></p>
                                        <p class="small">Total Allowance: <?php echo ($payslip['allowance_amt_1'] + $payslip['allowance_amt_2'] + $payslip['allowance_amt_3']) ?></p>
                                        <p class="small">Basic Deduction: <?php echo ($payslip['deduction_amt_1'] + $payslip['deduction_amt_2'] + $payslip['deduction_amt_3']) ?></p>
                                        <hr>
                                        <p class="small">Net Salary: <?php echo ($payslip['salary'] + $payslip['allowance_amt_1'] + $payslip['allowance_amt_2'] + $payslip['allowance_amt_3'] - $payslip['deduction_amt_1'] - $payslip['deduction_amt_2'] - $payslip['deduction_amt_3']) ?></p>
                                    </td>
                                    <td><?php echo $payslip['month_name']." ".$payslip['pay_year'] ?></td>
                                    <td><?php 
                                        switch ($payslip['payslip_status']) 
                                        {
                                            case "1":
                                                echo "Paid";
                                                break;
                                            default:
                                                echo "Unpaid";
                                                break;
                                        }
                                    ?></td>
                                    <td>
                                        <a href="<?=base_url('admin/payslips/edit/'.$payslip['id'])?>" class="btn btn-info">edit</a>  
                                        <a href="<?=base_url('admin/payslips/delete/'.$payslip['id'])?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Employee</th>
                                    <th>Summary</th>
                                    <th>Date</th>
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