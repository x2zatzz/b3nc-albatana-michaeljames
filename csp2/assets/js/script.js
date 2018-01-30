<<<<<<< HEAD
// LINK GENERATION
var e1 = document.getElementsByTagName("li");
for (i = 1; i !== e1.length; i++){
  var1 = e1[i].textContent;
  var1 = var1.replace(" ", "");
  var1 = var1.toLowerCase();
  var1 = var1 + ".php";
  e1.setAttribute("onclick=\"window.location.href=''\"");
  e1[i].addEventListener("click", fnLinks, false);
  console.log(var1);
}
function fnLinks(){
  for(i = 1; i !== e1.length; i++) {
  }
}
=======

// var nodeSnackbar = document.getElementById('snackbar');
// var callback = function(mutationsList){
//   for(var mutation of mutationsList){
//     if(mutation.type == 'attributes'){
//       nodeSnackbar.style.background = 'gray';
//     }
//   }
// }
>>>>>>> parent of 72d89c3... updated main project folder
