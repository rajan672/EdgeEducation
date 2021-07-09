/* ......................Database..................... */

$(document).ready(function(){
    //Ajax call from Already exists email verification
    $("#signEmail").on("keypress blur",function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var  stuemail =$("#signEmail").val();
        //console.log(stuemail);
        $.ajax({
            url:'studentdata/signupdata.php',
            method :'POST',
            data : {
                checkemail : "checkemail",
                stuemail : stuemail,
            },
            success:function(data){
                console.log(data);
                if (data != 0){
                    $('#signUserMsg2').html('<small style="color:red;">Email ID already Used !</small>');
                    $("#signup").attr("disabled",true);
                }else if (data == 0 && reg.test(signEmail) ){
                    $('#signUserMsg2').html('<small style="color:green;">There yo go !</small>');
                    $("#signup").attr("disabled",false);
                }else if (!reg.test(signEmail)){
                    $('#signUserMsg2').html('<small style="color:red;"> please enter valid Email ID !</small>');
                    $("#signup").attr("disabled",false);
                }
                if(signEmail == ""){
                    $('#signUserMsg2').html('<small style="color:red;"> please enter Email ID !</small>');
                }
            },
        });
    });
});






/* sign in Registeration start */

function signUp(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i; 
    var signUser = $("#signUser").val();
    var signEmail = $("#signEmail").val();
    var signPass = $("#signPass").val();
    console.log(signUser);
    console.log(signEmail);
    console.log(signPass);


    if(signUser.trim() ==""){
        $('#signUserMsg1').html('<small style="color:red;">Please enter name !!</small>');

        $('#signUser').focus();
        return false;

    }else if(signEmail.trim() ==""){
        $('#signUserMsg2').html('<small style="color:red;">Please enter Email !!</small>');

        $('#signEmail').focus();
        return false;

    } else if(signEmail.trim() != ""  && !reg.test(signEmail) ){
        $('#signUserMsg2').html('<small style="color:red;">Please enter vailed email !!</small>');

        $('#signEmail').focus();
        return false;
    }else if(signPass.trim() ==""){
        $('#signUserMsg3').html('<small style="color:red;">Please enter pass !!</small>');

        $('#signPass').focus();
        return false;

    }else{
        $.ajax({
        url:'studentdata/signupdata.php',
        method :'POST',
        dataType : "json",
        data : {
            stusignup : "stusignup",
            signUser : signUser,
            signEmail : signEmail,
            signPass : signPass,
        },
        success: function(data){
            console.log(data);
            if(data.trim() == "OK"){
                $('#signupsuccess').append('<small class="alert alert-success" >Sign Up Successfuly !!</small>');
                clearstuReg();
            }else if (data.trim() == "failed"){
                $('#signupsuccess').append('<small class="alert alert-danger"> Unable to Sign Up !!</small>');
            }
        },
    });
        

    }
    
}
  //empty all fields

 function clearstuReg(){
    $("#stu-register").trigger("reset");
    $('#signUserMsg1').html("");
    $('#signUserMsg2').html("");
    $('#signUserMsg3').html("");
  } 


  function clear() {
      $("#stu-login").trigger("reset");
      $("#LoginMsg").html("");
  }
 
  /* sign in Registeration end */


  /* Login  start */
//Ajax call for login verification
function Login(){
    var stulogemail = $('#LoginEmail').val();
    var stulogpass = $('#LoginPass').val();

    $.ajax({
        url:'studentdata/signupdata.php',
        method :'POST',
        dataType : "json",
        data : {
            checkLogemail : "checkloggmail",
            stuLogEmail : stulogemail,
            stuLogPass : stulogpass,
        },
        success : function(data){
            console.log(data);
            if (data == 0){
                $('#LoginMsg').html('<small class="alert alert-danger"> Invalid Email Id or Password</small>');

            }else if(data == 1){
                $('#LoginMsg').html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href ="index.php";
                }, 1000);
            }
        }
    });
}


  /* Login end */