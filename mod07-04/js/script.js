function changeBackgroundColor() {
  var newColor = document.getElementById("newBackgroundColor").value;
  // document.getElementById("mainWrapper").style.background = newColor;
  // document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
  
  switch(newColor) {
    case "red":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "orange":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "yellow":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "green":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "blue":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "indigo":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
    case "violet":
    document.getElementById("mainWrapper").style.background = newColor;
    document.getElementById("theMessage").innerHTML = "The color is: " + newColor;
    break;
  }

}