function getNum(){
  var theNum = parseInt(document.getElementById("num").value);
  var thePercent = parseInt(document.getElementById("percent").value);

  if (theNum * thePercent == 0) {
    alert("Please provide information on the fields.");
    theNum = "";
    thePercent = "";
  } else if (isNaN(theNum * thePercent) == true){
    alert("The information you provided contains non-numerical value");
    theNum = "";
    thePercent = "";
  } else{
    document.getElementById("show").innerHTML = theNum * thePercent * 0.01;
  }
}