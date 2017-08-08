<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Edit Payslip
                <a  href="<?= base_url('admin/payslips/index/'.$payslip->pay_month.'/'.$payslip->pay_year) ?>" class="btn btn-warning">Go back to payslips listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
     
    <div class="row">
        
<form class="form-horizontal form-groups-bordered" enctype="multipart/form-data" method="post" action="<?= base_url('admin/payslips/edit/'.$payslip->id) ?>" accept-charset="utf-8">
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
                                    <option <?php if($payslip->dept_id ===$department["id"]){echo "selected";} ?> value="<?php echo $department['id']?>"><?php echo $department['dept_name']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Employee</label>
                                <select required id="emp_id" name="emp_id" class="form-control">
                                    <?php foreach($employees as $employee): ?>
                                    <option <?php if($payslip->emp_id ===$employee["id"]){echo "selected";} ?> value="<?php echo $employee['id']?>"><?php echo $employee['fname']." ".$employee['lname'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>                            
                            <div class="col-sm-6">
                            <div class="col-sm-4">
                                <label>Month</label>
                                <select required id="pay_month" name="pay_month" class="form-control">
                                    <?php foreach($months as $month): ?>
                                    <option <?php if($payslip->pay_month ===$month['id']){ echo "selected";} ?> value="<?php echo $month['id'] ?>"><?php echo $month['month_name'] ?></option>
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>Year</label>
                                <select required id="pay_year" name="pay_year" class="form-control">
                                    <?php
                                    for($i = date('Y')-2; $i <= date('Y') + 10; $i++){
                                            if($payslip->pay_year == $i)
                                            {
                                                echo "<option selected value='".$i."'>".$i."</option>";
                                            }
                                            else{
                                                echo "<option value='".$i."'>".$i."</option>";
                                            }
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
                                <select data-pair="allowance_amt_1" id="allowance_type_1" name="allowance_type_1" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option <?php if($payslip->allowance_type_1==$allowance['id']){ echo "selected";} ?> value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->allowance_amt_1 > 0): ?>
                                    <input name="allowance_amt_1" class="form-control  text-right" id="allowance_amt_1" type="number" value="<?php echo $payslip->allowance_amt_1 ?>" step="any" min="0">
                                <?php else: ?>
                                    <input name="allowance_amt_1" class="form-control  text-right" id="allowance_amt_1" type="number" value="0" disabled step="any" min="0">
                                <?php endif; ?>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="allowance_amt_2" id="allowance_type_1" name="allowance_type_2" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option <?php if($payslip->allowance_type_2==$allowance['id']){ echo "selected";} ?> value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->allowance_amt_2 > 0): ?>
                                    <input name="allowance_amt_2" class="form-control  text-right" id="allowance_amt_2" type="number" value="<?php echo $payslip->allowance_amt_2 ?>"  step="any" min="0">
                                <?php else: ?>
                                    <input name="allowance_amt_2" class="form-control  text-right" id="allowance_amt_2" type="number" value="0" disabled  step="any" min="0">
                                <?php endif; ?>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="allowance_amt_3" id="allowance_type_1" name="allowance_type_3" class="form-control">
                                    <option value="0">Select Allowance</option>
                                    <?php foreach($allowances as $allowance): ?>
                                    <option <?php if($payslip->allowance_type_3==$allowance['id']){ echo "selected";} ?> value="<?php echo $allowance['id'] ?>"><?php echo $allowance['allowance_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->allowance_amt_3 > 0): ?>
                                    <input name="allowance_amt_3" class="form-control text-right" id="allowance_amt_3" type="number" value="<?php echo $payslip->allowance_amt_3 ?>"  step="any" min="0">
                                <?php else: ?>
                                    <input name="allowance_amt_3" class="form-control text-right" id="allowance_amt_3" type="number" value="0" disabled  step="any" min="0">
                                <?php endif; ?>  
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
                                    <option <?php if($payslip->deduction_type_1 == $deduction['id']){echo "selected";} ?> value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->deduction_amt_1 > 0): ?>
                                    <input name="deduction_amt_1" class="form-control text-right" id="deduction_amt_1" type="number" value="<?php echo $payslip->deduction_amt_1 ?>"  step="any" min="0">
                                <?php else: ?>
                                    <input name="deduction_amt_1" class="form-control text-right" id="deduction_amt_1" type="number" disabled value="0"  step="any" min="0">
                                <?php endif; ?>
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="deduction_amt_2" id="deduction_type_2" name="deduction_type_2" class="form-control">
                                    <option value="0">Select Deduction</option>
                                    <?php foreach($deductions as $deduction): ?>
                                    <option <?php if($payslip->deduction_type_2 == $deduction['id']){echo "selected";} ?> value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->deduction_amt_2 > 0): ?>
                                    <input name="deduction_amt_2" class="form-control text-right" id="deduction_amt_2" type="number" value="<?php echo $payslip->deduction_amt_2 ?>"  step="any" min="0">
                                <?php else: ?>
                                    <input name="deduction_amt_2" class="form-control text-right" id="deduction_amt_2" type="number" disabled value="0"   step="any" min="0">
                                <?php endif; ?>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-6">
                                <select data-pair="deduction_amt_3" id="deduction_type_3" name="deduction_type_3" class="form-control">
                                    <option value="0">Select Deduction</option>
                                    <?php foreach($deductions as $deduction): ?>
                                    <option <?php if($payslip->deduction_type_3 == $deduction['id']){echo "selected";} ?> value="<?php echo $deduction['id'] ?>"><?php echo $deduction['deduction_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <?php if($payslip->deduction_amt_3 > 0): ?>
                                    <input name="deduction_amt_3" class="form-control text-right" id="deduction_amt_3" type="number" value="<?php echo $payslip->deduction_amt_3 ?>"  step="any" min="0">
                                <?php else: ?>
                                    <input name="deduction_amt_3" class="form-control text-right" id="deduction_amt_3" type="number" disabled value="0"  step="any" min="0">
                                <?php endif; ?>
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
        <div class="col-md-offset-3 col-md-6">
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
                                                        <input id="salary" name="salary" class="form-control text-right" id="basic" type="text" readonly="" value="<?php echo number_format($payslip->starting_salary,2) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Total Allowance</label>

                        <div class="col-sm-7">
                            <input name="total_allowance" class="form-control text-right" id="total_allowance" type="text" readonly="" value="<?php echo number_format($payslip->allowance_amt_1+$payslip->allowance_amt_2+$payslip->allowance_amt_3,2)?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Total Deduction</label>

                        <div class="col-sm-7">
                            <input name="total_deduction" class="form-control text-right" id="total_deduction" type="text" readonly="" value="<?php echo number_format($payslip->deduction_amt_1+$payslip->deduction_amt_2+$payslip->deduction_amt_3, 2) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-1">Net Salary</label>

                        <div class="col-sm-7">
                            <input name="net_salary" class="form-control text-right" id="net_salary" step="0.01" type="text" readonly="" value="<?php echo $net_salary  ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-2">Status</label>

                        <div class="col-sm-7">
                            <select name="payslip_status" id="payslip_status" class="form-control">
                                
                                <option <?php if($payslip->payslip_status == 1){echo "selected";} ?> value="1">Paid</option>
                                <option <?php if($payslip->payslip_status == 0){echo "selected";} ?> value="0">Unpaid</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button class="btn btn-success" type="submit">Save Changes</button>
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


