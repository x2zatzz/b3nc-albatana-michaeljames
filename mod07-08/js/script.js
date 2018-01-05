function function01a(){
  for(var i=0; i <= 10 ; i++){
    if(i == 2){
      alert("This will BREAK!");
      break;
    }
    alert("The number is: " + i);
  }
}
function function01b(){
  for(var i=0; i <= 10 ; i++){
    if(i == 2){
      alert("This will CONTINUE!");
      continue;
    }
    alert("The number is: " + i);
  }
}
function function02(){
  text = "";
  for(var i = 1; i <= 100; i++){
    text += "マイケル<br>";
    if(i == 2){
      break;
    }
  }
  document.getElementById("myName").innerHTML = text;
}

function function03(){
  var text = "";
  var yourName = "マイケル";
  for(i = 1; i <= 3; i++){
    text += yourName + "<br>";
  }
  document.getElementById("f3display").innerHTML = text;
  
}

function function04(theName, targetElement){
  var text = "";
  for(i = 1; i <= 3; i++){
    text += theName + "<br>";
  }
  document.getElementById(targetElement).innerHTML = text;
}

function function05(number1, number2){
  var sum = number1 + number2;
  return sum;
}
function function05a(){
  document.getElementById("f5display").innerHTML = "the sum is: " + function05(2,1);
}
