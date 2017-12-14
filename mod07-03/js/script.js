function identifyThis() {
  var num = parseInt(document.getElementById("number-input").value);
  if(num % 2 == 0) {
    if(num == 0) {
      document.getElementById("theMessage").innerHTML = "It is a zero.";
      document.getElementById("mainWrapper").style.background = "gray";
    }
    document.getElementById("theMessage").innerHTML = "It is an even number.";
    document.getElementById("mainWrapper").style.background = "blue";
  } else {
    document.getElementById("theMessage").innerHTML = "It is an odd number.";
    document.getElementById("mainWrapper").style.background = "yellow";
  }
}