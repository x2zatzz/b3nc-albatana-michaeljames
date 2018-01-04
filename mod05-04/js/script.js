var attemptNumber = 0;
var theNumber = 7;
var promptMessage = "Please enter a number..."
var userNum = 7;
function guessNumber(){
  console.log(attemptNumber);
  console.log(theNumber);
  console.log(promptMessage);
  while(attemptNumber !== 3){
    prompt(promptMessage,userNum);
    parseInt(userNum);
    console.log(userNum);
    if(userNum == theNumber){
      promptMessage = "You got it right!";
      attemptNumber = 0;
      break;
    } else if(userNum > theNumber){
      promptMessage = "Lower...";
      attemptNumber++;
    } else if(userNum < theNumber){
      promptMessage = "Higher...";
      attemptNumber++;
    } else{
      promptMessage = "That is not a number!";
      attemptNumber++;
    }
  }
  alert("GAME OVER!");
  attemptNumber = 0;

}
