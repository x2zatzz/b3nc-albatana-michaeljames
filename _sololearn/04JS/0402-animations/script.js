var t = setInterval(move,5);

var pos = 0;
var box = document.getElementById("box");

function move(){
  if(pos >= 150){
    clearInterval(t);
  } else{
    console.log(pos);
    pos += 1;
    box.style.left = pos+"px";

  }
}
console.log("consolation");

document.getElementById("box").onclick = function() {
  var whatColor = this.style.background;
  console.log(whatColor);
  if(whatColor == "orange"){
    this.style.background = "blue";
    console.log("blue");
  }
  else{
    this.style.background = "orange";
  }
}

window.onload = function(){
  var heading = document.createElement("h1");
  var heading_text = document.createTextNode("Big Head!!");
  heading.appendChild(heading_text);
  document.body.appendChild(heading);
}