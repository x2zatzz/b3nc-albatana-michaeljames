// var attemptNumber = 0;
// var theNumber = 7;
// var promptMessage = "Please enter a number..."
// var userNum = 7;
// function guessNumber(){
//   console.log(attemptNumber);
//   console.log(theNumber);
//   console.log(promptMessage);
//   while(attemptNumber !== 3){
//     prompt(promptMessage,userNum);
//     parseInt(userNum);
//     console.log(userNum);
//     if(userNum == theNumber){
//       promptMessage = "You got it right!";
//       attemptNumber = 0;
//       break;
//     } else if(userNum > theNumber){
//       promptMessage = "Lower...";
//       attemptNumber++;
//     } else if(userNum < theNumber){
//       promptMessage = "Higher...";
//       attemptNumber++;
//     } else{
//       promptMessage = "That is not a number!";
//       attemptNumber++;
//     }
//   }
//   alert("GAME OVER!");
//   attemptNumber = 0;
// }

function guessNumber(){
  var inputNumberA;
  var inputNumberB;
  var attempts = 0;
  var magicNumber = 7;
  while(attempts <= 3){
    prompt("please enter an integer",inputNumberA);
    inputNumberB = inputNumberA;
    inputNumberA = parseInt(inputNumberA);
    inputNumberB = parseInt(inputNumberB);
    magicNumber = parseInt(magicNumber);
    console.log(inputNumberA);
    console.log(inputNumberB);
    console.log(magicNumber);
    console.log(attempts);
    if(inputNumberB == magicNumber){
      attempts = 0;
      alert("you got it right!");
    } else if(inputNumberB < magicNumber){
      attempts++;
      alert("higher please..");
    } else if(inputNumberB > magicNumber){
      alert("lower please...");
      attempts++;
    } else{
      alert("there is something wrong with your input...");
      attempts++;
    }
  }
  attempts =0;
  alert("GAME OVER!");
}