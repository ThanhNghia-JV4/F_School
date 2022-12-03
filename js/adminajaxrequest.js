// Ajax call for admin login verification
function checkAdminLogin(){
    console.log("Thah");
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
        url: "admin/admin.php",
        method: "POST",
        dataType: "json",
        data : {
            checkLogemail: "checkLogemail",
            adminLogEmail : adminLogEmail,
            adminLogPass : adminLogPass,
        },
        success: function(data){
            console.log(data);
            if(data == 0){
                $('#statusAdminLogMsg').html('<small class="alert alert-danger">Invalid Email or Password !</small>');
            }
            else if(data == 1){
                $('#statusAdminLogMsg').html('<small class="alert alert-success">ISuccuss loading...</small>');
                setTimeout(()=>{
                    window.location.href = "admin/adminDashboard.php";
                },1000);
            }
        }, 
    });
}