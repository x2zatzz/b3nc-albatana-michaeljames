function runFunction(){
  // var sum = 0;
  // var sumEven = 0;
  // var sumOdd = 0;
  // while(x <= 50){
  //   sum += x;
  //   if(x % 2 == 0){
  //     sumEven += x;
  //   } else {
  //     sumOdd += x;
  //   }
  //   x++;
  //   console.log("x: " + x);
  //   console.log("sum: " + sum);
  //   console.log("sum even: " + sumEven);
  //   console.log("sum odd: " + sumOdd);
  // }

  // for(var x=0; x<= 50; x++){
  //   if(x%2 == 0){
  //     sumEven += x;
  //   } else if(x%2 !== 0){
  //     sumOdd += x;
  //   } else{
  //     sum += x;
  //   }
  // }

  // var message;
  // console.clear();
  // for(var x=0; x<=20; x++){
  //   if((x == 1)||(x == 0)) {
  //     console.log(x + " is multiple of every natural number")
  //   } else if((x % 3 == 0 ) && (x % 5 == 0)){
  //     console.log(x + " is a multiple by 3 and 5.");
  //   } else if((x % 3 == 0 ) && (x % 5 !== 0)){
  //     console.log(x + " is a multiple of 3 but NOT a multiple of 5.")
  //   } else if((x % 3 !== 0 ) && (x % 5 == 0)){
  //     console.log(x + " is NOT a multiple of 3 but is a multiple of 5.")
  //   } else{
  //     console.log(x + " is NOT a multiple of 3 and 5.")
  //   }
  // }  

  // alert("The sum of 0-50 is: " + sum + "." + "\n" + 
  //       "The sum of even numbers from 0-50 is: " + sumEven + "." + "\n" + 
  //       "The sum of odd numbers from 0-50 is: " + sumOdd + ".");
  // console.clear();
  
  document.getElementById("display").innerHTML = "";
  var character = "";
  for(i=1;i<=5;i++){
    character += " *";
    document.getElementById("display").innerHTML = character;
  }
}

function function04(){
  document.getElementById("activity_4").innerHTML = "";
  var character_4 = "";
  for(j=1; j<=5; j++){
    character_4 += " *<br>";
    document.getElementById("activity_4").innerHTML = character_4;
  }
}

function function05(){
  document.getElementById("activity_5").innerHTML ="";
  var getValue = 0;
  var character_5 = "";
  getValue = document.getElementById("inputNumber_05").value;
  if((Math.floor(getValue) == getValue)&&getValue>=0){
    for(j=1; j<=getValue; j++){
      character_5 += " *<br>";
      document.getElementById("activity_5").innerHTML = character_5;
    }
  } else{
    alert("Please enter only integers.");
  }
  
}

function function06(){
  document.getElementById("activity_06").innerHTML = "";
  var getValue_06 = 0;
  var character_06a = "";
  var character_06b = "";

  getValue_06 = document.getElementById("inputNumber_06").value;
  for(k=1; k<=getValue_06; k++){
    character_06a += "* ";
  }
  character_06a += "<br>";
  console.log(character_06a);
  for(j=1; j<=getValue_06; j++){
      character_06b += character_06a;
      document.getElementById("activity_06").innerHTML = character_06b;
    }
    
}