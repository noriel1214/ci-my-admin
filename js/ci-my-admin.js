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

                $.each(data.empsbydept, function(index, rec) {
                    $("select[name=emp_id]").empty();
                    $("select[name=emp_id]").append("<option value='"+rec.emp_id+"'>"+rec.fname + " " + rec.lname+"</option>");
                });
                }
        });
    });
    
});