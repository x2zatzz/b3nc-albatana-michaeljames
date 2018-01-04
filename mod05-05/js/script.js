function getNum(){
  var theNum = parseInt(document.getElementById("num").value);
  var thePercent = parseInt(document.getElementById("percent").value);

  
  document.getElementById("show").innerHTML = theNum * thePercent;
}