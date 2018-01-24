fn_linkgen();
function fn_linkgen(){
  var tag_li = document.getElementsByTagName("li");
  for(i=1; i<=tag_li.length; i++){
    v_htmltext = tag_li[i-1].textContent;
    v_htmltext = v_htmltext.replace(' ','') + ".php";
    v_htmltext = v_htmltext.toLowerCase();
    v_htmltext = "window.location.href=\"" + v_htmltext + "\"";
    tag_li[i-1].setAttribute("onclick", v_htmltext);
  }
}

document.getElementById("snackbar").addEventListener("change", fn_snackbar);

function fn_snackbar(){
  document.getElementById("snackbar").style.height = "1em";
  document.getElementById("snackbar").style.background = "red";
}


// VALIDATiONS

document.getElementById("password").setAttribute("disabled", "disabled");
document.getElementById("passwordconfirm").setAttribute("disabled", "disabled");
document.getElementById("name").setAttribute("disabled", "disabled");
document.getElementById("email").setAttribute("disabled", "disabled");
document.getElementById("username").addEventListener("input", fn_username_validation);
function fn_username_validation(){
  var username_entry = document.getElementById("username").value;
  if(username_entry == ""){
    document.getElementById("snackbarsmall").textContent = "empty username";
  } else if (isNaN(username_entry) == false) {
    document.getElementById("snackbarsmall").textContent = "invalid username";
  } else{
    document.getElementById("password").removeAttribute("disabled", "disabled");
    document.getElementById("passwordconfirm").removeAttribute("disabled", "disabled");
  }
}

document.getElementById("passwordconfirm").addEventListener("input", fn_password_validation);
function fn_password_validation(){
  var password_entry = document.getElementById("password").value;
  var passwordconfirm_entry = document.getElementById("passwordconfirm").value;

  if(password_entry == passwordconfirm_entry){
    document.getElementById("snackbarsmall").textContent = "password match";
  }
  else{
    document.getElementById("snackbarsmall").textContent = "password not match match";
  }
}

document.getElementById("passwordconfirm").addEventListener("focusout", fn_empty_snackbar);
function fn_empty_snackbar(){
  document.getElementById("snackbarsmall").textContent = "";
}


