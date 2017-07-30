<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Create New Employee
                <a  href="<?= base_url('admin/employees') ?>" class="btn btn-warning pull-right">Go back to employees listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form role="form" method="POST" action="<?= base_url('admin/employees/edit/'.$employee->id) ?>">
    <div class="row">
     <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Personal Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value='<?php echo $employee->fname ?>' id="fname" name="fname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input value='<?php echo $employee->mname ?>' id="mname" name="mname" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input value='<?php echo $employee->lname ?>' id="lname" name="lname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Suffix</label>
                                    <input value='<?php echo $employee->suffix ?>' id="suffix" name="suffix" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input value='<?php echo $employee->birthday ?>' id="birthday" name="birthday" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input value='<?php echo $employee->gender ?>' id="gender" name="gender" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Marital Status</label>
                                    <input value='<?php echo $employee->maritalstatus ?>' id="maritalstatus" name="maritalstatus" class="form-control">
                                </div> 
                            <div class="form-group">
                                    <label>Phone</label>
                                    <input value='<?php echo $employee->phone ?>'  id="phone" name="phone" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Contact Name</label>
                                    <input value='<?php echo $employee->contact_name ?>' id="contact_name" name="contact_name" class="form-control">
                                </div>                            
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            
        </div>  

           <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Address Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input value='<?php echo $employee->addrline1 ?>' id="addrline1" name="addrline1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input value='<?php echo $employee->addrline2 ?>' id="addrline2" name="addrline2" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Barrio</label>
                                    <input value='<?php echo $employee->barrio ?>' id="barrio" name="barrio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>City/Town</label>
                                    <input value='<?php echo $employee->citytown ?>' id="citytown" name="citytown" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Province</label>
                                    <input value='<?php echo $employee->province ?>' id="province" name="province" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Country</label>
                                    <input value='<?php echo $employee->country ?>' id="country" name="country" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input value='<?php echo $employee->zip ?>' id="zip" name="zip" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <input value='<?php echo $employee->nationality ?>' id="nationality" name="nationality" class="form-control">
                                </div>                            
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
    </div>
        
     <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Other Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value='<?php echo $employee->email ?>' id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input value='<?php echo $employee->dept_id ?>' id="dept_id" name="dept_id" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Position</label>
                                    <input value='<?php echo $employee->designation_id ?>' id="designation_id" name="designation_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Hire Date</label>
                                    <input value='<?php echo $employee->hire_date ?>' id="hire_date" name="hire_date" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Starting Salary</label>
                                    <input value='<?php echo $employee->starting_salary ?>' id="starting_salary" name="starting_salary" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value='<?php echo $employee->emp_status ?>' id="emp_status" name="emp_status" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Bank Account Name</label>
                                    <input value='<?php echo $employee->acct_name ?>' id="acct_name" name="acct_name" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input value='<?php echo $employee->acct_no ?>' id="acct_no" name="acct_no" class="form-control">
                                </div>                            
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input value='<?php echo $employee->bank_name ?>' id="bank_name" name="bank_name" class="form-control">
                                </div>  
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input value='<?php echo $employee->branch_name ?>' id="branch_name" name="branch_name" class="form-control">
                                </div>                              
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
    </div>
                            <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
            

        

        </form>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>