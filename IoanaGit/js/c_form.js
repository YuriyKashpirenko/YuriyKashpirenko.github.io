<<<<<<< HEAD
'use strict';
/*=== CLEAR AN ERROR ON INPUT ===*/
function clearFirstName(){
    document.querySelector('#error_fn').innerHTML = '';
}  

function clearLastName(){
    document.querySelector('#error_ln').innerHTML = '';
}

function clearEmail(){
    document.querySelector('#error_email').innerHTML = '';
}

function clearPhone(){
    document.querySelector('#error_phone').innerHTML = '';
}

function clearCar(){
    document.querySelector('#error_car').innerHTML = '';
}

function clearModel(){
    document.querySelector('#error_model').innerHTML = '';
}

function clearYear(){
    document.querySelector('#error_year').innerHTML = '';
}

function clearSubject(){
    document.querySelector('#error_subject').innerHTML = '';
}

function clearMessage(){
    document.querySelector('#error_message').innerHTML = '';
}


/*=== VALIDATION FOR SPECIAL CHARACTERS ===*/
//char '-' and '\' may be allowed depends from the browser version  
var re = new RegExp('^[`~!@#$%^&*()_+\-=,.<>?\/\'\":; \{\}\\\/\[|\]|]');
var re1 = new RegExp(/^[\\]/);
//another option    
//var re = new RegExp(/[^\w\s]/gi, '');
//var re2 = new RegExp(/^[\\|_|\-]/); 


/*=== FORM INPUT VALIDATION ===*/
function validateForm() {

  var fname = document.forms["contactForm"]["f_name"].value;
  //validate if first name is not null and not a number
  //validate for special char with regular expression (re) and (re1)
  if (fname == "" || !isNaN(fname) || (fname.match(re) || fname.match(re1))) { 
//    alert("Please enter your first name");
    document.getElementById('error_fn').innerHTML = 'Please enter your first name'; 
    return false;
  }

  var lname = document.forms["contactForm"]["l_name"].value;
  //validate if last name is not null and not a number
  //validate for special char with regular expression (re) and (re1) 
  if (lname == "" || !isNaN(lname) || (lname.match(re) || lname.match(re1))) {
//    alert("Please enter your last name");
      document.getElementById('error_ln').innerHTML = 'Please enter your last name'; 
    return false;
  }    

  //get email value from html
  var email = document.forms["contactForm"]["email"].value;
  function emailValid(email){
      var res = false;
      //validation pattern
      var patt = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      //validate email with pattern
      if (patt.test(email)){
      //if email is valid return true
      res = true;
      } else {
      //if email is not valid return false
      res = false;}
      //return result
      return res;
  }
  if(emailValid(email) == false){
//      alert("Please enter valid email address");
    document.getElementById('error_email').innerHTML = 'Please enter valid email address'; 
      return false;
  }  
    
  var phone = document.forms["contactForm"]["phone"].value;
  //validate if phone number is has only numbers and length is 10
  if (isNaN(phone) || phone.toString().length !=10)  {
//    alert("Please enter your phone, 10 digits");
    document.getElementById('error_phone').innerHTML = 'Please enter contact phone number, 10 digits';
    return false;
  } 

  var car = document.forms["contactForm"]["car"].value;
  //validate if car is not null
  //validate for special char with regular expression (re) and (re1)  
  if (car == "" || (car.match(re) || car.match(re1))) {
//    alert("Please enter your car make");
    document.getElementById('error_car').innerHTML = 'Please enter your car make';
    return false;
  }

  var model = document.forms["contactForm"]["model"].value;
  //validate if model is not null
  //validate for special char with regular expression (re) and (re1) 
  if (model == "" || (model.match(re) || model.match(re1))) {
//    alert("Please enter your car model");
    document.getElementById('error_model').innerHTML = 'Please enter your car model';
    return false;
  }   

  var year = document.forms["contactForm"]["year"].value;
  //validate if year is number and length is 4 digits
  if (isNaN(year) || year.toString().length != 4) {
//    alert("Please enter car year, 4 digits");
    document.getElementById('error_year').innerHTML = 'Please enter car year, 4 digits';
    return false;
  }    

  var subject = document.forms["contactForm"]["subject"].value;
  //validate if subject is not null
  //validate for special char with regular expression (re) and (re1)   
  if (subject == "" || (subject.match(re) || subject.match(re1))) {
//    alert("Please enter subject of your message");
    document.getElementById('error_subject').innerHTML = 'Please enter subject of your message';
    return false;
  } 

  var message = document.forms["contactForm"]["message"].value;
  if (message == "") {
//    alert("Please enter your message");
    document.getElementById('error_message').innerHTML = 'Please enter your message';
    return false;
  }  

} 


