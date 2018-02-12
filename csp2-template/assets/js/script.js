function fn_onload(){
  // webtitle = window.location.href;
  fn_navlink();
  fn_snackbar('onload');
  fn_eventtriggers();
  fn_setformvalues();
  fn_setvalidation_status();
  validation_signup_status = new Array(6);
  validation_login_status = new Array(2);
}
function fn_navlink(){
  var arr = document.getElementsByClassName('navlink');
  var linkname = '';
  for(l=1;l<=arr.length;l++){
    linkname = arr[l-1].textContent.replace(' ','');
    linkname = linkname.toLowerCase();
    linkname = "window.location.href='index.php?webtitle=" + linkname + "'";
    arr[l-1].setAttribute('onclick', linkname);
  }
}

function fn_snackbar(trigger,color){
  if(color==undefined){color = 'gold';}
  var snackbar = document.getElementById('snackbar');
  switch (trigger){
    case 'onload':
      snackbar.removeAttribute('hidden');
      setTimeout(function(){
        snackbar.setAttribute('hidden', '');}, 3000);
      break;
    case 'update':
      snackbar.removeAttribute('hidden');
      snackbar.style.backgroundColor = color;
      setTimeout(function(){
        snackbar.setAttribute('hidden', '');
        snackbar.style.backgroundColor = 'gold';}, 3000);
      break;
    default:
      break;
  }
}

username_back = username_back;
function fn_validation(id,webtitle){
  document.getElementById(id).removeAttribute('onfocusout');
  var snackbar = document.getElementById('snackbar');
  var username = '';
  switch(true){
    case(webtitle == 'signin'):
      username = document.getElementById('username');
      var password = document.getElementById('password');
      var href = window.location.href;
      if(username.value != '' || username.value != ' '){
        username_back = username.value;
      }
      username_back = username.value;
      console.log(username_back);
      // window.location.href = href + '&type=' + 'json' + '&username=' + username.value ;
      var ajax = new XMLHttpRequest();
      ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
          ajax.responseText;
        }
      };
      ajax.open('GET', '../php/ajax.php', true);
      ajax.send();
      if(username.value == ""){
        username.value = username_back;
      } else{

      }
      break;
    case(webtitle == 'signup'):
      username = document.getElementById('username');
      var password = document.getElementById('password');
      var confirmpassword = document.getElementById('confirmpassword');
      var email = document.getElementById('email');
      var firstname = document.getElementById('firstname');
      var lastname = document.getElementById('lastname');
      switch(true){
        case(id == 'username'):
          var username_val = username.value;
          if(username_val.length == 0){
            snackbar.textContent = 'Usernames cannot contain blank fields';
            username.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            fn_snackbar('update', 'red');
            validation_signup_status[0] = 0;
          } else if(username_val.length <= 8){
            snackbar.textContent = 'Usernames must contain at least eight alphanumeric characters.';
            username.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            fn_snackbar('update', 'red');
            validation_signup_status[0] = 0;
          } else if(username_val.search(/[^a-z\d]/gi) > 0){
            snackbar.textContent = 'Usernames must be single-worded, non-spaced, alphanumeric characters.';
            username.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            fn_snackbar('update', 'red');
            validation_signup_status[0] = 0;
          } else{
            username.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[0] = 1;
          }
          break;
        case(id == 'password'):
          var password_val = password.value;
          if(password_val.length == 0){
            snackbar.textContent = 'Passwords cannot contain blank fields.';
            password.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            fn_snackbar('update', 'red');
            validation_signup_status[1] = 0;
          } else if(password_val.length < 8){
            snackbar.textContent = 'Password must contain at least eight characters. ';
            password.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            fn_snackbar('update', 'red');
            validation_signup_status[1] = 0;
          } else{
            password.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[1] = 1;
          }
          break;
        case(id == 'confirmpassword'):
          var password_val = password.value;
          var confirmpassword_val = confirmpassword.value;
          if(password_val != confirmpassword_val){
            snackbar.textContent = 'Password does not match.';
            fn_snackbar('update','red');
            confirmpassword.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[2] = 0;
          } else if(password_val == confirmpassword_val){
            snackbar.textContent = 'Password matched.';
            fn_snackbar('update','green');
            confirmpassword.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[2] = 1;
          }
          break;
        case(id == 'email'):
          var email_val = email.value;
        if(email_val.match(/\@/gi) > 1 || email_val.search(/\@/gi) == -1){
            snackbar.textContent = 'Emails must can contain one "@-symbol".';
            fn_snackbar('update', 'red');
            email.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[3] = 0;
          } else if(email_val.search(/[^a-z\s\@\.]/gi) > 0){
            snackbar.textContent = 'Emails cannot contain special characters other than "@-symbol" and periods.';
            fn_snackbar('update', 'red');
            email.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[3] = 0;
          } else{
            email.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[3] = 1;
          }
          break;
        case(id == 'firstname'):
          var firstname_val = firstname.value;
          if(firstname_val.search(/[^a-z\s]/gi) > 0){
            snackbar.textContent = 'Names cannot contain special characters or numbers';
            fn_snackbar('update', 'red');
            firstname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[4] = 0;
          } else if(firstname_val.length <= 2){
            snackbar.textContent = 'Names must be more than two characters.';
            fn_snackbar('update', 'read');
            firstname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[4] = 0;
          } else if(firstname_val.search(/[^a-z\s]/gi) == -1){
            firstname.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[4] = 1;
          }
          break;
        case(id == 'lastname'):
          var lastname_val = lastname.value;
          if(lastname_val.search(/[^a-z\s]/gi) > 0){
            snackbar.textContent = 'Names cannot contain special characters or numbers';
            fn_snackbar('update', 'red');
            lastname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
            validation_signup_status[5] = 0;
          } else if(lastname_val.length <= 2){
            snackbar.textContent = 'Names must be more than two characters.';
            fn_snackbar('update', 'read');
            validation_signup_status[5] = 0;
            lastname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
          } else if(lastname_val.search(/[^a-z\s]/gi) == -1){
            lastname.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
            validation_signup_status[5] = 1;
          }
          break;
        default:
          break;
      }
      status = 0;
      for(l=1;l<=validation_signup_status.length;l++){
        status = parseInt(status) + parseInt(validation_signup_status[l-1]);
        if(status == 6){
          document.getElementById('submitbutton').style.backgroundColor = 'hsla(120, 100%, 25%, 0.5)';
        } else{
          document.getElementById('submitbutton').style.backgroundColor = 'inherit';
        }
      }
      break;
    default:
      break;
  }


  fn_eventtriggers(id);
}

