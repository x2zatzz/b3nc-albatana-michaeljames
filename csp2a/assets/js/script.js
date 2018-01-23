fn_linkgen();
function fn_linkgen(){
  var tag_li = document.getElementsByTagName("li")
  for(i=1; i<=tag_li.length; i++){
    v_htmltext = tag_li[i-1].textContent;
    v_htmltext = v_htmltext.replace(' ','') + ".php";
    v_htmltext = v_htmltext.toLowerCase();
    v_htmltext = "window.location.href=\"" + v_htmltext + "\"";
    tag_li[i-1].setAttribute("onclick", v_htmltext);
  }
}

document.getElementById("snackbar").setAttribute("onchange", "fn_snackbar()");

function fn_snackbar(){
  document.getElementById("snackbar").style.height = "1em";
  document.getElementById("snackbar").style.background = "red";
}


document.getElementById("username").addEventListener("keypress", fn_ajax_validation);
function fn_ajax_validation(){
  var textretrieve = document.getElementById("username").value;
  console.log(textretrieve)
}