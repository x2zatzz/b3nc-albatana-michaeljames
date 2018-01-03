// var arr = document.getElementsByClassName("class3");
// for(var i = 0; i < arr.length; i++){
// }
// var why = document.getElementById("enclose").firstElementChild;
// console.log(why);
// why.innerHTML = "HOW";

// var target = document.getElementsByClassName("class3")[2];
// console.log(target);

// var subtarget = target.childNodes;
// console.log(subtarget);

// var target = document.getElementsByClassName("class3")[1].childNodes;
// var target2 = document.getElementsByClassName("class2")[0].hasChildNodes();
// console.log(target2);
// // document.getElementsByClassName("class3")[1].childNodes.style.background = "orange";
// console.log(target);
// for(var i = 0; i < target.length; i++){
//   target[i].innerHTML = "jeimuzu";
// }


// for(var j = 0; j < target.length; j++){
//   target[j].innerHTML = "maikeru";
//   target[j].style.background = "red";
// }


// var data = ["a", "e", "i", "o", "u"];
// data.splice(2, 1);
// console.log(data);

function runTheFunction(){
  var nodeText = document.createTextNode("the text is here");
  document.getElementById("function").appendChild(nodeText);
}

function runThatFunction2(){
  var createElement = document.createElement("h1");
  document.getElementById("function2").appendChild(createElement);
}

function runThatFunction3(){
  var parentTarget = document.getElementById("function3");
  console.log(parentTarget);
  var childTarget = document.getElementById("function3").getElementsByTagName("h1")[0];
  console.log(childTarget);
  parentTarget.removeChild(childTarget);
}

function runThatFunction4(){
  var childTarget2 = document.getElementById("function4").getElementsByTagName("span")[0];
  childTarget2.parentNode.removeChild(childTarget2);
  var counter = document.getElementById("function4").childElementCount;
  console.log(counter);
}

function runThatFunction5(){
  var function5target = document.getElementById("function5").getElementsByClassName("box")[0];
  var function5new = document.createElement("h2");
  document.getElementById("function5").replaceChild(function5new, function5target);
}
