$(document).ready(function(){
    
    $("select[name=dept_id]").on("change", function(){
        var dept_id = $(this).val();
        $.ajax({
            type:"POST",
            url:"http://localhost/ci-my-admin/admin/employees/empbydept/" + dept_id,
            data:{"dept_id" : dept_id},
            dataType: "json",
            success: function(data) {
                 $("select[name=emp_id]").empty();
                $("select[name=emp_id]").append("<option value=''>No Record Found</option>");
                
                $("select[name=emp_id]").empty();
                $.each(data.empsbydept, function(index, rec) {
                    
                    $("select[name=emp_id]").append("<option value='"+rec.id+"'>"+rec.fname + " " + rec.lname+"</option>");
                });
                }
        });
    });
    
    $('.calctotaldeduction').on("click", function(){
           var d1 = parseFloat($('#deduction_amt_1').val() === "" ? 0 : $('#deduction_amt_1').val());
           var d2 = parseFloat($('#deduction_amt_2').val() === "" ? 0 : $('#deduction_amt_2').val());
           var d3 = parseFloat($('#deduction_amt_3').val() === "" ? 0 : $('#deduction_amt_3').val());
            var total_deduction  =d1+d2+d3;
        $('#total_deduction').val(total_deduction);
        $('#net_salary').val(parseFloat($('#salary').val()) + parseFloat($('#total_allowance').val()) - parseFloat($('#total_deduction').val()));
        
    });

    $('.calctotalallowance').on("click", function(){
           var a1 = parseFloat($('#allowance_amt_1').val() === "" ? 0 : $('#allowance_amt_1').val());
           var a2 = parseFloat($('#allowance_amt_2').val() === "" ? 0 : $('#allowance_amt_2').val());
           var a3 = parseFloat($('#allowance_amt_3').val() === "" ? 0 : $('#allowance_amt_3').val());
            var total_allowance  =a1+a2+a3;
        $('#total_allowance').val(total_allowance);
        $('#net_salary').val(parseFloat($('#salary').val()) + parseFloat($('#total_allowance').val()) - parseFloat($('#total_deduction').val()));
    });
    
    $('#allowance_type_1, #allowance_type_2, #allowance_type_3, #deduction_type_1, #deduction_type_2, #deduction_type_3')
    .on("change", function(){
        
        if($(this).prop('selectedIndex')===0)
        {
            $("#" + $(this).attr("data-pair")).val("");
            $("#" + $(this).attr("data-pair")).prop("disabled", true);
        }
        else
        {
            $("#" + $(this).attr("data-pair")).removeAttr('disabled');
        }
   });
    
    $('#allowance_amt_1, #allowance_amt_2, #allowance_amt_3, #deduction_amt_1, #deduction_amt_2, #deduction_amt_3')
            .on("keypressxxx", function(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode !== 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;
          return true;        
    });
    
});