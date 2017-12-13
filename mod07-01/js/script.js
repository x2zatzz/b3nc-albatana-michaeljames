function changeValueA() {
  var x = 101;
  document.getElementById("firstVar").innerHTML = x;
}

function changeValueB() {
  var name = "maikeru-san";
  document.getElementById("secondVar").innerHTML = name;
}

function changeValueC() {
  var message = "Welcome to the JavaScript programming";
  document.getElementById("thirdVar").innerHTML = message;
}

var var1 = 0;
var var2 = 0;

document.getElementById("var1").value = 0;
document.getElementById("var2").value = 0;


function varAdd() {
  var1 = parseInt(document.getElementById("var1").value);
  var2 = parseInt(document.getElementById("var2").value);
  result = var1 + var2;
  document.getElementById("result").innerHTML = result;
}
function varSub() {
  var1 = parseInt(document.getElementById("var1").value);
  var2 = parseInt(document.getElementById("var2").value);
  result = var1 - var2;
  document.getElementById("result").innerHTML = result;
}
function varMult() {
  var1 = parseInt(document.getElementById("var1").value);
  var2 = parseInt(document.getElementById("var2").value);
  result = var1 * var2;
  document.getElementById("result").innerHTML = result;
}
function varDiv() {
  var1 = parseInt(document.getElementById("var1").value);
  var2 = parseInt(document.getElementById("var2").value);
  result = var1 / var2;
  document.getElementById("result").innerHTML = result;
}
function varMod() {
  var1 = parseInt(document.getElementById("var1").value);
  var2 = parseInt(document.getElementById("var2").value);
  result = var1 % var2;
  document.getElementById("result").innerHTML = result;
}