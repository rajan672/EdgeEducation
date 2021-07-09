
/* loading page start */


var load = document.getElementById('loading');
function myfun() {
  load.style.display= "none";
}



/* loading page end */

/* mobile menu bar start */

function showmenu(){
  var bar = document.getElementById('bar');
  var cros = document.getElementById('cros');
  var mob = document.getElementById('nav-mob');

  bar.style.display = "none";
  cros.style.display = "block";
  mob.style.display = "block";
}

function closemenu(){
  var bar = document.getElementById('bar');
  var cros = document.getElementById('cros');
  var mob = document.getElementById('nav-mob');

  bar.style.display = "block";
  cros.style.display = "none";
  mob.style.display = "none"
}
/* mobile menu bar start */



/* floating form start */

function mail(){
  var bar = document.getElementById('mail');
  var cross = document.getElementById('cross');
  var all = document.getElementById('all');


  bar.style.display ="none";
  cross.style.display = " block";
  all.style.transform = "translateX(0px)";
  
}

function cross(){
  var bar = document.getElementById('mail');
  var cross = document.getElementById('cross');
  var all = document.getElementById('all');


  bar.style.display ="block";
  cross.style.display = " none";
  all.style.transform = "translateX(230px)";
  
}



/* floating form end */




/* Home page */

/* Number animation using Jquery start */

$('.counter').each(function() {
  var $this = $(this),
    countTo = $this.attr('data-count');
    
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },
  
  {
  
    duration: 8000,
    easing:'linear',
    step: function() {
        $this.text(Math.floor(this.countNum));
    },
    complete: function() {
    $this.text(this.countNum);
    //alert('finished');
    }
  
  });  

});

/* Number animation using Jquery end */





/* FAQ Section start */

const accordion = document.getElementsByClassName('contentBx');

for (i=0; i<accordion.length; i++){
  accordion[i].addEventListener('click',function(){
    this.classList.toggle('active')
  })
}
/* FAQ Section start */





/* scroll top button start */
/* get the button */
const mybtn = document.getElementById('top');

/*when the user scrolls down 20px from the top of the document,show the button  */
window.onscroll=function(){
  scrollfun()
}

/* scrollfun function start */
function scrollfun(){
  if(document.body.scrollTop>20 || document.documentElement.scrollTop>20){
    mybtn.style.display='block';
  }else{
    mybtn.style.display='none';
  }
}
/* scrollfun function close */

function topfun(){
  document.body.scrollTop=0; //for safari
  document.documentElement.scrollTop=0; //for chrome,firefox
}

/* scroll top button start */
/* Home page end */





/* Registeration Page start */
function validation(){

  /* for user */
  var user = document.getElementById('user').value;

  /* for email */
  var emails = document.getElementById('emails').value;

  /* for mobile no. */
  var mobileNumber = document.getElementById('mobileNumber').value;

   /* for gender */
  //var gender= document.getElementById('gender').value; */

  /* for enquiry */
  var enquiry= document.getElementById('enquiry').value;

  /* for admission in */
  var admission = document.getElementById('admission').value;

  /* for your college */
  var college = document.getElementById('college').value;

  /* for your college adress */
  var colAdress= document.getElementById('col-adress').value;

  /* for alternate college */
  var alternatecollege=document.getElementById('alternatecollege').value;





  


  /* For username span tag*/
  if(user == ""){
    document.getElementById('username').innerHTML =" ** Please fill the username field";
    return false;
  }
  if((user.length <= 2) || (user.length > 20)) {
    document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
    return false;	
  }
  if(!isNaN(user)){
    document.getElementById('username').innerHTML =" ** only characters are allowed";
    return false;
  }



  /* for email span tag */
  if(emails == ""){
    document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
    return false;
  }
  if(emails.indexOf('@') <= 0 ){
    document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
    return false;
  }

  if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
    document.getElementById('emailids').innerHTML =" ** . Invalid Position";
    return false;
  }

  /* for mobile number span tag */
  if(mobileNumber == ""){
    document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
    return false;
  }
  if(isNaN(mobileNumber)){
    document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
    return false;
  }
  if(mobileNumber.length!=10){
    document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
    return false;
  }



  /* For enquiry span tag*/
  if(enquiry == ""){
    document.getElementById('enquryfor').innerHTML =" ** Please fill this field";
    return false;
  }



  /* For admission span tag*/
  if(admission == ""){
    document.getElementById('admissionin').innerHTML =" ** Please fill this field";
    return false;
  }


  /* For your college span tag*/
  if(college == ""){
    document.getElementById('mycollege').innerHTML =" ** Please fill this field";
    return false;
  }


  /* For your college adress span tag*/
  if(colAdress == ""){
    document.getElementById('college-adress').innerHTML =" ** Please fill this field";
    return false;
  }
  


  /* for alternate college span tag */
  if(alternatecollege==""){
    document.getElementById('alt-college').innerHTML=" ** Please fill this field";
  }
}

/* Registeration Page end */




/* Login start */
/* 
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});*/

/* login end */ 
















