function fn_onload() {
  fn_navlink();
  fn_snackbar('onload');
  fn_eventtriggers();
  var validation_stats = new Array(5);
  validation_status = [0, 0, 0, 0, 0];
  Object.seal(validation_status);
}

function fn_navlink(){
  var arr = document.getElementsByClassName('navlink');
  var linkname = '';
  for(l=1;l<=arr.length;l++){
    linkname = arr[l-1].textContent.replace(' ','');
    linkname = linkname.toLowerCase()
    linkname = "window.location.href='index.php?webtitle=" + linkname + "'";
    arr[l-1].setAttribute('onclick', linkname);
  }
}

function fn_snackbar(trigger,color='gold'){
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
      console.log(color);
      setTimeout(function(){
        snackbar.setAttribute('hidden', '');
        snackbar.style.backgroundColor = 'gold';
      }, 3000);
      break;
    default:
      break;
  }
}
function fn_validation(id){
  document.getElementById(id).removeAttribute('onfocusout');
  var snackbar = document.getElementById('snackbar');
  switch(true){
    case(id == 'username'):
      validation_status[0] = 1;
      break;
    case(id == 'confirmpassword'):
      var password = document.getElementById('password');
      var confirmpassword = document.getElementById('confirmpassword');
      var password_val = password.value;
      var confirmpassword_val = confirmpassword.value;
      if(password_val == ""){
        snackbar.textContent = 'Passwords cannot contain blank fields.';
        password.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
        fn_snackbar('update', 'red');
        validation_status[1] = 0;
      } else if(password_val != confirmpassword_val){
        snackbar.textContent = 'Password does not match.';
        fn_snackbar('update','red');
        password.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
        validation_status[1] = 0;
      }
      else if(password_val == confirmpassword_val){
        snackbar.textContent = 'Password matched.';
        fn_snackbar('update','green');
        password.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
        validation_status[1] = 1;
      }
      break;
    case(id == 'email'):
      validation_status[2] = 1;
      break;
    case(id == 'firstname'):
      var firstname = document.getElementById('firstname');
      var firstname_val = firstname.value;
      if(firstname_val.search(/[^a-z\s]/gi) > 0){
        snackbar.textContent = 'Names cannot contain special characters or numbers';
        fn_snackbar('update', 'red');
        firstname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
        validation_status[3] = 0;
      } else if(firstname_val.search(/[^a-z\s]/gi) == -1){
        firstname.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
        validation_status[3] = 1;
      }
      break;
    case(id == 'lastname'):
      var lastname = document.getElementById('lastname');
      var lastname_val = lastname.value;
      if(lastname_val.search(/[^a-z\s]/gi) > 0){
        snackbar.textContent = 'Names cannot contain special characters or numbers';
        fn_snackbar('update', 'red');
        lastname.style.backgroundColor = 'hsla(0, 100%, 50%, 0.5)';
        validation_status[4] = 0;
      } else if(lastname_val.search(/[^a-z\s]/gi) == -1){
        lastname.style.backgroundColor = 'hsla(0, 0%, 20%, 0.5)';
        validation_status[4] = 1;
      }
      break;
    default:
      break;
  }
  for(l=1;l<=validation_status.length;l++){
    status = 0;
    console.log(validation_status[l-1]);
    // status = validation_status[l-1];
    status += parseInt(validation_status[l-1]);
    if(status == 1){
      document.getElementById('submitbutton').style.backgroundColor = 'hsla(120, 100%, 25%, 0.5)';
    } else{
      document.getElementById('submitbutton').style.backgroundColor = 'inherit';
    }
  }
  console.log(status);
  fn_eventtriggers(id)
  // setInterval(function(){fn_eventtriggers(id)},1000);
}

function fn_eventtriggers(id=''){
  if(id == ''){
    var arr = document.getElementsByClassName('validate');
    for(l=1;l<=arr.length;l++){
      value = 'fn_validation("' + arr[l-1].getAttribute('id') + '")';
      arr[l-1].setAttribute('onfocusout', value);
    }
  } else{
    mappedid = document.getElementById(id);
    value = 'fn_validation("' + mappedid.getAttribute('id') + '")';
    mappedid.setAttribute('onfocusout', value);
  }

}
