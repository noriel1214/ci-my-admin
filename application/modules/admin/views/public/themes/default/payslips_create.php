<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Create Payslip
                <a  href="<?= base_url('admin/payslips') ?>" class="btn btn-warning">Go back to payslips listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    <div class="row">
        
<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" data-collapsed="0">

                <div class="panel-body ">
                    
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Department</label>
                                <select required id="dept_id" name="dept_id" class="form-control">
                                    <option>Select A Department</option>
                                    <?php foreach($departments as $department): ?>
                                    <option value="<?php echo $department['id']?>"><?php echo $department['dept_name']?></option>
                                    <?php endforeach; ?>
                                    
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Employee</label>
                                <select required id="emp_id" name="emp_id" class="form-control">
                                    <option value="">Select A Department First</option>
                                </select>
                            </div>                            
                            <div class="col-sm-6">
                            <div class="col-sm-4">
                                <label>Month</label>
                                <select required id="pay_month" name="pay_month" class="form-control">
                                    <option value="">Select A Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>                                   
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>Year</label>
                                <select required id="pay_year" name="pay_year" class="form-control">
                                    <option value="">Select A Year</option>
                                    <?php
                                    for($i = date('Y')-1; $i <= date('Y') + 10; $i++){
                                            echo "<option value='".$i."'>".$i."</option>";
                                        }
                                    ?>
                                </select>
                            </div>                                 
                            <!--<div class="col-sm-4">
                                <label>&nbsp;</label>
                                <input type="button" class="btn btn-primary form-control" value="Submit">        
                            </div> -->                            
                            </div>
                        </div>
 


            </div>          
        </div>
        <div class="col-md-6">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        Allowances                    </div>
                </div>
                <div class="panel-body ">
                    
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="allowance_amt_1" id="allowance_type_1" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="allowance_amt_1" class="form-control text-right" id="allowance_amt_1" type="number" step="any" min="0" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select  data-pair="allowance_amt_2" id="allowance_type_2" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="allowance_amt_2" class="form-control text-right" id="allowance_amt_2" type="number" disabled step="any" min="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select  data-pair="allowance_amt_3" id="allowance_type_3" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="allowance_amt_3" class="form-control text-right" id="allowance_amt_3" type="number" disabled step="any" min="0">
                            </div>
                        </div>                    
                  
                    

                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-6">
                            <button class="btn btn-info btn-sm calctotalallowance" onclick="calculate_total_allowance()" type="button">
                                Calculate Total Allowance                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        Deductions                    </div>
                </div>
                <div class="panel-body ">
                         <div class="form-group">
                            <div class="col-sm-6">
                                <select  data-pair="deduction_amt_1" id="deduction_type_1" name="deduction_type_1" class="form-control">
                                    <option value="0">Select Deduction</option>
                                    <?php foreach($deductions as $deduction): ?>
                                    <option value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="deduction_amt_1" class="form-control text-right" id="deduction_amt_1" type="number" disabled step="any" min="0">
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="deduction_amt_2" id="deduction_type_2" name="deduction_type_2" class="form-control">
                                    <option value="0">Select Deduction</option>
                                    <?php foreach($deductions as $deduction): ?>
                                    <option value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="deduction_amt_2" class="form-control text-right" id="deduction_amt_2" type="number" disabled step="any" min="0">
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="deduction_amt_3" id="deduction_type_3" name="deduction_type_3" class="form-control">
                                    <option value="0">Select Deduction</option>
                                    <?php foreach($deductions as $deduction): ?>
                                    <option value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input name="deduction_amt_3" class="form-control text-right" id="deduction_amt_3" type="number" disabled step="any" min="0">
                            </div>
                        </div>                    
                    

                    <div class="form-group">

                        
                        <div class="col-sm-6 col-sm-offset-6">
                            <button class="btn btn-info btn-sm calctotaldeduction" type="button">
                                Calculate Total Deduction                            
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        Summary                    </div>
                </div>
                
                <div class="panel-body ">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Basic</label>

                        <div class="col-sm-7">
                                                        <input id="salary" name="salary" class="form-control" id="basic" type="text" readonly="" value="1222">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Total Allowance</label>

                        <div class="col-sm-7">
                            <input name="total_allowance" class="form-control" id="total_allowance" type="text" readonly="" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Total Deduction</label>

                        <div class="col-sm-7">
                            <input name="total_deduction" class="form-control" id="total_deduction" type="text" readonly="" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Net Salary</label>

                        <div class="col-sm-7">
                            <input name="net_salary" class="form-control" id="net_salary" type="text" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-2">Status</label>

                        <div class="col-sm-7">
                            <select name="payslip_status" id="payslip_status" class="form-control">
                                <option value="1">Paid</option>
                                <option value="2">Unpaid</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button class="btn btn-success" type="submit">Create Payslip</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





        
            <!-- /.panel -->
          
        </div>        
        </form>
    
    
    
    
    
    </div>
 

    <!-- /.row -->
</div>


