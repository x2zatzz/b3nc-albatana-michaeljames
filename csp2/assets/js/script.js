// LINK GENERATION
// var e1 = document.getElementsByTagName("li");
// for (i = 1; i !== e1.length; i++){
//   var1 = e1[i].textContent;
//   var1 = var1.replace(" ", "");
//   var1 = var1.toLowerCase();
//   var1 = var1 + ".php";
//   e1.setAttribute("onclick=\"window.location.href=''\"");
//   e1[i].addEventListener("click", fnLinks, false);
//   console.log(var1);
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
document.getElementById("avatar").onclick = function(){
  // this.style.background = "pink";
};

//TRIALS:
console.log(document.getElementsByClassName("interactive"));
selInteractive = document.getElementsByClassName("interactive");
var fooArr = [];
for(i = 1; i <= selInteractive.length; i++){
  fooArr.push(selInteractive[i-1].getAttribute("id"));
}
for(i=1; i<=selInteractive.length; i++){
  selInteractive[i-1].onhover = function(){
    this.style.opacity = 0.7;
  }
}

console.log(fooArr);


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
