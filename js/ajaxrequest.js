$(document).ready(function(){
    //AJax call from already exists Email verification
    $("#stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: "student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkemail",
                stuemail: stuemail
            },
            success: function(data){
                // console.log(data);
                //chua lam xong
                if(data != 0){
                    $("#statusMsg2").html("<small class='alert alert-warning'>Email ID Already Used !</small>");
                    $("#signup").attr("disabled", true);
                }
                else if (data == 0 && reg.test(stuemail)){
                    $("#statusMsg2").html("<small class='alert-success'>There You GO !</small>");
                    $("#signup").attr("disabled", false);
                }
                else if (!reg.test(stuemail)){
                    $("#statusMsg2").html("<small class='alert alert-warning'>Please Enter Valid ex@gmail.com !</small>");
                    $("#signup").attr("disabled", false);
                }
            },
        });
    });
});




function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i; 
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    
    // console.log(stuname)
    // console.log(stuemail)
    // console.log(stupass)

    if (stuname.trim() == ""){
        $("#statusMsg1").html("<small class='alert alert-warning'>Please Enter Name !</small>");
        $("stuname").focus();
        return false;
    }
    else if (stuemail.trim() == ""){
        $("#statusMsg2").html("<small class='alert alert-warning'>Please Enter Email !</small>");
        $("stuemail").focus();
        return false;
    }
    else if (stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html("<small class='alert alert-warning'>Please Enter Valid ex@gmail.com !</small>");
        $("stuemail").focus();
        return false;
    }
    else if (stupass.trim() == ""){
        $("#statusMsg3").html("<small class='alert alert-warning'>Please Enter Password !</small>");
        $("stupass").focus();
        return false;
    }
    else{
        $.ajax({
            url: "student/addstudent.php",
            method: "POST",
            dataType: "json",
            data : {
                stusignup : "stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupass : stupass,
            },
            success : function(data){
                console.log(data)
                if(data == "OK"){
                    $("#successMsg").html("<span class='alert alert-success'>Registrations successful !</span>");
                    clearStuRegField();
                }
                else if (data == "Failed"){
                    $("#successMsg").html("<span class='alert alert-danger'> Unable to register !</span>");
                }
            },
        });
    }
}

//empty all fields

function clearStuRegField(){
    $("stuRegForm").trigger("reset");
    $("statusMsg1").html(" ");
    $("statusMsg2").html(" ");
    $("statusMsg3").html(" ");

}

// Ajax call for student login verification
function checkStuLogin(){
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
        url: "student/addstudent.php",
        method: "POST",
        dataType: "json",
        data : {
            checkLogemail: "checkLogemail",
            stuLogEmail : stuLogEmail,
            stuLogPass : stuLogPass,
        },
        success: function(data){
            console.log(data);
            if(data == 0){
                $('#statusLogMsg').html('<span class="alert alert-danger">Invalid Email or Password !</span>');
            }
            else if(data == 1){
                $('#statusLogMsg').html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "index.php";
                },1000);
            }
        }, 
    });
}