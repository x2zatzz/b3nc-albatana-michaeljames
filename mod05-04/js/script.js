var attemptNumber = 0;
function guessNumber(){
  var userNumber;
  var theNumber = 7;
  
  while(attemptNumber !== 3){
    prompt(userNumber);
    if(userNumber == theNumber){
      document.getElementById("display").innerHTML = "You got it right!";
      document.getElementById("display").style.color = "green";
      attemptNumber = 0;
    } else if(userNumber > theNumber){
      document.getElementById("display").innerHTML = "Lower...";
      document.getElementById("display").style.color = "orange";
      attemptNumber++;
    } else if(userNumber < theNumber){
      document.getElementById("display").innerHTML = "Higher...";
      document.getElementById("display").style.color = "orange";
      attemptNumber++;
    } else{
      userNumber *= 1;
      document.getElementById("display").innerHTML = "That is not a number!";
      document.getElementById("display").style.color = "red";
      attemptNumber++;
    }
  }
  alert("GAME OVER!");
  
}

function reset(){
  
}