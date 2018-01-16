var j = 1;

function onloadScript(){
  for(i = 1; i <= 12; i++){
    document.getElementsByClassName("stanza")[i - 1].style.display = "none";
  }
  alert("Click to start singing");
}

document.getElementById("main").addEventListener("click", loadstanza, false);

function loadstanza(){
  if(j > 12){
    onloadScript();
    j = 1;
    console.log(j);
    return;
  }
  document.getElementsByClassName("stanza")[j - 1].style.display = "flex";

  j++;
}

// function simulateClick(){
//   document.getElementById("main").
// }