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
                                <select class="form-control">
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Employee</label>
                                <select class="form-control">
                                    <option>1</option>
                                </select>
                            </div>                            
                            <div class="col-sm-6">
                            <div class="col-sm-4">
                                <label>Month</label>
                                <select class="form-control">
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>Year</label>
                                <select class="form-control">
                                    <option>1</option>
                                </select>
                            </div>                                 
                            <div class="col-sm-4">
                                <label>&nbsp;</label>
                                <input type="button" class="btn btn-primary form-control" value="Submit">        
                            </div>                             </div>
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
                                <input name="allowance_type[]" class="form-control" type="text" placeholder="Type">
                            </div>
                            <div class="col-sm-6">
                                <input name="allowance_amount[]" class="form-control" id="allowance_amount_1" type="number" placeholder="Amount">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="allowance_type[]" class="form-control" type="text" placeholder="Type">
                            </div>

                            <div class="col-sm-6">
                                <input name="allowance_amount[]" class="form-control" id="allowance_amount" type="number" placeholder="Amount">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="allowance_type[]" class="form-control" type="text" placeholder="Type">
                            </div>
                            <div class="col-sm-6">
                                <input name="allowance_amount[]" class="form-control" id="allowance_amount_1" type="number" placeholder="Amount">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="allowance_type[]" class="form-control" type="text" placeholder="Type">
                            </div>

                            <div class="col-sm-6">
                                <input name="allowance_amount[]" class="form-control" id="allowance_amount" type="number" placeholder="Amount">
                            </div>

                        </div>                    
                    

                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-6">
                            <button class="btn btn-info btn-sm" onclick="calculate_total_allowance()" type="button">
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
                                <input name="deduction_type[]" class="form-control" type="text" placeholder="Type">
                            </div>
                            <div class="col-sm-6">
                                <input name="deduction_amount[]" class="form-control" id="deduction_amount_1" type="number" placeholder="Amount">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="deduction_type[]" class="form-control" type="text" placeholder="Type">
                            </div>

                            <div class="col-sm-6">
                                <input name="deduction_amount[]" class="form-control" id="deduction_amount" type="number" placeholder="Amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="deduction_type[]" class="form-control" type="text" placeholder="Type">
                            </div>
                            <div class="col-sm-6">
                                <input name="deduction_amount[]" class="form-control" id="deduction_amount_1" type="number" placeholder="Amount">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input name="deduction_type[]" class="form-control" type="text" placeholder="Type">
                            </div>

                            <div class="col-sm-6">
                                <input name="deduction_amount[]" class="form-control" id="deduction_amount" type="number" placeholder="Amount">
                            </div>
                        </div>
                    

                    <div class="form-group">

                        
                        <div class="col-sm-6 col-sm-offset-6">
                            <button class="btn btn-info btn-sm" onclick="calculate_total_deduction()" type="button">
                                Calculate Total Deduction                            </button>
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
                                                        <input name="basic" class="form-control" id="basic" type="text" readonly="" value="1222">
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
                            <input name="net_salary" class="form-control" id="net_salary" type="text" readonly="" value="1222">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field-2">Status</label>

                        <div class="col-sm-7">
                            <select name="status" class="form-control">
                                <option value="1">Paid</option>
                                <option value="0">Unpaid</option>
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