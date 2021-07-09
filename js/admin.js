
  /*Admin Login  start */
//Ajax call for login verification
function ALogin(){
    console.log("hello");
    var Alogemail = $('#ALoginEmail').val();
    var Alogpass = $('#ALoginPass').val();

    $.ajax({
        url:'Admin/admin.php',
        method :'POST',
        dataType : "json",
        data : {
            checkLogemail : "checkloggmail",
            ALogEmail : Alogemail,
            ALogPass : Alogpass,
        },
        success : function(data){
            console.log(data);
            if (data == 0){
                $('#ALoginMsg').html('<small class="alert alert-danger"> Invalid Email Id or Password</small>');

            }else if(data == 1){
                $('#ALoginMsg').html('<small class="alert alert-success"> Success Loading....</small>');
                setTimeout(()=>{
                    window.location.href ="Admin/adminDashboard.php";
                }, 1000);
            }
        }
    });
}


  /*Admin Login end */