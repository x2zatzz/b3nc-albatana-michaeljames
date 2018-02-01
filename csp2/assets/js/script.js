// LINK GENERATION
// var tgtarray = document.getElementsByClassName("interactive");
// console.log(arraylength);
// for(i=1; i<=tgtarray.length; i++){
//   tgtarray[i-1].addEventListener("onclick", function(){
//     var tgtstring =
//     tgtarray[i-1].setAttribute("id", tgtstring);
//   })
// }

// var nodeSnackbar = document.getElementById('snackbar');
// var callback = function(mutationsList){
//   for(var mutation of mutationsList){
//     if(mutation.type == 'attributes'){
//       nodeSnackbar.style.background = 'gray';
//     }
//   }
// }

//INTERACTIVE ELEMENTS:
// document.getElementById("avatar").onclick = function(){
//   // this.style.background = "pink";
// };

//TRIALS ========================================
// console.log(document.getElementsByClassName("interactive"));
// var a = document.getElementsByClassName("interactive");
// var s = "";
// for(i = 1; i <= a.length; i++){
//   s = "fn_" + a[i-1].getAttribute("id");
//   a[i-1].onclick = function(){
//     window.location.href = s + ".php";
//   };
// }
// for(i=1; i<=a.length; i++){
//   a[i-1].onhover = function(){
//     this.style.color = "gray";
//   };
// }

// fn_logo(){

// }


var charset_alphasml = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
var charset_alphacap = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
var charset_num = "1234567890";
var charset_sym1 = "`~!@#$%^&*()[]{}'\",<.>/?=+\\|-_;:";

function trim_str_alphas(foo){
  switch(tgt_string, mode){
    case "alpha":
      tgt_string.replace("");
      break;
    case "numeric":
      break;
    case "symbols":
      break;
    default:
  }
}

a = document.getElementsByClassName("interactive");
for(i=1; i<=a.length; i++){
  a[i-1].addEventListener("mouseover", function(){
    m = "window.location.href='" + this.getAttribute("id") + ".php'";
    this.setAttribute("onclick", m);
  });
  a[i-1].addEventListener("mouseout", function(){
    this.removeAttribute("onclick");
  });

}

function fn_trial(){
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("ajaxtrial").innerHTML = this.responseText;
    }
  };
  // ajax.open("GET","ajax_info.txt", true);
  ajax.open("POST", "runthis.php", true);
  ajax.send();

}