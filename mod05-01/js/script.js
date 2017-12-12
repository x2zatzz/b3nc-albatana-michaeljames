function hideAll(){
  document.getElementById("all").style.display = "none";
}
function showAll(){
  document.getElementById("all").style.display = "inline";
}
function changeContent(){
  document.getElementById("content").innerHTML = "maikeru";
}
function changeAttr(){
  document.getElementById("attr").height = "300";
}
function changeImg(){
  document.getElementById("attr").src = "img/image2.jfif";
}
function changeColor(){
  document.getElementById("css").style.color = "red";
}
function computeSum(){
  var a = document.getElementById("input1").value;
  var b = document.getElementById("input2").value;
  var sum = parseInt(a) + parseInt(b);
  document.getElementById("sum").innerHTML = sum;
}