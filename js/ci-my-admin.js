$(document).ready(function(){
    var root=  window.location.protocol + "//" + window.location.hostname + "/ci-my-admin";

    $("select[name=dept_id]").on("change", function(){
        var dept_id = $(this).val();
        $.ajax({
            type:"POST",
            url: root + "/admin/employees/empbydept/" + dept_id,
            data:{"dept_id" : dept_id},
            dataType: "json",
            success: function(data) {
                 $("select[name=emp_id]").empty();
                $("select[name=emp_id]").append("<option value=''>No Record Found</option>");
                
                $.each(data.empsbydept, function(index, rec) {
                    if(index==0)
                    {
                        $("select[name=emp_id]").empty();
                        $("select[name=emp_id]").append("<option value=''>Select Employee</option>");
                    }
                    $("select[name=emp_id]").append("<option value='"+rec.id+"'>"+rec.fname + " " + rec.lname+"</option>");
                });
                }
        });
    });
    
     $("select[name=emp_id]").on("change", function(){
         var emp_id = $(this).val();
         $.ajax({
             type:"POST",
             url: root + "/admin/employees/getemployeesalary/" + emp_id,
             data:{"emp_id":emp_id},
             dataType: "json",
             success:function(data){
                 $('#salary').val(data.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                 
             }
         })
         
     });
    
    $('.calctotaldeduction').on("click", function(){
      
           var d1 = parseFloat($('#deduction_amt_1').val() === "" ? 0 : $('#deduction_amt_1').val());
           var d2 = parseFloat($('#deduction_amt_2').val() === "" ? 0 : $('#deduction_amt_2').val());
           var d3 = parseFloat($('#deduction_amt_3').val() === "" ? 0 : $('#deduction_amt_3').val());
            var total_deduction  =d1+d2+d3;
            var total_allowance=parseFloat($('#total_allowance').val().replace(/[^\d\.]/g,''));
            var salary=parseFloat($('#salary').val().replace(/[^\d\.]/g,''));
            var net_salary=salary+total_allowance-total_deduction;
            
        $('#total_deduction').val(FormatDecimal(total_deduction.toFixed(2)));
        $('#net_salary').val(FormatDecimal(net_salary.toFixed(2)));
        
    });

    $('.calctotalallowance').on("click", function(){
           var a1 = parseFloat($('#allowance_amt_1').val() === "" ? 0 : $('#allowance_amt_1').val());
           var a2 = parseFloat($('#allowance_amt_2').val() === "" ? 0 : $('#allowance_amt_2').val());
           var a3 = parseFloat($('#allowance_amt_3').val() === "" ? 0 : $('#allowance_amt_3').val());

            var total_allowance  =a1+a2+a3;
            var total_deduction=parseFloat($('#total_deduction').val().replace(/[^\d\.]/g,''));
            var salary=parseFloat($('#salary').val().replace(/[^\d\.]/g,''));
            var net_salary=salary+total_allowance-total_deduction; 
            
            
            
        $('#total_allowance').val(FormatDecimal(total_allowance.toFixed(2)));
        $('#net_salary').val(FormatDecimal(net_salary.toFixed(2)));
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
    
    $('.search-payslip').on("click", function(){
        
       window.location.href = root + "/admin/payslips/index/" + $('#pay_month').val() + "/" + $('#pay_year').val(); 
    });
    
//Date Picker Functions
$('[data-toggle=datepicker]').each(function() {
  var target = $(this).data('target-name');
  var t = $('input[name=' + target + ']');
  t.datepicker({
      format: 'mm/dd/yyyy',
    autoclose: true,
    todayHighlight: true,
  });
  $(this).on("click", function() {
    t.datepicker("show");
  });
});
    
    
});

function FormatDecimal(nStr)
{
    nStr.toString().replace(/[^\d\.]/g,'');
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}