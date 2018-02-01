fn_linkgen();
function fn_linkgen(){
  var tag_li = document.getElementsByTagName("li");
  for(i=1; i<=tag_li.length; i++){
    v_htmltext = tag_li[i-1].getAttribute("id");
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
var currentpage = window.location.pathname;
if(currentpage.search("signin.php") !== -1){
  document.getElementById("username").addEventListener("input", fn_username_validation);
  document.getElementById("password").setAttribute("disabled", "disabled");
} else if(currentpage.search("signup.php") !== -1){
  document.getElementById("username").addEventListener("input", fn_username_validation);
  document.getElementById("password").setAttribute("disabled", "disabled");
  document.getElementById("name").setAttribute("disabled", "disabled");
  document.getElementById("email").setAttribute("disabled", "disabled");
  document.getElementById("passwordconfirm").addEventListener("input", fn_password_validation);
  document.getElementById("passwordconfirm").addEventListener("focusout", fn_empty_snackbar);
  document.getElementById("passwordconfirm").setAttribute("disabled", "disabled");
}


else if(currentpage.search("users.php") !== -1 || currentpage.search("catalog.php" !== -1)){
  fn_modals();
} else{

}
function fn_modals(){
  var modal = document.getElementById("modal");
  var modalbutton = document.getElementById("modalbutton");
  var modalclose = document.getElementsByClassName("modal-close")[0];
  modalbutton.onclick = function(){
    modal.style.display = "block";
  };
  modalclose.onclick = function(){
    modal.style.display = "none";
    window.location.reload(true);
  };
  window.onclick = function(event){
    if(event.target == modal){
      modal.style.display = "none";
      window.location.reload(true);
    }
  };
}


// fn_async_validation();
// function fn_async_validation(){
//   new XMLHttpRequest().onreadystatechange = function(){
//     if(this.readyState == 4 && this.status == 200){
//       console.log('this function is working');
//     } else{}
//     // XMLHttpRequest().send;
//   }
//   console.log('this function is working');
// }

function fn_username_validation(){
  var username_entry = document.getElementById("username").value;
  if(username_entry == ""){
    document.getElementById("snackbarsmall").textContent = "empty username";
  } else if(isNaN(username_entry) == false) {
    document.getElementById("snackbarsmall").textContent = "invalid username";
  }
  // else if(true){
  // }
   else{
    document.getElementById("password").removeAttribute("disabled", "disabled");
    document.getElementById("passwordconfirm").removeAttribute("disabled", "disabled");
  }
}

function fn_password_validation(){
  var password_entry = document.getElementById("password").value;
  var passwordconfirm_entry = document.getElementById("passwordconfirm").value;

  if(password_entry == passwordconfirm_entry){
    document.getElementById("snackbarsmall").textContent = "password match";
    document.getElementById("name").removeAttribute("disabled", "disabled");
    document.getElementById("email").removeAttribute("disabled", "disabled");

  }
  else{
    document.getElementById("snackbarsmall").textContent = "password not match match";
  }
}

function fn_empty_snackbar(){
  document.getElementById("snackbarsmall").textContent = "";
}

function fn_onload(){
  var currentpath = window.location.href;

  if(currentpath.search("item-filter") === -1){
    window.location.href = "catalog.php?item-filter=all";
  } else{
    console.log("hello");
  }

}

function fn_addtocart(){
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function(){
    // if(this.readyState == 4 && this.status == 200){

    // }
    ajax.open("GET", "addtocart.php", true);
    ajax.send();
  }
}