function fn_eventtriggers(id){
  var webtitle = fn_getquerystring('webtitle');
  if(id == null){id = '';}
  if(id == ''){
    var arr = document.getElementsByClassName('validate');
    for(l=1;l<=arr.length;l++){
      value = 'fn_validation("' + arr[l-1].getAttribute('id') + '", "' + webtitle + '")';
      arr[l-1].setAttribute('onfocusout', value);
    }
  } else{
    mappedid = document.getElementById(id);
    value = 'fn_validation("' + mappedid.getAttribute('id') + '", "' + webtitle + '")';
    mappedid.setAttribute('onfocusout', value);
  }
}

function fn_setformvalues(){
  var val = fn_getquerystring();
  switch(true){
    case(val=='signup'):
      var arr = document.getElementsByClassName('setvalue');
      var brr = new Array('username1', '12345678', '12345678', 'username@domain.com', 'firstname', 'lastname');
      for(l=1;l<=arr.length;l++){
        arr[l-1].setAttribute('value', brr[l-1]);
      }
      break;
    case(val=='signin'):
      document.getElementsByClassName('setvalue')[0].value = username_back;
      break;
    default:
      break;
  }
}

function fn_getquerystring(field){
  var arr = window.location.href.split(/[\?\&]/gi).splice(1);
  var returnthisvalue = '';
  for(l=1;l<=arr.length;l++){
    var checkthis = arr[l-1];
    if(checkthis.search(field) > -1){
      returnthisvalue = checkthis.split(/[\=]/gi)[1];
    }
  }
  return returnthisvalue;
}

function fn_setvalidation_status(){
  var webtitle = document.title;
  switch(true){
    case(webtitle.search('signup') > -1):
      validation_signup_status = [0, 0, 0, 0, 0, 0];
      Object.seal(validation_signup_status);
      break;
    case(webtitle.search('login') > -1):
      validation_login_status = [0, 0];
      Object.seal(validation_login_status);
      break;
    default:
      break;
  }
}


var