=======
'use strict';
/*=== CLEAR AN ERROR ON INPUT ===*/
function clearFirstName(){
    document.querySelector('#error_fn').innerHTML = '';
}  

function clearLastName(){
    document.querySelector('#error_ln').innerHTML = '';
}

function clearEmail(){
    document.querySelector('#error_email').innerHTML = '';
}

function clearPhone(){
    document.querySelector('#error_phone').innerHTML = '';
}

function clearCar(){
    document.querySelector('#error_car').innerHTML = '';
}

function clearModel(){
    document.querySelector('#error_model').innerHTML = '';
}

function clearYear(){
    document.querySelector('#error_year').innerHTML = '';
}

function clearSubject(){
    document.querySelector('#error_subject').innerHTML = '';
}

function clearMessage(){
    document.querySelector('#error_message').innerHTML = '';
}


/*=== VALIDATION FOR SPECIAL CHARACTERS ===*/
//char '-' and '\' may be allowed depends from the browser version  
var re = new RegExp('^[`~!@#$%^&*()_+\-=,.<>?\/\'\":; \{\}\\\/\[|\]|]');
var re1 = new RegExp(/^[\\]/);
//another option    
//var re = new RegExp(/[^\w\s]/gi, '');
//var re2 = new RegExp(/^[\\|_|\-]/); 


/*=== FORM INPUT VALIDATION ===*/
function validateForm() {

  var fname = document.forms["contactForm"]["f_name"].value;
  //validate if first name is not null and not a number
  //validate for special char with regular expression (re) and (re1)
  if (fname == "" || !isNaN(fname) || (fname.match(re) || fname.match(re1))) { 
//    alert("Please enter your first name");
    document.getElementById('error_fn').innerHTML = 'Please enter your first name'; 
    return false;
  }

  var lname = document.forms["contactForm"]["l_name"].value;
  //validate if last name is not null and not a number
  //validate for special char with regular expression (re) and (re1) 
  if (lname == "" || !isNaN(lname) || (lname.match(re) || lname.match(re1))) {
//    alert("Please enter your last name");
      document.getElementById('error_ln').innerHTML = 'Please enter your last name'; 
    return false;
  }    

  //get email value from html
  var email = document.forms["contactForm"]["email"].value;
  function emailValid(email){
      var res = false;
      //validation pattern
      var patt = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      //validate email with pattern
      if (patt.test(email)){
      //if email is valid return true
      res = true;
      } else {
      //if email is not valid return false
      res = false;}
      //return result
      return res;
  }
  if(emailValid(email) == false){
//      alert("Please enter valid email address");
    document.getElementById('error_email').innerHTML = 'Please enter valid email address'; 
      return false;
  }  
    
  var phone = document.forms["contactForm"]["phone"].value;
  //validate if phone number is has only numbers and length is 10
  if (isNaN(phone) || phone.toString().length !=10)  {
//    alert("Please enter your phone, 10 digits");
    document.getElementById('error_phone').innerHTML = 'Please enter contact phone number, 10 digits';
    return false;
  } 

  var car = document.forms["contactForm"]["car"].value;
  //validate if car is not null
  //validate for special char with regular expression (re) and (re1)  
  if (car == "" || (car.match(re) || car.match(re1))) {
//    alert("Please enter your car make");
    document.getElementById('error_car').innerHTML = 'Please enter your car make';
    return false;
  }

  var model = document.forms["contactForm"]["model"].value;
  //validate if model is not null
  //validate for special char with regular expression (re) and (re1) 
  if (model == "" || (model.match(re) || model.match(re1))) {
//    alert("Please enter your car model");
    document.getElementById('error_model').innerHTML = 'Please enter your car model';
    return false;
  }   

  var year = document.forms["contactForm"]["year"].value;
  //validate if year is number and length is 4 digits
  if (isNaN(year) || year.toString().length != 4) {
//    alert("Please enter car year, 4 digits");
    document.getElementById('error_year').innerHTML = 'Please enter car year, 4 digits';
    return false;
  }    

  var subject = document.forms["contactForm"]["subject"].value;
  //validate if subject is not null
  //validate for special char with regular expression (re) and (re1)   
  if (subject == "" || (subject.match(re) || subject.match(re1))) {
//    alert("Please enter subject of your message");
    document.getElementById('error_subject').innerHTML = 'Please enter subject of your message';
    return false;
  } 

  var message = document.forms["contactForm"]["message"].value;
  if (message == "") {
//    alert("Please enter your message");
    document.getElementById('error_message').innerHTML = 'Please enter your message';
    return false;
  }  

} 


>>>>>>> 08f67e5f44e336077b00908014d7639cdda468ff
