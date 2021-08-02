$('document').ready(function () {

// alert('ready to rumble');

//$('.name_error').text('Error');

$('.name_error').hide();
$('.mat_error').hide();
$('.dept_error').hide();
$('.fac_error').hide();
$('.cgpa_error').hide();

var name_error = false;
var mat_error = false;
var dept_error = false;
var fac_error = false;
var cgpa_error = false;

$('#name').blur(function(){
    check_name();
    // alert('ready');
});

$('#mat').focusout(function(){
    check_mat();
    // alert('ready');
});

$('#dept').blur(function(){
    check_dept();
    // alert('ready');
});

$('#fac').blur(function(){
    check_fac();
    // alert('ready');
});

$('#cgpa').blur(function(){
    check_cgpa();
    // alert('ready');
});

function check_name() {
    var name_is = $('#name').val();
    var name_length = $('#name').val().length;
    var regex = /^[a-zA-Z\s]*$/;

    if(name_length < 5){
        $('.name_error').text('Please enter your name'); 
        $('.name_error').show();
        name_error = true;
    } else if(regex.test(name_is)){
        $('.name_error').hide(); 
    } else {
      $('.name_error').show().text('Name should be letters only');
        name_error = true; 
    }
}

function check_mat() {
    var mat_is = $('#mat').val();
    var mat_length = $('#mat').val().length;
    var regex = /^[A-Z]{3}\s?\d{7}$/;

    if(mat_length < 10){
        $('.mat_error').text('Please fill in your matriculation number');
        $('.mat_error').show();
        mat_error = true;
    } else if(!regex.test(mat_is)){
          $('.mat_error').show().text('Matriculation number should begin with letters and end with numbers');
        mat_error = true; 
    } else {
        $('.mat_error').hide();
    }
}

function check_dept() {
    var dept_is = $('#dept').val();
    var dept_length = $('#dept').val().length;
    var regex = /^[a-zA-Z\s]*$/;

    if(dept_length < 5){
        $('.dept_error').text('Please fill in your department');
        $('.dept_error').show();
        dept_error = true;
    } else if(regex.test(dept_is)){
        $('.dept_error').hide(); 
    } else {
      $('.dept_error').show().text('Department name should be letters only');
        dept_error = true; 
    }
}

function check_fac() {
    var fac_is = $('#fac').val();
    var fac_length = $('#fac').val().length;
    var regex =  /^[a-zA-Z\s]*$/;

    if(fac_length < 5){
        $('.fac_error').text('Please fill in your Faculty');
        $('.fac_error').show();
        fac_error = true;
    } else if(regex.test(fac_is)){
        $('.fac_error').hide(); 
    } else {
      $('.fac_error').show().text('Faculty name should be letters only');
        fac_error = true; 
    }
}

function check_cgpa() {
    var cgpa_is = $('#cgpa').val();
    var cgpa_length = $('#cgpa').val().length;
    var regex = /^[0-4]\.[01-99]*$/;

    if(cgpa_length == 0 || cgpa_length > parseFloat(5.00)){
        $('.cgpa_error').text('Please fill in your CGPA');
        $('.cgpa_error').show();
        cgpa_error = true;
    } else if(regex.test(cgpa_is)){
        $('.cgpa_error').hide();  
    } else {
      $('.cgpa_error').show().text('CGPA should be in two decimal places only');
        cgpa_error = true; 
    }
}
$('#addform').submit(function(){

     name_error = false;
     mat_error = false;
     dept_error = false;
     fac_error = false;
     cgpa_error = false;

     check_name();
     check_mat();
     check_dept();
     check_fac();
     check_cgpa();

    if (name_error == false &&  mat_error == false && dept_error == false &&  fac_error == false &&  cgpa_error == false) {
        return true;
    } else {
        return false;
    }
});

$('.username-error').hide();
$('.password-error').hide();

$us_name_error = false;
$ps_wd_error = false;

$('#user-name').blur(function() {
    check_username();
    
});


$('#pass-word').blur(function() {
    check_password();
    
});


function check_username() {
    var name_is = $('#user-name').val();
    var name_length = $('#user-name').val().length;
    var regex = /^\w{5,10}$/;

    if(name_length < 5){
        $('.username-error').text('Please enter your username'); 
        $('.username-error').show();
        $us_name_error = true;
    } else if(regex.test(name_is)){
        $('.username-error').hide(); 
    } else {
      $('.username-error').show().text('Enter username properly');
      $us_name_error = true; 
    }
}

function check_password() {
    var name_is = $('#pass-word').val();
    var name_length = $('#pass-word').val().length;
    var regex = /^\w{5,8}$/;

    if(name_length < 5){
        $('.password-error').text('Please enter your password'); 
        $('.password-error').show();
        $ps_wd_error = true;
    } else if(regex.test(name_is)){
        $('.password-error').hide(); 
    } else {
      $('.password-error').show().text('Enter password properly');
      $ps_wd_error = true; 
    }
}

$('#login-form').submit(function(){

    $us_name_error = false;
    $ps_wd_error = false;
   

    check_username();
    check_password();

   if ($us_name_error == false &&  $ps_wd_error == false) {
       return true;
   } else {
       return false;
   }
});


$('.navbar-toggle').click(function(){
    $('.navbar-collapse').toggle();
  });

});

